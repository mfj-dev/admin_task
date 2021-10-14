-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2021 at 07:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zam22`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-login`
--

CREATE TABLE `admin-login` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin-login`
--

INSERT INTO `admin-login` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@zamstudios.com', '$2y$10$Ivdz467gLY2TNQdTXVT.wuTkBzbHhUu2vln6gPC1ttHsYc95RtL3S');

-- --------------------------------------------------------

--
-- Table structure for table `app_add`
--

CREATE TABLE `app_add` (
  `package_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `banner_id` int(20) NOT NULL,
  `reward_id` int(20) NOT NULL,
  `interstitial_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_add`
--

INSERT INTO `app_add` (`package_name`, `name`, `banner_id`, `reward_id`, `interstitial_id`) VALUES
('p_ali', 'ali', 1, 2, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-login`
--
ALTER TABLE `admin-login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_add`
--
ALTER TABLE `app_add`
  ADD PRIMARY KEY (`package_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin-login`
--
ALTER TABLE `admin-login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
