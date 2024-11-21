<?php

namespace App\Module\Ops\Model;

/**
 * @author z
 * @description 【运维-定时任务model】
 */
class CrontabModel extends BaseOpsModel
{
    /** 数据库表名 */
    protected $tableName = 'ops_crontab';

    protected $autoTimeStamp = 'datetime';

    protected $createTime = 'create_time';

    protected $updateTime = 'update_time';
}