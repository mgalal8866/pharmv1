-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 02:01 AM
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
-- Table structure for table `brandaccounts`
--

CREATE TABLE `brandaccounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brandaccounts`
--

INSERT INTO `brandaccounts` (`id`, `name`, `email`, `password`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Brand', 'mgalalbrand@gmail.com', '$2y$10$u4jq54GcWRpV29BeE6nZgOHuXQgyD9dReb9Bsl/s3NIYaXrl8yHo2', 1, '2022-02-27 22:36:34', '2022-02-27 22:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `slug`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'دواء', 'doaaa', NULL, '2022-02-27 22:37:47', '2022-02-27 22:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_16_164620_create_permission_tables', 1),
(6, '2022_02_16_175707_create_Brands_table', 1),
(7, '2022_02_16_175707_create_Categorys_table', 1),
(8, '2022_02_16_175707_create_Order_details_table', 1),
(9, '2022_02_16_175707_create_Orders_table', 1),
(10, '2022_02_16_175707_create_Products_table', 1),
(11, '2022_02_16_175707_create_Units_table', 1),
(12, '2022_02_16_175707_create_warehouse_product_table', 1),
(13, '2022_02_16_175707_create_warehouses_table', 1),
(14, '2022_02_16_175717_create_foreign_keys', 1),
(15, '2022_02_16_204350_create_brandacounts_table', 1),
(16, '2022_02_19_133611_create_sub_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\Brandaccount', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `date` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `warehouse_product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'المستخدمين', 'web', '2022-02-27 22:36:25', '2022-02-27 22:36:25'),
(2, 'المستخدمين', 'brandaccount', '2022-02-27 22:36:25', '2022-02-27 22:36:25'),
(3, 'قائمة المستخدمين', 'web', '2022-02-27 22:36:25', '2022-02-27 22:36:25'),
(4, 'قائمة المستخدمين', 'brandaccount', '2022-02-27 22:36:26', '2022-02-27 22:36:26'),
(5, 'اضافة مستخدم', 'web', '2022-02-27 22:36:26', '2022-02-27 22:36:26'),
(6, 'اضافة مستخدم', 'brandaccount', '2022-02-27 22:36:26', '2022-02-27 22:36:26'),
(7, 'تعديل مستخدم', 'web', '2022-02-27 22:36:26', '2022-02-27 22:36:26'),
(8, 'تعديل مستخدم', 'brandaccount', '2022-02-27 22:36:27', '2022-02-27 22:36:27'),
(9, 'حذف مستخدم', 'web', '2022-02-27 22:36:27', '2022-02-27 22:36:27'),
(10, 'حذف مستخدم', 'brandaccount', '2022-02-27 22:36:27', '2022-02-27 22:36:27'),
(11, 'صلاحيات المستخدمين', 'web', '2022-02-27 22:36:27', '2022-02-27 22:36:27'),
(12, 'صلاحيات المستخدمين', 'brandaccount', '2022-02-27 22:36:27', '2022-02-27 22:36:27'),
(13, 'عرض صلاحية', 'web', '2022-02-27 22:36:27', '2022-02-27 22:36:27'),
(14, 'عرض صلاحية', 'brandaccount', '2022-02-27 22:36:27', '2022-02-27 22:36:27'),
(15, 'اضافة صلاحية', 'web', '2022-02-27 22:36:27', '2022-02-27 22:36:27'),
(16, 'اضافة صلاحية', 'brandaccount', '2022-02-27 22:36:27', '2022-02-27 22:36:27'),
(17, 'تعديل صلاحية', 'web', '2022-02-27 22:36:27', '2022-02-27 22:36:27'),
(18, 'تعديل صلاحية', 'brandaccount', '2022-02-27 22:36:28', '2022-02-27 22:36:28'),
(19, 'حذف صلاحية', 'web', '2022-02-27 22:36:28', '2022-02-27 22:36:28'),
(20, 'حذف صلاحية', 'brandaccount', '2022-02-27 22:36:28', '2022-02-27 22:36:28'),
(21, 'الوحدات', 'web', '2022-02-27 22:36:28', '2022-02-27 22:36:28'),
(22, 'الوحدات', 'brandaccount', '2022-02-27 22:36:28', '2022-02-27 22:36:28'),
(23, 'اضافه وحده', 'web', '2022-02-27 22:36:28', '2022-02-27 22:36:28'),
(24, 'اضافه وحده', 'brandaccount', '2022-02-27 22:36:28', '2022-02-27 22:36:28'),
(25, 'حذف وحده', 'web', '2022-02-27 22:36:28', '2022-02-27 22:36:28'),
(26, 'حذف وحده', 'brandaccount', '2022-02-27 22:36:28', '2022-02-27 22:36:28'),
(27, 'تعديل وحده', 'web', '2022-02-27 22:36:28', '2022-02-27 22:36:28'),
(28, 'تعديل وحده', 'brandaccount', '2022-02-27 22:36:28', '2022-02-27 22:36:28'),
(29, 'تغير حاله وحده', 'web', '2022-02-27 22:36:28', '2022-02-27 22:36:28'),
(30, 'تغير حاله وحده', 'brandaccount', '2022-02-27 22:36:28', '2022-02-27 22:36:28'),
(31, 'الاقسام', 'web', '2022-02-27 22:36:28', '2022-02-27 22:36:28'),
(32, 'الاقسام', 'brandaccount', '2022-02-27 22:36:28', '2022-02-27 22:36:28'),
(33, 'اضافه قسم', 'web', '2022-02-27 22:36:29', '2022-02-27 22:36:29'),
(34, 'اضافه قسم', 'brandaccount', '2022-02-27 22:36:29', '2022-02-27 22:36:29'),
(35, 'حذف قسم', 'web', '2022-02-27 22:36:29', '2022-02-27 22:36:29'),
(36, 'حذف قسم', 'brandaccount', '2022-02-27 22:36:29', '2022-02-27 22:36:29'),
(37, 'تعديل قسم', 'web', '2022-02-27 22:36:29', '2022-02-27 22:36:29'),
(38, 'تعديل قسم', 'brandaccount', '2022-02-27 22:36:29', '2022-02-27 22:36:29'),
(39, 'تغير حاله قسم', 'web', '2022-02-27 22:36:29', '2022-02-27 22:36:29'),
(40, 'تغير حاله قسم', 'brandaccount', '2022-02-27 22:36:29', '2022-02-27 22:36:29'),
(41, 'المنتجات', 'web', '2022-02-27 22:36:29', '2022-02-27 22:36:29'),
(42, 'المنتجات', 'brandaccount', '2022-02-27 22:36:29', '2022-02-27 22:36:29'),
(43, 'اضافه منتج', 'web', '2022-02-27 22:36:29', '2022-02-27 22:36:29'),
(44, 'اضافه منتج', 'brandaccount', '2022-02-27 22:36:29', '2022-02-27 22:36:29'),
(45, 'تعديل منتج', 'web', '2022-02-27 22:36:30', '2022-02-27 22:36:30'),
(46, 'تعديل منتج', 'brandaccount', '2022-02-27 22:36:30', '2022-02-27 22:36:30'),
(47, 'حذف منتج', 'web', '2022-02-27 22:36:30', '2022-02-27 22:36:30'),
(48, 'حذف منتج', 'brandaccount', '2022-02-27 22:36:30', '2022-02-27 22:36:30'),
(49, 'تغير حاله منتج', 'web', '2022-02-27 22:36:30', '2022-02-27 22:36:30'),
(50, 'تغير حاله منتج', 'brandaccount', '2022-02-27 22:36:30', '2022-02-27 22:36:30'),
(51, 'العملاء', 'web', '2022-02-27 22:36:30', '2022-02-27 22:36:30'),
(52, 'العملاء', 'brandaccount', '2022-02-27 22:36:30', '2022-02-27 22:36:30'),
(53, 'اضافه عميل', 'web', '2022-02-27 22:36:30', '2022-02-27 22:36:30'),
(54, 'اضافه عميل', 'brandaccount', '2022-02-27 22:36:30', '2022-02-27 22:36:30'),
(55, 'عرض العملاء', 'web', '2022-02-27 22:36:30', '2022-02-27 22:36:30'),
(56, 'عرض العملاء', 'brandaccount', '2022-02-27 22:36:31', '2022-02-27 22:36:31'),
(57, 'تعديل عميل', 'web', '2022-02-27 22:36:31', '2022-02-27 22:36:31'),
(58, 'تعديل عميل', 'brandaccount', '2022-02-27 22:36:31', '2022-02-27 22:36:31'),
(59, 'حذف عميل', 'web', '2022-02-27 22:36:31', '2022-02-27 22:36:31'),
(60, 'حذف عميل', 'brandaccount', '2022-02-27 22:36:31', '2022-02-27 22:36:31'),
(61, 'تغير حاله عميل', 'web', '2022-02-27 22:36:31', '2022-02-27 22:36:31'),
(62, 'تغير حاله عميل', 'brandaccount', '2022-02-27 22:36:31', '2022-02-27 22:36:31'),
(63, 'الطلبات', 'web', '2022-02-27 22:36:31', '2022-02-27 22:36:31'),
(64, 'الطلبات', 'brandaccount', '2022-02-27 22:36:31', '2022-02-27 22:36:31'),
(65, 'عرض الطلب', 'web', '2022-02-27 22:36:31', '2022-02-27 22:36:31'),
(66, 'عرض الطلب', 'brandaccount', '2022-02-27 22:36:31', '2022-02-27 22:36:31'),
(67, 'الاشعارات', 'web', '2022-02-27 22:36:31', '2022-02-27 22:36:31'),
(68, 'الاشعارات', 'brandaccount', '2022-02-27 22:36:31', '2022-02-27 22:36:31'),
(69, 'ارسال اشعار', 'web', '2022-02-27 22:36:31', '2022-02-27 22:36:31'),
(70, 'ارسال اشعار', 'brandaccount', '2022-02-27 22:36:32', '2022-02-27 22:36:32'),
(71, 'قائمه الاعدادات', 'web', '2022-02-27 22:36:32', '2022-02-27 22:36:32'),
(72, 'قائمه الاعدادات', 'brandaccount', '2022-02-27 22:36:32', '2022-02-27 22:36:32'),
(73, 'الاعدادات', 'web', '2022-02-27 22:36:32', '2022-02-27 22:36:32'),
(74, 'الاعدادات', 'brandaccount', '2022-02-27 22:36:32', '2022-02-27 22:36:32'),
(75, 'تعديل الاعدادات', 'web', '2022-02-27 22:36:32', '2022-02-27 22:36:32'),
(76, 'تعديل الاعدادات', 'brandaccount', '2022-02-27 22:36:32', '2022-02-27 22:36:32'),
(77, 'viewunit', 'web', '2022-02-27 22:36:32', '2022-02-27 22:36:32'),
(78, 'viewunit', 'brandaccount', '2022-02-27 22:36:32', '2022-02-27 22:36:32'),
(79, 'newunit', 'web', '2022-02-27 22:36:32', '2022-02-27 22:36:32'),
(80, 'newunit', 'brandaccount', '2022-02-27 22:36:32', '2022-02-27 22:36:32'),
(81, 'editunit', 'web', '2022-02-27 22:36:32', '2022-02-27 22:36:32'),
(82, 'editunit', 'brandaccount', '2022-02-27 22:36:32', '2022-02-27 22:36:32'),
(83, 'deleteunit', 'web', '2022-02-27 22:36:32', '2022-02-27 22:36:32'),
(84, 'deleteunit', 'brandaccount', '2022-02-27 22:36:32', '2022-02-27 22:36:32'),
(85, 'viewcategory', 'web', '2022-02-27 22:36:33', '2022-02-27 22:36:33'),
(86, 'viewcategory', 'brandaccount', '2022-02-27 22:36:33', '2022-02-27 22:36:33'),
(87, 'newcategory', 'web', '2022-02-27 22:36:33', '2022-02-27 22:36:33'),
(88, 'newcategory', 'brandaccount', '2022-02-27 22:36:33', '2022-02-27 22:36:33'),
(89, 'editcategory', 'web', '2022-02-27 22:36:33', '2022-02-27 22:36:33'),
(90, 'editcategory', 'brandaccount', '2022-02-27 22:36:33', '2022-02-27 22:36:33'),
(91, 'deletecategory', 'web', '2022-02-27 22:36:33', '2022-02-27 22:36:33'),
(92, 'deletecategory', 'brandaccount', '2022-02-27 22:36:33', '2022-02-27 22:36:33'),
(93, 'viewwarehouse', 'web', '2022-02-27 22:36:33', '2022-02-27 22:36:33'),
(94, 'viewwarehouse', 'brandaccount', '2022-02-27 22:36:33', '2022-02-27 22:36:33'),
(95, 'newwarehouse', 'web', '2022-02-27 22:36:33', '2022-02-27 22:36:33'),
(96, 'newwarehouse', 'brandaccount', '2022-02-27 22:36:33', '2022-02-27 22:36:33'),
(97, 'editwarehouse', 'web', '2022-02-27 22:36:33', '2022-02-27 22:36:33'),
(98, 'editwarehouse', 'brandaccount', '2022-02-27 22:36:34', '2022-02-27 22:36:34'),
(99, 'deletewarehouse', 'web', '2022-02-27 22:36:34', '2022-02-27 22:36:34'),
(100, 'deletewarehouse', 'brandaccount', '2022-02-27 22:36:34', '2022-02-27 22:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `effective` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `effective`, `description`, `created_at`, `updated_at`) VALUES
(56378, 'BIODERMA SENSIBIO EYE GEL 15ML @', 'bioderma-sensibio-eye-gel-15ml-at', 'PARAFFIN+GLYCERINE', NULL, '2022-02-27 22:56:58', '2022-02-27 22:56:58'),
(56379, 'CO-DILATROL 30TAB @', 'co-dilatrol-30tab-at', 'CARVEDILOL+HYDROCHLOROTHIAZIDE', NULL, '2022-02-27 22:56:58', '2022-02-27 22:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2022-02-27 22:36:34', '2022-02-27 22:36:34'),
(2, 'Admin', 'brandaccount', '2022-02-27 22:36:39', '2022-02-27 22:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 1),
(4, 2),
(5, 1),
(6, 2),
(7, 1),
(8, 2),
(9, 1),
(10, 2),
(11, 1),
(12, 2),
(13, 1),
(14, 2),
(15, 1),
(16, 2),
(17, 1),
(18, 2),
(19, 1),
(20, 2),
(21, 1),
(22, 2),
(23, 1),
(24, 2),
(25, 1),
(26, 2),
(27, 1),
(28, 2),
(29, 1),
(30, 2),
(31, 1),
(32, 2),
(33, 1),
(34, 2),
(35, 1),
(36, 2),
(37, 1),
(38, 2),
(39, 1),
(40, 2),
(41, 1),
(42, 2),
(43, 1),
(44, 2),
(45, 1),
(46, 2),
(47, 1),
(48, 2),
(49, 1),
(50, 2),
(51, 1),
(52, 2),
(53, 1),
(54, 2),
(55, 1),
(56, 2),
(57, 1),
(58, 2),
(59, 1),
(60, 2),
(61, 1),
(62, 2),
(63, 1),
(64, 2),
(65, 1),
(66, 2),
(67, 1),
(68, 2),
(69, 1),
(70, 2),
(71, 1),
(72, 2),
(73, 1),
(74, 2),
(75, 1),
(76, 2),
(77, 1),
(78, 2),
(79, 1),
(80, 2),
(81, 1),
(82, 2),
(83, 1),
(84, 2),
(85, 1),
(86, 2),
(87, 1),
(88, 2),
(89, 1),
(90, 2),
(91, 1),
(92, 2),
(93, 1),
(94, 2),
(95, 1),
(96, 2),
(97, 1),
(98, 2),
(99, 1),
(100, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'اقراص', 'akras', '2022-02-27 22:37:39', '2022-02-27 22:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warehouse_id` int(10) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `warehouse_id`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Brand', 'mgalaladmin@gmail.com', NULL, '$2y$10$kZbGtzgczEA.qWcTtPo0Eu6GGUJ7LSWVVZmtTlVNhrlvK7bB2bRuK', '0000', NULL, 1, NULL, '2022-02-27 22:36:34', '2022-02-27 22:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warehouses`
--

INSERT INTO `warehouses` (`id`, `name`, `slug`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Main', 'main', NULL, NULL, '2022-02-27 22:37:29', '2022-02-27 22:37:29');

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
-- Indexes for table `brandaccounts`
--
ALTER TABLE `brandaccounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brandaccounts_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_warehouse_product_id_foreign` (`warehouse_product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `brandaccounts`
--
ALTER TABLE `brandaccounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56380;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `warehouse_product`
--
ALTER TABLE `warehouse_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56376;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_warehouse_product_id_foreign` FOREIGN KEY (`warehouse_product_id`) REFERENCES `warehouse_product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

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
