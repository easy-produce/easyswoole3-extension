<?php
//
//namespace App\Module\Ops\Crontab;
//
//use EasySwoole\EasySwoole\Crontab\AbstractCronTask;
//use EasySwoole\EasySwoole\Task\TaskManager;
//
///**
// * @author z
// * @description 【运维-构建crontab】
// */
//class BuildCrontab extends AbstractCronTask
//{
//    /**
//     * 执行规则
//     */
//    public static function getRule(): string
//    {
//        return '*/1 * * * *';
//    }
//
//    /**
//     * 任务名称
//     */
//    public static function getTaskName(): string
//    {
//        return 'BuildCrontab';
//    }
//
//    public function run(int $taskId, int $workerIndex)
//    {
//        // 异步任务
//        TaskManager::getInstance()->async(function () {
//            var_dump("Hello");
//        });
//    }
//
//    /**
//    * 出现异常
//    */
//    public function onException(\Throwable $throwable, int $taskId, int $workerIndex)
//    {
//        echo $throwable->getMessage();
//    }
//}