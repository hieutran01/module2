<?php

// $string = "1,2,3,4,5,6";
// $arrayStrings = preg_split('/,/', $string);
// $sum = 0;
// foreach ($arrayStrings as $value) {
//     $number = (int)($value);
//     if ($number % 2 == 0) {
//        $sum += $number;
//     }
// }
// echo "$sum";

//preg_match($pattern,$subject,$matches)

$subject = 'trandinhhieu19012002@gmail.com';
$regexp = '/^[A-Za-z0-9]+@[A-Za-z0-9]+\.[A-Za-z]+/';
if(preg_match($regexp,$subject)){
    echo 'khớp';
}else{
    echo 'không khớp';
}

/*
preg_match_all($pattern,$subject,&$matches)
*/
// $subject = "Chào mừng bạn đến với CodeGym. CodeGym - Hệ thống đào tạo lập trình hiện đại.";
// $pattern ='/\./';
// preg_match_all($pattern, $subject, $matches);
// echo '<pre>';
// print_r($matches);
// echo '</pre>';
/*
preg_split($pattern,$subject)
*/
$ip = "192.168.1.1";
$ip_arr = preg_split ("/\./", $ip);
echo '<pre>';
print_r($ip_arr);
echo '</pre>';

?>


