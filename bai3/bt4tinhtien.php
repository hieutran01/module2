<?php
function matrixElementsSum($matrix) {
    $rows = count($matrix);
    $cols = count($matrix[0]);
    $sum = 0;
    
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            if ($matrix[$i][$j] == 0) {
                for ($k = $i+1; $k < $rows; $k++) {
                    $matrix[$k][$j] = 0;
                }
            } else {
                $sum += $matrix[$i][$j];
            }
        }
    }
    
    return $sum;
}
$matrix = [
    [0, 1, 1, 2],
    [0, 5, 0, 0],
    [2, 0, 3, 3]];


echo matrixElementsSum($matrix);
