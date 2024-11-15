<?php

namespace Es3\AutoLoad;

use EasySwoole\Component\TableManager;
use Swoole\Table;
use App\Constant\AppConst;
use App\Constant\EnvConst;
use Es3\Constant\EsConst;
use EasySwoole\Component\Singleton;
use EasySwoole\EasySwoole\Command\Utility;
use EasySwoole\EasySwoole\Logger;
use Es3\EsUtility;

class Process
{
    use Singleton;

    public function autoLoad()
    {
        try {
            if (!isRunProcess()) {
                echo Utility::displayItem('Process', '当前环境为SLAVE 不会执行自定义进程');
                echo "\n";
                return;
            }

            $crontabLoads = [];
            $path = EASYSWOOLE_ROOT . '/' . EsConst::ES_DIRECTORY_APP_NAME . '/' . EsConst::ES_DIRECTORY_MODULE_NAME . '/';
            $modules = EsUtility::sancDir($path);

            foreach ($modules as $module) {

                $processPath = $path . $module . '/' . EsConst::ES_DIRECTORY_PROCESS_NAME . '/';
                $processFiles = EsUtility::sancDir($processPath);

                foreach ($processFiles as $key => $processFile) {

                    $autoLooadFile = $processPath . $processFile;
                    if (!file_exists($autoLooadFile)) {
                        continue;
                    }

                    /** 获取类名 */
                    $className = basename($autoLooadFile, '.php');

                    /** 加载自定义进程 */
                    $class = "\\" . EsConst::ES_DIRECTORY_APP_NAME . "\\" . EsConst::ES_DIRECTORY_MODULE_NAME . "\\" . $module . "\\" . EsConst::ES_DIRECTORY_PROCESS_NAME . "\\" . $className;
                    if (class_exists($class)) {

                        $process = new \ReflectionClass($class);
                        $conf = $class::getConf();

                        $processName = EnvConst::SERVICE_NAME . ".{$className}";
                        $processGroup = EnvConst::SERVICE_NAME . ".{$module}";

                        $conf->setProcessName($processName);
                        $conf->setProcessGroup($processGroup);

                        \EasySwoole\Component\Process\Manager::getInstance()->addProcess(new $class($conf));

                        echo Utility::displayItem('Process', $class);
                        echo "\n";
                    }
                }
            }

        } catch (\Throwable $throwable) {
            echo 'Process Initialize Fail :' . $throwable->getMessage();
            echo 'Process Initialize Fail File :' . $throwable->getFile();
            echo 'Process Initialize Fail Line :' . $throwable->getLine();
        }
    }
}
