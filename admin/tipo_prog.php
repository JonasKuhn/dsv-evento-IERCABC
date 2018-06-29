<?php
if (isset($login_cookie)) {
    ?>
    <div class="card mb-3">
        <div class="card-header text-center">
            <h3>Tipos de Programação</h3>
        </div>
        <div class="card-body">
            <a href="?url=adc_tipo_prog.php" title="Novo <?= $menu; ?>"><i class="fa fa-2x pb-2 pl-2 fa-plus-square"></i></a>
            <div class="table-responsive">
                <table class="table table-bordered col-11" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome da Programação</th>
                            <th>Editar | Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'conexao.php';

                        $selectTipoProg = "select * from tb_tipo_programacao;";

                        $queryTipoProg = $pdo->query($selectTipoProg);

                        while ($dados = $queryTipoProg->fetch()) {
                            $cod = $dados['cod_tipo_prog'];
                            $tipo = $dados['descricao_tipo'];
                            ?>
                            <tr>
                                <td><?= $tipo; ?></td>
                                <td>
                                    <a href="?url=edit_tipo_prog.php&id=<?= $cod; ?>" title="EDITAR"><i class="fa fa-2x fa-edit pr-3 pl-3"></i></a>
                                    <a href="?url=excBD_tipo_prog.php&id=<?= $cod; ?>" onclick="return excluir('<?= $tipo ?>');" title="EXCLUIR"><i class="fa fa-2x fa-trash-o"></i></a>
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