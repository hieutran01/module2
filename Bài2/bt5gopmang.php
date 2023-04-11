<?php
// Bước 1: Tạo 2 mảng số nguyên cho trước
$array1 = array(1, 2, 3);
$array2 = array(4, 5, 6);

// Bước 2: Tạo mảng thứ 3 rỗng.
$array3 = array();

// Bước 3: Gộp mảng
// Duyệt mảng 1 và gán từng phần tử vào mảng 3
foreach ($array1 as $value) {
  $array3[] = $value;
}

// Duyệt mảng 2 và gán từng phần tử vào mảng 3, tính từ vị trí cuối cùng của mảng 3
foreach ($array2 as $value) {
  $array3[] = $value;
}

// Bước 4: In mảng 3 sau khi gộp
print_r($array3);
?>
