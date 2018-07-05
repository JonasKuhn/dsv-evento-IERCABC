## CIDADE ESTADO
DELIMITER $$
CREATE PROCEDURE sel_cidade_estado()
BEGIN
	select * from tb_cidade as c, tb_estado as e where c.cod_estado = e.cod_estado;
END$$
DELIMITER ;

## EVENTO
DELIMITER $$
CREATE PROCEDURE atualiza_evento (cod_e INT, nome VARCHAR(100), organizacao VARCHAR(200), data_evento DATE, rua VARCHAR(100), comunidade VARCHAR(200), banner VARCHAR(40), car INT, cit INT)
BEGIN
	IF ((nome != '') && (data_evento != '') && (organizacao != '') && (rua != '') && (comunidade != '') && (car != '') && (cit != '')) THEN
		UPDATE tb_evento SET nome_evento = nome, nome_organizacao_evento = organizacao,
        data_evento=data_evento, rua_evento=rua, nome_comunidade=comunidade, banner_evento = banner, cod_cardapio=car, 
        cod_cidade=cit WHERE cod_evento = cod_e;
	ELSE
		SELECT 'Preencha todos os campos.';
	END IF;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE del_evento(x INT)
BEGIN
	delete from tb_evento where cod_evento = x;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE 
insere_evento(nome VARCHAR(100), organizacao VARCHAR(200), data_evento DATE, rua VARCHAR(100), comunidade VARCHAR(200), banner VARCHAR(40), car INT, cit INT)
BEGIN
	IF((nome != '') && (data_evento != '') && (organizacao != '') && (rua != '') && (comunidade != '') && (car != '') && (cit != '')) THEN
		insert into tb_evento(nome_evento, nome_organizacao_evento, data_evento, rua_evento, nome_comunidade, banner_evento, cod_cardapio, cod_cidade)
		values(nome, organizacao, data_evento, rua, comunidade, banner, car, cit);
	ELSE
		select 'Preencha todos os campos.';
    END IF;    
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE sel_eventos()
BEGIN
	SELECT *
	FROM tb_evento as e, tb_cardapio as c, tb_cidade as ci, tb_estado as es
	WHERE e.cod_cardapio = c.cod_cardapio
	AND e.cod_cidade = ci.cod_cidade
	AND ci.cod_estado = es.cod_estado
	ORDER BY e.cod_evento ASC;
END$$
DELIMITER ;

## TIPO PROGRAMAÇÃO
DELIMITER $$
CREATE PROCEDURE atualiza_tipo_programacao(x VARCHAR(100), y INT)
BEGIN
IF ((x != '') && (y != '')) THEN	
	update tb_tipo_programacao set descricao_tipo = x
    where cod_tipo_prog = y;
	ELSE
		SELECT 'Preencha todos os campos.';
	END IF;
END$$
DELIMITE ;

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
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE insere_tipo_programacao(x VARCHAR(100))
BEGIN
	IF(x != '') THEN
		INSERT INTO tb_tipo_programacao(descricao_tipo) VALUES(x);
	ELSE
		select 'Preencha todos os campos.';
    END IF; 
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE sel_tipo_prog(x int)
BEGIN
	select * from tb_tipo_programacao where cod_tipo_prog = x;
END$$
DELIMITER ;

##PROGRAMAÇÃO
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
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE del_prog(x INT)
BEGIN
	delete from tb_programacao where cod_prog = x;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE insere_programacao(descricao_prog VARCHAR(1000), pavilhao_prog VARCHAR(100), obs_prog  VARCHAR(1000), hora_inicio_prog TIME, hora_fim_prog TIME, img_prog VARCHAR(100), video_prog  VARCHAR(100), cod_tipo_prog INT, cod_evento INT)
BEGIN
	IF((descricao_prog != '') && (pavilhao_prog != '') && (hora_inicio_prog != '') && (cod_tipo_prog != '') && (cod_evento != '')) THEN
		INSERT INTO tb_programacao (descricao_prog, obs_prog, pavilhao_prog, hora_inicio_prog, hora_fim_prog, img_prog, video_prog, cod_tipo_prog, cod_evento) 
		VALUES(descricao_prog,pavilhao_prog,obs_prog,hora_inicio_prog,hora_fim_prog,img_prog,video_prog,cod_tipo_prog,cod_evento);
	ELSE
		select 'Preencha todos os campos.';
    END IF;  
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE sel_prog(x INT)
BEGIN
	select * 
	from tb_programacao as p, tb_tipo_programacao as tp, tb_evento as e
	where p.cod_tipo_prog = tp.cod_tipo_prog
	and p.cod_evento = e.cod_evento
	and p.cod_prog = x;
END$$
DELIMITER ;

##SOBRE
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
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE del_sobre(x INT)
BEGIN
	delete from tb_sobre_evento where cod_sobre_evento = x;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE insere_sobre(titulo_sobre VARCHAR(100), descricao_sobre VARCHAR(1000), img_sobre VARCHAR(100), cod_evento INTEGER)
