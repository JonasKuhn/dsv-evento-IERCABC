<?php
if (isset($login_cookie)) {
    ?>
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="text-center">Admin</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Login</th>
                            <th>Senha</th>
                            <th>Evento Ativo</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'conexao.php';

                        $selectAdmin = "select * from tb_admin;";

                        $queryAdmin = $pdo->query($selectAdmin);

                        while ($dados = $queryAdmin->fetch()) {
                            $cod = $dados['cod_admin'];
                            $login = $dados['login_admin'];
                            $nome = $dados['nome_admin'];
                            $evento_ativo = $dados['cod_evento'];
                            ?>
                            <tr>
                                <td><?= $nome; ?></td>
                                <td><?= $login; ?></td>
                                <td>xxxxxxxxxxxxxx</td>
                                <td><?= $evento_ativo; ?></td>
                                <td>
                                    <a href="?url=edit_admin.php&c=<?= $cod; ?>" title="EDITAR"><i class="fa fa-2x fa-edit pr-3 pl-3"></i></a>
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