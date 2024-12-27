<?php

namespace Es3\Utility;

use App\Constant\AppConst;
use EasySwoole\Http\Message\UploadFile;
use Es3\Exception\InfoException;
use Es3\Exception\WaringException;
use OSS\OssClient;

class Oss
{
    /** 文件上传
     * @param string $filePath 服务器的文件路径
     * @param string $originalName 原始文件名称
     * @param string $toDirectory 上传到远程目录
     * @param string $bucket
     * @param string $accessId
     * @param string $accessKey
     * @param string $endpoint
     * @return array
     * @throws WaringException
     * @throws \OSS\Core\OssException
     */
    static function upload(string $filePath, string $originalName, string $toDirectory, string $bucket, string $accessId, string $accessKey, string $endpoint): array
    {
        $ossClient = new OssClient($accessId, $accessKey, $endpoint);

        // 截取上传原始文件信息
        $toDirectory = trim($toDirectory, '/');
        $ext = pathinfo($originalName, PATHINFO_EXTENSION);
        $name = pathinfo($originalName, PATHINFO_FILENAME);

        $newName = date('YmdHis') . rand(0, 10000) . '.' . $ext;
        $location = "{$toDirectory}/{$newName}";

        // 上传文件
        $result = $ossClient->uploadFile($bucket, $location, $filePath);
        if (false === $result) {
            throw new WaringException(7501, 'Oss文件上传失败');
        }

        // 将内网链接处理成外网链接
        if (true == strpos($result['oss-requestheaders']['Host'], '-internal')) {
            $result['oss-requestheaders']['Host'] = strtr($result['oss-requestheaders']['Host'], ["-internal" => '']);
        }

        $oss = [
            'system_code' => AppConst::SYSTEM_CODE,
            'hash' => $result['x-oss-hash-crc64ecma'] ?? '',
            'host' => $result['oss-requestheaders']['Host'] ?? '',
            'originalName' => $originalName,
            'location' => $location,
            'ext' => $ext,
            'http' => 'http://' . $result['oss-requestheaders']['Host'] . '/' . $location,
            'https' => 'https://' . $result['oss-requestheaders']['Host'] . '/' . $location,
        ];

        return $oss;
    }
}