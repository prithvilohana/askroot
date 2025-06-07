-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2025 at 09:43 PM
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
-- Database: `askroot`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(30) NOT NULL,
  `answer` varchar(300) NOT NULL,
  `question_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answer`, `question_id`, `user_id`) VALUES
(1, 'Rem omnis dicta dolo', 1, 3),
(2, 'Cumque sit facere i', 1, 3),
(3, 'Good plugin', 6, 3),
(4, 'I\'ve been a pro user for 6 years and this is one of the most hassle free plug-ins available I have ever installed on the 30+ websites i maintain. It is worth every penny and the peace of mind it offers is critical to web devs.', 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(3, 'CSS'),
(2, 'HTML'),
(4, 'JavaScript'),
(5, 'MySQL'),
(1, 'PHP'),
(6, 'WordPress');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(30) NOT NULL,
  `title` varchar(250) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `category_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `discription`, `category_id`, `user_id`) VALUES
(1, 'Nihil accusamus labo', 'Expedita nisi dolor ', 5, 7),
(2, 'php what is', 'php what is', 1, 3),
(3, 'What is CSS', 'Help me learn CSS', 3, 3),
(4, 'What is HTML', 'Provide HTML resources', 2, 3),
(7, 'What is the process of learning JS and its frameworks easily', 'What is the process of learning JS and its frameworks easily', 4, 3),
(8, 'Who is developer of JS', 'Answer only name ', 4, 1),
(10, 'Migration of wordpress', 'all in one', 6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'prithvilohana750@gmail.com', 'admin123!@#', '2025-06-02 10:31:11'),
(3, 'admin', 'visojykova@mailinator.com', 'admin123!@#', '2025-06-02 10:31:38'),
(4, 'jytimi', 'megadopete@mailinator.com', 'Pa$$w0rd!', '2025-06-02 10:37:39'),
(5, 'cynom', 'niwipuwa@mailinator.com', 'Pa$$w0rd!', '2025-06-03 06:34:10'),
(6, 'admin', 'viso1jykova@mailinator.com', 'admin123!@#', '2025-06-03 06:46:53'),
(7, 'zacyc', 'nisa@mailinator.com', 'Pa$$w0rd!', '2025-06-03 08:25:05'),
(8, 'pirthvikumar', 'dropshipping@gmail.com', 'hello123', '2025-06-07 18:40:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
