-- Criando Esquema
CREATE SCHEMA pet_shop_db ;


-- Tabela Usuarios 
CREATE TABLE pet_shop_db.tb_usuario (
  idusuario INT NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(255) NOT NULL,
  senha VARCHAR(12) NULL,
  PRIMARY KEY (idusuario));

  -- Tabela Cliente
CREATE TABLE pet_shop_db.tb_cliente(
    idCliente INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    cpf int (16) NOT NULL,
    nascimento DATE NOT NULL,
    fone_1 INT(11) NOT NULL,
    fone_2 INT(11),
    email VARCHAR(60) NOT NULL,
    cep VARCHAR(8) NOT NULL,
    rua VARCHAR(200) NOT NULL,
    num INT(5) NOT NULL,
    bairro VARCHAR(200) NOT NULL,
    cidade VARCHAR(200) NOT NULL,
    estado VARCHAR(200) NOT NULL,
    PRIMARY KEY (idCliente)
    
);

-- Tabela Fornecedor
CREATE TABLE pet_shop_db.tb_fornecedor(
idFornecedor INT NOT NULL AUTO_INCREMENT,
codigo INT,
cnpj INT,
inc_estadual INT,
nome_empresa VARCHAR(200),
nome_fantasia VARCHAR(200),
logradouro VARCHAR(200),
numero INT,
complemento VARCHAR(200),
cep INT,
bairro VARCHAR(200),
municipio VARCHAR(200),
fone INT,
estado VARCHAR(200),
PRIMARY KEY (idFornecedor)
);

-- Tabela Produto
CREATE TABLE pet_shop_db.tb_produto(
idProduto INT NOT NULL AUTO_INCREMENT,
codigo INT,
descricao varchar(200),
nome_do_produto VARCHAR(200),
codigo_de_barras INT,
unidade_de_mediA VARCHAR(200),
valor_do_custo VARCHAR(200),
margem_de_lucro VARCHAR(200),
valor_de_venda varchar(200),
min_estoque VARCHAR(20),
max_estoque VARCHAR(200),
grupo VARCHAR(200),
fabricante VARCHAR(200),
PRIMARY KEY (idProduto)
);

select * from  tb_usuario;
insert into tb_usuario (usuario,senha) values ("Wellington", ("12345"));
select * from tb_usuario;


