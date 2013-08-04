-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 04 Ağu 2013, 11:54:46
-- Sunucu sürümü: 5.5.24-log
-- PHP Sürümü: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `notdefteri`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `notlar`
--

CREATE TABLE IF NOT EXISTS `notlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) DEFAULT NULL,
  `icerik` varchar(255) DEFAULT NULL,
  `yazar` varchar(255) DEFAULT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Tablo döküm verisi `notlar`
--

INSERT INTO `notlar` (`id`, `baslik`, `icerik`, `yazar`, `tarih`) VALUES
(4, 'PDO ', 'Ä°Ã§erik gÃ¼ncellendi', 'Yasin Coskun', '2013-08-04 10:35:05'),
(5, 'Hadi bakalim', 'content master', 'Tester', '2013-07-20 10:00:08');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye`
--

CREATE TABLE IF NOT EXISTS `uye` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) DEFAULT NULL,
  `soyad` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `uye`
--

INSERT INTO `uye` (`id`, `ad`, `soyad`, `email`, `sifre`) VALUES
(2, 'Yasin', 'Coskun', 'yajinn@gmail.com', '123'),
(4, 'Ahmet', 'yÄ±lmaz', 'mm@motmail.com', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
