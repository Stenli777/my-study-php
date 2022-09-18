<?php
class Point
{
    public $x;
    public $y;
}
    $point1 = New Point();
    $point1->x = rand(0,10);
    $point1->x = rand(0,10);
    $point2 = New Point();
    $point2->x = rand(0,10);
    $point2->x = rand(0,10);
function GetMidpoint($point1,$point2)
{
    $midpoint = New Point();
    $midpoint->x = ($point1->x + $point2->x) / 2;
    $midpoint->y = ($point1->x + $point2->x) / 2;
    return $midpoint;
}

print_r(GetMidpoint($point1,$point2));