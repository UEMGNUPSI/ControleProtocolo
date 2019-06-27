-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Jun-2019 às 19:10
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
(2, '2019050001', 'PEDROKKKKKKKK FDP', 'admin', 'pedrooooo', '2', '2019-05-06', '2019-10-10', 'FKFFJFJNFJN', '', '', 'FJFJFJI', 'Secretaria Academica', '3 Dias', '2019-05-09', 0),
(7, '2019050003', 'jffjfjfjju', 'admin', 'pedrooooo', '2', '2019-05-06', '2019-10-10', 'jffnjnj', '', '', 'jfjfuj', 'Secretaria Academica', '5 Dias', '2019-05-11', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `addprotocolos`
--

CREATE TABLE `addprotocolos` (
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
  `status` tinyint(1) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `addprotocolos`
--

INSERT INTO `addprotocolos` (`nome`, `atendente`, `curso`, `historico`, `data`, `observacao`, `numproto`, `ra`, `obsevacaocolegiado`, `cursocolegiado`, `encaminhamento`, `encaminhamentocolegiado`, `vencimento`, `dataretirada`, `hora`, `datavencimento`, `statusColeg`, `status`, `Id`) VALUES
('sdsdsd', 'admin', 'Direito', 'sdfsd', '2019-06-27', 'sdfsdsd', '2019060008', '4444444444', 'ddd', 'Direito', 'Colegiado de Sistemas', '', '5 dias', '0000-00-00', '13:53:00', '2019-07-02', 0, 0, 8),
('vvv', 'admin', 'Direito', 'vv', '2019-06-27', 'vv', '2019060009', '4444', 'fff', 'Direito', 'Colegiado de Sistemas', '', '3 dias', '0000-00-00', '13:58:00', '2019-06-30', 0, 0, 9),
('gfghfjhf', 'admin', 'Direito', '444', '2019-06-27', 'dfg', '2019060010', '9565', 'ppppppppppppppppppppppppppppp', 'Direito', '6666666666', '', '3 dias', '0000-00-00', '13:59:00', '2019-06-30', 0, 0, 10);

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
(1, 'Direito');

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
(1, 'aaaaaaaaaaaaaaaaa'),
(2, 'Colegiado de Sistemas'),
(3, '6666666666');

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
(2019060001, '2019-04-05', 'admin', 'pedro henrique', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addentregaprotocolos`
--
ALTER TABLE `addentregaprotocolos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `addprotocolos`
--
ALTER TABLE `addprotocolos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `encaminhamento`
--
ALTER TABLE `encaminhamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `solicitacaodiplomas`
--
ALTER TABLE `solicitacaodiplomas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
