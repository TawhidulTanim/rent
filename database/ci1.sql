-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 06:53 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_house`
--

CREATE TABLE `tbl_house` (
  `id` int(11) NOT NULL,
  `house` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_house`
--

INSERT INTO `tbl_house` (`id`, `house`) VALUES
(5, '101'),
(6, '102'),
(7, '103'),
(8, '201'),
(9, '202'),
(10, '203'),
(11, '301'),
(12, '302'),
(13, '303'),
(14, '401'),
(15, '402'),
(16, '403'),
(17, '501'),
(18, '502'),
(19, '503'),
(20, '234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `t_id` varchar(255) NOT NULL,
  `r_id` varchar(255) NOT NULL,
  `house_no` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `pay` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `t_id`, `r_id`, `house_no`, `month`, `year`, `pay`) VALUES
(1, '1', '1', '1', 'Jan', '2021', '1300'),
(3, '2', '2', '1', 'Oct', '2021', '7000'),
(6, '3', '4', '12', 'Apr', '2021', '7000'),
(8, '2', '4', '18', 'Nov', '2021', '12000'),
(9, '2', '1', '17', 'Nov', '2021', '7000'),
(11, '2', '2', '6', 'Jan', '2021', '7000'),
(12, '2', '7', '8', 'Sep', '2021', '15000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rent`
--

CREATE TABLE `tbl_rent` (
  `id` int(11) NOT NULL,
  `t_id` varchar(255) NOT NULL,
  `house_no` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `rent` varchar(255) NOT NULL,
  `elc_bill` varchar(255) NOT NULL,
  `gass_bill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_rent`
--

INSERT INTO `tbl_rent` (`id`, `t_id`, `house_no`, `month`, `year`, `rent`, `elc_bill`, `gass_bill`) VALUES
(1, '1', '1', 'Jan', '2021', '500', '300', '500'),
(2, '2', '1', 'Nov', '2021', '9000', '1000', '1000'),
(3, '3', '9', 'Oct', '2021', '9000', '1000', '1000'),
(5, '4', '13', 'Sep', '2021', '12000', '1000', '1000'),
(6, '5', '--Select--', 'Nov', '2021', '12000', '1000', '1000'),
(7, '2', '15', 'Jan', '2021', '9000', '1000', '1000'),
(8, '2', '15', 'Dec', '2021', '1500', '1000', '1000'),
(9, '2', '6', 'Jan', '201', '12000', '100', '1200');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tenant`
--

CREATE TABLE `tbl_tenant` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `rent` varchar(255) NOT NULL,
  `house_no` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tenant`
--

INSERT INTO `tbl_tenant` (`id`, `name`, `p_address`, `gender`, `contact`, `nid`, `amount`, `rent`, `house_no`, `status`, `password`) VALUES
(2, 'Majharul Islam', 'Laksham, Cumilla', 'Male', '01738723623', '123347654', '100000', '9000', 5, '1', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(3, ' kazi Jahid Hasan', 'Barishal', 'Male', '01679665443', '456789633', '20000', '9500', 6, '1', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(4, 'Shamsul Alom', 'Dhaka', 'Male', '01620624958', '654778893', '50000', '15000', NULL, '1', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(5, 'Marzan Begum', 'Dishabondo', 'Female', '01707466452', '34563234', '19000', '12000', NULL, '1', '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `f_name`, `l_name`, `username`, `email`, `contact`, `password`) VALUES
(1, 'Kamal', 'Uddin', 'admin', 'admin@admin.com', '', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_house`
--
ALTER TABLE `tbl_house`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rent`
--
ALTER TABLE `tbl_rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tenant`
--
ALTER TABLE `tbl_tenant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_house`
--
ALTER TABLE `tbl_house`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_rent`
--
ALTER TABLE `tbl_rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_tenant`
--
ALTER TABLE `tbl_tenant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
