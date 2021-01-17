-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 03:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_btl`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `message`) VALUES
(1, 'a@gmail.com', 'hiiiii'),
(2, 'a@gmail.com', 'plssss'),
(3, 'q@gmail.com', 'hi  there i wanna ask you some question? can you?');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(13, 23, 2, 'Nhóm lá (leafy vegetables)', 'leafs.jpeg', '&lt;p&gt;Nhóm này bao gồm rau có LÁ và lá….không nhất thiết phải xanh! Đơn cử là lá dền, lá tía tô, không phải xanh nhưng cũng có thể gọi là lá xanh (e hèm tía tô cũng thuộc vô phân loại “herbs” hay rau thơm  trong tiếng Việt). Nhóm lá xanh đại đa số có hợp chất chlorophyll khiến lá có màu xanh và giúp cây trồng có khả năng tạo năng lượng từ khí carbon dioxide và nước.\r\n\r\nĐại diện: cải thìa, cải làn, cải rổ, cải đắng, cải ngọt, rau bina, rau dền, rau mồng tơi, rau đay, đại đa số rau thơm, rau muống, rau tần ô.\r\n\r\nDưỡng chất:\r\n\r\nNhóm này thông thường giàu các vi dưỡng chất sau: vitamin B2, vitamin B9 (folate), vitamin C, vitamin A, và magie và sắt. Xin lưu ý một số rau xanh cũng có giàu canxi: đơn cử là rau bina (spinach) và rau cải Thụy Sĩ (Swiss chard) nhưng rất tiếc những rau này cũng có nhiều oxalic acid sẽ kết với canxi và cơ thể người không hấp thụ được canxi hiệu quả. Ngược lại, đa số các món rau cải thân thuộc chợ nào cũng có là rau cải đắng, cải ngọt, cải làn, và cải thìa, cũng có nhiều canxi nhưng thành phần oxalic acid lại thấp nên cơ thể hấp thu canxi tốt hơn nhiều-phải nói là còn tốt hơn cả canxi trong sữa bò tươi nữa.&lt;/p&gt;', 1, '2021-01-12 15:56:19'),
(14, 23, 3, 'Nhóm Củ-Rễ (Tubers/Roots)', 'roots.jpeg', '&lt;p&gt;Tiêu biểu: củ su hào, củ sắn, cà rốt, củ cải trắng, củ dền, củ cải đỏ, củ hành, củ tỏi, khoai lang, khoai tây, khoai môn, khoai mỡ…\r\n\r\nDinh dưỡng: nhóm này đại đa số giàu “đường carbohydrate” ở dạng amylopectin và amylose nói cách khác nhóm này đa số có hàm lượng calories (ở cùng một trọng lượng) rất cao so với rau củ thuộc các nhóm khác. Ý là ai bị tiểu đường, đang ăn kiêng giảm cân, thì nên lưu ý kiểm soát số lượng thức ăn từ nhóm này.\r\n\r\nNgoài khả năng cung cấp năng lượng vượt trội hơn các nhóm khác, nhóm củ cũng có lượng kali khá cao. Nhìn chung, với vận động viên nhóm củ này là một sự lựa chọn tốt cho nhóm tinh bột thay vì xơi gạo trắng.&lt;/p&gt;', 1, '2021-01-12 16:01:28'),
(15, 23, 6, 'Nhóm Mầm', 'bamboo.jpeg', '&lt;p&gt;Sở dĩ gọi là nhóm mầm bởi vì nhóm này…mọc từ trong đất và nẩy mầm khỏi mặt đất. Không nói thì bạn cũng đoán ra nhóm này không đông đảo bà con lắm. Quanh đi quẩn lại cũng chỉ có măng ta, măng tây (asparagus), cần tây. Ngoại trừ cần tây hình như mùa nào cũng có mặt nó, còn lại măng tây và măng ta (măng tre) rất ít khi thấy trừ dịp mùa xuân và sau đó phải được chế biến để trữ lâu dài.\r\n\r\nDinh dưỡng: nhóm này giàu dinh dưỡng nhất là măng tây vốn có nhiều vitamin B2-nó là super star của nhóm rau có hàm lượng vitamin B2 rất đáng kể. Cần tây cũng nhiều vitamin C nhưng các bạn bị huyết áp cao nên tránh cần tây vì nó nhiều muối natri tự nhiên.&lt;/p&gt;', 1, '2021-01-12 16:01:57'),
(16, 23, 4, 'Nhóm Hoa (Flowers)', 'cauli.jpeg', '&lt;p&gt;Nhóm này gọi là hoa vì hình dạng và cách sinh trưởng của chúng gần giống với các cây cho ra hoa.\r\n\r\nTiêu biểu: súp lơ xanh, súp lơ trắng, a-ti-sô.\r\n\r\nDưỡng chất: cũng tương tự như các nhóm khác, thành phần dinh dưỡng của chúng cũng là dạng hỗn hợp và tùy theo từng loại nhất định mà một số dưỡng chất sẽ cao hơn những loại khác trong cùng nhóm. Súp lơ xanh giàu vitamin A, vitamin C, vitamin K, kali lý tưởng. Anh em của nó súp lơ trắng có rất rất rất ít vitamin A và vitamin K, Kali thì thấp, nhưng bù lại súp lơ trắng có rất nhiều anthoxanthin có thể giúp hạ cholesterol và huyết áp nhưng hiệu quả chưa đủ đình đám để thu hút sự chú ý của….internet. A-ti-sô so với súp lơ trắng thì không khá hơn bao nhiêu nhưng nó có hàm lượng kali cao hơn cả hai loại súp lơ trên.&lt;/p&gt;', 1, '2021-01-12 16:02:23'),
(17, 23, 5, 'Nhóm Trái cây (fruits)', 'fr.jpeg', '&lt;p&gt;Sở dĩ nhóm này gọi là trái cây bởi vì mỗi đơn vị mọc ra từ MỘT BÔNG HOA.\r\n\r\nTiêu biểu:  đậu bắp, cà tím, cà pháo, cà chua, bầu, trái su su, bí đỏ, bí đao, mướp…\r\n\r\nDưỡng chất: phải nói là nutrition profile của nhóm này không nổi bật nhưng đa số có vitamin C, kali, thành phần vitamin A tùy theo loại như bí đỏ thì nhiều vitamin A nhưng mướp thì không có gì đáng kể. Lưu ý trong nhóm này có các loại cà cũng được liệt vào nhóm “màu sắc đêm” như cà chua và cà tím thường được khuyến cáo chống chỉ định cho các đối tượng bị viêm khớp (theo thuyết y học phương Đông cổ truyền là vậy).&lt;/p&gt;', 1, '2021-01-12 16:02:53'),
(18, 23, 7, 'my favourite fruit', '1610637776_apple.jpeg', '&lt;p&gt;&lt;strong&gt;Yummy&amp;nbsp;&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;An apple a day keeps the doctor away&lt;/i&gt;&lt;/p&gt;', 1, '2021-01-12 21:01:47'),
(19, 23, 7, 'test', '1610725056_1572019079_Screen Shot 2019-04-02 at 2.45.51 PM.png', '&lt;p&gt;hey&lt;/p&gt;', 1, '2021-01-15 22:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(2, 'Nhóm lá (leafy vegetables)', '<p>test change</p>'),
(3, 'Nhóm Củ-Rễ (Tubers/Roots)', ''),
(4, 'Nhóm Hoa (Flowers)', ''),
(5, 'Nhóm Trái cây (fruits)', ''),
(6, 'Nhóm Mầm', ''),
(7, 'Một số loại khác', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(23, 1, 'hoai', 'a@gmail.com', '$2y$10$vb45kHVz6GXF6XJE59PGIeVWkoWBoXdo/2V9goY/OeO.i6xuNtq0y', '2021-01-12 10:11:35'),
(24, 0, 'thu', 'q@gmail.com', '$2y$10$y9CEHnKw1e8iFKqO8wRVZuL28Tz1eWYcerhRND7pg6i7ZQOPv1L0O', '2021-01-12 14:14:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
