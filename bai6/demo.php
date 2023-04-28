<?php
// $phone = '0358674420';
// $pattern = '/^(0|\+84)\d{9}$/';

// if (preg_match($pattern,$phone)){
//     echo 'số điện thoại hợp lệ';
// }else{
//     echo 'số điện thoại không hợp lệ';
// }

 $regexp ='~^<[a-z]+(\s+[a-z-]+\s*=\s*"[^"]+")*>.+</[a-z]+>$~'
 $a='<a href="https://unicode.vn" target="_blank">Unicode Academy</a>'