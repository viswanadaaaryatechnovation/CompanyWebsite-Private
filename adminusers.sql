-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2014 at 12:17 PM
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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`, `ip_address`) VALUES
(1, 'aarya', 'visu@aarya.com', 'teshfhgh', '2014-11-05 06:38:40', '2014-11-05 06:38:40', ''),
(3, 'visu112', 'aarya@aarya.com', 'teshfhgh', '2014-11-05 06:58:23', '2014-11-05 06:58:23', ''),
(4, 'viswanada', 'viu@aa.com', 'text message', '2014-11-06 00:11:46', '2014-11-06 00:11:46', ''),
(5, 'visu112', 'visu@aarya.com', 'test test test', '2014-11-06 00:22:13', '2014-11-06 00:22:13', ''),
(6, 'test ip', 'ip@aa.com', 'test ip address', '2014-11-06 00:29:58', '2014-11-06 00:29:58', '127.0.0.1');

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
(5, 'Investor', '2014-11-07 08:45:06', '2014-11-06 18:30:00', '');

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `menu_id`, `url_name`, `name`, `created_at`, `updated_at`, `ip_address`) VALUES
(1, 1, 'home', 'Home', '2014-11-06 01:34:01', '2014-11-07 07:46:56', '127.0.0.1'),
(2, 1, 'aboutus', 'AARYA Technovation', '2014-11-06 06:09:08', '2014-11-07 07:44:50', '127.0.0.1'),
(3, 1, 'companies', 'Companies', '2014-11-06 06:41:35', '2014-11-07 07:45:17', '127.0.0.1'),
(4, 1, 'investors', 'Investors', '2014-11-06 06:41:52', '2014-11-07 08:01:04', '127.0.0.1'),
(5, 1, 'contact', 'Contact Us', '2014-11-06 06:42:10', '2014-11-07 07:45:42', '127.0.0.1'),
(6, 2, 'careers', 'Careers', '2014-11-07 03:54:21', '2014-11-07 03:54:21', '127.0.0.1'),
(7, 2, 'offices', 'Offices', '2014-11-07 05:02:19', '2014-11-07 05:02:19', '127.0.0.1'),
(8, 2, 'companies', 'Companies', '2014-11-07 05:02:59', '2014-11-07 05:02:59', '127.0.0.1'),
(9, 2, 'vision', 'Vision', '2014-11-07 05:03:25', '2014-11-07 05:03:25', '127.0.0.1'),
(10, 2, 'team', 'Team', '2014-11-07 05:04:10', '2014-11-07 05:04:10', '127.0.0.1'),
(11, 3, 'facebook', 'FaceBook', '2014-11-07 05:05:26', '2014-11-07 05:05:26', '127.0.0.1'),
(12, 3, 'google', 'Google', '2014-11-07 05:05:43', '2014-11-07 05:05:43', '127.0.0.1'),
(13, 4, 'resourecs', 'Resources', '2014-11-07 05:07:17', '2014-11-07 05:07:17', '127.0.0.1'),
(14, 4, 'blog', 'Blog', '2014-11-07 05:07:38', '2014-11-07 05:07:38', '127.0.0.1'),
(15, 0, 'news', 'News', '2014-11-07 05:07:55', '2014-11-07 05:07:55', '127.0.0.1'),
(16, 5, 'rates', 'Rates', '2014-11-07 05:09:43', '2014-11-07 05:09:43', '127.0.0.1'),
(17, 5, 'investment_opportunities', 'Investment Opportunities', '2014-11-07 05:10:06', '2014-11-07 05:10:06', '127.0.0.1'),
(18, 5, 'testimonials', 'Testimonials', '2014-11-07 05:10:42', '2014-11-07 05:10:42', '127.0.0.1');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

