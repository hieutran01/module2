<style>
  .hii{
    background-color: blanchedalmond;
            width: 500px;
            border: 1px solid #ccc;
            margin: 25px;
            padding: 10px;
            float: left;  
  }
</style>

  <?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sotiendautubandau = $_POST['sotien'];
    $laixuatnam = $_POST['laixuat'];
    $sonamdautu = $_POST['sonam'];
    $result = $sotiendautubandau + ($sotiendautubandau * ($laixuatnam / 100) *  $sonamdautu);
    echo $result;
  }

  ?>
  <form action="" method='post' class='hii'>
    <label for="sotien">Số Tiền Đầu Tư</label><br>
    <input type="text" name="sotien"><br><br>

    <label for="laixuat">Lãi Xuất Năm</label><br>
    <input type="text" name="laixuat"><br><br>

    <label for="sonam">Số Năm Đầu Tư</label><br>
    <input type="text" name="sonam"><br><br>

    <input type="submit" value="tính">
  </form>

