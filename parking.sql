-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 11:42 PM
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
  `SID` varchar(200) NOT NULL,
  `TypeofVehicle` text NOT NULL,
  `Vehicle_Manufacturer` text NOT NULL,
  `RC_Number` varchar(200) NOT NULL,
  `Vehicle_Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_data`
--

INSERT INTO `car_data` (`SID`, `TypeofVehicle`, `Vehicle_Manufacturer`, `RC_Number`, `Vehicle_Name`) VALUES
('', 'Bike', 'hero', '12532', 'krizma ZMR');

-- --------------------------------------------------------

--
-- Table structure for table `registration_data`
--

CREATE TABLE `registration_data` (
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

INSERT INTO `registration_data` (`name`, `father_name`, `gender`, `mobn`, `phychl`, `dob`, `faddress`) VALUES
('Vaibhav Setia', 'Nitin kashyap', 'Male', 2147483647, 'No', '1998-08-02', 'Chandigarhh'),
('', '', 'Male', 0, 'Yes', '0000-00-00', ''),
('Vaibhav Setia', 'Nitin kashyap', 'Male', 0, 'Yes', '0000-00-00', ''),
('', '', 'Male', 0, 'Yes', '0000-00-00', ''),
('', '', 'Male', 0, 'Yes', '0000-00-00', ''),
('', '', 'Male', 0, 'Yes', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `sid` int(8) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `sid`, `password`) VALUES
(1, 16103069, '16103069'),
(2, 1, '1'),
(3, 2, '3');

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
('', 0, 0x53494470, 'B.Tech.', ''),
('', 0, 0x53494470, 'B.Tech.', ''),
('', 0, 0x53494470, 'B.Tech.', ''),
('', 0, 0x53494470, 'B.Tech.', ''),
('', 0, 0x53494470, '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
