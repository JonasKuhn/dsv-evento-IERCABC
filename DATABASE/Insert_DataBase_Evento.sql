INSERT INTO `tb_estado` (`cod_estado`, `nome_estado`, `uf`) VALUES
(1, 'Rio Grande do Sul', 'RS'),
(2, 'Santa Catarina', 'SC');


INSERT INTO `tb_cidade` (`cod_cidade`, `nome_cidade`, `cod_estado`) VALUES
(1, 'Itapiranga', 1),
(2, 'Iporã do Oeste', 2),
(3, 'São João do Oeste', 2),
(4, 'Sede Capela', 2),
(5, 'Tunápolis', 2);


INSERT INTO `tb_localizacao` (`cod_localizacao`, `nome_rua`, `numero`, `cod_cidade`) VALUES
(1, 'Rua Rio Pardo', '101', 3),
(2, 'Rua do Comércio', '221', 1),
(3, 'Rua Sede Capela', '-', 1),
(4, 'Rua Afonso Rodrigues', '14', 5),
(5, 'Rua Gustavo Fetter', '1118', 2),
(6, 'Rua 25 de Julho', '338', 1),
(7, 'Local Evento_BD', '000', 4);


INSERT INTO `tb_contato` (`cod_contato`, `nome_contato`, `telefone_contato`, `email_contato`, `cod_localizacao`) VALUES
(1, 'Agropecuária Bressler', '+55 (49) 3636-1023', null, 1),
(2, 'Sorveteria Tropical', '+55 (49) 3677-0400', null, 2),
(3, 'Bar e Lanchonete Capelense', null, null, 3),
(4, 'Restaurante Pauli', '+55 (49) 3632-1128', null, 4),
(5, 'Hora Certa Conveniencia e Cervejaria', '+55 (49) 3634-2104', null, 5),
(6, 'Jonas Kuhn', '+55 (49) 98435-5344', 'jonaskuhn220@gmail.com', 6),
(7, 'Beno Inácio Bressler', '+55 (49) 99987-1515', null, 7);


INSERT INTO `tb_usuario` (`cod_usuario`, `usuario_usuario`, `senha_usuario`, `cod_contato`) VALUES
(1, 'jonas', '9c5ddd54107734f7d18335a5245c286b', 6);


INSERT INTO `tb_cardapio` (`cod_cardapio`, `titulo_cardapio`, `obs_cardapio`) VALUES
(1, 'Comidas', 'Trazer pratos e talheres.'),
(2, 'Bebidas', null),
(3, 'Acompanhamentos', null);


INSERT INTO `tb_evento` (`cod_evento`, `nome_evento`, `data_evento`, `organizacao_evento`, `cod_localizacao`, `cod_cardapio`,`cod_usuario`) VALUES
(1, 'Nome do Evento_BD', '2018-08-19', 'Instituto Esportivo Recriativo Cultural Assistencial Beneficiente e Colônial', 7, 1, 1);


INSERT INTO `tb_oraganizador` (`cod_organizadores`, `descricao_organizador`, `cod_contato`, `cod_evento`) VALUES
(1, 'Presidente', 7, 1);


INSERT INTO `tb_local_venda` (`cod_local_venda`, `cod_contato`, `cod_evento`) VALUES
(1,1,1),
(2,2,1),
(3,3,1),
(4,4,1),
(5,5,1);


INSERT INTO `tb_alimento_bebida` (`cod_alimento_bebida`, `nome`, `complemento`, `valor`, `cod_cardapio`, `cod_imagem`) VALUES
(1, 'Leitão a Paraguaia', null, null, 1, null),
(2, 'Pernil', null, null, 1, null),
(3, 'Lombinho', null, null, 1, null),
(4, 'Costela', null, null, 1, null),
(5, 'Saladas', 'Repolho, Alface, Tomate, Pepino, Brócolis, Cebola ...', null, 3, null),
(6, 'Pães', null, null, 3, null),
(7, 'Cuca', null, null, 3, null),
(8, 'Maionese', null, null, 3, null),
(9, 'Skol', 'Garrafas - 600ml / Latas - 350/473ml', '00,00', 2, null),
(10, 'Brahma', 'Garrafas - 600ml / Latas - 350/473ml', '00,00', 2, null),
(11, 'Barris de 20L', 'Chopp Fritz', '00,00', 2, null),
(12, 'Barris de 30L', 'Chopp Fritz', '00,00', 2, null),
(13, 'Barris de 50L', 'Chopp Fritz', '00,00', 2, null),
(14, 'Barris de 70L', 'Chopp Fritz', '00,00', 2, null),
(15, 'Caneca de Chopp', 'Chopp Fritz', '00,00', 2, null);


INSERT INTO `tb_sobre` (`cod_sobre`, `titulo_sobre`, `descricao_sobre`, `cod_imagem`, `cod_evento`) VALUES
(1, 'Nossa História', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
	e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os 
	embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como 
	também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na 
	década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente 
	quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', null, 1),
(2, 'Como Surgiu?', 'É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível 
	de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma 
	distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma 
	aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora 
	usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por lorem ipsum mostra vários websites ainda 
	em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e 
	às vezes de propósito (injetando humor, e coisas do gênero).', null, 1);


INSERT INTO `tb_programacao` (`cod_programacao`, `titulo_programacao`, `descricao_programacao`, `hora_inicio`, `hora_fim`, `local_programacao`, `cod_evento`) VALUES
(1, 'Alvorada Festiva', 'Alguma descrição sobre a alvorada festiva.', '06:00:00', null, 'Falta especificar', 1),
(2, 'Recepção', 'Alguma descrição sobre a recepção.', '10:00:00', null, 'Falta especificar', 1),
(3, 'Pronunciamento / Abertura', 'Alguma descrição sobre o Pronunciamento / Abertura.', '11:00:00', null, 'Falta especificar', 1),
(4, 'Almoço', 'Alguma descrição sobre o Início Almoço.', '11:00:00', null, 'Falta especificar', 1),
(5, 'Para as crianças', 'Alguma descrição sobre o Para as crianças.', '10:00:00', '22:00:00', 'Falta especificar', 1),
(6, 'Shows','Alguma descrição sobre o Para as crianças.', '10:30:00', '22:00:00', 'Falta especificar', 1);


INSERT INTO `tb_item` (`cod_item`, `titulo_item`, `descricao_item`, `valor_item`, `obs_item`, `hora_inicio`, `hora_fim`, `cod_programacao`,`cod_imagem`) VALUES
(1, 'Banda KN', 'Alguma descrição para esse item.', '00,00', 'OBS', '10:30:00', '12:30:00', 6, null),
(2, 'Ireno e Dari', 'Alguma descrição para esse item.', '00,00', 'OBS', '13:00:00', '18:00:00', 6, null),
(3, 'Banda KN', 'Alguma descrição para esse item.', '00,00', 'OBS', '15:30:00', '17:30:00', 6, null),
(4, 'Banda Chopão', 'Alguma descrição para esse item.', '00,00', 'OBS', '18:00:00', '22:00:00', 6, null),
(5, 'Adulto Completo', 'Alguma descrição para esse item.', '00,00', 'OBS', null, null, 6, null),
(6, 'Adulto', 'Alguma descrição para esse item.', '00,00', 'OBS', null, null, 6, null),
(7, 'Criança', 'Alguma descrição para esse item.', '00,00', 'OBS', null, null, 6, null);