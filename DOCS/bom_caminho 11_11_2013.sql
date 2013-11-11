-- phpMyAdmin SQL Dump
-- version 4.0.0
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 11-Nov-2013 às 16:49
-- Versão do servidor: 5.1.72-0ubuntu0.10.04.1
-- versão do PHP: 5.3.2-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bom_caminho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `composicao_familiar`
--

CREATE TABLE IF NOT EXISTS `composicao_familiar` (
  `codigo` int(3) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `grau_parentesco` int(3) NOT NULL,
  `escola` varchar(150) DEFAULT NULL,
  `data_nascimento` varchar(10) DEFAULT NULL,
  `trabalha` varchar(100) DEFAULT NULL,
  `renda` decimal(5,0) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `grupo_casa` varchar(100) DEFAULT NULL,
  `gestante` varchar(1) DEFAULT NULL,
  `deficiencia` varchar(1) DEFAULT NULL,
  `vicio` varchar(150) DEFAULT NULL,
  `atend_medico_especial` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `grau_parentesco` (`grau_parentesco`),
  KEY `grau_parentesco_2` (`grau_parentesco`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cor_ubs`
--

CREATE TABLE IF NOT EXISTS `cor_ubs` (
  `codigo` int(3) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo` (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cor_ubs`
--

INSERT INTO `cor_ubs` (`codigo`, `descricao`) VALUES
(1, 'Azul'),
(2, 'Vermelho'),
(3, 'Verde');

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolaridade`
--

CREATE TABLE IF NOT EXISTS `escolaridade` (
  `codigo` int(3) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `escolaridade`
--

INSERT INTO `escolaridade` (`codigo`, `descricao`) VALUES
(1, 'Ensino Médio Incompleto'),
(2, 'Ensino Médio Completo'),
(3, 'Ensino Superior Incompleto'),
(4, 'Ensino Superior Completo'),
(5, 'Pós-Graduado'),
(6, 'Mestrado'),
(7, 'Doutorado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado_civil`
--

CREATE TABLE IF NOT EXISTS `estado_civil` (
  `codigo` int(3) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `estado_civil`
--

INSERT INTO `estado_civil` (`codigo`, `descricao`) VALUES
(1, 'Solteiro'),
(2, 'Casado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_cadastral`
--

CREATE TABLE IF NOT EXISTS `ficha_cadastral` (
  `codigo` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `rg` varchar(30) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `naturalidade` varchar(2) DEFAULT NULL,
  `estado_civil` int(3) DEFAULT NULL,
  `escolaridade` int(3) DEFAULT NULL,
  `trabalha` varchar(1) DEFAULT NULL,
  `tipo_trabalho` int(3) DEFAULT NULL,
  `profissao_procura_de` varchar(100) DEFAULT NULL,
  `religiao` int(3) DEFAULT NULL,
  `frequenta` varchar(1) DEFAULT NULL,
  `problema_espirita` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `endereco` varchar(250) DEFAULT NULL,
  `numero_casa` varchar(6) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `pt_referencia` varchar(100) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(80) DEFAULT NULL,
  `CEP` varchar(10) DEFAULT NULL,
  `telefone1` varchar(14) DEFAULT NULL,
  `telefone2` varchar(14) DEFAULT NULL,
  `residencia` int(3) DEFAULT NULL,
  `tipo_residencia` int(3) DEFAULT NULL,
  `tipo_construcao` int(3) DEFAULT NULL,
  `situacao_residencia` int(3) DEFAULT NULL,
  `numero_comodos` int(3) DEFAULT NULL,
  `renda` int(3) DEFAULT NULL,
  `outra_renda` int(3) DEFAULT NULL,
  `de_onde` varchar(100) DEFAULT NULL,
  `veiculo` int(3) DEFAULT NULL,
  `qtde_filhos` int(3) DEFAULT NULL,
  `unico_pai` varchar(1) DEFAULT NULL,
  `nome_pai_1` varchar(250) DEFAULT NULL,
  `nome_pai_2` varchar(250) DEFAULT NULL,
  `necessidade_basica` varchar(250) DEFAULT NULL,
  `cor_ubs` int(3) DEFAULT NULL,
  `ubs_acessa` varchar(200) DEFAULT NULL,
  `qtde_moram_resid` int(11) DEFAULT NULL,
  `atend_medico` varchar(250) DEFAULT NULL,
  `objetivo_cadastro` varchar(200) DEFAULT NULL,
  `visita` varchar(1) DEFAULT NULL,
  `acompanhamento` varchar(1) DEFAULT NULL,
  `comentario` text,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `rg` (`rg`),
  UNIQUE KEY `cpf` (`cpf`),
  KEY `estado_civil` (`estado_civil`),
  KEY `escolaridade` (`escolaridade`),
  KEY `tipo_trabalho` (`tipo_trabalho`),
  KEY `residencia` (`residencia`,`tipo_construcao`,`situacao_residencia`,`renda`,`outra_renda`,`veiculo`),
  KEY `renda` (`renda`),
  KEY `outra_renda` (`outra_renda`),
  KEY `situacao_residencia` (`situacao_residencia`),
  KEY `tipo_construcao` (`tipo_construcao`),
  KEY `cor_ubs` (`cor_ubs`),
  KEY `religiao` (`religiao`),
  KEY `tipo_residencia` (`tipo_residencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `ficha_cadastral`
--

INSERT INTO `ficha_cadastral` (`codigo`, `nome`, `data_nascimento`, `rg`, `cpf`, `naturalidade`, `estado_civil`, `escolaridade`, `trabalha`, `tipo_trabalho`, `profissao_procura_de`, `religiao`, `frequenta`, `problema_espirita`, `email`, `facebook`, `endereco`, `numero_casa`, `complemento`, `pt_referencia`, `bairro`, `cidade`, `CEP`, `telefone1`, `telefone2`, `residencia`, `tipo_residencia`, `tipo_construcao`, `situacao_residencia`, `numero_comodos`, `renda`, `outra_renda`, `de_onde`, `veiculo`, `qtde_filhos`, `unico_pai`, `nome_pai_1`, `nome_pai_2`, `necessidade_basica`, `cor_ubs`, `ubs_acessa`, `qtde_moram_resid`, `atend_medico`, `objetivo_cadastro`, `visita`, `acompanhamento`, `comentario`) VALUES
(10, 'Alberto Marianno', '1986-02-12', '0915733358', '109.737.877-24', 'RJ', 1, 4, 'S', 1, 'Analista de Sistemas', 1, 'N', 'nÃ£o', 'amarianno@gmail.com', 'amarianno', 'av manoel pedro pimentel', '205', 'bl a ap 34', 'shopping uniÃ£o', 'Continental', 'Osasco', '06.020-194', '(11)98187-8473', '(99)99999-9999', NULL, 3, 1, 2, 2, 1, 1, '', 2, 0, '', '', '', 'arroz', 3, 'osasco', 1, 'bronquite', 'teste', 'S', 'N', 'sistema foda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grau_parestesco`
--

CREATE TABLE IF NOT EXISTS `grau_parestesco` (
  `codigo` int(3) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `grau_parestesco`
--

INSERT INTO `grau_parestesco` (`codigo`, `descricao`) VALUES
(1, 'Filho'),
(2, 'Irmão(a)'),
(3, 'Pai'),
(4, 'Mãe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `outra_renda`
--

CREATE TABLE IF NOT EXISTS `outra_renda` (
  `codigo` int(3) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `outra_renda`
--

INSERT INTO `outra_renda` (`codigo`, `descricao`) VALUES
(1, 'Nenhuma'),
(2, 'Aposentadoria'),
(3, 'Despesas'),
(4, 'Ganha Cesta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `religiao`
--

CREATE TABLE IF NOT EXISTS `religiao` (
  `codigo` int(3) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `religiao`
--

INSERT INTO `religiao` (`codigo`, `descricao`) VALUES
(1, 'Nenhuma'),
(2, 'Budismo'),
(3, 'Cristianismo'),
(4, 'Catolicismo'),
(5, 'Protestantismo'),
(6, 'Testemunhas de Jeová'),
(7, 'Espiritismo'),
(8, 'Islamismo'),
(9, 'Judaísmo'),
(10, 'Religiões afro-brasileiras e indígenas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `renda`
--

CREATE TABLE IF NOT EXISTS `renda` (
  `codigo` int(3) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `renda`
--

INSERT INTO `renda` (`codigo`, `descricao`) VALUES
(1, 'Própria'),
(2, 'Renda Conjugê'),
(3, 'Bolsa Família'),
(4, 'Renda Mínima');

-- --------------------------------------------------------

--
-- Estrutura da tabela `residencia`
--

CREATE TABLE IF NOT EXISTS `residencia` (
  `codigo` int(3) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `residencia`
--

INSERT INTO `residencia` (`codigo`, `descricao`) VALUES
(1, 'Própria'),
(2, 'Invasão'),
(3, 'Alugada'),
(4, 'Aluguel Social'),
(5, 'Morador de rua');

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacao_residencia`
--

CREATE TABLE IF NOT EXISTS `situacao_residencia` (
  `codigo` int(3) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `situacao_residencia`
--

INSERT INTO `situacao_residencia` (`codigo`, `descricao`) VALUES
(1, 'Nova'),
(2, 'Antiga'),
(3, 'Oferece Risco');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_construcao`
--

CREATE TABLE IF NOT EXISTS `tipo_construcao` (
  `codigo` int(3) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tipo_construcao`
--

INSERT INTO `tipo_construcao` (`codigo`, `descricao`) VALUES
(1, 'Alvenaria'),
(2, 'Madeira'),
(3, 'Meio a Meio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_residencia`
--

CREATE TABLE IF NOT EXISTS `tipo_residencia` (
  `codigo` int(3) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tipo_residencia`
--

INSERT INTO `tipo_residencia` (`codigo`, `descricao`) VALUES
(1, 'Própria'),
(2, 'Invasão'),
(3, 'Alugada'),
(4, 'Aluguel Social'),
(5, 'Morador de rua');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_trabalho`
--

CREATE TABLE IF NOT EXISTS `tipo_trabalho` (
  `codigo` int(3) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='guarda o tipo de trabalho de uma pessoa' AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tipo_trabalho`
--

INSERT INTO `tipo_trabalho` (`codigo`, `descricao`) VALUES
(1, 'Registrado'),
(2, 'Autônomo'),
(3, 'Não Trabalha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE IF NOT EXISTS `veiculo` (
  `codigo` int(3) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`codigo`, `descricao`) VALUES
(1, 'Não'),
(2, 'Novo Palio'),
(3, 'Palio'),
(4, 'Celta'),
(5, 'Meriva'),
(6, 'Camaro'),
(7, 'Golf'),
(8, 'Gol'),
(9, 'Fiat Uno'),
(10, 'Ford Ecosport');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `ficha_cadastral`
--
ALTER TABLE `ficha_cadastral`
  ADD CONSTRAINT `ficha_cadastral_ibfk_1` FOREIGN KEY (`estado_civil`) REFERENCES `estado_civil` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ficha_cadastral_ibfk_2` FOREIGN KEY (`escolaridade`) REFERENCES `escolaridade` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ficha_cadastral_ibfk_3` FOREIGN KEY (`tipo_trabalho`) REFERENCES `tipo_trabalho` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ficha_cadastral_ibfk_4` FOREIGN KEY (`residencia`) REFERENCES `residencia` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ficha_cadastral_ibfk_5` FOREIGN KEY (`tipo_construcao`) REFERENCES `tipo_construcao` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ficha_cadastral_ibfk_6` FOREIGN KEY (`situacao_residencia`) REFERENCES `situacao_residencia` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ficha_cadastral_ibfk_7` FOREIGN KEY (`renda`) REFERENCES `renda` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ficha_cadastral_ibfk_8` FOREIGN KEY (`outra_renda`) REFERENCES `outra_renda` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ficha_cadastral_ibfk_9` FOREIGN KEY (`religiao`) REFERENCES `religiao` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
