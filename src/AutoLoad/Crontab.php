<?php

namespace Es3\AutoLoad;

use App\Constant\AppConst;
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
        if (!isMaster()) {
            echo Utility::displayItem('Crontab', '当前环境为SLAVE 不会执行定时任务');
            echo "\n";
            return;
        }

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
                        \EasySwoole\EasySwoole\Crontab\Crontab::getInstance()->addTask($class);
                        echo Utility::displayItem('Crontab', $class);
                        echo "\n";
                    }
                }
            }

        } catch (\Throwable $throwable) {
            echo 'Crontab Initialize Fail :' . $throwable->getMessage();
        }
    }
}
