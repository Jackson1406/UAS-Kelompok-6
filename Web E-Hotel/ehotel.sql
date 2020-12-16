-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 12:05 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminhotel`
--

CREATE TABLE `adminhotel` (
  `id` int(1) NOT NULL,
  `usename` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminhotel`
--

INSERT INTO `adminhotel` (`id`, `usename`, `pass`) VALUES
(1, 'adminhotel', 'rahasianegara');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `msg`) VALUES
(7, 'Jacson', 'jackson@gmail.com', 'home photos rooms about submit contact us form ehotel visual code studio word chrome home photos rooms about submit contact us form ehotel visual code studio word chrome home photos rooms about submit contact us form ehotel visual code studio word chrome home photos rooms about submit contact us form ehotel visual code studio word chrome home photos rooms about submit'),
(9, 'David', 'david@gmail.com', 'Websiste ini sangat user friendly'),
(11, 'handra', 'handra@gmail.com', 'home photos rooms about submit contact us form ehotel visual code studio word chrome home photos rooms about submit contact us form ehotel visual code studio word chrome'),
(12, 'elvin', 'elvin@gmail.com', 'home photos rooms about submit contact us form ehotel visual code studio word chrome home photos rooms about submit contact us form ehotel visual code studio word chrome home photos rooms about submit contact us form ehotel visual code studio word chrome home photos rooms about submit contact us form ehotel visual code studio word chrome home photos rooms about submit'),
(13, 'dennis', 'dennis@gmail.com', 'home photos rooms about submit contact us form ehotel visual code studio word chrome home photos rooms about submit contact us form ehotel visual code studio word chrome home photos rooms about submit contact us form ehotel visual code studio word chrome home photos rooms about submit contact us form ehotel visual code studio word chrome home photos rooms about submit contact us form ehotel visual code studio word chrome');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id` int(3) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id`, `gambar`, `jenis`, `harga`) VALUES
(1, 'deluxe1.jpg', 'Single Deluxe', 899000),
(2, 'deluxe2.jpg', 'Double Deluxe', 1180000),
(3, 'family1.jpg', 'Family Standard', 1680000),
(4, 'family2.jpg', 'Family Premium', 1899000),
(5, 'suite1.jpg', 'Executive Suite', 3199000),
(6, 'suite2.jpg', 'Presidental Suite', 6380000);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomor` varchar(15) NOT NULL,
  `code` int(6) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `banyak` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `in` varchar(10) NOT NULL,
  `out` varchar(10) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `nama`, `nomor`, `code`, `jenis`, `banyak`, `email`, `in`, `out`, `harga`) VALUES
(1, 'Jackson', '2147483647', 122897, 'executive suite', 2, 'ngjackson1406@gmail.com', '2020-12-04', '2020-12-06', 12796000),
(2, 'Handra Dermawan', '081277774756', 535202, 'executive suite', 2, 'saibasenpaii@gmail.com', '2020-11-30', '2020-12-01', 6398000),
(87, 'elvin', '086656562233', 539155, 'double deluxe', 4, 'handraddermawan@gmail.com', '2020-12-16', '2020-12-19', 14160000),
(88, 'Dennis', '05895455412', 210024, 'presidental suite', 10, 'dennisxians@gmail.com', '2020-12-12', '2020-12-17', 319000000),
(89, 'andi', '085566559966', 737662, 'family standard', 3, 'handraddermawan@gmail.com', '2020-12-11', '2020-12-18', 35280000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminhotel`
--
ALTER TABLE `adminhotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminhotel`
--
ALTER TABLE `adminhotel`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
