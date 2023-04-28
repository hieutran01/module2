<?php

$arr = [1, 1, 7, 6, 5, 4, 3, 2, 1, 3, 2, 1];
$n = count($arr);

for($i = 0;$i < $n-1;$i++){
    for($j = $n -1; $j>$i ;$j--){
        if($arr[$j] < $arr[$j-1]){
            $t = $arr[$j-1];
           $arr[$j-1] = $arr[$j];
            $arr[$j] = $t;
        }
    }
}
for ($i = 0; $i < $n; $i++) {
    echo $arr[$i] . " ";
}

// echo "<pre>";
//     print_r($arr) ;
//     echo "</pre>";

