-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 01:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`, `adstatus`)
VALUES (
    4,
    'admin',
    'c4ca4238a0b923820dcc509a6f75849b',
    1
  ),
  (5, 'k', 'c4ca4238a0b923820dcc509a6f75849b', 1);
-- --------------------------------------------------------
--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `name`)
VALUES (1, 'Điện Thoại'),
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (
    `id`,
    `orderid`,
    `userid`,
    `orderdate`,
    `ngaynhan`,
    `status`,
    `payment`,
    `ship`
  )
VALUES (
    136,
    '7655',
    22,
    '2023-10-21 18:01:33',
    '2023-11-01 00:00:00',
    3,
    '',
    28
  ),
  (
    138,
    '485',
    22,
    '2023-10-21 18:04:03',
    '2023-11-01 00:00:00',
    3,
    'tien mat',
    28
  ),
  (
    139,
    '1342',
    22,
    '2023-10-21 18:43:15',
    '2023-10-21 00:00:00',
    3,
    '',
    28
  ),
  (
    140,
    '5250',
    22,
    '2023-10-21 18:43:28',
    '2023-10-21 00:00:00',
    3,
    '',
    28
  ),
  (
    141,
    '3817',
    22,
    '2023-10-21 18:45:27',
    '2023-10-21 00:00:00',
    3,
    'tien mat',
    28
  ),
  (
    142,
    '6077',
    22,
    '2023-10-21 18:45:47',
    '2023-10-22 00:00:00',
    3,
    'tien mat',
    28
  ),
  (
    143,
    '3973',
    22,
    '2023-10-21 18:58:22',
    '2023-10-21 00:00:00',
    3,
    'chuyen khoan',
    28
  ),
  (
    144,
    '2636',
    22,
    '2023-10-21 18:58:33',
    '2023-10-21 00:00:00',
    3,
    'chuyen khoan',
    28
  ),
  (
    145,
    '5188',
    22,
    '2023-10-23 14:48:48',
    '2023-11-03 00:00:00',
    0,
    '',
    28
  ),
  (
    146,
    '5554',
    22,
    '2023-10-23 15:33:03',
    '2023-10-31 00:00:00',
    0,
    'tien mat',
    28
  ),
  (
    147,
    '2318',
    22,
    '2023-10-23 15:33:27',
    '2023-10-23 00:00:00',
    3,
    'chuyen khoan',
    28
  ),
  (
    148,
    '9256',
    22,
    '2023-10-23 15:33:52',
    '2023-10-23 00:00:00',
    3,
    'tien mat',
    28
  ),
  (
    149,
    '9032',
    22,
    '2023-10-23 15:36:23',
    '2023-10-23 00:00:00',
    3,
    'tien mat',
    28
  ),
  (
    150,
    '7650',
    22,
    '2023-10-23 15:39:02',
    '2023-10-24 00:00:00',
    3,
    'chuyen khoan',
    28
  ),
  (
    151,
    '3753',
    22,
    '2023-10-23 15:39:21',
    '2023-10-29 00:00:00',
    0,
    'chuyen khoan',
    28
  ),
  (
    152,
    '4871',
    22,
    '2023-10-23 15:42:13',
    '2023-10-23 00:00:00',
    3,
    'chuyen khoan',
    28
  ),
  (
    153,
    '2735',
    22,
    '2023-10-23 15:46:03',
    '2023-11-10 00:00:00',
    0,
    'chuyen khoan',
    28
  ),
  (
    154,
    '8797',
    22,
    '2023-10-23 15:47:33',
    '2023-10-23 00:00:00',
    3,
    'chuyen khoan',
    28
  ),
  (
    155,
    '7581',
    23,
    '2023-10-24 07:27:08',
    '2024-02-12 00:00:00',
    0,
    'tien mat',
    29
  ),
  (
    156,
    '6266',
    22,
    '2023-10-26 16:24:53',
    '2023-10-27 00:00:00',
    3,
    'chuyen khoan',
    28
  ),
  (
    157,
    '891',
    22,
    '2023-10-26 16:40:30',
    '2023-11-02 00:00:00',
    0,
    'chuyen khoan',
    28
  ),
  (
    158,
    '6407',
    22,
    '2023-10-26 16:42:33',
    '2023-11-01 00:00:00',
    0,
    'chuyen khoan',
    28
  ),
  (
    159,
    '6549',
    22,
    '2023-10-27 14:29:06',
    '2023-11-08 00:00:00',
    0,
    'chuyen khoan',
    28
  ),
  (
    160,
    '8939',
    22,
    '2023-10-27 14:29:45',
    '2023-10-27 00:00:00',
    3,
    'chuyen khoan',
    28
  ),
  (
    161,
    '8593',
    22,
    '2023-10-27 14:44:34',
    '2023-11-03 00:00:00',
    2,
    'chuyen khoan',
    28
  ),
  (
    162,
    '3625',
    22,
    '2023-10-27 14:46:06',
    '2023-11-02 00:00:00',
    2,
    'chuyen khoan',
    28
  ),
  (
    163,
    '6538',
    22,
    '2023-10-27 14:53:38',
    '2023-11-09 00:00:00',
    2,
    'chuyen khoan',
    28
  ),
  (
    164,
    '612',
    22,
    '2023-10-27 14:54:16',
    '2023-11-09 00:00:00',
    2,
    'chuyen khoan',
    28
  ),
  (
    165,
    '1187',
    22,
    '2023-10-27 14:57:49',
    '2023-10-27 00:00:00',
    3,
    'chuyen khoan',
    28
  ),
  (
    166,
    '5082',
    22,
    '2023-10-27 15:00:52',
    '2023-10-31 00:00:00',
    2,
    'chuyen khoan',
    28
  ),
  (
    167,
    '3604',
    22,
    '2023-10-28 09:16:22',
    '2023-11-01 00:00:00',
    2,
    'chuyen khoan',
    28
  ),
  (
    168,
    '515',
    22,
    '2023-10-28 09:17:52',
    '2023-10-28 00:00:00',
    3,
    'chuyen khoan',
    28
  ),
  (
    169,
    '931',
    22,
    '2023-10-28 09:19:36',
    '2023-10-28 00:00:00',
    3,
    'chuyen khoan',
    28
  ),
  (
    170,
    '3654',
    22,
    '2023-10-28 09:20:16',
    '2023-10-28 00:00:00',
    3,
    'chuyen khoan',
    28
  ),
  (
    171,
    '7566',
    22,
    '2023-10-28 09:20:55',
    '2023-10-28 00:00:00',
    3,
    'chuyen khoan',
    28
  ),
  (
    172,
    '7113',
    22,
    '2023-10-28 09:21:00',
    '2023-10-28 00:00:00',
    3,
    'chuyen khoan',
    28
  ),
  (
    173,
    '4653',
    22,
    '2023-10-28 09:21:50',
    '2023-10-28 00:00:00',
    3,
    'chuyen khoan',
    28
  );
-- --------------------------------------------------------
--
-- Table structure for table `ordersdetail`
--

CREATE TABLE `ordersdetail` (
  `orderdtid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `orderid` varchar(10) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Dumping data for table `ordersdetail`
