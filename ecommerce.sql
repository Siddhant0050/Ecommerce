-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2024 at 07:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`) VALUES
(1, 'Siddhant', 'Yadav', 'yadavsiddhant10@gmail.com', '$2y$10$L6hyDqEhhiYzkbs/b1bK6.mJMsxunDbp.o7JSDoM08uuvrPgs3M2e', '2024-03-23 14:30:05'),
(3, 'Aditya', 'Thakur', 'aadithakur@gmail.com', '$2y$10$spf8JYYfOi/.3A0BhljpuODFnJJVMrXIvlH6ESzJg6WHKu6359Iqy', '2024-03-23 14:38:30'),
(4, 'Paresh', 'Chaudhari', 'pareshc1527@gmail.com', '$2y$10$Bpn3XPc.Zcy0kZNd/JbiYuLwstZhfNAR.FkKDckem/s1PG0vw1LKO', '2024-03-23 14:42:03'),
(5, 'Yash', 'Ingle', 'yash@gmail.com', 'yyyyy', '2024-03-23 14:50:20'),
(6, 'Rohit', 'Bache', 'rb@gmail.com', '77777', '2024-03-23 15:04:36'),
(7, 'Ravi', 'Barethiya', 'ravi@gmail.com', '12345678', '2024-03-24 10:55:27'),
(8, 'Pranay', 'Gayki', 'pranay@gmail.com', '$2y$10$NVOZlksy9JUl2Ls3XMIrmeR4R4uXuo4YoiCWqFLI4IjTF/9iPfSye', '2024-03-24 10:59:41'),
(9, 'Lucky', 'Thakur', 'lucky@gmail.com', '$2y$10$oYKMFNrirH4kTQaRZ7XCqePGRMrxnDUKkE6jmA1rES0UqofHaS6dm', '2024-03-24 11:01:39'),
(10, 'Pavan', 'Daterao', 'pavan@gmail.com', 'ppppp', '2024-03-24 11:05:08'),
(11, 'Rahul', 'Chaware', 'rahul@gmail.com', 'rrrrr', '2024-03-24 11:07:34'),
(12, 'krush', 'tale', 'krush@gmail.com', 'pass', '2024-03-26 18:01:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
