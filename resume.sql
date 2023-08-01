-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 01:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `role_id`, `name`, `email`, `cell`, `username`, `password`, `photo`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, 1, 'super Admin', 'admin@gmail.com', '01750639637', 'provider', '$2y$10$9R151Yx7HDikaG1X1V.xe.t1o5nBerZZaot5/Mp2AWdLxV9i1Pnee', NULL, 1, 0, '2023-07-29 23:31:11', '2023-07-29 23:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `edus`
--

CREATE TABLE `edus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ins` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cgpa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `edus`
--

INSERT INTO `edus` (`id`, `ins`, `dept`, `date`, `cgpa`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, 'Al-Inshania Islami Academy, Rajshahi', 'ssc(Science)', '2010', 'gpa:4.56', 1, 0, '2023-07-31 01:35:17', '2023-07-31 01:35:17'),
(2, 'Rajshahi Polytechnic Institute', 'Electronics', '2014', 'cgpa:2.93', 1, 0, '2023-07-31 01:37:08', '2023-07-31 01:37:08'),
(3, 'Varendra University Rajshahi', 'B.Sc in EEE', '2021', 'cgpa:3.41', 1, 0, '2023-07-31 01:38:12', '2023-07-31 01:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`id`, `name`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, 'Reading Books', 1, 0, '2023-08-01 01:11:40', '2023-08-01 01:11:40'),
(2, 'watching cricket and news', 1, 0, '2023-08-01 01:11:55', '2023-08-01 01:11:55'),
(3, 'Research and Analysis', 1, 0, '2023-08-01 01:12:04', '2023-08-01 01:12:04');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_07_29_175210_create_admins_table', 1),
(4, '2023_07_30_174923_create_edus_table', 3),
(5, '2023_07_31_083817_create_skills_table', 4),
(8, '2023_07_30_090741_create_personals_table', 5),
(9, '2023_07_31_094427_create_tranings_table', 5),
(10, '2023_07_31_163752_create_themes_table', 6),
(11, '2023_08_01_063319_create_summeries_table', 7),
(12, '2023_08_01_065619_create_hobbies_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `personals`
--

CREATE TABLE `personals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personals`
--

INSERT INTO `personals` (`id`, `name`, `skill`, `profile`, `created_at`, `updated_at`) VALUES
(1, 'MD NAYAN ISLAM', 'Jr. Laravel Developer', 'I am Full Stack Developer. Junior Web Developer with one\r\nyear of experience designing and building responsive web\r\napplication. Notable achievements include boosting the\r\nconversation rate of an existing website by 80% with\r\nimproved code and design', '2023-07-31 20:03:21', '2023-07-31 20:03:21');

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
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 1, 0, '2023-07-31 03:23:21', '2023-07-31 03:23:21'),
(2, 'PHP', 1, 0, '2023-07-31 03:23:36', '2023-07-31 03:23:36'),
(3, 'JS', 1, 0, '2023-07-31 03:23:43', '2023-07-31 03:23:43'),
(4, 'Html', 1, 0, '2023-07-31 03:24:05', '2023-07-31 03:24:05'),
(5, 'css', 1, 0, '2023-07-31 03:24:14', '2023-07-31 03:24:14'),
(6, 'Ajax', 1, 0, '2023-07-31 03:24:33', '2023-07-31 03:24:33'),
(7, 'jQuery', 1, 0, '2023-08-01 05:21:07', '2023-08-01 05:21:07'),
(8, 'Bootstrap', 1, 0, '2023-08-01 05:21:21', '2023-08-01 05:21:21'),
(9, 'Sass', 1, 0, '2023-08-01 05:21:51', '2023-08-01 05:21:51'),
(10, 'WordPress', 1, 0, '2023-08-01 05:22:43', '2023-08-01 05:22:43'),
(11, 'MySQL', 1, 0, '2023-08-01 05:23:07', '2023-08-01 05:23:07'),
(12, 'OOP', 1, 0, '2023-08-01 05:25:03', '2023-08-01 05:25:03');

-- --------------------------------------------------------

--
-- Table structure for table `summeries`
--

CREATE TABLE `summeries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `summeries`
--

INSERT INTO `summeries` (`id`, `name`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, 'Frontend: Html, Css, JS, jQuery,\r\nBootstrap, Sass,', 1, 0, '2023-08-01 00:51:53', '2023-08-01 00:51:53'),
(2, 'Backend: PHP(OOP), JS, Ajax, MySQL,\r\nLaravel.', 1, 0, '2023-08-01 00:52:14', '2023-08-01 00:52:14'),
(3, 'CMS: WordPress', 1, 0, '2023-08-01 00:52:45', '2023-08-01 00:52:45'),
(4, 'Tool: VS Code, GitHub, Git, Stack\r\noverflow Chrome dev tool Photoshop.', 1, 0, '2023-08-01 00:52:55', '2023-08-01 00:52:55'),
(5, 'MS office programs: (MS Word, MS\r\nExcel, MS Outlook, MS Power Point)', 1, 0, '2023-08-01 00:53:08', '2023-08-01 00:53:08'),
(6, 'Operating System: Windows 10,\r\nWindows 8, Windows 7 and Linux\r\n(Ubuntu)', 1, 0, '2023-08-01 00:53:20', '2023-08-01 00:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `photo`, `cell`, `email`, `address`, `social`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, 'photo.JPG', 1750639637, 'nayanislam085@gmail.com', 'Vill: Baropakhia, P.O: Dhopapara, P.S: Puthia, Dist: Rajshahi', '{\"fb\":\"https:\\/\\/www.facebook.com\\/nayan.islam.54379\",\"din\":\"https:\\/\\/www.linkedin.com\\/in\\/nayan-islam-91724a196\\/\",\"git\":\"https:\\/\\/github.com\\/nayan97\",\"mail\":\"nayanislam085@gmail.com\"}', 1, 0, '2023-07-31 11:02:49', '2023-07-31 23:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `tranings`
--

CREATE TABLE `tranings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dates` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '[]',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tranings`
--

INSERT INTO `tranings` (`id`, `name`, `title`, `date`, `dates`, `skills`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(4, 'Coderstrust Bangladesh', 'Advanced Web Development', '2023-07-17', '2023-07-31', '[\"Laravel\",\"PHP\",\"JS\",\"Ajax\",\"MySQL\",\"OOP\"]', 1, 0, '2023-08-01 04:53:00', '2023-08-01 05:27:14'),
(6, 'LEDP, ICT Division of Bangladesh', 'LEDP', '2020-09-02', '2021-02-28', '[\"JS\",\"Html\",\"css\",\"jQuery\",\"Bootstrap\",\"Sass\",\"WordPress\"]', 1, 0, '2023-08-01 05:53:57', '2023-08-01 05:53:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_cell_unique` (`cell`);

--
-- Indexes for table `edus`
--
ALTER TABLE `edus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personals`
--
ALTER TABLE `personals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summeries`
--
ALTER TABLE `summeries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tranings`
--
ALTER TABLE `tranings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `edus`
--
ALTER TABLE `edus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personals`
--
ALTER TABLE `personals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `summeries`
--
ALTER TABLE `summeries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tranings`
--
ALTER TABLE `tranings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
