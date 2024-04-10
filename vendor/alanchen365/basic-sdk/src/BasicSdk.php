<?php

namespace Es3\Basic;

use EasySwoole\Component\Singleton;
use EasySwoole\Utility\File;

class BasicSdk
{
    use Singleton;

    public function run()
    {
        /** 先删除 */
        $targetController = EASYSWOOLE_ROOT . '/App/Controller/Basic/';
        File::deleteDirectory($targetController);

        $targetModule = EASYSWOOLE_ROOT . '/App/Module/Basic/';
        File::deleteDirectory($targetModule);

        /** 后复制 */
        $sdkController = EASYSWOOLE_ROOT . '/vendor/alanchen365/basic-sdk/src/Controller/Basic/';
        File::copyDirectory($sdkController, $targetController);

        $sdkModule = EASYSWOOLE_ROOT . '/vendor/alanchen365/basic-sdk/src/Module/Basic/';
        File::copyDirectory($sdkModule, $targetModule);
    }
}
