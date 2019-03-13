-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Mar-2019 às 18:39
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `protocolos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `addentregapos`
--

CREATE TABLE `addentregapos` (
  `nome` varchar(255) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `numproto` varchar(255) NOT NULL,
  `datasolicitada` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `addentregapos`
--

INSERT INTO `addentregapos` (`nome`, `curso`, `numproto`, `datasolicitada`, `id`) VALUES
('Teste 2', 'Direito', '34534534', '2019-04-05', 14),
('Pedro 1', 'aaaaa', '5453453', '2019-04-05', 15),
('Pedro2', '', '543534', '0000-00-00', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `addentregaprotocolos`
--

CREATE TABLE `addentregaprotocolos` (
  `id` int(11) NOT NULL,
  `numproto` varchar(20) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `atendente` varchar(255) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `periodo` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `dataretirada` date NOT NULL,
  `entregue` varchar(255) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `observacao` varchar(255) NOT NULL,
  `dae` varchar(255) NOT NULL,
  `encaminhamento` varchar(255) NOT NULL,
  `vencimento` varchar(250) NOT NULL,
  `datavencimento` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `addentregaprotocolos`
--

INSERT INTO `addentregaprotocolos` (`id`, `numproto`, `nome`, `atendente`, `curso`, `periodo`, `data`, `dataretirada`, `entregue`, `descricao`, `observacao`, `dae`, `encaminhamento`, `vencimento`, `datavencimento`, `status`) VALUES
(8, '5476527462', 'Pedro 2', 'Pedro', 'AdministraÃ§Ã£o', '2', '2019-01-01', '2019-01-01', 'tertrete', 'ertreter', 'terterte', '151515', 'Teste 3', '3 Dias', '2019-11-04', 0),
(9, '51545454', 'Pedro Henrique de Souza Ferreira', 'Pedro Henrique', 'AdministraÃ§Ã£o', '2', '2019-02-02', '2019-01-01', 'kwenlf', 'foermpkl', 'ofnwerofmnwe', '81841', 'TesteMudar', '3 Dias', '2019-02-20', 1),
(12, '54444444444444444444', 'Pedro henrque', 'pEDRO 222', 'AdministraÃ§Ã£o', '3333', '2019-04-05', '2019-04-05', '3333', '444', '4444', '11111', 'TesteMudar 2', '5 Dias', '2019-12-13', 0),
(13, '5654446', 'rtjhrthrt', 'grhrthrt', 'Geografia', 'gerger', '2019-01-01', '2019-05-28', 'ergerg', 'ergergerg', 'ergereger', 'ergerger', 'TesteMudar 2', '5 Dias', '2019-11-06', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `addprotocolos`
--

CREATE TABLE `addprotocolos` (
  `Id` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `atendente` varchar(255) CHARACTER SET utf8 NOT NULL,
  `curso` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `historico` varchar(255) CHARACTER SET utf8 NOT NULL,
  `data` date NOT NULL,
  `observacao` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `numproto` varchar(255) NOT NULL,
  `ra` varchar(50) NOT NULL,
  `obsevacaocolegiado` varchar(255) NOT NULL,
  `cursocolegiado` varchar(255) NOT NULL,
  `encaminhamento` varchar(255) NOT NULL,
  `encaminhamentocolegiado` varchar(255) NOT NULL,
  `vencimento` varchar(255) NOT NULL,
  `dataretirada` date NOT NULL,
  `hora` time NOT NULL,
  `datavencimento` date NOT NULL,
  `statusColeg` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `addprotocolos`
--

INSERT INTO `addprotocolos` (`Id`, `nome`, `atendente`, `curso`, `historico`, `data`, `observacao`, `numproto`, `ra`, `obsevacaocolegiado`, `cursocolegiado`, `encaminhamento`, `encaminhamentocolegiado`, `vencimento`, `dataretirada`, `hora`, `datavencimento`, `statusColeg`, `status`) VALUES
(1231437, '7867868', '46755', 'Sistema de InformaÃ§Ã£o', 'fwwe', '2019-11-05', 'fwefwe', '1', 'fwefwe', 'wfef', 'MMM', 'TesteMudar 2', 'TesteMudar', '3 dias', '5555-12-25', '01:06:00', '2019-08-10', 1, 1),
(1231455, 'vococococococoococo', 'gggg', 'Sistemas de InformaÃ§Ã£o', '111441411414', '2019-01-13', 'wefdwefwe', '2', '10-92998', 'fwewefwef', 'Geografia', 'Teste 3', 'TesteMudar 2', '3 dias', '2019-09-02', '18:00:00', '2019-02-14', 0, 1),
(1231457, 'pedoropjeoirjo', 'vwervwevw', 'Sistemas de InformaÃ§Ã£o', 'etreter', '2019-12-06', 'terter', '5', 'etrtre', 'eteee', 'Direito', 'TesteMudar', 'TesteMudar 2', '3 dias', '2019-09-08', '17:00:00', '2019-12-09', 1, 0),
(1231458, 'enrjklgnerh', 'opwekporiwepojk', 'Sistemas de InformaÃ§Ã£o', 'grerger', '2019-11-02', 'gergerre', '6', '1-9390283', 'egeger', 'Sistemas de InformaÃ§Ã£o', 'TesteMudar', 'TesteMudar', '3 dias', '2008-08-08', '05:22:00', '2019-11-05', 1, 0),
(1231459, 'ufghcgh', 'tujfyed', 'Geografia', 'ergergre', '2019-02-22', 'gergerg', '7', '15-987987', 'gergerger', 'Geografia', 'TesteMudar', 'Teste 3', '3 dias', '2019-05-04', '22:00:00', '2019-02-25', 0, 1),
(1231460, 'eue', 'eu', 'Sistemas de InformaÃ§Ã£o', 'fwewefwe', '2019-05-01', 'fwefwefwe', '4', '43534', 'werwererwe', 'Sistemas de InformaÃ§Ã£o', 'Teste 3', 'Teste 3', '3 dias', '2019-12-05', '12:00:00', '2019-05-04', 0, 1),
(1231461, 'grtgrtgrt', 'grrtgrtgrt', 'Sistemas de InformaÃ§Ã£o', 'ffw', '2019-02-08', 'fwefwefwef', '3', '34534534', 'gregerger', 'Sistemas de InformaÃ§Ã£o', 'TesteMudar 2', 'Teste 3', '5 dias', '2019-03-12', '12:12:00', '1970-01-06', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `curso` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `curso`) VALUES
(30, 'Geografia'),
(32, 'Sistemas de InformaÃ§Ã£o'),
(33, 'MMM'),
(34, 'Direito');

-- --------------------------------------------------------

--
-- Estrutura da tabela `encaminhamento`
--

CREATE TABLE `encaminhamento` (
  `id` int(11) NOT NULL,
  `encaminhamento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `encaminhamento`
