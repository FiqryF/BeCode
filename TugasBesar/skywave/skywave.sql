-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 21, 2025 at 06:59 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skywave`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_01_22_070140_create_roles_table', 1),
(8, '2025_01_27_071731_create__barang_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '2025-01-22 00:13:25', '2025-01-22 00:13:25'),
(2, 'pegawai', '2025-01-22 00:13:25', '2025-01-22 00:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Verda Goldner', 'parker.pearl@example.net', '2025-01-22 00:13:25', '$2y$10$Hyunw/1H3MhcQki42ghFK.3lM5kI3m7oREb0.OqNGQaWQ1FWHW/jW', 1, 'tly3PizKNjD53DU1oMgDFCQmyKT8NHc5bRGJe7DNlr7SecaWH8lAs1ZYjBXB', '2025-01-22 00:13:25', '2025-01-22 00:13:25'),
(2, 'Rosario Heller', 'hackett.ford@example.net', '2025-01-22 00:13:25', '$2y$10$Hyunw/1H3MhcQki42ghFK.3lM5kI3m7oREb0.OqNGQaWQ1FWHW/jW', 2, 'SHM9cVoKDq0I430iU0UIbRGf0CLWcF6JrjBpeLHuWx6O1qpzz24lLdhxVSDy', '2025-01-22 00:13:25', '2025-01-22 00:13:25'),
(3, 'Mercedes Johnston', 'imogene.fadel@example.org', '2025-01-22 00:13:25', '$2y$12$IGyzdMHrt/RnWAibOH3h2uenPW8IbKzTi0N5po44E5u5gzwc2Mm46', 1, '0wez7jDTXZ', '2025-01-22 00:13:25', '2025-01-22 00:13:25'),
(4, 'Prof. Camden Carter', 'grant.walter@example.net', '2025-01-22 00:13:25', '$2y$12$IGyzdMHrt/RnWAibOH3h2uenPW8IbKzTi0N5po44E5u5gzwc2Mm46', 2, 'zDz3b7POoA', '2025-01-22 00:13:25', '2025-01-22 00:13:25'),
(5, 'Dr. Bernard Hills PhD', 'rau.roxanne@example.com', '2025-01-22 00:13:25', '$2y$12$IGyzdMHrt/RnWAibOH3h2uenPW8IbKzTi0N5po44E5u5gzwc2Mm46', 2, 'YFitD6ga7E', '2025-01-22 00:13:25', '2025-01-22 00:13:25'),
(6, 'Fiqry', 'fiqryyw@gmail.com', NULL, '$2y$12$Q2QkhhCEX47Lbz/sb/L6pu0QCm/RfBMfUCHrO6T0UEb82rLemO4w6', 1, NULL, '2025-01-29 03:48:30', '2025-01-29 03:48:30'),
(8, 'ode', 'ode@gmail.com', NULL, '$2y$12$fjJB2NqdDzaa0ur5uh2v4uksDMPTXCCXiR9JusCJXYd5d/.NB6266', 2, NULL, '2025-01-29 03:54:47', '2025-01-29 03:54:47'),
(9, 'q', 'q@gmail.com', NULL, '$2y$12$v0nFvupcgM.aX7pGG/Us1utlF3Fn0hUCHyLHGFBhmlcO0T/bfdK3e', 2, NULL, '2025-01-29 05:15:32', '2025-01-29 05:15:32'),
(10, 'k', 'k@gmail.com', NULL, '$2y$12$SJPVilyPwKayV61kmFhWsefo4mEyxtTdDD8WhiatyMREhueXfUAVq', 2, NULL, '2025-01-29 05:36:29', '2025-01-29 05:36:29'),
(11, 'dww', 'm@gmail.com', NULL, '$2y$12$LbMCQyikWT/yqBpcW0oCqOuYSZZbexMzg9qrKYJQv/uK3rbF6imTO', 2, NULL, '2025-01-29 05:50:18', '2025-01-29 05:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `_barang`
--

CREATE TABLE `_barang` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_barang`
--

INSERT INTO `_barang` (`id`, `nama_barang`, `gambar`, `harga`, `deskripsi`, `stok`, `created_at`, `updated_at`) VALUES
(2, 'Mouse', 'gambar/aNQIp9vQvaIQKk70xX3HV2pZF2jroErgFVKQBj9z.png', 'Rp1.300.000', 'ini mouse baru', '6', '2025-01-31 00:16:45', '2025-01-31 00:22:04'),
(3, 'GX150', 'images/Y3XiuX4ONzZf9XJJEoZx3sFyx0oOmawldMnWO9PH.jpg', '400.000', 'GX', '1', '2025-02-03 20:30:32', '2025-02-03 20:30:32');

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_role_name_unique` (`role_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `_barang`
--
ALTER TABLE `_barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `_barang`
--
ALTER TABLE `_barang`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
