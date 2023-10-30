-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 07:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendancemsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblactivity_log`
--

CREATE TABLE `tblactivity_log` (
  `activity_log_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblactivity_log`
--

INSERT INTO `tblactivity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(1, '', '2023-06-01 14:43:08', 'Add Client User '),
(2, '', '2023-06-01 14:45:01', 'Add System User '),
(3, '', '2023-06-01 22:34:48', 'Add device Type keyboard'),
(4, '', '2023-06-01 22:34:56', 'Add device Type vga cables'),
(5, '', '2023-06-01 22:35:01', 'Add device Type mouse'),
(6, '', '2023-06-01 22:35:11', 'Add device Type monitor'),
(7, '', '2023-06-01 22:36:22', 'Add device Type Power cord'),
(8, '', '2023-06-01 22:36:49', 'Add device Type Central Processing unit (CPU)'),
(9, '', '2023-06-01 22:37:04', 'Add device Type AVR'),
(10, '', '2023-06-01 22:37:19', 'Add device Type aircon'),
(11, '', '2023-06-01 22:37:49', 'Add device Type speaker'),
(12, '', '2023-06-02 09:01:21', 'Add device Detail id 1&nbspName&nbspkeyboard'),
(13, '', '2023-06-02 09:02:27', 'Add device Detail id 4&nbspName&nbspmonitor'),
(14, '', '2023-06-02 09:03:09', 'Add device Detail id 6&nbspName&nbspCentral Processing unit (CPU)'),
(15, 'Steve Kariuki', '2023-06-04 10:03:41', 'Add System User '),
(16, 'Michael Njoroge', '2023-06-04 23:11:47', 'Add device Detail id 5&nbspName&nbspPower cord'),
(17, 'Michael Njoroge', '2023-06-04 23:14:07', 'Edit device info keyboard'),
(18, 'Michael Njoroge', '2023-06-04 23:14:29', 'Edit device info monitor'),
(19, 'Michael Njoroge', '2023-06-04 23:14:50', 'Edit device info Central Processing unit (CPU)'),
(20, 'Michael Njoroge', '2023-06-04 23:15:09', 'Edit device info video graphic accelerator'),
(21, 'Michael Njoroge', '2023-06-07 20:13:58', 'transfer Device  monitor to location id 1&nbspName&nbspLab 1'),
(22, 'Michael Njoroge', '2023-06-07 20:23:40', 'transfer Device  Central Processing unit (CPU) to location id 5&nbspName&nbspLab 5'),
(23, 'Michael Njoroge', '2023-06-07 20:24:13', 'transfer Device  Power cord to location id 2&nbspName&nbspLab 2'),
(24, 'Michael Njoroge', '2023-06-07 20:25:46', 'Update Status monitor to Used '),
(25, 'Michael Njoroge', '2023-06-07 20:26:01', 'Update Status monitor to Damage '),
(26, 'Michael Njoroge', '2023-06-07 20:26:12', 'Update Status monitor to Used '),
(27, 'Michael Njoroge', '2023-06-07 20:26:23', 'Update Status monitor to Damage '),
(28, 'Michael Njoroge', '2023-06-07 20:44:50', 'transfer Device  monitor to location id 6&nbspName&nbspLab 6'),
(29, 'Michael Njoroge', '2023-06-07 20:47:28', 'transfer Device   to location id 3&nbspName&nbspLab 3'),
(30, 'Michael Njoroge', '2023-06-08 09:09:17', 'Edit Client User Stevo'),
(31, 'Michael Njoroge', '2023-06-08 09:09:47', 'Edit Client User Stivo'),
(32, 'Michael Njoroge', '2023-06-08 11:12:33', 'Dump Device monitor Inventory Code:HP123'),
(33, 'Michael Njoroge', '2023-06-08 11:16:38', 'Add device Detail id 2&nbspName&nbspvideo graphic accelerator'),
(34, 'Michael Njoroge', '2023-06-08 11:17:47', 'Add device Detail id 7&nbspName&nbspAVR'),
(35, 'Michael Njoroge', '2023-06-08 11:18:40', 'Add device Detail id 4&nbspName&nbspmonitor'),
(36, 'Michael Njoroge', '2023-06-08 11:20:16', 'Add device Detail id 3&nbspName&nbspmouse'),
(37, 'Michael Njoroge', '2023-06-08 11:21:50', 'Add device Detail id 9&nbspName&nbspPower Supply'),
(38, 'Michael Njoroge', '2023-06-08 11:24:00', 'Update Status Central Processing unit (CPU) to Damage '),
(39, 'Michael Njoroge', '2023-06-08 20:18:47', 'Add System User '),
(40, 'Michael Njoroge', '2023-06-08 20:19:24', 'Add Client User '),
(41, 'Hevy Mwajuma', '2023-06-08 20:26:51', 'Update Status Power cord to Used '),
(42, 'Hevy Mwajuma', '2023-06-08 20:27:02', 'Update Status Power cord to Damage '),
(43, 'Hevy Mwajuma', '2023-06-08 20:27:46', 'transfer Device  Power cord to location id 1&nbspName&nbspLab 1'),
(44, 'Hevy Mwajuma', '2023-06-08 20:29:38', 'transfer Device  video graphic accelerator to location id 3&nbspName&nbspLab 3'),
(45, 'Hevy Mwajuma', '2023-06-08 20:29:51', 'transfer Device  Central Processing unit (CPU) to location id 4&nbspName&nbsplab 4'),
(46, 'Hevy Mwajuma', '2023-06-08 20:30:03', 'Update Status video graphic accelerator to Used ');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `admin_id` int(128) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `lastName` varchar(128) NOT NULL,
  `emailAddress` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`admin_id`, `firstName`, `lastName`, `emailAddress`, `password`) VALUES
