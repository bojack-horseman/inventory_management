-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 22, 2019 at 12:59 PM
-- Server version: 5.7.21
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `product_id` varchar(12) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `vendor` varchar(30) NOT NULL,
  `mrp` int(6) NOT NULL,
  `batch_number` varchar(12) NOT NULL,
  `batch_date` date NOT NULL,
  `quantity` int(6) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `product_id`, `product_name`, `vendor`, `mrp`, `batch_number`, `batch_date`, `quantity`, `status`) VALUES
(1, 'P0001', 'Levis Green Tshirt', 'Levis India', 399, 'B0001', '2019-03-15', 5, 'Pending'),
(3, 'P0003', 'Levis Yellow Tshirt', 'Levis China', 795, 'B0003', '2019-04-01', 9, 'Approved'),
(4, 'P0004', 'Levis Blue Shirt', 'Levis Brazil', 990, 'B0004', '2019-01-06', 4, 'Approved'),
(6, 'P0006', 'Levis Red Shirt', 'Levis Germany', 590, 'B0006', '2017-09-05', 6, 'Pending'),
(7, 'P0007', 'Levis White Tshirt', 'Levis USA', 999, 'B0007', '2018-08-02', 13, 'Pending'),
(8, 'P0008', 'Levis Cyan Shirt', 'Levis Bangladesh', 499, 'B0008', '2018-05-03', 15, 'Pending'),
(10, 'P0010', 'Levis Maroon TShirt', 'Levis Mexico', 985, 'B0010', '2016-08-14', 11, 'Approved'),
(12, 'P0012', 'Levis Teal Shirt', 'Levis Italy', 949, 'B0012', '2018-12-12', 12, 'Approved'),
(14, 'P0015', 'Levis Black Shirt', 'Levis France', 1549, 'B0015', '2018-03-12', 15, 'Approved'),
(15, 'P0007', 'Levis White Tshirt', 'Levis USA', 999, 'B0007', '2018-08-02', 19, 'Approved'),
(19, 'P0012', 'Levis Teal Shirt', 'Levis Italy', 149, 'B0012', '2018-12-12', 12, 'Approved'),
(20, 'P0015', 'Levis Black Shirt', 'Levis Mongolia', 1869, 'B0015', '2018-03-12', 15, 'Approved'),
(22, 'P0017', 'Levis Denim Shirt', 'Levis Portugal', 2569, 'B0017', '2018-11-12', 13, 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
