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



//     $books = [
//         'khong' => 'van',
//         'mot' => 'su',
//         'hai' => 'dia',
//     ];

// foreach($books as $key => $value){
//     //khong,mot,hai
//     //van,su,dia
//     echo '<br>'. $key .'_'. $value;
// }

//sử dụng vòng lặp duyệt mãng 2 chiều
foreach($tusach as $key => $value){
foreach($value as $k => $book){
echo '<br>'. $k. '_'.$book;
}
}


foreach ($tusach as $key => $value) {
    echo "Phan tu con co key la " . $key . ":<br>";
    foreach ($value as $subKey => $subValue) {
       echo "- Key: " . $subKey . ", value: " . $subValue . "<br>";
    }
    echo "<br>";
}

// foreach($tusach as $book){
//     echo $book['ten']. '_' .$book['gia'];
// }

//in ra phần tử trong mãng 2 chiều 
    // echo $tusach['mot']['ten'];
    // echo $tusach['mot']['gia'];
    

    echo '<pre>';
    print_r($tusach);
    echo '</pre>';







