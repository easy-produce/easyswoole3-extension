<?php

namespace App\Module\Ops\Service;

use App\Constant\ResultConst;
use App\Module\Ops\Dao\ProcessDao;
use App\Module\Ops\Model\PingModel;
use App\Module\Ops\Model\ProcessModel;
use App\Module\Ops\Util\ServerUtil;
use App\Module\Ops\Util\StringUtil;
use EasySwoole\Component\Process\Manager;

/**
 * @author z
 * @description 【运维-进程service】
 */
class ProcessService extends BaseOpsService
{
    function __construct()
    {
        $this->setDao(new ProcessDao());
    }

    /**
     * 获取ProcessDao
     * @return ProcessDao
     */
    public function getDao(): ProcessDao
    {
        return $this->dao;
    }

    /**
     * 心跳落地
     * @return void
     * @throws \EasySwoole\ORM\Exception\Exception
     * @throws \EasySwoole\Redis\Exception\RedisException
     * @throws \Es3\Exception\ErrorException
     * @throws \Es3\Exception\InfoException
     */
    public function storage()
    {
        $processList = [];

        /** 心跳更新 */
        $pingList = PingModel::getInstance()->processGetALl('ping');
        $processList = array_merge($processList, $pingList);

        /** 异常更新 */
        $exceptionList = PingModel::getInstance()->processGetALl('exception');
        $processList = array_merge($processList, $exceptionList);

        /** 进程结束更新 */
        $shutdownList = PingModel::getInstance()->processGetALl('shutdown');
        $processList = array_merge($processList, $shutdownList);

        foreach ($processList as $key => $process) {

            /** 关键信息是否缺失 */
            $pid = $process['pid'] ?? null;
            if (superEmpty($pid)) {
                continue;
            }

            /** 获取buildId */
            $buildService = new BuildService();
            $build = $buildService->getBuildByServer();
            if (superEmpty($build)) {
                continue;
            }

            $where = [
                'pid' => $pid,
                'build_id' => $build->getAttr('id'),
            ];

            $this->getDao()->updateField($where, $process);
        }
    }

    public function initialize(int $buildId)
    {
        $nList = [];

        /** 防止缓存击穿 */
        $process = $this->getDao()->get(['build_id' => $buildId]);
        if ($process instanceof ProcessModel && !superEmpty($process)) {
            return;
        }

        /** 初始化数据 */
        $table = \EasySwoole\Component\Process\Manager::getInstance()->getProcessTable();
        foreach ($table as $pid => $processInfo) {

            $groupName = $processInfo['group'];
            $processName = $processInfo['name'];

            /** 过滤一些进程 */
            $filterList = ['.produce.Bridge', '.Render', '.produce.Worker', 'produce.Crontab', '.produce.TaskWorker', '.FastCacheProcess'];
            $isFilter = StringUtil::strPosArray($groupName, $filterList);
            if ($isFilter) {
                continue;
            }

            $nList[] = [
                'build_id' => $buildId,
                'pid' => $pid,
                'name' => $processName,
                'type' => $groupName,
                'status' => 'UNKNOWN',
                'memory_usage' => $processInfo['memoryUsage'],
                'memory_peak_usage' => $processInfo['memoryPeakUsage'],
                'start_time' => date('Y-m-d H:i:s', $processInfo['startUpTime']),
                'hash' => $processInfo['hash'],
            ];
        }

        // 获取最后入库Id
        $this->getDao()->insertAll($nList);

    }

    /**
     * @param int $buildId
     * @return void
     * @throws \EasySwoole\Redis\Exception\RedisException
     * @throws \Es3\Exception\ErrorException
     * @throws \Es3\Exception\InfoException
     */
    public function processIsInitialize(int $buildId): bool
    {
        /** 命中缓存 */
        $redis = redisInstance();
        $cacheKey = redisKey('ops_process', $buildId);
        $data = $redis->get($cacheKey);
        if ($data) {
            return true;
        }

        /** 命中DB */
        $processList = $this->getDao()->getAll(['build_id' => $buildId])[ResultConst::RESULT_LIST_KEY] ?? null;
        if (superEmpty($processList)) {
            return false;
        }

        /** 写缓存 */
        $redis->set($cacheKey, $buildId, 86400);
        return true;
    }
}
