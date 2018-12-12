-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 05:24 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Table structure for table `randomkode`
--

CREATE TABLE `randomkode` (
  `id` int(11) NOT NULL,
  `randomkode` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `randomkode`
--

INSERT INTO `randomkode` (`id`, `randomkode`) VALUES
(1, 'NAFHLUXv'),
(2, 'IvNPkQXm'),
(3, 'bu4DqeUG'),
(4, 'pxHS2Vcp'),
(5, '8XoXG2LM'),
(6, 'wimCoesN'),
(7, 'T6y7hkJC'),
(8, '7UBZn77l'),
(9, 'xVO8C1in'),
(10, 'EbOVwLiw'),
(11, 'XmUZAXHm'),
(12, 'THx21jZu'),
(13, 'V9vTtUEb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `randomkode`
--
ALTER TABLE `randomkode`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `randomkode`
--
ALTER TABLE `randomkode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