BEGIN
	IF((titulo_sobre != '') && (descricao_sobre != '') &&(cod_evento != '')) THEN
		INSERT INTO tb_sobre_evento (titulo_sobre, descricao_sobre, img_sobre, cod_evento) 
        VALUES(titulo_sobre, descricao_sobre, img_sobre, cod_evento);
	ELSE
		select 'Preencha todos os campos.';
    END IF; 
END$$
DELIMITER ;

##CARDAPIO ITEM
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
END$$
DELIMITER;

DELIMITER $$
CREATE PROCEDURE del_cardapio_item(x INT, y INT)
BEGIN
	DECLARE aux INT;
    SET aux = 0;
    
	select COUNT(cod_cardapio) from tb_cardapio_tipo 
	where cod_item = x INTO aux;
	
    IF((aux > 1) && (aux != 0) && (aux != '')) THEN 
		DELETE FROM tb_cardapio_tipo WHERE cod_item = x AND cod_cardapio = y;
	ELSE
		DELETE FROM tb_cardapio_tipo WHERE cod_item = x AND cod_cardapio = y;
		DELETE FROM tb_item WHERE cod_item = x;
    END IF;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE insere_item_cardapio(nome VARCHAR(100), valor FLOAT(10,2), descricao VARCHAR(1000), img VARCHAR(100), tipo_item INTEGER, cardapio INTEGER)
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
END$$
DELIMITER ;

##CARDAPIO
DELIMITER $$
CREATE PROCEDURE atualiza_cardapio(cod INT, nome Varchar(100), obs varchar(1000))
BEGIN
	IF((cod != '') && (nome != '')) THEN
		UPDATE tb_cardapio
		SET titulo_cardapio=nome, obs_cardapio=obs
		where cod_cardapio = cod;
    ELSE 
		SELECT 'Preencha todos os campos.';
    END IF;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE del_cardapio(cod INT)
BEGIN
	delete from tb_cardapio where cod_cardapio = cod;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE insere_cardapio(titulo Varchar(100), obs Varchar(1000))
BEGIN
    IF(titulo != '') THEN
		insert into tb_cardapio(titulo_cardapio, obs_cardapio)
		VALUES(titulo,obs);
	ELSE
		select 'Preencha todos os campos.';
	END IF;
END $$
DELIMITER ;

##CONTATO
DELIMITER $$
CREATE PROCEDURE atualiza_contato(contato int, evento int, nome varchar(100), tel varchar(15), email varchar(100), 
								img varchar(100), rua varchar(100) , nr VARCHAR(10),cidade int ,tipo int)
BEGIN
	DECLARE aux_contato INT;
    SET aux_contato = 0;
    
    IF((contato != '') && (evento != '') && (nome != '') && (cidade != '') && (tipo != '')) THEN
    
        select cod_evento_contato from tb_evento_contato 
		where cod_contato = contato
		and cod_evento = evento INTO aux_contato;
		
        IF(aux_contato != 0) THEN
			UPDATE tb_contato 
			SET nome_contato=nome,telefone_contato=tel,email_contato=email,img_contato=img,
            rua_contato=rua,nr_contato=nr, cod_cidade=cidade,cod_tipo_contato=tipo WHERE cod_contato = contato;
        ELSE
			UPDATE tb_contato 
			SET nome_contato=nome,telefone_contato=tel,email_contato=email,img_contato=img,
            rua_contato=rua,nr_contato=nr, cod_cidade=cidade,cod_tipo_contato=tipo WHERE cod_contato = contato;
			
            INSERT tb_evento_contato(cod_contato, cod_evento)
            VALUES(contato, evento);
		END IF;
	ELSE
		SELECT 'Preencha todos os campos!';
    END IF;
END$$
DELIMITER ;

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

DELIMITER $$
CREATE PROCEDURE insere_contato(nome VARCHAR(100), telefone VARCHAR(15),email VARCHAR(100),
				img VARCHAR(100),rua VARCHAR(100),nr VARCHAR(10),cidade int, tipo int,evento int)
BEGIN
	DECLARE aux INT;
    SET aux = 0;
	IF((nome != '') && (cidade != '') && (tipo != '') && (evento != ''))THEN
		INSERT INTO tb_contato(nome_contato,telefone_contato,email_contato,
						img_contato,rua_contato,nr_contato, cod_cidade,cod_tipo_contato) 
		VALUES (nome,telefone,email,img,rua,nr,cidade,tipo);
        
        select max(cod_contato) from tb_contato INTO aux;
        
        INSERT INTO tb_evento_contato(cod_contato, cod_evento) 
        VALUES (aux, evento);
    ELSE
		select 'Preencha todos os campos.';
    END IF;
END $$
DELIMITER ;

#ADMIN
DELIMITER $$
CREATE PROCEDURE atualiza_admin(cod_a INT, nome VARCHAR(100), cod_e INTEGER)
BEGIN
	IF((cod_a != '') && (nome != '') && cod_e != '') THEN
		UPDATE tb_admin 
		SET nome_admin = nome, cod_evento = cod_e
		WHERE cod_admin = cod_a;
	ELSE
		SELECT 'Preencha todos os campos';
    END IF;
END$$
DELIMITER ;