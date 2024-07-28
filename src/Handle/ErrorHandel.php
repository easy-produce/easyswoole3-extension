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
        $file = "file :" . str_replace(EASYSWOOLE_ROOT, '', $file ?? '');
        $file = str_replace('.php', '.java', basename($file)) . " [$line]";

        $errorMsg = "{$description} {$file}";

        Logger::getInstance()->log($errorMsg, LoggerInterface::LOG_LEVEL_ERROR, "error_handel");

        /**
         * 生产环境下有些没必要报错
         * [2] E_WARNING (integer) 运行时警告 (非致命错误)。仅给出提示信息，但是脚本不会终止运行。
         * [8] E_NOTICE (integer) 运行时提醒。运行时提醒，代码本身是正确的但是程序可以继续运行。
         */
        $isThrow = true;
        if (in_array($errorCode, [2, 8]) && isProduction()) {
            $isThrow = false;
        }

        if (isHttp() && $isThrow) {
            throw new InfoException($errorCode, $errorMsg);
        }
    }
}