<?php

namespace Es3\Lock;

use Es3\Exception\ErrorException;

class EasyLock
{
    private $fp;

    function __construct(string $fileName)
    {
        $this->fp = fopen("$fileName", "w+");
    }

    /**
     * @return $this
     * @throws \Es3\Exception\ErrorException
     */
    public function lock(): static
    {
        $flg = flock($this->fp, LOCK_EX);
        if (!$flg) {
            throw new ErrorException(1053, "加锁失败");
        }

        return $this;
    }

    public function unlock(): bool
    {
        // 释放锁定
        return flock($this->fp, LOCK_UN);
    }
}