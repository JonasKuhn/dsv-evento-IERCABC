## PROGRAMAÇÃO DO EVENTO
create view admin_evento_programacao_tipo_prog as
select p.*
from tb_admin as a, tb_evento as e, tb_programacao as p, tb_tipo_programacao as tp
where a.cod_evento = e.cod_evento
and e.cod_evento = p.cod_evento
and p.cod_tipo_prog = tp.cod_tipo_prog;

## CONTATOS DO EVENTO 
create view admin_evento_contato_tipo_contato as
select c.*
from tb_admin as a, tb_evento as e, tb_evento_contato as ec, tb_contato as c, tb_tipo_contato as tc
where a.cod_evento = e.cod_evento
and e.cod_evento = ec.cod_evento
and ec.cod_contato = c.cod_contato
and c.cod_tipo_contato = tc.cod_tipo_contato;

## ITENS CARDÁPIO
create view admin_evento_cardapio_item as
select i.*
from tb_admin as a, tb_evento as e, tb_cardapio as c, tb_cardapio_tipo as ct, tb_item as i
where a.cod_evento = e.cod_evento
and e.cod_cardapio = c.cod_cardapio
and c.cod_cardapio = ct.cod_cardapio
and ct.cod_item = i.cod_item;

## BUSCA POR PONTO DE VENDAS
CREATE VIEW busca_ponto_vendas AS
SELECT c.*, tc.descricao_tipo_contato, cit.nome_cidade, est.uf
FROM tb_admin as a, tb_evento AS e, tb_evento_contato AS ec, tb_contato AS c, tb_tipo_contato AS tc, tb_cidade as cit, tb_estado as est
WHERE a.cod_evento = e.cod_evento
AND e.cod_evento = ec.cod_evento
AND ec.cod_contato = c.cod_contato
AND c.cod_cidade = cit.cod_cidade
AND cit.cod_estado = est.cod_estado
AND c.cod_tipo_contato = tc.cod_tipo_contato
AND tc.cod_tipo_contato = 1;
