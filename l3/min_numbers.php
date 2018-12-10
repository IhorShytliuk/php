<?php
$options = getopt("a:");
var_dump($options);

$max_amount = 100000;

$amount = (int) $options["a"] ?? 0;

if($amount>$max_amount) {
	echo "max amount is " . $max_amount;
}
else {
	$currency = [500,200,100,50,20,10,5,2,1];

	$result = array();
	for($i = 0; $i < count($currency); $i++) {
		if($amount/$currency[$i] >= 1) {
			$mult = (int) floor($amount/$currency[$i]);
			$result[$currency[$i]] = $mult;
			$amount = $amount - $currency[$i]* $mult;
		}
	}

	var_export($result);
}