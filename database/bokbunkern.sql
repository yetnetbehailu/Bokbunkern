-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Värd: mysql:3306
-- Tid vid skapande: 26 mars 2026 kl 11:00
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

-- --------------------------------
-- Tabel: `newsletter_subscribers`
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
  `author` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` text NOT NULL,
  `image` VARCHAR(255) NOT NULL,
  `category` VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumpning av Data i tabell `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `description`, `image`, `category`) VALUES
(1, 'A Court of Thorns and Roses', 'Sarah J. Maas', 'En kvinna förs in i feernas värld – en plats av skönhet, mörker, hemligheter och förbjuden kärlek.', 'assets/images/a-court-of-thornes-and-roses.webp', 'Romantasy'),
(2, 'Alchemised', 'SenLinYu', 'I en värld där alkemi kan förändra allt, dras hon in i en farlig kamp om makt, sanning och överlevnad.', 'assets/images/alchemised.webp', 'Romantasy'),
(3, 'Babel', 'R. F. Kuang', 'I ett Oxford där språk är magi dras en student in i en kamp om makt, kolonialism och uppror.', 'assets/images/babel.webp', 'Fantasy'),
(4, 'Bokhandeln under körsbärsträdet', 'Takuya Asakura', 'I en liten bokhandel förändrar oväntade möten människors liv på stillsamma men avgörande sätt.', 'assets/images/bokhandeln-under-körsbärsträdet.webp', 'Feelgood'),
(5, 'Doktor Glas', 'Hjalmar Söderberg', 'En läkare ställs inför ett moraliskt val – och börjar ifrågasätta gränsen mellan rätt och fel.', 'assets/images/doktor-glas.webp', 'Klassiker'),
(6, 'Fourth wing', 'Rebecca Yarros\r\n', 'En ung kvinna kastas in i en brutal drakryttarakademi där bara de starkaste överlever – och där kärlek kan vara lika farlig som kriget.', 'assets/images/fourth-wing.webp', 'Romantasy'),
(7, 'Frankenstein', 'Mary Shelley', 'En vetenskapsman skapar liv – och tvingas möta konsekvenserna.', 'assets/images/frankenstein.webp', 'Klassiker'),
(8, 'Harry Potter och de vises sten', 'J.K. Rowling', 'En pojke upptäcker att han är trollkarl och börjar på en skola för häxkonster – där väntar farliga krafter.', 'assets/images/harry-potter-och-de-vises-sten.webp', 'Fantasy'),
(9, 'Odinsbarn', 'Siri Pettersen', 'En svanslös flicka i en värld av asgudar jagas för den hon är – och bär på en farlig sanning.', 'assets/images/odinsbarn.webp', 'Fantasy'),
(10, 'Pride and Prejudice', 'Jane Austen', 'När stolthet och fördomar står i vägen måste hon ompröva både sina första intryck och sina känslor.', 'assets/images/pride-and-prejudice.webp', 'Klassiker'),
(11, 'Project Hail Mary', 'Andy Weir', 'En pojke upptäcker att han är trollkarl och börjar på en skola för häxkonster – där väntar farliga krafter.', 'assets/images/project-hail-mary.webp', 'Science Fiction'),
(12, 'Quicksilver', 'Callie Hart', 'Adelsätter kämpar om makten i ett brutalt rike där intriger, svek och krig avgör vem som överlever.', 'assets/images/quicksilver.webp', 'Fantasy'),
(13, 'Restaurang Kamogawa och de bortglömda recepten', 'Hisashi Kashiwai', 'På en stillsam restaurang återskapas förlorade rätter – och hjälper människor att hitta tillbaka till sina minnen.', 'assets/images/resturang-kamogawa.webp', 'Feelgood'),
(14, 'Rygga inte undan', 'Stephen King', 'När vardagen spricker visar sig något mörkt och obehagligt – och ingen går säker.', 'assets/images/rygga-inte-undan.webp', 'Skräck'),
(15, 'Så du vill ha det mörkare', 'Stephen King', 'Det vardagliga spricker – och något mörkt tar över.', 'assets/images/så-du-vill-ha-det-morkare.webp', 'Skräck'),
(16, 'Sagan om ringen', 'J.R.R. Tolkien', 'En osannolik grupp ger sig ut på en farlig resa för att förgöra en ring med makt att förgöra världen.', 'assets/images/sagan-om-ringen.webp', 'Fantasy'),
(17, 'Spricktand', 'Tanya Tagaq', 'I en rå och drömlik berättelse växer hon upp mellan verklighet och andevärld i Arktis', 'assets/images/spricktand.webp', 'Litterär fiktion'),
(18, 'Sunrise on the reaping', 'Suzanne Collins', 'Inför de brutala Hungerspelen tvingas en ung deltagare in i ett dödligt maktspel där allt står på spel.', 'assets/images/sunrise-on-the-reaping.webp', 'Science fiction'),
(19, 'Tart', 'Becki Jayne Crossley', 'När en video sprids vänds allt mot henne och Libby tvingas välja mellan hemligheter, lojalitet och att våga följa sitt hjärta.', 'assets/images/tart.webp', 'Litterär fiktion'),
(20, 'The Pumpkin Spice Café', 'Laurie Gilmore', 'En kvinna tar över ett café – och hittar något mer än bara en nystart.', 'assets/images/the-pumpkin-spice-cafe.webp', 'Feelgood'),
(21, 'The spellshop', 'Sarah Beth Durst', 'En kvinna öppnar en magisk butik – och hittar en ny början.', 'assets/images/the-spellshop.webp', 'Feelgood'),
(22, 'When the moon hatches', 'Sarah A. Parker', 'Drakar, magi och ett öde som förändrar allt.', 'assets/images/when-the-moon-hatches.webp', 'Romantasy'),
(23, 'Wuthering Heights', 'Emily Brontë', 'En mörk och besatt kärlek mellan Catherine och Heathcliff som driver dem mot hämnd, förlust och undergång.', 'assets/images/wuthering-heights.webp', 'Klassiker'),
(24, 'Yellowface', 'R. F. Kuang\r\n', 'En författare ljuger sig till framgång – men sanningen hinner ikapp.', 'assets/images/yellowface.webp', 'Thriller'),
(25, 'You', 'Caroline Kepnes', 'En man blir besatt av en kvinna – och går alldeles för långt.', 'assets/images/you.webp', 'Thriller');

-- --------------------------------------------------------

--
-- Tabellstruktur `detail`
--

CREATE TABLE `detail` (
  `comment_id` INT UNSIGNED NOT NULL,
  `user_id` INT UNSIGNED NOT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `detail`
--

INSERT INTO `detail` (`comment_id`, `user_id`, `comment`, `date`) VALUES
(1, 3, 'Spännande bok!', '2026-03-18 13:59:14'),
(3, 1, 'detta ska funka', '2026-03-18 13:42:00'),
(4, 4, 'Rekommenderar denna bok till alla som gillar fantasy, romance och magi. Bladvändare!', '2026-03-23 11:39:42'),
(6, 3, 'Bra bok, rekommenderar.', '2026-03-25 12:16:24');

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `user_id` INT UNSIGNED NOT NULL,
  `firstname` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
(10, 'Mina', 'Minasson', 'Mina@test.se', 'root', '2026-03-15 11:33:55');

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
  MODIFY `id` INT NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT för tabell `detail`
--
ALTER TABLE `detail`
  MODIFY `comment_id` INT UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
