<?php

namespace Es3\Exception;


use App\Constant\EnvConst;
use EasySwoole\Component\Di;
use EasySwoole\EasySwoole\Logger;
use Es3\Constant\ResultConst;
use Es3\Handle\LoggerHandel;

class BaseException extends \Exception
{
    protected $category;

    public function __construct(int $code, string $msg = '', \Throwable $previous = null)
    {
        $loggerHandel = new LoggerHandel(EnvConst::PATH_LOG);
        $loggerHandel->setTrace($this->getTrace());
        $loggerHandel->getLine($this->getLine());
        $loggerHandel->setFile($this->getFile());

        // 写入日志
//        $msg = "运行出现异常 错误号:{$code} 错误信息:{$msg}";
        $category = $this->category;
        $level = $loggerHandel->mapToLevel($category);
        $loggerHandel->log($msg, $level, 'exception');

        parent::__construct($msg, $code, $this);
    }
}