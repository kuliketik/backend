-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2016 at 06:43 AM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_loundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `keterangan`
--

CREATE TABLE IF NOT EXISTS `keterangan` (
  `id_keterangan` int(11) NOT NULL AUTO_INCREMENT,
  `id_order` int(11) NOT NULL,
  `id_pakaian` int(11) NOT NULL,
  PRIMARY KEY (`id_keterangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loundry`
--

CREATE TABLE IF NOT EXISTS `loundry` (
  `id_loundry` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nama_loundry` varchar(35) NOT NULL,
  `slogan_loundry` varchar(35) NOT NULL,
  `alamat_loundry` text NOT NULL,
  PRIMARY KEY (`id_loundry`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(20) NOT NULL,
  `link_menu` varchar(20) NOT NULL,
  `icon_menu` varchar(50) NOT NULL,
  `active` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `link_menu`, `icon_menu`, `active`, `parent`) VALUES
(1, 'Menu', 'menu', 'glyphicon glyphicon-th-large', 1, 0),
(4, 'order', 'order', 'glyphicon glyphicon-tag', 1, 1),
(5, 'keterangan', 'keterangan', 'glyphicon glyphicon-th-list', 1, 1),
(6, 'loundry', 'loundry', 'glyphicon glyphicon-repeat', 1, 1),
(7, 'pakaian', 'pakaian', 'glyphicon glyphicon-knight', 1, 1),
(8, 'user', 'user', 'fa fa-users', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `berat_order` int(11) NOT NULL,
  `harga_order` int(11) NOT NULL,
  `notif_order` int(11) NOT NULL,
  `keterangan_order` text NOT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE IF NOT EXISTS `pakaian` (
  `id_pakaian` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pakaian` varchar(35) NOT NULL,
  PRIMARY KEY (`id_pakaian`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`id_pakaian`, `nama_pakaian`) VALUES
(1, 'Kemeja'),
(2, 'Celana Panjang'),
(3, 'Celana Jeans'),
(4, 'Celana Pendek'),
(5, 'Baju Kaos'),
(6, 'Singlet'),
(7, 'Rompi'),
(8, 'Kaos Kaki'),
(9, 'Jacket Tebal'),
(10, 'Jacket Biasa'),
(11, 'Sarung'),
(12, 'Jas / Bleazer (Stel)'),
(13, 'Sarung Bantal'),
(14, 'Sprei'),
(15, 'Bed Cover'),
(16, 'Handuk Mandi Tebal'),
(17, 'Handuk Biasa'),
(18, 'Gordyn / Jok'),
(19, 'Rok'),
(20, 'Baju Tidur'),
(21, 'Selimut Tebal'),
(22, 'Kebaya'),
(23, 'Kolor');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email_user` varchar(50) NOT NULL,
  `nama_user` varchar(35) NOT NULL,
  `password_user` varchar(75) NOT NULL,
  `alamat_user` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email_user`, `nama_user`, `password_user`, `alamat_user`) VALUES
(1, 'gandhi@yahoo.com', 'gandhi', 'f18ed7847686171c3f3f8670cdb0291e', 'jl. fajar'),
(2, 'vicky@yahoo.com', 'vicky', '8af433519d6e385e89bb280f8002f2b2', 'kos flaminggo'),
(3, 'hafizan@yahoo.com', 'hafizan', '5bfa905b921290cedb39ea89ae533ce4', 'gobah'),
(4, 'benny@yahoo.com', 'benny', '42f4b247702c99bda0fc7bcc41c70d19', 'panam'),
(5, 'jufi@yahoo.com', 'jufi', '92af2052ecac75333b2dd010c02c6ca1', 'sei duku'),
(6, 'aldio@yahoo.com', 'aldio', 'b13845cbec419566223fd5171eed06e9', 'panam');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
