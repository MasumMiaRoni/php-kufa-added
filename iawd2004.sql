-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 06:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iawd2004`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `images`) VALUES
(25, 'ABOUT ME', 'Hey, this is my homepage, so I have to say something about myself. \r\nSometimes it is hard to introduce yourself because you know yourself \r\nso well that you do not know where to start with.', '25.png');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `images` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `images`, `description`) VALUES
(22, 'I AM MASUM MIA RONI', '22.png', 'Hey, this is my homepage, so I have to say something about myself. \r\nSometimes it is hard to introduce yourself because you know yourself \r\nso well that you do not know where to start with.');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=unread 2=read'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `status`) VALUES
(4, 'sadikul', 'sadikul@gmail.com', 'bai kmon asos\r\n', 2),
(5, 'Ratul', 'ratul@gmail.com', 'Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a gal', 2),
(6, 'jauga', 'jauga@gmail.com', 'ADDRESS :Event Center park WT 22 New York', 2),
(8, 'azoba', 'azoba@gmail.com', 'how are you?', 2),
(9, 'satarkul', 'mahim1@gmail.com', 'fdfdgdfgg@#', 2),
(18, 'masum', 'masummiaroni2002@gmail.com', 'valoi asoooo', 2),
(21, 'batiza', 'batiza@gmail.com', 'jfjdfjfdjdf sdjf jjfhfsdj jdjjjj ', 2),
(27, 'Uthan', 'uthan@gmail.com', 'kira uthan kainda gor basaisos', 2),
(28, 'masum mia', 'satarkul3@dff.com', 'HI rajib', 2),
(31, 'JAHAGGIR', 'jahangir@gmail.com', 'corona fact Hey, this is my homepage, so I have to say something about myself. \r\nSometimes it is hard to introduce yourself because you know yourself \r\nso well that you do not know where to start with.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`id`, `address`, `phone`, `email`) VALUES
(4, 'Satarkul', '018756675455', 'satarkul@dff.com');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `year` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `percent` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `year`, `title`, `percent`) VALUES
(5, '2020', 'Finish Diploma', '70%'),
(7, '2020', 'S S C DONE', '80%'),
(9, '2011', 'J S C Done Successfully', '95%');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `images` varchar(100) DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `images`, `description`) VALUES
(46, 'ABOUT ME', '46.jpg', 'Hey, this is my homepage, so I have to say something about myself. \r\nSometimes it is hard to introduce yourself because you know yourself \r\nso well that you do not know where to start with.'),
(47, 'batti jola', '47.jpg', 'Hey, this is my homepage, so I have to say something about myself. \r\nSometimes it is hard to introduce yourself because you know yourself \r\nso well that you do not know where to start with.'),
(48, 'CREATIVE DESIGN', '48.jpg', 'Hey, this is my homepage, so I have to say something about myself. \r\nSometimes it is hard to introduce yourself because you know yourself \r\nso well that you do not know where to start with.');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_icon` varchar(100) NOT NULL,
  `service_title` varchar(100) NOT NULL,
  `service_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_icon`, `service_title`, `service_description`) VALUES
(6, 'fal fa-desktop', 'Lorem', 'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It\'s also called placeholder (or filler) text. It\'s a convenient tool for mock-ups.\r\n'),
(9, 'fal fa-edit', 'Wikipedia', ' dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis ...'),
(30, 'fal fa-lightbulb-on', 'CREATIVE DESIGN', 'Hey, this is my homepage, so I have to say something about myself. \r\nSometimes it is hard to introduce yourself because you know yourself \r\nso well that you do not know where to start with.');

-- --------------------------------------------------------

--
-- Table structure for table `social_icon`
--

CREATE TABLE `social_icon` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social_icon`
--

INSERT INTO `social_icon` (`id`, `icon`, `link`) VALUES
(4, 'fal fa-desktop', 'https://twitter.com/'),
(8, 'fab fa-facebook-f', 'https://www.facebook.com'),
(9, 'fab fa-react', 'https://twitter.com/');

-- --------------------------------------------------------

--
-- Table structure for table `testomonial`
--

CREATE TABLE `testomonial` (
  `id` int(11) NOT NULL,
  `images` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testomonial`
--

