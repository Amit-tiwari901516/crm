-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 11:07 AM
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
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `account_name`, `phone`, `website`, `created_at`, `updated_at`) VALUES
(1, 'my company', 'Amit', NULL, '2023-03-06 07:03:31', '2023-03-06 07:03:31'),
(2, 'my company', 'Amit', NULL, '2023-03-06 07:03:42', '2023-03-06 07:03:42'),
(3, 'my company', 'Amit', NULL, '2023-03-06 07:18:58', '2023-03-06 07:18:58'),
(4, 'my company', 'Amit', NULL, '2023-03-06 07:19:39', '2023-03-06 07:19:39'),
(5, 'my company', 'Amit', NULL, '2023-03-06 07:20:11', '2023-03-06 07:20:11'),
(6, 'my company', 'Amit', NULL, '2023-03-06 07:31:06', '2023-03-06 07:31:06'),
(7, 'my company', 'Amit', NULL, '2023-03-06 07:32:00', '2023-03-06 07:32:00'),
(8, 'Deepanshu company', 'Deepanshu', NULL, '2023-03-06 07:37:17', '2023-03-06 07:37:17'),
(9, 'Deepanshu company', 'Deepanshu', NULL, '2023-03-06 07:52:43', '2023-03-06 07:52:43'),
(10, 'my company', 'Deepanshu', NULL, '2023-03-06 08:00:14', '2023-03-06 08:00:14'),
(11, 'my company', 'Amit', NULL, '2023-03-10 00:31:13', '2023-03-10 00:31:13'),
(12, 'Amit', '9513578426', 'www.amit.com', '2023-03-10 04:44:39', '2023-03-10 06:13:27'),
(13, 'Sidd', '7531598426', 'Sidd.com', '2023-03-10 04:52:25', '2023-03-10 04:52:25'),
(14, 'Rahul', '8526549713', 'Rahul.com', '2023-03-10 04:54:16', '2023-03-10 04:54:16'),
(15, 'akash compaany', '9513578426', NULL, '2023-03-10 06:08:18', '2023-03-10 06:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_name`, `account_id`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Amit Tiwari', 1, 'amit@gmail.com', '9513578426', '2023-03-06 07:03:31', '2023-03-06 07:03:31'),
(2, 'Amit Tiwari', 2, 'amit@gmail.com', '9513578426', '2023-03-06 07:03:42', '2023-03-06 07:03:42'),
(3, 'Amit Tiwari', 3, 'amit@gmail.com', '9513578426', '2023-03-06 07:18:58', '2023-03-06 07:18:58'),
(4, 'Amit Tiwari', 4, 'amit@gmail.com', '9513578426', '2023-03-06 07:19:39', '2023-03-06 07:19:39'),
(5, 'Amit Tiwari', 5, 'amit@gmail.com', '9513578426', '2023-03-06 07:20:11', '2023-03-06 07:20:11'),
(6, 'Amit Tiwari', 6, 'amit@gmail.com', '9513578426', '2023-03-06 07:31:06', '2023-03-06 07:31:06'),
(7, 'Amit Tiwari', 7, 'amit@gmail.com', '9513578426', '2023-03-06 07:32:00', '2023-03-06 07:32:00'),
(8, 'Deepanshu Jha', 8, 'Deepanshu@gmail.com', '9513578426', '2023-03-06 07:37:17', '2023-03-06 07:37:17'),
(9, 'Deepanshu Jha', 9, 'Deepanshu@gmail.com', '9513578426', '2023-03-06 07:52:43', '2023-03-06 07:52:43'),
(10, 'Deepanshu MISHRA', 10, 'Deepanshu@gmail.com', '9513578426', '2023-03-06 08:00:14', '2023-03-06 08:00:14'),
(11, 'Amit Tiwari', 11, 'amit@gmail.com', '9513578426', '2023-03-10 00:31:13', '2023-03-10 00:31:13'),
(12, 'Akash Morya', 15, 'akash@gmail.com', '9513578426', '2023-03-10 06:08:18', '2023-03-10 06:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `deal_name` varchar(255) NOT NULL,
  `closing_date` date NOT NULL,
  `deal_stage` varchar(255) DEFAULT NULL,
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `contact_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `amount`, `deal_name`, `closing_date`, `deal_stage`, `account_id`, `contact_id`, `created_at`, `updated_at`) VALUES
(1, '150000.00', 'Rahul Mishra', '2023-03-28', 'Proposal/Price Quote', 7, 7, '2023-03-06 07:32:00', '2023-03-06 07:32:00'),
(2, '150000.00', 'Deepanshu', '2023-06-15', 'Proposal/Price Quote', 8, 8, '2023-03-06 07:37:17', '2023-03-06 07:37:17'),
(3, '150000.00', 'Deepanshu', '2023-03-22', 'Closed Won', 9, 9, '2023-03-06 07:52:43', '2023-03-06 07:52:43'),
(4, '150000.00', 'Rahul Mishra', '2023-03-25', 'Negotiation', 10, 10, '2023-03-06 08:00:14', '2023-03-06 08:00:14'),
(5, '150000.00', 'Rahul Mishra', '2023-03-16', 'Closed Won', 11, 11, '2023-03-10 00:31:14', '2023-03-10 00:31:14'),
(6, '150000.00', 'Akash Morya', '2023-03-22', 'Proposal/Price Quote', 15, 12, '2023-03-10 06:08:18', '2023-03-10 06:08:18');

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
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `lead_source` varchar(255) DEFAULT NULL,
  `lead_status` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `first_name`, `last_name`, `phone`, `title`, `email`, `company`, `lead_source`, `lead_status`, `street`, `city`, `state`, `zip_code`, `country`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Sidd', 'Mishra', '7531598426', 'Testing', 'Sidd@gmail.com', 'my company', 'Direct Call', 'Negotiation', '137, My Street', 'rvfdce', 'New York', '12401', 'United States', 'abcdefghijklmnopqrstuvwxyz', '2023-03-10 00:30:34', '2023-03-10 00:30:34');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_01_23_105520_create_sessions_table', 1),
(7, '2023_01_25_094147_create_leads_table', 1),
(8, '2023_03_04_062340_create_accounts_table', 1),
(9, '2023_03_04_062511_create_contacts_table', 1),
(10, '2023_03_04_062629_create_deals_table', 1);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Cczik0it1M2hMzC3pyUruk5RBo6hEqGJlc4yxgmN', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibXFjdzN2amgzem84OGNQY0lLdEp6clZoQVU0aTR1WEpCbHZXNzJrNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5hZ2VfYWNjb3VudHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1678454565);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT '0',
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Amit', 'admin@gmail.com', '1', '9513578426', '137, My Street', NULL, '$2y$10$aAl8I8mGLQeGgZGMtRIdzuu20HUeVMjznmW4iXhjyLrZKx6GfZR2C', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-06 06:59:29', '2023-03-06 06:59:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_account_id_foreign` (`account_id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deals_account_id_foreign` (`account_id`),
  ADD KEY `deals_contact_id_foreign` (`contact_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `deals`
--
ALTER TABLE `deals`
  ADD CONSTRAINT `deals_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `deals_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
