DELIMITER $$
CREATE PROCEDURE sel_tipo_prog(x int)
BEGIN
	select * from tb_tipo_programacao where cod_tipo_prog = x;
END$$;