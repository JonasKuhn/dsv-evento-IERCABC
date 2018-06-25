<div class="card-header">
    <i class="fa fa-table"></i>Contato
    <div class="float-right col-sm-8">
        <form method="POST" action="index.php?url=contato.php" enctype="multipart/form-data">
            <div class="float-left m-t-0 col-sm-9">
                <div class="col-sm-6 float-left">
                    <select class="form-control" name="tipo_contato">
                        <?php
                        include '../conexao.php';

                        $selectTipoContato = "select * from tb_tipo_contato;";

                        $queryTipoContato = $pdo->query($selectTipoContato);

                        while ($dados = $queryTipoContato->fetch()) {
                            $nome_tipo_contato = $dados['decricao_tipo_contato'];
                            $cod_tipo_contato = $dados['cod_tipo_contato'];

                            if ($cod_tipo_contato == $cod_tip) {
                                ?>
                                <option selected="true" value="<?= $cod_tipo_contato; ?>"><?= $cod_tipo_contato; ?> - <?= $nome_tipo_contato; ?></option>
                                <?php
                            } else if ($cod_tipo_contato != $cod_tip) {
                                ?>
                                <option value="<?= $cod_tipo_contato; ?>"><?= $cod_tipo_contato; ?> - <?= $nome_tipo_contato; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-sm-6 float-right">
                    <select class="form-control" name="cod_evento">
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
            </div>
            <input class="btn btn-dark btn-block float-right col-sm-3" type="submit" value="Filtrar" name="Filtrar">
        </form>
    </div>
</div>