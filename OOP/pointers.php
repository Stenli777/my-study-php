<?php

class Point
{
    public $x;
    public $y;
}
$point1 = New Point();
$point1->x = 3;
$point1->y = 5;
$point2 = New Point();

function dup($point1)
{


    $point2 = $point1;
    return $point2;
}

print_r($point1);
print_r(dup($point1));