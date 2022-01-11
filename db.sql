-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 11:47 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` int(100) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`fname`, `lname`, `email`, `mob`, `msg`) VALUES
('mayra', 'sharma', 'abc12@gmail.com', 2147483647, 'hello'),
('vinita', 'sharma', 'abc12@gmail.com', 2147483647, 'hiii\r\n'),
('Adarsh', 'Mishra', 'adarshmishra11@yahoo.com', 2147483647, 'hrllo');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `total_price` float(6,2) NOT NULL DEFAULT 0.00,
  `order_status` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `email`, `address`, `address2`, `country`, `state`, `zipcode`, `total_price`, `order_status`, `created_at`, `updated_at`, `customer_id`, `payment_status`) VALUES
(32, 'a', 'a', 'a@gmail.com', 'a', 'a', 'United States', 'California', '456456', 38.00, 'confirmed', '2021-11-23 14:52:41', '2021-11-23 14:52:41', 860899, 'Successfull'),
(33, 'a', 'a', 'a@gmail.com', 'a', 'a', 'United States', 'California', '4545458', 9.50, 'confirmed', '2021-11-23 16:53:11', '2021-11-23 16:53:11', 3971597, 'Successfull'),
(34, 'a', 'a', 'a@gmail.com', 'a', 'a', 'United States', 'California', '12345', 171.00, 'confirmed', '2021-11-23 16:56:03', '2021-11-23 16:56:03', 3971597, 'pending'),
(35, 'a', 'a', 'a@gmail.com', 'a', 'a', 'United States', 'California', '4545458', 19.00, 'confirmed', '2021-11-23 16:56:46', '2021-11-23 16:56:46', 3971597, 'Successfull'),
(38, 'Daksha', 'Shetty', 'Shettydaksha12@gmail.com', 'Mumbai', 'Mumbai', 'United States', 'California', '401303', 28.50, 'confirmed', '2021-11-23 17:34:02', '2021-11-23 17:34:02', 2147483647, 'pending'),
(39, 'Adarsh', 'Shetty', 'Shettydaksha12@gmail.com', 'Mumbai', 'Mumbai', 'United States', 'California', '401303', 9.50, 'confirmed', '2021-11-23 17:35:14', '2021-11-23 17:35:14', 2147483647, 'Successfull'),
(40, 'Daksha', 'Shetty', 'Shettydaksha12@gmail.com', 'Mumbai', 'Mumbai', 'United States', 'California', '401303', 9.50, 'confirmed', '2021-11-24 07:54:26', '2021-11-24 07:54:26', 2147483647, 'pending'),
(41, 'Daksha', 'Shetty', 'Shettydaksha12@gmail.com', 'Mumbai', 'Mumbai', 'United States', 'California', '401303', 9.50, 'confirmed', '2021-11-24 07:54:54', '2021-11-24 07:54:54', 2147483647, 'pending'),
(42, 'Daksha', 'Shetty', 'Shettydaksha12@gmail.com', 'Mumbai', 'Mumbai', 'United States', 'California', '401303', 9.50, 'confirmed', '2021-11-24 08:02:12', '2021-11-24 08:02:12', 2147483647, 'pending'),
(43, 'Daksha', 'Shetty', 'Shettydaksha12@gmail.com', 'Mumbai', 'Mumbai', 'United States', 'California', '401303', 9.50, 'confirmed', '2021-11-24 08:11:43', '2021-11-24 08:11:43', 2147483647, 'pending'),
(44, 'Daksha', 'Shetty', 'Shettydaksha12@gmail.com', 'Mumbai', 'Mumbai', 'United States', 'California', '401303', 9.50, 'confirmed', '2021-11-24 08:15:41', '2021-11-24 08:15:41', 2147483647, 'pending'),
(45, 'Daksha', 'Shetty', 'Shettydaksha12@gmail.com', 'Mumbai', 'Mumbai', 'United States', 'California', '401303', 19.00, 'confirmed', '2021-11-24 08:17:09', '2021-11-24 08:17:09', 2147483647, 'pending'),
(46, 'Daksha', 'Shetty', 'Shettydaksha12@gmail.com', 'Mumbai', 'Mumbai', 'United States', 'California', '401303', 57.00, 'confirmed', '2021-11-24 08:25:51', '2021-11-24 08:25:51', 2147483647, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_price` float(6,2) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `total_price` double(6,2) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `qty`, `total_price`, `customer_id`, `payment_status`) VALUES
(33, 32, 3, 'Product-3', 9.50, 4, 38.00, 860899, 'Successfull'),
(34, 33, 3, 'Product-3', 9.50, 1, 9.50, 3971597, 'Successfull'),
(35, 34, 4, 'Product-4', 9.50, 3, 171.00, 3971597, 'pending'),
(36, 35, 4, 'Product-4', 9.50, 2, 19.00, 3971597, 'Successfull'),
(38, 37, 1, 'Product-1', 9.50, 1, 19.00, 2147483647, 'pending'),
(39, 38, 2, 'Product-2', 9.50, 3, 28.50, 2147483647, 'pending'),
(40, 39, 2, 'Product-2', 9.50, 1, 9.50, 2147483647, 'Successfull'),
(46, 45, 4, 'Product-4', 9.50, 2, 19.00, 2147483647, 'pending'),
(47, 46, 1, 'Product-1', 9.50, 3, 57.00, 2147483647, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_slug` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `full_description` text DEFAULT NULL,
  `price` double(4,2) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_slug`, `short_description`, `full_description`, `price`, `is_featured`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'PARACETAMOL', 'product-1', 'Paracetamol, also known as acetaminophen, is a medication used to treat fever and mild to moderate pain. At a standard dose, paracetamol only slightly decreases body temperature; it is inferior to ibuprofen in that respect, and the benefits of its use for', 'Paracetamol, also known as acetaminophen, is a medication used to treat fever and mild to moderate pain. At a standard dose, paracetamol only slightly decreases body temperature; it is inferior to ibuprofen in that respect, and the benefits of its use for fever are unclear', 50.00, 0, 1, '2021-11-12 22:02:17', '2021-11-12 22:02:21'),
