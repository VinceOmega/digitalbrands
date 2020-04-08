-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 07:36 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u221166178_dg`
--

--
-- Dumping data for table `marketing_strong_views`
--

INSERT INTO `marketing_strong_views` (`id`, `name`, `value`) VALUES
(1, 'Test', 'a:40:{s:10:\"background\";a:5:{s:5:\"color\";s:0:\"\";s:4:\"type\";s:0:\"\";s:6:\"preset\";s:0:\"\";s:9:\"gradient1\";s:0:\"\";s:9:\"gradient2\";s:0:\"\";}s:8:\"category\";s:3:\"all\";s:5:\"class\";s:0:\"\";s:14:\"client_section\";a:2:{i:0;a:4:{s:5:\"field\";s:11:\"client_name\";s:4:\"type\";s:4:\"text\";s:6:\"before\";s:0:\"\";s:5:\"class\";s:16:\"testimonial-name\";}i:1;a:8:{s:5:\"field\";s:12:\"company_name\";s:4:\"type\";s:4:\"link\";s:6:\"before\";s:0:\"\";s:5:\"class\";s:19:\"testimonial-company\";s:3:\"url\";s:15:\"company_website\";s:9:\"link_text\";s:5:\"value\";s:16:\"link_text_custom\";s:0:\"\";s:7:\"new_tab\";i:1;}}s:12:\"column_count\";s:1:\"2\";s:7:\"content\";s:6:\"entire\";s:5:\"count\";i:-1;s:12:\"divi_builder\";i:0;s:14:\"excerpt_length\";i:55;s:10:\"font-color\";a:2:{s:4:\"type\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:9:\"form_ajax\";i:0;s:7:\"form_id\";s:1:\"1\";s:8:\"gravatar\";s:2:\"no\";s:2:\"id\";i:0;s:6:\"layout\";s:0:\"\";s:14:\"less_post_text\";s:9:\"Show less\";s:8:\"lightbox\";i:0;s:14:\"lightbox_class\";s:0:\"\";s:4:\"mode\";s:9:\"slideshow\";s:14:\"more_full_post\";s:1:\"0\";s:14:\"more_page_hook\";s:18:\"wpmtst_view_footer\";s:14:\"more_page_text\";s:22:\"Read more testimonials\";s:9:\"more_post\";i:0;s:18:\"more_post_ellipsis\";s:1:\"1\";s:18:\"more_post_in_place\";s:1:\"0\";s:14:\"more_post_text\";s:9:\"Read more\";s:5:\"order\";s:6:\"newest\";s:10:\"pagination\";i:0;s:19:\"pagination_settings\";a:11:{s:4:\"type\";s:6:\"simple\";s:3:\"nav\";s:5:\"after\";s:8:\"show_all\";b:0;s:9:\"prev_next\";b:1;s:9:\"prev_text\";s:16:\"&laquo; Previous\";s:9:\"next_text\";s:12:\"Next &raquo;\";s:18:\"before_page_number\";s:0:\"\";s:17:\"after_page_number\";s:0:\"\";s:8:\"end_size\";i:1;s:8:\"mid_size\";i:2;s:8:\"per_page\";i:5;}s:18:\"slideshow_settings\";a:17:{s:12:\"adapt_height\";i:1;s:18:\"adapt_height_speed\";d:0.5;s:10:\"auto_hover\";i:1;s:10:\"auto_start\";i:1;s:11:\"breakpoints\";a:4:{s:7:\"desktop\";a:4:{s:5:\"width\";i:1200;s:10:\"max_slides\";i:2;s:11:\"move_slides\";i:1;s:6:\"margin\";i:20;}s:5:\"large\";a:4:{s:5:\"width\";i:1024;s:10:\"max_slides\";i:2;s:11:\"move_slides\";i:1;s:6:\"margin\";i:20;}s:6:\"medium\";a:4:{s:5:\"width\";i:640;s:10:\"max_slides\";i:1;s:11:\"move_slides\";i:1;s:6:\"margin\";i:10;}s:5:\"small\";a:4:{s:5:\"width\";i:480;s:10:\"max_slides\";i:1;s:11:\"move_slides\";i:1;s:6:\"margin\";i:1;}}s:14:\"controls_style\";s:7:\"buttons\";s:13:\"controls_type\";s:4:\"none\";s:6:\"effect\";s:4:\"fade\";s:12:\"nav_position\";s:6:\"inside\";s:11:\"pager_style\";s:7:\"buttons\";s:10:\"pager_type\";s:4:\"none\";s:5:\"pause\";d:8;s:11:\"show_single\";a:3:{s:10:\"max_slides\";i:1;s:11:\"move_slides\";i:1;s:6:\"margin\";i:1;}s:5:\"speed\";d:1;s:18:\"stop_auto_on_click\";i:1;s:7:\"stretch\";i:0;s:4:\"type\";s:11:\"show_single\";}s:8:\"template\";s:6:\"modern\";s:17:\"template_settings\";a:3:{s:7:\"default\";a:3:{s:14:\"image_position\";s:4:\"left\";s:5:\"theme\";s:5:\"light\";s:6:\"quotes\";s:2:\"on\";}s:12:\"small-widget\";a:1:{s:14:\"image_position\";s:4:\"left\";}s:12:\"default-form\";a:1:{s:5:\"theme\";s:5:\"light\";}}s:9:\"thumbnail\";i:1;s:16:\"thumbnail_height\";i:0;s:14:\"thumbnail_size\";s:9:\"thumbnail\";s:15:\"thumbnail_width\";i:0;s:5:\"title\";i:1;s:10:\"title_link\";i:0;s:18:\"use_default_length\";s:1:\"1\";s:16:\"use_default_more\";s:1:\"0\";}');

--
-- Dumping data for table `marketing_terms`
--

INSERT INTO `marketing_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Uncategorized', 'uncategorized', 0);

--
-- Dumping data for table `marketing_term_relationships`
--

INSERT INTO `marketing_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0);

--
-- Dumping data for table `marketing_term_taxonomy`
--

INSERT INTO `marketing_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1);

--
-- Dumping data for table `marketing_usermeta`
--

INSERT INTO `marketing_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'Dev'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'marketing_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'marketing_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'theme_editor_notice'),
(15, 1, 'show_welcome_panel', '1'),
(16, 1, 'session_tokens', 'a:1:{s:64:\"ae7d2288ce742051c60a87517488a771de6766bea5b4fbc4ce89a4d629e77665\";a:4:{s:10:\"expiration\";i:1586488210;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36\";s:5:\"login\";i:1586315410;}}'),
(17, 1, 'marketing_dashboard_quick_press_last_post_id', '27'),
(18, 1, 'community-events-location', 'a:1:{s:2:\"ip\";s:9:\"127.0.0.0\";}'),
(19, 1, 'marketing_user-settings', 'libraryContent=browse'),
(20, 1, 'marketing_user-settings-time', '1585006407');

--
-- Dumping data for table `marketing_users`
--

INSERT INTO `marketing_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'Dev', '$P$BDlrw3Ys5zmTKU9hGSsdJvsF6pBjAf.', 'dev', 'vince.omega@gmail.com', 'http://dg.local', '2020-03-13 19:17:58', '', 0, 'Dev');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
