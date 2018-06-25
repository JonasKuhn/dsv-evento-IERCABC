<?php
if (isset($login_cookie)) {
    ?>
    <div class="container col-sm-6">
        <form class="form-horizontal" method="POST" action="adicionar/adcBD_prog.php" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-6 control-label">Título:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="titulo_prog" required autofocus placeholder="Digite o Título da Programação...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-6 control-label">Descrição:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="descricao_prog" placeholder="Digite a descrição da Programação...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-6 control-label">Pavilhão / Local:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="pavilhao_prog" required placeholder="Digite a descrição do Pavilhão...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Hora Início:</label>
                <div class="col-sm-3">
                    <input type="time" required class="form-control" name="hora_inicio">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Hora Fim:</label>
                <div class="col-sm-3">
                    <input type="time" class="form-control" name="hora_fim">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Imagem:</label>
                <div class="col-sm-12">
                    <input type="file" class="form-control" name="img_prog">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Video:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="video_prog" placeholder="Cole o link do video (youtube)">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div>
                <label class="col-sm-5 control-label">Tipo da Programação:</label>
                <div class="col-sm-12">
                    <select class="form-control" required name="tipo_prog"> 
                        <option value="">Selecione um Tipo</option>
                        <?php
                        include '../conexao.php';

                        $selectTipoProg = "select * from tb_tipo_programacao";

                        $queryTipoProg = $pdo->query($selectTipoProg);

                        while ($dados = $queryTipoProg->fetch()) {
                            $descricao_tipo = $dados['descricao_tipo'];
                            $cod_tipo_prog = $dados['cod_tipo_prog'];
                            ?>
                            <option value="<?= $cod_tipo_prog; ?>"><?= $cod_tipo_prog; ?> - <?= $descricao_tipo; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <hr class="b-s-dashed">
            <div>
                <label class="col-sm-5 control-label" required>Nome do Evento:</label>
                <div class="col-sm-12">
                    <select class="form-control" required name="nome_evento">
                        <option value="">Selecione um Evento</option>
                        <?php
                        include '../conexao.php';

                        $selectEvento = "select * from tb_evento";

                        $queryEvento = $pdo->query($selectEvento);

                        while ($dados = $queryEvento->fetch()) {
                            $cod_evento = $dados['cod_evento'];
                            $nome_evento = $dados['nome_evento'];
                            ?>
                            <option value="<?= $cod_evento; ?>"><?= $cod_evento; ?> - <?= $nome_evento; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <hr class="b-s-dashed">
            <input class="btn btn-dark btn-block" type="submit" onclick="return salvar();" value="ADICIONAR" name="ADICIONAR">
        </form>
    </div>
<?php } ?>