-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 02:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `facilitator`
--

CREATE TABLE `facilitator` (
  `Name` varchar(30) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Guardian_name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Qualification` varchar(30) NOT NULL,
  `T_id` int(20) NOT NULL,
  `Phone_number` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilitator`
--

INSERT INTO `facilitator` (`Name`, `Username`, `Date_of_birth`, `Guardian_name`, `Email`, `Qualification`, `T_id`, `Phone_number`) VALUES
('Remon Shrestha', 'remon1', '2022-07-23', '', 'shresthanewar678@gmail.com', '', 3, '9861110801');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Name` varchar(30) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Father_Name` varchar(30) NOT NULL,
  `Mother_Name` varchar(30) NOT NULL,
  `Grade` int(10) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `S_Id` int(20) NOT NULL,
  `Class` int(10) DEFAULT NULL,
  `Phone_No` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Name`, `Username`, `Date_of_birth`, `Father_Name`, `Mother_Name`, `Grade`, `Email`, `S_Id`, `Class`, `Phone_No`) VALUES
('Manoj Shrestha', 'manoj1', '2022-07-19', '', '', 0, 'manojbicte@gmail.com', 1, NULL, '2147483647'),
('Manoj Shrestha', 'manoj2', '2022-07-20', 'Hari Kumar Shrestha', 'Pabitra Shrestha', 10, 'manojbicte@gmail.com', 2, 3, '9861110801');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(20) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Pass` varchar(10) NOT NULL,
  `Position` varchar(15) NOT NULL,
  `Date` date DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `u_id` int(11) NOT NULL,
  `Phone_No` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Username`, `Pass`, `Position`, `Date`, `Email`, `u_id`, `Phone_No`) VALUES
('AdminRaja', 'admin', 'admin', 'Admin', '2022-07-13', 'admin@gmail.com', 1, '9816683613'),
('Manoj Shrestha', 'manoj1', 'manoj1', 'Student', '2022-07-19', 'manojbicte@gmail.com', 2, '9861110801'),
('Manoj Shrestha', 'manoj2', 'manoj2', 'Student', '2022-07-20', 'manojbicte@gmail.com', 3, '9861110801'),
('Remon Shrestha', 'remon1', 'remon1', 'Facilitator', '2022-07-23', 'shresthanewar678@gmail.com', 4, '9861110801');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facilitator`
--
ALTER TABLE `facilitator`
  ADD PRIMARY KEY (`T_id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facilitator`
--
ALTER TABLE `facilitator`
  MODIFY `T_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `S_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
