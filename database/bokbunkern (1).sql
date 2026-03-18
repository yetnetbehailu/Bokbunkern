-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Värd: mysql:3306
-- Tid vid skapande: 18 mars 2026 kl 11:42
-- Serverversion: 8.0.45
-- PHP-version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `bokbunkern`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `detail`
--

CREATE TABLE `detail` (
  `comment_id` int UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `comment` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumpning av Data i tabell `detail`
--

INSERT INTO `detail` (`comment_id`, `user_id`, `comment`, `date`) VALUES
(5, 2, 'oooo asså vilken bok!', '2026-03-16 18:19:03'),
(6, 7, 'WOW vilken bok! Så bra!', '2026-03-17 13:45:58'),
(26, 4, 'Hej! älskar denna boken.', '2026-03-18 09:54:16');

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `user_id` int UNSIGNED NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `regdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `password`, `regdate`) VALUES
(1, 'root', 'root', 'mina.borjesson0056@stud.hkr.se', 'root', '2026-03-15 11:26:18'),
(2, 'Anna', 'Andersson', 'anna@test.se', 'root', '2026-03-15 11:32:00'),
(3, 'Erik', 'Eriksson', 'Erik@test.se', 'root', '2026-03-15 11:32:10'),
(4, 'Lisa', 'Larsson', 'lisa@test.se', 'root', '2026-03-15 11:32:23'),
(5, 'Johan', 'Johansson', 'Johan@test.se', 'root', '2026-03-15 11:32:40'),
(6, 'Sara', 'Svensson', 'Sara@test.se', 'root', '2026-03-15 11:32:53'),
(7, 'David', 'Nilsson', 'david@test.se', 'root', '2026-03-15 11:33:08'),
(8, 'Emma', 'Karlsson', 'Emma@test.se', 'root', '2026-03-15 11:33:20'),
(9, 'Oskar', 'Petterson', 'Oskar@test.se', 'root', '2026-03-15 11:33:32'),
(10, 'Mina', 'Minasson', 'Mina@test.se', 'root', '2026-03-15 11:33:55'),
(11, 'Ofelia', 'Gärdefors', 'ofelia@gmail.com', 'morot', '2026-03-16 11:15:34');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `detail`
--
ALTER TABLE `detail`
  MODIFY `comment_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
