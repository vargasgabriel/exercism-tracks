<?php

function isPangram($string) {

    $disinfected_string = sanitize($string);

    if (empty($disinfected_string)) {
        return false;
    }

    $array = str_split($disinfected_string);
    $alpha = [];

    foreach($array as $char) {
        $key = strtolower($char);
        $alpha[$key] = countLetters($alpha, $key);
    }

    if (count($alpha) == 26) {
        return true;
    }

    return false;
}

function countLetters($alpha, $char)
{
    if (array_key_exists($char, $alpha)) {
        return $alpha[$char] + 1;
    }

    return 1;
}

function sanitize($string)
{
    return preg_replace('/[^A-Za-z\-]+/', '', $string);
}