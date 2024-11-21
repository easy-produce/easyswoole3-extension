<?php

namespace App\Module\Ops\Crontab;

use App\Module\Ops\Service\GatewayService;
use App\Module\Ops\Util\PingUtil;
use EasySwoole\EasySwoole\Task\TaskManager;
use Es3\Base\BaseCrontab;
use Es3\Exception\ErrorException;

class InitializeCrontab extends BaseCrontab
{
    /**
     * 运行环境 (默认master)
     * @var string
     */
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
        return 'InitializeCrontab';
    }

    public function run()
    {
        PingUtil::crontab($this);

        $gatewayService = new GatewayService();
        $gatewayService->buildInitialize();
        $gatewayService->processInitialize();
        $gatewayService->crontabInitialize();
    }
}