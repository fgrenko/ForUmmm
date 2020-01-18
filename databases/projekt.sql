-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 05:15 PM
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
-- Table structure for table `politika`
--

CREATE TABLE `politika` (
  `id` int(11) NOT NULL,
  `postId` tinyint(4) DEFAULT NULL,
  `naslov` text DEFAULT NULL,
  `post` text DEFAULT NULL,
  `komentar` tinyint(1) DEFAULT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `username` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `politika`
--

INSERT INTO `politika` (`id`, `postId`, `naslov`, `post`, `komentar`, `date_time`, `username`) VALUES
(1, NULL, 'Zbog čega ne valja politika u hr?', 'Zanima me zbog cega je to tako i ko je kriv!!!!', NULL, '2020-01-18 17:07:22', 'root'),
(2, 1, NULL, 'Kriv je HDZ', 0, '2020-01-18 17:08:42', 'root'),
(3, 1, NULL, 'Kriv je SDP', 0, '2020-01-18 17:09:05', 'root'),
(4, NULL, 'Zašto je Trump zapalio Ameriku', 'ZAŠTOOOOOO???', NULL, '2020-01-18 17:09:51', 'root'),
(5, 4, NULL, 'Jer je debil', 0, '2020-01-18 17:15:16', 'root'),
(6, 4, NULL, 'vidididiiiii', 0, '2020-01-18 17:15:21', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `id` int(11) NOT NULL,
  `postId` smallint(6) DEFAULT NULL,
  `naslov` text DEFAULT NULL,
  `post` text DEFAULT NULL,
  `komentar` tinyint(4) DEFAULT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `username` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(6, 'root', 'root@mail.com', '$2y$10$6kaV3YMgRn6v.0dfzkgO8OLjaDXQn/.EqVCowngbod.WLaV3m7qRO', '2020-01-12 15:32:32'),
(7, 'fran', 'fran@mail.com', '$2y$10$rMWN0yvnEa8L2wSlhgcpau2n6ORCZ215YyuqempokyQLQNvpzt2k.', '2020-01-12 18:51:19'),
(8, 'iva', 'iva@mail.com', '$2y$10$HZ5WeM6CT.aiAaLjht0Bp.zSfyvNs9qZjNLc0sos3OahxsnfKYFYC', '2020-01-12 23:04:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `politika`
--
ALTER TABLE `politika`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `politika`
--
ALTER TABLE `politika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
