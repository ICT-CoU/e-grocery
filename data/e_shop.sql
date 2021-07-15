-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2021 at 04:41 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) DEFAULT NULL,
  `username` char(10) DEFAULT NULL,
  `password` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `password`) VALUES
('Saiful Islam', 'saiful', 'admin'),
('Mahmdud Imran', 'imran', 'admin'),
('Tasmira Jahan Toma', 'toma', 'admin'),
('Alvee Khondoker', 'alvee', 'admin'),
('Saheb Babu Sheikh', 'babu', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` char(10) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` float DEFAULT NULL,
  `unit` char(10) DEFAULT NULL,
  `remain` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `description`, `price`, `unit`, `remain`) VALUES
('beef', 'beef.jpg', 'Beef', 'Pure frozen beef', 599, 'kg', 40),
('chicken-b', 'chicken-b.jpg', 'Chicken Broiler', 'Organic broiler chicken', 150, 'pieces', 50),
('chilli', 'chilli.jpg', 'Chilli', 'Red chilli', 200, 'kg', 50),
('egg', 'egg.jpg', 'Egg', 'Broiler egg', 90, 'dozen', 200),
('onion', 'onion.jpg', 'Onion', 'Indian onion', 45, 'kg', 150),
('potato', 'potato.jpg', 'Potato', 'Potato label - Diamond', 20, 'kg', 200),
('rice', 'rice.jpeg', 'Rice - Brown', '100% organic brown rice', 70, 'kg', 100),
('salt', 'salt.jpeg', 'Salt', 'Pure salt with iodine', 30, 'kg', 100),
('sugar', 'sugar.jpeg', 'Sugar', 'Regular sugar', 70, 'kg', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
