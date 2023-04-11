<?php
echo "Nhập số lượng số nguyên tố cần in ra: ";
$numbers = 10;

// Bước 2: Khởi tạo biến đếm và biến số nguyên N ban đầu
$count = 0;
$N = 2;

// Bước 4: Lặp lại kiểm tra số nguyên tố đến khi đủ số lượng
while ($count < $numbers) {
  // Kiểm tra xem N có phải là số nguyên tố không
  $isPrime = true;
  for ($i = 2; $i <= sqrt($N); $i++) {
    if ($N % $i == 0) {
      $isPrime = false;
      break;
    }
  }
  // Nếu N là số nguyên tố thì in ra và tăng biến đếm
  if ($isPrime) {
    echo $N . " ";
    $count++;
  }
  // Tăng giá trị của N lên 1 để kiểm tra số tiếp theo
  $N++;
}
?>
