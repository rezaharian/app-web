-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 07:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_satu`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'reza harian saputra', 'rezaharian1999@gmail.com', NULL, 'user', '$2y$12$Afeg6W7wURnySqSgGpgk7OL5L6zQ3o2XMayMN914YQblS3W6tcjli', NULL, '2023-11-13 18:54:08', '2023-11-13 18:54:08'),
(3, 'Prof. Miguel Kutch Veeeee', 'madison73@example.org', '2023-11-13 19:32:01', 'user', '$2y$12$XtahjZ0rQSkpa.SWwQ4XaeJlt36BEJoBkawpb5HX5P7/hIhZwGWYq', 'ce7RH5BaBXizHGlaEwIOLiNY91If1I8zLzht9r1kXj9Y4agpkXgfPrsNLjHC', '2023-11-13 19:32:01', '2023-11-13 23:36:23'),
(4, 'Zachary McDermott DVM', 'uwolf@example.com', '2023-11-13 19:32:01', 'admin', '$2y$12$v8C2pvNPaLiglD1UCN.Yxew1179zqLIXeSQyXAvukPivU7GWR7hp6', 'CMcAteQyZO9qqszrT1Kv1NCqQTq5WO3v6DCktbpd3SHXDAG3vgZS3eGGvdkP', '2023-11-13 19:32:01', '2023-11-13 19:32:01'),
(5, 'Dr. Rosendo Doyle Jr.', 'hickle.zion@example.com', '2023-11-13 19:32:01', 'user', '$2y$12$v8C2pvNPaLiglD1UCN.Yxew1179zqLIXeSQyXAvukPivU7GWR7hp6', '9QYLwPHdKr', '2023-11-13 19:32:01', '2023-11-13 19:32:01'),
(6, 'Dr. Herbert Bayer IV', 'emilio73@example.org', '2023-11-13 19:32:01', 'user', '$2y$12$v8C2pvNPaLiglD1UCN.Yxew1179zqLIXeSQyXAvukPivU7GWR7hp6', 'RKRdJp07JK', '2023-11-13 19:32:01', '2023-11-13 19:32:01'),
(7, 'reza harian saputra1', 'rezaharian19991@gmail.com', NULL, 'user', '$2y$12$9k4MtcxYYHcfM.3XfHg/uesV/nFmKJZcleIvkDNKhfgf9zYr8LORO', NULL, '2023-11-13 19:38:35', '2023-11-13 19:38:35'),
(8, 'reza harian saputra2', 'rezaharian19992@gmail.com', NULL, 'admin', '$2y$12$V9.ho0bEWK7pVRQZX7HiNOf9dJ9a2E9/BYieIxM7exGiLP6DwTlEq', NULL, '2023-11-13 21:01:57', '2023-11-13 21:01:57'),
(9, 'jali', 'jali@gmail.com', NULL, 'admin', '$2y$12$hq7nQy0xkrG4XuJivHfNQOe0h777zyoGdq4MS5XcNUfDNvKth0F7O', NULL, '2023-11-13 23:40:41', '2023-11-13 23:40:41'),
(10, 'admin', 'admin@admin.com', NULL, 'admin', '$2y$12$CZqgTk3FUKbBBYz6ID0rZenTwApZh20vAygW1bkbTV.pJHHewRdDm', NULL, '2023-11-13 23:50:19', '2023-11-13 23:50:19');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
