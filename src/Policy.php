<?php

namespace Es3;


use App\Constant\AppConst;
use EasySwoole\Component\Di;
use EasySwoole\Component\Singleton;
use EasySwoole\EasySwoole\Command\Utility;
use EasySwoole\FastCache\Cache;
use EasySwoole\Http\Request;
use EasySwoole\Policy\PolicyNode;

class Policy
{
    use Singleton;

    public function initialize(string $name): \EasySwoole\Policy\Policy
    {
        $policy = new \EasySwoole\Policy\Policy();
        $isAuthKey = strtolower('policy.' . $name);
        $policyConf = config($isAuthKey, true) ?? [];
        foreach ($policyConf as $key => $conf) {
            $policy->addPath($key, $conf);
        }

        echo Utility::displayItem($isAuthKey, jsonEncode($policyConf));
        echo "\n";

        return $policy;
    }

    /**
     * 白名单策略
     * @return bool
     * @throws \Throwable
     */
    public function isAuth(): bool
    {
        $isAuth = true;

        $policy = Di::getInstance()->get(AppConst::POLICY_CONF_IS_AUTH);
        $request = Di::getInstance()->get(AppConst::DI_REQUEST);

        $uri = $request->getServerParams()['request_uri'];
        $iaAuth = $policy->check($uri);

        if ($iaAuth == PolicyNode::EFFECT_ALLOW) {
            $isAuth = false;
        }

        return !$isAuth;
    }

    /**
     * 验签白名单策略
     */
    public function isSign(): bool
    {
        $isSign = true;

        $policy = Di::getInstance()->get(AppConst::POLICY_CONF_IS_SIGN);
        $request = Di::getInstance()->get(AppConst::DI_REQUEST);

        $uri = $request->getServerParams()['request_uri'];
        $isSign = $policy->check($uri);

        if ($isSign == PolicyNode::EFFECT_ALLOW) {
            $isSign = false;
        }

        return !$isSign;
    }
}
