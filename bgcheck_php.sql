-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 03:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bgcheck_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `bg_products`
--

CREATE TABLE `bg_products` (
  `pro_id` int(225) NOT NULL,
  `cat_id` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `smal_desc` varchar(225) NOT NULL,
  `org_pric` varchar(225) NOT NULL,
  `sel_pric` varchar(225) NOT NULL,
  `imag` varchar(225) NOT NULL,
  `qty` varchar(225) NOT NULL,
  `slug` varchar(225) NOT NULL,
  `created_at` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bg_products`
--

INSERT INTO `bg_products` (`pro_id`, `cat_id`, `name`, `smal_desc`, `org_pric`, `sel_pric`, `imag`, `qty`, `slug`, `created_at`) VALUES
(14, '', 'VERIFY EMPLOYMENT', 'Verify your past employment: we check employment dates, roles held, job responsibilities, and reasons for departure.', '75', '', 'verify-employment.png', '1', '', '2024-05-30 12:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `bg_users`
--

CREATE TABLE `bg_users` (
  `userid` int(225) NOT NULL,
  `username` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bg_users`
--

INSERT INTO `bg_users` (`userid`, `username`, `email`, `password`) VALUES
(1, 'Asif', 'asif@gmail.com', 'a5cdbab5d6039da46a022344a6a221ff'),
(2, 'test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6'),
(3, 'test123', 'tt@gamil.com', '098f6bcd4621d373cade4e832627b4f6'),
(4, 'tech', 'tech@gmail.com', 'd9f9133fb120cd6096870bc2b496805b'),
(5, 'abc', 'abc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(225) NOT NULL,
  `user_id` varchar(222) NOT NULL,
  `pro_id` varchar(222) NOT NULL,
  `pro_qty` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pro_id`, `pro_qty`) VALUES
(2, '4', '14', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bg_products`
--
ALTER TABLE `bg_products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `bg_users`
--
ALTER TABLE `bg_users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bg_products`
--
ALTER TABLE `bg_products`
  MODIFY `pro_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bg_users`
--
ALTER TABLE `bg_users`
  MODIFY `userid` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
