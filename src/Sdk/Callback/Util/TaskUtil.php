<?php

namespace App\Module\Callback\Util;

use App\Module\Callback\CallbackConstant;
use App\Module\Callback\Dao\TaskDao;
use App\Module\Callback\Model\TaskModel;
use App\Module\Callback\Service\TaskService;

class TaskUtil
{
    /**
     * 获取任务
     * @return void
     */
    public static function taskList(array $status, string $level): array
    {
        /** 查询数据库，获得需要发送的消息 */
        $taskDao = new TaskDao();

        /** 获取未推送的任务 */
        $taskList = $taskDao->taskList($status, $level) ?? [];
        return array_chunk($taskList, 10) ?? [];
    }

    public static function taskListFail(array $status): array
    {
        /** 查询数据库，获得需要发送的消息 */
        $taskDao = new TaskDao();

        /** 获取未推送的任务 */
        $taskList = $taskDao->taskListFail($status) ?? [];
        return array_chunk($taskList, 10) ?? [];
    }


    /**
     * 执行
     * @return void
     */
    public static function run(?array $chunkedTaskList, string $level)
    {
        /** 调度任务执行 */
        foreach ($chunkedTaskList as $key => $tasks) {

            /** 异步处理 */
            $ret = [];
            $wait = new \EasySwoole\Component\WaitGroup();

            foreach ($tasks as $key => $task) {

                /** 任务限流 */
                if ($level == 'LOW') {
                    usleep(CallbackConstant::LIMIT_LEVEL_LOW);
                }

                if ($level == 'CENTER') {
                    usleep(CallbackConstant::LIMIT_LEVEL_CENTER);
                }

                if ($level == 'FAIL') {
                    usleep(CallbackConstant::LIMIT_LEVEL_FAIL);
                }

                $wait->add();
                go(function () use ($wait, &$ret, $task) {

                    $taskId = $task['id'];
                    $taskService = new TaskService();
                    $ret[$taskId] = $taskService->coroutine($task);
                    TaskModel::create()->update($ret[$taskId], ['id' => $taskId]);
                    $wait->done();
                });
            }
            $wait->wait(-1);
        }
    }
}