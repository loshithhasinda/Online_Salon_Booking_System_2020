-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 10:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile_no` int(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `first_name`, `last_name`, `dob`, `gender`, `email`, `mobile_no`, `city`, `position`, `password`, `user_type`) VALUES
(3, 'Amal', 'Amal', 'Rupashinghe', '0000-00-00', 'Male', 'amal@gmail.com', 768542698, 'Paliyagoda', 'Barber', 'amal123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `appoinment_id` int(20) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `service_type` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `city` varchar(200) NOT NULL,
  `salon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`appoinment_id`, `customer_id`, `first_name`, `last_name`, `mobile_no`, `service_type`, `date`, `time`, `city`, `salon`) VALUES
(1, 1001, 'Samera', 'Ranathunga', '0768542698', 'Hair Dressing', '2020-10-24', '10:30:00', 'Matara', 'Salon Esh'),
(2, 1001, 'Kumarasena', 'Withanage', '0714865215', 'Nail Polish', '2020-10-10', '00:40:00', 'Kurunegala', 'Salon Ama'),
(3, 1001, 'Kumarasena', 'Withanage', '0714865215', 'Nail Polish', '2020-10-10', '00:40:00', 'Kurunegala', 'Salon Ama'),
(4, 1001, 'Kumarasena', 'Withanage', '0714865215', 'Nail Polish', '2020-10-10', '00:40:00', 'Kurunegala', 'Salon Ama'),
(5, 1001, 'Kumarasena', 'Withanage', '0714865215', 'Nail Polish', '2020-10-10', '00:40:00', 'Kurunegala', 'Salon Ama'),
(6, 1001, 'Sunil', 'Frenando', '0768542698', 'Hair Cutting', '2020-10-28', '16:20:00', 'Kagalle', 'Salon Ama'),
(7, 1001, 'Sunil', 'Frenando', '0768542698', 'Hair Cutting', '2020-10-28', '16:20:00', 'Kagalle', 'Salon Ama'),
(8, 1001, 'Sunil', 'Frenando', '0768542698', 'Hair Cutting', '2020-10-28', '16:20:00', 'Kagalle', 'Salon Ama'),
(9, 1001, 'Sunil', 'Frenando', '0768542698', 'Hair Cutting', '2020-10-28', '16:20:00', 'Kagalle', 'Salon Ama'),
(10, 1001, 'Sunil', 'Frenando', '0768542698', 'Hair Cutting', '2020-10-28', '16:20:00', 'Kagalle', 'Salon Ama'),
(11, 1001, 'Sunil', 'Frenando', '0768542698', 'Hair Cutting', '2020-10-28', '16:20:00', 'Kagalle', 'Salon Ama'),
(12, 1001, 'Sunil', 'Frenando', '0768542698', 'Hair Cutting', '2020-10-28', '16:20:00', 'Kagalle', 'Salon Ama'),
(13, 1001, 'Ranula', 'Frenando', '0714586578', 'Nail Polish', '2020-10-26', '10:50:00', 'Anuradhapura', 'Salon ABD'),
(14, 1001, 'Ranula', 'Frenando', '0714586578', 'Nail Polish', '2020-10-26', '10:50:00', 'Anuradhapura', 'Salon ABD'),
(15, 1001, 'Ranula', 'Frenando', '0714586578', 'Nail Polish', '2020-10-26', '10:50:00', 'Anuradhapura', 'Salon ABD'),
(16, 1001, 'Ranula', 'Frenando', '0714586578', 'Nail Polish', '2020-10-26', '10:50:00', 'Anuradhapura', 'Salon ABD');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile_no` int(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `user_name`, `first_name`, `last_name`, `dob`, `gender`, `email`, `mobile_no`, `city`, `password`, `user_type`) VALUES
(1001, 'Namal', 'Namal', 'Kumarasena', '0000-00-00', 'Male', 'namal@gmail.com', 714586578, 'Negombo', 'namal123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_type` varchar(50) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `feedback_discription` varchar(1000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `feedback_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_type`, `first_name`, `last_name`, `feedback_discription`, `email`, `feedback_id`) VALUES
('Suggestion', 'Kumara', 'Ranathunga', 'Kumara Ranathunga', 'kumara@gmai.com', 1),
('Suggestion', 'Kumara', 'Ranathunga', 'Hi I am Kumara Ranathunga', 'kumara@gmai.com', 2),
('Question', 'Sameera', 'Perera', 'Hi I am Sameera Perera', 'sameera@gmail.com', 3),
('Question', 'Sameera', 'Perera', 'Hi I am Sameera Perera', 'sameera@gmail.com', 4),
('Question', 'Sameera', 'Perera', 'Hi I am Sameera Perera', 'sameera@gmail.com', 5),
('Question', 'Sameera', 'Perera', 'Hi I am Sameera Perera', 'sameera@gmail.com', 6);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(20) NOT NULL,
  `item_category` varchar(250) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `item_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_category`, `item_name`, `item_price`) VALUES
