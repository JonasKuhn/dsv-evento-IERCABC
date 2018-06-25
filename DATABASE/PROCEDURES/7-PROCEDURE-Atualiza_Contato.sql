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
END$$;