(1, 'Steve', 'Kariuki', 'steve@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(4, 'Michael', 'Njoroge', 'michael@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(5, 'Hevy', 'Mwajuma', 'hevy@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `tbldevice`
--

CREATE TABLE `tbldevice` (
  `id` int(11) NOT NULL,
  `dev_id` int(11) NOT NULL,
  `dev_desc` varchar(128) NOT NULL,
  `dev_serial` varchar(128) NOT NULL,
  `dev_brand` varchar(128) NOT NULL,
  `dev_model` varchar(128) NOT NULL,
  `dev_status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbldevice`
--

INSERT INTO `tbldevice` (`id`, `dev_id`, `dev_desc`, `dev_serial`, `dev_brand`, `dev_model`, `dev_status`) VALUES
(1, 1, '<p>HP keyboard</p>\r\n', 'MSU123', 'USA', 'HP', 'Dump'),
(2, 4, '<p>Toshiba Monitor</p>\r\n', 'HP123', 'japan', 'Toshiba', 'Dump'),
(3, 6, '<p>Mac CPU</p>\r\n', 'MSU125', 'Mac', 'Mac', 'Damage'),
(4, 2, '<p>Lenovo VGA</p>\r\n', 'MSU129', 'japan', 'lenovo', 'Used'),
(5, 5, '<p>mac power code</p>\r\n', 'MSU098', 'Mac', 'Mac', 'Damage'),
(6, 2, '<p>Toshiba VGA</p>\r\n', 'K123R', 'Kenya', 'Toshiba', 'New'),
(7, 7, '<p>Lenovo AVR</p>\r\n', 'M131g', 'Mac', 'lenovo', 'New'),
(8, 4, '<p>Japan Monitor</p>\r\n', 'Jp124', 'japan', 'Japan', 'New'),
(9, 3, '<p>Apple Mouse</p>\r\n', 'A143', 'Apple', 'apple', 'New'),
(10, 9, '<p>Mac Power Supply</p>\r\n', 'P1r5', 'Mac', 'Mack ', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `tbldevice_name`
--

CREATE TABLE `tbldevice_name` (
  `dev_id` int(11) NOT NULL,
  `dev_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbldevice_name`
--

INSERT INTO `tbldevice_name` (`dev_id`, `dev_name`) VALUES
(1, 'keyboard'),
(2, 'video graphic accelerator'),
(3, 'mouse'),
(4, 'monitor'),
(5, 'Power cord'),
(6, 'Central Processing unit (CPU)'),
(7, 'AVR'),
(9, 'Power Supply');

-- --------------------------------------------------------

--
-- Table structure for table `tbllocation`
--

CREATE TABLE `tbllocation` (
  `stdev_id` int(11) NOT NULL,
  `stdev_location_name` varchar(128) NOT NULL,
  `thumbnails` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbllocation`
--

INSERT INTO `tbllocation` (`stdev_id`, `stdev_location_name`, `thumbnails`) VALUES
(1, 'Lab 1', 'images/thumbnails.jpg'),
(2, 'Lab 2', 'images/thumbnails.jpg'),
(3, 'Lab 3', 'images/thumbnails.jpg'),
(4, 'lab 4', 'images/thumbnails.jpg'),
(5, 'Lab 5', 'images/thumbnails.jpg'),
(6, 'Lab 6', 'images/thumbnails.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbllocation_details`
--

CREATE TABLE `tbllocation_details` (
  `ld_id` int(11) NOT NULL,
  `stdev_id` int(11) NOT NULL,
  `date_deployment` date NOT NULL,
  `tbldevice_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbllocation_details`
--

INSERT INTO `tbllocation_details` (`ld_id`, `stdev_id`, `date_deployment`, `tbldevice_id`) VALUES
(1, 2, '2023-06-08', 4),
(2, 4, '2023-06-08', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tblnotifications`
--

CREATE TABLE `tblnotifications` (
  `notification_id` int(11) NOT NULL,
  `fullname` int(128) NOT NULL,
  `notification` int(100) NOT NULL,
  `date_of_notification` int(50) NOT NULL,
  `link` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblnotifications`
--

INSERT INTO `tblnotifications` (`notification_id`, `fullname`, `notification`, `date_of_notification`, `link`) VALUES
(1, 0, 0, 2147483647, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblnotification_read`
--

CREATE TABLE `tblnotification_read` (
  `notification_read_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_read` varchar(50) NOT NULL,
  `notification_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblnotification_read`
--

INSERT INTO `tblnotification_read` (`notification_read_id`, `admin_id`, `admin_read`, `notification_id`) VALUES
(0, 5, 'yes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbltechnician`
--

CREATE TABLE `tbltechnician` (
  `technician_id` int(128) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `lastName` varchar(128) NOT NULL,
  `emailAddress` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `adminthumbnails` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbltechnician`
--

INSERT INTO `tbltechnician` (`technician_id`, `firstName`, `lastName`, `emailAddress`, `password`, `adminthumbnails`) VALUES
(1, 'Stivo', 'Kariuki', 'steve@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
(2, 'Hevy', 'Mwajuma', 'hevy@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser_log`
--

CREATE TABLE `tbluser_log` (
  `user_log_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(30) NOT NULL,
  `admin_id` int(128) NOT NULL,
  `technician_id` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblactivity_log`
--
ALTER TABLE `tblactivity_log`
  ADD PRIMARY KEY (`activity_log_id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbldevice`
--
ALTER TABLE `tbldevice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldevice_name`
--
ALTER TABLE `tbldevice_name`
  ADD PRIMARY KEY (`dev_id`);

--
-- Indexes for table `tbllocation`
--
ALTER TABLE `tbllocation`
  ADD PRIMARY KEY (`stdev_id`);

--
-- Indexes for table `tbllocation_details`
--
ALTER TABLE `tbllocation_details`
  ADD PRIMARY KEY (`ld_id`);

--
-- Indexes for table `tblnotifications`
--
ALTER TABLE `tblnotifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `tbltechnician`
--
ALTER TABLE `tbltechnician`
  ADD PRIMARY KEY (`technician_id`);

--
-- Indexes for table `tbluser_log`
--
ALTER TABLE `tbluser_log`
  ADD PRIMARY KEY (`user_log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblactivity_log`
--
ALTER TABLE `tblactivity_log`
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `admin_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbldevice`
--
ALTER TABLE `tbldevice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbldevice_name`
--
ALTER TABLE `tbldevice_name`
  MODIFY `dev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbllocation`
--
ALTER TABLE `tbllocation`
  MODIFY `stdev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbllocation_details`
--
ALTER TABLE `tbllocation_details`
  MODIFY `ld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblnotifications`
--
ALTER TABLE `tblnotifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbltechnician`
--
ALTER TABLE `tbltechnician`
  MODIFY `technician_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbluser_log`
--
ALTER TABLE `tbluser_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
