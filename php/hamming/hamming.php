<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{


	if(strlen($a) != strlen($b)) {
		throw new InvalidArgumentException('DNA strands must be of equal length.');

	}

	$a_array = str_split($a);
	$b_array = str_split($b);

	$diff = array_diff_assoc($a_array, $b_array);

	return count($diff);

}