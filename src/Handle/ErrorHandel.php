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
        if (isHttp()) {
            throw new ErrorException($errorCode, $description);
        }
        
        Logger::getInstance()->log($description, LoggerInterface::LOG_LEVEL_ERROR, "system");
    }
}