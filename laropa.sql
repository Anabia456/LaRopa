-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 12:17 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laropa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`a_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`c_id`, `c_name`) VALUES
(1, 'Men\'s'),
(2, 'Women\'s'),
(3, 'Kid\'s');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_msg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`c_id`, `c_name`, `c_email`, `c_msg`) VALUES
(1, 'Alexa Gabriel', 'alexa@gmail.com', 'Your products are fab!!'),
(2, 'Smoky', 'sami@gmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE `new` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new`
--

INSERT INTO `new` (`id`, `name`) VALUES
(1, 'abc'),
(2, 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `o_id` int(11) NOT NULL,
  `unique_order_num` varchar(50) NOT NULL,
  `u_name` int(11) NOT NULL,
  `o_status` varchar(50) NOT NULL,
  `pro_id` varchar(50) NOT NULL,
  `p_size` varchar(50) NOT NULL,
  `pro_qty` varchar(50) NOT NULL,
  `o_price` int(11) NOT NULL,
  `payment_method` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`o_id`, `unique_order_num`, `u_name`, `o_status`, `pro_id`, `p_size`, `pro_qty`, `o_price`, `payment_method`) VALUES
(26, 'VIzmVY1Y', 6, 'Delivered', '60', '', '1', 2620, 'Cash on delivery'),
(28, 'JtlxdybW', 6, 'Delivered', '52,50,57', '', '1,1,1', 15100, 'Cash on delivery'),
(29, 'KStlvDlS', 6, 'Delivered', '53,57,58', '', '1,1,1', 15800, 'Cash on delivery');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_size` varchar(50) NOT NULL,
  `p_desc` varchar(50) NOT NULL,
  `p_availiblity` varchar(50) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_category` int(11) NOT NULL,
  `p_subcategory` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `p_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`p_id`, `p_name`, `p_size`, `p_desc`, `p_availiblity`, `p_price`, `p_category`, `p_subcategory`, `status`, `p_img`) VALUES
(27, 'Lawn Suit', '', 'Summer collection', 'In Stock', 2300, 2, '1', 5, 'img1-2.webp,img2-2.webp,img3-2.webp,img4-2.webp'),
(28, 'Red Lawn Suit', '', 'Summer collection', 'In Stock', 1900, 2, '1', 5, 'img1-3.webp,img2-3.webp,img3-3.webp,img4-3.webp'),
(30, 'Lawn Suit', '', 'Summer collection', 'In Stock', 2300, 2, '1', 5, 'img1-4.webp,img2-4.webp,img3-4.webp,img4-4.webp'),
(31, 'Lawn Suit', '', 'New Arrival', 'In Stock', 4500, 2, '1', 5, 'img1-5.webp,img2-5.webp,img3-5.webp,img4-5.webp,'),
(32, 'Lawn Suit', '', 'Summer collection', 'In Stock', 2000, 2, '1', 5, 'img1-6.webp,img2-6.webp,img3-6.webp,img4-6.webp'),
(33, 'Lawn Suit', '', 'Summer collection', 'In Stock', 4500, 2, '1', 5, 'img1-7.webp,img2-7.webp,img3-7.webp,img4-7.webp'),
(34, 'Lawn Suit', '', 'New Arrival', 'In Stock', 2500, 2, '1', 5, 'img1-8.webp,img2-8.webp,img3-8.webp,img4-8.webp'),
(35, 'Lawn Suit', '', 'New Arrival', 'In Stock', 3000, 2, '1', 5, 'img1-9.webp,img2-9.webp,img3-9.webp,img4-9.webp'),
(36, 'Lawn Suit', '', 'Summer collection', 'In Stock', 5000, 2, '1', 5, 'img1-10.webp,img2-10.webp,img3-10.webp,img4-10.web'),
(37, 'Lawn Suit', '', 'New Arrival', 'In Stock', 4500, 2, '1', 5, 'img1-11.webp,img2-11.webp,img3-11.webp,img4-11.web'),
(38, 'Lawn Suit', '', 'Summer collection', 'In Stock', 3999, 2, '1', 5, 'img1-12.webp,img2-12.webp,img3-12.webp,img4-12.web'),
(40, 'Jackard ', '', 'Summer collection', 'In Stock', 3000, 2, '1', 5, 'img1-1.webp,img2-1.webp,img3-1.webp,img4-1.webp'),
(42, 'Short shirt', '', 'New Arrival', 'In Stock', 5200, 2, '2', 5, 'img1-14.webp,img2-14.webp,img3-14.webp'),
(43, 'Pants', '', 'Summer collection', 'In Stock', 3400, 2, '2', 5, 'img1-13.webp,img2-13.webp,img3-13.webp'),
(44, 'Kurti', '', 'Summer collection', 'In Stock', 2400, 2, '2', 5, 'img1-15.webp,img2-15.webp,img3-15.webp,img4-15.web'),
(45, 'Short shirt', '', 'New Arrival', 'In Stock', 5000, 2, '2', 5, 'img1-16.webp,img2-16.webp,img3-16.webp,img4-16.web'),
(47, 'T Shirt Jeans', '', 'Pure Cotton ', 'Out of Stock', 5500, 1, '11', 1, 'westmen2-1.webp'),
(48, 'T Shirt Jean', '', 'Cotton Clothes', 'Out of Stock', 4500, 1, '11', 1, 'westmen3-1.webp'),
(49, 'T Shirt Jean', '', 'Cotton Cloth', 'In Stock', 5700, 1, '11', 1, 'westmen4-1.webp'),
(50, 'Kurta Pajama', '', 'Silk', 'In Stock', 6600, 3, '17', 3, 'kideast1-1.webp,'),
(51, 'Summer Clothing', '', 'Easy and relaxing', 'Out of Stock', 4500, 3, '16', 3, 'kidwest1-1.webp'),
(52, 'T Shirt Shorts', '', 'Cotton', 'In Stock', 3500, 3, '16', 3, 'kidwest3-1.webp'),
(53, 'Lawn Suit', '', 'cotton', 'In Stock', 4800, 2, '2', 2, 'westwomen1-1.webp'),
(54, 'Lawn Suit', '', 'cotton', 'Out of Stock', 5500, 2, '2', 2, 'westwomen2-1.webp'),
(55, 'Lawn Suit', '', 'cotton', 'In Stock', 6400, 2, '2', 2, 'westwomen3-1.webp'),
(56, 'Shalwar Kameez WaistCoat', '', 'Waist Coat for Men', 'In Stock', 6500, 1, '11', 4, 'newarr1.webp,newarr1.webp,newarr1-1.webp,newarr1-2'),
(57, 'Blue Kameez Shalwar', '', 'Waist  Coat', 'Out of Stock', 5000, 1, '11', 4, 'newarr2.webp,newarr2-2.webp,newarr2-3.webp'),
(58, 'Kameez shalwar', '', 'Waist Coat', 'In Stock', 6000, 1, '11', 4, 'newarr3.webp,newarr3-2.webp'),
(59, 'Stitched Kurti Women', '', 'Stitched', 'In Stock', 5640, 2, '1', 6, 'deal1-1.webp,deal1-2.webp,deal1-3.webp'),
(60, 'Women Stitched Kurti', '', 'stitched', 'In Stock', 2620, 2, '2', 6, 'deal3-1.webp,deal3-2.webp,deal3-3.webp,deal3-4.web'),
(61, 'Women Stitched Three Pcs Suit', '', 'stitched', 'Out of Stock', 5490, 2, '2', 6, 'deal2-1.webp,deal2-2.webp,deal2-3.webp'),
(62, 'Regular Fit Monotone Shirt', '', 'Shirts', 'In Stock', 1590, 1, '10', 5, 'meneast4-1.webp,meneast4-2.webp,meneast4-3.webp,me'),
(63, 'Check Shirt Red', '', 'Shirts', 'In Stock', 1890, 1, '10', 5, 'meneast3-1.webp,meneast3-2.webp,meneast3-3.webp,me'),
(64, 'Check Shirt Black', '', 'shirts', 'In Stock', 2390, 1, '10', 5, 'meneast2-1.webp,meneast2-2.webp,meneast2-3.webp,me'),
(65, 'Check Shirt Maroon', '', 'shirts', 'Out of Stock', 1470, 1, '10', 5, 'meneast1-1.webp,meneast1-2.webp,meneast1-3.webp,me'),
(66, 'Black Cotton Kurta', '', 'cotton', 'In Stock', 3890, 1, '11', 5, 'menwest1-1.webp,menwest1-2.webp,menwest1-3.webp'),
(67, 'Purple Cotton Kurta', '', 'cotton', 'In Stock', 4290, 1, '11', 5, 'menwest2-1.webp,menwest2-2.webp,menwest2-3.webp'),
(68, 'Light Brown Kurta', '', 'Cotton', 'In Stock', 4390, 1, '11', 5, 'menwest3-1.webp,menwest3-2.webp,menwest3-3.webp'),
(69, 'Camel Cotton Kurta', '', 'Cotton', 'In Stock', 4690, 1, '11', 5, 'menwest4-1.webp,menwest4-2.webp,menwest4-3.webp'),
(70, 'Pack of two Shirts', '', 'shirts', 'In Stock', 2990, 3, '17', 5, 'kid1-1.webp,kid1-2.webp,kid1-3.webp'),
(71, 'Pack of two shirts', '', 'shirts', 'in Stock', 3690, 3, '17', 5, 'kid2-1.webp,kid2-2.webp,kid2-3.webp,kid2-4.webp'),
(72, 'Pack of Two Shirts', '', 'shirts', 'Out of Stock', 3500, 3, '17', 5, 'kid3-1.webp,kid3-2.webp,kid3-3.webp,kid3-4.webp'),
(73, 'Pack of Three Shirts', '', 'shirts', 'In Stock', 4500, 3, '17', 5, 'kid4-1.webp,kid4-2.webp,kid4-3.webp,kid4-4.webp,ki'),
(74, 'White Shalwar Kameez', '', 'Cotton', 'In Stock', 2490, 3, '16', 5, 'eastkid4-1.webp,eastkid4-2.webp,eastkid4-3.webp'),
(75, 'Maroon Shalwar Kameez', '', 'Cotton', 'In Stock', 2590, 3, '16', 5, 'eastkid3-1.webp,eastkid3-2.webp,eastkid3-3.webp'),
(76, 'Charcoal Coloured Shalwar Kameez', '', 'Cotton', 'In Stock', 3290, 3, '16', 5, 'eastkid1-1.webp,eastkid1-2.webp,eastkid1-3.webp'),
(77, 'Black Shalwar Kameez', '', 'cotton ', 'In Stock', 3590, 3, '16', 5, 'eastkid2-1.webp,eastkid2-2.webp'),
(78, 'Lawn Suit', 'Small,Medium,Large', 'Summer Collection', 'In Stock', 5000, 2, '1', 5, 'deal2-1.webp,deal2-2.webp,deal2-3.webp'),
(79, 'Lawn Suit', 'Small,Medium,Large', 'Summer Collection', 'In Stock', 5000, 2, '1', 5, 'deal2-1.webp,deal2-2.webp,deal2-3.webp'),
(80, 'Lawn Suit', 'Small,Medium,Large', 'Summer Collection', 'In Stock', 5000, 2, '1', 5, 'deal2-1.webp,deal2-2.webp,deal2-3.webp'),
(81, 'Lawn Suit', '', 'Summer Collection', 'In Stock', 5000, 3, '16', 5, 'deal2-1.webp,deal2-2.webp,deal2-3.webp'),
(84, 'Kids kurta', 'Small,Medium,Large,', 'Summer Collection', 'In Stock', 45, 1, '10', 5, 'eastkid1-1.webp,eastkid1-2.webp,eastkid1-3.webp,ea');

-- --------------------------------------------------------

--
-- Table structure for table `status_tbl`
--

CREATE TABLE `status_tbl` (
  `s_id` int(11) NOT NULL,
  `s_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_tbl`
--

INSERT INTO `status_tbl` (`s_id`, `s_status`) VALUES
(1, 'Bestselling'),
(2, 'Trend'),
(3, 'Toprated'),
(4, 'New Arrival'),
(5, 'Sale'),
(6, 'Deal of the day');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory_tbl`
--

