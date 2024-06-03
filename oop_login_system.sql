-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 01:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop_login_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `PASSWORD` varchar(1024) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `NAME`, `email`, `PASSWORD`, `created_at`, `updated_at`) VALUES
(1, 'Willa Whitehead', 'bipizizeh@mailinator.com', '$2y$10$jUOwODDUZ9FmV8iIJvg1.uc9tYZsmqLlZgDkO6yLPNyosp3.n6KLK', '2024-06-03 08:35:43', '2024-06-03 08:35:43'),
(2, 'Conan Armstrong', 'cohotiv@mailinator.com', '$2y$10$bKe7uWvAXxoPhBjeKulCrOcKKkBBYJT0SC6rTz/AWNlas/McsLD8a', '2024-06-03 08:37:15', '2024-06-03 08:37:15'),
(3, 'admin', 'admin@example.com', '$2y$10$VnhizrxQKtcOnytc14ld9uniuShdIulw9aY9nOWzPH3ax3E9Qf3ui', '2024-06-03 08:43:48', '2024-06-03 08:43:48'),
(4, 'Phyllis Durham', 'mobyzymiw@mailinator.com', '$2y$10$jpxxdEX2oE1PtDEGccfgOelz6KRPK0.kzD9o5bwXspVvHaWu1Vqp2', '2024-06-03 10:57:11', '2024-06-03 10:57:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
