-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 06:02 AM
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
-- Database: `tanki_air`
--

-- --------------------------------------------------------

--
-- Table structure for table `tanki_air`
--

CREATE TABLE `tanki_air` (
  `ID_TANKI` int(10) NOT NULL,
  `STATUS_TANKI` varchar(15) NOT NULL,
  `VOLUME` int(15) NOT NULL,
  `TEMPERATUR` int(15) NOT NULL,
  `KAPASITAS` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tanki_air`
--

INSERT INTO `tanki_air` (`ID_TANKI`, `STATUS_TANKI`, `VOLUME`, `TEMPERATUR`, `KAPASITAS`) VALUES
(1, 'Normal', 10000, 25, 10000),
(2, 'Refuelling', 48000, 23, 50000),
(3, 'Kurang', 10000, 24, 15000),
(4, 'Normal', 10000, 25, 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tanki_air`
--
ALTER TABLE `tanki_air`
  ADD PRIMARY KEY (`ID_TANKI`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tanki_air`
--
ALTER TABLE `tanki_air`
  MODIFY `ID_TANKI` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
