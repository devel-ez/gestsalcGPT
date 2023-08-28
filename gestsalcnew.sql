-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Ago-2023 às 05:00
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gestsalcnew`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `prc_listarProcessosFaseInterna` ()   BEGIN
  select 
    p.id_processos,
    '' as detalhes, 
    '' as progresso,
    p.tipo_processo_origem,
    p.numero_processo_origem,
    p.NUP,
    CONCAT(p.tipo_processo_origem, ' ', p.numero_processo_origem) as tipo_num_processo,
    p.assunto_objeto,
    p.descricao_detalhada_objeto,
    p.data_entrada,    
    p.requisitante,
    p.situacao,
    '' as opcoes
  from processos p;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_data_entrada_saida`
--

CREATE TABLE `historico_data_entrada_saida` (
  `id_hist_entrada_saida` int(20) NOT NULL,
  `id_processos` int(20) NOT NULL,
  `hist_data_entrada` date NOT NULL,
  `hist_motivo_data_entrada` varchar(100) NOT NULL,
  `hist_data_saida` date NOT NULL,
  `hist_motivo_data_saida` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `historico_data_entrada_saida`
--

INSERT INTO `historico_data_entrada_saida` (`id_hist_entrada_saida`, `id_processos`, `hist_data_entrada`, `hist_motivo_data_entrada`, `hist_data_saida`, `hist_motivo_data_saida`) VALUES
(50, 34, '2023-08-07', '', '0000-00-00', ''),
(51, 34, '2023-08-07', '', '0000-00-00', ''),
(52, 34, '2023-08-07', '', '0000-00-00', ''),
(53, 35, '2023-08-22', '', '0000-00-00', ''),
(55, 37, '2023-08-27', '', '0000-00-00', ''),
(56, 38, '2023-08-30', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `kanban_tasks`
--

CREATE TABLE `kanban_tasks` (
  `id_task` int(11) NOT NULL,
  `id_processo` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `position` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `processos`
--

CREATE TABLE `processos` (
  `id_processos` int(20) NOT NULL,
  `data_entrada` date NOT NULL,
  `motivo_data_entrada` varchar(100) NOT NULL,
  `data_saída` date NOT NULL,
  `motivo_data_saida` varchar(100) NOT NULL,
  `dfd` varchar(100) NOT NULL,
  `NUP` varchar(30) NOT NULL,
  `tipo_processo_origem` varchar(100) NOT NULL,
  `numero_processo_origem` varchar(100) NOT NULL,
  `assunto_objeto` varchar(100) NOT NULL,
  `descricao_detalhada_objeto` text NOT NULL,
  `requisitante` varchar(100) NOT NULL,
  `analista` varchar(100) NOT NULL,
  `previsao_conclusao` date NOT NULL,
  `situacao` varchar(100) NOT NULL,
  `operador_fase_externa` varchar(100) NOT NULL,
  `resultado_fase_externa` varchar(100) NOT NULL,
  `protocolista` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `processos`
--

INSERT INTO `processos` (`id_processos`, `data_entrada`, `motivo_data_entrada`, `data_saída`, `motivo_data_saida`, `dfd`, `NUP`, `tipo_processo_origem`, `numero_processo_origem`, `assunto_objeto`, `descricao_detalhada_objeto`, `requisitante`, `analista`, `previsao_conclusao`, `situacao`, `operador_fase_externa`, `resultado_fase_externa`, `protocolista`, `status`) VALUES
(34, '2023-08-07', '', '0000-00-00', '', '', '11111.111111/1111-11', 'Pregão SRP', '11111/1111', 'descrição resumida', 'descrição detalhada', '7ºCT', '', '0000-00-00', 'Fase 5 - Saneamento', '', '', '', ''),
(35, '2023-08-22', '', '0000-00-00', '', '', '22222.222222/2222-22', 'Pregão SRP', '22222/2222', '2', '2222', 'AC Defesa', '', '0000-00-00', 'Fase 2 - Análise SALC', '', '', '', ''),
(37, '2023-08-27', '', '0000-00-00', '', '', '44444.444444/4444-44', 'Dispensa Eletrônica Sem Disputa', '44444/4444', '444444', '44444444444', 'AC Defesa', '', '0000-00-00', 'Fase 2 - Análise SALC', '', '', '', ''),
(38, '2023-08-30', '', '0000-00-00', '', '', '55555.555555/5555-55', 'Dispensa Ratificada', '55555/5555', '55555', '555555', 'FA', '', '0000-00-00', 'Fase 6 - Fase Externa', '', '', '', '');

--
-- Acionadores `processos`
--
DELIMITER $$
CREATE TRIGGER `processos_after_insert` AFTER INSERT ON `processos` FOR EACH ROW BEGIN
    INSERT INTO historico_data_entrada_saida (id_processos, hist_data_entrada, hist_motivo_data_entrada, hist_data_saida, hist_motivo_data_saida)
    VALUES (NEW.id_processos, NEW.data_entrada, NEW.motivo_data_entrada, NEW.data_saída, NEW.motivo_data_saida);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `processos_after_update` AFTER UPDATE ON `processos` FOR EACH ROW BEGIN
    INSERT INTO historico_data_entrada_saida (id_processos, hist_data_entrada, hist_motivo_data_entrada, hist_data_saida, hist_motivo_data_saida)
    VALUES (NEW.id_processos, NEW.data_entrada, NEW.motivo_data_entrada, NEW.data_saída, NEW.motivo_data_saida);
END
$$
DELIMITER ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `historico_data_entrada_saida`
--
ALTER TABLE `historico_data_entrada_saida`
  ADD PRIMARY KEY (`id_hist_entrada_saida`),
  ADD KEY `fk_id_processos` (`id_processos`) USING BTREE;

--
-- Índices para tabela `kanban_tasks`
--
ALTER TABLE `kanban_tasks`
  ADD PRIMARY KEY (`id_task`);

--
-- Índices para tabela `processos`
--
ALTER TABLE `processos`
  ADD PRIMARY KEY (`id_processos`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `historico_data_entrada_saida`
--
ALTER TABLE `historico_data_entrada_saida`
  MODIFY `id_hist_entrada_saida` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de tabela `kanban_tasks`
--
ALTER TABLE `kanban_tasks`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `processos`
--
ALTER TABLE `processos`
  MODIFY `id_processos` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `historico_data_entrada_saida`
--
ALTER TABLE `historico_data_entrada_saida`
  ADD CONSTRAINT `fk_id_processos` FOREIGN KEY (`id_processos`) REFERENCES `processos` (`id_processos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
