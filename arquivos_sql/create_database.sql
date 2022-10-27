-- MySQL Script generated by MySQL Workbench
-- Thu Oct 27 10:57:02 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema CLIENTES_CONTATOS
-- -----------------------------------------------------
-- Um banco com clientes e contatos!
DROP SCHEMA IF EXISTS `CLIENTES_CONTATOS` ;

-- -----------------------------------------------------
-- Schema CLIENTES_CONTATOS
--
-- Um banco com clientes e contatos!
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `CLIENTES_CONTATOS` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ;
SHOW WARNINGS;
USE `CLIENTES_CONTATOS` ;

-- -----------------------------------------------------
-- Table `cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cliente` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cod_cliente` BIGINT NOT NULL,
  `razao_social` VARCHAR(100) NOT NULL,
  `nome_fantasia` VARCHAR(50) NOT NULL,
  `endereco` VARCHAR(100) NULL,
  `complemento` VARCHAR(50) NULL,
  `bairro` VARCHAR(50) NULL,
  `cidade` VARCHAR(50) NULL,
  `estado` CHAR(2) NULL,
  `data_inclusao` DATETIME NULL,
  PRIMARY KEY (`cod_cliente`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `contato`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `contato` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `contato` (
  `cod_contato` INT NOT NULL,
  `cod_cliente` BIGINT NOT NULL,
  `nome_contato` VARCHAR(100) NOT NULL,
  `telefone_1` CHAR(13) NULL,
  `telefone_2` CHAR(13) NULL,
  `email` VARCHAR(50) NULL,
  PRIMARY KEY (`cod_contato`, `cod_cliente`))
ENGINE = InnoDB;

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;