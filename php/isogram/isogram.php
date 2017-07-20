<?php

function countLetters($alpha, $char)
{
    if (array_key_exists($char, $alpha)) {
        return $alpha[$char] + 1;
    }

    return 1;
}

function sanitize($string)
{
    $string = preg_replace('/[\-\s]+/', '', $string);
    return mb_strtolower($string);
}

function isIsogram($string)
{
    $disinfected_string = sanitize($string);
    $array = preg_split("//u", $disinfected_string, null, PREG_SPLIT_NO_EMPTY);
    $alpha = [];

    foreach($array as $char) { 
        $alpha[$char] = countLetters($alpha, $char);
    }

    $result = array_unique($alpha);

    if(count($result) == 1) {
        return true;
    }

    return false;

}