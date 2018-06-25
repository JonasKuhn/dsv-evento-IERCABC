<div class="card-header">
    <h3 class="text-center">Itens Cardápio</h3>
    <hr class="b-s-dashed">
    <div class="float-right col-sm-12">
        <form method="POST" action="index.php?url=itens_cardapio.php" enctype="multipart/form-data">
            <div class="float-left m-t-0 col-sm-12">
                <div class="col-sm-3 float-left">
                    <label>Filtro por Tipo de Item</label>
                    <select class="form-control" name="tipo_item">
                        <option value="0">Todos</option>
                        <?php
                        include '../conexao.php';

                        $selectTipoContato = "select * from tb_tipo_item;";

                        $queryTipoContato = $pdo->query($selectTipoContato);

                        while ($dados = $queryTipoContato->fetch()) {
                            $nome_tipo_item = $dados['descricao_tipo_item'];
                            $cod_tipo_item = $dados['cod_tipo_item'];

                            if ($cod_tipo_item == $cod_tip) {
                                ?>
                                <option selected="true" value="<?= $cod_tipo_item; ?>"><?= $nome_tipo_item; ?></option>
                                <?php
                            } else if ($cod_tipo_item != $cod_tip) {
                                ?>
                                <option value="<?= $cod_tipo_item; ?>"><?= $nome_tipo_item; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-sm-3 float-left">
                    <label>Filtro por Evento</label>
                    <select class="form-control" required name="cod_evento">
                        <?php
                        include '../conexao.php';

                        $select = "select * from tb_evento";

                        $query = $pdo->query($select);

                        while ($dados = $query->fetch()) {
                            $cod_evento = $dados['cod_evento'];
                            $nome_evento = $dados['nome_evento'];

                            if ($cod_evento == $cod_eve) {
                                ?>
                                <option selected="true" value="<?= $cod_evento; ?>"><?= $nome_evento; ?></option>
                                <?php
                            } else if ($cod_evento != $cod_eve) {
                                ?>
                                <option value="<?= $cod_evento; ?>"><?= $nome_evento; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-sm-5 float-left">
                    <div class="col-sm-12 float-left">
                        <label class="col-sm-8 float-left">Filtro por Cardápio</label>
                        <div class="col-sm-8 float-left">
                            <select class="form-control" required name="cod_cardapio">
                                <?php
                                include '../conexao.php';

                                $selectEvento = "select * from tb_cardapio";

                                $queryEvento = $pdo->query($selectEvento);

                                while ($dados = $queryEvento->fetch()) {
                                    $cod_cardapio = $dados['cod_cardapio'];
                                    $titulo_cardaio = $dados['titulo_cardapio'];

                                    if ($cod_cardapio == $cod_car) {
                                        ?>
                                        <option selected="true" value="<?= $cod_cardapio; ?>"><?= $titulo_cardaio; ?></option>
                                        <?php
                                    } else if ($cod_cardapio != $cod_car) {
                                        ?>
                                        <option value="<?= $cod_cardapio; ?>"><?= $titulo_cardaio; ?></option>
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