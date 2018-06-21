DELIMITER $$
CREATE PROCEDURE atualiza_evento (cod_e INT, nome VARCHAR(100), organizacao VARCHAR(200), data_evento DATE, rua VARCHAR(100), comunidade VARCHAR(200), admin INT, car INT, cit INT)
BEGIN
	IF ((nome != '') && (data_evento != '') && (organizacao != '') && (rua != '') && (comunidade != '') && (admin != '') && (car != '') && (cit != '')) THEN
		UPDATE tb_evento SET nome_evento = nome, nome_organizacao_evento = organizacao,
        data_evento=data_evento, rua_evento=rua, nome_comunidade=comunidade, cod_admin=admin,
        cod_cardapio=car, cod_cidade=cit WHERE cod_evento = cod_e;
	ELSE
		SELECT 'Preencha todos os campos.';
	END IF;
END$$;