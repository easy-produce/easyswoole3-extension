<?php

namespace App\Module\Ops\Dao;

use App\Module\Ops\Model\ProcessModel;

/**
 * @author z
 * @description 【运维-进程dao】
 */
class ProcessDao extends BaseOpsDao
{
    function __construct()
    {
        $this->setModel(new ProcessModel());
    }

      // 完整原生SQL DEMO
//    private function demo()
//    {
//        $sql = "SELECT
//                  process.id,
//                  process.build_id,
//                  process.pid,
//                  process.name,
//                  process.status,
//                  process.type,
//                  process.ping_time,
//                  process.pong_time,
//                  process.start_time,
//                  process.memory_usage,
//                  process.memory_peak_usage,
//                  process.remark,
//                  process.update_time,
//                  process.create_time,
//                  process.delete_flg
//              FROM
//                  ops_process process
//              WHERE
//                  process.delete_flg = 0";
//
//        return $this->query($sql);
//    }

    /**
     * 获取ProcessModel
     * @return ProcessModel
     */
    public function getModel(): ProcessModel
    {
        return $this->model;
    }
}
