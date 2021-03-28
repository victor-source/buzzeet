-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 12:54 PM
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
(111, 'b4.jpg', 10740),
(112, '7.png', 7746),
(113, '8.png', 7746),
(114, '133372386_436323277389300_3448636441413122028_n.jpg', 755),
(115, 'AvatarMaker (21).png', 10801),
(116, '01virus-schools01-mediumSquareAt3X.jpg', 2232),
(117, 'AvatarMaker (4).png', 2232),
(118, 'Snapshot_20181108.JPG', 9563),
(119, 'Snapshot_20181108.JPG', 9424),
(120, 'Snapshot_20181205_6.JPG', 10460),
(121, 'Snapshot_20181205_7.JPG', 10460),
(122, 'Snapshot_20181205.JPG', 6873),
(123, 'Snapshot_20181205_8.JPG', 11061),
(124, 'Snapshot_20181205_8.JPG', 4315),
(125, 'Snapshot_20190112.JPG', 4315),
(126, 'Snapshot_20190217.JPG', 2232),
(127, 'Snapshot_20190324.JPG', 2232),
(128, 'Snapshot_20181205_6.JPG', 8943),
(129, 'Snapshot_20181205_7.JPG', 8943),
(130, '133434919_983606465495076_1263934232314577282_n.jpg', 5638),
(131, '1519085.jpg', 5638),
(132, 'AvatarMaker (19).png', 6306),
(133, 'AvatarMaker (18).png', 6306),
(134, 'AvatarMaker (17).png', 6306),
(135, 'AvatarMaker (32).png', 9191),
(136, 'AvatarMaker (31).png', 9191),
(137, 'AvatarMaker (26).png', 9191),
(138, 'AvatarMaker (25).png', 9191),
(139, '1519085.jpg', 3908),
(140, '1519085.jpg', 9855),
(141, '1519085.jpg', 5627),
(142, '1519085.jpg', 8302),
(143, '1519085.jpg', 254),
(144, '1519085.jpg', 1352),
(145, '7.png', 10182),
(146, '1519085.jpg', 3684),
(147, '01virus-schools01-mediumSquareAt3X.jpg', 10426);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `caption` longtext NOT NULL,
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
(80, '5', 'vicjohn2018@gmail.com', 10740, ''),
(85, 'new post', 'demo@email.com', 7746, ''),
(87, 'one image test', 'demo@email.com', 755, ''),
(88, '', 'demo@email.com', 10801, ''),
(89, ' h is craxy', 'demo@email.com', 4693, ''),
(90, '', 'demo@email.com', 5411, ''),
(91, '', 'vicjohn2018@gmail.com', 10460, ''),
(93, '', 'vicjohn2018@gmail.com', 6873, ''),
(94, 'zdfmzdl\r\nvz;vlzm\r\nvkcz\r\nvlkzc\r\nVK', 'vicjohn2018@gmail.com', 11061, ''),
(95, '', 'vicjohn2018@gmail.com', 4315, ''),
(97, '', 'vicjohn2018@gmail.com', 2232, ''),
(99, '', 'vicjohn2018@gmail.com', 8943, ''),
(101, 'these are two different images', 'vicjohn2018@gmail.com', 5638, ''),
(103, '', 'vicjohn2018@gmail.com', 6306, ''),
(106, '', 'vicjohn2018@gmail.com', 9191, ''),
(110, '', 'vicjohn2018@gmail.com', 8302, ''),
(111, 'maxlength=\"50\"maxlength=\"50\"maxlength=\"50\"maxlength=\"50\"maxlength=\"50\"maxlength=\"50\"maxlength=\"50\"maxlength=\"50\"maxlength=\"50\"maxlength=\"50\"maxlength=\"50\"maxlength=\"50\"maxlength=\"50\"maxlength=\"50\"maxlength=\"50\"maxlength=\"50\"maxlength=\"50\"', 'vicjohn2018@gmail.com', 10182, ''),
(112, '<p><strong>vxvx</strong></p><p><em>Lorem ipsum</em>, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero&#39;s De Finibus Bonorum et Malorum for use in a type specimen book</p>', 'vicjohn2018@gmail.com', 10426, '');

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
(3, 'victor', 'vicjohn2018@gmail.com', 2147483647, '88fa846e5f8aa198848be76e1abdcb7d7a42d292', '06-03-2021', 'Bolu Ahmed', 'uploads/profile133434919_983606465495076_1263934232314577282_n.jpg', '', 'Bariga gost', 'Female', '2021-03-10', 'married', 'USA', 'Georgia', '                                                                                          23 oworo road, new garage                                                                                          ', ''),
(4, 'victory', 'demo@email.com', 2147483647, '88fa846e5f8aa198848be76e1abdcb7d7a42d292', '19-03-2021', 'Victor John', 'uploads/profileabout-bg.jpg', '', '', 'Male', '', 'Divorced', 'USA', 'Georgia', '                                                                                          ', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
