-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2025 at 12:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `heading`, `quote`, `created_at`, `updated_at`) VALUES
(1, '0e7b9c53773b2e08a8e00b5a256fe434be66c3ce9d1c579307a051328e42f5f2.jpg', 'SPARK YOURESELF', 'Don\'t let your energy waste', '2025-11-22 10:03:22', '2025-11-22 10:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `battles`
--

CREATE TABLE `battles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `by_team_id` bigint(20) UNSIGNED NOT NULL,
  `for_team_id` bigint(20) UNSIGNED DEFAULT NULL,
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

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `filter`, `picture`, `page`, `created_at`, `updated_at`) VALUES
(1, 'Basketball', '8003e9c48963c5ca54305ea66a0cb5b76dcb2dd8d8c9337d06c61028746e9082.jpg', 'Gallery', '2025-11-22 10:46:04', '2025-11-22 10:46:04'),
(2, 'Soccer', '65f322f909fa271520f6f92c9cda353b9271058e4740b4f184532be03a6f4743.jpg', 'Gallery', '2025-11-22 10:46:34', '2025-11-22 10:46:34'),
(4, 'Basketball', 'a62f56d90e053713350ce3aa41436525597c16151a26816799b8b9df5eeb4fa0.jpg', 'Gallery', '2025-11-22 10:54:38', '2025-11-22 10:54:38'),
(5, 'Baseball', '0e20c894ac95fe54b9e0148b07d67f01c591cfe1864468fcc0907b6e422677d5.webp', 'Gallery', '2025-11-22 10:55:00', '2025-11-22 10:55:00'),
(6, 'Tennis', 'd1d0b7460d878b1f0b0934d2712013227fc9d3c07c3de591fd9e25c8f42e16f2.jpg', 'Gallery', '2025-11-22 10:55:14', '2025-11-22 10:55:14'),
(7, 'Softball', '14772d97c14b5adb9c796af91a1e24e6da96637118f479fbd1c1d08401657636.jpg', 'Gallery', '2025-11-22 10:55:22', '2025-11-22 10:55:22'),
(9, 'ESports', '89bd4db1f64572c7f89239238c06181bcd77886de9435d4182f2e2076168ee82.jpg', 'Gallery', '2025-11-22 10:55:55', '2025-11-22 10:55:55'),
(10, 'Cheerleading', 'b2d541639d5cfd2c06f6b1089ca5e2130d33ccc973db431b62b4fc329b37809d.webp', 'Gallery', '2025-11-22 10:56:12', '2025-11-22 10:56:12'),
(11, 'Tennis', '36aa2e514404c19c5a07c1c75cb3e9d9216039562167a15035309b24253ae71e.PNG', 'Gallery', '2025-11-22 10:57:01', '2025-11-22 10:57:01'),
(12, 'Volleyball', '15f1b5d9277ebd5e5396dee0ff17917775111e9f69c2ccb568f870893156ccf6.jpg', 'Gallery', '2025-11-22 10:57:27', '2025-11-22 10:57:27'),
(13, 'ESports', '4257356d3772bcb8f51cd7f5fdf21e15ed2c63f8cafc3ad3f35bf5cfa6932fb8.jpeg', 'Gallery', '2025-11-22 10:58:41', '2025-11-22 10:58:41'),
(14, 'Volleyball', '00c2e05ca1248630c845627f559eee311465ea156c32e370b6318b3e660d745f.jpg', 'Gallery', '2025-11-22 10:59:26', '2025-11-22 10:59:26');

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
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9);

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
(1, 'Home', 'banner', 'e4d3bed5f15d9006258044a567073159f68b1a1c1bdad262165fba4ed030ab31.jpg', '', 0, 1, NULL, '2025-11-22 09:37:02', '2025-11-22 10:06:18'),
(2, 'Home', 'bannerheading', '', 'banner', 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(3, 'Home', 'bannerquote', '', 'banner', 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(4, 'Home', 'Abouttext', 'Lorem ipsum, dolor sit amet                                     consectetur adipisicing elit. Quo, sunt corrupti alias nihil saepe pariatur.', 'About', 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 10:05:01'),
(5, 'Home', 'Aboutleague', 'CPSAL ABOUT', 'AboutLeague', 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 10:07:09'),
(6, 'Home', 'ourmatchcontent', 'The mission of the Charter Public School Athletic League is to provide athletic opportunities to Charter, private and public school students', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 10:07:23'),
(7, 'Home', 'imgcard1', 'a6fba377b554588a9b7390adccdd8626131d9513c6c8ee48d000b496e0991115.PNG', NULL, 0, 1, NULL, '2025-11-22 09:37:02', '2025-11-22 10:08:14'),
(8, 'Home', 'headingcard1', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(9, 'Home', 'cardcontent1', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(10, 'Home', 'imgcard2', 'b3fc9c977aa7c4ac98f5b9ee521bd568a2f9ccf4e4da1ee0f83a16d66900392e.PNG', NULL, 0, 1, NULL, '2025-11-22 09:37:02', '2025-11-22 10:08:41'),
(11, 'Home', 'headingcard2', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(12, 'Home', 'cardcontent2', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(13, 'Home', 'Lawofplay', '', '', 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(14, 'Home', 'Lawofplayfile', '', '', 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(15, 'About', 'headingLeft', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(16, 'About', 'BoldParagraphLeft', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(17, 'About', 'ParagraphLeft', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(18, 'About', 'imageLeft', '', NULL, 0, 1, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(19, 'About', 'ImgQuoteLeft', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(20, 'About', 'Rightquoteauthor', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(21, 'About', 'PlayerInformation', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(22, 'About', 'HeadinRight', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(23, 'About', 'BoldParagraphRight', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(24, 'About', 'ParagraphRight', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(25, 'About', 'imageRight', '', NULL, 0, 1, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(26, 'About', 'ImgQuoteRight', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(27, 'About', 'Rightquoteauthor', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(28, 'Players', 'Heading', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(29, 'Players', 'Paragraph', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(30, 'Gallery', 'Heading', 'CPSAL GALLERY', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 10:44:30'),
(31, 'Gallery', 'Paragraph', 'Lorem ipsum, dolor sit amet                                     consectetur adipisicing elit. Quo, sunt corrupti alias nihil saepe pariatur.', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 10:44:37'),
(32, 'Gallery', 'Sport', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(33, 'Contact', 'Heading', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(34, 'Contact', 'Paragraph', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(35, 'Contact', 'Contact', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(36, 'Footer', 'Paragraph', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(37, 'Footer', 'newsletters', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(38, 'Footer', 'fb', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(39, 'Footer', 'twitter', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(40, 'Footer', 'gmail', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(41, 'Footer', 'pinterest', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(42, 'Footer', 'yt', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(43, 'Footer', 'insta', '', NULL, 0, 0, NULL, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(44, 'Home', 'banner', 'e4d3bed5f15d9006258044a567073159f68b1a1c1bdad262165fba4ed030ab31.jpg', NULL, NULL, 1, NULL, '2025-11-22 10:04:26', '2025-11-22 10:05:47'),
(45, 'Home', 'bannerheading', 'Limitless Spirit', '44', NULL, NULL, NULL, '2025-11-22 10:04:26', '2025-11-22 10:04:26'),
(46, 'Home', 'bannerquote', 'Your Energy and Focus has no limit !', '44', NULL, NULL, NULL, '2025-11-22 10:04:26', '2025-11-22 10:04:26'),
(47, 'Home', 'banner', 'cd760b2f86278ccdaf87c329ca23c3c0ce77efb65cfbed1067e22004d59092a9.jpg', NULL, NULL, 1, NULL, '2025-11-22 10:06:08', '2025-11-22 10:06:08'),
(48, 'Home', 'bannerheading', 'Fire Your Power', '47', NULL, NULL, NULL, '2025-11-22 10:06:08', '2025-11-22 10:06:08'),
(49, 'Home', 'bannerquote', 'Bring Your Power like a Fire !', '47', NULL, NULL, NULL, '2025-11-22 10:06:08', '2025-11-22 10:06:08'),
(50, 'Home', 'banner', '33c9df01f5f7a8864ef29caa1676f2bfdb96be2d6280a87ecf4d0f47e64b65d5.jpg', NULL, NULL, 1, NULL, '2025-11-22 10:06:32', '2025-11-22 10:06:32'),
(51, 'Home', 'bannerheading', 'Smash Your Weakness', '50', NULL, NULL, NULL, '2025-11-22 10:06:32', '2025-11-22 10:06:32'),
(52, 'Home', 'bannerquote', 'Encounter Your Weaknesses !!', '50', NULL, NULL, NULL, '2025-11-22 10:06:32', '2025-11-22 10:06:32'),
(53, 'Home', 'banner', '3ec10fb711897db079caa5c83579e278e9f182648dd2ae106666627629545ff5.jpg', NULL, NULL, 1, NULL, '2025-11-22 10:06:46', '2025-11-22 10:06:46'),
(54, 'Home', 'bannerheading', 'Run On Success', '53', NULL, NULL, NULL, '2025-11-22 10:06:46', '2025-11-22 10:06:46'),
(55, 'Home', 'bannerquote', 'Running on the success', '53', NULL, NULL, NULL, '2025-11-22 10:06:46', '2025-11-22 10:06:46'),
(56, 'Home', 'lawofplay', 'Don\'t humiliate anyone by words', NULL, NULL, NULL, NULL, '2025-11-22 10:09:43', '2025-11-22 10:09:43'),
(57, 'Home', 'lawofplayfile', '985cb251ca7d347a2ccdecb1e9e1c8b6d7963c680643146aed638e3db9551b6e.pdf', '56', NULL, NULL, NULL, '2025-11-22 10:09:43', '2025-11-22 10:09:43'),
(58, 'Home', 'lawofplay', 'It\'s just a game it\'s not a personal battle', NULL, NULL, NULL, NULL, '2025-11-22 10:10:27', '2025-11-22 10:10:27'),
(59, 'Home', 'lawofplayfile', 'b4026702960fe941837e0f18443556f292d70ea60796ed7bbae8cfbc48f82ca2.pdf', '58', NULL, NULL, NULL, '2025-11-22 10:10:27', '2025-11-22 10:10:27'),
(60, 'Home', 'lawofplay', 'Play with aggression but not being brutal', NULL, NULL, NULL, NULL, '2025-11-22 10:10:56', '2025-11-22 10:10:56'),
(61, 'Home', 'lawofplayfile', '0cb1fbb97b36f277f3bda615a5d7ab7fac92183d19a97ab4cff813703a7ce394.pdf', '60', NULL, NULL, NULL, '2025-11-22 10:10:56', '2025-11-22 10:10:56'),
(62, 'Home', 'frequentquestion', 'Why do we use it?', NULL, NULL, NULL, NULL, '2025-11-22 10:11:07', '2025-11-22 10:11:07'),
(63, 'Home', 'frequentanswer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '62', NULL, NULL, NULL, '2025-11-22 10:11:07', '2025-11-22 10:11:07'),
(64, 'Home', 'frequentquestion', 'How we are orginized the tournaments', NULL, NULL, NULL, NULL, '2025-11-22 10:11:41', '2025-11-22 10:11:41'),
(65, 'Home', 'frequentanswer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '64', NULL, NULL, NULL, '2025-11-22 10:11:41', '2025-11-22 10:11:41'),
(66, 'Home', 'frequentquestion', 'How to register with CPSAL', NULL, NULL, NULL, NULL, '2025-11-22 10:12:21', '2025-11-22 10:12:21'),
(67, 'Home', 'frequentanswer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '66', NULL, NULL, NULL, '2025-11-22 10:12:21', '2025-11-22 10:12:21'),
(68, 'Home', 'frequentquestion', 'What\'s the benifits of being member of CPSAL', NULL, NULL, NULL, NULL, '2025-11-22 10:12:51', '2025-11-22 10:12:51'),
(69, 'Home', 'frequentanswer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '68', NULL, NULL, NULL, '2025-11-22 10:12:51', '2025-11-22 10:12:51');

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
  `image` varchar(255) DEFAULT NULL,
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
(1, 'admin', 'web', '2025-11-22 09:37:01', '2025-11-22 09:37:01'),
(2, 'coach', 'web', '2025-11-22 09:37:01', '2025-11-22 09:37:01');

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

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `coach_id`, `name`, `image`, `address`, `phone`, `fax`, `principal_name`, `principal_phone`, `principal_email`, `director_name`, `director_phone`, `director_email`, `created_at`, `updated_at`, `athletic_assitant_name`, `athletic_assitant_position`, `athletic_assitant_email`, `athletic_assitant_cell`, `athletic_assitant_homephone`, `gymnasium_address`, `school_have_gym`, `f_name`, `l_name`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`) VALUES
(1, 9, 'Cooper Cherry', 'school-image/GRb85eKRdfpPZdDoGKTR32CtrNcQ0VlutLBtEJXz.png', 'Et aperiam quo maior', 289, 110, 'Abbot Vasquez', 21, 'dyde@mailinator.com', 'Tanek Berger', 89, 'zipywa@mailinator.com', '2025-11-22 09:51:37', '2025-11-22 09:51:37', 'Marcia Sloan', 'Aut aliqua Elit se', 'sopevizuk@mailinator.com', 97, '95', 'Quis anim ut eum in', 'Qui doloremque labor', 'Quinn', 'Wells', '16', '16', '20', '13', '28', '3');

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
(1, 'Home', 'seo_title', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(2, 'Home', 'seo_description', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(3, 'Home', 'seo_author', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(4, 'Home', 'seo_keyword', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(5, 'About', 'seo_title', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(6, 'About', 'seo_description', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(7, 'About', 'seo_author', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(8, 'About', 'seo_keyword', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(9, 'Player', 'seo_title', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(10, 'Player', 'seo_description', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(11, 'Player', 'seo_author', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(12, 'Player', 'seo_keyword', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(13, 'Gallery', 'seo_title', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(14, 'Gallery', 'seo_description', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(15, 'Gallery', 'seo_author', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(16, 'Gallery', 'seo_keyword', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(17, 'League', 'seo_title', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(18, 'League', 'seo_description', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(19, 'League', 'seo_author', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(20, 'League', 'seo_keyword', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(21, 'Match', 'seo_title', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(22, 'Match', 'seo_description', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(23, 'Match', 'seo_author', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(24, 'Match', 'seo_keyword', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(25, 'Contact', 'seo_title', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(26, 'Contact', 'seo_description', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(27, 'Contact', 'seo_author', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(28, 'Contact', 'seo_keyword', '', 0, '2025-11-22 09:37:02', '2025-11-22 09:37:02');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `sport_id` bigint(20) UNSIGNED NOT NULL,
  `is_oppenent` int(11) NOT NULL,
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
(1, 'Basketball', 5, 5, '2025-11-22 09:37:01', '2025-11-22 09:37:01'),
(2, 'Soccer', 11, 11, '2025-11-22 09:37:01', '2025-11-22 09:37:01'),
(3, 'Flag Football', 7, 7, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(4, 'Tennis', 2, 2, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(5, 'Baseball', 9, 25, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(6, 'Softball', 9, 9, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(7, 'Track & Feild', 1, 1, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(8, 'Cross Country', 5, 7, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(9, 'Cheerleading', 5, 30, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(10, 'Volleyball', 6, 6, '2025-11-22 09:37:02', '2025-11-22 09:37:02'),
(11, 'ESports', 1, 99, '2025-11-22 09:37:02', '2025-11-22 09:37:02');

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
(1, 'admin', 'users/user-1.png', 'admin@test.com', 1, '2025-11-22 09:37:01', '$2y$10$hgKZJHBSQSzzCWTw/myQ6.QmK6.BX8dudCvJU1dqvkOPdgSHdX53O', 0, 0, NULL, NULL, 'Ah4MD3fXW4', '2025-11-22 09:37:01', '2025-11-22 09:37:01'),
(2, 'coach1', 'users/user-2.png', 'coach1@test.com', 1, '2025-11-22 09:37:01', '$2y$10$B6gcKEBOotLyPgDw.NQj/.Ya8w53t3WsCmTGV2BKXvivoADQV5.kG', 0, 0, NULL, NULL, 'c0YhDuHKUv', '2025-11-22 09:37:01', '2025-11-22 09:37:01'),
(3, 'coach2', 'users/user-3.png', 'coach2@test.com', 0, '2025-11-22 09:37:01', '$2y$10$P6kQ2Tc1LH9DNnzfXIN.vuI2z.3KNH/9co3iSbOTAygW3sd7EpGpe', 0, 0, NULL, NULL, 'sKGnsEC4HV', '2025-11-22 09:37:01', '2025-11-22 09:37:01'),
(4, 'coach3', 'users/user-2.png', 'coach3@test.com', 0, '2025-11-22 09:37:01', '$2y$10$kiOy9VfqBTEmIjTt5s3DlOeCrkXrA3qsHwsRekia8eOU8zMddX87i', 0, 0, NULL, NULL, 'ClO2MMVAxa', '2025-11-22 09:37:01', '2025-11-22 09:37:01'),
(5, 'coach4', 'users/user-2.png', 'coach4@test.com', 0, '2025-11-22 09:37:01', '$2y$10$hXVi6GtG11gMi2E2wIqobutIWMx2Ys8IEQr4Cf.9gT37CLslaxoQ2', 0, 0, NULL, NULL, 'OAE4wuA2s8', '2025-11-22 09:37:01', '2025-11-22 09:37:01'),
(6, 'coach5', 'users/user-2.png', 'coach5@test.com', 0, '2025-11-22 09:37:01', '$2y$10$T8hj/vGlI76QjyQLPWtVvemImK.dsPAQILilwiD6QhQDfR/vE0XIe', 0, 0, NULL, NULL, 'Gah7BnPYTi', '2025-11-22 09:37:01', '2025-11-22 09:37:01'),
(7, 'coach6', 'users/user-2.png', 'coach6@test.com', 0, '2025-11-22 09:37:01', '$2y$10$G4YuGJYvGYOcSL86uO5sdOR4j9aHut8x0IKkwaLBNqNpBqxQPZ3Aq', 0, 0, NULL, NULL, 'pNtWKvsw8d', '2025-11-22 09:37:01', '2025-11-22 09:37:01'),
(8, 'coach7', 'users/user-2.png', 'coach7@test.com', 0, '2025-11-22 09:37:01', '$2y$10$2xCnMkW6gnOS/YjfHD8heOjo3Kzqm32oXOhTu.Oqcj5lc.9iTu5/.', 0, 0, NULL, NULL, 'g5MFQFACER', '2025-11-22 09:37:01', '2025-11-22 09:37:01'),
(9, 'jafyxuny', 'avatar/vDpkT3s7xu5U68HYmavgHtxtqAvK0VBE6uXgiRhe.png', 'rizirolyl@mailinator.com', 0, NULL, '$2y$10$hgKZJHBSQSzzCWTw/myQ6.QmK6.BX8dudCvJU1dqvkOPdgSHdX53O', 83, 85, 'Ea veniam eveniet', 'Ex magna quod ut non', NULL, '2025-11-22 09:51:37', '2025-11-22 09:51:37');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
