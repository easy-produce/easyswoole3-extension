<?php

namespace Es3\AutoLoad;

use App\Constant\AppConst;
use App\Constant\EnvConst;
use Es3\Constant\EsConst;
use EasySwoole\Component\Singleton;
use EasySwoole\EasySwoole\Command\Utility;
use EasySwoole\EasySwoole\Logger;
use Es3\EsUtility;

class Queue
{
    use Singleton;

    public function autoLoad()
    {
        if (!isRunQueue()) {
            echo Utility::displayItem('Crontab', '当前环境为SLAVE 不会执行消息队列');
            echo "\n";
            return;
        }

        try {
            $crontabLoads = [];
            $path = EASYSWOOLE_ROOT . '/' . EsConst::ES_DIRECTORY_APP_NAME . '/' . EsConst::ES_DIRECTORY_MODULE_NAME . '/';
            $modules = EsUtility::sancDir($path);

            foreach ($modules as $module) {

                $queuePath = $path . $module . '/' . EsConst::ES_DIRECTORY_QUEUE_NAME . '/';
                $queueFiles = EsUtility::sancDir($queuePath);

                foreach ($queueFiles as $key => $processFile) {

                    $autoLooadFile = $queuePath . $processFile;
                    if (!file_exists($autoLooadFile)) {
                        continue;
                    }

                    /** 获取类名 */
                    $className = basename($autoLooadFile, '.php');

                    /** 加载定时任务 */
                    $class = "\\" . EsConst::ES_DIRECTORY_APP_NAME . "\\" . EsConst::ES_DIRECTORY_MODULE_NAME . "\\" . $module . "\\" . EsConst::ES_DIRECTORY_QUEUE_NAME . "\\" . $className;

                    if (class_exists($class)) {

                        $queueName = $className . '_' . $module;
                        $redisPool = \EasySwoole\RedisPool\Redis::getInstance()->get(EnvConst::REDIS_KEY);
                        $class::getInstance(new \EasySwoole\Queue\Driver\Redis($redisPool, $queueName));

                        echo Utility::displayItem('Queue', $class);
                        echo "\n";
                    }
                }
            }

        } catch (\Throwable $throwable) {
            echo 'Process Initialize Fail :' . $throwable->getMessage();
        }
    }
}
