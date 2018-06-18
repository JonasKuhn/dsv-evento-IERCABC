<?php
if (isset($login_cookie)) {
    ?>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Contatos </div>
        <div class="card-body">
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
                        include '../conexao.php';

                        $selectContato = "select c.nome_contato, c.telefone_contato, c.email_contato, c.img_contato, c.rua_contato, c.nr_contato, ci.nome_cidade, es.uf
                                        from tb_evento as e, tb_evento_contato as ec, tb_contato as c, tb_tipo_contato as tc, tb_cidade as ci, tb_estado as es
                                        where e.cod_evento = ec.cod_evento
                                        and ec.cod_contato = c.cod_contato
                                        and c.cod_tipo_contato = tc.cod_tipo_contato
                                        and c.cod_cidade = ci.cod_cidade
                                        and ci.cod_estado = es.cod_estado;";

                        $queryContato = $pdo->query($selectContato);

                        while ($dados = $queryContato->fetch()) {
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