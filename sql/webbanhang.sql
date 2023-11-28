-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 09:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `adstatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`, `adstatus`) VALUES
(4, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 1),
(5, 'k', 'c4ca4238a0b923820dcc509a6f75849b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `name`) VALUES
(1, 'Điện Thoại'),
(2, 'Máy Tính'),
(3, 'Phụ Kiện');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `subjectname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `note` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `orderid` varchar(10) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `orderdate` datetime DEFAULT NULL,
  `ngaynhan` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `payment` varchar(30) NOT NULL,
  `ship` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderid`, `userid`, `orderdate`, `ngaynhan`, `status`, `payment`, `ship`) VALUES
(122, '3858', 21, '2023-10-21 14:28:11', '2023-10-02 00:00:00', 3, 'tien mat', 27),
(123, '9289', 21, '2023-10-21 14:35:42', '2023-11-01 00:00:00', 3, 'chuyen khoan', 27),
(124, '5759', 21, '2023-10-21 14:38:15', '2023-11-11 00:00:00', 3, '', 27),
(125, '6397', 21, '2023-10-21 14:40:29', '2023-11-03 00:00:00', 3, 'tien mat', 27),
(126, '5533', 21, '2023-10-21 14:43:10', '2023-10-05 00:00:00', 3, 'chuyen khoan', 27),
(127, '8008', 21, '2023-10-21 14:43:34', '2023-11-09 00:00:00', 0, 'chuyen khoan', 27);

-- --------------------------------------------------------

--
-- Table structure for table `ordersdetail`
--

