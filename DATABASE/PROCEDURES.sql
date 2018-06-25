DELIMITER $$
CREATE PROCEDURE del_evento(x INT)
BEGIN
	delete from tb_evento where cod_evento = x;
END$$;

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

DELIMITER $$
CREATE PROCEDURE del_tipo_prog(x INT)
BEGIN
	delete from tb_tipo_programacao where cod_tipo_prog = x;
END$$;

DELIMITER $$
CREATE PROCEDURE insere_tipo_programacao(x VARCHAR(100))
BEGIN
	IF(x != '') THEN
		INSERT INTO tb_tipo_programacao(descricao_tipo) VALUES(x);
	ELSE
		select 'Preencha todos os campos.';
    END IF; 
END$$;

DELIMITER $$
CREATE PROCEDURE sel_tipo_prog(x int)
BEGIN
	select * from tb_tipo_programacao where cod_tipo_prog = x;
END$$;

DELIMITER $$
CREATE PROCEDURE atualiza_tipo_programacao(x VARCHAR(100), y INT)
BEGIN
	update tb_tipo_programacao set descricao_tipo = x
    where cod_tipo_prog = y;
END$$;

DELIMITER $$
CREATE PROCEDURE 
insere_programacao(descricao_prog VARCHAR(1000), pavilhao_prog VARCHAR(100), obs_prog  VARCHAR(1000), hora_inicio_prog TIME, hora_fim_prog TIME, img_prog VARCHAR(100), video_prog  VARCHAR(100), cod_tipo_prog INT, cod_evento INT)
BEGIN
	IF((descricao_prog != '') && (pavilhao_prog != '') && (hora_inicio_prog != '') && (cod_tipo_prog != '') && (cod_evento != '')) THEN
		INSERT INTO tb_programacao (descricao_prog, obs_prog, pavilhao_prog, hora_inicio_prog, hora_fim_prog, img_prog, video_prog, cod_tipo_prog, cod_evento) 
		VALUES(descricao_prog,pavilhao_prog,obs_prog,hora_inicio_prog,hora_fim_prog,img_prog,video_prog,cod_tipo_prog,cod_evento);
	ELSE
		select 'Preencha todos os campos.';
    END IF;  
END$$;

DELIMITER $$
CREATE PROCEDURE sel_prog(x INT)
BEGIN
	select * 
	from tb_programacao as p, tb_tipo_programacao as tp, tb_evento as e
	where p.cod_tipo_prog = tp.cod_tipo_prog
	and p.cod_evento = e.cod_evento
	and p.cod_prog = x;
END$$;

DELIMITER $$
CREATE PROCEDURE atualiza_prog(x INTEGER,descricao_prog VARCHAR(1000),pavilhao_prog VARCHAR(100),obs_prog VARCHAR(1000),
								hora_inicio_prog TIME,hora_fim_prog TIME,img_prog VARCHAR(100),video_prog VARCHAR(100),
								cod_tipo_prog INTEGER,cod_evento INTEGER)
BEGIN
	IF ((x != '') && (descricao_prog != '') && (pavilhao_prog != '') && (hora_inicio_prog != '') && (cod_tipo_prog != '') && (cod_evento != '')) THEN
		UPDATE tb_programacao SET descricao_prog=descricao_prog,pavilhao_prog=pavilhao_prog,obs_prog=obs_prog,
			hora_inicio_prog=hora_inicio_prog,
			hora_fim_prog=hora_fim_prog,
			img_prog=img_prog,
			video_prog=video_prog,
			cod_tipo_prog=cod_tipo_prog,
			cod_evento=cod_evento 
		WHERE cod_prog = x;
	ELSE
		SELECT 'Preencha todos os campos.';
	END IF;
END$$;

DELIMITER $$
CREATE PROCEDURE del_prog(x INT)
BEGIN
	delete from tb_programacao where cod_prog = x;
END$$;

DELIMITER $$
CREATE PROCEDURE del_sobre(x INT)
BEGIN
	delete from tb_sobre_evento where cod_sobre_evento = x;
