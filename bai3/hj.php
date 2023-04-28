<?php

$find = 23;
$numbers = [2, 5, 8, 12, 16, 23, 38, 56, 72, 91];
//          0  1  2   3   4   5   6   7   8    9

$L = 0;
$R = count($numbers) -1;
while ($L <= $R) {
    $M = floor( ($L + $R ) / 2);
    if($numbers[$M] <  $find){
        $L = $M + 1;
    }else if($numbers[$M] > $find){
        $R = $M - 1 ;
    }else {
        echo $M;
        break;
    }
}