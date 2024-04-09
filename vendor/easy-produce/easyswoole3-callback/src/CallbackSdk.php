<?php

namespace Es3\Callback;

use EasySwoole\Component\Singleton;
use \Es3\Utility\File;

class CallbackSdk
{
    use Singleton;

    public function run()
    {
        /** 先删除 */
        $targetModule = EASYSWOOLE_ROOT . '/App/Module/Callback/';
        File::deleteDirectory($targetModule);

        /** 后复制 */
        $sdkModule = EASYSWOOLE_ROOT . '/vendor/easy-produce/easyswoole3-callback/src/Module/Callback/';
        File::copyDirectory($sdkModule, $targetModule);
    }
}
