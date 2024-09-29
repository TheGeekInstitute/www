-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 09, 2024 at 03:33 PM
-- Server version: 10.6.16-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Akash`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `emp_no` int(5) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`emp_no`, `name`, `gender`, `salary`, `image`) VALUES
(1, 'Amit', 'Male', '4500.00', ''),
(2, 'Sumit', 'Male', '5600.00', ''),
(3, 'Geeta', 'Female', '2500.00', ''),
(4, 'Sita', 'Female', '7800.00', ''),
(5, 'Sonu', 'Male', '6500.00', ''),
(6, 'Babita', 'Female', '7800.00', ''),
(12, 'Shivam', 'Male', '48325.00', ''),
(14, 'asdas', 'as', '3424.00', ''),
(15, 'adas', 'Male', '1231.00', 'uploads/af06c871b4bb12fbcc59.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `empdb`
--

CREATE TABLE `empdb` (
  `id` int(2) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `empdb`
--

INSERT INTO `empdb` (`id`, `name`, `email`, `password`) VALUES
(1, 'sasdasdsa', 'Mani@gmail.com', 'sdfjkdsf');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `img_id` int(11) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`img_id`, `path`) VALUES
(1, 'uploads/9ad52fb84c8dbb438893.png'),
(2, 'uploads/26cda8de411edba5a7c1.jpg'),
(3, 'uploads/23a3be8769d1566d893b.png');

-- --------------------------------------------------------

--
-- Table structure for table `notepad`
--

CREATE TABLE `notepad` (
  `id` int(10) NOT NULL,
  `heading` varchar(300) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `email`, `username`, `password`) VALUES
(1, 'Mani Kumar', 'mani@mani.mani', 'mani', 'mani'),
(2, 'Akash', 'akash@gmail.com', 'akash', 'akash'),
(3, 'abcd', 'abcd@abcd.abcd', 'abcd', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE `voting` (
  `id` int(55) NOT NULL,
  `name` varchar(66) NOT NULL,
  `mobilenumber` int(15) NOT NULL,
  `password` varchar(55) NOT NULL,
  `address` varchar(44) NOT NULL,
  `photo` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`id`, `name`, `mobilenumber`, `password`, `address`, `photo`) VALUES
(1, 'satyam', 36543415, 'dd', 'kapashera', 'upload-images/82426 - Copy.jpg'),
(2, 'satyam33', 23423423, 'gg', 'kapashera454', 'upload-images/background harsh.jpg'),
(3, 'Dhruv', 1000000000, '2005', 'hfvjhh', 'upload-images/Screenshot 2024-03-01 112238.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`emp_no`);

--
-- Indexes for table `empdb`
--
ALTER TABLE `empdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `notepad`
--
ALTER TABLE `notepad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `voting`
--
ALTER TABLE `voting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `emp_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `empdb`
--
ALTER TABLE `empdb`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notepad`
--
ALTER TABLE `notepad`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `voting`
--
ALTER TABLE `voting`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
