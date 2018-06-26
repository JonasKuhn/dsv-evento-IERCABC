DELIMITER $$
CREATE PROCEDURE del_contato(x INT, y INT)
BEGIN
	DECLARE aux_ec INT;
	SET aux_ec = 0;
    
    select COUNT(cod_evento_contato) from tb_evento_contato
    where cod_contato = x INTO aux_ec;
    
    IF(aux_ec != 0)THEN
		DELETE FROM tb_evento_contato 
        WHERE cod_contato = x
        AND cod_evento = y;
	ELSE
		DELETE FROM tb_evento_contato WHERE cod_contato = x;
		DELETE FROM tb_contato WHERE cod_contato = x;
    END IF;
END $$
DELIMITER ;