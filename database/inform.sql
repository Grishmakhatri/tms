-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 08:25 PM
-- Server version: 11.5.2-MariaDB
-- PHP Version: 8.2.12

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `inform`
--

INSERT INTO `inform` (`id`, `fname`, `lname`, `gender`, `email`, `mobile`, `address`) VALUES
(34, 'Puspa', 'Shakya', 'Male', 'puspa34@gmail.com', '9876543210', 'Bhaktapur, timi		 			 	'),
(35, 'Susan', 'Budhathoki', 'Female', 'susan@gmail.com', '9845557575', 'Tal'),
(36, 'Bima', 'Pokheral', 'Female', 'bima@gmail.com', '9876504321', 'Koteshwor		 	'),
(37, 'Ambika', 'Karki', 'Female', 'ambika@gmail.com', '9864352107', 'Karve, Lele		 			 	'),
(39, 'KP', 'Oli Sharma', 'Male', 'kpsharma@gmail.com', '9808604545', 'Balkot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inform`
--
ALTER TABLE `inform`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`mobile`),
  ADD UNIQUE KEY `email_2` (`email`,`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inform`
--
ALTER TABLE `inform`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
