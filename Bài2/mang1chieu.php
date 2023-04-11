<?php
$a = ['van','su','dia'];

echo '<pre>';
print_r($a);
echo '</pre>';

// truy cap phan tu su
echo $a[1];

// xoa phan tu theo chi so

unset($a[2]);
// them pt vao mang
array_push($a,'toan');

array_unshift($a,'tieng anh');

echo '<pre>';
print_r($a);
echo '</pre>';

// duyet mang
for($i = 0;$i < count($a); $i++ ){
    echo $a[$i];
    echo '<br>';
}