-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2024 at 10:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_state`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(25) NOT NULL,
  `buyer_name` varchar(255) NOT NULL,
  `buyer_phone` int(25) NOT NULL,
  `buyer_email` varchar(25) NOT NULL,
  `apt_date` varchar(25) NOT NULL,
  `apt_time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `buyer_name`, `buyer_phone`, `buyer_email`, `apt_date`, `apt_time`) VALUES
(1, 'john Mack', 334555, 'adorzaman18@gmail.com', '2024-01-06', '00:20');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `price` int(25) NOT NULL,
  `details` varchar(255) NOT NULL,
  `type` varchar(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`id`, `name`, `location`, `price`, `details`, `type`, `status`) VALUES
(1, 'Duplex House', 'Rajbari, Dinajpur', 1000000, 'There are 4 bed room with attach bath. Rooms are well decorated.', 'Sell', 2),
(2, 'House2', 'Basherhut', 1000, 'Details....', 'Rent', 1),
(3, 'House -4', 'Sadar', 20000, 'Details....', 'Sell', 2),
(4, 'House Duplex', 'Medical More', 3000, 'Details....', 'Rent', 0);

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `house` int(11) NOT NULL,
  `price` int(25) NOT NULL,
  `date` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`id`, `name`, `phone`, `address`, `house`, `price`, `date`) VALUES
(1, 'ador zaman', 1751018490, 'Rangpur', 1, 8000, '');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id` int(25) NOT NULL,
  `buyer_name` varchar(255) NOT NULL,
  `buyer_phone` int(25) NOT NULL,
  `house` int(25) NOT NULL,
  `monthly_cost` int(25) NOT NULL,
  `paid` int(25) NOT NULL,
  `price` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `buyer_name`, `buyer_phone`, `house`, `monthly_cost`, `paid`, `price`) VALUES
(1, 'john Smith', 3333, 0, 2500, 6000, 10000),
(2, 'john Smith3', 444, 1, 2500, 1000, 20000),
(3, 'john Mack', 4533222, 2, 4000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `id` int(25) NOT NULL,
  `buyer_name` varchar(255) NOT NULL,
  `buyer_phone` int(25) NOT NULL,
  `house` int(25) NOT NULL,
  `price` int(25) NOT NULL,
  `paid` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `buyer_name`, `buyer_phone`, `house`, `price`, `paid`) VALUES
(1, 'john Mack', 2147483647, 1, 350000, 350000),
(4, 'john Smith', 29339333, 1, 0, 250000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interest`
--
ALTER TABLE `interest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `interest`
--
ALTER TABLE `interest`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
