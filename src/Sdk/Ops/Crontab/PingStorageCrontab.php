<?php

namespace App\Module\Ops\Crontab;


use App\Module\Ops\Service\GatewayService;
use App\Module\Ops\Service\ProcessService;
use App\Module\Ops\Util\PingUtil;
use EasySwoole\Crontab\JobInterface;
use EasySwoole\EasySwoole\Task\TaskManager;


class PingStorageCrontab implements JobInterface
{

    const RUN_ENV = 'ALL';

    /**
     * 执行规则
     */
    public function crontabRule(): string
    {
        return '*/1 * * * *';
    }

    /**
     * 任务名称
     */
    public function jobName(): string
    {
        return 'PingStorageCrontab';
    }

    /**
     * @return void
     */
    public function run()
    {
        /** 心跳监测 */
        PingUtil::crontab($this);

        $gatewayService = new GatewayService();
        $gatewayService->pingStorage();
    }

    /**
     * 出现异常
     */
    public function onException(\Throwable $throwable)
    {
        echo $throwable->getMessage();
    }
}