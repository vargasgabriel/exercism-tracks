<?php

function from($date)
{

	$new_date = clone($date);
	return $new_date->add(new DateInterval('PT1000000000S'));
	
}