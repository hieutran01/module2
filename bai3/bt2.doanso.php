<?php
   if ( $_SERVER['REQUEST_METHOD']== 'POST') {
   
    $nhapsocandoan = $_REQUEST['nhapsocandoan'];


    function guestNumber($array, $number, $L, $R){
        if ($L > $R){
        return "ERRO!!!";
}
    $mid = (int)(($L + $R) / 2);
    if ($array[$mid] < $number) {
        echo "Số " . $array[$mid] . " đúng không? <br>";
        echo "Không, con số do tôi nghĩ ra lớn hơn con số máy tính đưa ra <br>";
        return guestNumber($array, $number, $mid + 1, $R);
    } elseif ($array[$mid] > $number) {
        echo "Số " . $array[$mid] . " đúng không? <br>";
        echo "Không, con số do tôi nghĩ ra nhỏ hơn con số máy tính đưa ra <br>";
        return guestNumber($array, $number, $L, $mid - 1);
    } else {
        echo "Số " . $array[$mid] . " đúng không? <br>";
        echo "Chính xác, đó là con số tôi đã nghĩ <br>";
    }
}
    $array = range(1,100,1);
    echo guestNumber($array,$nhapsocandoan,0,count($array)-1);
}
?>

<form action="" method="post">
  <label for="fname"> Nhập số cần đoán :</label><br>
  <input type="text" id="" name="nhapsocandoan" ><br>
  <input type="submit" value="Bắt đầu tìm ">
</form> 

