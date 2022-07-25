<?php

namespace Es3\Utility;


use App\Constant\AppConst;
use EasySwoole\Component\Di;
use EasySwoole\Component\Singleton;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use EasySwoole\Pay\WeChat\WeChatPay\App;
use Es3\Exception\InfoException;

class AtomicLimit
{
    use Singleton;

    /**
     * 针对url判断是否限流
     * @param Request $request
     * @param Response $response
     * @throws \Throwable
     */
    public function url(Request $request, Response $response)
    {
        $diAutoLimiter = (new \ReflectionClass(AppConst::class))->getConstant('DI_AUTO_LIMITER');
        if (superEmpty($diAutoLimiter)) {
            return;
        }

        /** 获取配置 */
        $configKey = AppConst::POLICY_CONF_ATOMIC_LIMIT_URL;
        $atomicLimitConfig = config("policy.{$configKey}", true);

        /** 访问的url 配置的对应qps */
        $uri = $request->getServerParams()['request_uri'];
        $qps = $atomicLimitConfig[$uri] ?? null;

        if (superEmpty($qps)) {
            return;
        }

        /** @var \EasySwoole\AtomicLimit\AtomicLimit $limit */
        $limit = Di::getInstance()->get(AppConst::DI_AUTO_LIMITER);
        $isAstrict = !($limit->access($uri, $qps));

        if ($isAstrict) {
            throw new InfoException(9654, "触发限流规则,请稍后再试!");
        }
    }
}
