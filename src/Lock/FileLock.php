<?php

namespace Es3\Lock;

use EasySwoole\Core\Component\Logger;
use Es3\Exception\ErrorException;

class FileLock
{
    public static function get(string $fileName): PhpFileLock
    {
        $tempDir = \config('LOCK_DIR');
        $fileName = "{$tempDir}lock_{$fileName}.lock";

        $lock = new PhpFileLock($fileName);
        return $lock;
    }
}