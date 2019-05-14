-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 11, 2019 at 08:57 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce_batch`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_manufacturer`
--

CREATE TABLE IF NOT EXISTS `product_manufacturer` (
  `manufacturer_id` int(5) NOT NULL AUTO_INCREMENT,
  `manufacturer_name` varchar(100) NOT NULL,
  `manufacturer_description` varchar(100) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`manufacturer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product_manufacturer`
--

INSERT INTO `product_manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_description`, `publication_status`) VALUES
(1, 'Ethnic Designer Wear', 'Ethnic Designer Wear Indian Salwar Kamiz', 1),
(2, 'Hues Attire ', 'Hues Attire Indian Designer Collection', 1),
(3, 'LSM Sticherry Embroidered Kurties Kollection - 2013', 'LSM Sticherry Embroidered Kurties Kollection Pakistani Lawn', 1),
(4, 'Riva Heavy Party Wear ', 'Riva Heavy Party Wear ', 1),
(5, 'Fiza Heavy Party Wear ', 'Fiza Heavy Party Wear ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(5) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `admin_email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `admin_password` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Nazim', 'nazim@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Rashed', 'rashedcw@hotmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba'),
(3, 'babu', 'babu@gmail.com', '1adbb3178591fd5bb0c248518f39bf6d');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(5) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `category_description` text CHARACTER SET utf8 NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `category_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`, `category_datetime`) VALUES
(1, 'Electronics', 'Electronics Item, Mobile, Laptop, TV, etc.', 1, '2019-01-29 08:28:45'),
(2, 'Computing & Gaming ', 'Hp Envy 17 Touch Smart Series', 1, '2019-01-29 08:30:50'),
(3, 'Office Furniture', 'Office Chair, Executive chair, Furniture, Home chair', 1, '2019-01-29 08:31:51'),
(4, 'Fashion Accessories ', 'Nike Tiempo Natural IV Indoor', 1, '2019-01-29 08:32:49'),
(8, 'Hues Attire ', 'Hues Attire Indian Designer Collection', 1, '2019-02-01 03:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `address` text NOT NULL,
  `zip_code` varchar(5) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `newslatter` tinyint(1) NOT NULL,
  `activation_status` tinyint(1) NOT NULL DEFAULT '0',
  `block_customer` tinyint(1) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `first_name`, `last_name`, `email_address`, `password`, `mobile_no`, `address`, `zip_code`, `city`, `country`, `state`, `newslatter`, `activation_status`, `block_customer`, `created_date`) VALUES
