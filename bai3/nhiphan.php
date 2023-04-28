<?php

$arr = [1,2,3,4,5,6,7,8,9,10,11];

function seachNumber($array,$x){
    $truoc = 0;
    $sau = count($array) - 1;
    while ($truoc <= $sau){
        $mid = floor(($truoc + $sau) / 2);
        if($array[$mid]== $x){
            return $mid;
        }else if($x > $array[$mid]){
            $truoc = $mid + 1;
        }else if  ($x<$array[$mid]){
            $sau = $mid - 1;
        }
           
    }
    return -1;
}
$numbers = 4;

// echo seachNumber($arr,$x);

if(seachNumber($arr,$numbers) != -1){
    echo "phần tử " .$numbers ." có tồn tại trong mảng";
}else{
    echo "phần tử " .$numbers . " không tồn tại trong mảng";
}

