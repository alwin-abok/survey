-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 05:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(5) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `Username`, `Password`) VALUES
(1, 'admin', '1144');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `Survey_Id` int(255) NOT NULL,
  `Survey_Name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`Survey_Id`, `Survey_Name`) VALUES
(1, 'Cadres les plus Preferes');

-- --------------------------------------------------------

--
-- Table structure for table `survey_answers`
--

CREATE TABLE `survey_answers` (
  `Answer_Id` mediumint(9) NOT NULL,
  `User_Id` mediumint(9) NOT NULL,
  `choice` mediumint(11) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey_answers`
--

INSERT INTO `survey_answers` (`Answer_Id`, `User_Id`, `choice`, `comment`) VALUES
(3, 0, 0, ''),
(4, 0, 0, ''),
(5, 0, 0, ''),
(6, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `survey_questions`
--

CREATE TABLE `survey_questions` (
  `Question_Id` mediumint(255) NOT NULL,
  `Question_Body` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Id` mediumint(9) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `FirstName`, `LastName`, `UserName`, `Contact`, `Email`, `Password`) VALUES
(3, 'Alwin', 'Abok', 'nijji', 716856489, 'alwinsenior@outlook.com', 'SlvhN(y@KMNVfb6L'),
(4, 'Alwin', 'Abok', 'nijji', 716856489, 'alwinsenior@outlook.com', 'SlvhN(y@KMNVfb6L'),
(5, 'Ken', 'Max', 'kmax', 754890763, 'kmax@gmail.com', 'dgeyftfjgkogotot'),
(6, 'Nereah', 'Awino', 'nesh', 725363464, 'neshawino@gmail.com', 'SlvhN(y@KMNVfb6L'),
(7, 'ron', 'pal', 'ronpa', 728384959, 'ronpa@gmail.com', 'SlvhN(y@KMNVfb6L'),
(8, 'tom', 'anne', 'tome', 713548567, 'tom@gmail.com', 'SlvhN(y@KMNVfb6L'),
(9, 'ken', 'oti', 'kent', 796687584, 'ke@gmail.com', 'SlvhN(y@KMNVfb6L'),
(10, 'Alwin', 'Abok', 'admin', 716856489, 'alwinsenior@outlook.com', '1144'),
(11, 'ren', 'ham', 'reha', 716856489, 'reha@yahoo.com', 'nfhdjdririroror'),
(12, '', '', '', 0, '', 'SlvhN(y@KMNVfb6L');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`Survey_Id`);

--
-- Indexes for table `survey_answers`
--
ALTER TABLE `survey_answers`
  ADD PRIMARY KEY (`Answer_Id`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Indexes for table `survey_questions`
--
ALTER TABLE `survey_questions`
  ADD PRIMARY KEY (`Question_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `Survey_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `survey_answers`
--
ALTER TABLE `survey_answers`
  MODIFY `Answer_Id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `survey_questions`
--
ALTER TABLE `survey_questions`
  MODIFY `Question_Id` mediumint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_Id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
