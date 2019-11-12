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


