<?php
$str = '0943.612.567,0912.612.567,0905.612.666,09051.612.666';






// Tách chuỗi thành mảng
$a = preg_split("/\,/", $str);
echo '<pre>';
print_r($a);
echo '</pre>';
// Duyệt mảng, tìm chuỗi có đúng với quy tắc: xxxx.xxx.xxx
// Phân chia vào các nhà mạng
$vina = [];
$mobie = [];
foreach ($a as $key => $value){
    $regexp ='/^[0-9]{4,4}\.[0-9]{3,3}\.[0-9]{3,3}$/';
    if(preg_match($regexp,$value)){
        // lấy 3 kí tự đầu tiên
     $ma = substr($value,0,3);
     if($ma == '091'||$ma == '094'){
        array_push($vina,$value);
     }else if($ma == '090'){
        array_push($mobie,$value);
     }

    }
}
echo '<pre>';
print_r( $vina);
print_r( $mobie);
echo '</pre>';



