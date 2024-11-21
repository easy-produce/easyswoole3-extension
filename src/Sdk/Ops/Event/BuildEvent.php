<?php

namespace App\Module\Ops\Event;

use Es3\Base\BaseEvent;
use EasySwoole\Component\Singleton;

class BuildEvent extends BaseEvent
{
    use Singleton;

    public static function run()
    {
    }
}