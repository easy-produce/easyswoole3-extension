<?php

namespace Es3\Handle;


use EasySwoole\EasySwoole\Logger;
use EasySwoole\Trigger\Location;
use EasySwoole\Trigger\TriggerInterface;

class TriggerHandel implements TriggerInterface
{
    public function error($msg, int $errorCode = E_USER_ERROR, Location $location = null)
    {
        Logger::getInstance()->console('这是自定义输出的错误:' . $msg);
        // TODO: Implement error() method.
    }

    public function throwable(\Throwable $throwable)
    {
        Logger::getInstance()->console('这是自定义输出的异常:' . $throwable->getMessage());
        // TODO: Implement throwable() method.
    }
}