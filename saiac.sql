-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 21, 2022 at 08:15 PM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-11+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saiac`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `mission` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `vision` longtext COLLATE utf8_unicode_ci,
  `core_values` longtext COLLATE utf8_unicode_ci,
  `strategicthemes` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `mission`, `vision`, `core_values`, `strategicthemes`) VALUES
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `replied_to_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type_of_message` longtext COLLATE utf8_unicode_ci,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ext_log_entries`
--

CREATE TABLE `ext_log_entries` (
  `id` int(11) NOT NULL,
  `action` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `logged_at` datetime NOT NULL,
  `object_id` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `object_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` int(11) NOT NULL,
  `data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:array)',
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `ext_log_entries`
--

INSERT INTO `ext_log_entries` (`id`, `action`, `logged_at`, `object_id`, `object_class`, `version`, `data`, `username`) VALUES
(876, 'create', '2022-09-20 18:59:31', '787', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:11:"LIST_OFFICE";}', NULL),
(877, 'create', '2022-09-20 18:59:31', '788', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"CREATE_OFFICE";}', NULL),
(878, 'create', '2022-09-20 18:59:31', '789', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:11:"VIEW_OFFICE";}', NULL),
(879, 'create', '2022-09-20 18:59:31', '790', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:11:"EDIT_OFFICE";}', NULL),
(880, 'create', '2022-09-20 18:59:31', '791', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"DELETE_OFFICE";}', NULL),
(881, 'create', '2022-09-20 18:59:31', '792', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:8:"LIST_LOG";}', NULL),
(882, 'create', '2022-09-20 18:59:31', '793', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:8:"VIEW_LOG";}', NULL),
(883, 'create', '2022-09-20 18:59:31', '794', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:11:"LIST_CLIENT";}', NULL),
(884, 'create', '2022-09-20 18:59:31', '795', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"CREATE_CLIENT";}', NULL),
(885, 'create', '2022-09-20 18:59:31', '796', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:11:"VIEW_CLIENT";}', NULL),
(886, 'create', '2022-09-20 18:59:31', '797', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:11:"EDIT_CLIENT";}', NULL),
(887, 'create', '2022-09-20 18:59:31', '798', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"DELETE_CLIENT";}', NULL),
(888, 'create', '2022-09-20 18:59:31', '799', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:19:"LIST_GAURANTEE_TYPE";}', NULL),
(889, 'create', '2022-09-20 18:59:31', '800', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:21:"CREATE_GAURANTEE_TYPE";}', NULL),
(890, 'create', '2022-09-20 18:59:31', '801', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:19:"VIEW_GAURANTEE_TYPE";}', NULL),
(891, 'create', '2022-09-20 18:59:31', '802', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:19:"EDIT_GAURANTEE_TYPE";}', NULL),
(892, 'create', '2022-09-20 18:59:31', '803', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:21:"DELETE_GAURANTEE_TYPE";}', NULL),
(893, 'create', '2022-09-20 18:59:31', '804', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:10:"LIST_GROUP";}', NULL),
(894, 'create', '2022-09-20 18:59:31', '805', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:12:"CREATE_GROUP";}', NULL),
(895, 'create', '2022-09-20 18:59:31', '806', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:10:"EDIT_GROUP";}', NULL),
(896, 'create', '2022-09-20 18:59:31', '807', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:12:"DELETE_GROUP";}', NULL),
(897, 'create', '2022-09-20 18:59:31', '808', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:10:"VIEW_GROUP";}', NULL),
(898, 'create', '2022-09-20 18:59:31', '809', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"LIST_PERMISSION";}', NULL),
(899, 'create', '2022-09-20 18:59:31', '810', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"CREATE_PERMISSION";}', NULL),
(900, 'create', '2022-09-20 18:59:31', '811', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"VIEW_PERMISSION";}', NULL),
(901, 'create', '2022-09-20 18:59:31', '812', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"EDIT_PERMISSION";}', NULL),
(902, 'create', '2022-09-20 18:59:31', '813', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"DELETE_PERMISSION";}', NULL),
(903, 'create', '2022-09-20 18:59:31', '814', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:9:"LIST_USER";}', NULL),
(904, 'create', '2022-09-20 18:59:31', '815', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:11:"CREATE_USER";}', NULL),
(905, 'create', '2022-09-20 18:59:31', '816', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:9:"VIEW_USER";}', NULL),
(906, 'create', '2022-09-20 18:59:31', '817', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:9:"EDIT_USER";}', NULL),
(907, 'create', '2022-09-20 18:59:31', '818', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:11:"DELETE_USER";}', NULL),
(908, 'create', '2022-09-20 18:59:31', '819', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:11:"LIST_WOREDA";}', NULL),
(909, 'create', '2022-09-20 18:59:31', '820', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"CREATE_WOREDA";}', NULL),
(910, 'create', '2022-09-20 18:59:31', '821', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:11:"VIEW_WOREDA";}', NULL),
(911, 'create', '2022-09-20 18:59:31', '822', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:11:"EDIT_WOREDA";}', NULL),
(912, 'create', '2022-09-20 18:59:31', '823', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"DELETE_WOREDA";}', NULL),
(913, 'create', '2022-09-20 18:59:31', '824', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"LIST_KETEMA_KEBELE";}', NULL),
(914, 'create', '2022-09-20 18:59:31', '825', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"CREATE_KETEMA_KEBELE";}', NULL),
(915, 'create', '2022-09-20 18:59:31', '826', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"VIEW_KETEMA_KEBELE";}', NULL),
(916, 'create', '2022-09-20 18:59:31', '827', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"EDIT_KETEMA_KEBELE";}', NULL),
(917, 'create', '2022-09-20 18:59:31', '828', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"DELETE_KETEMA_KEBELE";}', NULL),
(918, 'create', '2022-09-20 18:59:31', '829', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"LIST_PAYMENT_ROUND";}', NULL),
(919, 'create', '2022-09-20 18:59:31', '830', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"CREATE_PAYMENT_ROUND";}', NULL),
(920, 'create', '2022-09-20 18:59:31', '831', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"VIEW_PAYMENT_ROUND";}', NULL),
(921, 'create', '2022-09-20 18:59:31', '832', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"EDIT_PAYMENT_ROUND";}', NULL),
(922, 'create', '2022-09-20 18:59:31', '833', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"DELETE_PAYMENT_ROUND";}', NULL),
(923, 'create', '2022-09-20 18:59:31', '834', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"LIST_PROJECT_TYPE";}', NULL),
(924, 'create', '2022-09-20 18:59:31', '835', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:19:"CREATE_PROJECT_TYPE";}', NULL),
(925, 'create', '2022-09-20 18:59:31', '836', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"VIEW_PROJECT_TYPE";}', NULL),
(926, 'create', '2022-09-20 18:59:31', '837', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"EDIT_PROJECT_TYPE";}', NULL),
(927, 'create', '2022-09-20 18:59:31', '838', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:19:"DELETE_PROJECT_TYPE";}', NULL),
(928, 'create', '2022-09-20 18:59:31', '839', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"LIST_SERVICE_PAYMENT";}', NULL),
(929, 'create', '2022-09-20 18:59:31', '840', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:22:"CREATE_SERVICE_PAYMENT";}', NULL),
(930, 'create', '2022-09-20 18:59:31', '841', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"VIEW_SERVICE_PAYMENT";}', NULL),
(931, 'create', '2022-09-20 18:59:31', '842', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"EDIT_SERVICE_PAYMENT";}', NULL),
(932, 'create', '2022-09-20 18:59:31', '843', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:22:"DELETE_SERVICE_PAYMENT";}', NULL),
(933, 'create', '2022-09-20 18:59:31', '844', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:21:"LIST_BUILDING_PROJECT";}', NULL),
(934, 'create', '2022-09-20 18:59:31', '845', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:23:"CREATE_BUILDING_PROJECT";}', NULL),
(935, 'create', '2022-09-20 18:59:31', '846', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:21:"VIEW_BUILDING_PROJECT";}', NULL),
(936, 'create', '2022-09-20 18:59:31', '847', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:21:"EDIT_BUILDING_PROJECT";}', NULL),
(937, 'create', '2022-09-20 18:59:31', '848', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:23:"DELETE_BUILDING_PROJECT";}', NULL),
(938, 'create', '2022-09-20 18:59:31', '849', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:21:"LIST_BUILDING_PAYMENT";}', NULL),
(939, 'create', '2022-09-20 18:59:31', '850', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:23:"CREATE_BUILDING_PAYMENT";}', NULL),
(940, 'create', '2022-09-20 18:59:31', '851', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:21:"VIEW_BUILDING_PAYMENT";}', NULL),
(941, 'create', '2022-09-20 18:59:31', '852', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:21:"EDIT_BUILDING_PAYMENT";}', NULL),
(942, 'create', '2022-09-20 18:59:31', '853', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:23:"DELETE_BUILDING_PAYMENT";}', NULL),
(943, 'create', '2022-09-20 18:59:31', '854', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:29:"LIST_BUILDING_JOB_OPPORTUNITY";}', NULL),
(944, 'create', '2022-09-20 18:59:31', '855', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:31:"CREATE_BUILDING_JOB_OPPORTUNITY";}', NULL),
(945, 'create', '2022-09-20 18:59:31', '856', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:29:"VIEW_BUILDING_JOB_OPPORTUNITY";}', NULL),
(946, 'create', '2022-09-20 18:59:31', '857', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:29:"EDIT_BUILDING_JOB_OPPORTUNITY";}', NULL),
(947, 'create', '2022-09-20 18:59:31', '858', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:31:"DELETE_BUILDING_JOB_OPPORTUNITY";}', NULL),
(948, 'create', '2022-09-20 18:59:31', '859', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:28:"LIST_BUILDING_PROJECT_DESIGN";}', NULL),
(949, 'create', '2022-09-20 18:59:31', '860', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:30:"CREATE_BUILDING_PROJECT_DESIGN";}', NULL),
(950, 'create', '2022-09-20 18:59:31', '861', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:28:"VIEW_BUILDING_PROJECT_DESIGN";}', NULL),
(951, 'create', '2022-09-20 18:59:31', '862', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:28:"EDIT_BUILDING_PROJECT_DESIGN";}', NULL),
(952, 'create', '2022-09-20 18:59:31', '863', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:30:"DELETE_BUILDING_PROJECT_DESIGN";}', NULL),
(953, 'create', '2022-09-20 18:59:31', '864', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:21:"LIST_BUILDIND_EXPERTS";}', NULL),
(954, 'create', '2022-09-20 18:59:31', '865', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:23:"CREATE_BUILDIND_EXPERTS";}', NULL),
(955, 'create', '2022-09-20 18:59:31', '866', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:21:"VIEW_BUILDIND_EXPERTS";}', NULL),
(956, 'create', '2022-09-20 18:59:31', '867', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:21:"EDIT_BUILDIND_EXPERTS";}', NULL),
(957, 'create', '2022-09-20 18:59:31', '868', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:23:"DELETE_BUILDIND_EXPERTS";}', NULL),
(958, 'create', '2022-09-20 18:59:31', '869', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:31:"LIST_BUILDIND_PROJECT_GAURANTEE";}', NULL),
(959, 'create', '2022-09-20 18:59:31', '870', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:33:"CREATE_BUILDIND_PROJECT_GAURANTEE";}', NULL),
(960, 'create', '2022-09-20 18:59:31', '871', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:31:"VIEW_BUILDIND_PROJECT_GAURANTEE";}', NULL),
(961, 'create', '2022-09-20 18:59:31', '872', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:31:"EDIT_BUILDIND_PROJECT_GAURANTEE";}', NULL),
(962, 'create', '2022-09-20 18:59:31', '873', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:33:"DELETE_BUILDIND_PROJECT_GAURANTEE";}', NULL),
(963, 'create', '2022-09-20 18:59:31', '874', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"LIST_ROAD_PROJECT";}', NULL),
(964, 'create', '2022-09-20 18:59:31', '875', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:19:"CREATE_ROAD_PROJECT";}', NULL),
(965, 'create', '2022-09-20 18:59:31', '876', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"VIEW_ROAD_PROJECT";}', NULL),
(966, 'create', '2022-09-20 18:59:31', '877', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"EDIT_ROAD_PROJECT";}', NULL),
(967, 'create', '2022-09-20 18:59:31', '878', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:19:"DELETE_ROAD_PROJECT";}', NULL),
(968, 'create', '2022-09-20 18:59:31', '879', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"LIST_ROAD_PAYMENT";}', NULL),
(969, 'create', '2022-09-20 18:59:31', '880', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:19:"CREATE_ROAD_PAYMENT";}', NULL),
(970, 'create', '2022-09-20 18:59:31', '881', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"VIEW_ROAD_PAYMENT";}', NULL),
(971, 'create', '2022-09-20 18:59:31', '882', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"EDIT_ROAD_PAYMENT";}', NULL),
(972, 'create', '2022-09-20 18:59:31', '883', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:19:"DELETE_ROAD_PAYMENT";}', NULL),
(973, 'create', '2022-09-20 18:59:31', '884', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:25:"LIST_ROAD_JOB_OPPORTUNITY";}', NULL),
(974, 'create', '2022-09-20 18:59:31', '885', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:27:"CREATE_ROAD_JOB_OPPORTUNITY";}', NULL),
(975, 'create', '2022-09-20 18:59:31', '886', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:25:"VIEW_ROAD_JOB_OPPORTUNITY";}', NULL),
(976, 'create', '2022-09-20 18:59:31', '887', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:25:"EDIT_ROAD_JOB_OPPORTUNITY";}', NULL),
(977, 'create', '2022-09-20 18:59:31', '888', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:27:"DELETE_ROAD_JOB_OPPORTUNITY";}', NULL),
(978, 'create', '2022-09-20 18:59:31', '889', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"LIST_ROAD_EXPERTS";}', NULL),
(979, 'create', '2022-09-20 18:59:31', '890', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:19:"CREATE_ROAD_EXPERTS";}', NULL),
(980, 'create', '2022-09-20 18:59:31', '891', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"VIEW_ROAD_EXPERTS";}', NULL),
(981, 'create', '2022-09-20 18:59:31', '892', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"EDIT_ROAD_EXPERTS";}', NULL),
(982, 'create', '2022-09-20 18:59:31', '893', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:19:"DELETE_ROAD_EXPERTS";}', NULL),
(983, 'create', '2022-09-20 18:59:31', '894', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:24:"LIST_ROAD_PROJECT_DESIGN";}', NULL),
(984, 'create', '2022-09-20 18:59:31', '895', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:26:"CREATE_ROAD_PROJECT_DESIGN";}', NULL),
(985, 'create', '2022-09-20 18:59:31', '896', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:24:"VIEW_ROAD_PROJECT_DESIGN";}', NULL),
(986, 'create', '2022-09-20 18:59:31', '897', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:24:"EDIT_ROAD_PROJECT_DESIGN";}', NULL),
(987, 'create', '2022-09-20 18:59:31', '898', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:26:"DELETE_ROAD_PROJECT_DESIGN";}', NULL),
(988, 'create', '2022-09-20 18:59:31', '899', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:27:"LIST_ROAD_PROJECT_GAURANTEE";}', NULL),
(989, 'create', '2022-09-20 18:59:31', '900', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:29:"CREATE_ROAD_PROJECT_GAURANTEE";}', NULL),
(990, 'create', '2022-09-20 18:59:31', '901', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:27:"VIEW_ROAD_PROJECT_GAURANTEE";}', NULL),
(991, 'create', '2022-09-20 18:59:31', '902', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:27:"EDIT_ROAD_PROJECT_GAURANTEE";}', NULL),
(992, 'create', '2022-09-20 18:59:31', '903', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:29:"DELETE_ROAD_PROJECT_GAURANTEE";}', NULL),
(993, 'create', '2022-09-20 18:59:31', '904', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"LIST_WATER_PROJECT";}', NULL),
(994, 'create', '2022-09-20 18:59:31', '905', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"CREATE_WATER_PROJECT";}', NULL),
(995, 'create', '2022-09-20 18:59:31', '906', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"VIEW_WATER_PROJECT";}', NULL),
(996, 'create', '2022-09-20 18:59:31', '907', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"EDIT_WATER_PROJECT";}', NULL),
(997, 'create', '2022-09-20 18:59:31', '908', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"DELETE_WATER_PROJECT";}', NULL),
(998, 'create', '2022-09-20 18:59:31', '909', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"LIST_WATER_PAYMENT";}', NULL),
(999, 'create', '2022-09-20 18:59:31', '910', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"CREATE_WATER_PAYMENT";}', NULL),
(1000, 'create', '2022-09-20 18:59:31', '911', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"VIEW_WATER_PAYMENT";}', NULL),
(1001, 'create', '2022-09-20 18:59:31', '912', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"EDIT_WATER_PAYMENT";}', NULL),
(1002, 'create', '2022-09-20 18:59:31', '913', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"DELETE_WATER_PAYMENT";}', NULL),
(1003, 'create', '2022-09-20 18:59:31', '914', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:26:"LIST_WATER_JOB_OPPORTUNITY";}', NULL),
(1004, 'create', '2022-09-20 18:59:31', '915', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:28:"CREATE_WATER_JOB_OPPORTUNITY";}', NULL),
(1005, 'create', '2022-09-20 18:59:31', '916', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:26:"VIEW_WATER_JOB_OPPORTUNITY";}', NULL),
(1006, 'create', '2022-09-20 18:59:31', '917', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:26:"EDIT_WATER_JOB_OPPORTUNITY";}', NULL),
(1007, 'create', '2022-09-20 18:59:31', '918', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:28:"DELETE_WATER_JOB_OPPORTUNITY";}', NULL),
(1008, 'create', '2022-09-20 18:59:31', '919', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"LIST_WATER_EXPERTS";}', NULL),
(1009, 'create', '2022-09-20 18:59:31', '920', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"CREATE_WATER_EXPERTS";}', NULL),
(1010, 'create', '2022-09-20 18:59:31', '921', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"VIEW_WATER_EXPERTS";}', NULL),
(1011, 'create', '2022-09-20 18:59:31', '922', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"EDIT_WATER_EXPERTS";}', NULL),
(1012, 'create', '2022-09-20 18:59:31', '923', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"DELETE_WATER_EXPERTS";}', NULL),
(1013, 'create', '2022-09-20 18:59:31', '924', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:25:"LIST_WATER_PROJECT_DESIGN";}', NULL),
(1014, 'create', '2022-09-20 18:59:31', '925', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:27:"CREATE_WATER_PROJECT_DESIGN";}', NULL),
(1015, 'create', '2022-09-20 18:59:31', '926', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:25:"VIEW_WATER_PROJECT_DESIGN";}', NULL),
(1016, 'create', '2022-09-20 18:59:31', '927', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:25:"EDIT_WATER_PROJECT_DESIGN";}', NULL),
(1017, 'create', '2022-09-20 18:59:31', '928', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:27:"DELETE_WATER_PROJECT_DESIGN";}', NULL),
(1018, 'create', '2022-09-20 18:59:31', '929', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:28:"LIST_WATER_PROJECT_GAURANTEE";}', NULL),
(1019, 'create', '2022-09-20 18:59:31', '930', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:30:"CREATE_WATER_PROJECT_GAURANTEE";}', NULL),
(1020, 'create', '2022-09-20 18:59:31', '931', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:28:"VIEW_WATER_PROJECT_GAURANTEE";}', NULL),
(1021, 'create', '2022-09-20 18:59:31', '932', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:28:"EDIT_WATER_PROJECT_GAURANTEE";}', NULL),
(1022, 'create', '2022-09-20 18:59:31', '933', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:30:"DELETE_WATER_PROJECT_GAURANTEE";}', NULL),
(1023, 'create', '2022-09-20 18:59:31', '934', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"LIST_EMPLOYEE";}', NULL),
(1024, 'create', '2022-09-20 18:59:31', '935', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"CREATE_EMPLOYEE";}', NULL),
(1025, 'create', '2022-09-20 18:59:31', '936', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"VIEW_EMPLOYEE";}', NULL),
(1026, 'create', '2022-09-20 18:59:31', '937', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"EDIT_EMPLOYEE";}', NULL),
(1027, 'create', '2022-09-20 18:59:31', '938', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"DELETE_EMPLOYEE";}', NULL),
(1028, 'create', '2022-09-20 18:59:31', '939', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"LIST_PROPERTY";}', NULL),
(1029, 'create', '2022-09-20 18:59:31', '940', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"CREATE_PROPERTY";}', NULL),
(1030, 'create', '2022-09-20 18:59:31', '941', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"VIEW_PROPERTY";}', NULL),
(1031, 'create', '2022-09-20 18:59:31', '942', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"EDIT_PROPERTY";}', NULL),
(1032, 'create', '2022-09-20 18:59:31', '943', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"DELETE_PROPERTY";}', NULL),
(1033, 'create', '2022-09-20 18:59:31', '944', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:12:"LIST_TRANING";}', NULL),
(1034, 'create', '2022-09-20 18:59:31', '945', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:14:"CREATE_TRANING";}', NULL),
(1035, 'create', '2022-09-20 18:59:31', '946', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:12:"VIEW_TRANING";}', NULL),
(1036, 'create', '2022-09-20 18:59:31', '947', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:12:"EDIT_TRANING";}', NULL),
(1037, 'create', '2022-09-20 18:59:31', '948', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:14:"DELETE_TRANING";}', NULL),
(1038, 'create', '2022-09-20 18:59:31', '949', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"LIST_TRANSFER";}', NULL),
(1039, 'create', '2022-09-20 18:59:31', '950', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"CREATE_TRANSFER";}', NULL),
(1040, 'create', '2022-09-20 18:59:31', '951', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"VIEW_TRANSFER";}', NULL),
(1041, 'create', '2022-09-20 18:59:31', '952', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"EDIT_TRANSFER";}', NULL),
(1042, 'create', '2022-09-20 18:59:31', '953', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"DELETE_TRANSFER";}', NULL),
(1043, 'create', '2022-09-20 18:59:31', '954', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"LIST_EVALUATION";}', NULL),
(1044, 'create', '2022-09-20 18:59:31', '955', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"CREATE_EVALUATION";}', NULL),
(1045, 'create', '2022-09-20 18:59:31', '956', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"VIEW_EVALUATION";}', NULL),
(1046, 'create', '2022-09-20 18:59:31', '957', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"EDIT_EVALUATION";}', NULL),
(1047, 'create', '2022-09-20 18:59:31', '958', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"DELETE_EVALUATION";}', NULL),
(1048, 'create', '2022-09-20 18:59:31', '959', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"LIST_CONTRACTORS_IMX";}', NULL),
(1049, 'create', '2022-09-20 18:59:31', '960', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:22:"CREATE_CONTRACTORS_IMX";}', NULL),
(1050, 'create', '2022-09-20 18:59:31', '961', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"VIEW_CONTRACTORS_IMX";}', NULL),
(1051, 'create', '2022-09-20 18:59:31', '962', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"EDIT_CONTRACTORS_IMX";}', NULL),
(1052, 'create', '2022-09-20 18:59:31', '963', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:22:"DELETE_CONTRACTORS_IMX";}', NULL),
(1053, 'create', '2022-09-20 18:59:31', '964', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"LIST_CONTRACTOR";}', NULL),
(1054, 'create', '2022-09-20 18:59:31', '965', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"CREATE_CONTRACTOR";}', NULL),
(1055, 'create', '2022-09-20 18:59:31', '966', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"VIEW_CONTRACTOR";}', NULL),
(1056, 'create', '2022-09-20 18:59:31', '967', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"EDIT_CONTRACTOR";}', NULL),
(1057, 'create', '2022-09-20 18:59:31', '968', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"DELETE_CONTRACTOR";}', NULL),
(1058, 'create', '2022-09-20 18:59:31', '969', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:36:"LIST_CONTRACTORS_IMX_RENEWED_PAYMENT";}', NULL),
(1059, 'create', '2022-09-20 18:59:31', '970', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:38:"CREATE_CONTRACTORS_IMX_RENEWED_PAYMENT";}', NULL),
(1060, 'create', '2022-09-20 18:59:31', '971', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:36:"VIEW_CONTRACTORS_IMX_RENEWED_PAYMENT";}', NULL),
(1061, 'create', '2022-09-20 18:59:31', '972', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:36:"EDIT_CONTRACTORS_IMX_RENEWED_PAYMENT";}', NULL),
(1062, 'create', '2022-09-20 18:59:31', '973', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:38:"DELETE_CONTRACTORS_IMX_RENEWED_PAYMENT";}', NULL),
(1063, 'create', '2022-09-20 18:59:31', '974', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"LIST_NAME_MSE";}', NULL),
(1064, 'create', '2022-09-20 18:59:31', '975', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"CREATE_NAME_MSE";}', NULL),
(1065, 'create', '2022-09-20 18:59:31', '976', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"VIEW_NAME_MSE";}', NULL),
(1066, 'create', '2022-09-20 18:59:31', '977', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"EDIT_NAME_MSE";}', NULL),
(1067, 'create', '2022-09-20 18:59:31', '978', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"DELETE_NAME_MSE";}', NULL),
(1068, 'create', '2022-09-20 18:59:31', '979', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:16:"LIST_MSE_MEMBERS";}', NULL),
(1069, 'create', '2022-09-20 18:59:31', '980', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"CREATE_MSE_MEMBERS";}', NULL),
(1070, 'create', '2022-09-20 18:59:31', '981', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:16:"VIEW_MSE_MEMBERS";}', NULL),
(1071, 'create', '2022-09-20 18:59:31', '982', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:16:"EDIT_MSE_MEMBERS";}', NULL),
(1072, 'create', '2022-09-20 18:59:31', '983', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"DELETE_MSE_MEMBERS";}', NULL),
(1073, 'create', '2022-09-20 18:59:31', '984', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:25:"LIST_PROFESSIONAL_LICENSE";}', NULL),
(1074, 'create', '2022-09-20 18:59:31', '985', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:27:"CREATE_PROFESSIONAL_LICENSE";}', NULL),
(1075, 'create', '2022-09-20 18:59:31', '986', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:25:"VIEW_PROFESSIONAL_LICENSE";}', NULL),
(1076, 'create', '2022-09-20 18:59:31', '987', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:25:"EDIT_PROFESSIONAL_LICENSE";}', NULL),
(1077, 'create', '2022-09-20 18:59:31', '988', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:27:"DELETE_PROFESSIONAL_LICENSE";}', NULL),
(1078, 'create', '2022-09-20 18:59:31', '989', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:38:"LIST_PROFESSIONAL_CERT_RENEWAL_PAYMENT";}', NULL),
(1079, 'create', '2022-09-20 18:59:31', '990', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:40:"CREATE_PROFESSIONAL_CERT_RENEWAL_PAYMENT";}', NULL),
(1080, 'create', '2022-09-20 18:59:31', '991', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:38:"VIEW_PROFESSIONAL_CERT_RENEWAL_PAYMENT";}', NULL),
(1081, 'create', '2022-09-20 18:59:31', '992', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:38:"EDIT_PROFESSIONAL_CERT_RENEWAL_PAYMENT";}', NULL),
(1082, 'create', '2022-09-20 18:59:31', '993', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:40:"DELETE_PROFESSIONAL_CERT_RENEWAL_PAYMENT";}', NULL),
(1083, 'create', '2022-09-20 18:59:31', '994', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:12:"LIST_LICENSE";}', NULL),
(1084, 'create', '2022-09-20 18:59:31', '995', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:14:"CREATE_LICENSE";}', NULL),
(1085, 'create', '2022-09-20 18:59:31', '996', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:12:"VIEW_LICENSE";}', NULL),
(1086, 'create', '2022-09-20 18:59:31', '997', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:12:"EDIT_LICENSE";}', NULL),
(1087, 'create', '2022-09-20 18:59:31', '998', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:14:"DELETE_LICENSE";}', NULL),
(1088, 'create', '2022-09-20 18:59:31', '999', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"LIST_RENEWAL_PAYMENT";}', NULL),
(1089, 'create', '2022-09-20 18:59:31', '1000', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:22:"CREATE_RENEWAL_PAYMENT";}', NULL),
(1090, 'create', '2022-09-20 18:59:31', '1001', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"VIEW_RENEWAL_PAYMENT";}', NULL),
(1091, 'create', '2022-09-20 18:59:31', '1002', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"EDIT_RENEWAL_PAYMENT";}', NULL),
(1092, 'create', '2022-09-20 18:59:31', '1003', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:22:"DELETE_RENEWAL_PAYMENT";}', NULL),
(1093, 'create', '2022-09-20 18:59:31', '1004', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:16:"LIST_CONTRACTORS";}', NULL),
(1094, 'create', '2022-09-20 18:59:31', '1005', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"CREATE_CONTRACTORS";}', NULL),
(1095, 'create', '2022-09-20 18:59:31', '1006', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:16:"VIEW_CONTRACTORS";}', NULL),
(1096, 'create', '2022-09-20 18:59:31', '1007', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:16:"EDIT_CONTRACTORS";}', NULL),
(1097, 'create', '2022-09-20 18:59:31', '1008', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"DELETE_CONTRACTORS";}', NULL),
(1098, 'create', '2022-09-20 18:59:31', '1009', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"LIST_CONSULTANT";}', NULL),
(1099, 'create', '2022-09-20 18:59:31', '1010', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"CREATE_CONSULTANT";}', NULL),
(1100, 'create', '2022-09-20 18:59:31', '1011', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"VIEW_CONSULTANT";}', NULL),
(1101, 'create', '2022-09-20 18:59:31', '1012', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"EDIT_CONSULTANT";}', NULL),
(1102, 'create', '2022-09-20 18:59:31', '1013', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"DELETE_CONSULTANT";}', NULL),
(1103, 'create', '2022-09-20 18:59:31', '1014', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:16:"LIST_CONSULTANTS";}', NULL),
(1104, 'create', '2022-09-20 18:59:31', '1015', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"CREATE_CONSULTANTS";}', NULL),
(1105, 'create', '2022-09-20 18:59:31', '1016', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:16:"VIEW_CONSULTANTS";}', NULL),
(1106, 'create', '2022-09-20 18:59:31', '1017', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:16:"EDIT_CONSULTANTS";}', NULL),
(1107, 'create', '2022-09-20 18:59:31', '1018', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"DELETE_CONSULTANTS";}', NULL),
(1108, 'create', '2022-09-20 18:59:31', '1019', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:32:"LIST_PAYMENT_ALLOWED_CONSULTANTS";}', NULL),
(1109, 'create', '2022-09-20 18:59:31', '1020', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:34:"CREATE_PAYMENT_ALLOWED_CONSULTANTS";}', NULL),
(1110, 'create', '2022-09-20 18:59:31', '1021', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:32:"VIEW_PAYMENT_ALLOWED_CONSULTANTS";}', NULL),
(1111, 'create', '2022-09-20 18:59:31', '1022', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:32:"EDIT_PAYMENT_ALLOWED_CONSULTANTS";}', NULL),
(1112, 'create', '2022-09-20 18:59:31', '1023', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:34:"DELETE_PAYMENT_ALLOWED_CONSULTANTS";}', NULL),
(1113, 'create', '2022-09-20 18:59:31', '1024', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"LIST_COC_INFO";}', NULL),
(1114, 'create', '2022-09-20 18:59:31', '1025', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"CREATE_COC_INFO";}', NULL),
(1115, 'create', '2022-09-20 18:59:31', '1026', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"VIEW_COC_INFO";}', NULL),
(1116, 'create', '2022-09-20 18:59:31', '1027', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:13:"EDIT_COC_INFO";}', NULL),
(1117, 'create', '2022-09-20 18:59:31', '1028', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:15:"DELETE_COC_INFO";}', NULL),
(1118, 'create', '2022-09-20 18:59:31', '1029', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:19:"LIST_COC_EVALUATION";}', NULL),
(1119, 'create', '2022-09-20 18:59:31', '1030', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:21:"CREATE_COC_EVALUATION";}', NULL),
(1120, 'create', '2022-09-20 18:59:31', '1031', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:19:"VIEW_COC_EVALUATION";}', NULL),
(1121, 'create', '2022-09-20 18:59:31', '1032', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:19:"EDIT_COC_EVALUATION";}', NULL),
(1122, 'create', '2022-09-20 18:59:31', '1033', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:21:"DELETE_COC_EVALUATION";}', NULL),
(1123, 'create', '2022-09-20 18:59:31', '1034', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"LIST_LICENSE_TYPE";}', NULL),
(1124, 'create', '2022-09-20 18:59:31', '1035', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:19:"CREATE_LICENSE_TYPE";}', NULL),
(1125, 'create', '2022-09-20 18:59:31', '1036', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"VIEW_LICENSE_TYPE";}', NULL),
(1126, 'create', '2022-09-20 18:59:31', '1037', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:17:"EDIT_LICENSE_TYPE";}', NULL),
(1127, 'create', '2022-09-20 18:59:31', '1038', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:19:"DELETE_LICENSE_TYPE";}', NULL),
(1128, 'create', '2022-09-20 18:59:31', '1039', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"LIST_LICENSE_LEVEL";}', NULL),
(1129, 'create', '2022-09-20 18:59:31', '1040', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"CREATE_LICENSE_LEVEL";}', NULL),
(1130, 'create', '2022-09-20 18:59:31', '1041', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"VIEW_LICENSE_LEVEL";}', NULL),
(1131, 'create', '2022-09-20 18:59:31', '1042', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:18:"EDIT_LICENSE_LEVEL";}', NULL),
(1132, 'create', '2022-09-20 18:59:31', '1043', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:20:"DELETE_LICENSE_LEVEL";}', NULL),
(1133, 'create', '2022-09-20 18:59:31', '1044', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:8:"LIST_BID";}', NULL),
(1134, 'create', '2022-09-20 18:59:31', '1045', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:10:"CREATE_BID";}', NULL),
(1135, 'create', '2022-09-20 18:59:31', '1046', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:8:"VIEW_BID";}', NULL),
(1136, 'create', '2022-09-20 18:59:31', '1047', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:8:"EDIT_BID";}', NULL),
(1137, 'create', '2022-09-20 18:59:31', '1048', 'OST\\UABundle\\Entity\\Permission', 1, 'a:1:{s:4:"name";s:10:"DELETE_BID";}', NULL),
(1138, 'create', '2022-09-20 18:59:32', '3', 'Ethio\\Covid19Bundle\\Entity\\AboutUs', 1, 'a:4:{s:7:"Mission";s:103:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et";s:6:"Vision";s:103:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et";s:10:"CoreValues";s:103:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et";s:15:"Strategicthemes";s:103:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et";}', NULL),
(1139, 'create', '2022-09-20 18:59:32', '15', 'OST\\UABundle\\Entity\\Group', 1, 'a:1:{s:11:"description";s:106:"Thsi is a group where ICT support staff is associated. This is to deal with user account related problems.";}', NULL),
(1140, 'create', '2022-09-20 18:59:32', '16', 'OST\\UABundle\\Entity\\Group', 1, 'a:1:{s:11:"description";s:11:"admin group";}', NULL),
(1141, 'create', '2022-09-20 18:59:32', '17', 'OST\\UABundle\\Entity\\Group', 1, 'a:1:{s:11:"description";s:15:"building_grourp";}', NULL),
(1142, 'create', '2022-09-20 18:59:32', '18', 'OST\\UABundle\\Entity\\Group', 1, 'a:1:{s:11:"description";s:11:"road_grourp";}', NULL),
(1143, 'create', '2022-09-20 18:59:32', '19', 'OST\\UABundle\\Entity\\Group', 1, 'a:1:{s:11:"description";s:27:"water_and_irrigation_grourp";}', NULL),
(1144, 'create', '2022-09-20 18:59:32', '20', 'OST\\UABundle\\Entity\\Group', 1, 'a:1:{s:11:"description";s:14:"industry_group";}', NULL),
(1145, 'create', '2022-09-20 18:59:32', '21', 'OST\\UABundle\\Entity\\Group', 1, 'a:1:{s:11:"description";s:39:"employee HRM_EMPLOYEE_GROUP description";}', NULL),
(1146, 'create', '2022-09-20 18:59:32', '9', 'Ethio\\Covid19Bundle\\Entity\\Office', 1, 'a:3:{s:4:"name";s:10:"Jimma Zone";s:11:"description";s:10:"jimma zone";s:12:"parentOffice";N;}', NULL),
(1147, 'create', '2022-09-20 18:59:32', '10', 'Ethio\\Covid19Bundle\\Entity\\Office', 1, 'a:3:{s:4:"name";s:5:"Agaro";s:11:"description";s:5:"Agaro";s:12:"parentOffice";N;}', NULL),
(1148, 'create', '2022-09-20 18:59:32', '17', 'OST\\UABundle\\Entity\\User', 1, 'a:12:{s:10:"first_name";s:5:"admin";s:11:"middle_name";s:5:"admin";s:9:"last_name";N;s:5:"phone";N;s:6:"status";N;s:6:"gender";s:1:"M";s:11:"profile_pic";N;s:7:"card_no";N;s:11:"building_no";N;s:9:"office_no";N;s:2:"dn";N;s:6:"office";N;}', NULL),
(1149, 'create', '2022-09-20 18:59:33', '18', 'OST\\UABundle\\Entity\\User', 1, 'a:12:{s:10:"first_name";s:4:"Tame";s:11:"middle_name";s:5:"Tanga";s:9:"last_name";N;s:5:"phone";N;s:6:"status";N;s:6:"gender";s:1:"M";s:11:"profile_pic";N;s:7:"card_no";N;s:11:"building_no";N;s:9:"office_no";N;s:2:"dn";N;s:6:"office";N;}', NULL),
(1150, 'create', '2022-09-20 18:59:34', '19', 'OST\\UABundle\\Entity\\User', 1, 'a:12:{s:10:"first_name";s:13:"Support Group";s:11:"middle_name";s:12:"Goup Support";s:9:"last_name";N;s:5:"phone";N;s:6:"status";N;s:6:"gender";s:1:"M";s:11:"profile_pic";N;s:7:"card_no";N;s:11:"building_no";N;s:9:"office_no";N;s:2:"dn";N;s:6:"office";N;}', NULL),
(1151, 'create', '2022-09-20 18:59:34', '20', 'OST\\UABundle\\Entity\\User', 1, 'a:12:{s:10:"first_name";s:8:"Building";s:11:"middle_name";s:8:"Building";s:9:"last_name";N;s:5:"phone";N;s:6:"status";N;s:6:"gender";s:1:"M";s:11:"profile_pic";N;s:7:"card_no";N;s:11:"building_no";N;s:9:"office_no";N;s:2:"dn";N;s:6:"office";N;}', NULL),
(1152, 'create', '2022-09-20 18:59:35', '21', 'OST\\UABundle\\Entity\\User', 1, 'a:12:{s:10:"first_name";s:4:"Road";s:11:"middle_name";s:4:"Road";s:9:"last_name";N;s:5:"phone";N;s:6:"status";N;s:6:"gender";s:1:"M";s:11:"profile_pic";N;s:7:"card_no";N;s:11:"building_no";N;s:9:"office_no";N;s:2:"dn";N;s:6:"office";N;}', NULL),
(1153, 'create', '2022-09-20 18:59:35', '22', 'OST\\UABundle\\Entity\\User', 1, 'a:12:{s:10:"first_name";s:5:"Water";s:11:"middle_name";s:5:"Water";s:9:"last_name";N;s:5:"phone";N;s:6:"status";N;s:6:"gender";s:1:"M";s:11:"profile_pic";N;s:7:"card_no";N;s:11:"building_no";N;s:9:"office_no";N;s:2:"dn";N;s:6:"office";N;}', NULL),
(1154, 'create', '2022-09-20 18:59:36', '23', 'OST\\UABundle\\Entity\\User', 1, 'a:12:{s:10:"first_name";s:8:"Industry";s:11:"middle_name";s:8:"Industry";s:9:"last_name";N;s:5:"phone";N;s:6:"status";N;s:6:"gender";s:1:"M";s:11:"profile_pic";N;s:7:"card_no";N;s:11:"building_no";N;s:9:"office_no";N;s:2:"dn";N;s:6:"office";N;}', NULL),
(1155, 'create', '2022-09-20 18:59:36', '24', 'OST\\UABundle\\Entity\\User', 1, 'a:12:{s:10:"first_name";s:8:"Employee";s:11:"middle_name";s:8:"Employee";s:9:"last_name";N;s:5:"phone";N;s:6:"status";N;s:6:"gender";s:1:"M";s:11:"profile_pic";N;s:7:"card_no";N;s:11:"building_no";N;s:9:"office_no";N;s:2:"dn";N;s:6:"office";N;}', NULL),
(1156, 'create', '2022-09-20 18:59:51', '10', 'Ethio\\Covid19Bundle\\Entity\\VisitorLog', 1, 'a:5:{s:7:"host_ip";s:9:"127.0.0.1";s:16:"visitor_username";s:5:"admin";s:11:"description";N;s:10:"created_at";O:8:"DateTime":3:{s:4:"date";s:26:"2022-09-20 18:59:51.840793";s:13:"timezone_type";i:3;s:8:"timezone";s:15:"Africa/Khartoum";}s:10:"updated_at";N;}', NULL),
(1157, 'update', '2022-09-20 19:00:25', '17', 'OST\\UABundle\\Entity\\User', 2, 'a:5:{s:9:"last_name";s:5:"adddd";s:5:"phone";s:10:"0912939267";s:6:"status";s:1:"1";s:6:"gender";s:4:"Male";s:6:"office";a:1:{s:2:"id";i:9;}}', 'admin'),
(1158, 'create', '2022-09-20 19:01:40', '27', 'Ethio\\Covid19Bundle\\Entity\\MessageType', 1, 'N;', 'admin'),
(1159, 'create', '2022-09-20 19:02:13', '28', 'Ethio\\Covid19Bundle\\Entity\\MessageType', 1, 'N;', 'admin'),
(1160, 'create', '2022-09-20 19:02:49', '29', 'Ethio\\Covid19Bundle\\Entity\\MessageType', 1, 'N;', 'admin'),
(1161, 'create', '2022-09-20 19:03:22', '30', 'Ethio\\Covid19Bundle\\Entity\\MessageType', 1, 'N;', 'admin'),
(1162, 'create', '2022-09-20 19:03:53', '31', 'Ethio\\Covid19Bundle\\Entity\\MessageType', 1, 'N;', 'admin'),
(1163, 'create', '2022-09-20 19:04:17', '32', 'Ethio\\Covid19Bundle\\Entity\\MessageType', 1, 'N;', 'admin'),
(1164, 'create', '2022-09-20 19:04:40', '33', 'Ethio\\Covid19Bundle\\Entity\\MessageType', 1, 'N;', 'admin'),
(1165, 'create', '2022-09-20 19:05:05', '34', 'Ethio\\Covid19Bundle\\Entity\\MessageType', 1, 'N;', 'admin'),
(1166, 'create', '2022-09-20 19:05:27', '35', 'Ethio\\Covid19Bundle\\Entity\\MessageType', 1, 'N;', 'admin'),
(1167, 'create', '2022-09-20 19:05:50', '36', 'Ethio\\Covid19Bundle\\Entity\\MessageType', 1, 'N;', 'admin'),
(1168, 'create', '2022-09-20 19:06:10', '37', 'Ethio\\Covid19Bundle\\Entity\\MessageType', 1, 'N;', 'admin'),
(1169, 'create', '2022-09-20 19:06:36', '38', 'Ethio\\Covid19Bundle\\Entity\\MessageType', 1, 'N;', 'admin'),
(1170, 'create', '2022-09-20 19:11:13', '2', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1171, 'create', '2022-09-20 19:14:43', '3', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1172, 'create', '2022-09-20 19:15:44', '4', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1173, 'create', '2022-09-20 19:17:06', '5', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1174, 'create', '2022-09-20 19:17:52', '6', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1175, 'create', '2022-09-20 19:18:36', '7', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1176, 'create', '2022-09-20 19:19:22', '8', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1177, 'create', '2022-09-20 19:20:58', '9', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1178, 'create', '2022-09-20 19:22:44', '10', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1179, 'create', '2022-09-20 19:24:00', '11', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1180, 'create', '2022-09-20 19:24:52', '12', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1181, 'create', '2022-09-20 19:25:45', '13', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1182, 'create', '2022-09-20 19:26:51', '14', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1183, 'create', '2022-09-20 19:27:41', '15', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1184, 'create', '2022-09-20 19:28:38', '16', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1185, 'create', '2022-09-20 19:30:26', '17', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1186, 'create', '2022-09-20 19:31:48', '18', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1187, 'create', '2022-09-20 19:32:42', '19', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1188, 'create', '2022-09-20 19:33:37', '20', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1189, 'create', '2022-09-20 19:34:21', '21', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1190, 'create', '2022-09-20 19:35:11', '22', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1191, 'create', '2022-09-20 19:35:57', '23', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1192, 'create', '2022-09-20 19:36:55', '24', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1193, 'create', '2022-09-20 19:37:54', '25', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1194, 'create', '2022-09-20 19:38:39', '26', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1195, 'create', '2022-09-20 19:39:23', '27', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1196, 'create', '2022-09-20 19:40:32', '28', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1197, 'create', '2022-09-20 19:41:33', '29', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1198, 'create', '2022-09-20 19:42:25', '30', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1199, 'create', '2022-09-20 19:43:26', '31', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1200, 'create', '2022-09-20 19:45:40', '32', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1201, 'create', '2022-09-20 19:46:23', '33', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1202, 'create', '2022-09-20 19:47:05', '34', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1203, 'create', '2022-09-20 19:48:54', '35', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1204, 'create', '2022-09-20 19:49:40', '36', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1205, 'create', '2022-09-20 19:50:29', '37', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1206, 'create', '2022-09-20 20:17:21', '38', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1207, 'create', '2022-09-20 20:18:37', '39', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1208, 'create', '2022-09-20 20:20:05', '40', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1209, 'create', '2022-09-20 20:21:03', '41', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1210, 'create', '2022-09-20 20:22:17', '42', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1211, 'create', '2022-09-20 20:23:30', '43', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1212, 'create', '2022-09-20 20:24:55', '44', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1213, 'create', '2022-09-20 20:25:46', '45', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1214, 'create', '2022-09-20 20:27:04', '46', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1215, 'create', '2022-09-20 20:28:21', '47', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1216, 'create', '2022-09-20 20:29:15', '48', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1217, 'create', '2022-09-20 20:30:45', '49', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1218, 'create', '2022-09-20 20:31:45', '50', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1219, 'create', '2022-09-20 20:33:04', '51', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1220, 'create', '2022-09-20 20:34:20', '52', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1221, 'create', '2022-09-20 20:35:10', '53', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1222, 'create', '2022-09-20 20:36:13', '54', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1223, 'create', '2022-09-20 20:36:59', '55', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1224, 'create', '2022-09-20 20:38:18', '56', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1225, 'create', '2022-09-20 20:40:24', '57', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1226, 'create', '2022-09-21 19:38:30', '11', 'Ethio\\Covid19Bundle\\Entity\\VisitorLog', 1, 'a:5:{s:7:"host_ip";s:9:"127.0.0.1";s:16:"visitor_username";s:5:"admin";s:11:"description";N;s:10:"created_at";O:8:"DateTime":3:{s:4:"date";s:26:"2022-09-21 19:38:28.253161";s:13:"timezone_type";i:3;s:8:"timezone";s:15:"Africa/Khartoum";}s:10:"updated_at";N;}', NULL);
INSERT INTO `ext_log_entries` (`id`, `action`, `logged_at`, `object_id`, `object_class`, `version`, `data`, `username`) VALUES
(1227, 'create', '2022-09-21 20:04:41', '58', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1228, 'create', '2022-09-21 20:07:56', '59', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1229, 'create', '2022-09-21 20:09:05', '60', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1230, 'create', '2022-09-21 20:09:51', '61', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1231, 'create', '2022-09-21 20:10:47', '62', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1232, 'create', '2022-09-21 20:12:11', '63', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin'),
(1233, 'create', '2022-09-21 20:13:02', '64', 'Ethio\\Covid19Bundle\\Entity\\MessageList', 1, 'N;', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ext_translations`
--

CREATE TABLE `ext_translations` (
  `id` int(11) NOT NULL,
  `locale` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `object_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `ext_translations`
--

INSERT INTO `ext_translations` (`id`, `locale`, `object_class`, `field`, `foreign_key`, `content`) VALUES
(9, 'or', 'Ethio\\Covid19Bundle\\Entity\\Office', 'name', '9', 'Jimma Zone'),
(10, 'or', 'Ethio\\Covid19Bundle\\Entity\\Office', 'description', '9', 'jimma zone'),
(11, 'or', 'Ethio\\Covid19Bundle\\Entity\\Office', 'name', '10', 'Agaro'),
(12, 'or', 'Ethio\\Covid19Bundle\\Entity\\Office', 'description', '10', 'Agaro');

-- --------------------------------------------------------

--
-- Table structure for table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `office_id` int(11) DEFAULT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `building_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `dn` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fos_user`
--

INSERT INTO `fos_user` (`id`, `office_id`, `created_by_id`, `updated_by_id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `first_name`, `middle_name`, `last_name`, `phone`, `status`, `gender`, `profile_pic`, `card_no`, `building_no`, `office_no`, `created_at`, `updated_at`, `dn`) VALUES
(17, 9, NULL, NULL, 'admin', 'admin', 'admin@gmail.com', 'admin@gmail.com', 1, NULL, '$2y$13$ctie2akTEe2OAlz4uL9cD.DZBTLhFL9ruPcBac87htw5q1Sem6UgO', '2022-09-21 19:38:31', NULL, NULL, 'a:2:{i:0;s:10:"ROLE_ADMIN";i:1;s:16:"ROLE_SUPER_ADMIN";}', 'admin', 'admin', 'adddd', '0912939267', '1', 'Male', NULL, NULL, NULL, NULL, '2022-09-20', '2022-09-21 19:38:31', NULL),
(18, NULL, NULL, NULL, 'tame', 'tame', 'tame@gmail.com', 'tame@gmail.com', 1, NULL, '$2y$13$7QFwICq3mP1EvoQzJdeGouHImXPEzfhitB0bCqsqOXaZzPIzwZNq.', NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 'Tame', 'Tanga', NULL, NULL, NULL, 'M', NULL, NULL, NULL, NULL, '2022-09-20', '2022-09-20 18:59:32', NULL),
(19, NULL, NULL, NULL, 'supportgroup', 'supportgroup', 'supportgroup@gmail.com', 'supportgroup@gmail.com', 1, NULL, '$2y$13$uXRmTxuIkjAKEVC2.xhmGeT.vCefIgijHqVqjD6d2kC1siDImS8cq', NULL, NULL, NULL, 'a:0:{}', 'Support Group', 'Goup Support', NULL, NULL, NULL, 'M', NULL, NULL, NULL, NULL, '2022-09-20', '2022-09-20 18:59:33', NULL),
(20, NULL, NULL, NULL, 'building', 'building', 'building@gmail.com', 'building@gmail.com', 1, NULL, '$2y$13$Ajw070X1HskLiBpwb9sttes.wbWGtqnMaJJexEjBlhRrWfKtBcjhe', NULL, NULL, NULL, 'a:0:{}', 'Building', 'Building', NULL, NULL, NULL, 'M', NULL, NULL, NULL, NULL, '2022-09-20', '2022-09-20 18:59:34', NULL),
(21, NULL, NULL, NULL, 'road', 'road', 'road@gmail.com', 'road@gmail.com', 1, NULL, '$2y$13$3uGudj5mE9QZf6vaJTQDm.eCION35roDS.bVxxqjm.OwgzJNyyDdq', NULL, NULL, NULL, 'a:0:{}', 'Road', 'Road', NULL, NULL, NULL, 'M', NULL, NULL, NULL, NULL, '2022-09-20', '2022-09-20 18:59:34', NULL),
(22, NULL, NULL, NULL, 'water', 'water', 'water@gmail.com', 'water@gmail.com', 1, NULL, '$2y$13$KmxvNbTW0fUa/DWxtr3UYe4k8EGiLBzlAfFoXK6bCELsajobGeP0m', NULL, NULL, NULL, 'a:0:{}', 'Water', 'Water', NULL, NULL, NULL, 'M', NULL, NULL, NULL, NULL, '2022-09-20', '2022-09-20 18:59:35', NULL),
(23, NULL, NULL, NULL, 'industry', 'industry', 'industry@gmail.com', 'industry@gmail.com', 1, NULL, '$2y$13$orofxH9Ya767pq..4C.LsOL4DNtK3gIih12woV7FfhBcRLnI5q3u2', NULL, NULL, NULL, 'a:0:{}', 'Industry', 'Industry', NULL, NULL, NULL, 'M', NULL, NULL, NULL, NULL, '2022-09-20', '2022-09-20 18:59:35', NULL),
(24, NULL, NULL, NULL, 'employee', 'employee', 'employee@gmail.com', 'employee@gmail.com', 1, NULL, '$2y$13$lPbDupRLTaj1DC8ecWOqdOwM009w9PEu3odDU/QtIQ3zK/B8ZszV2', NULL, NULL, NULL, 'a:0:{}', 'Employee', 'Employee', NULL, NULL, NULL, 'M', NULL, NULL, NULL, NULL, '2022-09-20', '2022-09-20 18:59:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_permission`
--

CREATE TABLE `group_permission` (
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `group_permission`
--

INSERT INTO `group_permission` (`group_id`, `permission_id`) VALUES
(15, 787),
(15, 788),
(15, 789),
(15, 790),
(15, 791),
(15, 792),
(15, 793),
(15, 804),
(15, 808),
(15, 809),
(15, 811),
(15, 814),
(15, 815),
(15, 816),
(15, 817),
(16, 787),
(16, 788),
(16, 789),
(16, 790),
(16, 791),
(16, 792),
(16, 793),
(16, 794),
(16, 795),
(16, 796),
(16, 797),
(16, 798),
(16, 799),
(16, 800),
(16, 801),
(16, 802),
(16, 803),
(16, 804),
(16, 805),
(16, 806),
(16, 807),
(16, 808),
(16, 809),
(16, 810),
(16, 811),
(16, 812),
(16, 813),
(16, 814),
(16, 815),
(16, 816),
(16, 817),
(16, 818),
(16, 819),
(16, 820),
(16, 821),
(16, 822),
(16, 823),
(16, 824),
(16, 825),
(16, 826),
(16, 827),
(16, 828),
(16, 829),
(16, 830),
(16, 831),
(16, 832),
(16, 833),
(16, 834),
(16, 835),
(16, 836),
(16, 837),
(16, 838),
(17, 839),
(17, 840),
(17, 841),
(17, 842),
(17, 843),
(17, 844),
(17, 845),
(17, 846),
(17, 847),
(17, 848),
(17, 849),
(17, 850),
(17, 851),
(17, 852),
(17, 853),
(17, 854),
(17, 855),
(17, 856),
(17, 857),
(17, 858),
(17, 859),
(17, 860),
(17, 861),
(17, 862),
(17, 863),
(17, 864),
(17, 865),
(17, 866),
(17, 867),
(17, 868),
(17, 869),
(17, 870),
(17, 871),
(17, 872),
(17, 873),
(18, 874),
(18, 875),
(18, 876),
(18, 877),
(18, 878),
(18, 879),
(18, 880),
(18, 881),
(18, 882),
(18, 883),
(18, 884),
(18, 885),
(18, 886),
(18, 887),
(18, 888),
(18, 889),
(18, 890),
(18, 891),
(18, 892),
(18, 893),
(18, 894),
(18, 895),
(18, 896),
(18, 897),
(18, 898),
(18, 899),
(18, 900),
(18, 901),
(18, 902),
(18, 903),
(19, 904),
(19, 905),
(19, 906),
(19, 907),
(19, 908),
(19, 909),
(19, 910),
(19, 911),
(19, 912),
(19, 913),
(19, 914),
(19, 915),
(19, 916),
(19, 917),
(19, 918),
(19, 919),
(19, 920),
(19, 921),
(19, 922),
(19, 923),
(19, 924),
(19, 925),
(19, 926),
(19, 927),
(19, 928),
(19, 929),
(19, 930),
(19, 931),
(19, 932),
(19, 933),
(20, 959),
(20, 960),
(20, 961),
(20, 962),
(20, 963),
(20, 964),
(20, 965),
(20, 966),
(20, 967),
(20, 968),
(20, 969),
(20, 970),
(20, 971),
(20, 972),
(20, 973),
(20, 974),
(20, 975),
(20, 976),
(20, 977),
(20, 978),
(20, 979),
(20, 980),
(20, 981),
(20, 982),
(20, 983),
(20, 984),
(20, 985),
(20, 986),
(20, 987),
(20, 988),
(20, 989),
(20, 990),
(20, 991),
(20, 992),
(20, 993),
(20, 994),
(20, 995),
(20, 996),
(20, 997),
(20, 998),
(20, 999),
(20, 1000),
(20, 1001),
(20, 1002),
(20, 1003),
(20, 1004),
(20, 1005),
(20, 1006),
(20, 1007),
(20, 1008),
(20, 1009),
(20, 1010),
(20, 1011),
(20, 1012),
(20, 1013),
(20, 1014),
(20, 1015),
(20, 1016),
(20, 1017),
(20, 1018),
(20, 1019),
(20, 1020),
(20, 1021),
(20, 1022),
(20, 1023),
(20, 1024),
(20, 1025),
(20, 1026),
(20, 1027),
(20, 1028),
(20, 1029),
(20, 1030),
(20, 1031),
(20, 1032),
(20, 1033),
(20, 1034),
(20, 1035),
(20, 1036),
(20, 1037),
(20, 1038),
(20, 1039),
(20, 1040),
(20, 1041),
(20, 1042),
(20, 1043),
(21, 934),
(21, 935),
(21, 936),
(21, 937),
(21, 938),
(21, 939),
(21, 940),
(21, 941),
(21, 942),
(21, 943),
(21, 944),
(21, 945),
(21, 946),
(21, 947),
(21, 948),
(21, 949),
(21, 950),
(21, 951),
(21, 952),
(21, 953),
(21, 954),
(21, 955),
(21, 956),
(21, 957),
(21, 958);

-- --------------------------------------------------------

--
-- Table structure for table `lexik_translation_file`
--

CREATE TABLE `lexik_translation_file` (
  `id` int(11) NOT NULL,
  `domain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `extention` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lexik_trans_unit`
--

CREATE TABLE `lexik_trans_unit` (
  `id` int(11) NOT NULL,
  `key_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `domain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lexik_trans_unit_translations`
--

CREATE TABLE `lexik_trans_unit_translations` (
  `id` int(11) NOT NULL,
  `file_id` int(11) DEFAULT NULL,
  `trans_unit_id` int(11) DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `modified_manually` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message_category`
--

CREATE TABLE `message_category` (
  `id` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` date DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message_list`
--

CREATE TABLE `message_list` (
  `id` int(11) NOT NULL,
  `gain_framed_messages` longtext COLLATE utf8_unicode_ci,
  `loss_framed_messages` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `messagetype_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message_list`
--

INSERT INTO `message_list` (`id`, `gain_framed_messages`, `loss_framed_messages`, `description`, `name`, `messagetype_id`) VALUES
(2, 'Balanced Diet\r\nEating a balanced diet with high of whole grains, vegetables, fruits, low fat dairy, and lean protein to remains healthy, have a healthy baby and attain an average baby’s weight at birth.', 'Balanced Diet\r\nIf you don’t eat a balanced diet with high of whole grains, vegetables, fruits, low fat dairy, and lean protein, your chance of illness and having ill baby will increase, and you will not attain an average baby’s birth weight.', 'Balanced Diet or not Balanced Diet', 'Nutrition 01', 27),
(3, 'Iron-Folic Acid \r\nIf you are taking daily Iron and folic acid supplementation you are preventing anemia, puerperal sepsis, low birth weight, and preterm birth.  You will also get iron as you eat red meat, liver, poultry, fish, beans and peas, iron-fortified cereals.', 'Iron-Folic Acid\r\nIf you are not taking daily Iron and folic acid supplementation, you are failing to prevent anemia, puerperal sepsis, low birth weight, and preterm birth.  You will not get iron if you are not eating red meat, liver, poultry, fish, beans and peas, iron-fortified cereals', 'Iron-Folic Acid or not Iron-Folic Acid', 'Nutrition 02', 27),
(4, 'Optimal maternal extra meal \r\nPregnant women who eat one extra mouthfuls of food at each meal will have more resistance against diseases, healthy baby, reduced risk of having stillbirths, low-birth-weight and small-for-gestational-age neonates.', 'Optimal maternal extra meal\r\nPregnant women who don’t eat one extra mouthfuls of food at each meal will have less resistance against diseases, ill baby, increased risk of having stillbirths, low-birth-weight and small-for-gestational-age neonates.', 'Optimal maternal extra meal or not Optimal maternal extra meal', 'Nutrition 03', 27),
(5, 'Animal source feeding \r\nEat meat, fish, eggs, poultry, milk, yoghurt so your baby will grow well, healthy and you will have good pregnancy outcome', 'Animal source feeding \r\nIf you fail to consume meat, fish, eggs, poultry, milk and yoghurt, your baby will not grow well, become ill and you may not have good pregnancy outcome.', 'Animal source feeding or not Animal source feeding', 'Nutrition 04', 27),
(6, 'Iodine consumption \r\nIf you consume iodized salt in your food, your baby\'s brain will develop well.', 'Iodine consumption \r\nIf you do not consume iodized salt in your food, your baby\'s brain may not develop well.', 'Iodine consumption or not Iodine consumption', 'Nutrition 05', 27),
(7, 'Calcium Supplementation\r\nTaking calcium supplement helps your baby\'s bones and teeth grow strong.  If you drink milk and eat dried figs, naan bread, beans or vegetables you will get plenty of calcium.', 'Calcium Supplementation\r\nNot taking calcium supplement may risk your baby\'s bones and teeth to grow strong.  If you don’t drink milk and eat dried figs, naan bread, beans or vegetables you will not get calcium.', 'Calcium Supplementation or not Calcium Supplementation', 'Nutrition 06', 27),
(8, 'Consumption of biofortified food\r\nAs you consume biofortified food like orange flesh sweet potato, iron rich beans, quality protein maize are taking the advantages for growth of your baby and your pregnancy outcome', 'Consumption of biofortified food\r\nWhen you are not consuming biofortified food like orange flesh sweet potato, iron rich beans, quality protein maize, you are failing to take the advantages for growth of your baby and your pregnancy outcome', 'Consumption of biofortified food or not Consumption of biofortified food', 'Nutrition 07', 27),
(9, 'Alcohol\r\nIf you avoid alcohol, you will prevent occurrence birth defects, low intelligence and behavioral or learning disabilities to your baby.', 'Alcohol\r\nAlcohol intake may increase the chance of occurrence of birth defects, low intelligence and behavioral or learning disabilities to your baby.', 'Alcohol or not Alcohol', 'Lifestyle Modification 01', 28),
(10, 'Smoking \r\nAvoiding smoking and smoking place will help you healthy and prevents occurrence of birth defects, stillbirth, preterm births and infants’ death.', 'Smoking\r\nSmoking and being in smoking place will increase your illness and occurrence of birth defects, stillbirth, preterm births and infants’ death.', 'Smoking or bad Smoking', 'Lifestyle Modification 02', 28),
(11, 'Consuming raw meat\r\nAvoid eating raw meat to prevent your risk of getting toxoplasmosis, tapeworm, schistosomiasis.', 'Consuming raw meat\r\nConsuming raw meat will not only increase the risk of toxoplasmosis, tapeworm, schistosomiasis, but also of suffering their consequence.', 'Consuming raw meat or bad Consuming raw meat', 'Lifestyle Modification 03', 28),
(12, 'Consuming unwashed food\r\nAvoid unwashed vegetables and fruit, raw milk, processed/packed food for your health and your baby', 'Consuming unwashed food\r\nConsuming unwashed vegetables and fruit, raw milk, processed/packed food can make you ill.', 'Consuming unwashed food or bad Consuming unwashed food', 'Lifestyle Modification 04', 28),
(13, 'Avoid use of excess caffeine\r\nConsumption of less than 3 cups coffee per will decrease your risk of pregnancy loss and having baby with low birth weight.', 'Avoid use of excess caffeine\r\nConsumption of more than 3 cups coffee per day will increase your risk of pregnancy loss and having baby with low birth weight.', 'Avoid use of excess caffeine or bad Avoid use of excess caffeine', 'Lifestyle Modification 05', 28),
(14, 'Physical activity \r\nWhen you engage in regular exercise, you are taking advantage of a safe and effective way to reduce your risk of excessive gestational weight gain, gestational diabetes, preeclampsia, preterm birth, varicose veins, and deep vein thrombosis.', 'Physical activity \r\nWhen you do not engage in regular exercise, you fail to take advantage of reducing your risk of excessive gestational weight gain and gestational diabetes, preeclampsia, preterm birth, varicose veins, and deep vein thrombosis.', 'Physical activity or bad Physical activity', 'Lifestyle Modification 06', 28),
(15, 'Regular personal hygiene\r\nWashing your hands with soap before you prepare meals, after using the toilet and after handling animals protects you from infection', 'Regular personal hygiene\r\nIf you do not wash your hands with soap before you prepare meals, after using the toilet and after handling animals, you will have an infection', 'Regular personal hygiene or bad Regular personal hygiene', 'Lifestyle Modification 07', 28),
(16, 'Consuming raw egg\r\nAvoiding eating raw egg to reduce your risk of getting salmonella food poisoning during your pregnancy.', 'Consuming raw egg\r\nConsuming raw egg will increase you risk of getting salmonella food poisoning during your pregnancy.', 'Consuming raw egg or bad Consuming raw egg', 'Lifestyle Modification 08', 28),
(17, 'Convulsions and/or loss of consciousness\r\nIf you go to health facility as you experience blurred vision, convulsions and loss of consciousness which are associated with hypertension, you will be able to take\r\nadvantage of preventing premature delivery and perinatal death.', 'Convulsions and/or loss of consciousness\r\nIf you don’t go to health facility as you experience blurred vision, convulsions and loss of consciousness which are associated with hypertension, you won’t be able to take advantage of preventing premature delivery and perinatal death.', 'Convulsions and/or loss of consciousness', 'Danger Sign 01', 29),
(18, 'Sustained nausea and vomiting\r\nIf you go to health facility as result of moderate and severe nausea and vomiting, you would be in good position to get early treatment', 'Sustained nausea and vomiting\r\nIf you don’t go to health facility as result of moderate and severe nausea and vomiting, you would not be in good position to get early treatment', 'Sustained nausea and vomiting or bad Sustained nausea and vomiting', 'Danger Sign 02', 29),
(19, 'Offensive vaginal discharge\r\nIf you go to health facility as result of vaginal discharge with change in color and odor, redness, itching, and vulval swelling, you would be in good position to get early treatment and you could lower your chances for getting obstetric and perinatal complications.', 'Offensive vaginal discharge\r\nIf you don’t go to health facility as result of vaginal discharge with change in color and odor, redness, itching, and vulval swelling, you would not be in good position to get early treatment and you could increase your chances for getting obstetric and perinatal complications.', 'Offensive vaginal discharge', 'Danger Sign 03', 29),
(20, 'Decreased or loss of fetal movement\r\nIf you contact health worker when you notice decreased lost fetal movement which is bad sign, you can learn what is abnormal and get early treatment', 'Decreased or loss of fetal movement\r\nIf you don’t contact health worker when you notice decreased or lost fetal movement which is bad sign, you cannot learn what is abnormal and do not get early treatment', 'Decreased or loss of fetal movement', 'Danger Sign 04', 29),
(21, 'Fever\r\nHigh fever, shaking and feeling sick which are indications for infection. If you decide to go to health facility, you will get management so the infection cannot affect you and your baby.', 'Fever\r\nHigh fever, shaking and feeling sick which are indications for infection. If you don’t decide to go to health facility, you will not get any treatment and the infection can affect you and your baby.', 'Fever', 'Danger Sign 05', 29),
(22, 'Severe headache\r\nIf you have severe headache which is not responding to analgesics, by going to health facility, you can get thorough investigation and treatment as it may be symptom for an underling disorder.', 'Severe headache  \r\nIf you have severe headache which is not responding to analgesics and not going to health facility, you cannot get thorough investigation and treatment for an underling disorder.', 'Severe headache', 'Danger Sign 06', 29),
(23, 'Dizziness and blurring of vision\r\nIn every pregnancy, there is a chance of experiencing dizziness, blurred vision, vaginal bleeding and abdominal pain. By going to health facility, you can take an advantage of getting treatment and become healthy.', 'Dizziness and blurring of vision\r\nIn every pregnancy, there is a chance of experiencing dizziness, blurred vision, vaginal bleeding and abdominal pain. By not going to health facility, you cannot take an advantage of getting treatment and become healthy', 'Dizziness and blurring of vision', 'Danger Sign 07', 29),
(24, 'Vaginal bleeding in pregnancy\r\nBy going to health facility immediately after experiencing any vaginal bleeding, you can get immediate treatment so that you will save yours and your baby’s life.', 'Vaginal bleeding in pregnancy\r\nBy not going to health facility immediately after experiencing any vaginal bleeding, you cannot get immediate treatment so that you will cost yours and your baby’s life.', 'Vaginal bleeding in pregnancy', 'Danger Sign 08', 29),
(25, 'Constipation\r\nDrink plenty of water and eat wholegrain (maize, rice, oats; barley) foods, fruit, and vegetables to have an adequate intake of dietary fibres and to keep your stools soft if you experience constipation.', 'Constipation\r\nIf you don’t drink plenty of water and eat maize, rice, oats; barley) foods, fruit, and vegetables so that you will not have adequate intake of fiber and your stools will not be soft when you experience constipation.', 'Constipation', 'Danger Sign 09', 29),
(26, 'Sudden gush of fluid or leaking of fluid per vagina\r\nSudden gush of fluid or leaking of fluid per vagina means the bag of waters your baby is in breaks and immediately going to health facility will decrease your baby’s risk of infection so that you save the your and your baby’s life.', 'Sudden gush of fluid or leaking of fluid per vagina\r\nSudden gush of fluid or leaking of fluid per vagina means the bag of waters your baby is in breaks and failing to immediately going to health facility will increase yours and your baby’s risk of infection so that it will cost the your and your baby’s life.', 'Sudden gush of fluid or leaking of fluid per vagina', 'Danger Sign 10', 29),
(27, 'Swelling (hand, feet and face)\r\nIf you to health facility immediately as you realize you have sudden swelling of hand, face and feet; and headaches, your problem will early be recognized and treated timely so that you will save your life.', 'Swelling (hand, feet and face)\r\nIf you don’t to health facility immediately as you realize you have sudden swelling of hand, face and feet; and headaches, your problem will not early be recognized and not treated timely so that you will cost your life.', 'Swelling (hand, feet and face)', 'Danger Sign 11', 29),
(28, 'Premature onset of contractions/pushing down pain \r\nBy going to health facility if you have six or more uterine contractions in one hour, any leaking of fluid from your private area and severe abdominal pain before 37 weeks of gestational age, you will save yours and your baby’s life.', 'Premature onset of contractions/pushing down pain \r\nBy not going to health facility if you have six or more uterine contractions in one hour, any leaking of fluid from your private area, severe abdominal pain before 37 weeks of gestational age, you will fail to save yours and your baby’s life.', 'Premature onset of contractions/pushing down pain', 'Danger Sign 12', 29),
(29, 'Skilled attendance\r\nIf you have a skilled birth attendant during your child birth, you will help with delivery the baby and placenta safely and can get help for stopping you bleeding too much so that you can save your and your baby’s life.', 'Skilled attendance\r\nIf you don’t have a skilled birth attendant during your child birth, you will not get help with delivery of the baby and placenta safely and cannot get help for stopping your bleeding too much so that you can cost your and your baby’s life.', 'Skilled attendance', 'Birth Preparedness 01', 30),
(30, 'Institutional delivery\r\nIn every pregnancy, there is a chance that a woman will have complications while giving birth. If you plan to give birth at health facility, you will take advantage of getting management for such complications and prevent its life-threatening consequences', 'Institutional delivery\r\nIn every pregnancy, there is a chance that a woman will have complications while giving birth. If you don’t plan to give birth at health facility, you won’t be able to take advantage of getting management for such complications and fail to prevent its life-threatening consequences', 'Institutional delivery', 'Birth Preparedness 02', 30),
(31, 'Maternity waiting home\r\nOne of the greatest advantages of staying in the maternity waiting home is accessing obstetric care during emergency situations and it results with good pregnancy outcome', 'Maternity waiting home\r\nOne of the greatest disadvantages of not staying in the maternity waiting home is failing to access obstetric care during emergency situations and it results with bad pregnancy outcome', 'Maternity waiting home', 'Birth Preparedness 03', NULL),
(32, 'Preparing essential items for child-birth 01\r\nIf you make 2 cloths ready (1 to dry the baby and 1 to wrap him/her after birth), you can keep the baby warm and prevent his/her from illness.', 'Preparing essential items for child-birth \r\nIf you don’t make 2 cloths ready (1 to dry the baby and 1 to wrap him/her after birth), you can’t keep the baby warm and prevent his/her from illness.', 'Preparing essential items for child-birth', 'Birth Preparedness 04', 30),
(33, 'Saving money\r\nIf you and your family start saving money a little bit every day, you will have extra money and you can use it for emergency transportation to health facility and during child birth so that you will yours and your baby’s life.', 'Saving money\r\nIf you and your family don’t start saving money a little bit every day, you won’t have extra money and you cannot use it for emergency transportation to health facility and during child birth so that it will costs your and your baby’s life', 'Saving money', 'Birth Preparedness 05', 30),
(34, 'Preparing essential items for child-birth 02\r\nBy having hat or small cloth ready to cover the head of your new baby, you will take advantage of keeping your baby warm so that he/she will be healthy.', 'Making items ready\r\nBy failing to have hat or small cloth ready to cover the head of your new baby, you won’t take advantage of keeping your baby warm so that he/she will become ill.', 'Making items ready', 'Birth Preparedness 06', 30),
(35, 'Transportation \r\nIf you find out the fastest way to reach health facility, get ambulance or other transportation service phone number so early, you could raise yours and your baby’s chances for surviving in case of emergency.', 'Transportation \r\nIf you don’t find out the fastest way to reach health facility, don’t get ambulance or other transportation service phone number so early, you could lower yours and your baby’s chances for surviving in case of emergency.', 'Transportation', 'Complication Readiness 01', 31),
(36, 'Identifying blood group\r\nWith early knowing of your blood type and relatives who have the same blood group who can donate blood if you need, you could raise your chances for surviving from problem that happen due to blood loss during child birth.', 'Identifying blood group\r\nWith not early knowing of your blood type and relatives who have the same blood group who can donate blood if you need, you could lower your chances for surviving from problem that happen due to blood loss during child birth.', 'Identifying blood group', 'Complication Readiness 02', 31),
(37, 'Designating a decision maker\r\nBy designating a decision maker early on your behalf including giving consent when you are unable to do that, you can save yours and your baby’s life in case of emergency.', 'Designating a decision maker\r\nBy failing to designate a decision maker early on your behalf including giving consent when you unable to do that, you can cost yours and your baby’s life in case of emergency.', 'Designating a decision maker', 'Complication Readiness 03', 31),
(38, 'Early initiation \r\nChoosing to put your new baby to the breast in the first hour he/she is born will in increases a baby’s protection from many diseases and illnesses.', 'Early initiation \r\nChoosing not to put your new baby to the breast in the first hour he/she born will lowers a baby’s protection from many diseases and illnesses.', 'Early initiation', 'Breastfeeding Practices 01', 32),
(39, 'Feeding colostrum\r\nGiving a creamy first milk will provide your baby with high amount of nutrient and boost immune system of your baby so that your baby will be protected from many disease', 'Feeding colostrum\r\nIf you failing to give your baby a creamy first milk, your baby will not get high amount of nutrient and immune system of your baby will not be boosted so that your baby will not be protected from many disease', 'Feeding colostrum', 'Breastfeeding Practices 02', 32),
(40, 'Importance of breastfeeding \r\nChoosing to breastfeed your baby is taking advantage of having perfect mix of vitamins, protein, and fat so that your baby will be protected from many diseases and illnesses.', 'Importance of breastfeeding \r\nChoosing not to breastfeed your baby is failing to taking advantage of having perfect mix of vitamins, protein, and fat so that your baby won’t be protected from many diseases and illnesses', 'Importance of breastfeeding', 'Breastfeeding Practices 03', 32),
(41, 'Exclusive breast feeding\r\nIf you give only breast milk to you baby for the first 6 months, your baby will have fewer infections, respiratory illnesses, and diarrhea so that he/she will have fewer hospitalizations', 'Exclusive breast feeding\r\nIf you don’t give only breast milk to you baby for the first 6 months, your baby will have higher infections, respiratory illnesses, and diarrhea so that he/she will have higher hospitalizations', 'Exclusive breast feeding', 'Birth Preparedness 04', 32),
(42, 'Importance of family planning 01 \r\nUsing modern contraceptives can let you and your partner feel stress free and enjoy your life because you know you are safe from becoming pregnant again until you are ready.', 'Importance of family planning 01 \r\nFailing to use modern contraceptives can let you and your partner feel stressed and not enjoy your life because you know you are not safe from becoming pregnant again until you are ready.', 'Importance of family planning 01', 'Family Planning 01', 33),
(43, 'Importance of family planning 02 \r\nIf you are sexually active and using contraceptive method, you can prevent becoming pregnant which can happen as early as 4 weeks after delivery.', 'Importance of family planning 02 \r\nIf you are sexually active and not using contraceptive method, you cannot prevent becoming pregnant which can happen as early as 4 weeks after delivery.', 'Importance of family planning', 'Family Planning 02', 33),
(44, 'Contraceptive options\r\nInjectable, pills, implant, IUD, condom, male and female sterilization available contraceptive options. Choosing to use any of these methods after delivery, you can have space between your pregnancy.', 'Injectable, pills, implant, IUD, condom, male and female sterilization available contraceptive options. If you fail to choosing to use any of these methods after delivery, you cannot have space between your pregnancy.', 'Contraceptive options', 'Family Planning 03', 33),
(45, 'Spacing for maternal and child health\r\nThe greatest advantage of waiting at least 2-3 years between pregnancies by using family planning method is increasing the chance of becoming healthier and having healthy child.', 'Spacing for maternal and child health\r\nThe greatest disadvantage of waiting at least 2-3 years between pregnancies by using family planning method is decreasing the chance of becoming healthier and having healthy child.', 'Spacing for maternal and child health', 'Family Planning 04', 33),
(46, 'Cord care\r\nIf you sponge the cord with clean water, leave it uncovered to dry and put nothing on it, you will prevent cord infection which make your baby very ill.', 'Cord care\r\nIf you don’t sponge the cord with clean water, covered it and put anything on it, you will not prevent cord infection which make your baby very ill.', 'Cord care', 'NewBorn Care 01', 34),
(47, 'Baby bath\r\nBy avoiding bathing your baby for the first 24 hours his/her life, wrapping up him/her and covering head well, you will take an advantage of keeping your baby healthy.', 'Baby bath\r\nBy bathing your baby for the first 24 hours his/her life, not wrapping up and covering head him/her well, you will not take an advantage of keeping your baby healthy.', 'Baby bath', 'NewBorn Care 02', 34),
(48, 'Skin to Skin contact\r\nBy putting your baby on your bare chest under a blanket, you can effectively keep your warmed and be healthy.', 'Skin to Skin contact\r\nBy not putting your baby on your bare chest under a blanket, you cannot effectively keep your warmed and be healthy.', 'Skin to Skin contact', 'NewBorn Care 03', 34),
(49, 'Newborn Danger sign 01\r\nIf you take your baby to health facility immediately when you see his/her eyes, palms and feet turn yellow, your baby will be treated in timely manner so that you will save your baby’s life.', 'Newborn Danger sign 01\r\nIf you don’t take your baby to health facility immediately as you see his/her eyes, palms and feet turn yellow, your baby will not be treated in timely manner so that you will cost your baby’s life.', 'Newborn Danger sign 01', 'NewBorn Care 04', 34),
(50, 'Newborn Danger sign 02\r\nIf you take your baby to health facility immediately as you realize your baby is having trouble breathing or feeding, is too hot or cold, or doesn\'t respond, your baby’s problem will early recognized and treated in a timely manner so that you will save your baby’s life.', 'Newborn Danger sign 01\r\nIf you don’t take your baby to health facility immediately as you realize your baby is having trouble breathing or feeding, is too hot or cold, or doesn\'t respond, your baby’s problem will not early recognized and treated in a timely manner so that you will cost your baby’s life.', 'Newborn Danger sign 02 or and 01', 'NewBorn Care 05', 34),
(51, 'Importance of Child Immunization\r\nBy vaccinating your child according to a schedule, you will be able to protect your child against contracting many diseases and take advantage of a safe and lifelong immunization of your baby.', 'Importance of Child Immunization\r\nBy not vaccinating your child according to a schedule, you will not protect your child against contracting many diseases and will fail to take advantage of a safe and lifelong immunization of your baby', 'Importance of Child Immunization', 'Child Immunization 01', 35),
(52, 'Child Immunization- polio\r\nGetting the first dose of polio vaccines protect your baby from getting polio and will continue to protect your baby from Polio virus up after taking it as soon as he/she is born.', 'Child Immunization\r\nSkipping the first dose of vaccine against polio at birth will increases the chance of your baby infection by polio virus which cause physical disability', 'Child Immunization- polio vs Child Immunization', 'Child Immunization 02', 35),
(53, 'Child Immunization - TB\r\nGetting vaccine against TB at birth protects your baby from getting TB and will continue to protect your baby from TB infections for lifelong after taking it as soon as he/she is born.', 'Child Immunization\r\nFailing to make sure your baby got vaccination against TB will increases the risk that your baby become sick due to TB infection.', 'Child Immunization - TB vs Child Immunization', 'Child Immunization 03', 35),
(54, 'Laboring sign 01\r\nRegular, strong contractions and jelly-like substance on your underwear are a sign of labor. If you go to health facility immediately as you feel them, you will take advantage of having safe delivery and reduced birth complication so that save yours and your baby’s life,', 'Laboring sign 01\r\nRegular, strong contractions, and jelly-like substance on your underwear are a sign of labor. If you do not go to health facility immediately as you feel them, you will not take advantage of having safe delivery and reduced birth complication so that cost yours and your baby’s life,', 'Laboring sign 01', 'Laboring 01', 36),
(55, 'Laboring sign 02\r\nLow back pain is a sign that the baby is low down, ready to get born. By going to health facility on time, you will have better pregnancy outcome.', 'Laboring sign 02\r\nLow back pain is a sign that the baby is low down, ready to get born. By fail to go to health facility on time, you will have bad pregnancy outcome.', 'Laboring sign 02', 'Laboring 02', 36),
(56, 'Sign and symptom of PPH\r\nSudden and profuse blood loss or increased blood loss, faintness, dizziness, tachycardia are danger signs after child birth. If you go to health facility immediately, you will be treated in a timely manner so that you save your life.', 'Sign and symptom of PPH\r\nSudden and profuse blood loss or increased blood loss, faintness, dizziness, tachycardia are danger signs after child birth. If you do not go to health facility immediately, you will not be treated timely so that you cost your life.', 'Sign and symptom of PPH', 'PNC - Signs and symptoms', 37),
(57, 'Signs and symptoms of pre-eclampsia/eclampsia \r\nOne of the greatest advantages of going to health facility when there is headaches with visual disturbances, nausea, vomiting, epigastric or hypochondrial pain, feeling faint, convulsions after birth, is saving oneself.', 'Signs & symptoms of pre-eclampsia/eclampsia\r\nOne of the greatest disadvantages of not going to health facility when there is headaches with visual disturbances, nausea, vomiting, epigastric or hypochondrial pain, feeling faint, convulsions after birth, is failing to saving oneself.', 'Signs and symptoms of pre-eclampsia/eclampsia', 'PNC - Signs and symptoms', 37),
(58, 'Signs and symptoms of infection \r\nIf you go to health facility when experience fever, shivering, abdominal pain and offensive vaginal loss after birth, you will get a treatment for infection and become healthy.', 'Signs and symptoms of infection\r\nIf you don’t go to health facility when you experience fever, shivering, abdominal pain and/or offensive vaginal loss after birth, you will not get a treatment and will not be healthy.', 'Signs and symptoms of infection', 'PNC - Signs and symptoms', 37),
(59, 'Signs and symptoms of thromboembolism \r\nUnilateral calf pain, redness or swelling of calves, shortness of breath or chest pain are signs of thromboembolism. Going to health facility immediately will be lifesaving.', 'Signs and symptoms of thromboembolism\r\nUnilateral calf pain, redness or swelling of calves, shortness of breath or chest pain are signs of thromboembolism. Failing to go to health facility immediately will be life threatening.', 'Signs and symptoms of thromboembolism', 'PNC - Signs and symptoms', 37),
(60, 'Hygiene\r\nIf you wash your hands with soap before you prepare meals, after using the toilet and after handling animals, you and your baby will be protected from infection', 'Hygiene\r\nIf you do not wash your hands with soap before you prepare meals, after using the toilet and after handling animals, you and your baby will have an infection', 'Hygiene', 'PNC - Hygiene', 37),
(61, 'PNC Nutrition \r\nThe greatest advantage of eating two extra food at each meal during breast feeding is to become more resistance against diseases, have healthy baby and get lost nutrients through breastmilk.', 'PNC Nutrition \r\nThe greatest disadvantage of not eating two extra foods at each meal during breastfeeding is not to become more resistance against diseases, failing to have healthy baby and not get lost nutrients through breastmilk.', 'PNC Nutrition', 'PNC – Nutrition', 37),
(62, 'You are welcome to ……… project which is\r\nimplemented by Jimma University. The intervention is aimed at improving maternal and newborn health in Jimma. We shall provide you with regular pregnancy related SMS to offer you essential knowledge about antenatal and postnatal care services, your health and that of your growing baby and also your upcoming clinic contact reminders to your phone.', 'You are welcome to ……… project which is implemented by Jimma University. The intervention is aimed at improving maternal and newborn health in Jimma. We shall provide you with regular pregnancy related SMS to offer you essential knowledge about antenatal and postnatal care services, your health and that of your growing baby and also your upcoming clinic contact reminders to your phone.', 'You are welcome to ……… project which is', 'Welcoming message', 38),
(63, 'Adherence to ANC schedule\r\nFor normal pregnancy, experts recommend 8 antenatal contacts. If you follow recommended and regular antenatal care visits, you and your baby will be best protected', 'Adherence to ANC schedule\r\nFor normal pregnancy, experts recommend 8 antenatal contacts. If you do not follow recommended and regular, antenatal care visits, you and your baby will not be best protected.', 'Adherence to ANC schedule', 'ANC schedule', 38),
(64, 'Cervical cancer screening\r\nIf you continue getting regular cervical cancer screening after giving birth, you can detect cervical cancer early and detecting cervical cancer early can save your life', 'Cervical cancer screening\r\nIf you don’t continue to get regular cervical cancer screening after giving birth, you can’t detect cervical cancer early and not detecting cervical cancer early can cost your life', 'Cervical cancer screening', 'Cervical Cancer', 38);

-- --------------------------------------------------------

--
-- Table structure for table `message_type`
--

CREATE TABLE `message_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message_type`
--

INSERT INTO `message_type` (`id`, `name`, `description`) VALUES
(27, 'Nutrition', 'Nutrition'),
(28, 'Lifestyle Modification', 'Lifestyle modification'),
(29, 'Danger Sign Messages', 'Danger sign Messages'),
(30, 'Birth Preparedness and Complication Readiness (starting from 30 week)', 'Birth preparedness and complication readiness (starting from 30 week)'),
(31, 'Complication', 'Complication'),
(32, 'Breastfeeding Practices Messages', 'Breastfeeding practices messages'),
(33, 'Family Planning', 'Family planning'),
(34, 'NewBorn Care', 'Newborn care'),
(35, 'Child Immunization', 'Child Immunization'),
(36, 'Laboring', 'Laboring'),
(37, 'PostNatal Care', 'Postnatal care'),
(38, 'Other messages', 'Other messages');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` int(11) NOT NULL,
  `parent_office_id` int(11) DEFAULT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` date DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `parent_office_id`, `created_by_id`, `updated_by_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(9, NULL, NULL, NULL, 'Jimma Zone', 'jimma zone', '2022-09-20', '2022-09-20 18:59:32'),
(10, NULL, NULL, NULL, 'Agaro', 'Agaro', '2022-09-20', '2022-09-20 18:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `oroconst_mail`
--

CREATE TABLE `oroconst_mail` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `replied_to_id` int(11) DEFAULT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `mail_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail_subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail_body` longtext COLLATE utf8_unicode_ci,
  `mail_date_gregorian` datetime NOT NULL,
  `mail_date_ethiopian` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail_tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_draft` tinyint(1) DEFAULT NULL,
  `is_sent` tinyint(1) DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` date DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `created_by_id`, `updated_by_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(787, NULL, NULL, 'LIST_OFFICE', 'Diplay list Office', '2022-09-20', '2022-09-20 18:59:31'),
(788, NULL, NULL, 'CREATE_OFFICE', 'Create new Office', '2022-09-20', '2022-09-20 18:59:31'),
(789, NULL, NULL, 'VIEW_OFFICE', 'Show detail information of Office', '2022-09-20', '2022-09-20 18:59:31'),
(790, NULL, NULL, 'EDIT_OFFICE', 'Modify an existing of office', '2022-09-20', '2022-09-20 18:59:31'),
(791, NULL, NULL, 'DELETE_OFFICE', 'Remove an existing Office', '2022-09-20', '2022-09-20 18:59:31'),
(792, NULL, NULL, 'LIST_LOG', NULL, '2022-09-20', '2022-09-20 18:59:31'),
(793, NULL, NULL, 'VIEW_LOG', NULL, '2022-09-20', '2022-09-20 18:59:31'),
(794, NULL, NULL, 'LIST_CLIENT', 'Display list of CLIENT.', '2022-09-20', '2022-09-20 18:59:31'),
(795, NULL, NULL, 'CREATE_CLIENT', 'Create new CLIENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(796, NULL, NULL, 'VIEW_CLIENT', 'Show detail information of CLIENT.', '2022-09-20', '2022-09-20 18:59:31'),
(797, NULL, NULL, 'EDIT_CLIENT', 'Modify an existing CLIENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(798, NULL, NULL, 'DELETE_CLIENT', 'Remove CLIENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(799, NULL, NULL, 'LIST_GAURANTEE_TYPE', 'Display list of GAURANTEE_TYPE.', '2022-09-20', '2022-09-20 18:59:31'),
(800, NULL, NULL, 'CREATE_GAURANTEE_TYPE', 'Create new GAURANTEE_TYPE record.', '2022-09-20', '2022-09-20 18:59:31'),
(801, NULL, NULL, 'VIEW_GAURANTEE_TYPE', 'Show detail information of GAURANTEE_TYPE.', '2022-09-20', '2022-09-20 18:59:31'),
(802, NULL, NULL, 'EDIT_GAURANTEE_TYPE', 'Modify an existing GAURANTEE_TYPE record.', '2022-09-20', '2022-09-20 18:59:31'),
(803, NULL, NULL, 'DELETE_GAURANTEE_TYPE', 'Remove GAURANTEE_TYPE record.', '2022-09-20', '2022-09-20 18:59:31'),
(804, NULL, NULL, 'LIST_GROUP', 'Display list of group', '2022-09-20', '2022-09-20 18:59:31'),
(805, NULL, NULL, 'CREATE_GROUP', 'Create new Group', '2022-09-20', '2022-09-20 18:59:31'),
(806, NULL, NULL, 'EDIT_GROUP', 'Modify an exist Group', '2022-09-20', '2022-09-20 18:59:31'),
(807, NULL, NULL, 'DELETE_GROUP', 'Remove an existing of group', '2022-09-20', '2022-09-20 18:59:31'),
(808, NULL, NULL, 'VIEW_GROUP', 'Show Detail information of existing group', '2022-09-20', '2022-09-20 18:59:31'),
(809, NULL, NULL, 'LIST_PERMISSION', 'Display list of Permission', '2022-09-20', '2022-09-20 18:59:31'),
(810, NULL, NULL, 'CREATE_PERMISSION', 'Create new Permission', '2022-09-20', '2022-09-20 18:59:31'),
(811, NULL, NULL, 'VIEW_PERMISSION', 'Show Detail information of Permission', '2022-09-20', '2022-09-20 18:59:31'),
(812, NULL, NULL, 'EDIT_PERMISSION', 'Modify an existing permission', '2022-09-20', '2022-09-20 18:59:31'),
(813, NULL, NULL, 'DELETE_PERMISSION', 'Remove an existing of permission', '2022-09-20', '2022-09-20 18:59:31'),
(814, NULL, NULL, 'LIST_USER', 'Display list User ', '2022-09-20', '2022-09-20 18:59:31'),
(815, NULL, NULL, 'CREATE_USER', 'Create new User', '2022-09-20', '2022-09-20 18:59:31'),
(816, NULL, NULL, 'VIEW_USER', 'Show Detail information of User', '2022-09-20', '2022-09-20 18:59:31'),
(817, NULL, NULL, 'EDIT_USER', 'Modify an an existing of User', '2022-09-20', '2022-09-20 18:59:31'),
(818, NULL, NULL, 'DELETE_USER', 'Remove existing User', '2022-09-20', '2022-09-20 18:59:31'),
(819, NULL, NULL, 'LIST_WOREDA', 'Display list of WOREDA.', '2022-09-20', '2022-09-20 18:59:31'),
(820, NULL, NULL, 'CREATE_WOREDA', 'Create new WOREDA record.', '2022-09-20', '2022-09-20 18:59:31'),
(821, NULL, NULL, 'VIEW_WOREDA', 'Show detail information of WOREDA.', '2022-09-20', '2022-09-20 18:59:31'),
(822, NULL, NULL, 'EDIT_WOREDA', 'Modify an existing WOREDA record.', '2022-09-20', '2022-09-20 18:59:31'),
(823, NULL, NULL, 'DELETE_WOREDA', 'Remove WOREDA record.', '2022-09-20', '2022-09-20 18:59:31'),
(824, NULL, NULL, 'LIST_KETEMA_KEBELE', 'Display list of KETEMA_KEBELE.', '2022-09-20', '2022-09-20 18:59:31'),
(825, NULL, NULL, 'CREATE_KETEMA_KEBELE', 'Create new KETEMA_KEBELE record.', '2022-09-20', '2022-09-20 18:59:31'),
(826, NULL, NULL, 'VIEW_KETEMA_KEBELE', 'Show detail information of KETEMA_KEBELE.', '2022-09-20', '2022-09-20 18:59:31'),
(827, NULL, NULL, 'EDIT_KETEMA_KEBELE', 'Modify an existing KETEMA_KEBELE record.', '2022-09-20', '2022-09-20 18:59:31'),
(828, NULL, NULL, 'DELETE_KETEMA_KEBELE', 'Remove KETEMA_KEBELE record.', '2022-09-20', '2022-09-20 18:59:31'),
(829, NULL, NULL, 'LIST_PAYMENT_ROUND', 'Display list of PAYMENT_ROUND.', '2022-09-20', '2022-09-20 18:59:31'),
(830, NULL, NULL, 'CREATE_PAYMENT_ROUND', 'Create new PAYMENT_ROUND record.', '2022-09-20', '2022-09-20 18:59:31'),
(831, NULL, NULL, 'VIEW_PAYMENT_ROUND', 'Show detail information of PAYMENT_ROUND.', '2022-09-20', '2022-09-20 18:59:31'),
(832, NULL, NULL, 'EDIT_PAYMENT_ROUND', 'Modify an existing PAYMENT_ROUND record.', '2022-09-20', '2022-09-20 18:59:31'),
(833, NULL, NULL, 'DELETE_PAYMENT_ROUND', 'Remove PAYMENT_ROUND record.', '2022-09-20', '2022-09-20 18:59:31'),
(834, NULL, NULL, 'LIST_PROJECT_TYPE', 'Display list of PROJECT_TYPE.', '2022-09-20', '2022-09-20 18:59:31'),
(835, NULL, NULL, 'CREATE_PROJECT_TYPE', 'Create new PROJECT_TYPE record.', '2022-09-20', '2022-09-20 18:59:31'),
(836, NULL, NULL, 'VIEW_PROJECT_TYPE', 'Show detail information of PROJECT_TYPE.', '2022-09-20', '2022-09-20 18:59:31'),
(837, NULL, NULL, 'EDIT_PROJECT_TYPE', 'Modify an existing PROJECT_TYPE record.', '2022-09-20', '2022-09-20 18:59:31'),
(838, NULL, NULL, 'DELETE_PROJECT_TYPE', 'Remove PROJECT_TYPE record.', '2022-09-20', '2022-09-20 18:59:31'),
(839, NULL, NULL, 'LIST_SERVICE_PAYMENT', 'Display list of SERVICE_PAYMENT.', '2022-09-20', '2022-09-20 18:59:31'),
(840, NULL, NULL, 'CREATE_SERVICE_PAYMENT', 'Create new SERVICE_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(841, NULL, NULL, 'VIEW_SERVICE_PAYMENT', 'Show detail information of SERVICE_PAYMENT.', '2022-09-20', '2022-09-20 18:59:31'),
(842, NULL, NULL, 'EDIT_SERVICE_PAYMENT', 'Modify an existing SERVICE_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(843, NULL, NULL, 'DELETE_SERVICE_PAYMENT', 'Remove SERVICE_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(844, NULL, NULL, 'LIST_BUILDING_PROJECT', 'Display list of PROJECTS.', '2022-09-20', '2022-09-20 18:59:31'),
(845, NULL, NULL, 'CREATE_BUILDING_PROJECT', 'Create new PROJECT record.', '2022-09-20', '2022-09-20 18:59:31'),
(846, NULL, NULL, 'VIEW_BUILDING_PROJECT', 'Show detail information of PROJECT.', '2022-09-20', '2022-09-20 18:59:31'),
(847, NULL, NULL, 'EDIT_BUILDING_PROJECT', 'Modify an existing PROJECT record.', '2022-09-20', '2022-09-20 18:59:31'),
(848, NULL, NULL, 'DELETE_BUILDING_PROJECT', 'Remove PROJECT record.', '2022-09-20', '2022-09-20 18:59:31'),
(849, NULL, NULL, 'LIST_BUILDING_PAYMENT', 'Display list of BUILDING_PAYMENTS.', '2022-09-20', '2022-09-20 18:59:31'),
(850, NULL, NULL, 'CREATE_BUILDING_PAYMENT', 'Create new BUILDING_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(851, NULL, NULL, 'VIEW_BUILDING_PAYMENT', 'Show detail information of BUILDING_PAYMENT.', '2022-09-20', '2022-09-20 18:59:31'),
(852, NULL, NULL, 'EDIT_BUILDING_PAYMENT', 'Modify an existing BUILDING_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(853, NULL, NULL, 'DELETE_BUILDING_PAYMENT', 'Remove BUILDING_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(854, NULL, NULL, 'LIST_BUILDING_JOB_OPPORTUNITY', 'Display list of BUILDING_JOB_OPPORTUNITIES.', '2022-09-20', '2022-09-20 18:59:31'),
(855, NULL, NULL, 'CREATE_BUILDING_JOB_OPPORTUNITY', 'Create new BUILDING_JOB_OPPORTUNITY record.', '2022-09-20', '2022-09-20 18:59:31'),
(856, NULL, NULL, 'VIEW_BUILDING_JOB_OPPORTUNITY', 'Show detail information of BUILDING_JOB_OPPORTUNITY.', '2022-09-20', '2022-09-20 18:59:31'),
(857, NULL, NULL, 'EDIT_BUILDING_JOB_OPPORTUNITY', 'Modify an existing BUILDING_JOB_OPPORTUNITY record.', '2022-09-20', '2022-09-20 18:59:31'),
(858, NULL, NULL, 'DELETE_BUILDING_JOB_OPPORTUNITY', 'Remove BUILDING_JOB_OPPORTUNITY record.', '2022-09-20', '2022-09-20 18:59:31'),
(859, NULL, NULL, 'LIST_BUILDING_PROJECT_DESIGN', 'Display list of BUILDING_PROJECT_DESIGN.', '2022-09-20', '2022-09-20 18:59:31'),
(860, NULL, NULL, 'CREATE_BUILDING_PROJECT_DESIGN', 'Create new BUILDING_PROJECT_DESIGN record.', '2022-09-20', '2022-09-20 18:59:31'),
(861, NULL, NULL, 'VIEW_BUILDING_PROJECT_DESIGN', 'Show detail information of BUILDING_PROJECT_DESIGN.', '2022-09-20', '2022-09-20 18:59:31'),
(862, NULL, NULL, 'EDIT_BUILDING_PROJECT_DESIGN', 'Modify an existing BUILDING_PROJECT_DESIGN record.', '2022-09-20', '2022-09-20 18:59:31'),
(863, NULL, NULL, 'DELETE_BUILDING_PROJECT_DESIGN', 'Remove BUILDING_PROJECT_DESIGN record.', '2022-09-20', '2022-09-20 18:59:31'),
(864, NULL, NULL, 'LIST_BUILDIND_EXPERTS', 'Display list of BUILDIND_EXPERTS.', '2022-09-20', '2022-09-20 18:59:31'),
(865, NULL, NULL, 'CREATE_BUILDIND_EXPERTS', 'Create new BUILDIND_EXPERTS record.', '2022-09-20', '2022-09-20 18:59:31'),
(866, NULL, NULL, 'VIEW_BUILDIND_EXPERTS', 'Show detail information of BUILDIND_EXPERTS.', '2022-09-20', '2022-09-20 18:59:31'),
(867, NULL, NULL, 'EDIT_BUILDIND_EXPERTS', 'Modify an existing BUILDIND_EXPERTS record.', '2022-09-20', '2022-09-20 18:59:31'),
(868, NULL, NULL, 'DELETE_BUILDIND_EXPERTS', 'Remove BUILDIND_EXPERTS record.', '2022-09-20', '2022-09-20 18:59:31'),
(869, NULL, NULL, 'LIST_BUILDIND_PROJECT_GAURANTEE', 'Display list of BUILDIND_PROJECT_GAURANTEE.', '2022-09-20', '2022-09-20 18:59:31'),
(870, NULL, NULL, 'CREATE_BUILDIND_PROJECT_GAURANTEE', 'Create new BUILDIND_PROJECT_GAURANTEE record.', '2022-09-20', '2022-09-20 18:59:31'),
(871, NULL, NULL, 'VIEW_BUILDIND_PROJECT_GAURANTEE', 'Show detail information of BUILDIND_PROJECT_GAURANTEE.', '2022-09-20', '2022-09-20 18:59:31'),
(872, NULL, NULL, 'EDIT_BUILDIND_PROJECT_GAURANTEE', 'Modify an existing BUILDIND_PROJECT_GAURANTEE record.', '2022-09-20', '2022-09-20 18:59:31'),
(873, NULL, NULL, 'DELETE_BUILDIND_PROJECT_GAURANTEE', 'Remove BUILDIND_PROJECT_GAURANTEE record.', '2022-09-20', '2022-09-20 18:59:31'),
(874, NULL, NULL, 'LIST_ROAD_PROJECT', 'Display list of PROJECTS.', '2022-09-20', '2022-09-20 18:59:31'),
(875, NULL, NULL, 'CREATE_ROAD_PROJECT', 'Create new PROJECT record.', '2022-09-20', '2022-09-20 18:59:31'),
(876, NULL, NULL, 'VIEW_ROAD_PROJECT', 'Show detail information of PROJECT.', '2022-09-20', '2022-09-20 18:59:31'),
(877, NULL, NULL, 'EDIT_ROAD_PROJECT', 'Modify an existing PROJECT record.', '2022-09-20', '2022-09-20 18:59:31'),
(878, NULL, NULL, 'DELETE_ROAD_PROJECT', 'Remove PROJECT record.', '2022-09-20', '2022-09-20 18:59:31'),
(879, NULL, NULL, 'LIST_ROAD_PAYMENT', 'Display list of ROAD_PAYMENTS.', '2022-09-20', '2022-09-20 18:59:31'),
(880, NULL, NULL, 'CREATE_ROAD_PAYMENT', 'Create new ROAD_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(881, NULL, NULL, 'VIEW_ROAD_PAYMENT', 'Show detail information of ROAD_PAYMENT.', '2022-09-20', '2022-09-20 18:59:31'),
(882, NULL, NULL, 'EDIT_ROAD_PAYMENT', 'Modify an existing ROAD_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(883, NULL, NULL, 'DELETE_ROAD_PAYMENT', 'Remove ROAD_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(884, NULL, NULL, 'LIST_ROAD_JOB_OPPORTUNITY', 'Display list of ROAD_JOB_OPPORTUNITY.', '2022-09-20', '2022-09-20 18:59:31'),
(885, NULL, NULL, 'CREATE_ROAD_JOB_OPPORTUNITY', 'Create new ROAD_JOB_OPPORTUNITY record.', '2022-09-20', '2022-09-20 18:59:31'),
(886, NULL, NULL, 'VIEW_ROAD_JOB_OPPORTUNITY', 'Show detail information of ROAD_JOB_OPPORTUNITY.', '2022-09-20', '2022-09-20 18:59:31'),
(887, NULL, NULL, 'EDIT_ROAD_JOB_OPPORTUNITY', 'Modify an existing ROAD_JOB_OPPORTUNITY record.', '2022-09-20', '2022-09-20 18:59:31'),
(888, NULL, NULL, 'DELETE_ROAD_JOB_OPPORTUNITY', 'Remove ROAD_JOB_OPPORTUNITY record.', '2022-09-20', '2022-09-20 18:59:31'),
(889, NULL, NULL, 'LIST_ROAD_EXPERTS', 'Display list of ROAD_EXPERTS.', '2022-09-20', '2022-09-20 18:59:31'),
(890, NULL, NULL, 'CREATE_ROAD_EXPERTS', 'Create new ROAD_EXPERTS record.', '2022-09-20', '2022-09-20 18:59:31'),
(891, NULL, NULL, 'VIEW_ROAD_EXPERTS', 'Show detail information of ROAD_EXPERTS.', '2022-09-20', '2022-09-20 18:59:31'),
(892, NULL, NULL, 'EDIT_ROAD_EXPERTS', 'Modify an existing ROAD_EXPERTS record.', '2022-09-20', '2022-09-20 18:59:31'),
(893, NULL, NULL, 'DELETE_ROAD_EXPERTS', 'Remove ROAD_EXPERTS record.', '2022-09-20', '2022-09-20 18:59:31'),
(894, NULL, NULL, 'LIST_ROAD_PROJECT_DESIGN', 'Display list of ROAD_PROJECT_DESIGN.', '2022-09-20', '2022-09-20 18:59:31'),
(895, NULL, NULL, 'CREATE_ROAD_PROJECT_DESIGN', 'Create new ROAD_PROJECT_DESIGN record.', '2022-09-20', '2022-09-20 18:59:31'),
(896, NULL, NULL, 'VIEW_ROAD_PROJECT_DESIGN', 'Show detail information of ROAD_PROJECT_DESIGN.', '2022-09-20', '2022-09-20 18:59:31'),
(897, NULL, NULL, 'EDIT_ROAD_PROJECT_DESIGN', 'Modify an existing ROAD_PROJECT_DESIGN record.', '2022-09-20', '2022-09-20 18:59:31'),
(898, NULL, NULL, 'DELETE_ROAD_PROJECT_DESIGN', 'Remove ROAD_PROJECT_DESIGN record.', '2022-09-20', '2022-09-20 18:59:31'),
(899, NULL, NULL, 'LIST_ROAD_PROJECT_GAURANTEE', 'Display list of ROAD_PROJECT_GAURANTEE.', '2022-09-20', '2022-09-20 18:59:31'),
(900, NULL, NULL, 'CREATE_ROAD_PROJECT_GAURANTEE', 'Create new ROAD_PROJECT_GAURANTEE record.', '2022-09-20', '2022-09-20 18:59:31'),
(901, NULL, NULL, 'VIEW_ROAD_PROJECT_GAURANTEE', 'Show detail information of ROAD_PROJECT_GAURANTEE.', '2022-09-20', '2022-09-20 18:59:31'),
(902, NULL, NULL, 'EDIT_ROAD_PROJECT_GAURANTEE', 'Modify an existing ROAD_PROJECT_GAURANTEE record.', '2022-09-20', '2022-09-20 18:59:31'),
(903, NULL, NULL, 'DELETE_ROAD_PROJECT_GAURANTEE', 'Remove ROAD_PROJECT_GAURANTEE record.', '2022-09-20', '2022-09-20 18:59:31'),
(904, NULL, NULL, 'LIST_WATER_PROJECT', 'Display list of WATER_PROJECTS.', '2022-09-20', '2022-09-20 18:59:31'),
(905, NULL, NULL, 'CREATE_WATER_PROJECT', 'Create new WATER_PROJECT record.', '2022-09-20', '2022-09-20 18:59:31'),
(906, NULL, NULL, 'VIEW_WATER_PROJECT', 'Show detail information of WATER_PROJECT.', '2022-09-20', '2022-09-20 18:59:31'),
(907, NULL, NULL, 'EDIT_WATER_PROJECT', 'Modify an existing WATER_PROJECT record.', '2022-09-20', '2022-09-20 18:59:31'),
(908, NULL, NULL, 'DELETE_WATER_PROJECT', 'Remove WATER_PROJECT record.', '2022-09-20', '2022-09-20 18:59:31'),
(909, NULL, NULL, 'LIST_WATER_PAYMENT', 'Display list of WATER_PAYMENTS.', '2022-09-20', '2022-09-20 18:59:31'),
(910, NULL, NULL, 'CREATE_WATER_PAYMENT', 'Create new WATER_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(911, NULL, NULL, 'VIEW_WATER_PAYMENT', 'Show detail information of WATER_PAYMENT.', '2022-09-20', '2022-09-20 18:59:31'),
(912, NULL, NULL, 'EDIT_WATER_PAYMENT', 'Modify an existing WATER_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(913, NULL, NULL, 'DELETE_WATER_PAYMENT', 'Remove WATER_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(914, NULL, NULL, 'LIST_WATER_JOB_OPPORTUNITY', 'Display list of WATER_JOB_OPPORTUNITY.', '2022-09-20', '2022-09-20 18:59:31'),
(915, NULL, NULL, 'CREATE_WATER_JOB_OPPORTUNITY', 'Create new WATER_JOB_OPPORTUNITY record.', '2022-09-20', '2022-09-20 18:59:31'),
(916, NULL, NULL, 'VIEW_WATER_JOB_OPPORTUNITY', 'Show detail information of WATER_JOB_OPPORTUNITY.', '2022-09-20', '2022-09-20 18:59:31'),
(917, NULL, NULL, 'EDIT_WATER_JOB_OPPORTUNITY', 'Modify an existing WATER_JOB_OPPORTUNITY record.', '2022-09-20', '2022-09-20 18:59:31'),
(918, NULL, NULL, 'DELETE_WATER_JOB_OPPORTUNITY', 'Remove WATER_JOB_OPPORTUNITY record.', '2022-09-20', '2022-09-20 18:59:31'),
(919, NULL, NULL, 'LIST_WATER_EXPERTS', 'Display list of WATER_EXPERTS.', '2022-09-20', '2022-09-20 18:59:31'),
(920, NULL, NULL, 'CREATE_WATER_EXPERTS', 'Create new WATER_EXPERTS record.', '2022-09-20', '2022-09-20 18:59:31'),
(921, NULL, NULL, 'VIEW_WATER_EXPERTS', 'Show detail information of WATER_EXPERTS.', '2022-09-20', '2022-09-20 18:59:31'),
(922, NULL, NULL, 'EDIT_WATER_EXPERTS', 'Modify an existing WATER_EXPERTS record.', '2022-09-20', '2022-09-20 18:59:31'),
(923, NULL, NULL, 'DELETE_WATER_EXPERTS', 'Remove WATER_EXPERTS record.', '2022-09-20', '2022-09-20 18:59:31'),
(924, NULL, NULL, 'LIST_WATER_PROJECT_DESIGN', 'Display list of WATER_PROJECT_DESIGN.', '2022-09-20', '2022-09-20 18:59:31'),
(925, NULL, NULL, 'CREATE_WATER_PROJECT_DESIGN', 'Create new WATER_PROJECT_DESIGN record.', '2022-09-20', '2022-09-20 18:59:31'),
(926, NULL, NULL, 'VIEW_WATER_PROJECT_DESIGN', 'Show detail information of WATER_PROJECT_DESIGN.', '2022-09-20', '2022-09-20 18:59:31'),
(927, NULL, NULL, 'EDIT_WATER_PROJECT_DESIGN', 'Modify an existing WATER_PROJECT_DESIGN record.', '2022-09-20', '2022-09-20 18:59:31'),
(928, NULL, NULL, 'DELETE_WATER_PROJECT_DESIGN', 'Remove WATER_PROJECT_DESIGN record.', '2022-09-20', '2022-09-20 18:59:31'),
(929, NULL, NULL, 'LIST_WATER_PROJECT_GAURANTEE', 'Display list of WATER_PROJECT_GAURANTEE.', '2022-09-20', '2022-09-20 18:59:31'),
(930, NULL, NULL, 'CREATE_WATER_PROJECT_GAURANTEE', 'Create new WATER_PROJECT_GAURANTEE record.', '2022-09-20', '2022-09-20 18:59:31'),
(931, NULL, NULL, 'VIEW_WATER_PROJECT_GAURANTEE', 'Show detail information of WATER_PROJECT_GAURANTEE.', '2022-09-20', '2022-09-20 18:59:31'),
(932, NULL, NULL, 'EDIT_WATER_PROJECT_GAURANTEE', 'Modify an existing WATER_PROJECT_GAURANTEE record.', '2022-09-20', '2022-09-20 18:59:31'),
(933, NULL, NULL, 'DELETE_WATER_PROJECT_GAURANTEE', 'Remove WATER_PROJECT_GAURANTEE record.', '2022-09-20', '2022-09-20 18:59:31'),
(934, NULL, NULL, 'LIST_EMPLOYEE', 'Display list of EMPLOYEE.', '2022-09-20', '2022-09-20 18:59:31'),
(935, NULL, NULL, 'CREATE_EMPLOYEE', 'Create new EMPLOYEE record.', '2022-09-20', '2022-09-20 18:59:31'),
(936, NULL, NULL, 'VIEW_EMPLOYEE', 'Show detail information of EMPLOYEE.', '2022-09-20', '2022-09-20 18:59:31'),
(937, NULL, NULL, 'EDIT_EMPLOYEE', 'Modify an existing EMPLOYEE record.', '2022-09-20', '2022-09-20 18:59:31'),
(938, NULL, NULL, 'DELETE_EMPLOYEE', 'Remove EMPLOYEE record.', '2022-09-20', '2022-09-20 18:59:31'),
(939, NULL, NULL, 'LIST_PROPERTY', 'Display list of PROPERTY.', '2022-09-20', '2022-09-20 18:59:31'),
(940, NULL, NULL, 'CREATE_PROPERTY', 'Create new PROPERTY record.', '2022-09-20', '2022-09-20 18:59:31'),
(941, NULL, NULL, 'VIEW_PROPERTY', 'Show detail information of PROPERTY.', '2022-09-20', '2022-09-20 18:59:31'),
(942, NULL, NULL, 'EDIT_PROPERTY', 'Modify an existing PROPERTY record.', '2022-09-20', '2022-09-20 18:59:31'),
(943, NULL, NULL, 'DELETE_PROPERTY', 'Remove PROPERTY record.', '2022-09-20', '2022-09-20 18:59:31'),
(944, NULL, NULL, 'LIST_TRANING', 'Display list of TRANING.', '2022-09-20', '2022-09-20 18:59:31'),
(945, NULL, NULL, 'CREATE_TRANING', 'Create new TRANING record.', '2022-09-20', '2022-09-20 18:59:31'),
(946, NULL, NULL, 'VIEW_TRANING', 'Show detail information of TRANING.', '2022-09-20', '2022-09-20 18:59:31'),
(947, NULL, NULL, 'EDIT_TRANING', 'Modify an existing TRANING record.', '2022-09-20', '2022-09-20 18:59:31'),
(948, NULL, NULL, 'DELETE_TRANING', 'Remove TRANING record.', '2022-09-20', '2022-09-20 18:59:31'),
(949, NULL, NULL, 'LIST_TRANSFER', 'Display list of TRANSFER.', '2022-09-20', '2022-09-20 18:59:31'),
(950, NULL, NULL, 'CREATE_TRANSFER', 'Create new TRANSFER record.', '2022-09-20', '2022-09-20 18:59:31'),
(951, NULL, NULL, 'VIEW_TRANSFER', 'Show detail information of TRANSFER.', '2022-09-20', '2022-09-20 18:59:31'),
(952, NULL, NULL, 'EDIT_TRANSFER', 'Modify an existing TRANSFER record.', '2022-09-20', '2022-09-20 18:59:31'),
(953, NULL, NULL, 'DELETE_TRANSFER', 'Remove TRANSFER record.', '2022-09-20', '2022-09-20 18:59:31'),
(954, NULL, NULL, 'LIST_EVALUATION', 'Display list of EVALUATION.', '2022-09-20', '2022-09-20 18:59:31'),
(955, NULL, NULL, 'CREATE_EVALUATION', 'Create new EVALUATION record.', '2022-09-20', '2022-09-20 18:59:31'),
(956, NULL, NULL, 'VIEW_EVALUATION', 'Show detail information of EVALUATION.', '2022-09-20', '2022-09-20 18:59:31'),
(957, NULL, NULL, 'EDIT_EVALUATION', 'Modify an existing EVALUATION record.', '2022-09-20', '2022-09-20 18:59:31'),
(958, NULL, NULL, 'DELETE_EVALUATION', 'Remove EVALUATION record.', '2022-09-20', '2022-09-20 18:59:31'),
(959, NULL, NULL, 'LIST_CONTRACTORS_IMX', 'Display list of CONTRACTORS_IMX.', '2022-09-20', '2022-09-20 18:59:31'),
(960, NULL, NULL, 'CREATE_CONTRACTORS_IMX', 'Create new CONTRACTORS_IMX record.', '2022-09-20', '2022-09-20 18:59:31'),
(961, NULL, NULL, 'VIEW_CONTRACTORS_IMX', 'Show detail information of CONTRACTORS_IMX.', '2022-09-20', '2022-09-20 18:59:31'),
(962, NULL, NULL, 'EDIT_CONTRACTORS_IMX', 'Modify an existing CONTRACTORS_IMX record.', '2022-09-20', '2022-09-20 18:59:31'),
(963, NULL, NULL, 'DELETE_CONTRACTORS_IMX', 'Remove CONTRACTORS_IMX record.', '2022-09-20', '2022-09-20 18:59:31'),
(964, NULL, NULL, 'LIST_CONTRACTOR', 'Display list of CONTRACTOR.', '2022-09-20', '2022-09-20 18:59:31'),
(965, NULL, NULL, 'CREATE_CONTRACTOR', 'Create new CONTRACTOR record.', '2022-09-20', '2022-09-20 18:59:31'),
(966, NULL, NULL, 'VIEW_CONTRACTOR', 'Show detail information of CONTRACTOR.', '2022-09-20', '2022-09-20 18:59:31'),
(967, NULL, NULL, 'EDIT_CONTRACTOR', 'Modify an existing CONTRACTOR record.', '2022-09-20', '2022-09-20 18:59:31'),
(968, NULL, NULL, 'DELETE_CONTRACTOR', 'Remove CONTRACTOR record.', '2022-09-20', '2022-09-20 18:59:31'),
(969, NULL, NULL, 'LIST_CONTRACTORS_IMX_RENEWED_PAYMENT', 'Display list of CONTRACTORS_IMX_RENEWED_PAYMENT.', '2022-09-20', '2022-09-20 18:59:31'),
(970, NULL, NULL, 'CREATE_CONTRACTORS_IMX_RENEWED_PAYMENT', 'Create new CONTRACTORS_IMX_RENEWED_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(971, NULL, NULL, 'VIEW_CONTRACTORS_IMX_RENEWED_PAYMENT', 'Show detail information of CONTRACTORS_IMX_RENEWED_PAYMENT.', '2022-09-20', '2022-09-20 18:59:31'),
(972, NULL, NULL, 'EDIT_CONTRACTORS_IMX_RENEWED_PAYMENT', 'Modify an existing CONTRACTORS_IMX_RENEWED_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(973, NULL, NULL, 'DELETE_CONTRACTORS_IMX_RENEWED_PAYMENT', 'Remove CONTRACTORS_IMX_RENEWED_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(974, NULL, NULL, 'LIST_NAME_MSE', 'Display list of NAME_MSE.', '2022-09-20', '2022-09-20 18:59:31'),
(975, NULL, NULL, 'CREATE_NAME_MSE', 'Create new NAME_MSE record.', '2022-09-20', '2022-09-20 18:59:31'),
(976, NULL, NULL, 'VIEW_NAME_MSE', 'Show detail information of NAME_MSE.', '2022-09-20', '2022-09-20 18:59:31'),
(977, NULL, NULL, 'EDIT_NAME_MSE', 'Modify an existing NAME_MSE record.', '2022-09-20', '2022-09-20 18:59:31'),
(978, NULL, NULL, 'DELETE_NAME_MSE', 'Remove NAME_MSE record.', '2022-09-20', '2022-09-20 18:59:31'),
(979, NULL, NULL, 'LIST_MSE_MEMBERS', 'Display list of MSE_MEMBERS.', '2022-09-20', '2022-09-20 18:59:31'),
(980, NULL, NULL, 'CREATE_MSE_MEMBERS', 'Create new MSE_MEMBERS record.', '2022-09-20', '2022-09-20 18:59:31'),
(981, NULL, NULL, 'VIEW_MSE_MEMBERS', 'Show detail information of MSE_MEMBERS.', '2022-09-20', '2022-09-20 18:59:31'),
(982, NULL, NULL, 'EDIT_MSE_MEMBERS', 'Modify an existing MSE_MEMBERS record.', '2022-09-20', '2022-09-20 18:59:31'),
(983, NULL, NULL, 'DELETE_MSE_MEMBERS', 'Remove MSE_MEMBERS record.', '2022-09-20', '2022-09-20 18:59:31'),
(984, NULL, NULL, 'LIST_PROFESSIONAL_LICENSE', 'Display list of PROFESSIONAL_LICENSE.', '2022-09-20', '2022-09-20 18:59:31'),
(985, NULL, NULL, 'CREATE_PROFESSIONAL_LICENSE', 'Create new PROFESSIONAL_LICENSE record.', '2022-09-20', '2022-09-20 18:59:31'),
(986, NULL, NULL, 'VIEW_PROFESSIONAL_LICENSE', 'Show detail information of PROFESSIONAL_LICENSE.', '2022-09-20', '2022-09-20 18:59:31'),
(987, NULL, NULL, 'EDIT_PROFESSIONAL_LICENSE', 'Modify an existing PROFESSIONAL_LICENSE record.', '2022-09-20', '2022-09-20 18:59:31'),
(988, NULL, NULL, 'DELETE_PROFESSIONAL_LICENSE', 'Remove PROFESSIONAL_LICENSE record.', '2022-09-20', '2022-09-20 18:59:31'),
(989, NULL, NULL, 'LIST_PROFESSIONAL_CERT_RENEWAL_PAYMENT', 'Display list of PROFESSIONAL_CERT_RENEWAL_PAYMENT.', '2022-09-20', '2022-09-20 18:59:31'),
(990, NULL, NULL, 'CREATE_PROFESSIONAL_CERT_RENEWAL_PAYMENT', 'Create new PROFESSIONAL_CERT_RENEWAL_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(991, NULL, NULL, 'VIEW_PROFESSIONAL_CERT_RENEWAL_PAYMENT', 'Show detail information of PROFESSIONAL_CERT_RENEWAL_PAYMENT.', '2022-09-20', '2022-09-20 18:59:31'),
(992, NULL, NULL, 'EDIT_PROFESSIONAL_CERT_RENEWAL_PAYMENT', 'Modify an existing PROFESSIONAL_CERT_RENEWAL_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(993, NULL, NULL, 'DELETE_PROFESSIONAL_CERT_RENEWAL_PAYMENT', 'Remove PROFESSIONAL_CERT_RENEWAL_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(994, NULL, NULL, 'LIST_LICENSE', 'Display list of LICENSE.', '2022-09-20', '2022-09-20 18:59:31'),
(995, NULL, NULL, 'CREATE_LICENSE', 'Create new _LICENSE record.', '2022-09-20', '2022-09-20 18:59:31'),
(996, NULL, NULL, 'VIEW_LICENSE', 'Show detail information of _LICENSE.', '2022-09-20', '2022-09-20 18:59:31'),
(997, NULL, NULL, 'EDIT_LICENSE', 'Modify an existing _LICENSE record.', '2022-09-20', '2022-09-20 18:59:31'),
(998, NULL, NULL, 'DELETE_LICENSE', 'Remove _LICENSE record.', '2022-09-20', '2022-09-20 18:59:31'),
(999, NULL, NULL, 'LIST_RENEWAL_PAYMENT', 'Display list of RENEWAL_PAYMENT.', '2022-09-20', '2022-09-20 18:59:31'),
(1000, NULL, NULL, 'CREATE_RENEWAL_PAYMENT', 'Create new RENEWAL_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(1001, NULL, NULL, 'VIEW_RENEWAL_PAYMENT', 'Show detail information of RENEWAL_PAYMENT.', '2022-09-20', '2022-09-20 18:59:31'),
(1002, NULL, NULL, 'EDIT_RENEWAL_PAYMENT', 'Modify an existing RENEWAL_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(1003, NULL, NULL, 'DELETE_RENEWAL_PAYMENT', 'Remove RENEWAL_PAYMENT record.', '2022-09-20', '2022-09-20 18:59:31'),
(1004, NULL, NULL, 'LIST_CONTRACTORS', 'Display list of CONTRACTORS.', '2022-09-20', '2022-09-20 18:59:31'),
(1005, NULL, NULL, 'CREATE_CONTRACTORS', 'Create new CONTRACTORS record.', '2022-09-20', '2022-09-20 18:59:31'),
(1006, NULL, NULL, 'VIEW_CONTRACTORS', 'Show detail information of CONTRACTORS.', '2022-09-20', '2022-09-20 18:59:31'),
(1007, NULL, NULL, 'EDIT_CONTRACTORS', 'Modify an existing CONTRACTORS record.', '2022-09-20', '2022-09-20 18:59:31'),
(1008, NULL, NULL, 'DELETE_CONTRACTORS', 'Remove CONTRACTORS record.', '2022-09-20', '2022-09-20 18:59:31'),
(1009, NULL, NULL, 'LIST_CONSULTANT', 'Display list of CONSULTANT.', '2022-09-20', '2022-09-20 18:59:31'),
(1010, NULL, NULL, 'CREATE_CONSULTANT', 'Create new CONSULTANT record.', '2022-09-20', '2022-09-20 18:59:31'),
(1011, NULL, NULL, 'VIEW_CONSULTANT', 'Show detail information of CONSULTANT.', '2022-09-20', '2022-09-20 18:59:31'),
(1012, NULL, NULL, 'EDIT_CONSULTANT', 'Modify an existing CONSULTANT record.', '2022-09-20', '2022-09-20 18:59:31'),
(1013, NULL, NULL, 'DELETE_CONSULTANT', 'Remove CONSULTANT record.', '2022-09-20', '2022-09-20 18:59:31'),
(1014, NULL, NULL, 'LIST_CONSULTANTS', 'Display list of CONSULTANTS.', '2022-09-20', '2022-09-20 18:59:31'),
(1015, NULL, NULL, 'CREATE_CONSULTANTS', 'Create new CONSULTANTS record.', '2022-09-20', '2022-09-20 18:59:31'),
(1016, NULL, NULL, 'VIEW_CONSULTANTS', 'Show detail information of CONSULTANTS.', '2022-09-20', '2022-09-20 18:59:31'),
(1017, NULL, NULL, 'EDIT_CONSULTANTS', 'Modify an existing CONSULTANTS record.', '2022-09-20', '2022-09-20 18:59:31'),
(1018, NULL, NULL, 'DELETE_CONSULTANTS', 'Remove CONSULTANTS record.', '2022-09-20', '2022-09-20 18:59:31'),
(1019, NULL, NULL, 'LIST_PAYMENT_ALLOWED_CONSULTANTS', 'Display list of PAYMENT_ALLOWED_CONSULTANTS.', '2022-09-20', '2022-09-20 18:59:31'),
(1020, NULL, NULL, 'CREATE_PAYMENT_ALLOWED_CONSULTANTS', 'Create new PAYMENT_ALLOWED_CONSULTANTS record.', '2022-09-20', '2022-09-20 18:59:31'),
(1021, NULL, NULL, 'VIEW_PAYMENT_ALLOWED_CONSULTANTS', 'Show detail information of PAYMENT_ALLOWED_CONSULTANTS.', '2022-09-20', '2022-09-20 18:59:31'),
(1022, NULL, NULL, 'EDIT_PAYMENT_ALLOWED_CONSULTANTS', 'Modify an existing PAYMENT_ALLOWED_CONSULTANTS record.', '2022-09-20', '2022-09-20 18:59:31'),
(1023, NULL, NULL, 'DELETE_PAYMENT_ALLOWED_CONSULTANTS', 'Remove PAYMENT_ALLOWED_CONSULTANTS record.', '2022-09-20', '2022-09-20 18:59:31'),
(1024, NULL, NULL, 'LIST_COC_INFO', 'Display list of COC_INFO.', '2022-09-20', '2022-09-20 18:59:31'),
(1025, NULL, NULL, 'CREATE_COC_INFO', 'Create new COC_INFO record.', '2022-09-20', '2022-09-20 18:59:31'),
(1026, NULL, NULL, 'VIEW_COC_INFO', 'Show detail information of COC_INFO.', '2022-09-20', '2022-09-20 18:59:31'),
(1027, NULL, NULL, 'EDIT_COC_INFO', 'Modify an existing COC_INFO record.', '2022-09-20', '2022-09-20 18:59:31'),
(1028, NULL, NULL, 'DELETE_COC_INFO', 'Remove COC_INFO record.', '2022-09-20', '2022-09-20 18:59:31'),
(1029, NULL, NULL, 'LIST_COC_EVALUATION', 'Display list of COC_EVALUATION.', '2022-09-20', '2022-09-20 18:59:31'),
(1030, NULL, NULL, 'CREATE_COC_EVALUATION', 'Create new COC_EVALUATION record.', '2022-09-20', '2022-09-20 18:59:31'),
(1031, NULL, NULL, 'VIEW_COC_EVALUATION', 'Show detail information of COC_EVALUATION.', '2022-09-20', '2022-09-20 18:59:31'),
(1032, NULL, NULL, 'EDIT_COC_EVALUATION', 'Modify an existing COC_EVALUATION record.', '2022-09-20', '2022-09-20 18:59:31'),
(1033, NULL, NULL, 'DELETE_COC_EVALUATION', 'Remove COC_EVALUATION record.', '2022-09-20', '2022-09-20 18:59:31'),
(1034, NULL, NULL, 'LIST_LICENSE_TYPE', 'Display list of LICENSE_TYPE.', '2022-09-20', '2022-09-20 18:59:31'),
(1035, NULL, NULL, 'CREATE_LICENSE_TYPE', 'Create new LICENSE_TYPE record.', '2022-09-20', '2022-09-20 18:59:31'),
(1036, NULL, NULL, 'VIEW_LICENSE_TYPE', 'Show detail information of LICENSE_TYPE.', '2022-09-20', '2022-09-20 18:59:31'),
(1037, NULL, NULL, 'EDIT_LICENSE_TYPE', 'Modify an existing LICENSE_TYPE record.', '2022-09-20', '2022-09-20 18:59:31'),
(1038, NULL, NULL, 'DELETE_LICENSE_TYPE', 'Remove LICENSE_TYPE record.', '2022-09-20', '2022-09-20 18:59:31'),
(1039, NULL, NULL, 'LIST_LICENSE_LEVEL', 'Display list of LICENSE_LEVEL.', '2022-09-20', '2022-09-20 18:59:31'),
(1040, NULL, NULL, 'CREATE_LICENSE_LEVEL', 'Create new LICENSE_LEVEL record.', '2022-09-20', '2022-09-20 18:59:31'),
(1041, NULL, NULL, 'VIEW_LICENSE_LEVEL', 'Show detail information of LICENSE_LEVEL.', '2022-09-20', '2022-09-20 18:59:31'),
(1042, NULL, NULL, 'EDIT_LICENSE_LEVEL', 'Modify an existing LICENSE_LEVEL record.', '2022-09-20', '2022-09-20 18:59:31'),
(1043, NULL, NULL, 'DELETE_LICENSE_LEVEL', 'Remove LICENSE_LEVEL record.', '2022-09-20', '2022-09-20 18:59:31'),
(1044, NULL, NULL, 'LIST_BID', 'Display list of BID.', '2022-09-20', '2022-09-20 18:59:31'),
(1045, NULL, NULL, 'CREATE_BID', 'Create new BID record.', '2022-09-20', '2022-09-20 18:59:31'),
(1046, NULL, NULL, 'VIEW_BID', 'Show detail information of BID.', '2022-09-20', '2022-09-20 18:59:31'),
(1047, NULL, NULL, 'EDIT_BID', 'Modify an existing BID record.', '2022-09-20', '2022-09-20 18:59:31'),
(1048, NULL, NULL, 'DELETE_BID', 'Remove BID record.', '2022-09-20', '2022-09-20 18:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `pregnant_women`
--

CREATE TABLE `pregnant_women` (
  `id` int(11) NOT NULL,
  `office_id` int(11) DEFAULT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gestational_age` date NOT NULL,
  `card_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `message_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`user_id`, `group_id`) VALUES
(17, 16),
(19, 15),
(20, 17),
(21, 18),
(22, 19),
(23, 20),
(24, 21);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `name` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` date DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `created_by_id`, `updated_by_id`, `name`, `roles`, `description`, `created_at`, `updated_at`) VALUES
(15, NULL, NULL, 'SUPPORT_GROUP', 'a:0:{}', 'Thsi is a group where ICT support staff is associated. This is to deal with user account related problems.', '2022-09-20', '2022-09-20 18:59:32'),
(16, NULL, NULL, 'ADMIN_GROUP', 'a:52:{i:0;s:11:"LIST_OFFICE";i:1;s:13:"CREATE_OFFICE";i:2;s:11:"VIEW_OFFICE";i:3;s:11:"EDIT_OFFICE";i:4;s:13:"DELETE_OFFICE";i:5;s:8:"LIST_LOG";i:6;s:8:"VIEW_LOG";i:7;s:11:"LIST_CLIENT";i:8;s:13:"CREATE_CLIENT";i:9;s:11:"VIEW_CLIENT";i:10;s:11:"EDIT_CLIENT";i:11;s:13:"DELETE_CLIENT";i:12;s:19:"LIST_GAURANTEE_TYPE";i:13;s:21:"CREATE_GAURANTEE_TYPE";i:14;s:19:"VIEW_GAURANTEE_TYPE";i:15;s:19:"EDIT_GAURANTEE_TYPE";i:16;s:21:"DELETE_GAURANTEE_TYPE";i:17;s:10:"LIST_GROUP";i:18;s:12:"CREATE_GROUP";i:19;s:10:"EDIT_GROUP";i:20;s:12:"DELETE_GROUP";i:21;s:10:"VIEW_GROUP";i:22;s:15:"LIST_PERMISSION";i:23;s:17:"CREATE_PERMISSION";i:24;s:15:"VIEW_PERMISSION";i:25;s:15:"EDIT_PERMISSION";i:26;s:17:"DELETE_PERMISSION";i:27;s:9:"LIST_USER";i:28;s:11:"CREATE_USER";i:29;s:9:"VIEW_USER";i:30;s:9:"EDIT_USER";i:31;s:11:"DELETE_USER";i:32;s:11:"LIST_WOREDA";i:33;s:13:"CREATE_WOREDA";i:34;s:11:"VIEW_WOREDA";i:35;s:11:"EDIT_WOREDA";i:36;s:13:"DELETE_WOREDA";i:37;s:18:"LIST_KETEMA_KEBELE";i:38;s:20:"CREATE_KETEMA_KEBELE";i:39;s:18:"VIEW_KETEMA_KEBELE";i:40;s:18:"EDIT_KETEMA_KEBELE";i:41;s:20:"DELETE_KETEMA_KEBELE";i:42;s:18:"LIST_PAYMENT_ROUND";i:43;s:20:"CREATE_PAYMENT_ROUND";i:44;s:18:"VIEW_PAYMENT_ROUND";i:45;s:18:"EDIT_PAYMENT_ROUND";i:46;s:20:"DELETE_PAYMENT_ROUND";i:47;s:17:"LIST_PROJECT_TYPE";i:48;s:19:"CREATE_PROJECT_TYPE";i:49;s:17:"VIEW_PROJECT_TYPE";i:50;s:17:"EDIT_PROJECT_TYPE";i:51;s:19:"DELETE_PROJECT_TYPE";}', 'admin group', '2022-09-20', '2022-09-20 18:59:51'),
(17, NULL, NULL, 'BUILDING_GROUP', 'a:0:{}', 'building_grourp', '2022-09-20', '2022-09-20 18:59:32'),
(18, NULL, NULL, 'ROAD_GROUP', 'a:0:{}', 'road_grourp', '2022-09-20', '2022-09-20 18:59:32'),
(19, NULL, NULL, 'WATER_AND_IRRIGATION_GROUP', 'a:0:{}', 'water_and_irrigation_grourp', '2022-09-20', '2022-09-20 18:59:32'),
(20, NULL, NULL, 'INDUSTRY_GROUP', 'a:0:{}', 'industry_group', '2022-09-20', '2022-09-20 18:59:32'),
(21, NULL, NULL, 'HRM_EMPLOYEE_GROUP', 'a:0:{}', 'employee HRM_EMPLOYEE_GROUP description', '2022-09-20', '2022-09-20 18:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_log`
--

CREATE TABLE `visitor_log` (
  `id` int(11) NOT NULL,
  `host_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `visitor_username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `visitor_log`
--

INSERT INTO `visitor_log` (`id`, `host_ip`, `visitor_username`, `description`, `created_at`, `updated_at`) VALUES
(10, '127.0.0.1', 'admin', NULL, '2022-09-20 18:59:51', NULL),
(11, '127.0.0.1', 'admin', NULL, '2022-09-21 19:38:28', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8205FDD0B03A8386` (`created_by_id`),
  ADD KEY `IDX_8205FDD0896DBBDE` (`updated_by_id`),
  ADD KEY `IDX_8205FDD04C29D4D4` (`replied_to_id`);

--
-- Indexes for table `ext_log_entries`
--
ALTER TABLE `ext_log_entries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_class_lookup_idx` (`object_class`),
  ADD KEY `log_date_lookup_idx` (`logged_at`),
  ADD KEY `log_user_lookup_idx` (`username`),
  ADD KEY `log_version_lookup_idx` (`object_id`,`object_class`,`version`);

--
-- Indexes for table `ext_translations`
--
ALTER TABLE `ext_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lookup_unique_idx` (`locale`,`object_class`,`field`,`foreign_key`),
  ADD KEY `translations_lookup_idx` (`locale`,`object_class`,`foreign_key`);

--
-- Indexes for table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`),
  ADD KEY `IDX_957A6479FFA0C224` (`office_id`),
  ADD KEY `IDX_957A6479B03A8386` (`created_by_id`),
  ADD KEY `IDX_957A6479896DBBDE` (`updated_by_id`);

--
-- Indexes for table `group_permission`
--
ALTER TABLE `group_permission`
  ADD PRIMARY KEY (`group_id`,`permission_id`),
  ADD KEY `IDX_3784F318FE54D947` (`group_id`),
  ADD KEY `IDX_3784F318FED90CCA` (`permission_id`);

--
-- Indexes for table `lexik_translation_file`
--
ALTER TABLE `lexik_translation_file`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hash_idx` (`hash`);

--
-- Indexes for table `lexik_trans_unit`
--
ALTER TABLE `lexik_trans_unit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key_domain_idx` (`key_name`,`domain`);

--
-- Indexes for table `lexik_trans_unit_translations`
--
ALTER TABLE `lexik_trans_unit_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `trans_unit_locale_idx` (`trans_unit_id`,`locale`),
  ADD KEY `IDX_B0AA394493CB796C` (`file_id`),
  ADD KEY `IDX_B0AA3944C3C583C9` (`trans_unit_id`);

--
-- Indexes for table `message_category`
--
ALTER TABLE `message_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_list`
--
ALTER TABLE `message_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_ED5D63C1B58F61F` (`messagetype_id`);

--
-- Indexes for table `message_type`
--
ALTER TABLE `message_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_74516B025E237E06` (`name`),
  ADD KEY `IDX_74516B02EEBEDCA` (`parent_office_id`),
  ADD KEY `IDX_74516B02B03A8386` (`created_by_id`),
  ADD KEY `IDX_74516B02896DBBDE` (`updated_by_id`);

--
-- Indexes for table `oroconst_mail`
--
ALTER TABLE `oroconst_mail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D6D3D9DCF624B39D` (`sender_id`),
  ADD KEY `IDX_D6D3D9DCCD53EDB6` (`receiver_id`),
  ADD KEY `IDX_D6D3D9DC4C29D4D4` (`replied_to_id`),
  ADD KEY `IDX_D6D3D9DCB03A8386` (`created_by_id`),
  ADD KEY `IDX_D6D3D9DC896DBBDE` (`updated_by_id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E04992AAB03A8386` (`created_by_id`),
  ADD KEY `IDX_E04992AA896DBBDE` (`updated_by_id`);

--
-- Indexes for table `pregnant_women`
--
ALTER TABLE `pregnant_women`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_56F2961D6B01BC5B` (`phone_number`),
  ADD KEY `IDX_56F2961DFFA0C224` (`office_id`),
  ADD KEY `IDX_56F2961DB03A8386` (`created_by_id`),
  ADD KEY `IDX_56F2961D896DBBDE` (`updated_by_id`),
  ADD KEY `IDX_56F2961D55C4B69F` (`message_type_id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`user_id`,`group_id`),
  ADD KEY `IDX_FF8AB7E0A76ED395` (`user_id`),
  ADD KEY `IDX_FF8AB7E0FE54D947` (`group_id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8F02BF9D5E237E06` (`name`),
  ADD KEY `IDX_8F02BF9DB03A8386` (`created_by_id`),
  ADD KEY `IDX_8F02BF9D896DBBDE` (`updated_by_id`);

--
-- Indexes for table `visitor_log`
--
ALTER TABLE `visitor_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ext_log_entries`
--
ALTER TABLE `ext_log_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234;
--
-- AUTO_INCREMENT for table `ext_translations`
--
ALTER TABLE `ext_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `lexik_translation_file`
--
ALTER TABLE `lexik_translation_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lexik_trans_unit`
--
ALTER TABLE `lexik_trans_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lexik_trans_unit_translations`
--
ALTER TABLE `lexik_trans_unit_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message_category`
--
ALTER TABLE `message_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message_list`
--
ALTER TABLE `message_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `message_type`
--
ALTER TABLE `message_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `oroconst_mail`
--
ALTER TABLE `oroconst_mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1049;
--
-- AUTO_INCREMENT for table `pregnant_women`
--
ALTER TABLE `pregnant_women`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `visitor_log`
--
ALTER TABLE `visitor_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD CONSTRAINT `FK_8205FDD04C29D4D4` FOREIGN KEY (`replied_to_id`) REFERENCES `contact_us` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_8205FDD0896DBBDE` FOREIGN KEY (`updated_by_id`) REFERENCES `fos_user` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_8205FDD0B03A8386` FOREIGN KEY (`created_by_id`) REFERENCES `fos_user` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `fos_user`
--
ALTER TABLE `fos_user`
  ADD CONSTRAINT `FK_957A6479896DBBDE` FOREIGN KEY (`updated_by_id`) REFERENCES `fos_user` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_957A6479B03A8386` FOREIGN KEY (`created_by_id`) REFERENCES `fos_user` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_957A6479FFA0C224` FOREIGN KEY (`office_id`) REFERENCES `office` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `group_permission`
--
ALTER TABLE `group_permission`
  ADD CONSTRAINT `FK_3784F318FE54D947` FOREIGN KEY (`group_id`) REFERENCES `user_group` (`id`),
  ADD CONSTRAINT `FK_3784F318FED90CCA` FOREIGN KEY (`permission_id`) REFERENCES `permission` (`id`);

--
-- Constraints for table `lexik_trans_unit_translations`
--
ALTER TABLE `lexik_trans_unit_translations`
  ADD CONSTRAINT `FK_B0AA394493CB796C` FOREIGN KEY (`file_id`) REFERENCES `lexik_translation_file` (`id`),
  ADD CONSTRAINT `FK_B0AA3944C3C583C9` FOREIGN KEY (`trans_unit_id`) REFERENCES `lexik_trans_unit` (`id`);

--
-- Constraints for table `message_list`
--
ALTER TABLE `message_list`
  ADD CONSTRAINT `FK_ED5D63C1B58F61F` FOREIGN KEY (`messagetype_id`) REFERENCES `message_type` (`id`);

--
-- Constraints for table `office`
--
ALTER TABLE `office`
  ADD CONSTRAINT `FK_74516B02896DBBDE` FOREIGN KEY (`updated_by_id`) REFERENCES `fos_user` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_74516B02B03A8386` FOREIGN KEY (`created_by_id`) REFERENCES `fos_user` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_74516B02EEBEDCA` FOREIGN KEY (`parent_office_id`) REFERENCES `office` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `oroconst_mail`
--
ALTER TABLE `oroconst_mail`
  ADD CONSTRAINT `FK_D6D3D9DC4C29D4D4` FOREIGN KEY (`replied_to_id`) REFERENCES `oroconst_mail` (`id`),
  ADD CONSTRAINT `FK_D6D3D9DC896DBBDE` FOREIGN KEY (`updated_by_id`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_D6D3D9DCB03A8386` FOREIGN KEY (`created_by_id`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_D6D3D9DCCD53EDB6` FOREIGN KEY (`receiver_id`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_D6D3D9DCF624B39D` FOREIGN KEY (`sender_id`) REFERENCES `fos_user` (`id`);

--
-- Constraints for table `permission`
--
ALTER TABLE `permission`
  ADD CONSTRAINT `FK_E04992AA896DBBDE` FOREIGN KEY (`updated_by_id`) REFERENCES `fos_user` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_E04992AAB03A8386` FOREIGN KEY (`created_by_id`) REFERENCES `fos_user` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `pregnant_women`
--
ALTER TABLE `pregnant_women`
  ADD CONSTRAINT `FK_56F2961D55C4B69F` FOREIGN KEY (`message_type_id`) REFERENCES `message_type` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_56F2961D896DBBDE` FOREIGN KEY (`updated_by_id`) REFERENCES `fos_user` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_56F2961DB03A8386` FOREIGN KEY (`created_by_id`) REFERENCES `fos_user` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_56F2961DFFA0C224` FOREIGN KEY (`office_id`) REFERENCES `office` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `FK_FF8AB7E0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_FF8AB7E0FE54D947` FOREIGN KEY (`group_id`) REFERENCES `user_group` (`id`);

--
-- Constraints for table `user_group`
--
ALTER TABLE `user_group`
  ADD CONSTRAINT `FK_8F02BF9D896DBBDE` FOREIGN KEY (`updated_by_id`) REFERENCES `fos_user` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_8F02BF9DB03A8386` FOREIGN KEY (`created_by_id`) REFERENCES `fos_user` (`id`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
