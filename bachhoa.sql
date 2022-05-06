-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 06:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bachhoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_acc` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_birthday` date NOT NULL,
  `admin_address` varchar(255) NOT NULL,
  `admin_postion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_acc`, `admin_pass`, `admin_name`, `admin_birthday`, `admin_address`, `admin_postion`) VALUES
(4, 'trongqui', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Trọng Quí', '2000-01-27', 'Bến Tre', 'Chủ cửa hàng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bran`
--

CREATE TABLE `tbl_bran` (
  `bran_id` int(11) NOT NULL,
  `cartegory_id` int(11) NOT NULL,
  `bran_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_bran`
--

INSERT INTO `tbl_bran` (`bran_id`, `cartegory_id`, `bran_name`) VALUES
(4, 20, 'Bánh mặn'),
(5, 20, 'Bánh Ngọt'),
(6, 21, 'Kẹo Sửa'),
(7, 22, 'Vinamilk'),
(12, 24, 'Trái Cây Việt'),
(13, 24, 'Trái Cây Nhập Khẩu'),
(14, 24, 'Trái Cây Sấy'),
(15, 23, 'Rau Hữu Cơ'),
(16, 0, 'Rau Thơm'),
(17, 23, 'Rau Thơm'),
(18, 23, 'Rau Ăn Sống'),
(19, 23, 'Rau Ăn Lẩu'),
(20, 26, 'Nấm Thiên Nhiên'),
(21, 26, 'Nấm Nuôi Trồng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_count` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double NOT NULL,
  `product_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `product_id`, `product_count`, `product_name`, `product_price`, `product_img`) VALUES
(16, 5, 1, 'DÂU TÂY ĐÀ LẠT - 250g', 40000, 'sp1.jpg'),
(17, 6, 1, 'NHO XANH BÌNH THUẬN - 250g', 25000, 'sp2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cartegory`
--

CREATE TABLE `tbl_cartegory` (
  `cartegory_id` int(11) NOT NULL,
  `cartegory_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cartegory`
--

INSERT INTO `tbl_cartegory` (`cartegory_id`, `cartegory_name`) VALUES
(23, 'Rau'),
(24, 'Trái cây'),
(25, 'Củ'),
(26, 'Nấm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name_user` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_highlight`
--

CREATE TABLE `tbl_highlight` (
  `highlight_id` int(11) NOT NULL,
  `highlight_img` varchar(255) NOT NULL,
  `highlight_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_highlight`
--

INSERT INTO `tbl_highlight` (`highlight_id`, `highlight_img`, `highlight_active`) VALUES
(1, 'c7.jpg', 1),
(2, 'c4.jpg', 1),
(3, 'c5.jpg', 1),
(4, 'c6.jpg', 1),
(5, 'c9.jpg', 1),
(6, 'c10.jpg', 1),
(7, 'c8.jpg', 1),
(8, 'c11.jpg', 1),
(9, 'c12,jpg.webp', 1),
(10, 'c3.jpg', 1),
(11, 'c13.jpg', 0),
(12, 'c14.jpg', 0),
(13, 'c20.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `cartegory_id` int(11) NOT NULL,
  `bran_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double NOT NULL,
  `product_slump` double NOT NULL,
  `product_date` date NOT NULL,
  `product_desc` text NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_imga` varchar(255) NOT NULL,
  `product_imgb` varchar(255) NOT NULL,
  `product_imgc` varchar(255) NOT NULL,
  `product_imgd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `cartegory_id`, `bran_id`, `product_name`, `product_price`, `product_slump`, `product_date`, `product_desc`, `product_img`, `product_imga`, `product_imgb`, `product_imgc`, `product_imgd`) VALUES
(5, 24, 10, 'DÂU TÂY ĐÀ LẠT - 250g', 40000, 10, '2022-07-31', 'Thơm ngon', 'sp1.jpg', 'sp1.jpg', 'sp1.jpg', 'sp1.jpg', 'sp1.jpg'),
(6, 24, 10, 'NHO XANH BÌNH THUẬN - 250g', 25000, 10, '2022-07-27', 'Ngon', 'sp2.jpg', 'sp2.jpg', 'sp2.jpg', 'sp2.jpg', 'sp2.jpg'),
(7, 24, 10, 'NHO ĐỎ NINH THUẬN - 300G', 50000, 10, '2022-01-02', 'Ngon', 'sp3.jpg', 'sp3.jpg', 'sp3.jpg', 'sp3.jpg', 'sp3.jpg'),
(8, 24, 11, 'Sầu riêng ', 150000, 10, '2022-01-02', 'Ngon', 'sp4.jpg', 'sp4.jpg', 'sp4.jpg', 'sp4.jpg', 'sp4.jpg'),
(9, 24, 11, 'MÍT THÁI BẾN TRE - 500g', 30000, 9, '2022-01-02', 'Ngon', 'sp5.jpg', 'sp5.jpg', 'sp5.jpg', 'sp5.jpg', 'sp5.jpg'),
(10, 24, 11, 'Măn cụt', 150000, 9, '2022-01-02', 'Ngon', 'sp6.jpg', 'sp6.jpg', 'sp6.jpg', 'sp6.jpg', 'sp6.jpg'),
(11, 24, 10, 'CHÔM CHÔM CHỢ LÁCH - 550g', 25000, 9, '2022-01-01', 'tươi', 'sp7.jpg', 'sp7.jpg', 'sp7.jpg', 'sp7.jpg', 'sp7.jpg'),
(12, 24, 10, 'MẬN CÁI MƠN - 500g', 30000, 10, '2022-01-02', 'Ngon', 'sp8.jpg', 'sp8.jpg', 'sp8.jpg', 'sp8.jpg', 'sp8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_img` varchar(255) NOT NULL,
  `slider_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_img`, `slider_active`) VALUES
(1, 'a8.jpg', 0),
(2, 'a7.jpg', 0),
(3, 'a6.jpg', 0),
(4, 'a5.jpg', 0),
(5, 'a4.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_bran`
--
ALTER TABLE `tbl_bran`
  ADD PRIMARY KEY (`bran_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_cartegory`
--
ALTER TABLE `tbl_cartegory`
  ADD PRIMARY KEY (`cartegory_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_highlight`
--
ALTER TABLE `tbl_highlight`
  ADD PRIMARY KEY (`highlight_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_bran`
--
ALTER TABLE `tbl_bran`
  MODIFY `bran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_cartegory`
--
ALTER TABLE `tbl_cartegory`
  MODIFY `cartegory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_highlight`
--
ALTER TABLE `tbl_highlight`
  MODIFY `highlight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
