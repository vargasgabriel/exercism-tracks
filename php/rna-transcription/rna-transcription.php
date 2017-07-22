<?php

function dnaToRna($nucleotide)
{
    $rna = [
        'G' => 'C',
        'C' => 'G',
        'T' => 'A',
        'A' => 'U'
    ];

    return $rna[$nucleotide];
}

function toRna(String $input_dna)
{

    $dna = str_split($input_dna);

    $result = array_map("dnaToRna", $dna);
    
    return implode("", $result);
}