(1, 'Alif', 'Ahmed', 'alif.ahmed@gmail.com', '96e79218965eb72c92a549dd5a330112', '01712742217', 'Ishurdi', '6622', 'Pabna', 'Bangladesh', 'Rajshahi', 0, 0, 0, '2019-02-12 04:06:13'),
(9, 'Golam', 'Kibria', 'kibria@gmail.com', '1234', '01918681670', 'vsdfgdfbf', '1208', 'dhaka', 'BD', 'MT', 1, 1, 0, '2019-02-12 16:30:58'),
(4, 'Miskat', 'Tasnova', 'miskat.tasnova@yahoo.com', '', '98765433', 'Dhaak', '9988', 'Dhaak', 'BB', 'AL', 1, 1, 0, '2019-02-18 04:00:49'),
(5, 'Md. Samsul', 'Alam', 'samsul.alam@gmail.com', '111111', '01711231142', 'Ishurdi', '6622', 'Dhaka', 'BD', 'AL', 1, 1, 0, '2019-02-23 04:50:40'),
(6, 'Zahidul', 'Islam', 'zahidul.islam@yahoo.com', '1234', '098765432', 'Pabna', '2233', 'Pabna', 'BD', 'AL', 1, 1, 0, '2019-02-20 03:05:12'),
(7, 'Mahbub', 'Khan', 'mahbub@gmail.com', '111111', '01720400049', 'Dhaka', '8899', 'Dhaka', 'BD', 'AL', 1, 1, 0, '2019-02-18 04:32:39'),
(8, 'Abdullah', 'Al Mahmud', 'mahmud@yahoo.com', '111111', '0198765432', 'Dhaka', '9999', 'Dhaka', 'BD', 'AL', 1, 1, 0, '2019-02-19 04:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(5) NOT NULL,
  `shipping_id` int(7) NOT NULL,
  `payment_id` int(5) NOT NULL,
  `invoice_no` varchar(15) NOT NULL,
  `order_status` tinyint(1) NOT NULL COMMENT 'order_status=0 pending order_status=1 confirm order_status=2 cancle',
  `order_total` float(10,2) NOT NULL,
  `order_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `due_date` varchar(20) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `invoice_no`, `order_status`, `order_total`, `order_date_time`, `due_date`) VALUES
(1, 6, 2, 1, '', 0, 510.00, '2019-02-21 04:51:22', ''),
(2, 6, 2, 2, '', 0, 630.00, '2019-02-21 04:53:42', ''),
(3, 7, 3, 3, '', 0, 110.00, '2019-02-21 04:35:16', ''),
(4, 7, 3, 4, '', 0, 110.00, '2019-02-21 04:36:55', ''),
(5, 7, 3, 5, '', 0, 110.00, '2019-02-21 04:38:28', ''),
(6, 7, 3, 6, '', 0, 110.00, '2019-02-21 04:44:02', ''),
(7, 8, 4, 7, '', 0, 1750.00, '2019-02-01 04:06:18', ''),
(8, 8, 4, 8, '', 0, 1750.00, '2019-02-01 04:07:25', ''),
(9, 8, 4, 9, '', 0, 1750.00, '2019-02-01 04:09:27', ''),
(10, 8, 4, 10, 'inv-2019-10', 0, 10750.00, '2019-02-01 04:22:02', ''),
(11, 8, 4, 11, 'inv-2019-11', 0, 17500.00, '2019-02-01 05:26:14', '2019-04-03'),
(12, 9, 5, 12, 'inv-2019-12', 0, 200.00, '2019-01-12 16:32:28', '2019-02-07'),
(13, 9, 5, 13, 'inv-2019-13', 0, 200.00, '2019-01-12 16:32:35', '2019-02-07'),
(14, 9, 5, 14, 'inv-2019-14', 0, 200.00, '2019-01-12 16:32:40', '2019-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE IF NOT EXISTS `tbl_order_details` (
  `order_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(3) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_sales_quantity` int(3) NOT NULL,
  PRIMARY KEY (`order_details_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_price`, `product_name`, `product_sales_quantity`) VALUES
(1, 1, 46, 150.00, 'LSM Stitchery Kurti ', 1),
(2, 1, 48, 180.00, 'Hues Attire 11002', 2),
(3, 2, 46, 150.00, 'LSM Stitchery Kurti ', 1),
(4, 2, 48, 180.00, 'Hues Attire 11002', 2),
(5, 2, 40, 120.00, 'Captivated Green Stylish Salwar Kameez', 1),
(6, 3, 31, 110.00, 'Alluring Colorful Party Selwar Kameez', 1),
(7, 4, 31, 110.00, 'Alluring Colorful Party Selwar Kameez', 1),
(8, 5, 31, 110.00, 'Alluring Colorful Party Selwar Kameez', 1),
(9, 6, 31, 110.00, 'Alluring Colorful Party Selwar Kameez', 1),
(10, 7, 35, 150.00, 'Beautiful Black Embroidered Salwar Kameez', 5),
(11, 7, 30, 100.00, 'Alluring black and Offwhite  Impressive Party  Salwar Kamiz', 10),
(12, 8, 35, 150.00, 'Beautiful Black Embroidered Salwar Kameez', 5),
(13, 8, 30, 100.00, 'Alluring black and Offwhite  Impressive Party  Salwar Kamiz', 10),
(14, 9, 35, 150.00, 'Beautiful Black Embroidered Salwar Kameez', 5),
(15, 9, 30, 100.00, 'Alluring black and Offwhite  Impressive Party  Salwar Kamiz', 10),
(16, 10, 35, 150.00, 'Beautiful Black Embroidered Salwar Kameez', 5),
(17, 10, 30, 100.00, 'Alluring black and Offwhite  Impressive Party  Salwar Kamiz', 100),
(18, 11, 35, 150.00, 'Beautiful Black Embroidered Salwar Kameez', 50),
(19, 11, 30, 100.00, 'Alluring black and Offwhite  Impressive Party  Salwar Kamiz', 100),
(20, 12, 41, 110.00, 'Ethereal Embroidered Red Salwar Kameez', 1),
(21, 12, 47, 90.00, 'LSM Stitchery Kurti ', 1),
(22, 13, 41, 110.00, 'Ethereal Embroidered Red Salwar Kameez', 1),
(23, 13, 47, 90.00, 'LSM Stitchery Kurti ', 1),
(24, 14, 41, 110.00, 'Ethereal Embroidered Red Salwar Kameez', 1),
(25, 14, 47, 90.00, 'LSM Stitchery Kurti ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `payment_id` int(7) NOT NULL AUTO_INCREMENT,
  `payment_type` varchar(20) NOT NULL,
  `payment_status` tinyint(1) NOT NULL COMMENT '0=pending 1=confirm 2=cancel',
  `payment_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_type`, `payment_status`, `payment_date_time`) VALUES
(1, 'cash_on_delevary', 0, '2019-02-25 04:51:22'),
(2, 'cash_on_delevary', 0, '2019-02-25 04:53:42'),
(3, 'cash_on_delevary', 0, '2019-02-27 04:35:16'),
(4, 'cash_on_delevary', 0, '2019-02-27 04:36:55'),
(5, 'cash_on_delevary', 0, '2019-02-27 04:38:28'),
(6, 'cash_on_delevary', 0, '2019-02-27 04:44:02'),
(7, 'cash_on_delevary', 0, '2019-03-01 04:06:18'),
(8, 'cash_on_delevary', 0, '2019-03-01 04:07:25'),
(9, 'cash_on_delevary', 0, '2019-03-01 04:09:27'),
(10, 'cash_on_delevary', 0, '2019-03-01 04:22:02'),
(11, 'cash_on_delevary', 0, '2019-03-01 05:26:14'),
(12, 'paypal', 0, '2019-02-12 16:32:28'),
(13, '0', 0, '2019-02-12 16:32:35'),
(14, 'cash_on_delevary', 0, '2019-02-13 16:32:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` int(5) NOT NULL AUTO_INCREMENT,
  `category_id` int(5) NOT NULL,
  `manufacturer_id` int(5) NOT NULL,
  `product_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `product_model` varchar(100) NOT NULL,
  `product_price` decimal(15,2) NOT NULL DEFAULT '0.00',
  `product_quantity` int(5) NOT NULL,
  `product_reorder_level` int(3) NOT NULL,
  `product_short_description` text CHARACTER SET utf8 NOT NULL,
  `product_long_description` text CHARACTER SET utf8 NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `product_created_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `manufacturer_id`, `product_name`, `product_model`, `product_price`, `product_quantity`, `product_reorder_level`, `product_short_description`, `product_long_description`, `publication_status`, `product_created_datetime`) VALUES
