-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 04:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobnexus`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_holders`
--

CREATE TABLE `card_holders` (
  `card_number` varchar(16) DEFAULT NULL,
  `card_holder_name` varchar(255) DEFAULT NULL,
  `expire_date` varchar(5) DEFAULT NULL,
  `cvv_number` varchar(4) DEFAULT NULL,
  `payment_option` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card_holders`
--

INSERT INTO `card_holders` (`card_number`, `card_holder_name`, `expire_date`, `cvv_number`, `payment_option`) VALUES
('', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Comments` varchar(50) NOT NULL,
  `attachment` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `Comments`, `attachment`, `time`) VALUES
(8, 'sangavi', 'nithukuga15@gmail.com', 'hiii', '', '2024-10-07 10:39:16'),
(9, 'sanjeevan', 'nithukuga15@gmail.com', 'sdsad', '', '2024-10-07 12:11:52'),
(10, 'sanjeevan', 'nithukuga15@gmail.com', 'sdsad', '360_F_363674581_mZm3cEI2YOoQ2J7Xu2HltX47QjrP5lBi.jpg', '2024-10-07 12:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `company`, `location`, `description`, `category`, `salary`) VALUES
(4, 'software engineering', 'job nexus', 'srilanka', '', 'SE', '1000000'),
(5, 'electical engineer', 'job nexus', 'canada', '', 'EE', '200000');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `SeekerId` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Education` varchar(100) DEFAULT NULL,
  `Skills` varchar(255) DEFAULT NULL,
  `ContactNo` varchar(15) NOT NULL,
  `Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`SeekerId`, `FirstName`, `LastName`, `email`, `password`, `DateOfBirth`, `Education`, `Skills`, `ContactNo`, `Address`) VALUES
(1, 'tftyf', 'ahamed', 'amri@gmail.com', '123', NULL, NULL, NULL, '0751245789', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `professional_summary` text DEFAULT NULL,
  `work_experience` text DEFAULT NULL,
  `education` text DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `certifications` text DEFAULT NULL,
  `portfolio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `firstname`, `lastname`, `place`, `age`, `phonenumber`, `professional_summary`, `work_experience`, `education`, `skills`, `certifications`, `portfolio`) VALUES
(13, 'Muralitharan', 'Sanjeevan', 'jaffna', 22, '07712345', 'student', 'bla bla', 'sliit', 'bla bla', 'bla bla', 'bla bla'),
(23, 'sdsd', 'sdsd', 'sd', -2, 'sdas', 'sdsa', 'sdsd', 'sds', 'sdas', 'sdas', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`SeekerId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `SeekerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
