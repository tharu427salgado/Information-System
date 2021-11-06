-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 06:18 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grama_niladhari`
--

-- --------------------------------------------------------

--
-- Table structure for table `electoral_district`
--

CREATE TABLE `electoral_district` (
  `Grama_Niladhari_Division` varchar(50) NOT NULL,
  `Grama_Niladari_Division_Num` int(11) NOT NULL,
  `Polling_Division` varchar(20) NOT NULL,
  `Polling_District_Num` int(20) NOT NULL,
  `Electoral_District` varchar(20) NOT NULL,
  `Village_Street_or_Estate` varchar(100) NOT NULL,
  `Household_Number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electoral_district`
--

INSERT INTO `electoral_district` (`Grama_Niladhari_Division`, `Grama_Niladari_Division_Num`, `Polling_Division`, `Polling_District_Num`, `Electoral_District`, `Village_Street_or_Estate`, `Household_Number`) VALUES
('Boralesgamuwa', 0, '', 0, '', 'Thumbowila', 1),
('Boralesgamuwa', 0, '', 0, '', 'Thumbowila', 2),
('badulla', 1, '2', 0, 'badulla', 'uduwara', 5),
('grgrgbrg', 8, 'grgrg', 8, 'gbfdbgsrg', 'gedsgverg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `house_holder`
--

CREATE TABLE `house_holder` (
  `householdernum` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `id` int(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member_details`
--

CREATE TABLE `member_details` (
  `Grama_Division` varchar(100) NOT NULL,
  `Village` varchar(100) NOT NULL,
  `HouseNumber` int(255) NOT NULL,
  `Occuapnt_Name` varchar(255) NOT NULL,
  `Occupant_NIC` int(11) NOT NULL,
  `Occupant_DOB` date DEFAULT NULL,
  `Occupant_Gender` varchar(6) NOT NULL,
  `Occupant_Telno` int(10) NOT NULL,
  `Occupant_SriLankan` varchar(30) NOT NULL,
  `Name_mem1` varchar(255) NOT NULL,
  `NIC_mem1` varchar(11) NOT NULL,
  `DOB_mem1` date DEFAULT NULL,
  `Gender_mem1` varchar(100) NOT NULL,
  `Telno_mem1` varchar(10) NOT NULL,
  `Relationship_mem1` varchar(100) NOT NULL,
  `SriLankan_mem1` varchar(100) NOT NULL,
  `Name_mem2` varchar(255) NOT NULL,
  `NIC_mem2` varchar(11) NOT NULL,
  `DOB_mem2` date DEFAULT NULL,
  `Gender_mem2` varchar(20) NOT NULL,
  `Telno_mem2` varchar(10) NOT NULL,
  `Relationship_mem2` varchar(100) NOT NULL,
  `SriLankan_mem2` varchar(11) NOT NULL,
  `Name_mem3` varchar(255) NOT NULL,
  `NIC_mem3` varchar(11) NOT NULL,
  `DOB_mem3` date DEFAULT NULL,
  `Gender_mem3` varchar(35) NOT NULL,
  `TelNo_mem3` varchar(10) NOT NULL,
  `Relationship_mem3` varchar(100) NOT NULL,
  `SriLankan_mem3` varchar(100) NOT NULL,
  `Noof_members` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Date` date DEFAULT NULL,
  `Notes` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_details`
--

INSERT INTO `member_details` (`Grama_Division`, `Village`, `HouseNumber`, `Occuapnt_Name`, `Occupant_NIC`, `Occupant_DOB`, `Occupant_Gender`, `Occupant_Telno`, `Occupant_SriLankan`, `Name_mem1`, `NIC_mem1`, `DOB_mem1`, `Gender_mem1`, `Telno_mem1`, `Relationship_mem1`, `SriLankan_mem1`, `Name_mem2`, `NIC_mem2`, `DOB_mem2`, `Gender_mem2`, `Telno_mem2`, `Relationship_mem2`, `SriLankan_mem2`, `Name_mem3`, `NIC_mem3`, `DOB_mem3`, `Gender_mem3`, `TelNo_mem3`, `Relationship_mem3`, `SriLankan_mem3`, `Noof_members`, `Address`, `Date`, `Notes`) VALUES
('Maharagama', 'Pannipitya', 4, 'dsfdfsf', 45124578, '2021-02-03', 'Female', 714545456, 'Yes', '', '', '1970-01-01', 'Male', '', '', 'Yes', '', '', '1970-01-01', 'Male', '', '', 'Yes', '', '', '1970-01-01', 'Male', '', '', 'Yes', '1', 'Colombo', '1970-01-01', 'Nothing');

-- --------------------------------------------------------

--
-- Table structure for table `new_elector`
--

CREATE TABLE `new_elector` (
  `householdnum` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `NIC` int(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_elector`
--

INSERT INTO `new_elector` (`householdnum`, `address`, `name`, `NIC`, `dob`, `gender`) VALUES
(1, 'Mattegoda', 'Malshan Samarasekara', 159632478, '1998-07-12', 'Male'),
(2, 'Panadura', 'Tharushi Salgado', 987456123, '2000-04-27', 'Female'),
(5, 'Rathmalana', 'Mala Silva', 963258741, '1965-06-21', 'Female'),
(8, 'Katubedda', 'Nadun Prabodha', 147852369, '2003-08-27', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `User_Name` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`User_Name`, `email`, `password`) VALUES
('kdfj', '1236', 'Tangalla'),
('smith', 'smith@gmail.com', 'smith123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `electoral_district`
--
ALTER TABLE `electoral_district`
  ADD PRIMARY KEY (`Household_Number`),
  ADD UNIQUE KEY `Household_Number` (`Household_Number`);

--
-- Indexes for table `house_holder`
--
ALTER TABLE `house_holder`
  ADD PRIMARY KEY (`householdernum`);

--
-- Indexes for table `member_details`
--
ALTER TABLE `member_details`
  ADD PRIMARY KEY (`HouseNumber`);

--
-- Indexes for table `new_elector`
--
ALTER TABLE `new_elector`
  ADD PRIMARY KEY (`householdnum`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`User_Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
