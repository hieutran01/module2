<?php

 function a($x,$y){
    if($y == 0 || $x == 0){
        echo 'lỗi Ngoại Lệ';
    }
 
 
    else{
        $tong = $x + $y;
        $hieu = $x - $y;
        $tich = $x * $y;
        $thuong = $x / $y;
        echo ('Tổng: '. $x .' + '. $y .' = '. $tong).'<br>';
        echo ('Hiệu: '. $x .' - '. $y .' = '. $hieu).'<br>';
        echo ('Tích: '. $x .' * '. $y .' = '. $tich).'<br>'  ;
        echo ('Thương: '. $x .' / '. $y .' = '. $thuong);
    }
 

}
a(9,1);



?>