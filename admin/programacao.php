<?php
if (isset($login_cookie)) {
    $cod_eve = $_POST['cod_evento'];
    $cod_tipo_prog = $_POST['tipo_prog'];
    if ($cod_tipo_prog != 0) {
        if ($cod_eve != '') {
            
        } else {
            $cod_eve = 1;
        }

        if ($cod_tipo_prog != '') {
            
        } else {
            $cod_tipo_prog = 1;
        }
        $selectProg = "select * from tb_tipo_programacao as tp, tb_programacao as p"
                . " where p.cod_tipo_prog = tp.cod_tipo_prog"
                . " and p.cod_evento = '$cod_eve'"
                . " and p.cod_tipo_prog = '$cod_tipo_prog'"
                . " order by cod_prog ASC;";
    } else {
        if ($cod_eve != '') {
            
        } else {
            $cod_eve = 1;
        }
        $selectProg = "select * from tb_tipo_programacao as tp, tb_programacao as p"
                . " where p.cod_tipo_prog = tp.cod_tipo_prog"
                . " and p.cod_evento = '$cod_eve'"
                . " order by cod_prog ASC;";
    }
    ?>
    <div class="container-fluid">
        <div class="card mb-3">
            <?php include './filtro_por_evento_prog.php'; ?>
            <div class="card-body">
                <a href="?url=adc_prog.php" title="Novo <?= $menu; ?>"><i class="fa fa-2x pb-2 pl-2 fa-plus-square"></i></a>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tipo <br>Programação</th>
                                <th>Descrição</th>
                                <th>Hora Início</th>
                                <th>Hora Fim</th>
                                <th>Local da <br>Programação</th>
                                <th>Observação da <br>Programação</th>
                                <th>Imagem</th>
                                <th>Vídeo</th>
                                <th>Editar | Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'conexao.php';

                            $queryProg = $pdo->query($selectProg);

                            while ($dados = $queryProg->fetch()) {
                                $cod = $dados['cod_prog'];
                                $descricao = $dados['descricao_prog'];
                                $pavilhao = $dados['pavilhao_prog'];
                                $obs = $dados['obs_prog'];
                                $h_inicio = $dados['hora_inicio_prog'];
                                $h_fim = $dados['hora_fim_prog'];
                                $img = $dados['img_prog'];
                                $video = $dados['video_prog'];
                                $tipo_prog = $dados['cod_tipo_prog'];
                                $descricao_tipo = $dados['descricao_tipo'];
                                ?>
                                <tr>
                                    <td><?= $descricao_tipo ?></td>
                                    <td><?= $descricao; ?></td>
                                    <td><?= $h_inicio; ?></td>
                                    <td><?= $h_fim; ?></td>
                                    <td><?= $pavilhao; ?></td>
                                    <td><?= $obs; ?></td>
                                    <td><?= $img; ?></td>
                                    <td><?= $video; ?></td>
                                    <td>
                                        <a href="?url=edit_prog.php&id=<?= $cod; ?>" title="EDITAR"><i class="fa fa-2x fa-edit pr-3 pl-3"></i></a>
                                        <a href="?url=excBD_prog.php&id=<?= $cod; ?>" onclick="return excluir('<?= $descricao ?>');" title="EXCLUIR"><i class="fa fa-2x fa-trash-o"></i></a>
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