<?php

namespace App\Module\Ops\Util;

use App\Constant\EnvConst;
use App\Module\Ops\Model\PingModel;
use Cium\WeWorkApi\api\struct\menu\viewMenu;
use EasySwoole\Component\Process\AbstractProcess;
use EasySwoole\Component\Process\Manager;
use EasySwoole\Crontab\JobInterface;
use EasySwoole\EasySwoole\Logger;

/**
 * 心跳工具类
 */
class PingUtil
{
    /**
     * 自定义进程发心跳
     * @return void
     */
    public static function process(AbstractProcess $process)
    {
        try {
            /** 写入心跳 */
            PingModel::getInstance()->process($process);
        } catch (\Throwable $throwable) {
            $msg = "心跳写入失败:" . $throwable->getMessage();
            Logger::getInstance()->error($msg, "ops");
        }
    }

    /**
     * 定时任务发心跳
     * @return void
     */
    public static function crontab(JobInterface $crontab)
    {
        try {
            /** 写入心跳 */
            PingModel::getInstance()->crontab($crontab);
        } catch (\Throwable $throwable) {
            $msg = "心跳写入失败:" . $throwable->getMessage();
            Logger::getInstance()->error($msg, "ops");
        }
    }

    public static function crontabException(JobInterface $crontab, \Throwable $throwable)
    {
        try {
            /** 写入心跳 */
            PingModel::getInstance()->crontabException($crontab, $throwable);
        } catch (\Throwable $throwable) {
            $msg = "心跳写入失败:" . $throwable->getMessage();
            Logger::getInstance()->error($msg, "ops");
        }
    }

    public static function processException(AbstractProcess $process, \Throwable $throwable)
    {
        try {
            /** 写入心跳 */
            PingModel::getInstance()->processException($process, $throwable);
        } catch (\Throwable $throwable) {
            $msg = "心跳写入失败:" . $throwable->getMessage();
            Logger::getInstance()->error($msg, "ops");
        }
    }

    public static function processShutdown(AbstractProcess $process)
    {
        try {
            /** 写入心跳 */
            PingModel::getInstance()->processShutdown($process);
        } catch (\Throwable $throwable) {
            $msg = "心跳写入失败:" . $throwable->getMessage();
            Logger::getInstance()->error($msg, "ops");
        }
    }
}