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
// $number1 = ' ';
// $number2 = ' ';
// $pheptinh = ' ';
 $result = ' ';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $number1 = $_POST['number1'];
    $pheptinh = $_POST['pheptinh'];
    $number2 = $_POST['number2'];

    switch ($pheptinh) {
        case '+':
            $result = $number1 + $number2;
        
            break;
        case '-':
            $result = $number1 - $number2;
            
            break;
        case '*':
            $result = $number1 * $number2;
            
            break;
        case '/':
            if ($number2 == 0) {
                echo 'Lỗi';
            }
            $result = $number1 / $number2;
            break;

        default:
            $result = 'lỗi';
            break;
    }
}

?>

<form method="POST" class='hi'>
        
            <h2>Calculator</h2>
        
        
            <label>Number1</label>
            <input type="text" name="number1" placeholder="Nhập số"><br><br>
        
        <select name="pheptinh">
            <!-- <option value="">Phép Tính</option> -->
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>

    
            <label>Number2</label>
            <input type="text" name="number2" placeholder="Nhập số"><br><br>
    

            <input type="submit" value="Tính">
    
        <p>Kết quả là : <?php echo $result ; ?></p>
    </form>