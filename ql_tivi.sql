-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2018 at 02:36 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ql_tivi`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` int(11) DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `email`, `diachi`, `sdt`, `password`, `remember_token`, `create_at`, `update_at`) VALUES
(4, 'Tran Tung', 'tranquytung96@gmail.com', 'Cầu Giấy', 973951802, '$2y$10$uABAj88b4wqca0WBFi8Oje4aDRYfCS5WKmRVurSjlIPAfM5vAOmOK', NULL, '2018-06-07 16:06:35', '2018-06-07 16:06:35'),
(5, 'Test', 'test@gmail.com', NULL, NULL, '$2y$10$WycR6IaTaR4oID7x4jL8NuOODpf0trD6L4nZR2f.H5Vpv6qO0dzhq', NULL, '2018-06-08 12:46:15', '2018-06-08 12:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chitiethd`
--

CREATE TABLE `tbl_chitiethd` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_chitiethd`
--

INSERT INTO `tbl_chitiethd` (`id`, `id_sp`, `id_donhang`, `number`, `gia`) VALUES
(2, 4, 2, 1, 9775000),
(3, 4, 3, 1, 9775000),
(4, 3, 4, 1, 12150000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) DEFAULT '0',
  `slug` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id`, `name`, `active`, `slug`, `created_at`) VALUES
