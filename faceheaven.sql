-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 09:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faceheaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`email`, `password`) VALUES
('divyankajaiswalz2002@gmail.com', 'Divyanka');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(55, 2, '127.0.0.1', -1, 3),
(56, 1, '127.0.0.1', -1, 1),
(59, 4, '::1', 8, 1),
(61, 4, '127.0.0.1', -1, 1),
(65, 43, '::1', 10, 1),
(66, 44, '::1', 10, 1),
(77, 3, '::1', 7, 4),
(78, 6, '::1', 7, 1),
(80, 4, '::1', 7, 1),
(82, 21, '::1', -1, 1),
(83, 20, '::1', -1, 1),
(90, 28, '::1', 7, 1),
(91, 32, '::1', 7, 1),
(92, 33, '::1', 7, 1),
(93, 31, '::1', 7, 1),
(94, 3, '::1', -1, 4),
(147, 36, '::1', 6, 1),
(153, 2, '127.0.0.1', 5, 3),
(154, 1, '127.0.0.1', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(1, 'Serum', 1),
(2, 'Moisturizers', 1),
(3, 'Cleansers', 1),
(4, 'FaceWash', 1),
(6, 'FaceMask', 1),
(7, 'SkinToner', 1),
(8, 'Sunscream', 1),
(9, 'FaceScrub', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `oid` int(20) NOT NULL,
  `ordernumber` int(50) NOT NULL,
  `customername` varchar(50) NOT NULL,
  `customerphonenumber` bigint(10) NOT NULL,
  `customeremail` varchar(50) NOT NULL,
  `customeraddress` varchar(255) NOT NULL,
  `billamount` int(100) NOT NULL,
  `orderdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`oid`, `ordernumber`, `customername`, `customerphonenumber`, `customeremail`, `customeraddress`, `billamount`, `orderdate`) VALUES
(1, 123, 'Ananya', 87565454, 'anugyakri@gmail.com', 'hajiganj', 9780, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order_new`
--

CREATE TABLE `customer_order_new` (
  `sno` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_address` varchar(500) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `customer_phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_order_new`
--

INSERT INTO `customer_order_new` (`sno`, `customer_name`, `customer_email`, `customer_address`, `order_id`, `customer_phone`) VALUES
(1, 'sg not new', 'sg@gmail.com', '50 new address', '168119671917022969365', '9999889999');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_man`
--

CREATE TABLE `delivery_man` (
  `email` varchar(70) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_man`
--

INSERT INTO `delivery_man` (`email`, `password`) VALUES
('divyankajaiswalz2002@gmail.com', 'Divyanka');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `message`) VALUES
('Aakash', 'Aakash@gmail.com', 'i like it'),
('divya', 'divya@gmail.com', 'product is awsome');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL,
  `order_time` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `order_total` varchar(50) NOT NULL,
  `delivery_charges` int(100) NOT NULL DEFAULT 100,
  `sub_total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`, `order_time`, `order_total`, `delivery_charges`, `sub_total`) VALUES
(1, 1, 1, 1, '9L434522M7706801A', 'Completed', '2023-02-26 19:40:38', '', 100, ''),
(2, 1, 2, 1, '9L434522M7706801A', 'Completed', '2023-02-26 19:40:38', '', 100, ''),
(3, 1, 3, 1, '9L434522M7706801A', 'Completed', '2023-02-26 19:40:38', '', 100, ''),
(4, 1, 1, 1, '8AT7125245323433N', 'Completed', '2023-02-26 19:40:38', '', 100, ''),
(5, 7, 6, 1, '', '', '2023-02-26 19:40:38', '', 100, ''),
(6, 7, 4, 1, '', '', '2023-02-26 19:40:38', '', 100, ''),
(7, 7, 12, 1, '', '', '2023-02-26 19:40:38', '', 100, ''),
(8, 7, 2, 1, '', '', '2023-02-26 19:40:38', '', 100, ''),
(9, 7, 2, 1, '167742022519575623957', 'COD', '2023-02-26 19:40:38', '', 100, ''),
(10, 7, 1, 1, '167742022519575623957', 'COD', '2023-02-26 19:40:38', '', 100, ''),
(11, 7, 4, 1, '167742022519575623957', 'COD', '2023-02-26 19:40:38', '', 100, ''),
(12, 7, 2, 1, '16774202959123587297', 'COD', '2023-02-26 19:40:38', '', 100, ''),
(13, 7, 1, 1, '16774202959123587297', 'COD', '2023-02-26 19:40:38', '', 100, ''),
(14, 7, 4, 1, '16774202959123587297', 'COD', '2023-02-26 19:40:38', '', 100, ''),
(15, 7, 5, 1, '16774202959123587297', 'COD', '2023-02-26 19:40:38', '', 100, ''),
(16, 7, 11, 1, '16774202959123587297', 'COD', '2023-02-26 19:40:38', '', 100, ''),
(17, 7, 12, 1, '16774202959123587297', 'COD', '2023-02-26 19:40:38', '', 100, ''),
(18, 7, 2, 1, '16774212231970118747', 'COD', '2023-02-26 19:50:23', '', 100, ''),
(19, 7, 12, 1, '16774212231970118747', 'COD', '2023-02-26 19:50:23', '', 100, ''),
(20, 7, 10, 1, '16774212231970118747', 'COD', '2023-02-26 19:50:23', '', 100, ''),
(21, 7, 4, 1, '167742142319968913707', 'COD', '2023-02-26 19:53:43', '', 100, ''),
(22, 7, 2, 1, '167742142319968913707', 'COD', '2023-02-26 19:53:43', '', 100, ''),
(23, 7, 1, 1, '167742142319968913707', 'COD', '2023-02-26 19:53:43', '', 100, ''),
(24, 7, 12, 1, '167742142319968913707', 'COD', '2023-02-26 19:53:43', '', 100, ''),
(25, 7, 4, 1, '167742223620537853467', 'COD', '2023-02-26 20:07:16', '', 100, ''),
(26, 7, 7, 1, '167742223620537853467', 'COD', '2023-02-26 20:07:16', '', 100, ''),
(27, 7, 2, 1, '167742223620537853467', 'COD', '2023-02-26 20:07:16', '', 100, ''),
(28, 7, 1, 1, '16774246166028782837', 'Cash On Delivery', '2023-02-26 20:46:56', '', 100, ''),
(29, 7, 2, 1, '16774246166028782837', 'Cash On Delivery', '2023-02-26 20:46:56', '', 100, ''),
(30, 7, 4, 1, '16774246166028782837', 'Cash On Delivery', '2023-02-26 20:46:56', '', 100, ''),
(31, 7, 1, 1, '16774246166028782837', 'Cash On Delivery', '2023-02-26 20:46:56', '', 100, ''),
(32, 7, 2, 1, '16774246166028782837', 'Cash On Delivery', '2023-02-26 20:46:56', '', 100, ''),
(33, 7, 2, 1, '167836465721363401317', 'Cash On Delivery', '2023-03-09 17:54:17', '', 100, ''),
(34, 7, 3, 1, '167836465721363401317', 'Cash On Delivery', '2023-03-09 17:54:17', '', 100, ''),
(35, 7, 6, 1, '167836465721363401317', 'Cash On Delivery', '2023-03-09 17:54:17', '', 100, ''),
(36, 7, 21, 1, '167836465721363401317', 'Cash On Delivery', '2023-03-09 17:54:17', '', 100, ''),
(37, 7, 20, 1, '167836465721363401317', 'Cash On Delivery', '2023-03-09 17:54:17', '', 100, ''),
(38, 0, 1, 1, '16793988031629741647sg@gmail.com', 'Cash On Delivery', '2023-03-21 17:10:03', '', 100, ''),
(39, 0, 2, 1, '16793988031629741647sg@gmail.com', 'Cash On Delivery', '2023-03-21 17:10:03', '', 100, ''),
(40, 0, 3, 1, '16793988031629741647sg@gmail.com', 'Cash On Delivery', '2023-03-21 17:10:03', '', 100, ''),
(41, 0, 1, 1, '1679399350588955126sg@gmail.com', 'Cash On Delivery', '2023-03-21 17:19:10', '', 100, ''),
(42, 0, 2, 1, '1679399350588955126sg@gmail.com', 'Cash On Delivery', '2023-03-21 17:19:10', '', 100, ''),
(43, 0, 4, 1, '1679399350588955126sg@gmail.com', 'Cash On Delivery', '2023-03-21 17:19:10', '', 100, ''),
(44, 0, 20, 1, '1679399350588955126sg@gmail.com', 'Cash On Delivery', '2023-03-21 17:19:10', '', 100, ''),
(45, 0, 19, 1, '1679399350588955126sg@gmail.com', 'Cash On Delivery', '2023-03-21 17:19:10', '', 100, ''),
(46, 0, 22, 1, '1679399350588955126sg@gmail.com', 'Cash On Delivery', '2023-03-21 17:19:10', '', 100, ''),
(47, 0, 23, 1, '1679399350588955126sg@gmail.com', 'Cash On Delivery', '2023-03-21 17:19:10', '', 100, ''),
(48, 5, 2, 1, '16794935466288416415', 'Cash On Delivery', '2023-03-22 19:29:06', '', 100, ''),
(49, 5, 3, 1, '16794935466288416415', 'Cash On Delivery', '2023-03-22 19:29:06', '', 100, ''),
(50, 5, 1, 1, '16794935466288416415', 'Cash On Delivery', '2023-03-22 19:29:06', '', 100, ''),
(51, 5, 20, 1, '16794935466288416415', 'Cash On Delivery', '2023-03-22 19:29:06', '', 100, ''),
(52, 5, 21, 1, '16794935466288416415', 'Cash On Delivery', '2023-03-22 19:29:06', '', 100, ''),
(53, 5, 3, 1, '167949672917106996075', 'Cash On Delivery', '2023-03-22 20:22:09', '', 100, ''),
(54, 5, 2, 1, '167949672917106996075', 'Cash On Delivery', '2023-03-22 20:22:09', '', 100, ''),
(55, 5, 1, 1, '167949672917106996075', 'Cash On Delivery', '2023-03-22 20:22:09', '', 100, ''),
(56, 5, 2, 1, '16794968668292661285', 'Cash On Delivery', '2023-03-22 20:24:26', '', 100, ''),
(57, 5, 1, 1, '16794968668292661285', 'Cash On Delivery', '2023-03-22 20:24:26', '', 100, ''),
(58, 5, 2, 1, '16794969654744949415', 'Cash On Delivery', '2023-03-22 20:26:05', '', 100, ''),
(59, 5, 20, 1, '16794969654744949415', 'Cash On Delivery', '2023-03-22 20:26:05', '', 100, ''),
(60, 5, 43, 1, '16794972882893304915', 'Cash On Delivery', '2023-03-22 20:31:28', '', 100, ''),
(61, 5, 44, 1, '16794972882893304915', 'Cash On Delivery', '2023-03-22 20:31:28', '', 100, ''),
(62, 5, 45, 1, '16794972882893304915', 'Cash On Delivery', '2023-03-22 20:31:28', '', 100, ''),
(63, 5, 1, 1, '1679505138343507755', 'Cash On Delivery', '2023-03-22 22:42:18', '', 100, ''),
(64, 5, 2, 1, '1679505138343507755', 'Cash On Delivery', '2023-03-22 22:42:18', '', 100, ''),
(65, 5, 3, 1, '1679505138343507755', 'Cash On Delivery', '2023-03-22 22:42:18', '', 100, ''),
(66, 5, 3, 1, '167950546321165037865', 'Cash On Delivery', '2023-03-22 22:47:43', '', 100, ''),
(67, 5, 6, 1, '167950546321165037865', 'Cash On Delivery', '2023-03-22 22:47:43', '', 100, ''),
(68, 5, 3, 1, '167950814610530716525', 'Cash On Delivery', '2023-03-22 23:32:26', '', 100, ''),
(69, 5, 2, 1, '167950814610530716525', 'Cash On Delivery', '2023-03-22 23:32:26', '', 100, ''),
(70, 5, 4, 1, '167950814610530716525', 'Cash On Delivery', '2023-03-22 23:32:26', '', 100, ''),
(71, 5, 5, 1, '167950814610530716525', 'Cash On Delivery', '2023-03-22 23:32:26', '', 100, ''),
(72, 5, 6, 1, '167950814610530716525', 'Cash On Delivery', '2023-03-22 23:32:26', '', 100, ''),
(73, 5, 21, 1, '167950814610530716525', 'Cash On Delivery', '2023-03-22 23:32:26', '', 100, ''),
(74, 5, 20, 1, '167950814610530716525', 'Cash On Delivery', '2023-03-22 23:32:26', '', 100, ''),
(75, 5, 19, 1, '167950814610530716525', 'Cash On Delivery', '2023-03-22 23:32:26', '', 100, ''),
(76, 5, 3, 1, '167950862519658347515', 'Cash On Delivery', '2023-03-22 23:40:25', '', 100, ''),
(77, 5, 4, 1, '167950862519658347515', 'Cash On Delivery', '2023-03-22 23:40:25', '', 100, ''),
(78, 5, 2, 1, '167950862519658347515', 'Cash On Delivery', '2023-03-22 23:40:25', '', 100, ''),
(79, 2, 1, 1, '16798228456688273162', 'Cash On Delivery', '2023-03-26 14:57:25', '', 100, ''),
(80, 2, 3, 1, '16798228456688273162', 'Cash On Delivery', '2023-03-26 14:57:25', '', 100, ''),
(81, 5, 3, 4, '168119671917022969365', 'Cash On Delivery', '2023-04-11 12:35:19', '1650', 100, ''),
(82, 5, 2, 1, '168119671917022969365', 'Cash On Delivery', '2023-04-11 12:35:19', '1650', 100, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mrp` int(200) NOT NULL,
  `price` int(200) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `name`, `mrp`, `price`, `image`, `short_desc`, `description`, `meta_title`, `meta_desc`, `meta_keyword`, `status`) VALUES
(1, 1, 'Face Serum Vita C ', 345, 220, 'uploads/product_images/1.jpg', 'Vita C Face Serum for all skin types', 'Vita C Face Serum 20 ml/ 0.67 Floz provides skin a nourishing look.', 'Face Serum Vita C ', 'Face Serum including Vitamin C removes acne and helps to improves skin.', 'Face Serum Vita C ', 1),
(2, 1, 'Face Serum VitaminC', 400, 350, 'uploads/product_images/2.jpg', 'Vitamin C with Glycolic acid which enrich the skin and provides glow.', 'The serum is for all skin types.', 'It provides skin a natural look.', 'Vitamin C with Glycolic acid ', 'Vitamin C with Glycolic acid ', 1),
(3, 1, 'Vitamin C 20% E', 350, 300, 'uploads/product_images/3.jpg', 'Serum Vitamin C 20% E with Hyaluronic Acid. ', 'Night Face Serum for all skin types including Vitamin C 20% E with Hyaluronic Acid having 24K Gold.', 'Face Serum Vitamin C 20% E with Hyaluronic Acid. ', 'Night Face Serum for all skin types including Vitamin C 20% E with Hyaluronic Acid having 24K Gold.', 'Serum Vitamin C 20% E.', 1),
(4, 1, 'Face serum vitamin C 25%', 5645, 234, 'uploads/product_images/4.jpg', 'Face serum with vitamin C 25%', 'High protein Facial Serum with Ferulic Acid 1%,Hyaluronic Acid 1% and Alpha Arbutin 1% ', 'High protein Facial Serum ', 'Vitamin C serum 25%', 'Vitamin C serum 25%', 1),
(5, 1, 'Vita Rich C,E,B3,B5', 500, 350, 'uploads/product_images/5.jpg', 'Face Serum Vita Rich in C,E,B3,B5.', 'Face Serum Rich in Vitamins C,E,B3,B5 and Hyaluronic Acid which enriches the skin.', 'Face Serum Vita Rich in C,E,B3,B5.', 'Face Serum Vita Rich in C,E,B3,B5 and Hyaluronic Acid.', 'Face Serum Vita Rich in C,E,B3,B5.', 1),
(6, 1, 'Rose Hip', 700, 400, 'uploads/product_images/6.jpg', 'Rose Hip Serum', 'Face Serum Rose Hip with radiant glow and no parabeans and sulphates.', 'Rose Hip Serum', 'Rose Hip Serum ', 'Rose Hip Serum', 1),
(19, 1, 'Essence serum', 800, 450, 'uploads/product_images/7.jpg', '10% Vitamin C Essence Serum.', 'Face Serum with 10% Vitamin C with beautiful Essence.', '10% Vitamin C Essence Serum.', 'Face Serum with 10% Vitamin C and Essence.', '10% Vitamin C Essence Serum.', 1),
(20, 1, 'Vita C Face serum', 300, 250, 'uploads/product_images/8.jpg', 'Vitamin C Face Serum.', 'Vitamin C Face Serum which provides moisture to the dry skin and natural glow.', 'Vitamin C Face Serum.', 'Vitamin C Face Serum.', 'Vitamin C Face Serum.', 1),
(21, 1, 'Face Serum Vitamin Rich', 400, 240, 'uploads/product_images/9.jpeg', 'Vitamin Rich face Serum', 'Natural Vitamin rich face Serum which repair tissues and replenishes the skin and gives natural shine.', 'Vitamin Rich face Serum', 'Vitamin Rich face Serum ', 'Vitamin Rich face Serum', 1),
(22, 1, 'Glow face Serum', 500, 380, 'uploads/product_images/10.jpg', 'Glow Face serum with 20 % vitamin C.', 'Glow Face serum with 20 % vitamin C with non sticky and light texture do not harm the skin and provides skin a beautiful look.', 'Glow Face serum with 20 % vitamin C.', 'Glow Face serum with 20 % vitamin C.', 'Glow Face serum with 20 % vitamin C.', 1),
(23, 2, 'Oil free face moisturizer', 400, 390, 'uploads/product_images/6187b4e2692f17f6087e519d342b00ed.jpeg', 'Oil free face moisturizer', 'Green Tea oil free face moisturizer helps to refine and nourish skin. It suits oily and combination skin types and dermatologically tested with no parabens and silicones.', 'Oil free face moisturizer', 'Oil free face moisturizer', 'Oil free face moisturizer', 1),
(24, 2, 'Mattifying Lotion', 340, 260, 'uploads/product_images/5a1f64502cd4ea4e9c597378e6cdf3ca.jpeg', 'Mattifying Face Moisturizer', 'Face Moisturizer helps to provide skin a shine and protect the skin and repairs the skin cells.', 'Mattifying Face Moisturizer', 'Mattifying Face Moisturizer', 'Mattifying Face Moisturizer', 1),
(25, 2, 'Facial Moisturizing Lotion', 560, 480, 'uploads/product_images/3211880f748be3d45ae585bf7cdc2cf5.jpg', 'Facial Moisturizing Lotion with Sunscream.', 'Facial Moisturizing Lotion with Sunscream with broad spectrum SPF 30, moisturizes throughout the day and helps restore the protective skin barrier with 3 essential ceramides, niacinamide & hyaluronic acid.', 'Facial Moisturizing Lotion.', 'Facial Moisturizing Lotion.', 'Facial Moisturizing Lotion.', 1),
(26, 2, 'Ultra light Moisturizer', 600, 480, 'uploads/product_images/e15470d6187774a67b3f329dddb6399a.jpeg', 'Ultra light Face Moisturizing lotion for night and its oil free.', 'Ultra light Face Moisturizing lotion it moisturizes throughout the night and helps to restore the protective skin barrier. with 3 essential ceramides, niacinamide and hyaluronic acid.', 'Ultra light Moisturizer.', 'Ultra light Moisturizer oil free.', 'Ultra light Moisturizer.', 1),
(27, 2, 'Daily Glow Face Cream', 450, 430, 'uploads/product_images/a07f30bd57830c5d8d7110eef048432a.jpeg', 'Face cream with vitamin C and turmeric.', 'Face cream with vitamin C and turmeric for skin illumination which is safe and dermatologically tested.', 'Face cream with vitamin C and turmeric.', 'Daily glow face cream with vitamin C and turmeric.', 'Face cream with vitamin C and turmeric.', 1),
(28, 2, 'Cooling Face Lotion', 380, 260, 'uploads/product_images/0067be29772b6ddd154d9c3fac9cb0d4.jpeg', 'Mattifying and Cooling Face Lotion.', 'Mattifying and Cooling Face Lotion prevents acne and provides purified skin.', 'Mattifying and Cooling Face Lotion.', 'Mattifying and Cooling Face Lotion.', 'Mattifying and Cooling Face Lotion.', 1),
(29, 2, 'Oil free Moisturizer', 560, 410, 'uploads/product_images/5f9e3ead5f6bf3a533ff9da1befed267.jpg', 'Rice oil free moisturizer.', 'Rice oil free moisturize for Glass skin provides nourishment to the skin.', 'Rice oil free moisturizer.', 'Rice oil free moisturizer.', 'Rice oil free moisturizer.', 1),
(30, 2, 'Face Moisturizer', 600, 450, 'uploads/product_images/ffed8a72988aa9b1b08ebb69933a2355.jpeg', 'Oil free face moisturizer.', 'Oil free face moisturizer with apple, cider and vinegar for acne prone skin, improves skin ,provides better look and glow.', 'Oil free face moisturizer.', 'Oil free face moisturizer.', 'Oil free face moisturizer.', 1),
(31, 2, 'Face Moisturizer', 530, 420, 'uploads/product_images/8cbf3d37145a1b73e0f81eef3e64f9d2.jpeg', 'Oil free face moisturizer.', 'Oil free face moisturizer for glass skin and provides shine and nourishment to the skin.', 'Oil free face moisturizer.', 'Oil free face moisturizer.', 'Oil free face moisturizer.', 1),
(32, 2, 'honey Malai Moisturizer', 590, 455, 'uploads/product_images/5839ec58804a99c30aad8132691bcf91.jpeg', 'Honey Malai Face Moisturizer.', 'Oil free face moisturizer with honey and malai for nourishing glow provides skin a soft texture and removes roughness, testes and made safe for all skin types.', 'Honey Malai Face Moisturizer.', 'Honey Malai Face Moisturizer.', 'Honey Malai Face Moisturizer.', 1),
(33, 3, 'Deep Clean ', 400, 390, 'uploads/product_images/65331f9ff60696d1fa465a452be870c0.jpeg', 'Deep clean foaming cleanser.', 'Deep clean foaming cleanse, it is dermatologically tested and use thoroughly cleansing with long lasting oil control for the deepest feeling clean.', 'Deep clean foaming cleanser.', 'Deep clean foaming cleanser.', 'Deep clean foaming cleanser.', 1),
(34, 3, 'Soothing cleanser gel', 340, 250, 'uploads/product_images/b0866cd87064108ecbb2a9722500e90d.jpg', 'Soothing cleansing gel.', 'For everyday cleansing soothing cleansing gel with glycerine and necessary vitamin like B3, it is soap free and available for all skin types.', 'Soothing cleansing gel.', 'Soothing cleansing gel the formula is researched and tested by Dermatologists.', 'Soothing cleansing gel.', 1),
(35, 3, 'Hydrating Cleanser', 670, 550, 'uploads/product_images/ff83e9951f4e573a6657a61fcc2789db.jpeg', 'Hydrating cleanser for normal to dry skin.', 'Hydrating cleanser for normal to dry skin which cleanses and hydrates without disrupting the protective skin barrier of the face and body with 3 essential ceramides and hyaluronic acid.', 'Hydrating cleanser for normal to dry skin.', 'Hydrating cleanser for normal to dry skin, fragrance free.', 'Hydrating cleanser for normal to dry skin.', 1),
(36, 3, 'White glow cleanser', 370, 250, 'uploads/product_images/d6443cba2bdc479f2b9dd1661d09ae92.jpeg', 'White glow deep cleansing.', '3 and 1 deep cleansing skin whitening facial foam made up of herbals for all skin types.', 'White glow deep cleansing.', 'White glow deep cleansing.', 'White glow deep cleansing.', 1),
(37, 3, 'Foaming oil cleanser', 430, 350, 'uploads/product_images/a53db85b746b2230c4ea85450d3945b8.jpeg', 'Foaming oil cleansing.', 'Hydrating foaming oil cleansing for normal to very dry skin cleanses and hydrates and smoothens the skin with 3 essentials ceramides etc.', 'Foaming oil cleansing.', 'Foaming oil cleansing.', 'Foaming oil cleansing.', 1),
(38, 3, 'Foaming clay cleanser.', 520, 480, 'uploads/product_images/949d4673e8c7f323cc83666d50ac909f.jpeg', 'Foaming clay cleanser.', 'Foaming clay Face cleanser, sulfate free purifying wash, tested by dermatologist.', 'Foaming clay Face cleanser.', 'Foaming clay cleanser.', '', 1),
(39, 3, 'SA Smoothing Cleanser', 480, 450, 'uploads/product_images/11b892cddeef324e3c873c8fe4b0c4c6.jpeg', 'SA smoothing cleanser for dry, rough skin.', 'SA smoothing cleanser for dry, rough and bumpy skin, it gently cleanses while exfoliating, without disrupting the protective skin barrier with 3 essential ceramides, salicylic acid and hyaluronic acid .', 'SA smoothing cleanser for dry, rough skin.', 'SA smoothing cleanser for dry, rough skin.', 'SA smoothing cleanser for dry, rough skin.', 1),
(40, 3, 'Vegan Cream', 340, 250, 'uploads/product_images/cbf070ec11574eaf2fa68afe75bb8f3e.jpeg', 'Creamy gel cleanser (Vegan cream).', 'Creamy gel cleanser for gently removing makeup and dirt for all skin types and it is sulfate free.', 'Creamy gel cleanser.', 'Creamy gel cleanser all skin types.', 'Creamy gel cleanser. ', 1),
(41, 3, 'Micellar Foaming Cleanser', 560, 490, 'uploads/product_images/777ac6b5bc390dce15c46a192d00872a.jpeg', 'Skin Active Micellar Foaming Cleanser', 'Micellar Foaming Cleanser that gently foams to remove  makeup + cleanses + refreshes , rinses clean, no harsh rubbing on Face, Lips and Eyes, for all skin types even for sensitive, has no alcohol fragrance.', 'Cleanser that All in 1 rinse off.', '', '', 1),
(42, 3, 'Micellar Cleansing All-In-1', 410, 400, 'uploads/product_images/60f57fee5569d2da2a6e1340ad3cb32d.jpeg', 'Micellar Cleansing  water in Oil All-In-1.', 'Micellar Cleansing  water in Oil All-In-1 removes waterproof makeup + cleanses + nourishes, do not rinse off on face, eye and lips.', 'Micellar Cleansing  water in Oil All-In-1.', 'Micellar Cleansing  water in Oil All-In-1.', 'Micellar Cleansing  water in Oil All-In-1.', 1),
(43, 4, 'Vitamin C face Wash', 300, 250, 'uploads/product_images/5513ec505a57b5671433be4a9b397528.jpeg', 'Vitamin C face Wash', 'Brightening Vitamin C face Wash which helps to brightens skin tone, helps fade age spot and reduces fine lines suitable for dull, tired and aging skin with no parabens, sulphate and silicones color.', 'Vitamin C face Wash', 'Brightening Vitamin C face Wash', 'Vitamin C face Wash', 1),
(44, 4, 'Honey Orange Face Wash', 100, 90, 'uploads/product_images/27abbd18bef36f0b5085f4f9b384b00d.jpeg', 'Honey-orange face wash.', 'Honey-orange face wash cleanses skin deeply and rejuvenates the skin.', 'Honey-orange face wash .', 'Honey-orange face wash.', 'Honey-orange face wash.', 1),
(45, 4, 'Anti pimple Turmeric Face Wash', 300, 270, 'uploads/product_images/cae8840390f2e81056de8755f279ffef.jpeg', 'Anti pimple Turmeric Face Wash', 'Anti pimple Turmeric Face Wash for clean, clear and soft glowing skin.', 'Anti pimple Turmeric Face Wash', 'Anti pimple Turmeric Face Wash', '', 1),
(46, 4, 'Deep Clean Face wash', 520, 480, 'uploads/product_images/f21e1cf3e26d8f3cdd180ecfc0bbfc7c.jpeg', 'Deep clean facial cleanser.', 'Deep clean facial cleanser a penetrating and thorough cleanser that improves the complexion.', 'Deep clean facial cleanser.', 'Deep clean facial cleanser.', 'Deep clean facial cleanser.', 1),
(47, 4, 'Moisturizing Face Wash', 200, 199, 'uploads/product_images/279ecbeb8f6d05b85a9e2372c1650f15.jpeg', 'Moisturizing Face Wash.', 'Moisturizing Face Wash 100% soap free foam it is kind to skin with no artificial perfume or color and no harsh chemicals.', 'Moisturizing Face Wash.', 'Moisturizing Face Wash Which is kind to skin.', 'Moisturizing Face Wash.', 1),
(48, 4, 'Apple cider Face wash', 510, 470, 'uploads/product_images/459ca3b14ebdf3913bd9cc48392098ca.jpg', 'Apple cider vinegar face wash.', 'Face wash with apple cider vinegar hyaluronic acid and PRO vitamin pH made with natural actives cleanses gently, helps balance skin oils, helps restore healthy pH suits oily and combination of skin types.', 'Apple cider vinegar face wash.', 'Apple cider vinegar face wash.', 'Apple cider vinegar face wash.', 1),
(49, 4, 'Aloevera Face wash', 300, 150, 'uploads/product_images/1c5cecb0428dcf734a69dea9b0ceaed8.png', 'Purifying aloevera face wash.', 'Purifying aloevera face wash for pimples free face prefer for all skin types.', 'Purifying aloevera face wash.', 'Purifying aloevera face wash.', 'Purifying aloevera face wash.', 1),
(50, 4, 'Neem Aloevera Fcae Wash', 200, 170, 'uploads/product_images/cd91df7c1494434082c41416b0dab9fd.png', 'Neem alovera and khas face wash.', 'Neem alovera and khas face wash for soft and bright skin.', 'Neem alovera and khas face wash.', 'Neem alovera and khas face wash.', 'Neem alovera and khas face wash.', 1),
(51, 4, 'Neem Aloevera Face Wash', 280, 250, 'uploads/product_images/68dae1f0842234c053bc1593d6fc5908.jpeg', 'Neem aloevera face wash', 'Skin refreshing neem aloevera face wash for hydrated and nourished skin, purifying and deep cleansing made up of hebals.', 'Neem aloevera face wash', 'Neem aloevera face wash', 'Neem aloevera face wash', 1),
(52, 4, 'Deep Clean Face wash', 400, 365, 'uploads/product_images/906702d25a909f6003244334f91301ca.jpeg', 'Deep clean face wash with 2-in-1 features.', 'Deep clean face wash with invigorating 2-in-1 features of face wash and face mask and it is dermatologist tested.', 'Deep clean face wash with 2-in-1 features.', 'Deep clean face wash with 2-in-1 features.', 'Deep clean face wash with 2-in-1 features.', 1),
(53, 6, 'Red Vine Face Mask', 300, 290, 'uploads/product_images/6f951ee142bae8d0c4b4f6c512b6c373.jpeg', 'Red vine face mask.', 'Red vine face mask with mulberry and rosehip oil with natural beauty, ingredients suits to skin and provides a glowing skin.', 'Red vine face mask.', 'Red vine face mask.', 'Red vine face mask.', 1),
(54, 6, 'Golden Glow Peel-off Mask', 250, 230, 'uploads/product_images/b32ad1e8e9733f6588d09b8aa0b41067.jpeg', 'Golden glow peel-off mask.', 'Advanced golden glow peel-off mask with 24 karat gold having naturally glowing skin, 15 minutes therapy.', 'Golden glow peel-off mask.', 'Golden glow peel-off mask.', 'Golden glow peel-off mask.', 1),
(55, 6, 'Sheet Mask', 150, 80, 'uploads/product_images/219da4fe752dc27908b506429ee508cd.jpeg', 'Sheet mask lemon fresh.', 'Blush and glow sheet mask lemon fresh for freshens the skin.', 'Sheet mask lemon fresh.', 'Sheet mask lemon fresh.', 'Sheet mask lemon fresh.', 1),
(56, 6, 'Green mask stick.', 120, 70, 'uploads/product_images/e712280ba10ffcfcd435ce635f3fe23a.jpeg', 'Green mask stick.', 'Green face mask stick having neem qualities provides skin a shine and repair tissues.', 'Green mask stick.', 'Green mask stick.', 'Green mask stick.', 1),
(57, 6, 'Face & Body Mask', 410, 310, 'uploads/product_images/e78ea82e0a94c238e1a8445d9a3e790f.jpeg', 'Ubtan De-Tan radiance face and bdoy mask reduces natural skin radiance for all skin types, no preservatives, sulphates free with no toxic ingredients.', 'Ubtan body and face mask.', 'Ubtan body and face mask.', 'Ubtan body and face mask.', 'Ubtan body and face mask.', 1),
(58, 6, 'Papaya Face Sheet Mask', 150, 60, 'uploads/product_images/3072d7fa84f98a2a81df17d6730de6b7.jpeg', 'Papaya face sheet mask.', 'Papaya face sheet mask.', 'Face sheet mask having papaya and useful natural ingredients which moisturizes and reduces wrinkles suits to all skin types.', 'Papaya face sheet mask.', 'Papaya face sheet mask.', 1),
(59, 6, 'Vitamin C Face Mask', 200, 199, 'uploads/product_images/f1c7e984d88c1f03daa80a4cb7664a11.jpg', 'Vitamin C face mask.', ' Face mask with Vitamin C and kaolin clay for skin illumination which provides cooling temptation to the skin, freshens the skin.', 'Vitamin C face mask.', 'Vitamin C face mask.', 'Vitamin C face mask.', 1),
(60, 6, '24K Gold Facial Mask', 170, 155, 'uploads/product_images/08f01df707b73a859f44c90eb49f7cc4.jpeg', '24K Gold Facial Mask', '24K Gold Facial Mask for all types of skin.', '24K Gold Facial Mask', '24K Gold Facial Mask', '24K Gold Facial Mask', 1),
(61, 6, 'Charcoal Peel of Mask', 90, 70, 'uploads/product_images/5c468eb886517523c89c5f470fbcac62.jpeg', 'Charcoal Peel of Mask.', 'Charcoal Peel of Mask that detoxify skin, deeply cleanses and removes blackheads for all skin types .', 'Charcoal Peel of Mask.', 'Charcoal Peel of Mask.', 'Charcoal Peel of Mask.', 1),
(62, 6, 'Tea Tree Face Mask', 200, 180, 'uploads/product_images/9ecc6655fab8d5c5b4336fb53815a8ed.jpeg', 'Tea Tree Face Mask', 'Face Mask with tea tree and salicylic acid for removing acne & pimples and improves skin.', 'Tea Tree Face Mask', 'Tea Tree Face Mask', 'Tea Tree Face Mask', 1),
(63, 7, 'Lavender Hydrating Mist Toner', 200, 160, 'uploads/product_images/77ad6f1c0afe52a08ac2fb606d2e05f1.jpg', 'Lavender Hydrating Mist Toner.', 'Lavender Hydrating Mist Toner which has relaxing blend which relaxes the skin.', 'Lavender Hydrating Mist Toner.', 'Lavender Hydrating Mist Toner.', 'Lavender Hydrating Mist Toner.', 1),
(64, 7, 'Cleansing Milk Toner', 222, 200, 'uploads/product_images/5010532f76a4864a6b67a25763d6f5a6.jpeg', 'Cleansing Milk Toner', 'Smooth shea butter cleansing milk toner with sandelwood  and other natural ingredients.', 'Cleansing Milk Toner', 'Cleansing Milk Toner', 'Cleansing Milk Toner', 1),
(65, 7, 'Rose Hydrating Mist Toner', 390, 360, 'uploads/product_images/26df34561c7df31d5783341d0232e19f.jpeg', 'Rose Hydrating Mist Toner.', 'Rose Hydrating Mist Toner, parabens and alcohol free for skin types, it has soothing blend.', 'Rose Hydrating Mist Toner.', 'Rose Hydrating Mist Toner.', 'Rose Hydrating Mist Toner.', 1),
(66, 7, 'Original Hydrating Mist Toner', 440, 320, 'uploads/product_images/93c28a28d378edaf57d43d4c2c05f07b.jpeg', 'Original hydrating mist toner.', 'Original hydrating mist toner with chamomile and rose for all skin types with no parabens and alcohol.', 'Original hydrating mist toner.', 'Original hydrating mist toner.', 'Original hydrating mist toner.', 1),
(67, 7, 'Rose Mist Toner', 150, 100, 'uploads/product_images/c2114b6be272fe18646d42f2bbd37e76.jpeg', 'Active fresh rose mist toner.', 'Active fresh rose mist toner with rose oil absolute including natural herbs which freshens the skin and provides beautiful glow like rose.', 'Active fresh rose mist toner.', 'Active fresh rose mist toner.', 'Active fresh rose mist toner.', 1),
(68, 8, 'Sunblock Sunscream', 444, 333, 'uploads/product_images/a6f7627b43d7a341e642f9bede6c9602.png', 'Sunblock sunscream with hyaluronic acid.', 'Sunscream innovative technology and  sunblock with hyaluronic acid, wrinkle control provides high protection to face + body with SPF 30.', 'Sunblock sunscream with hyaluronic acid.', 'Sunblock sunscream with hyaluronic acid.', 'Sunblock sunscream with hyaluronic acid.', 1),
(69, 8, 'Peach Milk Moisturizer & Sunscream', 235, 221, 'uploads/product_images/79e112ab2be7e5bb60b27f5190edede7.jpeg', 'Peach Milk Moisturizer & Sunscream.', 'Peach Milk Moisturizer & Sunscream with SPF 24 for all types of skin, protects skin form dust, ultraviolet radiations from the sun.', 'Peach Milk Moisturizer & Sunscream.', 'Peach Milk Moisturizer & Sunscream.', 'Peach Milk Moisturizer & Sunscream.', 1),
(70, 8, 'Sunscream Matte Finish', 480, 430, 'uploads/product_images/459bb959f9574f1e715b92d7e569f42f.jpeg', 'Sunscream with Matte finish SPF 35.', 'Daily broad spectrum UVA & UVB protection sunscream with Matte finish SPF 35 for all skin types with natural sun blockers, strawberry extract , carrot seed extract and avocada oil.', 'Sunscream with Matte finish SPF 35.', 'Sunscream with Matte finish SPF 35.', 'Sunscream with Matte finish SPF 35.', 1),
(71, 8, 'Protective SunScream', 360, 270, 'uploads/product_images/4f16f1dd9feb76c36222aec6bfeb1d66.jpeg', 'Protective Sunscream Lotion with SPF 15.', 'Protective Sunscream Lotion with SPF 15.', 'Protective Sunscream Lotion with SPF 15 UVA & UVB protection which helps to prevent skin darkening provides everyday protection form the skin.', 'Protective Sunscream Lotion with SPF 15.', 'Protective Sunscream Lotion with SPF 15.', 1),
(72, 8, 'Sun Expert SPF 50', 200, 198, 'uploads/product_images/d5ceaecdb7583450faf62ccf628d9a8c.jpeg', 'Sun Expert SPF 50 with ultra matte lotion.', 'Sun Expert SPF 50 UVB, PA+++ UVA with ultra matte lotion light and sun sticky provides protection from harmful sun rays.', 'Sun Expert SPF 50 with ultra matte lotion.', 'Sun Expert SPF 50 with ultra matte lotion.', 'Sun Expert SPF 50 with ultra matte lotion.', 1),
(73, 9, 'Radiant Skin Scrub', 180, 130, 'uploads/product_images/a8b924d81a087760c8989d512e82d13c.jpeg', 'Radiant skin scrub 100 % Natural.', 'Radiant skin scrub with pink lemon, mandarin orange and 100 % Natural ingedients.', 'Radiant skin scrub 100 % Natural.', 'Radiant skin scrub 100 % Natural.', 'Radiant skin scrub 100 % Natural.', 1),
(74, 9, 'Fresh Skin Apricot Scrub', 120, 80, 'uploads/product_images/3b16d06a6a471dfb767532cae231a559.jpeg', 'Fresh Skin Apricot Scrub', 'Fresh Skin Apricot Scrub which deeply exfoliates and removes impurities for glowing skin, it is oil and parabens free and dermatologist tested.', 'Fresh Skin Apricot Scrub', 'Fresh Skin Apricot Scrub', 'Fresh Skin Apricot Scrub', 1),
(75, 9, 'Extra Gentle Daily scrub', 180, 120, 'uploads/product_images/fce7dc598f49ed59a983f30f933bd274.jpeg', 'Extra Gentle Face scrub for all skin types.', 'Extra Gentle Face scrub which gently exfoliates with micro fine particles to reveal radiant looking skin it cleanses without over drying non- irritating.', 'Extra Gentle Face scrub.', 'Extra Gentle Face scrub.', 'Extra Gentle Face scrub.', 1),
(76, 9, 'Coffee Face Scrub', 130, 95, 'uploads/product_images/d643232f493737bd812181e7d306b4f8.jpeg', 'Naked and raw coffee face scrub.', 'Naked and raw coffee face scrub which provides deep exfoliation, removes dirt and dead skin cells from the skin available for all skin types.', 'Naked and raw coffee face scrub.', 'Naked and raw coffee face scrub.', 'Naked and raw coffee face scrub.', 1),
(77, 9, 'Gentle Smoothing Scrub', 110, 101, 'uploads/product_images/b70f3cbc1005a48d80a10eae63b802e7.jpeg', 'Gentle smoothing scrub with rose water and aloevera.', 'Gentle smoothing scrub with rose water and aloevera , it gently exfoliates to leave skin smooth and provides rose glow to the skin & refreshes the skin.', 'Gentle smoothing scrub with rose water and aloevera.', 'Gentle smoothing scrub with rose water and aloevera.', 'Gentle smoothing scrub with rose water and aloevera.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `uid` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` bigint(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` int(50) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uid`, `name`, `email`, `phonenumber`, `address`, `city`, `state`, `pincode`, `gender`, `password`, `image`, `code`) VALUES
(1, 'a', 'a', 1, 'a', 'a', 'a', 1, 'a', 'a', 'a', 0),
(2, 'Ananya', 'anugyakri@gmail.com', 2147483647, 'Chutkiya Bazar', 'Patna City', 'Bihar', 800008, 'Female', 'anugya28123', '', 0),
(3, 'b', 'b', 2, 'b', 'bb', 'b', 2, 'b', 'b', 'b', 1),
(4, 'Shalu', 'jawlashalu6@gmail.com', 2147483647, 'aksfksdkfjakrg', 'shamli', 'uttar pradesh', 251503, 'Female', 'hihihi', '', 469823),
(5, 'sg name is', 'sg@gmail.com', 9999999999, '50', ' Haridwar ', 'Uttaranchal', 54757, 'Male', 'sg123', '', 0),
(6, 'DivyankaAnugyaShaluMehak', 'divyankajaiswalz2002@gmail.com', 7727078495, 'Hajiganj', ' Patna ', 'Bihar', 800008, 'Female', 'Divyanka123', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(3, 'Demo', 'Name', 'demo@gmail.com', 'password', '9876543210', 'demo ad1', 'ademo ad2');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wish_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wish_id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(9, 45, '::1', 5, 2),
(11, 19, '::1', 5, 1),
(12, 2, '::1', -1, 1),
(14, 3, '::1', -1, 1),
(15, 4, '::1', -1, 1),
(16, 1, '::1', 5, 1),
(17, 2, '::1', 5, 1),
(18, 4, '::1', 5, 1),
(19, 35, '::1', 6, 1),
(20, 20, '::1', -1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `customer_order_new`
--
ALTER TABLE `customer_order_new`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `delivery_man`
--
ALTER TABLE `delivery_man`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wish_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `oid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_order_new`
--
ALTER TABLE `customer_order_new`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wish_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
