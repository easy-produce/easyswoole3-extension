<?php

namespace Es3\AutoLoad;

use App\Constant\AppConst;
use EasySwoole\Component\Context\ContextManager;
use EasySwoole\Component\Di;
use EasySwoole\Component\Singleton;
use EasySwoole\EasySwoole\ServerManager;
use Es3\Policy;

/**
 * 限流器
 */
class AtomicLimit
{
    use Singleton;

    /**
     * 自动注入限流器
     */
    public function autoLoad()
    {
        try {
            $diAutoLimiter = (new \ReflectionClass(AppConst::class))->getConstant('DI_AUTO_LIMITER');
            if (superEmpty($diAutoLimiter)) {
                return;
            }

            /** 自动注入 限流器 */
            $atomicLimit = new \EasySwoole\AtomicLimit\AtomicLimit();
            $atomicLimit->attachServer(ServerManager::getInstance()->getSwooleServer(), AppConst::DI_AUTO_LIMITER);
            Di::getInstance()->set(AppConst::DI_AUTO_LIMITER, $atomicLimit);
//            ContextManager::getInstance()->set(AppConst::DI_AUTO_LIMITER, $atomicLimit);
        } catch (\Throwable $throwable) {
            echo 'AtomicLimit Initialize Fail :' . $throwable->getMessage();
        }
    }
}
