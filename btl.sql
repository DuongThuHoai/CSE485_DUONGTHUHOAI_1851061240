-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 03:39 PM
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
-- Database: `btl`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`text`, `name`, `id`) VALUES
('CLB Tiếng anh trường Đại học Thủy Lợi: Tổ chức cuộc thi tiếng anh không chuyên trong trường, tham gia làm video dự thi Olympic tiếng anh toàn quốc, hỗ trợ thực hiện kì thi olympic TA không chuyên cho sinh viên TLU, tổ chức lớp ôn thi A2...', 'Hoạt động CLB', 1),
('Tham gia chương trình \"Trung thu cho em\" do đoàn trường ĐH Thủy Lợi tổ chức để quyên góp cho những trẻ em bị bệnh hiểm nghèo.', 'Hoạt động tình nguyện', 2);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthday` datetime NOT NULL,
  `addr` varchar(255) NOT NULL,
  `imgg` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `birthday`, `addr`, `imgg`, `email`, `phone`) VALUES
(1, 'Dương Thu Hoài', '2000-08-30 23:11:22', 'Phượng Cách - Quốc Oai - Hà Nội', 'css/image/132043378_251336879706932_7603093169022024834_n.jpg', 'duongthuhoai30082000@gmail.com', '0981972418');

-- --------------------------------------------------------

--
-- Table structure for table `educationn`
--

CREATE TABLE `educationn` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `date` varchar(30) NOT NULL,
  `sting` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educationn`
--

INSERT INTO `educationn` (`id`, `name`, `addr`, `date`, `sting`) VALUES
(1, 'Chuyên ngành Công nghệ thông tin\r\n', 'Trường Đại học Thủy Lợi', '2018-2023', 'Sinh viên năm 3\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `percent` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `name`, `percent`) VALUES
(1, 'html/css', 15),
(2, 'php', 10),
(3, 'sql/mysql', 20),
(4, 'c++/c#', 20),
(5, 'English', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educationn`
--
ALTER TABLE `educationn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `educationn`
--
ALTER TABLE `educationn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
