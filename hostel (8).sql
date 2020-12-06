-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 02:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `a_id` int(10) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `ac_num` varchar(30) NOT NULL,
  `ifsc` varchar(50) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`a_id`, `f_name`, `ac_num`, `ifsc`, `branch`, `name`, `status`) VALUES
(4, 'Meli', '4587965412', 'asd89512', 'dfgh', 'ammu', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `cardholder` varchar(50) NOT NULL,
  `cardno` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `expiry` date NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `user_name`, `cardholder`, `cardno`, `cvv`, `expiry`, `status`) VALUES
(1, 'Ragin', 'RAGIN T', '4048351756481432', '723', '2021-04-15', 1),
(4, 'MELI', 'ALEENA', '4048351756481435', '698', '2021-01-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(10) NOT NULL,
  `b_id` varchar(50) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `room` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `payment1` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `b_id`, `f_name`, `room`, `category`, `checkin`, `checkout`, `payment1`, `status`) VALUES
(79, '', 'Archana', '4', '8', '2020-11-21', '2020-12-06', '30000', 60),
(86, '', 'Meli', '4', '7', '2020-11-30', '2020-12-06', '9000', 0),
(87, '', 'Maya', '2', '8', '2020-11-30', '2021-08-01', '244000', 0),
(88, '', 'Meera', '2', '7', '2020-12-04', '2021-03-14', '150000', 0),
(89, '', 'Tisha', '4', '8', '2020-12-10', '2021-07-08', '420000', 1),
(90, '', 'Litty', '4', '7', '2020-12-06', '2021-01-10', '87500', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `categoryCharge` int(11) NOT NULL,
  `c_num` varchar(5) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category`, `categoryCharge`, `c_num`, `status`) VALUES
(7, 'AC', 500, '', 1),
(8, 'NONAC', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `enq_id` int(10) NOT NULL,
  `search` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`enq_id`, `search`, `status`) VALUES
(2, 'holidays?', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `utype` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `username`, `email`, `password`, `utype`, `status`) VALUES
(4, 'Admin', 'admin@gmail.com', 'Admin@123', 1, 11),
(13, 'Archana', 'archana@gmail.com', 'Archana@123', 2, 1),
(14, 'Meli', 'archana@gmail.com', 'Meli@123', 2, 1),
(21, 'Surya', 'surya@gmail.com', 'Surya@123', 2, 1),
(22, 'Arya', 'meli@gmail.com', 'Arya@123', 2, 1),
(23, 'Maya', 'archana@gmail.com', 'Maya@123', 2, 1),
(24, 'Karthika', 'karthika@gmail.com', 'Karthika@123', 2, 1),
(25, 'Ayana', 'archana@gmail.com', 'Asdfgh@123', 2, 1),
(28, 'meera', 'meera@gmail.com', 'Meera@123', 2, 1),
(29, 'nayana', 'nayana@gmail.com', 'Nayana@123', 2, 1),
(30, 'daniya', 'daniya@gmail.com', 'Daniya@123', 2, 1),
(31, 'litty', 'litty@gmail.com', 'Litty@123', 2, 1),
(32, 'tisha', 'tisha@gmail.com', 'Tisha@123', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `refund`
--

CREATE TABLE `refund` (
  `refund_id` int(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `do` varchar(50) NOT NULL,
  `payment1` varchar(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `refund`
--

INSERT INTO `refund` (`refund_id`, `f_name`, `do`, `payment1`, `status`) VALUES
(24, 'Archana', 'yes', '22500', 10),
(25, 'Meli', '', '9000', 10),
(30, 'Meera', '', '150000', 10),
(32, 'Tisha', '', '420000', 1),
(33, 'Litty', '', '87500', 2);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Reg_id` int(10) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `fa_name` varchar(30) NOT NULL,
  `ma_name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `p_phone` varchar(50) NOT NULL,
  `home` varchar(30) NOT NULL,
  `post` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pin` varchar(25) NOT NULL,
  `high` varchar(50) NOT NULL,
  `joinc` varchar(50) NOT NULL,
  `join` varchar(50) NOT NULL,
  `visitor1` varchar(30) NOT NULL,
  `visitor2` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirmpassword` varchar(30) NOT NULL,
  `utype` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `book` int(10) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Reg_id`, `f_name`, `l_name`, `fa_name`, `ma_name`, `dob`, `gender`, `email`, `phone`, `p_phone`, `home`, `post`, `city`, `district`, `state`, `pin`, `high`, `joinc`, `join`, `visitor1`, `visitor2`, `username`, `password`, `confirmpassword`, `utype`, `status`, `book`, `photo`) VALUES
