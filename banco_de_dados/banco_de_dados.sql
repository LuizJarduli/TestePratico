-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 19-Dez-2020 às 23:56
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste_pratico`
--
CREATE DATABASE IF NOT EXISTS `teste_pratico` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `teste_pratico`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cod_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(155) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(155) COLLATE utf8_swedish_ci NOT NULL,
  `telefone` char(15) COLLATE utf8_swedish_ci NOT NULL,
  `cpf` char(14) COLLATE utf8_swedish_ci DEFAULT NULL,
  `cnpj` char(17) COLLATE utf8_swedish_ci DEFAULT NULL,
  `cep` char(10) COLLATE utf8_swedish_ci NOT NULL,
  `logradouro` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(155) COLLATE utf8_swedish_ci NOT NULL,
  `cidade` varchar(155) COLLATE utf8_swedish_ci NOT NULL,
  `estado` char(2) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`cod_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cod_cliente`, `nome`, `email`, `telefone`, `cpf`, `cnpj`, `cep`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`) VALUES
(11, 'Luiz Miguel Jarduli Leite', 'luizjarduli@gmail.com', '(11) 99999-9999', '123.456.789-12', '', '19.915-110', 'Av x de novembro', 243, 'Terras indigentes', 'São Paulo', 'SP');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
