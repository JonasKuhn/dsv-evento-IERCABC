DELIMITER $$
CREATE PROCEDURE atualiza_tipo_programacao(x VARCHAR(100), y INT)
BEGIN
IF ((x != '') && (y != '')) THEN	
	update tb_tipo_programacao set descricao_tipo = x
    where cod_tipo_prog = y;
	ELSE
		SELECT 'Preencha todos os campos.';
	END IF;
END$$;