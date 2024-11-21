<?php

namespace App\Module\Ops\Util;

class StringUtil
{
    /**
     * 字符串在数据中模糊匹配
     * @param string $string
     * @param array $needles
     * @return bool
     */
    public static function strPosArray(string $string, array $needles): bool
    {
        foreach ($needles as $needle) {
            if (strpos($string, $needle) !== false) {
//                echo "字符串中包含 \"$needle\" 子串。";
                return true;
            }
        }

        return false;
    }
}