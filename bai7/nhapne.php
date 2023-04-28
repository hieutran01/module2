<?php

2.1 SELECT * FROM nha_cung_caps;
2.2 SELECT MAHANG, TENHANG, SOLUONG FROM mat_hangs;
2.3 SELECT HO, TEN, NGAYLAMVIEC ,DIACHI FROM nhan_viens;
2.4 SELECT DIACHI, DIENTHOAI FROM nha_cung_caps 
WHERE TENGIAODICH = 'VINAMILK';
2.5 Cho biết mã và tên của các mặt hàng có giá lớn hơn 100000 và số lượng hiện có ít hơn 50.

// SELECT MAHANG, TENHANG FROM mat_hangs WHERE (GIAHANG > 100000) AND (SOLUONG < 50);
2.6 Cho biết mỗi mặt hàng trong công ty do ai cung cấp.
// SELECT TENHANG,nha_cung_caps.TENCONGTY FROM `mat_hangs` JOIN nha_cung_caps ON mat_hangs.MACONGTY = nha_cung_caps.MACONGTY;

2.7 Công ty Việt Tiến đã cung cấp những mặt hàng nào?
// SELECT TENCONGTY, TENHANG FROM nha_cung_caps JOIN mat_hangs ON nha_cung_caps.MACONGTY = mat_hangs.MACONGTY WHERE (TENCONGTY = 'Việt Tiến');

2.8 Loại hàng thực phẩm do những công ty nào cung cấp và địa chỉ của các công ty đó là gì?
// SELECT loaihangs.TENLOAIHANG, nha_cung_caps.TENCONGTY, nha_cung_caps.DIACHI
// FROM mat_hangs
// JOIN loaihangs ON mat_hangs.MALOAIHANG = loaihangs.MALOAIHANG
// JOIN nha_cung_caps ON mat_hangs.MACONGTY = nha_cung_caps.MACONGTY
// WHERE loaihangs.TENLOAIHANG = 'Thực phẩm'
// GROUP BY loaihangs.TENLOAIHANG, nha_cung_caps.TENCONGTY,nha_cung_caps.DIACHI;

2.9 Những khách hàng nào (tên giao dịch) đã đặt mua mặt hàng y tế loại 4 của công ty?
// SELECT TENGIAODICH, TENHANG FROM khach_hangs JOIN mat_hangs ON khach_hangs.MAKHACHHANG = mat_hangs.MAHANG WHERE (TENHANG = 'y tế loại 4');

2.10 Đơn đặt hàng số 1 do ai đặt và do nhân viên nào lập, thời gian và địa điểm giao hàng là ở đâu?
// SELECT SOHOADON, TENGIAODICH, TEN, NGAYGIAOHANG, NOIGIAOHANG FROM don_dat_hangs
// JOIN nhan_viens ON don_dat_hangs.MANHANVIEN = nhan_viens.MANHANVIEN
// JOIN khach_hangs ON don_dat_hangs.MAKHACHHANG = khach_hangs.MAKHACHHANG
// WHERE (SOHOADON = 1);

2.11 Hãy cho biết số tiền lương mà công ty phải trả cho mỗi nhân viên là bao nhiêu (lương = lương cơ bản + phụ cấp).
// SELECT MANHANVIEN, (LUONGCOBAN + PHUCAP) AS LUONG FROM `nhan_viens`;

2.12 Trong đơn đặt hàng số 3 đặt mua những mặt hàng nào và số tiền mà khách hàng phải trả cho mỗi mặt hàng là bao nhiêu
(số tiền phải trả được tính theo công thức SOLUONG × GIABAN – SOLUONG × GIABAN × MUCGIAMGIA/100 )

// SELECT TENHANG , (chi_tiet_dat_hangs.SOLUONG * chi_tiet_dat_hangs.GIABAN - chi_tiet_dat_hangs.SOLUONG * chi_tiet_dat_hangs.GIABAN * chi_tiet_dat_hangs.MUCGIAMGIA / 100) AS THANHTOAN FROM don_dat_hangs
// JOIN chi_tiet_dat_hangs ON don_dat_hangs.SOHOADON = chi_tiet_dat_hangs.SOHOADON
// JOIN mat_hangs ON chi_tiet_dat_hangs.MAHANG = mat_hangs.MAHANG
// WHERE (don_dat_hangs.SOHOADON = 3);
2.13 Hãy cho biết có những khách hàng nào lại chính là đối tác cung cấp hàng của công ty (tức là có cùng tên giao dịch).
// SELECT * FROM khach_hangs
// JOIN nha_cung_caps ON khach_hangs.TENGIAODICH = nha_cung_caps.TENGIAODICH
// WHERE (khach_hangs.TENGIAODICH = nha_cung_caps.TENGIAODICH); //

2.14 Trong công ty có những nhân viên nào có cùng ngày sinh?


