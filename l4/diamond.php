<?php

$size = 10;
$dsize = $size*2;

$empty = "  ";
$star = "* ";

for($i = 0; $i < $dsize-1; $i++) {
	for($j = 0; $j < $dsize; $j++) {
		
		if($i < $size) {
			if($j < $size) {
				if($size-$j -1 > $i)
					echo $empty;
				else 
					echo $star;
			}
			else {
				if($i > $j-$size)
					echo $star;
				else 
					echo $empty;				
			}
		}
		else {
			if($j < $size) {
				if($i-$size+1> $j)
					echo $empty;
				else 
					echo $star;
			}
			else {
				if($dsize-$j > $i-$size+2)
					echo $star;
				else 
					echo $empty;				
			}
		}
	}
//	echo "<br>";
	echo "\n";
}
