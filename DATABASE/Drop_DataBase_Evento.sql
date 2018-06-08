# ---------------------------------------------------------------------- #
# Script generated with: DeZign for Databases v6.2.1                     #
# Target DBMS:           MySQL 5                                         #
# Project file:          Evento - database.dez                           #
# Project name:          Evento                                          #
# Author:                Jonas Kuhn                                      #
# Script type:           Database drop script                            #
# Created on:            2018-06-08 16:06                                #
# ---------------------------------------------------------------------- #


# ---------------------------------------------------------------------- #
# Drop foreign key constraints                                           #
# ---------------------------------------------------------------------- #

ALTER TABLE `tb_evento` DROP FOREIGN KEY `tb_localizacao_tb_evento`;

ALTER TABLE `tb_evento` DROP FOREIGN KEY `tb_img_tb_evento`;

ALTER TABLE `tb_evento` DROP FOREIGN KEY `tb_sobre_tb_evento`;

ALTER TABLE `tb_evento` DROP FOREIGN KEY `tb_contato_tb_evento`;

ALTER TABLE `tb_cidade` DROP FOREIGN KEY `tb_localizacao_tb_cidade`;

ALTER TABLE `tb_cidade` DROP FOREIGN KEY `tb_estado_tb_cidade`;

ALTER TABLE `tb_programacao` DROP FOREIGN KEY `tb_evento_tb_programacao`;

ALTER TABLE `tb_item` DROP FOREIGN KEY `tb_programacao_tb_item`;

ALTER TABLE `tb_item` DROP FOREIGN KEY `tb_img_tb_item`;

ALTER TABLE `tb_sobre` DROP FOREIGN KEY `tb_img_tb_sobre`;

ALTER TABLE `tb_cardapio` DROP FOREIGN KEY `tb_evento_tb_cardapio`;

ALTER TABLE `tb_cardapio` DROP FOREIGN KEY `tb_item_tb_cardapio`;

ALTER TABLE `tb_contato` DROP FOREIGN KEY `tb_localizacao_tb_contato`;

# ---------------------------------------------------------------------- #
# Drop table "tb_cardapio"                                               #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `tb_cardapio` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_cardapio`;

# ---------------------------------------------------------------------- #
# Drop table "tb_item"                                                   #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `tb_item` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_item`;

# ---------------------------------------------------------------------- #
# Drop table "tb_programacao"                                            #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `tb_programacao` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_programacao`;

# ---------------------------------------------------------------------- #
# Drop table "tb_evento"                                                 #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `tb_evento` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_evento`;

# ---------------------------------------------------------------------- #
# Drop table "tb_sobre"                                                  #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `tb_sobre` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_sobre`;

# ---------------------------------------------------------------------- #
# Drop table "tb_cidade"                                                 #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `tb_cidade` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_cidade`;

# ---------------------------------------------------------------------- #
# Drop table "tb_contato"                                                #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `tb_contato` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_contato`;

# ---------------------------------------------------------------------- #
# Drop table "tb_img"                                                    #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `tb_img` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_img`;

# ---------------------------------------------------------------------- #
# Drop table "tb_estado"                                                 #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `tb_estado` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_estado`;

# ---------------------------------------------------------------------- #
# Drop table "tb_localizacao"                                            #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `tb_localizacao` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_localizacao`;