CREATE TABLE `ordersdetail` (
  `orderdtid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `orderid` varchar(10) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ordersdetail`
--

INSERT INTO `ordersdetail` (`orderdtid`, `productid`, `orderid`, `num`) VALUES
(85, 21, '3858', 1),
(86, 18, '9289', 1),
(87, 80, '5759', 1),
(88, 84, '6397', 1),
(89, 18, '5533', 1),
(90, 30, '8008', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `soluong` int(100) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `tinhtrang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `categoryid`, `title`, `soluong`, `price`, `discount`, `thumbnail`, `description`, `tinhtrang`) VALUES
(1, 1, 'OPPO Reno8 T 5G', 0, 9990000, 8790000, 'OPPO Reno8 T 5G.jpg', 'Ngon', '1'),
(2, 1, 'Samsung Galaxy A53 5G', 0, 9990000, 6390000, 'Samsung Galaxy A53 5G.jpg', 'Ngon', '1'),
(3, 1, 'iPhone XS 256GB', 0, 9990000, 5590000, 'iPhone XS 256GB.jpg', 'Ngon', '1'),
(4, 1, 'Xiaomi Redmi Note 12 Pro 5G', 0, 9490000, 7790000, 'Xiaomi Redmi Note 12 Pro 5G.jpg', 'Ngon', '1'),
(5, 2, 'Macbook Pro 16 inch 2023 M2 Max', 0, 91990000, 84990000, 'Macbook Pro 16 inch 2023 M2 Max.jpg', 'Ngon', '1'),
(6, 1, 'SamSung Galaxy S22 Ultra', 0, 21000000, 19990000, 'SamSung Galaxy S22 Ultra.png', '', '1'),
(7, 1, 'Xiaomi Redmi Note 11', 0, 5490000, 5100000, 'Xiaomi Redmi Note 11.jpg', '', '1'),
(8, 1, 'SamSung Galaxy Zlip 4', 0, 17000000, 15990000, 'SamSung Galaxy Zlip 4.jpg', 'ngon hơn bàn trang điểm', ''),
(9, 3, 'Củ Sạc Apple 20W MHJE3', 0, 470000, 450000, 'Cu Sac Apple 20W MHJE3.jpg', 'cắm phát đầy ngay', ''),
(10, 3, 'Tai nghe Bluetooth True Wireless AVA+ FreeGo A20', 0, 790000, 750000, 'Tai nghe Bluetooth True Wireless AVA+ FreeGo A20.jpg', 'chất lượng như thực', ''),
(11, 2, 'Laptop Dell Vostro 3520', 0, 14990000, 13990000, 'Laptop Dell Vostro 3520.png', 'good', '1'),
(12, 2, 'Laptop HP Gaming Victus 15-FA0031DX 6503849', 0, 18500000, 16500000, 'Laptop HP Gaming Victus 15-FA0031DX 6503849.jpg', 'Tuyet voi', '1'),
(13, 2, 'Laptop Lenovo Ideapad 5 Pro 16ARH7', 0, 21990000, 19990000, 'Laptop Lenovo Ideapad 5 Pro 16ARH7.png', 'nice]', '1'),
(14, 2, 'Laptop ASUS TUF Gaming F15 FX506HC-HN144W', 0, 22100000, 17890000, 'Laptop ASUS TUF Gaming F15 FX506HC-HN144W.jpg', 'Qua la tuyet voi', '1'),
(15, 2, 'Laptop Asus VivoBook 15 OLED A1505VA-L1114W', 0, 17900000, 15000000, 'Laptop Asus VivoBook 15 OLED A1505VA-L1114W.jpg', 'nice]', '1'),
(16, 2, 'Laptop Huawei Matebook D15', 0, 13990000, 12450000, 'Laptop Huawei Matebook D15\n.jpg', 'qua ngon]', ''),
(17, 2, 'Laptop gaming MSI GF63 Thin 11SC 664VN', 0, 14990000, 13500000, 'Laptop gaming MSI GF63 Thin 11SC 664VN.jpg', 'tuyet voi]', ''),
(18, 2, 'Laptop Lenovo IdeaPad 3 14ITL6 82H701QWVN', 0, 11290000, 9500000, 'Laptop Lenovo IdeaPad 3 14ITL6 82H701QWVN.jpg', 'nice]', ''),
(19, 1, 'Samsung Galaxy S23 Ultra', 0, 33990000, 18700000, 'Samsung Galaxy S23 Ultra.jpg', 'nice]', ''),
(20, 1, 'Realme C55 6GB', 0, 4990000, 4390000, 'Realme C55 6GB.jpg', 'verygood]', ''),
(21, 1, 'Vivo Y22s 4GB', 0, 5290000, 4290000, 'Vivo Y22s 4GB.jpg', 'nice]', ''),
(22, 3, 'Pin sạc dự phòng 10000mAh Type C PD QC3.0 20W Xmobile Y73 ', 0, 800000, 640000, 'Pin sac du phong 10000mAh Type C PD QC3.0 20W Xmobile Y73.jpg', 'nhuCL]', ''),
(23, 3, 'Tai nghe Bluetooth Chụp Tai JBL Tour One M2 ', 0, 6990000, 6590000, 'Tai nghe Bluetooth Chup Tai JBL Tour One M2.jpg', 'haml]', ''),
(24, 3, 'Loa Bluetooth Monster Adventurer FORCE ', 0, 3250000, 1750000, 'Loa Bluetooth Monster Adventurer FORCE.jpg', 'nice]', ''),
(25, 3, 'Logitech MX Master 3	', 0, 2490000, 2990000, 'Logitech MX Master 3.png', 'nice]', ''),
(26, 3, 'Bàn Phím MacBook Pro 16 inch 2021 ( A2485 )', 0, 2800000, 4200000, 'Ban Phim MacBook Pro 16 inch 2021 ( A2485 ).jpg', '', '0'),
(27, 3, 'Bàn phím MonsGeek M1 QMK Black AKKO Switch v3 Cream Yellow Pro', 0, 2700000, 3000000, 'Ban phim MonsGeek M1 QMK Black AKKO Switch v3 Cream Yellow Pro.png', '', '0'),
(28, 3, 'Chuột Microsoft Surface Precision Mouse', 0, 2500000, 3000000, 'Chuot Microsoft Surface Precision Mouse.jpg', 'nice]', ''),
(29, 3, 'Củ sạc Samsung USB-C 25W 1 cổng', 0, 380000, 490000, 'Cu sac Samsung USB-C 25W 1 cong.png', '', '0'),
(30, 2, 'MacBook Pro 14 inch 2023 M2 Max', 0, 81990000, 71990000, 'MacBook Pro 14 inch 2023 M2 Max.jpg', '', '1'),
(80, 1, 'Samsung Galaxy M14 5G 4GB 128GB', 10, 3999000, NULL, '1696702853_Samsung Galaxy M14 5G 4GB 18GB.png', '', '1'),
(82, 1, 'iPad 10.2 2021 WiFi 64GB | Chính hãng Apple Việt Nam', 9, 6999000, NULL, '1696703010_iPad 10.2 2021 WiFi 64GB.png', '', '1'),
(83, 2, 'Laptop Asus VivoBook Go 14 E1404FA-NK177W', 13, 12490000, NULL, '1696703137_Laptop Asus VivoBook Go 14 E1404FA-NK177W.png', '', '1'),
(84, 1, 'Xiaomi 13T Pro 5G (12GB - 512GB)', 1, 15999000, NULL, '1696703271_Xiaomi 13T Pro 5G (12GB - 512GB).png', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipid` int(11) NOT NULL,
  `khach` varchar(100) NOT NULL,
  `sodt` varchar(50) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `note` varchar(255) NOT NULL,
  `dangkyid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shipid`, `khach`, `sodt`, `diachi`, `note`, `dangkyid`) VALUES
(25, '2', '2', '2', '', 19),
(26, 'ư', '1', '122', '', 20),
(27, '11', '1', '1', '', 21);

-- --------------------------------------------------------

--
-- Table structure for table `thongke`
--

CREATE TABLE `thongke` (
  `thongkeid` int(11) NOT NULL,
  `ngaydat` varchar(30) NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thongke`
--

INSERT INTO `thongke` (`thongkeid`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(14, '2023-10-16', 2, '22998000', 1),
(15, '2023-10-21', 4, '197850000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `phonenumber` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `fullname`, `email`, `phonenumber`, `address`, `password`) VALUES
(13, 'Khánh ÔI Đẹp Trai QUá', 'k@gmail.com', '1', '1', 'cfcd208495d565ef66e7dff9f98764da'),
(14, 'k', 'nguyengiakhanhqq@gmail.com', '1', '1', 'cfcd208495d565ef66e7dff9f98764da'),
(15, 'k', 'j@gmail.com', '1', '11', 'c4ca4238a0b923820dcc509a6f75849b'),
(16, '11', 'nam@gmail.com', '1', '11', 'c4ca4238a0b923820dcc509a6f75849b'),
(17, 'k', 'btf@gmail.com', '2', '2', 'c81e728d9d4c2f636f067f89cc14862c'),
(18, 'k', '2254810135@vaa.edu.vn', '1', '1', 'c4ca4238a0b923820dcc509a6f75849b'),
(19, '2', '2@kk.com', '2', '2', 'c81e728d9d4c2f636f067f89cc14862c'),
(20, 'ư', '111@gmail.com', '1', '122', 'cfcd208495d565ef66e7dff9f98764da'),
(21, '11', 'kj@gmail.com', '1', '1', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`) USING BTREE;

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`) USING BTREE;

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `ordersdetail`
--
ALTER TABLE `ordersdetail`
  ADD PRIMARY KEY (`orderdtid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipid`);

--
-- Indexes for table `thongke`
--
ALTER TABLE `thongke`
  ADD PRIMARY KEY (`thongkeid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `ordersdetail`
--
ALTER TABLE `ordersdetail`
  MODIFY `orderdtid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `thongke`
--
ALTER TABLE `thongke`
  MODIFY `thongkeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `category` (`categoryid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
