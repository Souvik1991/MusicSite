-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 21, 2013 at 11:47 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a1035289_song`
--

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `song_id` int(11) NOT NULL,
  `song_path` varchar(200) NOT NULL,
  `song_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `song_id` (`song_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `song`
--

INSERT INTO `song` VALUES(1, 1, 'http://media.downloadming.se/Lootera%20(2013)/06%20-%20Manmarziyan%20-%20DownloadMing.SE.mp3', 'Lootera - Manmarziyan');
INSERT INTO `song` VALUES(2, 1, 'http://media.downloadming.se/Lootera%20(2013)/05%20-%20Zinda%20-%20DownloadMing.SE.mp3', 'Lootera - Zinda');
INSERT INTO `song` VALUES(3, 1, 'http://media.downloadming.se/Lootera%20(2013)/04%20-%20Monta%20Re%20-%20DownloadMing.SE.mp3', 'Lootera - Monta Re');
INSERT INTO `song` VALUES(4, 1, 'http://media.downloadming.se/Lootera%20(2013)/03%20-%20Shikayatein%20-%20DownloadMing.SE.mp3', 'Lootera - Shikayatein');
INSERT INTO `song` VALUES(5, 1, 'http://media.downloadming.se/Lootera%20(2013)/02%20-%20Ankahee%20-%20DownloadMing.SE.mp3', 'Lootera - Ankahee');
INSERT INTO `song` VALUES(6, 1, 'http://media.downloadming.se/Lootera%20(2013)/01%20-%20Sawaar%20Loon%20-%20DownloadMing.SE.mp3', 'Lootera - Sawaar Loon');
INSERT INTO `song` VALUES(7, 2, 'http://media.downloadming.se/Bhaag%20Milkha%20Bhaag%20(2013)/Bhaag%20Milkha%20Bhaag%20(2013)/01%20-%20Gurbani%20-%20DownloadMing.SE.mp3', 'Bhag Milkha Bhag - Gurbani');
INSERT INTO `song` VALUES(8, 2, 'http://media.downloadming.se/Bhaag%20Milkha%20Bhaag%20(2013)/Bhaag%20Milkha%20Bhaag%20(2013)/02%20-%20Zinda%20-%20DownloadMing.SE.mp3', 'Bhag Milkha Bhag - Zinda');
INSERT INTO `song` VALUES(9, 2, 'http://media.downloadming.se/Bhaag%20Milkha%20Bhaag%20(2013)/Bhaag%20Milkha%20Bhaag%20(2013)/03%20-%20Mera%20Yaar%20-%20DownloadMing.SE.mp3', 'Bhag Milkha Bhag - Mera Yaar');
INSERT INTO `song` VALUES(10, 2, 'http://media.downloadming.se/Bhaag%20Milkha%20Bhaag%20(2013)/Bhaag%20Milkha%20Bhaag%20(2013)/04%20-%20Maston%20Ka%20Jhund%20-%20DownloadMing.SE.mp3', 'Bhag Milkha Bhag - Maston Ka Jhund');
INSERT INTO `song` VALUES(11, 2, 'http://media.downloadming.se/Bhaag%20Milkha%20Bhaag%20(2013)/Bhaag%20Milkha%20Bhaag%20(2013)/05%20-%20Bhaag%20Milkha%20Bhaag%20-%20DownloadMing.SE.mp3', 'Bhaag Milkha Bhaag - Bhaag Milkha Bhaag');
INSERT INTO `song` VALUES(12, 2, 'http://media.downloadming.se/Bhaag%20Milkha%20Bhaag%20(2013)/Bhaag%20Milkha%20Bhaag%20(2013)/06%20-%20Slow%20Motion%20Angreza%20-%20DownloadMing.SE.mp3', 'Bhag Milkha Bhaag - Slow Motion Angreza');
INSERT INTO `song` VALUES(13, 2, 'http://media.downloadming.se/Bhaag%20Milkha%20Bhaag%20(2013)/Bhaag%20Milkha%20Bhaag%20(2013)/07%20-%20O%20Rangrez%20-%20DownloadMing.SE.mp3', 'Bhaag Milkha Bhaag - O Rangrez');
INSERT INTO `song` VALUES(14, 2, 'http://media.downloadming.se/Bhaag%20Milkha%20Bhaag%20(2013)/Bhaag%20Milkha%20Bhaag%20(2013)/08%20-%20Bhaag%20Milkha%20Bhaag%20(Rock%20Version)%20-%20DownloadMing.SE.mp3', 'Bhaag Milkha Bhaag - Bhaag Milkha Bhaag (Rock Version)');
INSERT INTO `song` VALUES(15, 3, 'http://k002.kiwi6.com/hotlink/od8pg043zi/p.mp3', 'Go Goa Gone - Slowly Slowly');
INSERT INTO `song` VALUES(16, 3, 'http://media.downloadming.se/Go%20Goa%20Gone%20(2013)/Go%20Goa%20Gone%20(2013)/02%20-%20Khoon%20Choos%20Le%20-%20DownloadMing.SE.mp3', 'Go Goa Gone - Khoon Choos Le');
INSERT INTO `song` VALUES(17, 3, 'http://media.downloadming.se/Go%20Goa%20Gone%20(2013)/Go%20Goa%20Gone%20(2013)/03%20-%20Babaji%20Ki%20Booti%20-%20DownloadMing.SE.mp3', 'Go Goa Gone - Babaji Ki Booti');
INSERT INTO `song` VALUES(18, 3, 'http://media.downloadming.se/Go%20Goa%20Gone%20(2013)/Go%20Goa%20Gone%20(2013)/04%20-%20Khushamdeed%20-%20DownloadMing.SE.mp3', 'Go Goa Gone - Khushamdeed');
INSERT INTO `song` VALUES(19, 3, 'http://media.downloadming.se/Go%20Goa%20Gone%20(2013)/Go%20Goa%20Gone%20(2013)/05%20-%20I%20Keel%20Dead%20Peepal%20-%20DownloadMing.SE.mp3', 'Go Goa Gone - I Keel Dead Peepal');
INSERT INTO `song` VALUES(20, 4, 'http://128f.downloadming1.com/Ek%20Thi%20Daayan%20(2013)/01%20-%20Yaaram%20-%20DownloadMing.SE.mp3', 'Ek Thi Daayan - Yaaram');
INSERT INTO `song` VALUES(21, 4, 'http://128f.downloadming1.com/Ek%20Thi%20Daayan%20(2013)/02%20-%20Totey%20Ud%20Gaye%20-%20DownloadMing.SE.mp3', 'Ek Thi Daayan - Totey Ud Gaye');
INSERT INTO `song` VALUES(22, 4, 'http://128f.downloadming1.com/Ek%20Thi%20Daayan%20(2013)/03%20-%20Kaali%20Kaali%20-%20DownloadMing.SE.mp3', 'Ek Thi Daayan - Kaali Kaali');
INSERT INTO `song` VALUES(23, 4, 'http://128f.downloadming1.com/Ek%20Thi%20Daayan%20(2013)/04%20-%20Lautungi%20Main%20-%20DownloadMing.SE.mp3', 'Ek Thi Daayan - Lautungi Main');
INSERT INTO `song` VALUES(24, 4, 'http://128f.downloadming1.com/Ek%20Thi%20Daayan%20(2013)/05%20-%20Sapna%20Re%20Sapna%20-%20DownloadMing.SE.mp3', 'Ek Thi Daayan - Sapna Re Sapna');
INSERT INTO `song` VALUES(31, 5, '', 'Kai Po Che - Manja');
INSERT INTO `song` VALUES(32, 5, '', 'Kai Po Che - Shubhaarambh');
INSERT INTO `song` VALUES(33, 5, '', 'Kai Po Che - Meethi Boliyaan');
INSERT INTO `song` VALUES(34, 6, 'http://128f.downloadming1.com/Jayanta%20Bhai%20Ki%20Luv%20Story%20(2013)/01%20-%20Aa%20Bhi%20Ja%20Mere%20Mehermaan%20-%20DownloadMing.SE.mp3', 'Jayanta Bhai Ki Luv Story - Aa Bhi Ja');
INSERT INTO `song` VALUES(35, 6, 'http://128f.downloadming1.com/Jayanta%20Bhai%20Ki%20Luv%20Story%20(2013)/02%20-%20Thoda%20Thoda%20-%20DownloadMing.SE.mp3', 'Jayanta Bhai Ki Luv Story - Thoda Thoda');
INSERT INTO `song` VALUES(36, 6, 'http://128f.downloadming1.com/Jayanta%20Bhai%20Ki%20Luv%20Story%20(2013)/03%20-%20Dil%20Na%20Jaane%20Kyun%20-%20DownloadMing.SE.mp3', 'Jayanta Bhai Ki Luv Story - Dil Na Jaane Kyun ');
INSERT INTO `song` VALUES(37, 6, 'http://128f.downloadming1.com/Jayanta%20Bhai%20Ki%20Luv%20Story%20(2013)/04%20-%20Hai%20Na%20-%20DownloadMing.SE.mp3', 'Jayanta Bhai Ki Luv Story - Hai Na');
INSERT INTO `song` VALUES(38, 6, 'http://128f.downloadming1.com/Jayanta%20Bhai%20Ki%20Luv%20Story%20(2013)/05%20-%20Mashup%20(Jayantabhai%20Ki%20Luv%20Story)%20-%20DownloadMing.SE.mp3', 'Jayanta Bhai Ki Luv Story - Mashup');
INSERT INTO `song` VALUES(40, 7, 'http://media.downloadming.se/Go%20Goa%20Gone%20(2013)/Go%20Goa%20Gone%20(2013)/03%20-%20Babaji%20Ki%20Booti%20-%20DownloadMing.SE.mp3', 'Babaji Ki Booti');
INSERT INTO `song` VALUES(41, 7, 'http://media.downloadming.se/Go%20Goa%20Gone%20(2013)/Go%20Goa%20Gone%20(2013)/01%20-%20Slowly%20Slowly%20-%20DownloadMing.SE.mp3', 'Slowly Slowly');
INSERT INTO `song` VALUES(42, 9, 'http://128f.downloadming1.com/Ek%20Thi%20Daayan%20(2013)/01%20-%20Yaaram%20-%20DownloadMing.SE.mp3', 'Yaaram');
INSERT INTO `song` VALUES(43, 9, 'http://media.downloadming.se/Lootera%20(2013)/01%20-%20Sawaar%20Loon%20-%20DownloadMing.SE.mp3', 'Sawaar Loon');
INSERT INTO `song` VALUES(44, 10, 'http://media.downloadming.se/Lootera%20(2013)/05%20-%20Zinda%20-%20DownloadMing.SE.mp3', 'Zinda');
INSERT INTO `song` VALUES(45, 10, 'http://128f.downloadming1.com/Jayanta%20Bhai%20Ki%20Luv%20Story%20(2013)/01%20-%20Aa%20Bhi%20Ja%20Mere%20Mehermaan%20-%20DownloadMing.SE.mp3', 'Aa Bhi Ja');
