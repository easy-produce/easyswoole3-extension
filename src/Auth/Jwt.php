<?php

namespace Es3\Auth;

use App\Constant\AppConst;
use EasySwoole\EasySwoole\Logger;
use Es3\Exception\ErrorException;
use Es3\Exception\InfoException;
use Es3\Exception\WaringException;
use Firebase\JWT\ExpiredException;

/**
 * 配置自动加载
 * Class HttpRouter
 * @package Es3\Autoload
 */
class Jwt
{
    public function decode(?string $identity, ?string $key, ?string $alg): array
    {
        if (superEmpty($identity)) {
            throw new InfoException(1008, '身份信息缺失');
        }

        if (superEmpty($key) || superEmpty($alg)) {
            throw new InfoException(1008, '关键身份信息缺失');
        }

        try {
            $token = \Firebase\JWT\JWT::decode($identity, $key, [$alg]);
            return (array)$token;
        } catch (ExpiredException $expiredException) {
            throw new \Exception("身份已过期,请重新登录", 1934);
        }
    }

    public function encode(array $data = [], ?string $key = null, ?string $alg = null): string
    {
        try {
            if (superEmpty($key) || superEmpty($alg)) {
                throw new InfoException(1008, '关键身份信息缺失');
            }

            $identity = \Firebase\JWT\JWT::encode($data, $key, $alg);

            if (superEmpty($identity)) {
                throw new InfoException(1008, '身份生成失败');
            }

            return strval($identity);
        } catch (\Exception $throwable) {
            Logger::getInstance()->notice('身份生成失败 : ' . $throwable->getMessage(), 'auth');
            throw new ErrorException($throwable->getCode(), $throwable->getMessage());
        }
    }
}
