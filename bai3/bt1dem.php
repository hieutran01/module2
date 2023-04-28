<?php
$numbers = [1,2,3,4,2,2];
$count = 0;
function dem($numbers,$x){
for($i = 0;$i < count($numbers);$i++){
    if($numbers[$i] == $x){
        $count++;
    }
}
return $count;
}
$x = 2;
 echo (dem($numbers,$x));

