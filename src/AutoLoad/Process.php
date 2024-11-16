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

                        // 非master服务器也执行一些进程
                        if (!isRunProcess()) {
                            $runEnv = $process->getConstant(EsConst::ES_RUN_ENV);
                            if (strtoupper($runEnv) != 'ALL') {
                                continue;
                            }
                        }

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
