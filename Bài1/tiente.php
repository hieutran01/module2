<style>
    .cuong{
        background-color: blanchedalmond;
            width: 500px;
            border: 1px solid #ccc;
            margin: 25px;
            padding: 10px;
            float: left;
    }
</style>
<?php
    $ketqua = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sotien = $_POST['sotien'];
    $donvi = $_POST['donvi'];
    if($donvi == 'USD'){
         $ketqua = $sotien * 23000 .' VNĐ';
    }else if($donvi == 'VNĐ'){
        $ketqua = $sotien / 23000 .' USD';
    
    }
    }
?>

<form action="" method='POST' class='cuong'>
     <label for="sotien">Nhập Số Tiền :</label><br>
     <input type="text" name="sotien"><br><br>

     <select name="donvi" id="">
        <option value="VNĐ">Chuyển Từ VNĐ sang USD</option>
        <option value="USD">Chuyển Từ USD sang VNĐ</option>
     </select>
     <input type="submit" value="change">
     <?php echo $ketqua;?>

</form>
