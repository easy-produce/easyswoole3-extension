<?php

namespace App\Module\Ops\Service;

use App\Module\Ops\Dao\BuildDao;
use App\Module\Ops\Model\BuildModel;
use App\Module\Ops\Util\ServerUtil;
use function PHPUnit\Framework\containsEqual;

/**
 * @author z
 * @description 【运维-构建service】
 */
class BuildService extends BaseOpsService
{
    function __construct()
    {
        $this->setDao(new BuildDao());
    }

    /**
     * 获取BuildDao
     * @return BuildDao
     */
    public function getDao(): BuildDao
    {
        return $this->dao;
    }

    public function initialize()
    {
        $data = [
            'server_type' => getServerType(),
            'server_temp_name' => getServerTempName(getServerType()),
            'server_ip' => getServerIp(),
            'start_time' => getServerRunTime(),
        ];

        /** 兼容已存在情况 */
        $build = $this->getDao()->get($data);
        if (!superEmpty($build)) {
            return;
        }

        /** 初始化数据 */
        $this->getDao()->save($data);
    }

    /**
     * @return void
     * @throws \Es3\Exception\ErrorException|\Es3\Exception\InfoException
     * @throws \EasySwoole\ORM\Exception\Exception
     * @throws \EasySwoole\Redis\Exception\RedisException
     */
    public function getBuildByServer(): ?BuildModel
    {
        /** redis */
        $redis = redisInstance();

        /** 查询条件 */
        $query = [
            'server_type' => getServerType(),
            'server_temp_name' => getServerTempName(getServerType()),
            'server_ip' => getServerIp(),
            'start_time' => getServerRunTime(),
        ];

        /** 先从缓存获取数据 */
        $field = jsonEncode($query);
        $cacheKey = redisKey('ops_build', $field);

        $data = $redis->get($cacheKey);
        if (!superEmpty($data)) {
            return new BuildModel(json_decode($data, true));
        }

        /** 数据库获取数据 */
        $build = $this->getDao()->getBuildByServer($query);
        if (superEmpty($build)) {
            return null;
        }

        /** 入缓存 */
        $data = $build->toArray();
        $redis->set($cacheKey, jsonEncode($data), 86400);

        return $build;
    }
}
