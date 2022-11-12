-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 05:42 PM
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
-- Database: `courseenroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_Id` int(10) NOT NULL,
  `Course_Name` varchar(60) NOT NULL,
  `Course_desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_Id`, `Course_Name`, `Course_desc`) VALUES
(1, 'ICTE', 'This is a very good subject\r\n'),
(2, 'BSc.', 'This is a very good subject');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `U_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `Pass`, `Position`, `U_id`) VALUES
('teacher', 'teacher', 'teacher', 2),
('admin', 'admin', 'admin', 3),
('student', 'student', 'student', 4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_Id` int(10) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Date_of_birth` date DEFAULT NULL,
  `Parent_Name` varchar(50) DEFAULT NULL,
  `Course` varchar(100) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Pass` varchar(50) DEFAULT NULL,
  `Phone_Number` varchar(15) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_Id`, `Name`, `Date_of_birth`, `Parent_Name`, `Course`, `Username`, `Pass`, `Phone_Number`, `Email`) VALUES
(1, '$fn', '0000-00-00', '$pn', 'ICTE', '$user', '$pass', '', 'hello@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `T_id` int(50) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Phone_number` varchar(15) DEFAULT NULL,
  `Date_of_birth` date DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Course` varchar(225) DEFAULT NULL,
  `Parent_name` varchar(100) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`T_id`, `Name`, `Phone_number`, `Date_of_birth`, `Email`, `Course`, `Parent_name`, `Username`) VALUES
(1, 'Seezan', '987129837', '2022-07-12', 'seezanshrestha8@gmail.com', 'ICTE', 'raj Kumar Shrestha', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`U_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_Id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`T_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Course_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `U_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Student_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `T_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
