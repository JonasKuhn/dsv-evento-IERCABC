# ---------------------------------------------------------------------- #
# Script generated with: DeZign for Databases v6.2.1                     #
# Target DBMS:           MySQL 5                                         #
# Project file:          Evento - database_new.dez                       #
# Project name:                                                          #
# Author:                                                                #
# Script type:           Database drop script                            #
# Created on:            2018-06-11 17:55                                #
# ---------------------------------------------------------------------- #


# ---------------------------------------------------------------------- #
# Drop foreign key constraints                                           #
# ---------------------------------------------------------------------- #

ALTER TABLE `tb_evento` DROP FOREIGN KEY `tb_localizacao_tb_evento`;

ALTER TABLE `tb_evento` DROP FOREIGN KEY `tb_cardapio_tb_evento`;

ALTER TABLE `tb_evento` DROP FOREIGN KEY `tb_usuario_tb_evento`;

ALTER TABLE `tb_localizacao` DROP FOREIGN KEY `tb_cidade_tb_localizacao`;

ALTER TABLE `tb_cidade` DROP FOREIGN KEY `tb_estado_tb_cidade`;

ALTER TABLE `tb_programacao` DROP FOREIGN KEY `tb_evento_tb_programacao`;

ALTER TABLE `tb_item` DROP FOREIGN KEY `tb_programacao_tb_item`;

ALTER TABLE `tb_item` DROP FOREIGN KEY `tb_img_tb_item`;

ALTER TABLE `tb_sobre` DROP FOREIGN KEY `tb_img_tb_sobre`;

ALTER TABLE `tb_sobre` DROP FOREIGN KEY `tb_evento_tb_sobre`;

ALTER TABLE `tb_img` DROP FOREIGN KEY `tb_contato_tb_img`;

ALTER TABLE `tb_contato` DROP FOREIGN KEY `tb_localizacao_tb_contato`;

ALTER TABLE `tb_evento_img` DROP FOREIGN KEY `tb_evento_tb_evento_img`;

ALTER TABLE `tb_evento_img` DROP FOREIGN KEY `tb_img_tb_evento_img`;

ALTER TABLE `tb_local_venda` DROP FOREIGN KEY `tb_contato_tb_local_venda`;

ALTER TABLE `tb_local_venda` DROP FOREIGN KEY `tb_evento_tb_local_venda`;

ALTER TABLE `tb_oraganizador` DROP FOREIGN KEY `tb_contato_tb_oraganizador`;

ALTER TABLE `tb_oraganizador` DROP FOREIGN KEY `tb_evento_tb_oraganizador`;

ALTER TABLE `tb_alimento_bebida` DROP FOREIGN KEY `tb_cardapio_tb_alimento_bebida`;

ALTER TABLE `tb_alimento_bebida` DROP FOREIGN KEY `tb_img_tb_alimento_bebida`;

ALTER TABLE `tb_usuario` DROP FOREIGN KEY `tb_contato_tb_usuario`;

# ---------------------------------------------------------------------- #
# Drop table "tb_sobre"                                                  #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_sobre` MODIFY `cod_sobre` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_sobre` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_sobre`;

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
# Drop table "tb_alimento_bebida"                                        #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_alimento_bebida` MODIFY `cod_alimento_bebida` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_alimento_bebida` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_alimento_bebida`;

# ---------------------------------------------------------------------- #
# Drop table "tb_oraganizador"                                           #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_oraganizador` MODIFY `cod_organizadores` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_oraganizador` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_oraganizador`;

# ---------------------------------------------------------------------- #
# Drop table "tb_local_venda"                                            #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_local_venda` MODIFY `cod_local_venda` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_local_venda` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_local_venda`;

# ---------------------------------------------------------------------- #
# Drop table "tb_evento_img"                                             #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_evento_img` MODIFY `cod_evento_img` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_evento_img` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_evento_img`;

# ---------------------------------------------------------------------- #
# Drop table "tb_img"                                                    #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_img` MODIFY `cod_imagem` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_img` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_img`;

# ---------------------------------------------------------------------- #
# Drop table "tb_programacao"                                            #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_programacao` MODIFY `cod_programacao` INTEGER NOT NULL;

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
# Drop table "tb_usuario"                                                #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_usuario` MODIFY `cod_usuario` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_usuario` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_usuario`;

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
# Drop table "tb_localizacao"                                            #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_localizacao` MODIFY `cod_localizacao` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_localizacao` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_localizacao`;

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
# Drop table "tb_cardapio"                                               #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_cardapio` MODIFY `cod_cardapio` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_cardapio` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_cardapio`;

# ---------------------------------------------------------------------- #
# Drop table "tb_estado"                                                 #
# ---------------------------------------------------------------------- #

# Remove autoinc for PK drop #

ALTER TABLE `tb_estado` MODIFY `cod_estado` INTEGER NOT NULL;

# Drop constraints #

ALTER TABLE `tb_estado` DROP PRIMARY KEY;

# Drop table #

DROP TABLE `tb_estado`;