--

INSERT INTO `ordersdetail` (`orderdtid`, `productid`, `orderid`, `num`)
VALUES (92, 83, '9566', 1),
  (93, 83, '1380', 1),
  (94, 82, '1925', 2),
  (95, 18, '1925', 1),
  (96, 18, '485', 1),
  (97, 80, '1342', 1),
  (98, 83, '1342', 1),
  (99, 82, '6077', 1),
  (100, 83, '3973', 1),
  (101, 18, '2636', 1),
  (102, 18, '5188', 1),
  (103, 18, '5554', 1),
  (104, 82, '5554', 1),
  (105, 18, '2318', 1),
  (106, 18, '9256', 1),
  (107, 82, '9032', 1),
  (108, 80, '7650', 1),
  (109, 27, '3753', 1),
  (110, 18, '4871', 1),
  (111, 83, '2735', 1),
  (112, 30, '8797', 1),
  (113, 80, '7581', 1),
  (114, 84, '6266', 1),
  (115, 83, '6266', 13),
  (116, 82, '891', 1),
  (117, 84, '891', 1),
  (118, 84, '6407', 1),
  (119, 80, '6549', 9),
  (120, 82, '8939', 2),
  (121, 82, '8593', 2),
  (122, 82, '3625', 1),
  (123, 82, '6538', 1),
  (124, 82, '612', 1),
  (125, 1, '612', 1),
  (126, 82, '1187', 1),
  (127, 82, '5082', 2),
  (128, 1, '5082', 1),
  (129, 83, '3604', 5),
  (130, 84, '3604', 3),
  (131, 82, '515', 1),
  (132, 82, '931', 1),
  (133, 80, '3654', 1),
  (134, 80, '7566', 1),
  (135, 80, '4653', 1);
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Dumping data for table `product`
--

