<?php

namespace App\Helper;

trait Helper
{
    public static function array_replace_keys($array, $keys)
    {
        foreach ($keys as $search => $replace) {
            if (isset($array[$search])) {
                $array[$replace] = $array[$search];
                unset($array[$search]);
            }
        }

        return $array;
    }
}

