-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2024 at 09:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitebanhngot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_admin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_admin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhdaidien` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_admin`, `pass_admin`, `hinhdaidien`) VALUES
('nhien', '202cb962ac59075b964b07152d234b70', 'assets/images/auth/z4314104368933_8bc4142ab55be12a6ac73cf1870c637a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `Idchitiet` int(11) NOT NULL,
  `Madon` int(11) NOT NULL,
  `Masp` int(20) NOT NULL,
  `giamua` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE `dondathang` (
  `Madon` int(11) NOT NULL,
  `Sdt` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ngaydat` date NOT NULL,
  `tongtien` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Trangthai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ghichu` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhhang`
--

CREATE TABLE `khachhhang` (
  `Sdt` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Matkhau` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tenkhachhang` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diachi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhhang`
--

INSERT INTO `khachhhang` (`Sdt`, `Matkhau`, `Tenkhachhang`, `Diachi`) VALUES
('10', '', '2', 'khóm 5 phư'),
('12345', '202cb962ac59075b964b07152d234b70', 'mai', 'kjfhodsh'),
('1234567890', 'f014b94c35268c600ab22ef3e885b54f', 'vdsac', 'csd'),
('fds', '08c6a51dde006e64aed953b94fd68f0c', 'vds', 'fsd'),
('fsda', '83b861efd4ce3bb438dd07435c9e7044', 'cdscds', 'cd'),
('fsdd', '6226f7cbe59e99a90b5cef6f94f966fd', 'csd', 'fsd'),
('sad', 'cc2bd8f09bb88b5dd20f9b432631b8ca', 'fds', 'fds');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `Idlienhe` int(11) NOT NULL,
  `Sdtlienhe` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Tenkhachhang` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Noidunglienhe` text COLLATE utf8_unicode_ci NOT NULL,
  `Trangthai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`Idlienhe`, `Sdtlienhe`, `Tenkhachhang`, `Noidunglienhe`, `Trangthai`) VALUES
(1, '1234', 'cxzcz', 'vdsssvdf', 1),
(2, 'dfgd', 'sfdsfdf', 'bsvdfvdfvgf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaibanh`
--

CREATE TABLE `loaibanh` (
  `Maloai` int(11) NOT NULL,
  `Tenloai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaibanh`
--

INSERT INTO `loaibanh` (`Maloai`, `Tenloai`, `trangthai`) VALUES
(1, 'Bánh mì ngọt', 1),
(2, 'Bánh Kem', 1),
(3, 'Bánh Bông Lan', 1),
(4, 'Bánh Rau Câu', 1),
(5, 'Bánh cupcake', 1),
(6, 'Bánh mì', 1),
(10, 'hfdfsd', 0),
(11, 'bánh mới', 0),
(12, 'aaaaa', 0),
(13, 'jhkrttjht h hjttrjht', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `Masp` int(20) NOT NULL,
  `Tensp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hinhbanh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hansudung` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ngaysanxuat` date DEFAULT NULL,
  `Giahientai` int(11) NOT NULL,
  `Maloai` int(11) NOT NULL,
  `Thanhphan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`Masp`, `Tensp`, `Hinhbanh`, `Hansudung`, `Ngaysanxuat`, `Giahientai`, `Maloai`, `Thanhphan`, `trangthai`) VALUES
(2, 'Bánh kem sinh nhật', 'img/hinhanh/Banhkem2.jpg', '3 tuần', '2023-12-12', 350000, 2, 'Bánh bông lan<br>\r\n kem <br>\r\nnho khô<br> \r\nmứt khóm<br>\r\n phẩm màu tím <br>', 1),
(3, 'Bánh Bông Lan', 'img/hinhanh/banhbonglan.jpg', '2 tháng', '2023-12-14', 20000, 3, 'Bột mì<br>\r\ntrứng<br>\r\nchất tạo ngọt (isomalt)<br>\r\nchất béo thực vật<br>\r\nmạch nha<br>\r\nchất giữ ẩm (glycerol)<br>\r\nđường<br>\r\nsữa bột<br>\r\nchất nhũ hóa (E471)<br>\r\ntinh bột bắp<br>\r\nchất tạo xốp (E500ii, E503ii)<br>\r\nmuối <br>\r\nchất xơ hòa tan (inulin)<br>\r\nhương (cốm,vani) tổng hợp<br>\r\nchất bảo quản (E202)<br>\r\n vitamin (A,C)<br>\r\n màu thực phẩm tổng hợp (E133, E160ai <br>', 1),
(4, 'Bánh Rau Câu', 'img/hinhanh/banhraucau.jpg', '1 tháng', '2023-12-17', 100000, 4, '25g bột rau câu giòn.<br>\r\n3 lòng đỏ trứng gà<br>\r\n2 viên phô mai.<br>\r\n60g sữa đặc.<br>\r\n125ml sữa tươi không đường hoặc whipping cream.<br>\r\n2 ống vani.<br>\r\n80ml cà phê<br>\r\n1,5l nước.<br>', 1),
(12, 'Bánh kem sinh nhật(hình lân)', 'img/hinhanh/banh-kem-3d-hinh-dau-lan-dep-vui-pha-cho-trong-trang-trung-thu-10645-banh-gato-sinh-nhat-dep-hunnie-cake-iqd1695739449.jpg', '15 ngày', '2023-12-25', 150000, 2, ' 200g bột mì<br>\r\n70ml sữa tươi<br>\r\n½ hộp phô mai<br>\r\n5 gram bơ lạt<br>\r\n30ml kem béo<br>\r\n5 trứng muối<br>\r\n1 trứng gà<br>\r\nlòng đỏ trứng vịt muối<br>\r\n50ml rượu trắng…<br>', 1),
(13, 'Bánh kem sinh nhật(20-10)', 'img/hinhanh/me.jpg', '15 ngày', '2023-12-26', 200000, 2, '- 4 quả trứng gà<br>\r\n\r\n- Bột mì làm bánh: 200g<br>\r\n\r\n- Đường: 70g<br>\r\n\r\n- Tinh dầu Vanilla: 5ml<br>\r\n\r\n\r\nLòng trắng trứng: 2 quả<br>\r\n\r\n- 60g đường trắng<br>\r\n\r\n- 100g bơ lạt<br>', 1),
(14, 'Bánh kem sinh nhật(giáng sinh)', 'img/hinhanh/giangsinh.jpg', '15 ngày', '2023-12-26', 350000, 2, '7 quả trứng.<br>\r\n3 lòng trắng trứng.<br>\r\n155g bột làm bánh.<br>\r\n170g đường.<br>\r\n100g bột đường.<br>\r\n15g mật ong.<br>\r\n8g vani.<br>\r\n235g bơ<br>', 1),
(15, 'Bánh kem sinh nhật(trái cây)', 'img/hinhanh/banh-kem-trai-cay-thumbnail.jpg', '15 ngày', '2023-12-26', 250000, 2, '4 quả trứng gà<br>\r\n500g whipping cream.<br>\r\n80g socola trắng.<br>\r\n125g bột làm bánh bông lan.<br>\r\n40g bơ lạt.<br>\r\n20 quả dâu tây.<br>\r\n3 quả kiwi.<br>\r\n1 quả xoài.<br>', 1),
(16, 'Bánh Mì Đặc Ruột', 'img/hinhanh/banh-mi-dac-ruot.jpg', '1 ngày', '2023-12-31', 10000, 6, 'Chất béo: 3.3g.<br>\r\nNatri: 491mg.<br>\r\nKali: 115mg.<br>\r\nCacbohydrat: 49g.<br>\r\nChất xơ: 2.4g.<br>\r\nProtein: 7.6g.<br>\r\nCanxi: 260mg.<br>\r\nMagie: 25mg.<br>', 1),
(17, 'Bánh Mì Tròn', 'img/hinhanh/banh-mi-khong-can-nhoi-thumbnail.jpg', '1 ngày', '2023-12-31', 5000, 6, 'Chất béo: 3.3g.<br>\r\nNatri: 491mg.<br>\r\nKali: 115mg.<br>\r\nCacbohydrat: 49g.<br>\r\nChất xơ: 2.4g.<br>\r\nProtein: 7.6g.<br>\r\nCanxi: 260mg.<br>\r\nMagie: 25mg.<br>', 1),
(18, 'Bánh Mì Dài', 'img/hinhanh/banh-mi-khong-nhan2.jpg', '1 ngày', '2023-12-31', 5000, 6, 'Chất béo: 3.3g.<br>\r\nNatri: 491mg.<br>\r\nKali: 115mg.<br>\r\nCacbohydrat: 49g.<br>\r\nChất xơ: 2.4g.<br>\r\nProtein: 7.6g.<br>\r\nCanxi: 260mg.<br>\r\nMagie: 25mg<br>', 1),
(19, 'Bánh Mì Dài(đặc ruột)', 'img/hinhanh/maxresdefault.jpg', '15 ngày', '2023-12-31', 8000, 6, 'Chất béo: 3.3g.<br>\r\nNatri: 491mg.<br>\r\nKali: 115mg.<br>\r\nCacbohydrat: 49g.<br>\r\nChất xơ: 2.4g.<br>\r\nProtein: 7.6g.<br>\r\nCanxi: 260mg.<br>\r\nMagie: 25mg.<br>', 1),
(20, 'Bánh mì tí hon', 'img/hinhanh/vn-11134201-23020-b9arzp4tywnv34_tn.jpg', '1 ngày', '2023-12-31', 2000, 6, 'Chất béo: 3.3g.<br>\r\nNatri: 491mg.<br>\r\nKali: 115mg.<br>\r\nCacbohydrat: 49g.<br>\r\nChất xơ: 2.4g.<br>\r\nProtein: 7.6g.<br>\r\nCanxi: 260mg.<br>\r\nMagie: 25mg.<br>', 1),
(21, 'Bánh Bông Lan(trứng muối)', 'img/hinhanh/Banh-bong-lan-trung-muoi-thumb-2-scaled.jpg', '3 tuần', '2023-12-26', 20000, 3, '200g bột mì<br>\r\n70ml sữa tươi<br>\r\n½ hộp phô mai<br>\r\n35 gram bơ lạt<br>\r\n30ml kem béo<br>\r\n5 trứng muối<br>\r\n1 trứng gà<br>\r\nlòng đỏ trứng vịt muối<br>\r\n50ml rượu trắng…<br>', 1),
(22, 'Bánh Bông Lan (nhỏ)', 'img/hinhanh/huong-dan-cach-lam-banh-bong-lan-bap-thom-ngon-beo-ngay-de-lam-202110281157346317.jpg', '3 tuần', '2023-12-22', 5000, 3, 'Trứng gà: 16.7g <br>\r\nBột mì: 13.3g <br>\r\nĐường: 10g <br>\r\nBơ: 10g <br>\r\nNho: 4g <br>\r\nRượu Rhum: 3.75g <br>\r\nNăng lượng: 217Kcal <br>\r\nProtein: 4.3g <br>\r\nVitamin C: 1.36mg <br>\r\nVitamin A: 188.2μg <br>\r\nBeta-Caroten: 46.7μg<br>\r\nCholesterol: 132mg', 1),
(23, 'Bánh Bông Lan Cuộn', 'img/hinhanh/images.jpg', '3 tuần', '2023-12-22', 20000, 3, 'Bột mì<br>\r\ntrứng<br>\r\nđường<br>\r\nmật ong<br>\r\nbột nổi<br>\r\nnho khô<br>\r\ndầu<br>\r\nkem sữa<br>\r\nchất ổn định…', 1),
(24, 'Bánh Bông Lan Đài Loan', 'img/hinhanh/650-425-banh-bong-lan-mem-min-bepcuoi-720.jpg', '15 ngày', '2023-12-22', 10000, 3, 'bột mì<br>\r\nbơ<br>\r\ntrứng<br>\r\nđường<br>\r\nsữa và các thành phần khác', 1),
(26, 'Bánh kem sinh nhật(set 3 bộ)', 'img/hinhanh/Bánh-Kem-Set-3-Cái-Nhỏ-TP-1325.jpg', '', '2023-12-17', 400000, 2, ' bột mì <br> \r\ntrứng <br>\r\nsữa <br> \r\nphô mai,...<br> \r\nTrong bánh kem chứa các chất dinh dưỡng như chất bột đường khá nhiều <br>', 1),
(27, 'Bánh Rau Câu Khai Trương', 'img/hinhanh/12.png', '3 tuần', '2023-12-22', 350000, 4, 'Bột rau câu nguyên chất.<br>\r\nĐường.<br>\r\nSữa tươi.<br>\r\nKem béo.<br>\r\nTrái cây tươi.<br>\r\nMứt/ trái cây sấy. <br>\r\nCốt dừa.<br>\r\nTrứng.<br>', 1),
(28, 'Bánh Rau Câu(hình sân bóng)', 'img/hinhanh/Rau-Câu-Flan-Sân-Banh-TP-1001.jpg', '3 tuần', '2023-12-27', 200000, 4, 'Bột rau câu nguyên chất.<br>\r\nĐường.<br>\r\nSữa tươi.<br>\r\nKem béo.<br>\r\nTrái cây tươi.<br>\r\nMứt/ trái cây sấy. <br>\r\nCốt dừa.<br>\r\nTrứng.<br>', 1),
(29, 'Bánh Rau Câu(trái cây)', 'img/hinhanh/banh-thach-trai-cay.jpg', '15 ngày', '2023-12-26', 100000, 4, 'Bột rau câu nguyên chất.<br>\r\nĐường.<br>\r\nSữa tươi.<br>\r\nKem béo.<br>\r\nTrái cây tươi.<br>\r\nMứt/ trái cây sấy. <br>\r\nCốt dừa.<br>\r\nTrứng.<br>', 1),
(30, 'Bánh Rau Câu Hai Tầng', 'img/hinhanh/hoi-thi-rau-cau-02.jpg', '15 ngày', '2023-12-26', 400000, 4, 'Bột rau câu nguyên chất.<br>\r\nĐường.<br>\r\nSữa tươi.<br>\r\nKem béo.<br>\r\nTrái cây tươi.<br>\r\nMứt/ trái cây sấy.<br>\r\nCốt dừa.<br>\r\nTrứng.<br>', 1),
(38, 'sdahn', '', NULL, NULL, 6453, 3, 'nb ndvv c', 0),
(39, 'hihihihihih', '', NULL, NULL, 32121, 3, 'vsfsf', 0),
(40, 'dlasha ', '', NULL, NULL, 322, 10, 'hfdvze', 0),
(41, 'gfsdf', '', NULL, NULL, 43213, 1, 'dafsd', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_admin`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`Idchitiet`);

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`Madon`),
  ADD KEY `Sdt` (`Sdt`);

--
-- Indexes for table `khachhhang`
--
ALTER TABLE `khachhhang`
  ADD PRIMARY KEY (`Sdt`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`Idlienhe`);

--
-- Indexes for table `loaibanh`
--
ALTER TABLE `loaibanh`
  ADD PRIMARY KEY (`Maloai`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`Masp`),
  ADD KEY `Maloai` (`Maloai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `Idchitiet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `Madon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `Idlienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loaibanh`
--
ALTER TABLE `loaibanh`
  MODIFY `Maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `Masp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `dondathang_ibfk_1` FOREIGN KEY (`Sdt`) REFERENCES `khachhhang` (`Sdt`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`Maloai`) REFERENCES `loaibanh` (`Maloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
