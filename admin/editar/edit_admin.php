<?php
if (isset($login_cookie)) {
    include './conexao.php';
    $cod = $_GET['c'];
    $sql = "select * from tb_admin"
            . " where cod_admin = '$cod'";

    $query = $pdo->query($sql);

    $dados = $query->fetch();
    
    $id = $dados['cod_admin'];
    $login = $dados['login_admin'];
    $nome = $dados['nome_admin'];
    $evento_at = $dados['cod_evento'];
    $pass = $dados['senha_admin'];
    ?>   
    <div class="container col-sm-6">
        <form class="form-horizontal" method="POST" action="editar/editBD_admin.php?v=<?= $id; ?>" enctype="multipart/form-data">
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Nome Admin:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="nome_admin" required value="<?= $nome; ?>"
                           autofocus placeholder="Digite o Nome Desejado...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-12 control-label">Nome do Evento que ficará ativo:</label>
                <div class="col-sm-12">
                    <select class="form-control" required name="cod_evento">
                        <?php
                        include './conexao.php';

                        $selectEvento = "select * from tb_evento";

                        $queryEvento = $pdo->query($selectEvento);

                        while ($dados = $queryEvento->fetch()) {
                            $cod_ev = $dados['cod_evento'];
                            $nome_evento = $dados['nome_evento'];

                            if ($cod_ev == $evento_at) {
                                ?>
                                <option selected="true" value="<?= $cod_ev; ?>"><?= $cod_ev; ?> - <?= $nome_evento; ?></option>
                                <?php
                            } else if ($cod_ev != $evento_at) {
                                ?>
                                <option value="<?= $cod_ev; ?>"><?= $cod_ev; ?> - <?= $nome_evento; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <hr class="b-s-dashed">
            <input class="btn btn-dark btn-block" type="submit" onclick="return excluir('<?= $nome ?>');" value="ATUALIZAR" name="ATUALIZAR">
        </form>
    </div>
<?php } ?>