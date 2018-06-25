DELIMITER $$
CREATE PROCEDURE del_prog(x INT)
BEGIN
	delete from tb_programacao where cod_prog = x;
END$$;