<?php

namespace App\Module\Callback\Service;

use App\Constant\EnvConst;
use EasySwoole\EasySwoole\Logger;

/**
 * 拦截器
 */
class InterceptorService
{
    /**
     * 拦截请求头
     */
    public function requestHeader($task): ?array
    {
        try {
            // 获取反射
            $method = $task['interceptor_request'] ?? null;
            if (superEmpty($method)) {
                return [];
            }

            // 为空
            list($className, $methodName) = explode(':', $method);
            if (superEmpty($className) || superEmpty($methodName)) {
                return [];
            }

            // 使用反射获取类信息
            $reflectionClass = new \ReflectionClass($className);
            if (!$reflectionClass->hasMethod($methodName)) {
                return [];
            }

            // 获取方法的反射信息 设置方法为可访问
            $reflectionMethod = $reflectionClass->getMethod($methodName);
            $reflectionMethod->setAccessible(true);

            // 创建类的实例 调用方法
            $instance = $reflectionClass->newInstance();
            $result = $reflectionMethod->invoke($instance, $task);

            return $result;
        } catch (\Throwable $throwable) {
            $msg = 'callback反射错误:' . $throwable->getMessage();
            Logger::getInstance()->log($msg, \EasySwoole\Log\Logger::LOG_LEVEL_ERROR);
            return [];
        }
    }
}