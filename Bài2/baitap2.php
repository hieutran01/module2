<?php
function timchisonhonhat($arr) {
    $min = $arr[0];
    $index = 0;
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
            $index = $i;
        }
    }
    return $index;
}

$arr = [5, 3, 8, 1, 6, 9];
$chisonhonhat = timchisonhonhat($arr);
echo "Vị trí phần tử nhỏ nhất trong mảng là: " . $chisonhonhat;
// Output: Vị trí phần tử nhỏ nhất trong mảng là: 3

