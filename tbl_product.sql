-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 09:49 AM
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
(5, 24, 10, 'DÂU TÂY ĐÀ LẠT - 250g', 190000, 10, '2022-07-31', 'Thơm ngon', 'sp1.jpg', 'sp1.jpg', 'sp1.jpg', 'sp1.jpg', 'sp1.jpg'),
(6, 24, 10, 'NHO XANH BÌNH THUẬN - 250g', 250000, 10, '2022-07-27', 'Ngon', 'sp2.jpg', 'sp2.jpg', 'sp2.jpg', 'sp2.jpg', 'sp2.jpg'),
(7, 24, 10, 'NHO ĐỎ NINH THUẬN - 300G', 265000, 10, '2022-01-02', 'Ngon', 'sp3.jpg', 'sp3.jpg', 'sp3.jpg', 'sp3.jpg', 'sp3.jpg'),
(8, 24, 11, 'SẦU RIÊNG THÁI', 150000, 10, '2022-01-02', 'Ngon', 'sp4.jpg', 'sp4.jpg', 'sp4.jpg', 'sp4.jpg', 'sp4.jpg'),
(9, 24, 11, 'MÍT THÁI BẾN TRE - 500g', 30000, 9, '2022-01-02', 'Ngon', 'sp5.jpg', 'sp5.jpg', 'sp5.jpg', 'sp5.jpg', 'sp5.jpg'),
(10, 24, 11, 'Măn cụt', 150000, 9, '2022-01-02', 'Ngon', 'sp6.jpg', 'sp6.jpg', 'sp6.jpg', 'sp6.jpg', 'sp6.jpg'),
(11, 24, 10, 'CHÔM CHÔM CHỢ LÁCH - 550g', 25000, 9, '2022-01-01', 'tươi', 'sp7.jpg', 'sp7.jpg', 'sp7.jpg', 'sp7.jpg', 'sp7.jpg'),
(12, 24, 10, 'MẬN CÁI MƠN - 500g', 30000, 10, '2022-01-02', 'Ngon', 'sp8.jpg', 'sp8.jpg', 'sp8.jpg', 'sp8.jpg', 'sp8.jpg'),
(13, 23, 15, 'Cải Bó Xôi - 250g', 47500, 0, '2022-05-30', '• Cải bó xôi còn gọi là rau chân vịt, ba thái, có tên khoa học là Spinacia oleracea L. Chenopodiaceae.', 'caibosoi.jpg', 'caibosoi.jpg', 'caibosoi.jpg', 'caibosoi.jpg', 'caibosoi.jpg'),
(14, 23, 15, 'Cải Dún - 250g', 32000, 0, '2022-05-30', 'Cải dún là loại rau xanh chứa vitamin C, mềm, ngọt mát, dễ ăn, giải nhiệt trong những ngày nóng.', 'caidung.jpg', 'caidung.jpg', 'caidung.jpg', 'caidung.jpg', 'caidung.jpg'),
(15, 23, 15, 'Cải Kale - 250g', 62000, 0, '2022-05-30', 'Cải Kale là một loại rau với lá xanh, có họ gần với bắp cải hơn các loại rau trồng khác.', 'caikale.jpg', 'caikale.jpg', 'caikale.jpg', 'caikale.jpg', 'caikale.jpg'),
(16, 23, 15, 'Cải Thảo - 300g', 33000, 0, '2022-05-30', 'Cải thảo có màu sắc khá giống với cải bắp, phần lá bao ngoài của màu xanh đậm, còn lá cuộn ở bên trong (gọi là lá non) có màu xanh nhạt, trong khi phần cuống lá có màu trắng', 'caithao.jpg', 'caithao.jpg', 'caithao.jpg', 'caithao.jpg', 'caithao.jpg'),
(17, 23, 15, 'Cải Thìa - 300g', 38000, 0, '2022-05-30', 'Một chén cải thìa sống (tương đương khoảng 170g) chứa 9 calo, 1g protein, 1,5g carbohydrate, 0,7g chất xơ, không có cholesterol và chỉ 0,1g chất béo không có khả năng sản sinh cholesterol', 'caithia.jpg', 'caithia.jpg', 'caithia.jpg', 'caithia.jpg', 'caithia.jpg'),
(18, 24, 12, 'Cà Tím - 300g', 33000, 0, '2022-05-30', 'Cà tím là một loài cây thuộc họ cà, màu tím huế, ruột trắng, không xơ, ăn ngon. ', 'catim.jpg', 'catim.jpg', 'catim.jpg', 'catim.jpg', 'catim.jpg'),
(19, 23, 15, 'Bắp Cải Tím - 500g', 55000, 0, '2022-05-30', 'Bắp cải tím: tên khoa học là Brassica oleracea var capitata ruba là cây bắp cải có màu tím', 'caitim.jpg', 'caitim.jpg', 'caitim.jpg', 'caitim.jpg', 'caitim.jpg'),
(20, 23, 15, 'Cần nước - 300gram', 37000, 0, '2022-05-30', 'Cần nước hay còn gọi là Rau cần ta là loại rau được trồng nhiều ở nước ta', 'cannuoc.jpg', 'cannuoc.jpg', 'cannuoc.jpg', 'cannuoc.jpg', 'cannuoc.jpg'),
(21, 23, 17, 'Húng Lủi - 50g', 15000, 0, '2022-05-30', 'Húng lủi thuộc cây thảo, là loại cây có nguồn gốc từ hoang dã, mùi thơm đặc trưng thường được dùng làm rau sạch, chế biến với nhiều món ăn', 'hunglui.jpg', 'hunglui.jpg', 'hunglui.jpg', 'hunglui.jpg', 'hunglui.jpg'),
(22, 24, 12, 'Bắp Ngọt 500gr', 45000, 0, '2022-05-30', 'Ngô ngọt là kết quả xuất hiện tự nhiên của đặc tính lặn của gen điều khiển việc chuyển đường thành tinh bột bên trong nội nhũ của hạt ngô', 'ngo.jpg', 'ngo.jpg', 'ngo.jpg', 'ngo.jpg', 'ngo.jpg'),
(23, 23, 17, 'Ngò Tây Lá Xoăn - 100g', 33000, 0, '2022-05-30', 'Rau được trồng theo phương thức hữu cơ (không sử dụng phân bón hóa học, thuốc trừ sâu hóa học và chất kích thích tăng trưởng)', 'ngotay.jpg', 'ngotay.jpg', 'ngotay.jpg', 'ngotay.jpg', 'ngotay.jpg'),
(24, 23, 15, 'Rau Dền - 300g', 38000, 0, '2022-05-30', 'Rau dền hữu cơ tại Organicfood.vn được trồng và thu hoạch trong môi trường hoàn toàn hữu cơ, không có các chất hóa học, không sử dụng thuốc tăng trưởng, biến đổi gen,…', 'rauden.jpg', 'rauden.jpg', 'rauden.jpg', 'rauden.jpg', 'rauden.jpg'),
(25, 23, 17, 'Rau Tía Tô - 50g', 13000, 0, '2022-05-30', 'Lá mọc đối, mép khía răng, mặt dưới tím tía, có khi hai mặt đều tía, nâu hay màu xanh lục có lông nhám', 'tiato.jpg', 'tiato.jpg', 'tiato.jpg', 'tiato.jpg', 'tiato.jpg'),
(26, 23, 17, 'Rau Thì Là 100G', 27000, 0, '2022-05-30', 'Thì là: một loài cây lấy lá làm gia vị và lấy hạt làm thuốc được sử dụng rất phổ biến ở nước ta.', 'thila.jpg', 'thila.jpg', 'thila.jpg', 'thila.jpg', 'thila.jpg'),
(27, 23, 15, 'Bắp Cải Trắng - 700g', 77000, 0, '2022-05-30', 'Trong bữa ăn gia đình, bắp cải được các bà nội trợ biến hóa thành nhiều món ăn ngon', 'bapcaitrang.jpg', 'bapcaitrang.jpg', 'bapcaitrang.jpg', 'bapcaitrang.jpg', 'bapcaitrang.jpg'),
(28, 23, 15, 'Bông Cải Xanh - 300g', 57000, 0, '2022-05-30', 'Bông cải xanh hoặc súp lơ xanh, là một loại cây thuộc họ cải, có hoa lớn ở đầu, thường được dùng như rau.', 'suplo.jpg', 'suplo.jpg', 'suplo.jpg', 'suplo.jpg', 'suplo.jpg'),
(29, 23, 17, 'Lá Bạc Hà 50g', 30000, 0, '2022-05-30', 'Bạc hà tây được dùng làm gia vị vì nó có mùi thơm đặc trưng. ', 'bacha.jpg', 'bacha.jpg', 'bacha.jpg', 'bacha.jpg', 'bacha.jpg'),
(30, 23, 15, 'Đọt Rau Lang - 300g', 38000, 0, '2022-05-30', 'Rau khoai lang là thứ rau dân dã trước đây chỉ dành cho nhà nghèo.', 'lang.jpg', 'lang.jpg', 'lang.jpg', 'lang.jpg', 'lang.jpg'),
(31, 24, 12, 'Bí Đỏ Hạt Đậu - 1Kg', 96000, 0, '2022-05-30', 'Bí đỏ nguyên trái Hướng dẫn sử dụng: Dùng để nấu canh, soup, hấp, xào,...', 'bido.jpg', 'bido.jpg', 'bido.jpg', 'bido.jpg', 'bido.jpg'),
(32, 24, 12, 'Cà Chua - 300g', 40000, 0, '2022-05-30', 'Cà chua bi rất giàu vitamin C, vitamin A và canxi.', 'cachua.jpg', 'cachua.jpg', 'cachua.jpg', 'cachua.jpg', 'cachua.jpg'),
(33, 24, 12, 'Bầu Xan - 500g', 60000, 0, '2022-05-30', 'Bầu xanh hữu cơ có vị ngọt, tính lạnh, có tác dụng giải nhiệt, giải độc, lợi tiểu, chữa đái dắt, đái đường.', 'bau.jpg', 'bau.jpg', 'bau.jpg', 'bau.jpg', 'bau.jpg'),
(34, 25, 22, 'Cà Rốt - 300g', 43000, 0, '2022-05-30', 'Cà rốt là loại cây có củ, củ to ở phần đầu và nhọn ở phần đuôi, củ cà rốt thường có màu cam hoặc đỏ', 'carot.jpg', 'carot.jpg', 'carot.jpg', 'carot.jpg', 'carot.jpg'),
(35, 25, 22, 'Củ Cải Đỏ - 350g', 35000, 0, '2022-05-30', 'Củ cải đỏ hay còn được gọi là củ cải đường là loại rau củ có quan hệ gần gũi với củ dền.', 'cucaido.jpg', 'cucaido.jpg', 'cucaido.jpg', 'cucaido.jpg', 'cucaido.jpg'),
(37, 25, 22, 'Củ Dền - 500g', 47000, 0, '2022-05-30', 'Có rễ phồng thành củ nạc, ngọt, màu đỏ thẫm', 'c5.jpg', 'c5.jpg', 'c5.jpg', 'c5.jpg', 'c5.jpg'),
(38, 26, 21, 'Set Lẩu Nấm 250g', 85000, 0, '2022-05-30', 'THƠM NGON, ĐẠI BỔ,GIÀU DƯỠNG CHẤT.', 'nam1.jpg', 'nam1.jpg', 'nam1.jpg', 'nam1.jpg', 'nam1.jpg'),
(39, 26, 21, 'Nấm Đông Cô - 500g', 62000, 0, '2022-05-30', 'Nấm đông cô có dạng như cái ô, đường kính 4–10 cm, màu nâu nhạt, khi chín chuyển thành nâu sậm.', 'nam2.jpg', 'nam2.jpg', 'nam2.jpg', 'nam2.jpg', 'nam2.jpg'),
(40, 26, 21, 'Nấm Kim Châm - 500g', 55000, 0, '2022-05-30', 'Nấm kim châm là một loài nấm màu trắng được sử dụng trong ẩm thực các nước châu Á', 'namkim.jpg', 'namkim.jpg', 'namkim.jpg', 'namkim.jpg', 'namkim.jpg'),
(41, 26, 21, 'Nấm Đùi Gà - Hộp 250g', 67000, 0, '2022-05-30', 'Nấm đùi gà còn được biết đến với tên gọi khác là Nấm bào ngư Nhật', 'namga.jpg', 'namga.jpg', 'namga.jpg', 'namga.jpg', 'namga.jpg'),
(42, 26, 20, 'Đông Trùng Hạ Thảo Khô 30g', 980000, 0, '2022-05-30', 'Hỗ trợ điều trị lao phổi, cầm máu, tiêu đờm', 'dongtrung.jpg', 'dongtrung.jpg', 'dongtrung.jpg', 'dongtrung.jpg', 'dongtrung.jpg'),
(43, 26, 20, 'Nấm Hào Hương 500g', 165000, 0, '2022-05-30', 'Giàu protein, hỗ trợ phòng chống giun sán. ', 'namhao.jpg', 'namhao.jpg', 'namhao.jpg', 'namhao.jpg', 'namhao.jpg'),
(44, 26, 20, 'Nấm Linh Chi Đỏ 200g', 390000, 0, '2022-05-30', 'Chứng nhận: Hữu Cơ Quốc Tế USDA / EU\r\nTrọng lượng: 200g', 'namlinh.jpg', 'namlinh.jpg', 'namlinh.jpg', 'namlinh.jpg', 'namlinh.jpg'),
(45, 26, 20, 'Nấm Ngô 500g', 165000, 0, '2022-05-30', 'Giàu protein. Bổ thận tráng dương. ', 'namngo.jpg', 'namngo.jpg', 'namngo.jpg', 'namngo.jpg', 'namngo.jpg'),
(46, 26, 20, 'Nấm Linh Chi Nâu - 500g', 47500, 0, '2022-05-30', 'Nấm Linh Chi Nâu còn có tên gọi khác là nấm Thủy tiên nâu.', 'namnau.jpg', 'namnau.jpg', 'namnau.jpg', 'namnau.jpg', 'namnau.jpg'),
(47, 26, 21, 'Nấm Ngọc Thạch - Hộp 250g', 62000, 0, '2022-05-30', 'Nấm ngọc thạch thu hoạch tại Organic farm có đường kính trung bình từ 2-4cm, trơn bóng, màu từ xám đến trắng xám.', 'namngoc.jpg', 'namngoc.jpg', 'namngoc.jpg', 'namngoc.jpg', 'namngoc.jpg'),
(48, 26, 21, 'Nấm Ngọc Châm Trắng - Hộp 250g', 89000, 0, '2022-05-30', 'Nấm có thể làm giảm lượng cholesterol trong máu, phòng tránh nguy cơ mắc các bệnh về tim mạch, huyết áp.', 'namcham.jpg', 'namcham.jpg', 'namcham.jpg', 'namcham.jpg', 'namcham.jpg'),
(49, 26, 21, 'Set Lẩu Nấm 250g', 55000, 0, '2022-05-30', 'Bao gồm: nấm đùi gà, kim châm trắng, kim châm nâu, nấm tiêu yến, nấm mối đen, nấm tiểu yến', 'namlau.jpg', 'namlau.jpg', 'namlau.jpg', 'namlau.jpg', 'namlau.jpg'),
(50, 25, 22, 'Củ Cải Trắng Hữu Cơ - 350g', 37000, 0, '2022-05-30', 'Củ trắng thuộc họ củ cải, thân tròn dài và to, chứa nhiều nước', 'cucai.jpg', 'cucai.jpg', 'cucai.jpg', 'cucai.jpg', 'cucai.jpg'),
(51, 25, 22, 'Khoai Mỡ Hữu Cơ - 500g', 42000, 0, '2022-05-30', 'khoai mỡ được trồng nhiều ở khắp vùng nông thôn để lấy củ ăn. ', 'khoai.jpg', 'khoai.jpg', 'khoai.jpg', 'khoai.jpg', 'khoai.jpg'),
(52, 25, 22, 'Khoai Lang Nhật - 500g', 40000, 0, '2022-05-30', 'Đặc điểm của khoai lang Nhật là thân to mập, ít phân cành và có màu tím', 'khoaimat.jpg', 'khoaimat.jpg', 'khoaimat.jpg', 'khoaimat.jpg', 'khoaimat.jpg'),
(53, 25, 22, 'Hành Tây  - 500g', 57000, 0, '2022-05-30', 'Hành tây là thực phẩm thông dụng trong bữa ăn của người Việt', 'hanhtay.jpg', 'hanhtay.jpg', 'hanhtay.jpg', 'hanhtay.jpg', 'hanhtay.jpg'),
(54, 25, 22, 'Khoai Tây - 500g', 56000, 0, '2022-05-30', 'Khoai Tây có ruột màu vàng, thân gồ ghề, củ hơi tròn, vị ngọt, dẻo/ bùi', 'khoatay.jpg', 'khoatay.jpg', 'khoatay.jpg', 'khoatay.jpg', 'khoatay.jpg'),
(55, 25, 22, 'Khoai Môn 500G', 42000, 0, '2022-05-30', 'Khoai môn là loại củ quen thuộc trong ẩm thực Việt, nấu được cả món mặn và ngọt', 'khoamon.jpg', 'khoamon.jpg', 'khoamon.jpg', 'khoamon.jpg', 'khoamon.jpg'),
(56, 25, 22, 'Khoai Lang Mật - 500g', 45000, 0, '2022-05-30', 'Khoai lang là một loài cây nông nghiệp với các rễ củ lớn, chứa nhiều tinh bột, có vị ngọt', 'langmat.jpg', 'langmat.jpg', 'langmat.jpg', 'langmat.jpg', 'langmat.jpg'),
(57, 25, 22, 'Su Hào - 500g', 35000, 0, '2022-05-30', 'Su Hào Hữu Cơ - 500g', 'suhao.jpg', 'suhao.jpg', 'suhao.jpg', 'suhao.jpg', 'suhao.jpg'),
(58, 25, 22, 'Tỏi Tép - 250g', 80000, 0, '2022-05-30', 'Tỏi chữa bệnh cảm cúm rất tốt', 'toi.jpg', 'toi.jpg', 'toi.jpg', 'toi.jpg', 'toi.jpg'),
(59, 25, 22, 'Sả Cây - 300g', 27000, 0, '2022-05-30', 'Ngăn ngừa ung thư  Một số nghiên cứu cho thấy mỗi 100 g sả chứa đến 24,205 microgam beta-carotene - những chất chống  oxy hóa mạnh mẽ có thể giúp ngăn ngừa ung thư', 'sa.jpg', 'sa.jpg', 'sa.jpg', 'sa.jpg', 'sa.jpg'),
(60, 23, 15, 'Cải Xanh - 250g', 25000, 0, '2022-05-30', 'Cải Xanh Hữu Cơ - 250g', 'caixanh.jpg', 'caixanh.jpg', 'caixanh.jpg', 'caixanh.jpg', 'caixanh.jpg'),
(61, 23, 17, 'Hành Lá - 100g', 21000, 0, '2022-05-30', 'Hành lá tốt cho sức khỏe vì chứa nhiều vitamin C và K', 'hanh.jpg', 'hanh.jpg', 'hanh.jpg', 'hanh.jpg', 'hanh.jpg'),
(62, 23, 17, 'Húng Quế - 50g', 15000, 0, '2022-05-30', 'Húng quế là cây rau xanh, lá nhỏ, cành tím, có hoa màu trắng. Húng quế có các loại húng quế, húng quế ngọt, húng chanh, húng quế hồi.   ', 'hunque.jpg', 'hunque.jpg', 'hunque.jpg', 'hunque.jpg', 'hunque.jpg'),
(63, 23, 18, 'Xà Lách Lô Lô - 250g', 45000, 0, '2022-05-30', 'Để bảo quản được lâu, bạn rửa sạch, để ráo nước, sau đó cho vào túi nilong và lưu trữ trong tủ lạnh ở nhiệt độ 5-12°C.', 'xalach.jpg', 'xalach.jpg', 'xalach.jpg', 'xalach.jpg', 'xalach.jpg'),
(64, 25, 22, 'Gừng Già - 100g', 21000, 0, '2022-05-30', 'Ăn gừng thường xuyên phòng chữa sỏi mật Sử dụng gừng thường xuyên rất có lợi cho việc phòng, chữa sỏi mật. Sỏi mật hiện nay thường được điều trị bằng phẫu thuật và chưa có một thuốc đặc trị nào có hiệu quả', 'cugung.jpg', 'cugung.jpg', 'cugung.jpg', 'cugung.jpg', 'cugung.jpg'),
(65, 24, 12, 'Thơm (Dứa) Hữu - 1kg', 50, 0, '2022-05-30', 'Thơm, Dứa hay khóm (có nơi gọi là khớm) hay gai (miền Trung) hoặc trái huyền nương, tên khoa học Ananas comosus', 'thom.jpg', 'thom.jpg', 'thom.jpg', 'thom.jpg', 'thom.jpg'),
(66, 24, 12, 'Ớt Chuông Đỏ - 300g', 45000, 0, '2022-05-30', 'Ớt Chuông có nhiều màu như xanh, đỏ, cam, vàng, thân tròn như quả chuông, hương thơm, vị rất giòn ngọt, ít hăng.', 'otchuong.jpg', 'otchuong.jpg', 'otchuong.jpg', 'otchuong.jpg', 'otchuong.jpg'),
(67, 24, 12, 'Mướp Hương - 500g', 30000, 0, '2022-05-30', 'Mướp hương được thu hoạch từ nông trại chuẩn hữu cơ, không hóa chất.', 'muop.jpg', 'muop.jpg', 'muop.jpg', 'muop.jpg', 'muop.jpg'),
(68, 24, 12, 'Đu Đủ Ruột Đỏ 1kg', 50000, 0, '2022-05-30', 'Đu đủ là loại quả nhiều dinh dưỡng rất tốt cho sức khỏe của chúng ta. ', 'dudu.jpg', 'dudu.jpg', 'dudu.jpg', 'dudu.jpg', 'dudu.jpg'),
(69, 24, 13, 'Cam Vàng Úc - 1kg', 15000, 0, '2022-05-30', 'Điểm nổi bật Cam vàng không hạt nhập khẩu từ Úc có vỏ màu vàng, ruột màu vàng đậm, vị ngọt thanh, không hạt, mọng nước, thường dùng để ăn chứ không ép nước', 'cam.jpg', 'cam.jpg', 'cam.jpg', 'cam.jpg', 'cam.jpg'),
(70, 24, 13, 'Bưởi Da Xanh Loại 1 - 1kg', 70000, 0, '2022-05-30', 'Bưởi da xanh tại Organic đươc chọn lựa kỹ càng từ chính nông trại của Organic, đảm bảo sạch, không hóa chất, không thuốc tăng trưởng, các chất làm biến đổi gen.', 'buoi.jpg', 'buoi.jpg', 'buoi.jpg', 'buoi.jpg', 'buoi.jpg'),
(71, 24, 13, 'LÊ HÀN QUỐC - 1kg', 120000, 0, '2022-05-30', 'Quả có thịt trắng là ngon ngọt, hạt nhỏ màu trắng', 'le.jpg', 'le.jpg', 'le.jpg', 'le.jpg', 'le.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
