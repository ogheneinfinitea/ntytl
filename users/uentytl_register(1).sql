-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2019 at 07:43 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uentytl_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`, `email`) VALUES
(20, 'â€ª+234 803 223 6858â€¬ 20190104_143655.jpg', '2019-06-05 21:27:10', '1', ''),
(21, 'IMG-20190504-WA0028.jpg', '2019-06-06 13:18:26', '1', ''),
(22, 'IMG-20190504-WA0028.jpg', '0000-00-00 00:00:00', '1', '2019-06-06 13:26:45'),
(23, 'IMG-20190504-WA0028.jpg', '2019-06-06 13:27:43', '1', 'macosa25@gmail.com'),
(24, '15.project attendence managemnt system.pdf', '2019-06-06 15:42:29', '1', 'macosa25@gmail.com'),
(25, 'IMG-20190606-WA0009.jpg', '2019-06-06 17:59:44', '1', 'macosa25@gmail.com'),
(26, 'BeautyPlus_20190606072916_fast.jpg', '2019-06-06 18:00:55', '1', 'macosa25@gmail.com'),
(27, 'BeautyPlus_20190606072916_fast.jpg', '2019-06-06 18:06:05', '1', 'Ogheneinfinitea@gmail.com'),
(28, 'IMG_20190127_174836.jpg', '2019-06-06 20:53:53', '1', 'macosa25@gmail.com'),
(29, 'IMG_20190127_174836.jpg', '2019-06-06 20:58:21', '1', 'macosa25@gmail.com'),
(30, 'BeautyPlus_20190606072954_fast.jpg', '2019-06-06 22:46:15', '1', 'now@gmail.com'),
(31, 'FB_IMG_1527052644288.jpg', '2019-06-07 00:43:56', '1', 'macosa25@gmail.com'),
(32, 'FB_IMG_1527052871120.jpg', '2019-06-07 00:44:28', '1', 'macosa25@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `email`, `password`) VALUES
(1, 'macosa25@gmail.com', '$2y$10$3DO/HpzWiBzIOCt4LZd2T.UYGemyIS0iL.AViL6XB7CjQztDb94Je');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_letters`
--

CREATE TABLE `tbl_letters` (
  `id` int(11) NOT NULL,
  `file_name` varchar(225) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `phone_number` varchar(100) DEFAULT NULL,
  `gender` varchar(100) NOT NULL,
  `marital_status` varchar(100) NOT NULL,
  `home_address` varchar(200) DEFAULT 'NULL',
  `home_town` varchar(200) DEFAULT 'NULL',
  `dob` date NOT NULL,
  `state_of_origin` varchar(200) NOT NULL,
  `bio` varchar(225) DEFAULT 'NULL',
  `file_name` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `img_status` varchar(100) NOT NULL,
  `lga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `email`, `password`, `surname`, `firstname`, `middlename`, `phone_number`, `gender`, `marital_status`, `home_address`, `home_town`, `dob`, `state_of_origin`, `bio`, `file_name`, `uploaded_on`, `img_status`, `lga`) VALUES
(3, 'macosa25@gmail.com', '$2y$10$9zBikJ3OsG/qEAuK2VlspeYT0vWprrVg31Mg9sme23wJUD/WzuIHO', 'EDUOTU SAMSON', 'SAMSON', 'OGHENERIYE', '08032236858', 'Female', 'Single', 'EMEDE1 NIGERIA ward ', 'EMEDE', '1993-10-20', 'DELTA', 'BONSAC', 'â€ª+234 803 223 6858â€¬ 20190104_143655.jpg', '0000-00-00 00:00:00', '', 'ISOKO SOUTH'),
(4, 'admin@gmail.com', '$2y$10$1VXGofnDnCmF055TJW8EvuiPmM0sGaR8jf2LJkkHe3lGUGxAucWJi', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '\0\0\00', '0000-00-00 00:00:00', '', ''),
(5, 'test@gmail.com', '$2y$10$T1jXzqX.KwPDTMdQwu9aE.y6yAwDCCc6UjEI4WuTsIf24cTfJrwyq', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '\0\0\00', '0000-00-00 00:00:00', '', ''),
(6, 'test1@gmail.com', '$2y$10$tk0GQsf/mw7MCo2/AszCKe5BwERrrbE4lCdIushEfwNgo/RPRpJk6', 'TEST', 'TEST', 'TEST', '08032236858', '', '', 'asaba delta state', 'okowa road', '0000-00-00', '', '', 'â€ª+234 803 223 6858â€¬ 20190104_143655.jpg', '0000-00-00 00:00:00', '', ''),
(7, 'access@gmail.com', '$2y$10$CW5BIzFWVIibqorYiCo5IufWIB4EjWxFPIIi5eWX.l3uCz//zJupq', 'EDUOTU', '', '', '', '', '', 'NULL', 'NULL', '0000-00-00', '', 'NULL', 'BeautyPlus_20190309173848_fast.jpg', '0000-00-00 00:00:00', '', ''),
(8, 'blessing@gmail.com', '$2y$10$XSyzC20TSpOzkLFy4SiAy.9pTNkPFR2rXcOap.HOs1gXkIc2rABNa', '', '', '', NULL, '', '', 'NULL', 'NULL', '0000-00-00', '', 'NULL', '', '0000-00-00 00:00:00', '', ''),
(9, 'Ogheneinfinitea@gmail.com', '$2y$10$a0ooCGowj0gtxhoCTLVBTeHiNCBpyRPI4ndQRE5ouwxZl5UL95YM.', '', '', '', NULL, '', '', 'NULL', 'NULL', '0000-00-00', '', 'NULL', '', '0000-00-00 00:00:00', '', ''),
(10, 'now@gmail.com', '$2y$10$rxmqtGxdkH5Lsb5big4D/uyLQWBsvuS9soY5oAiKIXSSASiZHsLQK', '', '', '', NULL, '', '', 'NULL', 'NULL', '0000-00-00', '', 'NULL', '', '0000-00-00 00:00:00', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_letters`
--
ALTER TABLE `tbl_letters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_letters`
--
ALTER TABLE `tbl_letters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
