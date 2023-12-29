-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2023 at 05:24 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kufa`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `image`, `status`) VALUES
(26, '29-49-04-05-10-2023.jpeg', 'active'),
(27, '23-55-04-05-10-2023.jpeg', 'active'),
(28, '37-55-04-05-10-2023.jpeg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` int NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `number` int NOT NULL,
  `icon` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `title`, `number`, `icon`, `status`) VALUES
(1, 'number of mobile im use', 5, 'fa fa-mobile', 'active'),
(4, 'My Clients', 150, 'fa fa-male', 'active'),
(5, 'My Active Clients', 50, 'fa fa-android', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `description`, `image`, `status`) VALUES
(18, 'The maestro ', 'Xavier Hernández Creus, also known as Xavi Hernández or simply Xavi, is a Spanish professional football manager and former fc barcelona legendary player who is currently the manager of La Liga club Barcelona.', '18-48-34-03-05-10-2023.jpg', 'active'),
(19, 'Andrés Iniesta', 'Andrés Iniesta Luján is a Spanish professional footballer who plays as a midfielder for FC Barcelona', 'Andrés Iniesta-00-37-03-05-10-2023.jpg', 'active'),
(20, 'No. 1 ALL ROUNDER in bangladesh', 'Bangladeshi cricketer and current captain of the Bangladesh national cricket team in all formats.', 'No. 1 ALL ROUNDER in bangladesh-59-44-03-05-10-2023.jpg', 'active'),
(21, 'mr360', ' ab de Villiers was named as the ICC ODI Player of the Year three times during his 15-year international career and was one of the five Wisden cricketers of the decade at the end of 2019.', 'mr360-10-50-03-05-10-2023.jpg', 'active'),
(22, 'mr no 9', 'Luis Alberto Suárez Díaz is a Uruguayan professional footballer who plays for spanish club barcelona.', 'mr no 9-01-54-03-05-10-2023.jpg', 'active'),
(23, 'speedgun', 'Dale Willem Steyn is a South African former professional cricketer who played for the South African Cricket Team. He is often regarded as one of the greatest fast bowlers of all time and the greatest Test bowler of his generation.', 'speedgun-32-55-03-05-10-2023.jpeg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `service_title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `icon` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `description`, `icon`, `status`) VALUES
(18, 'APPLE', 'This is none other than my battery condition.', 'fa fa-battery-0', 'active'),
(19, 'sports', 'in my eyes,football is popular for MESSI,CR7,MARADONA,PELE and Cruyff.', 'fa fa-futbol-o', 'active'),
(20, 'Wordpress', 'WordPress is a web content management system. It was originally created as a tool to publish blogs but has evolved to support publishing other web content', 'fa fa-wordpress', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `year` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `skill_persentice` int NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `title`, `year`, `skill_persentice`, `status`) VALUES
(1, 'web design', '2020', 20, 'active'),
(2, 'cricket', '2023', 70, 'active'),
(3, 'web development', '2023', 10, 'active'),
(4, 'Grapics design', '2021', 20, 'active'),
(7, 'knowledge for football', '2023', 100, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `description`, `image`, `name`, `status`) VALUES
(17, 'Politician', 'I dont know, what i am doing.', 'Politician-43-07-05-05-10-2023.jpeg', 'maruf', 'active'),
(18, 'former teacher', 'clean image politician in bd', 'former teacher-40-08-05-05-10-2023.jpeg', 'mirza fakhrul ', 'active'),
(19, 'politician', 'a brand politician from awamileague', 'politician-37-10-05-05-10-2023.jpeg', 'syed ashraf', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'defult.jpg',
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `name`, `email`, `password`) VALUES
(1, '1-maruf hossen-16-09-2023.jpeg', 'Maruf', 'Hossen', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(5, 'defult.jpg', 'kilawek', 'qirexegy@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(6, 'defult.jpg', 'zuton', 'cufe@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(7, 'defult.jpg', 'lowohe', 'rijuter@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(8, 'defult.jpg', 'cenaqef', 'feqigi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(9, 'defult.jpg', 'jufafi', 'nuretysitu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(10, 'defult.jpg', 'tuvyxomyc', 'boku@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(11, 'defult.jpg', 'ryluqove', 'myserebox@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(46, '46-maruf-05-10-2023.jpg', 'maruf', 'mmaruf950@gmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(47, 'defult.jpg', 'bycil', 'kyzyhi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
