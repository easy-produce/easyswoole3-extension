<?php

namespace App\Module\Ops\Service;

use App\Constant\ResultConst;
use App\Module\Ops\Dao\CrontabDao;
use App\Module\Ops\Model\CrontabModel;
use App\Module\Ops\Model\PingModel;

/**
 * @author z
 * @description 【运维-定时任务service】
 */
class CrontabService extends BaseOpsService
{
    function __construct()
    {
        $this->setDao(new CrontabDao());
    }

    /**
     * 获取CrontabDao
     * @return CrontabDao
     */
    public function getDao(): CrontabDao
    {
        return $this->dao;
    }

    public function initialize(int $buildId)
    {
        $nList = [];

        /** 防止缓存击穿 */
        $crontab = $this->getDao()->get(['build_id' => $buildId]);
        if ($crontab instanceof CrontabModel && !superEmpty($crontab)) {
            return;
        }

        /** 初始化数据 */
        $table = \EasySwoole\EasySwoole\Crontab\Crontab::getInstance()->schedulerTable();
        foreach ($table as $name => $crontabInfo) {

            $nList[] = [
                'build_id' => $buildId,
                'name' => $name,
                'start_time' => getServerRunTime(),
                'rule' => $crontabInfo['taskRule'] ?? null,
                'run_times' => $crontabInfo['taskRunTimes'] ?? null,
                'next_run_time' => date('Y-m-d H:i:s', $crontabInfo['taskNextRunTime']),
                'current_run_time' => $crontabInfo['taskCurrentRunTime'] ?? null,
                'stop_flg' => $crontabInfo['isStop'] ?? null,
            ];
        }

        // 获取最后入库Id
        $this->getDao()->insertAll($nList);
    }

    /**
     * 定时任务是否已初始化
     * @param $buildId
     * @return bool
     * @throws \EasySwoole\Redis\Exception\RedisException
     * @throws \Es3\Exception\ErrorException
     * @throws \Es3\Exception\InfoException
     */
    public function crontabIsInitialize($buildId): bool
    {
        /** 命中缓存 */
        $redis = redisInstance();
        $cacheKey = redisKey('ops_crontab', $buildId);
        $data = $redis->get($cacheKey);
        if ($data) {
            return true;
        }

        /** 命中DB */
        $crontabList = $this->getDao()->getAll(['build_id' => $buildId])[ResultConst::RESULT_LIST_KEY] ?? null;
        if (superEmpty($crontabList)) {
            return false;
        }

        /** 写缓存 */
        $redis->set($cacheKey, $buildId, 86400);
        return true;
    }

    /**
     * @return void
     * @throws \EasySwoole\ORM\Exception\Exception
     * @throws \EasySwoole\Redis\Exception\RedisException
     * @throws \Es3\Exception\ErrorException
     * @throws \Es3\Exception\InfoException
     */
    public function storage()
    {
        $crontabList = [];

        /** 心跳更新 */
        $pingList = PingModel::getInstance()->crontabGetALl('ping');
        $crontabList = array_merge($crontabList, $pingList);

        /** 异常更新 */
        $exceptionList = PingModel::getInstance()->crontabGetALl('exception');
        $crontabList = array_merge($crontabList, $exceptionList);

        foreach ($crontabList as $key => $crontab) {

            /** 关键信息是否缺失 */
            $name = $crontab['name'] ?? null;
            if (superEmpty($name)) {
                continue;
            }

            /** 获取buildId */
            $buildService = new BuildService();
            $build = $buildService->getBuildByServer();
            if (superEmpty($build)) {
                continue;
            }

            /** 更新 */
            $where = ['name' => $name, 'build_id' => $build->getAttr('id')];
            $this->getDao()->updateField($where, $crontab);
        }
    }
}
