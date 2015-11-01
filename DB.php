<?php
	
	require_once "ConexionDB.php";
			$conexion->query("


CREATE TABLE IF NOT EXISTS `Persona` (
  `IdPersona` INT NOT NULL COMMENT '',
  `nombre` VARCHAR(45) NULL COMMENT '',
  `edad` INT NULL COMMENT '',
  `sexo` VARCHAR(1) NULL COMMENT '',
  `direccion` VARCHAR(150) NULL COMMENT '',
  `estado_civil` VARCHAR(45) NULL COMMENT '',
  `hijos` INT NULL COMMENT '',
  PRIMARY KEY (`IdPersona`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Nutricion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Nutricion` (
  `idNutricion` INT NOT NULL COMMENT '',
  `peso` VARCHAR(45) NULL COMMENT '',
  `talla` VARCHAR(45) NULL COMMENT '',
  `imc` VARCHAR(45) NULL COMMENT '',
  `circunferencia_branquial` VARCHAR(45) NULL COMMENT '',
  `circunferencia_abdominal` VARCHAR(45) NULL COMMENT '',
  `circunferencia_Cadera` VARCHAR(45) NULL COMMENT '',
  `pliegue_tricipital` VARCHAR(45) NULL COMMENT '',
  `pliegue_branquial` VARCHAR(45) NULL COMMENT '',
  `pliegue_cadera` VARCHAR(45) NULL COMMENT '',
  `pliegue_muslo` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idNutricion`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Estomatologia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Estomatologia` (
  `idEstomatologia` INT NOT NULL COMMENT '',
  `facilitador` VARCHAR(45) NULL COMMENT '',
  `ayuna` VARCHAR(45) NULL COMMENT '',
  `tratamiento_medico` INT NULL COMMENT '',
  `tratamiento_medico_descripcion` VARCHAR(45) NULL COMMENT '',
  `enfermedad` VARCHAR(45) NULL COMMENT '',
  `enfermedad_descripcion` VARCHAR(45) NULL COMMENT '',
  `alergias` VARCHAR(45) NULL COMMENT '',
  `alergias_descripcion` VARCHAR(45) NULL COMMENT '',
  `diagnostico` VARCHAR(1000) NULL COMMENT '',
  `tratamiento` VARCHAR(45) NULL COMMENT '',
  `nombre_supervisor` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idEstomatologia`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TerapiaFisica`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TerapiaFisica` (
  `idTerapiaFisica` INT NOT NULL COMMENT '',
  `historia_medica` VARCHAR(255) NULL COMMENT '',
  `precauciones` VARCHAR(255) NULL COMMENT '',
  `medicamento` VARCHAR(45) NULL COMMENT '',
  `historia_diagnostico` VARCHAR(255) NULL COMMENT '',
  `lugar_dolor` VARCHAR(45) NULL COMMENT '',
  `tipo_dolor` VARCHAR(45) NULL COMMENT '',
  `intensidad_dolor` VARCHAR(45) NULL COMMENT '',
  `tipo_paralisis` VARCHAR(45) NULL COMMENT '',
  `tono_muscular` VARCHAR(45) NULL COMMENT '',
  `musculo` VARCHAR(45) NULL COMMENT '',
  `comentario_radiografico` VARCHAR(45) NULL COMMENT '',
  `postura` VARCHAR(45) NULL COMMENT '',
  `limitaciones_ADV` VARCHAR(255) NULL COMMENT '',
  `prueba_especial` VARCHAR(255) NULL COMMENT '',
  `comentario` VARCHAR(45) NULL COMMENT '',
  `diagnostico_clinico` VARCHAR(255) NULL COMMENT '',
  PRIMARY KEY (`idTerapiaFisica`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Estacion1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Estacion1` (
  `idEstacion1` INT NOT NULL COMMENT '',
  `pat_dm` VARCHAR(45) NULL COMMENT '',
  `pat_hta` VARCHAR(45) NULL COMMENT '',
  `pat_alergias` VARCHAR(45) NULL COMMENT '',
  `pat_cirugias` VARCHAR(45) NULL COMMENT '',
  `pat_otros` VARCHAR(45) NULL COMMENT '',
  `nop_cafe` VARCHAR(45) NULL COMMENT '',
  `nop_te` VARCHAR(45) NULL COMMENT '',
  `nop_drogas` VARCHAR(45) NULL COMMENT '',
  `nop_alcohol` VARCHAR(45) NULL COMMENT '',
  `nop_otros` VARCHAR(45) NULL COMMENT '',
  `medicamentos` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idEstacion1`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Estacion2`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Estacion2` (
  `idEstacion2` INT NOT NULL COMMENT '',
  `TA` VARCHAR(45) NULL COMMENT '',
  `FC` VARCHAR(45) NULL COMMENT '',
  `FR` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idEstacion2`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Estacion3`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Estacion3` (
  `idEstacion3` INT NOT NULL COMMENT '',
  `glucometria` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idEstacion3`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Estacion4`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Estacion4` (
  `idEstacion4` INT NOT NULL COMMENT '',
  `Evaluacion` VARCHAR(255) NULL COMMENT '',
  PRIMARY KEY (`idEstacion4`)  COMMENT '')
ENGINE = InnoDB;




			");



?>