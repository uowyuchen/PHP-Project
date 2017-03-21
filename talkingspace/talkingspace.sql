-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2017 at 05:33 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talkingspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Web Programming', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempor cursus risus, vitae placerat mi fermentum a. Duis sit amet nulla sit amet est laoreet ultricies.'),
(2, 'web desgin', 'Vestibulum pulvinar nisl sit amet metus rhoncus, vitae gravida arcu convallis. Integer felis ex, faucibus sodales bibendum congue, aliquam eget ipsum. Quisque porttitor dui eget urna maximus pulvinar. Nulla dapibus est mauris, a sodales nibh tristique non. Suspendisse vitae lorem nibh. Aenean lacinia enim non ipsum tincidunt, ut rhoncus orci varius. ');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `topic_id`, `user_id`, `body`, `create_date`) VALUES
(1, 1, 2, 'reply good article', '2017-03-20 19:47:41'),
(2, 2, 2, 'reply too', '2017-03-20 19:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `last_activity` datetime NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `category_id`, `user_id`, `title`, `body`, `last_activity`, `create_date`) VALUES
(1, 1, 1, 'Favorite Server-Side Language', 'What is your favorite server-side language?', '0000-00-00 00:00:00', '2017-03-14 19:57:34'),
(2, 2, 2, 'How did you learn html?', 'Nulla eget placerat erat. Quisque luctus justo vel viverra lobortis. Phasellus eu justo hendrerit, dictum ante vitae, euismod nibh.', '0000-00-00 00:00:00', '2017-03-14 19:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(64) NOT NULL,
  `about` text NOT NULL,
  `last_activity` datetime NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `username`, `password`, `about`, `last_activity`, `join_date`) VALUES
(1, 'Zhen Li', 'yuchendl@hotmail.com', 'avatar1.jpg', 'yuchendl', 'lizhen', 'Im a web developer', '0000-00-00 00:00:00', '2017-03-14 19:49:58'),
(2, 'John Doe', 'jdoe@gmail.com', '2.jpg', 'JDoe', '614a59bf285d07fecb6a4b4c44d9cab5', '', '2017-03-20 18:48:02', '2017-03-20 17:48:02'),
(3, 'Steven Wright', 'yuchendl@hotmail.com', 'taohong.jpg', 'swright', '614a59bf285d07fecb6a4b4c44d9cab5', '', '2017-03-20 18:49:19', '2017-03-20 17:49:19'),
(4, 'Zhen Li', 'uowyuchen@gmail.com', 'Yan-Tang-Feet.jpg', 'jay', '614a59bf285d07fecb6a4b4c44d9cab5', 'I like Yan Tang', '2017-03-21 05:20:40', '2017-03-21 04:20:40'),
(5, 'Ying Fu', 'yuchendl@gmail.com', 'Yan-Tang-Feet-619190.jpg', 'yingying', '614a59bf285d07fecb6a4b4c44d9cab5', '', '2017-03-21 05:33:19', '2017-03-21 04:33:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
