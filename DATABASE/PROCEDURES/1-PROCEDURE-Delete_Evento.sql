DELIMITER $$
CREATE PROCEDURE del_evento(x INT)
BEGIN
	DECLARE aux_p INT;
    DECLARE aux_se INT;
    DECLARE aux_ec INT;

    SET aux_p = 0;
	SET aux_se = 0;
	SET aux_ec = 0;

	select count(cod_prog) from tb_programacao
    where cod_evento = x INTO aux_p;
    
    select count(cod_sobre_evento) from tb_sobre_evento
    where cod_evento = x INTO aux_se;
    
    select count(cod_evento_contato) from tb_evento_contato
    where cod_evento = x INTO aux_ec;
    
    IF(aux_p != 0) THEN
		IF (aux_se != 0) THEN
			IF (aux_ec != 0) THEN
				SELECT 'Este evento esta sendo usado!';
            ELSE
				delete from tb_evento where cod_evento = x;
            END IF;
		ELSE
			SELECT 'Este evento esta sendo usado!';
		END IF;	
    ELSE
		SELECT 'Este evento esta sendo usado!';
    END IF;
END$$;