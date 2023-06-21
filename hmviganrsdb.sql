-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 10:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmviganrsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE `accommodation` (
  `AccomID` varchar(45) NOT NULL,
  `RName` varchar(45) NOT NULL,
  `Status` int(1) NOT NULL,
  `RoomNum` int(1) NOT NULL,
  `FloorNum` int(1) NOT NULL,
  `RoomType` varchar(45) NOT NULL,
  `Description` varchar(999) NOT NULL,
  `Capacity` varchar(25) NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accommodation`
--

INSERT INTO `accommodation` (`AccomID`, `RName`, `Status`, `RoomNum`, `FloorNum`, `RoomType`, `Description`, `Capacity`, `Price`) VALUES
('A001', 'First Single', 1, 1, 1, 'Single Room', 'Single bed, toilet & bad, mini cabinet and desk, and television.', '1 adult', 500),
('A002', 'Second Single', 0, 2, 1, 'Single Room', 'Single bed, toilet & bad, mini cabinet and desk, and television.', '1 adult', 500),
('A003', 'Third Single', 1, 3, 1, 'Single Room', 'Single bed, toilet & bad, mini cabinet and desk, and television.', '1 adult', 500),
('B101', 'First Couple', 0, 4, 2, 'Standard Room', 'Double bed, toilet & bad, big cabinet and desk, and telivision, air conditioned.', '2 adult(s)', 1000),
('B102', 'Second Couple', 1, 5, 2, 'Standard Room', 'Double bed, toilet & bad, big cabinet and desk, and telivision, air conditioned.', '2 adult(s)', 1000),
('B103', 'Third Couple', 1, 6, 2, 'Standard Room', 'Double bed, toilet & bad, big cabinet and desk, and telivision, air conditioned.', '2 adult(s)', 1000),
('C201', 'First Family', 1, 7, 3, 'Deluxe Room', '3 king size bed, 2 standard bed, kitchen, toilet & bath, air conditioned', '3 adult(s) 4 children', 4000),
('C202', 'Second Family', 0, 8, 3, 'Deluxe Room', '3 king size bed, 2 standard bed, kitchen, toilet & bath, air conditioned', '3 adult(s) 4 children', 4000),
('C203', 'Third Family', 1, 9, 3, 'Deluxe Room', '3 king size bed, 2 standard bed, kitchen, toilet & bath, air conditioned', '3 adult(s) 4 children', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `Fname` varchar(45) NOT NULL,
  `Mname` varchar(45) DEFAULT NULL,
  `Lname` varchar(45) NOT NULL,
  `Username` varchar(45) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `ContactNum` varchar(11) DEFAULT NULL,
  `Birthday` date NOT NULL,
  `UserAddress` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `Fname`, `Mname`, `Lname`, `Username`, `password`, `email_address`, `ContactNum`, `Birthday`, `UserAddress`, `Gender`) VALUES
(1, 'Mark Angelu', '', 'Anicas', '', '12345', 'markangelu29@gmail.com', '0', '2002-09-17', '', ''),
(2, 'Trhishane', 'Pablico', 'Cariaga', 'tcpcariaga', '11111', 'tcpcariaga@gmail.com', '09760299301', '2003-02-10', 'Ilocos Sur', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `full_name`, `email`, `message`) VALUES
(1, 'Mark Angelu Anicas', 'markangelu29@gmail.com', 'Content here!'),
(5, 'John Rey Soberano', 'jrsob@gmail.com', 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_history`
--

CREATE TABLE `reservation_history` (
  `history_id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `room_type` varchar(25) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation_history`
--

INSERT INTO `reservation_history` (`history_id`, `first_name`, `middle_name`, `last_name`, `email`, `contact_number`, `room_type`, `check_in`, `check_out`) VALUES
(1, 'Nicvf', 'Hgf', 'Gfh', 'trhishanec@gmail.com', '2147483647', 'Standard Room', '2023-06-10', '2023-06-12'),
(2, 'Trhishane', 'Pablico', 'Cariaga', 'nicole@gmail.com', '2147483647', 'Standard Room', '2023-06-10', '2023-06-13'),
(3, 'Trhishane', 'Pablico', 'Cariaga', 'nicole@gmail.com', '2147483647', 'Standard Room', '2023-06-10', '2023-06-13'),
(4, 'Trhishane', 'Pablico', 'Cariaga', 'trhishanec@gmail.com', '2147483647', 'Deluxe Room', '2023-06-11', '2023-06-15'),
(5, 'Trhishane', 'Pablico', 'Cariaga', 'trhishanec@gmail.com', '09123456789', 'Deluxe Room', '2023-06-11', '2023-06-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`AccomID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `reservation_history`
--
ALTER TABLE `reservation_history`
  ADD PRIMARY KEY (`history_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservation_history`
--
ALTER TABLE `reservation_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
