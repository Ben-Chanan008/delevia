-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 03, 2024 at 04:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delevia`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seeker_id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `application_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `resume_path` varchar(255) NOT NULL,
  `application_info` varchar(255) NOT NULL,
  `past_job` varchar(255) NOT NULL,
  `past_experience` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_logo` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `user_id`, `company_name`, `company_logo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Khinny Exec', '', '2024-05-23 09:10:43', '2024-05-23 09:10:43', NULL),
(2, 2, 'Bensla Inc.', 'logos/aIbtu9cqAK9Vj9QkAHSQdQrOKgEVMtnvgNzxjakD.jpg', '2024-05-27 08:43:52', '2024-05-27 08:43:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency_name` text NOT NULL,
  `unicode` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `currency_name`, `unicode`, `created_at`, `updated_at`) VALUES
(1, 'Pounds', 'pound', '2024-05-23 09:10:43', '2024-05-23 09:10:43');

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
-- Table structure for table `givers_profile`
--

CREATE TABLE `givers_profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `giver_id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `degree_req` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `currency` bigint(20) UNSIGNED NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `title`, `tags`, `company_id`, `description`, `degree_req`, `experience`, `salary`, `rate`, `currency`, `job_type`, `location`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Aut natus.', 'random,random', 1, 'Asperiores aspernatur natus dolore nisi at. Corporis optio dignissimos aut porro. Ipsum vero aspernatur omnis aliquid.', 'Harvard Degree', 'No experience', '14.23', '/hr', 1, 'on site', 'South Enos', '2024-05-23 09:10:43', '2024-05-24 10:06:37', '2024-05-24 10:06:37'),
(2, 2, 'Non nisi.', 'php,api', 1, 'Quasi ut omnis eaque ea ducimus cum. Esse vel numquam saepe debitis iusto dicta. Cupiditate placeat aliquid et.', 'Harvard Degree', 'No experience', '14.97', '/hr', 1, 'on site', 'South Buck', '2024-05-23 09:10:43', '2024-05-23 09:10:43', NULL),
(3, 2, 'Non nemo.', 'random,random', 1, 'Provident aut error amet occaecati voluptatibus. Quis exercitationem magni quaerat atque laboriosam.', 'Harvard Degree', 'No experience', '4.6', '/hr', 1, 'on site', 'North Ana', '2024-05-23 09:10:43', '2024-05-23 09:10:43', NULL),
(4, 2, 'Officia.', 'random,random', 1, 'Odio optio maiores facilis voluptates omnis. Doloremque possimus modi in aperiam quia consequuntur.', 'Harvard Degree', 'No experience', '11.21', '/hr', 1, 'on site', 'Melvinatown', '2024-05-23 09:10:43', '2024-05-23 09:10:43', NULL),
(5, 2, 'Ea fugiat.', 'random,random', 1, 'Est laborum autem sed consequatur. At earum nihil non eum eos. Officia qui est molestias cum qui rerum totam.', 'Harvard Degree', 'No experience', '2.57', '/hr', 1, 'on site', 'Collinsborough', '2024-05-23 09:10:43', '2024-05-23 09:10:43', NULL),
(6, 2, 'Optio.', 'random,random', 1, 'Sunt eum mollitia labore repellat perspiciatis quod molestiae. Quia rerum et eos quo autem.', 'Harvard Degree', 'No experience', '13.49', '/hr', 1, 'on site', 'East Lonnie', '2024-05-23 09:10:43', '2024-05-23 09:10:43', NULL),
(7, 2, 'Aliquam.', 'random,random', 1, 'Qui sed eveniet eum. Vero ut quos reiciendis repellendus officiis vitae adipisci. Fugiat et facere nesciunt iusto.', 'Harvard Degree', 'No experience', '5.27', '/hr', 1, 'on site', 'Oscarside', '2024-05-23 09:10:43', '2024-05-23 09:10:43', NULL),
(8, 2, 'Quis.', 'random,random', 1, 'Quaerat sit natus sit velit repellat unde. Sint mollitia veniam voluptatum deserunt. Autem ex doloribus et blanditiis.', 'Harvard Degree', 'No experience', '1.66', '/hr', 1, 'on site', 'North Chadrick', '2024-05-23 09:10:43', '2024-05-23 09:10:43', NULL),
(9, 2, 'Totam.', 'random,random', 1, 'Est eos deleniti laborum natus iusto consectetur esse. Ut consequuntur ea eveniet quia voluptatem est.', 'Harvard Degree', 'No experience', '14.18', '/hr', 1, 'on site', 'Lake Ross', '2024-05-23 09:10:43', '2024-05-24 10:06:37', '2024-05-24 10:06:37'),
(10, 2, 'Adipisci eliptic Monstor.', 'random,random', 1, 'Quia incidunt sed sed est. Qui illum ut delectus eos molestiae.', 'Harvard Degree', 'No experience', '11.89', '/hr', 1, 'on site', 'East Jarvis', '2024-05-23 09:10:43', '2024-05-24 10:05:50', NULL),
(11, 2, 'Culpa sit.', 'random,random', 1, 'Recusandae vel rem ea quod. Tempora molestias nisi enim consectetur. Ut tempora voluptas beatae accusantium pariatur.', 'Harvard Degree', 'No experience', '7.26', '/hr', 1, 'on site', 'Ginofurt', '2024-05-23 09:10:43', '2024-05-23 09:38:05', '2024-05-23 09:38:05'),
(12, 2, 'Quidem.', 'random,random', 1, 'Libero vel consequatur molestiae ut aliquid. Aut et minus quasi nisi commodi sunt saepe quibusdam.', 'Harvard Degree', 'No experience', '6.79', '/hr', 1, 'on site', 'Lake Rachaelfort', '2024-05-23 09:10:43', '2024-05-23 09:39:09', '2024-05-23 09:39:09'),
(13, 2, 'Quis.', 'random,random', 1, 'Aut voluptates vel cum et. Corrupti est eaque occaecati dolor nisi sint. Consequuntur voluptatem molestiae qui.', 'Harvard Degree', 'No experience', '2.09', '/hr', 1, 'on site', 'Friesenview', '2024-05-23 09:10:43', '2024-05-25 06:35:36', '2024-05-25 06:35:36'),
(14, 2, 'Sint at.', 'random,random', 1, 'Quis aut fugiat at. Iste assumenda saepe ratione. Rerum magni ut ab quasi quasi sed distinctio.', 'Harvard Degree', 'No experience', '6.1', '/hr', 1, 'on site', 'Elijahbury', '2024-05-23 09:10:43', '2024-05-25 06:35:16', '2024-05-25 06:35:16'),
(15, 2, 'Quia non.', 'random,random', 1, 'Magnam amet eaque deleniti repudiandae nisi. Provident fugit ut harum. Voluptatem expedita omnis soluta aut nihil enim.', 'Harvard Degree', 'No experience', '12.59', '/hr', 1, 'on site', 'Port Adeliaport', '2024-05-23 09:10:43', '2024-05-23 09:10:43', NULL),
(16, 2, 'Facere.', 'random,random', 1, 'Minima quam harum autem. Pariatur ex dolor hic et corrupti et maxime. Doloremque reprehenderit recusandae porro eaque.', 'Harvard Degree', 'No experience', '14.27', '/hr', 1, 'on site', 'New Antoniettastad', '2024-05-23 09:10:43', '2024-05-23 09:10:43', NULL),
(17, 2, 'Option.', 'random,random', 1, 'Voluptatem corrupti autem deserunt sint. Officiis pariatur sed dolorem quia.', 'Harvard Degree', 'No experience', '6.79', '/hr', 1, 'on site', 'West Jettie', '2024-05-23 09:10:43', '2024-05-23 18:33:00', NULL),
(18, 2, 'Eaque.', 'rage,rege', 1, 'Beatae temporibus tenetur sequi et eum iure. Dicta id occaecati aut culpa perspiciatis expedita ut quia.', 'Harvard Degree', 'No experience', '12.44', '/hr', 1, 'on site', 'New Nathaniel', '2024-05-23 09:10:43', '2024-05-26 10:13:57', NULL),
(19, 2, 'Chelsea manager', 'football,soccer', 1, 'Ex vero dolorem aspernatur. Eligendi delectus asperiores ea.', 'Harvard Degree', 'No experience', '1200', '/hr', 1, 'on site', 'London', '2024-05-23 09:10:43', '2024-05-23 18:44:57', '2024-05-23 18:44:57'),
(20, 2, 'Rerum.', 'random,random', 1, 'Fuga expedita maxime et pariatur. Cupiditate est in ipsa voluptas. Nihil ullam corrupti a nam corporis sit.', 'Harvard Degree', 'No experience', '7.08', '/hr', 1, 'on site', 'South Kiannashire', '2024-05-23 09:10:43', '2024-05-24 10:12:24', '2024-05-24 10:12:24'),
(21, 2, 'Chelsea manager', 'football,soccer', 1, 'A good, experienced football manager', 'UEFA degree', '4 years', '40000', '/wk', 1, 'on site', 'London, UK.', '2024-05-26 06:51:44', '2024-05-26 06:51:44', NULL),
(22, 2, 'Brighton manager', 'football,soccer', 1, 'A good, experienced football manager', 'UEFA degree', '4 years', '40000', '/wk', 1, 'on site', 'London, UK.', '2024-05-26 06:53:23', '2024-05-26 06:53:23', NULL),
(23, 2, 'Example test', 'test,test', 2, 'Lorem', 'Havard Degree', 'No experience', '34', '/hr', 1, 'hybrid', 'Port Harcourt', '2024-05-28 07:36:53', '2024-05-28 07:36:53', NULL);

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
(5, '2024_03_11_225420_create_modules', 1),
(6, '2024_03_11_225426_create_sub_modules', 1),
(7, '2024_03_11_225449_create_routes', 1),
(8, '2024_03_11_231110_create_roles', 1),
(9, '2024_03_11_232343_create_role_access', 1),
(10, '2024_03_11_232347_create_user_access', 1),
(11, '2024_03_12_002246_create_role_users', 1),
(12, '2024_05_01_025506_create_company', 1),
(13, '2024_05_01_221621_create_currencies', 1),
(14, '2024_05_01_222918_create_jobs', 1),
(15, '2024_05_12_212449_create_applications', 1),
(16, '2024_05_18_192837_create_applicants', 1),
(17, '2024_06_03_021722_create_seekers_profile', 2),
(18, '2024_06_03_022442_create_givers_profile', 2);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `module`, `description`, `created_at`, `updated_at`) VALUES
(1, 'user', 'Module for user', '2024-05-18 19:35:32', '2024-05-18 19:35:32'),
(2, 'job-giver', 'Module for job-givers', '2024-05-18 19:35:32', '2024-05-18 19:35:32'),
(3, 'job-seeker', 'Module for job-seekers', '2024-05-18 19:35:32', '2024-05-18 19:35:32');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'Role for an absolute user', '2024-05-18 19:59:45', '2024-05-18 19:59:45'),
(2, 'Job Giver', 'Role for a job hirer', '2024-05-18 19:59:45', '2024-05-18 19:59:45'),
(3, 'Job Seeker', 'Role for a job seeker', '2024-05-18 19:59:45', '2024-05-18 19:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `role_access`
--

CREATE TABLE `role_access` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `has_create` tinyint(1) NOT NULL,
  `has_edit` tinyint(1) NOT NULL,
  `has_delete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_access`
--

INSERT INTO `role_access` (`id`, `role_id`, `module_id`, `has_create`, `has_edit`, `has_delete`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, '2024-05-18 20:01:01', '2024-05-18 20:01:01'),
(2, 1, 2, 1, 1, 1, '2024-05-18 20:01:01', '2024-05-18 20:01:01'),
(3, 1, 3, 1, 1, 1, '2024-05-18 20:01:01', '2024-05-18 20:01:01'),
(4, 2, 2, 1, 1, 1, '2024-05-18 20:01:01', '2024-05-18 20:01:01'),
(5, 3, 3, 1, 1, 1, '2024-05-18 20:01:01', '2024-05-18 20:01:01'),
(7, 3, 1, 1, 1, 1, '2024-05-18 20:01:01', '2024-05-18 20:01:01'),
(8, 2, 1, 1, 1, 1, '2024-05-18 20:01:01', '2024-05-18 20:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roles_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `roles_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2024-05-19 02:54:59', '2024-05-19 02:54:59'),
(2, 2, 2, '2024-05-19 03:00:21', '2024-05-19 03:00:21'),
(3, 3, 7, '2024-05-24 09:17:57', '2024-05-24 09:17:57');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_module_id` bigint(20) UNSIGNED NOT NULL,
  `route` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `has_parameter` tinyint(1) NOT NULL,
  `parameter` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `sub_module_id`, `route`, `description`, `has_parameter`, `parameter`, `created_at`, `updated_at`) VALUES
(1, 4, 'user.login', 'route for login', 0, NULL, '2024-05-18 19:44:43', '2024-05-18 19:44:43'),
(2, 3, 'user.store', 'route for store', 0, NULL, '2024-05-18 19:56:24', '2024-05-18 19:56:24'),
(3, 6, 'jobs.store', 'route for givers', 1, 'user', '2024-05-18 19:50:10', '2024-05-18 19:50:10'),
(4, 6, 'jobs.create', 'route for givers', 1, 'user', '2024-05-18 19:50:10', '2024-05-18 19:50:10'),
(5, 9, 'jobs.view-applicants', 'route for givers', 1, 'job', '2024-05-18 19:50:10', '2024-05-18 19:50:10'),
(6, 7, 'jobs.show_edit', 'route for givers', 1, 'user|job', '2024-05-18 19:50:10', '2024-05-18 19:50:10'),
(7, 7, 'jobs.edit', 'route for givers', 1, 'user|job', '2024-05-18 19:50:10', '2024-05-18 19:50:10'),
(8, 9, 'jobs.applicant', 'route for givers', 1, 'job|applicant', '2024-05-18 19:50:10', '2024-05-18 19:50:10'),
(9, 10, 'jobs.delete', 'route for givers', 1, 'user|job', '2024-05-18 19:50:10', '2024-05-18 19:50:10'),
(10, 9, 'jobs.giver', 'route for givers', 0, NULL, '2024-05-18 19:50:10', '2024-05-18 19:50:10'),
(13, 11, 'jobs.view-companies', 'route for givers', 1, 'user', '2024-05-18 19:50:10', '2024-05-18 19:50:10'),
(14, 12, 'jobs.create-company', 'route for givers', 1, 'user', '2024-05-18 19:50:10', '2024-05-18 19:50:10'),
(15, 12, 'jobs.show-create-company', 'route for givers', 1, 'user', '2024-05-18 19:50:10', '2024-05-18 19:50:10'),
(16, 14, 'user.profile', 'Route for viewing profile', 1, 'user', '2024-06-01 16:17:54', '2024-06-01 16:17:54'),
(17, 13, 'user.profile', 'Route for givers viewing profile', 1, 'user', '2024-06-01 16:17:54', '2024-06-01 16:17:54'),
(18, 5, 'jobs.seeker', 'Route for viewing jobs', 0, NULL, '2024-06-02 02:10:45', '2024-06-02 02:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `seekers_profile`
--

CREATE TABLE `seekers_profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seeker_id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_modules`
--

CREATE TABLE `sub_modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `sub_module` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_modules`
--

INSERT INTO `sub_modules` (`id`, `module_id`, `sub_module`, `description`, `created_at`, `updated_at`) VALUES
(3, 1, 'register', 'Sub_module for registration', '2024-05-18 19:37:14', '2024-05-18 19:37:14'),
(4, 1, 'login', 'Sub_module for login', '2024-05-18 19:37:14', '2024-05-18 19:37:14'),
(5, 3, 'view-jobs', 'Sub_module for seekers', '2024-05-18 19:37:14', '2024-05-18 19:37:14'),
(6, 2, 'create-job', 'Sub_module for givers', '2024-05-18 19:37:14', '2024-05-18 19:37:14'),
(7, 2, 'edit-job', 'Sub_module for givers', '2024-05-18 19:37:14', '2024-05-18 19:37:14'),
(9, 2, 'jobs-owned', 'Sub_module for givers', '2024-05-18 19:37:14', '2024-05-18 19:37:14'),
(10, 2, 'jobs-delete', 'Sub_module for givers', '2024-05-18 19:37:14', '2024-05-18 19:37:14'),
(11, 2, 'view-companies', 'Sub_module for givers', '2024-05-18 19:37:14', '2024-05-18 19:37:14'),
(12, 2, 'create-company', 'Sub_module for givers', '2024-05-18 19:37:14', '2024-05-18 19:37:14'),
(13, 2, 'giver-profile', 'Profile submodule', '2024-06-01 16:15:49', '2024-06-01 16:15:49'),
(14, 3, 'seeker-profile', 'Profile for submodule', '2024-06-01 16:16:44', '2024-06-01 16:16:44');

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
  `user_key` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_key`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ben Ken-Idehen', 'benchananidehen@gmail.com', NULL, '$2y$12$vU2mY.XVLRECVtHP6PXEq.g0pqICIm/s2CNSZd.wTHRixo5mntGpu', 'FdqzeRgZ9O2YoADrV1uTIEJScvB7iatUGP80WQk6wmHXMbysjNCLxKlhf45p3', NULL, '2024-05-19 02:54:59', '2024-05-19 02:54:59', NULL),
(2, 'Zhin Zhellu', 'zhin@gmail.com', NULL, '$2y$12$VTWDnr.aoR/x8YCN8GQL9Ok2xKABjEiCG47aWDl3puBT.oQtjk.kC', 'Bjx3qAGfpdTXLJDyiaIP4OmoMuzWsY2ElUH1SFKghrweRbcZ5Qt9vk06NC7V8', NULL, '2024-05-19 03:00:21', '2024-05-23 07:54:58', NULL),
(3, 'Jaqueline Labadie', 'mable58@example.net', '2024-05-23 08:49:53', '$2y$12$czf.oZDoZCmezI7tklvkOe3xiRJ.wcCS97TtxCk0kQvSuEJPOgKh2', NULL, 'i0KlqYVrIK', '2024-05-23 08:49:53', '2024-05-23 08:49:53', NULL),
(4, 'Germaine Swaniawski', 'lilyan.kub@example.net', '2024-05-23 09:06:31', '$2y$12$sxrlss.LXh/5wwlqpq1P0.nGD4ZsvStuqMx1jDJQ4So2ltJb4LiZ.', NULL, 'aXcomjr2Sd', '2024-05-23 09:06:32', '2024-05-23 09:06:32', NULL),
(5, 'Dahlia Lowe', 'buck43@example.com', '2024-05-23 09:06:56', '$2y$12$sDh.Fjo3c93g5ePP3cNChOwnhX25tM3qnftMl53diKSbbO/alKDfW', NULL, 'XXQ5gQqdAuZKRBFWkQl0b3QWU4X8PirjXLSzqtZkI1GYNPY3NzChHrK6j1i0', '2024-05-23 09:06:57', '2024-05-23 09:06:57', NULL),
(6, 'Rhoda Ruecker', 'serena24@example.com', '2024-05-23 09:10:42', '$2y$12$PmJg1oT1wHmxLw..FNAvYeEPPq3oU6r0MLfUELHxX0y9IskLHUoGC', NULL, 'ujHJrZFgei', '2024-05-23 09:10:43', '2024-05-23 09:10:43', NULL),
(7, 'Random User', 'random@gmail.com', NULL, '$2y$12$CLvF1hyX20qIwjL6/Pzc6.xQTi9MwnDbtrOjTujUR.xX3fBqwE.C6', NULL, NULL, '2024-05-24 09:17:57', '2024-05-24 09:17:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `sub_module_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicants_seeker_id_foreign` (`seeker_id`),
  ADD KEY `applicants_job_id_foreign` (`job_id`),
  ADD KEY `applicants_application_id_foreign` (`application_id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applications_user_id_foreign` (`user_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_user_id_foreign` (`user_id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `givers_profile`
--
ALTER TABLE `givers_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `givers_profile_giver_id_foreign` (`giver_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_user_id_foreign` (`user_id`),
  ADD KEY `jobs_company_id_foreign` (`company_id`),
  ADD KEY `jobs_currency_foreign` (`currency`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_access`
--
ALTER TABLE `role_access`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_access_role_id_foreign` (`role_id`),
  ADD KEY `role_access_module_id_foreign` (`module_id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_foreign` (`roles_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `routes_sub_module_id_foreign` (`sub_module_id`);

--
-- Indexes for table `seekers_profile`
--
ALTER TABLE `seekers_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seekers_profile_seeker_id_foreign` (`seeker_id`);

--
-- Indexes for table `sub_modules`
--
ALTER TABLE `sub_modules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_modules_module_id_foreign` (`module_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_access_user_id_foreign` (`user_id`),
  ADD KEY `user_access_sub_module_id_foreign` (`sub_module_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `givers_profile`
--
ALTER TABLE `givers_profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_access`
--
ALTER TABLE `role_access`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `seekers_profile`
--
ALTER TABLE `seekers_profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_modules`
--
ALTER TABLE `sub_modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicants`
--
ALTER TABLE `applicants`
  ADD CONSTRAINT `applicants_application_id_foreign` FOREIGN KEY (`application_id`) REFERENCES `applications` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `applicants_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `applicants_seeker_id_foreign` FOREIGN KEY (`seeker_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `givers_profile`
--
ALTER TABLE `givers_profile`
  ADD CONSTRAINT `givers_profile_giver_id_foreign` FOREIGN KEY (`giver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_currency_foreign` FOREIGN KEY (`currency`) REFERENCES `currencies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_access`
--
ALTER TABLE `role_access`
  ADD CONSTRAINT `role_access_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_access_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `routes`
--
ALTER TABLE `routes`
  ADD CONSTRAINT `routes_sub_module_id_foreign` FOREIGN KEY (`sub_module_id`) REFERENCES `sub_modules` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seekers_profile`
--
ALTER TABLE `seekers_profile`
  ADD CONSTRAINT `seekers_profile_seeker_id_foreign` FOREIGN KEY (`seeker_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_modules`
--
ALTER TABLE `sub_modules`
  ADD CONSTRAINT `sub_modules_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_access`
--
ALTER TABLE `user_access`
  ADD CONSTRAINT `user_access_sub_module_id_foreign` FOREIGN KEY (`sub_module_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_access_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
