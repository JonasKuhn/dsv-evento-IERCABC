DELIMITER $$
CREATE PROCEDURE atualiza_cardapio_item(cod_i INT, cod_c INT, nome VARCHAR(100), valor FLOAT(10,2), descricao VARCHAR(1000), img VARCHAR(100), tipo_item INT)
BEGIN
	DECLARE aux_cardapio_item INT;
    SET aux_cardapio_item = 0;
    
    IF((cod_c != '') && (cod_i != '') && (nome != '') && (tipo_item != '')) THEN
    
		select cod_cardapio_tipo from tb_cardapio_tipo 
		where cod_cardapio = cod_c
		and cod_item = cod_i INTO aux_cardapio_item;
		
        IF(aux_cardapio_item != 0) THEN
			UPDATE tb_item 
			SET nome_item = nome,valor_item = valor,
			descricao_item=descricao ,img_item=img ,cod_tipo_item = tipo_item WHERE cod_item = cod_i;
        ELSE
			UPDATE tb_item 
			SET nome_item = nome,valor_item = valor,
			descricao_item=descricao ,img_item=img ,cod_tipo_item = tipo_item WHERE cod_item = cod_i;
			
            INSERT tb_cardapio_tipo(cod_cardapio, cod_item)
            VALUES(cod_c, cod_i);
		END IF;
	ELSE
		SELECT 'Preencha todos os campos!';
    END IF;
END$$;