2.15 Những đơn đặt hàng nào yêu cầu giao hàng ngay tại công ty đặt hàng và những đơn đó là của công ty nào?
// SELECT * FROM don_dat_hangs
// JOIN khach_hangs ON don_dat_hangs.MAKHACHHANG = khach_hangs.MAKHACHHANG 
// WHERE don_dat_hangs.NOIGIAOHANG = khach_hangs.DIACHI;

2.16 Cho biết tên công ty, tên giao dịch, địa chỉ và điện thoại của các khách hàng và các nhà cung cấp hàng cho công ty.
// SELECT TENCONGTY, TENGIAODICH, DIACHI, DIENTHOAI FROM khach_hangs;
// SELECT TENCONGTY, TENGIAODICH, DIACHI, DIENTHOAI FROM nha_cung_caps;

2.17 Những mặt hàng nào chưa từng được khách hàng đặt mua?
// SELECT * FROM `mat_hangs`
// LEFT JOIN chi_tiet_dat_hangs ON mat_hangs.MAHANG = chi_tiet_dat_hangs.MAHANG
// WHERE chi_tiet_dat_hangs.MAHANG IS NULL;

2.18 Những nhân viên nào của công ty chưa từng lập bất kỳ một hoá đơn đặt hàng nào?
// SELECT * FROM nhan_viens
// LEFT JOIN don_dat_hangs ON nhan_viens.MANHANVIEN = don_dat_hangs.MANHANVIEN
// WHERE SOHOADON  IS NULL;

2.19 Những nhân viên nào của công ty có lương cơ bản cao nhất?
//SELECT * FROM `nhan_viens` WHERE LUONGCOBAN = (SELECT MAX(LUONGCOBAN) FROM nhan_viens);

2.20 Tổng số tiền mà khách hàng phải trả cho mỗi đơn đặt hàng là bao nhiêu?

SELECT khach_hangs.TENGIAODICH,(chi_tiet_dat_hangs.GIABAN*chi_tiet_dat_hangs.SOLUONG-chi_tiet_dat_hangs.MUCGIAMGIA) AS SO_tien 
FROM khach_hangs JOIN don_dat_hangs 
ON khach_hangs.MAKHACHHANG = don_dat_hangs.MAKHACHHANG 
JOIN chi_tiet_dat_hangs ON don_dat_hangs.SOHOADON = chi_tiet_dat_hangs.SOHOADON;

2.21 Trong năm 2003, những mặt hàng nào chỉ được đặt mua đúng một lần.
SELECT * FROM don_dat_hangs WHERE YEAR(NGAYDATHANG) = 2003 GROUP BY SOHOADON HAVING COUNT(*) = 1;

 2.22 Hãy cho biết mỗi một khách hàng đã phải bỏ ra bao nhiêu tiền để đặt mua hàng của công ty?
 SELECT khach_hangs.MAKHACHHANG,khach_hangs.TENGIAODICH,SUM(chi_tiet_dat_hangs.SOLUONG * chi_tiet_dat_hangs.GIABAN) AS total 
 FROM `khach_hangs`JOIN don_dat_hangs 
 ON khach_hangs.MAKHACHHANG = don_dat_hangs.MAKHACHHANG JOIN chi_tiet_dat_hangs ON don_dat_hangs.SOHOADON = chi_tiet_dat_hangs.SOHOADON 
 GROUP BY khach_hangs.MAKHACHHANG 

2.23 Mỗi một nhân viên của công ty đã lập bao nhiêu đơn đặt hàng (nếu nhân viên chưa hề lập một hoá đơn nào thì cho kết quả là 0)
SELECT nhan_viens.MANHANVIEN,nhan_viens.TEN, COUNT(don_dat_hangs.SOHOADON) AS tong_don FROM `nhan_viens` 
LEFT JOIN don_dat_hangs ON nhan_viens.MANHANVIEN = don_dat_hangs.MANHANVIEN GROUP BY nhan_viens.MANHANVIEN ORDER BY tong_don DESC;

2.24 Cho biết tổng số tiền hàng mà cửa hàng thu được trong mỗi tháng của năm 2003 (thời được gian tính theo ngày đặt hàng).
SELECT MONTH(don_dat_hangs.NGAYDATHANG) AS MONTH, SUM(chi_tiet_dat_hangs.GIABAN * chi_tiet_dat_hangs.SOLUONG) AS tong_tien_theo_thang 
FROM `chi_tiet_dat_hangs` JOIN don_dat_hangs 
ON chi_tiet_dat_hangs.SOHOADON = don_dat_hangs.SOHOADON 
WHERE YEAR(don_dat_hangs.NGAYDATHANG) = 2003 GROUP BY MONTH(don_dat_hangs.NGAYDATHANG) ORDER BY MONTH(don_dat_hangs.NGAYDATHANG);

2.25 Hãy cho biết tổng số tiền lời mà công ty thu được từ mỗi mặt hàng trong năm 2003.

