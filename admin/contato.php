<?php
if (isset($login_cookie)) {
    $cod_eve = $_POST['cod_evento'];
    $cod_tip = $_POST['cod_contato'];
    if($cod_tip != 0) {
        if ($cod_eve != '') {
            
        } else {
            $cod_eve = 1;
        }

        if ($cod_tip != '') {
            
        } else {
            $cod_tip = 1;
        }
        $selectContato = "select * from tb_evento as e, tb_evento_contato as ec, tb_contato as c, tb_tipo_contato as tc, tb_cidade as ci, tb_estado as es "
                . "where e.cod_evento = ec.cod_evento "
                . "and ec.cod_contato = c.cod_contato "
                . "and c.cod_tipo_contato = tc.cod_tipo_contato "
                . "and c.cod_cidade = ci.cod_cidade "
                . "and ci.cod_estado = es.cod_estado "
                . "and tc.cod_tipo_contato = '$cod_tip' "
                . "and e.cod_evento = '$cod_eve';";

    } else{
        if ($cod_eve != '') {
            
        } else {
            $cod_eve = 1;
        }
        $selectContato = "select * from tb_evento as e, tb_evento_contato as ec, tb_contato as c, tb_tipo_contato as tc, tb_cidade as ci, tb_estado as es "
                . "where e.cod_evento = ec.cod_evento "
                . "and ec.cod_contato = c.cod_contato "
                . "and c.cod_tipo_contato = tc.cod_tipo_contato "
                . "and c.cod_cidade = ci.cod_cidade "
                . "and ci.cod_estado = es.cod_estado "
                . "and e.cod_evento = '$cod_eve';";
    }
    ?>
    <div class="card mb-3">
        <?php include './filtro_por_evento_contato.php'; ?>
        <div class="card-body">
            <a href="?url=adc_contato.php" title="Novo <?= $menu; ?>"><i class="fa fa-2x pb-2 pl-2 fa-plus-square"></i></a>
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>E-mail</th>
                            <th>Imagem</th>
                            <th>Rua</th>
                            <th>Número</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>Editar | Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'conexao.php';

                        $queryContato = $pdo->query($selectContato);

                        while ($dados = $queryContato->fetch()) {
                            $cod = $dados['cod_contato'];
                            $nome = $dados['nome_contato'];
                            $telefone = $dados['telefone_contato'];
                            $email = $dados['email_contato'];
                            $img = $dados['img_contato'];
                            $rua = $dados['rua_contato'];
                            $numero = $dados['nr_contato'];
                            $cidade = $dados['nome_cidade'];
                            $uf = $dados['uf'];
                            ?>
                            <tr>
                                <td><?= $nome; ?></td>
                                <td><?= $telefone; ?></td>
                                <td><?= $email; ?></td>
                                <td><?= $img; ?></td>
                                <td><?= $rua; ?></td>
                                <td><?= $numero; ?></td>
                                <td><?= $cidade; ?></td>
                                <td><?= $uf; ?></td>
                                <td>
                                    <a href="?url=edit_contato.php&id=<?= $cod; ?>&e=<?= $cod_eve; ?>" title="EDITAR"><i class="fa fa-2x fa-edit pr-3 pl-3"></i></a>
                                    <a href="?url=excBD_contato.php&id=<?= $cod; ?>&e=<?= $cod_eve; ?>" onclick="return excluir('<?=$nome?>');" title="EXCLUIR"><i class="fa fa-2x fa-trash-o"></i></a>
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