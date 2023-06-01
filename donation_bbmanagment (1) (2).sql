-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 02:32 AM
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
-- Database: `donation&bbmanagment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Id_app` int(10) NOT NULL,
  `date_app` datetime NOT NULL,
  `description_app` text NOT NULL,
  `Id_donor` int(10) NOT NULL,
  `Id_doctor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bbrequest`
--

CREATE TABLE `bbrequest` (
  `Id_bbReq` int(10) NOT NULL,
  `date_bbReq` date NOT NULL,
  `bloodGrp_seeker` varchar(3) NOT NULL,
  `type_bb` text NOT NULL,
  `qty` int(2) NOT NULL,
  `Id_hospital` int(10) NOT NULL,
  `Id_seeker` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bloodbag`
--

CREATE TABLE `bloodbag` (
  `code_bb` varchar(15) NOT NULL,
  `bloodGrp_donor` varchar(3) NOT NULL,
  `vol_bb` int(4) NOT NULL,
  `status_bb` text NOT NULL,
  `date_don` datetime NOT NULL,
  `date_exp` datetime NOT NULL,
  `type_bb` text NOT NULL,
  `Id_donor` int(10) NOT NULL,
  `Id_result` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comptest`
--

CREATE TABLE `comptest` (
  `Id_comptest` int(10) NOT NULL,
  `date_comptest` datetime NOT NULL,
  `result` tinyint(1) NOT NULL,
  `code_bb` varchar(15) NOT NULL,
  `Id_seeker` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `code_bb` varchar(15) NOT NULL,
  `Id_bbReq` int(10) NOT NULL,
  `date_delivery` date NOT NULL,
  `qty` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Id_doctor` int(10) NOT NULL,
  `password_doctor` int(10) NOT NULL,
  `fullName_doctor` varchar(20) NOT NULL,
  `gender_doctor` tinyint(1) NOT NULL,
  `birthDate_doctor` date NOT NULL,
  `tel_doctor` int(10) NOT NULL,
  `email_doctor` varchar(30) NOT NULL,
  `doctor_validation` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `Id_donor` int(10) NOT NULL,
  `password_donor` int(10) NOT NULL,
  `fullName_donor` varchar(20) NOT NULL,
  `birthDate_donor` date NOT NULL,
  `gender_donor` tinyint(1) NOT NULL,
  `bloodGrp_donor` varchar(3) NOT NULL,
  `email_donor` varchar(30) NOT NULL,
  `tel_donor` int(10) NOT NULL,
  `adress_donor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `Id_hospital` int(10) NOT NULL,
  `password_hospital` int(10) NOT NULL,
  `name_hospital` varchar(20) NOT NULL,
  `adress_hospital` varchar(20) NOT NULL,
  `email_hospital` varchar(30) NOT NULL,
  `type_hospital` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `labtech`
--

CREATE TABLE `labtech` (
  `Id_labTech` int(10) NOT NULL,
  `password_labTech` int(10) NOT NULL,
  `fullName_labTech` varchar(20) NOT NULL,
  `gender_labTech` tinyint(1) NOT NULL,
  `birthDate_labtech` date NOT NULL,
  `tel_labTech` int(10) NOT NULL,
  `email_labTech` varchar(30) NOT NULL,
  `response_labTech` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicalrecord`
--

CREATE TABLE `medicalrecord` (
  `Id_medrec` int(10) NOT NULL,
  `tension` int(3) NOT NULL,
  `weight` int(3) NOT NULL,
  `temperature` int(2) NOT NULL,
  `type_don` tinyint(1) NOT NULL,
  `other_exams` varchar(10) NOT NULL,
  `date_medrec` datetime NOT NULL,
  `last_don` datetime NOT NULL,
  `doctor_validation` tinyint(1) NOT NULL,
  `type_bb` text NOT NULL,
  `Id_donor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Id_result` int(10) NOT NULL,
  `date_analyse` datetime NOT NULL,
  `immuno_test` longtext NOT NULL,
  `hemato_test` longtext NOT NULL,
  `hcv_test` tinyint(1) NOT NULL,
  `hiv_test` tinyint(1) NOT NULL,
  `tpha_test` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `code_bb` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seeker`
--

CREATE TABLE `seeker` (
  `Id_seeker` int(10) NOT NULL,
  `password_seeker` int(10) NOT NULL,
  `fullName_seeker` varchar(20) NOT NULL,
  `birthDate_seeker` date NOT NULL,
  `gender_seeker` tinyint(1) NOT NULL,
  `bloodGrp_seeker` varchar(3) NOT NULL,
  `email_seeker` varchar(30) NOT NULL,
  `tel_seeker` int(10) NOT NULL,
  `adress_seeker` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Id_app`),
  ADD UNIQUE KEY `Id_donor` (`Id_donor`,`Id_doctor`),
  ADD KEY `Id_doctor` (`Id_doctor`);

--
-- Indexes for table `bbrequest`
--
ALTER TABLE `bbrequest`
  ADD PRIMARY KEY (`Id_bbReq`),
  ADD UNIQUE KEY `bloodGrp_seeker` (`bloodGrp_seeker`,`type_bb`,`Id_hospital`,`Id_seeker`) USING HASH,
  ADD KEY `Id_seeker` (`Id_seeker`),
  ADD KEY `Id_doctor` (`Id_hospital`);

--
-- Indexes for table `bloodbag`
--
ALTER TABLE `bloodbag`
  ADD PRIMARY KEY (`code_bb`),
  ADD UNIQUE KEY `Id_donor` (`Id_donor`,`Id_result`),
  ADD UNIQUE KEY `bloodGrp_donor` (`bloodGrp_donor`),
  ADD KEY `Id_result` (`Id_result`);

--
-- Indexes for table `comptest`
--
ALTER TABLE `comptest`
  ADD PRIMARY KEY (`Id_comptest`),
  ADD UNIQUE KEY `code_bb` (`code_bb`,`Id_seeker`),
  ADD KEY `Id_seeker` (`Id_seeker`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`code_bb`,`Id_bbReq`),
  ADD UNIQUE KEY `code_bb` (`code_bb`,`Id_bbReq`),
  ADD KEY `Id_bbreq` (`Id_bbReq`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Id_doctor`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`Id_donor`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`Id_hospital`);

--
-- Indexes for table `labtech`
--
ALTER TABLE `labtech`
  ADD PRIMARY KEY (`Id_labTech`);

--
-- Indexes for table `medicalrecord`
--
ALTER TABLE `medicalrecord`
  ADD PRIMARY KEY (`Id_medrec`),
  ADD UNIQUE KEY `Id_donor` (`Id_donor`),
  ADD UNIQUE KEY `Id_donor_2` (`Id_donor`),
  ADD UNIQUE KEY `doctor_validation` (`doctor_validation`,`type_bb`) USING HASH;

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`Id_result`),
  ADD UNIQUE KEY `code_bb` (`code_bb`),
  ADD UNIQUE KEY `code_bb_2` (`code_bb`);

--
-- Indexes for table `seeker`
--
ALTER TABLE `seeker`
  ADD PRIMARY KEY (`Id_seeker`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`Id_doctor`) REFERENCES `doctor` (`Id_doctor`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`Id_donor`) REFERENCES `donor` (`Id_donor`);

--
-- Constraints for table `bbrequest`
--
ALTER TABLE `bbrequest`
  ADD CONSTRAINT `bbrequest_ibfk_1` FOREIGN KEY (`Id_seeker`) REFERENCES `seeker` (`Id_seeker`),
  ADD CONSTRAINT `bbrequest_ibfk_2` FOREIGN KEY (`Id_hospital`) REFERENCES `hospital` (`Id_hospital`);

--
-- Constraints for table `bloodbag`
--
ALTER TABLE `bloodbag`
  ADD CONSTRAINT `bloodbag_ibfk_1` FOREIGN KEY (`Id_donor`) REFERENCES `donor` (`Id_donor`);

--
-- Constraints for table `comptest`
--
ALTER TABLE `comptest`
  ADD CONSTRAINT `comptest_ibfk_1` FOREIGN KEY (`code_bb`) REFERENCES `bloodbag` (`code_bb`),
  ADD CONSTRAINT `comptest_ibfk_2` FOREIGN KEY (`Id_seeker`) REFERENCES `seeker` (`Id_seeker`);

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`code_bb`) REFERENCES `bloodbag` (`code_bb`),
  ADD CONSTRAINT `delivery_ibfk_2` FOREIGN KEY (`Id_bbreq`) REFERENCES `bbrequest` (`Id_bbreq`);

--
-- Constraints for table `medicalrecord`
--
ALTER TABLE `medicalrecord`
  ADD CONSTRAINT `medicalrecord_ibfk_1` FOREIGN KEY (`Id_donor`) REFERENCES `donor` (`Id_donor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
