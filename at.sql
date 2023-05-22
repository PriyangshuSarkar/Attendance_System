-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 09:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `at`
--

CREATE TABLE `at` (
  `Roll_No.` bigint(13) NOT NULL,
  `Name` text NOT NULL,
  `Total_Attendance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `at`
--

INSERT INTO `at` (`Roll_No.`, `Name`, `Total_Attendance`) VALUES
(11100120001, 'Arunabha Biswas', 3),
(11100120006, 'Arnab De', 3),
(11100120033, 'Krishnendu Mahata', 1),
(11100120037, 'Anisha Kar', 3),
(11100120039, 'Debolina Dhar', 2),
(11100120040, 'Moumita Ghosh', 2),
(11101420001, 'Soham Kumar Dey', 3),
(11101420010, 'Tanmoy Sarkar', 3),
(11101420018, 'Priyanghu Sarkar', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `at`
--
ALTER TABLE `at`
  ADD PRIMARY KEY (`Roll_No.`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