CREATE TABLE `subcategory_tbl` (
  `sc_id` int(11) NOT NULL,
  `sc_name` varchar(50) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory_tbl`
--

INSERT INTO `subcategory_tbl` (`sc_id`, `sc_name`, `c_id`) VALUES
(1, 'Eastern Wear', 2),
(2, 'Western Wear', 2),
(10, 'Eastern Wear', 1),
(11, 'Western Wear', 1),
(16, 'Eastern Wear', 3),
(17, 'Western Wear', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_role` varchar(50) NOT NULL,
  `u_phone` varchar(12) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_password` varchar(50) NOT NULL,
  `u_address` varchar(200) NOT NULL,
  `u_country` varchar(50) NOT NULL,
  `u_city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`u_id`, `u_name`, `u_role`, `u_phone`, `u_email`, `u_password`, `u_address`, `u_country`, `u_city`) VALUES
(5, 'Smoky', 'customer', '0331-9212146', 'sami@gmail.com', '4f78b8f5fe033b8c04212076aef0d317', 'Gulshan e Maymar', 'Pakistan', 'Karachi'),
(6, 'AnabiaZeeshan', 'customer', '1234-5675874', 'anabia@gmail.com', '3fe9f769fc60ccf25cf7a51a75fac0b8', 'abc', 'Pakistan', 'City'),
(7, 'anabia', 'customer', '0311-1234567', 'bia@gmail.com', '3fe9f769fc60ccf25cf7a51a75fac0b8', 'XYZ', 'Pakistan', 'Karachi'),
(13, 'admin', 'admin', '', 'admin@gmail.com', 'admin123', '', '', ''),
(22, 'Maria', 'customer', '1234-4567890', 'bia@gmail.com', '3fe9f769fc60ccf25cf7a51a75fac0b8', 'kara', 'larachi', 'karachgi'),
(23, 'Jannat', 'customer', '1234-4567890', 'alicia@gmail.com', '39c1e72eea710930ce72aca6bcc107aa', 'kara', 'larachi', 'karachgi'),
(24, 'Bazan', 'customer', '1234-4567890', 'bia@gmail.com', '3fe9f769fc60ccf25cf7a51a75fac0b8', 'kara', 'larachi', 'karachgi'),
(25, 'Hamza', 'customer', '1234-4567890', 'bia@gmail.com', '3fe9f769fc60ccf25cf7a51a75fac0b8', 'kara', 'larachi', 'karachgi'),
(26, 'Usman', 'customer', '1234-4567890', 'usman@gmail.com', '3fe9f769fc60ccf25cf7a51a75fac0b8', 'kara', 'larachi', 'karachgi'),
(27, 'Ali', 'customer', '1234-4567890', 'bia@gmail.com', '3fe9f769fc60ccf25cf7a51a75fac0b8', 'kara', 'larachi', 'karachgi'),
(28, 'Amna', 'customer', '1234-4567890', 'bia@gmail.com', '3fe9f769fc60ccf25cf7a51a75fac0b8', 'kara', 'larachi', 'karachgi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_name` (`name`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `status_tbl`
--
ALTER TABLE `status_tbl`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `subcategory_tbl`
--
ALTER TABLE `subcategory_tbl`
  ADD PRIMARY KEY (`sc_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `unique_name` (`u_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `new`
--
ALTER TABLE `new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `status_tbl`
--
ALTER TABLE `status_tbl`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subcategory_tbl`
--
ALTER TABLE `subcategory_tbl`
  MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
