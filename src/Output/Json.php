<?php

namespace Es3\Output;

use App\AppConst\AppInfo;
use App\Constant\AppConst;
use App\Constant\LoggerConst;
use App\Constant\ResultConst;
use AsaEs\AsaEsConst;
use AsaEs\Logger\FileLogger;
use EasySwoole\Component\Context\ContextManager;
use EasySwoole\Config;
use EasySwoole\Component\Di;
use EasySwoole\Core\Swoole\Task\TaskManager;
use EasySwoole\EasySwoole\Logger;
use EasySwoole\Http\Response;
use EasySwoole\Log\LoggerInterface;
use Es3\EsConfig;
use Es3\Output\Result;

class Json
{
    /**
     * HTTP 返回成功
     * @param int $code
     * @param string $msg
     * @throws \Throwable
     */
    public static function success(int $code = ResultConst::SUCCESS_CODE, string $msg = ResultConst::SUCCESS_MSG): void
    {
        Json::setBody($code, $msg, true);
        $point = \Es3\Tracker\PointContext::getInstance()->endPoint();
    }

    /**
     * HTTP 返回失败
     * @param \Throwable $throwable
     * @param int $code
     * @param string $msg
     * @throws \Throwable
     */
    public static function fail(\Throwable $throwable, int $code = ResultConst::FAIL_CODE, string $msg = ResultConst::FAIL_MSG): void
    {
        ContextManager::getInstance()->get(AppConst::DI_RESULT)->setTrace($throwable->getTrace());
        if (isHttp()) {
            ContextManager::getInstance()->get(AppConst::DI_RESULT)->setFile($throwable->getFile());
            ContextManager::getInstance()->get(AppConst::DI_RESULT)->setLine($throwable->getLine());
        }
        Json::setBody($code, $msg, false);
    }

    /**
     * HTTP 返回结构
     * @param int $code
     * @param string $msg
     * @param bool $isSuccess
     * @throws \Throwable
     */
    private static function setBody(int $code, string $msg = '', bool $isSuccess = null): void
    {
//        $response = Di::getInstance()->get(AppConst::DI_RESPONSE);
        $response = ContextManager::getInstance()->get(AppConst::DI_RESPONSE);

        $result = ContextManager::getInstance()->get(AppConst::DI_RESULT);

        /** 返回数据定制*/
        $code = $isSuccess ? (empty($code) ? ResultConst::SUCCESS_CODE : $code) : (empty($code) ? 0 : $code);

        /** 写入返回信息 */
        $result->setMsg(strval($msg));
        $result->setCode(intval($code));

        $data = $result->toArray();

        /** 记录请求log */
        ContextManager::getInstance()->set(\Es3\Constant\ResultConst::RESPONSE_KEY,
            ['response_code' => $code, 'response_msg' => $msg, 'http_code' => $response->getStatusCode()]
        );

//        Logger::getInstance()->log(jsonEncode(['code' => $code, 'msg' => $msg]), LoggerInterface::LOG_LEVEL_INFO, LoggerConst::LOG_NAME_REQUEST_RESPONSE);

        $response->withHeader('Content-type', 'application/json;charset=utf-8');
        $response->write(jsonEncode($data));
        $response->end();
    }
}
