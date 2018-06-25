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
                            <th>Editar | Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../conexao.php';

                        $selectAdmin = "select login_admin, nome_admin from tb_admin;";

                        $queryAdmin = $pdo->query($selectAdmin);

                        while ($dados = $queryAdmin->fetch()) {
                            $login = $dados['login_admin'];
                            $nome = $dados['nome_admin'];
                            ?>
                            <tr>
                                <td><?= $nome; ?></td>
                                <td><?= $login; ?></td>
                                <td>xxxxxxx</td>
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