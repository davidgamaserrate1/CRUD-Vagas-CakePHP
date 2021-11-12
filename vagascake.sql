-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Nov-2021 às 17:21
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
(10, 'Estágio', 2, 3, 5, 1),
(19, 'Analista', 4, 3, 4, 1),
(24, 'Analista contabil', 4, 3, 5, 1);

--
-- Acionadores `vagas`
--
DELIMITER $$
CREATE TRIGGER `TG_vagasdeletas` BEFORE DELETE ON `vagas` FOR EACH ROW INSERT INTO vagas_logs(`id`,`nome_vaga`,`acao`)
VALUES (OLD.`id`,OLD.`nome_vaga`, 'Excluida')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas_logs`
--

CREATE TABLE `vagas_logs` (
  `id` int(11) NOT NULL,
  `nome_vaga` text NOT NULL,
  `acao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vagas_logs`
--

INSERT INTO `vagas_logs` (`id`, `nome_vaga`, `acao`) VALUES
(25, 'vaga teste para exclusão', 'Excluida');

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
-- Índices para tabela `vagas_logs`
--
ALTER TABLE `vagas_logs`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `vagas_logs`
--
ALTER TABLE `vagas_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
