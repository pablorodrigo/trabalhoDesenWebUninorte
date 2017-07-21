-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Jul-2017 às 00:57
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portaldb`
--
CREATE DATABASE IF NOT EXISTS `portaldb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `portaldb`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `CPF` bigint(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Portrait` varchar(20) DEFAULT NULL,
  `Status` tinyint(4) NOT NULL,
  `PoliticalParty` varchar(80) NOT NULL,
  `ProcessNumber` varchar(40) NOT NULL,
  `NickName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CPF`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `candidates`
--

INSERT INTO `candidates` (`CPF`, `Name`, `Portrait`, `Status`, `PoliticalParty`, `ProcessNumber`, `NickName`) VALUES
(164828249, 'Amazonino Armando Mendes', 'Amazonino.jpg', 2, 'Partido Democrático Trabalhista - PDT', '0600113-89.2017.6.04.0000', 'Amazonino Mendes'),
(7810423215, 'Carlos Eduardo de Souza Braga', 'EduardoBraga.jpg', 2, 'Partido do Movimento Democrático Brasileiro - PMDB', '0600098-23.2017.6.04.0000', 'Eduardo Braga'),
(44179669234, 'Jardelvone Nogueira Deltrudes', 'Jardel.jpg', 2, 'Partido Pátria Livre - PPL', '0600133-80.2017.6.04.0000', 'Jardel'),
(18660037200, 'José Ricardo Wendling', 'JoseRicardo.jpg', 11, 'Partido dos Trabalhadores - PT', '0600092-16.2017.6.04.0000', 'José Ricardo'),
(71172092249, 'Liliane Araújo de Almeida', 'LilianeAraujo.jpg', 7, 'Partido Popular Socialista - PPS', '0600108-67.2017.6.04.0000', 'Liliane Araujo'),
(7396570204, 'Luiz Castro Andrade Neto', 'LuizCastro.jpg', 11, 'Rede Sustentabilidade - REDE', '0600095-68.2017.6.04.0000', 'Luiz Castro'),
(50864173253, 'Marcelo Augusto da Eira Correa', 'MarceloSerafim.jpg', 2, 'Partido Socialista Brasileiro - PSB', '0600109-52.2017.6.04.0000', 'Marcelo Serafim'),
(43935117272, 'Rebecca Martins Garcia', 'RebeccaGarcia.jpg', 2, 'Partido Progressista - PP', '0600105-15.2017.6.04.0000', 'Rebecca Garcia'),
(57514240268, 'Maurício Wilker de Azevedo Barreto', 'WilkerBarreto.jpg', 2, 'Partido Humanista da Solidariedade - PHS', '0600100-90.2017.6.04.0000', 'Wilker Barreto');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
