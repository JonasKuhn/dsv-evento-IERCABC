<div class="card-header">
    <i class="fa fa-table"></i> Itens Cardápio

    <div class="float-right col-sm-4">
        <form method="POST" action="index.php?url=itens_cardapio.php" enctype="multipart/form-data">
            <div class="float-left m-t-0 col-sm-9">
                <select class="form-control" required name="cod_evento">
                    <?php
                    include '../conexao.php';

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
            <input class="btn btn-dark btn-block float-right col-sm-3" type="submit" value="Filtrar" name="Filtrar">
        </form>
    </div>
</div>