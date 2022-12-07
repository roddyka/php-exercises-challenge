-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Dez-2022 às 15:45
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `series`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tv_series`
--

DROP TABLE IF EXISTS `tv_series`;
CREATE TABLE IF NOT EXISTS `tv_series` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'Untitled',
  `channel` int(11) DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_bin NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0' COMMENT '0 to no\r\n1 to yes',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tv_series`
--

INSERT INTO `tv_series` (`id`, `title`, `channel`, `gender`, `created`, `updated`, `deleted`) VALUES
(1, 'Lord of the Rings - Serie', 129, 'Adventure', '2022-12-05 11:27:30', NULL, 0),
(2, 'Startrek', 199, 'Fiction', '2022-12-05 11:27:30', NULL, 0),
(3, 'Untitled Serie', 111, 'We dont know!', '2022-12-05 13:35:38', NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tv_series_intervals`
--

DROP TABLE IF EXISTS `tv_series_intervals`;
CREATE TABLE IF NOT EXISTS `tv_series_intervals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tv_series` int(11) NOT NULL,
  `week_day` int(11) NOT NULL COMMENT '0 for Sunday\r\n6 for Saturday',
  `show_time` time NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0' COMMENT '0 to no\r\n1 to yes',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tv_series_intervals`
--

INSERT INTO `tv_series_intervals` (`id`, `id_tv_series`, `week_day`, `show_time`, `created`, `updated`, `deleted`) VALUES
(1, 1, 2, '12:00:00', '2022-12-05 11:29:58', NULL, 0),
(2, 2, 5, '20:00:00', '2022-12-05 11:29:58', NULL, 0),
(3, 3, 0, '14:30:00', '2022-12-05 13:36:07', NULL, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
