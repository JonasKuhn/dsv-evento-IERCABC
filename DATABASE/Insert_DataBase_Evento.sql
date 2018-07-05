INSERT INTO `tb_estado` (`cod_estado`, `nome_estado`, `uf`) VALUES
(1, 'Rio Grande do Sul', 'RS'),
(2, 'Santa Catarina', 'SC');


INSERT INTO `tb_cidade` (`cod_cidade`, `nome_cidade`, `cod_estado`) VALUES
(1, 'Itapiranga', 2),
(2, 'Iporã do Oeste', 2),
(3, 'São João do Oeste', 2),
(4, 'Tunápolis', 2);


INSERT INTO `tb_tipo_contato` (`cod_tipo_contato`, `descricao_tipo_contato`) VALUES 
(1, 'Pontos de Venda'),
(2, 'Organizadores'),
(3, 'Patrocinadores');


INSERT INTO `tb_contato` (`cod_contato`, `nome_contato`, `telefone_contato`, `email_contato`, `img_contato`, 
	`rua_contato`, `nr_contato`, `cod_cidade`, `cod_tipo_contato`) VALUES
(1, 'Agropecuária Bressler',                '(49) 93636-1023', '', '', 'Rua Rio Pardo',        '101',  3, 1),
(2, 'Sorveteria Tropical',                  '(49) 93677-0400', '', '', 'Rua do Comércio',      '221',  1, 1),
(3, 'Bar e Lanchonete Capelense',           '',                '', '', 'Sede Capela',      '-',        1, 1),
(4, 'Restaurante Pauli',                    '(49) 93632-1128', '', '', 'Rua Afonso Rodrigues', '14',   4, 1),
(5, 'Hora Certa Conveniencia e Cervejaria', '(49) 3634-1179',  '', '', 'Rua Gustavo Fetter',   '1118', 2, 1),
(6, 'Mercado Kuster',                       '(49) 3636-3232',  '', '', 'Jaboticaba',           '',     3, 1),
(7, 'Termas São João',                      '(49) 3636-1034',  '', '', 'Jaboticaba',           '',     3, 1),
(8, 'Casa de Carnes Stulp',                 '(49) 3636-1144',  '', '', '',                     '',     3, 1),
(9, 'ME Moda Enxovais',                     '(49) 99836-8730', '', '', 'Rua do Comércio',      '',     1, 1),
(10, 'Canto Alemã',                         '(49) 3637-0097',  '', '', 'Cristo Rei',           '',     1, 1),
(11, 'Bar do Petry',                        '',                '', '', 'Beato Roque',          '',     3, 1),
(12, 'Beno Inácio Bressler',                '(49) 99987-1515', '', '', '',                     '',     3, 2);

INSERT INTO `tb_cardapio` (`cod_cardapio`, `titulo_cardapio`, `obs_cardapio`) VALUES
(1, 'Cardápio do 22º Evento', 'Adultos: R$ 25,00<br>Crianças até 11 anos: R$ 12,00<br>(Somente antecipado até <br>as 12:00 do dia 18/08)<br>Almoço vale ingresso <br>livre para os três shows');


INSERT INTO `tb_tipo_item` (`cod_tipo_item`, `descricao_tipo_item`, `valor_tipo_item`, `obs_tipo_item`) VALUES 
(1, 'Comidas', '20,00', 'Valor apenas do almoço, shows não incluídos.'),
(2, 'Bebidas', null, null),
(3, 'Acompanhamentos', null, null);


