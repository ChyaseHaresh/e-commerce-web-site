-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2022 at 04:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'vishal@gmail.com', '$2y$10$nmRcN2K1yHlWmKOuonTlOuJTm.TcvDjR3aF3Z1XYwBxKRAzBqkvrm', '2021-01-15 21:27:18', '2021-01-16 16:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `is_home` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `status`, `is_home`, `created_at`, `updated_at`) VALUES
(2, 'Adidas', '1613553941.jpg', 1, 1, '2021-02-17 03:55:41', '2021-02-17 03:55:41'),
(6, 'Facebook', '1663747778.png', 1, 0, '2022-09-21 02:24:38', '2022-09-21 02:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_attr_id` int(11) DEFAULT NULL,
  `size` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `qty`, `product_id`, `product_attr_id`, `size`, `color`, `added_on`) VALUES
(7, 14, 1, 3, 4, '', '', '2021-04-23 08:37:41'),
(15, 8, 1, 2, 3, '', '', '2021-04-28 02:12:14'),
(16, 4, 1, 17, 23, '', '', '2022-10-01 05:24:17'),
(17, 4, 1, 21, 24, 'XXL', 'Black', '2022-10-02 01:29:46'),
(19, 5, 1, 22, 21, 'L', 'Green', '2022-10-06 04:47:15'),
(21, 7, 1, 22, 21, 'L', 'Green', '2022-10-07 01:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_category_id` int(11) NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_home` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `parent_category_id`, `category_image`, `is_home`, `status`, `created_at`, `updated_at`) VALUES
(14, 'Fashion', 'fashion', 0, '1663843124.webp', 0, 1, '2022-09-18 08:10:24', '2022-09-18 08:10:24'),
(16, 'Clothing', 'clothing', 14, '1663747639.jpg', 0, 1, '2022-09-21 02:22:19', '2022-09-21 02:22:19'),
(17, 'Beauty', 'beauty', 0, '1663840090.webp', 1, 1, '2022-09-22 04:03:10', '2022-09-22 04:03:10'),
(18, 'Electronics', 'eectronics', 0, '1663842351.webp', 1, 1, '2022-09-22 04:40:51', '2022-09-22 04:40:51'),
(19, 'Laptop', 'laptop', 18, '1663842670.webp', 1, 1, '2022-09-22 04:46:10', '2022-09-22 04:47:23'),
(20, 'Smart Phone', 'smartphone', 18, '1663842731.webp', 1, 1, '2022-09-22 04:47:11', '2022-09-22 04:47:11'),
(21, 'Desktop', 'Desktop', 18, '1663842798.webp', 1, 1, '2022-09-22 04:48:18', '2022-09-22 04:48:18'),
(22, 'Camera', 'camera', 18, '1663842858.webp', 1, 1, '2022-09-22 04:49:18', '2022-09-22 04:49:18'),
(23, 'Brushes', 'brushes', 17, '1663842941.webp', 1, 1, '2022-09-22 04:50:41', '2022-09-22 04:50:41'),
(24, 'Shampoo', 'shampoo', 17, '1663842989.webp', 1, 1, '2022-09-22 04:51:29', '2022-09-22 04:51:29'),
(25, 'Cosmetics', 'cosmetics', 17, '1663843053.webp', 1, 1, '2022-09-22 04:52:33', '2022-09-22 04:52:33'),
(26, 'T-Shirt', 'tshirt', 14, '1663843124.webp', 1, 1, '2022-09-22 04:53:44', '2022-09-22 04:53:44'),
(27, 'Sweater', 'sweater', 14, '1663843218.webp', 1, 1, '2022-09-22 04:55:18', '2022-09-22 04:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Black', 1, '2021-01-25 21:12:11', '2021-01-28 05:15:28'),
(2, 'Red', 1, '2021-01-25 21:12:22', '2021-01-28 04:02:42'),
(3, 'White', 1, '2021-02-17 04:01:35', '2021-02-17 04:01:35'),
(4, 'Cream', 1, '2021-02-24 00:57:35', '2021-02-24 00:57:35'),
(5, 'Green', 1, '2021-02-24 00:57:45', '2021-02-24 00:57:45'),
(6, 'Purple', 1, '2021-02-24 00:57:57', '2021-02-24 00:57:57'),
(7, 'Blue', 1, '2021-02-24 01:00:15', '2021-02-24 01:00:15'),
(8, 'Yellow', 1, '2021-02-24 01:06:42', '2021-02-24 01:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Value','Per') COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_order_amt` int(11) NOT NULL,
  `is_one_time` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `title`, `code`, `value`, `type`, `min_order_amt`, `is_one_time`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jan Coupon', 'Jan2021', '140', 'Value', 1000, 0, 1, '2021-01-20 04:43:32', '2022-10-04 05:11:25'),
(4, 'New Coupon', 'New', '15', 'Per', 1000, 0, 1, '2021-02-05 02:32:37', '2022-10-04 06:33:38');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gstin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `is_verify` int(11) NOT NULL,
  `is_forgot_password` int(11) NOT NULL,
  `rand_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `mobile`, `password`, `address`, `city`, `state`, `zip`, `company`, `gstin`, `status`, `is_verify`, `is_forgot_password`, `rand_id`, `created_at`, `updated_at`) VALUES
