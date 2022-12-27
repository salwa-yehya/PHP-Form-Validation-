-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 08:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(55) DEFAULT NULL,
  `MiddleName` varchar(55) DEFAULT NULL,
  `LastName` varchar(55) DEFAULT NULL,
  `FamilyName` varchar(55) DEFAULT NULL,
  `Email` varchar(55) DEFAULT NULL,
  `Mobile` int(14) DEFAULT NULL,
  `Password` varchar(8) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `CreateDate` date NOT NULL DEFAULT current_timestamp(),
  `LoginDate` datetime DEFAULT current_timestamp(),
  `Role` int(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `FirstName`, `MiddleName`, `LastName`, `FamilyName`, `Email`, `Mobile`, `Password`, `DateOfBirth`, `CreateDate`, `LoginDate`, `Role`) VALUES
(1, 'salwa', 'dfghj', 'yehya', 'Abuafash', 'Salwa@gmail.com', 2147483647, '0', '2003-09-26', '2022-12-26', '2022-12-26 20:00:08', 0),
(2, 'salwa', 'fghjkl', 'yehya', 'gvvhbjnkml', 'Salwa@gmail.com', 2147483647, 'Ssalwa12', '2000-06-29', '2022-12-26', '2022-12-26 20:09:33', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
