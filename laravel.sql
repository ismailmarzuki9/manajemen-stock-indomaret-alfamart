-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 03:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
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
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `categori_id` char(36) NOT NULL,
  `categori_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`categori_id`, `categori_name`, `description`, `created_at`, `updated_at`) VALUES
('AAAKT578', 'mdTKzra1km', 'jbIN5t8cfex0eHtTcprI', '2024-06-21 04:26:15', '2024-06-21 04:26:15'),
('AKTKT787', 'DzK4stxufO', 'NBAPR7onW5RCouvKW4pU', '2024-06-21 04:26:15', '2024-06-21 04:26:15'),
('ATAKA446', '6srioMzHMu', 'LHMdopsG57OY8YCE0mvG', '2024-06-21 04:26:15', '2024-06-21 04:26:15'),
('ATTTA994', 't66Eb5EHkA', 'kGBRX1ABzrdZTB7mZ4Tm', '2024-06-21 04:26:15', '2024-06-21 04:26:15'),
('KAAAA679', 'R9VlkhJoo8', 'CSUhv7i11AdgPcrurORI', '2024-06-21 04:26:15', '2024-06-21 04:26:15'),
('KATTK447', 'IJUVbUlRu1', 'wK9QYaH5adPMXfjIFlwv', '2024-06-21 04:26:15', '2024-06-21 04:26:15'),
('KKAAK596', 'Xq9IK9ueBm', '8TfrH2OYmjvqAIHi8eTL', '2024-06-21 04:26:15', '2024-06-21 04:26:15'),
('TAKAK568', 'g1R9Nt0Hbi', 'sQV1vaW7IYVigXQfTY96', '2024-06-21 04:26:15', '2024-06-21 04:26:15'),
('TKKKK877', 'pirdO61DMF', 'f8OYDAIaC67VUZKLzakm', '2024-06-21 04:26:15', '2024-06-21 04:26:15'),
('TTTKK866', '5xSWvR6wDC', 'IjV4xPd5f9u4XFRylDOB', '2024-06-21 04:26:15', '2024-06-21 04:26:15');

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
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_resets_table', 1),
(25, '2019_08_19_000000_create_failed_jobs_table', 1),
(26, '2020_10_31_054345_create_posts_table', 1),
(27, '2024_06_21_103152_kategorimigration', 2),
(28, '2024_06_21_111113_produkmigration', 3),
(29, '2024_06_22_115941_tokomigration', 4),
(30, '2024_06_22_162350_stockmigration', 5),
(31, '2024_06_22_174502_suppliermigration', 6),
(33, '2024_06_22_191527_order_migration', 7);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` char(36) NOT NULL,
  `toko_id` char(255) NOT NULL,
  `supplier_id` char(255) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `toko_id`, `supplier_id`, `order_date`, `status`, `jumlah`, `harga`, `created_at`, `updated_at`) VALUES
