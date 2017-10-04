-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Set 17, 2017 alle 13:32
-- Versione del server: 10.1.21-MariaDB
-- Versione PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenzia`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_camere`
--

CREATE TABLE `tbl_camere` (
  `idcamera` int(11) NOT NULL,
  `idstruttura` int(11) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `capienza` int(11) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `tbl_camere`
--

INSERT INTO `tbl_camere` (`idcamera`, `idstruttura`, `tipo`, `capienza`, `foto`) VALUES
(1, 1, 'camera doppia', 3, 'img/stanza_1.jpg'),
(2, 1, 'camera doppia', 3, 'img/stanza_2.jpg'),
(3, 6, 'camera doppia', 3, 'img/stanza_3.jpg'),
(4, 5, 'camera quadrupla', 4, 'img/stanza_4.jpg'),
(5, 1, 'camera doppia', 3, 'img/stanza_5.jpg'),
(6, 2, 'camera doppia', 3, 'img/stanza_6.jpg'),
(7, 3, 'camera quadrupla', 4, 'img/stanza_7.jpg'),
(8, 2, 'camera doppia', 3, 'img/stanza_8.jpg'),
(9, 2, 'camera quadrupla', 4, 'img/stanza_9.jpg'),
(10, 4, 'camera doppia', 3, 'img/stanza_10.jpg'),
(11, 19, 'camera doppia', 3, 'img/stanza_11.jpg'),
(12, 4, 'camera doppia', 3, 'img/stanza_12.jpg'),
(13, 3, 'camera quadrupla', 4, 'img/stanza_13.jpg'),
(14, 4, 'camera singola ', 1, 'img/stanza_14.jpg'),
(15, 5, 'camera doppia', 2, 'img/stanza_15.jpg'),
(16, 6, 'camera doppia', 2, 'img/stanza_16.jpg'),
(17, 7, 'camera doppia', 3, 'img/stanza_17.jpg'),
(18, 7, 'camera doppia', 3, 'Img/stanza_18.jpg'),
(19, 8, 'camera tripla', 4, 'img/stanza_19.jpg'),
(20, 8, 'camera doppia', 3, 'img/stanza_20.jpg'),
(21, 9, 'camera doppia', 3, 'img/stanza_24.jpg'),
(22, 10, 'camera doppia', 3, 'img/stanza_26.jpg'),
(23, 11, 'camera singola ', 1, 'img/stanza_21.jpg'),
(24, 4, 'camera doppia', 3, 'img/27.jpg'),
(25, 1, 'camera doppia', 3, 'img/28.jpg'),
(26, 2, 'camera doppia', 3, 'img/29.jpg'),
(27, 1, 'camera doppia', 3, 'img/30.jpg'),
(28, 1, 'camera doppia', 3, 'img/31.jpg'),
(29, 4, 'camera doppia', 3, 'img/32.jpg'),
(30, 4, 'camera doppia', 3, 'img/33.jpg'),
(31, 5, 'camera doppia', 3, 'img/34.jpg'),
(32, 5, 'camera doppia', 3, 'img/35.jpg'),
(33, 5, 'camera doppia', 3, 'img/36.jpg'),
(34, 5, 'camera doppia', 3, 'img/37.jpg'),
(35, 6, 'camera doppia', 3, 'img/38.jpg'),
(36, 6, 'camera doppia', 3, 'img/39.jpg'),
(39, 6, 'camera doppia', 3, 'img/40.jpg'),
(40, 6, 'camera doppia', 3, 'img/41.jpg'),
(41, 7, 'camera singola ', 2, 'img/42.jpg'),
(42, 7, 'camera doppia ', 3, 'img/43.jpg'),
(43, 7, 'camera doppia', 3, 'img/44.jpg'),
(44, 7, 'camera doppia', 3, 'img/45.jpg'),
(45, 8, 'camera doppia', 3, 'img/46.jpg'),
(46, 8, 'camera doppia', 3, 'img/47.jpg'),
(47, 8, 'camera singola ', 2, 'img/48.jpg'),
(48, 8, 'camera doppia', 3, 'img/49.jpg'),
(49, 9, 'camera doppia', 3, 'img/50.jpg'),
(50, 10, 'camera doppia', 3, 'img/51.jpg'),
(51, 11, 'camera singola ', 2, 'img/52.jpg'),
(52, 11, 'camera doppia', 3, 'img/53.jpg'),
(53, 11, 'camera doppia', 3, 'img/54.jpg'),
(54, 11, 'camera doppia', 3, 'img/55.jpg'),
(55, 11, 'camera singola ', 2, 'img/56.jpg'),
(56, 12, 'camera doppia', 3, 'img/57.jpg'),
(57, 12, 'camera doppia', 3, 'img/58.jpg'),
(58, 12, 'camera doppia', 3, 'img/59.jpg'),
(59, 12, 'camera doppia', 3, 'img/60.jpg'),
(60, 13, 'camera doppia', 3, 'img/61.jpg'),
(61, 13, 'camera doppia', 3, 'img/62.jpg'),
(62, 13, 'camera doppia', 3, 'img/63.jpg'),
(63, 13, 'camera doppia', 3, 'img/64.jpg'),
(64, 13, 'camera doppia', 3, 'img/65.jpg'),
(65, 13, 'camera doppia', 3, 'img/66.jpg'),
(66, 14, 'camera quadrupla', 4, 'img/67.jpg'),
(67, 14, 'camera doppia', 3, 'img/68.jpg'),
(68, 14, 'camera doppia', 3, 'img/69.jpg'),
(69, 14, 'camera doppia', 3, 'img/70.jpg'),
(70, 14, 'camera doppia', 3, 'img/71.jpg'),
(71, 14, 'camera doppia', 3, 'img/72.jpg'),
(72, 15, 'camera doppia', 3, 'img/73.jpg'),
(73, 15, 'camera doppia', 3, 'img/74.jpg'),
(74, 15, 'camera doppia', 3, 'img/75.jpg'),
(75, 15, 'camera singola', 2, 'img/76.jpg'),
(76, 15, 'camera doppia', 3, 'img/77.jpg'),
(77, 15, 'camera doppia', 3, 'img/78.jpg'),
(78, 16, 'camera doppia', 3, 'img/79.jpg'),
(79, 16, 'camera doppia', 3, 'img/80.jpg'),
(80, 16, 'camera doppia', 3, 'img/81.jpg'),
(81, 16, 'camera doppia', 3, 'img/82.jpg'),
(82, 17, 'camera singola ', 2, 'img/83.jpg'),
(83, 17, 'camera doppia', 3, 'img/84.jpg'),
(84, 17, 'camera doppia', 3, 'img/85.jpg'),
(85, 17, 'camera doppia', 3, 'img/86.jpg'),
(86, 17, 'camera doppia', 3, 'img/87.jpg'),
(87, 17, 'camera doppia', 3, 'img/88.jpg'),
(88, 18, 'camera quadrupla', 4, 'img/89.jpg'),
(89, 18, 'camera doppia', 3, 'img/90.jpg'),
(90, 18, 'camera doppia', 3, 'img/91.jpg'),
(91, 18, 'camera doppia', 3, 'img/92.jpg'),
(92, 19, 'camera doppia', 3, 'img/93.jpg'),
(93, 20, 'camera quadrupla', 4, 'img/94.jpg'),
(94, 20, 'camera singola', 3, 'img/95.jpg'),
(95, 20, 'camera doppia', 3, 'img/96.jpg'),
(96, 20, 'camera quadrupla', 3, 'img/97.jpg'),
(97, 21, 'camera doppia', 3, 'img/stanza_13.jpg'),
(98, 22, 'camera doppia', 3, 'img/tropea2.jpg'),
(99, 23, 'camera doppia', 3, 'img/otranto2.jpg'),
(100, 24, 'camera doppia', 3, 'img/gallipoli1.jpg'),
(101, 25, 'camera doppia', 3, 'img/ibiza2.jpg'),
(102, 26, 'camera doppia', 3, 'img/rodi2.jpg'),
(103, 27, 'camera doppia', 3, 'img/zagabria2.jpg'),
(104, 28, 'camera doppia', 3, 'img/firenze2.jpg'),
(105, 29, 'camera doppia', 3, 'img/barcellona.jpg'),
(106, 30, 'camera doppia', 3, 'img/zurigo2.jpg'),
(107, 31, 'camera doppia', 3, 'img/dublino2.jpg'),
(108, 32, 'camera doppia', 3, 'img/parigi2.jpg'),
(109, 33, 'camera doppia', 3, 'img/copenaghen2.jpg'),
(112, 35, 'camera doppia', 3, 'img/nilo3.jpg'),
(113, 36, 'camera doppia', 3, 'img/mediterraneo2.jpg'),
(114, 37, 'camera doppia', 3, 'img/fiordi.jpg'),
(115, 38, 'camera doppia', 3, 'img/palermo2.jpg'),
(116, 39, 'camera doppia', 3, 'img/cagliari.jpg'),
(117, 40, 'camera doppia', 3, 'img/londra2.jpg'),
(118, 41, 'camera doppia', 3, 'img/berlino.jpg'),
(119, 42, 'camera doppia', 3, 'img/budapest2.jpg'),
(121, 44, 'camera doppia', 3, 'img/green.jpeg'),
(122, 45, 'camera doppia', 3, 'img/courmayeur.jpg'),
(123, 46, 'camera doppia', 3, 'img/trentino.jpeg'),
(124, 47, 'camera doppia', 3, 'img/terme3.jpg'),
(125, 48, 'camera doppia', 3, 'img/lagodieseo3.jpg'),
(126, 49, 'camera doppia', 3, 'img/alpin3.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_nazioni`
--

CREATE TABLE `tbl_nazioni` (
  `idpaese` int(11) NOT NULL,
  `codice` varchar(3) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `tbl_nazioni`
--

INSERT INTO `tbl_nazioni` (`idpaese`, `codice`, `nome`) VALUES
(1, 'ITA', 'Italia'),
(2, 'GER', 'Germania'),
(3, 'GBR', 'Gran Bretagna'),
(4, 'SPA', 'Spagna'),
(5, 'SUI', 'Svizzera'),
(6, 'FRA', 'Francia'),
(7, 'DNM', 'Danimarca'),
(8, 'GRE', 'Grecia'),
(9, 'CRO', 'Croazia'),
(10, 'IE', 'Repubblica d\'Irlanda'),
(12, 'EGY', 'Egitto'),
(13, 'NOR', 'Norvegia'),
(14, 'H', 'Ungheria'),
(15, 'SLO', 'Slovenia');

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_prenotazioni`
--

CREATE TABLE `tbl_prenotazioni` (
  `idprenotazione` int(11) NOT NULL,
  `idutente` int(11) NOT NULL,
  `idcamera` int(11) NOT NULL,
  `data_inizio` date NOT NULL,
  `data_fine` date NOT NULL,
  `posti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `tbl_prenotazioni`
--

INSERT INTO `tbl_prenotazioni` (`idprenotazione`, `idutente`, `idcamera`, `data_inizio`, `data_fine`, `posti`) VALUES
(24, 1, 3, '2017-09-11', '2017-09-13', 2),
(25, 1, 6, '2017-08-25', '2017-08-27', 1),
(26, 2, 3, '2017-08-27', '2017-08-31', 2),
(27, 2, 10, '2017-08-31', '2017-09-17', 1),
(28, 3, 13, '2017-09-01', '2017-08-08', 4),
(29, 18, 11, '2017-08-31', '2017-09-20', 2),
(30, 18, 12, '2017-08-27', '2017-08-31', 1),
(31, 3, 8, '2017-09-18', '2017-09-23', 2),
(32, 1, 8, '2017-08-31', '2017-09-10', 2),
(33, 1, 1, '2017-09-04', '2017-09-21', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_strutture`
--

CREATE TABLE `tbl_strutture` (
  `idstruttura` int(11) NOT NULL,
  `idpaese` int(11) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `citta` varchar(100) NOT NULL,
  `capienza` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `tbl_strutture`
--

INSERT INTO `tbl_strutture` (`idstruttura`, `idpaese`, `tipo`, `nome`, `citta`, `capienza`) VALUES
(1, 1, 'Hotel', 'Hotel Ariston', 'Catania', 0),
(2, 1, 'B&B', 'B&B Domus Veridiana', 'Roma', 70),
(3, 1, 'Casa vacanze', 'Casa delle Rose', 'Roma', 50),
(4, 1, 'Hotel', 'Hotel Excelsior', 'Bologna', 50),
(5, 6, 'Hotel', 'Hotel de Parisien', 'Parigi', 80),
(6, 6, 'Hotel', 'Hotel de la Rue', 'Lione', NULL),
(7, 4, 'Hotel', 'Hotel de la pena', 'Madrid', 50),
(8, 4, 'Hotel', 'Hotel Central', 'Barcellona', 50),
(9, 4, 'Casa vacanze', 'Casa de josa', 'Granada', 10),
(10, 4, 'Casa vacanze', 'Casa de martin', 'Valencia', 12),
(11, 5, 'Hotel', 'Hotel neutrale', 'Berna', 60),
(12, 5, 'B&B', 'B&B 4 cantoni', 'Lugano', 10),
(13, 3, 'Hotel', 'Hotel Ariston', 'Manchester', 20),
(14, 3, 'Hotel', 'Hotel Hilton', 'Londra', 100),
(15, 2, 'Hotel', 'Hotel Karofflen', 'Monaco', 30),
(16, 2, 'B&B', 'B&B Oktober Fest', 'Berlino', 20),
(17, 2, 'Hotel', 'Hotel N&H', 'Francoforte', 30),
(18, 1, 'B&B', 'B&B Casa di Genoveffa', 'Roma', 10),
(19, 4, 'Casa vacanze', 'Casa de pablo', 'Malaga', 8),
(20, 5, 'B&B', 'B&B Emmentaler', 'Zurigo', 10),
(21, 7, 'Hotel', 'Hotel La Sirenetta', 'Copenaghen', 100),
(22, 1, 'Hotel', 'Hotel Sunshine', 'Tropea', 50),
(23, 1, 'Hotel', 'Hotel Corte di Nettuno', 'Otranto', 50),
(24, 1, 'Hotel', 'Palazzo del Corso', 'Gallipoli', 50),
(25, 4, 'Hotel', 'Hotel Sol Beach House', 'Ibiza', 100),
(26, 8, 'Resort', 'Sheraton Rhodes Resort', 'Rodi', 100),
(27, 9, 'Hotel', 'Hotel Tomislavov dom', 'Zagabria', 50),
(28, 1, 'Hotel', 'Grand Hotel Cavour', 'Firenze', 100),
(29, 4, 'Hotel', 'Crowne Plaza Barcelona', 'Barcellona', 100),
(30, 5, 'Hotel', 'Hotel Glockenhof', 'Zurigo', 50),
(31, 10, 'Hotel', 'Jurys Inn ', 'Dublino', 100),
(32, 6, 'Hotel', 'Hotel Novotel Suites', 'Parigi', 50),
(33, 7, 'Hotel', 'Comfort Hotel Vesterbro', 'Copenaghen', 100),
(35, 12, 'Crociera', 'Crociera sul Nilo', 'Nilo', 50),
(36, 1, 'Crociera', 'Crociera nel Mediterraneo', 'Mediterraneo', 50),
(37, 13, 'Crociera', 'Crociera nei Fiordi', 'Fiordi', 50),
(38, 1, 'Hotel', 'NH Palermo', 'Palermo', 100),
(39, 1, 'Hotel', 'Hotel Residence Ulivi e Palme', 'Cagliari', 50),
(40, 3, 'Hotel', 'Westbury Hotel ', 'Londra', 100),
(41, 2, 'Hotel', 'Hotel Adlon', 'Berlino', 50),
(42, 14, 'Hotel', 'Danubius Hotel Astoria', 'Budapest', 50),
(44, 1, 'Hotel', 'Il Bramito del Cervo ', 'Predazzo ', 20),
(45, 1, 'Hotel', 'Des Glaciers', 'Aosta', 50),
(46, 1, 'Hotel', 'Rifugio Velo della Madonna', 'San Martino di Castrozza', 20),
(47, 15, 'Hotel', 'Thermana Park Lasko', 'Lasko', 30),
(48, 1, 'Hotel', 'Cocca Hotel Royal Thai SPA', 'Bergamo', 50),
(49, 1, 'Hotel', 'Alpin Royal ', 'Valle Aurina', 50);

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_utenti`
--

CREATE TABLE `tbl_utenti` (
  `idutente` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `cognome` varchar(30) DEFAULT NULL,
  `data_nascita` date DEFAULT NULL,
  `mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `tbl_utenti`
--

INSERT INTO `tbl_utenti` (`idutente`, `username`, `password`, `nome`, `cognome`, `data_nascita`, `mail`) VALUES
(1, 'paolorossi', '123456', 'paolo', 'rossi', '0000-00-00', 'paolorossi@alice..it'),
(2, 'gverdi', 'gverdi15', 'giuseppe', 'verdi', '1970-08-01', 'gverdi@gmail.com'),
(3, 'antonblu', 'antonblu12', 'antonio', 'blu', '1980-05-14', 'bluanto@alice.it'),
(18, 'erica', 'erica1234', 'erica', 'margarone', '1987-05-20', 'err@tim.it');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `tbl_camere`
--
ALTER TABLE `tbl_camere`
  ADD PRIMARY KEY (`idcamera`),
  ADD KEY `struttura` (`idstruttura`);

--
-- Indici per le tabelle `tbl_nazioni`
--
ALTER TABLE `tbl_nazioni`
  ADD PRIMARY KEY (`idpaese`),
  ADD KEY `nome` (`nome`);

--
-- Indici per le tabelle `tbl_prenotazioni`
--
ALTER TABLE `tbl_prenotazioni`
  ADD PRIMARY KEY (`idprenotazione`),
  ADD KEY `utente` (`idutente`),
  ADD KEY `camera` (`idcamera`);

--
-- Indici per le tabelle `tbl_strutture`
--
ALTER TABLE `tbl_strutture`
  ADD PRIMARY KEY (`idstruttura`),
  ADD KEY `paese` (`idpaese`);

--
-- Indici per le tabelle `tbl_utenti`
--
ALTER TABLE `tbl_utenti`
  ADD PRIMARY KEY (`idutente`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `tbl_camere`
--
ALTER TABLE `tbl_camere`
  MODIFY `idcamera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT per la tabella `tbl_nazioni`
--
ALTER TABLE `tbl_nazioni`
  MODIFY `idpaese` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT per la tabella `tbl_prenotazioni`
--
ALTER TABLE `tbl_prenotazioni`
  MODIFY `idprenotazione` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT per la tabella `tbl_strutture`
--
ALTER TABLE `tbl_strutture`
  MODIFY `idstruttura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT per la tabella `tbl_utenti`
--
ALTER TABLE `tbl_utenti`
  MODIFY `idutente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `tbl_camere`
--
ALTER TABLE `tbl_camere`
  ADD CONSTRAINT `struttura` FOREIGN KEY (`idstruttura`) REFERENCES `tbl_strutture` (`idstruttura`);

--
-- Limiti per la tabella `tbl_prenotazioni`
--
ALTER TABLE `tbl_prenotazioni`
  ADD CONSTRAINT `camera` FOREIGN KEY (`idcamera`) REFERENCES `tbl_camere` (`idcamera`),
  ADD CONSTRAINT `utente` FOREIGN KEY (`idutente`) REFERENCES `tbl_utenti` (`idutente`);

--
-- Limiti per la tabella `tbl_strutture`
--
ALTER TABLE `tbl_strutture`
  ADD CONSTRAINT `paese` FOREIGN KEY (`idpaese`) REFERENCES `tbl_nazioni` (`idpaese`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
