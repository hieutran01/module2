<?php
// tạo mảng 100 số nguyên ngẫu nhiên
$arr = array();
for ($i = 0; $i < 100; $i++) {
    $arr[$i] = rand(0, 100);
}

// in mảng
echo implode(' ', $arr) . "\n";

// nhập chỉ số phần tử muốn hiển thị
$index = 101;

try {
    // kiểm tra nếu chỉ số không hợp lệ (index < 0 hoặc index >= 100) thì ném ra ngoại lệ
    if ($index < 0 || $index >= 100) {
        throw new Exception("Chỉ số vượt quá giới hạn của mảng");
    }

    // hiển thị giá trị phần tử
    echo "Giá trị của phần tử có chỉ số $index là " . $arr[$index] . "\n";
} catch (Exception $e) {
    // bắt ngoại lệ và hiển thị thông báo lỗi
    echo "Exception: " . $e->getMessage() . "\n";
}
?>
