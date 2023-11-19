-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 07:58 AM
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
-- Database: `ban_hang`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `ten_nguoi_mua` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `dia_chi` mediumtext NOT NULL,
  `dien_thoai` varchar(256) NOT NULL,
  `noi_dung` mediumtext NOT NULL,
  `hang_duoc_mua` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `ten_nguoi_mua`, `email`, `dia_chi`, `dien_thoai`, `noi_dung`, `hang_duoc_mua`) VALUES
(2, 'Phan anh vui', 'vui@gmail.com', '435 âu cơ, hòa khánh bắc, quận liên chiểu,đà nẵng.', '0905692314', 'Mua áo len cardigan tron', '58[|||]0[|||||]60[|||]1[|||||]'),
(3, 'gfxzh', 'quangtxph40150@fpt.edu.vn', 'qewf', '325342645', '', '50[|||]1[|||||]');

-- --------------------------------------------------------

--
-- Table structure for table `menu_doc`
--

CREATE TABLE `menu_doc` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_doc`
--

INSERT INTO `menu_doc` (`id`, `ten`) VALUES
(1, 'Màn Hình'),
(2, 'CPU'),
(3, 'Ổ Cứng'),
(4, 'Nguồn Máy Tính'),
(5, 'Tản Nhiệt'),
(6, 'RAM');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) NOT NULL,
  `gia` int(255) NOT NULL,
  `hinh_anh` varchar(256) NOT NULL,
  `noi_dung` mediumtext NOT NULL,
  `thuoc_menu` int(255) NOT NULL,
  `noi_bat` varchar(256) NOT NULL,
  `trang_chu` varchar(256) NOT NULL,
  `sap_xep_trang_chu` int(255) NOT NULL,
  `menu_doc_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten`, `gia`, `hinh_anh`, `noi_dung`, `thuoc_menu`, `noi_bat`, `trang_chu`, `sap_xep_trang_chu`, `menu_doc_id`) VALUES
(47, 'màn hình LG amoled', 750000, 'anh1.png', '<br>Chiếc màn hình thế hệ mới của LG – UltraGear 24GQ50F-B hội tụ <br>những tính năng hàng đầu để đem lại trải nghiệm gaming hoàn hảo nhất cho người dùng.<br> Không chỉ có tần số quét 165Hz siêu mượt, sản phẩm còn đem đến tốc độ phản hồi<br> 1ms, công nghệ AMD FreeSync và thiết kế viền bao quanh siêu mỏng.', 1, 'co', 'co', 5, 2),
(48, 'Màn hình Samsung', 45000000, 'anh2.png', '<br>Chìm đắm trong không gian hiển thị tuyệt vời của màn hình cong Samsung <br>LS24c360EAEXXV, bạn sẽ thỏa thích tận hưởng những khung hình trọn vẹn và sống<br> động. Góc nhìn tràn về hai phía như bao bọc toàn bộ tầm nhìn của bạn, kết hợp với<br> loạt công nghệ hiện đại như tần số quét 75Hz, Eye Saver,<br> Eco Saving sẽ đem lại trải nghiệm trọn vẹn mọi khía cạnh.\r\n\r\n', 1, '', 'co', 1, 1),
(49, 'Màn hình ASUS ', 2900000, 'anh3.png', 'Là sản phẩm hội tụ hàng loạt công nghệ hiển thị hiện đại, màn hình Asus VA27EHE 27 inch<br> sẽ đáp ứng tốt mọi nhu cầu của bạn, từ làm việc cho đến chơi game giải trí. <br>Tấm nền IPS LCD 27 inch siêu rộng với tần số quét 75Hz và khả năng hạn chế xé hình nhờ Adapter-Sync<br> là những điểm cộng xứng đáng để bạn cân nhắc ở chiếc màn hình nà', 1, '', 'co', 7, 1),
(50, 'Màn hình LG IPS', 12000000, 'anh4.png\r\n', 'Chiếc màn hình thế hệ mới của LG – UltraGear 24GQ50F-B hội tụ những tính năng<br> hàng đầu để đem lại trải nghiệm gaming hoàn hảo nhất cho người dùng. <br>Không chỉ có tần số quét 165Hz siêu mượt, sản phẩm còn đem đến tốc độ phản hồi<br> 1ms, công nghệ AMD FreeSync và thiết kế viền bao quanh siêu mỏng', 1, 'co', '', 8, 4),
(51, 'CPU Intel Core i3-10100F + Quạt', 6800000, 'anh6.png', '', 2, 'co', '', 1, 5),
(52, 'CPU Intel Core i3-10105F + Quạt', 7200000, 'anh7.png', '', 2, 'co', 'co', 1, 1),
(53, 'CPU Intel Core i3 - 10105', 5500000, 'anh8.png', '', 2, '', '', 1, 1),
(54, 'Ổ cứng WD SSD 240GB Sata3 Green', 550000, 'anh9.png', '', 3, '', 'co', 1, 1),
(56, 'SSD WD 480 GB M.2 NVMe ', 1500002, 'anh10.png', '', 3, '', 'co', 1, 1),
(57, 'Ổ Cứng SSD Kingston 500 GB ', 899000, 'anh11.png', '', 3, '', 'co', 1, 1),
(58, 'Ổ Cứng Gigabyte GP', 890000, 'anh12.png', '', 3, '', 'co', 1, 1),
(59, '\r\nNguồn máy tính Cooler Master MWE white 230V 700W', 1200000, 'anh14.png', '', 4, 'co', '', 1, 1),
(60, 'Nguồn máy tính Corsair CV550', 990000, 'anh15.png', '', 4, '', 'co', 1, 1),
(61, 'Nguồn máy tính Corsair CX550', 1340000, 'anh16.png', '', 4, 'co', '', 1, 1),
(63, '\r\nNguồn máy tính Corsair CX750M', 2900000, 'anh17.png', '', 4, 'co', '', 1, 1),
(64, 'Tản nhiệt nước AIO Asus ROG STRIX LC II 360 ARGB', 4900000, 'anh18.png', '', 5, 'co', '', 1, 1),
(65, 'Quạt tản nhiệt LED Xigmatek STARZ X20A Arctic ( White ARGB x3)', 4700000, 'anh19.png', '', 5, 'co', '', 1, 1),
(66, 'Tản nhiệt khí Xigmatek AIR KILLER S ARCTIC', 12000000, 'anh20.png', '', 5, 'co', '', 1, 1),
(67, 'Tản nhiệt khí Xigmatek AIR KILLER S', 390000, 'anh21.png', '', 5, 'co', '', 1, 1),
(68, 'RAM Kingston Fury 8 GB-DDR4-2666 MHz (KF426C16BB/8)', 1200000, 'anh22.png', '', 6, 'co', '', 1, 1),
(69, 'RAM CORSAIR Vengeance RGB RS 8 GB-DDR4-3200 MHz (CMG8GX4M1E3200C16)', 939000, 'anh24.png', '', 6, 'co', '', 1, 1),
(70, 'RAM CORSAIR Vengeance RGB RS 16 GB-DDR4-3200 MHz (CMG16GX4M1E3200C16)', 900000, 'anh23.png', '', 6, 'co', '', 1, 1),
(71, 'RAM G.SKILL Trident 16G (8Gx2) F4-3000C16D-16GTZR', 1590000, 'anh25.png', '', 6, 'co', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `hinh` varchar(256) NOT NULL,
  `lien_ket` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `hinh`, `lien_ket`) VALUES
(1, 'anh1.png', '#'),
(2, 'anh2.png', '#'),
(3, 'anh3.png', '#'),
(4, 'anh4.png', '#');

-- --------------------------------------------------------

--
-- Table structure for table `thong_tin_quan_tri`
--

CREATE TABLE `thong_tin_quan_tri` (
  `id` int(11) NOT NULL,
  `ky_danh` varchar(256) NOT NULL,
  `mat_khau` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thong_tin_quan_tri`
--

INSERT INTO `thong_tin_quan_tri` (`id`, `ky_danh`, `mat_khau`) VALUES
(1, 'admin', 'd9b1d7db4cd6e70935368a1efb10e377');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tennsd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `tennsd`, `email`) VALUES
(1, 'admin', '123', 'Quan Tri Vien', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_doc`
--
ALTER TABLE `menu_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thong_tin_quan_tri`
--
ALTER TABLE `thong_tin_quan_tri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu_doc`
--
ALTER TABLE `menu_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thong_tin_quan_tri`
--
ALTER TABLE `thong_tin_quan_tri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
