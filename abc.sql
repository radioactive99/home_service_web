-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 07:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `address_id` int(11) NOT NULL,
  `address_detail` varchar(100) NOT NULL,
  `city_name` varchar(45) NOT NULL,
  `state_name` varchar(45) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `order_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_email` varchar(75) NOT NULL,
  `customers_password` varchar(255) NOT NULL,
  `customers_firstname` varchar(40) NOT NULL,
  `customers_lastname` varchar(40) NOT NULL,
  `customers_status` tinyint(4) DEFAULT NULL,
  `customers_mobile_number` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_email`, `customers_password`, `customers_firstname`, `customers_lastname`, `customers_status`, `customers_mobile_number`) VALUES
(1, 'kadevalsanket@gmail.com', 'sanekt', 'kadeval', 'sanket', 0, 2147483647),
(2, 'pabarivivek@gmail.com', 'vivek', 'Pabari', 'Vivek', 0, 1234567892),
(3, 'sodhaakshat@gmail.com', 'akshat', 'sodha', 'akshat', 0, 2147483647),
(4, 'sorathiyauttam@gmail.com', 'uttam', 'sorathiya', 'uttam', 0, 2147483647),
(5, 'ramshingala@gmail.com', 'ram', 'ram', 'shingala', 0, 0),
(6, 'anirudh@gmail.com', 'anirudh', 'anirudh', 'vekariya', 0, 0),
(7, 'jenish@gmail.com', 'jenish', 'jenish', 'vasani', 0, 0),
(8, 'sagar@gmail.com', 'sagar', 'sagar ', 'ramani', 0, 951214),
(9, 'lalo@gmail.com', 'lalo', 'lalo', 'vasani', 0, 95121425),
(10, 'rajni@gmail.com', 'rajni', 'kadeval', 'rajni', 0, 2147483647),
(11, 'jay@gmail.com', 'jay', 'kadeval', 'jay', 0, 2147483647),
(12, 'pratik@gmail.com', 'prat', 'kadeval', 'pratik', 0, 2147483647),
(13, 'urvish@gmail.com', 'urvishka', 'kadeval', 'urvish', 0, 1234567892),
(14, 'nikunj@gmail.com', 'nikunjdu', 'dudhat', 'nikunj', 0, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `customer_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `technician_id` int(11) NOT NULL,
  `amount` int(7) NOT NULL,
  `creation_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `date` date NOT NULL,
  `orders_status` tinyint(4) NOT NULL,
  `address_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(45) NOT NULL,
  `payment_amount` int(7) NOT NULL,
  `payment_status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `technican&services`
--

CREATE TABLE `technican&services` (
  `techician_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `technician_details`
--

CREATE TABLE `technician_details` (
  `technician_id` int(11) NOT NULL,
  `technician_name` varchar(45) NOT NULL,
  `technician_email` varchar(45) NOT NULL,
  `technician_password` varchar(45) NOT NULL,
  `technician_phonenumber` int(10) NOT NULL,
  `technician_address` varchar(200) NOT NULL,
  `technician_city` varchar(45) NOT NULL,
  `technician_state` varchar(45) NOT NULL,
  `technician_pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(225) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `order_id_idx` (`order_id`),
  ADD KEY `service_id_idx` (`service_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD KEY `address_id_idx` (`address_id`),
  ADD KEY `customer_id_idx` (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `technician_id_idx` (`technician_id`),
  ADD KEY `customer_id_idx` (`customer_id`),
  ADD KEY `address_idx` (`address_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `order_id_idx` (`order_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `technican&services`
--
ALTER TABLE `technican&services`
  ADD KEY `technician_id_idx` (`techician_id`),
  ADD KEY `service_idx` (`service_id`);

--
-- Indexes for table `technician_details`
--
ALTER TABLE `technician_details`
  ADD PRIMARY KEY (`technician_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `technician_details`
--
ALTER TABLE `technician_details`
  MODIFY `technician_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `order_id_f_k` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `service_id_f_k` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD CONSTRAINT `address_id` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`address_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `address_id_f_k` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`address_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `customer_id_f_k` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `technican&services`
--
ALTER TABLE `technican&services`
  ADD CONSTRAINT `service` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `technician_id` FOREIGN KEY (`techician_id`) REFERENCES `technician_details` (`technician_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
