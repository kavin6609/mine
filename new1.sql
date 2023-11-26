-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 02:25 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new1`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg1`
--

CREATE TABLE `reg1` (
  `userid` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `userpwd` varchar(20) NOT NULL,
  `useremail` varchar(20) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg1`
--

INSERT INTO `reg1` (`userid`, `username`, `userpwd`, `useremail`, `usertype`) VALUES
(1, 'kavin', '123', 'kavin@gamil.com', 'hod');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `userpwd` varchar(55) NOT NULL,
  `useremail` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `userpwd`, `useremail`) VALUES
(1, 'kavin', '1234', 'kavin@gmail.com'),
(2, 'kavin', '', ''),
(4, 'kavin', '111', 'kavin@gmail.com'),
(5, 'kavin', 'kavin', 'kavin@gmail.com'),
(6, 'kavin1', 'kavin', 'kavin@gmail.com'),
(7, 'kavin1', '111', 'kavin@gmail.com'),
(8, 'kavin1', '111', 'kavin@gmail.com'),
(9, 'kavin', '111', 'kavin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `register1`
--

CREATE TABLE `register1` (
  `id` int(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `TxtDOB` varchar(200) NOT NULL,
  `AGE` varchar(200) NOT NULL,
  `message` varchar(155) NOT NULL,
  `countrycode` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `countySel` varchar(200) NOT NULL,
  `stateSel` varchar(200) NOT NULL,
  `districtSel` varchar(200) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filename1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register1`
--

INSERT INTO `register1` (`id`, `username`, `TxtDOB`, `AGE`, `message`, `countrycode`, `phone`, `gender`, `countySel`, `stateSel`, `districtSel`, `filename`, `filename1`) VALUES
(50, 'kavin13322', '12/12/1999', '23', 'kavin', 'aus(+62)', '7904861002', 'male', 'Australia', '', '', 'Penguins.jpg', ''),
(85, 'asd', '12/04/1999', '23', 'dasdsad', '+91', '1548989563', 'male', '0', '', '', '', 'sample.pdf'),
(88, 'kavin', '12/04/1999', '23', 'jklassdhalsdh', 'India(+91)', '9578814044', 'male', 'India', '', '', 'Hydrangeas.jpg', 'CoolasCoconutsPolicyDoc.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `registerp`
--

CREATE TABLE `registerp` (
  `id` int(55) NOT NULL,
  `username` varchar(200) NOT NULL,
  `txtdob` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `countrycode` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `countySel` varchar(200) NOT NULL,
  `stateSel` varchar(200) NOT NULL,
  `districtSel` varchar(200) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `filename1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerp`
--

INSERT INTO `registerp` (`id`, `username`, `txtdob`, `age`, `message`, `countrycode`, `phone`, `gender`, `countySel`, `stateSel`, `districtSel`, `filename`, `filename1`) VALUES
(17, 'koooo', '12/12/2000', '22', 'SEVUR', 'India(+91)', '7904861002', 'male', 'Australia', 'Victoria', 'Euroa', '1563142529Lighthouse.jpg', '1563142529aadhaar.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `registerval`
--

CREATE TABLE `registerval` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userpwd` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `countrycode` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerval`
--

INSERT INTO `registerval` (`id`, `username`, `userpwd`, `dob`, `age`, `phone`, `countrycode`, `address`, `gender`, `img`, `pdf`, `country`, `state`, `district`) VALUES
(39, 'koooo111', ',DSDJDL', '12/4/1999', '23', '9578814012', 'usa(+2)', 'LADJASHDO', 'male', '74148460Koala.jpg', '74148460Minimalist White and Grey Professional Resume.pdf', 'Australia', 'Victoria', 'Altona'),
(40, 'koooo', 'kljd', '12/4/1999', '23', '7904861002', 'usa(+2)', 'jkdksan', 'male', '1521468651Desert.jpg', '1521468651Grey Clean CV Resume Photo1.pdf', 'Australia', 'Victoria', 'Euroa'),
(41, 'kavin', '123', '12/4/1999', '23', '9578814012', 'uae(+1)', 'lkdnnasl', 'male', '1751191543Desert.jpg', '1751191543Grey Clean CV Resume Photo1.pdf', 'Australia', 'Victoria', 'Euroa');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `userpwd` varchar(20) NOT NULL,
  `useremail` varchar(20) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userid`, `username`, `userpwd`, `useremail`, `usertype`) VALUES
(45, 'kavin', '123', 'kavin@gamil.com', 'teacher'),
(60, 'kavin', '1111', 'kavin@gamil.com', 'teacher'),
(62, 'kavin', '1234', 'kavin@gmail.com', 'teacher'),
(63, 'kavin', '123', 'kavin@gmail.com', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg1`
--
ALTER TABLE `reg1`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register1`
--
ALTER TABLE `register1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerp`
--
ALTER TABLE `registerp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerval`
--
ALTER TABLE `registerval`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg1`
--
ALTER TABLE `reg1`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register1`
--
ALTER TABLE `register1`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `registerp`
--
ALTER TABLE `registerp`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `registerval`
--
ALTER TABLE `registerval`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
