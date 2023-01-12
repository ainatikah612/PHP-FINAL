-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 05:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapelajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_pelajar`
--

CREATE TABLE `info_pelajar` (
  `id` int(3) NOT NULL,
  `namapelajar` varchar(50) NOT NULL,
  `nondp` int(9) NOT NULL,
  `nokp` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `jantina` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_pelajar`
--

INSERT INTO `info_pelajar` (`id`, `namapelajar`, `nondp`, `nokp`, `nohp`, `jantina`) VALUES
(1, 'AINA ATIKAH BINTI MOHD AZHAR', 23221084, '031206140108', '01162700612', 'perempuan'),
(2, 'AINA NAJWA BINTI AMRAN', 23221102, '021013031452', '0123648915', 'Perempuan'),
(3, 'ALLYSSA BINTI ABDULLAH', 23221157, '020828160168', '0112468316', 'Perempuan'),
(5, 'ISHUAARIYAA A/P KRISHNAN', 23221100, '030526141256', '0172564321', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_pelajar`
--
ALTER TABLE `info_pelajar`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
