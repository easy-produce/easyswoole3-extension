<?php

use App\Constant\AppConst;
use EasySwoole\Component\Di;
use EasySwoole\Http\Request;
use Es3\Trace;

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
    $request = Di::getInstance()->get(AppConst::DI_REQUEST);
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
    $request = Di::getInstance()->get(AppConst::DI_REQUEST);
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

    $request = Di::getInstance()->get(AppConst::DI_REQUEST);

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
    $headerServer['trace_code'] = Trace::getRequestId();

    return $headerServer;

}

function setIdentity($identity): void
{
    Di::getInstance()->set(AppConst::HEADER_AUTH, $identity);
}

function identity()
{
    return Di::getInstance()->get(AppConst::HEADER_AUTH);
}

function setAppCode($appCode): void
{
    $ref = new \ReflectionClass(AppConst::class);
    $headerAppCode = $ref->getConstant('HEADER_APP_CODE');

    if (superEmpty($headerAppCode)) {
        throw new \Es3\Exception\InfoException(1036, "App\Constant\AppConst常量中缺少 HEADER_APP_CODE 常量");
    }

    Di::getInstance()->set($headerAppCode, $appCode);
}

function appCode()
{
    $ref = new \ReflectionClass(AppConst::class);
    $headerAppCode = $ref->getConstant('HEADER_APP_CODE');

    if (superEmpty($headerAppCode)) {
        throw new \Es3\Exception\InfoException(1035, "App\Constant\AppConst常量中缺少 HEADER_APP_CODE 常量");
    }

    return Di::getInstance()->get($headerAppCode);
}

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

    $request = Di::getInstance()->get(AppConst::DI_REQUEST);
    $swooleRequest = (array)$request->getSwooleRequest();
    return $swooleRequest['header'] ?? [];
}

function traceCode(): string
{
    $traceCode = Trace::getRequestId();
    return $traceCode;
}

function createUserCode()
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
    Di::getInstance()->get(\Es3\Constant\ResultConst::EXTEND_ID_KEY);
}

/**
 * 设置日志扩展字段
 */
function setLogExtend(string $extendId)
{
    // 长度不能超过50个字符
    $extendId = mb_substr($extendId, 50);
    Di::getInstance()->set(\Es3\Constant\ResultConst::EXTEND_ID_KEY, $extendId);
}

/**
 * 捕获异常具体的位置
 */
function setResultFile(Throwable $throwable, int $traceNumber = 2)
{
    if (isHttp()) {
        $trace = $throwable->getTrace()[$traceNumber] ?? null;
        $file = $trace['file'] ?? null . $trace['function'] ?? null;
        $line = $trace['line'] ?? null;

        Di::getInstance()->set(\Es3\Constant\ResultConst::FILE_KEY, $file);
        Di::getInstance()->set(\Es3\Constant\ResultConst::LINE_KEY, $line);
    }
}