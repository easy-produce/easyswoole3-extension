<?php

namespace Es3\Base;

use App\Module\Ops\Event\ProcessEvent;
use EasySwoole\Component\Container;
use EasySwoole\Component\Singleton;
use EasySwoole\Component\Process\AbstractProcess;
use Es3\Constant\EsConst;
use Swoole\Process;
use EasySwoole\Component\Process\Config;

abstract class BaseProcess extends AbstractProcess
{
    abstract protected function run($arg);

    public static function getConf(): Config
    {
        $processConfig = new \EasySwoole\Component\Process\Config();
        $processConfig->setArg([]);
        $processConfig->setRedirectStdinStdout(false);  //是否重定向标准io
        $processConfig->setPipeType($processConfig::PIPE_TYPE_SOCK_DGRAM);  //设置管道类型
        $processConfig->setEnableCoroutine(true);   //是否自动开启协程
        $processConfig->setMaxExitWaitTime(3);  //最大退出等待时间

        return $processConfig;
    }

    /*
     * 该回调可选
     * 当有主进程对子进程发送消息的时候，会触发的回调，触发后，务必使用
     * $process->read()来读取消息
    */
    protected function onPipeReadable(Process $process)
    {
    }

    /*
     * 该回调可选
     * 当该进程退出的时候，会执行该回调
     */
    protected function onShutDown()
    {
        ProcessEvent::getInstance()->hook(EsConst::ES_EVENT_PROCESS_SHUTDOWN, $this);
    }

    protected function onException(\Throwable $throwable, ...$args)
    {
        ProcessEvent::getInstance()->hook(EsConst::ES_EVENT_PROCESS_EXCEPTION, $this, $throwable);
    }
}
