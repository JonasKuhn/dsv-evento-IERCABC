DELIMITER $$
CREATE PROCEDURE del_cardapio_item(x INT, y INT)
BEGIN
	DECLARE aux INT;
    SET aux = 0;
    
	select COUNT(cod_cardapio) from tb_cardapio_tipo 
	where cod_item = x INTO aux;
	
    IF((aux > 1) && (aux != 0) && (aux != '')) THEN 
		DELETE FROM tb_cardapio_tipo WHERE cod_item = x AND cod_cardapio = y;
	ELSE
		DELETE FROM tb_cardapio_tipo WHERE cod_item = x AND cod_cardapio = y;
		DELETE FROM tb_item WHERE cod_item = x;
    END IF;
END$$
DELIMITER ;