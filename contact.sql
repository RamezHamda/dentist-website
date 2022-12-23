-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 10:45 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dentist`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `date`) VALUES
(1, 'Ramez Abu Hamda', 'ramez199586@gmail.com', '0599096729', '2022-08-29 18:14:00'),
(2, 'Ramez Abu Hamda', 'ramez199586@gmail.com', '0599096729', '2022-08-29 13:20:00'),
(3, 'Ramez Abu Hamda', 'ramez199586@gmail.com', '0599096729', '2022-08-29 01:17:00'),
(4, 'Ramez Abu Hamda', 'ramez199586@gmail.com', '0599096729', '2022-08-29 13:21:00'),
(5, 'Ramez Abu Hamda', 'ramez199586@gmail.com', '0599096729', '2022-08-29 18:17:00'),
(6, 'Ramez Abu Hamda', 'ramez199586@gmail.com', '0599096729', '2022-08-29 18:17:00'),
(7, 'Ramez Abu Hamda', 'ramez199586@gmail.com', '0599096729', '2022-08-03 11:05:00'),
(8, 'Ramez Abu Hamda', 'ramez199586@gmail.com', '0599096729', '2022-08-03 11:05:00'),
(9, 'Ramez Abu Hamda', 'ramez199586@gmail.com', '0599096729', '2022-08-03 11:05:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
