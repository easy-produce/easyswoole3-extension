<?php

namespace App\Module\Callback\Dao;

use App\Constant\ResultConst;
use App\Module\Callback\CallbackConstant;
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
    public function taskList(array $status, string $level): array
    {
        $status = strtoupper(implode("','", $status));
        $level = strtoupper($level);
        $maxRetryCount = CallbackConstant::MAX_RETRY_COUNT; // 常规任务的最大执行次数

        # 条件1: 没有配置请求次数的是、请求次数是0的、请求次数是永久的(-1)、请求次数没有超过30的
        # OR task.retry_count = -1  # 3个高低中队列只处理常规任务，也就是30次以内的， 超过30次的全部在失败队列处理
        # 条件2: 配置了请求次数的 并且当前请求次数小于 请求上限

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
                task.`interceptor_request`,
                task.`interceptor_response`,
                task.`request_count`,
                task.`status`,
                task.`create_time`,
                task.`request_duration`,
                #task.`env`,
                system.system_name,
                #system.request_header,
                `system`.domain,
                `system`.response_success_value,
                `system`.response_key_msg,
                `system`.response_key_code,
                `system`.response_success_condition,
                `system`.`env`,
                task.`retry_count` 
            FROM
                `callback_task` task
                LEFT JOIN `callback_system` `system` ON task.system_id = system.id 
            WHERE
                task.`status` IN ( '$status' )
                AND  task.`level` IN  ( '$level' )
                AND `system`.`env` = '{$env}'
                AND (
                        (task.retry_count IS NULL OR task.retry_count = 0 OR task.retry_count =-1 ) AND task.request_count <= {$maxRetryCount} 
                        OR
                        (task.retry_count > 0 AND task.request_count <= task.retry_count)
                    )
            ORDER BY task.sort DESC , task.request_count ASC";

        $list = $this->query($sql);
        return $list;
    }

    public function taskListFail(array $status): array
    {
        $status = strtoupper(implode("','", $status));

        $maxRetryCount = CallbackConstant::MAX_RETRY_COUNT; // 常规任务的最大执行次数

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
                `system`.domain,
                `system`.response_success_value,
                `system`.response_key_msg,
                `system`.response_key_code,
                `system`.response_success_condition,
                `system`.`env`,
                task.`retry_count` 
            FROM
                `callback_task` task
                LEFT JOIN `callback_system` `system` ON task.system_id = system.id 
            WHERE
                task.`status` IN ( '$status' )
                AND `system`.`env` = '{$env}' 
                AND  task.retry_count =-1
                AND task.request_count > {$maxRetryCount}
            ORDER BY task.sort DESC , task.request_count ASC";

        $list = $this->query($sql);
        return $list;
    }

    /**
     * 归档数据清理
     */
    public function taskClear()
    {
        $day = CallbackConstant::TASK_SAVE_DAY;

        $sql = "DELETE
                FROM callback_task
                WHERE `status` = 'SUCCESS'
                AND create_time < DATE_SUB(CURDATE(), INTERVAL {$day} DAY)";

        $list = $this->exec($sql);
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
