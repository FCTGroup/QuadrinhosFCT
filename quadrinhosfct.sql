-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2016 at 08:17 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quadrinhosfct`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `nome` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `editora`
--

CREATE TABLE `editora` (
  `nome` varchar(255) NOT NULL,
  `descricao` text,
  `endereco` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `formato`
--

CREATE TABLE `formato` (
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `genero`
--

CREATE TABLE `genero` (
  `nome` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `licenciador`
--

CREATE TABLE `licenciador` (
  `nome` varchar(255) NOT NULL,
  `site` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quadrinho`
--

CREATE TABLE `quadrinho` (
  `nome` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `data` date NOT NULL,
  `editora` int(11) NOT NULL,
  `licenciador` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `genero` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `num_paginas` int(11) NOT NULL,
  `formato` int(11) NOT NULL,
  `preco` int(11) NOT NULL,
  `capa` text NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `nome` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editora`
--
ALTER TABLE `editora`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formato`
--
ALTER TABLE `formato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `licenciador`
--
ALTER TABLE `licenciador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quadrinho`
--
ALTER TABLE `quadrinho`
  ADD PRIMARY KEY (`nome`,`numero`),
  ADD KEY `editora` (`editora`),
  ADD KEY `licenciador` (`licenciador`),
  ADD KEY `categoria` (`categoria`),
  ADD KEY `genero` (`genero`),
  ADD KEY `status` (`status`),
  ADD KEY `formato` (`formato`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `editora`
--
ALTER TABLE `editora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `formato`
--
ALTER TABLE `formato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `licenciador`
--
ALTER TABLE `licenciador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `quadrinho`
--
ALTER TABLE `quadrinho`
  ADD CONSTRAINT `categoria` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `editora` FOREIGN KEY (`editora`) REFERENCES `editora` (`id`),
  ADD CONSTRAINT `formato` FOREIGN KEY (`formato`) REFERENCES `formato` (`id`),
  ADD CONSTRAINT `genero` FOREIGN KEY (`genero`) REFERENCES `genero` (`id`),
  ADD CONSTRAINT `licenciador` FOREIGN KEY (`licenciador`) REFERENCES `licenciador` (`id`),
  ADD CONSTRAINT `status` FOREIGN KEY (`status`) REFERENCES `status` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