(38, 'Archana', 'A', 'Kiran', 'Kavya', '2020-10-28', 'female', 'archana@gmail.com', '7902929589', '7902929552', 'kavyam house', 'karana', 'palakkad', 'palakkad', 'kerala', '673589', '', 'AJCE', 'Bcom', 'Vineeth', 'seetha', 'Archana', 'Archana@1234', 'Archana@123', 2, 1, 1, 'avatar-01.jpg'),
(41, 'Meli', 'A', 'Kiran', 'Kavya', '1998-11-27', 'female', 'archana@gmail.com', '7902929589', '7902929512', 'kavyam house', 'karana', 'palakkad', 'wayanad', 'kerala', 'kalathuvayal', '', 'Ajce', 'Mcom', 'suryan', 'neena', 'Meli', 'Meli@123', 'Meli@123', 2, 1, 1, 'b.jpg'),
(43, 'Maya', 'Jacob', 'Jacob', 'jancy', '2000-11-05', 'female', 'archana@gmail.com', '7902929589', '9587412645', 'kavyam house', 'karana', 'palakkad', 'palakkad', 'kerala', '658932', '', 'Ajce', 'Mtech', 'Vineeth', 'seetha', 'Maya', 'Maya@123', 'Maya@123', 2, 1, 1, 'gallery-footer-02.jpg'),
(48, 'Meera', 'binu', 'binu', 'mini', '1999-09-30', '', 'meera@gmail.com', '7894562134', '7895463215', 'Niralavan', 'nedumangadu', 'kayyel', 'kottayam', 'kerala', '6594789', '', 'Ajce', 'Bcom', 'binu', 'mini', 'meera', 'Meera@123', 'Meera@123', 2, 1, 0, 'dot-slide-01.jpg'),
(49, 'Nayana', 's', 'Sudeep', 'Surya', '1995-06-01', '', 'nayana@gmail.com', '7896451234', '8547961235', 'nayanam', 'karaparambu', 'manjeri', 'palakkad', 'kerala', '689745', '', 'Nirmala', 'Mtech', 'Sudeep', 'Surya', 'nayana', 'Nayana@123', 'Nayana@123', 2, 1, 0, 'instructor-04.jpg'),
(50, 'Daniya', 'Rose', 'Jhon', 'Lilly', '1995-04-25', '', 'daniya@gmail.com', '7895461235', '7896451253', 'Nellikunnu', 'neelimala', 'kanjirappally', 'kottayam', 'kerala', '698745', '', 'Ajce', 'Mtech', 'jhon', 'lilly', 'daniya', 'Daniya@123', 'Daniya@123', 2, 1, 0, 'gallery-footer-02.jpg'),
(51, 'Litty', 'Jose', 'Jose', 'Mery', '1997-02-16', '', 'litty@gmail.com', '7845961236', '9658741235', 'Lassyam', 'Angadikadavu', 'Irittty', 'Kannur', 'kerala', '632589', '', 'Donbosco', 'Mcom', 'Jose', 'Mery', 'litty', 'Litty@123', 'Litty@123', 2, 1, 0, 'gallery-footer-04.jpg'),
(52, 'Tisha', 'Jose', 'Jose', 'Mariya', '1996-10-01', '', 'tisha@gmail.com', '9685741236', '8574961235', 'Kellulam', 'kolakkadu', 'kolakkadu', 'kannur', 'kerala', '658974', '', 'uk', 'msc', 'Jose', 'Tintu', 'tisha', 'Tisha@123', 'Tisha@123', 2, 1, 0, 'dot-slide-04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `replay`
--

CREATE TABLE `replay` (
  `rep_id` int(10) NOT NULL,
  `replay` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replay`
--

INSERT INTO `replay` (`rep_id`, `replay`, `status`) VALUES
(3, 'sat, sunday ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roomnum`
--

CREATE TABLE `roomnum` (
  `r_id` int(10) NOT NULL,
  `room_num` varchar(50) NOT NULL,
  `room` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomnum`
--

INSERT INTO `roomnum` (`r_id`, `room_num`, `room`, `f_name`, `status`) VALUES
(14, 'D-163', 'SINGLE', 'Maya', 0),
(15, 'D-162', 'DOUBLE', 'Meli', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(10) NOT NULL,
  `room` varchar(50) NOT NULL,
  `cou` int(100) NOT NULL,
  `roomRent` int(11) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room`, `cou`, `roomRent`, `status`) VALUES
(2, 'SINGLE', 1, 1000, 1),
(4, 'DOUBLE', 3, 2000, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`enq_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `refund`
--
ALTER TABLE `refund`
  ADD PRIMARY KEY (`refund_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Reg_id`);

--
-- Indexes for table `replay`
--
ALTER TABLE `replay`
  ADD PRIMARY KEY (`rep_id`);

--
-- Indexes for table `roomnum`
--
ALTER TABLE `roomnum`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `enq_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `refund`
--
ALTER TABLE `refund`
  MODIFY `refund_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `replay`
--
ALTER TABLE `replay`
  MODIFY `rep_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roomnum`
--
ALTER TABLE `roomnum`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
