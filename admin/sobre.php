<?php
if (isset($login_cookie)) {
    $cod_eve = $_POST['cod_evento'];

    if ($cod_eve != '') {
        
    } else {
        $cod_eve = 1;
    }
    ?>
    <div class="container-fluid">
        <div class="card mb-3">
            <?php include './filtro_por_evento_sobre.php'; ?>
            <div class="card-body">
                <a href="?url=adc_sobre.php" title="Novo <?= $menu; ?>"><i class="fa fa-2x pb-2 pl-2 fa-plus-square"></i></a>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Evento</th>
                                <th>Título Sobre</th>
                                <th>Descrição</th>
                                <th>Imagem</th>
                                <th>Editar | Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'conexao.php';

                            $selectSobre = "select * from tb_sobre_evento "
                                    . "where cod_evento = '$cod_eve';";

                            $querySobre = $pdo->query($selectSobre);

                            while ($dados = $querySobre->fetch()) {
                                $cod = $dados['cod_sobre_evento'];
                                $titulo = $dados['titulo_sobre'];
                                $descricao = $dados['descricao_sobre'];
                                $img = $dados['img_sobre'];
                                $cod_evento = $dados['cod_evento'];

                                $selectEvento = "select * from tb_evento where cod_evento = '$cod_evento';";
                                $queryEvento = $pdo->query($selectEvento);
                                $evento = $queryEvento->fetch();
                                ?>
                                <tr>
                                    <td><?= $evento['nome_evento']; ?></td>
                                    <td><?= $titulo; ?></td>
                                    <td><?= $descricao; ?></td>
                                    <td><?= $img; ?></td>
                                    <td>
                                        <a href="?url=edit_sobre.php&id=<?= $cod; ?>" title="EDITAR"><i class="fa fa-2x fa-edit pr-3 pl-3"></i></a>
                                        <a href="?url=excBD_sobre.php&id=<?= $cod; ?>" onclick="return excluir('<?= $titulo ?>');" title="EXCLUIR"><i class="fa fa-2x fa-trash-o"></i></a>
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
    </div>
<?php } ?>