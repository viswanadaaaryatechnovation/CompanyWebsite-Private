-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2014 at 11:57 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',

  `ip_address` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`, `ip_address`) VALUES
(18, 'ashvin', 'ashvin@aaryatechnovation.com', 'Hi test', '2014-11-12 05:51:31', '2014-11-12 05:51:31', '127.0.0.1'),
(19, 'aarya', 'viswanada@aaryatechnovation.com', 'test', '2014-11-13 02:44:19', '2014-11-13 02:44:19', '127.0.0.1'),
(20, 'visu11', 'viswanada@gmail.com', 'test', '2014-11-13 02:58:24', '2014-11-13 02:58:24', '127.0.0.1'),
(21, 'visu11', 'viswanada@gmail.com', 'svfadgadg\r\n', '2014-11-13 02:59:58', '2014-11-13 02:59:58', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`, `ip_address`) VALUES
(1, 'Main menu', '2014-11-07 08:44:26', '2014-11-06 18:30:00', ''),
(2, 'Get To Know Us', '2014-11-07 08:44:38', '2014-11-07 06:30:00', ''),
(3, 'Companies', '2014-11-07 08:44:46', '2014-11-07 09:30:00', ''),
(4, 'Let Us Help You', '2014-11-07 08:45:11', '2014-11-06 18:30:00', ''),
(5, 'Partners With Us', '2014-11-12 11:57:17', '2014-11-06 18:30:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `metafields`
--

CREATE TABLE IF NOT EXISTS `metafields` (
`id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL COMMENT 'Foriegn key from Page table',
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',

  `ip_address` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `metafields`
--

INSERT INTO `metafields` (`id`, `page_id`, `name`, `content`, `created_at`, `updated_at`, `ip_address`) VALUES
(1, 1, 'description', 'description text', '2014-11-06 02:00:30', '2014-11-06 02:00:30', ''),
(2, 3, 'title', 'text text, text', '2014-11-06 03:33:00', '2014-11-06 05:32:39', ''),
(3, 2, 'test', 'test', '2014-11-06 05:20:23', '2014-11-06 05:20:23', ''),
(4, 4, 'title', 'test', '2014-11-06 06:10:25', '2014-11-06 06:10:25', '127.0.0.1'),
(7, 2, 'title', 'test', '2014-11-06 06:33:34', '2014-11-06 06:33:34', '127.0.0.1'),
(8, 2, 'title', 'test', '2014-11-06 06:35:49', '2014-11-06 06:35:49', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL DEFAULT '1',
  `url_name` varchar(255) NOT NULL COMMENT 'It will show url and page name',
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `menu_id`, `url_name`, `name`, `created_at`, `updated_at`, `ip_address`) VALUES
(1, 1, 'home', 'Home', '2014-11-06 01:34:01', '2014-11-07 07:46:56', '127.0.0.1'),
(2, 1, 'aboutus', 'AARYA Technovation', '2014-11-06 06:09:08', '2014-11-12 00:19:30', '127.0.0.1'),
(3, 1, 'companies', 'OUR BUSINESSES', '2014-11-06 06:41:35', '2014-11-12 03:37:31', '127.0.0.1'),
(4, 1, 'investors', 'Investors', '2014-11-06 06:41:52', '2014-11-07 08:01:04', '127.0.0.1'),
(11, 3, 'facebook', 'FaceBook', '2014-11-07 05:05:26', '2014-11-07 05:05:26', '127.0.0.1'),
(12, 3, 'google', 'Google', '2014-11-07 05:05:43', '2014-11-07 05:05:43', '127.0.0.1'),
(13, 4, 'resourecs', 'Resources', '2014-11-07 05:07:17', '2014-11-07 05:07:17', '127.0.0.1'),
(14, 4, 'blog', 'Blog', '2014-11-07 05:07:38', '2014-11-07 05:07:38', '127.0.0.1'),
(15, 0, 'news', 'News', '2014-11-07 05:07:55', '2014-11-07 05:07:55', '127.0.0.1'),
(17, 5, 'investors', 'Investors', '2014-11-07 05:10:06', '2014-11-12 06:28:47', '127.0.0.1'),
(19, 2, 'aboutus', 'About Us', '2014-11-12 06:23:24', '2014-11-12 06:23:24', '127.0.0.1'),
(20, 2, 'companies', 'Our Businesses', '2014-11-12 06:24:24', '2014-11-12 06:24:24', '127.0.0.1'),
(21, 2, 'contact', 'Contact Us', '2014-11-12 06:24:47', '2014-11-12 06:24:47', '127.0.0.1'),
(22, 4, 'careers', 'Careers', '2014-11-12 06:29:34', '2014-11-12 06:29:34', '127.0.0.1'),
(23, 4, 'pitch', 'Pitch An Idea', '2014-11-12 06:30:02', '2014-11-12 06:30:02', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`, `ip_address`) VALUES
(5, 'Design', '141112123805_model1 copy.jpg', '<p>Empathic Design is the latest trend and the way to innovate and satisfy the unmet needs of consumers.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2014-11-11 04:03:43', '2014-11-13 09:11:48', ''),
(6, 'Honest Company Founder', '141112124744_QSTNstatusQuo-honesty-expensive-gift-1024x722.jpg', 'Honest Company Founder Honest Company Founder Honest Company Founder Honest Company Founder', '2014-11-12 07:17:44', '2014-11-12 07:17:44', ''),
(7, 'True Leader', '141113064944_775ac173e8110e8b130452e5a4f48d92.jpg', '<p>I had this debate with a mentor of mine. He asked me if true leaders are born or created. My first response was, &quot;It&#39;s something you acquire and are molded for.&quot; However, after further debate, I was not sure. Have you ever witnessed someone who just naturally takes the reigns and heads a project? Or maybe its an athlete or has the ability to inspire their team and they follow them fearlessly? I feel I&#39;m a true leader but honestly...I don&#39;t know if its something that I was just hard wired for or if I somehow learned it as a child?</p>\r\n', '2014-11-13 00:15:43', '2014-11-13 01:19:44', '');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
`updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `title`, `video_url`, `description`, `created_at`, `updated_at`, `ip_address`) VALUES
(4, 'Honest Company Founder', 'https://www.youtube.com/v/kp7TPk9sjLc', '<p>Founders really need to pour their heart into the business.&nbsp;</p>\r\n', '2014-11-12 14:50:41', '2014-11-12 09:20:41', ''),
(6, 'Howard Schultz on being Strategic', 'https://www.youtube.com/v/Q5Djl9_Xc3w', '<p>Entrepreneurs need to be a part of every job ranging from coding, marketing, operations to finance. But they also need to anticipate whats coming and have to be strategic.</p>\r\n', '2014-11-12 09:29:39', '2014-11-12 09:29:39', ''),
(7, 'Mike Leyer on running a Business', 'https://www.youtube.com/v/Da_8u28kmSA', '<p>You need to be tactical when setting up your business. You are designed to get particular results and you should get those.</p>\r\n', '2014-11-12 09:37:56', '2014-11-12 09:37:56', '');

-- --------------------------------------------------------

--
-- Table structure for table `screens`
--

CREATE TABLE IF NOT EXISTS `screens` (
`id` int(11) NOT NULL,
  `screen_title` varchar(255) NOT NULL,
  `screen_image` varchar(255) NOT NULL,
  `screen_icon` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',

  `ip_address` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `screens`
--

INSERT INTO `screens` (`id`, `screen_title`, `screen_image`, `screen_icon`, `created_at`, `updated_at`, `ip_address`) VALUES
(12, 'Buy N Use', '141110105943_buy-n-use.jpg', '141110105943_buy-n-use-logo.png', '2014-11-10 05:29:43', '2014-11-10 05:29:43', ''),
(13, 'Rating Tower', '141110110107_rating-tower.jpg', '141110110107_rating-tower-logo.png', '2014-11-10 05:31:07', '2014-11-10 05:31:07', ''),
(14, 'Snap N Ride', '141110110221_snap-a-ride.jpg', '141110110221_snap-a-ride-logo.png', '2014-11-10 05:32:21', '2014-11-10 05:32:21', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
`id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
`updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',

  `ip_address` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`, `ip_address`) VALUES