INSERT INTO `testomonial` (`id`, `images`, `title`, `description`) VALUES
(10, '10.png', 'ULTRA RESPONSIVE', 'Hey, this is my homepage, so I have to say something about myself. \r\nSometimes it is hard to introduce yourself because you know yourself \r\nso well that you do not know where to start with.'),
(11, '11.png', 'batti jola', 'Hey, this is my homepage, so I have to say something about myself. \r\nSometimes it is hard to introduce yourself because you know yourself \r\nso well that you do not know where to start with.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1' COMMENT '1=active 2=deactive',
  `user_role` varchar(100) NOT NULL DEFAULT '1' COMMENT '1=user 2=admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `gender`, `status`, `user_role`) VALUES
(62, 'Ratu', 'ratu@gmail.com', '$2y$10$wItDqCcdoxbc3VFpUhU8XO1.Q/uCrsexIL7JjdzAZVSQ.r61hsEUS', 'fgdfgd', 'female', '1', '2'),
(73, 'jaga', 'jaga@gmail.com', '$2y$10$5ntF.3grhLd6wIo/0dQlrunYiBR.13Jx1qVPRCOHdkMBaEp9doVNe', '', 'male', '1', '1'),
(79, 'sohag', 'sohag@gmail.com', '$2y$10$V3AQcLkarzInRDQAyuNZbO/UFzjZ87c5eLIt2O.MGcaXIgFuQlLqq', '', 'male', '1', '1'),
(81, 'sumi', 'sumi@gmail.com', '$2y$10$DBvfPm6SoQk2WooMi/qFR.3Zyoioh2YPm/.P4bxM3vb3M52PLIG/K', '', 'female', '1', '1'),
(82, 'pgn', 'pgn@gmail.com', '$2y$10$LWQ8.PohUFvedeoeJRVFke0Q8PiKwn4yyWLQxSBPbspskj4y9XKWW', '017664', 'others', '1', '1'),
(83, 'satarkul', 'satarkul1@dff.com', '$2y$10$ujKC2LvX4O3FlDDZNn6k.up7cBpZPXuENfcfUWrM.UFNEkfCMPCee', '', 'others', '1', '2'),
(84, 'masum mia', 'masummia@gmail.com', '$2y$10$Ctv.4ByyoMRh2Yhdg5ZhOe1SKlITXu/Vz4f0IT5GwDsTd4IGgDtia', '09766543433', 'male', '1', '1'),
(85, 'satr', 'satarkul3@dff.com', '$2y$10$BYIPc.Js154IUOFLqlJfKeRupEo5JLbgDzepE4IfI1WmP0VFfL0/q', '017655446373', 'male', '1', '1'),
(90, 'ifat', 'ifat@gmail.com', '$2y$10$Q7rnWejjtPelLAV70ocxr.iMh9C3TsRZOGAUgC4K7hz1TEkgI2fZi', '037363746', 'male', '1', '1'),
(91, 'hatarkul', 'hatarkul@gmail.com', '$2y$10$s9nIxi.K6FpurTN2YrDIxufz0gQzTKCQQ66UyWmsiSqGttK5dM.vi', '3455455', 'male', '1', '1'),
(92, 'bata', 'hata@gmail.com', '$2y$10$Pxnus2c8cZQF5rDHlz75Xul2HxYPgSbpS.n01LbYnKG1aeTFtSLZK', '', 'male', '1', '1'),
(93, 'bata', 'hatai@gmail.com', '$2y$10$EuacgRDa/uQaqfylHcvM/eOpmrIvXApFnQkLIbSmfh5VyHGTZAF1a', '', 'male', '1', '1'),
(94, 'uthan', 'uthan@gmail.com', '$2y$10$rD575NA9OrjfNJEvh1K7SuGxmgy1jYgN0V3luzWqwsxnHkwX4UyNm', '0183746467474', 'male', '1', '1'),
(95, 'Rajib', 'rajib@gmail.com', '$2y$10$nTnYDNcE3u4Z/8wYTd3nKOGazcow5fHdPWPJVgcGf4T54rlQ0NoQm', '017874756', 'male', '1', '1'),
(96, 'Masum mia', 'masum@gmail.com', '$2y$10$so15U0GYx//t2HIHt/2R8.9nY0EBuQ730yT2tmTd71o5m2w79sB6G', '01875600145', 'male', '1', '2'),
(98, 'Raju', 'raju@gmail.com', '$2y$10$Kpbce9IRbv7vhY6YtGJt8OK6mlNznzs7ZrV4IQNDihkyB6EdWvW4.', '01765432879', 'male', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_icon`
--
ALTER TABLE `social_icon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testomonial`
--
ALTER TABLE `testomonial`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `social_icon`
--
ALTER TABLE `social_icon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testomonial`
--
ALTER TABLE `testomonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
