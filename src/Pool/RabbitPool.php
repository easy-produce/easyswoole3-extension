<?php

namespace Es3\Pool;

use EasySwoole\Pool\AbstractPool;
use EasySwoole\Pool\Config;
use Es3\Queue\Config\RabbitConfig;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Exception\AMQPProtocolChannelException;

class RabbitPool extends AbstractPool
{
    protected RabbitConfig $rabbitConfig;

    /**
     * @throws \EasySwoole\Pool\Exception\Exception
     */
    public function __construct(Config $conf, RabbitConfig $rabbitConfig)
    {
        parent::__construct($conf);
        $this->rabbitConfig = $rabbitConfig;
    }

    /**
     * @throws \Exception
     */
    protected function createObject(): AMQPStreamConnection
    {
        return new AMQPStreamConnection(
            $this->rabbitConfig->getHost(),
            $this->rabbitConfig->getPort(),
            $this->rabbitConfig->getUsername(),
            $this->rabbitConfig->getPassword(),
            $this->rabbitConfig->getVhost(),

            $this->rabbitConfig->isInsist(),
            $this->rabbitConfig->getLoginMethod(),
            $this->rabbitConfig->getLoginResponse(),
            $this->rabbitConfig->getLocale(),
            $this->rabbitConfig->getConnectionTimeout(),
            $this->rabbitConfig->getReadWriteTimeout(),
            $this->rabbitConfig->getContext(),
            $this->rabbitConfig->isKeepalive(),
            $this->rabbitConfig->getHeartbeat(),
            $this->rabbitConfig->getChannelRpcTimeout(),
            $this->rabbitConfig->getSslProtocol(),
        );
    }

    public function itemIntervalCheck($connection): bool
    {
        /** @var \PhpAmqpLib\Connection\AMQPStreamConnection $connection */
        try {
            if (!$connection->isConnected()) {
                return false;
            }

            try {
                $channel = $connection->channel();
                $channel->queue_declare('ping', passive: true);
                return true;
            } catch (AMQPProtocolChannelException $e) {
                if ($e->getCode() === 404) {
                    return true;
                }
            }

            // 主动检查心跳
            $connection->checkHeartBeat();
            return true;
        } catch (\Throwable $e) {
            echo "出现异常 : {$e->getMessage()} file : {$e->getFile()} line {$e->getLine()}";
            return false;
        }
    }
}