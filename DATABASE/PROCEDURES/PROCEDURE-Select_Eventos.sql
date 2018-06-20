DELIMITER $$
CREATE PROCEDURE sel_eventos()
BEGIN
	SELECT *
	FROM tb_evento as e, tb_cardapio as c, tb_admin as a, tb_cidade as ci, tb_estado as es
	WHERE e.cod_admin = a.cod_admin
	AND e.cod_cardapio = c.cod_cardapio
	AND e.cod_cidade = ci.cod_cidade
	AND ci.cod_estado = es.cod_estado
	ORDER BY e.cod_evento ASC;
END$$;