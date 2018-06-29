<?php
if (isset($login_cookie)) {
    include '../conexao.php';
    $id = $_GET['id'];
    $cod_e = $_GET['e'];
    $sql = "select * from tb_contato as c, tb_evento_contato as ec, tb_evento as e "
            . "where c.cod_contato = ec.cod_contato "
            . "and ec.cod_evento = e.cod_evento "
            . "and e.cod_evento = '$cod_e' "
            . "and c.cod_contato = '$id'";

    $query = $pdo->query($sql);

    $dados = $query->fetch();

    $nome = $dados['nome_contato'];
    $telefon = $dados['telefone_contato'];
    $email = $dados['email_contato'];
    $img = $dados['img_contato'];
    $rua = $dados['rua_contato'];
    $nr = $dados['nr_contato'];
    $ciadade = $dados['cod_cidade'];
    $tipo = $dados['cod_tipo_contato'];
    ?>   
    <div class="container col-sm-6">
        <form class="form-horizontal" method="POST" action="editar/editBD_contato.php?v=<?=$id;?>&i=<?=$img;?>" enctype="multipart/form-data">
            <div>
                <label class="col-sm-5 control-label" required >Tipo do Contato:</label>
                <div class="col-sm-12">
                    <select class="form-control" name="tipo_contato">
                        <?php
                        include '../conexao.php';

                        $selectTipoContato = "select * from tb_tipo_contato;";

                        $queryTipoContato = $pdo->query($selectTipoContato);

                        while ($dados = $queryTipoContato->fetch()) {
                            $nome_tipo_contato = $dados['descricao_tipo_contato'];
                            $cod_tipo_contato = $dados['cod_tipo_contato'];

                            if ($cod_tipo_contato == $tipo) {
                                ?>
                                <option selected="true" value="<?= $cod_tipo_contato; ?>"><?= $cod_tipo_contato; ?> - <?= $nome_tipo_contato; ?></option>
                                <?php
                            } else if ($cod_tipo_contato != $tipo) {
                                ?>
                                <option value="<?= $cod_tipo_contato; ?>"><?= $cod_tipo_contato; ?> - <?= $nome_tipo_contato; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-8 control-label">Nome do Contato:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="nome_contato" required value="<?= $nome; ?>"
                           autofocus placeholder="Digite o Nome do Contato...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-8 control-label">Telefone:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="tel_contato" name="txttelefone" value="<?= $telefon; ?>"
                           id="txttelefone" pattern="\([0-9]{2}\)[\s][0-9]{5}-[0-9]{3,4}"
                           placeholder="(11) 12345-6789">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">E-mail:</label>
                <div class="col-sm-12">
                    <input type="email" class="form-control" name="email_contato" value="<?= $email; ?>" placeholder="email@email.com.br">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Imagem: <?= $img; ?></label>
                <div class="col-sm-12">
                    <input type="file" class="form-control" name="img_contato">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Rua:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="rua_contato" value="<?= $rua; ?>"
                           placeholder="Nome da Rua...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Número:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="nr_contato" value="<?= $nr; ?>"
                           placeholder="Digite o Número...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div>
                <label class="col-sm-4 control-label" required >Nome da Cidade:</label>
                <div class="col-sm-12">
                    <select class="form-control" name="cidade">
                        <?php
                        include '../conexao.php';

                        $selectCidadeEstado = "call sel_cidade_estado();";

                        $queryCidadeEstado = $pdo->query($selectCidadeEstado);

                        while ($dados = $queryCidadeEstado->fetch()) {
                            $nome_cidade = $dados['nome_cidade'];
                            $cod_cidade = $dados['cod_cidade'];
                            if ($cod_cidade == $ciadade) {
                                ?>
                                <option selected="true" value="<?= $cod_cidade; ?>"><?= $cod_tipo_contato; ?> - <?= $nome_cidade; ?></option>
                                <?php
                            } else if ($cod_cidade != $ciadade) {
                                ?>
                                <option value="<?= $cod_cidade; ?>"><?= $cod_tipo_contato; ?> - <?= $nome_cidade; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="col-sm-12">
                <label class="col-sm-4 control-label" required >Nome do Evento:</label>
                <select class="form-control" required name="cod_evento">
                    <?php
                    include '../conexao.php';

                    $selectEvento = "select * from tb_evento";

                    $queryEvento = $pdo->query($selectEvento);

                    while ($dados = $queryEvento->fetch()) {
                        $cod_ev = $dados['cod_evento'];
                        $nome_evento = $dados['nome_evento'];

                        if ($cod_ev == $cod_e) {
                            ?>
                            <option selected="true" value="<?= $cod_ev; ?>"><?= $cod_ev; ?> - <?= $nome_evento; ?></option>
                            <?php
                        } else if ($cod_ev != $cod_e) {
                            ?>
                            <option value="<?= $cod_ev; ?>"><?= $cod_ev; ?> - <?= $nome_evento; ?></option>
                            <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <hr class="b-s-dashed">
            <input class="btn btn-dark btn-block" type="submit" onclick="return excluir('<?=$nome?>');" value="ATUALIZAR" name="ATUALIZAR">
        </form>
    </div>
<?php } ?>