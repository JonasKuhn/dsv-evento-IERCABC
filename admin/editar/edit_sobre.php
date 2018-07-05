<?php
if (isset($login_cookie)) {
    include './conexao.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_sobre_evento as se, tb_evento as e"
            . " where se.cod_evento = e.cod_evento"
            . " and se.cod_sobre_evento = '$id'";

    $query = $pdo->query($sql);

    $dados = $query->fetch();

    $titulo_sobre = $dados['titulo_sobre'];
    $descricao_sobre = $dados['descricao_sobre'];
    $img_sobre = $dados['img_sobre'];
    $cod_evento = $dados['cod_evento'];
    ?>   
    <div class="container col-sm-6">
        <form class="form-horizontal" method="POST" action="editar/editBD_sobre.php?v=<?=$id;?>&i=<?= $img_sobre; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-8 control-label">Titulo do Sobre:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="titulo_sobre" value="<?= $titulo_sobre; ?>" required autofocus placeholder="Digite o Titulo...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Descrição do Sobre:</label>
                <div class="col-sm-12">
                    <textarea class="form-control" rows="5" style="text-align: justify;"
                              name="descricao_sobre" placeholder="Digite uma Descrição..."><?= $descricao_sobre; ?></textarea>
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-8 control-label">Imagem: <?= $img_sobre; ?></label>
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
                        include './conexao.php';

                        $selectEvento = "select * from tb_evento";

                        $queryEvento = $pdo->query($selectEvento);

                        while ($dados = $queryEvento->fetch()) {
                            $cod_e = $dados['cod_evento'];
                            $nome_evento = $dados['nome_evento'];

                            if ($cod_evento == $cod_e) {
                                ?>
                                <option selected="true" value="<?= $cod_e; ?>"><?= $cod_e; ?> - <?= $nome_evento; ?></option>
                                <?php
                            }
                            if ($cod_evento != $cod_e) {
                                ?>
                                <option value="<?= $cod_e; ?>"><?= $cod_e; ?> - <?= $nome_evento; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <hr class="b-s-dashed">
            <input class="btn btn-dark btn-block" type="submit"  onclick="return editar('<?= $titulo_sobre; ?>');" value="ATUALIZAR" name="ATUALIZAR">
        </form>
    </div>
<?php } ?>