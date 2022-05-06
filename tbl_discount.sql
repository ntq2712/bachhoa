-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 05:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

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
-- Table structure for table `tbl_discount`
--

CREATE TABLE `tbl_discount` (
  `discount_id` int(11) NOT NULL,
  `discount_name` varchar(255) NOT NULL,
  `discount_price` double NOT NULL,
  `discount_slump` double NOT NULL,
  `discount_date` date NOT NULL,
  `discount_img` varchar(255) NOT NULL,
  `discount_active` int(11) NOT NULL,
  `discount_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_discount`
--

INSERT INTO `tbl_discount` (`discount_id`, `discount_name`, `discount_price`, `discount_slump`, `discount_date`, `discount_img`, `discount_active`, `discount_desc`) VALUES
(2, 'Xà Lách Lô Lô Xanh - 250g', 35000, 30000, '2022-05-30', 'xalach.jpg', 1, 'Để bảo quản được lâu, bạn rửa sạch, để ráo nước, sau đó cho vào túi nilong và lưu trữ trong tủ lạnh ở nhiệt độ 5-12°C. '),
(3, 'Rau Tía Tô - 50g', 13000, 9000, '2022-05-30', 'tiato.jpg', 1, 'Lá mọc đối, mép khía răng, mặt dưới tím tía, có khi hai mặt đều tía, nâu hay màu xanh lục có lông nhám'),
(4, 'Bắp Cải Trắng - 700g', 59000, 49000, '2022-05-30', 'bapcaitrang.jpg', 1, 'Bắp cải luộc thơm ngọt vị gừng, bắp cải xào cà chua thanh mát, dưa bắp cải muối giòn rụm, chấm cùng nước mắm cay thật ngon miệng. '),
(5, 'Cà Chua - 300g', 40000, 33000, '2022-05-30', 'cachua.jpg', 0, 'Cà chua bi rất giàu vitamin C, vitamin A và canxi.'),
(6, 'Bông Cải Xanh - 300g', 57000, 47000, '2022-05-30', 'suplo.jpg', 1, 'Bông cải xanh hoặc súp lơ xanh, là một loại cây thuộc họ cải, có hoa lớn ở đầu, thường được dùng như rau'),
(7, 'Thanh Long Ruột Đỏ - 1kg', 88000, 78000, '2022-05-30', 'thanhlong.jpg', 0, 'Thành phần chất xơ chứa trong trái thanh long ruột đỏ cũng rất cao so với các loại trái cây khác, bao gồm cả 2 loại chất xơ không hòa tan (cellulose) và chất xơ hòa tan (pectin)'),
(8, 'Cà Rốt - 300g', 43000, 40000, '2022-05-30', 'carot.jpg', 1, 'Cà rốt là loại cây có củ, củ to ở phần đầu và nhọn ở phần đuôi, củ cà rốt thường có màu cam hoặc đỏ, phẩn ăn được thường gọi là củ nhưng thực chất đó là phần rễ của cà rốt'),
(9, 'Nấm Đùi Gà - Hộp 250g', 78000, 65000, '2022-05-30', 'namga.jpg', 1, 'Nấm đùi gà còn được biết đến với tên gọi khác là Nấm bào ngư Nhật, được xem là \"nữ hoàng của các loại nấm\" nhờ vào hàm lượng dinh dưỡng lớn, có lợi cho sức khỏe con người. '),
(10, 'Đu đủ - 1kg', 75000, 63000, '2022-05-30', 'dudu.jpg', 0, 'Đu đủ chín chứa 90% nước, 13% đường, không có tinh bột, nhiều caretenoid acid hữu cơ, các loại vitamin A, B, C, protein; 0,9% chất béo, xenlulo; 0,5% canxi và các chất đạm chống oxy hóa… '),
(11, 'Cải Bó Xôi - 250g', 47000, 45000, '2022-05-30', 'caibosoi.jpg', 2, 'Cải bó xôi còn gọi là rau chân vịt, ba thái, có tên khoa học là Spinacia oleracea L. Chenopodiaceae'),
(12, 'Bắp Ngọt - 500gr', 45000, 38000, '2022-05-30', 'bap.jpg', 0, 'Ngô ngọt (hay ngô đường, bắp ngọt, bắp đường) là giống ngô có hàm lượng đường cao, hương vị dân dã, quen thuộc với nhiều người.'),
(13, 'Cải Thìa - 300g', 38000, 34000, '2022-05-30', 'caithia.jpg', 2, 'Một chén cải thìa sống (tương đương khoảng 170g) chứa 9 calo, 1g protein, 1,5g carbohydrate, 0,7g chất xơ, không có cholesterol và chỉ 0,1g chất béo không có khả năng sản sinh cholesterol'),
(14, 'Nấm Kim Châm - 500g', 25000, 19000, '2022-05-30', 'namkim.jpg', 2, 'Nấm kim châm là một loài nấm màu trắng được sử dụng trong ẩm thực các nước châu Á như Hàn Quốc, Nhật Bản, Triều Tiên.'),
(15, 'Cà Tím - 300g', 33000, 26000, '2022-05-30', 'catim.jpg', 0, 'Cà tím là một loài cây thuộc họ cà, màu tím huế, ruột trắng, không xơ, ăn ngon.'),
(16, 'Chanh Không Hạt - 300g', 36000, 32000, '2022-05-30', 'chanh.jpg', 0, 'Quả chanh không hạt có đường kính khoảng 6 cm, so với chanh ta thì có kích thước lớn hơn, không hạt, cứng hơn, thân cây không có gai'),
(17, 'Khoai Mỡ - 500g', 42000, 38000, '2022-05-30', 'khoamon.jpg', 2, 'Tại Việt Nam, khoai mỡ được trồng nhiều ở khắp vùng nông thôn để lấy củ ăn.'),
(18, 'Khổ Qua - 300g', 34000, 30000, '2022-05-30', 'khoqua.jpg', 2, 'Trên lâm sàng, khổ qua thường dùng chữa các chứng do bệnh nhiệt gây thử nhiệt phiền khát, trúng thử (say nóng), ung sưng, mắt đỏ đau nhức, kiết lỵ, viêm quầng, nhọt độc, tiểu ít… '),
(19, 'Gừng Già - 100g', 21000, 18000, '2022-05-30', 'cugung.jpg', 2, 'Ăn gừng thường xuyên phòng chữa sỏi mật Sử dụng gừng thường xuyên rất có lợi cho việc phòng, chữa sỏi mật. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_discount`
--
ALTER TABLE `tbl_discount`
  ADD PRIMARY KEY (`discount_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_discount`
--
ALTER TABLE `tbl_discount`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
