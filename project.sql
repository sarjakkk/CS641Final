-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2024 at 09:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `mail` varchar(30) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`mail`, `password`) VALUES
('admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `atten`
--

CREATE TABLE `atten` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `attendance` varchar(10) NOT NULL,
  `field` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `subject` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atten`
--

INSERT INTO `atten` (`id`, `name`, `date`, `attendance`, `field`, `semester`, `subject`) VALUES
(41, 'parth', '2021-08-20', 'Present', 'mb', '1', 'biology'),
(42, 'pd', '2021-08-18', 'present', 'cs', '6', 'php'),
(44, 'parth', '2021-08-20', 'Present', 'mb', '1', 'physics'),
(45, 'vidhya', '2021-08-21', 'Present', 'mb', '1', 'physics'),
(46, 'vaibhav', '2021-08-21', 'Present', 'bt', '4', 'bio chemis'),
(47, 'nikunj', '2021-08-21', 'Present', 'bt', '4', 'bio chemis'),
(48, 'mihar', '2021-08-21', 'Present', 'cs', '1', 'java'),
(49, 'meet', '2021-08-21', 'Present', 'mb', '2', 'physics'),
(50, 'dhruvil', '2021-08-21', 'Present', 'mb', '3', 'biology');

-- --------------------------------------------------------

--
-- Table structure for table `atten_staff`
--

CREATE TABLE `atten_staff` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `attendance` varchar(10) NOT NULL,
  `field` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atten_staff`
--

INSERT INTO `atten_staff` (`id`, `name`, `date`, `attendance`, `field`) VALUES
(1, 'nenu', '2021-08-19 16:37:53', 'Present', 'es'),
(2, 'reva', '2021-08-20 09:03:27', 'Present', 'bt'),
(3, 'ami', '2021-08-20 09:03:27', 'Present', 'bt'),
(4, 'prarthna', '2021-08-20 09:03:27', 'Present', 'bt'),
(5, 'nimu', '2021-08-21 01:44:01', 'Present', 'cs'),
(6, 'ami', '2021-08-21 01:44:01', 'Present', 'cs'),
(7, 'nenu', '2021-08-21 01:44:01', 'Present', 'cs'),
(8, 'nik', '2021-08-21 01:44:01', 'Present', 'cs'),
(9, 'prarthna', '2021-08-21 01:44:01', 'Present', 'cs'),
(10, 'rutvi', '2021-08-21 01:44:01', 'Present', 'cs'),
(11, 'rutvi', '2021-08-21 01:44:01', 'Absent', 'cs'),
(12, 'nidhi', '2021-08-21 04:41:10', 'Present', 'mb'),
(13, 'payal', '2021-08-21 04:41:10', 'Absent', 'mb'),
(14, 'manav', '2021-08-21 06:16:17', 'Present', 'bt'),
(15, 'nidhi', '2022-01-26 05:33:26', 'Present', 'mb'),
(16, 'payal', '2022-01-26 05:33:26', 'Absent', 'mb');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `age` int(4) NOT NULL,
  `mnumber` int(100) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `qualification` varchar(5) NOT NULL,
  `field` varchar(10) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `fname`, `lname`, `bdate`, `age`, `mnumber`, `mail`, `qualification`, `field`, `subject`, `address`, `password`) VALUES
(3, 'reva', 'shah', '1982-12-03', 30, 989845457, 'reva@gmail.com', 'b.tec', 'es', 'php', 'sachin', 'r123'),
(5, 'nimu', 'shah', '1982-12-02', 30, 989845459, 'nimu@gmail.com', 'gradu', 'cs', 'java', 'katargam', 'n123'),
(10, 'ami', 'moradiya', '1990-12-24', 30, 989845459, 'ami@gmail.com', 'gradu', 'cs', 'english', 'katargam', 'a123'),
(14, 'nenu', 'gabani', '1980-02-03', 40, 989845459, 'nenu@gmail.com', 'gradu', 'cs', '.net', 'kamrej', 'n123'),
(15, 'nik', 'shah', '2021-01-27', 30, 989845450, 'nik@gmail.com', 'gradu', 'cs', 'android', 'katargam', 'n123'),
(16, 'prarthna', 'dhameliya', '1990-08-04', 30, 989845459, 'pd@gmail.com', 'gradu', 'cs', 'c', 'ndsjfn', 'p123'),
(17, 'rutvi', 'gabani', '1985-08-10', 35, 989845454, 'rutvi@gmail.com', 'gradu', 'cs', 'c++', 'surat', 'r123'),
(20, 'rutvi', 'gabani', '1985-08-14', 35, 989845459, 'rutvi1@gmail.com', 'maste', 'cs', 'sqa', 'kamrej', 'r123'),
(22, 'pryag', 'dhameliya', '1970-07-13', 50, 676734526, 'pryag@gmail.com', 'p.h.d', 'es', 'english', 'pal', 'p123'),
(24, 'kush', 'patel', '1975-04-13', 45, 676734526, 'kush@gmail.com', 'gradu', 'es', 'enviroment', 'amroli', 'k123'),
(25, 'nidhi', 'agrwal', '1780-08-03', 41, 989845459, 'nidhi@gmail.com', 'maste', 'mb', 'biology', 'pal', 'n123'),
(26, 'payal', 'moradiya', '1795-08-07', 35, 989845454, 'payal@gmail.com', 'p.h.d', 'mb', 'physics', 'jakatnaka', 'p123'),
(27, 'manav', 'desai', '1970-06-07', 30, 989845454, 'manav@gmail.com', 'maste', 'bt', 'bio chemis', 'simada', 'm123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `bdate` date NOT NULL,
  `age` int(4) NOT NULL,
  `mnumber` int(10) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `field` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `bdate`, `age`, `mnumber`, `mail`, `field`, `semester`, `address`, `password`) VALUES
