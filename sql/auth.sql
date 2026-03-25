-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2026 at 01:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth`

--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Mayank Pipaliya', 'pipaliyamayank908@gmail.com', '09737237543', '$2y$10$VvqaQQgIfpwW3WwtEzRR8eb4LjAS3JDw/SAIjRg6P3An3fUpP1936'),
(2, 'vvk', 'vvk007@gmail.com', '996569896', '$2y$10$cjSpRwSFIvP.m2txmsib0.W8F6X3z/YHIQyP3UEMCeTnIrMGNGFVW');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `gender` tinyint(2) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `phone`, `city`, `salary`, `gender`, `user_id`, `code`) VALUES
(1, 'Mayank Pipaliya', '09737237543', 'Surat', '50000', 0, '1', '93069'),
(2, 'Jay Pipaliya', '9909545989', 'Vadodara', '500000', 0, '1', '23379'),
(3, 'Virat Kohli', '9737237543', 'Rajkot', '5000000000', 0, '1', '81542'),
(4, 'Priya', '77737237543', 'Surat', '150000', 1, '1', '99051'),
(5, 'Vanshika ', '9737237543', 'Vadodara', '15000', 1, '1', '38801'),
(6, 'kaushal k', '097237543', 'Rajkot', '5000', 0, '2', '13498');

-- --------------------------------------------------------

--
-- Table structure for table `std`
--

CREATE TABLE `std` (
  `id` int(255) NOT NULL,
  `name` varchar(25) NOT NULL,
  `course` varchar(10) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `languages` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `std`
--

INSERT INTO `std` (`id`, `name`, `course`, `contact`, `email`, `password`, `dob`, `gender`, `languages`) VALUES
(1, 'Mayank Pipaliya', 'PHP', '9737237543', 'pipaliyamayank908@gmail.com', '1008', '0000-00-00', 'Male', 'English,Hindi,Gujarati'),
(17, 'Jay Pipaliya', 'C++', '9889695989', 'pipaliyajay908@gmail.com', 'pipaliya', '2026-03-26', 'Male', 'English,Hindi,Gujarati'),
(18, 'Mayank Pipaliya', 'PHP', '9737237543', 'pipaliyamayank908@gmail.com', '1008', '2026-03-05', 'Female', 'English'),
(19, 'PWD', 'Java', '9737237543', 'PWD908@gmail.com', '1111', '2026-03-17', 'Male', 'English'),
(20, 'Virat Kohli', 'Java', '9737237543', 'VK@gmail.com', '1234', '2026-03-30', 'Male', 'English,Hindi,Gujarati');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std`
--
ALTER TABLE `std`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `std`
--
ALTER TABLE `std`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
