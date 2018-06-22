DELIMITER $$
CREATE PROCEDURE del_sobre(x INT)
BEGIN
	delete from tb_sobre_evento where cod_sobre_evento = x;
END$$;