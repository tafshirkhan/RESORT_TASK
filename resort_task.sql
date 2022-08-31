-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 06:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resort_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Tafshir', 'tafshirahmed100@gmail.com', '123456@#', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking_processes`
--

CREATE TABLE `booking_processes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resort_id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `reservation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_processes`
--

INSERT INTO `booking_processes` (`id`, `resort_id`, `user_name`, `user_email`, `user_phone`, `guest`, `room`, `reservation`, `created_at`, `updated_at`) VALUES
(1, 3, 'Tafshir Ahmed', 'tafshirahmed100@gmail.com', '01792288714', 4, 2, '2022-09-03', NULL, NULL),
(2, 4, 'Tafshir', 'khantafshir1997@gmail.com', '01792288714', 6, 3, '2022-09-03', NULL, NULL),
(3, 4, 'Ahmed', 'tafshirahmed100@gmail.com', '01627439075', 1, 1, '2022-10-06', NULL, NULL),
(4, 4, 'Tanim', 'khantafshir1997@gmail.com', '012345678912', 3, 2, '2022-09-03', NULL, NULL),
(5, 2, 'Tabrez Kahn', 'tabrez100@gmail.com', '01627439075', 6, 3, '2022-09-03', NULL, NULL),
(6, 2, 'Rahat', 'rahat100@gmail.com', '012345671234', 8, 4, '2022-10-08', NULL, NULL),
(7, 4, 'Kamal Uddin Rahat', 'kamalrahat100@gmail.com', '022222222222', 5, 2, '2022-09-07', NULL, NULL),
(8, 4, 'Kamal Uddin Rahat', 'kamalrahat100@gmail.com', '022222222222', 5, 2, '2022-09-10', NULL, NULL);

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
(4, '2022_08_29_054645_create_admins_table', 1),
(5, '2022_08_29_064737_create_new_admins_table', 2),
(6, '2022_08_29_072700_create_resort_models_table', 3),
(7, '2022_08_29_073508_create_resort_models_table', 4),
(8, '2022_08_30_175132_create_booking_processes_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `new_admins`
--

CREATE TABLE `new_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_admins`
--

INSERT INTO `new_admins` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Tafshir', 'khantafshir1997@gmail.com', NULL, NULL),
(2, 'Tafshir', 'user@gmail.com', NULL, NULL);

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
-- Table structure for table `resort_models`
--

CREATE TABLE `resort_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resort_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resort_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resort_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resort_fair` int(11) NOT NULL,
  `resort_discount` int(11) DEFAULT NULL,
  `availability` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resort_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resort_models`
--

INSERT INTO `resort_models` (`id`, `resort_name`, `resort_class`, `resort_location`, `resort_fair`, `resort_discount`, `availability`, `resort_image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Sarah Resort', 'Premium', 'Rajendrapur of Gazipur', 15000, 3000, '2022-09-02', 'upload/resort/1742490324803380.jpg', 0, NULL, '2022-08-29 09:21:59'),
(3, 'Chuti Resort', 'First Class', 'Located in Joydebpur', 10000, NULL, '2022-09-29', 'upload/resort/1742493756295712.jpg', 1, NULL, NULL),
(4, 'Greentech Resort & Convention Centre', 'First Class', 'Gazipur', 10000, 100, '2022-11-29', 'upload/resort/1742517683257662.jpg', 1, NULL, '2022-08-29 11:32:40'),
(5, 'Hali\'s Amber Nivaas', 'Premium', 'Dhaka', 15000, NULL, '2022-09-07', 'upload/resort/1742517630250236.jpg', 0, NULL, '2022-08-30 22:03:05'),
(6, 'Dhaka Resort', 'Business Class', 'Dhaka', 12000, 2000, '2022-09-09', 'upload/resort/1742647662833922.jpg', 1, NULL, NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `booking_processes`
--
ALTER TABLE `booking_processes`
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
-- Indexes for table `new_admins`
--
ALTER TABLE `new_admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `new_admins_email_unique` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `resort_models`
--
ALTER TABLE `resort_models`
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
-- AUTO_INCREMENT for table `booking_processes`
--
ALTER TABLE `booking_processes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `new_admins`
--
ALTER TABLE `new_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resort_models`
--
ALTER TABLE `resort_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
