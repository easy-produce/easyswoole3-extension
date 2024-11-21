<?php

namespace App\Module\Ops\Event;

use App\Module\Ops\Util\PingUtil;
use EasySwoole\Component\Process\AbstractProcess;
use Es3\Base\BaseEvent;
use EasySwoole\Component\Container;
use EasySwoole\Component\Singleton;

class ProcessEvent extends BaseEvent
{
    use Singleton;

    public static function exception(AbstractProcess $process, \Throwable $throwable)
    {
        PingUtil::processException($process, $throwable);
    }

    public static function shutdown(AbstractProcess $process)
    {
        PingUtil::processShutdown($process);
    }
}