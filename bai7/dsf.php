5 Cho biết mã và tên của các mặt hàng có giá lớn hơn 100000 và số lượng hiện có ít hơn 50.
SELECT MAHANG, TENHANG,GIAHANG,SOLUONG
FROM mat_hangs
WHERE GIAHANG > 100000 AND SOLUONG < 50;

.6 Cho biết mỗi mặt hàng trong công ty do ai cung cấp.
SELECT mat_hangs.MAHANG, mat_hangs.TENHANG, nha_cung_caps.TENCONGTY
FROM mat_hangs
JOIN nha_cung_caps ON mat_hangs.MACONGTY = nha_cung_caps.MACONGTY;

7 Công ty Việt Tiến đã cung cấp những mặt hàng nào?
SELECT mat_hangs.MAHANG,mat_hangs.TENHANG FROM `mat_hangs` 
INNER JOIN nha_cung_caps 
ON mat_hangs.MACONGTY = nha_cung_caps.MACONGTY
WHERE nha_cung_caps.TENCONGTY = 'Việt Tiến';
