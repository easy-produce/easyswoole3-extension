<?php

namespace Es3\Base;

use EasySwoole\Component\Container;
use EasySwoole\Component\Singleton;

class BaseEvent extends Container
{
    use Singleton;

    public function set($key, $item)
    {
        if (is_callable($item)) {
            return parent::set($key, $item);
        } else {
            return false;
        }
    }

    public function hook($event, ...$args)
    {
        $call = $this->get($event);
        if (is_callable($call)) {
            return call_user_func($call, ...$args);
        } else {
            return null;
        }
    }
}
