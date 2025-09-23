<?php

use App\Constant\EnvConst;
use App\Constant\AppConst;
use EasySwoole\Component\AtomicManager;
use EasySwoole\Component\Context\ContextManager;
use EasySwoole\Component\Di;
use EasySwoole\Component\Process\Manager;
use EasySwoole\FastCache\Cache;
use EasySwoole\Http\Request;
use Es3\Tracker\Point;
use Es3\Tracker\PointContext;
use Es3\Constant\EsConst;
use Es3\Trace;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Channel\AMQPChannel;
use Swoole\Coroutine;
use Swoole\Coroutine\Channel;


/**
 * 判断一个变量是否为空，但不包括 0 和 '0'.
 *
 * @param $value
 *
 * @return bool 返回true 说明为空 返回false 说明不为空
 */
function superEmpty($value): bool
{
    // 如果是一个数组
    if (is_array($value)) {
        if (count($value) == 1 && isset($value[0]) && $value[0] !== 0 && $value[0] !== '0' && empty($value[0])) {
            unset($value[0]);
        }
        return empty($value) ? true : false;
    }

    // 如果是一个对象
    if (is_object($value)) {
        if (empty((array)$value)) {
            return true;
        }
        return false;
//        return empty($value->id) ? true : false;
    }

    // 如果是其它
    if (empty($value)) {
        if (is_int($value) && 0 === $value) {
            return false;
        }

        if (is_string($value) && '0' === $value) {
            return false;
        }

        return true;
    }

    return false;
}

function nowDate(string $format = 'Y-m-d H:i:s'): string
{
    return date($format, time());
}

function isInt($val): bool
{
    return is_int($val) || is_integer($val);
}

function isDouble($val): bool
{
    return is_float($val) || is_double($val);
}


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
    $request = ContextManager::getInstance()->get(AppConst::DI_REQUEST);
    if (!($request instanceof Request)) {
        return null;
    }

    $ip = headers()['client_ip'] ?? null;
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

function getServerType(): string
{
    return isMaster() ? 'master' : 'slave';
}

function getServerIp(): string
{
    $ipList = swoole_get_local_ip();
    $ip = implode('-', $ipList);

    if (superEmpty($ip)) {
        return '0.0.0.0';
    }

    return $ip;
}

function getServerTempName(string $type = null): string
{
    $tempName = \EasySwoole\Component\Di::getInstance()->get(EsConst::ES_SERVER_TEMP_NAME);

    if ($type) {
        $tempName = "{$type}-{$tempName}";
    }

    return $tempName;
}

