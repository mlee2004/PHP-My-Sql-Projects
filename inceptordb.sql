-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 06:37 AM
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
-- Database: `inceptordb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `admission_number` int(11) NOT NULL,
  `admission_date` date NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `postal_address` varchar(255) NOT NULL,
  `next_of_kin` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `NOK_phone_number` bigint(20) NOT NULL,
  `school_attended` varchar(255) NOT NULL,
  `year_from` date NOT NULL,
  `year_to` date NOT NULL,
  `maths_grade` varchar(255) NOT NULL,
  `english_grade` varchar(255) NOT NULL,
  `overall_grade` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `reason_of_choice` varchar(255) NOT NULL,
  `HDUKAU` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`admission_number`, `admission_date`, `first_name`, `middle_name`, `last_name`, `gender`, `DOB`, `postal_address`, `next_of_kin`, `relationship`, `NOK_phone_number`, `school_attended`, `year_from`, `year_to`, `maths_grade`, `english_grade`, `overall_grade`, `course`, `reason_of_choice`, `HDUKAU`) VALUES
(1, '2020-11-28', 'John', 'Karanja', 'Maina', 'Male', '2020-11-12', '003', 'Marklee', 'Uncle', 1234, 'JKU', '2020-11-04', '2020-11-11', 'A', 'D', 'B', 'Development', 'To aqire Skills.', 'Walk-in Enquiry'),
(2, '2020-11-01', 'John', 'Kamau', 'Njororge', 'Male', '2005-02-03', '004', 'Marklee', 'Uncle', 1234, 'JKU', '2017-02-01', '2019-11-15', 'A', 'D', 'C', 'Development App', 'To work.', 'Walk-in Enquiry');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `enquiry_id` varchar(255) NOT NULL,
  `enquiry_date` date NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `telephone_number` bigint(20) NOT NULL,
  `course` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`enquiry_id`, `enquiry_date`, `first_name`, `middle_name`, `last_name`, `telephone_number`, `course`, `comments`) VALUES
('ICT/002/2020', '2020-11-20', 'John', 'Karanja', 'Maina', 717882337, 'Mobile ', 'Thank You! I will come again.');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `billing_id` varchar(255) NOT NULL,
  `billing_date` date NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `amount_to_pay` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`billing_id`, `billing_date`, `first_name`, `middle_name`, `last_name`, `course`, `amount_to_pay`) VALUES
('CS/001/2020', '2020-11-07', 'John', 'Karanja', 'Maina', 'Mobile ', 45000),
('CS/002/2020', '2020-11-06', 'Mark', 'Lee', 'Kipkorir', 'Mobile App Development', 75000),
('CS/003/2020', '2020-11-10', 'Mike', 'Kimathu', 'Njororge', 'Software Development', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receipt_number` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `receipt_date` date NOT NULL,
  `course` varchar(255) NOT NULL,
  `amount_paid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`receipt_number`, `first_name`, `middle_name`, `last_name`, `receipt_date`, `course`, `amount_paid`) VALUES
(6, 'Mark', 'Lee', 'Kipkorir', '2020-11-14', 'Mobile App Development', 45000),
(7, 'John', 'Karanja', 'Maina', '2020-11-23', 'Mobile App Development', 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`admission_number`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`billing_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receipt_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `admission_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receipt_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
