-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jul-2021 às 21:49
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `corona`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `nascimento` date NOT NULL,
  `cpf` int(11) NOT NULL,
  `cep` int(20) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `numeroCasa` int(11) NOT NULL,
  `complemento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`nome`, `sobrenome`, `nascimento`, `cpf`, `cep`, `rua`, `numeroCasa`, `complemento`) VALUES
('Giliady', 'Collar', '1999-09-11', 2147483647, 944663460, 'Rua da Palmeira', 235, 'Cs'),
('w3434', '2322', '0000-00-00', 5454, 3444, '4545', 45, 'cs');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacinados`
--

CREATE TABLE `vacinados` (
  `data` date NOT NULL,
  `cpfPaciente` int(11) NOT NULL,
  `loteVacina` varchar(255) NOT NULL,
  `dose` int(11) NOT NULL,
  `fabricante` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vacinados`
--

INSERT INTO `vacinados` (`data`, `cpfPaciente`, `loteVacina`, `dose`, `fabricante`) VALUES
('2021-07-07', 2147483647, '123 BR 2311', 2, 'CoronaVac');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacinas`
--

CREATE TABLE `vacinas` (
  `fabricante` varchar(255) NOT NULL,
  `lote` varchar(255) NOT NULL,
  `validade` date NOT NULL,
  `doses` int(10) NOT NULL,
  `intervalo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vacinas`
--

INSERT INTO `vacinas` (`fabricante`, `lote`, `validade`, `doses`, `intervalo`) VALUES
('CoronaVac', '123 BR 2311', '1999-09-11', 2, 15),
('AstraZeneca', '21KUHYGE', '1999-03-12', 2, 120),
('we3', 'we32', '2020-04-12', 2, 23),
('', '', '0000-00-00', 0, 0),
('rreew', '21KUHYGE', '1999-09-11', 40, 232),
('ewew', 'we344', '2032-02-11', 2, 12),
('wwewe', 'w2333', '4543-03-12', 23, 334),
('CoronaVac', '13243b', '2323-04-13', 2, 15);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
