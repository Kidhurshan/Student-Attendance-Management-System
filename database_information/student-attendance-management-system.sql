-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2025 at 11:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student-attendance-management-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocation_1`
--

CREATE TABLE `allocation_1` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_1`
--

INSERT INTO `allocation_1` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/010'),
(7, '2020/E/012'),
(8, '2020/E/013'),
(9, '2020/E/014'),
(10, '2020/E/015'),
(11, '2020/E/016'),
(12, '2020/E/017'),
(13, '2020/E/019'),
(14, '2020/E/020'),
(15, '2020/E/022'),
(16, '2020/E/024'),
(17, '2020/E/025'),
(18, '2020/E/026'),
(19, '2020/E/027'),
(20, '2020/E/028'),
(21, '2020/E/029'),
(22, '2020/E/030'),
(23, '2020/E/031'),
(24, '2020/E/032'),
(25, '2020/E/033'),
(26, '2020/E/034'),
(27, '2020/E/035'),
(28, '2020/E/036'),
(29, '2020/E/037'),
(30, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_2`
--

CREATE TABLE `allocation_2` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_2`
--

INSERT INTO `allocation_2` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/010'),
(7, '2020/E/012'),
(8, '2020/E/013'),
(9, '2020/E/014'),
(10, '2020/E/015'),
(11, '2020/E/016'),
(12, '2020/E/017'),
(13, '2020/E/019'),
(14, '2020/E/020'),
(15, '2020/E/022'),
(16, '2020/E/024'),
(17, '2020/E/025'),
(18, '2020/E/026'),
(19, '2020/E/027'),
(20, '2020/E/028'),
(21, '2020/E/029'),
(22, '2020/E/030'),
(23, '2020/E/031'),
(24, '2020/E/032'),
(25, '2020/E/033'),
(26, '2020/E/034'),
(27, '2020/E/035'),
(28, '2020/E/036'),
(29, '2020/E/037'),
(30, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_3`
--

CREATE TABLE `allocation_3` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_3`
--

INSERT INTO `allocation_3` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/010'),
(7, '2020/E/012'),
(8, '2020/E/013'),
(9, '2020/E/014'),
(10, '2020/E/015'),
(11, '2020/E/016'),
(12, '2020/E/017'),
(13, '2020/E/019'),
(14, '2020/E/020'),
(15, '2020/E/022'),
(16, '2020/E/024'),
(17, '2020/E/025'),
(18, '2020/E/026'),
(19, '2020/E/027'),
(20, '2020/E/028'),
(21, '2020/E/029'),
(22, '2020/E/030'),
(23, '2020/E/031'),
(24, '2020/E/032'),
(25, '2020/E/033'),
(26, '2020/E/034'),
(27, '2020/E/035'),
(28, '2020/E/036'),
(29, '2020/E/037'),
(30, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_7`
--

CREATE TABLE `allocation_7` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_7`
--

INSERT INTO `allocation_7` (`ID`, `RegNo`) VALUES
(1, '2022/E/001'),
(2, '2022/E/002'),
(3, '2022/E/003'),
(4, '2022/E/004'),
(5, '2022/E/005'),
(6, '2022/E/006'),
(7, '2022/E/007'),
(8, '2022/E/008'),
(9, '2022/E/009'),
(10, '2022/E/010'),
(11, '2022/E/011'),
(12, '2022/E/012'),
(13, '2022/E/013'),
(14, '2022/E/014'),
(15, '2022/E/015'),
(16, '2022/E/016'),
(17, '2022/E/017'),
(18, '2022/E/018'),
(19, '2022/E/019'),
(20, '2022/E/020'),
(21, '2022/E/021'),
(22, '2022/E/022'),
(23, '2022/E/023'),
(24, '2022/E/024'),
(25, '2022/E/025'),
(26, '2022/E/026'),
(27, '2022/E/027'),
(28, '2022/E/028'),
(29, '2022/E/029'),
(30, '2022/E/030');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_8`
--

CREATE TABLE `allocation_8` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_8`
--

INSERT INTO `allocation_8` (`ID`, `RegNo`) VALUES
(1, '2021/E/001'),
(2, '2021/E/002'),
(3, '2021/E/003'),
(4, '2021/E/004'),
(5, '2021/E/005'),
(6, '2021/E/006'),
(7, '2021/E/007'),
(8, '2021/E/008'),
(9, '2021/E/009'),
(10, '2021/E/010'),
(11, '2021/E/011'),
(12, '2021/E/012'),
(13, '2021/E/013'),
(14, '2021/E/014'),
(15, '2021/E/015'),
(16, '2021/E/016'),
(17, '2021/E/017'),
(18, '2021/E/018'),
(19, '2021/E/019'),
(20, '2021/E/020'),
(21, '2021/E/021'),
(22, '2021/E/022'),
(23, '2021/E/023'),
(24, '2021/E/024'),
(25, '2021/E/025'),
(26, '2021/E/026'),
(27, '2021/E/027'),
(28, '2021/E/028'),
(29, '2021/E/029'),
(30, '2021/E/030');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_9`
--

CREATE TABLE `allocation_9` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_9`
--

INSERT INTO `allocation_9` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/010'),
(7, '2020/E/012'),
(8, '2020/E/013'),
(9, '2020/E/014'),
(10, '2020/E/015'),
(11, '2020/E/016'),
(12, '2020/E/017'),
(13, '2020/E/019'),
(14, '2020/E/020'),
(15, '2020/E/022'),
(16, '2020/E/024'),
(17, '2020/E/025'),
(18, '2020/E/026'),
(19, '2020/E/027'),
(20, '2020/E/028'),
(21, '2020/E/029'),
(22, '2020/E/030'),
(23, '2020/E/031'),
(24, '2020/E/032'),
(25, '2020/E/033'),
(26, '2020/E/034'),
(27, '2020/E/035'),
(28, '2020/E/036'),
(29, '2020/E/037'),
(30, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_10`
--

CREATE TABLE `allocation_10` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_10`
--

INSERT INTO `allocation_10` (`ID`, `RegNo`) VALUES
(1, '2021/E/001'),
(2, '2021/E/002'),
(3, '2021/E/003'),
(4, '2021/E/004'),
(5, '2021/E/005'),
(6, '2021/E/006'),
(7, '2021/E/007'),
(8, '2021/E/008'),
(9, '2021/E/009'),
(10, '2021/E/010'),
(11, '2021/E/011'),
(12, '2021/E/012'),
(13, '2021/E/013'),
(14, '2021/E/014'),
(15, '2021/E/015'),
(16, '2021/E/016'),
(17, '2021/E/017'),
(18, '2021/E/018'),
(19, '2021/E/019'),
(20, '2021/E/020'),
(21, '2021/E/021'),
(22, '2021/E/022'),
(23, '2021/E/023'),
(24, '2021/E/024'),
(25, '2021/E/025'),
(26, '2021/E/026'),
(27, '2021/E/027'),
(28, '2021/E/028'),
(29, '2021/E/029'),
(30, '2021/E/030');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_11`
--

CREATE TABLE `allocation_11` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_11`
--

INSERT INTO `allocation_11` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/010'),
(7, '2020/E/012'),
(8, '2020/E/013'),
(9, '2020/E/014'),
(10, '2020/E/015'),
(11, '2020/E/016'),
(12, '2020/E/017'),
(13, '2020/E/019'),
(14, '2020/E/020'),
(15, '2020/E/022'),
(16, '2020/E/024'),
(17, '2020/E/025'),
(18, '2020/E/026'),
(19, '2020/E/027'),
(20, '2020/E/028'),
(21, '2020/E/029'),
(22, '2020/E/030'),
(23, '2020/E/031'),
(24, '2020/E/032'),
(25, '2020/E/033'),
(26, '2020/E/034'),
(27, '2020/E/035'),
(28, '2020/E/036'),
(29, '2020/E/037'),
(30, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_12`
--

CREATE TABLE `allocation_12` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_12`
--

INSERT INTO `allocation_12` (`ID`, `RegNo`) VALUES
(1, '2022/E/001'),
(2, '2022/E/002'),
(3, '2022/E/003'),
(4, '2022/E/004'),
(5, '2022/E/005'),
(6, '2022/E/006'),
(7, '2022/E/007'),
(8, '2022/E/008'),
(9, '2022/E/009'),
(10, '2022/E/010'),
(11, '2022/E/011'),
(12, '2022/E/012'),
(13, '2022/E/013'),
(14, '2022/E/014'),
(15, '2022/E/015'),
(16, '2022/E/016'),
(17, '2022/E/017'),
(18, '2022/E/018'),
(19, '2022/E/019'),
(20, '2022/E/020'),
(21, '2022/E/021'),
(22, '2022/E/022'),
(23, '2022/E/023'),
(24, '2022/E/024'),
(25, '2022/E/025'),
(26, '2022/E/026'),
(27, '2022/E/027'),
(28, '2022/E/028'),
(29, '2022/E/029'),
(30, '2022/E/030');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_13`
--

CREATE TABLE `allocation_13` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_13`
--

INSERT INTO `allocation_13` (`ID`, `RegNo`) VALUES
(1, '2021/E/001'),
(2, '2021/E/002'),
(3, '2021/E/003'),
(4, '2021/E/004'),
(5, '2021/E/005'),
(6, '2021/E/006'),
(7, '2021/E/007'),
(8, '2021/E/008'),
(9, '2021/E/009'),
(10, '2021/E/010'),
(11, '2021/E/011'),
(12, '2021/E/012'),
(13, '2021/E/013'),
(14, '2021/E/014'),
(15, '2021/E/015'),
(16, '2021/E/016'),
(17, '2021/E/017'),
(18, '2021/E/018'),
(19, '2021/E/019'),
(20, '2021/E/020'),
(21, '2021/E/021'),
(22, '2021/E/022'),
(23, '2021/E/023'),
(24, '2021/E/024'),
(25, '2021/E/025'),
(26, '2021/E/026'),
(27, '2021/E/027'),
(28, '2021/E/028'),
(29, '2021/E/029'),
(30, '2021/E/030');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_14`
--

CREATE TABLE `allocation_14` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_14`
--

INSERT INTO `allocation_14` (`ID`, `RegNo`) VALUES
(1, '2022/E/001'),
(2, '2022/E/002'),
(3, '2022/E/003'),
(4, '2022/E/004'),
(5, '2022/E/005'),
(6, '2022/E/006'),
(7, '2022/E/007'),
(8, '2022/E/008'),
(9, '2022/E/009'),
(10, '2022/E/010'),
(11, '2022/E/011'),
(12, '2022/E/012'),
(13, '2022/E/013'),
(14, '2022/E/014'),
(15, '2022/E/015'),
(16, '2022/E/016'),
(17, '2022/E/017'),
(18, '2022/E/018'),
(19, '2022/E/019'),
(20, '2022/E/020'),
(21, '2022/E/021'),
(22, '2022/E/022'),
(23, '2022/E/023'),
(24, '2022/E/024'),
(25, '2022/E/025'),
(26, '2022/E/026'),
(27, '2022/E/027'),
(28, '2022/E/028'),
(29, '2022/E/029'),
(30, '2022/E/030');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_15`
--

CREATE TABLE `allocation_15` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_15`
--

INSERT INTO `allocation_15` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/010'),
(7, '2020/E/012'),
(8, '2020/E/013'),
(9, '2020/E/014'),
(10, '2020/E/015'),
(11, '2020/E/016'),
(12, '2020/E/017'),
(13, '2020/E/019'),
(14, '2020/E/020'),
(15, '2020/E/022'),
(16, '2020/E/024'),
(17, '2020/E/025'),
(18, '2020/E/026'),
(19, '2020/E/027'),
(20, '2020/E/028'),
(21, '2020/E/029'),
(22, '2020/E/030'),
(23, '2020/E/031'),
(24, '2020/E/032'),
(25, '2020/E/033'),
(26, '2020/E/034'),
(27, '2020/E/035'),
(28, '2020/E/036'),
(29, '2020/E/037'),
(30, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_16`
--

CREATE TABLE `allocation_16` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_16`
--

INSERT INTO `allocation_16` (`ID`, `RegNo`) VALUES
(1, '2022/E/001'),
(2, '2022/E/002'),
(3, '2022/E/003'),
(4, '2022/E/004'),
(5, '2022/E/005'),
(6, '2022/E/006'),
(7, '2022/E/007'),
(8, '2022/E/008'),
(9, '2022/E/009'),
(10, '2022/E/010'),
(11, '2022/E/011'),
(12, '2022/E/012'),
(13, '2022/E/013'),
(14, '2022/E/014'),
(15, '2022/E/015'),
(16, '2022/E/016'),
(17, '2022/E/017'),
(18, '2022/E/018'),
(19, '2022/E/019'),
(20, '2022/E/020'),
(21, '2022/E/021'),
(22, '2022/E/022'),
(23, '2022/E/023'),
(24, '2022/E/024'),
(25, '2022/E/025'),
(26, '2022/E/026'),
(27, '2022/E/027'),
(28, '2022/E/028'),
(29, '2022/E/029'),
(30, '2022/E/030');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_17`
--

CREATE TABLE `allocation_17` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_17`
--

INSERT INTO `allocation_17` (`ID`, `RegNo`) VALUES
(1, '2021/E/001'),
(2, '2021/E/002'),
(3, '2021/E/003'),
(4, '2021/E/004'),
(5, '2021/E/005'),
(6, '2021/E/006'),
(7, '2021/E/007'),
(8, '2021/E/008'),
(9, '2021/E/009'),
(10, '2021/E/010'),
(11, '2021/E/011'),
(12, '2021/E/012'),
(13, '2021/E/013'),
(14, '2021/E/014'),
(15, '2021/E/015'),
(16, '2021/E/016'),
(17, '2021/E/017'),
(18, '2021/E/018'),
(19, '2021/E/019'),
(20, '2021/E/020'),
(21, '2021/E/021'),
(22, '2021/E/022'),
(23, '2021/E/023'),
(24, '2021/E/024'),
(25, '2021/E/025'),
(26, '2021/E/026'),
(27, '2021/E/027'),
(28, '2021/E/028'),
(29, '2021/E/029'),
(30, '2021/E/030');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_18`
--

CREATE TABLE `allocation_18` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_18`
--

INSERT INTO `allocation_18` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/010'),
(7, '2020/E/012'),
(8, '2020/E/013'),
(9, '2020/E/014'),
(10, '2020/E/015'),
(11, '2020/E/016'),
(12, '2020/E/017'),
(13, '2020/E/019'),
(14, '2020/E/020'),
(15, '2020/E/022'),
(16, '2020/E/024'),
(17, '2020/E/025'),
(18, '2020/E/026'),
(19, '2020/E/027'),
(20, '2020/E/028'),
(21, '2020/E/029'),
(22, '2020/E/030'),
(23, '2020/E/031'),
(24, '2020/E/032'),
(25, '2020/E/033'),
(26, '2020/E/034'),
(27, '2020/E/035'),
(28, '2020/E/036'),
(29, '2020/E/037'),
(30, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_19`
--

CREATE TABLE `allocation_19` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_19`
--

INSERT INTO `allocation_19` (`ID`, `RegNo`) VALUES
(1, '2022/E/001'),
(2, '2022/E/002'),
(3, '2022/E/003'),
(4, '2022/E/004'),
(5, '2022/E/005'),
(6, '2022/E/006'),
(7, '2022/E/007'),
(8, '2022/E/008'),
(9, '2022/E/009'),
(10, '2022/E/010'),
(11, '2022/E/011'),
(12, '2022/E/012'),
(13, '2022/E/013'),
(14, '2022/E/014'),
(15, '2022/E/015'),
(16, '2022/E/016'),
(17, '2022/E/017'),
(18, '2022/E/018'),
(19, '2022/E/019'),
(20, '2022/E/020'),
(21, '2022/E/021'),
(22, '2022/E/022'),
(23, '2022/E/023'),
(24, '2022/E/024'),
(25, '2022/E/025'),
(26, '2022/E/026'),
(27, '2022/E/027'),
(28, '2022/E/028'),
(29, '2022/E/029'),
(30, '2022/E/030');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_20`
--

CREATE TABLE `allocation_20` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_20`
--

INSERT INTO `allocation_20` (`ID`, `RegNo`) VALUES
(1, '2021/E/001'),
(2, '2021/E/002'),
(3, '2021/E/003'),
(4, '2021/E/004'),
(5, '2021/E/005'),
(6, '2021/E/006'),
(7, '2021/E/007'),
(8, '2021/E/008'),
(9, '2021/E/009'),
(10, '2021/E/010'),
(11, '2021/E/011'),
(12, '2021/E/012'),
(13, '2021/E/013'),
(14, '2021/E/014'),
(15, '2021/E/015'),
(16, '2021/E/016'),
(17, '2021/E/017'),
(18, '2021/E/018'),
(19, '2021/E/019'),
(20, '2021/E/020'),
(21, '2021/E/021'),
(22, '2021/E/022'),
(23, '2021/E/023'),
(24, '2021/E/024'),
(25, '2021/E/025'),
(26, '2021/E/026'),
(27, '2021/E/027'),
(28, '2021/E/028'),
(29, '2021/E/029'),
(30, '2021/E/030');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_21`
--

CREATE TABLE `allocation_21` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_21`
--

INSERT INTO `allocation_21` (`ID`, `RegNo`) VALUES
(1, '2021/E/001'),
(2, '2021/E/002'),
(3, '2021/E/003'),
(4, '2021/E/004'),
(5, '2021/E/005'),
(6, '2021/E/006'),
(7, '2021/E/007'),
(8, '2021/E/008'),
(9, '2021/E/009'),
(10, '2021/E/010'),
(11, '2021/E/011'),
(12, '2021/E/012'),
(13, '2021/E/013'),
(14, '2021/E/014'),
(15, '2021/E/015'),
(16, '2021/E/016'),
(17, '2021/E/017'),
(18, '2021/E/018'),
(19, '2021/E/019'),
(20, '2021/E/020'),
(21, '2021/E/021'),
(22, '2021/E/022'),
(23, '2021/E/023'),
(24, '2021/E/024'),
(25, '2021/E/025'),
(26, '2021/E/026'),
(27, '2021/E/027'),
(28, '2021/E/028'),
(29, '2021/E/029'),
(30, '2021/E/030');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_22`
--

CREATE TABLE `allocation_22` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_22`
--

INSERT INTO `allocation_22` (`ID`, `RegNo`) VALUES
(1, '2022/E/001'),
(2, '2022/E/002'),
(3, '2022/E/003'),
(4, '2022/E/004'),
(5, '2022/E/005'),
(6, '2022/E/006'),
(7, '2022/E/007'),
(8, '2022/E/008'),
(9, '2022/E/009'),
(10, '2022/E/010'),
(11, '2022/E/011'),
(12, '2022/E/012'),
(13, '2022/E/013'),
(14, '2022/E/014'),
(15, '2022/E/015'),
(16, '2022/E/016'),
(17, '2022/E/017'),
(18, '2022/E/018'),
(19, '2022/E/019'),
(20, '2022/E/020'),
(21, '2022/E/021'),
(22, '2022/E/022'),
(23, '2022/E/023'),
(24, '2022/E/024'),
(25, '2022/E/025'),
(26, '2022/E/026'),
(27, '2022/E/027'),
(28, '2022/E/028'),
(29, '2022/E/029'),
(30, '2022/E/030');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_23`
--

CREATE TABLE `allocation_23` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_23`
--

INSERT INTO `allocation_23` (`ID`, `RegNo`) VALUES
(1, '2021/E/001'),
(2, '2021/E/002'),
(3, '2021/E/003'),
(4, '2021/E/004'),
(5, '2021/E/005'),
(6, '2021/E/006'),
(7, '2021/E/007'),
(8, '2021/E/008'),
(9, '2021/E/009'),
(10, '2021/E/010'),
(11, '2021/E/011'),
(12, '2021/E/012'),
(13, '2021/E/013'),
(14, '2021/E/014'),
(15, '2021/E/015'),
(16, '2021/E/016'),
(17, '2021/E/017'),
(18, '2021/E/018'),
(19, '2021/E/019'),
(20, '2021/E/020'),
(21, '2021/E/021'),
(22, '2021/E/022'),
(23, '2021/E/023'),
(24, '2021/E/024'),
(25, '2021/E/025'),
(26, '2021/E/026'),
(27, '2021/E/027'),
(28, '2021/E/028'),
(29, '2021/E/029'),
(30, '2021/E/030');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_24`
--

CREATE TABLE `allocation_24` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_24`
--

INSERT INTO `allocation_24` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/010'),
(7, '2020/E/012'),
(8, '2020/E/013'),
(9, '2020/E/014'),
(10, '2020/E/015'),
(11, '2020/E/016'),
(12, '2020/E/017'),
(13, '2020/E/019'),
(14, '2020/E/020'),
(15, '2020/E/022'),
(16, '2020/E/024'),
(17, '2020/E/025'),
(18, '2020/E/026'),
(19, '2020/E/027'),
(20, '2020/E/028'),
(21, '2020/E/029'),
(22, '2020/E/030'),
(23, '2020/E/031'),
(24, '2020/E/032'),
(25, '2020/E/033'),
(26, '2020/E/034'),
(27, '2020/E/035'),
(28, '2020/E/036'),
(29, '2020/E/037'),
(30, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_25`
--

CREATE TABLE `allocation_25` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL,
  `Column_1` varchar(255) DEFAULT NULL,
  `Column_2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_25`
--

INSERT INTO `allocation_25` (`ID`, `RegNo`, `Column_1`, `Column_2`) VALUES
(1, '2022/E/001', 'Present', 'Absent'),
(2, '2022/E/002', 'Present', 'Present'),
(3, '2022/E/003', 'Absent', 'Absent'),
(4, '2022/E/004', 'Present', 'Absent'),
(5, '2022/E/005', 'Present', 'Present'),
(6, '2022/E/006', 'Present', 'Absent'),
(7, '2022/E/007', 'Present', 'Absent'),
(8, '2022/E/008', 'Present', 'Present'),
(9, '2022/E/009', 'Present', 'Absent'),
(10, '2022/E/010', 'Present', 'Absent'),
(11, '2022/E/011', 'Present', 'Absent'),
(12, '2022/E/012', 'Present', 'Present'),
(13, '2022/E/013', 'Absent', 'Absent'),
(14, '2022/E/014', 'Present', 'Present'),
(15, '2022/E/015', 'Present', 'Present'),
(16, '2022/E/016', 'Present', 'Present'),
(17, '2022/E/017', 'Present', 'Absent'),
(18, '2022/E/018', 'Present', 'Absent'),
(19, '2022/E/019', 'Present', 'Absent'),
(20, '2022/E/020', 'Present', 'Absent'),
(21, '2022/E/021', 'Absent', 'Present'),
(22, '2022/E/022', 'Present', 'Absent'),
(23, '2022/E/023', 'Present', 'Present'),
(24, '2022/E/024', 'Absent', 'Absent'),
(25, '2022/E/025', 'Present', 'Present'),
(26, '2022/E/026', 'Present', 'Present'),
(27, '2022/E/027', 'Absent', 'Absent'),
(28, '2022/E/028', 'Present', 'Present'),
(29, '2022/E/029', 'Present', 'Present'),
(30, '2022/E/030', 'Present', 'Absent');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_26`
--

CREATE TABLE `allocation_26` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL,
  `Column_6` varchar(255) DEFAULT NULL,
  `Column_4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_26`
--

INSERT INTO `allocation_26` (`ID`, `RegNo`, `Column_6`, `Column_4`) VALUES
(1, '2021/E/001', 'Present', 'Present'),
(2, '2021/E/002', 'Absent', 'Absent'),
(3, '2021/E/003', 'Present', 'Present'),
(4, '2021/E/004', 'Present', 'Present'),
(5, '2021/E/005', 'Present', 'Present'),
(6, '2021/E/006', 'Present', 'Present'),
(7, '2021/E/007', 'Present', 'Present'),
(8, '2021/E/008', 'Present', 'Absent'),
(9, '2021/E/009', 'Present', 'Present'),
(10, '2021/E/010', 'Absent', 'Present'),
(11, '2021/E/011', 'Present', 'Present'),
(12, '2021/E/012', 'Present', 'Absent'),
(13, '2021/E/013', 'Present', 'Present'),
(14, '2021/E/014', 'Present', 'Present'),
(15, '2021/E/015', 'Present', 'Present'),
(16, '2021/E/016', 'Present', 'Absent'),
(17, '2021/E/017', 'Absent', 'Present'),
(18, '2021/E/018', 'Present', 'Present'),
(19, '2021/E/019', 'Present', 'Present'),
(20, '2021/E/020', 'Present', 'Absent'),
(21, '2021/E/021', 'Present', 'Present'),
(22, '2021/E/022', 'Present', 'Present'),
(23, '2021/E/023', 'Present', 'Absent'),
(24, '2021/E/024', 'Present', 'Present'),
(25, '2021/E/025', 'Present', 'Absent'),
(26, '2021/E/026', 'Absent', 'Present'),
(27, '2021/E/027', 'Present', 'Present'),
(28, '2021/E/028', 'Present', 'Present'),
(29, '2021/E/029', 'Present', 'Present'),
(30, '2021/E/030', 'Present', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_27`
--

CREATE TABLE `allocation_27` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL,
  `Column_10` varchar(255) DEFAULT NULL,
  `Column_9` varchar(255) DEFAULT NULL,
  `Column_11` varchar(255) DEFAULT NULL,
  `Column_7` varchar(255) DEFAULT NULL,
  `Column_8` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_27`
--

INSERT INTO `allocation_27` (`ID`, `RegNo`, `Column_10`, `Column_9`, `Column_11`, `Column_7`, `Column_8`) VALUES
(1, '2020/E/005', 'Absent', 'Present', 'Absent', 'Absent', 'Present'),
(2, '2020/E/006', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(3, '2020/E/007', 'Present', 'Absent', 'Present', 'Present', 'Absent'),
(4, '2020/E/008', 'Present', 'Absent', 'Present', 'Absent', 'Present'),
(5, '2020/E/009', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(6, '2020/E/010', 'Present', 'Absent', 'Present', 'Present', NULL),
(7, '2020/E/012', 'Present', 'Present', 'Present', 'Present', 'Absent'),
(8, '2020/E/013', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(9, '2020/E/014', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(10, '2020/E/015', 'Absent', 'Present', 'Present', 'Present', 'Present'),
(11, '2020/E/016', 'Present', 'Absent', 'Absent', 'Present', 'Absent'),
(12, '2020/E/017', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(13, '2020/E/019', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(14, '2020/E/020', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(15, '2020/E/022', 'Present', 'Absent', 'Absent', 'Absent', 'Absent'),
(16, '2020/E/024', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(17, '2020/E/025', 'Present', 'Present', 'Present', 'Present', 'Absent'),
(18, '2020/E/026', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(19, '2020/E/027', 'Present', 'Present', 'Present', 'Present', 'Present'),
(20, '2020/E/028', 'Absent', 'Absent', 'Present', 'Present', 'Absent'),
(21, '2020/E/029', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(22, '2020/E/030', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(23, '2020/E/031', 'Present', 'Present', 'Present', 'Present', 'Absent'),
(24, '2020/E/032', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(25, '2020/E/033', 'Present', 'Present', 'Present', 'Present', 'Absent'),
(26, '2020/E/034', 'Present', 'Absent', 'Absent', 'Present', 'Present'),
(27, '2020/E/035', 'Absent', 'Present', 'Present', 'Present', 'Present'),
(28, '2020/E/036', 'Present', 'Absent', 'Present', 'Present', 'Absent'),
(29, '2020/E/037', 'Present', 'Present', 'Present', 'Present', 'Present'),
(30, '2020/E/038', 'Present', 'Absent', 'Present', 'Present', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_28`
--

CREATE TABLE `allocation_28` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL,
  `Column_52` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_28`
--

INSERT INTO `allocation_28` (`ID`, `RegNo`, `Column_52`) VALUES
(1, '2021/E/001', 'Present'),
(2, '2021/E/002', 'Present'),
(3, '2021/E/003', 'Present'),
(4, '2021/E/004', 'Present'),
(5, '2021/E/005', 'Present'),
(6, '2021/E/006', 'Present'),
(7, '2021/E/007', 'Present'),
(8, '2021/E/008', 'Present'),
(9, '2021/E/009', 'Present'),
(10, '2021/E/010', 'Present'),
(11, '2021/E/011', 'Present'),
(12, '2021/E/012', 'Present'),
(13, '2021/E/013', 'Present'),
(14, '2021/E/014', 'Present'),
(15, '2021/E/015', 'Present'),
(16, '2021/E/016', 'Present'),
(17, '2021/E/017', 'Present'),
(18, '2021/E/018', 'Present'),
(19, '2021/E/019', 'Present'),
(20, '2021/E/020', 'Present'),
(21, '2021/E/021', 'Present'),
(22, '2021/E/022', 'Present'),
(23, '2021/E/023', 'Present'),
(24, '2021/E/024', 'Present'),
(25, '2021/E/025', 'Present'),
(26, '2021/E/026', 'Present'),
(27, '2021/E/027', 'Present'),
(28, '2021/E/028', 'Present'),
(29, '2021/E/029', 'Present'),
(30, '2021/E/030', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_29`
--

CREATE TABLE `allocation_29` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL,
  `Column_47` varchar(255) DEFAULT NULL,
  `Column_50` varchar(255) DEFAULT NULL,
  `Column_53` varchar(255) DEFAULT NULL,
  `Column_48` varchar(255) DEFAULT NULL,
  `Column_46` varchar(255) DEFAULT NULL,
  `Column_49` varchar(255) DEFAULT NULL,
  `Column_45` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_29`
--

INSERT INTO `allocation_29` (`ID`, `RegNo`, `Column_47`, `Column_50`, `Column_53`, `Column_48`, `Column_46`, `Column_49`, `Column_45`) VALUES
(1, '2020/E/005', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(2, '2020/E/006', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(3, '2020/E/007', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Absent'),
(4, '2020/E/008', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Absent'),
(5, '2020/E/009', 'Absent', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(6, '2020/E/010', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '2020/E/012', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(8, '2020/E/013', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Absent'),
(9, '2020/E/014', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(10, '2020/E/015', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(11, '2020/E/016', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(12, '2020/E/017', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Absent'),
(13, '2020/E/019', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(14, '2020/E/020', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(15, '2020/E/022', 'Present', 'Absent', 'Absent', 'Absent', 'Present', 'Present', 'Present'),
(16, '2020/E/024', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(17, '2020/E/025', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(18, '2020/E/026', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(19, '2020/E/027', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(20, '2020/E/028', 'Present', 'Absent', 'Absent', 'Absent', 'Present', 'Present', 'Present'),
(21, '2020/E/029', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(22, '2020/E/030', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(23, '2020/E/031', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(24, '2020/E/032', 'Absent', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(25, '2020/E/033', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(26, '2020/E/034', 'Present', 'Absent', 'Absent', 'Absent', 'Present', 'Present', 'Present'),
(27, '2020/E/035', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Absent'),
(28, '2020/E/036', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(29, '2020/E/037', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(30, '2020/E/038', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_30`
--

CREATE TABLE `allocation_30` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_30`
--

INSERT INTO `allocation_30` (`ID`, `RegNo`) VALUES
(1, '2022/E/001'),
(2, '2022/E/002'),
(3, '2022/E/003'),
(4, '2022/E/004'),
(5, '2022/E/005'),
(6, '2022/E/006'),
(7, '2022/E/007'),
(8, '2022/E/008'),
(9, '2022/E/009'),
(10, '2022/E/010'),
(11, '2022/E/011'),
(12, '2022/E/012'),
(13, '2022/E/013'),
(14, '2022/E/014'),
(15, '2022/E/015'),
(16, '2022/E/016'),
(17, '2022/E/017'),
(18, '2022/E/018'),
(19, '2022/E/019'),
(20, '2022/E/020'),
(21, '2022/E/021'),
(22, '2022/E/022'),
(23, '2022/E/023'),
(24, '2022/E/024'),
(25, '2022/E/025'),
(26, '2022/E/026'),
(27, '2022/E/027'),
(28, '2022/E/028'),
(29, '2022/E/029'),
(30, '2022/E/030');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_31`
--

CREATE TABLE `allocation_31` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_31`
--

INSERT INTO `allocation_31` (`ID`, `RegNo`) VALUES
(1, '2021/E/001'),
(2, '2021/E/002'),
(3, '2021/E/003'),
(4, '2021/E/004'),
(5, '2021/E/005'),
(6, '2021/E/006'),
(7, '2021/E/007'),
(8, '2021/E/008'),
(9, '2021/E/009'),
(10, '2021/E/010'),
(11, '2021/E/011'),
(12, '2021/E/012'),
(13, '2021/E/013'),
(14, '2021/E/014'),
(15, '2021/E/015'),
(16, '2021/E/016'),
(17, '2021/E/017'),
(18, '2021/E/018'),
(19, '2021/E/019'),
(20, '2021/E/020'),
(21, '2021/E/021'),
(22, '2021/E/022'),
(23, '2021/E/023'),
(24, '2021/E/024'),
(25, '2021/E/025'),
(26, '2021/E/026'),
(27, '2021/E/027'),
(28, '2021/E/028'),
(29, '2021/E/029'),
(30, '2021/E/030');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_32`
--

CREATE TABLE `allocation_32` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL,
  `Column_12` varchar(255) DEFAULT NULL,
  `Column_13` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_32`
--

INSERT INTO `allocation_32` (`ID`, `RegNo`, `Column_12`, `Column_13`) VALUES
(1, '2022/E/001', 'Present', 'Absent'),
(2, '2022/E/002', 'Present', 'Absent'),
(3, '2022/E/003', 'Absent', 'Present'),
(4, '2022/E/004', 'Present', 'Absent'),
(5, '2022/E/005', 'Present', 'Present'),
(6, '2022/E/006', 'Present', 'Absent'),
(7, '2022/E/007', 'Absent', 'Present'),
(8, '2022/E/008', 'Present', 'Absent'),
(9, '2022/E/009', 'Present', 'Present'),
(10, '2022/E/010', 'Present', 'Present'),
(11, '2022/E/011', 'Present', 'Present'),
(12, '2022/E/012', 'Present', 'Present'),
(13, '2022/E/013', 'Present', 'Present'),
(14, '2022/E/014', 'Absent', 'Present'),
(15, '2022/E/015', 'Present', 'Present'),
(16, '2022/E/016', 'Present', 'Absent'),
(17, '2022/E/017', 'Present', 'Present'),
(18, '2022/E/018', 'Absent', 'Present'),
(19, '2022/E/019', 'Present', 'Present'),
(20, '2022/E/020', 'Present', 'Present'),
(21, '2022/E/021', 'Present', 'Present'),
(22, '2022/E/022', 'Absent', 'Present'),
(23, '2022/E/023', 'Present', 'Present'),
(24, '2022/E/024', 'Present', 'Present'),
(25, '2022/E/025', 'Present', 'Absent'),
(26, '2022/E/026', 'Present', 'Absent'),
(27, '2022/E/027', 'Absent', 'Absent'),
(28, '2022/E/028', 'Present', 'Absent'),
(29, '2022/E/029', 'Present', 'Absent'),
(30, '2022/E/030', 'Present', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_34`
--

CREATE TABLE `allocation_34` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL,
  `Column_35` varchar(255) DEFAULT NULL,
  `Column_37` varchar(255) DEFAULT NULL,
  `Column_36` varchar(255) DEFAULT NULL,
  `Column_34` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_34`
--

INSERT INTO `allocation_34` (`ID`, `RegNo`, `Column_35`, `Column_37`, `Column_36`, `Column_34`) VALUES
(1, '2022/E/001', 'Present', 'Present', 'Present', 'Absent'),
(2, '2022/E/002', 'Present', 'Absent', 'Present', 'Present'),
(3, '2022/E/003', 'Present', 'Present', 'Absent', 'Absent'),
(4, '2022/E/004', 'Present', 'Present', 'Present', 'Present'),
(5, '2022/E/005', 'Present', 'Present', 'Present', 'Absent'),
(6, '2022/E/006', 'Present', 'Absent', 'Absent', 'Absent'),
(7, '2022/E/007', 'Present', 'Absent', 'Present', 'Present'),
(8, '2022/E/008', 'Present', 'Present', 'Present', 'Absent'),
(9, '2022/E/009', 'Present', 'Absent', 'Present', 'Absent'),
(10, '2022/E/010', 'Present', 'Absent', 'Present', 'Present'),
(11, '2022/E/011', 'Present', 'Present', 'Present', 'Absent'),
(12, '2022/E/012', 'Present', 'Absent', 'Present', 'Absent'),
(13, '2022/E/013', 'Present', 'Absent', 'Absent', 'Present'),
(14, '2022/E/014', 'Present', 'Absent', 'Present', 'Absent'),
(15, '2022/E/015', 'Present', 'Present', 'Present', 'Present'),
(16, '2022/E/016', 'Present', 'Absent', 'Present', 'Absent'),
(17, '2022/E/017', 'Present', 'Absent', 'Present', 'Absent'),
(18, '2022/E/018', 'Present', 'Present', 'Present', 'Absent'),
(19, '2022/E/019', 'Present', 'Absent', 'Present', 'Present'),
(20, '2022/E/020', 'Present', 'Present', 'Absent', 'Absent'),
(21, '2022/E/021', 'Present', 'Absent', 'Present', 'Absent'),
(22, '2022/E/022', 'Present', 'Present', 'Present', 'Present'),
(23, '2022/E/023', 'Present', 'Present', 'Present', 'Absent'),
(24, '2022/E/024', 'Present', 'Absent', 'Absent', 'Absent'),
(25, '2022/E/025', 'Present', 'Present', 'Present', 'Present'),
(26, '2022/E/026', 'Present', 'Absent', 'Absent', 'Absent'),
(27, '2022/E/027', 'Present', 'Present', 'Present', 'Absent'),
(28, '2022/E/028', 'Present', 'Absent', 'Absent', 'Present'),
(29, '2022/E/029', 'Present', 'Absent', 'Present', 'Absent'),
(30, '2022/E/030', 'Present', 'Absent', 'Present', 'Absent');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_35`
--

CREATE TABLE `allocation_35` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL,
  `Column_40` varchar(255) DEFAULT NULL,
  `Column_39` varchar(255) DEFAULT NULL,
  `Column_38` varchar(255) DEFAULT NULL,
  `Column_41` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_35`
--

INSERT INTO `allocation_35` (`ID`, `RegNo`, `Column_40`, `Column_39`, `Column_38`, `Column_41`) VALUES
(1, '2021/E/001', 'Present', 'Absent', 'Present', 'Present'),
(2, '2021/E/002', 'Present', 'Absent', 'Present', 'Present'),
(3, '2021/E/003', 'Present', 'Absent', 'Present', 'Present'),
(4, '2021/E/004', 'Present', 'Present', 'Present', 'Absent'),
(5, '2021/E/005', 'Present', 'Absent', 'Present', 'Present'),
(6, '2021/E/006', 'Present', 'Absent', 'Present', 'Present'),
(7, '2021/E/007', 'Present', 'Absent', 'Present', 'Present'),
(8, '2021/E/008', 'Present', 'Absent', 'Present', 'Present'),
(9, '2021/E/009', 'Present', 'Absent', 'Present', 'Absent'),
(10, '2021/E/010', 'Present', 'Absent', 'Present', 'Present'),
(11, '2021/E/011', 'Present', 'Absent', 'Present', 'Present'),
(12, '2021/E/012', 'Present', 'Absent', 'Present', 'Present'),
(13, '2021/E/013', 'Present', 'Absent', 'Present', 'Present'),
(14, '2021/E/014', 'Present', 'Absent', 'Present', 'Present'),
(15, '2021/E/015', 'Present', 'Absent', 'Present', 'Present'),
(16, '2021/E/016', 'Present', 'Absent', 'Present', 'Present'),
(17, '2021/E/017', 'Present', 'Absent', 'Present', 'Present'),
(18, '2021/E/018', 'Present', 'Present', 'Present', 'Present'),
(19, '2021/E/019', 'Present', 'Absent', 'Present', 'Present'),
(20, '2021/E/020', 'Present', 'Present', 'Present', 'Present'),
(21, '2021/E/021', 'Present', 'Absent', 'Present', 'Present'),
(22, '2021/E/022', 'Present', 'Absent', 'Present', 'Absent'),
(23, '2021/E/023', 'Present', 'Absent', 'Present', 'Present'),
(24, '2021/E/024', 'Present', 'Present', 'Present', 'Present'),
(25, '2021/E/025', 'Present', 'Absent', 'Present', 'Absent'),
(26, '2021/E/026', 'Present', 'Absent', 'Present', 'Present'),
(27, '2021/E/027', 'Present', 'Present', 'Present', 'Present'),
(28, '2021/E/028', 'Present', 'Absent', 'Present', 'Absent'),
(29, '2021/E/029', 'Present', 'Absent', 'Present', 'Present'),
(30, '2021/E/030', 'Present', 'Absent', 'Present', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_36`
--

CREATE TABLE `allocation_36` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL,
  `Column_26` varchar(255) DEFAULT NULL,
  `Column_27` varchar(255) DEFAULT NULL,
  `Column_25` varchar(255) DEFAULT NULL,
  `Column_24` varchar(255) DEFAULT NULL,
  `Column_62` varchar(255) DEFAULT NULL,
  `Column_63` varchar(255) DEFAULT NULL,
  `Column_60` varchar(255) DEFAULT NULL,
  `Column_61` varchar(255) DEFAULT NULL,
  `Column_59` varchar(255) DEFAULT NULL,
  `Column_64` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_36`
--

INSERT INTO `allocation_36` (`ID`, `RegNo`, `Column_26`, `Column_27`, `Column_25`, `Column_24`, `Column_62`, `Column_63`, `Column_60`, `Column_61`, `Column_59`, `Column_64`) VALUES
(1, '2020/E/005', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present'),
(2, '2020/E/006', 'Absent', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Absent', 'Present', 'Present'),
(3, '2020/E/007', 'Absent', 'Present', 'Absent', 'Present', 'Absent', 'Absent', 'Absent', 'Present', 'Absent', 'Present'),
(4, '2020/E/008', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Present'),
(5, '2020/E/009', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(6, '2020/E/010', 'Present', 'Present', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '2020/E/012', 'Present', 'Absent', 'Present', 'Present', 'Absent', 'Absent', 'Absent', 'Present', 'Present', 'Present'),
(8, '2020/E/013', 'Present', 'Present', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present'),
(9, '2020/E/014', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Absent', 'Present'),
(10, '2020/E/015', 'Present', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(11, '2020/E/016', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Absent', 'Absent', 'Absent', 'Present', 'Present'),
(12, '2020/E/017', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(13, '2020/E/019', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Absent', 'Absent'),
(14, '2020/E/020', 'Present', 'Present', 'Present', 'Present', 'Absent', 'Absent', 'Present', 'Present', 'Present', 'Present'),
(15, '2020/E/022', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present'),
(16, '2020/E/024', 'Present', 'Absent', 'Absent', 'Present', 'Present', 'Absent', 'Absent', 'Present', 'Present', 'Present'),
(17, '2020/E/025', 'Present', 'Present', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Absent', 'Absent', 'Present'),
(18, '2020/E/026', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present'),
(19, '2020/E/027', 'Present', 'Present', 'Absent', 'Present', 'Absent', 'Absent', 'Present', 'Absent', 'Present', 'Present'),
(20, '2020/E/028', 'Present', 'Present', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present'),
(21, '2020/E/029', 'Present', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(22, '2020/E/030', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Absent', 'Absent', 'Present'),
(23, '2020/E/031', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present'),
(24, '2020/E/032', 'Present', 'Present', 'Present', 'Absent', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Absent'),
(25, '2020/E/033', 'Present', 'Present', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present'),
(26, '2020/E/034', 'Absent', 'Present', 'Absent', 'Present', 'Absent', 'Absent', 'Present', 'Absent', 'Absent', 'Present'),
(27, '2020/E/035', 'Present', 'Present', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present'),
(28, '2020/E/036', 'Present', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(29, '2020/E/037', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present'),
(30, '2020/E/038', 'Present', 'Present', 'Present', 'Present', 'Absent', 'Absent', 'Present', 'Present', 'Present', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_37`
--

CREATE TABLE `allocation_37` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL,
  `Column_57` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_37`
--

INSERT INTO `allocation_37` (`ID`, `RegNo`, `Column_57`) VALUES
(1, '2022/E/001', 'Present'),
(2, '2022/E/002', 'Present'),
(3, '2022/E/003', 'Present'),
(4, '2022/E/004', 'Present'),
(5, '2022/E/005', 'Present'),
(6, '2022/E/006', 'Present'),
(7, '2022/E/007', 'Present'),
(8, '2022/E/008', 'Present'),
(9, '2022/E/009', 'Present'),
(10, '2022/E/010', 'Present'),
(11, '2022/E/011', 'Present'),
(12, '2022/E/012', 'Present'),
(13, '2022/E/013', 'Present'),
(14, '2022/E/014', 'Present'),
(15, '2022/E/015', 'Present'),
(16, '2022/E/016', 'Present'),
(17, '2022/E/017', 'Present'),
(18, '2022/E/018', 'Present'),
(19, '2022/E/019', 'Present'),
(20, '2022/E/020', 'Present'),
(21, '2022/E/021', 'Present'),
(22, '2022/E/022', 'Present'),
(23, '2022/E/023', 'Present'),
(24, '2022/E/024', 'Present'),
(25, '2022/E/025', 'Present'),
(26, '2022/E/026', 'Present'),
(27, '2022/E/027', 'Present'),
(28, '2022/E/028', 'Present'),
(29, '2022/E/029', 'Present'),
(30, '2022/E/030', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_38`
--

CREATE TABLE `allocation_38` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_38`
--

INSERT INTO `allocation_38` (`ID`, `RegNo`) VALUES
(1, '2021/E/001'),
(2, '2021/E/002'),
(3, '2021/E/003'),
(4, '2021/E/004'),
(5, '2021/E/005'),
(6, '2021/E/006'),
(7, '2021/E/007'),
(8, '2021/E/008'),
(9, '2021/E/009'),
(10, '2021/E/010'),
(11, '2021/E/011'),
(12, '2021/E/012'),
(13, '2021/E/013'),
(14, '2021/E/014'),
(15, '2021/E/015'),
(16, '2021/E/016'),
(17, '2021/E/017'),
(18, '2021/E/018'),
(19, '2021/E/019'),
(20, '2021/E/020'),
(21, '2021/E/021'),
(22, '2021/E/022'),
(23, '2021/E/023'),
(24, '2021/E/024'),
(25, '2021/E/025'),
(26, '2021/E/026'),
(27, '2021/E/027'),
(28, '2021/E/028'),
(29, '2021/E/029'),
(30, '2021/E/030');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_39`
--

CREATE TABLE `allocation_39` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL,
  `Column_22` varchar(255) DEFAULT NULL,
  `Column_20` varchar(255) DEFAULT NULL,
  `Column_21` varchar(255) DEFAULT NULL,
  `Column_23` varchar(255) DEFAULT NULL,
  `Column_58` varchar(255) DEFAULT NULL,
  `Column_56` varchar(255) DEFAULT NULL,
  `Column_55` varchar(255) DEFAULT NULL,
  `Column_54` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_39`
--

INSERT INTO `allocation_39` (`ID`, `RegNo`, `Column_22`, `Column_20`, `Column_21`, `Column_23`, `Column_58`, `Column_56`, `Column_55`, `Column_54`) VALUES
(1, '2020/E/005', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(2, '2020/E/006', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(3, '2020/E/007', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(4, '2020/E/008', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(5, '2020/E/009', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(6, '2020/E/010', 'Absent', 'Present', NULL, NULL, NULL, NULL, NULL, NULL),
(7, '2020/E/012', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(8, '2020/E/013', 'Present', 'Absent', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(9, '2020/E/014', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(10, '2020/E/015', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(11, '2020/E/016', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(12, '2020/E/017', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(13, '2020/E/019', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(14, '2020/E/020', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(15, '2020/E/022', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(16, '2020/E/024', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(17, '2020/E/025', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(18, '2020/E/026', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(19, '2020/E/027', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(20, '2020/E/028', 'Present', 'Absent', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Absent'),
(21, '2020/E/029', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(22, '2020/E/030', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(23, '2020/E/031', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Absent'),
(24, '2020/E/032', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(25, '2020/E/033', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(26, '2020/E/034', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Absent'),
(27, '2020/E/035', 'Absent', 'Absent', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(28, '2020/E/036', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(29, '2020/E/037', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(30, '2020/E/038', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_40`
--

CREATE TABLE `allocation_40` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_40`
--

INSERT INTO `allocation_40` (`ID`, `RegNo`) VALUES
(1, '2022/E/001'),
(2, '2022/E/002'),
(3, '2022/E/003'),
(4, '2022/E/004'),
(5, '2022/E/005'),
(6, '2022/E/006'),
(7, '2022/E/007'),
(8, '2022/E/008'),
(9, '2022/E/009'),
(10, '2022/E/010'),
(11, '2022/E/011'),
(12, '2022/E/012'),
(13, '2022/E/013'),
(14, '2022/E/014'),
(15, '2022/E/015'),
(16, '2022/E/016'),
(17, '2022/E/017'),
(18, '2022/E/018'),
(19, '2022/E/019'),
(20, '2022/E/020'),
(21, '2022/E/021'),
(22, '2022/E/022'),
(23, '2022/E/023'),
(24, '2022/E/024'),
(25, '2022/E/025'),
(26, '2022/E/026'),
(27, '2022/E/027'),
(28, '2022/E/028'),
(29, '2022/E/029'),
(30, '2022/E/030');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_41`
--

CREATE TABLE `allocation_41` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL,
  `Column_65` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_41`
--

INSERT INTO `allocation_41` (`ID`, `RegNo`, `Column_65`) VALUES
(1, '2021/E/001', 'Present'),
(2, '2021/E/002', 'Present'),
(3, '2021/E/003', 'Present'),
(4, '2021/E/004', 'Present'),
(5, '2021/E/005', 'Present'),
(6, '2021/E/006', 'Present'),
(7, '2021/E/007', 'Present'),
(8, '2021/E/008', 'Present'),
(9, '2021/E/009', 'Present'),
(10, '2021/E/010', 'Present'),
(11, '2021/E/011', 'Present'),
(12, '2021/E/012', 'Present'),
(13, '2021/E/013', 'Present'),
(14, '2021/E/014', 'Present'),
(15, '2021/E/015', 'Present'),
(16, '2021/E/016', 'Present'),
(17, '2021/E/017', 'Present'),
(18, '2021/E/018', 'Present'),
(19, '2021/E/019', 'Present'),
(20, '2021/E/020', 'Present'),
(21, '2021/E/021', 'Present'),
(22, '2021/E/022', 'Present'),
(23, '2021/E/023', 'Present'),
(24, '2021/E/024', 'Present'),
(25, '2021/E/025', 'Present'),
(26, '2021/E/026', 'Present'),
(27, '2021/E/027', 'Present'),
(28, '2021/E/028', 'Present'),
(29, '2021/E/029', 'Present'),
(30, '2021/E/030', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_42`
--

CREATE TABLE `allocation_42` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL,
  `Column_19` varchar(255) DEFAULT NULL,
  `Column_18` varchar(255) DEFAULT NULL,
  `Column_16` varchar(255) DEFAULT NULL,
  `Column_17` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_42`
--

INSERT INTO `allocation_42` (`ID`, `RegNo`, `Column_19`, `Column_18`, `Column_16`, `Column_17`) VALUES
(1, '2020/E/005', 'Absent', 'Absent', 'Present', 'Absent'),
(2, '2020/E/006', 'Present', 'Present', 'Absent', 'Present'),
(3, '2020/E/007', 'Absent', 'Present', 'Absent', 'Absent'),
(4, '2020/E/008', 'Present', 'Present', 'Present', 'Present'),
(5, '2020/E/009', 'Present', 'Present', 'Absent', 'Absent'),
(6, '2020/E/010', 'Present', 'Present', 'Absent', NULL),
(7, '2020/E/012', 'Absent', 'Present', 'Absent', 'Present'),
(8, '2020/E/013', 'Present', 'Present', 'Present', 'Absent'),
(9, '2020/E/014', 'Absent', 'Present', 'Absent', 'Present'),
(10, '2020/E/015', 'Present', 'Present', 'Present', 'Absent'),
(11, '2020/E/016', 'Present', 'Absent', 'Present', 'Present'),
(12, '2020/E/017', 'Present', 'Present', 'Absent', 'Absent'),
(13, '2020/E/019', 'Present', 'Present', 'Present', 'Present'),
(14, '2020/E/020', 'Present', 'Present', 'Absent', 'Present'),
(15, '2020/E/022', 'Present', 'Present', 'Absent', 'Absent'),
(16, '2020/E/024', 'Present', 'Present', 'Present', 'Present'),
(17, '2020/E/025', 'Present', 'Present', 'Absent', 'Present'),
(18, '2020/E/026', 'Absent', 'Present', 'Absent', 'Present'),
(19, '2020/E/027', 'Present', 'Present', 'Present', 'Absent'),
(20, '2020/E/028', 'Present', 'Present', 'Absent', 'Present'),
(21, '2020/E/029', 'Absent', 'Present', 'Present', 'Present'),
(22, '2020/E/030', 'Present', 'Absent', 'Absent', 'Present'),
(23, '2020/E/031', 'Absent', 'Present', 'Absent', 'Absent'),
(24, '2020/E/032', 'Present', 'Present', 'Absent', 'Present'),
(25, '2020/E/033', 'Present', 'Present', 'Present', 'Present'),
(26, '2020/E/034', 'Present', 'Absent', 'Absent', 'Absent'),
(27, '2020/E/035', 'Present', 'Present', 'Absent', 'Present'),
(28, '2020/E/036', 'Present', 'Present', 'Absent', 'Present'),
(29, '2020/E/037', 'Present', 'Present', 'Absent', 'Absent'),
(30, '2020/E/038', 'Present', 'Present', 'Absent', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_43`
--

CREATE TABLE `allocation_43` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL,
  `Column_44` varchar(255) DEFAULT NULL,
  `Column_42` varchar(255) DEFAULT NULL,
  `Column_33` varchar(255) DEFAULT NULL,
  `Column_43` varchar(255) DEFAULT NULL,
  `Column_31` varchar(255) DEFAULT NULL,
  `Column_30` varchar(255) DEFAULT NULL,
  `Column_29` varchar(255) DEFAULT NULL,
  `Column_32` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_43`
--

INSERT INTO `allocation_43` (`ID`, `RegNo`, `Column_44`, `Column_42`, `Column_33`, `Column_43`, `Column_31`, `Column_30`, `Column_29`, `Column_32`) VALUES
(1, '2020/E/005', 'Absent', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(2, '2020/E/006', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Present'),
(3, '2020/E/007', 'Absent', 'Absent', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(4, '2020/E/008', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(5, '2020/E/009', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(6, '2020/E/012', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(7, '2020/E/013', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(8, '2020/E/014', 'Absent', 'Present', 'Present', 'Present', 'Absent', 'Absent', 'Present', 'Present'),
(9, '2020/E/015', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(10, '2020/E/016', 'Absent', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(11, '2020/E/017', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(12, '2020/E/019', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(13, '2020/E/020', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(14, '2020/E/022', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(15, '2020/E/024', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(16, '2020/E/025', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(17, '2020/E/026', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(18, '2020/E/027', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(19, '2020/E/028', 'Absent', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(20, '2020/E/029', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Absent', 'Present', 'Present'),
(21, '2020/E/030', 'Absent', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(22, '2020/E/031', 'Absent', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(23, '2020/E/032', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(24, '2020/E/033', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present'),
(25, '2020/E/034', 'Absent', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Present', 'Present'),
(26, '2020/E/035', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(27, '2020/E/036', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Absent', 'Present', 'Present'),
(28, '2020/E/037', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present'),
(29, '2020/E/038', 'Absent', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_44`
--

CREATE TABLE `allocation_44` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_44`
--

INSERT INTO `allocation_44` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/012'),
(7, '2020/E/013'),
(8, '2020/E/014'),
(9, '2020/E/015'),
(10, '2020/E/016'),
(11, '2020/E/017'),
(12, '2020/E/019'),
(13, '2020/E/020'),
(14, '2020/E/022'),
(15, '2020/E/024'),
(16, '2020/E/025'),
(17, '2020/E/026'),
(18, '2020/E/027'),
(19, '2020/E/028'),
(20, '2020/E/029'),
(21, '2020/E/030'),
(22, '2020/E/031'),
(23, '2020/E/032'),
(24, '2020/E/033'),
(25, '2020/E/034'),
(26, '2020/E/035'),
(27, '2020/E/036'),
(28, '2020/E/037'),
(29, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_45`
--

CREATE TABLE `allocation_45` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_45`
--

INSERT INTO `allocation_45` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/012'),
(7, '2020/E/013'),
(8, '2020/E/014'),
(9, '2020/E/015'),
(10, '2020/E/016'),
(11, '2020/E/017'),
(12, '2020/E/019'),
(13, '2020/E/020'),
(14, '2020/E/022'),
(15, '2020/E/024'),
(16, '2020/E/025'),
(17, '2020/E/026'),
(18, '2020/E/027'),
(19, '2020/E/028'),
(20, '2020/E/029'),
(21, '2020/E/030'),
(22, '2020/E/031'),
(23, '2020/E/032'),
(24, '2020/E/033'),
(25, '2020/E/034'),
(26, '2020/E/035'),
(27, '2020/E/036'),
(28, '2020/E/037'),
(29, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_46`
--

CREATE TABLE `allocation_46` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_46`
--

INSERT INTO `allocation_46` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/012'),
(7, '2020/E/013'),
(8, '2020/E/014'),
(9, '2020/E/015'),
(10, '2020/E/016'),
(11, '2020/E/017'),
(12, '2020/E/019'),
(13, '2020/E/020'),
(14, '2020/E/022'),
(15, '2020/E/024'),
(16, '2020/E/025'),
(17, '2020/E/026'),
(18, '2020/E/027'),
(19, '2020/E/028'),
(20, '2020/E/029'),
(21, '2020/E/030'),
(22, '2020/E/031'),
(23, '2020/E/032'),
(24, '2020/E/033'),
(25, '2020/E/034'),
(26, '2020/E/035'),
(27, '2020/E/036'),
(28, '2020/E/037'),
(29, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_47`
--

CREATE TABLE `allocation_47` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_47`
--

INSERT INTO `allocation_47` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/012'),
(7, '2020/E/013'),
(8, '2020/E/014'),
(9, '2020/E/015'),
(10, '2020/E/016'),
(11, '2020/E/017'),
(12, '2020/E/019'),
(13, '2020/E/020'),
(14, '2020/E/022'),
(15, '2020/E/024'),
(16, '2020/E/025'),
(17, '2020/E/026'),
(18, '2020/E/027'),
(19, '2020/E/028'),
(20, '2020/E/029'),
(21, '2020/E/030'),
(22, '2020/E/031'),
(23, '2020/E/032'),
(24, '2020/E/033'),
(25, '2020/E/034'),
(26, '2020/E/035'),
(27, '2020/E/036'),
(28, '2020/E/037'),
(29, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_48`
--

CREATE TABLE `allocation_48` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_48`
--

INSERT INTO `allocation_48` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/012'),
(7, '2020/E/013'),
(8, '2020/E/014'),
(9, '2020/E/015'),
(10, '2020/E/016'),
(11, '2020/E/017'),
(12, '2020/E/019'),
(13, '2020/E/020'),
(14, '2020/E/022'),
(15, '2020/E/024'),
(16, '2020/E/025'),
(17, '2020/E/026'),
(18, '2020/E/027'),
(19, '2020/E/028'),
(20, '2020/E/029'),
(21, '2020/E/030'),
(22, '2020/E/031'),
(23, '2020/E/032'),
(24, '2020/E/033'),
(25, '2020/E/034'),
(26, '2020/E/035'),
(27, '2020/E/036'),
(28, '2020/E/037'),
(29, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_49`
--

CREATE TABLE `allocation_49` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_49`
--

INSERT INTO `allocation_49` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/012'),
(7, '2020/E/013'),
(8, '2020/E/014'),
(9, '2020/E/015'),
(10, '2020/E/016'),
(11, '2020/E/017'),
(12, '2020/E/019'),
(13, '2020/E/020'),
(14, '2020/E/022'),
(15, '2020/E/024'),
(16, '2020/E/025'),
(17, '2020/E/026'),
(18, '2020/E/027'),
(19, '2020/E/028'),
(20, '2020/E/029'),
(21, '2020/E/030'),
(22, '2020/E/031'),
(23, '2020/E/032'),
(24, '2020/E/033'),
(25, '2020/E/034'),
(26, '2020/E/035'),
(27, '2020/E/036'),
(28, '2020/E/037'),
(29, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_50`
--

CREATE TABLE `allocation_50` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_50`
--

INSERT INTO `allocation_50` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/012'),
(7, '2020/E/013'),
(8, '2020/E/014'),
(9, '2020/E/015'),
(10, '2020/E/016'),
(11, '2020/E/017'),
(12, '2020/E/019'),
(13, '2020/E/020'),
(14, '2020/E/022'),
(15, '2020/E/024'),
(16, '2020/E/025'),
(17, '2020/E/026'),
(18, '2020/E/027'),
(19, '2020/E/028'),
(20, '2020/E/029'),
(21, '2020/E/030'),
(22, '2020/E/031'),
(23, '2020/E/032'),
(24, '2020/E/033'),
(25, '2020/E/034'),
(26, '2020/E/035'),
(27, '2020/E/036'),
(28, '2020/E/037'),
(29, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_51`
--

CREATE TABLE `allocation_51` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_51`
--

INSERT INTO `allocation_51` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/012'),
(7, '2020/E/013'),
(8, '2020/E/014'),
(9, '2020/E/015'),
(10, '2020/E/016'),
(11, '2020/E/017'),
(12, '2020/E/019'),
(13, '2020/E/020'),
(14, '2020/E/022'),
(15, '2020/E/024'),
(16, '2020/E/025'),
(17, '2020/E/026'),
(18, '2020/E/027'),
(19, '2020/E/028'),
(20, '2020/E/029'),
(21, '2020/E/030'),
(22, '2020/E/031'),
(23, '2020/E/032'),
(24, '2020/E/033'),
(25, '2020/E/034'),
(26, '2020/E/035'),
(27, '2020/E/036'),
(28, '2020/E/037'),
(29, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_52`
--

CREATE TABLE `allocation_52` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_52`
--

INSERT INTO `allocation_52` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/012'),
(7, '2020/E/013'),
(8, '2020/E/014'),
(9, '2020/E/015'),
(10, '2020/E/016'),
(11, '2020/E/017'),
(12, '2020/E/019'),
(13, '2020/E/020'),
(14, '2020/E/022'),
(15, '2020/E/024'),
(16, '2020/E/025'),
(17, '2020/E/026'),
(18, '2020/E/027'),
(19, '2020/E/028'),
(20, '2020/E/029'),
(21, '2020/E/030'),
(22, '2020/E/031'),
(23, '2020/E/032'),
(24, '2020/E/033'),
(25, '2020/E/034'),
(26, '2020/E/035'),
(27, '2020/E/036'),
(28, '2020/E/037'),
(29, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_53`
--

CREATE TABLE `allocation_53` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_53`
--

INSERT INTO `allocation_53` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/012'),
(7, '2020/E/013'),
(8, '2020/E/014'),
(9, '2020/E/015'),
(10, '2020/E/016'),
(11, '2020/E/017'),
(12, '2020/E/019'),
(13, '2020/E/020'),
(14, '2020/E/022'),
(15, '2020/E/024'),
(16, '2020/E/025'),
(17, '2020/E/026'),
(18, '2020/E/027'),
(19, '2020/E/028'),
(20, '2020/E/029'),
(21, '2020/E/030'),
(22, '2020/E/031'),
(23, '2020/E/032'),
(24, '2020/E/033'),
(25, '2020/E/034'),
(26, '2020/E/035'),
(27, '2020/E/036'),
(28, '2020/E/037'),
(29, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_54`
--

CREATE TABLE `allocation_54` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_54`
--

INSERT INTO `allocation_54` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/012'),
(7, '2020/E/013'),
(8, '2020/E/014'),
(9, '2020/E/015'),
(10, '2020/E/016'),
(11, '2020/E/017'),
(12, '2020/E/019'),
(13, '2020/E/020'),
(14, '2020/E/022'),
(15, '2020/E/024'),
(16, '2020/E/025'),
(17, '2020/E/026'),
(18, '2020/E/027'),
(19, '2020/E/028'),
(20, '2020/E/029'),
(21, '2020/E/030'),
(22, '2020/E/031'),
(23, '2020/E/032'),
(24, '2020/E/033'),
(25, '2020/E/034'),
(26, '2020/E/035'),
(27, '2020/E/036'),
(28, '2020/E/037'),
(29, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `allocation_55`
--

CREATE TABLE `allocation_55` (
  `ID` int(11) NOT NULL,
  `RegNo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_55`
--

INSERT INTO `allocation_55` (`ID`, `RegNo`) VALUES
(1, '2020/E/005'),
(2, '2020/E/006'),
(3, '2020/E/007'),
(4, '2020/E/008'),
(5, '2020/E/009'),
(6, '2020/E/012'),
(7, '2020/E/013'),
(8, '2020/E/014'),
(9, '2020/E/015'),
(10, '2020/E/016'),
(11, '2020/E/017'),
(12, '2020/E/019'),
(13, '2020/E/020'),
(14, '2020/E/022'),
(15, '2020/E/024'),
(16, '2020/E/025'),
(17, '2020/E/026'),
(18, '2020/E/027'),
(19, '2020/E/028'),
(20, '2020/E/029'),
(21, '2020/E/030'),
(22, '2020/E/031'),
(23, '2020/E/032'),
(24, '2020/E/033'),
(25, '2020/E/034'),
(26, '2020/E/035'),
(27, '2020/E/036'),
(28, '2020/E/037'),
(29, '2020/E/038');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseCode` varchar(100) NOT NULL,
  `CourseName` varchar(100) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Credit` int(11) NOT NULL,
  `LecHour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseCode`, `CourseName`, `Semester`, `Credit`, `LecHour`) VALUES
('ID2010', 'Environmental Pollution and Control ', 2, 3, 26),
('ID2020', 'Materials Science for Engineering', 2, 3, 35),
('MC2020', 'Linear Algebra', 2, 3, 31),
('EC2010', 'Computer Programming', 2, 3, 26),
('CE2021', 'Engineering Mechanics', 2, 3, 30),
('MP2010', 'Thermodynamics', 2, 3, 36),
('MP3010', 'Kinematics and Dynamics', 3, 3, 29),
('MC3010', 'Differential Equations and Numerical Methods', 3, 3, 29),
('CE3010', 'Mechanics of Materials', 3, 3, 31),
('ID3020', 'Design and Prototyping', 3, 3, 0),
('EC3011', 'Introduction to Electronics and Instrumentation', 3, 3, 36),
('MC3020', 'Probability and Statistics', 3, 3, 30),
('EC4010', 'Digital Design ', 4, 3, 29),
('EC4040', 'Signals and Systems', 4, 3, 35),
('EC4050', 'Electronic Circuits and Devices', 4, 3, 35),
('EC4060', 'Computer and Data Networks', 4, 3, 28),
('EC4070', 'Data Structures and Algorithms', 4, 3, 30),
('MC4010', 'Discrete Mathematics', 4, 3, 31);

-- --------------------------------------------------------

--
-- Table structure for table `courseallocation`
--

CREATE TABLE `courseallocation` (
  `AllocationID` int(11) NOT NULL,
  `CourseCode` varchar(100) NOT NULL,
  `Lecture-ID` varchar(100) NOT NULL,
  `Batch` varchar(100) NOT NULL,
  `AcademicYear` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courseallocation`
--

INSERT INTO `courseallocation` (`AllocationID`, `CourseCode`, `Lecture-ID`, `Batch`, `AcademicYear`) VALUES
(44, 'MC3020', 'Lec003', 'E20', '2023'),
(45, 'EC3011', 'Lec001', 'E20', '2023'),
(46, 'ID3020', 'Lec002', 'E20', '2023'),
(47, 'CE3010', 'Lec004', 'E20', '2023'),
(48, 'MC3010', 'Lec007', 'E20', '2023'),
(49, 'MP3010', 'Lec012', 'E20', '2023'),
(50, 'ID2010', 'Lec011', 'E20', '2023'),
(51, 'ID2020', 'Lec010', 'E20', '2023'),
(52, 'MC2020', 'Lec009', 'E20', '2023'),
(53, 'EC2010', 'Lec008', 'E20', '2023'),
(54, 'CE2021', 'Lec006', 'E20', '2023'),
(55, 'MP2010', 'Lec004', 'E20', '2023'),
(25, 'ID2010', 'Lec002', 'E22', '2024'),
(26, 'ID3020', 'Lec002', 'E21', '2024'),
(27, 'MC4010', 'Lec002', 'E20', '2024'),
(28, 'EC3011', 'Lec003', 'E21', '2024'),
(29, 'EC4010', 'Lec003', 'E20', '2024'),
(30, 'MP2010', 'Lec004', 'E22', '2024'),
(31, 'CE3010', 'Lec004', 'E21', '2024'),
(32, 'EC2010', 'Lec005', 'E22', '2024'),
(34, 'MC2020', 'Lec006', 'E22', '2024'),
(35, 'MC3010', 'Lec006', 'E21', '2024'),
(36, 'EC4050', 'Lec007', 'E20', '2024'),
(37, 'ID2020', 'Lec008', 'E22', '2024'),
(38, 'MP3010', 'Lec008', 'E21', '2024'),
(39, 'EC4040', 'Lec008', 'E20', '2024'),
(40, 'CE2021', 'Lec009', 'E22', '2024'),
(41, 'MC3020', 'Lec009', 'E21', '2024'),
(42, 'EC4070', 'Lec010', 'E20', '2024'),
(43, 'EC4060', 'Lec006', 'E20', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `Lecture-ID` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MidName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Profession` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`Lecture-ID`, `Email`, `Password`, `FirstName`, `MidName`, `LastName`, `Profession`) VALUES
('Lec001', 'kandasamy.pirapaharan@eng.jfn.ac.lk', '$2y$10$sIA4.hVU0xF50cX83O0Zm.81nqtBfQmA8iXHWNzxCD2AlaNSMsO2O', 'Kandasamy', '', 'Pirapaharan', 'Dean'),
('Lec002', 'balachandran.ketheesan@eng.jfn.ac.lk', '$2y$10$fXjA5xrltW0VDBYGKJKnsONI9waH9z5IvolKczRBP6KkdixucjAMa', 'Balachandran', '', 'Ketheesan', 'HOD'),
('Lec003', 'tharmarajah.thiruvaran@eng.jfn.ac.lk', '$2y$10$dNxvEHaqf.ISiUv92rhyc.2mRvNmJF2VDXJiZjWpXsCwID2uuMCou', 'Tharmarajah', '', 'Thiruvaran', 'HOD'),
('Lec004', 'tharshika.thanihaichelvan@eng.jfn.ac.lk', '$2y$10$2PP0Q1D6iouCobqpuRTWJu86x4h54nUE3rC3zNlAKsEVI7z2v4Bla', 'Tharshika', '', 'Thanihaichelvan', 'HOD'),
('Lec005', 'anantharajah.kaneswaran@eng.jfn.ac.lk', '$2y$10$dZ.tWGByZOwgo.pXzL74w.WJF9ynnDHLuJk/ht3dGbBMRsJzLNFvm', 'Anantharajah', '', 'Kaneswaran', 'HOD'),
('Lec006', 'padmanathan.kathirgamanathan@eng.jfn.ac.lk', '$2y$10$cTO5xjih9xrRrDdKUuW04One8qGaZYjnPq3gRM5ykQr7zQejdP6Nu', 'Padmanathan', '', 'Kathirgamanathan', 'HOD'),
('Lec007', 'arulampalam.atputharajah@eng.jfn.ac.lk', '$2y$10$hqe.Wyx7iYydiUXH/WKW5eP39Ob3vVa8qMhvXMr0QVVa3ecVrgU1W', 'Arulampalam', '', 'Atputharajah', 'Proffessor'),
('Lec008', 'navaratnarajah.sathiparan@eng.jfn.ac.lk', '$2y$10$6XDeYDRYT9tOLbclGK1ilerst6vQz7KX0fs1kgDMajc.hsvFU/qwu', 'Navaratnarajah', '', 'Sathiparan', 'Proffessor'),
('Lec009', 'kanagasundaram.ahilan@eng.jfn.ac.lk', '$2y$10$aHutVlsd4cijLcHHrmpXEuJdoRDlkJd1DnYHKj4zoY1KcVeyhlwUq', 'Kanagasundaram', '', 'Ahilan', 'Proffessor'),
('Lec010', 'subramaniyam.sivakumar@eng.jfn.ac.lk', '$2y$10$srFxGjxn1NnZigH1dMorAeqHefeGCdbGfRj.J/4ufoLnGOQtYwgc2', 'Subramaniyam', '', 'Sivakumar', 'Senior Lecturer'),
('Lec011', 'arulanantham.anburuvel@eng.jfn.ac.lk', '$2y$10$ka1AF.hQN0VhUO.bAaUdJuB8XotR.L7/Tu13ce/a03x49vgSovGGa', 'Arulanantham', '', 'Anburuvel', 'Senior Lecturer'),
('Lec012', 'balasubramaniyam.janarthanan@eng.jfn.ac.lk', '$2y$10$qXeOZIJKWllkf1Mo7sJO3upCOlW3I4xVGuFuIMwvC/IT1t0AtYCfy', 'Balasubramaniyam', '', 'Janarthanan', 'Senior Lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `ma`
--

CREATE TABLE `ma` (
  `MA-ID` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MidName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ma`
--

INSERT INTO `ma` (`MA-ID`, `Email`, `Password`, `FirstName`, `MidName`, `LastName`) VALUES
('ma12345', 'ma1234@eng.jfn.ac.lk', '$2y$10$IWSjFvqeeB4yzYRRyq/G/.pfnjPZ1Vml3nwH3FPLAdY2lP33YpfAa', 'Kidhurshan', 'Solo', 'Developer');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `RegNo` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MidName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Batch` varchar(100) NOT NULL,
  `MA-Approval` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`RegNo`, `Email`, `Password`, `FirstName`, `MidName`, `LastName`, `Batch`, `MA-Approval`) VALUES
('2020/E/005', '2020e005@eng.jfn.ac.lk', '$2y$10$Re4i7BvKwbBmKerfUY9nEeUHr6GZr2UDMMzdm/5xmPU6ZtcmFUA.C', 'R.M.', 'U.', 'Amarajeeya', 'E20', 'Active'),
('2020/E/006', '2020e006@eng.jfn.ac.lk', '$2y$10$zJ879oBUX3oq1/nGlO7sauUcklIgubYUlqIMev2ySg9ySlVlevZXC', 'U.', 'I.', 'Amarasinghe', 'E20', 'Active'),
('2020/E/007', '2020e007@eng.jfn.ac.lk', '$2y$10$UHZPGfCX1J11Ky4XHmvyzeniWhQ.IMNGcfiam7PcOWQfESDZACS2a', 'D.P.', 'M.', 'Amarasuriya', 'E20', 'Active'),
('2020/E/008', '2020e008@eng.jfn.ac.lk', '$2y$10$e33spxvQeSimxnualqLWb.F11bM74oGD6L3G.0aGS8dJRiau21qxu', 'S.M.', 'H.', 'Arachchi', 'E20', 'Pending'),
('2020/E/009', '2020e009@eng.jfn.ac.lk', '$2y$10$EqG3H6pk769LN8i06sk5zO30w5t5PLbKvmwgwv7mxVnqPa/irtYxm', 'M.S.', 'M.', 'Arafath', 'E20', 'Not'),
('2020/E/012', '2020e012@eng.jfn.ac.lk', '$2y$10$aOcJtskzCNQwnz/bgPXlxOx5PiXlyiOSZQJgpWpVEbNiQFW6pLaoy', 'N.', 'M.', 'Aslam', 'E20', 'Active'),
('2020/E/013', '2020e013@eng.jfn.ac.lk', '$2y$10$KvAiEWCI4pH3cAp/oVhmweFGOetyjG1H814pwuN808MXWtkpnmL9.', 'S.A.', 'F.', 'Asra', 'E20', 'Pending'),
('2020/E/014', '2020e014@eng.jfn.ac.lk', '$2y$10$31FmqNqtspFrbyWZLwU8l.ERcar8ewPIzVZQGSnrZMuESf9Jz3oDy', 'A.C.', 'D.P.', 'Athupitiya', 'E20', 'Active'),
('2020/E/015', '2020e015@eng.jfn.ac.lk', '$2y$10$L8xk7SxZQfQKbsGtPHz2deowUvpou/dsU58hJ5ZXszKv2KM/E.TQO', 'R.', '', 'Atputharavi', 'E20', 'Pending'),
('2020/E/016', '2020e016@eng.jfn.ac.lk', '$2y$10$boZTqQBuXM5VNiL9l4mMC.ot2JZYQwmpz8ZWv/fHKLkXh8a5OGimy', 'C.', 'N.', 'Balendra', 'E20', 'Pending'),
('2020/E/017', '2020e017@eng.jfn.ac.lk', '$2y$10$gslW1bHyg6tNixlV4ihNYe/aN82AGmkU/uZphIS2KpQa1OYk0oCWq', 'A.H.M.', 'V.L.', 'Bandara', 'E20', 'Pending'),
('2020/E/019', '2020e019@eng.jfn.ac.lk', '$2y$10$cndln1Y.IXnStXM5BFrij.O6tNZ6bXKa26T/ptuLX/gn.Wv1cYLYa', 'D.W.', 'S.B.', 'Bandara', 'E20', 'Pending'),
('2020/E/020', '2020e020@eng.jfn.ac.lk', '$2y$10$Z.H3b9fekn0uMD2oTDbOEuK9LLOtkPWDsHEYuwOEobRBkWqG300l2', 'R.M.S.', 'C.A.', 'Bandara', 'E20', 'Pending'),
('2020/E/022', '2020e022@eng.jfn.ac.lk', '$2y$10$jmbccS3.stFdhoj2NqwRoeqjjESr/4AW2QxrV.pufwF4TZShIDzqS', 'S.B.R.', 'G.S.', 'Bandara', 'E20', 'Pending'),
('2020/E/024', '2020e024@eng.jfn.ac.lk', '$2y$10$TMlhTQXITUS0epeqAdCzn.OrDlPtlDwl6yqezeqHD47sFigKniyYO', 'E.L.', 'U.', 'Bulathwaththa', 'E20', 'Pending'),
('2020/E/025', '2020e025@eng.jfn.ac.lk', '$2y$10$/4fUGXfeGVJukaVoWbfd6uDsrZewaDYUeLXA5fuN8mvCmAUw8CV42', 'P.', '', 'Chandramohan', 'E20', 'Pending'),
('2020/E/026', '2020e026@eng.jfn.ac.lk', '$2y$10$Dt/ExR1Fis8uY877ZByxQOGYlvWeZEBE4fGmlGPPxDNDb9UrmWnWq', 'E.', 'R.', 'Chanthuru', 'E20', 'Pending'),
('2020/E/027', '2020e027@eng.jfn.ac.lk', '$2y$10$VdRGaAn7mk4Dn1wrMlJY1u4dwOaKZ3GT.AYBJ5QZqZMVJZEv5zz0i', 'T.', '', 'Darmila', 'E20', 'Pending'),
('2020/E/028', '2020e028@eng.jfn.ac.lk', '$2y$10$1qzxGleuOsPRBy9KQidJbug3m7nApRX0rkLqOj7PMmH1hAeg93PQe', 'D.G.', 'R.P.', 'Dasanayake', 'E20', 'Pending'),
('2020/E/029', '2020e029@eng.jfn.ac.lk', '$2y$10$/ipPYL7jVDGgfk.W0TcVJejJoywTh3gtMLZed4FJxQZCma/7T18te', 'D.W.G.', 'A.S.B.', 'Dehipitiya', 'E20', 'Pending'),
('2020/E/030', '2020e030@eng.jfn.ac.lk', '$2y$10$jnRGJCzYVpy2HYtuEfvNCeXCp8yheC.1GJxAgXP3Cl02vlrGXiyVm', 'R.', 'K.', 'Dhilakshan', 'E20', 'Pending'),
('2020/E/031', '2020e031@eng.jfn.ac.lk', '$2y$10$E1cJ3wf0bVhbes2cgtSc.OB0oF3iUGHEIaHsc4mZmhxKe/VjhO9oS', 'P.', '', 'Dhishanth', 'E20', 'Pending'),
('2020/E/032', '2020e032@eng.jfn.ac.lk', '$2y$10$EVXhFXRexpwMKnWFNHfQ/OW0.BK02JKqgXgxEENMZfBbIL0oXjhJi', 'S.', '', 'Dilaxsan', 'E20', 'Pending'),
('2020/E/033', '2020e033@eng.jfn.ac.lk', '$2y$10$UZsi5pm9n1ffs67LCM5r1eISJaD7JM/f4CuvhHt9GkhuRFNKqShty', 'W.N.M.', 'A.M.', 'Dilshan', 'E20', 'Pending'),
('2020/E/034', '2020e034@eng.jfn.ac.lk', '$2y$10$XByIqAwaHQRiYDnJcfiJX.xFRi0ayroCBOS12nlhsEYxs7nOYeYbe', 'S.', '', 'Dilushanth', 'E20', 'Pending'),
('2020/E/035', '2020e035@eng.jfn.ac.lk', '$2y$10$5yaKX8kNvOzndQZrxcX2nu.xs1a7jxzjeJBolUFOu54.eGpSNU.W6', 'V.', '', 'Dines', 'E20', 'Pending'),
('2020/E/036', '2020e036@eng.jfn.ac.lk', '$2y$10$FdS5W0rwk5V0pWU0lGvmeuBDPq2/jZ/XF9fZQEUYhJdhveysXGsae', 'S.', 'P.', 'Dissanayaka', 'E20', 'Pending'),
('2020/E/037', '2020e037@eng.jfn.ac.lk', '$2y$10$rNNWz5x4C0R9bnZyJOupo.xTUgfPQBHjIQKy7mZkyODqsTQWV6qqS', 'S.S.', 'L.', 'Dissanayaka', 'E20', 'Pending'),
('2020/E/038', '2020e038@eng.jfn.ac.lk', '$2y$10$zkKBnWM.1cdUD0ezTUwqbOI89YqvLSseUn.8I0cypWt.uQnS/qo.G', 'M.D.M.', 'S.M.B.', 'Dissanayake', 'E20', 'Pending'),
('2021/E/001', '2021e001@eng.jfn.ac.lk', '$2y$10$9SerrjhnsJ7RzskXVRMZue7CWcW/E3re.tMEJcLN0b6bfJ9wfnUyG', 'A.W.', 'U.A.', 'Bandaranayake ', 'E21', 'Active'),
('2021/E/002', '2021e002@eng.jfn.ac.lk', '$2y$10$3v/ec6Kb88vGWRlB8aQu4ufJgSDYjJUx4m7LRrdJ5TvmSdS/gyv1C', 'A.M.', 'D.I.', 'Bandara', 'E21', 'Pending'),
('2021/E/003', '2021e003@eng.jfn.ac.lk', '$2y$10$0Lo6jpMCG1Wx72r80cBgFeU9DhxQ3nfQkUFFa9mZCsebYCmftH4KW', 'A.M.', 'S.N ', 'Gunarathna', 'E21', 'Pending'),
('2021/E/004', '2021e004@eng.jfn.ac.lk', '$2y$10$bz0ZeIJpED/0AuTc5/gRNu0rD/o0vh39m4txYdGQy.3yriPyQ06S6', 'A. ', 'F. ', 'Musarrafa', 'E21', 'Pending'),
('2021/E/005', '2021e005@eng.jfn.ac.lk', '$2y$10$iFubeuiR9nqfnXjniSD4B.79gq7IEY9.0Be7FTg62xxusFfBeI7Ae', 'A. ', 'D. ', 'Ranaweera', 'E21', 'Pending'),
('2021/E/006', '2021e006@eng.jfn.ac.lk', '$2y$10$Qdxp38cH4TOZRQQIyvRj0uzsxJPbaf3yGKQ9mGoWWAdgTE6GfLFOa', 'A.', '', 'Jenarththan', 'E21', 'Pending'),
('2021/E/007', '2021e007@eng.jfn.ac.lk', '$2y$10$tD2ZiXjkdNvhZDd2eBYlmOX0Mmwi6DgSblgyRTv0SJZCFfSYNshla', 'A. ', 'A.S. ', 'Ahamed', 'E21', 'Pending'),
('2021/E/008', '2021e008@eng.jfn.ac.lk', '$2y$10$kVZpao41RiQPqNro5tQJXeheBtdUBdQnblffzvREr7AZudDmOP5Ze', 'A.H. ', 'D.D ', 'Premarathna', 'E21', 'Pending'),
('2021/E/009', '2021e009@eng.jfn.ac.lk', '$2y$10$lluoJ4EsX3oySTT3vRVK2u2TnUI.R7LdoMRuQHX80LJM5g.RZRyUq', 'A.Y.', 'I.D. ', 'Perera', 'E21', 'Pending'),
('2021/E/010', '2021e010@eng.jfn.ac.lk', '$2y$10$mPi/vvBLtyYaFbQk9xqN4e0TydDDhUr1souSYWTOps3rfwftSBQni', 'A. ', '', 'Gunarthika', 'E21', 'Pending'),
('2021/E/011', '2021e011@eng.jfn.ac.lk', '$2y$10$rbFN.TpjMQxT8Pq9HLKzRO8IpzxTeUAPz..QF19dptcvfaDSkP5Kq', 'A. ', '', 'Arthika', 'E21', 'Pending'),
('2021/E/012', '2021e012@eng.jfn.ac.lk', '$2y$10$dZ5.SEkTX8l6QJqb8YIicOZkK9.rewhSwkqY0ZTxVlDxoGeoIX9Lm', 'A.B. ', 'O.P. ', 'Nandarathna', 'E21', 'Pending'),
('2021/E/013', '2021e013@eng.jfn.ac.lk', '$2y$10$T72F15g1NWzwJnhNAcRVRevRMRtBV2AwJlTs7S26MbU25Vk2463jy', 'A.J. ', 'K. ', 'Ekanayaka', 'E21', 'Pending'),
('2021/E/014', '2021e014@eng.jfn.ac.lk', '$2y$10$PLFONCzDp.bp50BdYpvELePe3OyqkvkSEt8SKw0wSiiezSLM8XipW', 'A. ', 'M. ', 'Shanika', 'E21', 'Pending'),
('2021/E/015', '2021e015@eng.jfn.ac.lk', '$2y$10$kbVCdxxVMU1KOzSfIgJEue6DdQgTXii7bTJcq6jp1l0OtTslbccU2', 'A. ', 'M. ', 'Mathushanth', 'E21', 'Pending'),
('2021/E/016', '2021e016@eng.jfn.ac.lk', '$2y$10$gT5qcZ5u.wvJLNJ6LAvs/u.S4nmFKLjpgM8VilxYs16/HIfwPoEJq', 'A. ', '', 'Karnan', 'E21', 'Pending'),
('2021/E/017', '2021e017@eng.jfn.ac.lk', '$2y$10$X9MP/hYjq4oi1hRkRcNM0OxjnOYIXGrIaymOwleSy6tUwgTIdNF4u', 'A. K. ', 'H. ', 'Kaushan', 'E21', 'Pending'),
('2021/E/018', '2021e018@eng.jfn.ac.lk', '$2y$10$EsL82kc.LD6drso/X11nouFRcRNs0KTppFB.myPA8A5SFdJimk9MG', 'A. ', 'O. ', 'Sirisena', 'E21', 'Pending'),
('2021/E/019', '2021e019@eng.jfn.ac.lk', '$2y$10$SbLjvbA.Kb/xIw1b77S7SOEm5RhubBNmUd3DsHHpd9uo0.5F4Apw2', 'A.N.G.D', 'K.C.', 'De silva', 'E21', 'Pending'),
('2021/E/020', '2021e020@eng.jfn.ac.lk', '$2y$10$/0yB2/9K4HmsquGbP65wTeYEBmt8xyyji/h.XvC9yhJZiBr.OdDaq', 'A. ', 'D. ', 'Koswaththa', 'E21', 'Pending'),
('2021/E/021', '2021e021@eng.jfn.ac.lk', '$2y$10$AfIskPifIwAvLvHaMnK2ful9EDaWc/.r4jjl15Vry.yPD5VcwMy/S', 'B.P. ', 'T. S. ', 'Thilakarathne', 'E21', 'Pending'),
('2021/E/022', '2021e022@eng.jfn.ac.lk', '$2y$10$bAu1AgQcdzU48Ij3.8W9NuMw23iFKFNw0.aiWle3Rrml2bsaCYnbu', 'B. S. ', 'K. ', 'Perera', 'E21', 'Pending'),
('2021/E/023', '2021e023@eng.jfn.ac.lk', '$2y$10$sXw61C0pe5sSvEJ8belJy.j4mbDjS4U31XpABzZC4olmA1E.8GT3a', 'C. ', 'M. ', 'Kurkulasuriya', 'E21', 'Pending'),
('2021/E/024', '2021e024@eng.jfn.ac.lk', '$2y$10$16ksADDtPaBracfpOtRGI.uQ19LKns0qDEzM.23IQ9UnGZdGXUPVy', 'D.K. ', 'D. ', 'Weerasinghe', 'E21', 'Pending'),
('2021/E/025', '2021e025@eng.jfn.ac.lk', '$2y$10$wFk1BqxC394m0g9gSjM1tunow3lbtSHqyTHrKV4W0qRU27D0FAGgG', 'D. ', '', 'Kidurshan', 'E21', 'Pending'),
('2021/E/026', '2021e026@eng.jfn.ac.lk', '$2y$10$wGPE1qRng7eG1GeMKYmDx.6xOEGN3.vaUFW2rs6k2aCEryVJBLqvO', 'D.', 'P. ', 'Salgadu', 'E21', 'Pending'),
('2021/E/027', '2021e027@eng.jfn.ac.lk', '$2y$10$BO6dDh/r04WQwEHR/J87Y.QKUxlo.b.qkn/87F.cf2ERea0Aknttq', 'D.M. ', 'H.B. ', 'Bandara', 'E21', 'Pending'),
('2021/E/028', '2021e028@eng.jfn.ac.lk', '$2y$10$ft304NDlRVjevIN96Zla7uKqn3kHTWDL9L9N0QVAnv3evJ6YaNb2q', 'D.M. ', 'H. ', 'Dissanayaka', 'E21', 'Pending'),
('2021/E/029', '2021e029@eng.jfn.ac.lk', '$2y$10$iHdfBZFtJcQpcxAAJr/JVOm3BPJ/t/Ds78HBbkoAZqqkePSyl8b/i', 'D.M.U.', 'G.D.L. ', 'Dissanayaka', 'E21', 'Pending'),
('2021/E/030', '2021e030@eng.jfn.ac.lk', '$2y$10$0ZjOEhvbI1/VWtENewOE9.lG7FO8LtruTIXStEo/gufxPvNpUWy4a', 'D.M.', 'C.P. ', 'Gunarathna', 'E21', 'Pending'),
('2022/E/001', '2022e001@eng.jfn.ac.lk', '$2y$10$UpBUY1UcP4Do7yGR.maUTecV67i2Jkc4/bMFyKJJlXeYzUadUSdGS', 'A.R.', 'M.', 'Rifthi', 'E22', 'Pending'),
('2022/E/002', '2022e002@eng.jfn.ac.lk', '$2y$10$NP0FTxOkeCVe65ee9p6cQOB7G2ItNjCGoUC8T48j90ckFw1DvayE.', 'A.R.', 'M.', 'Atheef', 'E22', 'Pending'),
('2022/E/003', '2022e003@eng.jfn.ac.lk', '$2y$10$7bwEKsSnkjzS0UrKZfE3/ervD3/wnkwN/mnjDRwRjw7n4uv5uV10S', 'A.J.', 'M.', 'Athnan', 'E22', 'Pending'),
('2022/E/004', '2022e004@eng.jfn.ac.lk', '$2y$10$1bl1pmwQ.NGLq5NjJnGxyuaYgSB3k9yVLxcNNgAp2ceM1Hu0SnZta', 'A.P.', 'A.', 'Tharlus', 'E22', 'Pending'),
('2022/E/005', '2022e005@eng.jfn.ac.lk', '$2y$10$GBzWASm.rBgw/s/iOBkPo.VhBtpLu0hFaFvmPjDYThbo44daA6eIW', 'A.R.', 'MARY', 'Evonciya', 'E22', 'Pending'),
('2022/E/006', '2022e006@eng.jfn.ac.lk', '$2y$10$pYAeUe7aSThSPyb4kYcOIOBJ3xAjb7fuuE0vJJZDzoL2GOhl/tfwa', 'A.', 'A.', 'Ahamed', 'E22', 'Pending'),
('2022/E/007', '2022e007@eng.jfn.ac.lk', '$2y$10$lMaC8HC846qlSzJvOSCNVe7Ni6OOG30D9VvUABs4eK5gtzyQzHqhm', 'A.D.', 'I.S.', 'Umayangana', 'E22', 'Pending'),
('2022/E/008', '2022e008@eng.jfn.ac.lk', '$2y$10$yFsTf1WO89LDYGlduFYIxO4Y8E5xr5Fmnf3wHCAw.SBYMC5oCVFuq', 'A.D.', 'S.', 'Witharana', 'E22', 'Pending'),
('2022/E/009', '2022e009@eng.jfn.ac.lk', '$2y$10$PEi9mhhFTGs9hEcFBPcsnudQW7nfmzYR24x.Zv11TGdInLN/RASMK', 'B.', '', 'Punniyamoorthi', 'E22', 'Pending'),
('2022/E/010', '2022e010@eng.jfn.ac.lk', '$2y$10$iDYyIzlCWK2SRmjqNqgG0OQsf0eCUfCJEA7i3j9a46WdJFRssbtaG', 'B.W.G.', 'W.V.A.S.', 'Dasanayake', 'E22', 'Pending'),
('2022/E/011', '2022e011@eng.jfn.ac.lk', '$2y$10$B7e86maxH5JmMFahyjTbDOw5GDVvu5S9xvX8VuzZy7jU0N1PXykcO', 'B.', '', 'Jhyogadharshan', 'E22', 'Pending'),
('2022/E/012', '2022e012@eng.jfn.ac.lk', '$2y$10$wcGHIfalzt7/PXqyECbonuf2buXlbLNqfflcLS/V.7ucO8DKqW9Ba', 'B.Y.', 'S.', 'Madushan', 'E22', 'Pending'),
('2022/E/013', '2022e013@eng.jfn.ac.lk', '$2y$10$wPAQxNOvNMwQwOpq.oYdzeYzZTnK.4I56WY0JRhai/US8nIfZbyEm', 'B.G', 'D.C.', 'Kularathna', 'E22', 'Pending'),
('2022/E/014', '2022e014@eng.jfn.ac.lk', '$2y$10$4TH4WQsINBgUCbvyjSZIruRK/V7Jy0.aI1WLkjMdsVbqqHtiiE6nS', 'B.M.', 'M.P.', 'Balasooriya', 'E22', 'Pending'),
('2022/E/015', '2022e015@eng.jfn.ac.lk', '$2y$10$wprQVGF9nf18I70iQMubEeEJOdepwxYFIY0q2li6pCm4DTjgRjwPa', 'B.A.', 'D.P.', 'Wijerathna', 'E22', 'Pending'),
('2022/E/016', '2022e016@eng.jfn.ac.lk', '$2y$10$bQc1dzepF72hylDLo4bkXulSr.56SSRlNvFsqBbWA89NpqYIog4Qm', 'B.M.', 'H.', 'Rathnayake', 'E22', 'Pending'),
('2022/E/017', '2022e017@eng.jfn.ac.lk', '$2y$10$JWFtBNuXrkuq18h2ZUS96OycrHy.Y0p5eTFvdBe63U7FtyGt7WK3u', 'B.M.', 'S.E.S.', 'Thilakarathna', 'E22', 'Pending'),
('2022/E/018', '2022e018@eng.jfn.ac.lk', '$2y$10$n.RPOGECfrMzk3hXh0kO1e0gL/3.UIaeAVUVbDPcPxEH1Wl3mTZw2', 'B.V.', 'S.', 'Adithya', 'E22', 'Pending'),
('2022/E/019', '2022e019@eng.jfn.ac.lk', '$2y$10$9L6nAoY3CIzBx6NEGR9P3.J9fhuw4lWZ/tAdl6c5j9/u3CKZ5UBai', 'B.P.', 'H.', 'Iyanage', 'E22', 'Pending'),
('2022/E/020', '2022e020@eng.jfn.ac.lk', '$2y$10$awJep0LkIdg1WzDovZw61uAATG6HNCva.bISjw7aEFvXrbA3W9F..', 'C.', 'K.', 'Basnayake', 'E22', 'Pending'),
('2022/E/021', '2022e021@eng.jfn.ac.lk', '$2y$10$rzkb2KwRlLRwK3GgicUrQOu9byShJAW6uEe4TrYhtRuDdGXO9JU2S', 'C.M.', 'M.N.', 'Basnayake', 'E22', 'Pending'),
('2022/E/022', '2022e022@eng.jfn.ac.lk', '$2y$10$zgUo3Z37T/WeFIN7lrRkhO3LH75KWEbUAif5EBprWrAchkXI8NihS', 'D.A.', 'D.I.', 'Senevirathne', 'E22', 'Pending'),
('2022/E/023', '2022e023@eng.jfn.ac.lk', '$2y$10$YWHfto9S1iMrmxMX6Tv8F.tj7ey1rqYdQQpa.qbTPKvbxMH2ntgPq', 'D.A.', 'H.', 'Ridmika', 'E22', 'Pending'),
('2022/E/024', '2022e024@eng.jfn.ac.lk', '$2y$10$dcNwPNR2.WeqXK7kZkUg7OFz3TBCuTVdcluXh5PnHi43kBNYPzTsK', 'D.', '', 'Kuhanesan', 'E22', 'Pending'),
('2022/E/025', '2022e025@eng.jfn.ac.lk', '$2y$10$NaEq9yNffWbM/F5maJaFC.9mRuesrIhwf0x.h2QnGYMIWTlmCAtXq', 'D.M.', 'N.N.', 'Sathsarani', 'E22', 'Pending'),
('2022/E/026', '2022e026@eng.jfn.ac.lk', '$2y$10$I3mzzPfO83.OVsdxtVR1M.AJR6wPV81mL4M6U2J3pbdB8AUzwNP.2', 'D.R.', 'R.S.', 'Pussekumbura', 'E22', 'Pending'),
('2022/E/027', '2022e027@eng.jfn.ac.lk', '$2y$10$RArg6OzGxgUNKv4K02CMOe0reMoIQXfFQuN.QJBBAw9eHM5Fejkz6', 'D.M.', 'K.N.', 'Deshapriya', 'E22', 'Pending'),
('2022/E/028', '2022e028@eng.jfn.ac.lk', '$2y$10$naJ5ccdG6jrS1qTObX4tPOptoM/OAZwcZ15Oqra34AKPqoxRtxM4i', 'D.M.', 'P.S.', 'Dissanayaka', 'E22', 'Pending'),
('2022/E/029', '2022e029@eng.jfn.ac.lk', '$2y$10$43.MyoMunWb/iuE92H8giuxxPDKiYfUkLMnXDH1KZ2xMcwknOm4kK', 'D.B.', 'L.', 'Heshan', 'E22', 'Pending'),
('2022/E/030', '2022e030@eng.jfn.ac.lk', '$2y$10$XNVu4NHOpRXu8tK09D8axuBdAhExgzr8u9UpB9ftVUdW/cA87JPLq', 'D.L.', 'D.', 'Wimalasuriya', 'E22', 'Not');

-- --------------------------------------------------------

--
-- Table structure for table `timeschedule`
--

CREATE TABLE `timeschedule` (
  `ScheduleID` int(11) NOT NULL,
  `AllocationID` int(100) NOT NULL,
  `Chapter` varchar(100) NOT NULL,
  `StartTime` varchar(100) NOT NULL,
  `EndTime` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `MA-Action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timeschedule`
--

INSERT INTO `timeschedule` (`ScheduleID`, `AllocationID`, `Chapter`, `StartTime`, `EndTime`, `Date`, `MA-Action`) VALUES
(1, 25, 'Chapter 1- Section 1', '8.00 AM', '9.00 AM', '2024-12-01', 'Take'),
(2, 25, 'Chapter 1 - Section 2', '8.00 AM', '10.00 AM', '2024-12-03', 'Take'),
(3, 25, 'Chapter 2', '9.00 AM', '10.30 AM', '2024-12-05', 'Not'),
(4, 26, 'Section 1', '10.00 AM', '11.00 AM', '2024-12-20', 'Take'),
(5, 26, 'Assignment 1', '8.00 AM', '10.00 AM', '2024-12-22', 'Not'),
(6, 26, 'Section 2', '1.00 PM', '3.00 PM', '2024-12-20', 'Take'),
(7, 27, 'Tutorial 1', '8.00 AM', '10.00 AM', '2024-12-25', 'Take'),
(8, 27, 'Revision ', '1.00 PM', '3.00 PM', '2024-12-23', 'Take'),
(9, 27, 'Section 2', '10.00 AM', '11.00 AM', '2024-12-22', 'Take'),
(10, 27, 'Section 3', '3.00 PM', '4.00 PM', '2024-12-26', 'Take'),
(11, 27, 'Sections recap', '1.00 PM', '3.00 PM', '2024-12-24', 'Take'),
(12, 32, 'Chapter 1', '01.00PM', '03.00PM', '2024-01-01', 'Take'),
(13, 32, 'Introduction ', '2.00', '3.00', '2024-12-28', 'Take'),
(16, 42, 'Section 1', '12.00', '1.30', '2024-12-25', 'Take'),
(17, 42, 'section 2', '1.00PM', '4.00PM', '2024-12-31', 'Take'),
(18, 42, 'Chapter 2', '2.00PM', '3.30PM', '2025-01-02', 'Take'),
(19, 42, 'Assignment 1 ', '8.00', '9.30', '2025-01-03', 'Take'),
(20, 39, 'Introductions', '12.00', '1.00', '2024-12-28', 'Take'),
(21, 39, 'Chapter 1', '9.00', '11.30', '2024-12-29', 'Take'),
(22, 39, 'Assignment 1', '10.00', '11.00', '2024-12-30', 'Take'),
(23, 39, 'Section 1', '1.00', '2.30', '2024-12-30', 'Take'),
(24, 36, 'Introductions', '8.00AM', '9.30AM', '2024-12-30', 'Take'),
(25, 36, 'Section 1', '3.00', '4.00', '2024-12-31', 'Take'),
(26, 36, 'Section 2', '10.00', '11.30', '2025-01-02', 'Take'),
(27, 36, 'Section 3', '2.00', '4.00', '2025-01-03', 'Take'),
(29, 43, 'Chapter 1', '2.00pm', '04.00pm', '2024-12-05', 'Take'),
(30, 43, 'Quiz discussion', '08.00AM', '09.30AM', '2024-12-15', 'Take'),
(31, 43, 'quiz', '2.30PM', '3.00PM', '2024-12-20', 'Take'),
(32, 43, 'Meeting', '12.00AM', '01.30PM', '2024-12-29', 'Take'),
(33, 43, 'Chapter 2', '08.00AM', '09.30AM', '2025-01-02', 'Take'),
(34, 34, 'Chapter 1 (section1)', '12.00AM', '1.30PM', '2024-12-05', 'Take'),
(35, 34, 'Chapter 2', '11.00AM', '12.30PM', '2024-12-20', 'Take'),
(36, 34, 'Chapter 3', '9.30AM', '11.00AM', '2024-12-22', 'Take'),
(37, 34, 'Chapter 3 (2rd section)', '2.30PM', '4.00PM', '2024-12-28', 'Take'),
(38, 35, 'Chapter 1', '12.00AM', '1.30PM', '2024-12-05', 'Take'),
(39, 35, 'Chapter 3 (1st section)', '12.30PM', '01.30PM', '2024-12-15', 'Take'),
(40, 35, 'Chapter 3 finishing', '2.00PM', '3.00PM', '2024-12-30', 'Take'),
(41, 35, 'Chapter 4', '08.00AM', '10.00AM', '2025-01-03', 'Take'),
(42, 43, 'Chapter 4', '1.00PM', '2.00PM', '2025-01-15', 'Take'),
(43, 43, 'Chapter 5', '9.00AM', '11.00AM', '2025-01-15', 'Take'),
(44, 43, 'Chapter 5', '9.00AM', '12.00AM', '2025-01-20', 'Take'),
(45, 29, 'Chapter1', '1.00 PM', '1.45 PM', '2024-12-01', 'Take'),
(46, 29, 'Chapter 2', '12.30 PM', '01.30 PM', '2024-12-09', 'Take'),
(47, 29, 'Chapter 2 (section 2)', '08.00 AM', '10.00AM', '2024-12-20', 'Take'),
(48, 29, 'Quiz', '01.30 PM', '02.45PM', '2024-12-26', 'Take'),
(49, 29, 'Chapter 4', '1.30PM', '3.00PM', '2024-12-31', 'Take'),
(50, 29, 'Chapter 5', '02.30 PM', '04.00 PM', '2025-01-05', 'Take'),
(51, 28, 'Chapter 1', '03.00 PM ', '4.30 PM ', '2024-12-03', 'Not'),
(52, 28, 'Chapter 3', '02.00 PM ', '04.00 PM', '2024-12-20', 'Take'),
(53, 29, 'Chapter 3', '02.30PM', '03.30PM', '2025-01-16', 'Take'),
(54, 39, 'Section 1', '10.00AM', '11.30AM', '2025-01-10', 'Take'),
(55, 39, 'Section 2', '08.00AM', '10.00AM', '2025-01-16', 'Take'),
(56, 39, 'Section 3', '12.00PM', '1.30PM', '2025-01-20', 'Take'),
(57, 37, 'Chapter 1', '3.00PM', '5.00PM', '2025-01-05', 'Take'),
(58, 39, 'Chapter 3', '1.30PM', '2.30PM', '2025-01-29', 'Take'),
(59, 36, 'Section 3 continue', '02.30PM', '04.30PM', '2025-01-02', 'Take'),
(60, 36, 'Chapter 3', '11.00AM', '12.30PM', '2025-01-05', 'Take'),
(61, 36, 'Chapter 4', '12.00PM', '1.30PM', '2021-01-10', 'Take'),
(62, 36, 'Quiz and Explanation', '08.00AM', '10.30AM', '2025-01-22', 'Take'),
(63, 36, 'Chapter 4', '2.00PM', '3.00PM', '2025-01-25', 'Take'),
(64, 36, 'Section 3 Quiz', '01.00PM', '02.00PM', '2025-01-20', 'Take'),
(65, 41, 'Section1', '12.00AM', '1.00PM', '2025-01-02', 'Take'),
(66, 43, 'Chapter 7', '01.00PM', '02.00PM', '2025-01-22', 'Not'),
(67, 43, 'Chapter 6', '01.00PM', '02.00PM', '2025-01-22', 'Not'),
(68, 43, 'Section 10', '01.00PM', '02.00PM', '2025-01-25', 'Not');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Email` varchar(100) NOT NULL,
  `userType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Email`, `userType`) VALUES
('2020e005@eng.jfn.ac.lk', 'Student'),
('2020e006@eng.jfn.ac.lk', 'Student'),
('2020e007@eng.jfn.ac.lk', 'Student'),
('2020e008@eng.jfn.ac.lk', 'Student'),
('2020e009@eng.jfn.ac.lk', 'Student'),
('2020e010@eng.jfn.ac.lk', 'Student'),
('2020e012@eng.jfn.ac.lk', 'Student'),
('2020e013@eng.jfn.ac.lk', 'Student'),
('2020e014@eng.jfn.ac.lk', 'Student'),
('2020e015@eng.jfn.ac.lk', 'Student'),
('2020e016@eng.jfn.ac.lk', 'Student'),
('2020e017@eng.jfn.ac.lk', 'Student'),
('2020e019@eng.jfn.ac.lk', 'Student'),
('2020e020@eng.jfn.ac.lk', 'Student'),
('2020e022@eng.jfn.ac.lk', 'Student'),
('2020e024@eng.jfn.ac.lk', 'Student'),
('2020e025@eng.jfn.ac.lk', 'Student'),
('2020e026@eng.jfn.ac.lk', 'Student'),
('2020e027@eng.jfn.ac.lk', 'Student'),
('2020e028@eng.jfn.ac.lk', 'Student'),
('2020e029@eng.jfn.ac.lk', 'Student'),
('2020e030@eng.jfn.ac.lk', 'Student'),
('2020e031@eng.jfn.ac.lk', 'Student'),
('2020e032@eng.jfn.ac.lk', 'Student'),
('2020e033@eng.jfn.ac.lk', 'Student'),
('2020e034@eng.jfn.ac.lk', 'Student'),
('2020e035@eng.jfn.ac.lk', 'Student'),
('2020e036@eng.jfn.ac.lk', 'Student'),
('2020e037@eng.jfn.ac.lk', 'Student'),
('2020e038@eng.jfn.ac.lk', 'Student'),
('2021e001@eng.jfn.ac.lk', 'Student'),
('2021e002@eng.jfn.ac.lk', 'Student'),
('2021e003@eng.jfn.ac.lk', 'Student'),
('2021e004@eng.jfn.ac.lk', 'Student'),
('2021e005@eng.jfn.ac.lk', 'Student'),
('2021e006@eng.jfn.ac.lk', 'Student'),
('2021e007@eng.jfn.ac.lk', 'Student'),
('2021e008@eng.jfn.ac.lk', 'Student'),
('2021e009@eng.jfn.ac.lk', 'Student'),
('2021e010@eng.jfn.ac.lk', 'Student'),
('2021e011@eng.jfn.ac.lk', 'Student'),
('2021e012@eng.jfn.ac.lk', 'Student'),
('2021e013@eng.jfn.ac.lk', 'Student'),
('2021e014@eng.jfn.ac.lk', 'Student'),
('2021e015@eng.jfn.ac.lk', 'Student'),
('2021e016@eng.jfn.ac.lk', 'Student'),
('2021e017@eng.jfn.ac.lk', 'Student'),
('2021e018@eng.jfn.ac.lk', 'Student'),
('2021e019@eng.jfn.ac.lk', 'Student'),
('2021e020@eng.jfn.ac.lk', 'Student'),
('2021e021@eng.jfn.ac.lk', 'Student'),
('2021e022@eng.jfn.ac.lk', 'Student'),
('2021e023@eng.jfn.ac.lk', 'Student'),
('2021e024@eng.jfn.ac.lk', 'Student'),
('2021e025@eng.jfn.ac.lk', 'Student'),
('2021e026@eng.jfn.ac.lk', 'Student'),
('2021e027@eng.jfn.ac.lk', 'Student'),
('2021e028@eng.jfn.ac.lk', 'Student'),
('2021e029@eng.jfn.ac.lk', 'Student'),
('2021e030@eng.jfn.ac.lk', 'Student'),
('2022e001@eng.jfn.ac.lk', 'Student'),
('2022e002@eng.jfn.ac.lk', 'Student'),
('2022e003@eng.jfn.ac.lk', 'Student'),
('2022e004@eng.jfn.ac.lk', 'Student'),
('2022e005@eng.jfn.ac.lk', 'Student'),
('2022e006@eng.jfn.ac.lk', 'Student'),
('2022e007@eng.jfn.ac.lk', 'Student'),
('2022e008@eng.jfn.ac.lk', 'Student'),
('2022e009@eng.jfn.ac.lk', 'Student'),
('2022e010@eng.jfn.ac.lk', 'Student'),
('2022e011@eng.jfn.ac.lk', 'Student'),
('2022e012@eng.jfn.ac.lk', 'Student'),
('2022e013@eng.jfn.ac.lk', 'Student'),
('2022e014@eng.jfn.ac.lk', 'Student'),
('2022e015@eng.jfn.ac.lk', 'Student'),
('2022e016@eng.jfn.ac.lk', 'Student'),
('2022e017@eng.jfn.ac.lk', 'Student'),
('2022e018@eng.jfn.ac.lk', 'Student'),
('2022e019@eng.jfn.ac.lk', 'Student'),
('2022e020@eng.jfn.ac.lk', 'Student'),
('2022e021@eng.jfn.ac.lk', 'Student'),
('2022e022@eng.jfn.ac.lk', 'Student'),
('2022e023@eng.jfn.ac.lk', 'Student'),
('2022e024@eng.jfn.ac.lk', 'Student'),
('2022e025@eng.jfn.ac.lk', 'Student'),
('2022e026@eng.jfn.ac.lk', 'Student'),
('2022e027@eng.jfn.ac.lk', 'Student'),
('2022e028@eng.jfn.ac.lk', 'Student'),
('2022e029@eng.jfn.ac.lk', 'Student'),
('2022e030@eng.jfn.ac.lk', 'Student'),
('anantharajah.kaneswaran@eng.jfn.ac.lk', 'Lecturer'),
('arulampalam.atputharajah@eng.jfn.ac.lk', 'Lecturer'),
('arulanantham.anburuvel@eng.jfn.ac.lk', 'Lecturer'),
('balachandran.ketheesan@eng.jfn.ac.lk', 'Lecturer'),
('balasubramaniyam.janarthanan@eng.jfn.ac.lk', 'Lecturer'),
('daniel.subramaniyiam@eng.jfn.ac.lk', 'Lecturer'),
('jananie.segar@eng.jfn.ac.lk', 'Lecturer'),
('kanagasundaram.ahilan@eng.jfn.ac.lk', 'Lecturer'),
('kandasamy.pirapaharan@eng.jfn.ac.lk', 'Lecturer'),
('ma1234@eng.jfn.ac.lk', 'MA'),
('navaratnarajah.sathiparan@eng.jfn.ac.lk', 'Lecturer'),
('padmanathan.kathirgamanathan@eng.jfn.ac.lk', 'Lecturer'),
('pradeeba.jeyananthan@eng.jfn.ac.lk', 'Lecturer'),
('saliya.sampath@eng.jfn.ac.lk', 'Lecturer'),
('siventhirarajah.krishnya@eng.jfn.ac.lk', 'Lecturer'),
('subramaniyam.sivakumar@eng.jfn.ac.lk', 'Lecturer'),
('suloshini.purusoththaman@eng.jfn.ac.lk', 'Lecturer'),
('test123@eng.jfn.ac.lk', 'Lecturer'),
('tharmakulasingham.mukunthan@eng.jfn.ac.lk', 'Lecturer'),
('tharmarajah.thiruvaran@eng.jfn.ac.lk', 'Lecturer'),
('tharshika.thanihaichelvan@eng.jfn.ac.lk', 'Lecturer'),
('thevarajah.mayooran@eng.jfn.ac.lk', 'Lecturer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocation_1`
--
ALTER TABLE `allocation_1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_2`
--
ALTER TABLE `allocation_2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_3`
--
ALTER TABLE `allocation_3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_7`
--
ALTER TABLE `allocation_7`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_8`
--
ALTER TABLE `allocation_8`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_9`
--
ALTER TABLE `allocation_9`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_10`
--
ALTER TABLE `allocation_10`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_11`
--
ALTER TABLE `allocation_11`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_12`
--
ALTER TABLE `allocation_12`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_13`
--
ALTER TABLE `allocation_13`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_14`
--
ALTER TABLE `allocation_14`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_15`
--
ALTER TABLE `allocation_15`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_16`
--
ALTER TABLE `allocation_16`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_17`
--
ALTER TABLE `allocation_17`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_18`
--
ALTER TABLE `allocation_18`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_19`
--
ALTER TABLE `allocation_19`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_20`
--
ALTER TABLE `allocation_20`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_21`
--
ALTER TABLE `allocation_21`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_22`
--
ALTER TABLE `allocation_22`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_23`
--
ALTER TABLE `allocation_23`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_24`
--
ALTER TABLE `allocation_24`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_25`
--
ALTER TABLE `allocation_25`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_26`
--
ALTER TABLE `allocation_26`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_27`
--
ALTER TABLE `allocation_27`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_28`
--
ALTER TABLE `allocation_28`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_29`
--
ALTER TABLE `allocation_29`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_30`
--
ALTER TABLE `allocation_30`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_31`
--
ALTER TABLE `allocation_31`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_32`
--
ALTER TABLE `allocation_32`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_34`
--
ALTER TABLE `allocation_34`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_35`
--
ALTER TABLE `allocation_35`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_36`
--
ALTER TABLE `allocation_36`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_37`
--
ALTER TABLE `allocation_37`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_38`
--
ALTER TABLE `allocation_38`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_39`
--
ALTER TABLE `allocation_39`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_40`
--
ALTER TABLE `allocation_40`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_41`
--
ALTER TABLE `allocation_41`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_42`
--
ALTER TABLE `allocation_42`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_43`
--
ALTER TABLE `allocation_43`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_44`
--
ALTER TABLE `allocation_44`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_45`
--
ALTER TABLE `allocation_45`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_46`
--
ALTER TABLE `allocation_46`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_47`
--
ALTER TABLE `allocation_47`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_48`
--
ALTER TABLE `allocation_48`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_49`
--
ALTER TABLE `allocation_49`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_50`
--
ALTER TABLE `allocation_50`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_51`
--
ALTER TABLE `allocation_51`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_52`
--
ALTER TABLE `allocation_52`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_53`
--
ALTER TABLE `allocation_53`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_54`
--
ALTER TABLE `allocation_54`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `allocation_55`
--
ALTER TABLE `allocation_55`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD KEY `Semester_index` (`Semester`);

--
-- Indexes for table `courseallocation`
--
ALTER TABLE `courseallocation`
  ADD PRIMARY KEY (`AllocationID`,`CourseCode`,`Lecture-ID`,`Batch`),
  ADD KEY `year_index` (`AcademicYear`);

--
-- Indexes for table `ma`
--
ALTER TABLE `ma`
  ADD PRIMARY KEY (`MA-ID`,`Email`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`RegNo`,`Email`),
  ADD KEY `batch_index` (`Batch`);

--
-- Indexes for table `timeschedule`
--
ALTER TABLE `timeschedule`
  ADD PRIMARY KEY (`ScheduleID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allocation_1`
--
ALTER TABLE `allocation_1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_2`
--
ALTER TABLE `allocation_2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_3`
--
ALTER TABLE `allocation_3`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_7`
--
ALTER TABLE `allocation_7`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_8`
--
ALTER TABLE `allocation_8`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_9`
--
ALTER TABLE `allocation_9`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_10`
--
ALTER TABLE `allocation_10`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_11`
--
ALTER TABLE `allocation_11`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_12`
--
ALTER TABLE `allocation_12`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_13`
--
ALTER TABLE `allocation_13`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_14`
--
ALTER TABLE `allocation_14`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_15`
--
ALTER TABLE `allocation_15`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_16`
--
ALTER TABLE `allocation_16`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_17`
--
ALTER TABLE `allocation_17`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_18`
--
ALTER TABLE `allocation_18`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_19`
--
ALTER TABLE `allocation_19`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_20`
--
ALTER TABLE `allocation_20`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_21`
--
ALTER TABLE `allocation_21`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_22`
--
ALTER TABLE `allocation_22`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_23`
--
ALTER TABLE `allocation_23`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_24`
--
ALTER TABLE `allocation_24`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_25`
--
ALTER TABLE `allocation_25`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_26`
--
ALTER TABLE `allocation_26`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_27`
--
ALTER TABLE `allocation_27`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_28`
--
ALTER TABLE `allocation_28`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_29`
--
ALTER TABLE `allocation_29`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_30`
--
ALTER TABLE `allocation_30`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_31`
--
ALTER TABLE `allocation_31`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_32`
--
ALTER TABLE `allocation_32`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_34`
--
ALTER TABLE `allocation_34`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_35`
--
ALTER TABLE `allocation_35`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_36`
--
ALTER TABLE `allocation_36`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_37`
--
ALTER TABLE `allocation_37`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_38`
--
ALTER TABLE `allocation_38`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_39`
--
ALTER TABLE `allocation_39`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_40`
--
ALTER TABLE `allocation_40`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_41`
--
ALTER TABLE `allocation_41`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_42`
--
ALTER TABLE `allocation_42`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `allocation_43`
--
ALTER TABLE `allocation_43`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `allocation_44`
--
ALTER TABLE `allocation_44`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `allocation_45`
--
ALTER TABLE `allocation_45`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `allocation_46`
--
ALTER TABLE `allocation_46`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `allocation_47`
--
ALTER TABLE `allocation_47`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `allocation_48`
--
ALTER TABLE `allocation_48`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `allocation_49`
--
ALTER TABLE `allocation_49`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `allocation_50`
--
ALTER TABLE `allocation_50`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `allocation_51`
--
ALTER TABLE `allocation_51`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `allocation_52`
--
ALTER TABLE `allocation_52`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `allocation_53`
--
ALTER TABLE `allocation_53`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `allocation_54`
--
ALTER TABLE `allocation_54`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `allocation_55`
--
ALTER TABLE `allocation_55`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `courseallocation`
--
ALTER TABLE `courseallocation`
  MODIFY `AllocationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `timeschedule`
--
ALTER TABLE `timeschedule`
  MODIFY `ScheduleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
