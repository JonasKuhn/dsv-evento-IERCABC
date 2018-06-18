<?php
if (isset($login_cookie)) {
    ?>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Sobre do Evento</div>
        <div class="card-body">
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
                        include '../conexao.php';

                        $selectSobre = "select * from tb_sobre_evento;";

                        $querySobre = $pdo->query($selectSobre);

                        while ($dados = $querySobre->fetch()) {
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