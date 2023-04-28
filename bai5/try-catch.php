<?php
    $duong = 'Đẹp';
    try {
        if($duong == "Xấu"){
            throw new Exception('Đi Vòng');
        }
        echo "Đi thẳng";
    }catch (Exception $e) {
        
        echo $e->getMessage();
    }
    finally {
        echo " <br> về nhà";
    }


checkage(18);

function checkage($age){
    try{
        if($age === 18){
            throw new Exception ('uống nước ngọt đi cu');
            
        }
        echo "anh cho chú uống bia á cu ";
    }catch (Exception $e){
        echo $e -> getmessage();
    }
}

