-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 07:31 AM
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
-- Database: `catholic`
--

-- --------------------------------------------------------

--
-- Table structure for table `kriste`
--

CREATE TABLE `kriste` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `aditioncatholic` varchar(255) NOT NULL,
  `parishborned` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriste`
--

INSERT INTO `kriste` (`id`, `fname`, `lname`, `regno`, `departement`, `aditioncatholic`, `parishborned`, `email`) VALUES
(3, 'Alba', 'NIZEYIMANA', '19rp09689', 'ICT', 'Region', 'Rwankuba', 'alber@gmail.com'),
(6, 'Eric', 'MUSENGIMANA', '19rp07904', 'IT', 'Charismatique', 'KIZIGURO', 'eric79@gmail.com'),
(7, 'Odette', 'NYIRANSHIMIYIMANA', '19rp05842', 'ICT', 'Region', 'GIKONGORO', 'odette@gmail.com'),
(8, 'Rodriguese', 'NKAKA', '19rp07865', 'mct', 'Region', 'NYAMATA', 'rodrig@gmil.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `role`, `password`) VALUES
('rugamba', '', '123@abc'),
('nkaka', '', '1234@abc'),
('fred', 'president', '123'),
('me', 'secretary', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriste`
--
ALTER TABLE `kriste`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kriste`
--
ALTER TABLE `kriste`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
