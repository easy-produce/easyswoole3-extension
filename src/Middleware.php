<?php

namespace Es3;

use App\Constant\AppConst;
use App\Constant\EnvConst;
use App\Constant\LoggerConst;
use AsaEs\AsaEsConst;
use EasySwoole\Component\Di;
use EasySwoole\EasySwoole\Logger;
use EasySwoole\Http\Message\Status;
use EasySwoole\Http\Request;
use \EasySwoole\Http\Response;

use EasySwoole\Log\LoggerInterface;
use Es3\Exception\ErrorException;
use Es3\Handle\LoggerHandel;
use Es3\Utility\File;

class Middleware
{
    public static function onRequest(Request $request, Response $response)
    {
        $request->withAttribute('access_log', microtime(true));

        $self = new self();

        /** Api验签 */
        $self->sign($request, $response);

        /** 空参数过滤 */
        $self->clearEmptyParams($request, $response);

        /** 写入请求日志 */
//        $self->access($request, $response);
    }

    public static function afterRequest(Request $request, Response $response)
    {
        $self = new self();

        /** 跨域注入 */
        $self->crossDomain($request, $response);

        /**slog */
        $self->slog($request, $response);
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

        /** 生产情况的跨域 由 运维处理 */
        if (!isProduction()) {

            $response->withHeader('Access-Control-Allow-Origin', superEmpty($origin) ? '*' : $origin);
            $response->withHeader('Access-Control-Allow-Methods', 'GET, POST, DELETE, PUT, OPTIONS');
            $response->withHeader('Access-Control-Allow-Credentials', 'true');
        }

        /** 为了兼容有些项目运维不处理跨域 */
        if(isProduction() && isCrossDomain() ){
            $response->withHeader('Access-Control-Allow-Origin', superEmpty($origin) ? '*' : $origin);
            $response->withHeader('Access-Control-Allow-Methods', 'GET, POST, DELETE, PUT, OPTIONS');
            $response->withHeader('Access-Control-Allow-Credentials', 'true');
        }

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

    private function slog(Request $request, Response $response)
    {
        /** 从请求里获取之前增加的时间戳 */
        $reqTime = $request->getAttribute(LoggerConst::LOG_NAME_ACCESS);
        /** 计算一下运行时间  */
        $runTime = round(microtime(true) - $reqTime, 5);
        /** 拼接一个简单的日志 */
        $runTime = round(floatval($runTime * 1000), 0);

        /** 单独记录慢日志 */
        if ($runTime > round(LoggerConst::LOG_SLOG_SECONDS * 1000, 0)) {

            $logPath = strtolower(\App\Constant\EnvConst::PATH_LOG . "/" . LoggerConst::LOG_NAME_SLOG);
            $fileDate = date('Ymd', time());
            $filePath = "{$logPath}/{$fileDate}.log";

            clearstatcache();
            is_dir($logPath) ? null : File::createDirectory($logPath, 0777);
            file_put_contents($filePath, "{$runTime} ms", FILE_APPEND | LOCK_EX);
        }
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
}
