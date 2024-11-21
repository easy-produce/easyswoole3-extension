<?php

namespace App\Module\Ops\Model;

/**
 * @author z
 * @description 【运维-进程model】
 */
class ProcessModel extends BaseOpsModel
{
    /** 数据库表名 */
    protected $tableName = 'ops_process';

    protected $autoTimeStamp = 'datetime';

    protected $createTime = 'create_time';

    protected $updateTime = 'update_time';
}