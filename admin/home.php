<?php
if (isset($login_cookie)) {
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <label class="text-center col-sm-11">EVENTO </label>
                        <table class="table table-bordered" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Data</th>
                                    <th>Localização</th>
                                    <th>Cardápio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../conexao.php';

                                $sql = 'select e.*, c.*, es.uf, car.* from tb_evento as e, tb_cidade as c, tb_estado as es, tb_cardapio as car
                                        where e.cod_cidade = c.cod_cidade
                                        and e.cod_cardapio = car.cod_cardapio
                                        and c.cod_estado = es.cod_estado';
                                $query = $pdo->query($sql);

                                while ($dados = $query->fetch()) {
                                    $nome = $dados['nome_evento'];
                                    $data = $dados['data_evento'];
                                    $cit = $dados['nome_cidade'];
                                    $est = $dados['uf'];
                                    $rua = $dados['rua_evento'];
                                    $cardapio = $dados['titulo_cardapio'];
                                    ?>
                                    <tr>
                                        <td><?= $nome; ?></td>
                                        <td><?= $data; ?></td>
                                        <td><?= $rua; ?> - <?= $cit; ?> - <?= $est; ?></td>
                                        <td><?= $cardapio; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="card">
                            <div class="card-body">
                                <label class="text-center col-sm-12">CARDÁPIO DE COMIDAS</label>
                                <table class="table table-bordered text-center" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../conexao.php';

                                        $sql = 'select * from admin_evento_cardapio_item as x, tb_tipo_item as ti
                                        where x.cod_tipo_item = ti.cod_tipo_item 
                                        and ti.cod_tipo_item != 2';
                                        $query = $pdo->query($sql);

                                        while ($dados = $query->fetch()) {
                                            $nome = $dados['nome_item'];
                                            ?>
                                            <tr>
                                                <td><?= $nome; ?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="card">
                            <div class="card-body">
                                <label class="text-center col-sm-12">CARDÁPIO DE BEBIDAS</label>
                                <table class="table table-bordered text-center" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../conexao.php';

                                        $sql = 'select * from admin_evento_cardapio_item as x, tb_tipo_item as ti
                                        where x.cod_tipo_item = ti.cod_tipo_item 
                                        and ti.cod_tipo_item = 2';
                                        $query = $pdo->query($sql);

                                        while ($dados = $query->fetch()) {
                                            $nome = $dados['nome_item'];
                                            $valor_item = $dados['valor_item'];
                                            ?>
                                            <tr>
                                                <td><?= $nome; ?></td>
                                                <td>R$ <?= $valor_item; ?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <label class="text-center col-sm-12">PROGRAMAÇÃO </label>
                        <table class="table table-bordered text-center" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Descrição</th>
                                    <th>Hora</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../conexao.php';

                                $sql = 'select * from admin_evento_programacao_tipo_prog as x, tb_tipo_programacao as tp
                                        where x.cod_tipo_prog = tp.cod_tipo_prog
                                        order by x.hora_inicio_prog ASC;';

                                $query = $pdo->query($sql);

                                while ($dados = $query->fetch()) {
                                    $descricao = $dados['descricao_prog'];
                                    $hora = $dados['hora_inicio_prog'];
                                    $tipo = $dados['descricao_tipo'];
                                    ?>
                                    <tr>
                                        <td><?= $tipo; ?></td>
                                        <td><?= $descricao; ?></td>
                                        <td><?= $hora; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>