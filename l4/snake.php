<?php

$shortopts = "s::";
$options = getopt($shortopts);

$size = 0;

if(isset($options['s']) && $options['s'] > 0) {
	$size = (int)$options['s'] ?? -1;
	var_dump($options);

	$format = "%5s";

	for($i = 0; $i < $size; $i++) {
		for($j = 0; $j < $size; $j++) {
			if($j%2==0)
				printf($format, $size*$j+$i+1);  
			else 
				printf($format, $size*$j-$i+$size);  
		}
		echo "\n";
	}
}
else {
	echo "Please enter value larger than 0";
}