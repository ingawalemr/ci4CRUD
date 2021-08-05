-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2021 at 08:47 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreamztechnology`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentsform`
--

CREATE TABLE `studentsform` (
  `id` int(9) NOT NULL,
  `name` text NOT NULL,
  `dob` date DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentsform`
--

INSERT INTO `studentsform` (`id`, `name`, `dob`, `doj`, `email`, `mobile`, `address`, `created_at`) VALUES
(3, 'Mahadev Rajan Ingawale', '2021-08-04', '2021-08-10', 'ingawalemr12@gmail.com', 9970410333, 'satara			', '2021-05-27 21:42:14'),
(10, 'mahadev ingawale', '1989-12-05', '2021-08-09', 'ingawalemr12@gmail.com', 9970410333, 'Pune', '2021-08-05 11:27:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentsform`
--
ALTER TABLE `studentsform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentsform`
--
ALTER TABLE `studentsform`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
