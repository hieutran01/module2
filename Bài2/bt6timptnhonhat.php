<?php
$arr = [9,6,4,3,2,6,-1];
$min = $arr[0];
for($i = 1;$i < count($arr);$i++){
    if($arr[$i] < $min){
        $min = $arr[$i];
    }
}
echo 'Giá trị nhỏ nhất trong mảng là ' .$min
?>
