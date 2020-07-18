-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 18. Jul 2020 um 16:23
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_onurumar_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `title` varchar(1000) NOT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `author` varchar(1000) DEFAULT NULL,
  `ISBN_code` int(11) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `publisher` varchar(1000) DEFAULT NULL,
  `type` varchar(1000) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `product`
--

INSERT INTO `product` (`title`, `img`, `author`, `ISBN_code`, `description`, `publish_date`, `publisher`, `type`, `status`, `id`) VALUES
('game of thrones', 'https://d1w7fb2mkkr3kw.cloudfront.net/assets/images/book/lrg/9780/0064/9780006479888.jpg', 'george', 1, 'dragons', '2020-07-29', 'george', 'book', 1, 1),
('nike book', 'https://m.media-amazon.com/images/I/41k+WVPLwZL.jpg', 'nike guy', 3, 'shoe book', '2020-07-30', 'niek guy', 'book', 1, 3),
('inception', 'https://media1.jpc.de/image/w600/front/0/5051890025067.jpg', 'chris nolan', 4, 'good movie', '2020-07-23', 'chris', 'dvd', 1, 4);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
