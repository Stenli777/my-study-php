<?php

namespace App\PointFunctions;

use App\Point;

$point1 = New Point();
$point2 = New Point();
// BEGIN (write your solution here)
function getMidpoint($point1,$point2): Point
{
    $midpoint = New Point();
    $midpoint->x = ($point1->x + $point2->x) / 2;
    $midpoint->y = ($point1->x + $point2->x) / 2;
    return $midpoint;
}

print_r(getMidpoint($point1,$point2));
// END
