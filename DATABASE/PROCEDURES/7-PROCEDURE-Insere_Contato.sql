DELIMITER $$
CREATE PROCEDURE 
insere_contato(nome VARCHAR(100), telefone VARCHAR(15),email VARCHAR(100),
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
END $$;