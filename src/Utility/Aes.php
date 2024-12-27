<?php

namespace Es3\Utility;

class Aes
{
    /**
     * 加密
     * DES-ECB DES-CBC DES-CTR DES-OFB DES-CFB
     * $data, $method, $key, $options = 0,
     */
    public static function encode(string $data, string $method, string $aesKey, int $options = OPENSSL_RAW_DATA, string $iv = "", string $tag = "", string $aad = "", int $tag_length = 16): string
    {
        return base64_encode(openssl_encrypt($data, $method, $aesKey, $options, $iv, $tag, $aad, $tag_length));
    }

    /**
     * 解密
     */
    public static function decode(string $data, string $method, string $aesKey, int $options = OPENSSL_RAW_DATA, string $iv = "", string $tag = "", string $aad = ""): string
    {
        return openssl_decrypt(base64_decode($data), $method, $aesKey, $options, $iv, $tag, $aad);
    }
}