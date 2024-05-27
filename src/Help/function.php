<?php

use App\Constant\EnvConst;
use App\Constant\AppConst;
use EasySwoole\Component\Context\ContextManager;
use EasySwoole\Component\Di;
use EasySwoole\Http\Request;
use Es3\Constant\EsConst;
use Es3\Trace;
use PhpAmqpLib\Connection\AMQPStreamConnection;

function isProduction(): bool
{
    return env() === strtolower('PRODUCTION') ? true : false;
}

function isDev(): bool
{
    return env() === strtolower('PRODUCTION') ? false : true;
}

function config($keyPath = '', $env = false)
{
    // 获取当前开发环境
    if ($env) {
        $keyPath = $keyPath . "." . env();
    }
    return EasySwoole\EasySwoole\Config::getInstance()->getConf($keyPath);
}

function isHttp()
{
    $request = ContextManager::getInstance()->get(AppConst::DI_REQUEST);
//    $request = Di::getInstance()->get(AppConst::DI_REQUEST);
    if (superEmpty($request)) {
        return false;
    }

    $swooleRequest = method_exists($request, 'getSwooleRequest') ? $request->getSwooleRequest() : null;
    if (superEmpty($swooleRequest)) {
        return null;
    }

    $workId = \EasySwoole\EasySwoole\ServerManager::getInstance()->getSwooleServer()->worker_id ?? -1;
    if ($workId < 0) {
        return false;
    }

    return true;
}

/**
 * 获取当前环境
 * @return string
 */
function env(): string
{
    return strtolower(config('ENV'));
}

/**
 * 保留数组中部分元素
 * @param array $array 原始数组
 * @param array $keys 保留的元素
 */
function array_save(array $array, array $keys = []): array
{
    $nList = [];
    foreach ($array as $item => $value) {
        if (in_array($item, $keys)) {
            $nList[$item] = $array[$item];
        }
    }

    return $nList;
}

function clientIp(): ?string
{
//    $request = Di::getInstance()->get(AppConst::DI_REQUEST);
    $request = ContextManager::getInstance()->get(AppConst::DI_REQUEST);
    if (!($request instanceof Request)) {
        return null;
    }
    // 优先在x-forwarded-for获取
    $xForwardedFor = headers()['x-forwarded-for'] ?? null;
    $ip = current(explode(',', $xForwardedFor)) ?? null;

    if (!$ip) {
        $ip = headers()['remote_ip'] ?? null;
    }

    // 最后获取 remote_ip 需要在nginx转过来
    return $ip;
}

function requestLog(): ?array
{
    if (!isHttp()) {
        return null;
    }

//    $request = Di::getInstance()->get(AppConst::DI_REQUEST);
    $request = ContextManager::getInstance()->get(AppConst::DI_REQUEST);


    $swooleRequest = (array)$request->getSwooleRequest();
    $raw = $request->getBody()->__toString();

    $headerServer1 = array_merge($swooleRequest['header'] ?? [], $swooleRequest['server'] ?? []);
    $headerServer2 = [
        'fd' => $swooleRequest['fd'] ?? null,
        'request' => $swooleRequest['request'] ?? null,
        'cookie' => $swooleRequest['cookie'] ?? null,
        'get_params' => $swooleRequest['get'] ?? null,
        'post_params' => $swooleRequest['post'] ?? null,
        'raw' => $raw,
        'files_params' => $swooleRequest['files'] ?? null,
        'tmpfiles' => $swooleRequest['tmpfiles'] ?? null,
    ];
    $headerServer = array_merge($headerServer1, $headerServer2);
    $headerServer['trace_id'] = Trace::getRequestId();

    return $headerServer;

}

/**
 * @throws \EasySwoole\Component\Context\Exception\ModifyError
 */
function setIdentity($identity): void
{
//    Di::getInstance()->set(AppConst::HEADER_AUTH, $identity);
    ContextManager::getInstance()->set(AppConst::HEADER_AUTH, $identity);
}

function identity()
{
    return ContextManager::getInstance()->get(AppConst::HEADER_AUTH);
}

/**
 * @throws \Es3\Exception\InfoException
 * @throws \EasySwoole\Component\Context\Exception\ModifyError
 */
function setAppCode($appCode): void
{
    $ref = new \ReflectionClass(AppConst::class);
    $headerAppCode = $ref->getConstant('HEADER_APP_CODE');

    if (superEmpty($headerAppCode)) {
        throw new \Es3\Exception\InfoException(1036, "App\Constant\AppConst常量中缺少 HEADER_APP_CODE 常量");
    }

//    Di::getInstance()->set($headerAppCode, $appCode);
    ContextManager::getInstance()->set($headerAppCode, $appCode);
}

/**
 * @throws \Es3\Exception\InfoException
 */
function appCode()
{
    $ref = new \ReflectionClass(AppConst::class);
    $headerAppCode = $ref->getConstant('HEADER_APP_CODE');

    if (superEmpty($headerAppCode)) {
        throw new \Es3\Exception\InfoException(1035, "App\Constant\AppConst常量中缺少 HEADER_APP_CODE 常量");
    }

    return ContextManager::getInstance()->get($headerAppCode);
}

/**
 * @throws \Es3\Exception\InfoException
 */
