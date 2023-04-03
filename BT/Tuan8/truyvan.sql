/*Câu1*/
SELECT ten_mon, noi_dung_tom_tat, don_gia FROM mon_an;

/*2*/
SELECT ten_loai, ten_mon, noi_dung_tom_tat, don_gia
FROM mon_an, loai_mon_an
WHERE mon_an.ma_loai = loai_mon_an.ma_loai
ORDER BY ten_loai, don_gia DESC;

/*3*/
SELECT ten_khach_hang, dia_chi, dien_thoai
FROM khach_hang
ORDER BY ten_khach_hang ASC;

/*4*/
SELECT ten_khach_hang, dia_chi, dien_thoai
FROM khach_hang
WHERE ten_khach_hang LIKE 'Nguyễn%'
ORDER BY ten_khach_hang;

/*5*/
SELECT ten_mon, noi_dung_tom_tat, don_gia
FROM mon_an
ORDER BY don_gia DESC;

/*6 Cách 1: Toán tử LIKE*/
SELECT ten_mon, noi_dung_tom_tat, don_gia
FROM mon_an
WHERE ten_mon LIKE 'Canh%'
ORDER BY don_gia DESC;

/*6 Cách 2: Sử dụng hàm LEFT*/
SELECT ten_mon, noi_dung_tom_tat, don_gia
FROM mon_an
WHERE LEFT(ten_mon, 4) = 'Canh'
ORDER BY don_gia DESC;

/*7 Cách 1: Sử dụng toán tử LIKE */
SELECT ten_mon, noi_dung_tom_tat, don_gia
FROM mon_an
WHERE ten_mon LIKE '% gà%' OR ten_mon LIKE '%gà %'
ORDER BY don_gia DESC;

/*7 Cách 2: Sử dụng hàm LOCATE */
SELECT ten_mon, noi_dung_tom_tat, don_gia
FROM mon_an
WHERE LOCATE('gà', ten_mon) > 0
ORDER BY don_gia DESC;

/*8 Cách 1: Sử dụng toán tử logical AND */
SELECT ten_mon, noi_dung_tom_tat, don_gia
FROM mon_an
WHERE don_gia >= 50000 AND don_gia <= 100000
ORDER BY don_gia DESC;

/*8 Cách 2: Sử dụng toán tử BETWEEN */
SELECT ten_mon, noi_dung_tom_tat, don_gia
FROM mon_an
WHERE don_gia BETWEEN 50000 AND 100000
ORDER BY don_gia DESC;

/*9*/
SELECT * FROM mon_an
WHERE ten_mon LIKE '%súp%';

/*10*/
SELECT * FROM mon_an
WHERE don_gia > 50000;

/*11*/
SELECT * FROM mon_an
WHERE ten_mon LIKE '%cơm%' OR ten_mon LIKE '%canh%';

/*12 Cho biết tên món, nội dung tóm tắt, đơn giá của 10 món ăn có đơn giá cao nhất */
SELECT ten_mon, noi_dung_tom_tat, don_gia
FROM mon_an
ORDER BY don_gia DESC
LIMIT 10;

/*13*/
SELECT ten_mon, don_gia, khuyen_mai
FROM mon_an;

/*14*/
SELECT ten_khach_hang, email, dia_chi, dien_thoai
FROM khach_hang;

/*15*/
SELECT ten_mon, noi_dung_tom_tat
FROM mon_an
ORDER BY ten_mon ASC, don_gia DESC;

/*16 Liệt kê danh sách các món ăn có ký tự cuối là "n" */
SELECT * FROM mon_an
WHERE ten_mon LIKE '%n';

/*17*/
SELECT ten_mon, don_gia
FROM mon_an
WHERE noi_dung_tom_tat LIKE '%cà chua%' AND noi_dung_tom_tat LIKE '%dưa leo%';

/*18*/
SELECT * FROM khach_hang
ORDER BY email ASC;

/*19*/
SELECT * FROM khach_hang
ORDER BY email DESC;

/*20*/
SELECT ma_mon, ten_mon, don_gia
FROM mon_an
ORDER BY don_gia DESC
LIMIT 5;

/*20 DISTINCT được sử dụng để loại bỏ các giá trị trùng lặp */
SELECT DISTINCT ma_loai
FROM mon_an;

/*21*/
SELECT * FROM mon_an
WHERE ma_loai = '1';

/*22*/
SELECT *
FROM mon_an
WHERE ma_loai = '1' AND don_gia BETWEEN 20000 AND 25000;

/*23*/
SELECT mon_an.ma_mon, mon_an.ma_loai, mon_an.ten_mon, loai_mon_an.ten_loai, mon_an.don_gia
FROM mon_an
LEFT JOIN loai_mon_an ON mon_an.ma_loai = loai_mon_an.ma_loai