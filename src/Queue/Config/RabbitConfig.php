<?php

namespace Es3\Queue\Config;

use EasySwoole\Spl\SplBean;
use PhpAmqpLib\Connection\AMQPConnectionConfig;

class RabbitConfig extends SplBean
{
    protected string $host;
    protected int $port;
    protected string $username;
    protected string $password;
    protected string $vhost;

    protected $insist = false;
    protected $login_method = 'AMQPLAIN';
    protected $login_response = null;
    protected $locale = 'en_US';
    protected $connection_timeout = 3.0;
    protected $read_write_timeout = 3.0;
    protected $context = null;
    protected $keepalive = false;
    protected $heartbeat = 10;
    protected $channelRpcTimeout = 0.0;
    protected $sslProtocol = null;

    public function getHost(): string
    {
        return $this->host;
    }

    public function setHost(string $host): void
    {
        $this->host = $host;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function setPort(int $port): void
    {
        $this->port = $port;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getVhost(): string
    {
        return $this->vhost;
    }

    public function setVhost(string $vhost): void
    {
        $this->vhost = $vhost;
    }

    public function isInsist(): bool
    {
        return $this->insist;
    }

    public function setInsist(bool $insist): void
    {
        $this->insist = $insist;
    }

    public function getLoginMethod(): string
    {
        return $this->login_method;
    }

    public function setLoginMethod(string $login_method): void
    {
        $this->login_method = $login_method;
    }

    /**
     * @return null
     */
    public function getLoginResponse()
    {
        return $this->login_response;
    }

    /**
     * @param null $login_response
     */
    public function setLoginResponse($login_response): void
    {
        $this->login_response = $login_response;
    }

    public function getLocale(): string
    {
        return $this->locale;
    }

    public function setLocale(string $locale): void
    {
        $this->locale = $locale;
    }

    public function getConnectionTimeout(): float
    {
        return $this->connection_timeout;
    }

    public function setConnectionTimeout(float $connection_timeout): void
    {
        $this->connection_timeout = $connection_timeout;
    }

    public function getReadWriteTimeout(): float
    {
        return $this->read_write_timeout;
    }

    public function setReadWriteTimeout(float $read_write_timeout): void
    {
        $this->read_write_timeout = $read_write_timeout;
    }

    /**
     * @return null
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param null $context
     */
    public function setContext($context): void
    {
        $this->context = $context;
    }

    public function isKeepalive(): bool
    {
        return $this->keepalive;
    }

    public function setKeepalive(bool $keepalive): void
    {
        $this->keepalive = $keepalive;
    }

    public function getHeartbeat(): int
    {
        return $this->heartbeat;
    }

    public function setHeartbeat(int $heartbeat): void
    {
        $this->heartbeat = $heartbeat;
    }

    public function getChannelRpcTimeout(): float
    {
        return $this->channelRpcTimeout;
    }

    public function setChannelRpcTimeout(float $channelRpcTimeout): void
    {
        $this->channelRpcTimeout = $channelRpcTimeout;
    }

    /**
     * @return null
     */
    public function getSslProtocol()
    {
        return $this->ssl_protocol;
    }

    /**
     * @param null $sslProtocol
     */
    public function setSslProtocol($sslProtocol): void
    {
        $this->ssl_protocol = $sslProtocol;
    }
}