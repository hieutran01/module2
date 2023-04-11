<?php

// khai báo mảng liên kết

$thongtin = [
    'phi' => 24,
    'long' => 24,
    'cuong' => 24,
    'khuong' => 24,
    'hieu' => 22
];
// truy cập phần tử 

echo $thongtin['hieu'];

echo '<pre>';
print_r($thongtin);
echo '</pre>';

// thay đổi giá trị phần tử
 $thongtin['hieu'] = 30;

echo '<pre>';
print_r($thongtin);
echo '</pre>';


//xóa phần tử theo chỉ só
unset($thongtin['hieu']);

echo '<pre>';
print_r($thongtin);
echo '</pre>';

// duyệt mảng
foreach($thongtin as $key => $value){
    echo  $key .$value;
    echo '<br>';
}
 //thêm pt vào mảng

 $thongtin['tam'] = 23; 
 echo '<pre>';
print_r($thongtin);
echo '</pre>';