<?php

namespace App\Module\Ops\Dao;

use App\Module\Ops\Model\CrontabModel;

/**
 * @author z
 * @description 【运维-定时任务dao】
 */
class CrontabDao extends BaseOpsDao
{
    function __construct()
    {
        $this->setModel(new CrontabModel());
    }

      // 完整原生SQL DEMO
//    private function demo()
//    {
//        $sql = "SELECT
//                  crontab.id,
//                  crontab.build_id,
//                  crontab.name,
//                  crontab.ping_time,
//                  crontab.start_time,
//                  crontab.rule,
//                  crontab.run_times,
//                  crontab.next_run_time,
//                  crontab.current_run_time,
//                  crontab.stop_flg,
//                  crontab.remark,
//                  crontab.update_time,
//                  crontab.create_time,
//                  crontab.delete_flg
//              FROM
//                  ops_crontab crontab
//              WHERE
//                  crontab.delete_flg = 0";
//
//        return $this->query($sql);
//    }

    /**
     * 获取CrontabModel
     * @return CrontabModel
     */
    public function getModel(): CrontabModel
    {
        return $this->model;
    }
}
