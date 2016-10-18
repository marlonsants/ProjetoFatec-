-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Out-2016 às 03:53
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fatec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `nome`, `senha`) VALUES
(1, 'fatec', 'fatec2016');

-- --------------------------------------------------------

--
-- Estrutura da tabela `participante`
--

CREATE TABLE IF NOT EXISTS `participante` (
  `id_participante` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `instituicao` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cod_bar` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_3` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_4` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_5` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_participante`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=173 ;

--
-- Extraindo dados da tabela `participante`
--

INSERT INTO `participante` (`id_participante`, `nome`, `email`, `instituicao`, `cod_bar`, `dia_1`, `dia_2`, `dia_3`, `dia_4`, `dia_5`) VALUES
(1, 'ADÍLSON HÄRTER', '', '', '1342351821', NULL, NULL, NULL, NULL, NULL),
(2, 'ALECIO RODRIGUES DE OLIVEIRA', '', '', '1382211786', '1', '1', NULL, NULL, NULL),
(3, 'ALESSANDRA STEINLE MORAES', '', '', '1350070185', '1', '1', NULL, NULL, NULL),
(4, 'ALESSANDRO TADEU WILCENSKI', '', '', '1186515690', '1', '1', NULL, NULL, NULL),
(5, 'ALEX WILLIAN DE SOUZA', '', '', '1216923853', '1', '1', NULL, NULL, '1'),
(6, 'ALINE DA SILVA BERNARDO', '', '', '1256929791', '1', NULL, NULL, NULL, NULL),
(7, 'AMANDA HELENA DA SILVA', '', '', '1165960758', NULL, NULL, NULL, NULL, NULL),
(8, 'ANDRE LUIS MELONI DEL VECCHIO', '', '', '1391426381', '1', '1', '1', NULL, NULL),
(9, 'ANNA CAROLINA DE OLIVEIRA SOUZA', '', '', '1298778649', NULL, '1', '1', NULL, NULL),
(10, 'ARLINDO JOSE LIMA DE CARVALHO', '', '', '1303896854', '1', '1', '1', NULL, '1'),
(11, 'BARBARA FENERICH NOGUEIRA', '', '', '1221832221', '1', '1', '1', NULL, '1'),
(12, 'Beatriz Tiezi Andrioli', '', '', '1147321731', '1', '1', '1', NULL, '1'),
(13, 'BRENDA CAROLINE DA COSTA GONÇALVES', '', '', '1167511729', NULL, NULL, NULL, NULL, NULL),
(14, 'BRUNA GIOVANA SANT ANNA', '', '', '1140077782', '1', '1', '1', NULL, '1'),
(15, 'BRUNA SANTOS PANEGHINE', '', '', '1321495818', '1', '1', '1', NULL, NULL),
(16, 'CAMILA SILVEIRA LAMANES DOS SANTOS', '', '', '1192245161', NULL, NULL, NULL, NULL, NULL),
(17, 'Carla Regina Lanzotti', '', '', '1150104356', NULL, NULL, NULL, NULL, NULL),
(18, 'Carlos Eduardo Fernandes Netto', '', '', '1129823124', NULL, NULL, NULL, NULL, NULL),
(19, 'Cassia Maria Davanço', '', '', '1119285642', NULL, NULL, NULL, NULL, NULL),
(20, 'Celso Antonio Jardim', '', '', '1217900052', '1', '1', NULL, NULL, NULL),
(21, 'CÉSAR APARECIDO RATEIRO', '', '', '1125106346', NULL, NULL, NULL, NULL, NULL),
(22, 'Claudenir Facincani Franco', '', '', '1189051985', '1', '1', '1', NULL, '1'),
(23, 'CLAUDINEI FERREIRA DO REGO', '', '', '1315875827', '1', '1', '1', NULL, NULL),
(24, 'CRISTIANO LAGO', '', '', '1364421232', NULL, NULL, NULL, NULL, NULL),
(25, 'DAISE APARECIDA RAMOS DE OLIVEIRA', '', '', '1120544666', '1', '1', '1', NULL, NULL),
(26, 'DANIELE MEDEIROS DE ARAUJO', '', '', '1383160616', NULL, '1', '1', NULL, '1'),
(27, 'DANIELLE LETÍCIA DE ASSIS', '', '', '1266646171', '1', '1', NULL, NULL, NULL),
(28, 'Danila Duran Corassa', '', '', '1323512081', NULL, NULL, NULL, NULL, NULL),
(29, 'DANILO APARECIDO PEREIRA', '', '', '1313923428', '1', NULL, NULL, NULL, NULL),
(30, 'DANILO LIMA', '', '', '1329113824', '1', '1', '1', NULL, NULL),
(31, 'DANILO LUIZ FLUMIGNAN', '', '', '1373316509', '1', NULL, NULL, NULL, NULL),
(32, 'DARLEI FERNANDES DE SOUSA', '', '', '1235307425', '1', '1', NULL, NULL, '1'),
(33, 'DAVI GABRIEL MARIOTTO', '', '', '1135361004', NULL, NULL, NULL, NULL, NULL),
(34, 'DENIS CARVALHO RIBEIRO', '', '', '1391262160', '1', NULL, '1', NULL, NULL),
(35, 'DENIS SILVA SANTOS', '', '', '1290220936', NULL, '1', '1', NULL, NULL),
(36, 'DIEGO FERNANDO GUIMARAES', '', '', '1389419241', '1', NULL, NULL, NULL, NULL),
(37, 'DIEGO MARCIO FRAGA', '', '', '1360270103', '1', '1', '1', NULL, '1'),
(38, 'DOUGLAS ROBERTO BRITO', '', '', '1186570430', '1', '1', '1', NULL, NULL),
(39, 'EDERCEZANO GONÇALVES', '', '', '1120124991', '1', '1', '1', NULL, '1'),
(40, 'EDGAR DAL ROVERE', '', '', '1328073761', NULL, NULL, NULL, NULL, NULL),
(41, 'EDUARDO ZAGO LIMA', '', '', '1119814797', '1', '1', '1', NULL, NULL),
(42, 'Eliamar Francelino do Prado', '', '', '1378343481', NULL, NULL, NULL, NULL, NULL),
(43, 'ELISANGELA PULCINI JACOB', '', '', '1115271363', '1', '1', '1', NULL, NULL),
(44, 'ESTEVÃO BARBIERI CARREGARI', '', '', '1340882960', '1', '1', '1', NULL, NULL),
(45, 'EVANDRO DA SILVA XAVIER', '', '', '1189407796', NULL, NULL, NULL, NULL, NULL),
(46, 'FABIANA ALVES LAURENTINO', '', '', '1284591822', '1', '1', '1', NULL, NULL),
(47, 'FABIANO AP DOS SANTOS', '', '', '1378425591', '1', '1', '1', NULL, '1'),
(48, 'FABIO AUGUSTO GOMES BORGES', '', '', '1269027368', '1', '1', '1', NULL, '1'),
(49, 'FABIO AUGUSTO GOMES BORGES ', '', '', '1298121767', NULL, NULL, NULL, NULL, NULL),
(50, 'Fábio Camilotti', '', '', '1269666003', '1', NULL, '1', NULL, '1'),
(51, 'FELIPE BATISTELLA FILHO', '', '', '1264967472', NULL, '1', NULL, NULL, NULL),
(52, 'Felipe Rogerio Xavier de Lima', '', '', '1402118960', NULL, NULL, NULL, NULL, '1'),
(53, 'FELIPE SANTOS MOREIRA', '', '', '1324506527', NULL, NULL, NULL, NULL, NULL),
(54, 'FERNANDA BARBOZA DE OLIVEIRA', '', '', '1249485129', '1', '1', '1', NULL, '1'),
(55, 'FERNANDA ROCHA FERRARESE', '', '', '1176616843', '1', '1', '1', NULL, NULL),
(56, 'FRANCIELE QUINTINO MENDES', '', '', '1282383969', NULL, NULL, NULL, NULL, NULL),
(57, 'FRANCIS RADAEL TATTO', '', '', '1296589042', NULL, NULL, NULL, NULL, NULL),
(58, 'GEIZE FERREIRA DE AMORIM', '', '', '1289445450', NULL, NULL, NULL, NULL, NULL),
(59, 'GILBERTO APARECIDO RODRIGUES', '', '', '1365616392', NULL, NULL, NULL, NULL, NULL),
(60, 'GIOVANE GALLI CESARI', '', '', '1199434369', '1', '1', '1', NULL, '1'),
(61, 'GUSTAVO DAU PIMENTA', '', '', '1391873425', '1', '1', '1', NULL, NULL),
(62, 'GUSTAVO DE LAURENTIZ ', '', '', '1305466072', '1', '1', '1', NULL, '1'),
(63, 'HELLEN WASISKI', '', '', '1336823064', '1', '1', NULL, NULL, NULL),
(64, 'IGOR ULISSES BERNARDINO DE SOUZA', '', '', '1293404989', '1', '1', '1', NULL, '1'),
(65, 'Isabel Cristina Rodrigues Cestari', '', '', '1339432346', '1', '1', '1', NULL, NULL),
(66, 'JANAINA FERNANDA SOARES', '', '', '1362943247', '1', '1', '1', NULL, '1'),
(67, 'JANAINA HUNCH CASTILHO MIRABELLI', '', '', '1342479548', '1', NULL, '1', NULL, '1'),
(68, 'JEFERSOM DE OLIVEIRA LOPO', '', '', '1255999208', NULL, NULL, NULL, NULL, NULL),
(69, 'João Roberto da Silva', '', '', '1316769917', NULL, NULL, NULL, NULL, NULL),
(70, 'JORGE LUIZ CASSIANO', '', '', '1377796079', NULL, NULL, NULL, NULL, NULL),
(71, 'JORGE OTÁVIO SILVA NUNES', '', '', '1186397086', NULL, NULL, NULL, NULL, NULL),
(72, 'JOSANA CARLA DA SILVA SASAKI', '', '', '1227351854', '1', '1', '1', NULL, NULL),
(73, 'JOSÉ ADRIANO LEÃO', '', '', '1351913104', NULL, NULL, NULL, NULL, NULL),
(74, 'José Henrique Facco', '', '', '1116466523', '1', '1', '1', NULL, NULL),
(75, 'JUCELIA RAMOS PEREIRA', '', '', '1120818367', '1', '1', '1', NULL, '1'),
(76, 'JULIANA DE SOUZA FERREIRA', '', '', '1198120605', NULL, NULL, NULL, NULL, NULL),
(77, 'Júlio Cesar de Souza', '', '', '1323411724', NULL, NULL, NULL, NULL, NULL),
(78, 'JULIO CEZAR V. GONÇALVES', '', '', '1391736575', '1', '1', '1', NULL, NULL),
(79, 'KAREN CAROLINE MARTINS', '', '', '1248508929', NULL, '1', '1', NULL, NULL),
(80, 'LEONARDO JOSÉ CARDOSO', '', '', '1308440288', '1', '1', '1', NULL, NULL),
(81, 'Leonardo Lucas Madaleno', '', '', '1259292742', NULL, NULL, NULL, NULL, NULL),
(82, 'LIDIANE PEREIRA BESSA', '', '', '1372139595', NULL, NULL, NULL, NULL, NULL),
(83, 'LORENA MAGALI GOUVÊA DOS SANTOS', '', '', '1223802867', NULL, NULL, NULL, NULL, NULL),
(84, 'LUANA BEATRIZ GONÇALVES', '', '', '1250014283', '1', NULL, '1', NULL, NULL),
(85, 'LUANA ZANCHETTA TESCHE', '', '', '1337060272', NULL, NULL, '1', NULL, NULL),
(86, 'LUCAS APARICIO CASTELLI', '', '', '1272548985', NULL, NULL, NULL, NULL, NULL),
(87, 'LUIS CARLOS REVOLTI', '', '', '1149465721', '1', '1', '1', NULL, '1'),
(88, 'LUIS TEHERAN SIERRA', '', '', '1162977418', '1', '1', NULL, NULL, '1'),
(89, 'Marcelo Henrique Armoa', '', '', '1285786982', NULL, '1', NULL, NULL, NULL),
(90, 'Marcelo Martins Laffranchi', '', '', '1158360998', NULL, NULL, NULL, NULL, NULL),
(91, 'Márcio Roberto de Carvalho', '', '', '1277740178', NULL, NULL, '1', NULL, NULL),
(92, 'MÁRCIO ROBERTO MENGUE', '', '', '1336941668', '1', NULL, NULL, NULL, NULL),
(93, 'MARCOS VINÍCIUS GALVÃO', '', '', '1282976987', '1', '1', NULL, NULL, NULL),
(94, 'MARIA APARECIDA CORRÊA COSTA', '', '', '1244449033', NULL, NULL, NULL, NULL, NULL),
(95, 'Maria Benincasa Vidotti', '', '', '1113483184', '1', NULL, '1', NULL, NULL),
(96, 'Mariana Carina Frigieri Salaro', '', '', '1314133265', NULL, '1', '1', NULL, '1'),
(97, 'MARIANA DOS SANTOS TREVISOLI BONATTI', '', '', '1356657252', NULL, NULL, NULL, NULL, NULL),
(98, 'MÁRIO HENRIQUE NOGUEIRA ITAO', '', '', '1297255047', '1', '1', '1', NULL, NULL),
(99, 'MARLON MENEZES MACIEL BINDES', '', '', '1207891725', NULL, NULL, NULL, NULL, NULL),
(100, 'MATEUS ARAÚJO RODRIGUES', '', '', '1384164185', '1', '1', '1', NULL, '1'),
(101, 'MATHEUS MAITAN VIEIRA', '', '', '1385377592', NULL, NULL, NULL, NULL, NULL),
(102, 'MAYRA LORRAYNE DUARTE SANTOS ALVES', '', '', '1232698144', '1', '1', '1', NULL, '1'),
(103, 'MOILTON RIBEIRO FRANCO JUNIOR', '', '', '1364777043', NULL, NULL, NULL, NULL, NULL),
(104, 'MONALIZA EMANOELA CINEL', '', '', '1388214958', '1', '1', '1', NULL, NULL),
(105, 'MÔNICA FACINCANI CAMACHO', '', '', '1397164975', '1', '1', '1', NULL, NULL),
(106, 'MONIQUE ÉVELIN CAETANO', '', '', '1116174576', '1', '1', '1', NULL, '1'),
(107, 'MURILO SUGAHARA', '', '', '1238473232', NULL, '1', '1', NULL, NULL),
(108, 'NADIA FIGUEIREDO DE PAULA', '', '', '1316943261', NULL, NULL, NULL, NULL, NULL),
(109, 'Nádia Figueiredo de Paula', '', '', '1270569216', '1', '1', '1', NULL, NULL),
(110, 'NÁGILA ANDRADE ', '', '', '1162557744', '1', '1', '1', NULL, NULL),
(111, 'NATÁLIA MAZZARIOLI TERRA', '', '', '1230700128', NULL, NULL, NULL, NULL, NULL),
(112, 'NATANAEL CARLOS ARRUDA PEREIRA', '', '', '1310483921', '1', '1', '1', NULL, NULL),
(113, 'NICOLE DE PAULA SOUZA', '', '', '1332571578', '1', '1', '1', NULL, NULL),
(114, 'NOEMIA AURELINA ROMEU DA CRUZ', '', '', '1138289603', NULL, NULL, NULL, NULL, '1'),
(115, 'Patrick Allan dos Santos Faustino  ', '', '', '1294746123', NULL, NULL, NULL, NULL, NULL),
(116, 'Paulo Henrique Lanzotti', '', '', '1359494617', NULL, NULL, NULL, NULL, NULL),
(117, 'Paulo Roberto Correia da Silva', '', '', '1162767581', NULL, NULL, NULL, NULL, NULL),
(118, 'POLLYANNA AKEMI TERAOKA', '', '', '1258243555', '1', '1', '1', NULL, '1'),
(119, 'PRISCILA LEMOS RODRIGUES', '', '', '1234422459', '1', NULL, NULL, NULL, NULL),
(120, 'RENATA ELOISA SANCHES', '', '', '1305155878', NULL, NULL, NULL, NULL, NULL),
(121, 'RENATO DE OLIVEIRA ARAUJO', '', '', '1387092784', '1', '1', '1', NULL, '1'),
(122, 'RENATO SILVA ALBERNAZ', '', '', '1288861555', '1', '1', '1', NULL, '1'),
(123, 'RIANE POLACHINI DETOGNI', '', '', '1301971825', '1', '1', '1', NULL, '1'),
(124, 'RICHARD DENNY DOS SANTOS ', '', '', '1138125383', '1', '1', '1', NULL, NULL),
(125, 'RICHARD FELIPE CARVALHO', '', '', '1286188410', '1', '1', '1', NULL, '1'),
(126, 'Rita de Cássia Vieira Macri', '', '', '1146062707', '1', '1', '1', NULL, NULL),
(127, 'RITHIELI MORI', '', '', '1301205463', '1', '1', '1', NULL, '1'),
(128, 'RODRIGO GARCIA BRUNINI', '', '', '1297492255', NULL, NULL, NULL, NULL, NULL),
(129, 'RODRIGO MINARI CHIODA', '', '', '1187035722', '1', '1', '1', NULL, '1'),
(130, 'Rose Maria Duda', '', '', '1194197560', '1', '1', '1', NULL, NULL),
(131, 'SANDRA CASTRO DA SILVA', '', '', '1185411763', '1', '1', '1', NULL, '1'),
(132, 'SERGIO HENRIQUE DIAS MASCIOLI', '', '', '1176005578', '1', '1', NULL, NULL, '1'),
(133, 'Sidnei Aparecido Mussupapo', '', '', '1267138832', NULL, NULL, NULL, NULL, NULL),
(134, 'SIMONE ROBERTA SCATTOLIN TILELLI', '', '', '1349185219', '1', '1', '1', NULL, '1'),
(135, 'SIMONI MASSETTI AMANCIO SCHIAVONI', '', '', '1356310564', NULL, NULL, NULL, NULL, NULL),
(136, 'SUELEN GABRIELA APARECIDA MACHADO', '', '', '1212754477', '1', '1', '1', NULL, '1'),
(137, 'SUELEN SELMA BORGES DA SILVA', '', '', '1255570410', '1', '1', '1', NULL, '1'),
(138, 'Tadeu Tomio Sudo', '', '', '1377467638', NULL, NULL, NULL, NULL, NULL),
(139, 'THIAGO JOSÉ SERRA', '', '', '1169281661', '1', '1', '1', NULL, NULL),
(140, 'THIAGO JOSE SOARES', '', '', '1398396629', NULL, '1', NULL, NULL, NULL),
(141, 'TIAGO BORGES DE OLIVEIRA', '', '', '1329834570', '1', '1', '1', NULL, NULL),
(142, 'UBAJARA CESARE MOZART PROENÇA', '', '', '1194963923', NULL, NULL, NULL, NULL, NULL),
(143, 'VAGNER GONÇALVES SANTOS', '', '', '1324999188', '1', '1', '1', NULL, '1'),
(144, 'VALCINEY GOMES DE BARROS', '', '', '1275158267', NULL, '1', '1', NULL, '1'),
(145, 'VALERIA VILLENA ZANOTTI', '', '', '1219003979', '1', NULL, NULL, NULL, NULL),
(146, 'VALQUIRIA DA CONCEICAO GABRIEL', '', '', '1166024621', NULL, NULL, NULL, NULL, NULL),
(147, 'VITOR GAVAZZI DE MARCO ', '', '', '1178842943', '1', '1', '1', NULL, '1'),
(148, 'VIVIAN MACHADO BENASSI', '', '', '1132651366', NULL, NULL, NULL, NULL, NULL),
(149, 'Viviane Carla Fortulan', '', '', '1399537049', NULL, '1', NULL, NULL, NULL),
(150, 'Wagner Rodrigues Meyer', '', '', '1206568838', '1', '1', NULL, NULL, NULL),
(151, 'WALDIR NAGEL SCHIRMER', '', '', '1132532762', NULL, NULL, NULL, NULL, '1'),
(152, 'WILIAN BELARMINO DA SILVA', '', '', '1409965051', '1', '1', NULL, NULL, NULL),
(153, 'WILLIAN DE MELO MAGNABOSCO', '', '', '1301552150', NULL, NULL, NULL, NULL, NULL),
(154, 'WILMAR ALIRIO BOTELLO SUAREZ', '', '', '1381992825', NULL, NULL, NULL, NULL, '1'),
(162, 'Amanda Helena da Silva', 'amandamada.silva@gmail.com', '', '1127742998', '1', '1', '1', NULL, NULL),
(161, 'Caroline Batista Damasceno', 'caroline.batista.damasceno@gmail.com', '', '1300694554', '1', '1', '1', NULL, NULL),
(158, 'Alexandra Moya', 'amoya915@gmail.com', '', '1217316157', '1', NULL, NULL, NULL, NULL),
(159, 'felipe rogerio xavier de lima', 'felipe_rxl12@yahoo.com.br', 'fatec', '1306250681', '1', '1', NULL, NULL, NULL),
(160, 'Roney Amaro Macri', 'pro.ritacvm@gmail.com', '', '1360416076', '1', '1', '1', NULL, NULL),
(163, 'Geize Ferreira de amorim', 'geizeamorim125@gmail.com', '', '1204433971', '1', '1', '1', NULL, '1'),
(164, 'Dênis Carvalho Ribeiro', 'agro.denisribeiro@hotmail.com', '', '1244841338', '1', '1', NULL, NULL, NULL),
(165, 'Felipe dos Santos Batista', 'felipe.motuca@hotmail.com', '', '1159045250', '1', '1', '1', NULL, NULL),
(166, 'João Vitor Souza Redondo', 'vitinho_r@hotmail.com', '', '1216969470', '1', '1', '1', NULL, NULL),
(167, 'Daniel Rodrigues Serra', '', '', '1117232886', '1', '1', '1', NULL, NULL),
(168, 'Flávia Cristina Cunha', 'flaviajabuka@hotmail.com', '', '1260405792', '1', '1', '1', NULL, '1'),
(169, 'Angelica Caroline Penna Palopito', 'angelicacpenna@hotmail.com', '', '1297273294', '1', '1', '1', NULL, '1'),
(170, 'SANDRA CASTRO DA SILVA', '', '', '1219086089', NULL, NULL, NULL, NULL, NULL),
(171, 'VITOR DONAIRE', '', 'FATEC', '1404846845', NULL, NULL, NULL, NULL, NULL),
(172, 'VITOR HUGO DONEIRE', '', 'FATEC', '1314124142', NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
