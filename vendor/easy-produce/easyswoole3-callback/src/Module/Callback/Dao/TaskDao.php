<?php

namespace App\Module\Callback\Dao;

use App\Constant\ResultConst;
use App\Module\Callback\Model\TaskModel;
use EasySwoole\Mysqli\QueryBuilder;

class TaskDao extends BaseCallbackDao
{
    public function __construct()
    {
        $this->setModel(new TaskModel());
    }

    /**
     * 获取发送任务列表
     * @param array $status
     * @param bool $isAsync true 异步任务 false 同步任务
     * @return array
     */
    public function taskList(array $status): array
    {
        $status = implode("','", $status);

        $env = strtoupper(env());
        $sql = "SELECT
                task.`id`,
                task.`task_code`,
                # task.`domain`,
                task.`path`,
                task.`request_header`,
                task.`request_method`,
                task.`request_type`,
                task.`request_param`,
                task.`request_count`,
                task.`status`,
                task.`create_time`,
                task.`request_duration`,
                #task.`env`,
                system.system_name,
                #system.request_header,
                system.domain,
                system.response_success_value,
                system.response_key_msg,
                system.response_key_code,
                system.response_success_condition,
                system.`env`,
                task.`retry_count` 
            FROM
                `callback_task` task
                LEFT JOIN `callback_system` system ON task.system_id = system.id 
            WHERE
                task.`status` IN ( '$status' )
                AND system.`env` = '{$env}'
                AND (
                        (task.retry_count IS NULL OR task.retry_count = 0) AND task.request_count <= 30
                        OR 
                        task.retry_count = -1
                        OR 
                        (task.retry_count > 0 AND task.request_count <= task.retry_count)
                    )
            ORDER BY task.sort DESC , task.request_count ASC";

        $list = $this->query($sql);
        return $list;
    }

    /**
     * model
     * @return TaskModel
     */
    public function getModel(): TaskModel
    {
        return $this->model;
    }
}