INSERT INTO `product` (
    `productid`,
    `categoryid`,
    `title`,
    `soluong`,
    `price`,
    `discount`,
    `thumbnail`,
    `description`,
    `tinhtrang`
  )
VALUES(
    1,
    1,
    'OPPO Reno8 T 5G',
    8,
    9990000,
    8790000,
    'OPPO Reno8 T 5G.jpg',
    'Sở hữu con chip MediaTek Dimensity 1300 5G cùng dung lượng RAM lên đến 8GB mang đến hiệu suất xử lý vô cùng mạnh mẽ. Với camera chính 50MP cùng hai cảm biến phụ ở mặt lưng. Thiết bị cũng thu hút sự chú ý bởi màn hình 6.43 inch AMOLED có độ phân giải Full HD+.',
    '1'
  ),
  (
    2,
    1,
    'Samsung Galaxy A53 5G',
    4,
    9990000,
    6390000,
    'Samsung Galaxy A53 5G.jpg',
    'Samsung Galaxy A53 5G không chỉ là một điện thoại thông minh chơi game. Nói chính xác hơn, Galaxy A53 5G là một chiếc smartphone khá toàn diện.',
    '1'
  ),
  (
    3,
    1,
    'iPhone XS 256GB',
    10,
    9990000,
    5590000,
    'iPhone XS 256GB.jpg',
    'Thiết kế cao cấp với viền thép không gỉ và mặt kính cường lực, Màn hình OLED chất lượng cao rộng 6.5 inch, Hiệu năng đỉnh của đỉnh với chip Apple A12.',
    '1'
  ),
  (
    4,
    1,
    'Xiaomi Redmi Note 12 Pro 5G',
    9,
    9490000,
    7790000,
    'Xiaomi Redmi Note 12 Pro 5G.jpg',
    'Tỏa sáng với diện mạo viền vuông cực thời thượng cùng hiệu suất mạnh mẽ nhờ sở hữu con chip Snapdragon 685 ấn tượng. Chất lượng hiển thị hình ảnh của Redmi Note 12 Vàng cũng khá sắc nét thông qua tấm nền AMOLED 120Hz hiện đại.',
    '1'
  ),
  (
    5,
    2,
    'Macbook Pro 16 inch 2023 M2 Max',
    11,
    91990000,
    84990000,
    'Macbook Pro 16 inch 2023 M2 Max.jpg',
    'trang bị cấu hình nổi trội nhờ con chipset M2 Pro 12 nhân, 19 nhân GPU, 16 nhân Neural Engine cùng băng thông bộ nhớ lên đến 200GB/s.',
    '1'
  ),
  (
    6,
    1,
    'SamSung Galaxy S22 Ultra',
    12,
    21000000,
    19990000,
    'SamSung Galaxy S22 Ultra.png',
    'Điện thoại Samsung S22 Ultra cho cảm giác siêu mượt mà khi mở và đóng ứng dụng, đi kèm bộ nhớ trong 256GB cho bạn thoải mái lưu trữ những khung hình, thước phim chất lượng cao.',
    '1'
  ),
  (
    7,
    1,
    'Xiaomi Redmi Note 11',
    33,
    5490000,
    5100000,
    'Xiaomi Redmi Note 11.jpg',
    'Xiaomi Redmi Note 11 Pro 4G mang trong mình khá nhiều những nâng cấp cực kì sáng giá. Là chiếc điện thoại có màn hình lớn, tần số quét 120 Hz, hiệu năng ổn định cùng một viên pin siêu trâu.',
    '1'
  ),
  (
    8,
    1,
    'SamSung Galaxy Zlip 4',
    7,
    17000000,
    15990000,
    'SamSung Galaxy Zlip 4.jpg',
    '   Samsung Galaxy Z Flip4 512GB cũng đã chính thức lộ diện với một vẻ ngoài cuốn hút đầy bắt mắt. Máy được nâng cấp độ bền so với thế hệ cũ nhờ sử dụng nhiều vật liệu cao cấp để chế tạo',
    ''
  ),
  (
    9,
    3,
    'Củ Sạc Apple 20W MHJE3',
    9,
    470000,
    450000,
    'Cu Sac Apple 20W MHJE3.jpg',
    'Apple là một trong những thương hiệu đình đám nhất hiện nay khi sở hữu nhiều dòng sản phẩm đẳng cấp và chất lượng cao. Trong đó, phải kể đến Adapter Sạc 20W Apple là một Adapter mang lại trải nghiệm sạc ấn tượng cho người dùng. ',
    ''
  ),
  (
    10,
    3,
    'Tai nghe Bluetooth True Wireless AVA+ FreeGo A20',
    11,
    790000,
    750000,
    'Tai nghe Bluetooth True Wireless AVA+ FreeGo A20.jpg',
    'Tai nghe Bluetooth True Wireless AVA+ FreeGo A20 với gam màu thanh lịch, kiểu dáng đẹp mắt, âm thanh sống động và rõ ràng, kết nối không dây nhanh chóng, mang đến cho người dùng những trải nghiệm tuyệt vời. ',
    ''
  ),
  (
    11,
    2,
    'Laptop Dell Vostro 3520',
    22,
    14990000,
    13990000,
    'Laptop Dell Vostro 3520.png',
    'Laptop Dell Vostro 15 3520 i3 1215U (5M2TT1) là một lựa chọn hoàn hảo dành cho những người tìm kiếm một thiết bị gọn gàng và đa năng. Với sự kết hợp giữa bộ vi xử lý Intel thế hệ 12 và tần số quét cao 120 Hz ',
    '1'
  ),
  (
    12,
    2,
    'Laptop HP Gaming Victus 15-FA0031DX 6503849',
    15,
    18500000,
    16500000,
    'Laptop HP Gaming Victus 15-FA0031DX 6503849.jpg',
    'Laptop HP VICTUS hứa hẹn mang đến trải nghiệm làm việc và giải trí tuyệt vời nhờ bộ vi xử lý Intel thế hệ 12 mạnh mẽ, card đồ họa NVIDIA RTX 30-series và màn hình 144 Hz siêu mượt mà',
    '1'
  ),
  (
    13,
    2,
    'Laptop Lenovo Ideapad 5 Pro 16ARH7',
    6,
    21990000,
    19990000,
    'Laptop Lenovo Ideapad 5 Pro 16ARH7.png',
    'Laptop Lenovo Ideapad 5 Pro 16ARH7 là một chiếc laptop mang đến chất lượng hình ảnh tuyệt vời nhờ sử dụng công nghệ màn hình 2.5K. Thiết kế nhỏ gọn của nó kết hợp với bộ vi xử lý AMD Ryzen 6600 Series và card đồ họa rời GeForce RTX 3050 Series, tạo nên một hiệu suất vượt trội để bạn có thể chinh phục mọi trải nghiệm.',
    '1'
  ),
  (
    14,
    2,
    'Laptop ASUS TUF Gaming F15 FX506HC-HN144W',
    5,
    22100000,
    17890000,
    'Laptop ASUS TUF Gaming F15 FX506HC-HN144W.jpg',
    'Laptop ASUS TUF Gaming FX506HC-HN144W  là một chiếc laptop gaming thuộc hạng nặng với bộ vi xử lý thế hệ mới Intel Core 11 mới nhất và một thiết lập âm thanh tổng thể tuyệt vời. Bằng những cải tiến tối ưu về cả hiệu năng lẫn kiểu dáng Asus muốn mang lại cho người dùng một sản phẩm hoàn hảo mang đến trải nghiệm mới mẻ và vượt trội hơn bao giờ hết.',
    '1'
  ),
  (
    15,
    2,
    'Laptop Asus VivoBook 15 OLED A1505VA-L1114W',
    7,
    17900000,
    15000000,
    'Laptop Asus VivoBook 15 OLED A1505VA-L1114W.jpg',
    'Tỏa sáng với cả thế giới cùng ASUS Vivobook 15 OLED mạnh mẽ, chiếc laptop tích hợp nhiều tính năng với màn hình OLED rực rỡ, gam màu 100% DCI-P3 đẳng cấp điện ảnh. Mọi thứ trở nên dễ dàng hơn nhờ những tiện ích thân thiện với người dùng bao gồm bản lề duỗi thẳng 180°, nắp che webcam vật lý và các phím chức năng chuyên dụng. Bảo vệ sức khỏe an toàn với ASUS kháng khuẩn Guard Plus trên các bề mặt thường xuyên chạm vào. ',
    '1'
  ),
  (
    16,
    2,
    'Laptop Huawei Matebook D15',
    4,
    13990000,
    12450000,
    'Laptop Huawei Matebook D15\n.jpg',
    'qua ngon]',
    ''
  ),
  (
    17,
    2,
    'Laptop gaming MSI GF63 Thin 11SC 664VN',
    2,
    14990000,
    13500000,
    'Laptop gaming MSI GF63 Thin 11SC 664VN.jpg',
    'HUAWEI MateBook D15 đưa bạn đắm chìm vào trải nghiệm màn hình IPS FullView tuyệt đỉnh với kích thước 15,6 inch. Sở hữu tỷ lệ màn hình so với thân máy lên đến 87% và viền màn hình mỏng 5,3 mm, đây chính là máy tính hoàn hảo để bạn thưởng thức các bộ phim điện ảnh, đồng hành trong hành trình sáng tạo bức phá bản thân. Với tôn chỉ thiết kế tập trung vào tính di động, máy tính sở hữu phần thân kim loại cao cấp chỉ nặng 1,53 kg và dày 16,9 mm2, nhờ đó bạn có thể dễ dàng thưởng thức màn chiếc màn hình Fullview sống động này mọi lúc mọi nơi.',
    ''
  ),
  (
    18,
    2,
    'Laptop Lenovo IdeaPad 3 14ITL6 82H701QWVN',
    8,
    11290000,
    9500000,
    'Laptop Lenovo IdeaPad 3 14ITL6 82H701QWVN.jpg',
    'Lenovo IdeaPad 3 14ITL6-82H701QYVN là một dòng máy tính văn phòng nổi bật dành cho học sinh, sinh viên và nhân viên. Máy có thiết kế nhỏ gọn linh hoạt, trọng lượng chỉ 1.41kg rất thuận tiện cho việc di chuyển. Laptop được trang bị bộ vi xử lý Intel Core i5 1155G7 mang đến hiệu năng hoạt động ổn định, kết hợp cùng RAM 16GB và ổ cứng SSD 512GB, giúp các tác vụ được xử lý mượt mà, nhanh chóng cùng không gian lưu trữ rộng lớn. Trải nghiệm người dùng cũng được nâng tầm khi máy trang bị màn hình chống chói IPS 14 inch tiêu chuẩn, song hành là loa kép 1.5W, vừa cho hình ảnh Full HD, vừa có âm thanh sống động. Chiếc laptop Lenovo IdeaPad 3 này này hứa hẹn sẽ là “cánh tay đắc lực”, hỗ trợ người dùng tối đa trọng mọi công việc và hoạt động giải trí.',
    ''
  ),
  (
    19,
    1,
    'Samsung Galaxy S23 Ultra',
    3,
    33990000,
    18700000,
    'Samsung Galaxy S23 Ultra.jpg',
    'Là một trong những flagship hàng đầu giới điện thoại Android. Vì thế không có gì đáng ngạc nhiên khi Galaxy S23 Ultra sở hữu hiệu năng mạnh mẽ từ bộ vi xử lý Snapdragon 8 Gen 2 được sản xuất trên tiến trình 4 nm hiện đại. Đây cũng là một trong những chiến lược hợp tác giữa Samsung và Qualcomm nhằm mang đến trải nghiệm hiệu năng mạnh mẽ cho người dùng khi sử dụng Galaxy S23 Series. Ngoài ra, Samsung S23 Ultra còn sở hữu dung lượng RAM khủng lên đến 12GB và bộ nhớ trong 512GB để người dùng thoải mái lưu trữ các tệp, hình ảnh, video,... dung lượng lớn với tốc độ lưu trữ cực nhanh và bảo mật tốt. Với viên pin 5000mAh và hỗ trợ sạc nhanh tối đa 45 W. Samsung S23 Ultra vẫn có thể trụ được liên tục trên 8 tiếng và chỉ cần chưa đến 1 giờ là sạc đầy, đáp ứng được nhu cầu sử dụng gần cả một ngày cho người dùng mà không lo bị gián đoạn công việc hay giải trí xem phim, lướt web, đọc báo, chơi game,...',
    ''
  ),
  (
    20,
    1,
    'Realme C55 6GB',
    49,
    4990000,
    4390000,
    'Realme C55 6GB.jpg',
    'Realme C55 6GB là một smartphone giá rẻ nhưng có cấu hình tốt của Realme. Với RAM 6GB, nó cung cấp khả năng xử lý nhanh chóng và mượt mà cho các ứng dụng và trò chơi. Máy tích hợp màn hình rộng và sắc nét, cho phép trải nghiệm xem phim và chơi game tốt hơn. Ngoài ra, Realme C55 6GB còn có camera chất lượng, pin dung lượng lớn và hỗ trợ kết nối 4G. Đây là một lựa chọn phù hợp cho những người dùng muốn sở hữu một chiếc điện thoại thông minh đáng giá với hiệu suất ổn định và tính năng đáng chú ý.',
    ''
  ),
  (
    21,
    1,
    'Vivo Y22s 4GB',
    53,
    5290000,
    4290000,
    'Vivo Y22s 4GB.jpg',
    'Vivo Y22s 4GB là một smartphone giá rẻ nhưng có cấu hình tốt của Vivo. Với RAM 4GB, nó cung cấp khả năng xử lý tốt cho các tác vụ hàng ngày. Máy tích hợp màn hình rộng và sắc nét, cho phép trải nghiệm xem phim và chơi game tốt hơn. Vivo Y22s 4GB còn có camera chất lượng, pin dung lượng lớn và hỗ trợ kết nối 4G. Đây là một lựa chọn phù hợp cho những người dùng muốn sở hữu một chiếc điện thoại thông minh đáng giá với hiệu suất ổn định và tính năng đáng chú ý.',
    ''
  ),
  (
    22,
    3,
    'Pin sạc dự phòng 10000mAh Type C PD QC3.0 20W Xmobile Y73 ',
    0,
    800000,
    640000,
    'Pin sac du phong 10000mAh Type C PD QC3.0 20W Xmobile Y73.jpg',
    'Pin sạc dự phòng Xmobile Y73 có dung lượng 10000mAh, hỗ trợ công nghệ sạc nhanh Type C PD (Power Delivery) và QC3.0 (Quick Charge 3.0) với công suất 20W. Với thiết kế nhỏ gọn và tiện lợi, bạn có thể dễ dàng mang theo pin sạc này trong túi xách hoặc túi quần để sử dụng trong các tình huống khẩn cấp hoặc khi di chuyển. Pin sạc Xmobile Y73 cung cấp khả năng sạc nhanh và hiệu quả cho các thiết bị di động như điện thoại, máy tính bảng, tai nghe không dây và nhiều thiết bị khác. Với công nghệ bảo vệ đa lớp, pin sạc này cung cấp sự an toàn và bảo vệ cho thiết bị của bạn khỏi quá nhiệt, quá dòng và ngắn mạch.',
    ''
  ),
  (
    23,
    3,
    'Tai nghe Bluetooth Chụp Tai JBL Tour One M2 ',
    60,
    6990000,
    6590000,
    'Tai nghe Bluetooth Chup Tai JBL Tour One M2.jpg',
    'Tai nghe Bluetooth chụp tai JBL Tour One M2 là một sản phẩm cao cấp với chất lượng âm thanh tuyệt vời. Với thiết kế chụp tai êm ái và đệm tai mềm mại, tai nghe này mang lại sự thoải mái và cách âm tốt. Với kết nối Bluetooth 5.0, bạn có thể kết nối tai nghe với các thiết bị di động một cách dễ dàng và ổn định. Tai nghe JBL Tour One M2 cung cấp âm thanh chi tiết, rõ ràng và mạnh mẽ, đồng thời hỗ trợ công nghệ khử tiếng ồn để tạo ra trải nghiệm nghe nhạc tuyệt vời. Ngoài ra, tai nghe này cũng có tích hợp công nghệ điều khiển cảm ứng trên nút tai nghe, cho phép bạn dễ dàng điều chỉnh âm lượng, chuyển bài và thực hiện cuộc gọi.',
    ''
  ),
  (
    24,
    3,
    'Loa Bluetooth Monster Adventurer FORCE ',
    30,
    3250000,
    1750000,
    'Loa Bluetooth Monster Adventurer FORCE.jpg',
    'Loa Bluetooth Monster Adventurer FORCE là một loa di động mạnh mẽ với thiết kế bền bỉ và chống nước. Với kết nối Bluetooth 5.0, bạn có thể kết nối loa với điện thoại di động hoặc máy tính bảng một cách dễ dàng và không dây. Loa này có khả năng phát nhạc lên đến 40 giờ liên tục, cho phép bạn thưởng thức âm nhạc suốt cả ngày mà không cần lo lắng về pin. Với công suất 40W và âm thanh 360 độ, loa Adventurer FORCE mang đến âm thanh rõ ràng, mạnh mẽ và sống động. Bên cạnh đó, loa cũng có khả năng chống nước và chống sốc, giúp nó trở thành một người bạn đồng hành tuyệt vời cho các hoạt động ngoài trời và cuộc phiêu lưu.',
    ''
  ),
  (
    25,
    3,
    'Logitech MX Master 3 ',
    60,
    2490000,
    2990000,
    'Logitech MX Master 3.png',
    'Logitech MX Master 3 là một chuột không dây cao cấp được thiết kế cho công việc sáng tạo và đa nhiệm. Với công nghệ cảm biến Darkfield, chuột này có khả năng hoạt động trên mọi bề mặt, bao gồm cả kính. Thiết kế ergonomics của MX Master 3 giúp giảm căng thẳng và mệt mỏi cho người dùng, đồng thời cung cấp sự thoải mái và kiểm soát chính xác. Nút cuộn tốc độ điều chỉnh tự động có thể cuộn nhanh hoặc chính xác, giúp bạn dễ dàng điều hướng và làm việc hiệu quả hơn. Chuột cũng được trang bị nút tùy chỉnh và tính năng đa nhiệm, cho phép bạn tùy chỉnh các lệnh và chức năng theo ý muốn. Kết nối Bluetooth hoặc USB-C, MX Master 3 tương thích với nhiều thiết bị và hệ điều hành.',
    ''
  ),
  (
    26,
    3,
    'Bàn Phím MacBook Pro 16 inch 2021 ( A2485 )',
    30,
    2800000,
    4200000,
    'Ban Phim MacBook Pro 16 inch 2021 ( A2485 ).jpg',
    'bàn phím MacBook Pro 16 inch 2021 (A2485) là một phụ kiện chính hãng của Apple, được thiết kế đặc biệt cho dòng laptop MacBook Pro 16 inch mới nhất. Bàn phím này có thiết kế mỏng nhẹ, với các phím được đặt cách nhau để giảm thiểu sai sót khi gõ phím. Bàn phím còn có đèn nền LED để giúp người dùng dễ dàng sử dụng trong điều kiện ánh sáng yếu. Bàn phím MacBook Pro 16 inch 2021 (A2485) cũng tích hợp Touch Bar, một thanh cảm ứng hiển thị các lệnh và chức năng tùy chỉnh, giúp người dùng có thể truy cập nhanh chóng vào các ứng dụng và chức năng trên máy tính.',
    '0'
  ),
  (
    27,
    3,
    'Bàn phím MonsGeek M1 QMK Black AKKO Switch v3 Cream Yellow Pro',
    40,
    2700000,
    3000000,
    'Ban phim MonsGeek M1 QMK Black AKKO Switch v3 Cream Yellow Pro.png',
    'Bàn phím MonsGeek M1 QMK Black AKKO Switch v3 Cream Yellow Pro là một sản phẩm bàn phím cơ chuyên nghiệp dành cho game thủ và những người yêu thích công nghệ. Bàn phím được trang bị các switch AKKO Switch v3 Cream Yellow Pro, đây là loại switch cơ học cao cấp, có độ nhạy cao và tuổi thọ lâu dài. Bàn phím có thiết kế đẹp mắt và sang trọng, với màu đen tối và các phím được đánh dấu rõ ràng. Bàn phím còn được tích hợp công nghệ QMK, cho phép người dùng tùy chỉnh các phím và chức năng theo ý muốn. Ngoài ra, bàn phím còn có đèn nền LED RGB, giúp tăng thêm tính thẩm mỹ và sự thu hút cho sản phẩm. Bàn phím MonsGeek M1 QMK Black AKKO Switch v3 Cream Yellow Pro là một sản phẩm tuyệt vời cho những ai đam mê game và công nghệ',
    '0'
  ),
  (
    28,
    3,
    'Chuột Microsoft Surface Precision Mouse',
    40,
    2500000,
    3000000,
    'Chuot Microsoft Surface Precision Mouse.jpg',
    'Chuột Microsoft Surface Precision Mouse là một sản phẩm chuột không dây cao cấp của Microsoft, được thiết kế đẹp mắt và chất liệu chắc chắn. Nó có công nghệ kết nối Bluetooth 4.0, cảm biến quang học cao cấp và các nút điều khiển đa chức năng. Chuột này cung cấp tính năng tùy chỉnh, pin sạc tích hợp và hỗ trợ sạc nhanh. Đây là một lựa chọn lý tưởng cho việc làm việc chuyên nghiệp và đòi hỏi sự chính xác',
    ''
  ),
  (
    29,
    3,
    'Củ sạc Samsung USB-C 25W 1 cổng',
    50,
    380000,
    490000,
    'Cu sac Samsung USB-C 25W 1 cong.png',
    'Củ sạc Samsung USB-C 25W 1 cổng là một sản phẩm sạc nhanh và tiện dụng của Samsung. Với công suất 25W, nó có thể sạc nhanh các thiết bị hỗ trợ USB-C như điện thoại di động, máy tính bảng và các thiết bị di động khác. Sản phẩm này có một cổng USB-C duy nhất, cho phép kết nối dễ dàng và nhanh chóng. Với thiết kế nhỏ gọn, củ sạc Samsung USB-C 25W 1 cổng là một phụ kiện hữu ích để mang theo khi di chuyển và sử dụng hàng ngày.',
    '0'
  ),
  (
    30,
    2,
    'MacBook Pro 14 inch 2023 M2 Max',
    20,
    81990000,
    71990000,
    'MacBook Pro 14 inch 2023 M2 Max.jpg',
    'MacBook Pro 14 inch 2023 M2 Max là một sản phẩm laptop cao cấp của Apple. Với màn hình 14 inch, nó cung cấp hiển thị sắc nét và đẹp mắt. Được trang bị vi xử lý M2 Max mới nhất của Apple, máy tính này đáp ứng mạnh mẽ cho các tác vụ đa nhiệm và xử lý đồ họa. Thiết kế mỏng nhẹ và sang trọng của MacBook Pro 14 inch tạo ra một trải nghiệm di động tuyệt vời. Ngoài ra, nó còn có các tính năng tiện ích như Touch Bar, Touch ID và bàn phím Magic Keyboard. MacBook Pro 14 inch 2023 M2 Max là một lựa chọn lý tưởng cho những người dùng đòi hỏi hiệu suất và chất lượng cao trong công việc và giải trí hàng ngày.',
    '1'
  ),
  (
    80,
    1,
    'Samsung Galaxy M14 5G 4GB 128GB',
    11,
    3999000,
    'Samsung Galaxy M14 5G 4GB 128GB vừa mắc vừa cùi. Mua Iphone đi bạn ơi',
    '1696702853_Samsung Galaxy M14 5G 4GB 18GB.png',
    '20',
    '1'
  ),
  (
    82,
    1,
    'iPad 10.2 2021 WiFi 64GB | Chính hãng Apple Việt Nam',
    4,
    6999000,
    'iPad 10.2 2021 WiFi 64GB | Chính hãng Apple Việt Nam đẳng cấp thì đẳng cấp thật nhưng có tiền mua này sao không mua Iphone.',
    '1696703010_iPad 10.2 2021 WiFi 64GB.png',
    '19',
    '1'
  ),
  (
    83,
    2,
    'Laptop Asus VivoBook Go 14 E1404FA-NK177W',
    13,
    12490000,
    'Laptop Asus VivoBook Go 14 E1404FA-NK177W máy này chơi game thì nhức nách. Không nói nhiều mua là biết.',
    '1696703137_Laptop Asus VivoBook Go 14 E1404FA-NK177W.png',
    '99',
    '1'
  ),
  (
    84,
    1,
    'Xiaomi 13T Pro 5G (12GB - 512GB)',
    10,
    15999000,
    'Xiaomi 13T Pro 5G (12GB - 512GB) đẳng cấp chơi game nhức nách, Iphone có tuổi mà tuổi ...',
    '1696703271_Xiaomi 13T Pro 5G (12GB - 512GB).png',
    '69',
    '1'
  );
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (
    `shipid`,
    `khach`,
    `sodt`,
    `diachi`,
    `note`,
    `dangkyid`
  )
