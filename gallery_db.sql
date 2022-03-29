-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 09, 2021 at 11:03 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_id` int(11) NOT NULL,
  `author` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `body` text COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `photo_id` (`photo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `photo_id`, `author`, `body`) VALUES
(2, 21, 'Zeinab', 'This is a comment for photo id 21.'),
(5, 23, 'کاربرسایت', 'این ها خرمالو هستن یا انار؟'),
(4, 20, 'Sara', 'Wish I were there rn...');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `caption` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `filename` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `alternate_text` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `type` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `caption`, `description`, `filename`, `alternate_text`, `type`, `size`) VALUES
(20, 'A new title', 'Some caption', 'blah blah blah...', 'zetong-li-8DILjg7UIME-unsplash.jpg', 'some alternate text', 'image/jpeg', 45952),
(23, 'مژده ی پاییز', '', '', 'farrinni-A8renMevYwo-unsplash.jpg', '', 'image/jpeg', 96816),
(22, 'یک تصویر', '', '', 'chris-swann-IvDN437aDcg-unsplash.jpg', '', 'image/jpeg', 58658),
(24, 'Rainy City', '', '', 'tom-morbey-htQdxlYSAQ0-unsplash.jpg', '', 'image/jpeg', 128904),
(25, 'زندگی', '', '', 'slava-pluzhnov-FqLmy2Fy1Us-unsplash.jpg', '', 'image/jpeg', 45079),
(26, 'White', '', '', 'aydin-hassan-MjU3vnBLumc-unsplash.jpg', '', 'image/jpeg', 58432);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `first_name` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `last_name` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `user_image` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `user_image`) VALUES
(1, 'Zeinab1', '123123', 'Zeinab', 'Mahjoub', ''),
(2, 'ShahrzadGoli', 'mom123', 'Shahrzad', 'Ghalishourani', ''),
(10, 'YasiJ', 'password1', 'Yasmina', 'Majlesi', ''),
(11, 'narenji6', 'dadada', 'رزیتا', 'شکری زاده مطلب', 'surface-hRJoRjzLZCc-unsplash.jpg'),
(14, 'daryabi', 'paria00', 'پریا', 'دریا پور', ''),
(15, 'green3', 'gh47gh', 'سوزان', 'عبداللهی کرمانی', 'tommy-bachman--KBd_Xkm1K8-unsplash.jpg'),
(25, 'kiaU78', 'whatever', 'کیارش', 'افراسیبی', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
