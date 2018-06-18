<?php
if (isset($login_cookie)) {
    ?>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Cardápio </div>
        <div class="card-body">
            <a href="#" title="Novo <?= $menu; ?>"><i class="fa fa-2x pb-2 pl-2 fa-plus-square"></i></a>
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Cardápio</th>
                            <th>Tipo</th>
                            <th>Nome do Item</th>
                            <th>Valor (Do Item)</th>
                            <th>Descrição do Item</th>
                            <th>Imagem</th>
                            <th>Editar | Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../conexao.php';

                        $selectCardapio = "select c.titulo_cardapio, i.nome_item, i.valor_item, i.descricao_item, i.img_item, it.descricao_tipo_item, it.obs_tipo_item
                                        from tb_evento as e, tb_cardapio as c, tb_cardapio_tipo as ct, tb_item as i, tb_tipo_item as it
                                        where e.cod_cardapio = c.cod_cardapio
                                        and c.cod_cardapio = ct.cod_cardapio
                                        and ct.cod_item = i.cod_item
                                        and i.cod_tipo_item = it.cod_tipo_item;";

                        $queryCardapio = $pdo->query($selectCardapio);

                        while ($dados = $queryCardapio->fetch()) {
                            $cardapio = $dados['titulo_cardapio'];
                            $tipo = $dados['descricao_tipo_item'];
                            $nomeItem = $dados['nome_item'];
                            $valorItem = $dados['valor_item'];
                            $descricaoItem = $dados['descricao_item'];
                            $img = $dados['img_item'];
                            ?>
                            <tr>
                                <td><?= $cardapio; ?></td>
                                <td><?= $tipo; ?></td>
                                <td><?= $nomeItem; ?></td>
                                <td><?= $valorItem; ?></td>
                                <td><?= $descricaoItem; ?></td>
                                <td><?= $img; ?></td>
                                <td>
                                    <a href="#" title="EDITAR"><i class="fa fa-2x fa-edit pr-3 pl-3"></i></a>
                                    <a href="#" title="EXCLUIR"><i class="fa fa-2x fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php } ?>