<?php


namespace EasySwoole\EasySwoole;


use App\Pool\RabbitPool;
use App\Queue\Config\RabbitConfig;
use App\Queue\Driver\RabbitQueue;
use EasySwoole\EasySwoole\AbstractInterface\Event;
use EasySwoole\EasySwoole\Swoole\EventRegister;
use Es3\Constant\EsConst;

class EasySwooleEvent implements Event
{
    /**
     * @return void
     */
    public static function initialize(): void
    {
        \Es3\EasySwooleEvent::initialize();
    }

    /**
     * @throws \EasySwoole\Component\Process\Exception
     * @throws \EasySwoole\RedisPool\Exception\Exception
     * @throws \Es3\Exception\ErrorException
     * @throws \EasySwoole\RedisPool\RedisPoolException
     * @throws \EasySwoole\Pool\Exception\Exception
     */
    public static function mainServerCreate(EventRegister $register): void
    {
        \Es3\EasySwooleEvent::mainServerCreate($register);
    }
}