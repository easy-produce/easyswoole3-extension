<?php

namespace Es3\Exception;

use App\Constant\AppConst;
use EasySwoole\Component\Di;
use EasySwoole\EasySwoole\Logger;
use Es3\Constant\ResultConst;

class DbException extends BaseException
{
    public function __construct(int $code, string $msg = '', \Throwable $previous = null)
    {
        $this->category = 'db';
        $this->level = 'error';
        parent::__construct($code, $msg, $previous);
    }
}