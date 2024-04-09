<?php


namespace EasySwoole\EasySwoole;


use EasySwoole\EasySwoole\AbstractInterface\Event;
use EasySwoole\EasySwoole\Swoole\EventRegister;

class EasySwooleEvent implements Event
{
    /**
     * @return void
     */
    public static function initialize(): void
    {
        \Es3\EasySwooleEvent::initialize();
    }

    public static function mainServerCreate(EventRegister $register): void
    {
        \Es3\EasySwooleEvent::mainServerCreate($register);
    }
}