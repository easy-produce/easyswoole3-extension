<?php

namespace App\Module\Callback\Process;

use App\Constant\EnvConst;
use App\Module\Callback\CallbackConstant;
use App\Module\Callback\Dao\TaskDao;
use App\Module\Callback\Model\TaskModel;
use App\Module\Callback\Queue\TaskErrorQueue;
use App\Module\Callback\Queue\TaskFailQueue;
use App\Module\Callback\Queue\TaskInvalidQueue;
use App\Module\Callback\Service\GatewayService;
use App\Module\Callback\Service\TaskService;
use App\Module\Callback\Util\EnvUtil;
use App\Module\Callback\Util\TaskUtil;
use App\Module\Ops\Util\PingUtil;
use EasySwoole\Component\Process\AbstractProcess;
use EasySwoole\Component\Process\Config;
use EasySwoole\Component\Timer;
use EasySwoole\EasySwoole\Logger;
use EasySwoole\EasySwoole\Task\TaskManager;
use Es3\Trace;
use Swoole\Process;
use EasySwoole\ORM\DbManager;

class LowProcess extends AbstractProcess
{

    public static function getConf(): Config
    {
        $processConfig = new \EasySwoole\Component\Process\Config();
        $processConfig->setArg([]);   //传参
        $processConfig->setRedirectStdinStdout(false);  //是否重定向标准io
        $processConfig->setPipeType($processConfig::PIPE_TYPE_SOCK_DGRAM);  //设置管道类型
        $processConfig->setEnableCoroutine(true);   //是否自动开启协程
        $processConfig->setMaxExitWaitTime(3);  //最大退出等待时间

        return $processConfig;
    }

    protected function run($arg)
    {
        Logger::getInstance()->console("回调服务开启");

        while (true) {

            try {
                PingUtil::process($this);
                /** 获取任务 */
                $status = ['INVALID', 'ERROR', 'RUN', 'FAIL'];
                $level = 'LOW';
                $taskList = TaskUtil::taskList($status, $level);

                /** 如果没有任务 休息一会儿 */
                if (superEmpty($taskList)) {
                    $this->sleep();
                }

                /** 调度任务执行 */
                TaskUtil::run($taskList, $level);

                /** 一轮下来后休息一会儿 */
                $this->sleep();
            } catch (\Throwable $throwable) {
                $needWait = true;
                $msg = "系统发生异常:" . $throwable->getCode() . ' ' . $throwable->getMessage();
                Logger::getInstance()->log($msg, Logger::LOG_LEVEL_ERROR, 'callback_task');
                $this->sleep();
            }
        }
    }

    public function sleep()
    {
        sleep(3);
    }

    protected function onPipeReadable(Process $process)
    {
        /*
         * 该回调可选
         * 当有主进程对子进程发送消息的时候，会触发的回调，触发后，务必使用
         * $process->read()来读取消息
         */
    }

    protected function onShutDown()
    {
        /*
         * 该回调可选
         * 当该进程退出的时候，会执行该回调
         */
    }

    protected function onException(\Throwable $throwable, ...$args)
    {
        /*
         * 该回调可选
         * 当该进程出现异常的时候，会执行该回调
         */
        Logger::getInstance()->log($throwable->getMessage(), Logger::LOG_LEVEL_ERROR, 'callback-process');
    }
}
