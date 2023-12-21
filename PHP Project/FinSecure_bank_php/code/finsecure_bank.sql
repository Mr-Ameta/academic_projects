-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2023 at 06:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finsecure_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`, `number`) VALUES
(1, 'admin@finsecure.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sr` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobileno` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sr`, `name`, `mobileno`, `email`, `message`) VALUES
(1, 'Mahesh', 8160205701, 'mrametabusiness@gmail.com', '\r\n    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim doloremque quam natus debitis officia voluptas quasi, excepturi provident ut ab, nam ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `sr` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rating` int(2) NOT NULL,
  `comment` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sr`, `name`, `rating`, `comment`) VALUES
(1, 'mahesh', 1, 'dfgaerga'),
(2, 'admin', 10, 'hello world');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `date`) VALUES
(1, 'mrametabusiness@gmail.com', '2023-08-23'),
(2, 'maheshameta723@gmail.com', '2023-08-23'),
(3, 'maheshameta723@gmail.com', '2023-08-23'),
(4, 'maheshameta723@gmail.com', '2023-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transection_id` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `from_ac` bigint(11) NOT NULL,
  `to_ac` bigint(11) NOT NULL,
  `amount` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transection_id`, `date`, `from_ac`, `to_ac`, `amount`) VALUES
('', '2023-08-24', 0, 3610100018525, 2500),
('64e6cfd530bf0', '2023-08-24', 3610100018525, 3610100018528, 500),
('64e6d2210f3db', '2023-08-24', 3610100018525, 3610100018528, 2000),
('64e6d2335cbfc', '2023-08-24', 3610100018525, 3610100018528, 2000),
('64e6d3399e61b', '2023-08-24', 3610100018530, 3610100018525, 100),
('64e6dc2d82b10', '2023-08-24', 0, 3610100018525, 500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` varchar(50) DEFAULT NULL,
  `account_no` bigint(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `alt_contact` bigint(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(500) NOT NULL,
  `acc_create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `transction_pin` int(11) NOT NULL,
  `usr_img` varchar(255) NOT NULL,
  `balance` double DEFAULT 0,
  `last_login` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `account_no`, `email`, `password`, `f_name`, `l_name`, `contact`, `alt_contact`, `dob`, `address`, `acc_create_date`, `transction_pin`, `usr_img`, `balance`, `last_login`) VALUES
('mahesh01', 3610100018525, 'mrametabusiness@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Mahesh', 'Ameta', 8160205701, 9428492516, '2002-02-27', 'riddhi siddhi park rajkot', '2023-08-04 02:10:17', 2722, 'upload/fs.jpeg', 6600, '2023/08/24  09:52 am'),
('64cd2e994da37', 3610100018528, 'maheshameta723@gmail.com', '$2y$10$h4y6qTZJwbuX7AO0XV/QKOYC81oaj5wFLig7sFsPIqp', 'Mahesh', 'Joshi', 8160205701, 9428492516, '2002-02-27', 'rajkot', '2023-08-04 17:00:09', 2516, 'upload/maheshameta723@gmail.com/FB_IMG_1649510302553.jpg', 20000, '2023/08/23  10:41 pm'),
('64e63fa855d72', 3610100018530, 'sultanmirza@gmail.com', '$2y$10$SkdF4x9Ys03D3ojmGvqbaOIkzXMZY8yuj.jLAXzMllc', 'Parth', 'Agravat', 9925153849, 9316178088, '2003-05-04', 'rajkot', '2023-08-23 17:19:36', 1122, 'upload//tempFileForShare_20230823-224824.jpg', 1400, '2023/08/24  09:44 am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transection_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`account_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `account_no` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3610100018531;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
