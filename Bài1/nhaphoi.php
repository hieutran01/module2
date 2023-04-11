<?php
// $ten = 'Hieu';
// $tuoi = 21;
// // var_dump ($ten);    //kiểm tra kiểu dữ liệu 
// echo gettype($tuoi);   //kiểm tra  kiểu dữ liệu

// $tuoi = '21.21'; // biến tuổi là một chuỗi có giá trị bằng '98'

 //echo (int)$tuoi; // Ép kiểu dữ liệu lúc này biến $tuoi là một kiểu int có giá trị 21
 //settype($tuoi,'integer');  // chuyển sang INT cách 2 
  
 //echo $tuoi;
 //is_int($tuoi); // kiểm tra biến có phải kiểu INT hay không


// $tuoi = (boolean)$tuoi; // lúc này $tuoi sẻ kiểu boolean
// $tuoi = is_bool($tuoi); // bool true,false

// echo $tuoi;

// $a = 123; // biến $a kiểu int
// $a = (float)$a; // Biến $a lúc này kiểu số thực (float)
// $a = (double)$a; // Biến $a lúc này kiểu ố thực (double)
// $a = is_double($a);
// echo $a;

// $a = 123; // khai báo biến $a kiểu int có giá trị 123
// $a = (string)$a; //Chuyển biến $a thành kiểu chuỗi và có giá trị là '123'
// $a = is_string($a); // kiểm tra một biến kiểu string 
// echo $a;
//$a = is_array($a);// kiểm tra kiểu mãng 

// define('PI',3.14);
// echo PI;


// TOÁN TỬ ĐIỀU KIỆN
// $n = -12;
// $result = ($n >= 0) ? "số dương" : "số âm";
// echo $result;
// 
// <p>Đây là một đoạn văn bản với <span style="color: red;">một phần được tô đỏ</span>.</p>
// $name = "";
// if (empty($name)) {
//     echo "Biến name rỗng";
// } else {
//     echo "Giá trị của biến name là: " . $name;
// }

// $cars = ["Volvo", "BMW", "Toyota"];
// $arrLength = count($cars);
// for($x = 0; $x < $arrLength; $x++) {
// echo $cars[$x];
// echo "<br>";
// }
// 

// $age = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
// foreach($age as $key => $value) {
// echo "Key=" . $key . ", Value=" . $value;
// echo "<br>";
// }

// $cars = [
//     ["Volvo",22,18],
//     ["BMW",15,13],
//     ["Saab",5,2],
//     ["Land Rover",17,15]
//     ];

    
//     for ($row = 0; $row < 4; $row++) {
//     echo "<ul>";
//     for ($col = 0; $col < 3; $col++) {
//     echo "<li>".$cars[$row][$col]."</li>";
//     }
//     echo "</ul>";
//     }
//     
// function num($a , $b = 7){
//     return $a + $b;

// }
// echo num(3,9);
// function familyName($fname, $year) {
//     echo "$fname Refines. Born in $year <br>";
// }

// familyName("Hege", "1975");
// familyName("Stale", "1978");
// familyName("Kai Jim", "1983");
// 
declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : float {
    return $a + $b;
}
echo addNumbers(1.2, 5.2);
?>