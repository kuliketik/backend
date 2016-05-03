-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2016 at 10:55 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `loundry`
--
CREATE DATABASE IF NOT EXISTS `loundry` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loundry`;

-- --------------------------------------------------------

--
-- Table structure for table `tbcucian`
--

CREATE TABLE IF NOT EXISTS `tbcucian` (
  `idCucian` int(11) NOT NULL AUTO_INCREMENT,
  `idPelanggan` int(11) NOT NULL,
  `idKurir` int(11) NOT NULL,
  `biayaCucian` int(11) NOT NULL,
  `beratCucian` int(11) NOT NULL,
  `ketCucian` text NOT NULL,
  PRIMARY KEY (`idCucian`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbcucian`
--

INSERT INTO `tbcucian` (`idCucian`, `idPelanggan`, `idKurir`, `biayaCucian`, `beratCucian`, `ketCucian`) VALUES
(1, 1, 1, 5000, 1, 'Nyuci kaos singlet doank sekian lembar');

-- --------------------------------------------------------

--
-- Table structure for table `tbkurir`
--

CREATE TABLE IF NOT EXISTS `tbkurir` (
  `idKurir` int(11) NOT NULL AUTO_INCREMENT,
  `namaKurir` varchar(35) NOT NULL,
  `alamatKurir` varchar(50) NOT NULL,
  `jenisKelaminKurir` int(11) NOT NULL,
  `usernameKurir` varchar(35) NOT NULL,
  `passwordKurir` varchar(50) NOT NULL,
  PRIMARY KEY (`idKurir`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbkurir`
--

INSERT INTO `tbkurir` (`idKurir`, `namaKurir`, `alamatKurir`, `jenisKelaminKurir`, `usernameKurir`, `passwordKurir`) VALUES
(1, 'dia', 'disitu', 1, 'dia', 'dia'),
(2, 'dia', 'disitu', 1, 'dia', 'dia'),
(3, 'a', 'a', 2, 'a', '0cc175b9c0f1b6a831c399e269772661');

-- --------------------------------------------------------

--
-- Table structure for table `tbpakaian`
--

CREATE TABLE IF NOT EXISTS `tbpakaian` (
  `idPakaian` int(11) NOT NULL AUTO_INCREMENT,
  `namaPakaian` varchar(35) NOT NULL,
  `hargaPakaian` int(11) NOT NULL,
  PRIMARY KEY (`idPakaian`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tbpakaian`
--

INSERT INTO `tbpakaian` (`idPakaian`, `namaPakaian`, `hargaPakaian`) VALUES
(1, 'Kemeja', 0),
(2, 'Celana Panjang', 0),
(3, 'Celana Jeans', 0),
(4, 'Celana Pendek', 0),
(5, 'Baju Kaos', 0),
(6, 'Singlet', 0),
(7, 'Rompi', 0),
(8, 'Kaos Kaki', 0),
(9, 'Jacket Tebal', 0),
(10, 'jacket Biasa', 0),
(11, 'Sarung', 0),
(12, 'Jas /Bleazer (Stel)', 0),
(13, 'Sarung Bantal', 0),
(14, 'Sprei', 0),
(15, 'Bad Cover', 0),
(16, 'Handuk Mandi Biasa', 0),
(17, 'Handuk Mandi Tebal', 0),
(18, 'Gordyn / Jok', 0),
(19, 'Rok', 0),
(20, 'Baju Tidur', 0),
(21, 'Selimut Tebal', 0),
(22, 'Kebaya', 0),
(23, 'Kolor', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbpelanggan`
--

CREATE TABLE IF NOT EXISTS `tbpelanggan` (
  `idPelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `namaPelanggan` varchar(35) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamatPelanggan` text NOT NULL,
  PRIMARY KEY (`idPelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbpelanggan`
--

INSERT INTO `tbpelanggan` (`idPelanggan`, `namaPelanggan`, `lat`, `lng`, `username`, `password`, `alamatPelanggan`) VALUES
(1, 'Gandhi Wibowo', '0', '0', 'gandhi', 'gandhi', 'disini senang, disana senang');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
