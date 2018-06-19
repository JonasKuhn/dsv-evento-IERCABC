<?php
if (isset($login_cookie)) {
    ?>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Evento</div>
        <div class="card-body">
            <a href="?url=adc_evento.php" title="Novo <?= $menu; ?>"><i class="fa fa-2x pb-2 pl-2 fa-plus-square"></i></a>
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome do Evento</th>
                            <th>Nome da Sociedade</th>
                            <th>Data do Evento</th>
                            <th>Rua Evento</th>
                            <th>Nome da Comunidade</th>
                            <th>Cidade</th>
                            <th>Admin</th>
                            <th>Cardápio</th>
                            <th>UF</th>
                            <th>Editar | Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../conexao.php';

                        $selectEvento = "SELECT e.cod_evento ,e.nome_evento, e.nome_organizacao_evento, e.data_evento, e.rua_evento, e.nome_comunidade, a.nome_admin, c.titulo_cardapio, ci.nome_cidade, es.uf
                                        FROM tb_evento as e, tb_cardapio as c, tb_admin as a, tb_cidade as ci, tb_estado as es
                                        WHERE e.cod_admin = a.cod_admin
                                        AND e.cod_cardapio = c.cod_cardapio
                                        AND e.cod_cidade = ci.cod_cidade
                                        AND ci.cod_estado = es.cod_estado
                                        ORDER BY e.cod_evento ASC;";

                        $queryEvento = $pdo->query($selectEvento);

                        while ($dados = $queryEvento->fetch()) {
                            $cod = $dados['cod_evento'];
                            $nome = $dados['nome_evento'];
                            $nome_sociedade = $dados['nome_organizacao_evento'];
                            $data = $dados['data_evento'];
                            $rua = $dados['rua_evento'];
                            $comunidade = $dados['nome_comunidade'];
                            $nomeAdmin = $dados['nome_admin'];
                            $cardapio = $dados['titulo_cardapio'];
                            $cidade = $dados['nome_cidade'];
                            $uf = $dados['uf'];
                            ?>
                            <tr>
                                <td><?= $nome; ?></td>
                                <td><?= $nome_sociedade; ?></td>
                                <td><?= $data; ?></td>
                                <td><?= $rua; ?></td>
                                <td><?= $comunidade; ?></td>
                                <td><?= $cidade; ?></td>
                                <td><?= $nomeAdmin; ?></td>
                                <td><?= $cardapio; ?></td>
                                <td><?= $uf; ?></td>
                                <td>
                                    <a href="?url=edit_evento.php&id=<?= $cod; ?>" title="EDITAR"><i class="fa fa-2x fa-edit pr-3 pl-3"></i></a>
                                    <a href="?url=excBD_evento.php&id=<?= $cod; ?>" onclick="return excluir('<?=$nome?>');" title="EXCLUIR"><i class="fa fa-2x fa-trash-o"></i></a>
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
