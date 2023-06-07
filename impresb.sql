-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/06/2023 às 19:46
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `impresb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aposentados`
--

CREATE TABLE `aposentados` (
  `cpf` bigint(20) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `rg` int(11) NOT NULL,
  `ctps` int(11) NOT NULL,
  `email` varchar(220) NOT NULL,
  `celular` bigint(11) DEFAULT NULL,
  `sexo` int(11) NOT NULL,
  `salario` int(11) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `aposentados`
--

INSERT INTO `aposentados` (`cpf`, `nome`, `rg`, `ctps`, `email`, `celular`, `sexo`, `salario`, `data_nascimento`) VALUES
(64545, 'Edgley', 1234, 123456, 'shoppoutecommerce@gmail.com', 998341257, 1, 1234, '0000-00-00'),
(852369, 'Radyja', 12345, 123456, 'radyjasouzasales@gmail.com', 998341257, 2, 1234, '0000-00-00'),
(4545646, 'John', 23, 123456, 'johnemerson67@gmail.com', 998341257, 1, 4564, '1999-12-27'),
(1556976255, 'John', 3451371, 1234868, 'johnemerson67@gmail.com', 998341257, 1, 123456, '2023-05-18'),
(12345678911, 'John', 123456, 123456, 'johnemerson67@gmail.com', 998341257, 1, 12345, '1999-12-27');

-- --------------------------------------------------------

--
-- Estrutura para tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `idendereco` int(11) NOT NULL,
  `logradouro` varchar(220) NOT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `bairro` varchar(220) DEFAULT NULL,
  `cidade` varchar(220) NOT NULL,
  `estado` varchar(120) DEFAULT NULL,
  `pensionista_cpf` bigint(20) DEFAULT NULL,
  `aposentado_cpf` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `enderecos`
--

INSERT INTO `enderecos` (`idendereco`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `pensionista_cpf`, `aposentado_cpf`) VALUES
(1, 'Rua Adolfo Maia', '102', '0', 'Catolé do Rocha', 'RJ', NULL, 12345678911),
(2, 'Rua Adolfo Maia', '1023', '0', 'Catolé do Rocha', 'AC', NULL, 4545646),
(3, 'Rua Adolfo Maia', '1032', '0', 'Catolé do Rocha', 'PB', NULL, 852369),
(4, 'Rua Adolfo Maia', '02', '0', 'Catolé do Rocha', 'PB', NULL, 64545);

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `idfuncionarios` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`idfuncionarios`, `nome`, `email`, `senha`) VALUES
(9, 'John', 'johnemerson67@gmail.com', '$2y$10$mzpWp0vvhY6lXBwHBO4fce4dNmxUy8e4tTOmAbd1zEkvxrzuC2Zb.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pensionistas`
--

CREATE TABLE `pensionistas` (
  `cpf` bigint(20) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `rg` int(11) NOT NULL,
  `data-casamento` date NOT NULL,
  `data-obito` date NOT NULL,
  `data-nascimento` varchar(100) NOT NULL,
  `email` varchar(220) NOT NULL,
  `celular` int(11) DEFAULT NULL,
  `sexo` int(11) NOT NULL,
  `aposentados_cpf` bigint(20) NOT NULL,
  `salario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `aposentados`
--
ALTER TABLE `aposentados`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices de tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`idendereco`),
  ADD KEY `fk_enderecos_aposentados1` (`aposentado_cpf`),
  ADD KEY `pensionista_cpf` (`pensionista_cpf`,`aposentado_cpf`);

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`idfuncionarios`);

--
-- Índices de tabela `pensionistas`
--
ALTER TABLE `pensionistas`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `aposentados_cpf` (`aposentados_cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `idendereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `idfuncionarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `fk_enderecos_aposentados1` FOREIGN KEY (`aposentado_cpf`) REFERENCES `aposentados` (`cpf`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_enderecos_pensionistas1` FOREIGN KEY (`pensionista_cpf`) REFERENCES `pensionistas` (`cpf`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `pensionistas`
--
ALTER TABLE `pensionistas`
  ADD CONSTRAINT `fk_pensionistas_aposentados` FOREIGN KEY (`aposentados_cpf`) REFERENCES `aposentados` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
