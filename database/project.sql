-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 05:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `product_name` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `url` varchar(225) NOT NULL,
  `ip` varchar(225) NOT NULL,
  `info` varchar(254) NOT NULL,
  `requirement` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`product_name`, `name`, `email`, `phone`, `url`, `ip`, `info`, `requirement`) VALUES
('Premium', 'Hritik Dubey', 'hritikdubey28092000@gmail.com', '8573875453', 'abc', 'abc', 'abc', 'abc'),
('Basic', 'Hritik Dubey', 'hritikdubey@gmail.com', '8573875453', 'abc', '122, Golakuan, Pannalal Mohalla, Bara Bazar, Near Dr. Sindhi clinic', 'abc', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` varchar(225) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` int(225) NOT NULL,
  `product_image` varchar(225) NOT NULL,
  `product_details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_image`, `product_details`) VALUES
('1', 'Basic', 500, './images/a.png', 'Vulnerability, Report'),
('2', 'Standard', 1000, './images/c.png', 'Vulnerability Assessment, Penetration Attempt & Exploitation, Web Application Tests, Report'),
('3', 'Premium', 2000, './images/b.png', 'Vulnerability Assessment, Penetration Attempt & Exploitation, Web Application Tests, Network Security Tests, Cloud Security Tests, IoT Security Tests, Social Engineering, Analysis and Reporting.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`) VALUES
('Hritik Dubey', 'hritikdubey@gmail.com', 'admin'),
('Hritik ', 'hritikdubey28092000@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
