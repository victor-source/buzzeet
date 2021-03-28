-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 07:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buzzeet`
--

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `image` varchar(400) NOT NULL,
  `post_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `image`, `post_id`) VALUES
(93, 'b3.jpg', 1003),
(94, 'b4.jpg', 1003),
(95, '06.jpg', 6059),
(96, 'b1.jpg', 8995),
(97, 'b2.jpg', 8995),
(98, 'b3.jpg', 8995),
(99, 'b4.jpg', 8995),
(100, 'b1.jpg', 5464),
(101, 'b2.jpg', 5464),
(102, 'b3.jpg', 5464),
(103, 'b4.jpg', 5464),
(104, 'b2.jpg', 4144),
(105, 'b3.jpg', 4144),
(106, 'b4.jpg', 4144),
(107, '05.jpg', 10740),
(108, 'b1.jpg', 10740),
(109, 'b2.jpg', 10740),
(110, 'b3.jpg', 10740),
(111, 'b4.jpg', 10740);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `caption` text NOT NULL,
  `email` varchar(555) NOT NULL,
  `post_id` int(11) NOT NULL,
  `post_date` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `caption`, `email`, `post_id`, `post_date`) VALUES
(66, 'this is a post', 'vicjohn2018@gmail.com', 1003, ''),
(68, 'nn', 'vicjohn2018@gmail.com', 6059, ''),
(69, 'tht', 'vicjohn2018@gmail.com', 8995, ''),
(73, '4', 'vicjohn2018@gmail.com', 5464, ''),
(77, '3', 'vicjohn2018@gmail.com', 4144, ''),
(80, '5', 'vicjohn2018@gmail.com', 10740, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` int(33) NOT NULL,
  `password` varchar(444) NOT NULL,
  `regdate` varchar(656) NOT NULL,
  `name` varchar(654) NOT NULL,
  `profile_photo` varchar(600) NOT NULL DEFAULT 'photos/loader.png',
  `cover_photo` varchar(600) NOT NULL,
  `city` text NOT NULL,
  `gender` text NOT NULL,
  `dateofbirth` text NOT NULL,
  `marital_status` text NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `address` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`, `regdate`, `name`, `profile_photo`, `cover_photo`, `city`, `gender`, `dateofbirth`, `marital_status`, `country`, `state`, `address`, `url`) VALUES
(2, 'victorJohn', 'vicjohn2v018@gmail.com', 2147483647, '88fa846e5f8aa198848be76e1abdcb7d7a42d292', '05-03-2021', 'Bolu Ahmed', '', '', 'Bariga', 'Female', '2021-03-10', 'Widowed', 'USA', 'Georgia', '23 oworo road, new garage', ''),
(3, 'victor', 'vicjohn2018@gmail.com', 2147483647, '88fa846e5f8aa198848be76e1abdcb7d7a42d292', '06-03-2021', 'Bolu Ahmed', 'uploads/profile07.jpg', '', 'Bariga gost', 'Female', '2021-03-10', 'Widowed', 'USA', 'Georgia', '                                             23 oworo road, new garage                                             ', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
