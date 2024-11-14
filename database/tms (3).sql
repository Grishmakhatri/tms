-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 02:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(100) NOT NULL,
  `date` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `date`, `username`, `message`) VALUES
(64, '2022-09-19 10:33PM', 'Susan budhathoki', 'sir, i got a problems.'),
(65, '2022-09-19 10:34PM', 'Rajkumar', 'what problem you get?\r\n'),
(69, '2022-09-22 07:48AM', 'Rajkumar', 'hello prachanda ji');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(100) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `teacher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `day`, `time`, `subject`, `teacher`) VALUES
(13, 'Monday', '6:30 am -- 7:30 am', 'Science', 'Puspa Shakya'),
(14, 'Monday', '9:00 am -- 9:30 am', 'Math', 'Susan Budhathoki'),
(15, 'Monday', '7:30 am -- 8:30 am', 'English', 'Bima Pokheral');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `time` varchar(255) NOT NULL,
  `room` varchar(100) NOT NULL,
  `teacher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `date`, `subject`, `time`, `room`, `teacher`) VALUES
(18, '2022-09-26', 'Science', '7:00 am -- 10:00 am', '501', ''),
(19, '2022-09-28', 'Math', '7:00 am -- 10:00 am', '501', ''),
(20, '2022-09-30', 'English', '7:00 am -- 10:00 am', '501', ''),
(21, '2022-10-21', 'Science', '10:00 am -- 1:00 pm', '402', ''),
(22, '2022-09-27', 'Math', '7:00 am -- 10:00 am', '302', '');

-- --------------------------------------------------------

--
-- Table structure for table `inform`
--

CREATE TABLE `inform` (
  `id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inform`
--

INSERT INTO `inform` (`id`, `fname`, `lname`, `gender`, `email`, `mobile`, `address`) VALUES
(34, 'Puspa', 'Shakya', 'Male', 'puspa34@gmail.com', '9876543210', 'Bhaktapur, timi		 			 	'),
(35, 'Susan', 'Budhathoki', 'Female', 'susan@gmail.com', '9845557575', 'Tal'),
(36, 'Bima', 'Pokheral', 'Female', 'bima@gmail.com', '9876504321', 'Koteshwor		 	'),
(37, 'Ambika', 'Karki', 'Female', 'ambika@gmail.com', '9864352107', 'Karve, Lele		 			 	'),
(39, 'KP', 'Oli Sharma', 'Male', 'kpsharma@gmail.com', '9808604545', 'Balkot');

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `id` int(20) NOT NULL,
  `date` varchar(255) NOT NULL,
  `notification` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`id`, `date`, `notification`) VALUES
(26, '2022-09-21 09:36PM', 'Please Check Course Schedule');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `date` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `date`, `name`, `email`, `password`, `user_type`) VALUES
(31, '2022-09-19 08:38PM', 'Susan budhathoki', 'susan@gmail.com', '202cb962ac59075b964b07152d234b70', 'User'),
(32, '2022-09-19 08:39PM', 'Rajkumar', 'pk4505442@gmail.com', '202cb962ac59075b964b07152d234b70', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inform`
--
ALTER TABLE `inform`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`mobile`),
  ADD UNIQUE KEY `email_2` (`email`,`mobile`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
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
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `inform`
--
ALTER TABLE `inform`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
