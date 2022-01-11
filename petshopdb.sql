-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 04:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `creditcard_details`
--

CREATE TABLE `creditcard_details` (
  `card_number` int(10) NOT NULL,
  `expiry_date` varchar(30) NOT NULL,
  `card_pin` int(5) NOT NULL,
  `user_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creditcard_details`
--

INSERT INTO `creditcard_details` (`card_number`, `expiry_date`, `card_pin`, `user_name`) VALUES
(1123, '2323-02-02', 23, 'admin'),
(1123, '2323-02-02', 23, 'admin'),
(123, '1212-12-12', 12121212, 'admin'),
(123, '1212-12-12', 12121212, 'admin'),
(123, '1212-12-12', 12121212, 'admin'),
(345567, '2022-02-23', 2233, 'Faaris'),
(1234, '2022-12-12', 1212, 'TEST'),
(0, '', 0, ''),
(0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pet_details`
--

CREATE TABLE `pet_details` (
  `pet_type` varchar(200) NOT NULL,
  `pet_name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet_details`
--

INSERT INTO `pet_details` (`pet_type`, `pet_name`, `price`) VALUES
('dog', 'Pug', '$100'),
('dog', 'Labrador', '$250'),
('dog', 'Golden Retriever', '$540'),
('dog', 'German Shepherd', '$300'),
('cat', 'Persian', '$200'),
('cat', 'Himalayan', '$400'),
('cat', 'Bombay Cat', '$350'),
('cat', 'Short Haired', '$250');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_name`, `password`, `phone_number`) VALUES
(7, 'admin', '1212', '1212'),
(10, 'Faaris', 'Faaris@12', '8088675435'),
(11, 'TEST', 'TEST', '8088153896');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
