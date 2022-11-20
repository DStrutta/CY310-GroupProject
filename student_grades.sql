-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 09:57 PM
-- Server version: 8.0.31
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_grades`
--

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `SID` varchar(8) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `math_letter` varchar(1) NOT NULL,
  `math_perc` int NOT NULL,
  `english_letter` varchar(1) NOT NULL,
  `english_perc` int NOT NULL,
  `history_letter` varchar(1) NOT NULL,
  `history_perc` int NOT NULL,
  `science_letter` varchar(1) NOT NULL,
  `science_perc` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`SID`, `Name`, `math_letter`, `math_perc`, `english_letter`, `english_perc`, `history_letter`, `history_perc`, `science_letter`, `science_perc`) VALUES
('S0201938', 'Adam Green', 'A', 94, 'A', 97, 'B', 89, 'A', 98),
('S0190328', 'Brock Green', 'B', 85, 'A', 96, 'C', 76, 'B', 81),
('S0199482', 'Brian Teller', 'A', 96, 'B', 88, 'B', 89, 'A', 99),
('S0201984', 'Ashley Stiedinger', 'A', 95, 'A', 98, 'A', 98, 'A', 93),
('S0204183', 'Tanya Moore', 'B', 85, 'B', 84, 'C', 78, 'A', 91);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(20) NOT NULL,
  `SID` varchar(8) NOT NULL,
  `class` varchar(2) NOT NULL,
  `GPA` decimal(4,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `SID`, `class`, `GPA`) VALUES
('Adam Right', 'S0201938', 'Jr', '3.980'),
('Brock Green', 'S0190328', 'Sr', '4.000'),
('Brian Teller', 'S0199482', 'Sr', '2.790'),
('Ashley Stiedinger', 'S0201984', 'Jr', '4.000'),
('Tanya Moore', 'S0204183', 'Fr', '3.780');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `s_username` varchar(8) NOT NULL,
  `s_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`s_username`, `s_password`) VALUES
('S0201938', 'AdamRight123'),
('S0190328', 'BrockGreen123'),
('S0199482', 'BrianTeller123'),
('S0201984', 'AshleyStiedinger123'),
('S0204183', 'TanyaMoore123');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `name` varchar(20) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `TID` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`name`, `subject`, `TID`) VALUES
('Vanessa Hughes', 'history', 'T0199732'),
('Debbie Miller', 'english', 'T0204914'),
('Steve Locke', 'math', 'T0195783'),
('Lisa Franklin', 'science', 'T0201893');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

CREATE TABLE `teacher_login` (
  `t_username` varchar(8) NOT NULL,
  `t_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `teacher_login`
--

INSERT INTO `teacher_login` (`t_username`, `t_password`) VALUES
('T0199732', 'VanessaHughes123'),
('T0204914', 'DebbieMiller123'),
('T0195783', 'SteveLock123'),
('T0201893', 'LisaFranklin123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
