<?php
if (isset($login_cookie)) {
    ?>
    <div class="container col-sm-6">
        <form class="form-horizontal" method="POST" action="adicionar/adcBD_contato.php" enctype="multipart/form-data">
            <div>
                <label class="col-sm-5 control-label" required >Tipo do Contato:</label>
                <div class="col-sm-12">
                    <select class="form-control" name="tipo_contato">
                        <?php
                        include './conexao.php';

                        $selectTipoContato = "select * from tb_tipo_contato;";

                        $queryTipoContato = $pdo->query($selectTipoContato);

                        while ($dados = $queryTipoContato->fetch()) {
                            $nome_tipo_contato = $dados['descricao_tipo_contato'];
                            $cod_tipo_contato = $dados['cod_tipo_contato'];
                            ?>
                            <option value="<?= $cod_tipo_contato; ?>"><?= $cod_tipo_contato; ?> - <?= $nome_tipo_contato; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-8 control-label">Nome do Contato:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="nome_contato" required 
                           autofocus placeholder="Digite o Nome do Contato...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-8 control-label">Telefone:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="tel_contato" name="txttelefone"
                           id="txttelefone" pattern="\([0-9]{2}\)[\s][0-9]{5}-[0-9]{3,4}"
                           placeholder="(11) 12345-6789">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">E-mail:</label>
                <div class="col-sm-12">
                    <input type="email" class="form-control" name="email_contato" placeholder="email@email.com.br">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Imagem:</label>
                <div class="col-sm-12">
                    <input type="file" class="form-control" name="img_contato">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Rua:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="rua_contato"
                           placeholder="Nome da Rua...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Número:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="nr_contato"
                           placeholder="Digite o Número...">
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
            <div class="col-sm-12">
                <label class="col-sm-5 control-label" required >Nome do Evento:</label>
                <select class="form-control" required name="cod_evento">
                    <?php
                    include './conexao.php';

                    $selectEvento = "select * from tb_evento";

                    $queryEvento = $pdo->query($selectEvento);

                    while ($dados = $queryEvento->fetch()) {
                        $cod_ev = $dados['cod_evento'];
                        $nome_evento = $dados['nome_evento'];

                        if ($cod_ev == $cod_eve) {
                            ?>
                            <option selected="true" value="<?= $cod_ev; ?>"><?= $cod_ev; ?> - <?= $nome_evento; ?></option>
                            <?php
                        } else if ($cod_ev != $cod_eve) {
                            ?>
                            <option value="<?= $cod_ev; ?>"><?= $cod_ev; ?> - <?= $nome_evento; ?></option>
                            <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <hr class="b-s-dashed">
            <input class="btn btn-dark btn-block" type="submit" onclick="return salvar();" value="ADICIONAR" name="ADICIONAR">
        </form>
    </div>
<?php } ?>