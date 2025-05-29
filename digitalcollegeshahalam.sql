-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 05:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalcollegeshahalam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbmi`
--

CREATE TABLE `tblbmi` (
  `IDBMI` varchar(11) NOT NULL,
  `IDPELAJAR` varchar(12) NOT NULL,
  `BERAT` int(30) NOT NULL,
  `TINGGI` int(30) NOT NULL,
  `TARIKH` date NOT NULL,
  `IDGURU` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbmi`
--

INSERT INTO `tblbmi` (`IDBMI`, `IDPELAJAR`, `BERAT`, `TINGGI`, `TARIKH`, `IDGURU`) VALUES
('1', '040422036767', 53, 161, '2017-03-17', 'sue77'),
('2', '041112035548', 45, 154, '2017-07-10', 'iza84'),
('3', '050607125023', 60, 165, '2017-12-19', 'sue77');

-- --------------------------------------------------------

--
-- Table structure for table `tblguru`
--

CREATE TABLE `tblguru` (
  `IDGURU` varchar(5) NOT NULL,
  `NAMAGURU` varchar(30) NOT NULL,
  `PASSWORD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblguru`
--

INSERT INTO `tblguru` (`IDGURU`, `NAMAGURU`, `PASSWORD`) VALUES
('iza84', 'IZAMAN BIN ALI', 123456),
('mad85', 'AHMAD BIN DAUD', 123456),
('sue77', 'SUHAIMI BIN YUSOFF', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `tblpelajar`
--

CREATE TABLE `tblpelajar` (
  `IDPELAJAR` varchar(12) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `JANTINA` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpelajar`
--

INSERT INTO `tblpelajar` (`IDPELAJAR`, `NAMA`, `JANTINA`) VALUES
('040422036767', 'MOHAMAD ARIF BIN SHUKRI', 'L'),
('041112035548', 'NUR ARIZA BINTI EMMI', 'P'),
('04120803534', 'HAIKAL DANIEL BIN AZMAN', 'L'),
('050607125023', 'FARHANA BINTI OTHMAN', 'P');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbmi`
--
ALTER TABLE `tblbmi`
  ADD PRIMARY KEY (`IDBMI`),
  ADD KEY `fk_tblbmi_tblpelajar` (`IDPELAJAR`),
  ADD KEY `fk_tblbmi_tblguru` (`IDGURU`);

--
-- Indexes for table `tblguru`
--
ALTER TABLE `tblguru`
  ADD PRIMARY KEY (`IDGURU`);

--
-- Indexes for table `tblpelajar`
--
ALTER TABLE `tblpelajar`
  ADD PRIMARY KEY (`IDPELAJAR`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblbmi`
--
ALTER TABLE `tblbmi`
  ADD CONSTRAINT `fk_tblbmi_tblguru` FOREIGN KEY (`IDGURU`) REFERENCES `tblguru` (`IDGURU`),
  ADD CONSTRAINT `fk_tblbmi_tblpelajar` FOREIGN KEY (`IDPELAJAR`) REFERENCES `tblpelajar` (`IDPELAJAR`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
