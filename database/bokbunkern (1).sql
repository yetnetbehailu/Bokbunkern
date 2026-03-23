-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Värd: mysql:3306
-- Tid vid skapande: 20 mars 2026 kl 07:22
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

-- ---------------------------
-- Tabellstruktur: `users`
-- ---------------------------

CREATE TABLE `users` (
  `user_id` INT UNSIGNED NOT NULL,
  `firstname` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regdate` DATETIME NOT NULL
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
(10, 'Mina', 'Minasson', 'Mina@test.se', 'root', '2026-03-15 11:33:55');


-- --------------------------------
-- Tabell: `newsletter_subscribers`
-- To store email addresses for newsletter signups.
-- Unique constraint to prevent double registrations of email addresses.
-- --------------------------------
CREATE TABLE `newsletter_subscribers` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY (`email`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tabellstruktur `books`
--
CREATE TABLE `books` (
  `id` INT NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `description` text NOT NULL,
  `image` VARCHAR(255) NOT NULL,
  `category` VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumpning av Data i tabell `books`
--
INSERT INTO `books` (`id`, `title`, `description`, `image`, `category`) VALUES
(1, 'A Court of Thorns and Roses', 'En kvinna förs in i feernas värld – en plats av skönhet, mörker, hemligheter och förbjuden kärlek.', 'assets/images/acotar.jpg', 'Romantasy'),
(2, 'Alchemised', 'I en värld där alkemi kan förändra allt, dras hon in i en farlig kamp om makt, sanning och överlevnad.', 'assets/images/alchemised.jpg', 'Romantasy'),
(3, 'Babel', 'I ett Oxford där språk är magi dras en student in i en kamp om makt, kolonialism och uppror.', 'assets/images/babel.jpg', 'Fantasy'),
(4, 'Frankenstein', 'En vetenskapsman skapar liv – och tvingas möta konsekvenserna av sitt eget verk.', 'assets/images/frankenstein.jpg', 'Klassiker'),
(5, 'Doktor Glas', 'En läkare ställs inför ett moraliskt val – och börjar ifrågasätta gränsen mellan rätt och fel.', 'assets/images/glas.jpg', 'Skräck'),
(6, 'Harry Potter och de vises sten', 'En pojke upptäcker att han är trollkarl – och dras in i en värld av magi, vänskap och mörka krafter.', 'assets/images/harrypotter.jpg', 'Fantasy'),
(7, 'Bokhandeln under körsbärsträdet', 'I en liten bokhandel förändrar oväntade möten människors liv på stillsamma men avgörande sätt.', 'assets/images/körsbär.jpg', 'Feelgood'),
(8, 'Hail Mary', 'En ensam astronaut vaknar utan minne – och inser att han är mänsklighetens sista hopp.', 'assets/images/mary.jpg', 'Science fiction'),
(9, 'When the moon hatched', 'I en brutal värld av drakar och magi binds hennes öde till krafter som kan förändra allt.', 'assets/images/moon.jpg', 'Romantasy'),
(10, 'Så du vill ha det mörkare', 'Mörka berättelser där det vardagliga spricker – och något långt mer skrämmande tar plats.', 'assets/images/mörkare.jpg', 'Skräck'),
(11, 'Odinsbarn', 'En svanslös flicka i en värld av asgudar jagas för den hon är – och bär på en farlig sanning.', 'assets/images/odin.jpg', 'Fantasy'),
(12, 'A Game of Thrones', 'Adelsätter kämpar om makten i ett brutalt rike där intriger, svek och krig avgör vem som överlever.', 'assets/images/ot.jpg', 'Fantasy'),
(13, 'Pride and Prejudice', 'När stolthet och fördomar står i vägen måste hon ompröva både sina första intryck och sina känslor.', 'assets/images/prejudice.jpg', 'Klassiker'),
(14, 'The Pumpkin Spice Café', 'En ny start i en småstad leder till oväntad kärlek, hemligheter och höstig café-magi.', 'assets/images/pumpkin.jpg', 'Feelgood'),
(15, 'Restaurang Kamogawa och de bortglömda recepten\r\n', 'På en stillsam restaurang återskapas förlorade rätter – och hjälper människor att hitta tillbaka till sina minnen', 'assets/images/resturang.jpg', 'Feelgood'),
(16, 'Sagan om ringen', 'En osannolik grupp ger sig ut på en farlig resa för att förgöra en ring med makt att förgöra världen.', 'assets/images/rings.jpg', 'Fantasy'),
(17, 'Rygga inte undan', 'När vardagen spricker visar sig något mörkt och obehagligt – och ingen går säker.', 'assets/images/rygga.jpg', 'Skräck'),
(18, 'Quicksilver', 'I en värld av maktspel och dolda agendor dras hon in i ett farligt spel där inget är vad det verkar.', 'assets/images/silver.jpg', 'Fantasy'),
(19, 'The spellshop', 'Hon öppnar en magisk bokhandel på en avlägsen ö – och får en chans att börja om', 'assets/images/spellshop.jpg', 'Feelgood'),
(20, 'Spricktand', 'I en rå och drömlik berättelse växer hon upp mellan verklighet och andevärld i Arktis', 'assets/images/spricktand.jpg', 'Litterär fiktion'),
(21, 'Sunrise on the Reaping', 'Inför de brutala hungerspelen tvingas en ung deltagare in i ett dödligt maktspel där allt står på spel.', 'assets/images/sunrise.jpg', 'Science fiction'),
(22, 'Tart', 'När en video sprids vänds allt mot henne och Libby tvingas välja mellan hemligheter, lojalitet och att våga följa sitt hjärta.', 'assets/images/tart.jpg', 'Feelgood'),
(23, 'Fourth wing', 'En ung kvinna kastas in i en brutal drakryttarakademi där bara de starkaste överlever – och där kärlek kan vara lika farlig som kriget.', 'assets/images/wing.jpg', 'Romantasy'),
(24, 'Wuthering Heights', 'En mörk och besatt kärlek mellan Catherine och Heathcliff som driver dem mot hämnd, förlust och undergång.', 'assets/images/wuthering.jpg', 'Klassiker'),
(25, 'Yellow', 'En författare stjäl en död väns manus och kliver in i en lögn som snabbt börjar rasera allt.', 'assets/images/yellow.jpg', 'Litterär fiktion');

-- --------------------------------------------------------

--
-- Tabellstruktur `detail`
--

CREATE TABLE `detail` (
  `comment_id` INT UNSIGNED NOT NULL,
  `user_id` INT UNSIGNED NOT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `detail`
--
INSERT INTO `detail` (`comment_id`, `user_id`, `comment`, `date`) VALUES
(1, 3, 'Spännande bok!', '2026-03-18 13:59:14'),
(3, 1, 'detta ska funka', '2026-03-18 13:42:00');

-- --------------------------------------------------------

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `books`
--
ALTER TABLE `books`
  MODIFY `id` INT NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT för tabell `detail`
--
ALTER TABLE `detail`
  MODIFY `comment_id` INT UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `user_id` INT UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;