<?php
function selectionSort($list) {
    $n = count($list);

    for ($i = 0; $i < $n-1; $i++) {
        $minIndex = $i;

        for ($j = $i+1; $j < $n; $j++) {
            if ($list[$j] > $list[$minIndex]) {
                $minIndex = $j;
            }
        }

        if ($minIndex != $i) {
            $temp = $list[$i];
            $list[$i] = $list[$minIndex];
            $list[$minIndex] = $temp;
        }
    }

    return $list;
}
$list = [1, 9, 4.5, 6.6, 5.7, -4.5];
$result = selectionSort($list);
print_r($result);
