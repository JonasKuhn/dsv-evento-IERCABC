<div class="card-header">
    <h3 class="text-center">Itens Cardápio</h3>
    <hr>
    <div class="float-right col-sm-12">
        <form method="POST" action="index.php?url=contato.php" enctype="multipart/form-data">
            <div class="float-left m-t-0 col-sm-12">
                <div class="col-sm-5 float-left">
                    <label>Filtro por Contato</label>
                    <select class="form-control" name="cod_contato">
                        <option value="0">Todos</option>
                        <?php
                        include '../conexao.php';

                        $selectTipoContato = "select * from tb_tipo_contato;";

                        $queryTipoContato = $pdo->query($selectTipoContato);

                        while ($dados = $queryTipoContato->fetch()) {
                            $nome_tipo_contato = $dados['descricao_tipo_contato'];
                            $cod_tipo_contato = $dados['cod_tipo_contato'];

                            if ($cod_tipo_contato == $cod_tip) {
                                ?>
                                <option selected="true" value="<?= $cod_tipo_contato; ?>"><?= $nome_tipo_contato; ?></option>
                                <?php
                            } else if ($cod_tipo_contato != $cod_tip) {
                                ?>
                                <option value="<?= $cod_tipo_contato; ?>"><?= $nome_tipo_contato; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-sm-7 float-left">
                    <div class="col-sm-12 float-left">
                        <label class="col-sm-8 float-left">Filtro por Evento</label>
                        <div class="col-sm-9 float-left">
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
                                        <option selected="true" value="<?= $cod_ev; ?>"><?= $nome_evento; ?></option>
                                        <?php
                                    } else if ($cod_ev != $cod_eve) {
                                        ?>
                                        <option value="<?= $cod_ev; ?>"><?= $nome_evento; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <input class="btn btn-dark btn-block float-right col-sm-3 float-left" type="submit" value="Filtrar" name="Filtrar">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>