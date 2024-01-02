-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 05:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `emailaddress` varchar(255) NOT NULL,
  `phone` int(50) NOT NULL,
  `passwordi` varchar(255) NOT NULL,
  `gender` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `emailaddress`, `phone`, `passwordi`, `gender`) VALUES
(1, 'y', 'j', '', 765432, '0', ''),
(2, 'y', 'j', '', 765432, '0', ''),
(3, 'y', 'j', '', 765432, '0', ''),
(4, 'yohana', 'justo', '', 765432, '0', ''),
(5, 'yohana', 'justo', 'julius@itdeskltd.com', 765432, '0', ''),
(6, 'yohana', 'justo', 'julius@itdeskltd.com', 765432, '0', ''),
(7, 'yohana', 'justo', 'julius@itdeskltd.com', 765432, '0', ''),
(8, 'yohana', 'justo', 'julius@itdeskltd.com', 765432, '0', ''),
(9, 'yohana', 'justo', 'julius@itdeskltd.com', 765432, '0', ''),
(10, 'yohana', 'justo', 'julius@itdeskltd.com', 765432, '0', 'male'),
(11, 'yohana', 'justo', 'julius@itdeskltd.com', 765432, '0', 'other'),
(12, 'yohana', 'justo', 'julius@itdeskltd.com', 765432, '0', 'other'),
(13, 'yohana', 'justo', 'julius@itdeskltd.com', 765432, '', 'other'),
(14, 'yohana', 'justo', 'julius@itdeskltd.com', 765432, 'ewa', 'other'),
(16, 'yohana', 'justo', 'julius@itdeskltd.com', 765432, '123', 'male'),
(17, 'yohana', 'justo', 'julius@itdeskltd.com', 765432, '123', 'male'),
(18, 'yohana', 'justo', 'julius@itdeskltd.com', 765432, '123', 'male'),
(19, 'yohana', 'justo', 'julius@itdeskltd.com', 765432, '111', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
