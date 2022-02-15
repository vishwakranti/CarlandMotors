-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 07:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cardealership`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(7) NOT NULL,
  `manufacturer` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `colour` varchar(25) NOT NULL,
  `year` int(11) NOT NULL,
  `fuel_type` varchar(100) NOT NULL,
  `registration` varchar(10) NOT NULL,
  `mileage` int(11) NOT NULL,
  `transmission_type` varchar(15) NOT NULL,
  `car_condition` varchar(4) NOT NULL,
  `category_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `manufacturer`, `model`, `colour`, `year`, `fuel_type`, `registration`, `mileage`, `transmission_type`, `car_condition`, `category_id`) VALUES
(1, 'Mitsubishi', 'RVR', 'RED', 2005, 'Petrol', 'ABC111', 105000, 'Automatic', 'Used', 2),
(2, 'Subaru', 'Forester', 'Black', 2011, 'Petrol', 'ABC2', 95000, 'Automatic', 'Used', 1),
(3, 'Honda', 'CRV', 'Yellow', 2019, 'Hybrid', 'ABC3', 30000, 'Automatic', 'Used', 1),
(4, 'Mazda', 'GLX', 'Purple', 2020, 'Diesel', 'ABC5', 60000, 'Automatic', 'Used', 2),
(5, 'Suzuki', 'Samurai', 'Green', 2014, 'Electric', 'ABC6', 59000, 'Automatic', 'Used', 3),
(6, 'Toyota', 'Rav-4', 'Silver', 2007, 'Petrol', 'ABC12', 55000, 'Automatic', 'Used', 2),
(7, 'Armastrong', 'Mini Cooper', 'Metal Black', 2021, 'Petrol', 'ASE32', 0, 'Automatic', 'New', 1),
(8, 'Jeep', 'ASX-1', 'White', 2020, 'Diesel', 'ABC12', 20000, 'Automatic', 'Used', 3),
(9, 'Lexus', 'F-Sport', 'Blue', 2021, 'Hybrid', 'ABC38', 0, 'Automatic', 'New', 3),
(10, 'Holden', 'SZ1', 'Pearl White', 2009, 'Diesel', 'XYZ123', 76000, 'Manual', 'Used', 2),
(11, 'Kia', 'Sorento', 'Dark Green', 2021, 'Petrol', 'ABC87', 0, 'Automatic', 'New', 1),
(12, 'Ford', 'Fiesta', 'Black', 2011, 'Petrol', 'ABC123', 55000, 'Manual', 'Used', 2),
(13, 'Nissan', 'Maxima', 'Metal Black', 2021, 'Electric', 'ABC32', 0, 'Automatic', 'New', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(4) NOT NULL,
  `category_type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_type`) VALUES
(1, 'Luxury'),
(2, 'Family'),
(3, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `commission`
--

CREATE TABLE `commission` (
  `commission_id` int(6) NOT NULL,
  `amount` decimal(5,0) NOT NULL,
  `employee_id` int(6) NOT NULL,
  `month` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commission`
--

INSERT INTO `commission` (`commission_id`, `amount`, `employee_id`, `month`) VALUES
(1, '8750', 2, 12),
(2, '1500', 3, 9),
(3, '1600', 4, 5),
(4, '9800', 5, 7),
(5, '8400', 6, 12);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(7) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `driver_license_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `address`, `mobile_no`, `driver_license_no`) VALUES
(1, 'Jon', 'Ray', '4A,Wilson Street, Tauranga, Newzealand', 2109312189, 'xyzwe1234'),
(2, 'Ella', 'Green', '25, Miles Bay, Nelson, Newzealand', 223897705, 'njhtuy878'),
(3, 'Maria', 'Joe', '123, Biliards Height, Taupo, NewZealand', 226547899, 'abdht567'),
(4, 'Sam', 'Desouza', '238, Westlake, NewZealand', 2109342123, 'njhtuy980'),
(5, 'Rosa', 'Dell', '5 Marina Beach, Akaroa, NewZealnd ', 218721345, 'abdht5098');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `employee_role_id` int(3) NOT NULL,
  `mobile_number` int(10) NOT NULL,
  `salary` decimal(6,0) NOT NULL,
  `branch` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `first_name`, `last_name`, `employee_role_id`, `mobile_number`, `salary`, `branch`) VALUES
(1, 'Jacquie', 'Shawn', 1, 2134345467, '60000', 'Auckland'),
(2, 'Jim', 'Gill', 2, 226789767, '110000', 'Auckland'),
(3, 'Kanak', 'Gore', 3, 2143565678, '70000', 'Hamilton'),
(4, 'Hemish', 'Shaw', 1, 223458787, '80000', 'Wellington'),
(5, 'Ben', 'Martin', 2, 2121678987, '130000', 'Wellington'),
(6, 'Shaan', 'Norway', 3, 232145678, '90000', 'Hamilton');

