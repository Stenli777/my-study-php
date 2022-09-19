<?php

namespace App\Rational;

use function App\Utils\gcd;

// BEGIN (write your solution here)
function makeRational($numer, $denom)
{
    $gcd = gcd($numer, $denom);
    return ['numer' => $numer / $gcd, 'denom' => $denom / $gcd];
}

function getNumer($rational)
{
    return $rational['numer'];
}

function getDenom($rational)
{
    return $rational['denom'];
}

function add($rational1, $rational2)
{
    return makeRational(
        getNumer($rational1) * getDenom($rational2) + getNumer($rational2) * getDenom($rational1),
        getDenom($rational1) * getDenom($rational2)
    );
}

function sub($rational1, $rational2)
{
    return makeRational(
        getNumer($rational1) * getDenom($rational2) - getNumer($rational2) * getDenom($rational1),
        getDenom($rational1) * getDenom($rational2)
    );
}
// END

function ratToString($rat)
{
    return getNumer($rat) . '/' . getDenom($rat);
}