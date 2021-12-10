-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 07:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greengro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL DEFAULT 'admin@greengro.com',
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(3, 'admin@123.com', '96b9c62c86f35c209c5b8c302ba34175'),
(2, 'admin@greengro.com', 'e3274be5c857fb42ab72d786e281b4b8');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `plantid` int(11) NOT NULL,
  `custmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `plantid`, `custmail`) VALUES
(58, 4, 'tracy@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `paymentstatus` enum('Not Paid','Paid') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `username`, `email`, `password`, `paymentstatus`) VALUES
(1, 'Ameyibor', 'tracy@somemail.com', 'f6a0f3655b26fe4', 'Paid'),
(2, '', 'ayeyidjan@gmail.com', 'this', 'Paid'),
(5, 'Tracz', 'banyin.djan@ashesi.edu.gh', 'test', 'Paid'),
(8, 'Tracy', 'ayeyidjan@ashesi.edu.gh', '098f6bcd4621d37', 'Paid'),
(15, 'Ayeyi_Djan', 'bethelayodeji@yahoo.com', '1a1dc91c907325c', 'Not Paid'),
(16, 'Selasi', 'selasi@gmail.com', '77a5e2748188539', 'Paid'),
(17, 'Tracy Edem', 'tracy@email.com', '5713a878bf70c6f', 'Paid'),
(18, 'Traci', 'traci@email.com', '59538666f45517d', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `functionality`
--

CREATE TABLE `functionality` (
  `functid` int(11) NOT NULL,
  `functionality` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `functionality`
--

INSERT INTO `functionality` (`functid`, `functionality`) VALUES
(1, 'Medicinal'),
(2, 'Ornamental'),
(3, 'Aromatic');

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `plant_no` int(11) NOT NULL,
  `sci_name` varchar(40) DEFAULT NULL,
  `common_name` varchar(40) NOT NULL,
  `functid` int(11) DEFAULT NULL,
  `rareness` enum('common','rare','very rare') DEFAULT NULL,
  `price` float DEFAULT NULL,
  `availability` enum('In Stock','Out of Stock') NOT NULL,
  `image` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`plant_no`, `sci_name`, `common_name`, `functid`, `rareness`, `price`, `availability`, `image`) VALUES
(1, 'Aloe barbadensis mille', 'Aloe Vera', 1, 'common', 20, 'Out of Stock', ''),
(2, 'Matricaria chamomilla', 'Chamomile', 1, 'rare', 60, 'In Stock', ''),
(3, 'Asphodelaceae', 'Succulents', 2, 'very rare', 100, 'Out of Stock', ''),
(4, 'Mentha', 'Mint', 3, 'rare', 50, 'In Stock', ''),
(5, 'Lavandula', 'Lavender', 2, 'very rare', 150, 'In Stock', ''),
(6, 'Salvia rosmarinus', 'Rosemary', 3, 'common', 35, 'Out of Stock', ''),
(7, 'Monarda citriodora', 'Bee Balm', 1, 'very rare', 300, 'Out of Stock', ''),
(8, 'Foeniculum vulgare', 'Fennel', 2, 'rare', 250, 'Out of Stock', ''),
(9, 'Pimpinella anisum', 'Anise', 3, 'very rare', 600, 'Out of Stock', ''),
(10, 'Petroselinum crispum', 'Parsley', 3, 'rare', 250, 'In Stock', ''),
(11, 'Mentha × piperita', 'Peppermint', 1, 'common', 100, 'In Stock', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`password`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `plantid` (`plantid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `functionality`
--
ALTER TABLE `functionality`
  ADD PRIMARY KEY (`functid`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`plant_no`),
  ADD UNIQUE KEY `common_name` (`common_name`),
  ADD UNIQUE KEY `sci_name` (`sci_name`),
  ADD UNIQUE KEY `sci_name_2` (`sci_name`),
  ADD KEY `functionid` (`functid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `functionality`
--
ALTER TABLE `functionality`
  MODIFY `functid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `plant_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`plantid`) REFERENCES `plant` (`plant_no`);

--
-- Constraints for table `plant`
--
ALTER TABLE `plant`
  ADD CONSTRAINT `plant_ibfk_1` FOREIGN KEY (`functid`) REFERENCES `functionality` (`functid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
