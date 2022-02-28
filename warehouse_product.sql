-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 02:00 AM
-- Server version: 10.4.22-MariaDB-log
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adming`
--

-- --------------------------------------------------------

--
-- Table structure for table `warehouse_product`
--

CREATE TABLE `warehouse_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `warehouse_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_sale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_buy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` tinyint(1) NOT NULL DEFAULT 0,
  `discountprice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enddate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warehouse_product`
--

INSERT INTO `warehouse_product` (`id`, `warehouse_id`, `product_id`, `code`, `qty`, `price_sale`, `price_buy`, `discount`, `discountprice`, `startdate`, `enddate`, `image`, `unit_id`, `category_id`, `created_at`, `updated_at`) VALUES
(56374, 1, 56378, '3401346673335', '1', '233.75', '275.00', 1, '200', NULL, NULL, NULL, '1', '1', '2022-02-27 22:56:58', '2022-02-27 22:56:58'),
(56375, 1, 56379, '6222006502348', '1', '31.50', '42.00', 0, NULL, NULL, NULL, NULL, '1', '1', '2022-02-27 22:56:58', '2022-02-27 22:56:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `warehouse_product`
--
ALTER TABLE `warehouse_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `warehouse_product_warehouse_id_foreign` (`warehouse_id`),
  ADD KEY `warehouse_product_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `warehouse_product`
--
ALTER TABLE `warehouse_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56376;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `warehouse_product`
--
ALTER TABLE `warehouse_product`
  ADD CONSTRAINT `warehouse_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warehouse_product_warehouse_id_foreign` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
