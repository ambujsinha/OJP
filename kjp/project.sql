-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2016 at 09:41 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `password`) VALUES
('ambuj', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `postjob`
--

CREATE TABLE `postjob` (
  `cname` varchar(30) NOT NULL,
  `place` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `addd` varchar(200) NOT NULL,
  `req` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postjob`
--

INSERT INTO `postjob` (`cname`, `place`, `position`, `addd`, `req`) VALUES
('', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Name` varchar(30) NOT NULL,
  `User_Id` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Contact` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Name`, `User_Id`, `Password`, `Contact`, `Email`, `Gender`) VALUES
('AMBUJ', 'ambuj', '9709718715', '9709718715', 'kumarsinhaambuj@gmail.com', 'Male'),
('AMBUJ', 'ambuj_sinha', '9709718715', '9709718715', 'kumarsinhaambuj@gmail.com', 'Male'),
('SAMEER', 'sam123', '1234', '9709718715', 'kumarsinhaambuj@gmail.com', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postjob`
--
ALTER TABLE `postjob`
  ADD PRIMARY KEY (`position`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`User_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
