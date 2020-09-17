-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2020 at 10:17 PM
-- Server version: 5.7.31-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spericorn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(3) NOT NULL COMMENT '0: inactive 1: active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `status`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(3) NOT NULL COMMENT '0: pending 1 :active 2: block'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `image`, `status`) VALUES
(40, 'jibin Paul', 'jibinpaul09@gmail.com', 'cc75768e6572b7043e727298f1503089', 'mukaleparambil, muttuchira, kottayam', '', 1),
(41, 'tom jose', 'tom@gmail.com', '34b7da764b21d298ef307d04d8152dc5', 'tom villa, ernakulam, kerala', '', 0),
(42, 'Thomas Paul', 'thomas@gmail.com', 'ef6e65efc188e7dffd7335b646a85a21', 'thomas villa, kottayam, kerala', '', 0),
(43, 'Kiran R', 'kiran@gmail.com', 'b1a5b64256e27fa5ae76d62b95209ab3', 'kiran villa, ernakulam, kerala', '', 1),
(44, 'Subin', 'subin@gmail.com', '95c31bc0ebabaac9eda009feaa8cd7ad', 'subin , kottayam, kerala', '', 0),
(45, 'Milan Thomas', 'milan@gmail.com', '83227a721a3363d2c78381664c78657f', 'milan villa, kottayam, kerala', '', 0),
(46, 'Sarath Babu', 'sarath@gmail.com', '6451d62c34ba801398a21df221f675b6', 'sarath villa, ernakulam, kottayam', '', 0),
(47, 'Christy', 'christy@gmail.com', 'e2f48e57eebb4d0158e25ab3408ea4ea', 'christy villa, ernakulam, kerala', '', 0),
(48, 'Jince Mathew', 'jince@gmail.com', 'f47a68f63a8ae0e282d14d50780461b5', 'jince, kottayam, kerala', '', 2),
(49, 'Pradeep C', 'pradeep@gmail.com', 'febc8f8ac083f5fc27e032c81e7b536a', 'pradeep villa, malappuram, kerala', '', 1),
(50, 'Serrin', 'serrin@gmail.com', '0ce94028e03ed4607a056dd3f9fa6a50', 'serrin villa, idukki, kerala', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
