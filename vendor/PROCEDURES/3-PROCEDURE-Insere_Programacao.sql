DELIMITER $$
CREATE PROCEDURE 
insere_programacao(descricao_prog VARCHAR(1000), pavilhao_prog VARCHAR(100), obs_prog  VARCHAR(1000), hora_inicio_prog TIME, hora_fim_prog TIME, img_prog VARCHAR(100), video_prog  VARCHAR(100), cod_tipo_prog INT, cod_evento INT)
BEGIN
	IF((descricao_prog != '') && (pavilhao_prog != '') && (hora_inicio_prog != '') && (cod_tipo_prog != '') && (cod_evento != '')) THEN
		INSERT INTO tb_programacao (descricao_prog, obs_prog, pavilhao_prog, hora_inicio_prog, hora_fim_prog, img_prog, video_prog, cod_tipo_prog, cod_evento) 
		VALUES(descricao_prog,pavilhao_prog,obs_prog,hora_inicio_prog,hora_fim_prog,img_prog,video_prog,cod_tipo_prog,cod_evento);
	ELSE
		select 'Preencha todos os campos.';
    END IF;  
END$$;