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

<form action="display_discount.php" method='post' class='hi'>
    <label for="">Mô Tả Của Sản Phẩm</label><br>
    <input type="text" name='mota'><br><br>

    <label for="">Giá Niêm Yết Của Sản Phẩm</label><br>
    <input type="text" name='gianiemyet'><br><br>

    <label for="">Tỷ Lệ Chiết Khấu(Phần Trăm)</label><br>
    <input type="text" name='tile'><br><br>

    <input type="submit" value='Tính Chiết Khấu'>

</form>