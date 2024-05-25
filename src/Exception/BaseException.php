<?php

namespace Es3\Exception;


use App\Constant\EnvConst;
use EasySwoole\Component\Di;
use EasySwoole\EasySwoole\Logger;
use Es3\Constant\ResultConst;
use Es3\Handle\LoggerHandel;
use EasySwoole\Component\Context\ContextManager;
use Es3\Utility\Text;

class BaseException extends \Exception
{
    protected $category;
    protected $level;

    public function __construct(int $code, string $msg = '', \Throwable $previous = null)
    {
        $loggerHandel = new LoggerHandel(strtolower(EnvConst::PATH_LOG));

        if (ContextManager::getInstance()->get(\Es3\Constant\ResultConst::FILE_KEY)) {
            $line = ContextManager::getInstance()->get(\Es3\Constant\ResultConst::LINE_KEY);
            $file = Text::phpToJava(ContextManager::getInstance()->get(\Es3\Constant\ResultConst::FILE_KEY), $line);
            $trace = ContextManager::getInstance()->get(\Es3\Constant\ResultConst::TRACE_KEY);
        } else {
            $file = Text::phpToJava($this->getFile(), $this->getLine());
            $line = $this->getLine();
            $trace = $this->getTrace();
        }

        $loggerHandel->setFile($file);
        $loggerHandel->setLine($line);
        $loggerHandel->setTrace($trace);

        $category = $this->category;
        $level = $loggerHandel->mapToLevel($this->level);

        $message = $msg . " " . $file;

        $loggerHandel->log($msg, $level, $category);
        parent::__construct($msg, $code, $this);
    }
}