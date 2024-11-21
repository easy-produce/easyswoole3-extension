<?php

namespace App\Module\Callback\Crontab;


use EasySwoole\Crontab\JobInterface;
use EasySwoole\EasySwoole\Task\TaskManager;


class TaskClearCrontab implements JobInterface
{
    /**
     * 执行规则
     */
    public function crontabRule(): string
    {
        return '0 12 * * *';
//        return '*/1 * * * *';
    }

    /**
     * 任务名称
     */
    public  function jobName():string
    {
        return 'TaskClearCrontab';
    }

    public function run()
    {
        TaskManager::getInstance()->async(function () {
            $taskService = new \App\Module\Callback\Service\TaskService();
            $taskService->taskClear();
        });
    }

    /**
     * 出现异常
     */
    public function onException(\Throwable $throwable)
    {
        echo $throwable->getMessage();
    }
}