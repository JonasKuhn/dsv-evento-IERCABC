DELIMITER $$
CREATE PROCEDURE del_evento(x INT)
BEGIN
	delete from tb_evento where cod_evento = x;
END$$
DELIMITER ;