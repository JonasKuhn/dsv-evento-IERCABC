DELIMITER $$
CREATE PROCEDURE del_contato(x INT)
BEGIN
    DELETE FROM tb_evento_contato WHERE cod_contato = x;

	DELETE FROM tb_contato WHERE cod_contato = x;
END$$;