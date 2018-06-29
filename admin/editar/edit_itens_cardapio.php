<?php
if (isset($login_cookie)) {
    include '../conexao.php';
    $id = $_GET['id'];
    $cod_ca = $_GET['c'];
    $sql = "SELECT * 
            FROM tb_item as i, tb_cardapio_tipo as ct, tb_cardapio as c
            where i.cod_item = ct.cod_item
            and ct.cod_cardapio = c.cod_cardapio
            and i.cod_item= '$id'
            and c.cod_cardapio = '$cod_ca'";

    $query = $pdo->query($sql);

    $dados = $query->fetch();

    $nome_item = $dados['nome_item'];
    $valor_item = $dados['valor_item'];
    $descricao_item = $dados['descricao_item'];
    $img_item = $dados['img_item'];
    $cod_tipo_item = $dados['cod_tipo_item'];
    $cod_item = $dados['cod_item'];
    $cod_c = $dados['cod_cardapio'];
    ?>   
    <div class="container col-sm-6">
        <form class="form-horizontal" method="POST" 
              action="editar/editBD_itens_cardapio.php?v=<?=$id;?>&i=<?=$img_item;?>" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-8 control-label">Cardápio:</label>
                <div class="col-sm-12">
                    <select class="form-control" name="cardapio">
                        <option value="">Selecione um Cardápio</option>
                        <?php
                        include '../conexao.php';

                        $selectCardapio = "select * from tb_cardapio";

                        $queryCardapio = $pdo->query($selectCardapio);

                        while ($dados = $queryCardapio->fetch()) {
                            $titulo_cardapio = $dados['titulo_cardapio'];
                            $cod_cardapio = $dados['cod_cardapio'];
                            if ($cod_cardapio == $cod_c) {
                                ?>
                                <option selected="true" value="<?= $cod_cardapio; ?>"><?= $cod_cardapio; ?> - <?= $titulo_cardapio; ?></option>
                                <?php
                            } else if ($cod_cardapio != $cod_c) {
                                ?>
                                <option value="<?= $cod_cardapio; ?>"><?= $cod_cardapio; ?> - <?= $titulo_cardapio; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-8 control-label">Tipo:</label>
                <div class="col-sm-12">
                    <select class="form-control" required name="tipo_item"> 
                        <option value="">Selecione um Tipo</option>
                        <?php
                        include '../conexao.php';

                        $selectTipoItem = "select * from tb_tipo_item";

                        $queryTipoItem = $pdo->query($selectTipoItem);

                        while ($dados = $queryTipoItem->fetch()) {
                            $descricao_tipo_item = $dados['descricao_tipo_item'];
                            $cod_t_item = $dados['cod_tipo_item'];
                            if ($cod_t_item == $cod_tipo_item) {
                                ?>
                                <option selected="true" value="<?= $cod_t_item; ?>"><?= $cod_t_item; ?> - <?= $descricao_tipo_item; ?></option>
                                <?php
                            } else if ($cod_t_item != $cod_tipo_item) {
                                ?>
                                <option value="<?= $cod_t_item; ?>"><?= $cod_t_item; ?> - <?= $descricao_tipo_item; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>           
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Nome do Item:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" value="<?= $nome_item; ?>" required name="nome_item" placeholder="Digite um Nome para o Item...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Valor do Item:</label>
                <div class="col-sm-12">
                    <input type="text" id="valor" class="form-control" value="<?= $valor_item; ?>" name="valor_item" placeholder="R$ 0,00">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Descrição do Item:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" value="<?=$descricao_item; ?>" name="descricao_item" placeholder="Digite uma Descrição...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Imagem: <?= $img_item; ?></label>
                <div class="col-sm-12">
                    <input type="file" class="form-control" name="img_item">
                </div>
            </div>
            <hr class="b-s-dashed">
            <input class="btn btn-dark btn-block" type="submit" onclick="return editar('<?=$nome_item?>');" value="ATUALIZAR" name="ATUALIZAR">
        </form>
    </div>
<?php } ?>