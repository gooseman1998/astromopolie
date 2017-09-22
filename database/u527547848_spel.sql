
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 22 sep 2017 om 06:45
-- Serverversie: 10.1.22-MariaDB
-- PHP-versie: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `u527547848_spel`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `evenementen`
--

CREATE TABLE IF NOT EXISTS `evenementen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` text NOT NULL,
  `soort` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Gegevens worden uitgevoerd voor tabel `evenementen`
--

INSERT INTO `evenementen` (`id`, `titel`, `soort`) VALUES
(1, 'monopoly 1', 'monopoly'),
(2, 'vraag 1', 'vraag'),
(3, 'vraag 2', 'vraag'),
(4, 'vraag 3', 'vraag'),
(5, 'vraag 4', 'vraag'),
(6, 'monopoly 2', 'monopoly'),
(7, 'vraag 5', 'vraag');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `nieuws`
--

CREATE TABLE IF NOT EXISTS `nieuws` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` text NOT NULL,
  `bericht` text NOT NULL,
  `opmerking` text NOT NULL,
  `xp` int(11) NOT NULL,
  `publishDate` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Gegevens worden uitgevoerd voor tabel `nieuws`
--

INSERT INTO `nieuws` (`id`, `titel`, `bericht`, `opmerking`, `xp`, `publishDate`) VALUES
(1, 'Nieuws bericht 0', 'pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl', 'convallis tortor risus dapibus', 114, '18:14:00'),
(2, 'Nieuws bericht 1', 'sapien varius ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis duis consequat', 'primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra', 80, '13:44:00'),
(3, 'Nieuws bericht 2', 'nibh in quis justo maecenas rhoncus aliquam lacus morbi quis tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra pede ac diam cras pellentesque volutpat dui', 'integer ac neque duis bibendum morbi non quam nec dui luctus', 248, '07:08:00'),
(4, 'Nieuws bericht 3', 'adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum', 'tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris laoreet ut rhoncus aliquet', 303, '18:02:00'),
(5, 'Nieuws bericht 4', 'elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi nulla ac enim', 'feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio in hac habitasse platea dictumst maecenas ut', 349, '08:01:00'),
(6, 'Nieuws bericht 5', 'dolor quis odio consequat varius integer ac leo pellentesque ultrices mattis odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla elit ac nulla sed vel enim sit amet nunc', 'eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit id pretium', 99, '18:56:00'),
(7, 'Nieuws bericht 6', 'nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere', 'curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum', 348, '12:57:00'),
(8, 'Nieuws bericht 7', 'tempor convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla', 'vitae quam suspendisse potenti nullam porttitor lacus at turpis donec posuere metus', 346, '08:09:00'),
(9, 'Nieuws bericht 8', 'ultrices mattis odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla elit ac nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac', 'et magnis dis parturient montes nascetur ridiculus mus vivamus', 239, '20:51:00'),
(10, 'Nieuws bericht 9', 'pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis ligula sit', 'ut nulla sed accumsan felis ut at dolor quis odio consequat varius integer ac leo pellentesque ultrices mattis odio', 190, '00:42:00'),
(11, 'Nieuws bericht 10', 'curabitur gravida nisi at nibh in hac habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat', 'amet nulla quisque arcu libero rutrum ac lobortis vel', 180, '11:06:00'),
(12, 'Nieuws bericht 11', 'nulla nisl nunc nisl duis bibendum felis sed interdum venenatis turpis enim blandit mi in porttitor pede justo eu massa donec dapibus duis at velit eu est congue elementum in hac habitasse platea', 'in libero ut massa volutpat convallis morbi', 153, '13:22:00'),
(13, 'Nieuws bericht 12', 'a pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec', 'eros viverra eget congue', 164, '02:26:00'),
(14, 'Nieuws bericht 13', 'viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac tellus semper interdum mauris ullamcorper purus sit amet nulla quisque arcu libero rutrum ac lobortis vel dapibus', 'dapibus duis at velit eu est congue elementum in hac habitasse', 326, '17:39:00'),
(15, 'Nieuws bericht 14', 'massa donec dapibus duis at velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis diam erat fermentum justo nec', 'suscipit a feugiat et eros vestibulum ac est lacinia nisi', 266, '16:32:00'),
(16, 'Nieuws bericht 15', 'ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra magna ac consequat metus sapien ut nunc vestibulum', 'quam sapien varius ut blandit', 284, '00:58:00'),
(17, 'Nieuws bericht 16', 'dolor quis odio consequat varius integer ac leo pellentesque ultrices mattis odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla elit ac nulla sed vel enim sit amet nunc viverra', 'eleifend donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit', 112, '12:34:00'),
(18, 'Nieuws bericht 17', 'quis odio consequat varius integer ac leo pellentesque ultrices mattis odio donec vitae nisi nam', 'convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo sit', 139, '03:15:00'),
(19, 'Nieuws bericht 18', 'nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat', 'sagittis nam congue risus semper porta volutpat quam pede lobortis ligula sit amet eleifend pede', 87, '14:41:00'),
(20, 'Nieuws bericht 19', 'praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio', 'id nulla ultrices aliquet maecenas leo odio condimentum id', 178, '18:27:00'),
(31, 'Nieuws bericht 20', 'dit is een link', 'lees dit', 0, '01:17:51'),
(32, 'Nieuws bericht 21', 'Kijken of dit bericht wordt getoond wanneer je op nieuws bericht 2 drukt', 'Dat is niet best als het wordt geshowd', 0, '09:37:42');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentnummer` int(11) NOT NULL,
  `evenement` text NOT NULL,
  `punten` int(11) NOT NULL,
  `xp` int(11) NOT NULL,
  `tijd` time NOT NULL,
  `uitkomst` varchar(5) NOT NULL,
  `goedGekeurd` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Gegevens worden uitgevoerd voor tabel `score`
