-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2022 pada 15.13
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_trivili`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `comunities`
--

CREATE TABLE `comunities` (
  `comunity_id` int(11) NOT NULL,
  `comunity_name` varchar(45) DEFAULT NULL,
  `village_id` int(11) DEFAULT NULL,
  `contact_name` varchar(45) DEFAULT NULL,
  `comunity_desc` text DEFAULT NULL,
  `comunity_logo` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `comunities`
--

INSERT INTO `comunities` (`comunity_id`, `comunity_name`, `village_id`, `contact_name`, `comunity_desc`, `comunity_logo`, `created_at`, `updated_at`) VALUES
(1, 'Kecak FD Bali', NULL, NULL, NULL, NULL, '2022-12-14 05:35:30', '2022-12-14 05:35:30'),
(2, 'Kecak Tradisional', NULL, NULL, NULL, NULL, '2022-12-14 05:35:39', '2022-12-14 05:35:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `disc`
--

CREATE TABLE `disc` (
  `disc_id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `date_from` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `refferal_code` varchar(45) DEFAULT NULL,
  `disc_percent` decimal(10,0) DEFAULT NULL,
  `disc_nominal` decimal(10,0) DEFAULT NULL,
  `min_transaction` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `package_code` varchar(10) DEFAULT NULL,
  `package_name` varchar(100) DEFAULT NULL,
  `package_price` decimal(10,0) DEFAULT NULL,
  `permalink` varchar(100) DEFAULT NULL,
  `package_desc` text DEFAULT NULL,
  `feature_img` varchar(100) DEFAULT NULL,
  `location_name` varchar(100) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `comunity_id` int(11) DEFAULT NULL,
  `rate_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `packages`
--

INSERT INTO `packages` (`package_id`, `package_code`, `package_name`, `package_price`, `permalink`, `package_desc`, `feature_img`, `location_name`, `location_id`, `comunity_id`, `rate_id`, `created_at`, `updated_at`) VALUES
(1, 'P001', 'Kecak Fire Dance', '120000', NULL, '<p><a href=\"https://github.com/odetv/trivili-laravel\" target=\"_blank\"><em>This Project</em></a> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', 'features_img/1670999924P1.jpg', 'Ubud', NULL, 1, NULL, '2022-12-13 13:33:58', '2022-12-20 01:42:06'),
(2, 'P002', 'Kecak Dance Tabanan', '90000', NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'features_img/1670999942P2.jpg', 'Tabanan', NULL, 2, NULL, '2022-12-13 13:38:33', '2022-12-13 22:39:02'),
(3, 'P003', 'Kecak Baud Bali Utara', '100000', NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'features_img/1670999955P3.jpg', 'Buleleng', NULL, 2, NULL, '2022-12-13 13:42:38', '2022-12-13 22:39:15'),
(4, 'P004', 'Kecak Sidetapa', '115000', NULL, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'features_img/1670999967P4.jpg', 'Buleleng', NULL, 2, NULL, '2022-12-13 13:43:26', '2022-12-13 22:39:27'),
(5, 'P005', 'PKB Bali 2022', '125000', NULL, 'Pesta Kesenian Bali adalah parade atau festival kesenian tahunan yang diprakarsai oleh Pemerintah Provinsi Bali, dalam upaya mendukung program pemerintah dalam hal penggalian, pelestarian, dan pengembangan nilai-nilai seni budaya Bali.', 'features_img/1671000165P5.jpg', 'Bali', NULL, 2, NULL, '2022-12-13 22:42:45', '2022-12-13 22:42:45'),
(7, 'P006', 'Kecak Bali Kaja 2022', '150000', NULL, '<p>Dummy kecak bali kaja 2022</p>', 'features_img/1671496889P2.jpg', 'Bali', NULL, 1, NULL, '2022-12-19 16:41:29', '2022-12-21 06:48:24'),
(8, 'P007', 'Kecak 1', '110000', NULL, '<p>-</p>', 'features_img/1671532107P4.jpg', 'Bali', NULL, 1, NULL, '2022-12-20 09:28:27', '2022-12-20 09:28:27'),
(9, 'P008', 'Kecak 2', '95000', NULL, '<p>-</p>', 'features_img/1671532407P2.jpg', 'Bali', NULL, 1, NULL, '2022-12-20 10:33:27', '2022-12-20 10:33:27'),
(10, 'P009', 'Kecak 3', '100000', NULL, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'features_img/1671604932P5.jpg', 'Bali', NULL, 2, NULL, '0000-00-00 00:00:00', '2022-12-23 14:11:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$F0oOmXY8g76xbbRnfDHzb.KCOeIe7ZpvK77AUujmzNSYIb1m6rYO2', '2022-11-04 03:27:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `rates`
--

CREATE TABLE `rates` (
  `rate_id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `rate_name` varchar(45) DEFAULT NULL,
  `date_from` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `qty_per_day` int(11) DEFAULT NULL,
  `adult_rate` decimal(10,0) DEFAULT NULL,
  `child_rate` decimal(10,0) DEFAULT NULL,
  `infant_rate` decimal(10,0) DEFAULT NULL,
  `foreign_adult_rate` decimal(10,0) DEFAULT NULL,
  `foreign_child_rate` decimal(10,0) DEFAULT NULL,
  `foreign_infant_rate` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rates`
--

INSERT INTO `rates` (`rate_id`, `package_id`, `rate_name`, `date_from`, `date_end`, `qty_per_day`, `adult_rate`, `child_rate`, `infant_rate`, `foreign_adult_rate`, `foreign_child_rate`, `foreign_infant_rate`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, '155000', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, NULL, NULL, NULL, NULL, '130000', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `is_admin`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin@gmail.com', NULL, '$2y$10$ersDAXTLBNoUsqHZ.ldefO3efteHS7vvjOno0mEX9wVwD7FvaryIm', NULL, NULL, NULL, NULL, '2022-11-03 22:16:03', '2022-12-09 05:46:40'),
(3, 0, 'I Gede Gelgel Abdiutama', 'abdiutama02@gmail.com', NULL, '$2y$10$cdHLc1SmWyL.Azi6lpKDC.FknOHZgD6DdGddz1bU.AM7LuI4PJXzi', NULL, NULL, NULL, NULL, '2022-12-13 21:30:40', '2022-12-13 21:30:40'),
(4, 0, 'User', 'user@gmail.com', NULL, '$2y$10$SNdLi/VaeYAcnUr.GR/8ZOOnG.i1TiwiqAxUw8MlESPSkbn4spLQu', NULL, NULL, NULL, NULL, '2022-12-22 04:21:12', '2022-12-22 04:21:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `comunities`
--
ALTER TABLE `comunities`
  ADD PRIMARY KEY (`comunity_id`);

--
-- Indeks untuk tabel `disc`
--
ALTER TABLE `disc`
  ADD PRIMARY KEY (`disc_id`),
  ADD KEY `disc` (`package_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`),
  ADD UNIQUE KEY `permalink` (`permalink`),
  ADD KEY `comunities` (`comunity_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`rate_id`),
  ADD KEY `package` (`package_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comunities`
--
ALTER TABLE `comunities`
  MODIFY `comunity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `disc`
--
ALTER TABLE `disc`
  MODIFY `disc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rates`
--
ALTER TABLE `rates`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `disc`
--
ALTER TABLE `disc`
  ADD CONSTRAINT `disc` FOREIGN KEY (`package_id`) REFERENCES `packages` (`package_id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `comunities` FOREIGN KEY (`comunity_id`) REFERENCES `comunities` (`comunity_id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `package` FOREIGN KEY (`package_id`) REFERENCES `packages` (`package_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
