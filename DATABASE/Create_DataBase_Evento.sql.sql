# ---------------------------------------------------------------------- #
# Script generated with: DeZign for Databases v6.2.1                     #
# Target DBMS:           MySQL 5                                         #
# Project file:          Evento - database.dez                           #
# Project name:          Evento                                          #
# Author:                Jonas Kuhn                                      #
# Script type:           Database creation script                        #
# Created on:            2018-06-08 16:06                                #
# ---------------------------------------------------------------------- #


# ---------------------------------------------------------------------- #
# Tables                                                                 #
# ---------------------------------------------------------------------- #

# ---------------------------------------------------------------------- #
# Add table "tb_evento"                                                  #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_evento` (
    `cod_evento` INTEGER NOT NULL,
    `nome_evento` VARCHAR(200) NOT NULL,
    `data_evento` DATETIME NOT NULL,
    `cod_localizacao` INTEGER,
    `cod_sobre` INTEGER,
    `cod_imagem` VARCHAR(40),
    `cod_contato` INTEGER,
    CONSTRAINT `PK_tb_evento` PRIMARY KEY (`cod_evento`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_localizacao"                                             #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_localizacao` (
    `cod_localizacao` INTEGER NOT NULL,
    `nome_rua` VARCHAR(100),
    `numero` VARCHAR(40),
    `cod_localizacao1` INTEGER,
    CONSTRAINT `PK_tb_localizacao` PRIMARY KEY (`cod_localizacao`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_cidade"                                                  #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_cidade` (
    `cod_cidade` INTEGER NOT NULL,
    `nome_cidade` VARCHAR(200),
    `cod_localizacao` INTEGER,
    `cod_estado` INTEGER,
    CONSTRAINT `PK_tb_cidade` PRIMARY KEY (`cod_cidade`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_estado"                                                  #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_estado` (
    `cod_estado` INTEGER NOT NULL,
    `nome_estado` VARCHAR(50) NOT NULL,
    `sigla` VARCHAR(3) NOT NULL,
    `cod_cidade` INTEGER,
    CONSTRAINT `PK_tb_estado` PRIMARY KEY (`cod_estado`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_programacao"                                             #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_programacao` (
    `cod_programacao` INTEGER NOT NULL,
    `titulo_programacao` VARCHAR(100) NOT NULL,
    `descricao_programacao` VARCHAR(10000),
    `data_inicio` TIME,
    `data_fim` TIME,
    `local_programacao` VARCHAR(40),
    `cod_evento` INTEGER,
    CONSTRAINT `PK_tb_programacao` PRIMARY KEY (`cod_programacao`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_item"                                                    #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_item` (
    `cod_item` INTEGER NOT NULL,
    `titulo_item` VARCHAR(50),
    `descricao_item` VARCHAR(1000),
    `valor_item` FLOAT(3,0),
    `obs_item` VARCHAR(100),
    `cod_programacao` INTEGER,
    `cod_imagem` VARCHAR(40),
    CONSTRAINT `PK_tb_item` PRIMARY KEY (`cod_item`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_sobre"                                                   #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_sobre` (
    `cod_sobre` INTEGER NOT NULL,
    `titulo_sobre` VARCHAR(100),
    `descricao_sobre` VARCHAR(10000),
    `cod_evento` INTEGER,
    `cod_imagem` VARCHAR(40),
    CONSTRAINT `PK_tb_sobre` PRIMARY KEY (`cod_sobre`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_img"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_img` (
    `cod_imagem` VARCHAR(40) NOT NULL,
    `nome_img` VARCHAR(100),
    `tipo_img` VARCHAR(4),
    `titulo_img` VARCHAR(50),
    `extensao_img` VARCHAR(4),
    `data_img` DATE,
    `cod_imagem1` VARCHAR(40),
    `cod_evento` INTEGER,
    CONSTRAINT `PK_tb_img` PRIMARY KEY (`cod_imagem`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_cardapio"                                                #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_cardapio` (
    `cod_evento_item` INTEGER NOT NULL,
    `descricao` VARCHAR(100),
    `cod_evento` INTEGER,
    `cod_item` INTEGER,
    CONSTRAINT `PK_tb_cardapio` PRIMARY KEY (`cod_evento_item`)
);

# ---------------------------------------------------------------------- #
# Add table "tb_contato"                                                 #
# ---------------------------------------------------------------------- #

CREATE TABLE `tb_contato` (
    `cod_contato` INTEGER NOT NULL,
    `nome_contato` VARCHAR(100),
    `telefone_contato` VARCHAR(40),
    `cod_localizacao` INTEGER,
    CONSTRAINT `PK_tb_contato` PRIMARY KEY (`cod_contato`)
);

# ---------------------------------------------------------------------- #
# Foreign key constraints                                                #
# ---------------------------------------------------------------------- #

ALTER TABLE `tb_evento` ADD CONSTRAINT `tb_localizacao_tb_evento` 
    FOREIGN KEY (`cod_localizacao`) REFERENCES `tb_localizacao` (`cod_localizacao`);

ALTER TABLE `tb_evento` ADD CONSTRAINT `tb_img_tb_evento` 
    FOREIGN KEY (`cod_imagem`) REFERENCES `tb_img` (`cod_imagem`);

ALTER TABLE `tb_evento` ADD CONSTRAINT `tb_sobre_tb_evento` 
    FOREIGN KEY (`cod_sobre`) REFERENCES `tb_sobre` (`cod_sobre`);

ALTER TABLE `tb_evento` ADD CONSTRAINT `tb_contato_tb_evento` 
    FOREIGN KEY (`cod_contato`) REFERENCES `tb_contato` (`cod_contato`);

ALTER TABLE `tb_cidade` ADD CONSTRAINT `tb_localizacao_tb_cidade` 
    FOREIGN KEY (`cod_localizacao`) REFERENCES `tb_localizacao` (`cod_localizacao`);

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

ALTER TABLE `tb_cardapio` ADD CONSTRAINT `tb_evento_tb_cardapio` 
    FOREIGN KEY (`cod_evento`) REFERENCES `tb_evento` (`cod_evento`);

ALTER TABLE `tb_cardapio` ADD CONSTRAINT `tb_item_tb_cardapio` 
    FOREIGN KEY (`cod_item`) REFERENCES `tb_item` (`cod_item`);

ALTER TABLE `tb_contato` ADD CONSTRAINT `tb_localizacao_tb_contato` 
    FOREIGN KEY (`cod_localizacao`) REFERENCES `tb_localizacao` (`cod_localizacao`);
