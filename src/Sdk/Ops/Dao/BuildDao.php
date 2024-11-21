<?php

namespace App\Module\Ops\Dao;

use App\Module\Ops\Model\BuildModel;

/**
 * @author z
 * @description 【运维-构建dao】
 */
class BuildDao extends BaseOpsDao
{
    function __construct()
    {
        $this->setModel(new BuildModel());
    }

    public function getBuildByServer(array $where): ?BuildModel
    {
        return $this->get($where);
    }



    // 完整原生SQL DEMO
//    private function demo()
//    {
//        $sql = "SELECT
//                  build.id,
//                  build.server_ip,
//                  build.server_type,
//                  build.server_temp_name,
//                  build.start_time,
//                  build.remark,
//                  build.update_time,
//                  build.create_time,
//                  build.delete_flg
//              FROM
//                  ops_build build
//              WHERE
//                  build.delete_flg = 0";
//
//        return $this->query($sql);
//    }

    /**
     * 获取BuildModel
     * @return BuildModel
     */
    public function getModel(): BuildModel
    {
        return $this->model;
    }
}
