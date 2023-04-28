<?php

$arr = [3,6,8,6,4,1,9];
$n = count($arr);
for($i =0;$i < $n-1;$i++){
    $min = $i;
    for($j=$i+1;$j<$n;$j++){
        if($arr[$j] < $arr[$min]){
            $min = $j;
        }
    }

    $t = $arr[$min];
    $arr[$min] = $arr[$i];
    $arr[$i] = $t;
}

for ($i = 0; $i < $n; $i++) {
    echo $arr[$i] . " ";
}
