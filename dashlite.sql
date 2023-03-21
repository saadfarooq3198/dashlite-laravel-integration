-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 03:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashlite`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `page`, `banner`, `created_at`, `updated_at`) VALUES
(1, 'Ethos', 'slide pic 2.png', '2023-02-01 01:27:17', '2023-03-04 21:57:28'),
(2, 'about', 'ethod.png', '2023-02-26 02:42:10', '2023-02-26 02:42:10'),
(3, 'About', 'hero-img1.png', '2023-02-26 02:46:16', '2023-03-04 21:57:40'),
(4, 'about', 'logo.png', '2023-02-26 02:46:24', '2023-02-26 02:46:24'),
(5, 'about', 'slide pic 2.png', '2023-02-26 02:46:32', '2023-02-26 02:46:32'),
(7, 'about', 'slide pic 3.png', '2023-02-26 02:46:47', '2023-02-26 02:46:47'),
(8, 'about', 'table img.png', '2023-02-26 02:46:54', '2023-02-26 02:46:54'),
(9, 'about', 'slide pic 3.png', '2023-02-26 02:47:01', '2023-02-26 02:47:01'),
(11, 'about', 'slide pic 3.png', '2023-02-26 02:47:18', '2023-02-26 02:47:18'),
(12, 'about', 'slide pic 2.png', '2023-02-26 02:47:30', '2023-02-26 02:47:30'),
(14, 'about', 'bg.png', '2023-02-26 03:16:08', '2023-02-26 03:16:08'),
(15, 'about', 'pexels-pixabay-60582.png', '2023-02-26 03:16:28', '2023-02-26 03:16:28'),
(16, 'about', 'bg.png', '2023-02-26 03:29:58', '2023-02-26 03:29:58'),
(18, 'about', 'logo.png', '2023-02-26 22:45:46', '2023-02-26 22:46:19'),
(19, 'Ethos', 'g-1.png', '2023-03-04 21:53:36', '2023-03-04 21:53:36'),
(20, 'image_gallery', 'g-2.png', '2023-03-14 23:50:13', '2023-03-14 23:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `post`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Saad Farooq', 'Backend Developer', 'I\'m a full-stack developer. I live in India and I love to write tutorials and tips that can help to other artisan. I am a big fan of PHP, Laravel, Angular, Vue, Node, Javascript, JQuery, Codeigniter and Bootstrap from the early stage. I believe in Hardworking and Consistency.', '2023-02-01 11:04:01', '2023-02-26 23:39:57'),
(3, 'Rina Anderson', 'Manager', 'Maxime facilis place', '2023-02-26 23:23:36', '2023-02-26 23:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_special` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `image`, `is_special`, `created_at`, `updated_at`) VALUES
(2, 'Meetup', 'Developers meetup', 'g-1.png', 'normal', '2023-02-27 01:17:14', '2023-03-14 07:30:34'),
(3, 'Quam accusantium deb', 'Quia ut consequuntur', 'Group 42131.png', 'special', '2023-02-27 01:17:38', '2023-02-27 01:17:38'),
(5, 'Veritatis ratione il', 'Quae Nam nostrum ut', 'slide pic 3.png', 'normal', '2023-02-27 01:37:41', '2023-02-27 01:37:41');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_23_183035_create_settings_table', 2),
(7, '2023_02_26_010808_create_banners_table', 3),
(8, '2023_02_26_101906_create_employees_table', 4),
(9, '2023_02_26_235130_create_events_table', 5),
(11, '2023_03_15_005549_create_our_classes_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `our_classes`
--

CREATE TABLE `our_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_classes`
--

INSERT INTO `our_classes` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Class 3-5', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat. 1', 'g-3.png', '2023-03-15 02:04:40', '2023-03-15 02:04:40'),
(4, 'Class 5-8', 'This is class description', 'main-about-img.png', '2023-03-15 02:08:40', '2023-03-15 02:30:30');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `page`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'home', 'section_one_heading', 'Making Learning Fun', '2023-02-24 10:37:33', '2023-02-24 10:37:33'),
(2, 'home', 'section_one_description', '<span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">activities are fun and involve collaboration, learners invest more radily and more effectively. Having fun has a positive effect on levels of motivation levels, shaping what we learn and how easily we remember.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">At TACK, we plan to make learning fun so that learners will want to keep coming back for more.</span>', '2023-02-24 10:37:33', '2023-02-26 09:36:07'),
(3, 'home', 'section_two_heading', 'An Innovative Approach', '2023-02-24 10:37:33', '2023-02-24 10:37:33'),
(4, 'home', 'section_two_description', '<span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">As decreasing numbers of children wanting to learn Arabic are reported across the world, it is clear that an innovative approach is needed.To develop an innovative approach, we asked questions about hove children learn and what approaches could be reconstructed in Arabic to build a learning environment involving choices, autonomy and motivation.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">We set aside preconceived ideas, to look at teaching Arabic from a new point of view. That is how we came up with something new.</span>', '2023-02-24 10:37:33', '2023-02-26 09:38:32'),
(5, 'home', 'section_three_heading', 'Driven by Research', '2023-02-24 10:37:33', '2023-02-24 10:37:33'),
(6, 'home', 'section_three_description', '<span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">By asking questions about what is possible, TACK has established the principles at the heart of its practice.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">We have invested time and effort in designing something that works. Our work to get to this point has involved collaboration and co-research with experts higher education researchers in language and literacy.</span>', '2023-02-24 10:37:33', '2023-02-26 09:38:32'),
(7, 'home', 'section_four_heading', 'Building Professional Expertise', '2023-02-24 10:37:33', '2023-02-24 10:37:33'),
(8, 'home', 'section_four_description', '<span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">As staff join one of our settings,they receive training and mentoring into the role to ensure consistency of approach to our brand promises.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">Teachers at TACK are engaged in regular professional development. They come together to review and evaluate their practice and continue to build their expertise by working with outside consultants and agencies. This is fundamental to our approach. We see ourselves as a \'learning organisation\' .</span>', '2023-02-24 10:37:33', '2023-02-26 09:38:32'),
(9, 'home', 'banner', 'slide pic 1.png', '2023-02-24 10:46:25', '2023-02-24 18:50:28'),
(10, 'home', 'section_one_image', 'hero-img1.png', '2023-02-24 10:47:16', '2023-02-24 18:52:04'),
(11, 'home', 'section_two_image', 'hero-img 2.png', '2023-02-24 10:47:16', '2023-02-24 18:52:04'),
(12, 'home', 'section_three_image', 'hero-img 3.png', '2023-02-24 10:47:16', '2023-02-24 18:52:04'),
(13, 'home', 'section_four_image', 'hero-img 4.png', '2023-02-24 10:47:16', '2023-02-24 18:52:04'),
(14, 'curriculum', 'heading', 'Our Publication & Resources', '2023-02-24 11:01:07', '2023-02-24 11:01:07'),
(15, 'curriculum', 'description', 'In order to create a fun and engaging learning environment in all of our provision, we have developed a range of curriculum resources that support the development of Arabic literacy and also to create a bilingual environment. We have also written material for teachers to support them to provide high-quality Arabic language learning settings.', '2023-02-24 11:01:07', '2023-02-24 11:01:07'),
(16, 'curriculum', 'section_one_heading', 'Reading', '2023-02-24 11:01:07', '2023-02-24 11:01:07'),
(17, 'curriculum', 'section_one_description', 'As decreasing numbers of children wanting to learn Arabic are reported across the world, it is clear that an innovative approach is needed.To develop an innovative approach, we asked questions about hove children learn and what approaches could be reconstructed in Arabic to build a learning environment involving choices, autonomy and motivation. We set aside preconceived ideas, to look at teaching Arabic from a new point of view. That is how we came up with something new.', '2023-02-24 11:01:07', '2023-02-24 11:08:27'),
(18, 'curriculum', 'section_two_heading', 'Learning Letters', '2023-02-24 11:01:07', '2023-02-24 11:01:07'),
(19, 'curriculum', 'section_two_description', 'Learning letter-sound relationships is a particular challenge in Arabic as each letter of the alphabet has a different grapheme when at the beginning, the middle or the end of a word.\r\nTACK has developed innovative approaches to learning how to recognise Arabic letters drawing on research on how children learn to discriminate letter shapes.', '2023-02-24 11:01:07', '2023-02-24 11:01:07'),
(20, 'curriculum', 'section_three_heading', 'Phonics', '2023-02-24 11:01:07', '2023-02-24 11:08:27'),
(21, 'curriculum', 'section_three_description', 'Phonics is an important element in the teaching of reading in all alphabetic languages. Learning the relationships between the letters we see and the speech sounds we hear is particularly important in the early stages of learning. This learning is much more effective if it is systematic.\r\nTACK is researching how this can be applied to Arabic and taught systematically and thoroughly.', '2023-02-24 11:01:07', '2023-02-24 11:08:27'),
(22, 'curriculum', 'banner', 'image.png', '2023-02-24 11:01:07', '2023-02-24 18:45:48'),
(23, 'curriculum', 'section_one_image', 'p-4.png', '2023-02-24 11:01:07', '2023-02-24 11:01:07'),
(24, 'curriculum', 'section_two_image', 'dvlp 2.png', '2023-02-24 11:01:07', '2023-02-24 11:01:07'),
(25, 'curriculum', 'section_three_image', 'dvlp 3.png', '2023-02-24 11:08:27', '2023-02-24 11:08:47'),
(26, 'almayeeyah', 'almayeeyah', '<h2>What is ALMayeeyah?</h2>\n\n    <div class=\"no-list\">\n        <h6 class=\"page-h4\">Who are we?</h6>\n        <hr>\n        <p class=\"sb-para medium\">The Arabic Club for Kids offers an After School Club for primary aged children. , meaning Togetherness, will offer fun, games and active learning after school, in a spirit of inclusiveness, respect and equality.</p>\n    </div>\n\n\n    <div class=\"no-list\">\n        <h6 class=\"page-h4\">What are we offering?</h6>\n        <p class=\"sb-para medium\">Our vision is to create a fun and inclusive environment to celebrate Arabic language and culture and aims to infuse enthusiasm and a positive attitude towards the Arabic language.</p>\n    </div>\n\n    <div class=\"with-list\">\n        <h6 class=\"page-h4\">How will we achieve that vision?</h6>\n\n        <ul class=\"page-ul ul1\">\n            <li class=\"page-li sb-para medium\">We offer a fun way to develop language skills and self-confidence to use Arabic no matter what the language of the home. All are equally welcome - children whose family speak Arabic, have a heritage connection and children who are new to the language.</li>\n\n            <li class=\"page-li sb-para medium\">in a caring, child-centred environment, children will develop spoken language through their play, communication and socialisation with other club members. We actively promote care and respect for one another regardless of the language used at home or birthplace. </li>\n\n            <li class=\"page-li sb-para medium\">Our approach supports children to participate with confidence and enjoy themselves. Arabic is taught using fun and active ways of hearing and using the language. The aim is to encourage children to learn Arabic in the same way they learned to speak the language used at home - by participating. We willcelebrate and promote awareness, appreciation and understanding of the diverse peoples and cultures of the Arabic-speaking world.</li>\n\n            <li class=\"page-li sb-para medium\">Foster active relationships with parents with termly celebrations showcasing progress.</li>\n            <li class=\"page-li sb-para medium\">Celebrate and promote awareness, appreciation and understanding of the diverse peoples and cultures of the Arabic-speaking world.</li>\n        </ul>\n    </div>\n\n    <div class=\"no-list\">\n        <h6 class=\"page-h4\">What to expect?</h6>\n        <p class=\"sb-para medium\">Each session will be themed to offer continuity to learning vocabulary and language structures. Activities across the year will include:\n        </p>\n    </div>\n\n    <div class=\"with-list\">\n        <ul class=\"page-ul ul2 \">\n            <li class=\"page-li-near sb-para medium\">Spoken and written language activities</li>\n            <li class=\"page-li-near sb-para medium\">Team games and activities</li>\n            <li class=\"page-li-near sb-para medium\">Learning about Arab countries and famous cultural places</li>\n            <li class=\"page-li-near sb-para medium\">Preparing and eating food from Arabic-speaking countries</li>\n            <li class=\"page-li-near sb-para medium\">Learning about and engaging in some of the celebrations and holidays of those countries</li>\n            <li class=\"page-li-near sb-para medium\">Listening to and learning about Arabic music and learning to sing songs in Arabic</li>\n            <li class=\"page-li-near sb-para medium\">Playing active games and action songs to develop phrases and vocabulary</li>\n            <li class=\"page-li-near sb-para medium\">Drama and role-play activities</li>\n            <li class=\"page-li-near sb-para medium\">Story-telling activities</li>\n        </ul>\n    </div>\n\n    <div class=\"l-foot\">\n        <p class=\"sb-para medium\">For more information and to arrange an appointment to discuss how to bring to your school</p>\n    </div>', NULL, '2023-02-25 06:20:09'),
(27, 'about', 'who_is_who', '<div class=\"hr-center-heading\" style=\"margin: 2rem 0px; padding: 0px; text-align: center; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 10px;\"><h2 style=\"margin-bottom: 0px; padding: 0px; font-size: 3.5rem;\">Who\'s Who!</h2><hr style=\"margin-right: auto; margin-left: auto; padding: 0px; height: 0.5rem; width: 4rem; border-width: initial; border-style: none; border-top-color: initial; outline: none; background-color: rgb(133, 163, 215); border-radius: 1rem;\"></div><p class=\"medium\" style=\"padding: 0px; font-size: 1.8rem; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">The people who work in or act as consultants for the Arabic Club for Kids (TACK) are joined together with a shared vision and mission. Spring boarding from this everyone who works for us shares a passion for teaching and learning to create an inclusive and relevant 21 st century culture at TACK, welcoming all children wanting to learn Arabic as a language of today’s world, in a fun, caring and evidence informed learning environment. Teachers who join our teaching community come with a variety of prior qualifications relevant to teaching children and to Arabic, and all will have worked through a hands on training and observation period and will also be engaged in continued professional development. Consultants who work with us are deep listeners, and dedicated to interactive communication. They provide frameworks, strategies and together with some Arabists who work with us, we create a ‘Think-Tank’ and look at how these frameworks and strategies can be applied to the language of Arabic, from its components to its whole, to inform our pedagogies, resource production and publication.</p>', '2023-02-26 09:01:40', '2023-02-26 09:04:05'),
(28, 'about', 'research_and_development', '<div class=\"hr-center-heading\" style=\"margin: 2rem 0px; padding: 0px; text-align: center; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 10px;\"><h2 style=\"margin-bottom: 0px; padding: 0px; font-size: 3.5rem;\">Research & Developement</h2><hr style=\"margin-right: auto; margin-left: auto; padding: 0px; height: 0.5rem; width: 4rem; border-width: initial; border-style: none; border-top-color: initial; outline: none; background-color: rgb(133, 163, 215); border-radius: 1rem;\"></div><p style=\"padding: 0px; font-size: 1.8rem; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; text-align: center;\">The Arabic Club for Kids was founded in 2007 in response to finding that the quality, standards and choices for Arabic language learning for children fell short of good practice and lacked the evidence informed, engaging delivery of learning environments that we should both insist on for our children and those which they are used to in their daily schools in the UK. Driven by this, from its inception, The Arabic Club for Kids thus made a dramatic impact through the changes it brought, making the learning of Arabic child centric, fun and relevant through activity based learning strategies and resources that were put into place. These were developed through strategic consultations with</p>', '2023-02-26 09:03:29', '2023-02-26 09:30:15'),
(29, 'about', 'latest_news', '<div class=\"hr-center-heading\" style=\"margin: 2rem 0px; padding: 0px; text-align: center; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 10px; background-color: rgb(232, 232, 232);\"><h2 style=\"margin-bottom: 0px; padding: 0px; font-size: 3.5rem;\">Latest News and Events</h2><hr style=\"margin-right: auto; margin-left: auto; padding: 0px; height: 0.5rem; width: 4rem; border-width: initial; border-style: none; border-top-color: initial; outline: none; background-color: rgb(133, 163, 215); border-radius: 1rem;\"></div><p class=\"-b\" style=\"padding: 0px; font-size: 1.8rem; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; background-color: rgb(232, 232, 232);\">Keeping Arabic relevant to the lives of the children and families that come to us and making Arabic part of their enriching and fun-filled experiences is something that the Arabic Club for Kids is increasingly active about. Unlike other skills children may learn, such as music, sports or other skills, language is a realm of its own in our lives. It is after all a means of communication and a means of access to information, which is fundamental/part and parcel of how we operate as human beings, in all the above mentioned other skills that children may be learning. In today’s global world multiple languages are in-play simultaneously. The events that the Arabic Club for Kids seeks to create, and includes, social situations where fun-filled opportunities including Arabic and fun go together</p>', '2023-02-26 09:03:29', '2023-02-26 09:16:14'),
(30, 'about', 'special_events', 'Each summer we aim to run a fun-filled, informal sports day event. We run the sports day activities largely in Arabic and immerse the children in a world where fun, sports and games go together with Arabic.', '2023-02-26 09:03:29', '2023-02-26 09:31:26'),
(31, 'ethos', 'section_one_description', '1', '2023-03-06 02:06:18', '2023-03-06 02:06:18'),
(32, 'ethos', 'section_two_description', '1', '2023-03-06 02:06:18', '2023-03-06 02:06:18'),
(33, 'ethos', 'engage_heading', '1', '2023-03-06 02:06:18', '2023-03-06 02:06:18'),
(34, 'ethos', 'engage_description', '1', '2023-03-06 02:06:18', '2023-03-06 02:06:18'),
(35, 'ethos', 'equip_heading', '1', '2023-03-06 02:06:18', '2023-03-06 02:06:18'),
(36, 'ethos', 'equip_description', '1', '2023-03-06 02:06:18', '2023-03-06 02:06:18'),
(37, 'ethos', 'empower_heading', '1', '2023-03-06 02:06:18', '2023-03-06 02:06:18'),
(38, 'ethos', 'empower_description', '1', '2023-03-06 02:06:18', '2023-03-06 02:06:18'),
(39, 'ethos', 'respect_heading', '1', '2023-03-06 02:06:18', '2023-03-06 02:06:18'),
(40, 'ethos', 'respect_description', '1', '2023-03-06 02:06:18', '2023-03-06 02:06:18'),
(41, 'partnership', 'partnership', '<p><br></p><div class=\"vhdiv\" style=\"margin: 0px; padding: 0px; position: absolute; width: 1280px; height: 8rem; z-index: 1; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; box-shadow: rgba(113, 113, 113, 0.698) 0.5rem 0px 1rem 0px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 10px;\"><header class=\"header\" id=\"header\" style=\"margin: 0px; padding: 2rem 0px; position: relative; height: 100vh;\"><nav class=\"navbar container\" style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; max-width: 140rem; width: 1152px;\"><div class=\"for-respon\" style=\"margin: 0px 12rem 0px 0px; padding: 0px;\"><ul class=\"nav-list-cont\" style=\"margin-bottom: 0px; position: relative; display: flex; gap: 5rem; justify-content: center; width: 583.333px;\"><div class=\"resp-btn\" style=\"margin: 0px; padding: 0px;\"></div></ul></div><li class=\"search-box\" style=\"margin: 0px; padding: 0px; position: absolute; display: flex; align-items: center; width: 12rem; height: 3rem; right: 6rem; top: 2rem;\"><input type=\"text\" class=\"search-input hidden\" style=\"padding-right: 0.5rem; padding-left: 0.5rem; opacity: 0; width: 90px; height: 2rem; outline: none; border-width: initial; border-style: none; border-color: initial;\"><div class=\"search-link\" style=\"margin: 0.5rem; padding: 0px; display: flex; align-items: center; justify-content: center; font-size: 2rem; cursor: pointer; z-index: 3;\"><iconify-icon icon=\"material-symbols:search-rounded\" style=\"display: inline-block; vertical-align: 0px; margin: 0px; padding: 0px;\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" viewBox=\"0 0 24 24\"><path fill=\"currentColor\" d=\"m18.9 20.3l-5.6-5.6q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.612 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l5.625 5.625q.275.275.275.675t-.3.7q-.275.275-.7.275t-.7-.275ZM9.5 14q1.875 0 3.188-1.313T14 9.5q0-1.875-1.313-3.188T9.5 5Q7.625 5 6.312 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14Z\"></path></svg></iconify-icon></div></li></nav></header></div><div class=\"partner-page container\" style=\"margin-top: 100px; margin-bottom: 0px; padding: 0px; max-width: 140rem; width: 1152px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 10px;\"><div class=\"uppermost\" style=\"margin: 3rem 0px; padding: 0px;\"><div class=\"hr-left-heading\" style=\"margin: 0px; padding: 0px;\"><h3 style=\"margin-bottom: 0px; padding: 0px; font-size: 3rem;\">What is a TACK School Partnership?</h3><hr style=\"padding: 0px; box-sizing: border-box; width: 3rem; height: 0.5rem; border-width: initial; border-style: none; border-top-color: initial; outline: none; background-color: red; border-radius: 1rem;\"></div><p class=\"sb-para medium\" style=\"padding: 0px; font-size: 1.6rem;\">A TACK School Partnership is an alliance or affiliation between TACK and a school or other educational organisation. It assists both partners to achieve their educational vision and contribute to their mission. The TACK school partnership is an informal way for both partners to benefit from the other by sharing their knowledge, experience and resources, so that they can provide better learning outcomes for their students. A partnership may not generate further income streams between the two parties though may indirectly lead tofurther business for one or both of the parties or include activity that requires payment between the parties.</p></div><div class=\"no-list\" style=\"margin: 1.8rem 0px; padding: 0px;\"><h5 class=\"page-h4\" style=\"margin-top: 0.5rem; padding: 0px; font-size: 2rem;\">What is the purpose of a partnership between TACK and a school or organisation?</h5><p class=\"sb-para medium\" style=\"padding: 0px; font-size: 1.6rem;\">Both parties work to identify aspects that would mutually benefit their work. These become ‘targeted activities’. They are bespoke to each partnership but may include:</p></div><div class=\"with-list\" style=\"margin: 1.8rem 0px; padding: 0px;\"><h5 class=\"page-h4\" style=\"margin-top: 0.5rem; padding: 0px; font-size: 2rem;\">A Partner School may benefit by having</h5><ul class=\"page-ul\" style=\"margin-bottom: 0px;\"><li class=\"page-li sb-para medium\" style=\"margin: 1.5rem; padding: 0px; font-size: 1.6rem;\">A presence in the school’s calendar of cultural experiences - for example, Arabic celebrations, Arabic food</li><li class=\"page-li sb-para medium\" style=\"margin: 1.5rem; padding: 0px; font-size: 1.6rem;\">Support for reflecting Arabic in the school environment, for example, Arabic script in school displays</li><li class=\"page-li sb-para medium\" style=\"margin: 1.5rem; padding: 0px; font-size: 1.6rem;\">Advice and support for staff in order to celebrate and affirm Arabic culture in the school environment</li><li class=\"page-li sb-para medium\" style=\"margin: 1.5rem; padding: 0px; font-size: 1.6rem;\">Support for communication for Arabic-speaking pupils and families with limited English, for example, to</li><li class=\"page-li sb-para medium\" style=\"margin: 1.5rem; padding: 0px; font-size: 1.6rem;\">Achieve effective transitions into school where there is no or limited English at home</li><li class=\"page-li sb-para medium\" style=\"margin: 1.5rem; padding: 0px; font-size: 1.6rem;\">Support for the translation of key school documentation into Arabic</li><li class=\"page-li sb-para medium\" style=\"margin: 1.5rem; padding: 0px; font-size: 1.6rem;\">Link to the school website and listed as a partner on TACK website</li></ul></div><div class=\"with-list\" style=\"margin: 1.8rem 0px; padding: 0px;\"><h5 class=\"page-h4\" style=\"margin-top: 0.5rem; padding: 0px; font-size: 2rem;\">TACK may benefit from:</h5><ul class=\"page-ul\" style=\"margin-bottom: 0px;\"><li class=\"page-li medium sb-para\" style=\"margin: 1.5rem; padding: 0px; font-size: 1.6rem;\">Provision of space for after-school/weekend school resources</li><li class=\"page-li medium sb-para\" style=\"margin: 1.5rem; padding: 0px; font-size: 1.6rem;\">Opportunities to observe classrooms and classroom teaching</li><li class=\"page-li medium sb-para\" style=\"margin: 1.5rem; padding: 0px; font-size: 1.6rem;\">Dissemination of information to parents and the community via school information routes</li><li class=\"page-li medium sb-para\" style=\"margin: 1.5rem; padding: 0px; font-size: 1.6rem;\">Links to the TACK Website from the school website.</li></ul></div><div class=\"no-list\" style=\"margin: 1.8rem 0px; padding: 0px;\"><h5 class=\"page-h4\" style=\"margin-top: 0.5rem; padding: 0px; font-size: 2rem;\">What is involved in a TACK School Partnership?</h5><p class=\"sb-para medium\" style=\"padding: 0px; font-size: 1.6rem;\">Both partners will meet to clarify the activities and benefits they wish to take place as a result of the partnership. A memorandum of understanding will be created by TACK and signed by leadership of both organisations. The memorandum of agreement will clearly define a set of objectives and will reflect the needs of both partners entering an agreement via a Memorandum of Understanding.</p></div><div class=\"with-list\" style=\"margin: 1.8rem 0px; padding: 0px;\"><h4 class=\"page-h4\" style=\"margin-top: 0.5rem; padding: 0px; font-size: 2.5rem;\">It will include:</h4><ul class=\"page-ul\" style=\"margin-bottom: 0px;\"><li class=\"page-li sb-para medium\" style=\"margin: 1.5rem; padding: 0px; font-size: 1.6rem;\">The aims of the partnership</li><li class=\"page-li sb-para medium\" style=\"margin: 1.5rem; padding: 0px; font-size: 1.6rem;\">Who will be the partnership lead from each institution</li><li class=\"page-li sb-para medium\" style=\"margin: 1.5rem; padding: 0px; font-size: 1.6rem;\">Specific activities, year groups, deadlines and timescales the partnership will cover</li><li class=\"page-li sb-para medium\" style=\"margin: 1.5rem; padding: 0px; font-size: 1.6rem;\">How the performance (including impact and outcomes) of the partnership will be monitored</li><li class=\"page-li sb-para medium\" style=\"margin: 1.5rem; padding: 0px; font-size: 1.6rem;\">How the partnership will be funded (may not apply)</li></ul></div><div class=\"red-para sb-para bold\" style=\"margin: 0px 0px 50px; padding: 0px; font-size: 1.6rem; font-weight: 700; color: var(--red);\">Partners will agree how and when to monitor the impact and efficiency of their partnership so that the arrangement remains relevant to both.<br style=\"margin: 0px; padding: 0px;\">The partnership can be dissolved by either party as per the terms of agreement to be mutually agreed (and documented in the memorandum of understanding).</div></div>', '2023-03-06 03:17:23', '2023-03-06 03:20:05'),
(43, 'contact', 'section_one_heading', 'Staff Vacancies', '2023-03-08 00:30:28', '2023-03-08 00:30:28'),
(44, 'contact', 'section_one_description', '<div><span style=\"font-size: 1.8rem; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">If you are interested in working with us a teacher in our school, kindly send us your CV to info@arabicclub.co.uk. Even if we don’t have immediate vacancies we can keep your CV and contact you if a vacancy comes up as we are in the process of expanding our branches around London and the UK and also expand our number of classes within branches.</span><br></div>', '2023-03-08 00:30:28', '2023-03-08 00:30:28'),
(45, 'contact', 'section_two_heading', 'All applicants should:', '2023-03-08 00:30:28', '2023-03-08 00:30:28'),
(46, 'contact', 'section_two_description', '<ul class=\"should\" style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-bottom: 0px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 10px;\"><li class=\"sb-para medium\" style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; list-style-type: disc; margin: 1rem 2rem; padding: 0px; font-size: 1.6rem;\">Be fluent in Arabic both written and spoken Modern Standard/ Fusha as well as dialect.</li><li class=\"sb-para medium\" style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; list-style-type: disc; margin: 1rem 2rem; padding: 0px; font-size: 1.6rem;\">Have a range of skills in early years and early childhood between the ages of 3-14</li><li class=\"sb-para medium\" style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; list-style-type: disc; margin: 1rem 2rem; padding: 0px; font-size: 1.6rem;\">Have prior teaching experience</li></ul>', '2023-03-08 00:30:28', '2023-03-08 00:30:28'),
(47, 'contact', 'section_three_description', '<p class=\"medium\" style=\"margin-top: 1rem; padding: 0px; font-size: 1.8rem; color: rgb(255, 255, 255); font-family: Poppins, sans-serif;\">All applicants that are offered a job will be given a job role and be given an offer. All those who join will receive a contract. This will include&nbsp;<b style=\"margin: 0px; padding: 0px;\">(This will 5 Saturdays/Sundays of working at the school at a training rate)</b>&nbsp;which they would need to complete successfully. After this applicants will start working with us at their rate of pay as agreed.</p><p class=\"bold\" style=\"margin-top: 1rem; margin-bottom: 1rem; padding: 0px; font-size: 1.8rem; font-weight: 700; color: rgb(255, 255, 255); font-family: Poppins, sans-serif;\">Please note we cannot currently arrange visas and require applicants to be able to make their own arrangements if necessary.</p>', '2023-03-08 00:30:28', '2023-03-08 00:30:28'),
(48, 'contact', 'section_four_description', '<span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px; text-align: center;\">If you are interested in working with us please call us at&nbsp;</span><span class=\"h-red\" style=\"margin: 0px; padding: 0px; color: var(--red); font-family: Poppins, sans-serif; font-size: 18px; text-align: center;\">020 79939010</span><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px; text-align: center;\">&nbsp;or you can mail us at&nbsp;</span><span class=\"h-red bold\" style=\"margin: 0px; padding: 0px; font-weight: 700; color: var(--red); font-family: Poppins, sans-serif; font-size: 18px; text-align: center;\">Info@arabicclub.co.uk</span>', '2023-03-08 00:30:28', '2023-03-08 00:30:28'),
(49, 'contact', 'section_five_heading', 'Contact Us', '2023-03-08 00:30:28', '2023-03-08 00:30:28'),
(50, 'contact', 'section_five_description', '<p class=\"h-yellow\" style=\"margin-top: 1rem; padding: 0px; font-size: 1.8rem; color: var(--yellow); max-width: 90%; font-family: Poppins, sans-serif;\">You can send us any questions or comments and we will contact you soon</p><p style=\"margin-top: 1rem; padding: 0px; font-size: 1.8rem; max-width: 90%; color: rgb(255, 255, 255); font-family: Poppins, sans-serif;\">For enrolment or other while in-school</p><p class=\"bold\" style=\"margin-top: 1rem; padding: 0px; font-size: 1.8rem; font-weight: 700; max-width: 90%; color: rgb(255, 255, 255); font-family: Poppins, sans-serif;\">South London Branch: 07958072728</p><p class=\"bold\" style=\"margin-top: 1rem; margin-bottom: 1rem; padding: 0px; font-size: 1.8rem; font-weight: 700; max-width: 90%; color: rgb(255, 255, 255); font-family: Poppins, sans-serif;\">North London Branch: 07958072728</p>', '2023-03-08 00:30:28', '2023-03-08 00:30:28'),
(52, 'fee', 'section_one_description', '<div class=\"main-box class=\'flex-layout-c\'\" style=\"margin-top: 10rem;\">\r\n        <div class=\"small-container\">\r\n            <h3>Fee Strucute</h3>\r\n    \r\n            <div class=\"table\">\r\n                <!-- ---------- title ---------- -->\r\n                <p class=\"s-para bold title\">class</p>\r\n                <p class=\"s-para bold title\">Fees South London Branch</p>\r\n                <p class=\"s-para bold title\">Fees North London Branch</p>\r\n                <!-- ---------- title ---------- -->\r\n                \r\n                <!-- ---------- data ---------- -->\r\n    \r\n                <!-- row 1 -->\r\n                <div class=\"fee-data\">\r\n                    <p class=\"bold s-para\">Kindergarden</p>\r\n                    <p class=\"regular s-para\">Accepts children at the age of 3-5 years and children will stay here 1 or 2 years</p>\r\n                </div>\r\n                <div class=\"fee-data\">\r\n                    <p class=\"bold s-para\">499/term/child.</p>\r\n                    <p class=\"regular s-para\">Early bird and yearly payment options avail discounts</p>\r\n                </div>\r\n                <div class=\"fee-data\">\r\n                    <p class=\"bold s-para\">499/term/child.</p>\r\n                    <p class=\"regular s-para\">Early bird and yearly payment\r\n                        options avail discounts</p>\r\n                </div>\r\n                <!-- row 1 -->\r\n    \r\n                <!-- row 2 -->\r\n                <div class=\"fee-data\">\r\n                    <p class=\"bold s-para\">Foundation</p>\r\n                    <p class=\"regular s-para\">accepts children at the age of 5-7 years and children will stay here 1 year</p>\r\n                </div>\r\n                <div class=\"fee-data\">\r\n                    <p class=\"bold s-para\">479/term/child.</p>\r\n                    <p class=\"regular s-para\">Early bird and yearly payment options avail discounts</p>\r\n                </div>\r\n                <div class=\"fee-data\">\r\n                    <p class=\"bold s-para\">470/term/child.</p>\r\n                    <p class=\"regular s-para\">Early bird and yearly payment\r\n                        options avail discounts</p>\r\n                </div>\r\n                <!-- row 2 -->\r\n    \r\n                <!-- row 3 -->\r\n                <div class=\"fee-data\">\r\n                    <p class=\"bold s-para\">Level 1</p>\r\n                    <p class=\"regular s-para\">accepts children at the age of 7-9 years and children will stay here 1 year</p>\r\n                </div>\r\n                <div class=\"fee-data\">\r\n                    <p class=\"bold s-para\">479/term/child.</p>\r\n                    <p class=\"regular s-para\">Early bird and yearly payment options avail discounts</p>\r\n                </div>\r\n                <div class=\"fee-data\">\r\n                    <p class=\"bold s-para expect\">(Branch will open as school expands yearly)</p>\r\n                </div>\r\n                <!-- row 3 -->\r\n    \r\n                <!-- row 4 -->\r\n                <div class=\"fee-data\">\r\n                    <p class=\"bold s-para\">Level 2</p>\r\n                    <p class=\"regular s-para\">accepts children at the age of 9-12 years and children will stay here 1 year</p>\r\n                </div>\r\n                <div class=\"fee-data\">\r\n                    <p class=\"bold s-para\">499(tbc)/term/child.</p>\r\n                    <p class=\"regular s-para\">Early bird and yearly payment options avail discounts</p>\r\n                </div>\r\n                <div class=\"fee-data\">\r\n                    <p class=\"bold s-para expect\">(Branch will open as school expands yearly)</p>\r\n                </div>\r\n                <!-- row 4 -->\r\n                \r\n                <!-- last row  -->\r\n                <p class=\"s-para medium f-f\">Further Level</p>\r\n                <p class=\"medium expect s-para f-f\">Further branches will open as school expands and if enough children enroll per class </p>\r\n                <!-- last row  -->\r\n            </div>\r\n        </div>\r\n    \r\n        <div class=\"foot\" style=\"margin-bottom: -10px;\">\r\n            <p>Please email us for more information at <b>info@arabicclub.co.uk</b>  to discuss further or call us at <b>020 79939 010</b> </p>\r\n        </div>\r\n    </div>', '2023-03-08 00:43:48', '2023-03-08 00:54:09'),
(53, 'fee', 'section_one_heading', 'Fee Structure', '2023-03-08 00:56:19', '2023-03-08 00:56:19'),
(54, 'footer', 'section_one_description', '<span style=\"color: rgb(255, 255, 255); font-family: Poppins, sans-serif; font-size: 14px; background-color: rgb(169, 202, 182);\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</span>', '2023-03-08 01:15:02', '2023-03-08 01:15:02'),
(55, 'footer', 'for_enquiries', '02079939010', '2023-03-08 01:20:27', '2023-03-08 01:20:27'),
(56, 'footer', 'for_in_school_enquiries', '07958 072 782', '2023-03-08 01:20:27', '2023-03-08 01:20:27'),
(57, 'footer', 'facebook', 'facebook.com', '2023-03-08 01:20:27', '2023-03-08 01:20:27'),
(58, 'footer', 'twitter', 'twitter.com', '2023-03-08 01:20:27', '2023-03-08 01:20:27'),
(59, 'footer', 'instagram', 'instagram.com', '2023-03-08 01:20:27', '2023-03-08 01:20:27'),
(60, 'footer', 'linkedin', 'linkedin.com', '2023-03-08 01:20:27', '2023-03-08 01:20:27'),
(61, 'week_pop', 'week_pop', ' <div class=\"container\">\n        <h4>South London Branch</h4>\n        <h6>Timings : Sunday mornings 10am-1pm.</h6>\n\n        <p class=\"regular\">The South London branch is easily accessed through good transport routes including several bus routes and nearest tube? Stations []being a short walk or short bus ride away. Parking is  also easily available for free on Sundays near the school if you are travelling in by car. At the South London branch we have large classrooms with appropriate furniture and ambience for our age groups. We also have access to internet and television if we wish to use a variety of resources that also exist on-line. Children also use the large and lovely playground with  a variety of different play areas after their morning snack and love enjoying outdoor play with us at break time. We also use the playground for special events we host. Please contact us on 0207 9939010 or info@arabicclub.co.uk mentioning which the branch you are interested in and your child’s age and year group in school if you would like to know more about enrolment or have any questions about our school. We run an Arabic Book Borrowing Service for which parents are required to pay 10 pounds de posit, which will be refunded  when you leave the school. We provide all stationary you will need to use with us. We ask children to be dressed in comfortable clothes for work and play and ask you bring in a labelled water bottle, and a bag that allows them to carry their notebooks home and their Arabic library book.</p>\n\n         <!-- ------------- buuton ------------------  -->\n         <div class=\"help-btn\">\n            <a href=\"#\" class=\"previous btn-1\">Term Date</a>\n            <a href=\"#\" class=\"next btn-1\">View Classrooms</a>\n        </div>\n    </div>', '2023-03-08 01:34:42', '2023-03-08 01:34:42'),
(62, 'research', 'heading', 'Our Publication & Resources', '2023-03-08 02:04:44', '2023-03-08 02:04:44'),
(63, 'research', 'description', '<span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px; text-align: center;\">In order to create a fun and engaging learning environment in all of our provision, we have developed a range of curriculum resources that support the development of Arabic literacy and also to create a bilingual environment. We have also written material for teachers to support them to provide high-quality Arabic language learning settings.</span>', '2023-03-08 02:04:44', '2023-03-08 02:04:44'),
(64, 'research', 'section_one_heading', 'Reading', '2023-03-08 02:04:44', '2023-03-08 02:04:44'),
(65, 'research', 'section_one_description', '<span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">TACK has researched and published a series of texts to teach reading skills in Arabic. These vibrant books offer plenty of opportunities for building oral and written language as the children learn to read. </span><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">(Link to the Arabic Club Readers on the OUP or Amazon website)</span><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\"></span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">We have developed a method of assessing reading progress that enables teachers to match books to the level of each individual child and fine-tune reading instruction to make sure that progress is consistent and sustained.</span>', '2023-03-08 02:04:44', '2023-03-08 02:06:13'),
(66, 'research', 'section_two_heading', 'Learning Letters', '2023-03-08 02:04:44', '2023-03-08 02:04:44'),
(67, 'research', 'section_two_description', '<span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">Learning letter-sound relationships is a particular challenge in Arabic as each letter of the alphabet has a different grapheme when at the beginning, the middle or the end of a word.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">TACK has developed innovative approaches to learning how to recognise Arabic letters drawing on research on how children learn to discriminate letter shapes.</span>', '2023-03-08 02:04:44', '2023-03-08 02:04:44'),
(68, 'research', 'section_three_heading', 'Phonics', '2023-03-08 02:04:44', '2023-03-08 02:04:44'),
(69, 'research', 'section_three_description', '<span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">Phonics is an important element in the teaching of reading in all alphabetic languages. Learning the relationships between the letters we see and the speech sounds we hear is particularly important in the early stages of learning. This learning is much more effective if it is systematic.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">TACK is researching how this can be applied to Arabic and taught systematically and thoroughly.</span>', '2023-03-08 02:04:44', '2023-03-08 02:04:44'),
(70, 'research', 'section_four_heading', 'Oral Language', '2023-03-08 02:04:44', '2023-03-08 02:04:44'),
(71, 'research', 'section_four_description', '<span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">Oral language is the foundation of reading and writing skills, even when the spoken form differs from the written form.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">TACK seeks to create authentic and dialogic environments for language learning. Extra- curricular themed days make language learning fun and exciting.</span>', '2023-03-08 02:04:44', '2023-03-08 02:04:44'),
(72, 'research', 'publication_heading', 'Dr. Sue Bodman', '2023-03-08 02:04:44', '2023-03-08 02:04:44'),
(73, 'research', 'publication_description', '<span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px; background-color: rgb(232, 232, 232);\">National Lead, Reading Recovery, Programme Leader, MA in Reading Recovery and Literacy Leadership, Module Leader,Dissertations and Reports in MA LLLD and MARRLL</span>', '2023-03-08 02:04:44', '2023-03-08 02:04:44'),
(74, 'research', 'publication_details', '<p style=\"margin-bottom: 0px; padding: 0px; font-size: 1.8rem; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; background-color: rgb(232, 232, 232);\">Dr Sue Bodman works at the Institute of Education, UCL\'s Faculty of Education and Society, the world-leading centre for research and teaching in education and social science. This institution has been ranked number one for education worldwide since 2014 in the QS World University Rankings by Subject.</p><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 10px; background-color: rgb(232, 232, 232);\"><p style=\"margin-bottom: 0px; padding: 0px; font-size: 1.8rem; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; background-color: rgb(232, 232, 232);\">She has a diverse portfolio of work, teaching on masters and doctoral programmes in the areas of literacy development, literacy difficulties and research methods. She also works with teachers, teacher educators and publishers, in many international contexts. Sue’s research interests and publications include teacher education, continuing professional development for teachers, language development, literacy learning, literacy learning in bilingual settings and literacy interventions. Before moving to higher education in 2002, Sue worked as a classroom teacher and teacher adviser. She is passionate about supporting teachers working in all age phases to develop effective literacy programmes. Sue first met Dr Hamiduddin in 2009. They have spent the last 10 years working together on a variety of projects to achieve change for the better in Arabic literacy teaching and learning.</p><div><br></div><div class=\"help-btn\" style=\"margin: 4rem 0px; padding: 0px; display: flex; -webkit-box-pack: center; justify-content: center; font-size: 1.6rem; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; background-color: rgb(232, 232, 232);\"></div>', '2023-03-08 02:04:44', '2023-03-08 02:04:44'),
(75, 'research', 'banner', 'Bitmap.png', '2023-03-08 02:06:13', '2023-03-08 02:06:13'),
(76, 'research', 'section_one_image', 'Bitmap.png', '2023-03-08 02:06:13', '2023-03-08 02:06:13'),
(77, 'research', 'section_two_image', 'dvlp 2.png', '2023-03-08 02:06:13', '2023-03-08 02:06:13'),
(78, 'research', 'section_three_image', 'j-j 2.png', '2023-03-08 02:06:13', '2023-03-08 02:06:13'),
(79, 'research', 'section_four_image', 'j-j 2.png', '2023-03-08 02:06:13', '2023-03-08 02:06:13'),
(80, 'school_club', 'section_one_heading', 'Our After <br> School Clubs', '2023-03-14 18:34:28', '2023-03-14 18:57:27'),
(81, 'school_club', 'section_one_description', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy\r\n                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat. Lorem ipsum dolor sit amet,\r\n                        consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna\r\n                        aliquam erat.', '2023-03-14 18:34:28', '2023-03-14 19:05:05'),
(82, 'school_club', 'section_two_heading', 'What is AlMayeeyah?', '2023-03-14 18:34:28', '2023-03-14 18:34:28');
INSERT INTO `settings` (`id`, `page`, `key`, `value`, `created_at`, `updated_at`) VALUES
(83, 'school_club', 'section_two_description', '<span style=\"color: rgb(255, 255, 255); font-family: Poppins, sans-serif; font-size: 18px; background-color: rgb(196, 11, 11);\">AlMaeeyah is TACK’s new and innovatively designed after school club with the help of experts from the field of children’s education and language learning, keeping the aims young learners in after school fun in mind. AlMaeeyah after school clubs are lead by teacher’s from TACK who have undergone training specifically for the delivery of the after school programme with us. If you are interested in encouraging your school to open an TACK’s AlMaeeyah after school club, please let us know your interest and we can contact your school or if you want to encourage your school yourself,</span>', '2023-03-14 18:34:28', '2023-03-14 18:34:28'),
(84, 'school_club', 'section_three_heading', 'TACK School Partnership?', '2023-03-14 18:34:28', '2023-03-14 18:34:28'),
(85, 'school_club', 'section_three_description', '<div><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">A TACK School Partnership is an alliance or affiliation between TACK and a school or other educational organisation. It assists both partners to achieve their educational vision and contribute to their mission. The TACK school partnership is an informal way for both partners to benefit from the other by sharing their knowledge, experience and resources, so that they can provide better learning outcomes for their students.</span><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\"><br style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\"><span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">A partnership may not generate further income streams between the two parties though may indirectly lead to further business for one or both of the parties or include activity that requires payment between the parties.</span><br></div>', '2023-03-14 18:34:28', '2023-03-14 19:05:05'),
(86, 'school_club', 'section_one_image', 'p-1.png', '2023-03-14 18:34:28', '2023-03-14 18:34:28'),
(87, 'school_club', 'section_two_image', 'club photo.png', '2023-03-14 18:34:28', '2023-03-14 18:34:28'),
(88, 'school_club', 'admission_image', 'D:\\xampp\\tmp\\phpF047.tmp', '2023-03-14 18:34:28', '2023-03-14 18:34:28'),
(89, 'school_club', 'section_three_image', 'p-2.png', '2023-03-14 18:57:27', '2023-03-14 19:00:58'),
(90, 'weekend', 'section_one_heading', 'Our School Values', '2023-03-14 23:06:10', '2023-03-14 23:06:10'),
(91, 'weekend', 'section_one_description', '<span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; font-size: 18px;\">Our school is run as an Arabic language school (we do not teach religion). We believe in welcoming all children who want to learn the beautiful Arabic language as it exists in our 21st Century world today, as a live, dynamic modern language and also exudes which a rich culture, history and history of literature, to enable and empower children to use and apply Arabic as relevant in their lives.</span>', '2023-03-14 23:06:10', '2023-03-14 23:06:10'),
(92, 'weekend', 'banner', 'g-2.png', '2023-03-14 23:06:21', '2023-03-14 23:06:21'),
(93, 'class', 'section_one_heading', 'Our Weekend School', '2023-03-15 01:39:19', '2023-03-15 01:39:19'),
(94, 'class', 'section_one_description', '<font color=\"#000000\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer</font><br>', '2023-03-15 01:39:19', '2023-03-15 01:39:19'),
(95, 'class', 'section_two_heading', 'The Arabic Club for Babies and Toddlers TACK babies?', '2023-03-15 01:39:30', '2023-03-15 01:40:36'),
(96, 'class', 'section_two_description', '<h5 style=\"margin-top: 1rem; margin-bottom: 1rem; padding: 0px; font-size: 2rem; color: rgb(0, 143, 70); font-family: Poppins, sans-serif; letter-spacing: normal;\">Private Tution</h5><p style=\"margin-top: 2rem; margin-bottom: 2rem; padding: 0px; font-size: 1.8rem; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">We also cater to requests for private tuition. Private tuition is usually given at the child’s home. An allocated responsible parent/guardian/carer would need to be at the residence throughout the time that private tuition is given. Our private tuition tailors learning towards individual children and small group learning, including planning and review supporting the teaching.<span style=\"margin: 1rem 0px; padding: 0px; display: block; color: rgb(0, 143, 70);\">Our current fees for private tuition are generally:</span></p><p class=\"para-detail\" style=\"margin-top: 2rem; margin-bottom: 2rem; padding: 0px; font-size: 1.8rem; color: rgb(0, 0, 0); font-family: Poppins, sans-serif;\">1:1, 55 pounds/hour + transport<br style=\"margin: 0px; padding: 0px;\">2:1, 65 pounds/hour (or 32.5 pounds/child) + transport~<br style=\"margin: 0px; padding: 0px;\">larger groups - please email us to discuss further.</p>', '2023-03-15 01:39:30', '2023-03-15 01:40:36'),
(97, 'class', 'section_three_heading', '1', '2023-03-15 01:39:30', '2023-03-15 01:39:30'),
(98, 'class', 'section_three_description', '1', '2023-03-15 01:39:30', '2023-03-15 01:39:30'),
(99, 'class', 'section_one_image', 'g-3.png', '2023-03-15 01:39:30', '2023-03-15 01:39:30'),
(100, 'class', 'section_two_image', 'main-about-img.png', '2023-03-15 01:40:36', '2023-03-15 01:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `user_type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Saad', 'Farooq', 'admin@example.com', '2023-02-22 00:00:00', '$2y$10$76mbfnL7gEpxhQfABfoRhe8Jgr/bhyI8ugrF2.e/6rjvGY40e1gD.', 'admin', 'active', NULL, '2023-02-22 01:25:10', '2023-02-22 01:25:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_classes`
--
ALTER TABLE `our_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `our_classes`
--
ALTER TABLE `our_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
