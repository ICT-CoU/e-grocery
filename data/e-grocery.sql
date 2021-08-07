-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 07, 2021 at 02:53 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17379126_grocery`
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
('beef', 'Beef.jpg', 'Beef', 'Pure frozen beef', 599, 'kg', 40),
('chicken-b', 'chicken-b.jpg', 'Chicken Broiler', 'Organic broiler chicken', 150, 'pieces', 50),
('chilli', 'chilli.jpg', 'Chilli', 'Red chilli', 200, 'kg', 50),
('egg', 'egg.jpg', 'Egg', 'Broiler egg', 90, 'dozen', 200),
('onion', 'onion.jpg', 'Onion', 'Indian onion', 45, 'kg', 150),
('potato', 'potato.jpg', 'Potato', 'Potato label - Diamond', 20, 'kg', 200),
('rice', 'Rice.jpeg', 'Rice', '100% organic brown rice', 70, 'kg', 100),
('salt', 'salt.jpeg', 'Salt', 'This is salt', 30, 'kg', 100),
('tomato', 'tomato.jpg', 'Tomato', 'Pure riped tomato', 120, 'kg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`image`, `name`, `email`, `password`) VALUES
('Rakib Hasan Riyad.png', 'Rakib Hasan Riyad', 'riyad@gmail.com', 'user'),
('Shahriar Parvez.png', 'Shahriar Parvez', 'shariar@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
