DELIMITER $$
CREATE PROCEDURE insere_cardapio(titulo Varchar(100), obs Varchar(1000))
BEGIN
    IF(titulo != '') THEN
		insert into tb_cardapio(titulo_cardapio, obs_cardapio)
		VALUES(titulo,obs);
	ELSE
		Select 'Campo Nome Cardápio está Vazio!';
	END IF;
END $$;