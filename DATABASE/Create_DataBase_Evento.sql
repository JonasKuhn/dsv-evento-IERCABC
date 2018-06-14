# ---------------------------------------------------------------------- #
# Script generated with: DeZign for Databases v6.2.1                     #
# Target DBMS:           MySQL 5                                         #
# Project file:          Evento - database_new.dez                       #
# Project name:                                                          #
# Author:                                                                #
# Script type:           Database creation script                        #
# Created on:            2018-06-11 17:55                                #
# ---------------------------------------------------------------------- #

# ---------------------------------------------------------------------- #
# Nome do Banco de Dados                                                 #
# CREATE DATABASE base_evento_suino;                                     #
# ---------------------------------------------------------------------- #

# ---------------------------------------------------------------------- #
# Tables                                                                 #
# ---------------------------------------------------------------------- #

# ---------------------------------------------------------------------- #
# Add table "tb_evento"                                                  #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_evento` (
    `cod_evento` INTEGER NOT NULL AUTO_INCREMENT,
    `nome_evento` VARCHAR(200) NOT NULL,
    `data_evento` DATETIME NOT NULL,
    `organizacao_evento` VARCHAR(200),
    `cod_localizacao` INTEGER,
    `cod_cardapio` INTEGER,
    `cod_usuario` INTEGER,
    CONSTRAINT `PK_tb_evento` PRIMARY KEY (`cod_evento`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_localizacao"                                             #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_localizacao` (
    `cod_localizacao` INTEGER NOT NULL AUTO_INCREMENT,
    `nome_rua` VARCHAR(100),
    `numero` VARCHAR(40),
    `cod_cidade` INTEGER,
    CONSTRAINT `PK_tb_localizacao` PRIMARY KEY (`cod_localizacao`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_cidade"                                                  #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_cidade` (
    `cod_cidade` INTEGER NOT NULL AUTO_INCREMENT,
    `nome_cidade` VARCHAR(200),
    `cod_estado` INTEGER,
    CONSTRAINT `PK_tb_cidade` PRIMARY KEY (`cod_cidade`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_estado"                                                  #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_estado` (
    `cod_estado` INTEGER NOT NULL AUTO_INCREMENT,
    `nome_estado` VARCHAR(50) NOT NULL,
    `uf` VARCHAR(5) NOT NULL,
    CONSTRAINT `PK_tb_estado` PRIMARY KEY (`cod_estado`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_programacao"                                             #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_programacao` (
    `cod_programacao` INTEGER NOT NULL AUTO_INCREMENT,
    `titulo_programacao` VARCHAR(100) NOT NULL,
    `descricao_programacao` VARCHAR(10000),
    `hora_inicio` TIME,
    `hora_fim` TIME,
    `local_programacao` VARCHAR(40),
    `cod_evento` INTEGER,
    CONSTRAINT `PK_tb_programacao` PRIMARY KEY (`cod_programacao`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_item"                                                    #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_item` (
    `cod_item` INTEGER NOT NULL AUTO_INCREMENT,
    `titulo_item` VARCHAR(50),
    `descricao_item` VARCHAR(1000),
    `valor_item` FLOAT(3,2),
    `obs_item` VARCHAR(100),
    `hora_inicio` TIME,
    `hora_fim` TIME,
    `cod_programacao` INTEGER,
    `cod_imagem` INTEGER,
    CONSTRAINT `PK_tb_item` PRIMARY KEY (`cod_item`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_sobre"                                                   #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_sobre` (
    `cod_sobre` INTEGER NOT NULL AUTO_INCREMENT,
    `titulo_sobre` VARCHAR(100),
    `descricao_sobre` VARCHAR(10000),
    `cod_imagem` INTEGER,
    `cod_evento` INTEGER,
    CONSTRAINT `PK_tb_sobre` PRIMARY KEY (`cod_sobre`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_img"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_img` (
    `cod_imagem` INTEGER NOT NULL AUTO_INCREMENT,
    `nome_img` VARCHAR(100),
    `tipo_img` VARCHAR(4),
    `titulo_img` VARCHAR(50),
    `extensao_img` VARCHAR(4),
    `data_img` DATE,
    `cod_contato` INTEGER,
    CONSTRAINT `PK_tb_img` PRIMARY KEY (`cod_imagem`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_contato"                                                 #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_contato` (
    `cod_contato` INTEGER NOT NULL AUTO_INCREMENT,
    `nome_contato` VARCHAR(100),
    `telefone_contato` VARCHAR(40),
    `email_contato` VARCHAR(50),
    `cod_localizacao` INTEGER,
    CONSTRAINT `PK_tb_contato` PRIMARY KEY (`cod_contato`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_evento_img"                                              #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_evento_img` (
    `cod_evento_img` INTEGER NOT NULL AUTO_INCREMENT,
    `cod_evento` INTEGER,
    `cod_imagem` INTEGER,
    CONSTRAINT `PK_tb_evento_img` PRIMARY KEY (`cod_evento_img`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_local_venda"                                             #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_local_venda` (
    `cod_local_venda` INTEGER NOT NULL AUTO_INCREMENT,
    `cod_contato` INTEGER,
    `cod_evento` INTEGER,
    CONSTRAINT `PK_tb_local_venda` PRIMARY KEY (`cod_local_venda`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_oraganizador"                                            #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_oraganizador` (
    `cod_organizadores` INTEGER NOT NULL AUTO_INCREMENT,
    `descricao_organizador` VARCHAR(100),
    `cod_contato` INTEGER,
    `cod_evento` INTEGER,
    CONSTRAINT `PK_tb_oraganizador` PRIMARY KEY (`cod_organizadores`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_cardapio"                                                #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_cardapio` (
    `cod_cardapio` INTEGER NOT NULL AUTO_INCREMENT,
    `titulo_cardapio` VARCHAR(40),
    `obs_cardapio` VARCHAR(40),
    CONSTRAINT `PK_tb_cardapio` PRIMARY KEY (`cod_cardapio`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_alimento_bebida"                                         #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_alimento_bebida` (
    `cod_alimento_bebida` INTEGER NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(100),
    `complemento` VARCHAR(100),
    `valor` FLOAT(3,2),
    `cod_cardapio` INTEGER,
    `cod_imagem` INTEGER,
    CONSTRAINT `PK_tb_alimento_bebida` PRIMARY KEY (`cod_alimento_bebida`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_usuario"                                                 #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_usuario` (
    `cod_usuario` INTEGER NOT NULL AUTO_INCREMENT,
    `usuario_usuario` VARCHAR(40),
    `senha_usuario` VARCHAR(40),
    `cod_contato` INTEGER,
    CONSTRAINT `PK_tb_usuario` PRIMARY KEY (`cod_usuario`)
);

# ---------------------------------------------------------------------- #
# Foreign key constraints                                                #
# ---------------------------------------------------------------------- #

ALTER TABLE `tb_evento` ADD CONSTRAINT `tb_localizacao_tb_evento` 
    FOREIGN KEY (`cod_localizacao`) REFERENCES `tb_localizacao` (`cod_localizacao`);

ALTER TABLE `tb_evento` ADD CONSTRAINT `tb_cardapio_tb_evento` 
    FOREIGN KEY (`cod_cardapio`) REFERENCES `tb_cardapio` (`cod_cardapio`);

ALTER TABLE `tb_evento` ADD CONSTRAINT `tb_usuario_tb_evento` 
    FOREIGN KEY (`cod_usuario`) REFERENCES `tb_usuario` (`cod_usuario`);

ALTER TABLE `tb_localizacao` ADD CONSTRAINT `tb_cidade_tb_localizacao` 
    FOREIGN KEY (`cod_cidade`) REFERENCES `tb_cidade` (`cod_cidade`);

ALTER TABLE `tb_cidade` ADD CONSTRAINT `tb_estado_tb_cidade` 
    FOREIGN KEY (`cod_estado`) REFERENCES `tb_estado` (`cod_estado`);

ALTER TABLE `tb_programacao` ADD CONSTRAINT `tb_evento_tb_programacao` 
    FOREIGN KEY (`cod_evento`) REFERENCES `tb_evento` (`cod_evento`);

ALTER TABLE `tb_item` ADD CONSTRAINT `tb_programacao_tb_item` 
    FOREIGN KEY (`cod_programacao`) REFERENCES `tb_programacao` (`cod_programacao`);

ALTER TABLE `tb_item` ADD CONSTRAINT `tb_img_tb_item` 
    FOREIGN KEY (`cod_imagem`) REFERENCES `tb_img` (`cod_imagem`);

ALTER TABLE `tb_sobre` ADD CONSTRAINT `tb_img_tb_sobre` 
    FOREIGN KEY (`cod_imagem`) REFERENCES `tb_img` (`cod_imagem`);

ALTER TABLE `tb_sobre` ADD CONSTRAINT `tb_evento_tb_sobre` 
    FOREIGN KEY (`cod_evento`) REFERENCES `tb_evento` (`cod_evento`);

ALTER TABLE `tb_img` ADD CONSTRAINT `tb_contato_tb_img` 
    FOREIGN KEY (`cod_contato`) REFERENCES `tb_contato` (`cod_contato`);

ALTER TABLE `tb_contato` ADD CONSTRAINT `tb_localizacao_tb_contato` 
    FOREIGN KEY (`cod_localizacao`) REFERENCES `tb_localizacao` (`cod_localizacao`);

ALTER TABLE `tb_evento_img` ADD CONSTRAINT `tb_evento_tb_evento_img` 
    FOREIGN KEY (`cod_evento`) REFERENCES `tb_evento` (`cod_evento`);

ALTER TABLE `tb_evento_img` ADD CONSTRAINT `tb_img_tb_evento_img` 
    FOREIGN KEY (`cod_imagem`) REFERENCES `tb_img` (`cod_imagem`);

ALTER TABLE `tb_local_venda` ADD CONSTRAINT `tb_contato_tb_local_venda` 
    FOREIGN KEY (`cod_contato`) REFERENCES `tb_contato` (`cod_contato`);

ALTER TABLE `tb_local_venda` ADD CONSTRAINT `tb_evento_tb_local_venda` 
    FOREIGN KEY (`cod_evento`) REFERENCES `tb_evento` (`cod_evento`);

ALTER TABLE `tb_oraganizador` ADD CONSTRAINT `tb_contato_tb_oraganizador` 
    FOREIGN KEY (`cod_contato`) REFERENCES `tb_contato` (`cod_contato`);

ALTER TABLE `tb_oraganizador` ADD CONSTRAINT `tb_evento_tb_oraganizador` 
    FOREIGN KEY (`cod_evento`) REFERENCES `tb_evento` (`cod_evento`);

ALTER TABLE `tb_alimento_bebida` ADD CONSTRAINT `tb_cardapio_tb_alimento_bebida` 
    FOREIGN KEY (`cod_cardapio`) REFERENCES `tb_cardapio` (`cod_cardapio`);

ALTER TABLE `tb_alimento_bebida` ADD CONSTRAINT `tb_img_tb_alimento_bebida` 
    FOREIGN KEY (`cod_imagem`) REFERENCES `tb_img` (`cod_imagem`);

ALTER TABLE `tb_usuario` ADD CONSTRAINT `tb_contato_tb_usuario` 
    FOREIGN KEY (`cod_contato`) REFERENCES `tb_contato` (`cod_contato`);
