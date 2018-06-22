DELIMITER $$
CREATE PROCEDURE insere_sobre(titulo_sobre VARCHAR(100), descricao_sobre VARCHAR(1000), img_sobre VARCHAR(100), cod_evento INTEGER)
BEGIN
	IF((titulo_sobre != '') && (descricao_sobre != '') &&(cod_evento != '')) THEN
		INSERT INTO tb_sobre_evento (titulo_sobre, descricao_sobre, img_sobre, cod_evento) 
        VALUES(titulo_sobre, descricao_sobre, img_sobre, cod_evento);
	ELSE
		select 'Preencha todos os campos.';
    END IF; 
END$$;