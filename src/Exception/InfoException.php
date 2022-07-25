<?php

namespace Es3\Exception;


use EasySwoole\EasySwoole\Logger;

class InfoException extends BaseException
{
    public function __construct(int $code, string $msg = '', \Throwable $previous = null)
    {
        $this->category = 'info';
        parent::__construct($code, $msg, $previous);
    }
}