(30, 4, 1, 'valve cover (incl. sleeve, metal insert, oil way insert, logo sticker', 'DE002', 120.00, -190, 0, 's elementum egestas at cursus tortor. Pellentesque pulvinar molestie tortor, at pulvinar risus elementum at. Aenean sodales justo nibh, vitae ornare magna semper vulputate. Proin at urna enim. Fusce pharetra lacus felis, vitae rhoncus ante vulputate ac. Duis nec auctor erat. Maecenas sit amet libero mauris ', '<p>s elementum egestas at cursus tortor. Pellentesque pulvinar molestie tortor, at pulvinar risus elementum at. Aenean sodales justo nibh, vitae ornare magna semper vulputate. Proin at urna enim. Fusce pharetra lacus felis, vitae rhoncus ante vulputate ac. Duis nec auctor erat. Maecenas sit amet libero mauris .</p>\r\n', 1, '2019-02-17 08:42:36'),
(31, 4, 2, 'ventilation tube', 'LSM--01', 110.00, 42, 0, 'A Ut a odio quis tellus elementum egestas at cursus tortor. Pellentesque pulvinar molestie tortor, \r\nat pulvinar risus elementum at. Aenean sodales justo nibh, vitae ornare magna semper vulputate.\r\n Proin at urna enim. Fusce pharetra lacus felis, \r\nvitae rhoncus ante vulputate ac. Duis nec auctor erat. Maecenas sit amet libero mauris ', '<p>A Ut a odio quis tellus elementum egestas at cursus tortor. Pellentesque pulvinar molestie tortor, \r\nat pulvinar risus elementum at. Aenean sodales justo nibh, vitae ornare magna semper vulputate.\r\n Proin at urna enim. Fusce pharetra lacus felis, \r\nvitae rhoncus ante vulputate ac. Duis nec auctor erat. Maecenas sit amet libero mauris .</p>\r\n', 1, '2019-02-17 08:44:59'),
(35, 2, 3, ' rubber grommet for ventilation tube', 'valve intake (single)', 150.00, -20, 0, 'elementum egestas at cursus tortor. Pellentesque pulvinar molestie tortor,', '<p>Ut a odio quis tellus elementum egestas at cursus tortor. Pellentesque pulvinar molestie tortor, \r\nat pulvinar risus elementum at. Aenean sodales justo nibh, vitae ornare magna semper vulputate.\r\n Proin at urna enim. Fusce pharetra lacus felis, \r\nvitae rhoncus ante vulputate ac. Duis nec auctor erat. Maecenas sit amet libero mauris </p>\r\n', 1, '2019-02-14 10:18:21'),
(40, 3, 4, 'spring washer with spring centring (set of 4)', 'valve exhaust (single)', 120.00, 21, 0, 'camshaft intake complete (incl. ball bearings, wheel sprocket)\r\nB 19 camshaft exhaust complete (incl. ball bearings, wheel sprocket)', '<p>ntum at. Aenean sodales justo nibh, vitae ornare magna semper vulputate.\r\n Proin at urna enim. Fusce pharetra lacus felis, \r\nvitae rhoncus ante vulputate ac. Duis nec auctor erat. Maecenas sit amet libero mauris <p>', 1, '2019-01-31 12:34:51'),
(41, 1, 1, 'B 12 flat tappet Ø 26.5mm (single)', 'DE003', 130.00, 17, 0, 'DE003- Pure Georgette materials, which nicely made embroidery work and  two contrast color gives a vibrant looks. Kameez can be customized in any size and pattern, In this collection, you’ll see ample embroidery work on different panels of the shirt like on neck, front , back and on sleeves.', '<p>Dionne Collection :DE003- Pure Georgette materials, which nicely made embroidery work and&nbsp; two contrast color gives a vibrant looks. Kameez can be customized in any size and pattern, In this collection, you&rsquo;ll see ample embroidery work on different panels of the shirt like on neck, front , back and on sleeves. Having a beautiful sequence and gold zari work on sleeves and yoke. Bit hand work on georgette dupatta gives amazing look.Slight variation on color is possible because &nbsp;of photography &nbsp;limitation .Dionne collection brings you the luxury designer&#39;s collection of exclusive party wear.</p>\r\n', 1, '2019-02-01 12:41:03'),
(46, 2, 3, 'screws M6x40 10.9, M6x50 10.9, M6x60 12.9 incl. washer', 'LSM-K 04', 150.00, 20, 0, ' tellus elementum egestas at cur', '<p> vinar risus elementum at. Aenean sodales justo nibh, vitae ornare magna semper vulputate.\r\n Proin at urna enim. Fusce pharetra lacus felis, \r\nvitae rhoncus ante vulputate ac. Duis nec auctor erat. Ma\r\n\r\n\r\n.</p>\r\n\r\n<p>&nbsp;\r\n<p>&nbsp;</p>\r\n</p>\r\n', 1, '2019-02-03 23:34:43'),
(47, 8, 3, 'cam bearing support big', 'LSM- K 05', 100.00, 7, 0, '56101-0K090 F. WINDSCREEN TOYOTA INNOVA 06 56101-0K090 1 14.00 21.00 0.5348', '<p>\r\nINNOVA ''06 68104-0K060 1\r\n68103-0K060 GLASS SUB ASSY RH , REAR DOOR INNOVA ''06 68103-0K060 1 2.43 2.53 0.1649\r\n11 56101-0K090 F. WINDSCREEN TOYOTA INNOVA 06 56101-0K090 1 14.00 21.00 0.5348\r\n12 68105-0K030 GLASS BACK DOOR INNOVA ''06 68105-0K030\r\n.</p>\r\n\r\n<p>&nbsp;\r\n<p>&nbsp;</p>\r\n</p>\r\n', 1, '2019-02-03 23:37:26'),
(48, 8, 1, 'valve clearance adjusting shim (single)\r\n', 'B 12 flat tappet ? 26.5mm (single)', 180.00, 0, 0, 'camshaft intake complete (incl. ball bearings, wheel sprocket)\r\nB 19 camshaft exhaust complete (incl. ball bearings, wheel sprocket)\r\nB 20 timing chain tensioner (incl. screws M6x20)', '<p>13 68105-0K040 REAR GATE GLASS TOYOTA INNOVA ''04-''05 68105-0K040 1 5.00 15.00 0.3030\r\n14 62120-0K010 WINDOW ASSY , FRONT SIDE FIX LH INNOVA ''06 62120-0K010 1\r\n62110-0K010 WINDOW ASSY , FRONT SIDE FIX RH INNOVA ''06 62110-0K010 1 0.0097\r\n15 53201-0K020 RADIATOR SUPPORT</p>\r\n', 1, '2014-02-03 23:40:34'),
(49, 8, 2, 'Banner', '10', 10.00, 100, 25, 'Short Description', '<p>Long Description</p>\r\n', 1, '2019-02-08 03:36:36'),
(50, 8, 2, 'Banner', '10', 10.00, 100, 25, 'Short Description', '<p>Long Description</p>\r\n', 1, '2019-02-08 03:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_image`
--

CREATE TABLE IF NOT EXISTS `tbl_product_image` (
  `id_image` int(5) NOT NULL AUTO_INCREMENT,
  `product_id` int(5) NOT NULL,
  `product_image` varchar(100) CHARACTER SET utf8 NOT NULL,
  `default_image` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_image`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `tbl_product_image`
--

INSERT INTO `tbl_product_image` (`id_image`, `product_id`, `product_image`, `default_image`) VALUES
(23, 30, 'img/product_images/02.jpg', 0),
(24, 30, 'img/product_images/03.jpg', 0),
(25, 30, 'img/product_images/04.jpg', 0),
(26, 30, 'img/product_images/05.jpg', 1),
(27, 31, 'img/product_images/06.jpg', 0),
(28, 31, 'img/product_images/07.jpg', 1),
(29, 35, 'img/product_images/09.jpg', 0),
(30, 35, 'img/product_images/10.jpg', 1),
(36, 38, 'img/product_images/171.jpg', 0),
(37, 38, 'img/product_images/211.jpg', 0),
(38, 40, 'img/product_images/16.jpg', 1),
(39, 40, 'img/product_images/17.jpg', 0),
(40, 40, 'img/product_images/18.jpg', 0),
(41, 41, 'img/product_images/021.jpg', 1),
(42, 41, 'img/product_images/01.jpg', 0),
(43, 41, 'img/product_images/041.jpg', 0),
(44, 41, 'img/product_images/031.jpg', 0),
(45, 46, 'img/product_images/051.jpg', 1),
(46, 46, 'img/product_images/061.jpg', 0),
(47, 46, 'img/product_images/071.jpg', 0),
(48, 47, 'img/product_images/091.jpg', 1),
(49, 47, 'img/product_images/08.jpg', 0),
(50, 47, 'img/product_images/101.jpg', 0),
(51, 48, 'img/product_images/hue1.jpg', 1),
(52, 48, 'img/product_images/hue2.jpg', 0),
(53, 48, 'img/product_images/hue3.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_special_rate`
--

CREATE TABLE IF NOT EXISTS `tbl_product_special_rate` (
  `product_special_id` int(5) NOT NULL AUTO_INCREMENT,
  `product_id` int(5) NOT NULL,
  `product_special_price` decimal(15,2) NOT NULL DEFAULT '0.00',
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  PRIMARY KEY (`product_special_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_product_special_rate`
--

INSERT INTO `tbl_product_special_rate` (`product_special_id`, `product_id`, `product_special_price`, `date_start`, `date_end`) VALUES
(6, 30, 100.00, '2019-02-21', '2019-02-28'),
(7, 41, 110.00, '2019-02-10', '2019-02-28'),
(8, 47, 90.00, '2019-02-01', '2019-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE IF NOT EXISTS `tbl_shipping` (
  `shipping_id` int(7) NOT NULL AUTO_INCREMENT,
  `customer_id` int(5) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `zip_code` varchar(5) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`shipping_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `customer_id`, `full_name`, `email_address`, `zip_code`, `city`, `country`, `state`, `mobile_no`, `address`) VALUES
(1, 5, 'Md. Samsul Alam', 'samsul.alam@gmail.com', '6622', 'Dhaka', 'BD', 'AL', '01711231142', 'Ishurdi'),
(2, 6, 'Zahidul Islam', 'zahidul.islam@yahoo.com', '2233', 'Pabna', 'BD', 'AL', '098765432', 'Pabna'),
(3, 7, 'Zahid Hasan', 'zahid@gmail.com', '8899', 'Dhaka', 'BD', 'AL', '01720400049', 'Dhaka'),
(4, 8, 'Abdullah Al Mahmud', 'mahmud@yahoo.com', '9999', 'Dhaka', 'BD', 'AL', '0198765432', 'Dhaka'),
(5, 9, 'Mahbubur', 'mahbub@gmail.com', '1208', 'dhaka', 'BD', 'MT', '01918681670', 'vsdfgdfbf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
