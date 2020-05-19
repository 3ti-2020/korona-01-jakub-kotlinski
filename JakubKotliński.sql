-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 19 Maj 2020, 10:46
-- Wersja serwera: 5.7.23
-- Wersja PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `jakub_kotlinski`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `osoby`
--

DROP TABLE IF EXISTS `osoby`;
CREATE TABLE IF NOT EXISTS `osoby` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imie` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nazwisko` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_uprawnienia` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `osoby`
--

INSERT INTO `osoby` (`id`, `imie`, `nazwisko`, `id_uprawnienia`) VALUES
(1, 'Anna', 'Kowalska', 2),
(2, 'Dominik', 'Nowak', 2),
(3, 'Dawid', 'Fosz', 2),
(4, 'Jakub', 'Kotlinski', 1),
(5, 'Tomasz', 'Kaczor', 2),
(6, 'Robert', 'Dach', 2),
(7, 'Julia', 'Tomecka', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `spis_produktow`
--

DROP TABLE IF EXISTS `spis_produktow`;
CREATE TABLE IF NOT EXISTS `spis_produktow` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ilosc_magazyn` int(11) NOT NULL,
  `ilosc_sprzedarz` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `spis_produktow`
--

INSERT INTO `spis_produktow` (`id`, `nazwa`, `ilosc_magazyn`, `ilosc_sprzedarz`) VALUES
(1, 'CyberPunk2077', 1000, 324),
(2, 'Mario odysey', 324, 101),
(3, 'Star Craft', 256, 64),
(4, 'Minecraft', 560, 450),
(5, 'GTA 5', 2000, 1500);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uprawnienia`
--

DROP TABLE IF EXISTS `uprawnienia`;
CREATE TABLE IF NOT EXISTS `uprawnienia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uprawnienia` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `uprawnienia`
--

INSERT INTO `uprawnienia` (`id`, `uprawnienia`) VALUES
(1, 'Administrator'),
(2, 'Klient');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
