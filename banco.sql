--Criando Esquema
CREATE SCHEMA pet_shop_db ;


-- Tabela Usuarios 
CREATE TABLE `tb_usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--Tabela Cliente--
CREATE TABLE `tb_clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nm_cliente` varchar(255) NOT NULL,
  `num_cpf` varchar(45) NOT NULL,
  `num_tel1` int(11) NOT NULL,
  `num_tel2` int(11) DEFAULT NULL,
  `dt_nascimento` varchar(45) DEFAULT NULL,
  `nm_email` varchar(100) NOT NULL,
  `num_cep` varchar(45) NOT NULL,
  `nm_rua` varchar(255) NOT NULL,
  `num_rua` varchar(40) NOT NULL,
  `nm_bairro` varchar(60) NOT NULL,
  `nm_cidade` varchar(255) NOT NULL,
  `nm_estado` varchar(100) NOT NULL,
  PRIMARY KEY (`id_cliente`,`num_cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


  --TABELA FORNCEDOR--
CREATE TABLE `tb_fornecedor` (
  `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `cod_impresa` int(11) DEFAULT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `num_inscricao_estadual` int(11) DEFAULT NULL,
  `nm_empresa` varchar(100) DEFAULT NULL,
  `nm_fantasia` varchar(45) DEFAULT NULL,
  `nm_rua` varchar(45) DEFAULT NULL,
  `num_endereco` int(11) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `num_cep` int(11) DEFAULT NULL,
  `nm_bairro` varchar(100) DEFAULT NULL,
  `nm_municipio` varchar(100) DEFAULT NULL,
  `num_telefone` varchar(45) DEFAULT NULL,
  `nm_estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_fornecedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--TABELA PRODUTO--
CREATE TABLE `tb_produto` (
  `cod_produto` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(150) DEFAULT NULL,
  `nm_produto` varchar(100) NOT NULL,
  `cod_barras` varchar(50) DEFAULT NULL,
  `und_medida` varchar(45) DEFAULT NULL,
  `vl_custo` float NOT NULL,
  `mg_lucro` float DEFAULT NULL,
  `vl_venda` float NOT NULL,
  `id_forncedor_fk` int(11) NOT NULL,
  PRIMARY KEY (`cod_produto`),
  KEY `id_fornecedor` (`id_forncedor_fk`),
  CONSTRAINT `id_fornecedor` FOREIGN KEY (`id_forncedor_fk`) REFERENCES `tb_fornecedor` (`id_fornecedor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--TABELA AUXILIAR TESTE  PRODUTOS X FORNECEDOR--
CREATE TABLE tb_aux_produto_fornecedor(
	id int not null auto_increment,
    cod_produto_fk int,
    id_fornecedor_fk int,
    primary key (id),
    foreign key (cod_produto_fk) references tb_produto(cod_produto),
    foreign key (id_fornecedor_fk) references tb_fornecedor(id_fornecedor)
) default charset = utf8;


/*PADRÃO DAS MENSAGENS DE ERROR*/
-- 0 = ACONTECEU UM ERROR NO 1 PASSO  ( NÃO EXISTENCIA DE $POST $GTE $SESSIOM)
-- 1 = ACONTECEU ALGUM ERRO NA CONEXÃO AO BANCO OU EXECUÇAÕ DO SQL .
-- 3 = SUCESSO !!!