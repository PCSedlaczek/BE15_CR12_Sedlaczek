-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 05:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be15_cr12_mount_everest_sedlaczek`
--
CREATE DATABASE IF NOT EXISTS `be15_cr12_mount_everest_sedlaczek` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be15_cr12_mount_everest_sedlaczek`;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `city` varchar(45) NOT NULL,
  `country` varchar(53) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `src` varchar(50) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `free` enum('Available','Full','Closed') DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `location`, `city`, `country`, `description`, `price`, `latitude`, `longitude`, `img`, `src`, `url`, `free`) VALUES
(1, 'New Camping Le Tamerici', 'Cecina Mare', 'Italy', 'On the Tuscan Costa degli Etruschi (Etruscan Coast), in the resort town of Marina di Cecina, you will find New Camping Le Tamerici. Here you are staying on a well maintained, level camping site on the edge of a pine forest, approx. 500 m from the beach. Apart from relaxing on the beach or around the pool, you can also make lovely excursions into Tuscany from here.', '450.00', '47.69647190', '13.34575820', 'Cecina_distance_Moralist_Wikimedia.jpg', 'Moralist, Wikimedia Commons', 'https://commons.wikimedia.org/wiki/File:Cecina_distance.JPG', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
