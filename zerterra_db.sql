-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2020 at 08:11 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zerterra_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_list`
--

CREATE TABLE `admin_list` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Position` varchar(20) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_list`
--

INSERT INTO `admin_list` (`id`, `Fullname`, `Password`, `Contact`, `Email`, `Position`, `is_active`) VALUES
(1, 'Salcedo, Paul', '123', '09954950384', 'paul.salcedo13@gmail.com', 'Super Admin', 1),
(2, 'bernardo', '111', '0312354321', 'laguardia.bernard@gmail.com', 'Admin', 1),
(3, 'Kevin Manlangit', '1234', '09560643505', 'kevmanlangit14@gmail.com', 'Admin', 1),
(4, 'Lenard Justimbaste', '1111', '09560643505', 'leng@gmail.com', 'Admin', 1),
(5, 'Charlotte Rom', '111', '09954950384', 'charlotte.rom14@gmail.com', 'Admin', 1),
(6, 'Elloise Lagario', '111', '09190002135', 'elloise@gmail.com', 'Admin', 0),
(7, 'Jayson Castrodes', '111', '09191234567', 'jaysoncastrodes@gmail.com', 'Admin', 0),
(8, 'Paul Adremesin', '123', '09560643505', 'pauladremesin@gmail.com', 'Admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `approved_order_list`
--

CREATE TABLE `approved_order_list` (
  `id` int(11) NOT NULL,
  `OrderNumber` varchar(20) NOT NULL,
  `SerialNumber` varchar(20) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approved_order_list`
--

INSERT INTO `approved_order_list` (`id`, `OrderNumber`, `SerialNumber`, `Firstname`, `Lastname`, `Email`, `Contact`, `Address`) VALUES
(1, '20200224-001118-02', '20200224-001118-01', 'Bernard', 'Laguardia', 'laguardia.bernard@gmail.com', '09954950384', 'Blk 28 Lot 31 Adelfa St. Evergreen Executive Village Bagumbong Caloocan City'),
(2, '20200223-132712-01', '20200224-043620-02', 'karl', 'manlangit', 'karl@gmail.com', '09954950384', '1347 campuput st area A camarin caloocan city'),
(3, '20200224-045323-01', '', 'sio', 'mai', 'siomai@gmail.com', '09191234567', 'bagumbong caloocan city'),
(4, '20200224-045323-01', '20200224-045713-04', 'sio', 'mai', 'siomai@gmail.com', '09191234567', 'bagumbong caloocan city'),
(5, '20200224-045323-01', '20200224-050250-05', 'sio', 'mai', 'siomai@gmail.com', '09191234567', 'bagumbong caloocan city'),
(16, '20200224-061523-01', ' 20200224-065328-06', 'karl', 'manlangit', 'paul.salcedo13@gmail.com', '09560643505', '1347 campuput st area A camarin caloocan city'),
(17, '20200224-061523-01', ' 20200224-065504-07', 'karl', 'manlangit', 'paul.salcedo13@gmail.com', '09560643505', '1347 campuput st area A camarin caloocan city'),
(18, '20200224-061523-01', ' 20200224-065823-08', 'karl', 'manlangit', 'paul.salcedo13@gmail.com', '09560643505', '1347 campuput st area A camarin caloocan city'),
(19, '20200224-061523-01', ' 20200224-070035-09', 'karl', 'manlangit', 'paul.salcedo13@gmail.com', '09560643505', '1347 campuput st area A camarin caloocan city'),
(20, '20200224-061523-01', ' 20200224-070204-010', 'karl', 'manlangit', 'paul.salcedo13@gmail.com', '09560643505', '1347 campuput st area A camarin caloocan city'),
(21, '20200224-061523-01', ' 20200224-070309-011', 'karl', 'manlangit', 'paul.salcedo13@gmail.com', '09560643505', '1347 campuput st area A camarin caloocan city'),
(22, '20200224-061523-01', ' 20200224-070445-012', 'karl', 'manlangit', 'paul.salcedo13@gmail.com', '09560643505', '1347 campuput st area A camarin caloocan city'),
(23, '20200224-061523-01', ' 20200224-070723-013', 'karl', 'manlangit', 'paul.salcedo13@gmail.com', '09560643505', '1347 campuput st area A camarin caloocan city'),
(24, '2002-0238-03', ' 20200226-14', 'ako si', 'ding', 'akosiding@darna.com', '09191234567', '1347 campuput st area A camarin caloocan city');

-- --------------------------------------------------------

--
-- Table structure for table `declined_order_list`
--

