<?php
if (isset($login_cookie)) {
    ?>
    <div class="card mb-3">
        <div class="card-header text-center">
            <h3>Eventos</h3>
        </div>
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
                            <th>Cardápio</th>
                            <th>UF</th>
                            <th>Editar | Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../conexao.php';

                        $selectEvento = "CALL sel_eventos();";

                        $queryEvento = $pdo->query($selectEvento);

                        while ($dados = $queryEvento->fetch()) {
                            $cod = $dados['cod_evento'];
                            $nome = $dados['nome_evento'];
                            $nome_sociedade = $dados['nome_organizacao_evento'];
                            $data = $dados['data_evento'];
                            $rua = $dados['rua_evento'];
                            $comunidade = $dados['nome_comunidade'];
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
                                <td><?= $cardapio; ?></td>
                                <td><?= $uf; ?></td>
                                <td>
                                    <a href="?url=edit_evento.php&id=<?= $cod; ?>" title="EDITAR"><i class="fa fa-2x fa-edit pr-3 pl-3"></i></a>
                                    <a href="?url=excBD_evento.php&id=<?= $cod; ?>" onclick="return excluir('<?= $nome ?>');" title="EXCLUIR"><i class="fa fa-2x fa-trash-o"></i></a>
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
