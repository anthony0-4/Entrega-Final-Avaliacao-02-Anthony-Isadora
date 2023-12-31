-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para trabalhoavaliativo02
CREATE DATABASE IF NOT EXISTS `trabalhoavaliativo02` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `trabalhoavaliativo02`;

-- Copiando estrutura para tabela trabalhoavaliativo02.funcionario
CREATE TABLE IF NOT EXISTS `funcionario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_comp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `idade` int NOT NULL DEFAULT '0',
  `habilidade` varchar(150) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela trabalhoavaliativo02.livraria
CREATE TABLE IF NOT EXISTS `livraria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rua` varchar(150) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `numero` int NOT NULL DEFAULT '0',
  `cidade` varchar(150) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `estado` varchar(150) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `estabelecimento` varchar(150) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela trabalhoavaliativo02.livro
CREATE TABLE IF NOT EXISTS `livro` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `paginas` double NOT NULL DEFAULT '0',
  `preco` float NOT NULL DEFAULT '0',
  `genero` varchar(100) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela trabalhoavaliativo02.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `telefone` int NOT NULL DEFAULT '0',
  `email` varchar(150) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `login` varchar(150) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `senha` varchar(150) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `c_senha` varchar(150) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Exportação de dados foi desmarcado.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
