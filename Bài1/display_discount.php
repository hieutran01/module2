<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $motasanpham = $_POST['mota'];
    $gianiemyet = $_POST['gianiemyet'];
    $tilechietkhau = $_POST['tile'];
    $luongchietkhau = $gianiemyet * $tilechietkhau * 0.1;
    echo 'lượng Chiết Khấu là:' ." ". $luongchietkhau;
}
?>