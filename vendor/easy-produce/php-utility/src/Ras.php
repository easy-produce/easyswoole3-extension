<?php

namespace Es3\Utility;

class Ras
{
    /**
     * 加密
     */
    public static function encode(string $data, string $key, $padding = OPENSSL_PKCS1_PADDING): string
    {
        $result = '';
        openssl_public_encrypt($data, $result, $key, $padding);
        return $result;
    }

    /**
     * 解密
     */
    public static function decode(string $data, string $key, $padding = OPENSSL_PKCS1_PADDING): string
    {
        $result = '';
        openssl_private_decrypt(base64_decode($data), $result, $key, $padding);
        return $result;
    }
}