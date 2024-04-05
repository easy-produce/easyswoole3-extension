<?php

namespace Es3\Utility;

class Text
{
    public static function clearEscape(?string $string): string
    {
        return str_replace(array("\r\n", "\n"), '', $string);
    }
}