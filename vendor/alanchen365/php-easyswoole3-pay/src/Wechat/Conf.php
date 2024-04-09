<?php

namespace Es3\Pay\Wechat;

use App\Module\Callback\Type\TaskType;
use App\Module\Pay\Constant\PayConstant;
use EasySwoole\Mysqli\QueryBuilder;
use EasySwoole\Pay\Pay;
use EasySwoole\Pay\WeChat\Config;
use  EasySwoole\Pay\WeChat\RequestBean\Scan;
use EasySwoole\Spl\SplArray;
use Es3\Base\Service;
use Es3\Exception\InfoException;

/**
 * 微信支付回调
 */
class Conf
{
    use Service;

    /**
     * 获取微信配置文件
     */
    public function getWeChatPayConf(): ?Config
    {
        /** 配置文件 */
        $payConf = config('pay.wechat', true);
        $weChatConf = new Config($payConf);
        if (superEmpty($payConf)) {
            // 配置文件为空
            return null;
        }
        
        /** TODO 去掉几个不用的配置文件试试看哪个报错 */
        return $weChatConf;
    }
}
