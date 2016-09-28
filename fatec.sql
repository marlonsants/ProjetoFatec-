-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Set-2016 às 12:59
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

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

--
-- Extraindo dados da tabela `controle_presenca`
--

INSERT INTO `controle_presenca` (`id`, `id_participante`, `codBar`, `dia1`, `dia2`, `dia3`, `dia4`, `dia5`) VALUES
(1, 1, '1234567890', 1, NULL, NULL, 0, 0),
(2, 2, '7894561237', NULL, NULL, NULL, NULL, NULL),
(3, 3, '1478523691', NULL, NULL, NULL, NULL, NULL),
(4, 4, '9632587413', NULL, NULL, NULL, NULL, NULL),
(5, 5, '1234567890', 1, NULL, NULL, 0, 0),
(6, 6, '7894561237', NULL, NULL, NULL, NULL, NULL),
(7, 7, '1478523691', NULL, NULL, NULL, NULL, NULL),
(8, 8, '9632587413', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `participante`
--

CREATE TABLE `participante` (
  `id_participante` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `instituicao` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `participante`
--

INSERT INTO `participante` (`id_participante`, `nome`, `email`, `instituicao`, `cpf`) VALUES
(1, 'marlon', 'marlu_tcu@hotmail.com', 'sao luis', '434.208.668-95'),
(2, 'testenome', 'testeemail', 'testeinstituicao', '123456789');

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
  MODIFY `id_participante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