function redisKey(string ...$key): string
{
    if (superEmpty($key)) {
        throw new \Es3\Exception\InfoException(1301, '请传递redis key');
    }

    $key = implode('_', $key);
    return strtolower(\App\Constant\EnvConst::SERVICE_NAME . '_' . \App\Constant\EnvConst::SERVER_PORT . '_' . $key);
}

function headers(): array
{
    if (!isHttp()) {
        return [];
    }

//    $request = Di::getInstance()->get(AppConst::DI_REQUEST);
    $request = ContextManager::getInstance()->get(AppConst::DI_REQUEST);

    $swooleRequest = (array)$request->getSwooleRequest();
    return $swooleRequest['header'] ?? [];
}

function traceCode(): string
{
    $traceCode = Trace::getRequestId();
    return $traceCode;
}

function traceId(): string
{
    $traceCode = Trace::getRequestId();
    return $traceCode;
}

function createUserCode()
{
    return identity()[AppConst::IDENTITY_USER_CODE] ?? null;
}

function createUserId()
{
    return identity()[AppConst::IDENTITY_USER_CODE] ?? null;
}

function createUserName()
{
    return identity()[AppConst::IDENTITY_USER_NAME] ?? null;
}

function jsonEncode($value, $depth = 512): string
{
    return json_encode($value, JSON_UNESCAPED_UNICODE, $depth);
}

/**
 * 变量调试
 * @param $val
 * @param bool $isExit
 * @param bool $showJson
 */
function dump($val, bool $isExit = false, bool $showJson = false): void
{
    // 此函数不在生产环境执行
    if (isProduction()) {
        return;
    }

    if ($showJson) {
        $val = jsonEncode($val);
    }

    var_dump($val);

    // 不是生产环境，并且停止
    if (!isProduction() && $isExit) {
        echo "调试模式下 进程退出";
        exit();
    }
}

/**
 * 获取日志扩展字段
 */
function getLogExtend()
{
//    Di::getInstance()->get(\Es3\Constant\ResultConst::EXTEND_ID_KEY);
    return ContextManager::getInstance()->get(\Es3\Constant\ResultConst::EXTEND_ID_KEY);
}

/**
 * 设置日志扩展字段
 * @throws \EasySwoole\Component\Context\Exception\ModifyError
 */
function setLogExtend(string $extendId)
{
    // 长度不能超过50个字符
    $extendId = mb_substr($extendId, 50);
//    Di::getInstance()->set(\Es3\Constant\ResultConst::EXTEND_ID_KEY, $extendId);
    ContextManager::getInstance()->set(\Es3\Constant\ResultConst::EXTEND_ID_KEY, $extendId);
}

/**
 * 捕获异常具体的位置
 * @throws \EasySwoole\Component\Context\Exception\ModifyError
 */
function setResultFile(Throwable $throwable, int $traceNumber = 2)
{
    if (isHttp()) {
        $trace = $throwable->getTrace()[$traceNumber] ?? null;
        $file = $trace['file'] ?? null . $trace['function'] ?? null;
        $line = $trace['line'] ?? null;
        ContextManager::getInstance()->set(\Es3\Constant\ResultConst::FILE_KEY, $file);
        ContextManager::getInstance()->set(\Es3\Constant\ResultConst::LINE_KEY, $line);
        ContextManager::getInstance()->set(\Es3\Constant\ResultConst::TRACE_KEY, $throwable->getTraceAsString());
    }
}

/**
 * 当前是否跑在主项目上 包含自定义进程和定时任务
 */
/**
 * 当前是否跑在主项目上 包含自定义进程和定时任务
 */
function isMaster(): bool
{
    return (bool)config('master.is_master');
}

function isRunCrontab(): bool
{
    return (bool)config('master.crontab');
}

function isRunProcess(): bool
{
    return (bool)config('master.process');
}

function isRunQueue(): bool
{
    return (bool)config('master.queue');
}

function isRunRpc(): bool
{
    return (bool)config('master.rpc');
}

function isCrossDomain(): bool
{
    return (bool)config('cross_domain.is_cross_domain');
}

//function rabbitMqInvoke(callable $call, float $timeout = null)
//{
//    $rabbitPool = \EasySwoole\Pool\Manager::getInstance()->get(EsConst::ES_RABBIT);
//    if (!$rabbitPool instanceof \Es3\Pool\RabbitPool) {
//        throw new  \Es3\Exception\ErrorException(10121, "获取rabbitMq连接池异常");
//    }
//    return $rabbitPool->invoke($call, $timeout);
//}

function rabbitMqInstance(float $timeout = null): AMQPStreamConnection
{
    $rabbitPool = \EasySwoole\Pool\Manager::getInstance()->get(EsConst::ES_RABBIT);
    if (!$rabbitPool instanceof \Es3\Pool\RabbitPool) {
        throw new  \Es3\Exception\ErrorException(10124, "获取rabbitMq连接池异常");
    }

    return $rabbitPool->defer($timeout);
}

function redisInstance(float $timeout = null): \EasySwoole\Redis\Redis
{
    $redisPool = \EasySwoole\RedisPool\Redis::getInstance()->get(EnvConst::REDIS_KEY);
    if (!$redisPool instanceof  \EasySwoole\RedisPool\RedisPool) {
        throw new  \Es3\Exception\ErrorException(10121, "获取redis连接池异常");
    }

    return $redisPool->defer($timeout);
}