(1, 'visu@aarya.com', '2014-11-12 02:36:27', '2014-11-12 02:36:27', '127.0.0.1'),
(2, 'aarya@aarya.com', '2014-11-12 02:38:39', '2014-11-12 02:38:39', '127.0.0.1'),
(3, 'ashvin@aaryatechnovation.com', '2014-11-12 05:38:23', '2014-11-12 05:38:23', '127.0.0.1'),
(4, 'visu@aarya.com', '2014-11-12 07:30:16', '2014-11-12 07:30:16', '127.0.0.1'),
(5, 'visu@aarya.com', '2014-11-12 07:30:55', '2014-11-12 07:30:55', '127.0.0.1'),
(6, 'viswanada@gmail.com', '2014-11-12 07:31:09', '2014-11-12 07:31:09', '127.0.0.1'),
(7, 'visu@aarya.com', '2014-11-12 07:31:47', '2014-11-12 07:31:47', '127.0.0.1'),
(8, 'ashvin@aaryatechnovation.com', '2014-11-12 07:32:53', '2014-11-12 07:32:53', '127.0.0.1'),
(9, 'viswanada@gmail.com', '2014-11-12 07:37:41', '2014-11-12 07:37:41', '127.0.0.1'),
(10, 'ashvin@aaryatechnovation.com', '2014-11-13 01:58:17', '2014-11-13 01:58:17', '127.0.0.1'),
(11, 'viswanada@aaryatechnovation.com', '2014-11-13 02:47:10', '2014-11-13 02:47:10', '127.0.0.1'),
(12, 'viswanada@aaryatechnovation.com', '2014-11-13 02:51:36', '2014-11-13 02:51:36', '127.0.0.1'),
(13, 'ashvin@aaryatechnovation.com', '2014-11-13 03:43:43', '2014-11-13 03:43:43', '127.0.0.1'),
(14, 'ashvin@aaryatechnovation.com', '2014-11-13 03:44:18', '2014-11-13 03:44:18', '127.0.0.1'),
(15, 'visu@aarya.com', '2014-11-13 03:53:22', '2014-11-13 03:53:22', '127.0.0.1'),
(16, 'viswanada@gmail.com', '2014-11-13 03:54:14', '2014-11-13 03:54:14', '127.0.0.1'),
(17, 'visu@aarya.com', '2014-11-13 03:55:20', '2014-11-13 03:55:20', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`, `name`, `created_at`, `updated_at`, `ip_address`) VALUES
(1, 'john', 'johndoe', 'johndoe@gmail.com', '123456', 'John', '2013-06-07 02:43:28', '2013-06-07 02:43:28', ''),
(2, 'amy', 'amy.deg', 'amy@outlook.com', '1234567', 'amy', '2013-06-07 02:44:49', '2013-06-07 02:44:49', ''),
(4, 'visu', 'vvvv', 'visu@aarya.com', '999999999', 'visu112', '2014-11-03 05:32:25', '2014-11-03 05:57:50', ''),
(6, 'aarya', 'aarya', 'aarya@aarya.com', '1234567890', 'aarya', '2014-11-03 06:46:18', '2014-11-03 06:46:18', ''),
(7, 'gb_rupinder', '123', 'visu@aarya.com', '1234567890', 'aarya', '2014-11-05 06:32:34', '2014-11-06 00:38:46', '127.0.0.1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metafields`
--
ALTER TABLE `metafields`
 ADD PRIMARY KEY (`id`), ADD KEY `page_id` (`page_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `screens`
--
ALTER TABLE `screens`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
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
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `metafields`
--
ALTER TABLE `metafields`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `screens`
--
ALTER TABLE `screens`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

