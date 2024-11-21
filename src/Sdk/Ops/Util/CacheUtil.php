<?php

namespace App\Module\Ops\Util;

use EasySwoole\FastCache\Cache;

class CacheUtil
{
    public static function hGetALl(string $key, bool $isUnset = true): array
    {
        $keys = Cache::getInstance()->hkeys($key);

        $nList = [];
        foreach ($keys as $i => $field) {
            $cache = Cache::getInstance()->hget($key, $field);
            $nList[$field] = Arrayutil::removeEmpty($cache);
        }
        if ($isUnset) {
            Cache::getInstance()->unset($key);
        }
        return $nList;
    }

    public static function hDel(string $key)
    {
        Cache::getInstance()->unset($key);
    }
}