function getServerRunTime(): string
{
    return \EasySwoole\Component\Di::getInstance()->get(EsConst::ES_SERVER_RUN_TIME);
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

function rabbitMqInstanceChannel(float $timeout = null): AMQPChannel
{
    $rabbitPool = \EasySwoole\Pool\Manager::getInstance()->get(EsConst::ES_RABBIT);
    if (!$rabbitPool instanceof \Es3\Pool\RabbitPool) {
        throw new  \Es3\Exception\ErrorException(10124, "获取rabbitMq连接池异常");
    }

    /** @var AMQPStreamConnection $mq */
    $mq =  $rabbitPool->defer($timeout);

    $cid = \Swoole\Coroutine::getCid();
    return $mq->channel();
}


function redisInstance(float $timeout = null): \EasySwoole\Redis\Redis
{
    $redisPool = \EasySwoole\RedisPool\Redis::getInstance()->get(EnvConst::REDIS_KEY);
    if (!$redisPool instanceof \EasySwoole\RedisPool\RedisPool) {
        throw new  \Es3\Exception\ErrorException(10121, "获取redis连接池异常");
    }

    return $redisPool->defer($timeout);
}

function initAtomicByTraceId()
{
    $fieldList = ['count_mysql'];
    $traceId = \Swoole\Coroutine::getContext()['traceId'];

    foreach ($fieldList as $key => $field) {
        $cache = "{$traceId}_{$field}";
        $atomic = AtomicManager::getInstance()->add($cache, 0);
    }
}


function setAtomicByTraceId(string $field, int $int = 1)
{
    $traceId = \Swoole\Coroutine::getContext()['traceId'];
    $key = "{$traceId}_{$field}";

    $atomic = AtomicManager::getInstance()->get($key);
    if (empty($atomic)) {
        AtomicManager::getInstance()->add($key, 0);
        $atomic = AtomicManager::getInstance()->get($key);
    }

    $atomic->add($int);
}

function getAtomicByTraceId(string $field): int
{
    $count = 0;

    $traceId = \Swoole\Coroutine::getContext()['traceId'];
    $key = "{$traceId}_{$field}";

    $atomic = AtomicManager::getInstance()->get($key);
    if ($atomic) {
        $count = $atomic->get();
    }

    return $count;
}

function setTraceIdData(string $type, string $field, string $id, string $value)
{
    $traceId = \Swoole\Coroutine::getContext()['traceId'];

    $key = "{$type}_{$traceId}";

    Cache::getInstance()->hSet($key, "{$field}_{$id}", $value, 360);
}

function easyGo(callable $callable, ...$args)
{
    $traceId = traceId();
    \Swoole\Coroutine::getContext()['traceId'] = $traceId;
    $running = \Swoole\Coroutine::getContext()[EsConst::ES_RUNNING_RECORD];
    $point = PointContext::getInstance()->getPoint();

    setAtomicByTraceId('count_go');
    go(function () use ($callable, $traceId, $running, $point, $args) {
        // 写入 traceId 到协程上下文中
        \Swoole\Coroutine::getContext()['traceId'] = $traceId;
        \Swoole\Coroutine::getContext()['tracePoint'] = $point;
        \Swoole\Coroutine::getContext()[EsConst::ES_RUNNING_RECORD] = $running;
        // 调用回调函数并传递参数
        call_user_func_array($callable, $args);
    });
}

function getEsRunningRecord(string $field)
{
    $running = \Swoole\Coroutine::getContext()[EsConst::ES_RUNNING_RECORD];

    $exists = isset($running->$field);
    if (!$exists) {
        return null;
    }

    return $running->$field;
}

function isDebug(): bool
{
    $debug = getEsRunningRecord(EsConst::ES_DEBUG);
    return $debug ? true : false;
}

function startTrackerPoint(string $name, $arg = null)
{
    /** 非debug模式不做任何处理 */
    if (!isDebug()) {
        return null;
    }

    /** 没有 traceId 不做任何处理 */
    $traceId = \Swoole\Coroutine::getContext()['traceId'];
    if (empty($traceId)) {
        return null;
    }

    /** 如果没初始化则初始化 */
    $point = \Es3\Tracker\PointContext::getInstance()->getPoint();
    if (empty($point)) {
        $request = ContextManager::getInstance()->get(AppConst::DI_REQUEST);
        $uri = $request->getServerParams()['request_uri'] ?? 'default';
        $point = PointContext::getInstance()->createStart($uri);
        $point->setStartMemory(workerMemoryUsage());
    }

    /** 查找节点找不到按next处理 */
    $point = \Es3\Tracker\PointContext::getInstance()->next($name);

    /** 有参数就写入 */
    if ($arg && $point instanceof Point) {
        $point->setStartArg(jsonEncode($arg));
    }
}

function endTrackerPoint(string $name, $arg = null)
{
    /** 非debug模式不做任何处理 */
    if (!isDebug()) {
        return;
    }

    /** 没有 traceId 不做任何处理 */
    $traceId = \Swoole\Coroutine::getContext()['traceId'];
    if (empty($traceId)) {
        return null;
    }

    $point = \Es3\Tracker\PointContext::getInstance()->find($name);
    if (empty($point)) {
        return;
    }

    if (!$point instanceof Point) {
        return;
    }

    if (!method_exists($point, 'end')) {
        return;
    }

    $point->setEndMemory(workerMemoryUsage());

    if ($arg) {
        $point->setEndArg(jsonEncode($arg));
    }

    $point->end();
}


function workerProcessInfo()
{
    $process = null;

    $table = Manager::getInstance()->getProcessTable();
    foreach ($table as $pid => $p) {
        if (getmypid() == $pid) {
            $process = $p;
        }
    }

    return $process;
}

function workerMemoryUsage()
{
    $process = workerProcessInfo();

    if (empty($process)) {
        return -1;
    }

    return $process['memoryUsage'] ?? null;
}

function workerMemoryPeakUsage()
{
    $process = workerProcessInfo();

    if (empty($process)) {
        return -1;
    }

    return $process['memoryPeakUsage'] ?? null;
}

function rabbitMqChannel(callable $callback, float $timeout = null)
{
    /** @var 获取连接池 $pool */
    $pool = \EasySwoole\Pool\Manager::getInstance()->get(EsConst::ES_RABBIT);
    if (!$pool instanceof \Es3\Pool\RabbitPool) {
        throw new \Es3\Exception\ErrorException(10124, "获取rabbitMq连接池异常");
    }

    return $pool->invoke(function (\PhpAmqpLib\Connection\AMQPStreamConnection $connection) use ($callback) {
        $channel = $connection->channel();
        try {
            return $callback($channel);
        } finally {
            // 安全关闭通道
            if ($channel instanceof \PhpAmqpLib\Channel\AMQPChannel && $channel->is_open()) {
                echo "关闭通道 \n";
                $channel->close();
            }

//            // 安全关闭链接
//            if($connection->isConnected()){
//                echo "关闭链接 \n";
//                $connection->close();
//            }
        }
    }, $timeout);
}