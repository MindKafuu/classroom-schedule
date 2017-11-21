-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 02:50 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

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
-- Table structure for table `table_fundamental_subjects`
--

CREATE TABLE `table_fundamental_subjects` (
  `No` int(3) NOT NULL,
  `subject_level` varchar(100) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_hour_per_week` varchar(100) NOT NULL,
  `subject_sec` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_fundamental_subjects`
--

INSERT INTO `table_fundamental_subjects` (`No`, `subject_level`, `subject_code`, `subject_name`, `subject_hour_per_week`, `subject_sec`, `day`, `start_time`, `end_time`) VALUES
(1, '1', 'GEN101', 'พละ', '1', 'AB', '2', '7', '8'),
(2, '1', 'LNG101', 'English', '3', 'AB', '4', '1', '3'),
(3, '1', 'MTH101', 'Math', '3', 'AB', '2', '2', '3'),
(4, '1', 'MTH101', 'Math', '3', 'AB', '4', '5', '6'),
(5, '1', 'PHY103', 'Physics', '3', 'AA', '1', '0', '1'),
(6, '1', 'PHY103', 'Physics', '3', 'AA', '4', '7', '7'),
(7, '1', 'PHY103', 'Physics', '3', 'BB', '0', '0', '1'),
(8, '1', 'PHY103', 'Physics', '3', 'BB', '4', '8', '8'),
(9, '1', 'PHY191', 'fckingPhylab', '1', 'AB', '0', '2', '3'),
(10, '1', 'LNG1-2', 'Eng2', '3', 'AB', '4', '1', '3'),
(11, '2', 'LNG2-3', 'Eng2', '3', 'AB', '3', '0', '2'),
(12, '2', 'MTH201', 'cal3', '4', 'AB', '2', '5', '7'),
(13, '2', 'MTH201', 'cal3', '4', 'AB', '4', '7', '7'),
(14, '3', 'LNG103', 'Eng3', '3', 'AB', '3', '1', '3');

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
(7, 'FB403-4', 'studioroom', '80');

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
  `subject_spirt` varchar(100) NOT NULL,
  `subject_sec_teacher_want` varchar(100) DEFAULT NULL,
  `subject_room` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_subject_description_input`
--

INSERT INTO `table_subject_description_input` (`No`, `subject_level`, `subject_code`, `subject_name`, `subject_hour_per_week`, `subject_spirt`, `subject_sec_teacher_want`, `subject_room`) VALUES
(1, '1', 'FRA141', 'Computer Programming ', '4', '2/1', 'AA', 'FB306'),
(2, '1', 'FRA141', 'Computer Programming ', '4', '2/2', 'BB', 'FB306'),
(3, '1', 'FRA161', 'Robotic exploration', '3', '3/1', 'AA', 'FB403-4'),
(4, '1', 'FRA161', 'Robotic exploration', '3', '3/1', 'BB', 'FB301'),
(6, '2', 'FRA221', 'Digital Electronics', '3', '3', 'AA', 'FB306'),
(7, '2', 'FRA221', 'Digital Electronics', '3', '3', 'BB', 'FB306'),
(8, '2', 'FRA222', 'Industrial Sensor and Actuators', '3', '3', 'AA', 'FB301'),
(9, '2', 'FRA222', 'Industrial Sensor and Actuators', '3', '3', 'BB', 'FB301'),
(10, '2', 'FRA231', 'Static and dynamics', '3', '3', 'AB', 'FB403-4'),
(11, '2', 'FRA241', 'Software development', '3', '3', 'AB', 'FB401'),
(12, '2', 'FRA261', 'Robotics and Automation Engineer Lab II', '3', '3', 'AA', 'FB306'),
(13, '2', 'FRA261', 'Robotics and Automation Engineer Lab II', '3', '3', 'BB', 'FB306'),
(14, '3', 'FRA321', 'Image Processing', '3', '3', 'AA', 'FB304'),
(15, '3', 'FRA321', 'Image Processing', '3', '3', 'BB', 'FB304'),
(16, '3', 'FRA331', 'Contorl', '3', '3', 'AA', 'FB304'),
(17, '3', 'FRA331', 'Contorl', '3', '3', 'BB', 'FB305'),
(18, '3', 'FRA332', 'Dr.Arbtip Dheeravongkit', '3', '3', 'AA', 'FB305'),
(19, '3', 'FRA332', 'Asst.Prof.Dr.Eakkachai Pengwang', '3', '3', 'BB', 'FB305'),
(20, '3', 'FRA341', 'Dr.Pornpoj', '3', '3', 'AA', 'FB301'),
(21, '3', 'FRA341', 'Dr.Pornpoj', '3', '3', 'BB', 'FB301'),
(22, '3', 'FRA361', 'Mr.Narongsak', '3', '3', 'AB', 'FB401'),
(23, '4', 'FRA451', 'Dr.Boontariga Kasemsontitum', '3', '3', 'AB', 'FB306'),
(24, '4', 'FRA452', 'Dr.Supachai Vongbunyong', '3', '3', 'AB', 'FB305');

-- --------------------------------------------------------

--
-- Table structure for table `table_subject_description_input_admin`
--

CREATE TABLE `table_subject_description_input_admin` (
  `No` int(3) NOT NULL,
  `subject_level` varchar(100) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_hour_per_week` varchar(100) NOT NULL DEFAULT '3',
  `subject_sec_teacher_want` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_subject_description_input_admin`
--

INSERT INTO `table_subject_description_input_admin` (`No`, `subject_level`, `subject_code`, `subject_name`, `subject_hour_per_week`, `subject_sec_teacher_want`) VALUES
(1, 'B1', 'FRAt133235', 'test1', '3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_subject_description_output`
--

CREATE TABLE `table_subject_description_output` (
  `No` int(100) NOT NULL,
  `subject_level` varchar(100) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `subject_room` varchar(100) NOT NULL,
  `subject_hour_per_week` varchar(100) NOT NULL,
  `subject_hour_per_day` varchar(100) NOT NULL,
  `subject_sec` varchar(100) NOT NULL,
  `Day` varchar(100) NOT NULL,
  `start_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_subject_description_output`
--

INSERT INTO `table_subject_description_output` (`No`, `subject_level`, `subject_code`, `subject_room`, `subject_hour_per_week`, `subject_hour_per_day`, `subject_sec`, `Day`, `start_time`) VALUES
(1, '1', 'FRA141', 'FB306', '2/1', '2', 'A', '0', '0'),
(2, '1', 'FRA141', 'FB306', '2/1', '1', 'A', '4', '8'),
(3, '1', 'FRA141', 'FB306', '2/2', '2', 'B', '1', '0'),
(4, '1', 'FRA141', 'FB306', '2/2', '2', 'B', '3', '0'),
(5, '1', 'FRA161', 'FB403-4', '3/1', '3', 'A', '1', '5'),
(6, '1', 'FRA161', 'FB403-4', '3/1', '1', 'A', '3', '1'),
(7, '1', 'FRA161', 'FB301', '3/1', '3', 'B', '1', '5'),
(8, '1', 'FRA161', 'FB301', '3/1', '1', 'B', '4', '7'),
(9, '2', 'FRA221', 'FB306', '3', '3', 'A', '1', '5'),
(10, '2', 'FRA221', 'FB306', '3', '3', 'B', '2', '1'),
(11, '2', 'FRA222', 'FB301', '3', '3', 'A', '2', '1'),
(12, '2', 'FRA222', 'FB301', '3', '3', 'B', '3', '5'),
(13, '2', 'FRA231', 'FB403-4', '3', '3', 'AB', '1', '1'),
(14, '2', 'FRA241', 'FB401', '3', '3', 'AB', '0', '1'),
(15, '2', 'FRA261', 'FB306', '3', '3', 'A', '3', '5'),
(16, '2', 'FRA261', 'FB306', '3', '3', 'B', '4', '1'),
(17, '3', 'FRA321', 'FB304', '3', '3', 'A', '0', '1'),
(18, '3', 'FRA321', 'FB304', '3', '3', 'B', '1', '5'),
(19, '3', 'FRA331', 'FB304', '3', '3', 'A', '2', '1'),
(20, '3', 'FRA331', 'FB305', '3', '3', 'B', '0', '1'),
(21, '3', 'FRA332', 'FB305', '3', '3', 'A', '1', '5'),
(22, '3', 'FRA332', 'FB305', '3', '3', 'B', '2', '1'),
(23, '3', 'FRA341', 'FB301', '3', '3', 'A', '2', '5'),
(24, '3', 'FRA341', 'FB301', '3', '3', 'B', '4', '1'),
(25, '3', 'FRA361', 'FB401', '3', '3', 'AB', '1', '1'),
(26, '4', 'FRA451', 'FB306', '3', '3', 'AB', '2', '5'),
(27, '4', 'FRA452', 'FB305', '3', '3', 'AB', '1', '1'),
(28, '1', 'GEN101', '-', '-', '2', 'AB', '2', '7'),
(29, '1', 'LNG101', '-', '-', '3', 'AB', '4', '1'),
(30, '1', 'MTH101', '-', '-', '2', 'AB', '2', '2'),
(31, '1', 'MTH101', '-', '-', '2', 'AB', '4', '5'),
(32, '1', 'PHY103', '-', '-', '2', 'A', '1', '0'),
(33, '1', 'PHY103', '-', '-', '1', 'A', '4', '7'),
(34, '1', 'PHY103', '-', '-', '2', 'B', '0', '0'),
(35, '1', 'PHY103', '-', '-', '1', 'B', '4', '8'),
(36, '1', 'PHY191', '-', '-', '2', 'AB', '0', '2'),
(37, '1', 'LNG1-2', '-', '-', '3', 'AB', '4', '1'),
(38, '2', 'LNG2-3', '-', '-', '3', 'AB', '3', '0'),
(39, '2', 'MTH201', '-', '-', '3', 'AB', '2', '5'),
(40, '2', 'MTH201', '-', '-', '1', 'AB', '4', '7'),
(41, '3', 'LNG103', '-', '-', '3', 'AB', '3', '1');

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
(3, 'Assoc. Prof. Dr.Siam Charoenseang', '0', '2'),
(4, 'Asst. Prof. Dr.Thavida Maneewarn', '0', '0'),
(5, 'Asst. Prof. Dr.Thavida Maneewarn', '3', '4'),
(6, 'Asst. Prof. Dr.Thavida Maneewarn', '3', '5'),
(7, 'Asst. Prof. Dr.Thavida Maneewarn', '3', '6'),
(8, 'Mr.Bawornsak Sakulkueakulsuk', '4', '1'),
(9, 'Mr.Bawornsak Sakulkueakulsuk', '4', '2'),
(10, 'Mr.Bawornsak Sakulkueakulsuk', '4', '3'),
(11, 'Mr.Bawornsak Sakulkueakulsuk', '4', '4'),
(12, 'Mr.Bawornsak Sakulkueakulsuk', '4', '5'),
(13, 'Dr.Pitiwut Teerakittikul', '4', '0'),
(14, 'Dr.Pitiwut Teerakittikul', '4', '1'),
(15, 'Dr.Pitiwut Teerakittikul', '4', '2'),
(16, 'Dr.Pitiwut Teerakittikul', '4', '3'),
(17, 'Dr.Pitiwut Teerakittikul', '4', '4'),
(18, 'Mr.Thanacha Choopojcharoen', '4', '1'),
(19, 'Mr.Thanacha Choopojcharoen', '4', '2'),
(20, 'Mr.Thanacha Choopojcharoen', '4', '3'),
(21, 'Mr.Thanacha Choopojcharoen', '4', '4'),
(22, 'Asst.Prof.Dr.Eakkachai Pengwang', '0', '1'),
(23, 'Asst.Prof.Dr.Eakkachai Pengwang', '0', '2'),
(24, 'Asst.Prof.Dr.Eakkachai Pengwang', '0', '3'),
(25, 'Dr.Arbtip Dheeravongkit', '4', '5'),
(26, 'Dr.Arbtip Dheeravongkit', '4', '6'),
(27, 'Dr.Arbtip Dheeravongkit', '4', '7'),
(28, 'Dr.Arbtip Dheeravongkit', '4', '8'),
(29, 'Dr.Supachai Vongbunyong', '2', '0'),
(30, 'Dr.Supachai Vongbunyong', '2', '1'),
(31, 'Dr.Supachai Vongbunyong', '2', '2'),
(32, 'Dr.Supachai Vongbunyong', '2', '3'),
(33, 'Dr.Prakarnkiat Youngkong', '1', '0'),
(34, 'Dr.Prakarnkiat Youngkong', '1', '1'),
(35, 'Dr.Prakarnkiat Youngkong', '1', '2'),
(36, 'Mr.Worawit Panpanytep', '3', '0'),
(37, 'Mr.Worawit Panpanytep', '3', '1'),
(38, 'Mr.Worawit Panpanytep', '3', '2'),
(39, 'Mr.Worawit Panpanytep', '3', '3'),
(40, 'Dr.Warasinee Chaisangmongkon', '0', '0'),
(41, 'Dr.Warasinee Chaisangmongkon', '0', '1'),
(42, 'Dr.Warasinee Chaisangmongkon', '0', '2'),
(43, 'Dr.Warasinee Chaisangmongkon', '0', '3'),
(44, 'Dr.Warasinee Chaisangmongkon', '0', '4'),
(45, 'Dr.Orapadee Joochim', '2', '1'),
(46, 'Dr.Orapadee Joochim', '3', '4'),
(47, 'Dr.Orapadee Joochim', '3', '5'),
(48, 'Dr.Orapadee Joochim', '3', '6'),
(49, 'Dr.Suriya Natsupakpong', '4', '7'),
(50, 'Dr.Suriya Natsupakpong', '4', '8'),
(51, 'Dr.Suriya Natsupakpong', '4', '9'),
(52, 'Dr.Boontariga Kasemsontitum', '3', '7'),
(53, 'Dr.Boontariga Kasemsontitum', '3', '8'),
(54, 'Dr.Boontariga Kasemsontitum', '3', '9'),
(55, 'Dr.Boontariga Kasemsontitum', '4', '0'),
(56, 'Dr.Boontariga Kasemsontitum', '4', '1'),
(57, 'Dr.Boontariga Kasemsontitum', '4', '2'),
(58, 'Mr.Narongsak', '1', '0'),
(59, 'Mr.Narongsak', '1', '1'),
(60, 'Mr.Narongsak', '1', '2'),
(61, 'Mr.Narongsak', '1', '3'),
(62, 'Dr.Pornpoj', '0', '5'),
(63, 'Dr.Pornpoj', '0', '6'),
(64, 'Dr.Pornpoj', '0', '7'),
(65, 'Dr.Pornpoj', '0', '8'),
(66, 'Ms.Mirawee Kumpakure', '0', '5'),
(67, 'Ms.Mirawee Kumpakure', '0', '6'),
(68, 'Ms.Mirawee Kumpakure', '0', '7'),
(69, 'Ms.Mirawee Kumpakure', '0', '8');

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
-- Indexes for table `table_fundamental_subjects`
--
ALTER TABLE `table_fundamental_subjects`
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
-- Indexes for table `table_subject_description_input_admin`
--
ALTER TABLE `table_subject_description_input_admin`
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
  MODIFY `No` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
