# ---------------------------------------------------------------------- #
# Script generated with: DeZign for Databases v6.2.1                     #
# Target DBMS:           MySQL 5                                         #
# Project file:          Evento - database_new.dez                       #
# Project name:                                                          #
# Author:                                                                #
# Script type:           Database drop script                            #
# Created on:            2018-06-26 08:51                                #
# ---------------------------------------------------------------------- #


# ---------------------------------------------------------------------- #
# Drop foreign key constraints                                           #
# ---------------------------------------------------------------------- #

ALTER TABLE `tb_evento` DROP FOREIGN KEY `tb_cardapio_tb_evento`;

ALTER TABLE `tb_evento` DROP FOREIGN KEY `tb_cidade_tb_evento`;

ALTER TABLE `tb_programacao` DROP FOREIGN KEY `tb_tipo_programacao_tb_programacao`;

ALTER TABLE `tb_programacao` DROP FOREIGN KEY `tb_evento_tb_programacao`;

ALTER TABLE `tb_admin` DROP FOREIGN KEY `tb_evento_tb_admin`;

ALTER TABLE `tb_sobre_evento` DROP FOREIGN KEY `tb_evento_tb_sobre_evento`;

ALTER TABLE `tb_item` DROP FOREIGN KEY `tb_tipo_item_tb_item`;

ALTER TABLE `tb_contato` DROP FOREIGN KEY `tb_cidade_tb_contato`;

ALTER TABLE `tb_contato` DROP FOREIGN KEY `tb_tipo_contato_tb_contato`;

ALTER TABLE `tb_cidade` DROP FOREIGN KEY `tb_estado_tb_cidade`;

ALTER TABLE `tb_evento_contato` DROP FOREIGN KEY `tb_contato_tb_evento_contato`;

ALTER TABLE `tb_evento_contato` DROP FOREIGN KEY `tb_evento_tb_evento_contato`;

ALTER TABLE `tb_cardapio_tipo` DROP FOREIGN KEY `tb_cardapio_tb_cardapio_tipo`;

ALTER TABLE `tb_cardapio_tipo` DROP FOREIGN KEY `tb_item_tb_cardapio_tipo`;

# ---------------------------------------------------------------------- #
# Drop table "tb_evento_contato"                                         #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_evento_contato` MODIFY `cod_evento_contato` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_evento_contato` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_evento_contato`;

# ---------------------------------------------------------------------- #
# Drop table "tb_contato"                                                #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_contato` MODIFY `cod_contato` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_contato` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_contato`;

# ---------------------------------------------------------------------- #
# Drop table "tb_sobre_evento"                                           #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_sobre_evento` MODIFY `cod_sobre_evento` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_sobre_evento` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_sobre_evento`;

# ---------------------------------------------------------------------- #
# Drop table "tb_admin"                                                  #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_admin` MODIFY `cod_admin` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_admin` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_admin`;

# ---------------------------------------------------------------------- #
# Drop table "tb_programacao"                                            #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_programacao` MODIFY `cod_prog` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_programacao` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_programacao`;

# ---------------------------------------------------------------------- #
# Drop table "tb_evento"                                                 #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_evento` MODIFY `cod_evento` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_evento` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_evento`;

# ---------------------------------------------------------------------- #
# Drop table "tb_cardapio_tipo"                                          #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_cardapio_tipo` MODIFY `cod_cardapio_tipo` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_cardapio_tipo` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_cardapio_tipo`;

# ---------------------------------------------------------------------- #
# Drop table "tb_cidade"                                                 #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_cidade` MODIFY `cod_cidade` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_cidade` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_cidade`;

# ---------------------------------------------------------------------- #
# Drop table "tb_item"                                                   #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_item` MODIFY `cod_item` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_item` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_item`;

# ---------------------------------------------------------------------- #
# Drop table "tb_estado"                                                 #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_estado` MODIFY `cod_estado` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_estado` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_estado`;

# ---------------------------------------------------------------------- #
# Drop table "tb_tipo_contato"                                           #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_tipo_contato` MODIFY `cod_tipo_contato` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_tipo_contato` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_tipo_contato`;

# ---------------------------------------------------------------------- #
# Drop table "tb_tipo_item"                                              #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_tipo_item` MODIFY `cod_tipo_item` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_tipo_item` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_tipo_item`;

# ---------------------------------------------------------------------- #
# Drop table "tb_cardapio"                                               #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_cardapio` MODIFY `cod_cardapio` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_cardapio` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_cardapio`;

# ---------------------------------------------------------------------- #
# Drop table "tb_tipo_programacao"                                       #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_tipo_programacao` MODIFY `cod_tipo_prog` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_tipo_programacao` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_tipo_programacao`;
