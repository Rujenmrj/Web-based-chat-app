-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 01:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `friendID` int(11) NOT NULL,
  `requestID` varchar(50) DEFAULT NULL,
  `receiveID` varchar(50) DEFAULT NULL,
  `acceptstatus` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`friendID`, `requestID`, `receiveID`, `acceptstatus`) VALUES
(2, 'Rujen', 'Sita', 1),
(3, 'Rujen123', 'Rujen', 1),
(4, 'Rujen123', 'Sita', 1),
(5, 'admin123', 'Rujen', 0),
(6, 'admin123', 'Sita', 1),
(7, 'Rujen123', 'admin123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `messageID` int(11) NOT NULL,
  `message` text NOT NULL,
  `messagefrom` varchar(50) NOT NULL,
  `messageto` varchar(50) NOT NULL,
  `sentdatetime` datetime NOT NULL DEFAULT current_timestamp(),
  `readstatus` tinyint(1) DEFAULT 0,
  `readdatetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`messageID`, `message`, `messagefrom`, `messageto`, `sentdatetime`, `readstatus`, `readdatetime`) VALUES
(18, 'hello', 'Rujen123', 'Rujen', '2024-04-01 19:11:24', 0, NULL),
(19, 'bye', 'Rujen123', 'Rujen', '2024-04-01 19:11:28', 0, NULL),
(24, 'hello', 'Rujen', 'Rujen123', '2024-04-01 19:39:41', 0, NULL),
(25, 'bye', 'Rujen', 'Rujen123', '2024-04-01 19:39:49', 0, NULL),
(26, 'hello dosto', 'Rujen', 'Rujen123', '2024-04-01 20:24:11', 0, NULL),
(27, 'hello my friend', 'Rujen123', 'Rujen', '2024-04-02 18:17:08', 0, NULL),
(28, 'hello', 'Rujen123', 'Rujen', '2024-04-04 23:08:17', 0, NULL),
(29, 'asdfasdf', 'Rujen123', 'Rujen', '2024-04-04 23:32:36', 0, NULL),
(30, 'helasdf', 'Rujen123', 'Sita', '2024-04-04 23:32:47', 0, NULL),
(31, 'bye', 'Rujen123', 'Sita', '2024-04-04 23:32:52', 0, NULL),
(32, 'asdfqwerzxv', 'Rujen123', 'Sita', '2024-04-04 23:35:28', 0, NULL),
(33, 'asdf', 'Rujen123', 'Sita', '2024-04-05 00:10:56', 0, NULL),
(34, 'asdfqwer', 'Rujen123', 'Sita', '2024-04-05 00:11:03', 0, NULL),
(35, 'test mouse click', 'Rujen123', 'Sita', '2024-04-05 00:12:22', 0, NULL),
(36, 'on enter', 'Rujen123', 'Sita', '2024-04-05 00:12:29', 0, NULL),
(37, 'aasseew', 'Rujen123', 'Rujen', '2024-04-05 01:26:35', 0, NULL),
(38, 'hello rujen maharjan i am rujen admin', 'Rujen123', 'Rujen', '2024-04-05 09:49:40', 0, NULL),
(39, 'hello', 'Rujen123', 'Rujen', '2024-04-05 10:03:55', 0, NULL),
(40, 'bye', 'Rujen123', 'Rujen', '2024-04-05 10:04:18', 0, NULL),
(41, 'hello admin', 'Rujen', 'Rujen123', '2024-04-05 15:42:03', 0, NULL),
(42, 'hr', 'Rujen', 'Rujen123', '2024-04-10 16:43:08', 0, NULL),
(43, 'asdf', 'Rujen', 'Rujen123', '2024-04-10 16:55:36', 0, NULL),
(44, 'bye', 'Rujen', 'Rujen123', '2024-04-10 17:12:12', 0, NULL),
(45, 'asdfsdf', 'Rujen', 'Rujen123', '2024-04-10 17:15:50', 0, NULL),
(46, 'sdcf', 'Rujen123', 'Sita', '2024-04-16 19:50:13', 0, NULL),
(47, 'asdf', 'Rujen', 'Rujen123', '2024-04-19 13:29:08', 0, NULL),
(48, 'bye', 'Rujen', 'Rujen123', '2024-04-19 13:29:16', 0, NULL),
(49, 'sdfasdfa', 'Rujen123', 'Rujen', '2024-04-19 13:31:35', 0, NULL),
(50, 'asdfasdf', 'Rujen123', 'Rujen', '2024-04-19 13:31:36', 0, NULL),
(51, 'asdfasdf', 'Rujen123', 'Rujen', '2024-04-19 13:31:37', 0, NULL),
(52, 'asdfasdf', 'Rujen123', 'Rujen', '2024-04-19 13:31:37', 0, NULL),
(53, 'asdfasdf', 'Rujen123', 'Rujen', '2024-04-19 13:31:38', 0, NULL),
(54, 'asdfasdfqwer', 'Rujen123', 'Rujen', '2024-04-19 13:31:40', 0, NULL),
(55, 'qwerqwer', 'Rujen123', 'Rujen', '2024-04-19 13:31:40', 0, NULL),
(56, 'xvz', 'Rujen123', 'Rujen', '2024-04-19 13:31:41', 0, NULL),
(57, 'xcvz', 'Rujen123', 'Rujen', '2024-04-19 13:31:41', 0, NULL),
(58, 'xcsdfg', 'Rujen123', 'Rujen', '2024-04-19 13:31:42', 0, NULL),
(59, 'dfgasdfasfd', 'Rujen123', 'Rujen', '2024-04-19 13:31:50', 0, NULL),
(60, 'asdfasdf', 'Rujen123', 'Rujen', '2024-04-19 13:31:50', 0, NULL),
(61, 'sadfasdf', 'Rujen123', 'Rujen', '2024-04-19 13:31:51', 0, NULL),
(62, 'asdfasdfasfqwe', 'Rujen123', 'Rujen', '2024-04-19 13:31:52', 0, NULL),
(63, 'qwe', 'Rujen123', 'Rujen', '2024-04-19 13:31:53', 0, NULL),
(64, 'reqwa', 'Rujen123', 'Rujen', '2024-04-19 13:31:54', 0, NULL),
(65, 'df', 'Rujen123', 'Rujen', '2024-04-19 13:31:54', 0, NULL),
(66, 'asdfasd', 'Rujen123', 'Rujen', '2024-04-19 13:31:55', 0, NULL),
(67, 'ffasdf', 'Rujen123', 'Rujen', '2024-04-19 13:31:56', 0, NULL),
(68, 'sadf', 'Rujen123', 'Rujen', '2024-04-19 13:31:57', 0, NULL),
(69, 'sdf', 'Rujen123', 'Rujen', '2024-04-19 13:31:58', 0, NULL),
(70, 'sadfs', 'Rujen123', 'Rujen', '2024-04-19 13:31:59', 0, NULL),
(71, 'adfasdf', 'Rujen123', 'Rujen', '2024-04-19 13:32:01', 0, NULL),
(72, 'sdf', 'Rujen123', 'Rujen', '2024-04-19 13:32:02', 0, NULL),
(73, 'sdf', 'Rujen123', 'Rujen', '2024-04-19 13:32:03', 0, NULL),
(74, 'sadf', 'Rujen123', 'Rujen', '2024-04-19 13:32:04', 0, NULL),
(75, 'sadf', 'Rujen123', 'Rujen', '2024-04-19 13:32:05', 0, NULL),
(76, 'sadf', 'Rujen123', 'Rujen', '2024-04-19 13:32:06', 0, NULL),
(77, 'sdf', 'Rujen123', 'Rujen', '2024-04-19 13:32:08', 0, NULL),
(78, '1234', 'Rujen123', 'Rujen', '2024-04-19 13:32:09', 0, NULL),
(84, 'hello', 'Rujen', 'Rujen123', '2024-04-23 17:24:40', 0, NULL),
(85, 'bye', 'Rujen123', 'Rujen', '2024-04-30 14:49:00', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `profileID` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `onlinestatus` tinyint(1) DEFAULT 0,
  `lastonline` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`profileID`, `fullname`, `pic`, `username`, `onlinestatus`, `lastonline`) VALUES
(4, 'Rujen maharjan', 'home.png', 'Rujen', 1, NULL),
(7, 'Sita ram', '', 'Sita', 0, '2024-03-28 10:21:19'),
(8, 'Rujen admin', 'av.jpg', 'Rujen123', 0, NULL),
(10, 'admin admin', 'ava.jpg', 'admin123', 1, NULL),
(11, 'ram  asdfa', '', 'asdfsad', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userotp`
--

CREATE TABLE `userotp` (
  `email` varchar(50) NOT NULL,
  `OTP` varchar(6) DEFAULT NULL,
  `CREATEdate` datetime DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `optstatus` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userotp`
--

INSERT INTO `userotp` (`email`, `OTP`, `CREATEdate`, `updated`, `optstatus`) VALUES
('rujenmrj15+1@gmail.com', '860495', '2024-04-05 08:49:16', '2024-04-05 03:28:32', 0),
('Rujenmrj15+3@gmail.com', '235971', '2024-04-05 15:44:34', '2024-04-05 10:01:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(5) NOT NULL DEFAULT 'user',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Rujen', 'rujenmrj@gmail.com', '070395236f10bf62557c58964038a052', 'user', 1, '2024-03-28 02:55:33', '2024-03-27 21:10:33'),
(7, 'Sita', 'sita@gmail.com', '070395236f10bf62557c58964038a052', 'user', 1, '2024-03-28 02:55:33', '2024-03-27 21:10:33'),
(8, 'Rujen123', 'rujenmrj15@gmail.com', '070395236f10bf62557c58964038a052', 'user', 1, '2024-03-31 13:59:53', '2024-03-31 08:14:53'),
(13, 'admin123', 'rujenmrj15+1@gmail.com', '070395236f10bf62557c58964038a052', 'user', 1, '2024-04-05 08:15:21', '2024-04-05 02:30:21'),
(15, 'asdfsad', 'Rujenmrj15+3@gmail.com', '070395236f10bf62557c58964038a052', 'user', 1, '2024-04-05 15:44:03', '2024-04-05 09:59:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`friendID`),
  ADD KEY `requestID` (`requestID`),
  ADD KEY `receiveID` (`receiveID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messageID`),
  ADD KEY `fk_from` (`messagefrom`),
  ADD KEY `fk_to` (`messageto`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD UNIQUE KEY `profileID` (`profileID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `userotp`
--
ALTER TABLE `userotp`
  ADD UNIQUE KEY `constr_ID` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `friendID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profileID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_ibfk_1` FOREIGN KEY (`requestID`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `friends_ibfk_2` FOREIGN KEY (`receiveID`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_from` FOREIGN KEY (`messagefrom`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_to` FOREIGN KEY (`messageto`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userotp`
--
ALTER TABLE `userotp`
  ADD CONSTRAINT `fk_email` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
