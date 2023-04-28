<?php
$arr = [1,2,3,4,5,6,7,8,9];
function search($find,$array){
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] === $find) {
            return true;
        }
    }
    return false;
}

$pt = 0;

if (search($pt,$arr)) {
    echo "phần tử " .$pt ." có tồn tại trong mảng";
} else {
    echo "Phần tử " .$pt ." không tồn tại trong mảng";
}

