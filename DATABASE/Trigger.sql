## BACKUP EVENTO
CREATE TABLE `tb_evento_bkp` (
    `cod_evento` INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome_evento` VARCHAR(100),
    `nome_organizacao_evento` VARCHAR(200),
    `data_evento` DATE,
    `rua_evento` VARCHAR(100),
    `nome_comunidade` VARCHAR(200),
    `cod_cardapio` INTEGER NOT NULL REFERENCES tipo_cardapio(cod_cardapio),
    `cod_cidade` INTEGER NOT NULL REFERENCES tipo_cidade(cod_cidade)
);

DELIMITER $$
CREATE TRIGGER backup_evento
AFTER DELETE on tb_evento
FOR EACH ROW
BEGIN
	INSERT INTO tb_evento_bkp (cod_evento,nome_evento,nome_organizacao_evento,data_evento,
    rua_evento,nome_comunidade,cod_cardapio,cod_cidade)
    VALUES(old.cod_evento,old.nome_evento,old.nome_organizacao_evento,old.data_evento,
    old.rua_evento, old.nome_comunidade, old.cod_cardapio, old.cod_cidade);
END $$
DELIMITER ;

## BACKUP PROGRAMAÇÃO
CREATE TABLE `tb_programacao_bkp` (
    `cod_prog` INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `descricao_prog` VARCHAR(1000),
    `pavilhao_prog` VARCHAR(100),
    `obs_prog` VARCHAR(1000),
    `hora_inicio_prog` TIME,
    `hora_fim_prog` TIME,
    `img_prog` VARCHAR(100),
    `video_prog` VARCHAR(100),
    `cod_tipo_prog` INTEGER NOT NULL REFERENCES tb_tipo_programacao(cod_tipo_prog),
    `cod_evento` INTEGER NOT NULL REFERENCES tb_evento(cod_evento)
);

DELIMITER $$
CREATE TRIGGER backup_programacao
AFTER DELETE on tb_programacao
FOR EACH ROW
BEGIN
	INSERT INTO tb_programacao_bkp 
    (cod_prog, descricao_prog, pavilhao_prog, obs_prog,hora_inicio_prog, hora_fim_prog, img_prog, video_prog, cod_tipo_prog, cod_evento)
    VALUES
    (old.cod_prog,old.descricao_prog,old.pavilhao_prog,old.obs_prog,old.hora_inicio_prog,old.hora_fim_prog, old.img_prog,old.video_prog,old.cod_tipo_prog, old.cod_evento);
END $$
DELIMITER ;

## BACKUP SOBRE EVENTO
CREATE TABLE `tb_sobre_evento_bkp` (
    `cod_sobre_evento` INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `titulo_sobre` VARCHAR(100),
    `descricao_sobre` VARCHAR(1000),
    `img_sobre` VARCHAR(100),
    `cod_evento` INTEGER NOT NULL REFERENCES tb_evento(cod_evento)
);

DELIMITER $$
CREATE TRIGGER backup_sobre_evento
AFTER DELETE on tb_sobre_evento
FOR EACH ROW
BEGIN
	INSERT INTO tb_sobre_evento_bkp 
    (cod_sobre_evento, titulo_sobre, descricao_sobre, img_sobre,cod_evento)
    VALUES
    (old.cod_sobre_evento,old.titulo_sobre,old.descricao_sobre,old.img_sobre,old.cod_evento);
END $$
DELIMITER ;