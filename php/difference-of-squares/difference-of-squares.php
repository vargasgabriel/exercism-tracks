<?php

function squareOfSums($number)
{
    $numbers = range(1, $number);
    $result = array_reduce($numbers, function($carry, $item) {
        $carry+= $item;
        return $carry;
    });
    return $result ** 2;
}

function sumOfSquares($number)
{
    $numbers = range(1, $number);

    $numbers_squares = array_map(function ($value) {
        return $value ** 2;
    }, $numbers);

    $result = array_reduce($numbers_squares, function($value, $accumulator) {
        $value+= $accumulator;
        return $value;
    });

    return $result;
}

function difference($number)
{
    return squareOfSums($number) - sumOfSquares($number);
}