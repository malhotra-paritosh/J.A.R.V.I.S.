-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 04:47 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_data`
--

CREATE TABLE `car_data` (
  `ID` varchar(20) DEFAULT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `TypeofVehicle` text NOT NULL,
  `Vehicle_Manufacturer` text NOT NULL,
  `RC_Number` varchar(200) NOT NULL,
  `Vehicle_Name` text NOT NULL,
  `Accepted` tinyint(1) DEFAULT NULL,
  `RC_Photocpy` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_data`
--

INSERT INTO `car_data` (`ID`, `Designation`, `TypeofVehicle`, `Vehicle_Manufacturer`, `RC_Number`, `Vehicle_Name`, `Accepted`, `RC_Photocpy`) VALUES
('16103069', 'Student', 'Bike', 'Hero', '12532', 'Karizma ZMR', NULL, NULL),
('16103072', 'Student', 'Bike', 'Honda', '535', 'Pulsar 220', NULL, NULL),
('16103069', 'Student', 'Car', 'Cheverlet', '6834354', 'Sail', NULL, NULL),
('16103062', 'Student', 'Car', 'MAruti', '67889', 'Sx', NULL, NULL),
('16103072', 'Student', 'Car', 'Audi', '235636', 'Q8', NULL, NULL),
(NULL, NULL, 'Car', 'MAruti', '696969', 'Brezza Sx4', NULL, NULL),
(NULL, NULL, 'Car', 'Ford', '123456789', 'Figo', NULL, ''),
(NULL, NULL, 'Car', 'Ford', '123456789', 'Figo', NULL, ''),
(NULL, NULL, 'Car', 'Ford', '12356789', 'Figo', NULL, ''),
(NULL, NULL, 'Car', 'Ford', '12356789', 'Figo', NULL, ''),
(NULL, NULL, 'Car', 'Ford', '12356789', 'Figo', NULL, ''),
(NULL, NULL, 'Car', 'Audi ', '123456789', 'Q7', NULL, ''),
(NULL, NULL, 'Car', 'Audi ', '123456789', 'Q7', NULL, '[BLOB-44B]'),
(NULL, NULL, 'Car', 'AUDI', '12345679', 'Q7', NULL, '[BLOB-44B]'),
(NULL, NULL, 'Car', 'Ford', '125412541', 'FIGO', NULL, '[BLOB-44B]');

-- --------------------------------------------------------

--
-- Table structure for table `registration_data`
--

CREATE TABLE `registration_data` (
  `ID` varchar(20) DEFAULT NULL,
  `name` text NOT NULL,
  `father_name` text NOT NULL,
  `gender` text NOT NULL,
  `mobn` int(11) NOT NULL,
  `phychl` text NOT NULL,
  `dob` date NOT NULL,
  `faddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_data`
--

INSERT INTO `registration_data` (`ID`, `name`, `father_name`, `gender`, `mobn`, `phychl`, `dob`, `faddress`) VALUES
('16103069', 'Vaibhav Setia', 'Nitin kashyap', 'Male', 2147483647, 'No', '1998-08-02', '2165:Pink Rose Enclave, Sector 49-D,Chandigarh'),
('16102069', 'Sanya Setia', 'Paritosh Malhotra', 'FeMale', 2147483647, 'No', '0000-00-00', '2165, Green Rose Enclave, Sector 39-D,Chandigarh'),
('16103072', 'NItin Kashyap', 'Shiv Dayal', 'Male', 2147483647, 'No', '1998-03-04', 'Gurdaspur, Chandigarh'),
('16103062', 'Paritosh Malhotra', 'Anurag Malhotra', 'Male', 2147483647, 'No', '1998-02-14', '1429, Sector 15, Panchkula'),
(NULL, '', '', 'Male', 0, 'Yes', '0000-00-00', ''),
(NULL, '', '', 'Male', 0, 'Yes', '0000-00-00', ''),
(NULL, '', '', 'Male', 0, 'Yes', '0000-00-00', ''),
(NULL, '', '', 'Male', 0, 'Yes', '0000-00-00', ''),
(NULL, 'Shubam Bharti', '_', 'Male', 1235469870, 'No', '1998-09-28', 'Dasuya ');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `sid` int(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `sid`, `name`, `password`, `email`) VALUES
(1, 16103069, 'Vaibhav', '16103069', 'vaibhavwimpsta@gmail.com'),
(2, 1, 'user 1', '1', ''),
(3, 2, 'user 2', '3', ''),
(4, 16103072, 'Nitin Kashyap', '16103072', 'nitinkashyap.becse16@pec.edu.in');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `image` blob NOT NULL,
  `SID` int(8) NOT NULL,
  `SID_Photocopy` blob NOT NULL,
  `Course` text NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`image`, `SID`, `SID_Photocopy`, `Course`, `Name`) VALUES
(0x32303137313032375f313834383536202d20436f70792e6a7067, 16103072, 0x576861747341707020496d61676520323031382d31322d303320617420382e34352e333620504d2e6a706567, 'B.Tech.', 'Nitin Kashyap'),
('', 0, '', 'B.Tech.', ''),
(0x7069632e6a7067, 16103082, 0x7469746c655f5957435f6f72672e706e67, 'M.Tech.', 'Shubam Bharti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
