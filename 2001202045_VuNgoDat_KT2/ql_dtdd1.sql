-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 11:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ql_dtdd1`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `MaBanner` int(11) NOT NULL,
  `FileName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`MaBanner`, `FileName`) VALUES
(1, 'Banner1.jpg'),
(2, 'Banner2.jpg'),
(3, 'Banner3.jpg'),
(4, 'Banner4.jpg'),
(5, 'Banner5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaDonHang` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `DonGia` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDonHang` int(11) NOT NULL,
  `NgayGiao` date DEFAULT NULL,
  `NgayDat` date DEFAULT NULL,
  `DaThanhToan` varchar(255) DEFAULT NULL,
  `TinhTrangGiao` varchar(255) DEFAULT NULL,
  `MaKH` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `HoTen` varchar(255) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `GioiTinh` varchar(5) DEFAULT NULL,
  `DienThoai` varchar(13) DEFAULT NULL,
  `TaiKhoan` varchar(255) DEFAULT NULL,
  `MatKhau` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `DiaChi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(255) DEFAULT NULL,
  `Note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`MaLoai`, `TenLoai`, `Note`) VALUES
(1, 'NOKIA', 'DT'),
(2, 'SAMSUNG', 'DT'),
(3, 'Motorola', 'DT'),
(4, 'LG', 'DT'),
(5, 'Oppo', 'DT'),
(6, 'Iphone', 'DT'),
(7, 'BPhone', 'DT'),
(8, 'Dell', 'LAP'),
(9, 'HP', 'LAP'),
(10, 'Asus', 'LAP'),
(11, 'Asus', 'LAP'),
(12, 'Lenovo', 'LAP'),
(13, 'Apple', 'LAP'),
(14, 'Acer', 'LAP'),
(15, 'Loa', 'PK'),
(16, 'Chuột', 'PK'),
(17, 'Tai Nghe', 'PK'),
(18, 'Thẻ Nhớ', 'PK'),
(19, 'Cáp Sạc', 'PK'),
(20, 'Sạc Dự Phòng', 'PK');

-- --------------------------------------------------------

--
-- Table structure for table `loaitin`
--

