-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 04:54 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_sepatu1`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` tinyint(1) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `status` enum('paid','unpaid','canceled','expired') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `date`, `due_date`, `status`) VALUES
(1, '2015-01-04 05:06:50', '2015-01-05 05:06:50', 'unpaid'),
(2, '2015-01-04 05:10:20', '2015-01-05 05:10:20', 'unpaid'),
(3, '2017-07-12 09:37:13', '2017-07-13 09:37:13', 'unpaid'),
(4, '2017-07-12 09:41:49', '2017-07-13 09:41:49', 'unpaid'),
(5, '2017-07-13 06:01:16', '2017-07-14 06:01:16', 'unpaid'),
(6, '2017-07-13 06:05:26', '2017-07-14 06:05:26', 'unpaid'),
(7, '2017-07-13 06:05:44', '2017-07-14 06:05:44', 'unpaid'),
(8, '2017-07-13 06:16:46', '2017-07-14 06:16:46', 'unpaid'),
(9, '2017-07-13 06:17:19', '2017-07-14 06:17:19', 'unpaid'),
(10, '2017-07-13 06:17:28', '2017-07-14 06:17:28', 'unpaid'),
(11, '2017-07-13 06:18:05', '2017-07-14 06:18:05', 'unpaid'),
(12, '2017-07-13 06:19:20', '2017-07-14 06:19:20', 'unpaid'),
(13, '2017-07-13 06:23:06', '2017-07-14 06:23:06', 'unpaid'),
(14, '2017-07-13 06:25:59', '2017-07-14 06:25:59', 'unpaid'),
(15, '2017-07-13 06:27:51', '2017-07-14 06:27:51', 'unpaid'),
(16, '2017-07-13 06:29:24', '2017-07-14 06:29:24', 'unpaid'),
(17, '2017-07-13 06:30:22', '2017-07-14 06:30:22', 'unpaid'),
(18, '2017-07-13 06:36:31', '2017-07-14 06:36:31', 'unpaid'),
(19, '2017-07-13 06:36:41', '2017-07-14 06:36:41', 'unpaid'),
(20, '2017-07-13 06:38:54', '2017-07-14 06:38:54', 'unpaid'),
(21, '2017-07-13 06:41:11', '2017-07-14 06:41:11', 'unpaid'),
(22, '2017-07-13 06:43:07', '2017-07-14 06:43:07', 'unpaid'),
(23, '2017-07-13 06:43:16', '2017-07-14 06:43:16', 'unpaid'),
(24, '2017-07-13 08:35:53', '2017-07-14 08:35:53', 'unpaid'),
(25, '2017-07-14 05:16:41', '2017-07-15 05:16:41', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `invoice_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `qty` int(3) NOT NULL,
  `price` int(9) NOT NULL,
  `options` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `invoice_id`, `product_id`, `product_name`, `qty`, `price`, `options`) VALUES
(1, 1, 1, 'Baju', 1, 79000, ''),
(2, 1, 3, 'Topi', 1, 80000, ''),
(3, 2, 5, 'Dasi', 1, 77500, ''),
(4, 3, 2, 'Sandal Casual', 1, 35000, ''),
(5, 4, 1, 'Baju', 1, 79000, ''),
(6, 5, 9, 'Sepatu Basket Under Armour', 1, 500000, ''),
(7, 7, 9, 'Sepatu Basket Under Armour', 1, 500000, ''),
(8, 7, 8, 'Sepatu Basket Under Armour', 1, 300000, ''),
(9, 8, 8, 'Sepatu Basket Under Armour', 1, 300000, ''),
(10, 9, 9, 'Sepatu Basket Under Armour', 1, 500000, ''),
(11, 12, 9, 'Sepatu Basket Under Armour', 1, 500000, ''),
(12, 13, 7, 'Sepatu Basket Under Armour', 1, 300000, ''),
(13, 13, 8, 'Sepatu Basket Under Armour', 1, 300000, ''),
(14, 13, 9, 'Sepatu Basket Under Armour', 1, 500000, ''),
(15, 14, 8, 'Sepatu Basket Under Armour', 1, 300000, ''),
(16, 14, 9, 'Sepatu Basket Under Armour', 1, 500000, ''),
(17, 14, 7, 'Sepatu Basket Under Armour', 1, 300000, ''),
(18, 15, 9, 'Sepatu Basket Under Armour', 1, 500000, ''),
(19, 15, 8, 'Sepatu Basket Under Armour', 1, 300000, ''),
(20, 16, 9, 'Sepatu Basket Under Armour', 1, 500000, ''),
(21, 16, 8, 'Sepatu Basket Under Armour', 1, 300000, ''),
(22, 16, 7, 'Sepatu Basket Under Armour', 1, 300000, ''),
(23, 17, 7, 'Sepatu Basket Under Armour', 1, 300000, ''),
(24, 17, 8, 'Sepatu Basket Under Armour', 1, 300000, ''),
(25, 19, 8, 'Sepatu Basket Under Armour', 1, 300000, ''),
(26, 20, 9, 'Sepatu Basket Under Armour', 1, 500000, ''),
(27, 23, 8, 'Sepatu Basket Under Armour', 1, 300000, ''),
(28, 24, 9, 'Sepatu Basket Under Armour', 1, 500000, ''),
(29, 24, 8, 'Sepatu Basket Under Armour', 1, 300000, ''),
(30, 25, 8, 'Sepatu Basket Under Armour', 1, 300000, ''),
(31, 25, 9, 'Sepatu Basket Under Armour', 1, 500000, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(9) NOT NULL,
  `stock` int(3) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `image`) VALUES
(7, 'Sepatu Basket Under Armour', 'Sepatu Sport', 300000, 10, 'images1.jpg'),
(8, 'Sepatu Basket Under Armour', 'sepatu sport', 300000, 2, 'images_(1).jpg'),
(9, 'Sepatu Basket Under Armour', 'Sepatu Sport', 500000, 7, 'images_(2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `toko_sessions`
--

CREATE TABLE `toko_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko_sessions`
--

INSERT INTO `toko_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('03a4153ba6ed8f96e208e6fba20486eb', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 1531793395, 'a:3:{s:9:"user_data";s:0:"";s:8:"username";s:3:"ana";s:5:"group";s:1:"1";}'),
('0e396fe86f95a24618131b708174e9fd', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 1531792026, 'a:3:{s:9:"user_data";s:0:"";s:8:"username";s:5:"admin";s:5:"group";s:1:"1";}'),
('401109f50362cdefd2d06c17eeac8406', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 1531790632, ''),
('d8a07edab427d279f4d717c60344d208', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 1531791595, 'a:2:{s:9:"user_data";s:0:"";s:15:"flash:old:error";s:26:"Wrong Username / Password!";}'),
('e74923dd0d05bb03686a220eec88c48e', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 1531796013, 'a:3:{s:9:"user_data";s:0:"";s:8:"username";s:3:"asu";s:5:"group";s:1:"2";}'),
('e997713b9931b992fb121af6fbd75871', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 1531792671, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL,
  `group` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group`) VALUES
(1, 'admin', 'admin', 1),
(2, 'bob', '123', 2),
(3, 'mimin', '03f7f7198958ffbda01db956d15f134a', 0),
(4, 'anjing', 'a1fb7f01ffe3fc76e0b997be59ae212f', 1),
(5, 'ken', 'ken', 2),
(6, 'ana', 'ana', 1),
(7, 'asu', 'asu', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko_sessions`
--
ALTER TABLE `toko_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
