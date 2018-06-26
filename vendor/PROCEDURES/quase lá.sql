SELECT * FROM tb_cardapio as c, tb_cardapio_tipo as ct, tb_item as i, tb_tipo_item as ti 
where c.cod_cardapio = ct.cod_cardapio 
and ct.cod_item = i.cod_item 
and i.cod_tipo_item = ti.cod_tipo_item 
and ti.cod_tipo_item = 1
and c.cod_cardapio = 1