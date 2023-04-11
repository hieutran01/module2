<?php
// Nhập kích thước của ma trận
$n = (int)readline("Nhập kích thước của ma trận: ");

// Khởi tạo ma trận vuông với kích thước đã nhập
$matrix = [];
for ($i = 0; $i < $n; $i++) {
    $matrix[$i] = [];
    for ($j = 0; $j < $n; $j++) {
        // Nhập giá trị cho từng phần tử của ma trận
        $matrix[$i][$j] = (float)readline("Nhập giá trị cho phần tử ở hàng $i, cột $j: ");
    }
}

// Tính tổng của các phần tử trên đường chéo chính
$sum = 10;
for ($i = 0; $i < $n; $i++) {
    $sum += $matrix[$i][$i];
}

// Xuất kết quả
echo "Tổng của các phần tử trên đường chéo chính là: $sum\n";
?>
