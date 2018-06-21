DELIMITER $$
CREATE PROCEDURE sel_prog(x INT)
BEGIN
	select * 
	from tb_programacao as p, tb_tipo_programacao as tp, tb_evento as e
	where p.cod_tipo_prog = tp.cod_tipo_prog
	and p.cod_evento = e.cod_evento
	and p.cod_prog = x;
END$$;