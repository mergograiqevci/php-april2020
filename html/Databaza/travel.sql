-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 11:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorite`
--

CREATE TABLE `kategorite` (
  `kat_id` int(11) NOT NULL,
  `kat_emri` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorite`
--

INSERT INTO `kategorite` (`kat_id`, `kat_emri`) VALUES
(1, 'Europa'),
(2, 'Azi'),
(9, 'Prizreni'),
(11, 'Tirana');

-- --------------------------------------------------------

--
-- Table structure for table `mesazhet`
--

CREATE TABLE `mesazhet` (
  `id` int(11) NOT NULL,
  `emri` varchar(30) NOT NULL,
  `emaili` varchar(30) NOT NULL,
  `mesazhi` varchar(250) NOT NULL,
  `koha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mesazhet`
--

INSERT INTO `mesazhet` (`id`, `emri`, `emaili`, `mesazhi`, `koha`) VALUES
(1, 'Mergim', 'mergimi@gmail.com', 'Pershendetje grupi', '2020-05-16 18:39:57'),
(2, 'Lirim', 'lirimi@gmail.com', 'Pershendetje ekipa', '2020-05-16 18:39:57'),
(4, 'Jon', 'jon@gmail.com', 'Hello ', '2020-05-16 18:40:35'),
(5, 'Lum', 'lum@gmail.com', 'Tung', '2020-05-16 18:43:35'),
(7, 'Abc', 'abc@mail.com', 'abc dfe ghi', '2020-05-17 18:41:43'),
(8, 'asmdkl', 'asmdkl@mail.com', 'asklmdsalkm', '2020-05-17 19:34:37'),
(9, 'klm', 'mkl@mail.com', 'amsdlkaskm sad', '2020-05-17 19:35:18');

-- --------------------------------------------------------

--
-- Table structure for table `ofertat`
--

CREATE TABLE `ofertat` (
  `oferta_id` int(11) NOT NULL,
  `emri_oferta` varchar(255) NOT NULL,
  `foto_oferta` text NOT NULL,
  `cmimi_oferta` varchar(255) NOT NULL,
  `category_oferta` int(11) NOT NULL,
  `data_postimi` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ofertat`
--

INSERT INTO `ofertat` (`oferta_id`, `emri_oferta`, `foto_oferta`, `cmimi_oferta`, `category_oferta`, `data_postimi`) VALUES
(1, 'dubai', 'dubai.jpg', '519 euro', 2, '2020-05-17 00:00:00'),
(2, 'stamboll', 'stamboll.jpg', '219 euro', 1, '2020-05-17 00:00:00'),
(3, 'doha', 'doha.jpg', '579 euro', 2, '2020-05-17 00:00:00'),
(4, 'Amsterdam', 'amsterdam.jpg', '350 euro', 1, '2020-05-17 00:00:00'),
(5, 'Barcelona', 'barcelona.jpg', '219 euro', 1, '2020-05-17 00:00:00'),
(9, 'Paris', 'paris.jpg', '350 euro', 1, '2020-05-17 22:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rezervimet`
--

CREATE TABLE `rezervimet` (
  `id` int(4) NOT NULL,
  `user_emri` varchar(30) NOT NULL,
  `user_mbiemri` varchar(30) NOT NULL,
  `user_gjinia` varchar(20) NOT NULL,
  `user_birthday` varchar(255) NOT NULL,
  `user_nisja` varchar(30) NOT NULL,
  `user_destinacion` varchar(30) NOT NULL,
  `hoteli` varchar(40) NOT NULL,
  `user_nete` int(11) NOT NULL,
  `user_dhoma` int(11) NOT NULL,
  `user_femije` int(11) NOT NULL,
  `user_data_nisjes` varchar(255) NOT NULL,
  `user_koment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rezervimet`
--

INSERT INTO `rezervimet` (`id`, `user_emri`, `user_mbiemri`, `user_gjinia`, `user_birthday`, `user_nisja`, `user_destinacion`, `hoteli`, `user_nete`, `user_dhoma`, `user_femije`, `user_data_nisjes`, `user_koment`) VALUES
(1, 'Lum', 'Pireva', 'male', '2020-05-28', 'Prishtina', 'Paris', 'Hotel', 5, 1, 1, '2020-05-26', 'Pershendetje'),
(3, 'Jon', 'Hajdini', 'male', '2020-05-14', 'Shkupi', 'Amsterdam', 'hoteli', 7, 2, 0, '2020-05-30', 'Tungjatjeta!'),
(4, 'Merim', 'Graicevci', 'male', '2020-05-07', 'Prishtina', 'Dubai', 'hello', 3, 2, 1, '2020-05-07', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `user_email` text NOT NULL,
  `password` text NOT NULL,
  `user_firstname` varchar(25) NOT NULL,
  `user_lastname` varchar(25) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_email`, `password`, `user_firstname`, `user_lastname`, `user_role`, `randSalt`) VALUES
(1, 'lum', 'lum@mail.com', '$1$a2l1Nv.L$wtvFCsnSF8IOi9FqNJhpi/', 'Lum', 'Pireva', 'admin', '$2y$10$iusesomecrazystrings22'),
(3, 'jon', 'jon@mail.com', '$2y$10$iusesomecrazystrings2utumY6JHfq9jsE7VcACVpD/0Mt/WPGOy', 'Joni', 'Hajdini', 'subscriber', '$2y$10$iusesomecrazystrings22'),
(8, 'mergim', 'mergim@mail.com', '$2y$12$9C9eF.45IA1/65qicSDlteanMpK3T5LpVTphe474V3WaJXEQeZPea', 'Mergim', 'Graicevci', 'subscriber', '$2y$10$iusesomecrazystrings22'),
(9, 'vlera', 'vlera@mail.com', '$2y$12$nahTDlvnZXOiCJP/oWDJd.F3C48vzQN6MK2eXYoPqah6P57L.RS9q', 'Vlera', 'Alimehaj', 'admin', '$2y$10$iusesomecrazystrings22'),
(10, 'dardan', 'dard@mail.com', '$2y$10$rSuF9B0.flYTnLeAbq.CM.oaJ9s0ei/Qk2PMtHy/xQwPzw1PNb7oC', 'dardan', 'shabani', 'admin', '$2y$10$iusesomecrazystrings22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorite`
--
ALTER TABLE `kategorite`
  ADD PRIMARY KEY (`kat_id`);

--
-- Indexes for table `mesazhet`
--
ALTER TABLE `mesazhet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ofertat`
--
ALTER TABLE `ofertat`
  ADD PRIMARY KEY (`oferta_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezervimet`
--
ALTER TABLE `rezervimet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorite`
--
ALTER TABLE `kategorite`
  MODIFY `kat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mesazhet`
--
ALTER TABLE `mesazhet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ofertat`
--
ALTER TABLE `ofertat`
  MODIFY `oferta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rezervimet`
--
ALTER TABLE `rezervimet`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
