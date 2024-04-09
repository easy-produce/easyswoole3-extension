<?php

namespace Es3;

use App\Constant\AppConst;
use App\Constant\EnvConst;
use EasySwoole\Component\Context\ContextManager;
use EasySwoole\Component\Di;
use EasySwoole\Component\Singleton;
use EasySwoole\EasySwoole\Command\Utility;
use EasySwoole\FastCache\Cache;
use EasySwoole\Http\Request;
//use EasySwoole\Policy\PolicyNode;
use Es3\Policy\PolicyNode;

class Policy
{
    use Singleton;

    public $initialize;

    public function initialize(string $name): Policy
    {
        $policy = new \Es3\Policy\Policy();
        $isAuthKey = strtolower('policy.' . $name);
        $policyConf = config($isAuthKey, true) ?? [];
        foreach ($policyConf as $key => $conf) {
            $policy->addPath($key, $conf);
        }

        echo Utility::displayItem($isAuthKey, jsonEncode($policyConf));
        echo "\n";

        $this->initialize[$name] = $policy;

        return $this;
    }

    public function check(string $name): bool
    {
        $isAuth = true;

        $request = ContextManager::getInstance()->get(AppConst::DI_REQUEST);
        $uri = $request->getServerParams()['request_uri'];

        if ($this->initialize[$name]->check($uri) == PolicyNode::EFFECT_ALLOW) {
            $isAuth = false;
        }

        return !$isAuth;
    }
}
