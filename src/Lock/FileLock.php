<?php

namespace Es3\Lock;

use EasySwoole\Core\Component\Logger;
use Es3\Exception\ErrorException;

class FileLock
{
    public static function get(string $fileName): \swoole_lock
    {
        $tempDir = \config('LOCK_DIR');
        $fileName = "{$tempDir}lock_{$fileName}.lock";
        
        $lock = new \swoole_lock(SWOOLE_FILELOCK, $fileName);
        $errCode = $lock->errCode ?? null;

        if (!($lock instanceof \swoole_lock && $errCode === 0)) {
            $msg = "锁:{$fileName}获取失败!";
            throw new ErrorException(1030, $msg);
        }

        return $lock;
    }
}