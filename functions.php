<?php

use Alto\Functions\ArrayFunctions as f;

if (!function_exists('array_first')) {
    function array_first(array $arr): mixed
    {
        return f\ArrayFunctions::array_first($arr);
    }
}

if (!function_exists('array_last')) {
    function array_last(array $arr): mixed
    {
        return f\ArrayFunctions::array_last($arr);
    }
}
