<?php

namespace App\Module\Ops\Util;

class Arrayutil
{
    public static function removeEmpty($array)
    {
        foreach ($array as $key => $value) {
            if (empty($value)) {
                unset($array[$key]);
            }

            if ('' == $value) {
                unset($array[$key]);
            }

            if (0 === $value) {
                unset($array[$key]);
            }
        }

        return $array;
    }
}