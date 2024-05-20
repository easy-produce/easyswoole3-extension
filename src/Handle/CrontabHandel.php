<?php

namespace Es3\Handle;

use EasySwoole\EasySwoole\Logger;
use EasySwoole\Log\LoggerInterface;

class CrontabHandel
{
    public static function run(...$args)
    {
        $msg = json_encode($args);
        Logger::getInstance()->log("msg: {$msg}", LoggerInterface::LOG_LEVEL_ERROR, "crontab_handel");
    }
}