-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20251018.6d3d61fe5f
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2025 at 03:41 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `city`, `photo`, `created_at`) VALUES
(1, 'cihuy', '$2y$10$WqgYjF6gGZ8dZSm0t9H3Zu2Xu2xMCY/zu0JZXEp0LkkF0ghM3QcMy', 'Inok Cihuy', 'Kudus', NULL, '2025-12-04 07:00:50'),
(2, 'haru', '$2y$10$9j7brbB8VQ48p8dHb3Hx7Oo6g3zoN6iLBQ/L31Y09C/Nlu1OJ2nPe', 'Haruka', 'Jepang', 'haru_1764861447.jpg', '2025-12-04 07:00:50'),
(3, 'wick', '$2y$10$blRErFn64v7x5PiIYQ2QmeEXtPWvwtT6RkfXOSwbVn.o4c6gpo5Z6', 'John Wick', 'United State', 'wick_1764861537.jpg', '2025-12-04 07:00:50'),
(5, 'Blame', '$2y$12$V5iGAO5xL2Ll8JqlyS40uO/EjmvbMbqgb.V7i7ApCjYPt1j/8vSoq', 'Blame SS', 'Utopia', 'Blame_1764859073.jpg', '2025-12-04 14:37:53'),
(6, 'ryo', '$2y$12$3f2hRX8m52F3QVdBYsKsf.6Sxkx/fzBKSsdTTwXELgZOy5iN8jcna', 'Yamada Ryo', 'Random', 'ryo_1764861437.jpg', '2025-12-04 15:17:07');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
