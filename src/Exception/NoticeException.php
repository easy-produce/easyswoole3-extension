<?php

namespace Es3\Exception;


use EasySwoole\EasySwoole\Logger;

class NoticeException extends \Exception
{
    public function __construct(int $code, string $msg = '', \Throwable $previous = null)
    {
        parent::__construct($msg, $code, $previous);
    }
}