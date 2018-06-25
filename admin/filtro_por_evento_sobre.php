<div class="card-header">
    <h3 class="text-center">Sobre</h3>
    <div class="col-sm-12">
        <form method="POST" action="index.php?url=sobre.php" enctype="multipart/form-data">
            <div class="m-t-0 col-sm-12">
                <hr class="b-s-dashed"> 
                <label class="col-sm-10 text-center">Filtro por Evento</label>
                <div style="margin: 0 auto;" class="col-sm-7">

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
                    <input class="btn btn-dark btn-block float-right col-sm-3 float-right" type="submit" value="Filtrar" name="Filtrar">
                </div>
            </div>
        </form>
    </div>
</div>