CREATE TABLE `declined_order_list` (
  `id` int(11) NOT NULL,
  `OrderNumber` varchar(20) NOT NULL,
  `Firstname` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivered_order_list`
--

CREATE TABLE `delivered_order_list` (
  `id` int(11) NOT NULL,
  `approved_id` varchar(10) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `is_activated` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pending_order_list`
--

CREATE TABLE `pending_order_list` (
  `id` int(11) NOT NULL,
  `OrderNumber` varchar(20) NOT NULL,
  `Firstname` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Message` varchar(225) NOT NULL,
  `is_approved` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_order_list`
--

INSERT INTO `pending_order_list` (`id`, `OrderNumber`, `Firstname`, `Lastname`, `Email`, `Contact`, `Address`, `Message`, `is_approved`) VALUES
(8, '20200224-061523-01', 'karl', 'manlangit', 'paul.salcedo13@gmail.com', '09560643505', '1347 campuput st area A camarin caloocan city', '', 0),
(9, '20200224-155845-02', 'Jayson', 'Castrodes', 'cas@gmail.com', '123456789', 'Kiko Caloocan City', 'hello world philippines', 0),
(10, '2002-0238-03', 'ako si', 'ding', 'akosiding@darna.com', '09191234567', '1347 campuput st area A camarin caloocan city', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `request_repair_list`
--

CREATE TABLE `request_repair_list` (
  `id` int(11) NOT NULL,
  `RequestNumber` varchar(15) NOT NULL,
  `SerialNumber` varchar(15) NOT NULL,
  `Firstname` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `is_approved` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_repair_list`
--

INSERT INTO `request_repair_list` (`id`, `RequestNumber`, `SerialNumber`, `Firstname`, `Lastname`, `Email`, `Contact`, `Address`, `is_approved`) VALUES
(1, '1321839228', '20020749-01', 'ako si', 'Ding', 'paul.salcedo13@gmail.com', '09191234567', 'Blk 28 Lot 31 Adelfa St. Evergreen Executive Village Bagumbong Caloocan City', 0),
(2, '1321839227', '20020749-01', 'ako si', 'darna', 'akosibatman@gotham.com', '09191234567', '1347 campuput st area A camarin caloocan city', 0),
(3, '1321839229', '20020749-01', 'ako si', 'darna', 'akosibatman@gotham.com', '09191234567', '1347 campuput st area A camarin caloocan city', 0),
(4, '200225-2323-04', '20020749-01', 'Ako si', 'Darna', 'akosibatman@gotham.com', '', 'Blk 28 Lot 31 Adelfa St. Evergreen Executive Village Bagumbong Caloocan City', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblactionlog`
--

CREATE TABLE `tblactionlog` (
  `id` int(11) NOT NULL,
  `Author` varchar(20) NOT NULL,
  `Action` varchar(50) NOT NULL,
  `DateAction` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblsales_list`
--

CREATE TABLE `tblsales_list` (
  `id` int(11) NOT NULL,
  `TransactionNumber` varchar(20) NOT NULL,
  `Firstname` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Amount` varchar(10) NOT NULL,
  `Vat` varchar(10) NOT NULL,
  `Date_Purchased` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `SerialNumber` varchar(25) NOT NULL,
  `Firstname` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `RemainingDays` varchar(10) NOT NULL,
  `DateRegistered` varchar(10) NOT NULL,
  `DateExpired` varchar(10) NOT NULL,
  `Hours` varchar(5) NOT NULL,
  `Minutes` varchar(5) NOT NULL,
  `Seconds` varchar(5) NOT NULL,
  `CapacityLevel` varchar(10) NOT NULL,
  `CurrentWeight` varchar(10) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_confirmed` int(11) NOT NULL DEFAULT 0,
  `token` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `SerialNumber`, `Firstname`, `Lastname`, `Contact`, `Email`, `Password`, `RemainingDays`, `DateRegistered`, `DateExpired`, `Hours`, `Minutes`, `Seconds`, `CapacityLevel`, `CurrentWeight`, `is_active`, `is_confirmed`, `token`) VALUES
(1, '20020749-01', 'Ako si', 'Darna', '09191234567', 'akosibatman@gotham.com', '123', '170', '07-25-2019', '07-25-2020', '50', '24', '50', '55', '68', 1, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_list`
--
ALTER TABLE `admin_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approved_order_list`
--
ALTER TABLE `approved_order_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `declined_order_list`
--
ALTER TABLE `declined_order_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivered_order_list`
--
ALTER TABLE `delivered_order_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending_order_list`
--
ALTER TABLE `pending_order_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_repair_list`
--
ALTER TABLE `request_repair_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblactionlog`
--
ALTER TABLE `tblactionlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsales_list`
--
ALTER TABLE `tblsales_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_list`
--
ALTER TABLE `admin_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `approved_order_list`
--
ALTER TABLE `approved_order_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `declined_order_list`
--
ALTER TABLE `declined_order_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivered_order_list`
--
ALTER TABLE `delivered_order_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pending_order_list`
--
ALTER TABLE `pending_order_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `request_repair_list`
--
ALTER TABLE `request_repair_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblactionlog`
--
ALTER TABLE `tblactionlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblsales_list`
--
ALTER TABLE `tblsales_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
