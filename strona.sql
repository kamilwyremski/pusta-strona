-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas wygenerowania: 17 Mar 2014, 19:54
-- Wersja serwera: 5.6.11
-- Wersja PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `strona`
--
CREATE DATABASE IF NOT EXISTS `strona` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `strona`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `content` text COLLATE utf8_polish_ci NOT NULL,
  `time` int(11) NOT NULL,
  `email` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `tel` varchar(32) COLLATE utf8_polish_ci DEFAULT NULL,
  `activation_code` varchar(32) COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ban`
--

CREATE TABLE IF NOT EXISTS `ban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(32) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cms`
--

CREATE TABLE IF NOT EXISTS `cms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(32) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `cms`
--

INSERT INTO `cms` (`id`, `login`, `password`) VALUES
(1, 'test', '1234');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT NULL,
  `title` varchar(256) DEFAULT NULL,
  `url` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Zrzut danych tabeli `footer`
--

INSERT INTO `footer` (`id`, `type`, `title`, `url`) VALUES
(7, 1, 'Bankier 24h', 'http://bankier24h.pl/'),
(8, 1, 'Credits24', 'http://credits24.pl/'),
(9, 4, 'Dolina Domen', 'http://dolinadomen.pl/'),
(10, 4, 'Grupa eDOM', 'http://grupaedom.pl/'),
(11, 1, 'eFinanse', 'http://efinanse.com.pl/'),
(12, 1, 'Expert Kredytowy', 'http://expertkredytowy.pl/'),
(13, 0, 'Grupa SEO', 'http://grupaseo.com.pl/'),
(14, 0, 'SEO-Manager', 'http://seo-manager.pl/'),
(15, 0, 'SEO Spis', 'http://seospis.pl'),
(16, 3, 'Miejsce na urlop', 'http://miejscenaurlop.pl/'),
(17, 3, 'Miejsce na wczasy', 'http://miejscenawczasy.pl/'),
(18, 3, 'Twoja Polska', 'http://twojapolska.pl/'),
(19, 2, 'Najsy', 'http://www.najsy.pl/'),
(20, 0, 'SEO Lista', 'http://seolista.com.pl/'),
(21, 2, 'Wsiok', 'http://wsiok.pl/'),
(22, 4, 'Smak Pracy', 'http://smakpracy.pl/'),
(23, 4, 'Wspomnij Mnie', 'http://wspomnijmnie.pl/'),
(24, 2, 'Bajka Online', 'http://bajkaonline.pl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` int(11) DEFAULT NULL,
  `ads_0` int(11) DEFAULT NULL,
  `ads_1` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `settings`
--

INSERT INTO `settings` (`id`, `price`, `ads_0`, `ads_1`) VALUES
(1, 100, 10, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