-- --------------------------------------------------------

--
-- Table structure for table `employee_role`
--

CREATE TABLE `employee_role` (
  `Role_id` int(3) NOT NULL,
  `Role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_role`
--

INSERT INTO `employee_role` (`Role_id`, `Role`) VALUES
(1, 'Admin'),
(2, 'Manager'),
(3, 'Salesperson');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(6) NOT NULL,
  `amount` decimal(7,0) NOT NULL,
  `invoice_date` date NOT NULL,
  `customer_id` int(6) NOT NULL,
  `sale_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `amount`, `invoice_date`, `customer_id`, `sale_id`) VALUES
(1, '95000', '2011-03-03', 2, 1),
(2, '30000', '2019-12-01', 2, 2),
(3, '32000', '2020-06-15', 4, 4),
(4, '140000', '2021-07-01', 5, 5),
(5, '30000', '2019-05-21', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `performance_id` int(6) NOT NULL,
  `employee_id` int(6) NOT NULL,
  `bonus` decimal(6,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`performance_id`, `employee_id`, `bonus`) VALUES
(1, 5, '1221'),
(2, 2, '1100'),
(3, 6, '900');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(6) NOT NULL,
  `car_id` int(6) NOT NULL,
  `sale_amount` decimal(7,0) NOT NULL,
  `employee_id` int(5) NOT NULL,
  `customer_id` int(6) NOT NULL,
  `sales_date` date NOT NULL,
  `warranty_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `car_id`, `sale_amount`, `employee_id`, `customer_id`, `sales_date`, `warranty_id`) VALUES
(1, 2, '95000', 2, 2, '2011-03-03', 3),
(2, 3, '30000', 2, 2, '2019-12-01', 2),
(3, 3, '30000', 3, 3, '2019-05-21', 3),
(4, 4, '32000', 4, 4, '2020-06-15', 2),
(5, 7, '140000', 5, 5, '2021-07-01', 4),
(6, 11, '120000', 6, 1, '2021-10-05', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sales_person_of_the_year`
--

CREATE TABLE `sales_person_of_the_year` (
  `salespersonoftheyear_id` int(6) NOT NULL,
  `employee_id` int(6) NOT NULL,
  `year` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_person_of_the_year`
--

INSERT INTO `sales_person_of_the_year` (`salespersonoftheyear_id`, `employee_id`, `year`) VALUES
(1, 2, 2020),
(2, 2, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `warranties`
--

CREATE TABLE `warranties` (
  `warranty_id` int(6) NOT NULL,
  `years` int(2) NOT NULL,
  `cost` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warranties`
--

INSERT INTO `warranties` (`warranty_id`, `years`, `cost`) VALUES
(1, 4, '1800'),
(2, 2, '1200'),
(3, 3, '1500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `category_fk` (`category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `commission`
--
ALTER TABLE `commission`
  ADD PRIMARY KEY (`commission_id`),
  ADD KEY `employee_fk1` (`employee_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `employee_role_fk` (`employee_role_id`);

--
-- Indexes for table `employee_role`
--
ALTER TABLE `employee_role`
  ADD PRIMARY KEY (`Role_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD UNIQUE KEY `id` (`invoice_id`),
  ADD KEY `sales_fk` (`sale_id`),
  ADD KEY `customer_fk` (`customer_id`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`performance_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`),
  ADD KEY `employee_fk` (`employee_id`),
  ADD KEY `customer_fk2` (`customer_id`),
  ADD KEY `car_fk1` (`car_id`);

--
-- Indexes for table `sales_person_of_the_year`
--
ALTER TABLE `sales_person_of_the_year`
  ADD PRIMARY KEY (`salespersonoftheyear_id`);

--
-- Indexes for table `warranties`
--
ALTER TABLE `warranties`
  ADD PRIMARY KEY (`warranty_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `commission`
--
ALTER TABLE `commission`
  MODIFY `commission_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee_role`
--
ALTER TABLE `employee_role`
  MODIFY `Role_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `performance`
--
ALTER TABLE `performance`
  MODIFY `performance_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales_person_of_the_year`
--
ALTER TABLE `sales_person_of_the_year`
  MODIFY `salespersonoftheyear_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `warranties`
--
ALTER TABLE `warranties`
  MODIFY `warranty_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `category_fk` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `commission`
--
ALTER TABLE `commission`
  ADD CONSTRAINT `employee_fk1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_role_fk` FOREIGN KEY (`employee_role_id`) REFERENCES `employee_role` (`Role_id`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `customer_fk` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `sales_fk` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`sales_id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `car_fk1` FOREIGN KEY (`car_id`) REFERENCES `car` (`car_id`),
  ADD CONSTRAINT `customer_fk2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `employee_fk` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
