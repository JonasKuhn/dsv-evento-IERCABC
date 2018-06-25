<?php
if (isset($login_cookie)) {
    ?>
    <div class="container col-sm-6">
        <form class="form-horizontal" method="POST" action="adicionar/adcBD_sobre.php" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-8 control-label">Titulo do Sobre:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="titulo_sobre" required autofocus placeholder="Digite o Titulo...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-8 control-label">Descrição do Sobre:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="descricao_sobre" required autofocus placeholder="Digite a Descrição...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Imagem:</label>
                <div class="col-sm-12">
                    <input type="file" class="form-control" name="img_sobre">
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
            <input class="btn btn-dark btn-block" type="submit" value="Salvar" name="Salvar">
        </form>
    </div>
<?php } ?>