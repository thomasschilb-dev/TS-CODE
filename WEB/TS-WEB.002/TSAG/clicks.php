<?php

function count_it($file_name = 'clicks.txt')
{
	$count = 1;

	if (!file_exists($file_name)) file_put_contents($file_name, '1');
	else {
		$count = 1 + (int) file_get_contents($file_name);
		file_put_contents($file_name, $count);
	}

	return $count;
}

$count = count_it();

require 'clicks.tmp.php';
?>