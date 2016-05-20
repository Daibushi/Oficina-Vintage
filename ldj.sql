-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Maio-2016 às 22:52
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ldj`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(14) NOT NULL,
  `datanasc` varchar(14) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `idade` varchar(100) NOT NULL,
  `cep` int(8) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `telefone` int(13) NOT NULL,
  `celular` int(13) NOT NULL,
  `cpf_cnpj` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `pedido` int(11) NOT NULL,
  `codpessoa` int(11) NOT NULL,
  `codprod` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `codprod` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `preco` double NOT NULL,
  `tiponegocio` int(11) NOT NULL,
  `Imagem` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`codprod`, `tipo`, `nome`, `preco`, `tiponegocio`, `Imagem`, `link`) VALUES
(1, 'Caneca', 'Caneca pezinho de cachorro', 50, 1, '"img/canecacachorro.jpg"', 'itemunico.php?id=1'),
(2, 'Caneca', 'Caneca dart vader', 25, 0, '"img/dartneca.jpg"', 'itemunico.php?id=2'),
(3, 'toalha', 'Tolha para criança Ioda', 70, 1, 'img/iodalha.jpg', 'itemunico.php?id=3'),
(4, 'Mobilia', 'Mesa de centro cubo mágico', 150, 1, '"img/magiccube.jpg"', 'itemunico.php?id=4'),
(5, 'Decoração', 'Interruptor Harry Potter', 10, 1, '"img/interruptorpotter.jpg"', 'itemunico.php?id=5'),
(6, 'decoracao', 'Decoração de câmera papel higiênico', 20, 1, '"img/papelfotografico.jpg"', 'itemunico.php?id=6'),
(7, 'cozinha', 'Caneca StarWars R2d2', 30, 1, '"img/neca2o2.jpg"', 'itemunico.php?id=7');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `login` varchar(30) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `login`, `senha`) VALUES
(0000000069, 'Miriam', '08071997'),
(0000000068, 'jader', '123'),
(0000000067, 'Miriam', '08071997'),
(0000000066, 'jader', '123'),
(0000000065, 'Miriam', '08071997'),
(0000000064, 'jader', '123'),
(0000000063, 'Miriam', '08071997'),
(0000000062, 'jader', '123'),
(0000000061, 'Miriam', '08071997'),
(0000000060, 'jader', '123'),
(0000000059, 'jader', '1'),
(0000000001, 'jader', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`pedido`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`codprod`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `pedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `codprod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
