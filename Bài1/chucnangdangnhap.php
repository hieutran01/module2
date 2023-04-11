<style>
    .hieu{
        background-color: blanchedalmond;
            width: 500px;
            border: 1px solid #ccc;
            margin: 25px;
            padding: 10px;
            float: left;
    }
</style>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if ($username === "admin" && $password ==="admin") {
        echo "chào mừng admin";
    } else{
        echo "lỗi đăng nhập";
    }
}
?>
<form class='hieu' method='post'>
<h2>Login</h2>
  <label>  username: <input type="text" name="username" size='30' placeholder='username'> <br></label>
  <label>  password: <input type="password" name="password" size="30" placeholder="password"> <br></label>
    <input type="submit" value="sign in">
</form>