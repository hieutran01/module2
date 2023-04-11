<style>
    .hi {
        background-color: blanchedalmond;
            width: 500px;
            border: 1px solid #ccc;
            margin: 25px;
            padding: 10px;
            float: left; 
    }
</style>
<?php
$ketqua = 0;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sothunhat = $_POST['sothunhat'];
    $pheptinh = $_POST['pheptinh'];
    $sothuhai = $_POST['sothuhai'];
   
   
    if(is_numeric($sothunhat) == false && is_numeric($sothuhai) == false){
       $ketqua = 'lỗi do có chữ';
      
    }else{
        switch ($pheptinh) {
            case '+':
                 $ketqua = $sothunhat + $sothuhai;
                break;
     
            case '-':
                 $ketqua = $sothunhat - $sothuhai;
                 break;
    
            case '*':
                 $ketqua = $sothunhat * $sothuhai ;
                break;
    
            case '/':
                if($sothuhai == 0){
                    $ketqua = "lỗi";
               
                }else{
                    $ketqua = $sothunhat / $sothuhai;
                }
                break;
        }
    }
}
?>
<form action="" method='post' class='hi'>
<h2>Calculator</h2>
<label for="">Số Thứ 1</label>
<input type="text" name='sothunhat' placeholder='nhập Số'><br><br>

<select name="pheptinh">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>

</select> <br><br>
<label for="">Số Thứ 2</label>
<input type="text" name='sothuhai' placeholder='Nhập Số'><br><br>

<input type="submit" value='Tính'>
  
<p>Kết quả là : <?php echo $result ; ?></p>
</form>