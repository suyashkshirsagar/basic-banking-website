-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2021 at 12:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `sid` int(255) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`sid`, `sender`, `receiver`, `amount`) VALUES
(2, 'suyash', 'Vaibhav', 300),
(3, 'Vaibhav', 'suyash', 600),
(5, 'rohan', 'aditya', 500),
(6, 'rohan', 'mayur', 300),
(7, 'mayur', 'rohan', 300),
(8, 'mayur', 'aditya', 200),
(9, 'aditya', 'suyash', 400),
(10, 'shubham', 'akshay', 800),
(11, 'shubham', 'shreyash', 250),
(12, 'Aniket', 'rohit', 400),
(13, 'suyash', 'mayur', 300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(3, 'suyash', 'suyashkshirsagar11@gmail.com', 900),
(7, 'rohan', 'rohan22@gmail.com', 1500),
(8, 'mayur', 'mayur13@gmail.com', 1100),
(9, 'aditya', 'aditya9881@gmail.com', 2800),
(10, 'rohit', 'rohit898@gmail.com', 6900),
(11, 'Aniket', 'aniket56@gmail.com', 3100),
(12, 'shreyash', 'shreyash566@gmail.com', 1750),
(13, 'rahul', '9882408909@gmail.com', 5200),
(14, 'shubham', 'shubham12@gmail.com', 3050),
(15, 'akshay', 'akshay2213@gmail.com', 3900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `sid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
