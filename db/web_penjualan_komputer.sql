-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 09:00 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_penjualan_komputer`
--

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
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `kode_barang` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_jual` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_beli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `transaction_id`, `kode_barang`, `nama`, `harga_jual`, `harga_beli`, `stok`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 1, 'VGAGT103025', 'GALAX Geforce GT 1030 2GB DDR5', '1.230.000', '1.000.000', '98', 'VGA', NULL, NULL),
(2, 1, 'VGAGT71023', 'GALAX GeForce GT 710 2GB DDR3', '1.230.000', '1.000.000', '98', 'VGA', NULL, NULL),
(3, 2, 'PROi3-13100F', 'Intel Core i3-13100F 3.4GHz Up To 4.5GHz - Cache 12MB', '1.000.000', '500.000', '98', 'VGA', NULL, NULL),
(5, 2, 'PROPG7400', 'Intel Pentium Gold G7400 3.7GHz - Cache 6MB', '1.300.000', '1.000.000', '16', 'Processor', '2023-07-02 10:52:26', '2023-07-02 10:52:26'),
(6, 2, 'RAMKLEVVPC213004', 'KLEVV DDR4 Value Series PC21300 2666MHZ 4GB (1x4GB)', '1.000.000', '500.000', '32', 'RAM', '2023-07-02 10:53:14', '2023-07-02 10:53:14'),
(8, 4, 'RAMKLEVVPC213005', 'KLEVV DDR4 Value Series PC21300 2666MHZ 4GB (1x4GB)', '1.000.000', '800.000', '12', 'RAM', '2023-07-02 10:54:32', '2023-07-02 10:54:32'),
(9, 5, 'RAMGEILPC2560016', 'GEIL DDR4 ORION PC25600 3200Mhz Single Channel 16GB (1x16GB)', '1.300.000', '800.000', '21', 'RAM', '2023-07-02 10:58:46', '2023-07-02 10:58:46'),
(10, 6, 'RAMKLEVVPC2560032', 'GEIL DDR4 ORION PC25600 3200Mhz Dual Channel 32GB (2X16GB)', '1.000.000', '500.000', '23', 'RAM', '2023-07-02 10:59:24', '2023-07-02 10:59:24'),
(11, 7, 'SSDKLEVVC710256', 'KLEVV SSD CRAS C710 256GB M.2 2280 NVMe PCle Gen3 x4', '1.300.000', '500.000', '12', 'SSD', '2023-07-02 10:59:55', '2023-07-02 10:59:55'),
(12, 8, 'SSDKLEVVC710512', 'KLEVV SSD CRAS C710 512GB M.2 2280 NVMe PCle Gen3 x4', '1.300.000', '500.000', '50', 'SSD', '2023-07-02 11:00:18', '2023-07-02 11:00:18'),
(13, 9, 'PROPG7404', 'KLEVV DDR4 Value Series PC21300 2666MHZ 4GB (1x12GB)', '1.300.000', '100000', '23', 'RAM', '2023-07-02 11:01:45', '2023-07-02 11:01:45'),
(14, 10, 'PROPG7405', 'Intel Core i5-13100F 3.4GHz Up To 4.5GHz - Cache 12MB', '1.300.000', '1.000.000', '12', 'Processor', '2023-07-02 11:02:53', '2023-07-02 11:02:53'),
(15, 3, 'VGAGT71026', 'GALAX Geforce GTX 1030 2GB DDR5', '1.000.000', '500.000', '21', 'VGA', '2023-07-02 11:03:38', '2023-07-02 11:03:38'),
(16, 6, 'VGAGT103030', 'GALAX GeForce GTX 1710 2GB DDR3', '1.300.000', '800.000', '23', 'VGA', '2023-07-02 11:04:16', '2023-07-02 11:04:16'),
(17, 4, 'SSDKLEVVC71003924', 'KLEVV SSD CRAS C710 512GB M.2 2280 NVMe PCle Gen3 x4', '1.300.000', '500.000', '23', 'SSD', '2023-07-02 11:05:22', '2023-07-02 11:05:22'),
(18, 5, 'SSDKLEVVC7105165', 'KLEVV SSD CRAS C710 256GB M.2 2280 NVMe PCle Gen3 x4', '100000', '500.000', '12', 'SSD', '2023-07-02 11:05:46', '2023-07-02 11:05:46');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_28_083150_create_items_table', 1),
(6, '2023_06_28_083351_create_transactions_table', 1),
(7, '2023_06_28_083420_create_transaction_details_table', 1);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `nama_konsumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `tanggal_penjualan`, `nama_konsumen`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '1985-09-29', 'Rosemary Cassin', '753 Tanner Plaza\nArmstrongview, AR 31806', '2023-07-02 09:06:46', '2023-07-02 09:06:46'),
(2, '2023-04-27', 'Chloe Brekke', '34565 Layla Brook\nMaevetown, MI 26800', '2023-07-02 09:06:46', '2023-07-02 09:06:46'),
(3, '1996-10-15', 'Mrs. Edna Macejkovic DVM', '5252 Gibson Pines\nEast Savionshire, NJ 40408-8984', '2023-07-02 09:06:46', '2023-07-02 09:06:46'),
(4, '2018-09-26', 'Imani Kulas', '87074 Clay Passage Apt. 710\nEast Grayce, WA 50718', '2023-07-02 09:06:46', '2023-07-02 09:06:46'),
(5, '2020-02-06', 'Marshall Ruecker', '245 Smith Ports Apt. 228\nJefferystad, CA 19546', '2023-07-02 09:06:46', '2023-07-02 09:06:46'),
(6, '1978-01-11', 'Van Herman MD', '32164 Solon Centers\nWest Nella, ME 12574', '2023-07-02 09:06:46', '2023-07-02 09:06:46'),
(7, '1994-06-28', 'Ms. Mayra Ondricka Jr.', '62181 Trevion Spring\nWest Jonatanberg, TX 83039-6297', '2023-07-02 09:06:46', '2023-07-02 09:06:46'),
(8, '1985-07-21', 'Dave Bailey', '64829 Halvorson Fork\nJohnsbury, KY 37666-8257', '2023-07-02 09:06:46', '2023-07-02 09:06:46'),
(9, '1971-02-14', 'Paris Gorczany', '73011 Bednar Mews Suite 496\nNew Dexter, SD 01785-4011', '2023-07-02 09:06:46', '2023-07-02 09:06:46'),
(10, '2010-10-03', 'Teresa Padberg', '6689 Frederik Forges\nAugustusside, CA 91221-5692', '2023-07-02 09:06:46', '2023-07-02 09:06:46'),
(11, '1986-10-27', 'Kameron Kassulke', '139 Nikolaus Light Suite 454\nAimeeburgh, DC 19240', '2023-07-02 11:47:08', '2023-07-02 11:47:08'),
(12, '2015-08-08', 'Prof. Kim Jacobson', '7364 Maud Mill Apt. 425\nEast Donnell, NJ 24506-2177', '2023-07-02 11:47:08', '2023-07-02 11:47:08'),
(13, '1999-08-14', 'Dr. Alfreda Larson', '2049 Samanta Estates Apt. 657\nHansenshire, AL 78362', '2023-07-02 11:47:08', '2023-07-02 11:47:08'),
(14, '1972-02-26', 'Randi Tremblay', '4940 Yundt Trail\nMontefurt, SD 61132-0895', '2023-07-02 11:47:08', '2023-07-02 11:47:08'),
(15, '1996-06-23', 'Mateo Greenfelder', '8415 Haley Shore\nSouth Susan, LA 62470', '2023-07-02 11:47:08', '2023-07-02 11:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transaction_id`, `jumlah`, `harga_satuan`, `harga_total`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '1.000.000', '2.000.000', NULL, NULL),
(2, 2, '1', '500.000', '500.000', NULL, NULL),
(3, 3, '2', '800.000', '1.000.000', NULL, NULL),
(4, 4, '1', '900.000', '2.000.000', NULL, NULL),
(5, 5, '3', '1.000.000', '3.000.000', NULL, NULL),
(6, 6, '5', '500.000', '2.500.000', NULL, NULL),
(7, 7, '2', '2.000.000', '4.000.000', NULL, NULL),
(8, 8, '5', '1.000.000', '5.000.000', NULL, NULL),
(9, 9, '10', '500.000', '5.000.000', NULL, NULL),
(10, 10, '1', '2.000.000', '2.000.000', NULL, NULL);

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
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$DlcnZxy7lc5WoVuNvPryIOKKw.uYFW0x5NhK.QZLyNXUxSrtcrQ/K', 'admin', NULL, '2023-07-02 09:07:57', '2023-07-02 09:07:57'),
(2, 'user', 'user@user.com', NULL, '$2y$10$1b8hnaxQvpPCemDRhU8dpONDdWUqIIa54YDT.Ia1GaqyTHbss0ep.', 'admin', NULL, '2023-07-02 11:19:35', '2023-07-02 11:19:35');

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
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `items_kode_barang_unique` (`kode_barang`);

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
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transactions_nama_konsumen_unique` (`nama_konsumen`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
