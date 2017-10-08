-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2017 at 02:01 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comment`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `verification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `verification`, `title`, `category`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Newsy', 'Newsy', 'Fast Food', 'images/Categories/2017-10-08-10-48-51_71e371eb6d00a9c6abb96dd6f28e85d20118f0da.jpg', 1, '2017-10-08 04:40:21', '2017-10-08 04:48:51'),
(2, 'Basmati', 'Basmati', 'Authentic', 'images/Categories/2017-10-08-10-48-20_f2094c0272e97e451a4c94b8b225b37153d09f1b.jpg', 1, '2017-10-08 04:46:22', '2017-10-08 04:48:20'),
(3, 'Dum Phoonk', 'Dum Phoonk', 'Exquisite', 'images/Categories/2017-10-08-10-59-46_ddb2d4d97dbf8c07f58c77ceb39955c32ccc8042.jpg', 4, '2017-10-08 04:59:46', '2017-10-08 05:00:38'),
(4, 'Paraiso Bistro', 'Paraiso Bistro', 'Indoor', 'images/Categories/2017-10-08-11-05-57_46daca07604d9b06813821e56d6ca75e1de8e9e4.jpg', 4, '2017-10-08 05:02:58', '2017-10-08 05:05:57'),
(5, 'Pasta Villa', 'Pasta Villa', 'Fast Food', 'images/Categories/2017-10-08-11-06-28_0e92985d28335b09f34b5289aa24081c41ccc371.jpg', 4, '2017-10-08 05:06:28', '2017-10-08 05:06:28'),
(6, 'Haldi arabian house', 'Haldi arabian house', 'Exquisite', 'images/Categories/2017-10-08-11-07-46_090f3bf92010a26cd6b59656d394314630a898eb.jpg', 2, '2017-10-08 05:07:46', '2017-10-08 05:07:46'),
(7, 'pizza hut', 'pizza hut', 'Fast Food', 'images/Categories/2017-10-08-11-08-09_d09071f5cd981fa2f9eba78a3964ea5b1c5c8dad.jpg', 2, '2017-10-08 05:08:09', '2017-10-08 05:08:09'),
(8, 'The Gallery', 'The Gallery', 'Indoor', 'images/Categories/2017-10-08-11-08-41_299a96e35aebec498c595fefc62f98000b74a1cf.jpg', 2, '2017-10-08 05:08:41', '2017-10-08 05:08:41'),
(9, 'Delhi Darbar', 'Delhi Darbar', 'Authentic', 'images/Categories/2017-10-08-11-09-21_9aa8ec67c0f814982d76804e2a6a24327f1be433.jpg', 2, '2017-10-08 05:09:21', '2017-10-08 05:09:21'),
(10, 'cafe 2441139', 'cafe 2441139', 'Fast Food', 'images/Categories/2017-10-08-11-09-52_5168aa94d79e4eca509e8447e06c204a0e9baf9f.png', 2, '2017-10-08 05:09:52', '2017-10-08 05:09:52'),
(11, 'La Gondola', 'La Gondola', 'Indoor', 'images/Categories/2017-10-08-11-11-13_93d50e5c9819fc1b2ac81a63698fa00ea2190853.jpg', 3, '2017-10-08 05:11:13', '2017-10-08 05:11:13'),
(12, 'cocoloco', 'cocoloco', 'Fast Food', 'images/Categories/2017-10-08-11-11-51_9ad2017a97555b3e4fd511ed2e680420e710260d.png', 3, '2017-10-08 05:11:51', '2017-10-08 05:11:51'),
(13, 'cafe 88', 'cafe 88', 'Exquisite', 'images/Categories/2017-10-08-11-12-18_39f1c35dacbf0d56ec70ba5b7bcd99bc800fdad2.jpg', 3, '2017-10-08 05:12:18', '2017-10-08 05:12:18'),
(14, 'cafe 24', 'cafe 24', 'Outdoor', 'images/Categories/2017-10-08-11-12-42_c83b7e7e4200864f4cbcb9cd9c643b3e18f61871.jpg', 3, '2017-10-08 05:12:42', '2017-10-08 05:12:42'),
(15, 'roof bbq & steak', 'roof bbq & steak', 'RoofTop', 'images/Categories/2017-10-08-11-13-07_0332985532d4fd0ce7fc347accb53d6ba62cc946.jpg', 3, '2017-10-08 05:13:07', '2017-10-08 05:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 'Which time? It\'s avail at noon', 1, 1, '2017-10-08 05:57:30', '2017-10-08 05:58:10'),
(2, 'ok..thanks!', 2, 1, '2017-10-08 05:58:59', '2017-10-08 05:58:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_09_24_201028_create_posts_table', 1),
(4, '2017_09_24_211325_create_comments_table', 1),
(5, '2017_09_27_041734_create_categories_table', 1),
(6, '2017_09_27_042648_create_seats_table', 1),
(7, '2017_09_30_041339_create_reservations_table', 1),
(8, '2017_09_30_050626_create_payments_table', 1),
(9, '2017_10_05_064248_create_restaurants_table', 1),
(10, '2017_10_08_114913_create_payments_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `verification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `verification`, `title`, `transaction_type`, `mobile_no`, `transaction_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Barcode Cafe', 'Barcode Cafe', 'bKash', 1557892741, '456MBGE021', 2, '2017-10-08 05:54:47', '2017-10-08 05:55:09'),
(2, 'Barcode on fire', 'Barcode on fire', 'rocket', 1868657080, '854KYTV012', 2, '2017-10-08 05:55:59', '2017-10-08 05:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '#Query', 'Is mermaid cafe available for tomorrow??', '', 2, '2017-10-08 05:56:37', '2017-10-08 05:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rev_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rev_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_seat` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `title`, `type`, `rev_date`, `rev_time`, `total_seat`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Errante', 'RoofTop', '10.10.17', '4:00', 6, 1, '2017-10-08 04:36:59', '2017-10-08 04:36:59'),
(2, 'Mermaid Cafe', 'Corner', '11.10.17', '2:30', 4, 2, '2017-10-08 06:00:38', '2017-10-08 06:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(10) UNSIGNED NOT NULL,
  `verification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_seat` int(11) NOT NULL,
  `avail_seat` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `verification`, `title`, `description`, `total_seat`, `avail_seat`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Errante', 'Errante', 'vcyduvioadhvoiabciuaiwuwcbckasbchabfhbfj', 50, 25, 'images/restaurants/2017-10-08-10-35-03_c9fdb08cad924b81e1fdec655db9ec8938758b2d.jpg', 1, '2017-10-08 03:44:45', '2017-10-08 04:35:03'),
(2, 'Handi', 'Handi', 'jgihg9erjgpoejfowh983o', 40, 20, 'images/restaurants/2017-10-08-09-46-33_efe98c73ad86fd5aee5ebfab5f44a003af8b46e4.jpg', 1, '2017-10-08 03:46:33', '2017-10-08 03:46:33'),
(3, 'Mermaid Cafe', 'Mermaid Cafe', 'suhgurhgh08', 25, 15, 'images/restaurants/2017-10-08-09-47-51_33866f26fc0796b88b6d5b298dcf4a9cffb1ef09.jpg', 1, '2017-10-08 03:47:51', '2017-10-08 03:47:51'),
(4, 'Basmati', 'Basmati', 'ufweu9eu', 30, 15, 'images/restaurants/2017-10-08-09-49-24_daff27716bf62f2f1fc0e3255ca90b0549ed0673.jpg', 1, '2017-10-08 03:49:24', '2017-10-08 03:49:24'),
(5, 'Barcode Cafe', 'Barcode Cafe', 'ripierypou[0e', 60, 25, 'images/restaurants/2017-10-08-10-51-03_86dbd86556717c39ce32458964561705b7a55ed0.png', 2, '2017-10-08 04:51:03', '2017-10-08 04:51:03'),
(6, 'Burgwich Town', 'Burgwich Town', 'rslihgrwihjpro', 30, 25, 'images/restaurants/2017-10-08-10-51-33_11d72c9cda8500da0da5e4c0b27e0d47cde45c85.png', 2, '2017-10-08 04:51:33', '2017-10-08 04:51:33'),
(7, 'Shwarma House', 'Shwarma House', 'dfhgourwihri', 15, 15, 'images/restaurants/2017-10-08-10-52-04_73c397a94c01f9970b7cb100b1719fa0a638a9c1.jpg', 2, '2017-10-08 04:52:04', '2017-10-08 04:52:04'),
(8, 'Barcode On Fire', 'Barcode On Fire', 'jgosurhgsirgjpoirs', 35, 22, 'images/restaurants/2017-10-08-10-52-56_0f2eacc449a8b9b460a402437b72a8318f9376d2.jpg', 2, '2017-10-08 04:52:56', '2017-10-08 04:52:56'),
(9, 'Cafe Milano', 'Cafe Milano', 'fhgoirwhgi', 30, 20, 'images/restaurants/2017-10-08-10-54-48_3ed2d47fc1fb6b08af86cee096d206571e3996da.jpg', 3, '2017-10-08 04:54:48', '2017-10-08 04:54:48'),
(10, 'melange', 'melange', 'uhfout3i', 65, 60, 'images/restaurants/2017-10-08-10-55-26_345ef6eaa30b2669889efaad18fb2320fe23bb06.jpg', 3, '2017-10-08 04:55:26', '2017-10-08 04:55:26'),
(11, 'meridian', 'meridian', 'sdjghoighirh', 70, 60, 'images/restaurants/2017-10-08-10-55-53_cb6dc3f96eb89cfc38c9f3fec7a369f0bb1197e2.jpg', 3, '2017-10-08 04:55:53', '2017-10-08 04:55:53'),
(12, 'Bhoj', 'Bhoj', 'augfuehgoiwgh', 20, 20, 'images/restaurants/2017-10-08-10-57-21_65f106312fd3bf3ca7dcefe557659dc46fd1c9d9.png', 4, '2017-10-08 04:57:21', '2017-10-08 04:57:21'),
(13, 'Broast', 'Broast', 'dgfiuwgiegh', 50, 50, 'images/restaurants/2017-10-08-10-57-51_dba4120b20a2a7b7cd15933ad5dd42cd625aaea4.jpg', 4, '2017-10-08 04:57:51', '2017-10-08 04:57:51'),
(14, 'Handi Indian Bistro', 'Handi Indian Bistro', 'djfoirhie', 35, 35, 'images/restaurants/2017-10-08-10-59-03_d6ccf74dfc43b0916ce386c00d3635021c18a0a0.jpg', 4, '2017-10-08 04:59:03', '2017-10-08 04:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(10) UNSIGNED NOT NULL,
  `verification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `verification`, `title`, `price`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Errante', 'Errante', '21.00', 'images/Seats/2017-10-08-10-38-15_5e0dc76d7f4f79217d66a8d5dd4fe8d3ae9f07a7.jpg', 1, '2017-10-08 04:38:15', '2017-10-08 04:38:15'),
(2, 'hunger games', 'hunger games', '14.00', 'images/Seats/2017-10-08-11-13-50_e6a9cc8db10fe00427b278ae2749ea1261ca306e.jpg', 3, '2017-10-08 05:13:50', '2017-10-08 05:13:50'),
(3, 'Gharana', 'Gharana', '18.00', 'images/Seats/2017-10-08-11-14-21_632a862949efb0215bf3d04d8c395439f4c619b5.jpg', 3, '2017-10-08 05:14:21', '2017-10-08 05:14:21'),
(4, 'majlish', 'majlish', '19.00', 'images/Seats/2017-10-08-11-15-07_da8868d4207b7a768d986add0d67453bbb8f7cd4.jpg', 3, '2017-10-08 05:15:07', '2017-10-08 05:15:07'),
(5, 'greedy guts', 'greedy guts', '24.00', 'images/Seats/2017-10-08-11-19-29_2454d6f1f28346cb74b582e6bd1e7624d4476c57.jpg', 3, '2017-10-08 05:16:09', '2017-10-08 05:19:29'),
(6, 'milano', 'milano', '11.00', 'images/Seats/2017-10-08-11-17-07_8a48dc313cc0436236af397fe967082447b5657f.jpg', 4, '2017-10-08 05:17:07', '2017-10-08 05:17:07'),
(7, 'radisson blu', 'radisson blu', '75.00', 'images/Seats/2017-10-08-11-17-34_0257110c2a38d8038cc6ce3ba4011df0701b4624.jpg', 4, '2017-10-08 05:17:34', '2017-10-08 05:17:34'),
(8, 'Randevu', 'Randevu', '25.00', 'images/Seats/2017-10-08-11-17-53_68e0266e8c59b0a531283610293edf2484faaa7d.jpg', 4, '2017-10-08 05:17:53', '2017-10-08 05:17:53'),
(9, 'Peninsula', 'Peninsula', '55.00', 'images/Seats/2017-10-08-11-18-19_8b2ad0f8c9cd919c8ef23f543262d9bf073d18b4.jpg', 4, '2017-10-08 05:18:19', '2017-10-08 05:18:19'),
(10, 'Green Chilli', 'Green Chilli', '13.00', 'images/Seats/2017-10-08-11-20-41_0deed21ae266da450f34c4ded0de8c4090bfd607.jpeg', 3, '2017-10-08 05:20:41', '2017-10-08 05:20:41'),
(11, 'Avalon', 'Avalon', '21.00', 'images/Seats/2017-10-08-11-21-53_1ec582bceb0d983a1f952b282380dbd6ed6bd16a.jpg', 2, '2017-10-08 05:21:53', '2017-10-08 05:21:53'),
(12, 'Afghan', 'Afghan', '10.00', 'images/Seats/2017-10-08-11-22-11_216471eaf76e55fc452bb3e1b8affcf5563e7909.jpg', 2, '2017-10-08 05:22:11', '2017-10-08 05:22:11'),
(13, 'Ambrosia', 'Ambrosia', '30.00', 'images/Seats/2017-10-08-11-22-30_2d4f1c55fe3bc7232096e2e74b63d81a9dde5402.jpg', 2, '2017-10-08 05:22:30', '2017-10-08 05:22:30'),
(14, 'red chilli', 'red chilli', '9.00', 'images/Seats/2017-10-08-11-23-24_6b9ed4ba299e305b37fa4399c02eba906be70ef4.jpg', 2, '2017-10-08 05:23:24', '2017-10-08 05:23:24'),
(15, 'impala', 'impala', '15.00', 'images/Seats/2017-10-08-11-23-58_2454d6f1f28346cb74b582e6bd1e7624d4476c57.jpg', 2, '2017-10-08 05:23:58', '2017-10-08 05:23:58'),
(16, 'impala', 'impala', '15.00', 'images/Seats/2017-10-08-11-23-58_2454d6f1f28346cb74b582e6bd1e7624d4476c57.jpg', 2, '2017-10-08 05:23:58', '2017-10-08 05:23:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'meehan', 'meehan@gmail.com', '$2y$10$ZUHegywHPx9Xk80J6YioEe/GoUo0EGBVSnLPDCp6DAYPp6mHN8sbq', '', 'zuy31zjy2fNCjHqc0QpVwMi5GJDIfOybWrRscXEvzz2Vr6n6r56aEfBU2xX7', '2017-10-08 03:40:24', '2017-10-08 03:40:24'),
(2, 'nazma', 'nazma@gmail.com', '$2y$10$l.joy/iYRr4VPpQX8bljlueTsc0eGgykQkLUrzmiQDeuH3l3wkXNm', '', 'gOOrfG0bsKG9bcVVKsZfaw3gLScoVH7hq6JEzj4yzHvZIMFkHyUOiAbhmUpK', '2017-10-08 04:50:18', '2017-10-08 04:50:18'),
(3, 'ummul', 'ummul@gmail.com', '$2y$10$Af7QVpwCoEhfvmdKrtjTa.49ADm9rfHStNf3kKpGRo7V9tW8uK/tG', '', 'FJ1pYBYwDKrFCqWkHn2ISs2w5FkHyObCQlTYIQfZ7GFlQM7LQqpKGgVqYoWz', '2017-10-08 04:53:55', '2017-10-08 04:53:55'),
(4, 'fatema', 'fatema@gmail.com', '$2y$10$RIs6N79EHrxiCwG8W.YcG.yZHfTHa3rpnPVaukhLFUqSiY9jIEZ8S', '', 'rVkXuiRtKuBlwQLesvcdJsDjM0ojX3fpxPfl47hU6P28osVKijH5HADSJzuz', '2017-10-08 04:56:32', '2017-10-08 04:56:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_user_id_foreign` (`user_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurants_user_id_foreign` (`user_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seats_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `seats_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
