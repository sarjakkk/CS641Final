-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 07:31 AM
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
  `password` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`mail`, `password`) VALUES
('admin@gmail.com', 12345);

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
  `mnumber` int(20) NOT NULL,
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
(1, 'hery', 'potter', '1995-11-30', 30, 2147483647, 'hery@gmail.com', 'gradu', 'cs', 'maths', 'gujh', 'h1234'),
(3, 'reva', 'shah', '1982-12-03', 35, 12345678, 'reva@gmail.com', 'ytgvb', 'bt', 'english', 'sachin', 'r123'),
(5, 'nimu', 'shah', '1982-12-02', 30, 123456789, 'nimu@gmail.com', 'gradu', 'cs', 'bio', 'katargam', 'n123'),
(10, 'ami', 'moradiya', '1990-12-24', 30, 1234, 'ami@gmail.com', 'gradu', 'bt', 'computer', 'katargam', 'a123'),
(14, 'nenu', 'gabani', '1980-02-03', 40, 2334323, 'nenu@gmail.com', 'gradu', 'es', 'enviroment', 'kamrej', 'n123'),
(15, 'nik', 'shah', '2021-01-27', 30, 12345, 'nik@gmail.com', 'gradu', 'cs', 'computer', 'hjjhjik', 'n123');

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
  `address` varchar(50) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `bdate`, `age`, `mnumber`, `mail`, `field`, `address`, `password`) VALUES
(1, 'mihar', 'sharma', '2001-06-03', 20, 1234, 'mihar@gmail.com', 'es', 'abcd', '123'),
(10, '34572', '32423', '2021-01-21', 34, 1234567878, 'abc@gmail.com', 'bt', '3423', 'fdes');

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
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
