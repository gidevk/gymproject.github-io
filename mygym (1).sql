-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 01:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mygym`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `age` int(2) NOT NULL,
  `sex` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `phone`, `email`, `age`, `sex`) VALUES
(1000, 'indradev kumar', '9123456789', 'id@gmail.com', 22, 'male'),
(1001, 'indradev kumar', '9123456789', 'id1@gmail.com', 22, 'male'),
(1002, 'indradev kumar', '+919507423', 'indradevjee998@gmail.com', 32, ''),
(1005, 'indradev kuma', '9507423209', 'indradevjee9982@gmail.com', 43, 'volvo'),
(1006, '', '', '', 0, 'Male'),
(1024, 'raju shriwastav', '9348284937', 'raju@gmail.com', 21, 'Male'),
(1028, 'kumar', '938294839', 'kumar@gmail.com', 34, 'Male'),
(1036, 'indradev kumar3', '+919507423', 'indradevjee9986@gmail.com', 54, 'Male'),
(1040, 'indradev kumar543', '7423209', 'indradevjee99833@gmail.com', 234, 'Male'),
(1041, 'hello', '234532', 'hell@gmail.com', 34, 'Male'),
(1042, 'check', 'e567897654', 'check@gmail.com', 43, 'Male'),
(1043, 'hi', '345654324', 'hi@gmail.com', 34, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1044;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
