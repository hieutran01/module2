<form method="post">
    <textarea name="phone_numbers"></textarea>
    <button type="submit">Phân loại</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy chuỗi số điện thoại từ textarea
    $phone_numbers = $_POST["phone_numbers"];

    // Tách chuỗi thành mảng các số điện thoại
    $phone_numbers = explode(",", $phone_numbers);

    // Tạo 3 mảng để lưu số điện thoại của 3 nhà mạng
    $viettel_numbers = array();
    $mobifone_numbers = array();
    $vinaphone_numbers = array();

    // Duyệt qua tất cả các số và phân loại các số điện thoại dựa vào đầu số
    foreach ($phone_numbers as $number) {
        $prefix = substr($number, 0, 3);
        switch ($prefix) {
            case "086":
            case "096":
          
                $viettel_numbers[] = $number;
                break;
            case "089":
            case "090":
          
                $mobifone_numbers[] = $number;
                break;
            case "088":
            case "091":
          
                $vinaphone_numbers[] = $number;
                break;
            default:
                echo'Không phân loại được đầu số của số điện thoại này';
                break;
        }
    }

    // Hiển thị các số điện thoại đã được phân loại
    echo "<h2>Số điện thoại Viettel:</h2>";
    foreach ($viettel_numbers as $number) {
        echo $number . "<br>";
    }

    echo "<h2>Số điện thoại Mobifone:</h2>";
    foreach ($mobifone_numbers as $number) {
        echo $number . "<br>";
    }

    echo "<h2>Số điện thoại Vinaphone:</h2>";
    foreach ($vinaphone_numbers as $number) {
        echo $number . "<br>";
    }
}
?>
