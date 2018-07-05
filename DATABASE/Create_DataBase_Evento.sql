# ---------------------------------------------------------------------- #
# Script generated with: DeZign for Databases v6.2.1                     #
# Target DBMS:           MySQL 5                                         #
# Project file:          Evento - database_new.dez                       #
# Project name:                                                          #
# Author:                                                                #
# Script type:           Database creation script                        #
# Created on:            2018-06-15 15:21                                #
# ---------------------------------------------------------------------- #

# Nome da Base : CREATE DATABASE evento_suino;

# ---------------------------------------------------------------------- #
# Tables                                                                 #
# ---------------------------------------------------------------------- #

# ---------------------------------------------------------------------- #
# Add table "tb_evento"                                                  #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_evento` (
    `cod_evento` INTEGER NOT NULL AUTO_INCREMENT,
    `nome_evento` VARCHAR(100),
    `nome_organizacao_evento` VARCHAR(200),
    `data_evento` DATE,
    `rua_evento` VARCHAR(100),
    `nome_comunidade` VARCHAR(200) NOT NULL,
    `banner_evento` VARCHAR(40),
    `cod_cardapio` INTEGER,
    `cod_cidade` INTEGER,
    CONSTRAINT `PK_tb_evento` PRIMARY KEY (`cod_evento`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_programacao"                                             #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_programacao` (
    `cod_prog` INTEGER NOT NULL AUTO_INCREMENT,
    `descricao_prog` VARCHAR(1000),
    `pavilhao_prog` VARCHAR(100),
    `obs_prog` VARCHAR(1000),
    `hora_inicio_prog` TIME,
    `hora_fim_prog` TIME,
    `img_prog` VARCHAR(100),
    `video_prog` VARCHAR(100),
    `cod_tipo_prog` INTEGER,
    `cod_evento` INTEGER,
    CONSTRAINT `PK_tb_programacao` PRIMARY KEY (`cod_prog`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_tipo_programacao"                                        #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_tipo_programacao` (
    `cod_tipo_prog` INTEGER NOT NULL AUTO_INCREMENT,
    `descricao_tipo` VARCHAR(100),
    CONSTRAINT `PK_tb_tipo_programacao` PRIMARY KEY (`cod_tipo_prog`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_admin"                                                   #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_admin` (
    `cod_admin` INTEGER NOT NULL AUTO_INCREMENT,
    `login_admin` VARCHAR(100),
    `senha_admin` VARCHAR(100),
    `nome_admin` VARCHAR(100),
    `cod_evento` INTEGER NOT NULL,
    CONSTRAINT `PK_tb_admin` PRIMARY KEY (`cod_admin`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_sobre_evento"                                            #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_sobre_evento` (
    `cod_sobre_evento` INTEGER NOT NULL AUTO_INCREMENT,
    `titulo_sobre` VARCHAR(100),
    `descricao_sobre` VARCHAR(1000),
    `img_sobre` VARCHAR(100),
    `cod_evento` INTEGER,
    CONSTRAINT `PK_tb_sobre_evento` PRIMARY KEY (`cod_sobre_evento`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_cardapio"                                                #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_cardapio` (
    `cod_cardapio` INTEGER NOT NULL AUTO_INCREMENT,
    `titulo_cardapio` VARCHAR(100),
    `obs_cardapio` VARCHAR(1000),
    CONSTRAINT `PK_tb_cardapio` PRIMARY KEY (`cod_cardapio`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_item"                                                    #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_item` (
    `cod_item` INTEGER NOT NULL AUTO_INCREMENT,
    `nome_item` VARCHAR(100),
    `valor_item` FLOAT(10,2),
    `descricao_item` VARCHAR(1000),
    `img_item` VARCHAR(100),
    `cod_tipo_item` INTEGER,
    CONSTRAINT `PK_tb_item` PRIMARY KEY (`cod_item`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_tipo_item"                                               #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_tipo_item` (
    `cod_tipo_item` INTEGER NOT NULL AUTO_INCREMENT,
    `descricao_tipo_item` VARCHAR(100),
    `valor_tipo_item` FLOAT(10,2),
    `obs_tipo_item` VARCHAR(1000),
    CONSTRAINT `PK_tb_tipo_item` PRIMARY KEY (`cod_tipo_item`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_contato"                                                 #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_contato` (
    `cod_contato` INTEGER NOT NULL AUTO_INCREMENT,
    `nome_contato` VARCHAR(100),
    `telefone_contato` VARCHAR(15),
    `email_contato` VARCHAR(100),
    `img_contato` VARCHAR(100),
    `rua_contato` VARCHAR(100),
    `nr_contato` VARCHAR(10),
    `cod_cidade` INTEGER,
    `cod_tipo_contato` INTEGER,
    CONSTRAINT `PK_tb_contato` PRIMARY KEY (`cod_contato`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_tipo_contato"                                            #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_tipo_contato` (
    `cod_tipo_contato` INTEGER NOT NULL AUTO_INCREMENT,
    `descricao_tipo_contato` VARCHAR(100),
    CONSTRAINT `PK_tb_tipo_contato` PRIMARY KEY (`cod_tipo_contato`)
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
    `nome_estado` VARCHAR(100),
    `uf` VARCHAR(2),
    CONSTRAINT `PK_tb_estado` PRIMARY KEY (`cod_estado`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_evento_contato"                                          #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_evento_contato` (
    `cod_evento_contato` INTEGER NOT NULL AUTO_INCREMENT,
    `cod_contato` INTEGER,
    `cod_evento` INTEGER,
    CONSTRAINT `PK_tb_evento_contato` PRIMARY KEY (`cod_evento_contato`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_cardapio_tipo"                                           #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_cardapio_tipo` (
    `cod_cardapio_tipo` INTEGER NOT NULL AUTO_INCREMENT,
    `cod_cardapio` INTEGER,
    `cod_item` INTEGER,
    CONSTRAINT `PK_tb_cardapio_tipo` PRIMARY KEY (`cod_cardapio_tipo`)
);

# ---------------------------------------------------------------------- #
# Foreign key constraints                                                #
# ---------------------------------------------------------------------- #

ALTER TABLE `tb_evento` ADD CONSTRAINT `tb_cardapio_tb_evento` 
    FOREIGN KEY (`cod_cardapio`) REFERENCES `tb_cardapio` (`cod_cardapio`);

ALTER TABLE `tb_evento` ADD CONSTRAINT `tb_cidade_tb_evento` 
    FOREIGN KEY (`cod_cidade`) REFERENCES `tb_cidade` (`cod_cidade`);

ALTER TABLE `tb_programacao` ADD CONSTRAINT `tb_tipo_programacao_tb_programacao` 
    FOREIGN KEY (`cod_tipo_prog`) REFERENCES `tb_tipo_programacao` (`cod_tipo_prog`);

ALTER TABLE `tb_programacao` ADD CONSTRAINT `tb_evento_tb_programacao` 
    FOREIGN KEY (`cod_evento`) REFERENCES `tb_evento` (`cod_evento`);

ALTER TABLE `tb_admin` ADD CONSTRAINT `tb_evento_tb_admin` 
    FOREIGN KEY (`cod_evento`) REFERENCES `tb_evento` (`cod_evento`);

ALTER TABLE `tb_sobre_evento` ADD CONSTRAINT `tb_evento_tb_sobre_evento` 
    FOREIGN KEY (`cod_evento`) REFERENCES `tb_evento` (`cod_evento`);

ALTER TABLE `tb_item` ADD CONSTRAINT `tb_tipo_item_tb_item` 
    FOREIGN KEY (`cod_tipo_item`) REFERENCES `tb_tipo_item` (`cod_tipo_item`);

ALTER TABLE `tb_contato` ADD CONSTRAINT `tb_cidade_tb_contato` 
    FOREIGN KEY (`cod_cidade`) REFERENCES `tb_cidade` (`cod_cidade`);

ALTER TABLE `tb_contato` ADD CONSTRAINT `tb_tipo_contato_tb_contato` 
    FOREIGN KEY (`cod_tipo_contato`) REFERENCES `tb_tipo_contato` (`cod_tipo_contato`);

ALTER TABLE `tb_cidade` ADD CONSTRAINT `tb_estado_tb_cidade` 
    FOREIGN KEY (`cod_estado`) REFERENCES `tb_estado` (`cod_estado`);

ALTER TABLE `tb_evento_contato` ADD CONSTRAINT `tb_contato_tb_evento_contato` 
    FOREIGN KEY (`cod_contato`) REFERENCES `tb_contato` (`cod_contato`);

ALTER TABLE `tb_evento_contato` ADD CONSTRAINT `tb_evento_tb_evento_contato` 
    FOREIGN KEY (`cod_evento`) REFERENCES `tb_evento` (`cod_evento`);

ALTER TABLE `tb_cardapio_tipo` ADD CONSTRAINT `tb_cardapio_tb_cardapio_tipo` 
    FOREIGN KEY (`cod_cardapio`) REFERENCES `tb_cardapio` (`cod_cardapio`);

ALTER TABLE `tb_cardapio_tipo` ADD CONSTRAINT `tb_item_tb_cardapio_tipo` 
    FOREIGN KEY (`cod_item`) REFERENCES `tb_item` (`cod_item`);