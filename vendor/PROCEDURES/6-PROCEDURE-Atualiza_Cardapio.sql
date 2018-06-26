DELIMITER $$
CREATE PROCEDURE atualiza_cardapio(cod INT, nome Varchar(100), obs varchar(1000))
BEGIN
	IF((cod != '') && (nome != '')) THEN
		UPDATE tb_cardapio
		SET titulo_cardapio=nome, obs_cardapio=obs
		where cod_cardapio = cod;
    ELSE 
		SELECT 'Preencha todos os campos.';
    END IF;
END $$;