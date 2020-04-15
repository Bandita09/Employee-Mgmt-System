-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 07:51 AM
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
  `role` varchar(100) NOT NULL,
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

INSERT INTO `employee` (`id`, `name`, `father_name`, `mother_name`, `dob`, `doj`, `department`, `role`, `blood_group`, `gender`, `religion`, `marital_status`, `permanent_address`, `present_address`, `contactno`, `email`, `password`, `confirmpassword`) VALUES
(11, '$name', '$fname', '$mname', '0000-00-00', '0000-00-00', '$depart', '', '$blo', '$gender', '$religion', '$marital_status', '$permaddress', '$presentaddress', '$contactno', '$email', '$password', '$confirm_pass'),
(12, 'Bandita Pattanaik', 'Bimal Pattanaik', 'Manjulata Pattanaik', '2020-04-06', '0000-00-00', 'seo', 'Admin', 'A', 'female', 'hinduism', 'single', '', '', '9853158358', 'bandita.pattanaik.9@gmail.com', '870bcc096f45c52669cf6d3d42708a41', '870bcc096f45c52669cf6d3d42708a41'),
(13, 'Barnali Pattanaik', 'Bimal Pattanaik', 'Manjulata Pattanaik', '1999-04-15', '2020-04-07', 'seo', 'Employee', 'A', 'female', 'hinduism', 'single', 'Odisha', 'Odisha', '9853158358', 'barnalipattanaik30@gmail.com', '870bcc096f45c52669cf6d3d42708a41', '870bcc096f45c52669cf6d3d42708a41'),
(14, 'Ezaz Akhtar', 'abc', 'bcd', '2020-04-15', '2020-04-13', 'seo', 'Employee', 'A', '', 'hinduism', 'single', ' Bhubaneswar', 'Bhubanesswar', '9853158358', 'ezazakhtar1@gmail.com', '3d608148388df446d33c0d023f1e3166', '3d608148388df446d33c0d023f1e3166'),
(15, 'Xyz', 'abc', 'bcd', '0000-00-00', '0000-00-00', 'Web development', 'Admin', 'A-', 'Male', 'Islamic', 'single', '', '', '788888888888', '', 'Abc@123', ''),
(16, 'Xyz', 'abc', 'bcd', '0000-00-00', '0000-00-00', 'Web development', 'Admin', 'A-', 'Male', 'Islamic', 'single', '', '', '788888888888', 'abc@gmail.com', 'Abc@123', ''),
(17, 'abcd', 'xyz', 'abc', '2020-04-16', '2020-04-13', 'Web Technology', 'Admin', 'B', 'female', 'hinduism', 'single', '', '', '8249120160', 'abcd@gmail.com', 'b3f947379e88aab49c26f395aa0ebaee', 'b3f947379e88aab49c26f395aa0ebaee'),
(18, 'Abcd', 'Bimal Pattanaik', 'Manjulata Pattanaik', '0000-00-00', '0000-00-00', '', '', 'A', '', 'hinduism', 'single', '', '', '', 'abcd@gmail.com', 'b3f947379e88aab49c26f395aa0ebaee', 'b3f947379e88aab49c26f395aa0ebaee'),
(19, 'bandita', 'Bimal Pattanaik', 'Manjulata Pattanaik', '0000-00-00', '0000-00-00', '', 'Admin', 'A', 'female', 'hinduism', 'single', '', '', '', 'bandita@mail.com', 'f92d6693621a45a98fc4eb14ab58a0ac', 'f92d6693621a45a98fc4eb14ab58a0ac');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
