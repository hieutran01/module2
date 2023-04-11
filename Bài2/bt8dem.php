<?php
// Bước 1: Khai báo chuỗi và gán giá trị
$str = "Hello World!";

// Bước 2: Khai báo biến ký tự và gán giá trị
$char = "l";

// Bước 3: Khai báo biến đếm
$count = 0;

// Bước 4: Sử dụng vòng lặp duyệt từng ký tự trong chuỗi
for ($i = 0; $i < strlen($str); $i++) {
    // So sánh ký tự trong chuỗi với ký tự nhập vào
    if ($str[$i] == $char) {
        // Nếu bằng nhau, tăng biến đếm lên 1
        $count++;
    }
}

// Bước 5: In ra giá trị biến đếm
echo "Số lần xuất hiện của ký tự '$char' trong chuỗi '$str' là: $count";
?>