SELECT mat_hangs.TENHANG,SUM((chi_tiet_dat_hangs.GIABAN - chi_tiet_dat_hangs.MUCGIAMGIA) * chi_tiet_dat_hangs.SOLUONG) AS tong_tien_loi 
FROM `mat_hangs` JOIN chi_tiet_dat_hangs ON mat_hangs.MAHANG = chi_tiet_dat_hangs.MAHANG 
JOIN don_dat_hangs ON chi_tiet_dat_hangs.SOHOADON = don_dat_hangs.SOHOADON 
WHERE YEAR(don_dat_hangs.NGAYDATHANG) = 2003 
GROUP BY mat_hangs.TENHANG;

26 Hãy cho biết tổng số lượng hàng của mỗi mặt hàng mà công ty đã có (tổng số lượng hàng hiện có và đã bán).
SELECT TENHANG, SUM(SOLUONG) AS TongSoLuong
FROM mat_hangs
GROUP BY TENHANG;

27Nhân viên nào của công ty bán được số lượng hàng nhiều nhất và số lượng hàng bán được của những nhân viên này là bao nhiêu? 
SELECT nhan_viens.MANHANVIEN,nhan_viens.ho,nhan_viens.TEN, SUM(chi_tiet_dat_hangs.SOLUONG) AS nhieu_nhat 
FROM nhan_viens JOIN don_dat_hangs ON nhan_viens.MANHANVIEN = don_dat_hangs.MANHANVIEN 
JOIN chi_tiet_dat_hangs ON don_dat_hangs.SOHOADON = chi_tiet_dat_hangs.SOHOADON
GROUP BY nhan_viens.MANHANVIEN,nhan_viens.HO,nhan_viens.TEN ORDER BY nhieu_nhat DESC LIMIT 1;

2.28 Đơn đặt hàng nào có số lượng hàng được đặt mua ít nhất?
SELECT don_dat_hangs.SOHOADON, MIN(chi_tiet_dat_hangs.SOLUONG) AS mua_it_nhat 
FROM don_dat_hangs 
JOIN chi_tiet_dat_hangs 
ON don_dat_hangs.SOHOADON = chi_tiet_dat_hangs.SOHOADON 
GROUP BY don_dat_hangs.SOHOADON ORDER BY mua_it_nhat ASC LIMIT 1;

2.29 Số tiền nhiều nhất mà mỗi khách hàng đã từng bỏ ra để đặt hàng trong các đơn đặt hàng là bao nhiêu?
SELECT khach_hangs.MAKHACHHANG,khach_hangs.TENCONGTY,SUM(chi_tiet_dat_hangs.GIABAN * chi_tiet_dat_hangs.SOLUONG) AS so_tien_nhieu_nhat 
FROM `khach_hangs` JOIN don_dat_hangs ON khach_hangs.MAKHACHHANG = don_dat_hangs.MAKHACHHANG 
JOIN chi_tiet_dat_hangs ON don_dat_hangs.SOHOADON = chi_tiet_dat_hangs.SOHOADON 
GROUP BY khach_hangs.MAKHACHHANG,khach_hangs.TENCONGTY ORDER BY so_tien_nhieu_nhat DESC;

2.30 Mỗi một đơn đặt hàng đặt mua những mặt hàng nào và tổng số tiền mà mỗi đơn đặt hàng phải trả là bao nhiêu?
SELECT don_dat_hangs.SOHOADON,mat_hangs.TENHANG,Sum(chi_tiet_dat_hangs.GIABAN * chi_tiet_dat_hangs.SOLUONG) AS tong_moi_don_dat_hang 
FROM mat_hangs JOIN chi_tiet_dat_hangs ON mat_hangs.MAHANG = chi_tiet_dat_hangs.MAHANG 
JOIN don_dat_hangs ON chi_tiet_dat_hangs.SOHOADON = don_dat_hangs.SOHOADON 
GROUP BY don_dat_hangs.SOHOADON,mat_hangs.TENHANG ORDER BY tong_moi_don_dat_hang;

31Hãy cho biết mỗi một loại hàng bao gồm những mặt hàng nào, tổng số lượng hàng của mỗi loại và tổng số lượng của tất cả các mặt hàng hiện có trong công ty là bao nhiêu?
SELECT loaihangs.MALOAIHANG,loaihangs.TENLOAIHANG,sum(mat_hangs.SOLUONG) AS tong_so_luong_MH,
(SELECT sum(SOLUONG) FROM mat_hangs) AS tong_so_luong_MH_cong_ty 
FROM `loaihangs` JOIN mat_hangs ON loaihangs.MALOAIHANG = mat_hangs.MALOAIHANG 
JOIN chi_tiet_dat_hangs ON mat_hangs.MAHANG = chi_tiet_dat_hangs.MAHANG 
GROUP BY loaihangs.MALOAIHANG,loaihangs.TENLOAIHANG,tong_so_luong_MH_cong_ty ORDER BY loaihangs.MALOAIHANG;