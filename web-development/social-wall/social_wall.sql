-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 11:11 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_wall`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `text` longtext NOT NULL,
  `video` longtext NOT NULL,
  `image` longtext NOT NULL,
  `link` longtext NOT NULL,
  `link_description` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `username`, `text`, `video`, `image`, `link`, `link_description`, `date`) VALUES
(2, '10', 'admin', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', '', '', NULL, '2019-07-04 20:41:53'),
(3, '10', 'admin', '', 'y4GxrIa7MiE', '', '', NULL, '2019-07-04 20:42:29'),
(4, '10', 'admin', '', '', '', 'https://getbootstrap.com/', NULL, '2019-07-04 20:44:43'),
(5, '10', 'admin', '', '', 'https://images.pexels.com/photos/861443/pexels-photo-861443.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', '', NULL, '2019-07-04 20:45:24'),
(6, '10', 'admin', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', '', '', NULL, '2019-07-04 20:51:53'),
(7, '10', 'admin', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', '', '', NULL, '2019-07-04 21:20:16'),
(10, '10', 'admin', '', '', 'https://images.pexels.com/photos/2537387/pexels-photo-2537387.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', '', NULL, '2019-07-04 21:20:55'),
(17, 'user5d1e3dba84c483.97989027', 'test', '', 'fadHUHIlGXg', '', '', NULL, '2019-07-04 23:48:21'),
(18, 'user5d1e3dba84c483.97989027', 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', '', '', NULL, '2019-07-04 23:48:44'),
(19, 'user5d1e3dba84c483.97989027', 'test', '', '', 'https://images.pexels.com/photos/1820563/pexels-photo-1820563.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', '', NULL, '2019-07-04 23:53:31'),
(22, 'user5d1e3dba84c483.97989027', 'test', '', '', '', 'https://fontawesome.com/', NULL, '2019-07-04 23:54:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `username`, `email`, `password`) VALUES
(10, '10', 'admin', 'admin@gmail.com', '$2y$10$XsRlPZzMXjRArWeAS/aYYuAVCXvbh7zYF8oZ3IvLX1cXn952wtAbK'),
(14, 'user5d1e3dba84c483.97989027', 'test', 'test@gmail.com', '$2y$10$BGZPJs4xukfSFGUH9/NlxOgF1yAPTYl7wAqPJBFFtksKKr/ktxw3m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
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
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
