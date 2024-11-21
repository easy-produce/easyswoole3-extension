<?php

namespace App\Module\Callback\Util;

use App\Constant\EnvConst;

class EnvUtil
{
    /**
     * callback 本地是否执行
     */
    public static function isRun(): bool
    {
        if (isProduction()) {
            return true;
        }

        $ref = new \ReflectionClass(EnvConst::class);
        $callbackRun = $ref->getConstant('CALLBACK_RUN');

        if ($callbackRun === true) {
            return true;
        }

        return false;
    }

    public static function ss()
    {

    }
}
