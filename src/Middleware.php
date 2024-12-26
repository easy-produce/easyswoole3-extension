<?php

namespace Es3;

use App\Constant\AppConst;
use App\Constant\EnvConst;
use App\Constant\LoggerConst;
use AsaEs\AsaEsConst;
use EasySwoole\Component\Context\ContextManager;
use EasySwoole\Component\Di;
use EasySwoole\EasySwoole\Logger;
use EasySwoole\Http\Message\Status;
use EasySwoole\Http\Request;
use \EasySwoole\Http\Response;

use EasySwoole\Log\LoggerInterface;
use Es3\Constant\EsConst;
use Es3\Exception\ErrorException;
use Es3\Handle\LoggerHandel;
use Es3\Utility\File;

class Middleware
{
    public static function onRequest(Request $request, Response $response)
    {
        $self = new self();
        /** Api验签 */
        $self->sign($request, $response);
        /** 调试模式 */
        $self->debug($request, $response);

        /** 空参数过滤 */
        $self->clearEmptyParams($request, $response);

        /** 执行客户端反射 */
        $className = EsConst::ES_APP_EVENT;
        $function = 'onRequest';
        if (class_exists($className)) {
            $ref = new \ReflectionClass($className);
            if ($ref->hasMethod($function)) {
                $instance = $ref->newInstance();
                $instance->$function($request, $response);
            }
        }
        $point = \EasySwoole\Tracker\PointContext::getInstance()->createStart('onRequest');
    }


    public static function afterRequest(Request $request, Response $response)
    {
        $self = new self();
        /** 跨域注入 */
        $self->crossDomain($request, $response);

        $point = \EasySwoole\Tracker\PointContext::getInstance()->startPoint();
        $point->end();
        $array = \EasySwoole\Tracker\Point::toArray($point);
//        echo \EasySwoole\Tracker\Point::toString($point);
//        var_dump('111', $point);

        /** 执行客户端反射 */
        $className = EsConst::ES_APP_EVENT;
        $function = 'onResponse';
        if (class_exists($className)) {
            $ref = new \ReflectionClass($className);
            if ($ref->hasMethod($function)) {
                $instance = $ref->newInstance();
                $instance->$function($request, $response);
            }
        }
    }

    private function crossDomain(Request $request, Response $response)
    {
        // 任何环境都不做限制
        $headers = 'Content-Type, Authorization, X-Requested-With, token, identity';
        $allowAccessControl = AppConst::HEADER_ALLOW_ACCESS_CONTROL;
        if (!superEmpty($allowAccessControl)) {
            $headers = $headers . ' , ' . implode(' , ', $allowAccessControl);
        }

        $origin = current($request->getHeader('origin') ?? null) ?? '';
        $origin = rtrim($origin, '/');

        // /** 生产情况的跨域 由 运维处理 */
        // if (!isProduction()) {

        //     $response->withHeader('Access-Control-Allow-Origin', superEmpty($origin) ? '*' : $origin);
        //     $response->withHeader('Access-Control-Allow-Methods', 'GET, POST, DELETE, PUT, OPTIONS');
        //     $response->withHeader('Access-Control-Allow-Credentials', 'true');
        // }

        // /** 为了兼容有些项目运维不处理跨域 */
        // if(isProduction() && isCrossDomain() ){
        //     $response->withHeader('Access-Control-Allow-Origin', superEmpty($origin) ? '*' : $origin);
        //     $response->withHeader('Access-Control-Allow-Methods', 'GET, POST, DELETE, PUT, OPTIONS');
        //     $response->withHeader('Access-Control-Allow-Credentials', 'true');
        // }

        $response->withHeader('Access-Control-Allow-Origin', superEmpty($origin) ? '*' : $origin);
        $response->withHeader('Access-Control-Allow-Methods', 'GET, POST, DELETE, PUT, OPTIONS');
        $response->withHeader('Access-Control-Allow-Credentials', 'true');
        $response->withHeader('Access-Control-Allow-Headers', $headers);
        if ($request->getMethod() === 'OPTIONS') {
            $response->withStatus(Status::CODE_OK);
            $response->end();
            return true;
        }
    }

    private function clearEmptyParams(Request $request, Response $response): void
    {
        if ($request->getMethod() != 'GET') {
            return;
        }

        $params = $request->getQueryParams() ?? [];
        foreach ($params as $key => $val) {
            if (superEmpty($val)) {
                unset($params[$key]);
            }
        }

        $request->withQueryParams($params);
    }

    /**
     * api验签
     * @param \EasySwoole\Http\Request $request
     * @param \EasySwoole\Http\Response $response
     */
    private function sign(Request $request, Response $response)
    {
        $nameSpace = 'App\Util\ApiSign';

        /** 非生产环境兼容 */
        if (!isProduction() && $request->getQueryParam('is_debug')) {
            return null;
        }

        // 没有开启校验返回成功
        $isSign = \Es3\Policy::getInstance()->check(AppConst::POLICY_CONF_IS_SIGN);
        if (!$isSign) {
            return true;
        }

        /** 是否开启校验 */
        $isVerify = config("sign.verify", true);
        if (!$isVerify) {
            return;
        }

        $isVerify = class_exists($nameSpace);
        if (!$isVerify) {
            return null;
        }


        /** API签名校验 */
        $ref = new \ReflectionClass($nameSpace);
        $apiSign = $ref->newInstance();
        $isSuccess = $apiSign->decode($request, $response);

        // 是否报错
        $isError = config("sign.error", true);
        if (!$isSuccess && $isError) {
            throw new ErrorException(401, '签名错误');
        }
    }

    /**
     * debug模式
     * @param \EasySwoole\Http\Request $request
     * @param \EasySwoole\Http\Response $response
     */
    private function debug(Request $request, Response $response)
    {
        $debug = $request->getQueryParam('debug');
        $secret = config("sign.debug");

        if (!superEmpty($debug) && $secret == $debug) {
            $running = \Swoole\Coroutine::getContext()[EsConst::ES_RUNNING_RECORD];
            $field = EsConst::ES_DEBUG;
            $running->$field = true;
        }
    }
}
