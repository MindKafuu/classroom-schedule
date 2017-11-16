-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2017 at 08:08 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_account`
--

CREATE TABLE `table_account` (
  `No` int(3) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `teacher_email` varchar(100) NOT NULL,
  `teacher_password` varchar(100) NOT NULL DEFAULT '1234',
  `teacher_status` varchar(100) NOT NULL DEFAULT 'T'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_account`
--

INSERT INTO `table_account` (`No`, `teacher_name`, `teacher_email`, `teacher_password`, `teacher_status`) VALUES
(1, 'Assoc. Prof. Dr.Siam Charoenseang', 'Siam@fibo.kmutt.ac.th', '1234', 'T'),
(2, 'Asst. Prof. Dr.Thavida Maneewarn', 'Thavida@fibo.kmutt.ac.th', '1234', 'T'),
(3, 'Asst.Prof.Dr.Eakkachai Pengwang', 'Eakkachai@fibo.kmutt.ac.th', '1234', 'T'),
(4, 'Dr.Arbtip Dheeravongkit', 'Arbtip@fibo.kmutt.ac.th', '1234', 'T'),
(5, 'Dr.Arbtip Dheeravongkit', 'Arbtip_admin@fibo.kmutt.ac.th', '1234', 'A'),
(6, 'Dr.Boontariga Kasemsontitum', 'Boontarika@fibo.kmutt.ac.th', '1234', 'T'),
(7, 'Dr.Orapadee Joochim', 'Orapadee@fibo.kmutt.ac.th', '1234', 'T'),
(8, 'Dr.Pitiwut Teerakittikul', 'Pitiwut@fibo.kmutt.ac.th', '1234', 'T'),
(9, 'Dr.Pornpoj', 'Pornpoj@fibo.kmutt.ac.th', '1234', 'T'),
(10, 'Dr.Prakarnkiat Youngkong', 'Prakrankiat@fibo.kmutt.ac.th', '1234', 'T'),
(11, 'Dr.Supachai Vongbunyong', 'Supachai@fibo.kmutt.ac.th', '1234', 'T'),
(12, 'Dr.Suriya Natsupakpong', 'Suriya@fibo.kmutt.ac.th', '1234', 'T'),
(13, 'Dr.Warasinee Chaisangmongkon', 'Warasinee@fibo.kmutt.ac.th', '1234', 'T'),
(14, 'Mr.Bawornsak Sakulkueakulsuk', 'Bawornsak@fibo.kmutt.ac.th', '1234', 'T'),
(15, 'Mr.Narongsak', 'Narongsak@fibo.kmutt.ac.th', '1234', 'T'),
(16, 'Mr.Thanacha Choopojcharoen', 'Thanacha@fibo.kmutt.ac.th', '1234', 'T'),
(17, 'Mr.Worawit Panpanytep', 'Worawit@fibo.kmutt.ac.th', '1234', 'T'),
(18, 'Ms.Mirawee Kumpakure', 'Mirawee@fibo.kmutt.ac.th', '1234', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `table_room`
--

CREATE TABLE `table_room` (
  `No` int(3) NOT NULL,
  `room_code` varchar(100) NOT NULL,
  `room_type` varchar(100) NOT NULL DEFAULT 'classroom',
  `room_size` varchar(100) NOT NULL DEFAULT '40'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_room`
--

INSERT INTO `table_room` (`No`, `room_code`, `room_type`, `room_size`) VALUES
(1, 'FB301', 'classroom', '40'),
(2, 'FB304', 'classroom', '40'),
(3, 'FB305', 'classroom', '40'),
(4, 'FB306', 'computer', '40'),
(5, 'FB401', 'classroom', '40'),
(6, 'FB402', 'classroom', '40'),
(7, 'FB403', 'studio', '80');

-- --------------------------------------------------------

--
-- Table structure for table `table_subject_description_input`
--

CREATE TABLE `table_subject_description_input` (
  `No` int(3) NOT NULL,
  `subject_level` varchar(100) NOT NULL,
  `subject_code` varchar(100) NOT NULL DEFAULT 'FRA',
  `subject_name` varchar(100) NOT NULL,
  `subject_hour_per_week` varchar(100) NOT NULL DEFAULT '3',
  `subject_sec_teacher_want` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_subject_description_input`
--

INSERT INTO `table_subject_description_input` (`No`, `subject_level`, `subject_code`, `subject_name`, `subject_hour_per_week`, `subject_sec_teacher_want`) VALUES
(1, '1', 'FRA141', 'Computer Programming ', '4', 'AA'),
(2, '1', 'FRA141', 'Computer Programming ', '4', 'BB'),
(3, '1', 'FRA161', 'Robotic exploration', '3', 'AB'),
(4, '2', 'FRA221', 'Digital Electronics', '3', 'AA'),
(5, '2', 'FRA221', 'Digital Electronics', '3', 'BB'),
(6, '2', 'FRA222', 'Industrial Sensor and Actuators', '3', 'AA'),
(7, '2', 'FRA222', 'Industrial Sensor and Actuators', '3', 'BB'),
(9, '2', 'FRA231', 'Static and dynamics', '3', 'AB'),
(10, '2', 'FRA241', 'Software development', '3', 'AB'),
(11, '2', 'FRA261', 'Robotics and Automation Engineer Lab II', '3', 'AA'),
(12, '2', 'FRA261', 'Robotics and Automation Engineer Lab II', '3', 'BB');

-- --------------------------------------------------------

--
-- Table structure for table `table_subject_description_output`
--

CREATE TABLE `table_subject_description_output` (
  `No` int(100) NOT NULL,
  `subject_level` varchar(100) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_hour_per_week` varchar(100) NOT NULL,
  `subject_hour_per_day` varchar(100) NOT NULL,
  `subject_sec` varchar(100) NOT NULL,
  `Day` varchar(100) NOT NULL,
  `start_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_subject_description_output`
--

INSERT INTO `table_subject_description_output` (`No`, `subject_level`, `subject_code`, `subject_name`, `subject_hour_per_week`, `subject_hour_per_day`, `subject_sec`, `Day`, `start_time`) VALUES
(1, '1', 'FRA141', 'Computer Programming', '4', '2', 'A', '', ''),
(2, '1', 'FRA141', 'Computer Programming', '4', '2', 'A', '', ''),
(3, '1', 'FRA141', 'Computer Programming ', '4', '2', 'B', '', ''),
(4, '1', 'FRA141', 'Computer Programming ', '4', '2', 'B', '', ''),
(5, '1', 'FRA161', 'Robotic exploration', '3', '3', 'A', '', ''),
(6, '1', 'FRA161', 'Robotic exploration', '3', '3', 'B', '', ''),
(7, '2', 'FRA221', 'Digital Electronics', '3', '3', 'A', '', ''),
(8, '2', 'FRA221', 'Digital Electronics', '3', '3', 'B', '', ''),
(9, '2', 'FRA222', 'Industrial Sensor and Actuators', '3', '3', 'A', '', ''),
(10, '2', 'FRA222', 'Industrial Sensor and Actuators', '3', '3', 'B', '', ''),
(11, '2', 'FRA231', 'Static and dynamics', '3', '3', 'A', '', ''),
(12, '2', 'FRA231', 'Static and dynamics', '3', '3', 'B', '', ''),
(13, '2', 'FRA241', 'Software development', '3', '3', 'A', '', ''),
(14, '2', 'FRA241', 'Software development', '3', '3', 'B', '', ''),
(15, '2', 'FRA261', 'Robotics and Automation Engineer Lab II', '3', '3', 'A', '', ''),
(16, '2', 'FRA261', 'Robotics and Automation Engineer Lab II', '3', '3', 'B', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_teacher`
--

CREATE TABLE `table_teacher` (
  `No` int(3) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `teacher_unavailable_day` varchar(10) NOT NULL,
  `teacher_unavailable_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_teacher`
--

INSERT INTO `table_teacher` (`No`, `teacher_name`, `teacher_unavailable_day`, `teacher_unavailable_time`) VALUES
(1, 'Assoc. Prof. Dr.Siam Charoenseang', '0', '0'),
(2, 'Assoc. Prof. Dr.Siam Charoenseang', '0', '1'),
(3, 'Assoc. Prof. Dr.Siam Charoenseang', '1', '0'),
(4, 'Assoc. Prof. Dr.Siam Charoenseang', '1', '1'),
(5, 'Assoc. Prof. Dr.Siam Charoenseang', '1', '2'),
(6, 'Mr.Bawornsak Sakulkueakulsuk', '0', '0'),
(7, 'Mr.Bawornsak Sakulkueakulsuk', '1', '0'),
(8, 'Mr.Bawornsak Sakulkueakulsuk', '2', '0'),
(9, 'Mr.Bawornsak Sakulkueakulsuk', '3', '0'),
(10, 'Mr.Bawornsak Sakulkueakulsuk', '4', '0'),
(11, 'Asst.Prof.Dr.Eakkachai Pengwang', '1', '5'),
(12, 'Asst.Prof.Dr.Eakkachai Pengwang', '1', '6'),
(13, 'Asst.Prof.Dr.Eakkachai Pengwang', '1', '7'),
(14, 'Asst.Prof.Dr.Eakkachai Pengwang', '2', '6'),
(15, 'Asst.Prof.Dr.Eakkachai Pengwang', '2', '7');

-- --------------------------------------------------------

--
-- Table structure for table `table_teacher_subject`
--

CREATE TABLE `table_teacher_subject` (
  `No` int(3) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `subject_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_teacher_subject`
--

INSERT INTO `table_teacher_subject` (`No`, `teacher_name`, `subject_code`) VALUES
(1, 'Dr.Warasinee Chaisangmongkon', 'FRA141'),
(2, 'Mr.Bawornsak Sakulkueakulsuk', 'FRA141'),
(3, 'Mr.Bawornsak Sakulkueakulsuk', 'FRA161'),
(4, 'Dr.Pitiwut Teerakittikul', 'FRA161'),
(5, 'Asst.Prof.Dr.Eakkachai Pengwang', 'FRA161'),
(6, 'Assoc. Prof. Dr.Siam Charoenseang', 'FRA161'),
(7, 'Dr.Arbtip Dheeravongkit', 'FRA161'),
(8, 'Dr.Prakarnkiat Youngkong', 'FRA161'),
(9, 'Dr.Warasinee Chaisangmongkon', 'FRA161'),
(10, 'Dr.Pitiwut Teerakittikul', 'FRA221'),
(11, 'Asst. Prof. Dr.Thavida Maneewarn', 'FRA222'),
(12, 'Dr.Supachai Vongbunyong', 'FRA222'),
(13, 'Asst.Prof.Dr.Eakkachai Pengwang', 'FRA231'),
(14, 'Mr.Bawornsak Sakulkueakulsuk', 'FRA241'),
(15, 'Dr.Warasinee Chaisangmongkon', 'FRA241'),
(16, 'Dr.Suriya Natsupakpong', 'FRA241'),
(17, 'Dr.Pitiwut Teerakittikul', 'FRA261'),
(18, 'Asst. Prof. Dr.Thavida Maneewarn', 'FRA261'),
(19, 'Dr.Supachai Vongbunyong', 'FRA261');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_account`
--
ALTER TABLE `table_account`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `table_room`
--
ALTER TABLE `table_room`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `table_subject_description_input`
--
ALTER TABLE `table_subject_description_input`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `table_subject_description_output`
--
ALTER TABLE `table_subject_description_output`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `table_teacher`
--
ALTER TABLE `table_teacher`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `table_teacher_subject`
--
ALTER TABLE `table_teacher_subject`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_subject_description_input`
--
ALTER TABLE `table_subject_description_input`
  MODIFY `No` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `table_subject_description_output`
--
ALTER TABLE `table_subject_description_output`
  MODIFY `No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
