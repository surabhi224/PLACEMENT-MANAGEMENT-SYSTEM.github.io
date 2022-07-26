-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 02:37 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `compname` varchar(20) NOT NULL,
  `link` varchar(20) NOT NULL,
  `HRname` varchar(20) NOT NULL,
  `HRemail` varchar(20) NOT NULL,
  `contactno` bigint(10) NOT NULL,
  `compadd` varchar(30) NOT NULL,
  `pincode` varchar(7) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `niche` enum('pr','pu') NOT NULL,
  `coming` enum('i','f') NOT NULL,
  `course` enum('bt','bc','m') NOT NULL,
  `branch` enum('IT','CS','EC','EE','EI') NOT NULL,
  `stipend` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`compname`, `link`, `HRname`, `HRemail`, `contactno`, `compadd`, `pincode`, `state`, `country`, `niche`, `coming`, `course`, `branch`, `stipend`) VALUES
('goldman', 'dhbfjdfg', 'gdgthgt', 'ishi@gmaiil,com', 354354, 'dfdg', '5445', 'fdgfdg', 'india', 'pr', 'i', 'bt', 'IT', 56899),
('Walmart', 'www.walmart.com', 'Shivangi', 'Shivangi@gmail.com', 123456789, 'Lucknow', '226017', 'UP', 'India', 'pr', 'i', 'bt', 'EC', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `number` bigint(10) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `message`) VALUES
(0, 'ishita', 'ish@gmail.com', 3545, 'dfdfgf'),
(0, 'Ishita', 'ish@gmail.com', 12345678, 'Hello'),
(0, 'ishita', 'ishi@gmail.com', 1234567890, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `status`, `date`) VALUES
(3, 'hello\r\n', 0, '2021-04-28 12:47:12'),
(5, 'Hello how are you', 0, '2021-04-29 02:36:33'),
(6, 'hi', 0, '2021-05-19 06:55:35'),
(7, 'hi', 0, '2021-05-19 07:01:26'),
(8, 'banasthali', 0, '2021-05-19 08:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `enroll` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `salary` int(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `comp_state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `name`, `enroll`, `branch`, `batch`, `salary`, `designation`, `comp_name`, `comp_state`) VALUES
(1, 'Shivangi Tripathi', '2345', 'IT', '2022', 900000, 'software engineer', 'sony', 'Uttar Pradesh'),
(2, 'himani', '4544', 'IT', '2022', 89075, 'software engineer', 'amazon', 'Uttar Pradesh'),
(3, 'nandini', '5646', 'IT', '2022', 78900, 'software engineer', 'flipkart', 'Uttar Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE `student_record` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `enroll_no` varchar(15) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `phn_no` varchar(14) NOT NULL,
  `email` varchar(35) NOT NULL,
  `dob` date NOT NULL,
  `permt_add` varchar(200) NOT NULL,
  `city` varchar(25) NOT NULL,
  `pincode` int(6) NOT NULL,
  `state` varchar(30) NOT NULL,
  `program` varchar(20) NOT NULL,
  `curr_sem` int(4) NOT NULL,
  `branch_study` varchar(40) NOT NULL,
  `tenth_aggr` float NOT NULL,
  `twelvth_aggr` float NOT NULL,
  `cgpa` float NOT NULL,
  `curr_blog` int(2) NOT NULL,
  `enroll_year` int(4) NOT NULL,
  `pass_year` int(4) NOT NULL,
  `profile_pic` varchar(200) NOT NULL,
  `resume` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `password`, `date_created`, `status`) VALUES
(0, 'shivi', 'sahgal', 'shivi', 'shivi12@gmail.com', 'shivi', '2021-04-29 12:35:40', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_record`
--
ALTER TABLE `student_record`
  ADD PRIMARY KEY (`enroll_no`),
  ADD UNIQUE KEY `usn` (`usn`),
  ADD UNIQUE KEY `enroll_no` (`enroll_no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
