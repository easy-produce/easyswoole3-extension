<?php

namespace Es3\Utility;

class Mail
{
    /**
     * 邮箱合法性校验
     * @param string $mail
     * @return bool
     */
    public static function isLegal(string $mail): bool
    {
        $rule = "/^([a-z0-9+_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,6}\$/i";
        if (strpos($mail, '@') !== false && strpos($mail, '.') === false) {
            return false;
        }

        return preg_match($rule, $mail);
    }
}