END$$;

DELIMITER $$
CREATE PROCEDURE insere_sobre(titulo_sobre VARCHAR(100), descricao_sobre VARCHAR(1000), img_sobre VARCHAR(100), cod_evento INTEGER)
BEGIN
	IF((titulo_sobre != '') && (descricao_sobre != '') &&(cod_evento != '')) THEN
		INSERT INTO tb_sobre_evento (titulo_sobre, descricao_sobre, img_sobre, cod_evento) 
        VALUES(titulo_sobre, descricao_sobre, img_sobre, cod_evento);
	ELSE
		select 'Preencha todos os campos.';
    END IF; 
END$$;

DELIMITER $$
CREATE PROCEDURE atualiza_sobre(cod_sobre_e INT, titulo_sobre VARCHAR(100),descricao_sobre VARCHAR(1000), img_sobre VARCHAR(100), cod_evento INT)
BEGIN
	IF((cod_sobre_e != '') && (titulo_sobre != '') && (descricao_sobre != '') && (cod_evento != '')) THEN
		UPDATE tb_sobre_evento
		SET titulo_sobre=titulo_sobre,descricao_sobre=descricao_sobre,img_sobre=img_sobre,cod_evento=cod_evento 
		WHERE cod_sobre_evento = cod_sobre_e;
    ELSE
		SELECT 'Preencha todos os campos.';
    END IF;
END $$;

DELIMITER $$
CREATE PROCEDURE atualiza_cardapio_item(cod_i INT, cod_c INT, nome VARCHAR(100), valor FLOAT(10,2), descricao VARCHAR(1000), img VARCHAR(100), tipo_item INT)
BEGIN
	DECLARE aux_cardapio_item INT;
    SET aux_cardapio_item = 0;
    
    IF((cod_c != '') && (cod_i != '') && (nome != '') && (tipo_item != '')) THEN
    
		select cod_cardapio_tipo from tb_cardapio_tipo 
		where cod_cardapio = cod_c
		and cod_item = cod_i INTO aux_cardapio_item;
		
        IF(aux_cardapio_item != 0) THEN
			UPDATE tb_item 
			SET nome_item = nome,valor_item = valor,
			descricao_item=descricao ,img_item=img ,cod_tipo_item = tipo_item WHERE cod_item = cod_i;
        ELSE
			UPDATE tb_item 
			SET nome_item = nome,valor_item = valor,
			descricao_item=descricao ,img_item=img ,cod_tipo_item = tipo_item WHERE cod_item = cod_i;
			
            INSERT tb_cardapio_tipo(cod_cardapio, cod_item)
            VALUES(cod_c, cod_i);
		END IF;
	ELSE
		SELECT 'Preencha todos os campos!';
    END IF;
END$$;

DELIMITER $$
CREATE PROCEDURE del_cardapio_item(x INT)
BEGIN
    DELETE FROM tb_cardapio_tipo WHERE cod_item = x;

	DELETE FROM tb_item WHERE cod_item = x;
END$$;

DELIMITER $$
CREATE PROCEDURE 
insere_cardapio(nome VARCHAR(100), valor FLOAT(10,2), descricao VARCHAR(1000), img VARCHAR(100), tipo_item INTEGER, cardapio INTEGER)
BEGIN
	DECLARE aux INT;
    SET aux = 0;
	IF((nome != '') && (tipo_item != '') && (cardapio != '')) THEN
		
        INSERT INTO tb_item(nome_item, valor_item, descricao_item, img_item, cod_tipo_item) 
        VALUES (nome, valor, descricao, img, tipo_item);
        
        select max(cod_item) from tb_item INTO aux;
        
        INSERT INTO tb_cardapio_tipo(cod_cardapio, cod_item) 
        VALUES (cardapio, aux);
        
	ELSE
		select 'Preencha todos os campos.';
    END IF;    
END$$;

DELIMITER $$
CREATE PROCEDURE sel_cidade_estado()
BEGIN
	select * from tb_cidade as c, tb_estado as e where c.cod_estado = e.cod_estado;
END$$;