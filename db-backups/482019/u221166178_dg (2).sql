-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 07:39 PM
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
-- Dumping data for table `marketing_postmeta`
--

INSERT INTO `marketing_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(3, 2, '_edit_lock', '1584310461:1'),
(4, 3, '_edit_lock', '1584162122:1'),
(5, 6, '_edit_lock', '1584310468:1'),
(6, 8, '_edit_lock', '1584310488:1'),
(7, 10, '_edit_lock', '1584310501:1'),
(8, 12, '_edit_lock', '1584310519:1'),
(9, 14, '_edit_lock', '1585357012:1'),
(10, 16, '_edit_lock', '1585357018:1'),
(11, 18, '_edit_lock', '1585357024:1'),
(12, 20, '_edit_lock', '1586316721:1'),
(13, 23, '_edit_last', '1'),
(14, 23, '_edit_lock', '1585006276:1'),
(15, 24, '_wp_attached_file', '2020/03/942413_796829087062879_368966657613387008_n.png'),
(16, 24, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:224;s:6:\"height\";i:187;s:4:\"file\";s:55:\"2020/03/942413_796829087062879_368966657613387008_n.png\";s:5:\"sizes\";a:4:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:55:\"942413_796829087062879_368966657613387008_n-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:15:\"bones-thumb-600\";a:4:{s:4:\"file\";s:55:\"942413_796829087062879_368966657613387008_n-224x150.png\";s:5:\"width\";i:224;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:15:\"bones-thumb-300\";a:4:{s:4:\"file\";s:55:\"942413_796829087062879_368966657613387008_n-224x100.png\";s:5:\"width\";i:224;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"post-thumbnail\";a:4:{s:4:\"file\";s:55:\"942413_796829087062879_368966657613387008_n-125x125.png\";s:5:\"width\";i:125;s:6:\"height\";i:125;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(17, 23, 'tss_designation', ''),
(18, 23, 'tss_company', ''),
(19, 23, 'tss_location', ''),
(20, 26, '_edit_last', '1'),
(21, 26, '_edit_lock', '1585006504:1'),
(22, 26, 'tss_layout', 'carousel1'),
(23, 26, 'tss_desktop_column', '3'),
(24, 26, 'tss_carousel_speed', '2000'),
(25, 26, 'tss_carousel_options', 'autoplay'),
(26, 26, 'tss_carousel_options', 'dots'),
(27, 26, 'tss_carousel_autoplay_timeout', '5000'),
(28, 26, 'tss_pagination', '1'),
(29, 26, 'tss_posts_per_page', '5'),
(30, 26, 'tss_load_more_button_text', 'Load more'),
(31, 26, 'tss_image_size', 'thumbnail'),
(32, 26, 'tss_custom_image_size', 'a:3:{s:5:\"width\";s:0:\"\";s:6:\"height\";s:0:\"\";s:4:\"crop\";s:4:\"soft\";}'),
(33, 26, 'tss_image_type', 'normal'),
(34, 26, 'tss_margin', 'default'),
(35, 26, 'tss_post__in', ''),
(36, 26, 'tss_post__not_in', ''),
(37, 26, 'tss_limit', ''),
(38, 26, 'tss_order_by', 'date'),
(39, 26, 'tss_order', 'DESC'),
(40, 26, 'tss_item_fields', 'author'),
(41, 26, 'tss_item_fields', 'author_img'),
(42, 26, 'tss_item_fields', 'testimonial'),
(43, 26, 'tss_item_fields', 'designation'),
(44, 26, 'tss_item_fields', 'company'),
(45, 26, 'tss_item_fields', 'location'),
(46, 26, 'tss_primary_color', '#0367bf'),
(47, 14, '_edit_last', '1'),
(48, 14, '_wp_page_template', 'default'),
(49, 16, '_edit_last', '1'),
(50, 16, '_wp_page_template', 'default'),
(51, 18, '_edit_last', '1'),
(52, 18, '_wp_page_template', 'default'),
(53, 28, '_edit_last', '1'),
(54, 28, '_edit_lock', '1586362330:1'),
(55, 28, '_thumbnail_id', '24'),
(56, 28, 'tss_designation', 'USA'),
(57, 28, 'tss_company', 'USA'),
(58, 28, 'tss_location', 'USA'),
(59, 31, '_edit_last', '1'),
(60, 31, 'mpsp_posts_bg_color', ''),
(61, 31, 'mpsp_posts_description_color', ''),
(62, 31, 'mpsp_slide_speed', '200'),
(63, 31, 'mpsp_slide_transistion', 'false'),
(64, 31, 'mpsp_slide_single', '4'),
(65, 31, 'mpsp_slide_autoplay', 'true'),
(66, 31, 'mpsp_slide_pagination', 'true'),
(67, 31, 'mpsp_slide_pagination_numbers', 'true'),
(68, 31, 'mpsp_slide_navigation', 'true'),
(69, 31, 'mpsp_slide_nav_button_position', ''),
(70, 31, 'mpsp_slide_nav_button_color', ''),
(71, 31, 'mpsp_posts_visible', '5'),
(72, 31, 'mpsp_posts_order', 'ASC'),
(73, 31, 'mpsp_posts_orderby', 'none'),
(74, 31, 'mpsp_posts_value', 'default'),
(75, 31, 'mpsp_slide_layout_custom', 'templates/mpsp_slider_generator_1'),
(76, 31, 'mpsp_slider_id', '31'),
(77, 31, 'tss_mpsp_slider_img_border', '100'),
(78, 31, '_edit_lock', '1586362593:1'),
(79, 34, '_edit_last', '1'),
(80, 34, 'tss_name', 'test'),
(81, 34, 'tss_ocupation', 'testi'),
(82, 34, 'tss_image', ''),
(83, 34, 'tss_testimonial', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel purus consectetur augue dictum suscipit vel sit amet magna. Proin varius ex a nunc pulvinar, quis maximus risus gravida. Curabitur vehicula purus vitae cursus suscipit. Praesent non euismod nisl, at sodales lacus. Vivamus ultricies tellus ipsum, ut interdum neque tempus non. Integer consectetur ante hendrerit augue vehicula, quis posuere mauris rhoncus. Ut egestas nec tellus nec euismod. Vivamus quis nisi fermentum, semper purus non, viverra ipsum. Vivamus non eros sit amet ligula maximus blandit a et sem. Maecenas vel sollicitudin ex. Fusce sed consectetur sem. Phasellus rhoncus enim sit amet pellentesque luctus. Vestibulum feugiat massa at dolor laoreet, id blandit ipsum tristique. Maecenas nisl justo, pellentesque sed elementum sit amet, ornare et lorem. Aliquam lacinia mattis sagittis.'),
(84, 34, '_edit_lock', '1586362695:1'),
(85, 35, '_edit_last', '1'),
(86, 35, '_edit_lock', '1586363418:1'),
(87, 35, '_thumbnail_id', '24'),
(88, 35, 'client_name', 'Larry Stanfield'),
(89, 35, 'email', 'Vince.Omega@gmail.com'),
(90, 35, 'company_name', ''),
(91, 35, 'company_website', ''),
(92, 35, 'nofollow', 'default');

--
-- Dumping data for table `marketing_posts`
--

INSERT INTO `marketing_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2020-03-13 19:17:58', '2020-03-13 19:17:58', '<!-- wp:paragraph -->\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>\n<!-- /wp:paragraph -->', 'Hello world!', '', 'publish', 'open', 'open', '', 'hello-world', '', '', '2020-03-13 19:17:58', '2020-03-13 19:17:58', '', 0, 'http://dg.local/?p=1', 0, 'post', '', 1),
(2, 1, '2020-03-13 19:17:58', '2020-03-13 19:17:58', '<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"http://dg.local/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->', 'Home Page', '', 'publish', 'closed', 'open', '', 'home', '', '', '2020-03-15 22:16:43', '2020-03-15 22:16:43', '', 0, 'http://dg.local/?page_id=2', 99, 'page', '', 0),
(3, 1, '2020-03-13 19:17:58', '2020-03-13 19:17:58', '<!-- wp:heading --><h2>Who we are</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Our website address is: http://dg.local.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What personal data we collect and why we collect it</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Comments</h3><!-- /wp:heading --><!-- wp:paragraph --><p>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Media</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Contact forms</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Cookies</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Embedded content from other websites</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Analytics</h3><!-- /wp:heading --><!-- wp:heading --><h2>Who we share your data with</h2><!-- /wp:heading --><!-- wp:heading --><h2>How long we retain your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What rights you have over your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Where we send your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Visitor comments may be checked through an automated spam detection service.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Your contact information</h2><!-- /wp:heading --><!-- wp:heading --><h2>Additional information</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>How we protect your data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What data breach procedures we have in place</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What third parties we receive data from</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What automated decision making and/or profiling we do with user data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Industry regulatory disclosure requirements</h3><!-- /wp:heading -->', 'Privacy Policy', '', 'draft', 'closed', 'open', '', 'privacy-policy', '', '', '2020-03-13 19:17:58', '2020-03-13 19:17:58', '', 0, 'http://dg.local/?page_id=3', 0, 'page', '', 0),
(5, 1, '2020-03-13 22:35:31', '2020-03-13 22:35:31', '<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"http://dg.local/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->', 'Home Page', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2020-03-13 22:35:31', '2020-03-13 22:35:31', '', 2, 'http://dg.local/2020/03/13/2-revision-v1/', 0, 'revision', '', 0),
(6, 1, '2020-03-15 13:58:32', '2020-03-15 13:58:32', '', 'App Development', '', 'publish', 'closed', 'closed', '', 'app-development', '', '', '2020-03-15 13:58:32', '2020-03-15 13:58:32', '', 0, 'http://dg.local/?page_id=6', 0, 'page', '', 0),
(7, 1, '2020-03-15 13:58:32', '2020-03-15 13:58:32', '', 'App Development', '', 'inherit', 'closed', 'closed', '', '6-revision-v1', '', '', '2020-03-15 13:58:32', '2020-03-15 13:58:32', '', 6, 'http://dg.local/6-revision-v1/', 0, 'revision', '', 0),
(8, 1, '2020-03-15 13:58:54', '2020-03-15 13:58:54', '', 'Web Design + Development', '', 'publish', 'closed', 'closed', '', 'web-design-development', '', '', '2020-03-15 22:17:04', '2020-03-15 22:17:04', '', 0, 'http://dg.local/?page_id=8', 1, 'page', '', 0),
(9, 1, '2020-03-15 13:58:54', '2020-03-15 13:58:54', '', 'Web Design + Development', '', 'inherit', 'closed', 'closed', '', '8-revision-v1', '', '', '2020-03-15 13:58:54', '2020-03-15 13:58:54', '', 8, 'http://dg.local/8-revision-v1/', 0, 'revision', '', 0),
(10, 1, '2020-03-15 13:59:20', '2020-03-15 13:59:20', '', 'Turnkey Shopify', '', 'publish', 'closed', 'closed', '', 'turnkey-shopify', '', '', '2020-03-15 22:17:23', '2020-03-15 22:17:23', '', 0, 'http://dg.local/?page_id=10', 2, 'page', '', 0),
(11, 1, '2020-03-15 13:59:20', '2020-03-15 13:59:20', '', 'Turnkey Shopify', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2020-03-15 13:59:20', '2020-03-15 13:59:20', '', 10, 'http://dg.local/10-revision-v1/', 0, 'revision', '', 0),
(12, 1, '2020-03-15 13:59:33', '2020-03-15 13:59:33', '', 'Marketing', '', 'publish', 'closed', 'closed', '', 'marketing', '', '', '2020-03-15 22:17:39', '2020-03-15 22:17:39', '', 0, 'http://dg.local/?page_id=12', 3, 'page', '', 0),
(13, 1, '2020-03-15 13:59:33', '2020-03-15 13:59:33', '', 'Marketing', '', 'inherit', 'closed', 'closed', '', '12-revision-v1', '', '', '2020-03-15 13:59:33', '2020-03-15 13:59:33', '', 12, 'http://dg.local/12-revision-v1/', 0, 'revision', '', 0),
(14, 1, '2020-03-15 13:59:46', '2020-03-15 13:59:46', '', 'Brand Growth', '', 'private', 'closed', 'closed', '', 'brand-growth', '', '', '2020-03-28 00:56:52', '2020-03-28 00:56:52', '', 0, 'http://dg.local/?page_id=14', 4, 'page', '', 0),
(15, 1, '2020-03-15 13:59:46', '2020-03-15 13:59:46', '', 'Brand Growth', '', 'inherit', 'closed', 'closed', '', '14-revision-v1', '', '', '2020-03-15 13:59:46', '2020-03-15 13:59:46', '', 14, 'http://dg.local/14-revision-v1/', 0, 'revision', '', 0),
(16, 1, '2020-03-15 14:00:01', '2020-03-15 14:00:01', '', 'Lead Generation', '', 'private', 'closed', 'closed', '', 'lead-generation', '', '', '2020-03-28 00:56:58', '2020-03-28 00:56:58', '', 0, 'http://dg.local/?page_id=16', 5, 'page', '', 0),
(17, 1, '2020-03-15 14:00:01', '2020-03-15 14:00:01', '', 'Lead Generation', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2020-03-15 14:00:01', '2020-03-15 14:00:01', '', 16, 'http://dg.local/16-revision-v1/', 0, 'revision', '', 0),
(18, 1, '2020-03-15 14:00:15', '2020-03-15 14:00:15', '', 'Consulting', '', 'private', 'closed', 'closed', '', 'consulting', '', '', '2020-03-28 00:57:04', '2020-03-28 00:57:04', '', 0, 'http://dg.local/?page_id=18', 6, 'page', '', 0),
(19, 1, '2020-03-15 14:00:15', '2020-03-15 14:00:15', '', 'Consulting', '', 'inherit', 'closed', 'closed', '', '18-revision-v1', '', '', '2020-03-15 14:00:15', '2020-03-15 14:00:15', '', 18, 'http://dg.local/18-revision-v1/', 0, 'revision', '', 0),
(20, 1, '2020-03-20 03:35:40', '2020-03-20 03:35:40', '<!-- wp:heading {\"level\":5} -->\n<h5>DigitalBrands has been a market leader in internet marketing, turnkey Shopify stores, Amazon/eBay growth, web development and digital branding since 2006. Servicing over 4,000 marketing campaigns and building over 500 eCommerce businesses for clients, DigitalBrands expanded into the Global market in May 2018. Now with three locations in Philadelphia, Los Angeles, Tampa, our office has the feel of a start-up with the track record of an industry-leading company.</h5>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":5} -->\n<h5>Our mission is to help small to medium-sized businesses leverage the online space to grow their web presence and expand their customer base. We provide businesses with innovative and responsive web design, search engine optimization (SEO), social media marketing, and all the unique products they need to capture a user’s attention online. Having experience across many different industries, DigitalBrands is equipped to satisfy each business partner for its specific needs.</h5>\n<!-- /wp:heading -->', 'About Us', '', 'publish', 'closed', 'closed', '', 'about-us', '', '', '2020-03-20 03:35:40', '2020-03-20 03:35:40', '', 2, 'http://dg.local/?page_id=20', 0, 'page', '', 0),
(21, 1, '2020-03-20 03:35:40', '2020-03-20 03:35:40', '<!-- wp:heading {\"level\":5} -->\n<h5>DigitalBrands has been a market leader in internet marketing, turnkey Shopify stores, Amazon/eBay growth, web development and digital branding since 2006. Servicing over 4,000 marketing campaigns and building over 500 eCommerce businesses for clients, DigitalBrands expanded into the Global market in May 2018. Now with three locations in Philadelphia, Los Angeles, Tampa, our office has the feel of a start-up with the track record of an industry-leading company.</h5>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":5} -->\n<h5>Our mission is to help small to medium-sized businesses leverage the online space to grow their web presence and expand their customer base. We provide businesses with innovative and responsive web design, search engine optimization (SEO), social media marketing, and all the unique products they need to capture a user’s attention online. Having experience across many different industries, DigitalBrands is equipped to satisfy each business partner for its specific needs.</h5>\n<!-- /wp:heading -->', 'About Us', '', 'inherit', 'closed', 'closed', '', '20-revision-v1', '', '', '2020-03-20 03:35:40', '2020-03-20 03:35:40', '', 20, 'http://dg.local/20-revision-v1/', 0, 'revision', '', 0),
(23, 1, '2020-03-23 23:33:32', '2020-03-23 23:33:32', '<img class=\"alignnone size-full wp-image-24\" src=\"http://dg.local/wp-content/uploads/2020/03/942413_796829087062879_368966657613387008_n.png\" alt=\"\" width=\"224\" height=\"187\" />This is great', 'Test', '', 'publish', 'closed', 'closed', '', 'test', '', '', '2020-03-23 23:33:32', '2020-03-23 23:33:32', '', 0, 'http://dg.local/?post_type=testimonial&#038;p=23', 0, 'testimonial', '', 0),
(24, 1, '2020-03-23 23:32:51', '2020-03-23 23:32:51', '', '942413_796829087062879_368966657613387008_n', '', 'inherit', 'open', 'closed', '', '942413_796829087062879_368966657613387008_n', '', '', '2020-03-23 23:32:51', '2020-03-23 23:32:51', '', 23, 'http://dg.local/wp-content/uploads/2020/03/942413_796829087062879_368966657613387008_n.png', 0, 'attachment', 'image/png', 0),
(25, 1, '2020-03-23 23:33:09', '2020-03-23 23:33:09', '<img class=\"alignnone size-full wp-image-24\" src=\"http://dg.local/wp-content/uploads/2020/03/942413_796829087062879_368966657613387008_n.png\" alt=\"\" width=\"224\" height=\"187\" />This is great', 'Test', '', 'inherit', 'closed', 'closed', '', '23-revision-v1', '', '', '2020-03-23 23:33:09', '2020-03-23 23:33:09', '', 23, 'http://dg.local/23-revision-v1/', 0, 'revision', '', 0),
(26, 1, '2020-03-23 23:35:04', '2020-03-23 23:35:04', '', 'Test Shortcode', '', 'publish', 'closed', 'closed', '', 'test-shortcode', '', '', '2020-03-23 23:35:04', '2020-03-23 23:35:04', '', 0, 'http://dg.local/?post_type=tss-sc&#038;p=26', 0, 'tss-sc', '', 0),
(27, 1, '2020-04-08 03:10:10', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2020-04-08 03:10:10', '0000-00-00 00:00:00', '', 0, 'http://dg.local/?p=27', 0, 'post', '', 0),
(28, 1, '2020-04-08 16:05:41', '2020-04-08 16:05:41', 'This is just a test.', 'test 1', '', 'publish', 'closed', 'closed', '', 'test-1', '', '', '2020-04-08 16:05:41', '2020-04-08 16:05:41', '', 0, 'http://dg.local/?post_type=testimonial&#038;p=28', 0, 'testimonial', '', 0),
(29, 1, '2020-04-08 16:05:33', '2020-04-08 16:05:33', 'This is just a test.', 'test 1', '', 'inherit', 'closed', 'closed', '', '28-revision-v1', '', '', '2020-04-08 16:05:33', '2020-04-08 16:05:33', '', 28, 'http://dg.local/28-revision-v1/', 0, 'revision', '', 0),
(30, 1, '2020-04-08 16:06:59', '2020-04-08 16:06:59', '[rt-testimonial id=\"26\" title=\"Test Shortcode\"]This is just a test.', 'test 1', '', 'inherit', 'closed', 'closed', '', '28-autosave-v1', '', '', '2020-04-08 16:06:59', '2020-04-08 16:06:59', '', 28, 'http://dg.local/28-autosave-v1/', 0, 'revision', '', 0),
(31, 1, '2020-04-08 16:16:32', '2020-04-08 16:16:32', '', 'Main', '', 'publish', 'closed', 'closed', '', 'main', '', '', '2020-04-08 16:16:32', '2020-04-08 16:16:32', '', 0, 'http://dg.local/?post_type=tss_slider&#038;p=31', 0, 'tss_slider', '', 0),
(32, 1, '2020-04-08 16:16:36', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2020-04-08 16:16:36', '0000-00-00 00:00:00', '', 0, 'http://dg.local/?post_type=tss_slider&p=32', 0, 'tss_slider', '', 0),
(33, 1, '2020-04-08 16:16:51', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2020-04-08 16:16:51', '0000-00-00 00:00:00', '', 0, 'http://dg.local/?post_type=tss_slider&p=33', 0, 'tss_slider', '', 0),
(34, 1, '2020-04-08 16:17:57', '2020-04-08 16:17:57', '', 'Test', '', 'publish', 'closed', 'closed', '', 'test', '', '', '2020-04-08 16:17:57', '2020-04-08 16:17:57', '', 0, 'http://dg.local/?post_type=tss_data&#038;p=34', 0, 'tss_data', '', 0),
(35, 1, '2020-04-08 16:32:41', '2020-04-08 16:32:41', '<div id=\"bannerL\">\r\n<div id=\"div-gpt-ad-1474537762122-2\" data-google-query-id=\"CNTpysyd2egCFUJkwQodQDkFxA\">\r\n<div id=\"google_ads_iframe_/15188745/Lipsum-Unit3_0__container__\"></div>\r\n</div>\r\n</div>\r\n<div id=\"bannerR\">\r\n<div id=\"div-gpt-ad-1474537762122-3\" data-google-query-id=\"CNXpysyd2egCFUJkwQodQDkFxA\">\r\n<div id=\"google_ads_iframe_/15188745/Lipsum-Unit4_0__container__\"></div>\r\n</div>\r\n</div>\r\n<div class=\"boxed\">\r\n<div id=\"lipsum\">\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel purus consectetur augue dictum suscipit vel sit amet magna. Proin varius ex a nunc pulvinar, quis maximus risus gravida. Curabitur vehicula purus vitae cursus suscipit. Praesent non euismod nisl, at sodales lacus. Vivamus ultricies tellus ipsum, ut interdum neque tempus non. Integer consectetur ante hendrerit augue vehicula, quis posuere mauris rhoncus. Ut egestas nec tellus nec euismod. Vivamus quis nisi fermentum, semper purus non, viverra ipsum. Vivamus non eros sit amet ligula maximus blandit a et sem. Maecenas vel sollicitudin ex. Fusce sed consectetur sem. Phasellus rhoncus enim sit amet pellentesque luctus. Vestibulum feugiat massa at dolor laoreet, id blandit ipsum tristique. Maecenas nisl justo, pellentesque sed elementum sit amet, ornare et lorem. Aliquam lacinia mattis sagittis.\r\n\r\n</div>\r\n</div>', 'Test', '', 'publish', 'closed', 'closed', '', 'test', '', '', '2020-04-08 16:32:41', '2020-04-08 16:32:41', '', 0, 'http://dg.local/?post_type=wpm-testimonial&#038;p=35', 0, 'wpm-testimonial', '', 0);

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
