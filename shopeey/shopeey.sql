-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 05:08 PM
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
-- Database: `shopeey`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` varchar(6) NOT NULL,
  `product_title` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `cost_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `img_path1` varchar(50) NOT NULL,
  `img_path2` varchar(50) NOT NULL,
  `img_path3` varchar(50) NOT NULL,
  `img_path4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_title`, `description`, `cost_price`, `selling_price`, `img_path1`, `img_path2`, `img_path3`, `img_path4`) VALUES
('P89841', 'AddidasTrack shut', 'Running', 600, 700, 'img/product/P89841_img1.jpg', 'img/product/P89841_img2.jpg', 'img/product/P89841_img3.jpg', 'img/product/P89841_img4.jpg'),
('P95765', 'Nike T-shirt', 'Casual shirt', 200, 250, 'img/product/P95765_img1.jpg', 'img/product/P95765_img2.jpg', 'img/product/P95765_img3.jpg', 'img/product/P95765_img4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
