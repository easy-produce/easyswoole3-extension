<?php

namespace Es3;

use Es3\Utility\File;

class Bootstrap
{
    public static function run(bool $EasySwooleEvent = true)
    {
        /** 设置配置文件 */
        \EasySwoole\EasySwoole\Core::getInstance()->runMode('produce');

        /** 兼容easyswoole不兼容php8的扩展 */
        $esVendor = EASYSWOOLE_ROOT . '/vendor/easy-produce/easyswoole3-extension/src/update/php8/vendor';
        $vendor = EASYSWOOLE_ROOT . '/vendor';

        /** orm处理 */
        $orm = "$esVendor/easyswoole/orm/";
        $targetOrm = "$vendor/easyswoole/orm/";
        File::copyDirectory($orm, $targetOrm);

        /** pimple处理 */
        $pimple = "$esVendor/pimple/pimple/src/Pimple/Container.php";
        $targetPimple = "$vendor/pimple/pimple/src/Pimple/Container.php";
        if (file_exists($targetPimple)) {
            unlink($targetPimple);
        }
        if (file_exists($pimple)) {
            copy($pimple, $targetPimple);
        }

        /** easyswoole 处理 */
        if ($EasySwooleEvent) {
            $easyswoole = EASYSWOOLE_ROOT . '/vendor/easy-produce/easyswoole3-extension/src/update/php8/easyswoole';
            $targetEasyswoole = EASYSWOOLE_ROOT . '/easyswoole';
            if (!file_exists($targetEasyswoole) || (file_get_contents($easyswoole) !== file_get_contents($targetEasyswoole))) {
                File::copyFile($easyswoole, $targetEasyswoole);
            }
        }

        /** easySwooleEvent 处理 */
        if ($EasySwooleEvent) {
            $easySwooleEvent = EASYSWOOLE_ROOT . '/vendor/easy-produce/easyswoole3-extension/src/update/php8/EasySwooleEvent.php';
            $targetEasySwooleEvent = EASYSWOOLE_ROOT . '/EasySwooleEvent.php';
            if (!file_exists($targetEasySwooleEvent) || (file_get_contents($easySwooleEvent) !== file_get_contents($targetEasySwooleEvent))) {
                File::copyFile($easySwooleEvent, $targetEasySwooleEvent);
            }
        }
    }
}
