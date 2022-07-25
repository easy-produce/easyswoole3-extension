<?php

namespace Es3\Exception;


use EasySwoole\EasySwoole\Logger;

class WaringException extends BaseException
{
    public function __construct(int $code, string $msg = '', \Throwable $previous = null)
    {
        $this->category = 'waring';
        parent::__construct($code, $msg, $previous);
    }
}