INSERT INTO `tb_estado` (`cod_estado`, `nome_estado`, `uf`) VALUES
(1, 'Rio Grande do Sul', 'RS'),
(2, 'Santa Catarina', 'SC');


INSERT INTO `tb_cidade` (`cod_cidade`, `nome_cidade`, `cod_estado`) VALUES
(1, 'Itapiranga', 1),
(2, 'Iporã do Oeste', 2),
(3, 'São João do Oeste', 2),
(4, 'Sede Capela', 2),
(5, 'Tunápolis', 2);


INSERT INTO `tb_tipo_contato` (`cod_tipo_contato`, `descricao_tipo_contato`) VALUES 
(1, 'Pontos de Venda'),
(2, 'Organizadores'),
(3, 'Patrocinadores');


INSERT INTO `tb_contato` (`cod_contato`, `nome_contato`, `telefone_contato`, `email_contato`, `img_contato`, 
	`rua_contato`, `nr_contato`, `cod_cidade`, `cod_tipo_contato`) VALUES
(1, 'Agropecuária Bressler', '(49) 93636-1023', null, null, 'Rua Rio Pardo', '101', 3, 1),
(2, 'Sorveteria Tropical', '(49) 93677-0400', null, null, 'Rua do Comércio', '221', 1, 1),
(3, 'Bar e Lanchonete Capelense', null, null, null, 'Rua Sede Capela', '-', 1, 1),
(4, 'Restaurante Pauli', '(49) 93632-1128', null, null, 'Rua Afonso Rodrigues', '14', 5, 1),
(5, 'Hora Certa Conveniencia e Cervejaria', '(49) 3634-2104', null, null, 'Rua Gustavo Fetter', '1118', 2, 1),
(6, 'Beno Inácio Bressler', '(49) 99987-1515', null, null, 'Local Evento_BD', '000', 4, 2);


INSERT INTO `tb_admin` (`cod_admin`, `login_admin`, `senha_admin`, `nome_admin`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN');


INSERT INTO `tb_cardapio` (`cod_cardapio`, `titulo_cardapio`, `obs_cardapio`) VALUES
(1, 'Cardápio do 22º Evento', '');


INSERT INTO `tb_tipo_item` (`cod_tipo_item`, `descricao_tipo_item`, `valor_tipo_item`, `obs_tipo_item`) VALUES 
(1, 'Comidas', '20,00', 'Valor apenas do almoço, shows não incluídos.'),
(2, 'Bebidas', null, null),
(3, 'Acompanhamentos', null, null);


INSERT INTO `tb_item` (`cod_item`, `nome_item`, `descricao_item`, `valor_item`, `img_item`, `cod_tipo_item`) VALUES
(1, 'Leitão a Paraguaia', null, null, null, 1),
(2, 'Pernil',             null, null, null, 1),
(3, 'Lombinho',           null, null, null, 1),
(4, 'Costela',            null, null, null, 1),
(5, 'Saladas', 'Repolho, Alface, Tomate, Pepino, Brócolis, Cebola ...', null, null, 3),
(6, 'Pães',               null, null, null, 3),
(7, 'Cuca',               null, null, null, 3),
(8, 'Maionese',           null, null, null, 3),
(9,  'Skol',            'Garrafas - 600ml / Latas - 350/473ml', '', null, 2),
(10, 'Brahma',          'Garrafas - 600ml / Latas - 350/473ml', '', null, 2),
(11, 'Barris de 20L',   'Chopp Fritz',                          '', null, 2),
(12, 'Barris de 30L',   'Chopp Fritz',                          '', null, 2),
(13, 'Barris de 50L',   'Chopp Fritz',                          '', null, 2),
(14, 'Barris de 70L',   'Chopp Fritz',                          '', null, 2),
(15, 'Caneca de Chopp', 'Chopp Fritz',                          '', null, 2);


INSERT INTO `tb_cardapio_tipo` (`cod_cardapio_tipo`, `cod_cardapio`, `cod_item`) VALUES 
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(13, 1, 13),
(14, 1, 14),
(15, 1, 15);


INSERT INTO `tb_evento` (`cod_evento`, `nome_evento`, `nome_organizacao_evento`, `data_evento`, `rua_evento`, `nome_comunidade`, `cod_admin`, `cod_cardapio`, `cod_cidade`) VALUES
(1, 'Nome do Evento_BD', 'Instituto Esportivo Recriativo Cultural Assistencial Beneficiente e Colônial', '2018-09-19', 'Jaboticaba', '', 1, 1, 3);


INSERT INTO `tb_evento_contato` (`cod_evento_contato`, `cod_contato`, `cod_evento`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1);


INSERT INTO `tb_tipo_programacao` (`cod_tipo_prog`, `descricao_tipo`) VALUES
(1, 'Alvorada Festiva'),
(2, 'Recepção'),
(3, 'Pronunciamento / Abertura'),
(4, 'Almoço'),
(5, 'Para as Crianças'),
(6, 'Shows');


INSERT INTO `tb_programacao` (`cod_prog`, `descricao_prog`, `obs_prog`, `pavilhao_prog`, `hora_inicio_prog`, `hora_fim_prog`, `img_prog`, `video_prog`, `cod_tipo_prog`, `cod_evento`) VALUES
(1, 'Inicio da preparação das carnes suínas',               '', 'LOCAL', '06:00:00', null,        '', '', 1, 1),
(2, 'Comunidade estará a espera de todos os participantes', '', 'LOCAL', '10:00:00', null,        '', '', 2, 1),
(3, 'Fala do presidente da comunidade e patrocinadores',    '', 'LOCAL', '10:30:00', null,        '', '', 3, 1),
(4, 'Almoço especial preparado pela comunidade',            '', 'LOCAL', '11:00:00', null,        '', '', 4, 1),
(5, 'Um parque de diversões.',                              '', 'LOCAL', '10:00:00', '22:00:00',  '', '', 5, 1),
(6, 'Banda KN',                                             '', 'LOCAL', '10:30:00', '12:30:00',  '', '', 6, 1),
(7, 'Ireno e Dari',                                         '', 'LOCAL', '13:00:00', '18:00:00',  '', '', 6, 1),
(8, 'Banda KN',                                             '', 'LOCAL', '15:30:00', '17:30:00',  '', '', 6, 1),
(9, 'Banda Chopão',                                         '', 'LOCAL', '18:00:00', '22:00:00',  '', '', 6, 1);


INSERT INTO `tb_sobre_evento` (`cod_sobre_evento`, `titulo_sobre`, `descricao_sobre`, `img_sobre`, `cod_evento`) VALUES
(1, 'Nossa História', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
	e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os 
	embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como 
	também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na 
	década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente 
	quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', '', 1),
(2, 'Como Surgiu?', 'É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível 
	de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma 
	distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma 
	aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora 
	usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por lorem ipsum mostra vários websites ainda 
	em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e 
	às vezes de propósito (injetando humor, e coisas do gênero).', '', 1);