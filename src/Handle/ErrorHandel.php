<?php

namespace Es3\Handle;

use EasySwoole\Component\Context\ContextManager;
use EasySwoole\EasySwoole\Logger;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use EasySwoole\Log\LoggerInterface;
use EasySwoole\Trigger\Location;
use EasySwoole\Trigger\TriggerInterface;
use Es3\Exception\ErrorException;
use Es3\Exception\InfoException;
use Es3\Output\Json;
use App\Constant\AppConst;

class ErrorHandel
{
    public static function run($errorCode, $description, $file = null, $line = null)
    {
        $file = "file :" .  str_replace(EASYSWOOLE_ROOT, '', $file ?? '');
        $file = str_replace('.php', '.java', basename($file)) . " [$line]";

        $errorMsg = "{$description} {$file}";

        Logger::getInstance()->log($errorMsg, LoggerInterface::LOG_LEVEL_ERROR, "error_handel");

        if (isHttp()) {
            throw new InfoException($errorCode, $errorMsg);
        }
    }
}