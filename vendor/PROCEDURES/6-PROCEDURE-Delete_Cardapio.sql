DELIMITER $$
CREATE PROCEDURE del_cardapio(cod INT)
BEGIN
	delete from tb_cardapio where cod_cardapio = cod;
END$$
DELIMITER ;