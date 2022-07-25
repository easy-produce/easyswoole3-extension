<?php

namespace Es3\Base;

use App\Constant\ResultConst;
use App\Constant\RpcConst;
use EasySwoole\Component\Singleton;
use EasySwoole\EasySwoole\Logger;
use EasySwoole\Rpc\Response;
use Es3\Exception\ErrorException;
use Es3\Exception\WaringException;

class Rpc
{
    protected $client;
    protected $result;

    function __construct()
    {
        $this->client = \EasySwoole\Rpc\Rpc::getInstance()->client();
    }

    /**
     * @return mixed
     */
    public function getResult(string $service, string $action, bool $ignoreError = false)
    {
        try {
            $response = $this->result[$service][$action] ?? null;
            if (!(new \ReflectionClass($response))->hasMethod('getStatus')) {
                // 记录log
                $error = 'rpc time out ! code : 7511';
                Logger::getInstance()->error($error, 'rpc_' . $service . '_' . $action);
                throw new ErrorException(7511, $service . '_' . $action . '远程网络访问失败');
            }

            /** 超时抛出异常 */
            if (empty($response)) {
                if (!$ignoreError) {
                    throw new ErrorException(7512, $service . '_' . $action . '远程网络访问失败');
                }

                // 记录log
                $error = 'rpc time out ! code : 7512';
                Logger::getInstance()->error($error, 'rpc_' . $service . '_' . $action);
            }

            /** 批量解析返回值 */
            if ($response->getStatus() != $response::STATUS_OK) {

                /** 是否忽略错误 */
                if (!$ignoreError) {
                    throw new ErrorException(7513, $service . '_' . $action . '远程服务出现错误 code:' . $response->getStatus());
                }

                // 记录log
                $error = 'rpc connection fail ! response:' . jsonEncode($response->toArray());
                Logger::getInstance()->error($error, 'rpc_' . $service . '_' . $action);
            }

            /** 调用成功 判断业务是否有错误 */
            $res = $response->getResult();

            $code = $res['code'] ?? null;
            $result = $res['result'] ?? null;
            $msg = $res['msg'] ?? '';

            if ($code < ResultConst::SUCCESS_CODE) {
                if (!$ignoreError) {
                    throw new ErrorException($code, $msg);
                }
            }

            return $result;
        } catch (\Throwable $throwable) {
            
            $error = 'code:' . $throwable->getCode() . 'msg:' . $throwable->getMessage();
            Logger::getInstance()->error($error, 'rpc_' . $service . '_' . $action);
            throw $throwable;
        }
    }

    /**
     * @param mixed $result
     */
    public function setResult($result): void
    {
        $this->result = $result;
    }

    function addCall(string $service, string $action, $arg = null, $serviceVersion = null)
    {
        $this->client->addCall($service, $action, null)
            ->setOnFail(function (Response $response) use ($service, $action) {
                $this->result[$service][$action] = $response;
            })
            ->setOnSuccess(function (Response $response) use ($service, $action) {
                $this->result[$service][$action] = $response;
            });
    }

    function exec(float $timeout = 3.0)
    {
        $this->client->exec($timeout);
    }

//    /**
//     * 调用失败
//     */
//    static function onFail(string $server, string $action, Response $response)
//    {
//        $error = '调用rpc服务失败 status:' . $response->getStatus() . ' msg:' . $response->getMsg() . ' nodeId:' . $response->getNodeId();
//        Logger::getInstance()->error($error, 'rpc');
//    }
}
