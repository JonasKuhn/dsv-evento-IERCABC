<?php
if (isset($login_cookie)) {
    $cod_eve = $_POST['cod_evento'];

    if ($cod_eve != '') {
        
    } else {
        $cod_eve = 1;
    }
    ?>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Lista de Cardápio</div>
        <div class="card-body">
            <a href="?url=adc_lista_cardapio.php" title="Novo <?= $menu; ?>"><i class="fa fa-2x pb-2 pl-2 fa-plus-square"></i></a>
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome do Cardápio</th>
                            <th>Observação do Cardápio</th>
                            <th>Editar | Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../conexao.php';

                        $selectListaCardapio = "select * from tb_cardapio";

                        $queryListaCardapio = $pdo->query($selectListaCardapio);

                        while ($dados = $queryListaCardapio->fetch()) {
                            $cod = $dados['cod_cardapio'];
                            $titulo_cardapio = $dados['titulo_cardapio'];
                            $obs_cardapio = $dados['obs_cardapio'];
                            ?>
                            <tr>
                                <td><?= $titulo_cardapio; ?></td>
                                <td><?= $obs_cardapio; ?></td>
                                <td>
                                    <a href="?url=edit_lista_cardapio.php&id=<?= $cod; ?>" title="EDITAR"><i class="fa fa-2x fa-edit pr-3 pl-3"></i></a>
                                    <a href="?url=excBD_lista_cardapio.php&id=<?= $cod; ?>" title="EXCLUIR"><i class="fa fa-2x fa-trash-o"></i></a>
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