(1001, 'Beauty Tools', 'Hiar Dryer', 1200),
(1002, 'Beauty Tools', 'Flat Iron', 1400),
(1003, 'Beauty Tools', 'Curling Iron', 1200),
(1004, 'Beauty Tools', 'Comb', 200),
(2001, 'Hair Cares', 'Shampoo', 200),
(2002, 'Hair Cares', 'Hair Treatment', 600),
(2003, 'Hair Cares', 'Hair Coloring', 800),
(2004, 'Hair Cares', 'Hair Conditioner', 400),
(3001, 'Makeups', 'Makeup Accessories', 800),
(3002, 'Makeups', 'Nail Polish', 200),
(3003, 'Makeups', 'Lipstick', 200),
(3004, 'Makeups', 'Eyeliner', 600),
(4001, 'Men\'s Cares', 'Hair Dryer', 1000),
(4002, 'Men\'s Cares', 'Aftershave', 400),
(4003, 'Men\'s Cares', 'Cream', 200),
(4004, 'Men\'s Cares', 'Shaver', 600),
(5001, 'Skin Cares', 'Moisturizer', 400),
(5002, 'Skin Cares', 'Eye Care', 100),
(5003, 'Skin Cares', 'Facial Cleanser', 200),
(5004, 'Skin Cares', 'Night Cream', 200);

-- --------------------------------------------------------

--
-- Table structure for table `salon`
--

CREATE TABLE `salon` (
  `salon_id` int(20) NOT NULL,
  `salon_name` varchar(250) NOT NULL,
  `salon_city` varchar(250) NOT NULL,
  `salon_address` varchar(250) NOT NULL,
  `salon_contact_no` varchar(20) NOT NULL,
  `salon_email` varchar(200) NOT NULL,
  `salon_note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salon`
--

INSERT INTO `salon` (`salon_id`, `salon_name`, `salon_city`, `salon_address`, `salon_contact_no`, `salon_email`, `salon_note`) VALUES
(1, 'Salon Nisha', 'Colombo', 'No:40/7, Kandy Road , Colombo', '011245367', 'nisha@gmail.com', 'Women,Kids Salon in the Colombo area..'),
(2, 'Salon Ish', 'Homagama', 'No:32/1, Pitipana, Homagama', '0112657893', 'ish@gmail.com', 'Beautifying and grooming.'),
(3, 'Salon Ayu', 'Negambo', 'No:69/5, Negambo', '011256890', 'ayu@gmail.com', 'We have many ayuwerdic threatments'),
(4, 'Salon Esh', 'Gampaha', 'No:44, 2nd street,Gampaha', '0729654765', 'esh@gmail.com', 'Mens only salon.');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(50) NOT NULL,
  `service_category` varchar(200) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `service_price` int(10) NOT NULL,
  `service_note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_category`, `service_name`, `service_price`, `service_note`) VALUES
(1, 'Male', 'Hair Cutting', 200, 'Hair Cutting'),
(2, 'Female', 'Hair Dressing', 600, 'Hair Dressing'),
(3, 'Female', 'Facial', 800, 'Facial'),
(4, 'Female', 'Nail Polish', 400, 'Nail Polish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`appoinment_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`salon_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `appoinment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `salon`
--
ALTER TABLE `salon`
  MODIFY `salon_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