--

INSERT INTO `score` (`id`, `studentnummer`, `evenement`, `punten`, `xp`, `tijd`, `uitkomst`, `goedGekeurd`) VALUES
(1, 400021203, 'monopoly', 282, 558, '00:00:00', '', 1),
(2, 400020100, 'vraag 1', 0, 0, '07:56:00', 'fout', 0),
(3, 400020100, 'vraag 2', 0, 0, '18:52:00', 'goed', 0),
(4, 400020100, 'vraag 3', 0, 0, '19:21:00', 'fout', 0),
(5, 400020100, 'vraag 4', 0, 0, '21:46:00', 'goed', 0),
(6, 400020100, 'monopoly 1', 740, 822, '00:00:00', '', 1),
(7, 400020101, 'monopoly', 830, 911, '00:00:00', '', 1),
(8, 400020101, 'vraag 1', 0, 0, '15:07:00', 'fout', 0),
(9, 400020101, 'vraag 2', 0, 0, '04:45:00', 'fout', 0),
(10, 400020101, 'vraag 3', 0, 0, '07:22:00', 'goed', 0),
(11, 400020101, 'vraag 4', 0, 0, '04:14:00', 'fout', 0),
(12, 400021203, 'monopoly 1', 785, 862, '00:00:00', '', 0),
(13, 400020102, 'monopoly', 611, 850, '00:00:00', '', 1),
(14, 400020102, 'vraag 1', 0, 0, '09:59:00', 'fout', 0),
(15, 400020102, 'vraag 2', 0, 0, '07:04:00', 'fout', 0),
(16, 400020102, 'vraag 3', 0, 0, '12:34:00', 'goed', 0),
(17, 400020102, 'vraag 4', 0, 0, '05:30:00', 'goed', 0),
(18, 400020102, 'monopoly 1', 449, 723, '00:00:00', '', 1),
(19, 400020103, 'monopoly', 473, 735, '00:00:00', '', 0),
(20, 400020103, 'vraag 1', 0, 0, '03:53:00', 'fout', 0),
(21, 400020103, 'vraag 2', 0, 0, '05:20:00', 'goed', 0),
(22, 400020103, 'vraag 3', 0, 0, '07:15:00', 'goed', 0),
(23, 400020103, 'vraag 4', 0, 0, '13:03:00', 'goed', 0),
(24, 400020103, 'monopoly 1', 355, 1133, '00:00:00', '', 1),
(25, 400020104, 'monopoly', 677, 264, '00:00:00', '', 0),
(26, 400020104, 'vraag 1', 0, 0, '13:57:00', 'fout', 0),
(27, 400020104, 'vraag 2', 0, 0, '01:50:00', 'goed', 0),
(28, 400020104, 'vraag 3', 0, 0, '22:31:00', 'goed', 0),
(29, 400020104, 'vraag 4', 0, 0, '12:59:00', 'fout', 0),
(30, 400020104, 'monopoly 1', 881, 289, '00:00:00', '', 0),
(31, 400020105, 'monopoly', 586, 986, '00:00:00', '', 0),
(32, 400020105, 'vraag 1', 0, 0, '06:17:00', 'fout', 0),
(33, 400020105, 'vraag 2', 0, 0, '04:48:00', 'fout', 0),
(34, 400020105, 'vraag 3', 0, 0, '20:12:00', 'fout', 0),
(35, 400020105, 'vraag 4', 0, 0, '03:59:00', 'goed', 0),
(36, 400020105, 'monopoly 1', 823, 861, '00:00:00', '', 0),
(37, 400020106, 'monopoly', 378, 1131, '00:00:00', '', 0),
(38, 400020106, 'vraag 1', 0, 0, '03:59:00', 'fout', 0),
(39, 400020106, 'vraag 2', 0, 0, '05:01:00', 'fout', 0),
(40, 400020106, 'vraag 3', 0, 0, '06:35:00', 'goed', 0),
(41, 400020106, 'vraag 4', 0, 0, '17:16:00', 'goed', 0),
(42, 400020106, 'monopoly 1', 847, 317, '00:00:00', '', 0),
(43, 400020107, 'monopoly', 762, 899, '00:00:00', '', 0),
(44, 400020107, 'vraag 1', 0, 0, '05:42:00', 'goed', 0),
(45, 400020107, 'vraag 2', 0, 0, '01:27:00', 'goed', 0),
(46, 400020107, 'vraag 3', 0, 0, '14:38:00', 'goed', 0),
(47, 400020107, 'vraag 4', 0, 0, '14:02:00', 'goed', 0),
(48, 400020107, 'monopoly 1', 417, 326, '00:00:00', '', 0),
(49, 400020108, 'monopoly', 491, 780, '00:00:00', '', 0),
(50, 400020108, 'vraag 1', 0, 0, '06:19:00', 'goed', 0),
(51, 400020108, 'vraag 2', 0, 0, '19:28:00', 'goed', 0),
(52, 400020108, 'vraag 3', 0, 0, '12:07:00', 'goed', 0),
(53, 400020108, 'vraag 4', 0, 0, '18:04:00', 'goed', 0),
(54, 400020108, 'monopoly 1', 530, 1239, '00:00:00', '', 0),
(55, 400020109, 'monopoly', 288, 926, '00:00:00', '', 0),
(56, 400020109, 'vraag 1', 0, 0, '12:28:00', 'fout', 0),
(57, 400020109, 'vraag 2', 0, 0, '19:28:00', 'goed', 0),
(58, 400020109, 'vraag 3', 0, 0, '22:16:00', 'fout', 0),
(59, 400020109, 'vraag 4', 0, 0, '20:56:00', 'fout', 0),
(60, 400020109, 'monopoly 1', 762, 927, '00:00:00', '', 0),
(61, 400021203, 'monopoly 2', 500, 250, '00:00:00', '', 1),
(62, 400022046, 'monopoly 1', 4300, 2150, '00:00:00', '', 0),
(63, 0, 'monopoly 1', 4, 2, '00:00:00', '', 0),
(64, 0, 'vraag 5', 3, 2, '00:00:00', '', 0),
(65, 400022046, 'monopoly 1', 123, 62, '00:00:00', '', 0),
(66, 0, '', 0, 0, '00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `studentantwoord`
--

CREATE TABLE IF NOT EXISTS `studentantwoord` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vraagID` int(11) NOT NULL,
  `Antwoord` text COLLATE utf8_unicode_ci NOT NULL,
  `Tijd` time NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Gegevens worden uitgevoerd voor tabel `studentantwoord`
--

INSERT INTO `studentantwoord` (`ID`, `userID`, `vraagID`, `Antwoord`, `Tijd`) VALUES
(1, '400020100', 1, 'B', '21:35:00'),
(2, '400020101', 1, 'B', '15:11:00'),
(3, '400020102', 1, 'A', '13:29:00'),
(4, '400020103', 1, 'D', '09:23:00'),
(5, '400020104', 1, 'A', '02:03:00'),
(6, '400020105', 1, 'C', '12:23:00'),
(7, '400020106', 1, 'C', '23:36:00'),
(8, '400020107', 1, 'B', '23:52:00'),
(9, '400020108', 1, 'B', '05:48:00'),
(10, '400020109', 1, 'B', '06:40:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` varchar(255) NOT NULL,
  `voornaam` text NOT NULL,
  `achternaam` text NOT NULL,
  `wachtwoord` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`ID`, `userID`, `voornaam`, `achternaam`, `wachtwoord`) VALUES
