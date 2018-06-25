DELIMITER $$
CREATE PROCEDURE sel_cidade_estado()
BEGIN
	select * from tb_cidade as c, tb_estado as e where c.cod_estado = e.cod_estado;
END$$;