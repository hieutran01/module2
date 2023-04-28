<?php
function validateEmail($email){
    $regexp = '/^[A-Za-z0-9]+@[A-Za-z0-9]+\.[A-Za-z0-9]+$/';

if(preg_match($regexp,$email)){
    echo ('email đúng ');
}else{
    echo ('email sai');
}
}
validateEmail('trandinhhieu19012002@gmail.com');
echo "<br/>";
validateEmail("@#abc@gmail.com");


