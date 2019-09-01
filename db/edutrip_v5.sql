-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2019 at 08:18 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edutrip_v5`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `description`, `url`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 'Historical', 'Historical Description', 'hist-desc', 1, NULL, '2019-08-19 03:03:14', '2019-08-19 03:03:14'),
(2, 0, 'Math', 'Math Description', 'math-desc', 1, NULL, '2019-08-19 03:07:10', '2019-08-19 03:07:10'),
(3, 0, 'Science', 'Science Description', 'science-desc', 1, NULL, '2019-08-19 18:21:33', '2019-08-19 18:21:33');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_schedule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) DEFAULT NULL,
  `event_capacity` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `category_id`, `user_id`, `event_name`, `event_address`, `event_schedule`, `description`, `price`, `event_capacity`, `image`, `latitude`, `longitude`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Event 1', 'Lapu-Lapu', 'MWF', 'This is historical This is historical This is historical This is historical This is historical This is historical This is historical This is historical This is historical This is historical v v This is historical This is historical This is historical This is historical This is historical This is historical This is historical This is historical This is historical This is historical This is historical This is historical This is historical This is historical This is historical This is historical v v This is historical This is historical This is historical This is historical This is historical This is historical', 21.00, 21, '72543.jpg', 10.29088, 123.966899, 1, '2019-09-01 16:36:28', '2019-09-01 16:36:28'),
(2, 2, 1, 'Event 2', 'Cebu', 'MWF', 'This is Event 2 This is Event 2 This is Event 2 This is Event 2 This is Event 2 This is Event 2 This is Event 2 This is Event 2 This is Event 2 This is Event 2 This is Event 2 This is Event 2 This is Event 2 This is Event 2 This is Event 2', 32.00, 33, '87012.jpg', 10.29088, 123.966899, 1, '2019-09-01 16:37:32', '2019-09-01 16:37:32'),
(3, 3, 1, 'Event 2', 'Lapu - Lapu', 'TTH', 'This is Event 4', 23.00, 23, '38013.jpg', 10.32797, 123.941109, 1, '2019-09-01 16:38:32', '2019-09-01 16:38:32'),
(5, 1, 1, 'Chember Event', 'Bankal', 'asds', 'THis is chemberssss event', 12.00, 23, '37671.jpg', 10.3784342, 123.861229, 1, '2019-09-01 15:33:51', '2019-09-01 06:33:51'),
(7, 1, 10, 'gfdgf', 'hfgfgf', 'gfhg', 'jghj', 23.00, 2, '84612.jpg', NULL, NULL, 1, '2019-09-01 14:48:49', '2019-09-01 14:48:49'),
(8, 1, 1, 'sample sample', 'Bankal', 'MWF', 'this is sample sample', 100.00, 20, '76656.jpg', 10.3784342, 123.861229, 1, '2019-09-01 16:49:58', '2019-09-01 16:49:58');

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
(3, '2019_08_18_015844_create_category_table', 2),
(4, '2019_08_18_074659_create_events_table', 3),
(5, '2019_08_20_075713_create_reservations_table', 4),
(6, '2019_08_21_003323_create_reservations_table', 5),
(7, '2019_08_28_005111_create_responses_table', 6),
(8, '2019_08_28_005600_create_responses_table', 7);

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
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `current_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `nop` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `current_id`, `owner_id`, `event_id`, `nop`, `status`, `title`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 8, 1, 3, 12, 1, 'Event 2', '2019-09-03', NULL, '2019-09-01 01:15:52', '2019-09-01 01:15:52'),
(2, 8, 1, 1, 1, 1, 'Event 1', '2019-09-03', NULL, '2019-09-01 01:17:24', '2019-09-01 01:17:24'),
(3, 8, 1, 5, 1, 1, 'Chember Event', '2019-09-11', NULL, '2019-09-01 02:09:40', '2019-09-01 02:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seen` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`id`, `sender_id`, `receiver_id`, `message`, `seen`, `created_at`, `updated_at`) VALUES
(1, 8, 1, 'HI admin', 0, '2019-09-01 02:08:17', '2019-09-01 02:08:17');

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
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$jAD0va5KgJjk4cjXV6JxXey84twKxRSObPIhy.XaowQsP1Z5ZzGce', 1, NULL, '2019-08-24 17:49:44', '2019-08-24 17:49:44'),
(8, 'jeff', 'sjeffersonrey@gmail.com', NULL, '$2y$10$63StbpwXNVDQQuVJR0Twne1AAdjPRLP6AsiUCy0fiG7fekmbMeQEi', 0, NULL, '2019-09-01 01:14:29', '2019-09-01 01:14:29'),
(9, 'superadmin', 'superadmin@admin.com', NULL, '$2y$10$NzA9MlWkbV5jrK/FqeQpDO9Af1XiQob9wfEV5vVD0CURKJPkepA1K', 2, NULL, '2019-09-01 02:48:38', '2019-09-01 02:48:38'),
(10, 'adminn', 'admin2@admin.com', NULL, '$2y$10$ofZPyznAkvIxYZEA4nLS7OrJH14OoSUz0JO.pYkWy2HkPEJamawT6', 1, NULL, '2019-09-01 03:39:30', '2019-09-01 03:39:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