(6, 'Sản Xuất Trong Nước', 1, 'san-xuat-trong-nuoc', '2018-07-10 06:45:16'),
(7, 'Sản Xuất Ngoài Nước', 1, 'san-xuat-ngoai-nuoc', '2018-07-10 06:45:42'),
(8, 'Kết nối bàn phím và chuột', 1, 'ket-noi-ban-phim-va-chuot', '2018-07-10 06:46:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc_sp`
--

CREATE TABLE `tbl_danhmuc_sp` (
  `id` int(11) NOT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_danhmuc_sp`
--

INSERT INTO `tbl_danhmuc_sp` (`id`, `danhmuc_id`, `sp_id`) VALUES
(3, 6, 3),
(4, 7, 3),
(5, 7, 4),
(6, 8, 4),
(7, 6, 5),
(8, 7, 6),
(9, 8, 7),
(10, 6, 8),
(11, 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci,
  `status` tinyint(4) DEFAULT '0',
  `khanhhang_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`id`, `username`, `email`, `sdt`, `diachi`, `noidung`, `status`, `khanhhang_id`) VALUES
(2, 'User', 'user@gmail.com', 973951802, 'Cầu Giấy - Hà Nội', NULL, 1, NULL),
(3, 'User', 'user@gmail.com', 973951802, 'Cầu Giấy - Hà Nội', NULL, 1, NULL),
(4, 'User', 'user@gmail.com', 973951802, 'Cầu Giấy - Hà Nội', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dophangiai`
--

CREATE TABLE `tbl_dophangiai` (
  `id` int(11) NOT NULL,
  `dophangiai` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_dophangiai`
--

INSERT INTO `tbl_dophangiai` (`id`, `dophangiai`) VALUES
(5, '1080 Full HD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hang`
--

CREATE TABLE `tbl_hang` (
  `id` int(11) NOT NULL,
  `tenhang` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_hang`
--

INSERT INTO `tbl_hang` (`id`, `tenhang`, `hinhanh`) VALUES
(53, 'Samsung', 'Samsung1.png'),
(54, 'panasonic', 'Panasonic1.png'),
(55, 'Toshiba', 'Toshiba1942-s_53.png'),
(56, 'skyworth', 'Skyworth1942-s_53.png'),
(57, 'sony', 'Sony1.png'),
(58, 'LQ', 'lg.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khanhhang`
--

CREATE TABLE `tbl_khanhhang` (
  `id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) DEFAULT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_khanhhang`
--

INSERT INTO `tbl_khanhhang` (`id`, `username`, `email`, `password`, `sdt`, `diachi`, `create_at`, `update_at`) VALUES
(3, 'User', 'user@gmail.com', '$2y$10$LNa2OX2hVnwJAJ5rUUYVYOlVTa3y2sdiK5iw61lFclB1Hhn0t4ocS', 973951802, 'Cầu Giấy - Hà Nội', '2018-07-10 07:04:19', '2018-07-10 07:04:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ktmh`
--

CREATE TABLE `tbl_ktmh` (
  `id` int(11) NOT NULL,
  `kichthuoc` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_ktmh`
--

INSERT INTO `tbl_ktmh` (`id`, `kichthuoc`) VALUES
(7, '42'),
(8, '55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loaitivi`
--

CREATE TABLE `tbl_loaitivi` (
  `id` int(11) NOT NULL,
  `loaitivi` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_loaitivi`
--

INSERT INTO `tbl_loaitivi` (`id`, `loaitivi`) VALUES
(16, 'Internet TV'),
(17, 'TV 4K HDR'),
(18, 'TV 3D'),
(19, 'Smart tv');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sp` int(11) NOT NULL,
  `TenSP` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gia` int(11) NOT NULL,
  `sale` tinyint(4) DEFAULT '0',
  `anh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `KTMH_id` int(11) DEFAULT NULL,
  `LoaiTivi_id` int(11) DEFAULT NULL,
  `Hang_id` int(11) DEFAULT NULL,
  `Dophangiai_id` int(11) DEFAULT NULL,
  `soluong` int(11) NOT NULL DEFAULT '0',
  `noidung` text COLLATE utf8_unicode_ci,
  `pay` int(11) DEFAULT '0',
  `new` tinyint(4) DEFAULT '0',
  `active` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `upadated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sp`, `TenSP`, `slug`, `Gia`, `sale`, `anh`, `KTMH_id`, `LoaiTivi_id`, `Hang_id`, `Dophangiai_id`, `soluong`, `noidung`, `pay`, `new`, `active`, `created_at`, `upadated_at`) VALUES
(3, 'Tivi Sony W800F', 'tivi-sony-w800f', 13500000, 10, 'thumb_android-tivi-sony-43-inch-43w800f-hdr-mxr-200hz-0055x8.png', 7, 19, 57, 5, 100, NULL, 0, 1, 1, '2018-07-11 13:30:45', '2018-07-11 13:30:45'),
(4, 'Tivi Sony W660F', 'tivi-sony-w660f', 11500000, 15, 'smart-tivi-sony-43-inch-43w660f-hdr-mxr-200hz-Oza1Q5.png', 7, 16, 53, 5, 100, '<h3>Thông tin: Smart Tivi Sony 43 inch 43W660F, HDR, MXR 200Hz</h3>\r\n\r\n<div class=\"pd-news-content\">\r\n<h4 style=\"text-align:justify\"><strong>Rõ nét hơn, chi tiết hơn với Full HD</strong></h4>\r\n\r\n<p style=\"text-align:justify\"><strong>Smart Tivi Sony 43W660F&nbsp;43 inch</strong> được trang bị&nbsp;màn hình Full HD 1080p. Với độ phân giải 1920 x 1080 pixel, màn hình Full HD mang đến hình ảnh chi tiết hơn gấp 5 lần so với hình ảnh độ nét tiêu chuẩn. Mọi nội dung bạn xem sẽ sắc nét, rõ ràng và chân thực hơn với độ nhiễu tối thiểu và hiệu ứng tối đa.</p>\r\n</div>\r\n\r\n<h4 style=\"text-align:justify\"><strong>Khám phá lại từng chi tiết hình ảnh với công nghệ X-Reality&trade; PRO</strong></h4>\r\n\r\n<p style=\"text-align:justify\">Công nghệ xử lý hình ảnh X-Reality PRO trên <strong>Smart Tivi Sony 43W660F&nbsp;</strong>sẽ nâng cấp từng điểm ảnh để mang đến độ rõ nét vượt trội xứng tầm Full HD. Trong khi phân tích các khung hình, mỗi cảnh sẽ được đối chiếu với cơ sở dữ liệu hình ảnh đặc biệt của chúng tôi để tinh chỉnh hình ảnh và giảm nhiễu. Xem cấu trúc của tòa nhà đã được tăng cường chi tiết như thế nào.</p>\r\n\r\n<p>&nbsp;</p>', 0, 1, 1, '2018-07-11 13:59:31', '2018-07-11 13:59:31'),
(5, 'LE380X', 'le380x', 123457890, 10, '-0m2lRs.png', 7, 16, 53, 5, 19, '<p>hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii</p>', 0, 1, 1, '2018-07-11 16:23:55', '2018-07-11 16:23:55'),
(6, 'LE380X', 'le380x', 120000, 10, '-0m2lRs.png', 7, 16, 53, 5, 100, '<p>hi</p>', 0, 1, 1, '2018-07-11 23:53:18', '2018-07-11 23:53:18'),
(7, 'LE380X', 'le380x', 1200000, 20, 'hi.png', 7, 16, 53, 5, 200, '<h3>Thông tin: Internet Tivi Sony 43 inch 43W750E Full HD, MXR 200Hz</h3>\r\n\r\n<p><strong>W75E - Khai mở thế giới màu sắc tự nhiên</strong></p>', 0, 1, 1, '2018-07-11 23:56:26', '2018-07-11 23:56:26'),
(8, 'LE380X', 'le380x', 1200000000, 20, 'tvi1.png', 7, 16, 53, 5, 1000, '<h3>Thông tin: Internet Tivi Sony 43 inch 43W750E Full HD, MXR 200Hz</h3>\r\n\r\n<p><strong>W75E - Khai mở thế giới màu sắc tự nhiên</strong></p>', 0, 1, 1, '2018-07-12 00:01:13', '2018-07-12 00:01:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_chitiethd`
--
ALTER TABLE `tbl_chitiethd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_donhang` (`id_donhang`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_danhmuc_sp`
--
ALTER TABLE `tbl_danhmuc_sp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhmuc_id` (`danhmuc_id`),
  ADD KEY `sp_id` (`sp_id`);

--
-- Indexes for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `khanhhang_id` (`khanhhang_id`);

--
-- Indexes for table `tbl_dophangiai`
--
ALTER TABLE `tbl_dophangiai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hang`
--
ALTER TABLE `tbl_hang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_khanhhang`
--
ALTER TABLE `tbl_khanhhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ktmh`
--
ALTER TABLE `tbl_ktmh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_loaitivi`
--
ALTER TABLE `tbl_loaitivi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `KTMH_id` (`KTMH_id`),
  ADD KEY `Hang_id` (`Hang_id`),
  ADD KEY `Dophangiai_id` (`Dophangiai_id`),
  ADD KEY `LoaiTivi_id` (`LoaiTivi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_chitiethd`
--
ALTER TABLE `tbl_chitiethd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_danhmuc_sp`
--
ALTER TABLE `tbl_danhmuc_sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_dophangiai`
--
ALTER TABLE `tbl_dophangiai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_hang`
--
ALTER TABLE `tbl_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tbl_khanhhang`
--
ALTER TABLE `tbl_khanhhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_ktmh`
--
ALTER TABLE `tbl_ktmh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_loaitivi`
--
ALTER TABLE `tbl_loaitivi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_chitiethd`
--
ALTER TABLE `tbl_chitiethd`
  ADD CONSTRAINT `tbl_chitiethd_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `tbl_sanpham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_chitiethd_ibfk_2` FOREIGN KEY (`id_donhang`) REFERENCES `tbl_donhang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_danhmuc_sp`
--
ALTER TABLE `tbl_danhmuc_sp`
  ADD CONSTRAINT `tbl_danhmuc_sp_ibfk_1` FOREIGN KEY (`sp_id`) REFERENCES `tbl_sanpham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_danhmuc_sp_ibfk_2` FOREIGN KEY (`danhmuc_id`) REFERENCES `tbl_danhmuc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD CONSTRAINT `tbl_donhang_ibfk_1` FOREIGN KEY (`khanhhang_id`) REFERENCES `tbl_khanhhang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`Hang_id`) REFERENCES `tbl_hang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_sanpham_ibfk_2` FOREIGN KEY (`Dophangiai_id`) REFERENCES `tbl_dophangiai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_sanpham_ibfk_3` FOREIGN KEY (`LoaiTivi_id`) REFERENCES `tbl_loaitivi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_sanpham_ibfk_4` FOREIGN KEY (`KTMH_id`) REFERENCES `tbl_ktmh` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
