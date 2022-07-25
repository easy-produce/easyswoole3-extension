<?php

namespace Es3;

use App\Constant\AppConst;
use EasySwoole\ORM\Utility\Schema\Table;

class EsUtility
{

    /**
     * 扫描目录
     */
    public static function sancDir(string $path): array
    {
        if (!is_dir($path)) {
            return [];
        }

        $files = scandir($path) ?? [];
        foreach ($files as $key => $dir) {
            // 过滤空
            if (in_array($dir, ['..', '.'])) {
                unset($files[$key]);
            }
        }

        return $files;
    }

    /**
     * 获取控制器中的class
     * @param string $controllerNameSpace
     * @return string
     */
    public static function getControllerClassName(string $controllerNameSpace): string
    {
        $className = explode('\\', $controllerNameSpace);
        $className = (string)end($className);

        return $className;
    }

    public static function getControllerModuleName(string $controllerNameSpace): string
    {
        $className = explode('\\', $controllerNameSpace);
        $ModuleName = array_slice($className, -2, 1);
        return end($ModuleName);
    }
}
