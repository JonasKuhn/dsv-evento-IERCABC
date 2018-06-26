DELIMITER $$
CREATE PROCEDURE del_tipo_prog(x INT)
BEGIN
	DECLARE aux_tp INT;
    SET aux_tp = 0;
    
    select COUNT(cod_prog) from tb_programacao
    where cod_tipo_prog = x INTO aux_tp;
    
    IF(aux_tp != 0)THEN
		SELECT 'Este tipo de evento esta sendo usado!';
    ELSE
		delete from tb_tipo_programacao where cod_tipo_prog = x;
    END IF;
END$$;