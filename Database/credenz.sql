-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2017 at 08:51 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `credenz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_password` text NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_status`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `registration_id` int(11) NOT NULL,
  `participant1` text NOT NULL,
  `participant2` text NOT NULL,
  `participant3` text NOT NULL,
  `participant4` text NOT NULL,
  `clash` int(11) NOT NULL,
  `web_waever` int(11) NOT NULL,
  `cretronix` int(11) NOT NULL,
  `croodle` int(11) NOT NULL,
  `mad_talks` int(11) NOT NULL,
  `paper_presentation` int(11) NOT NULL,
  `reverse_coding` int(11) NOT NULL,
  `roboliga` int(11) NOT NULL,
  `network_t_hunt` int(11) NOT NULL,
  `software_development` int(11) NOT NULL,
  `date` date NOT NULL,
  `mobile` int(11) NOT NULL,
  `college` text NOT NULL,
  `total` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`registration_id`, `participant1`, `participant2`, `participant3`, `participant4`, `clash`, `web_waever`, `cretronix`, `croodle`, `mad_talks`, `paper_presentation`, `reverse_coding`, `roboliga`, `network_t_hunt`, `software_development`, `date`, `mobile`, `college`, `total`, `email`) VALUES
(1, 'abc', 'lll', 'asd', 'ereer', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, '2017-08-28', 55556622, 'VIT', 150, 'ashinde@mmm.com'),
(2, 'kiran', 'loo', '', '', 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2017-08-28', 2147483647, 'PICT', 300, 'kiran@gmail.com'),
(3, 'haskdh', '', '', '', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, '2017-08-28', 2147483647, 'PICT', 250, 'kiran@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`registration_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `registration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