(1, 'Vishal Gupta', 'vishal@gmail.com', '9999999999', 'vishal', 'Address1', 'Delhi', 'Delhi', '111111', 'My Company Name', 'ABCDEGGST', 0, 0, 0, '', '2021-02-08 08:14:02', '2021-02-08 03:16:54'),
(8, 'Vishal', 'learnweblessons@gmail.com', '9999999999', 'eyJpdiI6IlpFVW5ZenFmWUxQOHEvWC90TlhreXc9PSIsInZhbHVlIjoid1RBa1lWbEl4WGF1QjlsV1ZtMnB5QT09IiwibWFjIjoiZTUwOWU0MDYxNGQ3MjZhMmQ5OWZkMGE2Njc1Yjc1MGI5ZThkODFlNjNiMmUzN2Y5ZmI5NTgyNWQ1N2FhOTRkZCJ9', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '302653259', '2021-03-12 03:09:52', '2021-03-12 03:09:52'),
(15, 'Amit Gupta', 'phpvishal@gmail.com', '9999999999', 'eyJpdiI6IlpFVW5ZenFmWUxQOHEvWC90TlhreXc9PSIsInZhbHVlIjoid1RBa1lWbEl4WGF1QjlsV1ZtMnB5QT09IiwibWFjIjoiZTUwOWU0MDYxNGQ3MjZhMmQ5OWZkMGE2Njc1Yjc1MGI5ZThkODFlNjNiMmUzN2Y5ZmI5NTgyNWQ1N2FhOTRkZCJ9', 'test', 'asd', 'asd', '4534545345', NULL, NULL, 1, 1, 0, '165808257', '2021-04-23 03:16:10', '2021-04-23 03:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `home_banners`
--

CREATE TABLE `home_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_txt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_banners`
--

INSERT INTO `home_banners` (`id`, `image`, `btn_txt`, `btn_link`, `status`, `created_at`, `updated_at`) VALUES
(3, '1663835192.webp', 'Shop now', 'y ysd', 1, '2022-09-22 02:41:32', '2022-09-22 02:41:32'),
(4, '1663835781.webp', 'See More', NULL, 1, '2022-09-22 02:51:21', '2022-09-22 02:51:21'),
(5, '1663836317.webp', 'View More', NULL, 1, '2022-09-22 03:00:17', '2022-09-22 03:00:17');

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
(1, '2021_01_15_211334_create_admins_table', 1),
(4, '2021_01_15_215552_create_categories_table', 2),
(5, '2021_01_20_095632_create_coupons_table', 3),
(10, '2021_01_21_115714_create_ajaxes_table', 4),
(12, '2021_01_26_021550_create_sizes_table', 5),
(13, '2021_01_26_023140_create_colors_table', 6),
(14, '2021_01_28_104722_create_products_table', 7),
(15, '2021_02_03_114909_create_brands_table', 8),
(16, '2021_02_05_082218_create_taxes_table', 9),
(17, '2021_02_08_081113_create_customers_table', 10),
(18, '2021_02_17_200040_create_home_banners_table', 11),
(19, '2022_09_20_014358_create_settings_table', 12),
(20, '2014_10_12_000000_create_users_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(25) NOT NULL,
  `coupon_code` varchar(50) DEFAULT NULL,
  `coupon_value` int(11) DEFAULT NULL,
  `order_status` int(11) NOT NULL,
  `payment_type` varchar(40) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_id` varchar(50) DEFAULT NULL,
  `txn_id` varchar(100) DEFAULT NULL,
  `total_amt` int(11) NOT NULL,
  `track_details` text DEFAULT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customers_id`, `name`, `email`, `phone`, `address`, `city`, `state`, `zip`, `coupon_code`, `coupon_value`, `order_status`, `payment_type`, `payment_status`, `payment_id`, `txn_id`, `total_amt`, `track_details`, `added_on`) VALUES
(1, 8, 'Vishal', 'learnweblessons@gmail.com', '9999999999', '111- Block A', 'Noida', 'UP', '110076', 'Jan2021', 140, 3, 'COD', 'Pending', NULL, NULL, 2431, 'Reached Noida', '2021-04-28 02:06:48'),
(4, 9, 'Vishal', 'learnweblessons@gmail.com', '9999999999', '321, A Block', 'Noida', 'UP', '110076', NULL, 0, 1, 'Gateway', 'Success', 'MOJO1428605A42955789', 'f603950d38354bd2a72cb75b20d11fc3', 2997, 'On the way', '2021-04-28 02:09:23'),
(7, 4, 'Shreya Rai', 'shreya@gmail.com', '9808859614', 'Thaiba', 'Lalitpur', 'Bagmati', '44600', NULL, 0, 1, 'COD', 'Pending', NULL, NULL, 825873, NULL, '2022-10-05 05:51:32'),
(25, 5, 'Haresh', 'haresh@gmail.com', '9808859614', 'Thaiba', 'Lalitpur', 'Bagmati', '44600', NULL, 0, 2, 'Khalti Wallet payment', 'Success', 'DhvMj9hdRufLqkP8ZY4d8g', 'LEDL8mW9N6UawfFdxeTXTC', 123, 'on the way', '2022-10-06 07:07:35'),
(27, 5, 'Haresh                 Chyase', 'haresh@gmail.com', '9808859614', 'Thaiba', 'Lalitpur', 'Bagmati', '44600', NULL, 0, 1, 'Cash on Delivery', 'Completed', NULL, NULL, 123, NULL, '2022-10-07 05:28:08'),
(28, 7, 'Zenitsu Agatsuma', 'kaledon043@gmail.com', '9808859614', 'Thaiba', 'Lalitpur', 'Bagmati', '44600', NULL, 0, 1, 'Khalti Wallet payment', 'Success', 'DhvMj9hdRufLqkP8ZY4d8g', 'UvVpACGmDcZLTSCNL4z7nU', 123, NULL, '2022-10-07 01:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `orders_details`
--

CREATE TABLE `orders_details` (
  `id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `products_attr_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_details`
--

INSERT INTO `orders_details` (`id`, `orders_id`, `product_id`, `products_attr_id`, `price`, `qty`) VALUES
(1, 1, 1, 1, 10, 2),
(2, 1, 3, 4, 2411, 1),
(7, 4, 2, 3, 1199, 1),
(29, 16, 22, 21, 123, 1),
(30, 17, 22, 21, 123, 1),
(31, 18, 22, 21, 123, 1),
(32, 19, 22, 21, 123, 1),
(33, 20, 22, 21, 123, 1),
(34, 21, 22, 21, 123, 1),
(35, 22, 22, 21, 123, 1),
(36, 23, 22, 21, 123, 1),
(37, 24, 22, 21, 123, 1),
(38, 25, 22, 21, 123, 1),
(39, 26, 22, 21, 123, 1),
(40, 27, 22, 21, 123, 1),
(41, 28, 22, 21, 123, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders_status`
--

CREATE TABLE `orders_status` (
  `id` int(11) NOT NULL,
  `orders_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_status`
--

INSERT INTO `orders_status` (`id`, `orders_status`) VALUES
(1, 'Placed'),
(2, 'On The Way'),
(3, 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` bigint(20) NOT NULL,
  `mrp` bigint(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_promo` int(11) NOT NULL,
  `is_featured` int(11) NOT NULL,
  `is_tranding` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `sku`, `mrp`, `price`, `image`, `brand`, `desc`, `keywords`, `is_promo`, `is_featured`, `is_tranding`, `status`, `created_at`, `updated_at`) VALUES
(16, 26, 'fBaXz9V2Ok', 'fBaXz9V2Ok', 696496, 169505, 489568, '1663864231.webp', '2', '<p>vcz</p>', '6tIlLSCBtm', 1, 1, 1, 1, '2022-09-22 10:45:31', '2022-09-22 10:45:31'),
(17, 26, 'SfBaXz9V2Ok', 'SfBaXz9V2Ok', 3344, 774425, 821473, '1663864350.webp', '2', '<p>CDFD</p>', '2BoadazV8k', 1, 1, 1, 1, '2022-09-22 10:47:30', '2022-09-22 10:47:30'),
(18, 23, 'Keyboard', 'Keyboard', 11, 123, 123, '1663914507.webp', '2', '<p>ssssdaa daa</p>', 'aaae cff fdfd', 1, 1, 0, 1, '2022-09-23 00:43:27', '2022-09-23 00:43:27'),
(19, 21, 'Watch', 'Watch', 13, 5000, 4900, '1663915271.webp', '2', '<p>sdadf ddvd&nbsp;</p>', 'sdsf daa a', 0, 1, 0, 1, '2022-09-23 00:56:11', '2022-09-23 00:56:11'),
(20, 18, 'Fan', 'Fan', 124, 3400, 2290, '1663915455.webp', '6', '<p>sfffsssawwew</p>', 'csxzsC', 0, 1, 0, 1, '2022-09-23 00:59:15', '2022-09-23 00:59:15'),
(21, 18, 'Mouse', 'Mouse', 12345, 4500, 4400, '1663915742.webp', '6', '<p>free dg</p>', 'eed dd', 0, 1, 0, 1, '2022-09-23 01:04:02', '2022-09-23 01:04:02'),
(22, 20, 'Mutiplug', 'Mutiplug', 234, 230, 123, '1663916035.webp', '2', '<p>ddm ds/mj fd&nbsp;</p>\r\n\r\n<p>cdvd&nbsp;</p>\r\n\r\n<p>xvx</p>', 'dgv f9rd ddg', 0, 1, 0, 1, '2022-09-23 01:08:55', '2022-09-23 01:08:55');

-- --------------------------------------------------------

--
-- Table structure for table `products_attr`
--

CREATE TABLE `products_attr` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `attr_image` varchar(255) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_attr`
--

INSERT INTO `products_attr` (`id`, `products_id`, `attr_image`, `qty`, `size_id`, `color_id`) VALUES
(1, 1, '705130315.jpg', 5, 2, 1),
(2, 1, '509937030.jpg', 3, 1, 7),
(3, 2, '499793402.png', 3, 1, 1),
(4, 3, '608075258.jpg', 18, 0, 1),
(5, 4, '115102277.jpg', 5, 0, 0),
(6, 1, '216831743.jpg', 23, 3, 8),
(7, 1, '436707592.jpg', 31, 2, 5),
(8, 5, '876182961.png', 5, 4, 7),
(9, 6, '806128475.png', 5, 4, 2),
(10, 7, '926300101.png', 5, 2, 3),
(11, 13, '788751093.png', 6, 1, 8),
(12, 14, '772282082.png', 4, 2, 7),
(13, 15, '825784217.png', 4, 3, 8),
(14, 15, '602497181.png', 2, 4, 7),
(15, 16, '432824325.webp', 3, 3, 4),
(16, 17, '788994097.webp', 0, 3, 4),
(17, 18, '764129385.png', 5, 2, 5),
(18, 19, '480446744.webp', 3, 3, 5),
(19, 20, '449483205.png', 23, 4, 5),
(20, 21, '439702914.webp', 4, 3, 6),
(21, 22, '167958561.png', 5, 3, 5),
(22, 20, '219810051.webp', 3, 2, 5),
(23, 17, '302440785.jpg', 1, 2, 2),
(24, 21, '300237473.png', 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `products_id`, `images`) VALUES
(1, 1, '334424773.jpg'),
(5, 1, '546654238.jpg'),
(6, 1, '476621397.jpg'),
(7, 5, '296562492.png'),
(8, 6, '383249920.png'),
(9, 7, '336940264.png'),
(10, 7, '112988873.png'),
(11, 7, '457773592.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `rating` varchar(20) NOT NULL,
  `review` text NOT NULL,
  `status` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`id`, `customer_id`, `products_id`, `rating`, `review`, `status`, `added_on`) VALUES
(1, 8, 2, 'Very Good', 'I really like this product', 1, '2021-05-06 05:25:19'),
(2, 15, 2, 'Fantastic', 'Very good quality at this price', 1, '2021-05-06 05:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_map` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `robot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custome_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `website_name`, `logo`, `primary_color`, `phone_number`, `site_map`, `robot`, `custome_code`, `created_at`, `updated_at`) VALUES
(1, 'Elscript Technology', 'abc.png', '#3cb878', '9876543422', 'fgr fdf ', 'yu.txt', 'yj6uns re e', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `status`, `created_at`, `updated_at`) VALUES
(1, 'XXL', 1, '2021-01-25 20:56:46', '2021-01-28 05:15:24'),
(2, 'XL', 1, '2021-02-24 00:58:04', '2021-02-24 00:58:04'),
(3, 'L', 1, '2021-02-24 00:58:08', '2021-02-24 00:58:08'),
(4, 'M', 1, '2021-02-24 00:58:13', '2021-02-24 00:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `taxs`
--

CREATE TABLE `taxs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxs`
--

INSERT INTO `taxs` (`id`, `tax_desc`, `tax_value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'GST 12%', '12', 1, '2021-02-05 03:05:43', '2021-02-05 03:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `provider`, `provider_id`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Shreya Rai', 'shreya@gmail.com', 9808859614, NULL, 'eyJpdiI6ImozZXVIVittby9McmlQWW1GWEZ6UWc9PSIsInZhbHVlIjoiU3pTcnVESWlBaUJNeXRRc2xxNURDQT09IiwibWFjIjoiMmFjN2U3NDgwZmVjMWQxOGE4MDk2ODZjMTg2MzdhODcxOTNkNjJlY2U2YjkwNDM1OThiNGM5NjkyNzZjMDQxYSIsInRhZyI6IiJ9', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Haresh                 Chyase', 'haresh@gmail.com', 9808859614, NULL, 'eyJpdiI6ImFiSHdXRjMzanZpRUxERTJadGZjK0E9PSIsInZhbHVlIjoiSlpRN2t4cGVvL25ld1EvUFNvVHEzbFIyVTROdWU1WFgzenVwZyt6ek1wcz0iLCJtYWMiOiJlZGFjYjVhMmMwNWQ1NWU1ODNlZGY4MWEwYTNjMzdjMGE0YWI0NjJjNTg4Njk5YjAzNGFkODE2YzJkN2UzNTJlIiwidGFnIjoiIn0=', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Ram', 'ram@gmail.com', 9808859614, NULL, '$2y$10$KXam6atUK8srSAg2AsWLt.4lhL4JKsvI0eD7O1Y9hc/VJx9GKz2xi', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Zenitsu Agatsuma', 'kaledon043@gmail.com', NULL, NULL, NULL, 'GOOGLE', '104243047509173288755', 'https://lh3.googleusercontent.com/a/ALm5wu2C1ByjHyfS4Go5EoNZ7aughWj30C38Iw_p0GrH=s96-c', NULL, '2022-10-07 07:43:37', '2022-10-07 07:43:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banners`
--
ALTER TABLE `home_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_status`
--
ALTER TABLE `orders_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_attr`
--
ALTER TABLE `products_attr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxs`
--
ALTER TABLE `taxs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `home_banners`
--
ALTER TABLE `home_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders_details`
--
ALTER TABLE `orders_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `orders_status`
--
ALTER TABLE `orders_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products_attr`
--
ALTER TABLE `products_attr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `taxs`
--
ALTER TABLE `taxs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
