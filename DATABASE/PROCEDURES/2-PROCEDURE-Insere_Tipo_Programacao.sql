DELIMITER $$
CREATE PROCEDURE insere_tipo_programacao(x VARCHAR(100))
BEGIN
	INSERT INTO tb_tipo_programacao(descricao_tipo) VALUES(x);
END$$;