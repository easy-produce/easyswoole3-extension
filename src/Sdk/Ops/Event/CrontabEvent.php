<?php

namespace App\Module\Ops\Event;

use App\Module\Ops\Util\PingUtil;
use EasySwoole\Crontab\JobInterface;
use Es3\Base\BaseEvent;
use EasySwoole\Component\Container;
use EasySwoole\Component\Singleton;

class CrontabEvent extends BaseEvent
{
    use Singleton;

    /**
     * 异常记录
     * @param \EasySwoole\Crontab\JobInterface $crontab
     * @param \Throwable $throwable
     * @return void
     */
    public static function exception(JobInterface $crontab, \Throwable $throwable)
    {
        PingUtil::crontabException($crontab,$throwable);
    }
}