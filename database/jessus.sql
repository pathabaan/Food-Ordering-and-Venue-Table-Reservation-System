-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 05:45 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jessus`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `order_id` int(11) NOT NULL,
  `order_time` time NOT NULL,
  `order_date` date NOT NULL,
  `order_tamount` double NOT NULL,
  `order_passcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `prod_id` int(11) NOT NULL,
  `prod_code` char(100) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_desc` varchar(255) NOT NULL,
  `prod_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`prod_id`, `prod_code`, `prod_name`, `prod_price`, `prod_desc`, `prod_image`) VALUES
(3, 'C1', 'Chicken', 454, 'asdhsakdsadja', 'uploads/img2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reserve_tbl`
--

CREATE TABLE `reserve_tbl` (
  `reserve_id` int(11) NOT NULL,
  `reserve_time` time NOT NULL,
  `reserve_date` date NOT NULL,
  `reserve_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_tbl`
--

CREATE TABLE `table_tbl` (
  `table_id` int(11) NOT NULL,
  `table_name` char(3) NOT NULL,
  `table_seat` int(11) NOT NULL,
  `table_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_tbl`
--

INSERT INTO `table_tbl` (`table_id`, `table_name`, `table_seat`, `table_status`) VALUES
(19, 'TB1', 4, 'Available'),
(20, 'TB2', 4, 'Available'),
(21, 'TB3', 4, 'Available'),
(22, 'TB4', 4, 'Available'),
(23, 'TB5', 1, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `mname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `mname`, `lname`, `username`, `password`, `role`) VALUES
(1, 'Jane', 'Doe', 'Smith', 'user', '12dea96fec20593566ab75692c9949596833adc9', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `reserve_tbl`
--
ALTER TABLE `reserve_tbl`
  ADD PRIMARY KEY (`reserve_id`);

--
-- Indexes for table `table_tbl`
--
ALTER TABLE `table_tbl`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reserve_tbl`
--
ALTER TABLE `reserve_tbl`
  MODIFY `reserve_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_tbl`
--
ALTER TABLE `table_tbl`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
