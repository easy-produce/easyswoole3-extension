<?php

namespace Es3\Utility;

class Text
{
    public static function clearEscape(?string $string): string
    {
        return str_replace(array("\r\n", "\n"), '', $string);
    }

    public static function phpToJava(string $fileName = '', string $line = ''): ?string
    {
        if (empty($fileName)) {
            return null;
        }

        $nFileName = '';
        if (strpos($fileName ?? '', '.java') === true) {
            return $nFileName;
        }

        $fileName = str_replace(EASYSWOOLE_ROOT, '', $fileName ?? '');
        $nFileName = str_replace('.php', '.java', basename($fileName)) . "[$line]";

        return $nFileName;
    }
}