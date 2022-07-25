<?php

namespace Es3\Proxy;

use App\Constant\AppConst;
use Es3\Constant\EsConst;
use EasySwoole\EasySwoole\Logger;
use EasySwoole\Validate\Validate;
use Es3\EsUtility;
use Es3\Exception\InfoException;
use Es3\Exception\WaringException;

class ValidateProxy
{
    protected $validate;

    function __construct($namespace)
    {
        $className = EsUtility::getControllerClassName($namespace);
        $moduleName = EsUtility::getControllerModuleName($namespace);

        $moduleDirName = EsConst::ES_DIRECTORY_MODULE_NAME;
        $namespace = "App\\{$moduleDirName}\\{$moduleName}\\Validate\\{$className}Validate";

        if ($moduleName == EsConst::ES_DIRECTORY_CONTROLLER_NAME) {
            return;
        }

        if (class_exists($namespace)) {
            $this->validate = new $namespace();
        } else {
            if (!isProduction()) {
                $msg = 'validate 加载失败 : ' . $namespace;
                Logger::getInstance()->console($msg, 3, 'proxy');
            }
        }
    }

    public function validate(string $action, array $params)
    {
        if (!$this->validate) {
            return;
        }

        $ref = new \ReflectionClass($this->validate);

        if ($ref->hasMethod($action) && $ref->getMethod($action)->isPublic() && !$ref->getMethod($action)->isStatic()) {
            $validate = call_user_func_array([$this->validate, $action], [$params]);

            if (!$validate instanceof Validate) {
                return;
            }

            /** 全局调用验证器 */
            if ($validate->validate($params) == false) {
                throw new InfoException(1002, "{$validate->getError()->getField()}@{$validate->getError()->getFieldAlias()}:{$validate->getError()->getErrorRuleMsg()}");
            }
        }
    }
}
