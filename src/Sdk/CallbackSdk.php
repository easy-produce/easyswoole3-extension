<?php

namespace Es3\Sdk;

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
        $sdkModule = EASYSWOOLE_ROOT . '/vendor/easy-produce/easyswoole3-extension/src/Sdk/Callback/';
        File::copyDirectory($sdkModule, $targetModule);
    }
}