INSERT INTO `tb_item` (`cod_item`, `nome_item`, `descricao_item`, `valor_item`, `img_item`, `cod_tipo_item`) VALUES
(1, 'Leitão a Assado',       '',                '', 'leitao a paraguaia.jpg', 1),
(2, 'Pernil',                '',                '', 'pernil.jpg', 1),
(3, 'Lombinho',              '',                '', 'lombinho.jpg', 1),
(4, 'Pururuca',              '',                '', 'pururuca.jpg', 1),
(5, 'Carne Suína no Forno',  '',                '', 'carne-de-porco-assada.jpg', 1),
(6, 'Bife Suíno a Milanesa', '',                '', 'Bife-Suino-a-Milanesa.jpg', 1),
(7, 'Churrasco Suíno',       'Servido na Mesa', '', 'Churrasco-Suino.jpg', 1),
(8, 'Saladas Diversas',      '', '', '', 3),
(9, 'Pães',                  '', '', '', 3),
(10, 'Cuca',                 '', '', '', 3),
(11,  'Skol',                 'Garrafas-600ml / Latas-350/473ml', '6.00', '', 2),
(12, 'Brahma',                'Garrafas-600ml / Latas-350/473ml', '7.00', '', 2),
(13, 'Barris de Chopp Fritz', '20L / 30L / 50L / 70L',                '',     '', 2),
(14, 'Caneca de Chopp Fritz', '',                                     '6.00', '', 2);


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
(14, 1, 14);


INSERT INTO `tb_evento` (`cod_evento`, `nome_evento`, `nome_organizacao_evento`, `data_evento`, `rua_evento`, `nome_comunidade`, `banner_evento`, `cod_cardapio`, `cod_cidade`) VALUES
(1, '22ª Festa do Leitão', 'Instituto Esportivo Recriativo Cultural Assistencial Beneficiente e Colônial', '2018-09-19', 'Jaboticaba', 'Comunidade De Jaboticaba', 'cabecalho.jpg' ,1, 3);


INSERT INTO `tb_admin` (`cod_admin`, `login_admin`, `senha_admin`, `nome_admin`, `cod_evento`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN', '1');


INSERT INTO `tb_evento_contato` (`cod_evento_contato`, `cod_contato`, `cod_evento`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1);


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
(6, 'Banda KN',                                             '', 'LOCAL', '15:00:00', '19:00:00',  'kn.jpg', 'https://www.youtube.com/embed/YvldBs1_p8A?rel=0&controls=0&showinfo=0', 6, 1),
(7, 'Banda Festão',                                         '', 'LOCAL', '10:00:00', '15:00:00',  'ireno_e_dari.jpg', 'https://www.youtube.com/embed/pNluSRVkJZw?controls=0&showinfo=0', 6, 1),
(8, 'Banda Chopão',                                         '', 'LOCAL', '19:00:00', '23:00:00',  'choppao.jpg', 'https://www.youtube.com/embed/oXVv9fwAAc4?rel=0&controls=0&showinfo=0', 6, 1);


INSERT INTO `tb_sobre_evento` (`cod_sobre_evento`, `titulo_sobre`, `descricao_sobre`, `img_sobre`, `cod_evento`) VALUES
(1, 'Nossa História', 'A primeira Festa do leitão foi realizada no ano de 1996 e desde então vem sendo realizada anualmente, 
	contando com cada vez mais atrações e novas estruturas. O evento atrai anualmente centenas de festeiros, que encontram em 
	nossas dependências um delicioso almoço com base na carne suína e grandes atrações da região. Neste ano de 2018 a festa 
	completará 22 anos de existência e para comemorar será inaugurado um novo pavilhão, tornando possível atender ainda melhor 
	todos que quiserem se divertir e colaborar com a comunidade local.', 'comunidade.JPG', 1),
(2, 'Como Surgiu?', 'Tudo começou no ano de 1996, numa tarde de domingo onde a diretoria da associação estava reunida para tratar 
	de assuntos diversos, durante a reunião foi sugerido por um dos integrantes, que fosse criado um evento que se tornasse tradicional 
	e conhecido pela região, após um debate foi chegado ao um acordo e escolhido como tema a suinocultura, dando o nome de “Festa do leitão” 
	ao evento. A suinocultura foi escolhida em virtude de ser marca registrada da comunidade, além da necessidade de estimular ainda mais o 
	consumo da carne suína.', '', 1);