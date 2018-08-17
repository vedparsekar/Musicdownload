-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 18, 2018 at 12:23 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `UserName` varchar(150) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `UpdatingDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `adming` varchar(40) NOT NULL,
  `astatus` int(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `contactno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `UpdatingDate`, `adming`, `astatus`, `address`, `emailid`, `contactno`) VALUES
(5, 'qudrat', '4124bc0a9335c27f086f24ba207a4912', '2018-03-04 05:49:41', '', 1, '', '', ''),
(6, 'ahmad', 'aa', '2018-02-20 17:41:59', '', 0, '', 'aa', '');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artid` int(25) NOT NULL,
  `artistname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artid`, `artistname`) VALUES
(1, 'Ed Sheeran'),
(2, 'Dua Lipa'),
(3, 'Justin bieber'),
(4, 'Taylor Swift'),
(6, 'Dia muhhamadi');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chatID` int(20) NOT NULL,
  `admin` varchar(200) NOT NULL,
  `User` varchar(200) NOT NULL,
  `chat` longtext NOT NULL,
  `sendingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chatID`, `admin`, `User`, `chat`, `sendingDate`) VALUES
(25, '5', '13', 'hi', '2018-03-07 18:33:53'),
(26, '13', '5', 'hi how are you', '2018-03-07 18:34:31'),
(28, '5', '13', 'hi janan', '2018-03-08 17:29:53'),
(29, '5', '16', 'hi jawad from qudrat', '2018-03-08 17:30:14'),
(30, '5', '14', 'hi lala from qudrat', '2018-03-08 17:30:33'),
(31, '5', '15', 'hello ahmad from qudrat', '2018-03-08 17:30:49'),
(32, '13', '16', 'hi jaawad from janan', '2018-03-08 17:32:56'),
(33, '13', '15', 'heloo ahmad from janan', '2018-03-09 05:13:44'),
(34, '5', '13', 'hi janan from qudrat', '2018-03-09 05:19:04'),
(35, '5', '6', 'hi', '2018-03-15 15:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `userid` int(25) NOT NULL,
  `songcomment` varchar(300) NOT NULL,
  `comid` int(25) NOT NULL,
  `songid` int(20) NOT NULL,
  `commentdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`userid`, `songcomment`, `comid`, `songid`, `commentdate`) VALUES
(1, 'good song\r\n', 1, 10, '2018-02-27 11:46:27'),
(1, 'very', 2, 11, '2018-02-27 11:47:45'),
(1, 'abc', 3, 10, '2018-02-27 12:03:07'),
(2, 'hello', 4, 140, '2018-02-27 12:34:00'),
(5, 'hello bro', 5, 139, '2018-02-27 12:34:00'),
(1, 'hi', 6, 10, '2018-03-03 06:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `contactusquery`
--

CREATE TABLE `contactusquery` (
  `queryid` int(20) NOT NULL,
  `userid` int(20) NOT NULL,
  `aid` varchar(20) NOT NULL,
  `manreply` longtext NOT NULL,
  `uquery` longtext NOT NULL,
  `messagedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `replydate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactusquery`
--

INSERT INTO `contactusquery` (`queryid`, `userid`, `aid`, `manreply`, `uquery`, `messagedate`, `replydate`) VALUES
(1, 1, '5', 'jhdjv', 'hello bro', '2017-12-25 09:23:28', '2018-02-24 05:45:02'),
(2, 2, '', '', 'Hello Qudrat', '2018-02-25 06:34:36', '0000-00-00 00:00:00'),
(3, 1, '', '', 'hello admin  can you get my message?', '2018-02-27 17:39:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `download_song`
--

CREATE TABLE `download_song` (
  `songid` int(20) NOT NULL,
  `userid` int(20) NOT NULL,
  `downloaddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manager_product`
--

CREATE TABLE `manager_product` (
  `aid` int(20) NOT NULL,
  `proid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(20) NOT NULL,
  `songid` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(10) NOT NULL,
  `userid` int(20) NOT NULL,
  `aid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `songid`, `date`, `status`, `userid`, `aid`) VALUES
(1, 138, '2018-02-25 10:44:09', 1, 1, 0),
(2, 138, '2018-02-25 10:44:37', 0, 2, 0),
(4, 139, '2018-02-25 10:45:34', 0, 4, 0),
(5, 139, '2018-02-25 11:34:59', 0, 5, 0),
(6, 140, '2018-02-25 11:34:59', 1, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `procategory`
--

CREATE TABLE `procategory` (
  `catid` int(11) NOT NULL,
  `procatname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procategory`
--

INSERT INTO `procategory` (`catid`, `procatname`) VALUES
(1, 'String'),
(2, 'Wind'),
(3, 'Drums and Percussion'),
(4, 'Studio/Stage Equipments'),
(5, 'Keys and Synthesizers');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `proid` int(20) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `productdescription` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `picture1` varchar(200) NOT NULL,
  `picture2` varchar(200) NOT NULL,
  `catid` int(11) NOT NULL,
  `stock` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`proid`, `productname`, `productdescription`, `price`, `picture`, `picture1`, `picture2`, `catid`, `stock`) VALUES
(1, 'Guitar', 'kjhjbj', 12000, 'img1.jpeg', 'img1.jpeg', 'img4.jpeg', 1, 5),
(2, 'Guitar', 'gdgh', 13000, 'img2.jpeg', 'img5.jpeg', 'img1.jpeg', 1, 6),
(7, 'Violin', 'aaaaaaaaaaaaaaaaaaaaaaa', 5000, 'img8.jpeg', '', '', 1, 6),
(9, 'Guitar', 'Guitar', 5000, 'jrz23uk-na-23-juarez-original-imaf2h5d7z3bmhgu[1].jpeg', 'jrz23uk-na-23-juarez-original-imaf2h5dduspt2da[1].jpeg', 'jrz23uk-na-23-juarez-original-imaf2h5dyv2qzx5m[1].jpeg', 1, 10),
(10, 'Yahama C70 Guitar', 'Yahama c70 Linden Wood Classical Guitar', 8000, 'c70-yamaha-original-imaffc6xyehz7wmc.jpeg', 'c70-yamaha-original-imaffc6xsvzq9azv.jpeg', 'c70-yamaha-original-imaffc6xyehz7wmc.jpeg', 1, 10),
(11, 'Xtag X-40 Guitar', 'Xtag X-40 Black (40 Inches) Spruce Acoustic Guitar', 5999, 'x-40c-black-40-inches-xtag-original-imaekzg7qdnsqgb5.jpeg', 'x-40c-black-40-inches-xtag-original-imaekzg7qdnsqgb5.jpeg', 'x-40c-black-40-inches-xtag-original-imaekzg7qdnsqgb5.jpeg', 1, 10),
(12, 'Kaps Violin', 'Kaps 4/4 Classical (Modern) Violin  (Brown Yes)', 5000, 'mv102-violin-4-4-santana-original-imaezhhceuspyfbn.jpeg', 'mv004-kaps-original-imaezhhchesa4z5u.jpeg', 'mv102-violin-4-4-santana-original-imaezhhceuspyfbn.jpeg', 1, 10),
(13, 'Kandence Violin', 'Kadence 4/4 Classical (Modern) Violin  (Maroon Yes)', 5200, 'kad-viv-01-c-kadence-original-imaepx8zxzvhjsmm.jpeg', 'kad-viv-v10-c-kadence-original-imaepx8yscqrb4ru.jpeg', 'mv102-violin-4-4-santana-original-imaezhhceuspyfbn.jpeg', 1, 10),
(14, 'SG Musical Trumpet', 'SG Musical TW3 Bb Trumpet', 10000, 'tw3-sg-musical-original-imaedsk4ng6kjuyg.jpeg', 'tw3-sg-musical-original-imaedsk4ng6kjuyg.jpeg', 'tw3-sg-musical-original-imaedsk4ng6kjuyg.jpeg', 2, 15),
(15, 'SG Musical Trumpet', 'SG Musical TU8 C Trumpet', 9999, 'tu9-sg-musical-original-imaedsk48furqazc.jpeg', 'tu8-sg-musical-original-imaedsk48gv93ueg.jpeg', 'tu9-sg-musical-original-imaedsk48furqazc.jpeg', 2, 5),
(16, 'SG Bamboo Flute', 'SG Musical C and G Scale Bamboo Flute  (39 cm)', 500, 'c-and-g-scale-sg-musical-original-imaetehbpznpggbt.jpeg', 'c-and-g-scale-sg-musical-original-imaetehbpznpggbt.jpeg', 'c-and-g-scale-sg-musical-original-imaetehbpznpggbt.jpeg', 2, 5),
(17, 'Swan Techno Harmonica', 'Swan Techno Geek Sw24-4 Tremolo Harmonica Performance Harmonica Mouth Organ 24 Holes 48 Tones C Key With Black Box  (Silver)', 999, 'sw24-4-swan-original-imaffecymam6yz8h.jpeg', 'sw24-4-swan-original-imaffecy9vmzd4fj.jpeg', 'sw24-4-swan-original-imaffecxfvaazwnn.jpeg', 2, 5),
(18, 'Kadence Alto Saxophone', 'Kadence KXC KAD-SAX-KXB Alto Saxophone  (Black, Sax Case Included)', 40000, 'kad-sax-kxb-kadence-original-imaew9v6zcvh6zk5.jpeg', 'kad-sax-kxb-kadence-original-imaew9v6zgrpwejp.jpeg', 'kad-sax-kxb-kadence-original-imaew9v6hkzpgnhk.jpeg', 2, 5),
(19, 'Casio KH28 Digital', 'Casio CTK-6300IN KH28 Digital  (61 Keys)', 15000, 'kh28-casio-original-imaf2gb5uzpxhunu.jpeg', 'kh28-casio-original-imaf2gb5gwspkkau.jpeg', 'kh28-casio-original-imaf2gb5uzpxhunu.jpeg', 5, 5),
(20, 'SG Octave Harmonium', 'SG Musical TBT1 3 1/4 Octave Harmonium  (Two Fold Bellow)', 11000, 'tbt1-sg-musical-original-imaefhuhqhrhypne.jpeg', 'tbt7-sg-musical-original-imaefhuhm6bkgxab.jpeg', 'tbt6-sg-musical-original-imaefhuhm68tghvk.jpeg', 5, 5),
(21, 'Casio WK-6600 Keyboard ', 'Casio WK-6600 KH29 Digital Portable Keyboard  (76 Keys)', 20000, 'kh29-casio-original-imaffv3cmxcm9srx.jpeg', 'kh29-casio-original-imaffv39yh7x3yvg.jpeg', 'kh29-casio-original-imaffv39mezkymkw.jpeg', 5, 5),
(22, 'SG Musical Octave Harmonium', 'SG Musical TBT4 3 1/4 Octave Harmonium  (Two Fold Bellow)', 15000, 'tbt14-sg-musical-original-imaefhuh5ayeqhss.jpeg', 'tbt20-sg-musical-original-imaefhuhud7kftny.jpeg', 'tbt14-sg-musical-original-imaefhuh5ayeqhss.jpeg', 5, 5),
(23, 'N S MUSIC HOUSE Tabla', 'N S PADAM MUSIC HOUSE Tabla  (Dayan - 14 cm, Bayan - 22 cm)', 5000, 'nspmh3-n-s-padam-music-house-original-imaegzhgahffbqzs.jpeg', 'nspmh3-n-s-padam-music-house-original-imaegzhgahffbqzs.jpeg', 'nspmh3-n-s-padam-music-house-original-imaegzhgahffbqzs.jpeg', 3, 5),
(24, 'NSR TRADERS Dholak', 'NSR TRADERS Dnt776688 Nut & Bolts Dholak  (Orange)', 5000, 'dnt776688-nsr-traders-original-imaezw25gtduutkg.jpeg', 'dnt776688-nsr-traders-original-imaezw25gtduutkg.jpeg', 'dnt776688-nsr-traders-original-imaezw25gtduutkg.jpeg', 3, 5),
(25, 'Splash Cymbal Clash Cymbal', 'Zildjian PLZ10S Splash Cymbal Clash Cymbal', 1000, 'plz10s-splash-cymbal-zildjian-original-imaeyhf2xgaxsaq4.jpeg', 'plz10s-splash-cymbal-zildjian-original-imaeyhf2xgaxsaq4.jpeg', 'plz10s-splash-cymbal-zildjian-original-imaeyhf2xgaxsaq4.jpeg', 3, 5),
(26, 'indirock Kartal', 'indirock IRK6 Kartal Instrument', 1000, 'irk6-indirock-original-imaen8mvxb6axu6z.jpeg', 'irk6-indirock-original-imaen8mvxb6axu6z.jpeg', 'irk6-indirock-original-imaen8mvxb6axu6z.jpeg', 3, 5),
(27, 'clapbox Chime ', 'clapbox CB-BAR13 Chime  (13 Bars)', 1000, 'cb-bar13-clapbox-original-imaf34y3rmypmmuh.jpeg', 'cb-bar13-clapbox-original-imaf34y3pppgvc2v.jpeg', 'cb-bar13-clapbox-original-imaf34y3rmypmmuh.jpeg', 3, 5),
(28, 'Zoom Multi-track Recorder', 'Zoom H2n 4 Tracks Digital Multi-track Recorder', 5000, 'h2n-zoom-original-imaegyktygeubffp.jpeg', 'h2n-zoom-original-imaegyktuaaq4bng.jpeg', 'h2n-zoom-original-imaegyktygeubffp.jpeg', 4, 5),
(29, 'Zoom Tracks Digital Recorder', 'Zoom R-24 Recorder Interface Controller Sampler 8 Tracks Digital Multi-track Recorder', 40000, 'r-24-recorder-interface-controller-sampler-zoom-original-imaffsq8kd5dwa5j.jpeg', 'r-24-recorder-interface-controller-sampler-zoom-original-imaffsq7jfgvcb6y.jpeg', 'r-24-recorder-interface-controller-sampler-zoom-original-imaffsq7c2gesy3f.jpeg', 4, 5),
(30, 'Zoom APH- Multi-track Recorder', 'Zoom APH-1 Accessorie Pack for H1 2 Tracks Digital Multi-track Recorder', 8000, 'aph-1-accessorie-pack-for-h1-zoom-original-imaexsu4hzsndgmg.jpeg', 'h1-with-aph-1-accessory-pack-zoom-original-imaexsu4xtccyufa.jpeg', 'aph-1-accessorie-pack-for-h1-zoom-original-imaexsufztnn4tqa.jpeg', 4, 5),
(31, 'Zoom Digital Multi-track Recor', 'Zoom H4n 4 Tracks Digital Multi-track Recorder', 25000, 'h4n-zoom-original-imaegyhfbuxpezxe.jpeg', 'h4n-zoom-original-imaegyh2gdrum7cp.jpeg', 'h4n-zoom-original-imaegyhfbuxpezxe.jpeg', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `song_artist`
--

CREATE TABLE `song_artist` (
  `songid` int(20) NOT NULL,
  `artid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `song_artist`
--

INSERT INTO `song_artist` (`songid`, `artid`) VALUES
(127, 2),
(128, 2),
(0, 3),
(0, 1),
(0, 4),
(135, 4),
(0, 2),
(136, 2),
(137, 3),
(138, 2),
(139, 2),
(0, 3),
(0, 2),
(0, 4),
(0, 4),
(0, 3),
(0, 3),
(0, 3),
(0, 1),
(140, 1),
(0, 2),
(141, 2),
(142, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblcat`
--

CREATE TABLE `tblcat` (
  `cid` int(20) NOT NULL,
  `catname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcat`
--

INSERT INTO `tblcat` (`cid`, `catname`) VALUES
(3, 'Pashto'),
(4, 'Dari'),
(5, 'English'),
(6, 'Hindi');

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(20) NOT NULL,
  `PageName` varchar(200) DEFAULT NULL,
  `Type` varchar(100) NOT NULL,
  `Details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `Type`, `Details`) VALUES
(1, 'FAQS', 'faqs', '										<div class=\"container\" style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 0px; padding: 0px 16px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 1304px; clear: both; color: rgb(77, 77, 77); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><div class=\"row\" style=\"box-sizing: inherit; margin: 0px -8px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><div class=\"col-sm-offset-2 col-sm-8 col-sm-offset-3 col-md-6 section\" style=\"box-sizing: inherit; margin: 0px 0px 0px 322px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 644px;\"><ul style=\"box-sizing: inherit; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><li style=\"text-align: justify; box-sizing: inherit; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><a href=\"https://www.jamendo.com/faq#q1\" class=\"js-faq-anchor\" style=\"box-sizing: inherit; padding: 0px; margin: 0px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: inherit; text-decoration-line: underline; color: rgb(255, 108, 146);\">How do I create an account on Jamendo Music?</a></li><li style=\"text-align: justify; box-sizing: inherit; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><a href=\"https://www.jamendo.com/faq#q2\" class=\"js-faq-anchor\" style=\"box-sizing: inherit; padding: 0px; margin: 0px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: inherit; text-decoration-line: underline; color: rgb(255, 108, 146);\">What do I do if I can\'t access my account?</a></li><li style=\"text-align: justify; box-sizing: inherit; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><a href=\"https://www.jamendo.com/faq#q3\" class=\"js-faq-anchor\" style=\"box-sizing: inherit; padding: 0px; margin: 0px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: inherit; text-decoration-line: underline; color: rgb(255, 108, 146);\">How can downloading on Jamendo be free and legal?</a></li><li style=\"text-align: justify; box-sizing: inherit; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><a href=\"https://www.jamendo.com/faq#q4\" class=\"js-faq-anchor\" style=\"box-sizing: inherit; padding: 0px; margin: 0px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: inherit; text-decoration-line: underline; color: rgb(255, 108, 146);\">What do I do if I stumble upon a track that seems to be copyrighted?</a></li><li style=\"text-align: justify; box-sizing: inherit; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><a href=\"https://www.jamendo.com/faq#q6\" class=\"js-faq-anchor\" style=\"box-sizing: inherit; padding: 0px; margin: 0px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: inherit; text-decoration-line: underline; color: rgb(255, 108, 146);\">How do the radios work?</a></li><li style=\"text-align: justify; box-sizing: inherit; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><a href=\"https://www.jamendo.com/faq#q7\" class=\"js-faq-anchor\" style=\"box-sizing: inherit; padding: 0px; margin: 0px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: inherit; text-decoration-line: underline; color: rgb(255, 108, 146);\">What is free music?</a></li><li style=\"text-align: justify; box-sizing: inherit; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><a href=\"https://www.jamendo.com/faq#q8\" class=\"js-faq-anchor\" style=\"box-sizing: inherit; padding: 0px; margin: 0px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: inherit; text-decoration-line: underline; color: rgb(255, 108, 146);\">What is Creative Commons?</a></li></ul></div></div></div><ul class=\"q-and-a\" style=\"box-sizing: inherit; margin-top: 2.28571rem; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(77, 77, 77); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><li id=\"q1\" style=\"box-sizing: inherit; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><div class=\"container\" style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 0px; padding: 0px 16px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 1304px; clear: both;\"><div class=\"row\" style=\"box-sizing: inherit; margin: 0px -8px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><div class=\"col-sm-2 col-md-3\" style=\"text-align: justify; box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 322px;\"></div><div class=\"col-sm-8 col-md-6\" style=\"box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 644px;\"><h2 class=\"q\" style=\"text-align: justify; box-sizing: inherit; margin: 0px 0px 0.85714rem; padding: 0.28571rem 0px 0.28571rem 0.85714rem; border-width: 0px 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: solid; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: rgb(255, 31, 89); border-image: initial; outline: 0px; font-size: 14px; vertical-align: baseline; background: 0px 0px; color: rgb(255, 31, 89);\">How do I create an account on Jamendo Music?</h2><p class=\"a\" style=\"text-align: justify; box-sizing: inherit; margin-bottom: 0.85714rem; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: 0px 0px;\">It\'s quick and easy! Just&nbsp;<a class=\"js-goto-signup\" style=\"box-sizing: inherit; padding: 0px; margin: 0px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: inherit; text-decoration-line: underline;\">go to the sign up page</a>, pick a username, a password and enter your email address. Don\'t forget to accept our Terms and Conditions. You will then receive a confirmation email containing a link to activate your account.</p></div><div class=\"col-sm-2 col-md-3\" style=\"text-align: justify; box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 322px;\"></div></div></div></li><li id=\"q2\" style=\"box-sizing: inherit; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><div class=\"container\" style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 0px; padding: 0px 16px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 1304px; clear: both;\"><div class=\"row\" style=\"box-sizing: inherit; margin: 0px -8px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><div class=\"col-sm-2 col-md-3\" style=\"text-align: justify; box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 322px;\"></div><div class=\"col-sm-8 col-md-6\" style=\"box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 644px;\"><h2 class=\"q\" style=\"text-align: justify; box-sizing: inherit; margin: 0px 0px 0.85714rem; padding: 0.28571rem 0px 0.28571rem 0.85714rem; border-width: 0px 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: solid; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: rgb(255, 31, 89); border-image: initial; outline: 0px; font-size: 14px; vertical-align: baseline; background: 0px 0px; color: rgb(255, 31, 89);\">What do I do if I can\'t access my account?</h2><p class=\"a js-faq-contactUs\" style=\"text-align: justify; box-sizing: inherit; margin-bottom: 0.85714rem; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: 0px 0px;\">Make sure there were no typing errors, particularly with your password. Also check that you confirmed your registration through the link that was sent to you by email (the email might be in your Spam folder). If the problem persists,&nbsp;<a href=\"mailto:%20contact@jamendo.com\" style=\"box-sizing: inherit; padding: 0px; margin: 0px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: inherit; text-decoration-line: underline; color: rgb(255, 108, 146);\">please contact us</a>.</p></div><div class=\"col-sm-2 col-md-3\" style=\"text-align: justify; box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 322px;\"></div></div></div></li><li id=\"q3\" style=\"box-sizing: inherit; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><div class=\"container\" style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 0px; padding: 0px 16px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 1304px; clear: both;\"><div class=\"row\" style=\"box-sizing: inherit; margin: 0px -8px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><div class=\"col-sm-2 col-md-3\" style=\"text-align: justify; box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 322px;\"></div><div class=\"col-sm-8 col-md-6\" style=\"box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 644px;\"><h2 class=\"q\" style=\"text-align: justify; box-sizing: inherit; margin: 0px 0px 0.85714rem; padding: 0.28571rem 0px 0.28571rem 0.85714rem; border-width: 0px 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: solid; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: rgb(255, 31, 89); border-image: initial; outline: 0px; font-size: 14px; vertical-align: baseline; background: 0px 0px; color: rgb(255, 31, 89);\">How can downloading on Jamendo be free and legal?</h2><p class=\"a\" style=\"text-align: justify; box-sizing: inherit; margin-bottom: 0.85714rem; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: 0px 0px;\">Jamendo can be free and legal thanks to Creative Commons licenses. They grant the right to download and share music for free and legally. Artists choose to use these licenses, and to use Jamendo as a way to share and promote their music.</p></div><div class=\"col-sm-2 col-md-3\" style=\"text-align: justify; box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 322px;\"></div></div></div></li><li id=\"q4\" style=\"box-sizing: inherit; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><div class=\"container\" style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 0px; padding: 0px 16px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 1304px; clear: both;\"><div class=\"row\" style=\"box-sizing: inherit; margin: 0px -8px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><div class=\"col-sm-2 col-md-3\" style=\"text-align: justify; box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 322px;\"></div><div class=\"col-sm-8 col-md-6\" style=\"box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 644px;\"><h2 class=\"q\" style=\"text-align: justify; box-sizing: inherit; margin: 0px 0px 0.85714rem; padding: 0.28571rem 0px 0.28571rem 0.85714rem; border-width: 0px 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: solid; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: rgb(255, 31, 89); border-image: initial; outline: 0px; font-size: 14px; vertical-align: baseline; background: 0px 0px; color: rgb(255, 31, 89);\">What do I do if I stumble upon a track that seems to be copyrighted?</h2><p class=\"a js-faq-contactUs\" style=\"text-align: justify; box-sizing: inherit; margin-bottom: 0.85714rem; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: 0px 0px;\">Do you have doubts about the origin of a song or track? In spite of our vigilance, some non-original tracks are not picked up by moderators and end up being published on Jamendo. They cannot be broadcast under a Creative Commons license because they are protected by a copyright for which the artist does not hold the rights. In this case, please let us know by email to&nbsp;<a href=\"mailto:%20support@jamendo.com\" style=\"box-sizing: inherit; padding: 0px; margin: 0px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: inherit; text-decoration-line: underline; color: rgb(255, 108, 146);\">to contact us</a>, and we\'ll take necessary measures.</p></div><div class=\"col-sm-2 col-md-3\" style=\"text-align: justify; box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 322px;\"></div></div></div></li><li id=\"q6\" style=\"box-sizing: inherit; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><div class=\"container\" style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 0px; padding: 0px 16px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 1304px; clear: both;\"><div class=\"row\" style=\"box-sizing: inherit; margin: 0px -8px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><div class=\"col-sm-2 col-md-3\" style=\"text-align: justify; box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 322px;\"></div><div class=\"col-sm-8 col-md-6\" style=\"box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 644px;\"><h2 class=\"q\" style=\"text-align: justify; box-sizing: inherit; margin: 0px 0px 0.85714rem; padding: 0.28571rem 0px 0.28571rem 0.85714rem; border-width: 0px 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: solid; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: rgb(255, 31, 89); border-image: initial; outline: 0px; font-size: 14px; vertical-align: baseline; background: 0px 0px; color: rgb(255, 31, 89);\">How do the radios work?</h2><p class=\"a\" style=\"text-align: justify; box-sizing: inherit; margin-bottom: 0.85714rem; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: 0px 0px;\">Thanks to our radio channels, you can listen to great music without having to look for it. At any time, you can go to the page of the track you are listening to in order to download it or to add the album to your favorites, while continuing to listen.</p></div><div class=\"col-sm-2 col-md-3\" style=\"text-align: justify; box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 322px;\"></div></div></div></li><li id=\"q7\" style=\"box-sizing: inherit; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><div class=\"container\" style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 0px; padding: 0px 16px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 1304px; clear: both;\"><div class=\"row\" style=\"box-sizing: inherit; margin: 0px -8px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><div class=\"col-sm-2 col-md-3\" style=\"text-align: justify; box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 322px;\"></div><div class=\"col-sm-8 col-md-6\" style=\"box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 644px;\"><h2 class=\"q\" style=\"text-align: justify; box-sizing: inherit; margin: 0px 0px 0.85714rem; padding: 0.28571rem 0px 0.28571rem 0.85714rem; border-width: 0px 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: solid; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: rgb(255, 31, 89); border-image: initial; outline: 0px; font-size: 14px; vertical-align: baseline; background: 0px 0px; color: rgb(255, 31, 89);\">What is free music?</h2><p class=\"a\" style=\"text-align: justify; box-sizing: inherit; margin-bottom: 0.85714rem; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: 0px 0px;\">Free music is music that is not managed by performance rights organizations (PRS, ASCAP, SOCAN, BMI, BUMA, GEMA, SIAE, SGAE, JASRAC...). Artists choose to protect their rights through specific non-exclusive licenses such as Creative Commons. \"Free music\" doesn\'t necessarily mean free of charge, or devoid of any rights restrictions, it means \"some rights reserved\". Artists define what rights they grant on their music through their choice of license.</p></div><div class=\"col-sm-2 col-md-3\" style=\"text-align: justify; box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 322px;\"></div></div></div></li><li id=\"q8\" style=\"box-sizing: inherit; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><div class=\"container\" style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 0px; padding: 0px 16px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 1304px; clear: both;\"><div class=\"row\" style=\"box-sizing: inherit; margin: 0px -8px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><div class=\"col-sm-2 col-md-3\" style=\"text-align: justify; box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 322px;\"></div><div class=\"col-sm-8 col-md-6\" style=\"box-sizing: inherit; margin: 0px; padding: 0px 8px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; width: 644px;\"><h2 class=\"q\" style=\"text-align: justify; box-sizing: inherit; margin: 0px 0px 0.85714rem; padding: 0.28571rem 0px 0.28571rem 0.85714rem; border-width: 0px 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: solid; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: rgb(255, 31, 89); border-image: initial; outline: 0px; font-size: 14px; vertical-align: baseline; background: 0px 0px; color: rgb(255, 31, 89);\">What is Creative Commons?</h2><p class=\"a\" style=\"text-align: justify; box-sizing: inherit; margin-bottom: 0.85714rem; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: 0px 0px;\">Creative Commons offers licenses that enable musicians to protect their rights. Easy to use and compatible with internet standards, these non-exclusive rights enable the holders to authorize certain uses of their music, while still retaining the option of reserving commercial exploitation, derived works or the degree of freedom (in terms of free software)</p></div></div></div></li></ul>\r\n										'),
(2, 'About US', 'aboutus', '										<div style=\"text-align: justify;\"><div>In the early years of the new millennium, there was a limited set of options for anyone who wanted to enjoy music online: downloading illegally from P2P file-sharing services, or spending money on digital downloads that you could only use on one specific device.</div><div><br></div><div>In the rise of more permissive models and movements such as Open Source and the FreeCulture Movement, new ideas on how to digitally share creative works came to life. Creative Commons brought an alternative to the automatic “all-rights reserved” copyright, eventually leading a small group of people in Luxembourg to found in 2004 the pioneering website Jamendo.com, the first platform to legally share music for free from any creator under Creative Commons licenses.</div><div><br></div><div>Jamendo is all about connecting musicians and music lovers from all over the world. Our goal is to bring together a worldwide community of independent music, creating experience and value around it.</div><div><br></div><div>On Jamendo Music, you can enjoy a wide catalog of more than 500,000 tracks shared by 40,000 artists from over 150 countries all over the world. You can stream all the music for free, download it and support the artist: become a music explorer and be a part of a great discovery experience!</div><div><br></div><div>Jamendo’s mission is to offer the perfect platform for all independent artists wishing to share their creations as easily as possible, reaching new audiences internationally. Our philosophy is that any artist in the world is entitled to share his music and should have a chance to be heard by a greater number of people around the world.</div><div><br></div><div>We also believe that any artist should benefit from sharing their music. That’s why we help artists make money by licensing their songs for commercial use. Thanks to Jamendo Licensing, we answer the needs of anyone searching for any style of music to be used immediately in a film, a TV program, a commercial, an online video or as background music for commercial space; all at a fair price. With such use of their songs, artists find new sources of revenue while getting wider exposure.</div><div><br></div><div>Jamendo is a whole world of music to discover. Come and enjoy the best of the independent music community, use it, or contribute to it!</div></div>\r\n										'),
(3, 'Privacy And Policy', 'privacy', '<div style=\"text-align: justify;\">NoiseTrade respects visitors to and the users of our site and their privacy. We respect the trust our registered users and other visitors have in us. Therefore, this online Privacy Policy tells you about the information NoiseTrade collects through the features and services available on NoiseTrade.com (the \"Site\"), and how we use that information.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">By using our services and accessing our Site, you are consenting to the information collection and use practices described in this Privacy Policy, as modified from time to time by us.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">If we decide to change our Privacy Policy, we will post a new policy on our Site and change the date at the top of the policy. Therefore, we encourage you to check the date of our Privacy Policy whenever you visit this Site for any updates or changes.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Please see our Terms and Conditions of Use (the \"Site Terms\") for a more detailed legal explanation of our general online policies. If any conflict exists between the Site Terms and our Privacy Policy, the Site Terms shall prevail.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Information About You</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">The following details the types of information we collect and how we use it.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">We collect several types of information on our Site. We do not knowingly collect, however, any information from children under 13 years of age, nor are our services designed for use by children under 13.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">We collect, store, and will share with authors or artists whose digital content or sound recordings are included in our services \"Personally Identifiable Information,\" which generally means information that can be used to identify you individually, such as your name, your postal mailing address, your electronic mail address, your phone number, your postal code, and information about your music or eBook preferences.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">We collect, store, and will share with authors or artists whose digital content or sound recordings are included in our services \"Non-Personally Identifiable Information,\" which generally means information about you that does not identify you personally or individually such as anonymous user usage data, cookies, IP addresses, browser type and click stream data.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">We collect, store, and will share with artists whose sound recordings are included in our services \"Aggregate Information,\" which is information about use of our Site, such as pages visited on our Site. The information we collect depends on what services and features you use on our Site. The following details the types of information we collect and how we use it.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">You can, however, opt-out from inclusion in our collection of information by emailing us directly at unsubscribe@noisetrade.com or the authors or artists whose written material and sound recordings are included in our services collection of information, by contacting them directly through their web-services.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Registration with NoiseTrade and Transactional Data</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">When you register on our Site, you are required to submit an e-mail address (which is your User ID for the Site), password and additional personal information. We also collect and store access information related to your account.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">We use your e-mail address to provide you a link to the music, eBooks or other content you download. By providing your e-mail address to us, you agree that we may, from time to time, contact you by e-mail regarding the music, eBooks or other materials you have accessed or downloaded from our Site. If you do not wish to receive such e-mails you will have the ability to opt-out.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">We do not use your email address or other Personally Identifiable Information to send commercial or marketing messages without your consent or except as part of a specific program or feature for which you will have the ability to opt-in or opt-out.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">We may, however, use your email address without further consent for non-marketing or administrative purposes such as notifying you of major Site changes or for customer service purposes.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">We use both your Personally Identifiable Information and certain Non-Personally-Identifiable Information to improve the quality and design of the Site and to create new features, promotions, functionality, and services by storing, tracking, analyzing, and processing user preferences and trends, as well as user activity and communications.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">We may share your Personally Identifiable Information and certain Non-Personally-Identifiable with authors, artists and related book publishing and music industry professionals promoted through the services of the Site.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Security</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">NoiseTrade takes commercially reasonable precautions to safeguard your information against theft and misuse, as well as unauthorized access, disclosure, alteration, and destruction.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">If you have any questions about our Privacy Policy or our use of your information you can e-mail us at info@noisetrade.com.</div>');
INSERT INTO `tblpages` (`id`, `PageName`, `Type`, `Details`) VALUES
(4, 'Terms and Conditions', 'terms', '<div style=\"text-align: justify;\">NoiseTrade (\"NoiseTrade\") is a Nashville, Tennessee based company committed to promoting the fair trade of music by and for artists and fans via the Internet. The NoiseTrade Web Site (the \"Site\") offers artists the opportunity to promote their music and fans the opportunity to download music on the Site as well as on other sites designated by artists and fans (the \"Site Services\"). THE SITE AND THE SITE SERVICES ARE OFFERRED TO YOU SUBJECT TO THESE TERMS AND CONDITIONS OF USE (THESE \"SITE TERMS\"). PLEASE READ THESE SITE TERMS CAREFULLY BEFORE USING THIS SITE AND THE SITE SERVICES. BY ACCESSING OR USING THE SITE AND/OR THE SITE SERVICES, YOU EXPLICITLY AGREE TO COMPLY WITH AND BE BOUND BY THESE SITE TERMS AND ANY POLICIES THAT MAY BE INCORPORATED BY REFERENCE HEREIN. IF YOU DO NOT AGREE TO ALL PROVISIONS OF THESE SITE TERMS, DO NOT USE THE SITE OR THE SITE SERVICES.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Privacy Policy</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Please refer to NoiseTrade\'s Privacy Policy, which is incorporated herein by this reference, for information on how NoiseTrade collects, uses and discloses personally identifiable information, non-personally identifiable information, and aggregate information from its users. If any conflict exists between the Site Terms and our Privacy Policy, the Site Terms shall prevail. Additionally, by using the Site, you acknowledge and agree that Internet transmissions are never completely private or secure. You understand that any message or information you send to the Site may be read or intercepted by others, even if there is a special notice that a particular transmission is encrypted.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Ownership and Copyright</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Except as otherwise indicated, the Site, and all text, images, marks, logos and other content contained herein, including, without limitation, the NoiseTrade logo and all designs, text, photos, graphics, pictures, artwork, information, data, code, software, music, sound files, other files, and materials (\"Content\") and the selection and arrangement thereof (collectively, the \"Site Content\") are the proprietary property of NoiseTrade or its licensors or suppliers and are protected by U.S. and international copyright laws. The Site and all Site Content is © 2008 - 2014 NoiseTrade. All Rights Reserved.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Trademarks</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">NOISETRADE, the NoiseTrade logo and all other product or service names or slogans or artwork displayed on the Site are registered and/or common law trademarks of NoiseTrade and/or its suppliers or licensors, and may not be copied, imitated or used, in whole or in part, without the prior written permission of NoiseTrade or the applicable trademark holder. In addition, the look and feel of the Site, including all page headers, custom graphics, button icons and scripts, are the service mark, trademark and/or trade dress of NoiseTrade and may not be copied, imitated or used, in whole or in part, without the prior written permission of NoiseTrade. All other trademarks, registered trademarks, product names and company names or logos mentioned in the Site are the property of their respective owners. Reference to any products, services, processes or other information, by trade name, trademark, record label, supplier or otherwise does not constitute or imply endorsement, sponsorship or recommendation thereof by NoiseTrade.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Limited License</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Subject to the terms, conditions and restrictions set forth in these Site Terms, NoiseTrade grants you a limited, non-exclusive, personal, nonsublicensable and revocable license to access and use the Site and to view, copy, and print portions of the Site Content (the \"License\"). The License is specifically conditioned upon the following: (i) you may only view, copy and print portions of the Site Content for your own informational, personal and non-commercial use; (ii) you may not modify or otherwise make derivative uses of the Site or the Site Content, or any portion thereof; (iii) any displays or printouts of Site Content must be marked © 2008 - 2011, NoiseTrade and its licensor. All rights reserved.\"; (iv) you may not remove or modify any copyright, trademark, or other proprietary notices that have been placed in the Site Content; (v) you may not use any data mining, robots or similar data gathering or extraction methods; (vi) you may not use the Site or the Site Content other than for its intended purpose; and (vii) you may not reproduce, prepare derivative works from, distribute or display the Site or any Site Content, except as provided herein. Except as expressly permitted above, any use of any portion of the Site or Site Content without the prior written permission of NoiseTrade is strictly prohibited and will terminate the License. Your unauthorized use of the Site or Site Content may violate applicable laws including, without limitation, copyright and trademark laws and applicable communications regulations and statutes. Except as expressly stated in these Site Terms, you are not conveyed or granted, and nothing on the Site may be construed as conveying or granting any right or license, by implication, estoppel or otherwise, in or under any patent, trademark, copyright, or other intellectual or proprietary right of NoiseTrade or any third party. You represent and warrant that your use of the Site and the Site Content will be consistent with the License and will not infringe, misappropriate or violate the rights of NoiseTrade or any other party or breach any contract or legal duty to NoiseTrade or any other party, or violate any law. You expressly agree to indemnify NoiseTrade against any liability to any person arising out of your use of the Site or Site Content.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Hyperlinks</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">You are granted a limited, non-exclusive, personal, non-sublicensable and revocable right to create a text hyperlink to the Site for non-commercial purposes, provided such link does not portray NoiseTrade or any of its products or services in a false, misleading, derogatory or otherwise defamatory manner and provided further that the linking site does not contain any adult or illegal material or any material that is offensive, harassing or otherwise objectionable.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">You may not use a NoiseTrade logo or other proprietary graphic of NoiseTrade to link to the Site without the express written permission of NoiseTrade. Further, you may not use, frame or utilize framing techniques to enclose any NoiseTrade trademark, logo or other proprietary information, including the images found at the Site, the content of any text, or the layout or design of any page or form contained on a page on the Site without NoiseTrade\'s express written consent.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Use of Chat Rooms, Bulletin Boards and Other Interactive Areas</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">The Site or other web sites on which you may upload or access the Site Services may contain discussion forums, bulletin boards, review services or other forums in which you or third parties may post reviews of music or other content, messages, materials or items related to the Site and Site Content (collectively \"Interactive Areas\"). If you participate in any Interactive Areas, you are solely responsible for your use of such Interactive Areas and you use them at your own risk. By using any Interactive Areas, you expressly agree not to post, upload to, transmit, distribute, store, create or otherwise publish through the Site any of the following:</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Any Content that is unlawful, libelous, defamatory, obscene, pornographic, indecent, lewd, suggestive, harassing, threatening, invasive of privacy or publicity rights, abusive, inflammatory, fraudulent or otherwise objectionable; Content that would constitute, encourage or provide instructions for a criminal offense, violate the rights of any party, or that would otherwise create liability or violate any local, state, national, foreign, or international law, including, without limitation, the regulations of the U.S. Securities and Exchange Commission or any applicable rules of a securities exchange such as the New York Stock Exchange, the American Stock Exchange or NASDAQ; Content that may infringe any patent, trademark, trade secret, copyright or other intellectual or proprietary right of any party; Content that impersonates any person or entity or otherwise misrepresents your affiliation with a person or entity; Unsolicited promotions, political campaigning, advertising or solicitations; Private information of any third party, including, without limitation, addresses, phone numbers, email addresses, Social Security numbers, credit card numbers and the like; viruses, corrupted data or other harmful, disruptive or destructive files; Content that is unrelated to the topic of the Interactive Area(s) in which such Content is posted; or Content that is objectionable or which restricts or inhibits any other person from using or enjoying the Interactive Areas or the Site, or which may expose NoiseTrade or its affiliates or its users to any harm or liability of any type.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">NoiseTrade takes no responsibility and assumes no liability for any materials posted, stored or uploaded by you or any third party, or for any loss or damage thereto, nor is NoiseTrade liable for any mistakes, defamation, slander, libel, omissions, falsehoods, obscenity, pornography or profanity you may encounter. As a provider of interactive services, NoiseTrade is not liable for any statements, representations or materials provided by its users in any public forum, personal home page or any Interactive Areas. Although NoiseTrade does not screen, edit or monitor any of the materials posted to or distributed through any of the Site Services or on any of the Interactive Areas, NoiseTrade reserves the right to remove, without notice, any materials posted or stored in the Site or in Interactive Areas if (i) it violates these Site Terms or is otherwise unlawful or illegal; or (ii) NoiseTrade receives a notice or any other claim from a third party alleging that such materials violate or infringe upon the rights of such third party.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Any use of the Site Services or Interactive Areas or other portions of the Site in violation of the foregoing violates these Site Terms and may result in, among other things, termination or suspension of your rights to use the Site and Site Services, including on Interactive Areas.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Copyright Complaints</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">If you believe that material posted on the Site infringes upon any copyright that you own or control, or that any link on the Site directs users to another Web site that contains materials that infringes upon any copyright that you hold or control, you may file a notification of such infringement as set forth below:</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Contact of Person to Whom Notification Should be Sent:</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Christopher Moon</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">c/o NoiseTrade</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">PO Box 861</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Brentwood, TN 37024-0861</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">USA Email Address: copyright@noisetrade.com</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Any notification must include the following information:</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">1. Identity of the copyrighted work that you claim has been infringed, or, if multiple works, a representative list of the copyrighted works that you claim have been infringed.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">2. Identification of the material that you claim is infringing and where it is located on the Site.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">3. Your street or mailing address, telephone number and email address.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">4. A statement by you that you have a good faith belief that the disputed use of the copyrighted material is not authorized by the copyright owner, its agent, or the law.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">5. A statement by you, made under penalty of perjury, that the information in your notice is accurate and that you are the copyright owner, or are authorized to act on the copyright owner\'s behalf.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">6. Electronic or physical signature of the copyright owner or of a person authorized to act on the copyright owner\'s behalf.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">We may give notice of a claim of copyright infringement to our users by means of a general notice on the Site, electronic mail to a user\'s email address in our records, or by written communication sent by first-class mail to a user\'s address in our records.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Repeat Infringer Policy</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">In accordance with the Digital Millennium Copyright Act (\"DMCA\") and other applicable law, NoiseTrade has adopted a policy of terminating, in appropriate circumstances and at NoiseTrade\'s sole discretion, subscribers or account holders who are deemed to be repeat infringers. NoiseTrade may also at its sole discretion limit access to the Site and/or terminate the accounts of any users who infringe any intellectual property rights of others, whether or not there is any repeat infringement.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Registration Data; Account Security</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">You agree to: (a) provide accurate, current and complete information about you as may be prompted by any registration forms on the Site (\"Registration Data\"); (b) maintain the security of your password; (c) maintain and promptly update the Registration Data, and any other information you provide to NoiseTrade, and to keep it accurate, current and complete; and (d) accept all risks of unauthorized access to the Registration Data and any other information you provide to NoiseTrade.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Tips</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">While using the Site, you will have an opportunity to leave a tip for any artist or author you choose to support financially (“Tips”). NoiseTrade requires each artist and author to maintain an individual account through which NoiseTrade can pay such artists and authors their respective portion of the Tips. From time-to-time, some artists and/or authors do not maintain such an account, and NoiseTrade is unable to pay them. In the event NoiseTrade is not able to pay any particular artist or author their respective portion of the Tips, NoiseTrade shall donate such monies to a charity (or charities) selected by NoiseTrade in NoiseTrade’s sole discretion.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">WARRANTY DISCLAIMER</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">EXCEPT AS EXPRESSLY PROVIDED TO THE CONTRARY IN A WRITING BY NOISETRADE, THE SITE, THE MATERIALS CONTAINED THEREIN AND THE SITE CONTENT AND SITE SERVICES PROVIDED ON OR IN CONNECTION THEREWITH ARE PROVIDED ON AN \"AS IS\" BASIS WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED. NOISETRADE EXPRESSLY DISCLAIMS ALL OTHER WARRANTIES, EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE AND NON-INFRINGEMENT AS TO THE SITE, SITE CONTENT, SITE SERVICES, AND ANY MATERIALS ON THE SITE. NOISETRADE DOES NOT REPRESENT OR WARRANT THAT THE SITE, SITE CONTENT, SITE SERVICES OR MATERIALS IN THE SITE OR THE SERVICES ARE ACCURATE, COMPLETE, RELIABLE, CURRENT OR ERROR-FREE, AND EXPRESSLY DISCLAIMS ANY WARRANTY OR REPRESENTATION AS TO THE ACCURACY OR PROPRIETARY CHARACTER OF THE SITE, THE SITE SERVICES OR THE SITE CONTENT OR ANY PORTION THEREOF.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">NOISETRADE IS NOT RESPONSIBLE FOR TYPOGRAPHICAL ERRORS OR OMISSIONS RELATING TO TEXT, PHOTOGRAPHY, SOUND RECORDINGS, ARTWORK, OR ANY OTHER MATERIALS ON THE SITE OR INTERACTIVE AREAS. WHILE NOISETRADE ATTEMPTS TO MAKE YOUR ACCESS TO AND USE OF THE SITE, THE SITE CONTENT, AND THE SITE SERVICES SAFE, NOISETRADE CANNOT AND DOES NOT REPRESENT OR WARRANT THAT THE SITE OR ITS SERVER(S) ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS; THEREFORE, YOU SHOULD USE INDUSTRY-RECOGNIZED SOFTWARE TO DETECT AND DISINFECT VIRUSES.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">LIMITATION OF LIABILITY</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">YOU WAIVE AND COVENANT NOT TO ASSERT ANY CLAIMS OR ALLEGATIONS OF ANY NATURE WHATSOEVER AGAINST NOISETRADE, ITS AFFILIATES, OR THEIR RESPECTIVE DIRECTORS, OFFICERS, ATTORNEYS, EMPLOYEES OR AGENTS ARISING OUT OF OR IN ANY WAY RELATING TO YOUR USE OF THE SITE, SITE CONTENT, THE SITE SERVICES OR THE MATERIALS CONTAINED IN OR ACCESSIBLE THROUGH THE SITE, INCLUDING, WITHOUT LIMITATION, ANY CLAIMS OR ALLEGATIONS RELATING TO THE ALLEGED INFRINGEMENT OF PROPRIETARY RIGHTS, ALLEGED INACCURACY OF SITE CONTENT, OR ALLEGATIONS THAT NOISETRADE HAS OR SHOULD INDEMNIFY, DEFEND OR HOLD HARMLESS YOU OR ANY THIRD PARTY FROM ANY CLAIM OR ALLEGATION ARISING FROM YOUR USE OR OTHER EXPLOITATION OF THE SITE. YOU USE THE SITE, THE SITE CONTENT, AND THE SITE SERVICES AT YOUR OWN RISK.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">WITHOUT LIMITATION OF THE FOREGOING, NEITHER NOISETRADE NOR ANY PARTIES PROVIDING SITE CONTENT SHALL BE LIABLE FOR ANY DIRECT, SPECIAL, INDIRECT OR CONSEQUENTIAL DAMAGES, OR ANY OTHER DAMAGES OF ANY KIND, INCLUDING BUT NOT LIMITED TO LOSS OF USE, LOSS OF PROFITS OR LOSS OF DATA, WHETHER IN AN ACTION IN CONTRACT, TORT (INCLUDING BUT NOT LIMITED TO NEGLIGENCE) OR OTHERWISE, ARISING OUT OF OR IN ANY WAY CONNECTED WITH THE USE OF THE SITE, THE SITE CONTENT OR THE SITE SERVICES OR THE MATERIALS CONTAINED IN OR ACCESSIBLE THROUGH THE SITE, INCLUDING WITHOUT LIMITATION ANY DAMAGES CAUSED BY OR RESULTING FROM YOUR RELIANCE ON ANY SITE CONTENT OR OTHER INFORMATION OBTAINED FROM NOISETRADE OR ACCESSIBLE VIA THE SITE OR SITE SERVICES, OR THAT RESULT FROM MISTAKES, ERRORS, OMISSIONS, INTERRUPTIONS, DELETION OF FILES OR EMAIL, DEFECTS, VIRUSES, DELAYS IN OPERATION OR TRANSMISSION OR ANY FAILURE OF PERFORMANCE, WHETHER OR NOT RESULTING FROM ACTS OF GOD, COMMUNICATIONS FAILURE, THEFT, DESTRUCTION OR UNAUTHORIZED ACCESS TO NOISETRADE\'S SITE, SITE CONTENT, SITE SERVICES, OR ANY OTHER PROGRAMS OR SERVICES.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">IN NO EVENT SHALL THE AGGREGATE LIABILITY OF NOISETRADE, WHETHER IN CONTRACT, WARRANTY, TORT (INCLUDING NEGLIGENCE, WHETHER ACTIVE, PASSIVE OR IMPUTED), PRODUCT LIABILITY, STRICT LIABILITY OR OTHER THEORY, ARISING OUT OF OR RELATING TO THE USE OF THE SITE EXCEED ANY COMPENSATION YOU PAY, IF ANY, TO NOISETRADE FOR ACCESS TO OR USE OF THE SITE, THE SITE CONTENT OR THE SITE SERVICES.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">BECAUSE SOME STATES/JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, SOME OF THE ABOVE LIMITATIONS MAY NOT APPLY TO YOU.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Applicable Law and Venue</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">You explicitly agree that all disputes, claims or other matters arising from or relating to your use of the Site will be governed by the laws of the State of Tennessee, without regard to its conflicts of law principles. You agree that all claims you may have against NoiseTrade arising from or relating to the Site, including without limitation the Site Content or the Site Services, will be heard and resolved in a court of competent subject matter jurisdiction located in Davidson County, Tennessee. You consent to the personal jurisdiction of such courts over you, stipulate to the fairness and convenience of proceeding in such courts, and covenant not to assert any objection to proceeding in such courts. If you choose to access the Site from locations other than Davidson County, Tennessee, you will be responsible for compliance with all local laws of such other jurisdiction.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Termination/Modification of License and Site Offerings</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Notwithstanding any provision of these Site Terms, NoiseTrade reserves the right, without notice and in its sole discretion, without any notice or liability to you, to (a) terminate your license to use the Site, Site Content, Site Services, or any portion thereof; (b) block or prevent your future access to and use of all or any portion of the Site, Site Content or Site Services; (c) change, suspend or discontinue any aspect of the Site, Site Content or Site Services; and (d) impose limits on the Site, Site Content or Site Services.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Severability</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">If any provision of these Site Terms shall be deemed unlawful, void or for any reason unenforceable, then that provision shall be deemed severable from these Site Terms and shall not affect the validity and enforceability of any remaining provisions.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Modifications to the Site Terms</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">NoiseTrade reserves the right to change or modify any of the terms and conditions contained in the Site Terms, or any policy of the Site, at any time and in its sole discretion. Unless otherwise specified, any changes or modifications will be effective immediately upon posting of the revisions on the Site, and your continued use of the Site or the Site Services will constitute your acceptance of such changes or modifications. You should review the Site Terms and its incorporated policies from time to time to understand the terms and conditions that apply to your use of the Site and the Site Services. If you do not agree to any amended terms, do not use the Site or the Site Services.</div>');

-- --------------------------------------------------------

--
-- Table structure for table `tblsongs`
--

CREATE TABLE `tblsongs` (
  `songid` int(20) NOT NULL,
  `SongTitle` varchar(150) NOT NULL,
  `cid` int(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `status` int(20) NOT NULL,
  `File` varchar(200) NOT NULL,
  `userid` int(20) NOT NULL,
  `lyrics` varchar(1800) NOT NULL,
  `simage` varchar(25) NOT NULL,
  `aid` varchar(25) NOT NULL,
  `Sdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsongs`
--

INSERT INTO `tblsongs` (`songid`, `SongTitle`, `cid`, `Price`, `status`, `File`, `userid`, `lyrics`, `simage`, `aid`, `Sdate`) VALUES
(10, 'Shape of You', 5, '45', 0, 'sou.mp3', 1, 'The club isn\'t the best place to find a lover So the bar is where I go<br/>\r\n Me and my friends at the table doing shots Drinking fast and then we<br/>\r\n talk slow Come over and start up a conversation with just me<br/>\r\n And trust me I\'ll give it a chance now Take my hand, stop, put<br/> Van\r\n the Man on the jukebox And then we start to dance, and now I\'m singing like\r\n<br/> Girl, you know I want your love Your love was handmade for<br/> \r\nsomebody like me Come on now, follow my lead I may be crazy, don\'t mind me<br/>\r\n Say, boy, let\'s not talk too much Grab on my waist and put that<br/>\r\n body on me Come on now, follow<br/> my lead Come, come on now, follow my lead\r\n I\'m in love with the shape of you We push and pull like a magnet do\r\n <br/>Although my heart is falling too I\'m in love with your body\r\n And last\r\n', 'p1.png', '', '2018-02-25 13:23:12'),
(11, 'Perfect', 5, '67', 1, 'sou.mp3', 2, 'The club isn\'t the best place to find a lover So the bar is where I go<br/>\r\n Me and my friends at the table doing shots Drinking fast and then we<br/>\r\n talk slow Come over and start up a conversation with just me<br/>\r\n And trust me I\'ll give it a chance now Take my hand, stop, put<br/> Van\r\n the Man on the jukebox And then we start to dance, and now I\'m singing like\r\n<br/> Girl, you know I want your love Your love was handmade for<br/> \r\nsomebody like me Come on now, follow my lead I may be crazy, don\'t mind me<br/>\r\n Say, boy, let\'s not talk too much Grab on my waist and put that<br/>\r\n body on me Come on now, follow<br/> my lead Come, come on now, follow my lead\r\n I\'m in love with the shape of you We push and pull like a magnet do\r\n <br/>Although my heart is falling too I\'m in love with your body\r\n And last\r\n', 'p.png', '', '2018-02-25 13:23:12'),
(14, 'New Rules', 5, '54', 1, 'sou.mp3', 1, 'The club isn\'t the best place to find a lover So the bar is where I go<br/>\r\n Me and my friends at the table doing shots Drinking fast and then we<br/>\r\n talk slow Come over and start up a conversation with just me<br/>\r\n And trust me I\'ll give it a chance now Take my hand, stop, put<br/> Van\r\n the Man on the jukebox And then we start to dance, and now I\'m singing like\r\n<br/> Girl, you know I want your love Your love was handmade for<br/> \r\nsomebody like me Come on now, follow my lead I may be crazy, don\'t mind me<br/>\r\n Say, boy, let\'s not talk too much Grab on my waist and put that<br/>\r\n body on me Come on now, follow<br/> my lead Come, come on now, follow my lead\r\n I\'m in love with the shape of you We push and pull like a magnet do\r\n <br/>Although my heart is falling too I\'m in love with your body\r\n And last\r\n', 'p1.png', '', '2018-02-25 13:23:12'),
(138, 'Samsoor', 5, '56', 1, 'sssd.mp3', 0, 'The club isn\'t the best place to find a lover So the bar is where I go<br/>\r\n Me and my friends at the table doing shots Drinking fast and then we<br/>\r\n talk slow Come over and start up a conversation with just me<br/>\r\n And trust me I\'ll give it a chance now Take my hand, stop, put<br/> Van\r\n the Man on the jukebox And then we start to dance, and now I\'m singing like\r\n<br/> Girl, you know I want your love Your love was handmade for<br/> \r\nsomebody like me Come on now, follow my lead I may be crazy, don\'t mind me<br/>\r\n Say, boy, let\'s not talk too much Grab on my waist and put that<br/>\r\n body on me Come on now, follow<br/> my lead Come, come on now, follow my lead\r\n I\'m in love with the shape of you We push and pull like a magnet do\r\n <br/>Although my heart is falling too I\'m in love with your body\r\n And last\r\n', 'p.png', '5', '2018-02-25 13:23:12'),
(139, 'qudrat', 3, '23', 1, 'soou.mp3', 0, 'The club isn\'t the best place to find a lover So the bar is where I go<br/>\r\n Me and my friends at the table doing shots Drinking fast and then we<br/>\r\n talk slow Come over and start up a conversation with just me<br/>\r\n And trust me I\'ll give it a chance now Take my hand, stop, put<br/> Van\r\n the Man on the jukebox And then we start to dance, and now I\'m singing like\r\n<br/> Girl, you know I want your love Your love was handmade for<br/> \r\nsomebody like me Come on now, follow my lead I may be crazy, don\'t mind me<br/>\r\n Say, boy, let\'s not talk too much Grab on my waist and put that<br/>\r\n body on me Come on now, follow<br/> my lead Come, come on now, follow my lead\r\n I\'m in love with the shape of you We push and pull like a magnet do\r\n <br/>Although my heart is falling too I\'m in love with your body\r\n And last\r\n', 'p1.png', '5', '2018-02-25 13:23:12'),
(140, 'Ahmad', 5, '23', 1, 's.mp3', 0, 'The club isn\'t the best place to find a lover So the bar is where I go<br/>\r\n Me and my friends at the table doing shots Drinking fast and then we<br/>\r\n talk slow Come over and start up a conversation with just me<br/>\r\n And trust me I\'ll give it a chance now Take my hand, stop, put<br/> Van\r\n the Man on the jukebox And then we start to dance, and now I\'m singing like\r\n<br/> Girl, you know I want your love Your love was handmade for<br/> \r\nsomebody like me Come on now, follow my lead I may be crazy, don\'t mind me<br/>\r\n Say, boy, let\'s not talk too much Grab on my waist and put that<br/>\r\n body on me Come on now, follow<br/> my lead Come, come on now, follow my lead\r\n I\'m in love with the shape of you We push and pull like a magnet do\r\n <br/>Although my heart is falling too I\'m in love with your body\r\n And last\r\n', 'luis.png', '5', '2018-02-25 13:23:12'),
(141, 'add', 6, '0', 1, 's.mp3', 0, 'The club isn\'t the best place to find a lover So the bar is where I go<br/>\r\n Me and my friends at the table doing shots Drinking fast and then we<br/>\r\n talk slow Come over and start up a conversation with just me<br/>\r\n And trust me I\'ll give it a chance now Take my hand, stop, put<br/> Van\r\n the Man on the jukebox And then we start to dance, and now I\'m singing like\r\n<br/> Girl, you know I want your love Your love was handmade for<br/> \r\nsomebody like me Come on now, follow my lead I may be crazy, don\'t mind me<br/>\r\n Say, boy, let\'s not talk too much Grab on my waist and put that<br/>\r\n body on me Come on now, follow<br/> my lead Come, come on now, follow my lead\r\n I\'m in love with the shape of you We push and pull like a magnet do\r\n <br/>Although my heart is falling too I\'m in love with your body\r\n And last\r\n', 'dualipa.jpg', '5', '2018-02-25 13:23:12'),
(142, 'UserUsersongg', 3, '23', 0, 'soou.mp3', 1, 'The club isn\'t the best place to find a lover So the bar is where I go\r\n Me and my friends at the table doing shots Drinking fast and then we\r\n talk slow Come over and start up a conversation with just me\r\n And trust me I\'ll give it a chance now Take my hand, stop, put<br/> Van\r\n the Man on the jukebox And then we start to dance, and now I\'m singing like\r\n<br/> Girl, you know I want your love Your love was handmade for<br/> \r\nsomebody like me Come on now, follow my lead I may be crazy, don\'t mind me<br/>\r\n Say, boy, let\'s not talk too much Grab on my waist and put that<br/>\r\n body on me Come on now, follow<br/> my lead Come, come on now, follow my lead\r\n I\'m in love with the shape of you We push and pull like a magnet do\r\n <br/>Although my heart is falling too I\'m in love with your body\r\n And last\r\n', 'dualipa1.jpg', '', '2018-02-26 14:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscribers`
--

CREATE TABLE `tblsubscribers` (
  `id` int(20) NOT NULL,
  `SubscriberEmail` varchar(100) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubscribers`
--

INSERT INTO `tblsubscribers` (`id`, `SubscriberEmail`, `PostingDate`) VALUES
(2, 'saaa@gmail.com', '2018-01-04 12:16:53'),
(3, 'a@gmail.com', '2018-01-05 04:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `tblsvideo`
--

CREATE TABLE `tblsvideo` (
  `vid` int(20) NOT NULL,
  `vname` varchar(150) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsvideo`
--

INSERT INTO `tblsvideo` (`vid`, `vname`, `name`, `subject`) VALUES
(11, 'mov_bbb.mp4', 'hellop', 'englishhh'),
(12, '002 Using the exercise files.mp4', 'shape of you', 'english'),
(13, '002 Using the exercise files.mp4', 'abc', 'hindi'),
(14, '002 Using the exercise files.mp4', 'abc', 'fdfdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonial`
--

CREATE TABLE `tbltestimonial` (
  `fid` int(20) NOT NULL,
  `userid` int(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltestimonial`
--

INSERT INTO `tbltestimonial` (`fid`, `userid`, `message`, `PostingDate`, `Status`) VALUES
(1, 1, 'hello admin', '2017-12-25 23:14:31', '0'),
(2, 2, 'This is one of the best website in the worldThis is one of the best website in the world\r\nThis is one of the best website in the world', '2018-01-04 12:24:26', '1'),
(4, 1, 'hi\r\nThis is one of the best website in the world\r\nThis is one of the best website in the world\r\nThis is one of the best website in the world', '2018-01-11 15:10:45', '1'),
(5, 3, 'g', '2018-01-11 15:28:30', '1'),
(6, 4, 'd', '2018-01-11 15:28:37', '0'),
(9, 1, 'ddd', '2018-02-26 10:59:09', ''),
(10, 1, 'Testing', '2018-02-26 11:02:40', ''),
(11, 1, 'hidden', '2018-02-26 11:03:10', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `userid` int(20) NOT NULL,
  `uname` varchar(150) NOT NULL,
  `uemailid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ucontactno` varchar(15) NOT NULL,
  `uaddress` varchar(300) NOT NULL,
  `uimage` varchar(200) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`userid`, `uname`, `uemailid`, `password`, `ucontactno`, `uaddress`, `uimage`, `RegDate`) VALUES
(1, 'Qudrat', 'see@gmail.com', '4124bc0a9335c27f086f24ba207a4912', '99535723', 'dfdfgdf', 'justin.jpg', '2017-12-24 18:21:03'),
(2, 'Samsoor', 'sw@gmail.com', 'f970e2767d0cfe75876ea857f92e319b', '12', 'ghjfkh', 'dualipa.jpg', '2017-12-25 09:20:06'),
(4, 'anant', 'a@gmail.com', '4124bc0a9335c27f086f24ba207a4912', '9876543', 'kfhk', 'david.jpg', '2018-01-05 04:20:24'),
(5, 'ved', 'vp@g.com', '08f41e2b56730d87f1232d525303ba14', '23', 'kfjk', 'david.jpg', '2018-01-11 14:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `cartid` int(11) NOT NULL,
  `userid` int(20) NOT NULL,
  `proid` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `dateofdelivery` varchar(50) NOT NULL,
  `cartstatus` int(20) NOT NULL,
  `deliverystatus` int(10) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`cartid`, `userid`, `proid`, `quantity`, `dateofdelivery`, `cartstatus`, `deliverystatus`, `total`) VALUES
(1, 1, 1, 1, '2/7/2018', 0, 0, 0),
(31, 5, 1, 2, '2/7/2018', 1, 0, 24000),
(36, 5, 4, 1, '', 1, 0, 20000),
(37, 5, 3, 1, '', 1, 0, 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artid`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chatID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comid`);

--
-- Indexes for table `contactusquery`
--
ALTER TABLE `contactusquery`
  ADD PRIMARY KEY (`queryid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `procategory`
--
ALTER TABLE `procategory`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `tblcat`
--
ALTER TABLE `tblcat`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsongs`
--
ALTER TABLE `tblsongs`
  ADD PRIMARY KEY (`songid`);

--
-- Indexes for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsvideo`
--
ALTER TABLE `tblsvideo`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`cartid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chatID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contactusquery`
--
ALTER TABLE `contactusquery`
  MODIFY `queryid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `procategory`
--
ALTER TABLE `procategory`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `proid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tblcat`
--
ALTER TABLE `tblcat`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblsongs`
--
ALTER TABLE `tblsongs`
  MODIFY `songid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblsvideo`
--
ALTER TABLE `tblsvideo`
  MODIFY `vid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  MODIFY `fid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
