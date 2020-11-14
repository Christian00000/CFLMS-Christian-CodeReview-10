-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 12:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_christian_biglibary`
--
CREATE DATABASE IF NOT EXISTS `cr10_christian_biglibary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_christian_biglibary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `mediaID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `authorFirstName` varchar(255) DEFAULT NULL,
  `authorLastName` varchar(255) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `shortDescription` varchar(255) DEFAULT NULL,
  `status` varchar(55) NOT NULL,
  `publishDate` date DEFAULT NULL,
  `publisherName` varchar(255) NOT NULL,
  `publisherAddress` varchar(255) NOT NULL,
  `publisherSize` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`mediaID`, `title`, `image`, `authorFirstName`, `authorLastName`, `ISBN`, `type`, `shortDescription`, `status`, `publishDate`, `publisherName`, `publisherAddress`, `publisherSize`) VALUES
(13, 'Und Nietzsche weinte', 'https://signlibrary.equalizent.com/img/cache/eseb_cover_2_1.jpg', 'Irvin D.', 'Yalom', '3-442-73728', 'Book', 'fiction novel which plays in Vienna 1882', 'reserved', '2008-01-01', 'echo media', 'Schottenfeldgasse 24, 1070 Vienna', 'medium'),
(15, 'Das geheime Leben der Bücher', 'https://cover.ekz.de/9783426197110.jpg', 'Régis de', ' Sá Moreira', '3-426-19711-1', 'Book', '170 Seiten  Belletristische Darstellung, Buchhändler, Anthologie', 'available', '2005-06-08', 'Droemer', 'München', 'small'),
(20, ' Die Fahrrad-Werkstatt', 'https://cover.ekz.de/9783870731472.jpg', 'Rob', 'VanDerPlas', '3-87073-147-8', 'Book', 'Anleitung, Fahrrad, Reparatur, Einführung, Instandsetzung, Radfahren, Ratgeber, Velomobil, Nichtmotorisiertes Verkehrsmittel, Rennrad, Zweirad', 'reserved', '2005-10-12', 'BVA, Bielefelder Verl.-Anst', 'Bielefeld', 'medium'),
(21, ' Nachtschicht', 'https://cover.ekz.de/9783785731819.jpg', 'Stephen ', 'King', '3-7857-3181-7', 'CD', 'Jub.-Ed., ausgewählte, ungekürzte Erzählungen, 4 CDs (256 Min.) : digital', 'available', '2006-06-07', 'Lübbe', 'Bergisch Gladbach', 'small'),
(22, 'Der Berg der toten Tibeter', 'https://cover.ekz.de/9783886980260.jpg', 'Eliot', 'Pattison', '978-3-88698-026-0', 'CD', 'Autoris. Hörfassung, 6 CDs (507 Min.) : stereo, DDD + Booklet ([8] S.)', 'requriet', '2007-11-22', 'Steinbach', 'Schwäbisch Hall', 'small'),
(23, 'Schule der Lügen', 'https://cover.ekz.de/9783886988648.jpg', 'Wolfram', 'Fleischhauer', '978-3-88698-864-8', 'CD', 'Autoris. Hörfassung, 8 CDs (630 Min.) : stereo, DDD + Beiheft', 'availible', '2006-02-01', 'Steinbach', 'Schwäbisch Hall', 'small'),
(24, 'Stichwort NLP', 'https://cover.ekz.de/9783453117754.jpg', 'Rolf', ' Winiarski', '3-453-11775-1', 'Book', ' Neurolinguistisches Programmieren,', 'reserved', '1997-12-05', 'Heyne', 'München', 'big'),
(25, 'Dogwatching', 'https://cover.ekz.de/9783453165038.jpg', 'Desmond', ' Morris', '3-453-16503-9', 'Book', 'Hund, Körpersprache, Hunderasse, Nichtverbale Kommunikation, Bearded Collie, Begleithund', 'requriet', '2007-08-25', 'Heyne', 'München', 'Choose...'),
(26, 'Sonne, Mond und Luftballon', 'https://cover.ekz.de/9783407781185.jpg', 'Josef', ' Guggenmos', '3-407-78118-0', 'Book', '', 'reserved', '1997-02-03', 'Basel, Beltz & Gelberg', 'Weinheim', 'medium'),
(27, 'Kanada fürs Handgepäck', 'https://cover.ekz.de/9783293208018.jpg', 'Anke Caroline', 'Burger', '978-3-293-20801-8', 'Book', ' Anthologie, Kanada, Landeskunde, Kanadier, Kosmographie, Kanada Ost, Zitatensammlung', 'requriet', '2018-02-02', 'Unionsverlag', 'Zürich', 'big');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`mediaID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `mediaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
