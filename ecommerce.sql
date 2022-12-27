-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2022 at 05:49 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_admin`
--

CREATE TABLE `register_admin` (
  `record_id` int(10) NOT NULL,
  `firstName` varchar(10) NOT NULL,
  `lastName` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `phoneNumber` varchar(14) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_admin`
--

INSERT INTO `register_admin` (`record_id`, `firstName`, `lastName`, `username`, `phoneNumber`, `email`, `password`) VALUES
(1, '', '', '', '', '', ''),
(2, 'Cynthia', 'Musila', '', '', 'cynthia.musila@strat', '1234'),
(3, 'Cynthia', 'Musila', '', '', 'cynthia.musila@strat', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `register_clothes`
--

CREATE TABLE `register_clothes` (
  `record_id` int(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `category` varchar(14) NOT NULL,
  `price` varchar(20) NOT NULL,
  `size` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register_table`
--

CREATE TABLE `register_table` (
  `record_id` int(10) NOT NULL,
  `firstName` varchar(10) NOT NULL,
  `lastName` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_table`
--

INSERT INTO `register_table` (`record_id`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, '', '', '', ''),
(2, 'Cynthia', 'Musila', 'Cynthia.musila@strat', '0000'),
(3, 'Katole', 'Cynthia', 'cynthia.Musila@strat', 'oooo'),
(4, 'Bottle', 'Water', 'water@gmail.com', '1234'),
(5, 'kenya', 'nairobi', 'kenya@gmail.com', '1234'),
(6, 'cynthia', 'strathmore', 'cynthiastrath@gmail.', '1234'),
(7, 'Cynthia', 'Musila', 'cynthia.musila@strat', '1234'),
(8, 'Cynthia', 'Musila', 'cynthia.musila@strat', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_admin`
--
ALTER TABLE `register_admin`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `register_clothes`
--
ALTER TABLE `register_clothes`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `register_table`
--
ALTER TABLE `register_table`
  ADD PRIMARY KEY (`record_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register_admin`
--
ALTER TABLE `register_admin`
  MODIFY `record_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register_clothes`
--
ALTER TABLE `register_clothes`
  MODIFY `record_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register_table`
--
ALTER TABLE `register_table`
  MODIFY `record_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
