DELIMITER $$
CREATE PROCEDURE 
insere_cardapio(nome VARCHAR(100), valor FLOAT(10,2), descricao VARCHAR(1000), img VARCHAR(100), tipo_item INTEGER, cardapio INTEGER)
BEGIN
	DECLARE aux INT;
    SET aux = 0;
	IF((nome != '') && (tipo_item != '') && (cardapio != '')) THEN
		
        INSERT INTO tb_item(nome_item, valor_item, descricao_item, img_item, cod_tipo_item) 
        VALUES (nome, valor, descricao, img, tipo_item);
        
        select max(cod_item) from tb_item INTO aux;
        
        INSERT INTO tb_cardapio_tipo(cod_cardapio, cod_item) 
        VALUES (cardapio, aux);
        
	ELSE
		select 'Preencha todos os campos.';
    END IF;    
END$$;