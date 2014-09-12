-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2014 at 04:28 PM
-- Server version: 5.1.67-rel14.3-log
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `curcolga_curcol`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE IF NOT EXISTS `tb_about` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `no` text,
  `jawaban` text,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `no` (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id`, `no`, `jawaban`) VALUES
(1, 'Aku maho', 'Iya Emang :D'),
(2, 'Aku hacker! :*', 'Ogitu ye? Masa bodo :3'),
(3, 'Satu', 'Ferdhika Ganteng ka yang buatnya..'),
(4, 'Duaa', 'Punya ide dari mana ya, lupa lagi haha.. dari sim simi nih konsepnya :D makasih sim simi :* <br> oh iya makasih juga buat blognya martabak angus :)'),
(5, 'Tiga', 'Ini kak <a href=''http://facebook.com/ferdhika31''>Facebook</a>nya ini twitternya <a href=''http://twitter.com/ferdhikaaa''>@Ferdhikaaa</a>'),
(6, 'Ferdhika ganteng', 'Iya banget ka :)'),
(7, 'bantuan urang!', 'Caranya, ketik angka yang ada di list ka.. :D');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kalimat`
--

CREATE TABLE IF NOT EXISTS `tb_kalimat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tanya` text,
  `jawab` text,
  `tb_user_id` int(11) DEFAULT NULL,
  `stt` int(2) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`tb_user_id`),
  FULLTEXT KEY `tanya` (`tanya`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `tb_kalimat`
--

INSERT INTO `tb_kalimat` (`id`, `tanya`, `jawab`, `tb_user_id`, `stt`, `tanggal`) VALUES
(34, 'halo', 'hai', 1, 1, '2014-07-30'),
(35, 'halo', 'halo juga :)', 1, 1, '2014-07-30'),
(36, 'udah', 'belum', 2, 1, '2014-07-30'),
(37, 'ngapain?', 'ngapain aja juga boleh', 2, 1, '2014-07-30'),
(38, 'apa kabar?', 'baik :)', 1, 1, '2014-07-30'),
(39, 'apa kabar?', 'buruk :(', 1, 1, '2014-07-30'),
(40, 'baik', 'bagus :)', 1, 1, '2014-07-30'),
(41, 'lagi', 'oh', 1, 1, '2014-07-30'),
(42, 'ayo', 'kemana?', 1, 1, '2014-07-30'),
(43, 'boleh', 'oh makasih :*', 1, 1, '2014-07-30'),
(44, 'anjing', 'sia goblog', 1, 1, '2014-07-30'),
(45, 'boleh', 'beneran?', 1, 1, '2014-07-30'),
(46, 'ngga', 'kenapa? :(', 1, 1, '2014-07-30'),
(47, 'besok', 'hore..', 1, 1, '2014-07-30'),
(48, 'nanti', 'yah ko :(', 1, 1, '2014-07-30'),
(49, 'bentar', 'iya', 1, 1, '2014-07-30'),
(50, 'kamu', 'aku?', 1, 1, '2014-07-30'),
(51, 'kamu maho', 'ngga', 1, 1, '2014-07-30'),
(52, 'siapa?', 'kamu..', 1, 1, '2014-07-30'),
(53, 'saha?', 'maneh', 1, 1, '2014-07-30'),
(54, 'ai sia', 'naon ath naon?', 1, 1, '2014-07-30'),
(55, 'goblog', 'sia -_-', 1, 1, '2014-07-30'),
(56, 'kasar', 'bae', 1, 1, '2014-07-30'),
(57, 'modol', 'ombehan ath', 1, 1, '2014-07-30'),
(58, 'hayang', 'meuli ath ka indomaret', 1, 1, '2014-07-30'),
(59, 'hayang', 'meuli ath ka indomaret', 1, 1, '2014-07-30'),
(60, 'twitter', 'tah follow urang cik @Ferdhikaaa', 1, 1, '2014-07-30'),
(61, 'apa?', 'kamu gila? :3', 1, 1, '2014-07-30'),
(62, 'ga', 'yah', 1, 1, '2014-07-30'),
(63, 'ga kenapa kenapa', 'kenapa? :(', 1, 1, '2014-07-30'),
(64, 'kamu marah?', 'iya marah', 1, 1, '2014-07-30'),
(65, 'gitu', 'apanya? :o', 1, 1, '2014-07-30'),
(66, 'hello', 'hai :*', 1, 1, '2014-07-30'),
(67, 'anjing', 'itu peliharaan gue kak.. B-)', 1, 1, '2014-07-30'),
(68, 'siapa', 'diaa jahat ka.. :(', 1, 1, '2014-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama_awal` varchar(255) DEFAULT NULL,
  `nama_akhir` varchar(255) DEFAULT NULL,
  `kelamin` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `tgl_daftar` varchar(255) DEFAULT NULL,
  `tgl_update` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `email`, `nama_awal`, `nama_akhir`, `kelamin`, `foto`, `status`, `tgl_daftar`, `tgl_update`) VALUES
(1, 'ferdhika31', 'e10adc3949ba59abbe56e057f20f883e', 'ferdhika31@ymail.com', 'Fêrdhîkâ', 'Yûdîrâ', 'L', 'https://graph.facebook.com/ferdhika31/picture', '1', '2014-07-30', '2014-07-30'),
(2, 'andhita12', 'e10adc3949ba59abbe56e057f20f883e', 'dark.generation@rocketmail.com', 'F?r????a', 'Y????a', 'L', 'https://graph.facebook.com/andhita12/picture', '1', '2014-07-30', '2014-07-30'),
(4, 'langit.co.id', 'e10adc3949ba59abbe56e057f20f883e', 'ferdhikayudira@gmail.com', 'Langit', 'Dev', 'L', 'https://graph.facebook.com/langit.co.id/picture', '1', '2014-07-30', '2014-07-30'),
(5, 'rin2.kp', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Rinrin', 'Kania', 'P', 'https://graph.facebook.com/rin2.kp/picture', '1', '2014-07-30', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
