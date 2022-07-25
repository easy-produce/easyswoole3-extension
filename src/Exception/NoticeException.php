<?php

namespace Es3\Exception;


use EasySwoole\EasySwoole\Logger;

class NoticeException extends BaseException
{
    public function __construct(int $code, string $msg = '', \Throwable $previous = null)
    {
        $this->category = 'notice';
        parent::__construct($code, $msg, $previous);
    }
}