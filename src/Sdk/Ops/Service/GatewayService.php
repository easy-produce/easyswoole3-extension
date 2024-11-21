<?php

namespace App\Module\Ops\Service;

use App\Module\Ops\Model\BuildModel;
use App\Module\Ops\Util\ServerUtil;
use EasySwoole\EasySwoole\Logger;
use EasySwoole\Log\LoggerInterface;

class GatewayService
{

    /**
     * build 服务初始化
     */
    public function buildInitialize()
    {
        try {
            /** 已经初始化则跳过 */
            $buildService = new BuildService();
            $build = $buildService->getBuildByServer();
            if (!superEmpty($build) && $build instanceof BuildModel && $build->getAttr('id') > 0) {
                return;
            }

            /** 初始化数据 */
            $buildService = new BuildService();
            $buildService->initialize();
        } catch (\Throwable $throwable) {
            $error = "初始化Build失败:" . $throwable->getMessage() . $throwable->getFile() . $throwable->getLine();
            Logger::getInstance()->error($error, LoggerInterface::LOG_LEVEL_ERROR);
        }
    }

    /**
     * process 进程初始化
     */
    public function processInitialize()
    {
        try {
            /** 获取 build */
            $buildService = new BuildService();
            $build = $buildService->getBuildByServer();
            $buildId = $build->getAttr('id');
            if (superEmpty($buildId) || $buildId <= 0) {
                return;
            }

            /** 已经初始化则跳过 */
            $processService = new ProcessService();
            $isInitialize = $processService->processIsInitialize($buildId);
            if ($isInitialize) {
                return;
            }

            /** 初始化数据 */
            $processService->initialize($buildId);
        } catch (\Throwable $throwable) {
            $error = "初始化Process失败:" . $throwable->getMessage() . $throwable->getFile() . $throwable->getLine();
            Logger::getInstance()->error($error, 'ops');
        }
    }

    /**
     * @return void
     */
    public function pingStorage()
    {
        try {
            $processService = new ProcessService();
            $processService->storage();
        } catch (\Throwable $throwable) {
            $error = "心跳写入失败:" . $throwable->getMessage() . $throwable->getFile() . $throwable->getLine();
            Logger::getInstance()->error($error, 'ops');
        }

        try {
            $crontabService = new CrontabService();
            $crontabService->storage();
        } catch (\Throwable $throwable) {
            $error = "心跳写入失败:" . $throwable->getMessage() . $throwable->getFile() . $throwable->getLine();
            Logger::getInstance()->error($error, 'ops');
        }
    }

    /**
     * 定时任务初始化
     * @return void
     */
    public function crontabInitialize()
    {
        try {
            /** 获取 build */
            $buildService = new BuildService();
            $build = $buildService->getBuildByServer();
            $buildId = $build->getAttr('id');

            if (superEmpty($buildId) || $buildId <= 0) {
                return;
            }

            /** 已经初始化则跳过 */
            $crontabService = new CrontabService();
            $isInitialize = $crontabService->crontabIsInitialize($buildId);
            if ($isInitialize) {
                return;
            }

            $crontabService->initialize($buildId);
        } catch (\Throwable $throwable) {
            $error = "心跳写入失败:" . $throwable->getMessage() . $throwable->getFile() . $throwable->getLine();
            Logger::getInstance()->error($error, 'ops');
        }
    }
}