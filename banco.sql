--Criando Esquema
CREATE SCHEMA pet_shop_db ;


-- Tabela Usuarios 
CREATE TABLE pet_shop_db.usuario (
  idusuario INT NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(255) NOT NULL,
  senha VARCHAR(12) NULL,
  PRIMARY KEY (idusuario));

  -- Tabela Cliente
CREATE TABLE pet_shop_db.cliente(
    idCliente INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    
);

--Tabela Cliente--
CREATE TABLE `pet_shop_db`.`tb_clientes` (
  `id_cliente` INT NOT NULL AUTO_INCREMENT,
  `nm_cliente` VARCHAR(255) NOT NULL,
  `num_cpf` VARCHAR(45) NOT NULL,
  `num_tel1` INT NOT NULL,
  `num_tel2` INT NULL,
  `dt_nascimento` VARCHAR(45) NULL,
  `nm_email` VARCHAR(100) NOT NULL,
  `num_cep` VARCHAR(45) NOT NULL,
  `nm_rua` VARCHAR(255) NOT NULL,
  `num_rua` VARCHAR(40) NOT NULL,
  `nm_bairro` VARCHAR(60) NOT NULL,
  `nm_cidade` VARCHAR(255) NOT NULL,
  `nm_estado` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_cliente`, `num_cpf`));


