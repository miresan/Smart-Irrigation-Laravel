-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2022 at 02:56 AM
-- Server version: 10.3.34-MariaDB-log-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpqggi_wallpix`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ads_script1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ads_script2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ads_script3` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ads_script4` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `ads_script1`, `ads_script2`, `ads_script3`, `ads_script4`, `created_at`, `updated_at`) VALUES
(1, '<script type=\"text/javascript\"> </script>', '<script type=\"text/javascript\"> </script>', '<script type=\"text/javascript\"> </script>', '<script type=\"text/javascript\"> </script>', '2022-05-07 13:59:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `thumbnail`, `cat_slug`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Nature', 'uploads/1731363687886424.jpg', 'nature', 'Find the best nature images in one place. Our extensive collection of nature pictures allows for diverse use. Find pics of trees, lakes, seascapes & more.', '2022-03-27 01:20:51', '2022-05-07 13:47:33'),
(3, 'Technology', 'uploads/1731363677858012.jpg', 'technology', '1 Tinker (REPL) — Laravel Tinker is a powerful REPL for the Laravel framework, powered by the PsySH package. Installation. All Laravel applications include .', '2022-04-20 03:14:37', '2022-05-07 13:47:37'),
(5, 'Flowers', 'uploads/1731363595983130.jpg', 'flowers', 'These are the search results for flowers. Here you can find different types of flower photos, among them red flowers, white flowers, rose flowers, spring flowers, flower wallpapers and other flower images. These beautiful pictures of pretty flowers are free stock photos and can be downloaded and commercially used because they are licensed under the free Pexels license.', '2022-04-25 10:50:34', '2022-05-07 13:47:44'),
(6, 'Forest', 'uploads/1731363519629092.jpg', 'forest', 'High quality pictures of forest and forest images, all free for download and use. Our collection of forest pictures and images of forest consists of scenic views of the woods and trees. All forest stock photos are royalty free and can be used commercially.', '2022-04-25 10:53:25', '2022-05-07 13:47:49'),
(7, 'Travel', 'uploads/1731363505480008.jpg', 'travel', 'We have a great selection of travel images and travel pictures to choose from and download. Our travel photos consists of images taken by our photographers during travel photography shoots as well as images of means of travel like trains, planes, cars or hiking.', '2022-04-25 11:00:08', '2022-05-07 13:47:55'),
(8, 'Design', 'uploads/1731363494079952.jpg', 'design', 'Browse through our royalty free design photos and home interior pictures. We have an excellent collection of high-quality design images you can download and use commercially for all your business purposes like your interior design blog, presentations or other websites.', '2022-04-25 11:06:07', '2022-05-07 13:48:14'),
(9, 'Office', 'uploads/1731363484545475.png', 'office', 'Find the best office images and office pictures. Our collection of office photos are a mix of workstations and office buildings. All office pictures are free office stock photos.', '2022-04-25 11:08:16', '2022-05-07 13:48:08'),
(10, 'Buildings', 'uploads/1731363472871716.jpg', 'buildings', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-04-28 08:41:16', '2022-05-07 13:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(42, 'Remington Wilderman', 'your.email+fakedata41223@gmail.com', 'Et aut dolor vitae quasi ab blanditiis odio similique perferendis.', 'Itaque consequatur soluta autem qui minus harum unde ipsum.', '2022-05-03 20:44:46', NULL),
(43, 'Kassandra Kub', 'your.email+fakedata52316@gmail.com', 'Et cumque quia ea cum laborum facilis fuga quae et.', 'Est quo est corporis earum voluptate cupiditate quam.', '2022-05-03 20:45:52', NULL),
(44, 'Mckayla Mante', 'your.email+fakedata60960@gmail.com', 'Veniam veritatis consectetur illum excepturi sapiente non.', 'Voluptas voluptatem in eveniet quia in vel.', '2022-05-03 20:49:41', NULL);

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `category_id`, `slug`, `title`, `description`, `thumbnail_1`, `thumbnail_2`, `body`, `status`, `created_at`, `updated_at`, `published_at`) VALUES
(34, 7, 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry', 'Download the perfect Travel pictures.  [1080P, 2K, 4K wallpapers]', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '[\"1731358704155734pexels-alex-azabache-3214968.jpg\",\"1731358704237218pexels-amine-m\'siouri-2245436.jpg\",\"1731358704298057pexels-matt-hardy-5059013.jpg\",\"1731358704752962pexels-roman-odintsov-4553618.jpg\",\"1731358704816992pexels-spencer-davis-4353813.jpg\",\"1731358704874914pexels-taryn-elliott-3889660.jpg\",\"1731358704935602pexels-taryn-elliott-3889855.jpg\",\"1731358704995533pexels-wendy-wei-2994117.jpg\"]', '[\"1731358704155734pexels-alex-azabache-3214968.jpg\",\"1731358704237218pexels-amine-m\'siouri-2245436.jpg\",\"1731358704298057pexels-matt-hardy-5059013.jpg\",\"1731358704752962pexels-roman-odintsov-4553618.jpg\",\"1731358704816992pexels-spencer-davis-4353813.jpg\",\"1731358704874914pexels-taryn-elliott-3889660.jpg\",\"1731358704935602pexels-taryn-elliott-3889855.jpg\",\"1731358704995533pexels-wendy-wei-2994117.jpg\"]', '[\"1731358704155734pexels-alex-azabache-3214968.jpg\",\"1731358704237218pexels-amine-m\'siouri-2245436.jpg\",\"1731358704298057pexels-matt-hardy-5059013.jpg\",\"1731358704752962pexels-roman-odintsov-4553618.jpg\",\"1731358704816992pexels-spencer-davis-4353813.jpg\",\"1731358704874914pexels-taryn-elliott-3889660.jpg\",\"1731358704935602pexels-taryn-elliott-3889855.jpg\",\"1731358704995533pexels-wendy-wei-2994117.jpg\"]', 1, '2022-04-28 07:55:29', NULL, '2022-04-28 07:55:29'),
(35, 9, '5rSEAf-lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry', 'Download the perfect Office pictures.  [1080P, 2K, 4K wallpapers]', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '[\"1731358797783334pexels-cadeau-maestro-1170412.jpg\",\"1731358798289533pexels-katerina-holmes-5905445.jpg\",\"1731358798709635pexels-max-vakhtbovych-6180740.jpg\",\"1731358799053155pexels-pixabay-37347.jpg\",\"1731358799435486pexels-pixabay-260689.jpg\",\"1731358799770968pexels-pixabay-265129.jpg\"]', '[\"1731358797783334pexels-cadeau-maestro-1170412.jpg\",\"1731358798289533pexels-katerina-holmes-5905445.jpg\",\"1731358798709635pexels-max-vakhtbovych-6180740.jpg\",\"1731358799053155pexels-pixabay-37347.jpg\",\"1731358799435486pexels-pixabay-260689.jpg\",\"1731358799770968pexels-pixabay-265129.jpg\"]', '[\"1731358797783334pexels-cadeau-maestro-1170412.jpg\",\"1731358798289533pexels-katerina-holmes-5905445.jpg\",\"1731358798709635pexels-max-vakhtbovych-6180740.jpg\",\"1731358799053155pexels-pixabay-37347.jpg\",\"1731358799435486pexels-pixabay-260689.jpg\",\"1731358799770968pexels-pixabay-265129.jpg\"]', 1, '2022-04-28 07:57:00', NULL, '2022-04-28 07:57:00'),
(36, 5, '87Ln1v-lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry', 'Download the perfect flowers pictures. [1080P, 2K, 4K wallpapers]', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '[\"1731358934534982pexels-dominika-roseclay-1166869.jpg\",\"1731358934869180pexels-jonas-kakaroto-736230.jpg\",\"1731358935155353pexels-lilartsy-1624076.jpg\",\"1731358935505366pexels-lilartsy-1917358.jpg\",\"1731358935867044pexels-lisa-fotios-3147131.jpg\",\"1731358935907158pexels-petr-ganaj-4055801.jpg\",\"1731358936330433pexels-secret-garden-931176.jpg\",\"1731358936383800pexels-siegfried-poepperl-7506418.jpg\"]', '[\"1731358934534982pexels-dominika-roseclay-1166869.jpg\",\"1731358934869180pexels-jonas-kakaroto-736230.jpg\",\"1731358935155353pexels-lilartsy-1624076.jpg\",\"1731358935505366pexels-lilartsy-1917358.jpg\",\"1731358935867044pexels-lisa-fotios-3147131.jpg\",\"1731358935907158pexels-petr-ganaj-4055801.jpg\",\"1731358936330433pexels-secret-garden-931176.jpg\",\"1731358936383800pexels-siegfried-poepperl-7506418.jpg\"]', '[\"1731358934534982pexels-dominika-roseclay-1166869.jpg\",\"1731358934869180pexels-jonas-kakaroto-736230.jpg\",\"1731358935155353pexels-lilartsy-1624076.jpg\",\"1731358935505366pexels-lilartsy-1917358.jpg\",\"1731358935867044pexels-lisa-fotios-3147131.jpg\",\"1731358935907158pexels-petr-ganaj-4055801.jpg\",\"1731358936330433pexels-secret-garden-931176.jpg\",\"1731358936383800pexels-siegfried-poepperl-7506418.jpg\"]', 1, '2022-04-28 07:59:10', NULL, '2022-04-28 07:59:10'),
(37, 8, 'YDOvy2-lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry', 'Download the perfect design pictures. [4K wallpapers]', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '[\"1731359019366617pexels-cameron-casey-1722183.jpg\",\"1731359019785619pexels-juan-agustin-2340254.jpg\",\"1731359020100275pexels-oleg-magni-1005644.jpg\",\"1731359020505489pexels-picjumbocom-196644.jpg\",\"1731359020839781pexels-tranmautritam-326502.jpg\",\"1731359021135314pexels-victor-freitas-973506.jpg\"]', '[\"1731359019366617pexels-cameron-casey-1722183.jpg\",\"1731359019785619pexels-juan-agustin-2340254.jpg\",\"1731359020100275pexels-oleg-magni-1005644.jpg\",\"1731359020505489pexels-picjumbocom-196644.jpg\",\"1731359020839781pexels-tranmautritam-326502.jpg\",\"1731359021135314pexels-victor-freitas-973506.jpg\"]', '[\"1731359019366617pexels-cameron-casey-1722183.jpg\",\"1731359019785619pexels-juan-agustin-2340254.jpg\",\"1731359020100275pexels-oleg-magni-1005644.jpg\",\"1731359020505489pexels-picjumbocom-196644.jpg\",\"1731359020839781pexels-tranmautritam-326502.jpg\",\"1731359021135314pexels-victor-freitas-973506.jpg\"]', 1, '2022-04-28 08:00:31', NULL, '2022-04-28 08:00:31'),
(38, 8, 'TLX4va-lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry', 'Download the perfect design pictures. [2k wallpapers]', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '[\"1731359310541178pexels-bryan-underwood-2554584.jpg\",\"1731359311023751pexels-kaique-rocha-65438.jpg\",\"1731359311393013pexels-matthew-simmonds-1570404.jpg\",\"1731359311800070pexels-photoscom-93400.jpg\",\"1731359312124729pexels-ricardo-esquivel-1662159.jpg\",\"1731359312456460pexels-shukhrat-umarov-1534411.jpg\"]', '[\"1731359310541178pexels-bryan-underwood-2554584.jpg\",\"1731359311023751pexels-kaique-rocha-65438.jpg\",\"1731359311393013pexels-matthew-simmonds-1570404.jpg\",\"1731359311800070pexels-photoscom-93400.jpg\",\"1731359312124729pexels-ricardo-esquivel-1662159.jpg\",\"1731359312456460pexels-shukhrat-umarov-1534411.jpg\"]', '[\"1731359310541178pexels-bryan-underwood-2554584.jpg\",\"1731359311023751pexels-kaique-rocha-65438.jpg\",\"1731359311393013pexels-matthew-simmonds-1570404.jpg\",\"1731359311800070pexels-photoscom-93400.jpg\",\"1731359312124729pexels-ricardo-esquivel-1662159.jpg\",\"1731359312456460pexels-shukhrat-umarov-1534411.jpg\"]', 1, '2022-04-28 08:05:09', NULL, '2022-04-28 08:05:09'),
(39, 6, 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-lorem', 'Download the perfect forest pictures. [1080p wallpapers]', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '[\"1731359356464173pexels-adnan-uddin-886051.jpg\",\"1731359356864595pexels-darius-krause-2609106.jpg\",\"1731359357260723pexels-francesco-ungaro-1671325.jpg\",\"1731359357715305pexels-jo-kassis-4633377.jpg\",\"1731359358204729pexels-kaique-rocha-775201.jpg\",\"1731359358578149pexels-pixabay-70365.jpg\"]', '[\"1731359356464173pexels-adnan-uddin-886051.jpg\",\"1731359356864595pexels-darius-krause-2609106.jpg\",\"1731359357260723pexels-francesco-ungaro-1671325.jpg\",\"1731359357715305pexels-jo-kassis-4633377.jpg\",\"1731359358204729pexels-kaique-rocha-775201.jpg\",\"1731359358578149pexels-pixabay-70365.jpg\"]', '[\"1731359356464173pexels-adnan-uddin-886051.jpg\",\"1731359356864595pexels-darius-krause-2609106.jpg\",\"1731359357260723pexels-francesco-ungaro-1671325.jpg\",\"1731359357715305pexels-jo-kassis-4633377.jpg\",\"1731359358204729pexels-kaique-rocha-775201.jpg\",\"1731359358578149pexels-pixabay-70365.jpg\"]', 1, '2022-04-28 08:05:53', NULL, '2022-04-28 08:05:53'),
(40, 2, '83IcgI-lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-lorem', 'Download the perfect nature pictures. ', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '[\"1731359496826205apexels-michael-block-3225517.jpg\",\"1731359497189803bpexels-kasuma-1785493.jpg\",\"1731359497595370cpexels-cliford-mervil-2469122.jpg\",\"1731359497983916dpexels-luis-dalvan-1770809.jpg\",\"1731359498453114pexels-alex-azabache-3214944.jpg\",\"1731359498789545pexels-anne-mccarthy-3900437.jpg\"]', '[\"1731359496826205apexels-michael-block-3225517.jpg\",\"1731359497189803bpexels-kasuma-1785493.jpg\",\"1731359497595370cpexels-cliford-mervil-2469122.jpg\",\"1731359497983916dpexels-luis-dalvan-1770809.jpg\",\"1731359498453114pexels-alex-azabache-3214944.jpg\",\"1731359498789545pexels-anne-mccarthy-3900437.jpg\"]', '[\"1731359496826205apexels-michael-block-3225517.jpg\",\"1731359497189803bpexels-kasuma-1785493.jpg\",\"1731359497595370cpexels-cliford-mervil-2469122.jpg\",\"1731359497983916dpexels-luis-dalvan-1770809.jpg\",\"1731359498453114pexels-alex-azabache-3214944.jpg\",\"1731359498789545pexels-anne-mccarthy-3900437.jpg\"]', 1, '2022-04-28 08:08:06', NULL, '2022-04-28 08:08:06'),
(42, 3, 'kxxjUC-lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-lorem', 'Download the high quality technology pictures. ', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '[\"1731359722050201apexels-sharad-kachhi-3937174.jpg\",\"1731359722496740bbathena-2582937.jpg\",\"1731359723040291pexels-harsch-shivam-2007647.jpg\",\"1731359723514447pexels-oladimeji-ajegbile-2325717.jpg\",\"1731359723955371pexels-photo-3861964.jpeg\",\"1731359724048701pexels-screen-post-4526398.jpg\",\"1731359724400463pexels-thisisengineering-3861959.jpg\",\"1731359724866956wpexels-anna-shvets-3987026.jpg\"]', '[\"1731359722050201apexels-sharad-kachhi-3937174.jpg\",\"1731359722496740bbathena-2582937.jpg\",\"1731359723040291pexels-harsch-shivam-2007647.jpg\",\"1731359723514447pexels-oladimeji-ajegbile-2325717.jpg\",\"1731359723955371pexels-photo-3861964.jpeg\",\"1731359724048701pexels-screen-post-4526398.jpg\",\"1731359724400463pexels-thisisengineering-3861959.jpg\",\"1731359724866956wpexels-anna-shvets-3987026.jpg\"]', '[\"1731359722050201apexels-sharad-kachhi-3937174.jpg\",\"1731359722496740bbathena-2582937.jpg\",\"1731359723040291pexels-harsch-shivam-2007647.jpg\",\"1731359723514447pexels-oladimeji-ajegbile-2325717.jpg\",\"1731359723955371pexels-photo-3861964.jpeg\",\"1731359724048701pexels-screen-post-4526398.jpg\",\"1731359724400463pexels-thisisengineering-3861959.jpg\",\"1731359724866956wpexels-anna-shvets-3987026.jpg\"]', 1, '2022-04-28 08:11:42', NULL, '2022-04-28 08:11:42'),
(43, 10, 'FIZaG2-lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry', 'Download the Aerial View of City Buildings pictures. ', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '[\"1731361875133059pexels-sergio-souza-9735989.jpg\",\"1731361875177836pexels-sergio-souza-9736003.jpg\",\"1731361875219580pexels-sergio-souza-9736005.jpg\",\"1731361875260926pexels-sergio-souza-9736006.jpg\",\"1731361875296974pexels-sergio-souza-9736015.jpg\",\"1731361875342234pexels-sergio-souza-9736016.jpg\",\"1731361875430179pexels-sergio-souza-9736022.jpg\",\"1731361875468807pexels-sergio-souza-10580287.jpg\"]', '[\"1731361875133059pexels-sergio-souza-9735989.jpg\",\"1731361875177836pexels-sergio-souza-9736003.jpg\",\"1731361875219580pexels-sergio-souza-9736005.jpg\",\"1731361875260926pexels-sergio-souza-9736006.jpg\",\"1731361875296974pexels-sergio-souza-9736015.jpg\",\"1731361875342234pexels-sergio-souza-9736016.jpg\",\"1731361875430179pexels-sergio-souza-9736022.jpg\",\"1731361875468807pexels-sergio-souza-10580287.jpg\"]', '[\"1731361875133059pexels-sergio-souza-9735989.jpg\",\"1731361875177836pexels-sergio-souza-9736003.jpg\",\"1731361875219580pexels-sergio-souza-9736005.jpg\",\"1731361875260926pexels-sergio-souza-9736006.jpg\",\"1731361875296974pexels-sergio-souza-9736015.jpg\",\"1731361875342234pexels-sergio-souza-9736016.jpg\",\"1731361875430179pexels-sergio-souza-9736022.jpg\",\"1731361875468807pexels-sergio-souza-10580287.jpg\"]', 1, '2022-04-28 08:45:53', NULL, '2022-04-28 08:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `global_settings`
--

CREATE TABLE `global_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_script` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `global_settings`
--

INSERT INTO `global_settings` (`id`, `favicon`, `site_name`, `logo`, `site_description`, `head_script`, `created_at`, `updated_at`) VALUES
(1, 'uploads/images/1731635847263849.png', 'Wallpix', 'uploads/images/1731637740990733.png', 'About the website, little discription will goes here..', 'wallpixwallpix', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_page_sliders`
--

