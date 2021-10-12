<?php

function getAverage($array)
{
	$sum = 0;
	$counter = 0;
	foreach ($array as $value) {
		$counter++;
		$sum += $value;
	}
	return $sum / $counter;
}
