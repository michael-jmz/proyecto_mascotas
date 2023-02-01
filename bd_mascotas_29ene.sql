-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema pets_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pets_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pets_db` DEFAULT CHARACTER SET utf8 ;
USE `pets_db` ;

-- -----------------------------------------------------
-- Table `pets_db`.`rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pets_db`.`rol` (
  `rol_id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`rol_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pets_db`.`personal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pets_db`.`personal` (
  `persona_id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `apellido` VARCHAR(50) NULL,
  `correo` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `direccion` VARCHAR(100) NULL DEFAULT NULL,
  `cedula` INT(20) NULL,
  `fecha_creacion` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `rol_id` INT(11) NOT NULL,
  PRIMARY KEY (`persona_id`),
  INDEX `fk_personal_rol1_idx` (`rol_id` ASC) ,
  CONSTRAINT `fk_personal_rol1`
    FOREIGN KEY (`rol_id`)
    REFERENCES `pets_db`.`rol` (`rol_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 67
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pets_db`.`razas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pets_db`.`razas` (
  `raza_id` INT(11) NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`raza_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pets_db`.`mascotas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pets_db`.`mascotas` (
  `mascota_id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `edad` INT(11) NOT NULL,
  `estado_mascota` TINYINT(1) NOT NULL,
  `raza_id` INT(11) NOT NULL,
  PRIMARY KEY (`mascota_id`),
  INDEX `fk_mascotas_razas1_idx` (`raza_id` ASC) ,
  CONSTRAINT `fk_mascotas_razas1`
    FOREIGN KEY (`raza_id`)
    REFERENCES `pets_db`.`razas` (`raza_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pets_db`.`mascota_personal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pets_db`.`mascota_personal` (
  `mascota_peronsal_id` INT(11) NOT NULL AUTO_INCREMENT,
  `mascota_id` INT(11) NOT NULL,
  `persona_id` INT(11) NOT NULL,
  PRIMARY KEY (`mascota_peronsal_id`),
  INDEX `mastocas_mascota_personal_fk` (`mascota_id` ASC) ,
  INDEX `fk_mascota_personal_personal1_idx` (`persona_id` ASC) ,
  CONSTRAINT `fk_mascota_personal_personal1`
    FOREIGN KEY (`persona_id`)
    REFERENCES `pets_db`.`personal` (`persona_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `mastocas_mascota_personal_fk`
    FOREIGN KEY (`mascota_id`)
    REFERENCES `pets_db`.`mascotas` (`mascota_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 42
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pets_db`.`estados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pets_db`.`estados` (
  `estado_id` INT(11) NOT NULL AUTO_INCREMENT,
  `estado` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`estado_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pets_db`.`postulaciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pets_db`.`postulaciones` (
  `postulaciones_id` INT NOT NULL AUTO_INCREMENT,
  `fecha_postulacion` TIMESTAMP NOT NULL,
  `descripcion` VARCHAR(60) NULL,
  `estado_id` INT(11) NOT NULL,
  `mascota_id` INT(11) NOT NULL,
  `persona_id` INT(11) NOT NULL,
  PRIMARY KEY (`postulaciones_id`),
  INDEX `fk_postulaciones_mascotas1_idx` (`mascota_id` ASC) ,
  INDEX `fk_postulaciones_personal1_idx` (`persona_id` ASC) ,
  INDEX `fk_postulaciones_estado1_idx` (`estado_id` ASC) ,
  CONSTRAINT `fk_postulaciones_mascotas1`
    FOREIGN KEY (`mascota_id`)
    REFERENCES `pets_db`.`mascotas` (`mascota_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_postulaciones_personal1`
    FOREIGN KEY (`persona_id`)
    REFERENCES `pets_db`.`personal` (`persona_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_postulaciones_estado1`
    FOREIGN KEY (`estado_id`)
    REFERENCES `pets_db`.`estados` (`estado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
