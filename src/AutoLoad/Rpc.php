<?php

namespace Es3\AutoLoad;

use App\Constant\AppConst;
use App\Constant\EnvConst;
use App\Rpc\Oms;
use EasySwoole\EasySwoole\ServerManager;
use Es3\Constant\EsConst;
use EasySwoole\Component\Singleton;
use EasySwoole\EasySwoole\Command\Utility;
use EasySwoole\EasySwoole\Logger;
use Es3\EsUtility;

class Rpc
{
    use Singleton;

    public function autoLoad(\EasySwoole\Rpc\Config $config)
    {
        try {
            \EasySwoole\Rpc\Rpc::getInstance($config);
            
            $crontabLoads = [];
            $path = EASYSWOOLE_ROOT . '/' . EsConst::ES_DIRECTORY_APP_NAME . '/' . EsConst::ES_DIRECTORY_RPC_NAME . '/';
            $rpcs = EsUtility::sancDir($path);

            foreach ($rpcs as $rpc) {

                /** 获取类名 */
                $className = basename($rpc, '.php');

                /** 自动注入rpc */
                $class = "\\" . EsConst::ES_DIRECTORY_APP_NAME . "\\" . EsConst::ES_DIRECTORY_RPC_NAME . "\\" . $className;
                if (class_exists($class)) {
                    \EasySwoole\Rpc\Rpc::getInstance()->add(new $class());
                    echo Utility::displayItem('Rpc', $class);
                    echo "\n";
                }
            }

            \EasySwoole\Rpc\Rpc::getInstance()->attachToServer(ServerManager::getInstance()->getSwooleServer());
        } catch (\Throwable $throwable) {
            echo 'Process Initialize Fail :' . $throwable->getMessage();
        }
    }
}
