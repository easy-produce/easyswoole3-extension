<?php

namespace Es3\AutoLoad;

use App\Constant\AppConst;
use App\Constant\EnvConst;
use EasySwoole\Component\Process\Manager;
use Es3\Constant\EsConst;
use App\Module\Employee\Crontab\UserCrontab;
use AsaEs\RemoteCall\Rpc;
use EasySwoole\Component\Singleton;
use EasySwoole\EasySwoole\Command\Utility;
use EasySwoole\EasySwoole\Logger;
use Es3\EsUtility;

class Crontab
{
    use Singleton;

    public function autoLoad()
    {
        // 创建定时任务
        $crontabConfig = new \EasySwoole\Crontab\Config();
        $crontabConfig->setTempDir(EASYSWOOLE_TEMP_DIR);
        $crontabConfig->setServerName(strtolower(EnvConst::SERVICE_NAME) . "_crontab");
        $crontabConfig->setWorkerNum(8);
        $crontab = \EasySwoole\EasySwoole\Crontab\Crontab::getInstance($crontabConfig);


        // 设置定时任务的回调
        $crontabConfig->setOnException(function (\Throwable $throwable) {
            // 定时任务执行发生异常时触发（如果未在定时任务类的 onException 中进行捕获异常则会触发此异常回调）
            var_dump('todo 定时异常回调');
            var_dump($throwable->getMessage(), 'msg');
        });


        try {
            $crontabLoads = [];
            $path = EASYSWOOLE_ROOT . '/' . EsConst::ES_DIRECTORY_APP_NAME . '/' . EsConst::ES_DIRECTORY_MODULE_NAME . '/';
            $modules = EsUtility::sancDir($path);

            foreach ($modules as $module) {

                $crontabPath = $path . $module . '/' . EsConst::ES_DIRECTORY_CRONTAB_NAME . '/';
                $crontabFiles = EsUtility::sancDir($crontabPath);

                foreach ($crontabFiles as $key => $crontabFile) {

                    $autoLooadFile = $crontabPath . $crontabFile;
                    if (!file_exists($autoLooadFile)) {
                        continue;
                    }

                    /** 获取类名 */
                    $className = basename($autoLooadFile, '.php');

                    /** 加载定时任务 */
                    $class = "\\" . EsConst::ES_DIRECTORY_APP_NAME . "\\" . EsConst::ES_DIRECTORY_MODULE_NAME . "\\" . $module . "\\" . EsConst::ES_DIRECTORY_CRONTAB_NAME . "\\" . $className;

                    if (class_exists($class)) {

                        // 非master服务器也执行一些定时
                        if (!isRunCrontab()) {
                            $process = new \ReflectionClass($class);
                            $runEnv = $process->getConstant(EsConst::ES_RUN_ENV);
                            if (strtoupper($runEnv) != 'ALL') {
                                continue;
                            }
                        }

                        // 注册定时任务
                        $crontab->register(new $class);

                        echo Utility::displayItem('CRONTAB', $class);
                        echo "\n";
                    }
                }
            }

        } catch (\Throwable $throwable) {
            echo "\nCrontab Initialize Fail : " . $throwable->getMessage();
            echo "\nCrontab Initialize Fail File : " . $throwable->getFile();
            echo "\nCrontab Initialize Fail Line : " . $throwable->getLine();
            echo "\n";
        }
    }
}