VALUES (
    28,
    'Khánh Đẹp Trai Mà',
    '13122004',
    'Vô Gia Cư',
    'Chú Ý Cái ....',
    22
  ),
  (29, 'yasuo', '123', '123', '', 23);
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Dumping data for table `thongke`
--

INSERT INTO `thongke` (
    `thongkeid`,
    `ngaydat`,
    `donhang`,
    `doanhthu`,
    `soluongban`
  )
VALUES (14, '2023-10-16', 2, '22998000', 1),
  (15, '2023-10-21', 4, '197850000', 2),
  (16, '2023-10-27', 8, '91764000', 9);
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
-- Dumping data for table `user`
--

INSERT INTO `user` (
    `userid`,
    `fullname`,
    `email`,
    `phonenumber`,
    `address`,
    `password`
  )
VALUES (
    22,
    'Khánh Đẹp Trai Mà',
    'k@gmail.com',
    '13122004',
    'Vô Gia Cư',
    'cfcd208495d565ef66e7dff9f98764da'
  ),
  (
    23,
    'yasuo',
    'dangyasuo111@gmail.com',
    '123',
    '123',
    '202cb962ac59075b964b07152d234b70'
  );
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
MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 28;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 174;
--
-- AUTO_INCREMENT for table `ordersdetail`
--
ALTER TABLE `ordersdetail`
MODIFY `orderdtid` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 136;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 87;
--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
MODIFY `shipid` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 30;
--
-- AUTO_INCREMENT for table `thongke`
--
ALTER TABLE `thongke`
MODIFY `thongkeid` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 24;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;