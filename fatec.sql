-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Out-2016 às 02:28
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fatec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `controle_presenca`
--

CREATE TABLE `controle_presenca` (
  `id` int(11) NOT NULL,
  `id_participante` int(11) NOT NULL,
  `codBar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dia1` int(1) DEFAULT NULL,
  `dia2` int(1) DEFAULT NULL,
  `dia3` int(1) DEFAULT NULL,
  `dia4` int(11) DEFAULT NULL,
  `dia5` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `participante`
--

CREATE TABLE `participante` (
  `id_participante` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cod_bar` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_3` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_4` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_5` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `participante`
--

INSERT INTO `participante` (`id_participante`, `nome`, `cod_bar`, `dia_1`, `dia_2`, `dia_3`, `dia_4`, `dia_5`) VALUES
(1, 'marlon', '1478523691', '1', '', '', '', ''),
(2, 'testenome', '1234567890', '1', '1', '', '', ''),
(3, 'teste 1', '1234567890', '1', '1', '', '', ''),
(4, 'teste 2', '1234567890', '1', '1', '', '', ''),
(5, 'teste 3', '1234567890', '1', '1', '', '', ''),
(6, 'Anderson', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'fuckteste', '1204059914', NULL, NULL, NULL, NULL, NULL),
(8, 'podre', '1188568446', NULL, NULL, NULL, NULL, NULL),
(9, 'sucesso', '1174418113', NULL, NULL, NULL, NULL, NULL),
(10, 'j', '1256984531', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `controle_presenca`
--
ALTER TABLE `controle_presenca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participante`
--
ALTER TABLE `participante`
  ADD PRIMARY KEY (`id_participante`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `controle_presenca`
--
ALTER TABLE `controle_presenca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `participante`
--
ALTER TABLE `participante`
  MODIFY `id_participante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
