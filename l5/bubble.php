<?php

$arr = [0, 3, 5, 4, 1, 8, -2];

for($i = 1; $i < count($arr); $i++) {
    for($j = 1; $j < count($arr); $i++) {
        if($arr[$j] < $arr[$j-1]) {
            $tmp = $arr[$j];
            $arr[$j] = $arr[$j-1];
            $arr[$j-1] = $tmp;
        }
    }


    var_export($arr);
}