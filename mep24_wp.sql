-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 25. Feb 2025 um 17:37
-- Server-Version: 10.3.39-MariaDB-0+deb10u2
-- PHP-Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `mep24_wp`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mep_error_report`
--

CREATE TABLE `mep_error_report` (
  `id` int(11) NOT NULL,
  `device` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `sn` int(11) NOT NULL,
  `address` longtext DEFAULT NULL,
  `qr_name` varchar(255) DEFAULT NULL,
  `qr_email` varchar(255) DEFAULT NULL,
  `qr_tel` varchar(255) NOT NULL,
  `qr_file` longtext DEFAULT NULL,
  `qr_message` longtext DEFAULT NULL,
  `time_created` datetime NOT NULL,
  `availability_time` varchar(255) NOT NULL,
  `time_fixed` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mep_qr`
--

CREATE TABLE `mep_qr` (
  `id` int(11) NOT NULL,
  `code` varchar(12) NOT NULL,
  `name` varchar(120) NOT NULL,
  `sku` varchar(30) DEFAULT NULL,
  `sn` varchar(50) NOT NULL,
  `adress` text NOT NULL,
  `order_number` varchar(200) NOT NULL,
  `warranty` int(11) NOT NULL,
  `warranty_text` text NOT NULL,
  `delivery` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mep_qr_engineering`
--

CREATE TABLE `mep_qr_engineering` (
  `id` int(11) NOT NULL,
  `qr_code` varchar(10) NOT NULL,
  `company` varchar(120) NOT NULL,
  `technician` varchar(100) NOT NULL,
  `notes` text NOT NULL,
  `report_error` varchar(255) NOT NULL,
  `en_file` longtext NOT NULL,
  `time_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mep_qr_products`
--

CREATE TABLE `mep_qr_products` (
  `id` int(11) NOT NULL,
  `product_sku` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `mep_error_report`
--
ALTER TABLE `mep_error_report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mep_qr_id` (`device`);

--
-- Indizes für die Tabelle `mep_qr`
--
ALTER TABLE `mep_qr`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `mep_qr_engineering`
--
ALTER TABLE `mep_qr_engineering`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `mep_qr_products`
--
ALTER TABLE `mep_qr_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `mep_error_report`
--
ALTER TABLE `mep_error_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `mep_qr`
--
ALTER TABLE `mep_qr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `mep_qr_engineering`
--
ALTER TABLE `mep_qr_engineering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `mep_qr_products`
--
ALTER TABLE `mep_qr_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
