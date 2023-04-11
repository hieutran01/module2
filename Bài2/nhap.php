<?php
$age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
//Sử dụng vòng lặp foreach với Associative Array 
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
// Lấy giá trị thông qua khoá:
$age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
echo "Peter is " . $age['Peter'] . " years old.";



// Đếm số phần tử của một mảng – Hàm count()
// Hàm count() được sử dụng để trả về độ dài (số lượng phần tử) của một mảng.
$cars = ["Volvo", "BMW", "Toyota"];
echo count($cars); // output: 3


// Sử dụng vòng lặp thông qua một mảng index
// Sử dụng vòng lặp for để in tất cả các giá trị của một mảng.
$cars = ["Volvo", "BMW", "Toyota"];
for ($x = 0; $x < count($cars); $x++) {
    echo $cars[$x];
    echo "<br>";
}


sort() - Sắp xếp mảng theo thứ tự tăng dần
Theo dõi ví dụ bên dưới đây sắp xếp các phần tử của một mảng $cars theo thứ tự tăng dần chữ cái:
    $cars = ["Volvo", "BMW", "Toyota"];
    sort($cars);
    print_r($cars) // Array ( [0] => BMW [1] => Toyota [2] => Volvo )


rsort() - Sắp xếp mảng theo thứ tự giảm dần
    $cars = ["Volvo", "BMW", "Toyota"];
    rsort($cars);
    print_r($cars) // Array ( [0] => Volvo [1] => Toyota [2] => BMW )


asort() – Sắp xếp mảng tăng dần theo giá trị
     $age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
     asort($age);
     print_r($age); // Array ( [Peter] => 35 [Ben] => 37 [Joe] => 43 )


ksort() – Sắp xếp mảng tăng dần theo khóa
    $age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
    ksort($age);
    print_r($age); // Array ( [Ben] => 37 [Joe] => 43 [Peter] => 35 )


arsort() – Sắp xếp mảng giảm dần theo giá trị
    $age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
    arsort($age);
    print_r($age); // Array ( [Joe] => 43 [Ben] => 37 [Peter] => 35 )


krsort() – Sắp xếp mảng giảm dần theo khóa
    $age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
    krsort($age);
    print_r($age); // Array ( [Peter] => 35 [Joe] => 43 [Ben] => 37 )



    $cars = [
        ["Volvo", 22, 18],
        ["BMW", 15, 13],
        ["Saab", 5, 2],
        ["Land Rover", 17, 15]
    ];
    
    echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
    echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
    echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
    echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";
    Ngoài ra có thể sử dụng hai vòng lặp for lồng nhau để lấy về giá trị của các phần tử trong mảng $cars.
    
    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }   