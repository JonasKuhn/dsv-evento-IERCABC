<?php
if (isset($login_cookie)) {
    ?>
    <div class="container col-sm-6">
        <form class="form-horizontal" method="POST" action="adicionar/adcBD_evento.php" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-4 control-label">Nome do Evento:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="nome_evento" required autofocus placeholder="Digite o nome...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-12 control-label">Nome da Sociedade:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="nome_sociedade" required placeholder="Digite o nome da sociedade...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Data do Evento:</label>
                <div class="col-sm-12">
                    <input type="date" required class="form-control" name="data"/>
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Rua do Evento:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="rua_evento" required placeholder="Digite o nome da rua...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div>
                <label class="col-sm-5 control-label" >Nome da Comunidade:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="nome_comunidade" required placeholder="Digite o nome da comunnidade...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div>
                <label class="col-sm-5 control-label" required >Nome da Cidade:</label>
                <div class="col-sm-12">
                    <select class="form-control" name="cidade">
                        <?php
                        include './conexao.php';

                        $selectCidadeEstado = "call sel_cidade_estado();";

                        $queryCidadeEstado = $pdo->query($selectCidadeEstado);

                        while ($dados = $queryCidadeEstado->fetch()) {
                            $nome_cidade = $dados['nome_cidade'];
                            $cod_cidade = $dados['cod_cidade'];
                            ?>
                            <option value="<?= $cod_cidade; ?>"><?= $cod_cidade; ?> - <?= $nome_cidade; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <hr class="b-s-dashed">
            <div>
                <label class="col-sm-5 control-label" required>Nome da Cardápio:</label>
                <div class="col-sm-12">
                    <select class="form-control" name="cardapio">
                        <?php
                        include './conexao.php';

                        $selectCardapio = "select * from tb_cardapio";

                        $queryCardapio = $pdo->query($selectCardapio);

                        while ($dados = $queryCardapio->fetch()) {
                            $titulo_cardapio = $dados['titulo_cardapio'];
                            $cod_cardapio = $dados['cod_cardapio'];
                            ?>
                            <option value="<?= $cod_cardapio; ?>"><?= $cod_cardapio; ?> - <?= $titulo_cardapio; ?></option>
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