<div class="card-header text-center">
    <h3>Programação</h3>
    <hr class="b-s-dashed">
    <div class="col-sm-12 text-center">
        <form method="POST" action="index.php?url=programacao.php" enctype="multipart/form-data">
            <div class="m-t-0 col-sm-12">
                <div class="col-sm-4 float-left">
                    <label>Filtrar por Tipo de Programação</label>
                    <select class="form-control" name="tipo_prog">
                        <option value="0">Todos</option>
                        <?php
                        include '../conexao.php';

                        $selectTipoProg = "select * from tb_tipo_programacao;";

                        $queryTipoProg = $pdo->query($selectTipoProg);

                        while ($dados = $queryTipoProg->fetch()) {
                            $nome = $dados['descricao_tipo'];
                            $cod = $dados['cod_tipo_prog'];

                            if ($cod == $cod_tipo_prog) {
                                ?>
                                <option selected="true" value="<?= $cod; ?>"><?= $nome; ?></option>
                                <?php
                            } else if ($cod != $cod_tipo_prog) {
                                ?>
                                <option value="<?= $cod; ?>"><?= $nome; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-sm-8 float-left">
                    <div class="col-sm-12">
                        <label class="col-sm-5 float-left">Filtrar por Evento</label>
                        <div class="col-sm-8 float-left">
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