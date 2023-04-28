<?php
function phone($str){
    $regexp = '/^\([0-9]{2,2}\)\-\(0[0-9]{9,9}\)$/';  
      if(preg_match($regexp,$str)){
        echo('số điện thoại hợp lệ');
    }else{
        echo('số điện thoại không hợp lệ');
    }
}
phone('(84)-(0978489648)');
echo "<br/>";
phone ('(a8)-(22222222)');


