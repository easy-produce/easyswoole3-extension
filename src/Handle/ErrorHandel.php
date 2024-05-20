<?php

namespace Es3\Handle;

use EasySwoole\EasySwoole\Logger;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use EasySwoole\Log\LoggerInterface;
use EasySwoole\Trigger\Location;
use EasySwoole\Trigger\TriggerInterface;
use Es3\Exception\ErrorException;
use Es3\Output\Json;

class ErrorHandel
{
    public static function run($errorCode, $description, $file = null, $line = null)
    {
        $errorMsg = "$description file : $file  line : $line";
        Logger::getInstance()->log($errorMsg, LoggerInterface::LOG_LEVEL_ERROR, "error_handel");

        if (isHttp()) {
            throw new ErrorException($errorCode, $errorMsg);
        }
    }
}