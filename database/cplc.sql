-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 11:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cplc`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `quote` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `battles`
--

CREATE TABLE `battles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `by_team_id` bigint(20) UNSIGNED NOT NULL,
  `for_team_id` bigint(20) UNSIGNED NOT NULL,
  `battle_date` date NOT NULL,
  `battle_time` time NOT NULL,
  `destination` text NOT NULL,
  `postponed` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filter` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_11_161711_create_permission_tables', 1),
(6, '2023_05_15_230218_create_sports_table', 1),
(7, '2023_05_16_005951_create_sessions_table', 1),
(8, '2023_05_16_171907_create_schools_table', 1),
(9, '2023_05_17_132623_create_teams_table', 1),
(10, '2023_05_17_200014_create_players_table', 1),
(11, '2023_05_17_224738_create_battles_table', 1),
(12, '2023_05_18_174745_create_notifications_table', 1),
(13, '2023_06_04_211844_create_session_teams_table', 1),
(14, '2023_06_05_023627_create_player_scores_table', 1),
(15, '2023_06_09_031239_create_sport_attributes_table', 1),
(16, '2023_06_09_214729_create_sport_attribute_values_table', 1),
(17, '2023_06_10_064455_create_session_team_scores_table', 1),
(18, '2023_06_10_064729_create_session_team_players_table', 1),
(19, '2023_06_15_042422_create_banners_table', 1),
(20, '2023_06_16_003546_create_seos_table', 1),
(21, '2023_06_16_235012_create_pages_table', 1),
(22, '2023_06_19_214048_create_galleries_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 8);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `value` text DEFAULT NULL,
  `parent` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `isupload` tinyint(1) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `type`, `value`, `parent`, `status`, `isupload`, `contact_id`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'banner', '', '', 0, 1, NULL, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(2, 'Home', 'bannerheading', '', 'banner', 0, 0, NULL, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(3, 'Home', 'bannerquote', '', 'banner', 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(4, 'Home', 'Abouttext', '', 'About', 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(5, 'Home', 'Aboutleague', '', 'AboutLeague', 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(6, 'Home', 'ourmatchcontent', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(7, 'Home', 'imgcard1', '', NULL, 0, 1, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(8, 'Home', 'headingcard1', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(9, 'Home', 'cardcontent1', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(10, 'Home', 'imgcard2', '', NULL, 0, 1, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(11, 'Home', 'headingcard2', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(12, 'Home', 'cardcontent2', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(13, 'Home', 'Frequentaqques', '', '', 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(14, 'Home', 'Frequentadpara', '', 'Frequentaq', 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(15, 'About', 'headingLeft', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(16, 'About', 'BoldParagraphLeft', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(17, 'About', 'ParagraphLeft', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(18, 'About', 'imageLeft', '', NULL, 0, 1, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(19, 'About', 'ImgQuoteLeft', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(20, 'About', 'Rightquoteauthor', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(21, 'About', 'PlayerInformation', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(22, 'About', 'HeadinRight', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(23, 'About', 'BoldParagraphRight', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(24, 'About', 'ParagraphRight', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(25, 'About', 'imageRight', '', NULL, 0, 1, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(26, 'About', 'ImgQuoteRight', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(27, 'About', 'Rightquoteauthor', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(28, 'Players', 'Heading', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(29, 'Players', 'Paragraph', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(30, 'Gallery', 'Heading', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(31, 'Gallery', 'Paragraph', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(32, 'Gallery', 'Sport', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(33, 'Contact', 'Heading', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(34, 'Contact', 'Paragraph', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(35, 'Contact', 'Contact', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(36, 'Footer', 'Paragraph', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(37, 'Footer', 'newsletters', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(38, 'Footer', 'fb', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(39, 'Footer', 'twitter', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(40, 'Footer', 'gmail', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(41, 'Footer', 'pinterest', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(42, 'Footer', 'yt', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18'),
(43, 'Footer', 'insta', '', NULL, 0, 0, NULL, '2023-06-22 21:15:18', '2023-06-22 21:15:18');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `player_scores`
--

CREATE TABLE `player_scores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_team_id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `battle_id` bigint(20) UNSIGNED NOT NULL,
  `player_id` bigint(20) UNSIGNED NOT NULL,
  `score` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(2, 'coach', 'web', '2023-06-22 21:15:17', '2023-06-22 21:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coach_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `phone` bigint(20) NOT NULL,
  `fax` bigint(20) NOT NULL,
  `principal_name` varchar(255) NOT NULL,
  `principal_phone` bigint(20) NOT NULL,
  `principal_email` varchar(255) NOT NULL,
  `director_name` varchar(255) NOT NULL,
  `director_phone` bigint(20) NOT NULL,
  `director_email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `athletic_assitant_name` varchar(255) NOT NULL,
  `athletic_assitant_position` varchar(255) NOT NULL,
  `athletic_assitant_email` varchar(255) NOT NULL,
  `athletic_assitant_cell` bigint(20) NOT NULL,
  `athletic_assitant_homephone` varchar(255) NOT NULL,
  `gymnasium_address` varchar(255) NOT NULL,
  `school_have_gym` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `monday` varchar(255) NOT NULL,
  `tuesday` varchar(255) NOT NULL,
  `wednesday` varchar(255) NOT NULL,
  `thursday` varchar(255) NOT NULL,
  `friday` varchar(255) NOT NULL,
  `saturday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `page`, `title`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'seo_title', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(2, 'Home', 'seo_description', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(3, 'Home', 'seo_author', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(4, 'Home', 'seo_keyword', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(5, 'About', 'seo_title', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(6, 'About', 'seo_description', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(7, 'About', 'seo_author', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(8, 'About', 'seo_keyword', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(9, 'Player', 'seo_title', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(10, 'Player', 'seo_description', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(11, 'Player', 'seo_author', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(12, 'Player', 'seo_keyword', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(13, 'Gallery', 'seo_title', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(14, 'Gallery', 'seo_description', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(15, 'Gallery', 'seo_author', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(16, 'Gallery', 'seo_keyword', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(17, 'League', 'seo_title', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(18, 'League', 'seo_description', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(19, 'League', 'seo_author', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(20, 'League', 'seo_keyword', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(21, 'Match', 'seo_title', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(22, 'Match', 'seo_description', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(23, 'Match', 'seo_author', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(24, 'Match', 'seo_keyword', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(25, 'Contact', 'seo_title', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(26, 'Contact', 'seo_description', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(27, 'Contact', 'seo_author', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(28, 'Contact', 'seo_keyword', '', 0, '2023-06-22 21:15:17', '2023-06-22 21:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `sport_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `session_teams`
--

CREATE TABLE `session_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `session_team_players`
--

CREATE TABLE `session_team_players` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_team_id` bigint(20) UNSIGNED NOT NULL,
  `player_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `session_team_scores`
--

CREATE TABLE `session_team_scores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_team_id` bigint(20) UNSIGNED NOT NULL,
  `battle_id` bigint(20) UNSIGNED NOT NULL,
  `is_win` tinyint(1) NOT NULL,
  `score` int(11) NOT NULL,
  `points` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `min_players` int(11) NOT NULL,
  `max_players` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `name`, `min_players`, `max_players`, `created_at`, `updated_at`) VALUES
(1, 'Basketball', 5, 5, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(2, 'Soccer', 11, 11, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(3, 'Flag Football', 7, 7, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(4, 'Tennis', 2, 2, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(5, 'Baseball', 9, 25, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(6, 'Softball', 9, 9, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(7, 'Track & Feild', 1, 1, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(8, 'Cross Country', 5, 7, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(9, 'Cheerleading', 5, 30, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(10, 'Volleyball', 6, 6, '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(11, 'ESports', 1, 99, '2023-06-22 21:15:17', '2023-06-22 21:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `sport_attributes`
--

CREATE TABLE `sport_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sport_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sport_attribute_values`
--

CREATE TABLE `sport_attribute_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sport_attribute_id` bigint(20) UNSIGNED NOT NULL,
  `player_id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `coach_id` bigint(20) UNSIGNED NOT NULL,
  `sport_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `coach_age` int(11) NOT NULL DEFAULT 0,
  `coach_experience` double NOT NULL DEFAULT 0,
  `coach_nationality` varchar(255) DEFAULT NULL,
  `coach_past_team` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `avatar`, `email`, `is_verified`, `email_verified_at`, `password`, `coach_age`, `coach_experience`, `coach_nationality`, `coach_past_team`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'users/user-1.png', 'admin@test.com', 1, '2023-06-22 21:15:17', '$2y$10$kPTCp808kcfKuOJ.oGLeo.Vy.jZVTJ8.Diz6GGGP54qqUFE90eQ.W', 0, 0, NULL, NULL, '4pFpUg3nHY', '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(2, 'coach1', 'users/user-2.png', 'coach1@test.com', 1, '2023-06-22 21:15:17', '$2y$10$fMgpkwlquCxzvEJ7V.GijOq5WA70ryDdkxYUjWpO4I/TA2YlsIAW6', 0, 0, NULL, NULL, 'e5Ekw4xwmR', '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(3, 'coach2', 'users/user-3.png', 'coach2@test.com', 0, '2023-06-22 21:15:17', '$2y$10$eAEQ5uYqcLyR.rFRbwWBJ.68H455dbLTyyqhaYIfm.XpQE9Ejmyz.', 0, 0, NULL, NULL, '1jZ0b141D5', '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(4, 'coach3', 'users/user-2.png', 'coach3@test.com', 0, '2023-06-22 21:15:17', '$2y$10$Zwuxlf5C3XZ9A9AacXxs/.g2uCY7jYAc6OiQkdsfdFa6RoFX5kkhC', 0, 0, NULL, NULL, 'o69pmMqw2y', '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(5, 'coach4', 'users/user-2.png', 'coach4@test.com', 0, '2023-06-22 21:15:17', '$2y$10$culMFPcwJOi2UCE00nY3oOOCtey0eMi4N.hRmxyJifvE1EgzVAfii', 0, 0, NULL, NULL, 'L9LjMIb5Pv', '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(6, 'coach5', 'users/user-2.png', 'coach5@test.com', 0, '2023-06-22 21:15:17', '$2y$10$kIRivZutqpqXzSr.GX89j.4ZIQBsVPIQYhCo8TykEsrL9FZljmmde', 0, 0, NULL, NULL, '8dRiwfkdb3', '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(7, 'coach6', 'users/user-2.png', 'coach6@test.com', 0, '2023-06-22 21:15:17', '$2y$10$s.Nc5O5.uf2GwmZeZUqznOeJXChVKQ8rwzf44.97n8ZERShuOG7Em', 0, 0, NULL, NULL, 'adnwysgDn3', '2023-06-22 21:15:17', '2023-06-22 21:15:17'),
(8, 'coach7', 'users/user-2.png', 'coach7@test.com', 0, '2023-06-22 21:15:17', '$2y$10$fS4Eya6kDW2THjp2ebH/r.md8IgScmJZ0H0FyfsLq3gbsbWHg1aXi', 0, 0, NULL, NULL, 'aGVTo5auGD', '2023-06-22 21:15:17', '2023-06-22 21:15:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `battles`
--
ALTER TABLE `battles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `battles_session_id_foreign` (`session_id`),
  ADD KEY `battles_by_team_id_foreign` (`by_team_id`),
  ADD KEY `battles_for_team_id_foreign` (`for_team_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `players_team_id_foreign` (`team_id`);

--
-- Indexes for table `player_scores`
--
ALTER TABLE `player_scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player_scores_session_team_id_foreign` (`session_team_id`),
  ADD KEY `player_scores_team_id_foreign` (`team_id`),
  ADD KEY `player_scores_battle_id_foreign` (`battle_id`),
  ADD KEY `player_scores_player_id_foreign` (`player_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schools_coach_id_foreign` (`coach_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_sport_id_foreign` (`sport_id`);

--
-- Indexes for table `session_teams`
--
ALTER TABLE `session_teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session_teams_session_id_foreign` (`session_id`),
  ADD KEY `session_teams_team_id_foreign` (`team_id`);

--
-- Indexes for table `session_team_players`
--
ALTER TABLE `session_team_players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session_team_players_session_team_id_foreign` (`session_team_id`),
  ADD KEY `session_team_players_player_id_foreign` (`player_id`);

--
-- Indexes for table `session_team_scores`
--
ALTER TABLE `session_team_scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session_team_scores_session_team_id_foreign` (`session_team_id`),
  ADD KEY `session_team_scores_battle_id_foreign` (`battle_id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sport_attributes`
--
ALTER TABLE `sport_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sport_attributes_sport_id_foreign` (`sport_id`);

--
-- Indexes for table `sport_attribute_values`
--
ALTER TABLE `sport_attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sport_attribute_values_sport_attribute_id_foreign` (`sport_attribute_id`),
  ADD KEY `sport_attribute_values_player_id_foreign` (`player_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_coach_id_foreign` (`coach_id`),
  ADD KEY `teams_sport_id_foreign` (`sport_id`);

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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `battles`
--
ALTER TABLE `battles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `player_scores`
--
ALTER TABLE `player_scores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `session_teams`
--
ALTER TABLE `session_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `session_team_players`
--
ALTER TABLE `session_team_players`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `session_team_scores`
--
ALTER TABLE `session_team_scores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sport_attributes`
--
ALTER TABLE `sport_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sport_attribute_values`
--
ALTER TABLE `sport_attribute_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `battles`
--
ALTER TABLE `battles`
  ADD CONSTRAINT `battles_by_team_id_foreign` FOREIGN KEY (`by_team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `battles_for_team_id_foreign` FOREIGN KEY (`for_team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `battles_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `player_scores`
--
ALTER TABLE `player_scores`
  ADD CONSTRAINT `player_scores_battle_id_foreign` FOREIGN KEY (`battle_id`) REFERENCES `battles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `player_scores_player_id_foreign` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `player_scores_session_team_id_foreign` FOREIGN KEY (`session_team_id`) REFERENCES `session_teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `player_scores_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schools`
--
ALTER TABLE `schools`
  ADD CONSTRAINT `schools_coach_id_foreign` FOREIGN KEY (`coach_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_sport_id_foreign` FOREIGN KEY (`sport_id`) REFERENCES `sports` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `session_teams`
--
ALTER TABLE `session_teams`
  ADD CONSTRAINT `session_teams_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `session_teams_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `session_team_players`
--
ALTER TABLE `session_team_players`
  ADD CONSTRAINT `session_team_players_player_id_foreign` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `session_team_players_session_team_id_foreign` FOREIGN KEY (`session_team_id`) REFERENCES `session_teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `session_team_scores`
--
ALTER TABLE `session_team_scores`
  ADD CONSTRAINT `session_team_scores_battle_id_foreign` FOREIGN KEY (`battle_id`) REFERENCES `battles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `session_team_scores_session_team_id_foreign` FOREIGN KEY (`session_team_id`) REFERENCES `session_teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sport_attributes`
--
ALTER TABLE `sport_attributes`
  ADD CONSTRAINT `sport_attributes_sport_id_foreign` FOREIGN KEY (`sport_id`) REFERENCES `sports` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sport_attribute_values`
--
ALTER TABLE `sport_attribute_values`
  ADD CONSTRAINT `sport_attribute_values_player_id_foreign` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sport_attribute_values_sport_attribute_id_foreign` FOREIGN KEY (`sport_attribute_id`) REFERENCES `sport_attributes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_coach_id_foreign` FOREIGN KEY (`coach_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teams_sport_id_foreign` FOREIGN KEY (`sport_id`) REFERENCES `sports` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
