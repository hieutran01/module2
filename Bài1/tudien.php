<?php

$dictionary = [

'hello' => 'xin chào',
'hi' => 'chào',
'goodbye' => 'tạm biệt',
'see you later' => 'hẹn gặp lại'

    
];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $search = $_POST['search'];
    $flag = 0;

    foreach ($dictionary as $key => $value) {
        if ($key == $search) {
        echo "Từ : " . $key . "<br> Nghĩa của từ : " . $value;
        echo '</br>';
        $flag = 1;
    }
    }

    if($flag == 0){
        echo "Không tìm thấy từ";
    }
}

// foreach, as là các từ khóa tạo thành cú pháp duyệt mảng.
// $dictionary là tên mảng chứa bộ từ và nghĩa của từ.
// $key là để duyệt từng phần tử trong mảng.
// $value là giá trị của từng key trong mảng.
?>
 <h2>Từ điển Anh - Việt</h2>
    <form method="post">
        <input type="text" name="search" placeholder="Nhập từ cần tìm ">
        <input type="submit" id="submit" value="Tìm">      

    </form>

