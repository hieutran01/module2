<?php
function tencualophoc($str){
    $regexp = '/^[CAP][0-9]{4,4}[GHIKLM]$/';
    if(preg_match($regexp,$str)){
        echo ('hợp lệ');
    }else{
        echo ('không hợp lệ');
    }
}
tencualophoc('C0318G');
echo "<br/>";
tencualophoc('P0323A');