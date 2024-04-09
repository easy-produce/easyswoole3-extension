<?php

namespace Es3\Pay\Wechat;

use App\Module\Callback\Type\TaskType;
use App\Module\Pay\Constant\PayConstant;
use EasySwoole\Pay\Pay;
use EasySwoole\Pay\WeChat\Config;
use  EasySwoole\Pay\WeChat\RequestBean\Scan;
use Es3\Base\Service;
use Es3\Exception\InfoException;

/**
 * 微信支付网关
 */
class Native2
{
    use Service;

    /**
     * 生成支付code
     * @param Config $weChatConf
     * @param Scan $scan
     * @return string
     * @throws InfoException
     */
    public function getCode(Config $weChatConf, Scan $scan): string
    {
        $notifyUrl = $weChatConf->getNotifyUrl();
        if (superEmpty($notifyUrl)) {
            throw new InfoException(1022, '回调地址(notify_url)必须填写');
        }

        $outTradeNo = $scan->getOutTradeNo();
        if (empty($outTradeNo)) {
            throw new InfoException(1021, '商户订单号(out_trade_no)必须填写');
        }

        $totalFee = $scan->getTotalFee();
        if (intval($totalFee) <= 0) {
            throw new InfoException(1023, '支付金额异常');
        }

        $pay = new Pay();
        $weChat = $pay->weChat($weChatConf)->scan($scan);
        return $weChat->getCodeUrl();
    }
}
