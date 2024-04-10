<?php

namespace App\Module\Basic\Model;

use Es3\Base\Model;

class OwnerModel extends Model
{
    /** 数据库表名 */
    protected $tableName = 'asal_owner';

    protected $autoTimeStamp = 'datetime';

//    protected $createTime = 'create_time';
        
//    protected $updateTime = 'update_time';
}