CREATE TABLE `home_page_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_page_sliders`
--

INSERT INTO `home_page_sliders` (`id`, `title_1`, `description_1`, `slider_1`, `link_1`, `title_2`, `description_2`, `slider_2`, `link_2`, `title_3`, `description_3`, `slider_3`, `link_3`, `created_at`, `updated_at`) VALUES
(2, 'Nature Wallpapers', 'Some representative placeholder content for the first slide.1', 'uploads/slider/1732165745739815.jpg', 'https://test.helpwithus.org/categories/nature', 'Technology Wallpapers', 'Some representative placeholder content for the first slide.2', 'uploads/slider/1732165053240193.jpg', 'https://test.helpwithus.org/categories/technology', 'Travel Wallpapers', 'Some representative placeholder content for the first slide.3', 'uploads/slider/1732165670905198.jpg', 'https://test.helpwithus.org/categories/travel', NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_08_07_151748_create_categories_table', 1),
(6, '2022_04_07_051048_create_settings_table', 2),
(7, '2022_04_07_051808_create_general_settings', 3),
(8, '2022_04_07_072528_create_settings_table', 4),
(9, '2022_04_07_073027_create_general_settings', 5),
(11, '2022_04_07_145142_create_socialmedia_table', 6),
(13, '2022_04_07_163212_create_settings_table', 8),
(15, '2022_04_09_061658_create_contacts_table', 10),
(17, '2022_04_11_153019_create_pages_table', 12),
(19, '2014_10_12_000000_create_users_table', 13),
(20, '2021_08_07_151310_create_galleries_table', 14),
(21, '2022_04_08_045106_create_global_settings_table', 15),
(22, '2022_04_07_144651_create_ads_table', 16),
(23, '2022_04_23_071409_create_home_page_sliders_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'About us', '<p style=\"text-align: center; \"><span style=\'color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Liberation Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-size: 16px; text-align: start;\'>A Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero magni deleniti quod quam consequuntur! Commodi minima excepturi repudiandae velit hic maxime doloremque. Quaerat provident commodi consectetur veniam similique ad earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam quasi aliquam eligendi, placeat qui corporis!!</span><br></p>\n', 1, '2022-04-14 07:40:19', '2022-05-01 19:21:28'),
(3, 'Privacy Policy', '<p style=\"text-align: center; \"><span style=\'color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Liberation Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-size: 16px; text-align: start;\'>P Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero magni deleniti quod quam consequuntur! Commodi minima excepturi repudiandae velit hic maxime doloremque. Quaerat provident commodi consectetur veniam similique ad earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam quasi aliquam eligendi, placeat qui corporis!</span><br></p>\n', 1, '2022-04-14 07:40:36', '2022-04-20 06:40:37'),
(4, 'Terms & Conditions', '<p style=\"text-align: center; \"><span style=\'color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Liberation Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-size: 16px; text-align: start;\'>T Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero magni deleniti quod quam consequuntur! Commodi minima excepturi repudiandae velit hic maxime doloremque. Quaerat provident commodi consectetur veniam similique ad earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam quasi aliquam eligendi, placeat qui corporis!</span><br></p>\n', 1, '2022-04-14 07:40:52', '2022-04-20 06:40:48'),
(5, 'Disclaimer/DMCA', '<p style=\"text-align: center; \"><span style=\'color: rgb(33, 37, 41); font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Liberation Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-size: 16px; text-align: start;\'>D Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero magni deleniti quod quam consequuntur! Commodi minima excepturi repudiandae velit hic maxime doloremque. Quaerat provident commodi consectetur veniam similique ad earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam quasi aliquam eligendi, placeat qui corporis!</span><br></p>\n', 1, '2022-04-14 07:41:21', '2022-04-20 06:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@itsolutionstuff.com', '$2y$10$SEiDNzCJafHHcwOnCFClDu7U.9DZJXNytrRzZvOsX1KK0tD4PEd0u', '2022-05-01 11:20:27');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `facebook`, `instagram`, `twitter`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/', 'https://www.Instagram.com/', 'https://www.Twitter.com/', 'https://www.Youtube.com/', '2022-05-07 13:59:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `profile_image`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'tamboxstudio@gmail.com', NULL, 'storage/images/1731636746694795.png', 1, '$2y$10$bv3PrEmpwlrKtT.qiC1uqONK7px5gFxNVjFf9qbnWTAzgMbC3fTEG', 'ogQCVhzeO5Mow02T7nMceJEzwmAdze8SVx3NqUasIT8dyZnLpn1HSPP9M4f6', '2022-04-17 12:24:29', '2022-05-08 12:36:48'),
(2, 'User', 'user@itsolutionstuff.com', NULL, 'user.png', 0, '$2y$10$Uy35LNKy1n0zbaJEh/mmrutUsuqsQg9Unc0tC9zCfKD2/LphEuyge', NULL, '2022-04-17 12:24:29', '2022-04-17 12:24:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`cat_slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `galleries_slug_unique` (`slug`);

--
-- Indexes for table `global_settings`
--
ALTER TABLE `global_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_sliders`
--
ALTER TABLE `home_page_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `global_settings`
--
ALTER TABLE `global_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_page_sliders`
--
ALTER TABLE `home_page_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
