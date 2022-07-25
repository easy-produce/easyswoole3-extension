<?php

namespace Es3\Proxy;

use App\Constant\AppConst;
use Es3\Constant\EsConst;
use EasySwoole\Component\Singleton;
use EasySwoole\EasySwoole\Logger;
use Es3\Base\Service;
use Es3\EsUtility;

class ServiceProxy
{
    protected $service;

    function __construct($namespace)
    {
        $className = EsUtility::getControllerClassName($namespace);
        $moduleName = EsUtility::getControllerModuleName($namespace);

        $moduleDirName = EsConst::ES_DIRECTORY_MODULE_NAME;
        $namespace = "App\\{$moduleDirName}\\{$moduleName}\\Service\\{$className}Service";

        if ($moduleName == EsConst::ES_DIRECTORY_CONTROLLER_NAME) {
            return;
        }

        if (class_exists($namespace) && $moduleDirName != 'Controller') {
            $this->service = new $namespace();
        } else {
            if (!isProduction()) {
                $msg = 'service 加载失败 : ' . $namespace;
                Logger::getInstance()->console($msg, 3, 'proxy');
            }
        }
    }

    public function getService()
    {
        return $this->service;
    }
}
