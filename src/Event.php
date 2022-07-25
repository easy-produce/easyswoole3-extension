<?php

namespace Es3;

use EasySwoole\Component\Container;
use EasySwoole\Component\Singleton;

class Event extends Container
{
    use Singleton;

    function set($key, $item)
    {
        $key = strtolower($key);

        if (is_callable($item)) {
            return parent::set($key, $item);
        } else {
            return false;
        }
    }

    function hook($event, $function, ...$arg)
    {
        $event = strtolower($event);
        $call = $this->get($event);
        if (is_callable($call)) {
            return call_user_func($call, $event, $function, ...$arg);
        } else {
            return null;
        }
    }
}