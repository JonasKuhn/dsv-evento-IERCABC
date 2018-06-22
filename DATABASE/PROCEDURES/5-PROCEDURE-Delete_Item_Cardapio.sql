DELIMITER $$
CREATE PROCEDURE del_cardapio_item(x INT)
BEGIN
    DELETE FROM tb_cardapio_tipo WHERE cod_item = x;

	DELETE FROM tb_item WHERE cod_item = x;
END$$;