-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Ago-2023 às 22:08
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

select '' as detalhes, 
	   '' as progresso,
             p.dfd,
             p.NUP,
             p.tipo_processo_origem,
             p.numero_processo_origem,
             p.assunto_objeto,
             p.requisitante,
             p.analista,
             p.situacao,
       '' as opcoes
 
from processos p;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dfds_vinculados_processos`
--

CREATE TABLE `dfds_vinculados_processos` (
  `id_dfds_vinculados` int(20) NOT NULL,
  `id_processos` int(20) NOT NULL,
  `nr_dfd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 3, '2023-05-10', 'tEste 3', '2023-08-08', 'tEste 3'),
(2, 4, '2023-08-08', 'motivo da entrata teste 4', '2023-08-08', 'motivo da entrata teste 4'),
(3, 3, '2014-04-03', 'tEste 3 updat entrada', '2023-08-01', 'tEste 3 update saida');

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
  `NUP` int(30) NOT NULL,
  `tipo_processo_origem` varchar(100) NOT NULL,
  `numero_processo_origem` varchar(100) NOT NULL,
  `assunto_objeto` varchar(100) NOT NULL,
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

INSERT INTO `processos` (`id_processos`, `data_entrada`, `motivo_data_entrada`, `data_saída`, `motivo_data_saida`, `dfd`, `NUP`, `tipo_processo_origem`, `numero_processo_origem`, `assunto_objeto`, `requisitante`, `analista`, `previsao_conclusao`, `situacao`, `operador_fase_externa`, `resultado_fase_externa`, `protocolista`, `status`) VALUES
(1, '2023-08-02', 'teste motivo da primeira entrada', '2023-08-08', 'teste motivo da primeira entrada', '01/2023', 0, 'Pregão SRP', '01/2023', 'Teste do objeto', 'citex', 'roque', '2023-08-31', 'fase 2', 'velez', 'sessão pública', 'emanoel', 'conformidade'),
(2, '2023-08-02', 'teste motivo da primeira entrada', '2023-08-08', 'teste motivo da primeira saida', '01/2023', 0, 'pregao srp', '01/2023', 'teste objeto', 'tete requisitante', 'teste analista', '2023-08-31', 'teste situação', 'teste operador', 'teste resultado da fase externa', 'teste protocolista', 'teste status do protocolo'),
(3, '2014-04-03', 'tEste 3 updat entrada', '2023-08-01', 'tEste 3 update saida', 'tEste 3', 0, 'tEste 3', 'tEste 3', '', 'tEste 3', 'tEste 3', '2023-08-05', 'tEste 3', 'tEste 3', 'tEste 3', 'tEste 3', 'tEste 3'),
(4, '2023-08-08', 'motivo da entrata teste 4', '2023-08-08', 'motivo da entrata teste 4', '', 0, '', '', '', '', '', '0000-00-00', '', '', '', '', '');

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
-- Índices para tabela `dfds_vinculados_processos`
--
ALTER TABLE `dfds_vinculados_processos`
  ADD PRIMARY KEY (`id_dfds_vinculados`);

--
-- Índices para tabela `historico_data_entrada_saida`
--
ALTER TABLE `historico_data_entrada_saida`
  ADD PRIMARY KEY (`id_hist_entrada_saida`),
  ADD KEY `fk_id_processos` (`id_processos`) USING BTREE;

--
-- Índices para tabela `processos`
--
ALTER TABLE `processos`
  ADD PRIMARY KEY (`id_processos`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dfds_vinculados_processos`
--
ALTER TABLE `dfds_vinculados_processos`
  MODIFY `id_dfds_vinculados` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `historico_data_entrada_saida`
--
ALTER TABLE `historico_data_entrada_saida`
  MODIFY `id_hist_entrada_saida` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `processos`
--
ALTER TABLE `processos`
  MODIFY `id_processos` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
