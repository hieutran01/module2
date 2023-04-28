<?php

//$str = "hello, cu";

// echo "A nói: \"$str\"";
// echo "<br>";
// echo 'A nói: \''.$str.'\'';
// echo "<br>";
// echo 'A nói "'.$str.'" ';


// $arr = [
//     0 => 'Tôi',
//     1 => 'Học ',
//     2 => 'PHP',
//     3 => 'Tại CodeGym'
// ];
// print_r(implode(', ', $arr));


$ip = '192.168.1.1';
$ip_arr = explode('.', $ip);
var_dump($ip_arr);

$partern = '/hi/';
$subject = 'hi everybody, hi there';
$replacement = 'hello';
echo preg_replace($partern, $replacement, $subject);

// strlen đếm số kí tự trong chuổi
//echo strlen($str); 


// explode chuyển một chuổi string thành 1 mảng
// $explode = explode(',' , $str);
//print_r($explode);

// implode chuyển đổi mảng thành chuổi 
// $arr = ['hi','hi','hi','hi'];
// print_r(implode(',' , $arr));

// str_word_count trả về số từ trong chuổi
//echo str_word_count($str);
// $str = 'freetuts2014';
// $a = '/([a-z]+)([0-9]+)/';
// preg_match($a,$str, $matches);
// echo '<pre>';
// print_r($matches);
// echo '</pre>';
// Tìm chuỗi bắt đầu bằng h và kết thúc chữ o
// preg_match('/h(.+)o/', 'hello la xin chao', $matches);
// echo '<pre>';
// print_r($matches);
// echo '</pre>';

