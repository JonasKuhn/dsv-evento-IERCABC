DELIMITER $$
CREATE PROCEDURE atualiza_admin(cod_a INT, login VARCHAR(100), nome VARCHAR(100), senha VARCHAR(100), cod_e INTEGER)
BEGIN
	IF((cod_a != '') && (admin != '') && (senha != '')  && (nome != '') && cod_e != '') THEN
		UPDATE tb_admin 
		SET login_admin = login, senha_admin = senha, nome_admin = nome, cod_evento = cod_e
		WHERE cod_admin = cod_a;
	ELSE
		SELECT 'Preencha todos os campos';
    END IF;
END$$
DELIMITER ;