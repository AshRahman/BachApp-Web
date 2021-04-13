-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 06:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dummy`
--

-- --------------------------------------------------------

--
-- Table structure for table `bachelor`
--

CREATE TABLE `bachelor` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bachelor`
--

INSERT INTO `bachelor` (`id`, `name`, `username`, `password`, `gender`, `email`, `phone`) VALUES
(1, 'toukir', 'toukir123', 'Asdf@0123', 'Male', 'toukir@gmail.com', '01683444444'),
(3, 'labibMahir', 'labibU', 'Asdf@012356', 'Male', 'labib@gmail.com', '01789554260');

-- --------------------------------------------------------

--
-- Table structure for table `flat`
--

CREATE TABLE `flat` (
  `Id` int(10) NOT NULL,
  `Owner` varchar(10) NOT NULL,
  `Price` varchar(11) NOT NULL,
  `Location` varchar(11) NOT NULL,
  `Size` varchar(11) NOT NULL,
  `Contact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flat`
--

INSERT INTO `flat` (`Id`, `Owner`, `Price`, `Location`, `Size`, `Contact`) VALUES
(1, 'Tanvir', '6000', 'Mirpur', '700', '01929292929'),
(2, 'Tanvir', '6000', 'Mirpur', '700', '01929292');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `gender`, `email`, `phone`) VALUES
(1, 'rahat', 'ashfaq', 'Asdf@0123', 'Male', 'rokcashf@gmail.com', '01683444941'),
(2, 'raad123', 'raad', 'Asdf@0123', 'Male', 'raad@gmail.com', '01789554250');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bachelor`
--
ALTER TABLE `bachelor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flat`
--
ALTER TABLE `flat`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `uid` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bachelor`
--
ALTER TABLE `bachelor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flat`
--
ALTER TABLE `flat`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
