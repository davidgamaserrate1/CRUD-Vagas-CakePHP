-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Nov-2021 às 17:24
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vagascake`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(11) NOT NULL,
  `nome_departamento` text NOT NULL,
  `empresa_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `departamentos`
--

INSERT INTO `departamentos` (`id`, `nome_departamento`, `empresa_id`) VALUES
(1, 'TI', 3),
(2, 'ADM', 3),
(4, 'CONTAB', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nome_empresa` text DEFAULT NULL,
  `estabelecimentos_empresa_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id`, `nome_empresa`, `estabelecimentos_empresa_id`) VALUES
(1, 'FACOM', 3),
(3, 'FAENG', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabelecimentos_empresas`
--

CREATE TABLE `estabelecimentos_empresas` (
  `id` int(11) NOT NULL,
  `empresa_nome` text NOT NULL,
  `logradouro` text NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estabelecimentos_empresas`
--

INSERT INTO `estabelecimentos_empresas` (`id`, `empresa_nome`, `logradouro`, `numero`, `bairro`) VALUES
(3, 'Empresa Teste Estabelecimento 1', 'rua teste 1', 1, 'bairro teste 1'),
(4, 'Estabelecimento teste 2', 'rua teste 2', 2, 'bairro teste 2'),
(5, 'empresa teste 3', 'rua teste 3', 3, 'bairro teste 3'),
(6, 'Estabelecimento teste 3', 'Rua teste 4', 4, 'bairro 4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setores`
--

CREATE TABLE `setores` (
  `id` int(11) NOT NULL,
  `nome_setor` text NOT NULL,
  `departamento_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `setores`
--

INSERT INTO `setores` (`id`, `nome_setor`, `departamento_id`) VALUES
(1, 'Setor Teste', 2),
(2, 'Setor Homologa', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `id` int(11) NOT NULL,
  `nome_vaga` text NOT NULL,
  `departamento_id` int(11) DEFAULT NULL,
  `empresa_id` int(11) DEFAULT NULL,
  `estabelecimentos_empresa_id` int(11) DEFAULT NULL,
  `setore_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`id`, `nome_vaga`, `departamento_id`, `empresa_id`, `estabelecimentos_empresa_id`, `setore_id`) VALUES
(7, 'Nome vaga', 2, 1, 5, 1),
(8, 'HMMM', 2, 1, 5, 2),
(10, 'ta', 4, 1, 4, 2),
(12, 't', 4, 1, 5, 1),
(13, 'ta 2', 1, 3, 3, 1),
(14, 'ta', 4, 3, 5, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas_alteradas`
--

CREATE TABLE `vagas_alteradas` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `acao` text NOT NULL,
  `vaga_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vagas_alteradas`
--

INSERT INTO `vagas_alteradas` (`id`, `nome`, `acao`, `vaga_id`) VALUES
(1, 'ta', 'ta', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estabelecimentos_empresas`
--
ALTER TABLE `estabelecimentos_empresas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `setores`
--
ALTER TABLE `setores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vagas_alteradas`
--
ALTER TABLE `vagas_alteradas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `estabelecimentos_empresas`
--
ALTER TABLE `estabelecimentos_empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `setores`
--
ALTER TABLE `setores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `vagas_alteradas`
--
ALTER TABLE `vagas_alteradas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
