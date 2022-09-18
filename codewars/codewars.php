<?php

function reverseWords($str) {

    $arr = explode(" ",$str);
    foreach ($arr as $v)
        $arr1[] = strrev($v);

    return implode(" ",$arr1);
}

$str = "sihT si na !elpmaxe";

print_r(reverseWords($str));