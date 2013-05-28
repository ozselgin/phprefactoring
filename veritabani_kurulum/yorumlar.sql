-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2013 at 03:14 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `urunler`
--

CREATE TABLE IF NOT EXISTS `urunler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `acıklama` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `urunler`
--

INSERT INTO `urunler` (`id`, `ad`, `acıklama`) VALUES
(1, 'Arçelik Nofrost 5847 NFY', '84 cm Genişlikte XXL, A Enerji Sınıfı, Inox No Frost Buzdolabı'),
(2, 'Arçelik Led TV A26-LEG-0B', 'Sevdiği programları kaçırmak istemeyenlere USB''ye kayıt özelliğine sahip, 100 PPR, 4 HMDI girişli LED TV');

-- --------------------------------------------------------

--
-- Table structure for table `yorumlar`
--

CREATE TABLE IF NOT EXISTS `yorumlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urun` int(11) NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `urun`, `baslik`, `icerik`) VALUES
(1, 1, 'Biraz ufak', 'Hacmi ufak bence'),
(2, 1, 'Çok kullanışlı', 'Ben çok memnunum, 2 aydır kullanıyorum. Kaynıma da aynısından aldık.'),
(3, 2, 'Renkler çok net', 'Renkler çok güzel gözüküyor, zaten siyah beyaz televizyonun modası geçmişti. İyi oldu led almamız.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
