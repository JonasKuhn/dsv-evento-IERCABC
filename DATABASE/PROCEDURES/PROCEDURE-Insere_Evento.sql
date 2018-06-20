DELIMITER $$
CREATE PROCEDURE 
insere_evento(nome VARCHAR(100), organizacao VARCHAR(200), data_evento DATE, rua VARCHAR(100), comunidade VARCHAR(200), admin INT, car INT, cit INT)
BEGIN
	IF((nome != '') && (data_evento != '') && (organizacao != '') && (rua != '') && (comunidade != '') && (admin != '') && (car != '') && (cit != '')) THEN
		insert into tb_evento(nome_evento, nome_organizacao_evento, data_evento, rua_evento, nome_comunidade, cod_admin, cod_cardapio, cod_cidade)
		values(nome, organizacao, data_evento, rua, comunidade, admin, car, cit);
	ELSE
		select 'Preencha todos os campos.';
    END IF;    
END$$;