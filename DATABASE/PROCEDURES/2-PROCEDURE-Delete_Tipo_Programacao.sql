DELIMITER $$
CREATE PROCEDURE del_tipo_prog(x INT)
BEGIN
	delete from tb_tipo_programacao where cod_tipo_prog = x;
END$$;