(2, 'CROCIN', 'Crocin', 'Crocin Advance is used to relieve fever and mild-to-moderate pain. It is also used to get relief from headache, toothache, migraine, period pain and other painful conditions.', '650 mg Crocin Advance Tablet, 1*15, paracetamolrs.16/strip\r\n\r\nBrand: Crocin\r\nStrength: 650mg\r\nPackaging Size: 1*15\r\nComposition: Paracetamol\r\nPrescription/Non Prescription: prescription', 16.00, 0, 1, '2021-02-11 22:02:50', '2021-02-11 22:02:53'),
(3, 'VITAMIN C TABLET', 'vitamin', 'Eucee Vitamin C - Sugar Free Chewable 120 Tablets For Skin - Immunity- Collagen In Tasty Orange Flavor - Vegan Formula For kids Men Women - 120 Servings (Orange,Pack of 1)\r\n', 'Best Before: 27 May 2023\r\nBrand	Eucee\r\nItem Form	Tablet\r\nAge Range (Description)	Suitable for all ages\r\nDiet Type	Vegetarian\r\nFlavour	Orange\r\nItem Weight	200 Grams\r\nNet Quantity	120 count\r\nAllergen Information	Gelatine Free, Gluten Free\r\nDosage Form	Tablet\r\n\r\nAbout this item\r\nVitamin C chewable Tablets\r\n120 Tablets\r\nImmunity antioxidant skincare', 99.99, 0, 1, '2021-02-11 22:03:21', '2021-02-11 22:03:24'),
(4, 'SAVLON Hand Sanitizer', 'savlon', 'Savlon Surface Disinfectant Spray Sanitizer, Germ Protection on Hard & Soft Surfaces, 170g', '\r\nSpecific Uses For Product	Bottle\r\nItem Form	Spray\r\nSpecial Ingredients	Alcohol Ethoxylate\r\nBrand	Savlon\r\nSurface Recommendation	Carpet\r\nSpecial Feature	Antibacterial\r\nScent	Fresh\r\nItem Volume	150\r\nNet Quantity	230.0 millilitre\r\n\r\n\r\n\r\nAbout this item\r\nSavlon Surface Disinfectant Spray protects your family by providing an effective germ-kill\r\nDirections for use: Shake can well and spray on surface to disinfect. Allow to air dry. No need to wipe\r\nIncredibly versatile with a fresh & pleasant smell.\r\nCan be used on a wide variety of hard and soft surfaces around your home\r\nDisinfect high-traffic surfaces such as Tables, Door Knobs, Chairs, keys, packages etc with one easy spray', 99.99, 0, 1, '2021-02-11 22:03:50', '2021-02-11 22:03:53'),
(6, 'Product-5', 'product-5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis omnis suscipit esse ipsam officia. Quis sint nihil magnam explicabo veniam hic. Vitae nam iusto reiciendis ratione sed suscipit, aspernatur repudiandae.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis omnis suscipit esse ipsam officia. Quis sint nihil magnam explicabo veniam hic. Vitae nam iusto reiciendis ratione sed suscipit, aspernatur repudiandae.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis omnis suscipit esse ipsam officia. Quis sint nihil magnam explicabo veniam hic. Vitae nam iusto reiciendis ratione sed suscipit, aspernatur repudiandae.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis omnis suscipit esse ipsam officia. Quis sint nihil magnam explicabo veniam hic. Vitae nam iusto reiciendis ratione sed suscipit, aspernatur repudiandae.', 9.50, 0, 1, '2021-11-12 22:02:17', '2021-11-12 22:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `img`, `display_order`, `is_featured`) VALUES
(1, 1, 'paracetamol.jpg\r\n', 1, 1),
(2, 2, 'Crocin.jfif', 1, 1),
(3, 3, 'vitamin.jpeg', 1, 1),
(4, 4, 'Savlon.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `user_name`, `password`, `cpassword`, `phone`, `gender`) VALUES
(3971597, 'abc', 'abc12@gmail.com', 'Vinita@12', 'Vinita@12', 2147483647, 'Female'),
(2147483647, 'Daksha Balakrishna Shetty', 'Shettydaksha12@gmail.com', 'Shetty@12', 'Shetty@12', 2147483647, 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
