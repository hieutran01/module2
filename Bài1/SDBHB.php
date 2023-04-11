<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$ten = $_POST['tdn'];
$mk = $_POST['mk'];
$ketqua = ($ten == 'hieu' && $mk == '123') ? 'đăng nhập thành công':'đăng nhập thất bại' ;
echo $ketqua;
}  
?>
<form action="" method='post'>
<label for="">Tên Đăng Nhập</label><br>
<input type="text"name='tdn'><br><br>

<label for="">Mật Khẩu</label><br>
<input type="password" name='mk'><br><br>

<input type="submit" value='submon form'>
</form>