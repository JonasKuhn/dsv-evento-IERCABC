DELIMITER $$
CREATE PROCEDURE insere_tipo_programacao(x VARCHAR(100))
BEGIN
	IF(x != '') THEN
		INSERT INTO tb_tipo_programacao(descricao_tipo) VALUES(x);
	ELSE
		select 'Preencha todos os campos.';
    END IF; 
END$$;