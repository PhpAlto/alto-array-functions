<?php

namespace Alto\Functions\ArrayFunctions;

final readonly class ArrayFunctions
{
    public static function array_first(array $arr): mixed
    {
        if (null === $key = array_key_first($arr)) {
            return null;
        }

        return $arr[$key];
    }

    public static function array_last(array $arr): mixed
    {
        if (null === $key = array_key_last($arr)) {
            return null;
        }

        return $arr[$key];
    }
}
