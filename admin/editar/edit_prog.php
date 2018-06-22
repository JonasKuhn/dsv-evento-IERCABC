<?php
if (isset($login_cookie)) {
    include './../conexao.php';
    $id = $_GET['id'];
    $sql = "CALL sel_prog($id)";
    $query = $pdo->query($sql);
    $dados = $query->fetch();

    $descricao_prog = $dados['descricao_prog'];
    $pavilhao_prog = $dados['pavilhao_prog'];
    $obs_prog = $dados['obs_prog'];
    $hora_inicio_prog = $dados['hora_inicio_prog'];
    $hora_fim_prog = $dados['hora_fim_prog'];
    $img_prog = $dados['img_prog'];
    $video_prog = $dados['video_prog'];
    $cod_evento = $dados['cod_evento'];
    $cod_t_p = $dados['cod_tipo_prog'];
    ?>   
    <div class="container col-sm-6">
        <form class="form-horizontal" method="POST" action="editar/editBD_prog.php?v=<?=$id;?>&i=<?= $img_prog; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-6 control-label">Título:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" value="<?= $descricao_prog; ?>"name="descricao_prog" required autofocus placeholder="Digite o Título da Programação...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-6 control-label">Descrição:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" value="<?= $obs_prog; ?>" name="obs_prog" placeholder="Digite a descrição da Programação...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-6 control-label">Pavilhão / Local:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" value="<?= $pavilhao_prog; ?>" name="pavilhao_prog" required placeholder="Digite a descrição do Pavilhão...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Hora Início:</label>
                <div class="col-sm-3">
                    <input type="time" required class="form-control" value="<?= $hora_inicio_prog; ?>" name="hora_inicio">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Hora Fim:</label>
                <div class="col-sm-3">
                    <input type="time" class="form-control" value="<?= $hora_fim_prog; ?>" name="hora_fim">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-8 control-label">Imagem: <?= $img_prog; ?></label>
                <div class="col-sm-12">
                    <input type="file" class="form-control" name="img_prog">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Video:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" value="<?= $video_prog; ?>" name="video_prog" placeholder="Cole o link do video (youtube)">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div>
                <label class="col-sm-5 control-label">Tipo da Programação:</label>
                <div class="col-sm-12">
                    <select class="form-control" required name="tipo_prog">
                        <?php
                        include '../conexao.php';

                        $selectTipoProg = "select * from tb_tipo_programacao";

                        $queryTipoProg = $pdo->query($selectTipoProg);

                        while ($dados = $queryTipoProg->fetch()) {
                            $descricao_tipo = $dados['descricao_tipo'];
                            $cod_tipo_prog = $dados['cod_tipo_prog'];

                            if ($cod_tipo_prog == $cod_t_p) {
                                ?>
                                <option selected="true" value="<?= $cod_tipo_prog; ?>"><?= $cod_tipo_prog; ?> - <?= $descricao_tipo; ?></option>
                                <?php
                            }
                            if ($cod_tipo_prog != $cod_t_p) {
                                ?>
                                <option value="<?= $cod_tipo_prog; ?>"><?= $cod_tipo_prog; ?> - <?= $descricao_tipo; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <hr class="b-s-dashed">
            <div>
                <label class="col-sm-5 control-label" required>Nome do Evento:</label>
                <div class="col-sm-12">
                    <select class="form-control" required name="cod_evento">
                        <option value="">Selecione um Evento</option>
                        <?php
                        include '../conexao.php';

                        $selectEvento = "select * from tb_evento";

                        $queryEvento = $pdo->query($selectEvento);

                        while ($dados = $queryEvento->fetch()) {
                            $cod_ev = $dados['cod_evento'];
                            $nome_evento = $dados['nome_evento'];

                            if ($cod_evento == $cod_ev) {
                                ?>
                                <option selected="true" value="<?= $cod_evento; ?>"><?= $cod_evento; ?> - <?= $nome_evento; ?></option>
                                <?php
                            }
                            if ($cod_evento != $cod_ev) {
                                ?>
                                <option value="<?= $cod_evento; ?>"><?= $cod_evento; ?> - <?= $nome_evento; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <hr class="b-s-dashed">
            <input class="btn btn-dark btn-block" type="submit" value="Salvar" name="Salvar">
        </form>
    </div>
<?php } ?>