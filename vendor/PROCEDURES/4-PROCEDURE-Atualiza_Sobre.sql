DELIMITER $$
CREATE PROCEDURE atualiza_sobre(cod_sobre_e INT, titulo_sobre VARCHAR(100),descricao_sobre VARCHAR(1000), img_sobre VARCHAR(100), cod_evento INT)
BEGIN
	IF((cod_sobre_e != '') && (titulo_sobre != '') && (descricao_sobre != '') && (cod_evento != '')) THEN
		UPDATE tb_sobre_evento
		SET titulo_sobre=titulo_sobre,descricao_sobre=descricao_sobre,img_sobre=img_sobre,cod_evento=cod_evento 
		WHERE cod_sobre_evento = cod_sobre_e;
    ELSE
		SELECT 'Preencha todos os campos.';
    END IF;
END $$;