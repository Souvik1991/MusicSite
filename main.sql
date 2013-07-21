-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 21, 2013 at 11:45 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a1035289_song`
--

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(200) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `main`
--

INSERT INTO `main` VALUES(1, 'lootera', 'http://uploadingit.com/file/rcnxtmslbdt6ba1x/lootera.jpg', 'album');
INSERT INTO `main` VALUES(2, 'bhaag milkha bhaag', 'http://uploadingit.com/file/akbxmjamqxmgv8d9/bhaagmilkhabhaag.jpg', 'album');
INSERT INTO `main` VALUES(3, 'go goa gone', 'http://uploadingit.com/file/m0vfnb8mfsxx647d/gogoagone.jpg', 'album');
INSERT INTO `main` VALUES(4, 'ek thi daayan', 'http://4.bp.blogspot.com/-jhAvhTwanew/UVdT9EIMP9I/AAAAAAAAAwQ/QbU05qZg4OE/s1600/Ek+Thi+Daayan+2013+Songs+Mp3.jpg', 'album');
INSERT INTO `main` VALUES(5, 'kai po che', 'http://uploadingit.com/file/ilcpyszr1n5fq4nl/kaipoche.jpg', 'album');
INSERT INTO `main` VALUES(6, 'jayanta bhai ki luv story', 'http://movies.infoonlinepages.com/gallery/var/albums/Movie-Stills/J/Jayanta-Bhai-Ki-Luv-Story/Stills-3/Jayanta%20Bhai%20Ki%20Luv%20Story%20Movie%20Posters%201.jpg?m=1357729661', 'album');
INSERT INTO `main` VALUES(7, 'chillax', 'http://uploadingit.com/file/r6fplw2tl3l5vafy/chillax.jpg', 'mood');
INSERT INTO `main` VALUES(8, 'folk', 'http://uploadingit.com/file/tjzlckgsycsku4yr/folk.jpg', 'mood');
INSERT INTO `main` VALUES(9, 'in love', 'http://uploadingit.com/file/mezabwbymfbtwi4l/love.jpg', 'mood');
INSERT INTO `main` VALUES(10, 'sad', 'http://uploadingit.com/file/usqo5qhujn2gjgke/sad.jpg', 'mood');
