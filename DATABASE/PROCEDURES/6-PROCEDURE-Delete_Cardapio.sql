DELIMITER $$
CREATE PROCEDURE del_cardapio(x INT)
BEGIN
	DECLARE aux_e INT;
    DECLARE aux_ct INT;
    
    SET aux_e = 0;
    SET aux_ct = 0;
    
    select COUNT(cod_evento) from tb_evento 
    where cod_cardapio = x INTO aux_e;
	
    select COUNT(cod_cardapio_tipo) from tb_cardapio_tipo
    where cod_cardapio = x INTO aux_ct;
    
    IF(aux_e != 0)THEN
		IF(aux_ct != 0)THEN
			SELECT 'Este cardápio esta sendo usado!';
        ELSE
			delete from tb_cardapio where cod_cardapio = cod;
        END IF;
    ELSE
		SELECT 'Este cardápio esta sendo usado!';
    END IF;
END;