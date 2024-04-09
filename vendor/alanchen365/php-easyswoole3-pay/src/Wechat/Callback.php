<?php

namespace Es3\Pay\Wechat;

use App\Module\Callback\Type\TaskType;
use App\Module\Pay\Constant\PayConstant;
use EasySwoole\EasySwoole\Logger;
use EasySwoole\Mysqli\QueryBuilder;
use EasySwoole\Pay\Pay;
use EasySwoole\Pay\WeChat\Config;
use  EasySwoole\Pay\WeChat\RequestBean\Scan;
use EasySwoole\Spl\SplArray;
use Es3\Base\Model;
use Es3\Base\Service;
use Es3\Exception\InfoException;

/**
 * 微信支付回调
 */
class Callback
{
    use Service;

    /** 验证是否是微信官方调用 */
    public function verify(Config $weChatConf, string $xml, string $logPath): ?SplArray
    {
        try {
            $pay = new \EasySwoole\Pay\Pay();
            $weChatParams = $pay->weChat($weChatConf)->verify($xml);

            /** 验证后入库 */
            $outTradeNo = $weChatParams->get('out_trade_no');
            if (superEmpty($outTradeNo)) {
                throw new InfoException(1028, 'out_trade_no出现异常');
            }

            $callBack = Model::create()->tableName('pay_wechat_callback')->get(['out_trade_no' => $outTradeNo]);
            $save = (array)$weChatParams;
            if (superEmpty($callBack)) {
                Model::create()->tableName('pay_wechat_callback')->save($save);
            } else {
                unset($save['out_trade_no']);
                $save['update_count'] = QueryBuilder::inc(1);
                Model::create()->tableName('pay_wechat_callback')->update($save, ['out_trade_no' => $outTradeNo]);
            }

            return $weChatParams;
        } catch (\Throwable $throwable) {
            Logger::getInstance()->log(json_encode(['error' => $throwable->getMessage()]), Logger::LOG_LEVEL_ERROR, $logPath);
            return null;
        }
    }

    /**
     * 通知其他人
     */
    public function notice(SplArray $weChatParams): void
    {
        $result = null;
        /** 文件日志目录 */
        $logPath = config('pay.log.wechat');
        superEmpty($logPath) ? $logPath = 'pay_wechat' : null;
        $callbacks = config('pay.callback.wechat');

        foreach ($callbacks as $key => $callback) {
            $class = $callback['class'] ?? null;
            $function = $callback['function'] ?? null;

            $ref = new \ReflectionClass($class);
            if (!($ref->hasMethod($function) && $ref->getMethod($function)->isPublic() && !$ref->getMethod($function)->isStatic())) {
                Logger::getInstance()->console(json_encode(['error' => '回调配置的方法没有调用到', 'callback' => $callback, 'class' => $class, 'function' => $function, 'ref' => $ref]), Logger::LOG_LEVEL_ERROR, $logPath);
            }

            /** 说明配置正确 */
            $class = new $class();
            $callFlg = call_user_func_array([$class, $function], [$weChatParams]);
            if ($callFlg === true) {
                // log
                $result[$key] = json_encode(['class' => $callback['class'], 'function' => $callback['function'], 'result' => $callFlg]);
            }
        }

        /** 如果没有人处理 告诉微信失败了 */
        if (empty(count($result))) {
            Logger::getInstance()->log(json_encode(['error' => '该订单没有被任何接收者处理']), Logger::LOG_LEVEL_ERROR, $logPath);
            throw new InfoException(1029, '该订单没有被任何接收者处理');
        }

        /** 如果都处理了报错 */
        if (count($result) > 1) {
            Logger::getInstance()->log(json_encode(['error' => '该订单被多人处理', 'result' => $result]), Logger::LOG_LEVEL_ERROR, $logPath);
            throw new InfoException(1029, '该订单没有被任何接收者处理');
        }

        /** 只有一个人处理 返回成功 */
        if (count($result) === 1) {

            /** 验证后入库 */
            $outTradeNo = $weChatParams->get('out_trade_no');
            if (superEmpty($outTradeNo)) {
                throw new InfoException(1033, 'out_trade_no出现异常');
            }
        
            Model::create()->tableName('pay_wechat_callback')->update(['handle' => json_encode($result)], ['out_trade_no' => $outTradeNo]);
        }
    }
}
