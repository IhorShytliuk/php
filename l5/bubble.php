<?php

$size = 8;

$arr = [];
for($i = 0; $i < $size; $i++) {
    $arr[$i] = rand(-100, 100);
}

for($i = 0; $i < count($arr)-1; $i++) {
    for($j = count($arr)-1; $j > $i; $j--) {
        if($arr[$j] < $arr[$j-1]) {
            $tmp = $arr[$j];
            $arr[$j] = $arr[$j-1];
            $arr[$j-1] = $tmp;
        }
    }
}

var_export($arr);
