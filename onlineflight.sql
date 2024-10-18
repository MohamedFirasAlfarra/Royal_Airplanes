-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 10:07 AM
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
-- Database: `onlineflight`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` varchar(11) NOT NULL,
  `airport1` varchar(100) NOT NULL,
  `airport2` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `seats` int(100) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `airport1`, `airport2`, `date`, `time`, `seats`, `price`) VALUES
('1', 'Damascus', 'Cairo', '2024-4-30', '20:00:00', 170, '150$');
INSERT INTO `flights` (`id`, `airport1`, `airport2`, `date`, `time`, `seats`, `price`) VALUES
('2', 'Aleepo', 'Istanbul', '2024-6-2', '2:15:00', 200, '250$');
INSERT INTO `flights` (`id`, `airport1`, `airport2`, `date`, `time`, `seats`, `price`) VALUES
('3', 'Damascus', 'Maldives', '2024-5-3', '24:00:00', 240, '400$');
INSERT INTO `flights` (`id`, `airport1`, `airport2`, `date`, `time`, `seats`, `price`) VALUES
('4', 'Damascus', 'Paris', '2024-4-23', '04:30:00', 400, '300$');
INSERT INTO `flights` (`id`, `airport1`, `airport2`, `date`, `time`, `seats`, `price`) VALUES
('5', 'Lattakia', 'London', '2024-3-18', '09:00:00', 500, '325$');
INSERT INTO `flights` (`id`, `airport1`, `airport2`, `date`, `time`, `seats`, `price`) VALUES
('6', 'Aleppo', 'Dubai', '2024-4-15', '21:00:00', 500, '275$');
INSERT INTO `flights` (`id`, `airport1`, `airport2`, `date`, `time`, `seats`, `price`) VALUES
('7', 'Damascus', 'New Delhi', '2024-3-15', '01:00:00', 700, '200$');
INSERT INTO `flights` (`id`, `airport1`, `airport2`, `date`, `time`, `seats`, `price`) VALUES
('8', 'Damascus', 'Doha', '2024-6-15', '21:00:00', 300, '275$');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
