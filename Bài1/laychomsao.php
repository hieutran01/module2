<style>
    .hi{
        background-color: blanchedalmond;
            width: 500px;
            border: 1px solid #ccc;
            margin: 25px;
            padding: 10px;
            float: left; 
    }
</style>
<?php
$name = '';
$time = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $ns = $_POST['ngaysinh'];
    $ts = $_POST['thangsinh'];
    $flag  = true;
    if(is_numeric($ns) && is_numeric($ts)){
    switch ($ts){
        case 1:
            if($ns <=19){
                $name = 'Ma Kết';
                $time = '23/12 - 19/01';
            }

            if($ns >=20){
                $name = 'Bảo Bình';
                $time = '20/01 - 19/02';
            }
            break;

            case 2:
                if($ns <=19){
                    $name = 'Bảo Bình';
                    $time = '20/01 - 19/02';
                }
    
                if($ns >=20){
                    $name = 'Song Ngư';
                    $time = '20/02 - 21/03';
                }
                break;
                default:
                $flag = false;
    }
    }else{
        $flag == false;
    }
}
?>

<h1>Bạn Thuộc Chòm Sao Gì</h1>
    <form action="" method='POST' class='hi'>
        <label for="">Ngày Sinh</label><br>
        <input type="text" name='ngaysinh'><br><br>

        <label for="">Tháng Sinh</label><br>
        <input type="text" name='thangsinh'><br><br>

        <input type="submit" value='Lấy Chòm sao'>
        
        <?php 
        if($flag == true){
        $result = $name .' '.$time;
        }else{
            $result = "Dữ Liệu Không Hợp Lệ";
        }
        echo $result;
        ?>
    </form>