(1, '400020100', 'Avis', 'Burdass', '1N3ZnHDOWCU'),
(2, '400020101', 'Jodie', 'Lynock', 'YjH3PsOXt'),
(3, '400020102', 'Aurthur', 'Knowlman', 'g1Zc6CrxI'),
(4, '400020103', 'Marylou', 'Lafuente', 'mK4VTH'),
(5, '400020104', 'Sarge', 'Johnigan', 'z96dB26uMe'),
(6, '400020105', 'Gabie', 'Bernaldez', '2qpKFBhUfQp'),
(7, '400020106', 'Wolfy', 'Patry', 'nRtnkmMWea'),
(8, '400020107', 'Brent', 'Paddy', 'geyJ6AFQ'),
(9, '400020108', 'Conni', 'Simnel', 'p6as46'),
(10, '400020109', 'Sander', 'Goose', 'gAnS559'),
(14, '', '', '', ''),
(13, '400021203', 'jeroen', 'rikken', 'roen1998'),
(15, '400022046', 'Marc', '', 'Brouwer'),
(16, '', '', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vragen`
--

CREATE TABLE IF NOT EXISTS `vragen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` text NOT NULL,
  `vraag` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `antwoord` text NOT NULL,
  `punten` int(11) NOT NULL,
  `expireDate` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Gegevens worden uitgevoerd voor tabel `vragen`
--

INSERT INTO `vragen` (`id`, `titel`, `vraag`, `a`, `b`, `c`, `d`, `antwoord`, `punten`, `expireDate`) VALUES
(1, 'vraag 0', ' nec nisi vulputate notincidunt lacus ?', 'A urus eu magna vulputate luctus cum soc', 'B vivamus in felis', 'C aliquam sit amet diam in magna bibendum imperdiet ', 'D  turpis adipiscing lorem vitae mattis nibh ligula nec sem duis ', 'C', 44, '20:06:00'),
(2, 'vraag 1', 'velit nec nisi vulputate nonummy maecenas tincidunt lacus at?', 'A in purus eu magna vulputate luctus cum sociis', 'B tempus vivamus in felis', 'C lectus aliquam sit amet diam in magna bibendum imperdiet nullam', 'D quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam', 'A', 34, '20:06:00'),
(3, 'vraag 2', 'semper sapien a libero nam dui proin leo odio?', 'A primis in faucibus orci', 'B at nibh in hac habitasse platea dictumst aliquam augue quam sollicitudin', 'C ac lobortis vel', 'D iaculis justo in hac habitasse platea dictumst etiam faucibus', 'D', 39, '17:30:00'),
(4, 'vraag 3', 'metus sapien ut nunc vestibulum ante ipsum primis?', 'A pellentesque at nulla suspendisse', 'B pharetra magna ac consequat metus sapien ut nunc vestibulum ante', 'C pede ullamcorper augue a suscipit nulla elit ac nulla', 'D lorem id ligula suspendisse ornare consequat lectus in est', 'D', 31, '22:48:00'),
(5, 'vraag 4', 'faucibus cursus urna ut tellus nulla ut erat id mauris?', 'A lectus in quam fringilla rhoncus mauris', 'B sapien iaculis congue', 'C vulputate ut ultrices vel augue vestibulum ante', 'D eget semper rutrum nulla', 'B', 46, '17:37:00'),
(6, 'vraag 5', 'posuere cubilia curae nulla dapibus dolor vel est donec?', 'A cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut', 'B donec semper sapien a libero nam dui proin leo odio', 'C quis justo maecenas', 'D rutrum nulla nunc purus', 'C', 45, '15:54:00'),
(7, 'vraag 6', 'orci mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula?', 'A orci eget orci vehicula condimentum curabitur in libero ut massa volutpat', 'B et ultrices posuere cubilia curae', 'C ac est lacinia', 'D donec ut mauris eget massa tempor convallis nulla', 'A', 33, '20:16:00'),
(8, 'vraag 7', 'aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien non mi integer ac neque?', 'A sed nisl nunc rhoncus dui vel sem sed', 'B mauris laoreet ut', 'C vestibulum ante ipsum primis in', 'D accumsan felis ut at dolor quis', 'B', 34, '17:52:00'),
(9, 'vraag 8', 'lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a?', 'A odio odio elementum eu interdum eu tincidunt in leo maecenas', 'B non sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi', 'C donec ut dolor morbi vel', 'D urna pretium nisl ut volutpat sapien', 'B', 29, '23:36:00'),
(10, 'vraag 9', 'duis bibendum morbi non quam nec dui luctus rutrum?', 'A ante ipsum primis in', 'B tellus nisi eu orci mauris lacinia sapien quis libero', 'C donec dapibus duis at velit eu est congue elementum in hac habitasse', 'D tortor sollicitudin mi sit amet lobortis sapien sapien non', 'C', 33, '20:27:00'),
(11, 'vraag 10', 'nfrhjgrbj', 'frhgrje', 'fhjregjheg j', 'f rhfrejgkerjk', ' rrjgejgbj', 'b', 23, '19:00:00'),
(12, 'vraag 11', 'ginreigreiugeri?', 'fbuefbwf', 'buwfebfwebfweiufb', 'bdwebf', 'fwebfuwefb', 'A', 33, '12:23:44'),
(13, 'vraag 12', 'dqwdq', 'wqdqwd', 'dwqdwqd', 'qwdqw', 'qwdqw', 'A', 14, '12:44:44'),
(14, 'vraag 13', 'regthy', 'regthy', 'getrhy', 'refthy', 'egrthy', 'A', 10, '12:34:55'),
(16, 'vraag 14', 'waarneer krijgen we vakantie', 'morgen', 'overmorgen', 'gisteren', 'nooit', 'A', 200, '12:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