('order^Y%F', 'HCAUZ222', 'DTOZP244', '1971-06-23 14:24:49', 'pending', 23, 84.00, '2024-06-22 13:15:55', '2024-06-22 13:15:55'),
('order;ez\\', 'ASTTU124', 'DTOZP244', '2004-07-12 07:15:40', 'sending', 11, 87.00, '2024-06-22 13:15:54', '2024-06-22 13:15:54'),
('order?5uG', 'GQOYU441', 'UMVPV014', '1985-08-13 21:55:15', 'pending', 50, 37.00, '2024-06-22 13:15:55', '2024-06-22 13:15:55'),
('order\'q+:', 'CLJAV021', 'KQLCO301', '1970-08-09 08:25:01', 'completed', 19, 94.00, '2024-06-22 13:15:55', '2024-06-22 13:15:55'),
('order)*nm', 'CLJAV021', 'XGLKI004', '2006-08-25 03:24:10', 'sending', 54, 10.00, '2024-06-22 13:15:55', '2024-06-22 13:15:55'),
('order[TS`', 'HCAUZ222', 'XGLKI004', '1977-01-20 04:08:56', 'sending', 27, 10.00, '2024-06-22 13:15:55', '2024-06-22 13:15:55'),
('order@z<(', 'GQOYU441', 'XFBVK322', '1973-05-07 00:27:20', 'sending', 40, 57.00, '2024-06-22 13:15:55', '2024-06-22 13:15:55'),
('order*q^h', 'HCAUZ222', 'CSSQK441', '1993-11-17 21:05:08', 'sending', 29, 98.00, '2024-06-22 13:15:55', '2024-06-22 13:15:55');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'as', 'sas', '2024-06-23 01:18:58', '2024-06-23 01:18:58'),
(2, 's', 's', '2024-06-23 04:23:25', '2024-06-23 04:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `Produk_id` char(36) NOT NULL,
  `Produk_name` varchar(255) NOT NULL,
  `categori_id` char(255) NOT NULL,
  `harga` decimal(9,2) NOT NULL,
  `description` text DEFAULT NULL,
  `SKU` char(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`Produk_id`, `Produk_name`, `categori_id`, `harga`, `description`, `SKU`, `brand`, `created_at`, `updated_at`) VALUES
('FCUHV232', 'Pepsodent', 'TKKKK878', 202.00, NULL, 'TGCFE024', 'Unilepper', '2024-06-24 01:10:05', '2024-06-24 01:10:05'),
('IWDPC023', 'necessitatibus', 'TAKAK568', 7196.00, 'Roti makanan mantan', '2958177310768', 'Perum Siregar Halim Tbk', NULL, '2024-06-24 05:41:04'),
('KOISF142', 'odeh-ondeh', 'ATTTA994', 6656.00, 'dolorem quia optio dolores', '8471496678974', 'PD Sitorus Kusmawati (Persero) Tbk', NULL, '2024-06-24 05:40:04'),
('UEPTE034', 'blanditiis', 'KKAAK596', 7006.00, 'doloribus aliquid ipsam reiciendis', '0216476605629', 'PT Rahimah', NULL, NULL),
('VMICI333', 'voluptatibus', 'TKKKK877', 3807.00, 'rerum enim incidunt quam', '9871123074237', 'PD Tamba', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` char(36) NOT NULL,
  `toko_id` char(255) NOT NULL,
  `produk_id` char(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `Produk_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `toko_id`, `produk_id`, `jumlah`, `Produk_name`, `created_at`, `updated_at`) VALUES
('STC020', 'ASTTU124', 'UEPTE034', 73, 'blanditiis', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC071', 'GFOXJ442', 'KOISF142', 71, 'unde', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC114', 'CLJAV021', 'UEPTE034', 43, 'blanditiis', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC134', 'HCAUZ222', 'DPUFO332', 44, 'alias', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC138', 'ASTTU124', 'VMICI333', 51, 'voluptatibus', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC167', 'GQOYU441', 'DPUFO332', 28, 'alias', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC176', 'CLJAV021', 'FINIO401', 26, 'eveniet', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC223', 'GQOYU441', 'ESKWA214', 23, 'temporibus', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC233', 'HCAUZ222', 'VMICI333', 34, 'voluptatibus', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC266', 'ASTTU124', 'KOISF142', 55, 'unde', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC309', 'CLJAV021', 'VMICI333', 33, 'voluptatibus', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC310', 'ASTTU124', 'FINIO401', 77, 'eveniet', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC377', 'GFOXJ442', 'IWDPC023', 60, 'necessitatibus', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC392', 'GQOYU441', 'IWDPC023', 37, 'necessitatibus', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC393', 'HCAUZ222', 'KOISF142', 41, 'unde', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC416', 'CLJAV021', 'IWDPC023', 60, 'necessitatibus', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC428', 'ASTTU124', 'ESKWA214', 50, 'temporibus', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC440', 'CLJAV021', 'KOISF142', 63, 'unde', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC452', 'CLJAV021', 'DPUFO332', 69, 'alias', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC458', 'HCAUZ222', 'FINIO401', 62, 'eveniet', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC493', 'GFOXJ442', 'FINIO401', 77, 'eveniet', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC535', 'GQOYU441', 'FINIO401', 48, 'eveniet', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC560', 'GFOXJ442', 'DPUFO332', 17, 'alias', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC573', 'CLJAV021', 'ESKWA214', 34, 'temporibus', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC586', 'GFOXJ442', 'UEPTE034', 55, 'blanditiis', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC593', 'HCAUZ222', 'ESKWA214', 11, 'temporibus', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC640', 'GFOXJ442', 'ESKWA214', 30, 'temporibus', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC646', 'ASTTU124', 'DPUFO332', 77, 'alias', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC666', 'GQOYU441', 'UEPTE034', 42, 'blanditiis', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC739', 'GQOYU441', 'KOISF142', 24, 'unde', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC792', 'HCAUZ222', 'IWDPC023', 59, 'necessitatibus', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC823', 'HCAUZ222', 'UEPTE034', 15, 'blanditiis', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC904', 'GFOXJ442', 'VMICI333', 39, 'voluptatibus', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC927', 'GQOYU441', 'VMICI333', 19, 'voluptatibus', '2024-06-22 10:39:44', '2024-06-22 10:39:44'),
('STC931', 'ASTTU124', 'IWDPC023', 37, 'necessitatibus', '2024-06-22 10:39:44', '2024-06-22 10:39:44');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` char(36) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `contac_info` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_name`, `contac_info`, `created_at`, `updated_at`) VALUES
('ARRVZ314', 'Caraka Uwais', '0418 7606 364', NULL, NULL),
('CSSQK441', 'Jati Wijaya S.Ked', '0602 5305 120', NULL, NULL),
('DTOZP244', 'Bagiya Widodo', '(+62) 692 4077 4192', NULL, NULL),
('KDOIK432', 'Karman Marpaung', '(+62) 870 407 782', NULL, NULL),
('KQLCO301', 'Jelita Prastuti', '024 9075 594', NULL, NULL),
('NXORI414', 'Anom Rajata', '(+62) 493 6237 454', NULL, NULL),
('OUHAI312', 'Hana Melani S.E.I', '(+62) 556 8948 6154', NULL, NULL),
('UMVPV014', 'Estiawan Jarwadi Suryono M.Farm', '(+62) 385 0164 746', NULL, NULL),
('XFBVK322', 'Oman Opung Siregar S.E.', '(+62) 655 1240 3569', NULL, NULL),
('XGLKI004', 'Legawa Jatmiko Suwarno S.H.', '(+62) 264 3260 0931', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `toko_id` char(36) NOT NULL,
  `toko_name` varchar(255) NOT NULL,
  `toko_type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`toko_id`, `toko_name`, `toko_type`, `location`, `created_at`, `updated_at`) VALUES
('ASTTU124', 'Caket Tampubolon M.TI.', 'Perum Napitupulu Tarihoran', 'Gunungsitoli', NULL, NULL),
('CLJAV021', 'Sakura Wahyuni', 'Perum Nuraini (Persero) Tbk', 'Pekalongan', NULL, NULL),
('GFOXJ442', 'Septi Permata', 'UD Manullang Hariyah', 'Mojokerto', NULL, NULL),
('GQOYU441', 'Mujur Waluyo', 'PT Hidayanto Wacana', 'Sungai Penuh', NULL, NULL),
('HCAUZ222', 'Prayitna Mustofa', 'PD Suartini Nababan', 'Makassar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`categori_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`Produk_id`),
  ADD UNIQUE KEY `produk_sku_unique` (`SKU`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`toko_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
