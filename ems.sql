-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 06:22 PM
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
(12, 'Bandita Pattanaik', 'Bimal Pattanaik', 'Manjulata Pattanaik', '2020-04-06', '0000-00-00', 'seo', 'Admin', 'A', 'female', 'hinduism', 'single', '', '', '9853158358', 'bandita.pattanaik.9@gmail.com', '870bcc096f45c52669cf6d3d42708a41', '870bcc096f45c52669cf6d3d42708a41'),
(13, 'Barnali Pattanaik', 'Bimal Pattanaik', 'Manjulata Pattanaik', '1999-04-15', '2020-04-07', 'seo', 'Employee', 'A', 'female', 'hinduism', 'single', 'Odisha', 'Odisha', '9853158358', 'barnalipattanaik30@gmail.com', '870bcc096f45c52669cf6d3d42708a41', '870bcc096f45c52669cf6d3d42708a41'),
(14, 'Ezaz Akhtar', 'abc', 'bcd', '2020-04-15', '2020-04-13', 'seo', 'Employee', 'A', '', 'hinduism', 'single', ' Bhubaneswar', 'Bhubanesswar', '9853158358', 'ezazakhtar1@gmail.com', '3d608148388df446d33c0d023f1e3166', '3d608148388df446d33c0d023f1e3166'),
(15, 'Xyz', 'abc', 'bcd', '0000-00-00', '0000-00-00', 'Web development', 'Admin', 'A-', 'Male', 'Islamic', 'single', '', '', '788888888888', '', 'Abc@123', ''),
(16, 'Xyz', 'abc', 'bcd', '0000-00-00', '0000-00-00', 'Web development', 'Admin', 'A-', 'Male', 'Islamic', 'single', '', '', '788888888888', 'abc@gmail.com', 'Abc@123', ''),
(17, 'abcd23', 'Bimal Pattanaik', 'bcd', '2020-04-14', '0000-00-00', 'Web Technology', 'Admin', 'A', 'female', 'hinduism', 'single', 'ODISHA', 'ODISHA', '9853158358', 'abcd@gmail.com', '870bcc096f45c52669cf6d3d42708a41', '870bcc096f45c52669cf6d3d42708a41'),
(18, 'Abcd', 'Bimal Pattanaik', 'Manjulata Pattanaik', '0000-00-00', '0000-00-00', '', '', 'A', '', 'hinduism', 'single', '', '', '', 'abcd@gmail.com', 'b3f947379e88aab49c26f395aa0ebaee', 'b3f947379e88aab49c26f395aa0ebaee'),
(19, 'bandita', 'Bimal Pattanaik', 'Manjulata Pattanaik', '0000-00-00', '0000-00-00', '', 'Admin', 'A', 'female', 'hinduism', 'single', '', '', '', 'bandita@mail.com', 'f92d6693621a45a98fc4eb14ab58a0ac', 'f92d6693621a45a98fc4eb14ab58a0ac');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `r_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `reply` text NOT NULL,
  `reply_by` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`r_id`, `m_id`, `reply`, `reply_by`, `date_time`) VALUES
(1, 0, '0', 0, '0000-00-00 00:00:00'),
(2, 5, '0', 0, '0000-00-00 00:00:00'),
(3, 1, 'testing completed', 0, '2020-04-29 05:54:17'),
(4, 7, 'assign to xyz', 0, '2020-04-29 05:55:18'),
(5, 7, 'assign to xyz', 0, '2020-04-29 05:55:33'),
(6, 7, 'assign to xyz', 0, '2020-04-29 05:55:48'),
(7, 5, 'reply testing', 14, '2020-04-29 16:44:18'),
(8, 7, 'assign task was over', 14, '2020-04-29 17:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `t_id` int(11) NOT NULL,
  `task` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `assigned_by` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`t_id`, `task`, `user_id`, `assigned_by`, `date_time`) VALUES
(1, 'testing', 14, 19, '0000-00-00 00:00:00'),
(2, 'testing', 14, 19, '0000-00-00 00:00:00'),
(3, 'testing', 13, 19, '0000-00-00 00:00:00'),
(4, 'Lorem ipsum dolor sit amet . The graphic and typographic operators know this well, in reality all the professions dealing with the universe of communication have a stable relationship with these words, but what is it? Lorem ipsum is a dummy text without any sense.\r\n\r\nIt is a sequence of Latin words that, as they are positioned, do not form sentences with a complete sense, but give life to a test text useful to fill spaces that will subsequently be occupied from ad hoc texts composed by communication professionals.\r\n\r\nIt is certainly the most famous placeholder text even if there are different versions distinguishable from the order in which the Latin words are repeated.', 13, 19, '2020-04-28 05:38:34'),
(5, 'do the proper task', 14, 19, '2020-04-28 05:41:46'),
(6, 'testing task', 14, 19, '2020-04-28 05:44:15'),
(7, 'assign', 14, 0, '2020-04-28 05:45:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
