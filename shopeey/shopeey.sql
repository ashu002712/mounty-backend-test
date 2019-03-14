-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 10:31 PM
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
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` varchar(9) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `shipping_address` varchar(50) NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `product_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `customer_name`, `shipping_address`, `payment_method`, `product_id`) VALUES
('ORD672390', 'Alex Smit', 'CA,USA', 'Cash On Delivery', 'P61484'),
('ORD726842', 'Smith', 'LPU MAin', 'Cash On Delivery', 'P33955');

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
('P17592', 'Jeans', 'Casual Jeans for men', 900, 960, 'img/product/P17592_img1.jpg', 'img/product/P17592_img2.jpg', 'img/product/P17592_img3.jpg', 'img/product/P17592_img4.jpg'),
('P33955', 'Slim fit Shirt', 'Peter England 100% cotton', 1300, 1500, 'img/product/P33955_img1.jpg', 'img/product/P33955_img2.jpg', 'img/product/P33955_img3.jpg', 'img/product/P33955_img4.jpg'),
('P61484', 'Formal Shirt', '100% cotton Peter England', 1200, 1300, 'img/product/P61484_img1.jpg', 'img/product/P61484_img2.jpg', 'img/product/P61484_img3.jpg', 'img/product/P61484_img4.jpg'),
('P80202', 'Denim Jeans', '100% pure cotton', 800, 880, 'img/product/P80202_img1.jpg', 'img/product/P80202_img2.jpg', 'img/product/P80202_img3.jpg', 'img/product/P80202_img4.jpg'),
('P89841', 'Addidas Track shut', 'Running', 600, 700, 'img/product/P89841_img1.jpg', 'img/product/P89841_img2.jpg', 'img/product/P89841_img3.jpg', 'img/product/P89841_img4.jpg'),
('P92681', 'Slim fit shirt', 'Aero product', 900, 950, 'img/product/P92681_img1.jpg', 'img/product/P92681_img2.jpg', 'img/product/P92681_img3.jpg', 'img/product/P92681_img4.jpg'),
('P95765', 'Nike T-shirt', 'Casual shirt', 200, 250, 'img/product/P95765_img1.jpg', 'img/product/P95765_img2.jpg', 'img/product/P95765_img3.jpg', 'img/product/P95765_img4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