CREATE TABLE `loaitin` (
  `MLTin` int(11) NOT NULL,
  `TLTin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaitin`
--

INSERT INTO `loaitin` (`MLTin`, `TLTin`) VALUES
(1, 'Tin Mới'),
(2, 'Khuyến Mãi'),
(3, 'Thủ Thuật'),
(4, 'App & Game'),
(5, 'For Game');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(255) DEFAULT NULL,
  `GiaBan` float DEFAULT NULL,
  `MoTa` varchar(255) DEFAULT NULL,
  `NgayCapNhat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Anh` varchar(255) DEFAULT NULL,
  `SLTon` int(11) DEFAULT NULL,
  `MaLoai` int(11) DEFAULT NULL,
  `Moi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `GiaBan`, `MoTa`, `NgayCapNhat`, `Anh`, `SLTon`, `MaLoai`, `Moi`) VALUES
(1, 'Dell Inspiron N7306', 27200000, 'Laptop Dell Inspiron N7306 i5 1135G7/8Gb/512Gb/13.3\"FHD Touch/Win 10', '2020-10-29 17:00:00', 'Dell5.jpg', 25, 8, '1'),
(2, 'Dell V3590', 16000000, 'Laptop Dell V3590 i5 10210U/8Gb/256Gb/15.6\"FHD/AMD 610 2Gb/DVDSup/Win10', '2019-05-19 17:00:00', 'Dell6.jpg', 20, 8, '1'),
(3, 'HP Envy', 27500000, 'Laptop HP Envy 13 aq1023TU i7 10510U/8GB/512GB SSD/WIN10', '2020-11-01 17:00:00', 'HP1.jpg', 30, 9, '1'),
(4, 'HP Pavilion', 17600000, 'Laptop HP Pavilion 15-eg0069TU i5 1135G7/8GB/512GB/Win 10-Office Home& Student', '2019-09-06 17:00:00', 'HP2.jpg', 50, 9, '1'),
(5, 'HP 348', 10600000, 'Laptop HP 348 G7 i3 8130U/4GB/256GB/14.0\"HD/Intel HD/FP/Win 10', '2020-03-19 17:00:00', 'HP3.jpg', 40, 9, '1'),
(6, 'Asus ROC', 29500000, 'Laptop Asus Strix G512 IAL001T i7 10750H/8GB/512G SSD/15.6 FHD/WIN10', '2018-12-31 17:00:00', 'Asus1.jpg', 30, 11, '1'),
(7, 'Asus VivoBook', 10300000, 'Laptop Asus Vivobook X409JA-EK237T i3 1005G1/4GB/Win 10', '2018-05-04 17:00:00', 'Asus2.jpg', 40, 11, NULL),
(8, 'Asus ZenBook', 23990000, 'Laptop Asus Zenbook UX434FAC A6116T i5 10210U/8GB/512GB/WIN10', '2020-07-14 17:00:00', 'Asus3.jpg', 30, 11, '1'),
(9, 'Asus TUF', 19590000, 'Laptop Asus TUF FX505DT HN478T R7 3750H/8GB/512GB SSD/Win10', '2020-06-19 17:00:00', 'Asus4.jpg', 25, 11, '1'),
(10, 'Lenovo ideapad', 9290000, 'Laptop Lenovo Ideapad S145 14API R3 3200U/4GB/25GB SSD/WIN10', '2017-02-28 17:00:00', 'Lenovo1.jpg', 20, 12, NULL),
(11, 'Lenovo legion', 24900000, 'Laptop Lenovo Legion Y540-15IRH i7 9750H/8GB/1TB 128GSSD/WIN10', '2020-10-30 17:00:00', 'Lenovo2.jpg', 30, 12, '1'),
(12, 'Lenovo thinkpad', 44000000, 'Laptop Lenovo ThinkPad X1 Carbon 8 i7 10510U/16GB/512GB/14”WQHD/Win 10 Pro', '2019-03-19 17:00:00', 'Lenovo3.jpg', 25, 12, '1'),
(13, 'Lenovo Thinkbook', 13300000, 'Laptop Lenovo ThinkBook 14 IIL i3 1005G1/4GB/512GB SSD/14.0 FHD/WIN10', '2019-03-13 17:00:00', 'Lenovo4.jpg', 25, 12, '1'),
(14, 'Macbook pro 16', 69900000, 'MacBook Pro 16\" 2019 Touch Bar 2.3GHz Core i9 1TB', '2020-12-01 17:00:00', 'Apple1.jpg', 30, 13, '1'),
(15, 'Macbook pro 13', 45000000, 'MacBook Pro 13\" 2019 Touch Bar 2.4GHz Core i5 256GB', '2020-10-19 17:00:00', 'Apple2.jpg', 20, 13, '1'),
(16, 'Macbook air', 35000000, 'MacBook Air 13\" 2020 1.1GHz Core i5 512GB', '2019-03-16 17:00:00', 'Apple3.jpg', 30, 13, '1'),
(17, 'Acer Nitro', 30000000, 'Laptop Acer Nitro 5 AN515-55-55E3 i5 10300H/16GB/512GB SSD/Nvidia RTX2060-6GB/Win10', '2019-10-28 17:00:00', 'Acer1.jpg', 25, 14, '1'),
(18, 'Acer Swift', 13500000, 'Laptop Acer Swift SF315 41 R0DX/R5-2500U/NX.GV7SV.005', '2029-08-18 17:00:00', 'Acer2.jpg', 25, 14, '1'),
(19, 'Acer Aspire', 10200000, 'Laptop Acer Aspire 3 A315 34 C38Y CDC N4020/4GB/256GB/15.6\"HD/Win 10', '2019-11-24 17:00:00', 'Acer3.jpg', 20, 14, '1'),
(20, 'Loa Bluetooth', 2790000, 'Combo Loa Bluetooth Karaoke i.value F12-65N Nhựa đen + Mic không dây', '2020-02-21 17:00:00', 'Loa1.jpg', 50, 15, '1'),
(21, 'Loa Bluetooth SONY', 1700000, 'Loa Bluetooth SONY SRS-XB22', '2019-09-08 17:00:00', 'Loa2.jpg', 100, 15, '1'),
(22, 'Loa dàn', 1000000, 'Loa MICROLAB M318BT', '2020-10-09 17:00:00', 'Loa3.jpg', 100, 15, '1'),
(23, 'Loa Bluetooth Anker SoundCore Motion Q', 1500000, 'A3108 Đen', '2020-05-18 17:00:00', 'Loa3.jpg', 70, 15, '1'),
(24, 'Tai nghe choàng đầu có mic Gaming Zadez GT-326P', 650000, NULL, '2020-02-19 17:00:00', 'TN1.jpg', 100, 17, '1'),
(25, 'Tai nghe Kingston Hyper Cloud Alpha S - Blue_HX-HSCAS-BL/WW', 3000000, NULL, '2020-10-09 17:00:00', 'TN2.jpg', 90, 17, '1'),
(26, 'Tai nghe Bluetooth nhét tai true wireless JBL T120', 2000000, NULL, '2019-05-04 17:00:00', 'TN3.jpg', 70, 17, '1'),
(27, 'Tai nghe Samsung Galaxy Buds+', 1000000, NULL, '2020-01-31 17:00:00', 'TN4.jpg', 60, 17, '1'),
(28, 'Adapter Sạc nhanh 20W Powerport III Anker A2633', 400000, NULL, '2019-12-31 17:00:00', 'CS1.jpg', 100, 19, '1'),
(29, 'Cáp USB-C to Lightning 0.9m Anker PowerLine+ II A8652', 500000, NULL, '2020-02-04 17:00:00', 'CS2.jpg', 100, 19, '1'),
(30, 'Cáp USB-C to USB-C 0.9m Anker PowerLine+ A8187', 300000, NULL, '2019-10-08 17:00:00', 'CS3.jpg', 100, 19, '1'),
(31, 'Pin sạc dự phòng Quick Charge Li-polymer 10000 mAh UMETRAVEL SKY10000', 800000, NULL, '2019-12-11 17:00:00', 'SDP1.jpg', 70, 20, '1'),
(32, 'Pin sạc dự phòng Wireless Li-polymer 10000mAH UMETRAVEL PW1', 500000, NULL, '2019-05-04 17:00:00', 'SDP2.jpg', 70, 20, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `MaTin` int(11) NOT NULL,
  `TieuDeTin` varchar(255) DEFAULT NULL,
  `NoiDung` varchar(255) DEFAULT NULL,
  `NgayDang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `AnhMH` varchar(255) DEFAULT NULL,
  `MLTin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`MaTin`, `TieuDeTin`, `NoiDung`, `NgayDang`, `AnhMH`, `MLTin`) VALUES
(1, 'OPPO Find X3 và Nubia Red Magic 6 xác nhận sẽ ra mắt với Snapdragon 888', 'Chip kế nhiệm cho Snapdragon 865 đã chính thức ra mắt với tên gọi là Snapdragon 888 mà không phải SD875 như nhiều đồn đoán. Ngay sau đó, một số nhà sản xuất đã xác nhận các flagship 2021 của họ sẽ ra mắt với chip mới', '2020-12-01 17:00:00', 'TinMoi/TinMoi1.jpg', 1),
(2, 'Xiaomi Mi 11 sẽ là chiếc điện thoại đầu tiên sử dụng Snapdragon 888 mới', 'Vào sự kiện tối qua, Qualcomm đã chính thức công bố Snapdragon 888, nền tảng di động hàng đầu thế hệ tiếp theo của họ. Mới đây, CEO của Xiaomi đã tiết lộ rằng Mi 11 sẽ là mẫu điện thoại đầu tiên ra mắt với chipset mới nhất này.', '2020-11-27 17:00:00', 'TinMoi/TinMoi2.jpg', 1),
(3, 'Mọi thứ chúng ta biết về Samsung Galaxy Buds Pro', 'Trong bài viết này, FPT Shop sẽ tổng hợp lại các thông tin rò rỉ về Samsung Galaxy Buds Pro. Đây là mẫu tai nghe TWS hàng đầu của gã khổng lồ Hàn Quốc.', '2020-11-24 17:00:00', 'TinMoi/TinMoi3.jpg', 1),
(4, 'Hướng dẫn toàn tập cách sử dụng máy in dành cho người mới bắt đầu', 'Máy in rất dễ cài đặt và sử dụng, tuy nhiên bạn cũng cần lưu ý một số điều trong quá trình sử dụng để đảm bảo độ bền cho máy.', '2020-11-21 17:00:00', 'TinMoi/TinMoi4.jpg', 1),
(5, 'So sánh chip HiSilicon Kirin 710 và Qualcomm Snapdragon 660: \"Kẻ tám lạng, người nửa cân\"', 'Huawei đã ra mắt Hisilicon Kirin 710 cách đây 2 năm, bộ vi xử lý tầm trung này sự kế thừa và nâng cấp của chipset Kirin 659 phổ biến. Snapdragon 660 là một trong những bộ vi xử lý tầm trung mạnh mẽ và là một trong những đối thủ gần.', '2020-11-14 17:00:00', 'TinMoi/TinMoi5.jpg', 1),
(6, 'Chỉ trong 30 phút, FPT Shop ‘cháy’ hơn 500 iPhone 12 Series', 'Lúc 12h00 đêm ngày 26/11/2020, FPT Shop đã chính thức mở bán và giao iPhone 12 Series chính hãng đến tận tay khách hàng, trở thành chuỗi cửa hàng chính hãng đầu tiên mở bán siêu phẩm tại Việt Nam. Đến sáng ngày 27/11, hệ.', '2020-11-14 17:00:00', 'KhuyenMai/KM1.jpg', 2),
(7, 'Mua laptop, FPT Shop tặng quà sinh nhật đến 700.000 đồng', 'Chọn mua laptop tại FPT Shop, bạn không chỉ được giảm đến 10% mà còn được tặng thêm \"quà\" đến 700.000 đồng nếu có ngày sinh trong tháng.', '2020-11-15 17:00:00', 'KhuyenMai/KM2.jpg', 2),
(8, 'FPT Shop ‘cháy’ 2.000 iPhone 12 Series chính hãng, trung bình mỗi giờ giao 500 máy!', 'Tính đến 12h trưa ngày 27/11/2020, FPT Shop và F.Studio by FPT đã \"cháy\" 2.000 đơn hàng, trung bình mỗi giờ giao 500 máy!', '2020-11-09 17:00:00', 'KhuyenMai/KM3.jpg', 2),
(9, 'FPT Shop giảm đến 50% cho củ sạc Anker A2633 chính hãng', 'Từ ngày 27/11 – 03/12, khách hàng chọn mua củ sạc Anker PowerPort III 20W A2633 tại FPT Shop sẽ được hưởng nhiều ưu đãi thiết thực, bao gồm: giảm đến 50%, bảo hành 12 tháng và giao hàng tận nơi miễn phí.', '2020-11-24 17:00:00', 'KhuyenMai/KM4.jpg', 2),
(10, 'FPT Shop giảm thêm 500.000 đồng cho khách hàng chọn mua iPhone 12 Series và thanh toán', 'Ngày 27/11, FPT Shop chính thức lên kệ iPhone 12 Series với giá từ 21,99 triệu. Chọn mua sản phẩm từ 27/11-31/12/2020, ngoài những ưu đãi hiện có của sản phẩm, FPT Shop còn giảm thêm 500.000 đồng dành cho tất cả khách hàng.', '2020-11-29 17:00:00', 'KhuyenMai/KM5.jpg', 2),
(11, 'Hướng dẫn cứu dữ liệu thẻ nhớ bị format', 'Ngoài bộ nhớ trong ra, thẻ nhớ là nơi chứa dữ liệu của các thiết bị thông minh như smartphone hoặc tablet. Nếu gặp phải trường hợp cần cứu dữ liệu thẻ nhớ bị format thì phải thực hiện ra sao để đảm bảo được độ nguyên vẹn?', '2020-10-29 17:00:00', 'ThuThuat/TT1.jpg', 3),
(12, 'Hướng dẫn phục hồi nhanh thẻ nhớ bị mất dung lượng', 'Lỗi thẻ nhớ bị mất dung lượng thường không diễn ra nhiều và phổ biến như các lỗi khác nhưng một khi xuất hiện thì nó cũng gây ảnh hưởng đến người dùng bằng cách này hay cách khác.', '2020-11-30 17:00:00', 'ThuThuat/TT2.jpg', 3),
(13, 'Đây là 4 cách sửa lỗi thẻ nhớ bị read only nhanh nhất', 'Khi thẻ nhớ bị read only, điều đó có nghĩa là bạn không thể làm bất cứ một hành động nào khác như chỉnh sửa – xóa – di chuyển dữ liệu bên trong nó ra khu vực khác.', '2020-10-09 17:00:00', 'ThuThuat/TT3.jg', 3),
(14, 'Red Dead Online ra mắt dưới dạng một trò chơi độc lập vào ngày 1/12', 'Red Dead Online sẽ ra mắt dưới dạng một tựa game độc lập trên Steam và Epic Games Store từ ngày 1/12 cho đến ngày 15/2 năm sau, với giá 4,99 USD.', '2020-12-01 17:00:00', 'App&Game/AG1.jpg', 4),
(15, 'Top 10 ứng dụng chỉnh màu Hàn Quốc xuất sắc trên điện thoại', 'Để sở hữu tấm hình đẹp ngoài việc chụp đẹp thì các ứng dụng chỉnh màu cũng đóng vai trò rất quan trọng. FPTShop sẽ tổng hợp lại 10 ứng dụng chỉnh màu Hàn Quốc phổ biến nhất hiện nay để bạn tham khảo.', '2020-11-30 17:00:00', 'App&Game/AG2.jpg', 4),
(16, 'Lựa chọn laptop văn phòng nào tốt trong khoảng giá 16 triệu đồng?', 'Trong phân khúc 16 triệu đồng có khá nhiều sự lựa chọn laptop hấp dẫn dành cho đối tượng người dùng văn phòng, sinh viên hay người dùng cơ bản.', '2020-11-29 17:00:00', 'ForGame/FG1.jpg', 5),
(17, 'Tư vấn chọn mua laptop vừa đáp ứng tốt nhu cầu lại có thời lượng pin dài', 'Để có thể chọn mua được một chiếc laptop vừa đáp ứng tiêu chí đẹp, mạnh lại pin trâu là điều không quá khó khăn.', '2020-11-28 17:00:00', 'ForGame/FG2.jpg', 5),
(18, 'Máy chơi game Sony PlayStation 5 chính thức được bán ra từ hôm nay', 'Hôm nay, Sony đã phát hành máy chơi game rất được mong đợi của mình - Sony PlayStation 5 (PS5). Thiết bị kế nhiệm của PS4 bảy năm tuổi, hiện đã có sẵn để mua ở các khu vực lớn trên thế giới.', '2020-11-27 17:00:00', 'ForGame/FG3.jpg', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`MaBanner`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MaDonHang`,`MaSP`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDonHang`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`MLTin`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaLoai` (`MaLoai`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`MaTin`),
  ADD KEY `MLTin` (`MLTin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `MaBanner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDonHang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `MLTin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `MaTin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`MaDonHang`) REFERENCES `donhang` (`MaDonHang`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaLoai`) REFERENCES `loai` (`MaLoai`);

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`MLTin`) REFERENCES `loaitin` (`MLTin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
