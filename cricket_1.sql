-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 11:14 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=REDUNDANT;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `des`) VALUES
(2, 'Technology', 'Technology'),
(3, 'Culture', 'Culture'),
(4, 'Business', 'Business'),
(5, 'Politics', 'Politics'),
(6, 'Science', 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `player_info`
--

CREATE TABLE `player_info` (
  `p_id` int(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ph_no` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player_info`
--

INSERT INTO `player_info` (`p_id`, `p_name`, `DOB`, `age`, `address`, `ph_no`, `email_id`, `skill`, `username`, `password`) VALUES
(3, 'rutwik', '28-03-2000', 20, 'Kataraj', '8208050250', 'rutwikkarande@gmail.com', '', 'werty', 'asdf'),
(4, 'user', '2000-03-28', 20, 'address', '8208050250', 'rutwikkarande2@gmail.com', 'skill', 'username', 'password'),
(5, 'Rutwik', '2000-03-28', 20, 'Katraj', '8208050250', 'Rutwikkarande@8@gmail.com', 'batsman', 'asda', 'sddf'),
(6, 'Rutwik2', '2020-12-02', 20, '', '8208050250', 'rutwik.karande@moderncoe.edu.in', 'batsman', 'root', ''),
(7, 'Rutwik2', '2020-12-02', 20, 'Katraj', '8208050250', 'rutwik.karande@moderncoe.edu.in', 'batsman', 'root', ''),
(9, 'AMOL', '2020-12-04', 20, 'SHIVAJINAGAR', '8208050250', 'rutwik.karande@moderncoe.edu.in', 'All-Rounder', 'root', ''),
(10, 'KIRTI', '2020-12-06', 20, 'Katraj', '8208050250', 'rutwikkarande28@gmail.com', 'bowler', 'root', ''),
(17, 'Rutwik2', '2000-02-28', 20, 'Katraj', '8208050250', 'rutwik.karande@moderncoe.edu.in', 'batsman', 'saa', 'knas'),
(24, 'Rutwik2', '2000-02-28', 20, 'Katraj', '8208050250', 'rutwik.karande@moderncoe.edu.in', 'batsman', 'saa', 'knas'),
(25, 'Rutwik2', '2000-02-28', 20, 'Katraj', '8208050250', 'rutwik.karande@moderncoe.edu.in', 'batsman', 'saa', 'knas'),
(26, 'Rutwik2', '2000-02-28', 20, 'Katraj', '8208050250', 'rutwik.karande@moderncoe.edu.in', 'batsman', 'saa', 'knas'),
(27, 'Rutwik2', '2000-02-28', 20, 'Katraj', '8208050250', 'rutwik.karande@moderncoe.edu.in', 'batsman', 'saa', 'knas'),
(28, 'Rutwik2', '2000-02-28', 20, 'Katraj', '8208050250', 'rutwik.karande@moderncoe.edu.in', 'batsman', 'saa', 'knas'),
(29, 'Rutwik2', '2000-02-28', 20, 'Katraj', '8208050250', 'rutwik.karande@moderncoe.edu.in', 'batsman', 'saa', 'knas'),
(30, 'Rutwik', '2000-02-05', 20, 'Katraj', '8208050250', 'rutwik.karande@moderncoe.edu.in', 'batsman', 'vishal', 'asd'),
(31, 'Raj', '2000-02-21', 20, 'Katraj', '8208050250', 'rutwik.karande@moderncoe.edu.in', 'batsman', 'Rutwikchess', 'jasfhjsab'),
(32, 'Rutwik2', '2000-01-20', 20, 'Katraj', '8208050250', 'rutwik.karande@moderncoe.edu.in', 'batsman', 'Rutwikchess', 'ygygiokj'),
(34, '', '', 23, 'Katraj', '000000000000000000000000000000', 'ad@gmail.com', 'ba', '', ''),
(35, '', '', 23, 'Katraj', '000000000000000000000000000000', 'ad@gmail.com', 'ba', '', ''),
(36, '', '', 23, 'Katraj', '000000000000000000000000000000', 'ad@gmail.com', 'ba', '', ''),
(37, '', '2020-12-01', 21, 'Katraj', '000000000000000000000000000000', 'ba@gmail.com', 'bowler', '', ''),
(38, '', '2020-12-01', 21, 'Katraj', '000000000000000000000000000000', 'ba@gmail.com', 'bowler', '', ''),
(39, '', '', 23, 'Katraj', '000000000000000000000000000000', 'balkrishna17868@gmail.com', 'ba', '', ''),
(40, '', '', 23, 'Katraj', '000000000000000000000000000000', 'balkrishna17868@gmail.com', 'ba', '', ''),
(41, 'Rutwik', '2020-12-08', 20, 'Katraj', '000000000000000000000000000000', 'rutwik.karande@moderncoe.edu.in', 'batsman', 'vishal', 'asd'),
(42, 'Rutwik', '2020-12-03', 20, 'Katraj', '000000000000000000000000000000', 'rutwik.karande@moderncoe.edu.in', 'batsman', 'rutwik', 'adas'),
(43, 'Rutwik', '2020-12-03', 20, 'Katraj', '000000000000000000000000000000', 'rutwik.karande@moderncoe.edu.in', 'batsman', 'rutwik', 'adas'),
(44, 'Rutwik', '2020-12-03', 20, 'Katraj', '000000000000000000000000000000', 'rutwik.karande@moderncoe.edu.in', 'batsman', 'rutwik', 'adas'),
(45, 'asd', '2020-12-04', 20, 'Katraj', '8208050250', 'rutwik.karande@moderncoe.edu.in', 'batsman', 'rutwik', 'asd'),
(46, 'Rutwik', '2020-12-04', 20, 'Katraj', '000000000000000000000000000000', 'rutwik.karande@moderncoe.edu.in', 'batsman', 'vishal', 'asd'),
(47, 'Rutwik123', '2020-12-12', 20, 'Katraj', '8208050250', 'ba@gmail.com', 'batsman', '', ''),
(48, 'Hrishi', '2020-12-05', 15, 'Katraj', '000000000000000000000000000000', 'rutwik.karande@moderncoe.edu.in', 'batsman', '', ''),
(49, 'Hrishi', '2020-12-05', 15, 'Katraj', '000000000000000000000000000000', 'rutwik.karande@moderncoe.edu.in', 'batsman', '', ''),
(50, 'Rutwik', '2020-12-04', 20, 'Katraj', '8208050250', 'as@gmail.com', 'batsman', '', ''),
(51, 'Rutwik', '2000-03-26', 20, 'Katraj', '8208050250', 'rutwikkkarande28@gmail.com', 'batsman', '', ''),
(52, 'akshay', '2020-12-20', 21, 'Katraj', '8208050250', 'as@gmail.com', 'batsman', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `t_id` int(11) NOT NULL,
  `tname` int(11) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player_info`
--
ALTER TABLE `player_info`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `player_info`
--
ALTER TABLE `player_info`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
