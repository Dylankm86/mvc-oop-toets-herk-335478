-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 31 mrt 2023 om 09:41
-- Serverversie: 5.7.36
-- PHP-versie: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc-oop-toets-herk`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `poundforpound`
--

DROP TABLE IF EXISTS `poundforpound`;
CREATE TABLE IF NOT EXISTS `poundforpound` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `ranking` smallint(100) NOT NULL,
  `length` varchar(100) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `age` tinyint(3) NOT NULL,
  `winsbyknockout` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `poundforpound`
--

INSERT INTO `poundforpound` (`id`, `name`, `ranking`, `length`, `weight`, `age`, `winsbyknockout`) VALUES
(1, 'jon jones', 1, '1.93', '112', 35, 10),
(2, 'alexander volkanovski', 2, '1.68', '66', 34, 12),
(3, 'islam mahkhachev', 3, '1.78', '70', 31, 4),
(4, 'leon edwards', 4, '1.83', '77', 31, 7),
(5, 'isreal adesanya', 5, '1.93', '84', 33, 15);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
