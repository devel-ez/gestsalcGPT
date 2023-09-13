-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Set-2023 às 07:39
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
(56, 38, '2023-08-30', '', '0000-00-00', ''),
(57, 39, '2023-09-05', '', '0000-00-00', ''),
(58, 39, '2023-09-05', '', '0000-00-00', ''),
(59, 39, '2023-09-05', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `kanban_tasks`
--

CREATE TABLE `kanban_tasks` (
  `id_task` int(11) NOT NULL,
  `id_processo` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `position` int(10) NOT NULL,
  `columnKanban` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `kanban_tasks`
--

INSERT INTO `kanban_tasks` (`id_task`, `id_processo`, `title`, `description`, `position`, `columnKanban`) VALUES
(322, 34, 'a', 'a', 0, 'pendentes'),
(323, 34, 'd', 'd', 1, 'pendentes'),
(324, 34, 'b', 'b', 0, 'em-progresso'),
(325, 34, 'c', 'c', 0, 'concluidas'),
(330, 39, 'Capa', 'Elabora capa com tt', 0, 'concluidas'),
(331, 39, 'Renumerar', 'a página 05 está errada', 1, 'concluidas'),
(332, 39, 'Conjur', '*Corrigir pesquisa de preços', 2, 'concluidas'),
(333, 39, 'asdfoihasdfas', 'sdfasf', 0, 'pendentes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modulos`
--

CREATE TABLE `modulos` (
  `id` int(11) NOT NULL,
  `modulo` varchar(45) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `view` varchar(45) DEFAULT NULL,
  `icon_menu` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `modulos`
--

INSERT INTO `modulos` (`id`, `modulo`, `parent_id`, `view`, `icon_menu`) VALUES
(1, 'Página inicial', NULL, 'processos/processos.php', 'fas fa-tachometer-alt'),
(2, 'Reportes', NULL, 'reportes.php', 'fas fa-chart-line'),
(3, 'Configuración', NULL, 'configuracion.php', 'fas fa-cogs'),
(4, 'Usuarios', NULL, 'usuarios.php', 'fas fa-users'),
(5, 'Roles y Perfiles', NULL, 'roles_perfiles.php', 'fas fa-tablet-alt');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil_modulo`
--

CREATE TABLE `perfil_modulo` (
  `idperfil_modulo` int(11) NOT NULL,
  `id_perfil` int(11) DEFAULT NULL,
  `id_modulo` int(11) DEFAULT NULL,
  `view_inicio` tinyint(4) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `perfil_modulo`
--

INSERT INTO `perfil_modulo` (`idperfil_modulo`, `id_perfil`, `id_modulo`, `view_inicio`, `estado`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 2, NULL, 1),
(3, 1, 3, NULL, 1),
(4, 1, 4, NULL, 1),
(5, 1, 5, NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfis`
--

CREATE TABLE `perfis` (
  `id_perfil` int(11) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `perfis`
--

INSERT INTO `perfis` (`id_perfil`, `description`, `estado`) VALUES
(1, 'Administrador', 1),
(2, 'Vendedor', 1);

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
(38, '2023-08-30', '', '0000-00-00', '', '', '55555.555555/5555-55', 'Dispensa Ratificada', '55555/5555', '55555', '555555', 'FA', '', '0000-00-00', 'Fase 6 - Fase Externa', '', '', '', ''),
(39, '2023-09-05', '', '0000-00-00', '', '', '64919.191896/1918-99', 'Aguardando definição', '00011/0000', 'Descrição balbalbal', 'skaslkfsaadfa', 'PAC', '', '0000-00-00', 'Fase 7 - Em contratação', '', '', '', '');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `posto_grad` varchar(100) DEFAULT NULL,
  `nome_guerra` varchar(100) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `chave` text DEFAULT NULL,
  `id_perfil_usuario` int(11) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `foto_perfil` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `posto_grad`, `nome_guerra`, `usuario`, `chave`, `id_perfil_usuario`, `estado`, `foto_perfil`) VALUES
(1, 'Sargento', 'Velêz', 'velez', '$2a$07$azybxcags23425sdg23sdeanQZqjaf6Birm2NvcYTNtJw24CsO5uq', 1, 1, ''),
(2, 'Paolo', 'Guerrero', 'pguerrero', '$2a$07$azybxcags23425sdg23sdeanQZqjaf6Birm2NvcYTNtJw24CsO5uq', 2, 1, '');

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
-- Índices para tabela `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `perfil_modulo`
--
ALTER TABLE `perfil_modulo`
  ADD PRIMARY KEY (`idperfil_modulo`),
  ADD KEY `id_perfil` (`id_perfil`),
  ADD KEY `id_modulo` (`id_modulo`);

--
-- Índices para tabela `perfis`
--
ALTER TABLE `perfis`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Índices para tabela `processos`
--
ALTER TABLE `processos`
  ADD PRIMARY KEY (`id_processos`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_perfil_usuario` (`id_perfil_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `historico_data_entrada_saida`
--
ALTER TABLE `historico_data_entrada_saida`
  MODIFY `id_hist_entrada_saida` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de tabela `kanban_tasks`
--
ALTER TABLE `kanban_tasks`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT de tabela `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `processos`
--
ALTER TABLE `processos`
  MODIFY `id_processos` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `historico_data_entrada_saida`
--
ALTER TABLE `historico_data_entrada_saida`
  ADD CONSTRAINT `fk_id_processos` FOREIGN KEY (`id_processos`) REFERENCES `processos` (`id_processos`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_perfil_usuario`) REFERENCES `perfis` (`id_perfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
