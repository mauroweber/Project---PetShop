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

  --TABELA FORNCEDOR--

  CREATE TABLE `pet_shop_db`.`tb_fornecedor` (
  `id_fornecedor` INT NOT NULL AUTO_INCREMENT,
  `cod_impresa` INT NULL,
  `cnpj` VARCHAR(45) NULL,
  `num_inscricao_estadual` INT NULL,
  `nm_empresa` VARCHAR(100) NULL,
  `nm_fantasia` VARCHAR(45) NULL,
  `nm_rua` VARCHAR(45) NULL,
  `num_endereco` INT NULL,
  `complemento` VARCHAR(45) NULL,
  `num_cep` INT NULL,
  `nm_bairro` VARCHAR(100) NULL,
  `nm_municipio` VARCHAR(100) NULL,
  `num_telefone` VARCHAR(45) NULL,
  `nm_estado` VARCHAR(45) NULL,
  PRIMARY KEY (`id_fornecedor`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

--TABELA PRODUTO--
CREATE TABLE `pet_shop_db`.`tb_produto` (
  `cod_produto` INT NOT NULL,
  `descricao` VARCHAR(150) NULL,
  `nm_produto` VARCHAR(100) NOT NULL,
  `cod_barras` VARCHAR(50) NULL,
  `und_medida` VARCHAR(45) NULL,
  `vl_custo` FLOAT NOT NULL,
  `mg_lucro` FLOAT NULL,
  `vl_venda` FLOAT NOT NULL,
  `id_forncedor_fk` INT NOT NULL,
  PRIMARY KEY (`cod_produto`),
  CONSTRAINT `id_fornecedor`
    FOREIGN KEY (`id_forncedor_fk`)
    REFERENCES `pet_shop_db`.`tb_fornecedor` (`id_fornecedor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);

