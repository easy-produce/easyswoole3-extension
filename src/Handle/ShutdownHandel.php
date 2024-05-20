<?php

namespace Es3\Handle;

use App\Constant\AppConst;
use EasySwoole\Component\Context\ContextManager;
use EasySwoole\EasySwoole\Logger;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use EasySwoole\Log\LoggerInterface;
use EasySwoole\Trigger\Location;
use EasySwoole\Trigger\TriggerInterface;
use Es3\Exception\ErrorException;
use Es3\Output\Json;

class ShutdownHandel
{
    public static function run(...$args)
    {
        $msg = json_encode($args);
        Logger::getInstance()->log("msg: {$msg}", LoggerInterface::LOG_LEVEL_ERROR, "shutdown_handel");
    }
}