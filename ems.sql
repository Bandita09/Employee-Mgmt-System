-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 10:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `department` varchar(255) NOT NULL,
  `blood_group` varchar(4) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `permanent_address` text NOT NULL,
  `present_address` text NOT NULL,
  `contactno` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `confirmpassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `father_name`, `mother_name`, `dob`, `doj`, `department`, `blood_group`, `gender`, `religion`, `marital_status`, `permanent_address`, `present_address`, `contactno`, `email`, `password`, `confirmpassword`) VALUES
(1, '', 'bimal', 'shs', '0000-00-00', '0000-00-00', 'nsjsnj', 'bloo', 'gender', 'religion', 'marital_status', 'permaddress', 'presentaddress', '9853158358', 'email', 'pikapooh09', 'confirm_pass'),
(2, 'name', 'fname', 'mname', '0000-00-00', '0000-00-00', 'depart', 'bloo', 'gender', 'religion', 'marital_status', 'permaddress', 'presentaddress', 'contactno', 'email', 'password', 'confirm_pass'),
(3, 'Bandita Pattanaik', 'Bimal Pattanaik', 'Manjulata Pattanaik', '1995-07-09', '2020-02-02', 'Web Technology', 'A', 'female', 'hinduism', 'single', 'Odisha', 'Odisha', '9853158358', 'bandita.pattanaik.9@gmail.com', 'Pikapooh09', 'Pikapooh09'),
(4, 'Barnali Pattanaik', 'Bimal Pattanaik', 'Manjulata Pattanaik', '1999-10-22', '2020-04-13', 'seo', 'A', 'female', 'hinduism', 'single', 'Odisha', 'Odisha', '7809756089', 'barnalipattanaik30@gmail.com', 'Barnali@123', 'Barnali@123'),
(5, 'Ezaz Akhtar', '', 'Binodini Swain', '1996-03-01', '2021-02-02', 'Web Technology', 'B', 'male', 'islamic', 'single', 'Bhubaneswar,Odisha', 'Bhubaneswar,Odisha', '8249120160', 'ezazakhtar1@gmail.com', 'Ezaz@123', 'Ezaz@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