--

INSERT INTO `encaminhamento` (`id`, `encaminhamento`) VALUES
(1, 'TesteMudar'),
(4, 'TesteMudar 2'),
(5, 'Teste 3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `login`, `senha`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacaodiplomas`
--

CREATE TABLE `solicitacaodiplomas` (
  `numproto` int(11) NOT NULL,
  `datasolicitada` date NOT NULL,
  `atendente` varchar(255) NOT NULL,
  `requerente` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `solicitacaodiplomas`
--

INSERT INTO `solicitacaodiplomas` (`numproto`, `datasolicitada`, `atendente`, `requerente`, `id`) VALUES
(4857834, '2019-04-05', 'gergergergergergerg', 'ergergerger', 2),
(8493656, '2019-04-05', 'WIHFIOWH', 'IUFWHEIUFWH', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addentregapos`
--
ALTER TABLE `addentregapos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addentregaprotocolos`
--
ALTER TABLE `addentregaprotocolos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addprotocolos`
--
ALTER TABLE `addprotocolos`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `encaminhamento`
--
ALTER TABLE `encaminhamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solicitacaodiplomas`
--
ALTER TABLE `solicitacaodiplomas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addentregapos`
--
ALTER TABLE `addentregapos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `addentregaprotocolos`
--
ALTER TABLE `addentregaprotocolos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `addprotocolos`
--
ALTER TABLE `addprotocolos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1231462;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `encaminhamento`
--
ALTER TABLE `encaminhamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `solicitacaodiplomas`
--
ALTER TABLE `solicitacaodiplomas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
