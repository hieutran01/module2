
<style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>

<?php
$danhsachkhachhang = [
    '1' => [
        'ten' => 'Hieu',
        'ngaysinh' => '19/01/2002',
        'diachi' => 'Quảng Trị',
        'anh' => 'https://znews-photo.zingcdn.me/w660/Uploaded/qhj_yvobvhfwbv/2018_07_18/Nguyen_Huy_Binh1.jpg'

    ],
    '2' => [
        'ten' => 'xi',
        'ngaysinh' => '19/01/2002',
        'diachi' => 'Quảng Trị',
        'anh' => 'https://haycafe.vn/wp-content/uploads/2021/11/hinh-anh-hoat-hinh-de-thuong-cute-dep-nhat.jpg'

    ]
];
?>
<h1>Danh Sách Khách Hàng</h1>
<table> 
        <tr>
            <td>stt</td>
            <td>Tên</td>
            <td>Ngày Sinh</td>
            <td>Địa Chỉ</td>
            <td>Ảnh</td>
        </tr>
        
<?php foreach ($danhsachkhachhang as $key => $value): ?>
    <tr>
        <td><?php echo $key ?></td>
        <td><?php echo $value['ten'] ?></td>
        <td><?php echo $value['ngaysinh'] ?></td>
        <td><?php echo $value['diachi'] ?></td>
        <td><img src="<?php echo $value['anh'] ?>" alt="" width="200"></td>
    </tr>
<?php endforeach;  ?>
<!-- 
foreach, as là các từ khóa tạo thành cú pháp duyệt mảng.
$danhsachkhachhang là tên mảng chứa bộ từ và nghĩa của từ.
$key là để duyệt từng phần tử trong mảng.
$value là giá trị của từng key trong mảng. -->

</table>

