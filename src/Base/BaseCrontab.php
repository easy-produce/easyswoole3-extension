<?php

namespace Es3\Base;

use EasySwoole\Crontab\JobInterface;
use App\Module\Ops\Event\CrontabEvent;
use Es3\Constant\EsConst;
use Es3\Utility\Random;

abstract class BaseCrontab implements JobInterface
{
    abstract public function jobName(): string;

    abstract public function crontabRule(): string;

    abstract public function run();

    public function onException(\Throwable $throwable)
    {
        CrontabEvent::getInstance()->hook(EsConst::ES_EVENT_CRONTAB_EXCEPTION, $this, $throwable);
    }
}
