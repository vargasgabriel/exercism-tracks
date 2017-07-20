<?php

function raindrops($number)
{
    $numbers = range(1, $number);

    $factors = array_filter($numbers, function ($divider) use ($number) {
        if (($number % $divider) == 0) {
            return $divider;
        }
    });

    $intersect = array_intersect([ 3, 5, 7 ], $factors);

    if (empty($intersect)) {
        return "{$number}";
    }

    $result = "";

    if (in_array(3, $intersect)) {
        $result.="Pling";
    }

    if (in_array(5, $intersect)) {
        $result.="Plang";
    }

    if (in_array(7, $intersect)) {
        $result.="Plong";
    }

    return $result;
}