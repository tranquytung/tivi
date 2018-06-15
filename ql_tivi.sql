-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2018 at 01:11 PM
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
-- Table structure for table `tbl_anh`
--

CREATE TABLE `tbl_anh` (
  `id` int(11) NOT NULL,
  `anh` text COLLATE utf8_unicode_ci NOT NULL,
  `id_sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_anh`
--

INSERT INTO `tbl_anh` (`id`, `anh`, `id_sp`) VALUES
(20, '-0m2lRs.png', 32);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chitiethd`
--

CREATE TABLE `tbl_chitiethd` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(2, 'Sản Xuất Trong Nước', 1, 'san-xuat-trong-nuoc', '2018-04-23 13:54:00'),
(4, 'Sản Xuất Ngoài Nước', 1, 'san-xuat-ngoai-nuoc', '2018-04-24 07:09:01'),
(5, 'Kết nối bàn phím và chuột', 1, 'ket-noi-ban-phim-va-chuot', '2018-06-06 15:29:24');

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
(8, 4, 32),
(9, 5, 32),
(10, 4, 33);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaydat` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci,
  `tongtien` int(11) NOT NULL,
  `khanhhang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(2, '1080 Full HD'),
(3, '4K Ultra HD'),
(4, '720 HD 1');

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
(32, 'sony', 'Sony1.png'),
(44, 'Panasonic', 'Panasonic1.png'),
(46, 'Asanzo', 'Asanzo1.png'),
(48, 'Samsung', 'Samsung1.png'),
(51, 'LG', 'lg.png'),
(52, 'TCL', 'tcl.png');

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
(1, 'Trần Tùng 12', 'tranquytung96@gmail.com', '$2y$10$mrgOqTnamHr2jW/U8vCP4ecvitYG71AgTYCgL9oma85Fn4ZxFosDa', 973951802, 'Cầu Giấy', '2018-06-15 09:23:36', '2018-06-15 09:23:36');

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
(1, '42'),
(2, '32'),
(3, '43'),
(4, '49'),
(5, '55'),
(6, '65');

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
(5, 'TV 4K HDR'),
(7, 'TV 4K'),
(8, 'Smart TV'),
(9, 'Internet TV'),
(10, 'OLED TV');

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
(32, 'Tivi LG UJ632T', 'tivi-lg-uj632t', 12000000, 0, '-0m2lRs.png', NULL, 5, 32, 2, 100, '<p>hi</p>', 10, 0, 1, '2018-06-15 01:25:07', '2018-06-15 02:03:37'),
(33, 'Tivi Sony W800F', 'tivi-sony-w800f', 12000000, 40, '-0m2lRs.png', 1, 5, 32, 2, 10000, '<p>u9</p>', 11, 1, 1, '2018-06-15 01:31:19', '2018-06-15 02:02:21');

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
-- Indexes for table `tbl_anh`
--
ALTER TABLE `tbl_anh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sp` (`id_sp`);

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
-- AUTO_INCREMENT for table `tbl_anh`
--
ALTER TABLE `tbl_anh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_chitiethd`
--
ALTER TABLE `tbl_chitiethd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_danhmuc_sp`
--
ALTER TABLE `tbl_danhmuc_sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_dophangiai`
--
ALTER TABLE `tbl_dophangiai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_hang`
--
ALTER TABLE `tbl_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_khanhhang`
--
ALTER TABLE `tbl_khanhhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_ktmh`
--
ALTER TABLE `tbl_ktmh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_loaitivi`
--
ALTER TABLE `tbl_loaitivi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_anh`
--
ALTER TABLE `tbl_anh`
  ADD CONSTRAINT `tbl_anh_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `tbl_sanpham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_chitiethd`
--
ALTER TABLE `tbl_chitiethd`
  ADD CONSTRAINT `tbl_chitiethd_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `tbl_sanpham` (`id_sp`),
  ADD CONSTRAINT `tbl_chitiethd_ibfk_2` FOREIGN KEY (`id_donhang`) REFERENCES `tbl_donhang` (`id`);

--
-- Constraints for table `tbl_danhmuc_sp`
--
ALTER TABLE `tbl_danhmuc_sp`
  ADD CONSTRAINT `tbl_danhmuc_sp_ibfk_1` FOREIGN KEY (`danhmuc_id`) REFERENCES `tbl_danhmuc` (`id`),
  ADD CONSTRAINT `tbl_danhmuc_sp_ibfk_2` FOREIGN KEY (`sp_id`) REFERENCES `tbl_sanpham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD CONSTRAINT `tbl_donhang_ibfk_1` FOREIGN KEY (`khanhhang_id`) REFERENCES `tbl_khanhhang` (`id`);

--
-- Constraints for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`KTMH_id`) REFERENCES `tbl_ktmh` (`id`),
  ADD CONSTRAINT `tbl_sanpham_ibfk_2` FOREIGN KEY (`Hang_id`) REFERENCES `tbl_hang` (`id`),
  ADD CONSTRAINT `tbl_sanpham_ibfk_3` FOREIGN KEY (`Dophangiai_id`) REFERENCES `tbl_dophangiai` (`id`),
  ADD CONSTRAINT `tbl_sanpham_ibfk_4` FOREIGN KEY (`LoaiTivi_id`) REFERENCES `tbl_loaitivi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
