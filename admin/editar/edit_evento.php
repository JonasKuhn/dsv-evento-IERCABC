<?php
if (isset($login_cookie)) {
    include './conexao.php';
    $id = $_GET['id'];
    $selectEventoConfigs = "SELECT *
                    FROM tb_evento as e, tb_cardapio as c, tb_admin as a, tb_cidade as ci, tb_estado as es
                    WHERE e.cod_cardapio = c.cod_cardapio
                    AND e.cod_cidade = ci.cod_cidade
                    AND ci.cod_estado = es.cod_estado
                    AND e.cod_evento = '$id'";

    $queryEventoConfigs = $pdo->query($selectEventoConfigs);

    $dados = $queryEventoConfigs->fetch();

    $nome = $dados['nome_evento'];
    $nome_sociedade = $dados['nome_organizacao_evento'];
    $data = $dados['data_evento'];
    $rua = $dados['rua_evento'];
    $comunidade = $dados['nome_comunidade'];
    $nomeAdmin = $dados['nome_admin'];
    $cod_car = $dados['cod_cardapio'];
    $cardapio = $dados['titulo_cardapio'];
    $cod_ci = $dados['cod_cidade'];
    $cidade = $dados['nome_cidade'];
    $uf = $dados['uf'];
    $banner = $dados['banner_evento'];
    ?>   
    <div class="container col-sm-6">
        <form class="form-horizontal" method="POST" action="editar/editBD_evento.php?v=<?= $id; ?>&i=<?= $banner; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-4 control-label">Nome do Evento:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="nome_evento" value="<?= $nome; ?>" required placeholder="Digite o nome...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-8 control-label">Nome da Sociedade:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="nome_sociedade" value="<?= $nome_sociedade; ?>" required placeholder="Digite o nome da sociedade...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Data do Evento:</label>
                <div class="col-sm-12">
                    <input type="date" required class="form-control" name="data" value="<?= $data; ?>"/>
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-8 control-label">Banner do Evento: <?= $banner; ?></label>
                <div class="col-sm-12">
                    <input type="file" class="form-control" name="banner"/>
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Rua do Evento:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="rua_evento" value="<?= $rua; ?>" required placeholder="Digite o nome da rua...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div>
                <label class="col-sm-5 control-label" >Nome da Comunidade:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" required name="nome_comunidade" value="<?= $comunidade; ?>" placeholder="Digite o nome da comunnidade...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div>
                <label class="col-sm-5 control-label" required >Nome da Cidade:</label>
                <div class="col-sm-12">
                    <select class="form-control" name="cidade">
                        <?php
                        include './conexao.php';

                        $selectCidade = "select *"
                                . "from tb_cidade as c, tb_estado as e "
                                . "where c.cod_estado = e.cod_estado;";

                        $queryCidade = $pdo->query($selectCidade);

                        while ($dados = $queryCidade->fetch()) {
                            $nome_cidade = $dados['nome_cidade'];
                            $cod_cidade = $dados['cod_cidade'];

                            if ($cod_ci == $cod_cidade) {
                                ?>
                                <option selected="true" value="<?= $cod_cidade; ?>"><?= $cod_cidade; ?> - <?= $nome_cidade; ?></option>
                                <?php
                            } else if ($cod_ci != $cod_cidade) {
                                ?>
                                <option value="<?= $cod_cidade; ?>"><?= $cod_cidade; ?> - <?= $nome_cidade; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <hr class="b-s-dashed">
            <div>
                <label class="col-sm-5 control-label" required >Nome da Cardápio:</label>
                <div class="col-sm-12">
                    <select class="form-control" name="cardapio">
                        <?php
                        include './conexao.php';

                        $selectCardapio = "select *"
                                . "from tb_cardapio";

                        $queryCardapio = $pdo->query($selectCardapio);

                        while ($dados = $queryCardapio->fetch()) {
                            $titulo_cardapio = $dados['titulo_cardapio'];
                            $cod_cardapio = $dados['cod_cardapio'];
                            if ($cod_car == $cod_cardapio) {
                                ?>
                                <option selected="true" value="<?= $cod_cardapio; ?>"><?= $cod_cardapio; ?> - <?= $titulo_cardapio; ?></option>
                                <?php
                            } else if ($cod_car != $cod_cardapio) {
                                ?>
                                <option value="<?= $cod_cardapio; ?>"><?= $cod_cardapio; ?> - <?= $titulo_cardapio; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <hr class="b-s-dashed">
            <input class="btn btn-dark btn-block" type="submit" onclick="return editar('<?= $nome ?>');" value="ATUALIZAR" name="ATUALIZAR">
        </form>
    </div>
<?php } ?>