<?php

$tusach = [
    'mot' => [
        'ten' => 'van hoc',
        'gia' => '12000'
    ],
    'hai' => [
        'ten' => 'su hoc',
        'gia' => 12000
    ]
    ];



    $books = [
        'khong' => 'van',
        'mot' => 'su',
        'hai' => 'dia',
    ];

foreach($books as $key => $value){
    //khong,mot,hai
    //van,su,dia
    echo '<br>'. $key .'_'. $value;
}

// sử dụng vòng lặp duyệt mãng 2 chiều
foreach($tusach as $key => $books){



foreach($books as $k => $book){


echo '<br>'. $k. '_'.$book;
}
}

foreach($tusach as $book){
    echo $book['ten']. '_' .$book['gia'];
}

//in ra phần tử trong mãng 2 chiều 
    echo $tusach['mot']['ten'];
    echo $tusach['mot']['gia'];
    

    echo '<pre>';
    print_r($tusach);
    echo '</pre>';
