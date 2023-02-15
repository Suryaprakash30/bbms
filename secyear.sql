-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 11:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secyear`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `id` int(11) NOT NULL,
  `announcement` varchar(30) NOT NULL,
  `bloodneed` varchar(3) NOT NULL,
  `date` date NOT NULL,
  `organizer` varchar(30) NOT NULL,
  `requirements` text NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`id`, `announcement`, `bloodneed`, `date`, `organizer`, `requirements`, `contact`) VALUES
(1, 'Emergency', 'A+', '2021-11-03', 'SRM Hospital', 'Urgent need of the A+ blood. Contact fast', '9940525536');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `weight` int(3) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `bloodqty` int(3) NOT NULL,
  `collection` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `name`, `gender`, `dob`, `weight`, `bloodgroup`, `address`, `contact`, `bloodqty`, `collection`) VALUES
(2, 'Surya', 'M', '2000-03-01', 56, 'A+', 'Chennai', '9176154225', 300, '2021-11-23'),
(5, 'Santhosh', 'M', '2021-12-01', 70, 'B+', 'Ennore', '9876543211', 310, '2021-12-03'),
(6, 'Naveen', 'M', '2021-11-30', 60, 'AB-', 'Menambakkam', '1234567889', 400, '2021-12-03'),
(7, 'vishwa', 'M', '2020-06-26', 65, 'O+', 'Mambalam', '4564564564', 250, '2021-12-04'),
(8, 'Akash', 'M', '2021-11-29', 75, 'A+', 'Chennai', '1231231231', 300, '2021-12-15'),
(9, 'Jenifer', 'F', '2018-05-28', 55, 'A+', 'Ashok Nagar', '7897897899', 310, '2021-12-16'),
(10, 'Preethi', 'F', '2017-05-08', 65, 'A-', 'Velacherry', '1230123012', 300, '2021-12-09'),
(11, 'Jenitha', 'F', '2021-12-23', 45, 'AB+', 'Mannadi', '1111111111', 250, '2021-12-10'),
(12, 'Amala', 'F', '2021-12-21', 68, 'A+', 'Nungambakkam', '8825960962', 310, '2021-12-03'),
(13, 'test6', '', '2021-12-07', 70, 'AB+', 'Chennai', '7417417411', 300, '2021-12-09'),
(14, 'test7', '', '2000-03-01', 50, 'A+', 'Annanur', '8956232356', 300, '2021-12-12'),
(15, 'test8', 'Female', '2021-12-05', 250, 'A-', 'Kodambakkam', '7845124121', 310, '2021-12-13'),
(16, 'Surya20', '', '2021-12-13', 52, 'B+', 'Aynambakkam', '9176154445', 300, '2021-12-14'),
(17, 'Surya', 'Other', '2021-12-13', 40, 'AB-', 'Chennai', '9175142225', 300, '2021-12-08'),
(18, 'dgeg', 'Female', '2021-12-04', 0, 'A+', 'dsf ergerer', '9176154225', 0, '2021-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id` int(11) NOT NULL,
  `campname` varchar(20) NOT NULL,
  `orgname` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `campname`, `orgname`, `contact`, `date`, `time`, `description`) VALUES
(2, 'Blood Work', 'Sanjay', '9176154225', '2021-11-22', '02:42:00', 'Donate blood and save life. Help Others.');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `guardian` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `weight` int(3) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `guardian`, `gender`, `dob`, `weight`, `bloodgroup`, `email`, `address`, `contact`) VALUES
(1, 'Surya', 'Shankar', 'M', '2000-05-30', 58, 'A+', 'suryasharp30@gmail.com', 'Ambattur', '9176154225'),
(4, 'Patrick', 'Pat', 'M', '2000-03-01', 75, 'O+', 'patrick@gmail.com', 'Nungambakkam', '8825960962');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `date` date NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `gender`, `dob`, `bloodgroup`, `date`, `phone`, `email`, `address`, `message`) VALUES
(1, 'Santhosh', 'M', '2014-06-10', 'A+', '2021-11-10', '9176154225', 'santhosh@gmail.com', 'Ennore', 'Emergency required for Heart Operation.'),
(2, 'Naveen', 'M', '2000-03-05', 'B-', '2021-11-25', '9940525536', 'naveen@gmail.com', 'Menambakkam', 'Emergency B- Blood required.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `contact`) VALUES
(1, 'surya', 'surya30', 'sury30@gmail.com', '9176154225'),
(2, 'vishwa', 'vishwa30', 'suryaanjan686@gmail.com', '9940525536'),
(3, 'akash', 'akash30', 'akash@gmail.com', '9710303802'),
(4, 'jeni', 'jeni', 'jeni@gmail.com', '8855996644'),
(5, 'suri', 'suri', 'suri@ss.com', '9176154222'),
(6, 'aaa', 'aaa', 'aaa@gmail.com', '9176154225'),
(7, 'lll', 'lll', 'lll@gmail.com', '9176154225'),
(8, 'patrick', 'patrick', 'patrick@gmail.com', '1414141414'),
(9, 'Allan', 'Allan', 'allan@gmail.com', '7418529633'),
(11, 'surya', 'surya', 'surya30@gmail.com', '5555555555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
