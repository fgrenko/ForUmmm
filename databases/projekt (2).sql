-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 08:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'root', 'root', '2020-01-21 15:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `politika`
--

CREATE TABLE `politika` (
  `id` int(11) NOT NULL,
  `postId` tinyint(4) DEFAULT NULL,
  `naslov` text DEFAULT NULL,
  `post` text DEFAULT NULL,
  `date_time` datetime DEFAULT current_timestamp(),
  `username` varchar(30) DEFAULT NULL,
  `komentar` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `skola`
--

CREATE TABLE `skola` (
  `id` int(11) NOT NULL,
  `postId` tinyint(4) DEFAULT NULL,
  `naslov` text DEFAULT NULL,
  `post` text DEFAULT NULL,
  `date_time` datetime DEFAULT current_timestamp(),
  `username` varchar(30) DEFAULT NULL,
  `komentar` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skola`
--

INSERT INTO `skola` (`id`, `postId`, `naslov`, `post`, `date_time`, `username`, `komentar`) VALUES
(2, NULL, 'Pitanje1', 'Pitanje o skoli', '2020-01-21 20:34:42', 'root', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `id` int(11) NOT NULL,
  `postId` tinyint(4) DEFAULT NULL,
  `naslov` text DEFAULT NULL,
  `post` text DEFAULT NULL,
  `date_time` datetime DEFAULT current_timestamp(),
  `username` varchar(30) DEFAULT NULL,
  `komentar` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`id`, `postId`, `naslov`, `post`, `date_time`, `username`, `komentar`) VALUES
(3, NULL, 'Pitanje1', 'Pitanje o sportu', '2020-01-21 20:34:25', 'root', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `svakodnevni_zivot`
--

CREATE TABLE `svakodnevni_zivot` (
  `id` int(11) NOT NULL,
  `postId` tinyint(4) DEFAULT NULL,
  `naslov` text DEFAULT NULL,
  `post` text DEFAULT NULL,
  `date_time` datetime DEFAULT current_timestamp(),
  `username` varchar(30) DEFAULT NULL,
  `komentar` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `svakodnevni_zivot`
--

INSERT INTO `svakodnevni_zivot` (`id`, `postId`, `naslov`, `post`, `date_time`, `username`, `komentar`) VALUES
(2, NULL, 'Pitanje1', 'Pitanje o zivotu', '2020-01-21 20:34:35', 'root', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'root', 'root@root.com', '$2y$10$3HbXTyiMOzBq8iUHyEsF3OZr5nc2NYogW8qmQ7wvbJhD65p8nGtLa', '2020-01-21 15:48:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `politika`
--
ALTER TABLE `politika`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skola`
--
ALTER TABLE `skola`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `svakodnevni_zivot`
--
ALTER TABLE `svakodnevni_zivot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `politika`
--
ALTER TABLE `politika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `skola`
--
ALTER TABLE `skola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `svakodnevni_zivot`
--
ALTER TABLE `svakodnevni_zivot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
