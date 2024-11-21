<?php

namespace App\Module\Ops\Model;

/**
 * @author z
 * @description 【运维-构建model】
 */
class BuildModel extends BaseOpsModel
{
    /** 数据库表名 */
    protected $tableName = 'ops_build';

    protected $autoTimeStamp = 'datetime';

    protected $createTime = 'create_time';

    protected $updateTime = 'update_time';
}