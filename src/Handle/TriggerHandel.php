<?php

namespace Es3\Handle;


use EasySwoole\EasySwoole\Logger;
use EasySwoole\Log\LoggerInterface;
use EasySwoole\Trigger\Location;
use EasySwoole\Trigger\TriggerInterface;

class TriggerHandel implements TriggerInterface
{
    public function run($msg, int $errorCode = E_USER_ERROR, Location $location = null)
    {
        Logger::getInstance()->log("msg: {$msg} code: {$errorCode} locl: {$location}", LoggerInterface::LOG_LEVEL_ERROR, "trigger_handel");
    }
}