(11, 'janki', 'patel', '2004-08-12', 17, 2147483647, 'janki@gmail.com', 'cs', '2', 'katargam', 'j123'),
(12, 'ansh', 'shah', '2003-08-12', 18, 2147483647, 'ansh@gmail.com', 'cs', '3', 'surat', 'a123'),
(13, 'pari', 'dhameliya', '2003-08-05', 18, 34526754, 'pari@gmail.com', 'cs', '4', 'navsari', 'p123'),
(14, 'parth', 'patoliya', '2002-08-05', 19, 2147483647, 'parth@gmail.com', 'cs', '5', 'baroda', 'p123'),
(15, 'jenish', 'gaudani', '2002-06-10', 20, 98984545, 'jenish@gmail.com', 'cs', '6', 'kapodra', 'j123'),
(16, 'vidhya', 'patel', '2004-06-03', 17, 675784836, 'vidhya@gmail.com', 'mb', '1', 'varacha', 'v123'),
(17, 'meet', 'bhimani', '2004-04-04', 17, 65746767, 'meet@gmail.com', 'mb', '2', 'ahemdabad', 'm123'),
(18, 'dhruvil', 'mehta', '2003-03-20', 19, 123456789, 'dhruvil@gmail.com', 'mb', '3', 'vesu', 'd123'),
(19, 'rupal', 'khokhar', '2003-01-20', 19, 1237676876, 'rupal@gmail.com', 'mb', '4', 'kamrej', 'r123'),
(20, 'yash', 'shankar', '2002-08-23', 19, 235467676, 'yash@gmail.com', 'mb', '5', 'nana varacha', 'y123'),
(21, 'madhvi', 'kapoor', '2002-05-20', 20, 21356565, 'madhvi@gmail.com', 'mb', '6', 'vastrapur', 'm123'),
(22, 'rutvik', 'golaviya', '2004-09-15', 17, 34553467, 'rutvik@gmail.com', 'es', '1', 'dabholi', 'r123'),
(23, 'jasmin', 'radadiya', '2004-07-31', 17, 4677346, 'jasmin@gmail.com', 'es', '2', 'simada', 'j123'),
(24, 'priyansh', 'patel', '2003-03-20', 19, 23345654, 'priyansh@gmail.com', 'es', '3', 'vapi', 'p123'),
(25, 'pryag', 'savani', '2003-03-23', 18, 123321455, 'pryag@gmail.com', 'es', '4', 'dsccvd', 'p123'),
(26, 'janvi', 'parmar', '2002-09-21', 19, 12312233, 'janvi@gmail.com', 'es', '5', 'rajkot', 'j123'),
(27, 'prerna', 'patel', '2002-11-17', 19, 456789099, 'prerna@gmail.com', 'es', '6', 'hirabag', 'p123'),
(28, 'rutu', 'diyora', '2004-12-25', 17, 2147483647, 'rutu@gmail.com', 'bt', '1', 'jahangirpura', 'r123'),
(29, 'krina', 'kevdiya', '2004-05-31', 18, 123456789, 'krina@gmail.com', 'bt', '2', 'sdsdbshc', 'k123'),
(30, 'smit', 'kevadiya', '2003-02-11', 18, 767436573, 'smit@gmail.com', 'bt', '3', 'fhsjdsdj', 's123'),
(31, 'vaibhav', 'babariya', '2003-09-19', 18, 98989878, 'vaibhav@gmail.com', 'bt', '4', 'pal', 'v123'),
(32, 'nikunj', 'gangera', '2003-06-16', 19, 82382701, 'nikunj@gmail.com', 'bt', '4', 'fhsh', 'n123'),
(33, 'ridhdhi', 'chavda', '2002-01-20', 19, 234567898, 'ridhdhi@gmail.com', 'bt', '5', 'vesu', 'r123'),
(34, 'laksh', 'shah', '2002-04-29', 20, 746576347, 'laksh@gmail.com', 'bt', '6', 'cdcx', 'l123'),
(36, 'nikunj', 'chavda', '2000-08-03', 21, 54657788, 'nik12@gmail.com', 'bt', '5', 'surat', 'nik123'),
(37, 'reva', 'shah', '1999-06-05', 22, 2147483647, 'reva@gmail.com', 'es', '3', 'bbbbn', 'r123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`mail`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `atten`
--
ALTER TABLE `atten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atten_staff`
--
ALTER TABLE `atten_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atten`
--
ALTER TABLE `atten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `atten_staff`
--
ALTER TABLE `atten_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
