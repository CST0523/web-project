-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 01:14 PM
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
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fdid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fdid`, `name`, `email`, `phone`, `feedback`) VALUES
(1, 'NexGen', 'nexgen@gmail.com', '0123247899', 'abc'),
(2, 'user1', 'user@gmail.com', '0123456891', 'need to improve');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bus`
--

CREATE TABLE `tbl_bus` (
  `transportID` int(11) NOT NULL,
  `Num` varchar(100) NOT NULL,
  `startPoint` varchar(100) NOT NULL,
  `endPoint` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `operationHour` varchar(100) NOT NULL,
  `frequency` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_bus`
--

INSERT INTO `tbl_bus` (`transportID`, `Num`, `startPoint`, `endPoint`, `color`, `operationHour`, `frequency`, `type`) VALUES
(1, 'GOKL01', 'Suria KLCC', 'Bukit Bintang', 'GREEN', '5:10 AM - 9:10 PM', '5', 'Eco-Bus'),
(2, 'GOKL02', 'Hab Pasar Seni', 'Bukit Bintang', 'PURPLE', '6:00 AM - 11:00 PM', '15', 'Eco-Bus'),
(3, 'GOKL03', 'Titiwangsa', 'KL Sentral', 'RED', '6:00 AM - 11:00 PM', '15', 'Eco-Bus'),
(4, 'GOKL04', 'Titiwangsa', 'Bukit Bintang', 'BLUE', '6:00 AM - 11:00 PM', '15', 'Eco-Bus'),
(5, 'GOKL05', 'Titiwangsa', 'MINDEF', 'ORANGE', '6:00 AM - 11:00 PM', '30', 'Eco-Bus'),
(6, 'GOKL06', 'PPR Pantai Ria', 'LRT Universiti ', 'PINK', '6:00 AM - 11:00 PM', '30', 'Eco-Bus'),
(7, 'GOKL07', 'LRT Dato Keramat', 'Taman Setiawangse', 'TURQUOISE', '6:00 AM - 11:00 PM', '15', 'Eco-Bus'),
(8, 'GOKL08', 'MRT/KTM Kampung Batu', 'Chow Kit', 'MARRON', '6:00 AM - 11:00 PM', '30', 'Eco-Bus'),
(9, 'GOKL09', 'LRT Sri Rampai', 'Seksyen 10 Wangsa Maju', 'CHOCOLATE', '6:00 AM - 11:00 PM', '30', 'Eco-Bus'),
(10, 'GOKL10', 'LRT/MER Maluri', 'Bandar Sri Permaisuri', 'PARROT-GREEN', '6:00 AM - 11:00 PM', '30', 'Eco-Bus'),
(11, 'GOKL11', 'LRT/MER Maluri', 'Bandar Tun Razak', 'GREY', '6:00 AM - 11:00 PM', '30', 'Eco-Bus'),
(12, 'GOKL12', 'Taman Fadason', 'MRT Sri Delima', 'CREAM', '6:00 AM - 11:00 PM', '30', 'Eco-Bus'),
(13, 'GOKL13', 'MRT Jinjang', 'MATRADE', 'MAGENTA', '6:00 AM - 11:00 PM', '30', 'Eco-Bus'),
(14, 'GOKL14', 'LRT Muhibbah', 'PPR Pinggiran Bukit Jalil/ Taman Oversea Union', '-', '6:00 AM - 11:00 PM', '30', 'Eco-Bus'),
(15, 'KL Monarail', 'KL Sentral', 'Titiwangsa', 'LIGHT GREEN', '6:00 AM - 11:46 PM', '10', 'Monorail'),
(16, 'MRT Kajang Line', 'Kwasa Damansara', 'Kajang', 'GREEN', '6:00 AM - 11:28 PM', '10', 'MRT'),
(17, 'MRT Putrajaya Line', 'Putrajaya Sentral', 'Kwasa Damansara', 'YELLOW', '6:00 AM - 11:34 PM', '8', 'MRT'),
(18, 'LRT Ampang Line', 'Masjid Jamek', 'Ampang', 'ORANGE', '6:00 AM - 11:58 PM', '5', 'LRT'),
(19, 'LRT Sri Petaling Line', 'Putra Heights', 'Hang Tuah', 'MAROON', '5:45 AM - 11:30 PM', '10', 'LRT'),
(20, 'LRT Kelana Jaya Line', 'Putra Heights', 'Gombak', 'RED', '5:45 AM - 11:36 PM', '7', 'LRT');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `dob`, `user_type`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '2000-05-23', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'testing', 'testing1@gmail.com', '2011-11-11', 'user', 'ae2b1fca515949e5d54fb22b8ed95575'),
(3, 'user', 'user@gmail.com', '2001-11-11', 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fdid`);

--
-- Indexes for table `tbl_bus`
--
ALTER TABLE `tbl_bus`
  ADD PRIMARY KEY (`transportID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fdid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_bus`
--
ALTER TABLE `tbl_bus`
  MODIFY `transportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
