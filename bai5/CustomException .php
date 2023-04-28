<?php
class CustomException extends Exception
{
    //Khai bao phuong thuc errorMessage
    public function errorMessage()
    {   
        /*
        getLine: dòng bị lỗi
        getFile: file bị lỗi
        getMessage: nội dung
        */

        $error = '';
        $error = $error . '<br> Lỗi xuất hiện tại file: '.$this->getFile();
        $error = $error . '<br> Lỗi xuất hiện tại dòng: '.$this->getLine();
        $error = $error . '<br> Nội dung: '.$this->getMessage();
        return $error;
    }
}

$duong = 'xau';
$thoi_tiet = 'dep';
try {
    if( $duong == 'xau' ){
        throw new CustomException("Đi vòng"); //Phi ném - Hiếu bắt
    }
    if( $thoi_tiet == 'xau' ){
        throw new Exception("Ở nhà"); //Cường ném - Long bắt
    }
    echo 'Di thang';
} 
catch (CustomException $e) { //Hiếu bắt
    echo 'Hiếu: '. $e->errorMessage();
} 
catch (Exception $e) { //Long bắt
    echo  'Long: '. $e->getMessage();
} 
// finally {
//     echo '<br> Finally: Ve nha';
// }
// class Exception1 extends Exception{
//     // khai báo phương thức errorMessage
//     public function errorMessage()
//     {
//         return $this -> getMessage();
//     }
  
// }
// class Exception2 extends Exception{
//     // khai báo phương thức errorMessage
//     public function errorMessage()
//     {
//         return $this -> getMessage();
//     }
// }
//  $age = 1002;
//  try{
//      if($age < 18){
//         throw new Exception('uống nướt ngọt đi cu');
//        }

//     if(!is_int($age)){
//         throw new Exception1('nhập số đi cu');
//        }
//     if($age > 100){
//         throw new Exception2('uống sửa thôi cụ');
//     }
//     echo 'được uống bia';
// }
// catch(Exception1 $e){
//    echo $e -> errorMessage();
//  }

// catch(Exception2 $e){
//    echo $e -> errorMessage();
// }
//  catch(Exception $e){
//     echo $e -> getmessage();
//  }