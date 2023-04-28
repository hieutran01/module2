<?php

$arr = [3,6,8,6,4,1,9];
$n = count($arr);
for($i = 1;$i < $n;$i++){
    $j =$i-1;
    $t = $arr[$i];
    whilr($t < $arr[$j] && $j >= 0){
        $arr[$j+1] = $arr[$j];
        $j--;

    }
    $arr[$j+1] = $t;
}
for ($i = 0; $i < $n; $i++) {
    echo $arr[$i] . " ";
}
