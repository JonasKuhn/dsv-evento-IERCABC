DELIMITER $$
CREATE PROCEDURE atualiza_prog(x INTEGER,descricao_prog VARCHAR(1000),pavilhao_prog VARCHAR(100),obs_prog VARCHAR(1000),
								hora_inicio_prog TIME,hora_fim_prog TIME,img_prog VARCHAR(100),video_prog VARCHAR(100),
								cod_tipo_prog INTEGER,cod_evento INTEGER)
BEGIN
	IF ((x != '') && (descricao_prog != '') && (pavilhao_prog != '') && (hora_inicio_prog != '') && (cod_tipo_prog != '') && (cod_evento != '')) THEN
		UPDATE tb_programacao SET descricao_prog=descricao_prog,pavilhao_prog=pavilhao_prog,obs_prog=obs_prog,
			hora_inicio_prog=hora_inicio_prog,
			hora_fim_prog=hora_fim_prog,
			img_prog=img_prog,
			video_prog=video_prog,
			cod_tipo_prog=cod_tipo_prog,
			cod_evento=cod_evento 
		WHERE cod_prog = x;
	ELSE
		SELECT 'Preencha todos os campos.';
	END IF;
END$$;