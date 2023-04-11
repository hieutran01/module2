<?php

// Bước 1: Tạo ra một mảng 2 chiều có sẵn các phần tử.
$arr = [
    [1.5, 2.5, 3.5],
    [4.5, 5.5, 6.5],
    [7.5, 8.5, 9.5]
];

// Bước 2: Viết 1 hàm tính tổng đầu vảo là mảng 2 chiều vừa tạo và giá trị đại diện cho cột cần tính
function sumOfColumn($arr, $colIndex)
{
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i][$colIndex];
    }
    return $sum;
}

// Bước 3: Chạy chương trình và in ra kết quả

$sum = sumOfColumn($arr, 1);
echo "Tổng của cột $colIndex là: $sum";
