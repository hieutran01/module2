<?php
// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // echo '<pre>';
    // print_r($_REQUEST);
    // echo '</pre>';

    // echo '<br>'. $_REQUEST['username'];
    // echo '<br>'. $_REQUEST['email'];
    // echo '<br>'. $_REQUEST['password'];

 //khai báo biến theo kiểu biến dữ liệu
    $username =  $_REQUEST['username'];
    $email =  $_REQUEST['email'];
    $password =  $_REQUEST['password'];
//kiểm tra tồn tai dữ liệu username hoặc password
    if( $username == 'admin' &&  $password == '123'){
    echo '<br> chào mừng admin';
    }else{
        echo '<br> tài khoản không tồn tại';
    }
    
}
?>


<form action="" method="POST">
    
    username: <input type="text" name="username"> <br>
    email: <input type="email" name="email"> <br>
    password: <input type="password" name="password"> <br>
    <input type="submit" value="Gui">
</form>