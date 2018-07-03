<?php
if (isset($login_cookie)) {
    ?>
    <div class="container col-sm-6">
        <form class="form-horizontal" method="POST" action="adicionar/adcBD_itens_cardapio.php" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-8 control-label">Cardápio:</label>
                <div class="col-sm-12">
                    <select class="form-control" name="cardapio">
                        <option value="">Selecione um Cardápio</option>
                        <?php
                        include './conexao.php';

                        $selectCardapio = "select * from tb_cardapio";

                        $queryCardapio = $pdo->query($selectCardapio);

                        while ($dados = $queryCardapio->fetch()) {
                            $titulo_cardapio = $dados['titulo_cardapio'];
                            $cod_cardapio = $dados['cod_cardapio'];
                            ?>
                            <option value="<?= $cod_cardapio; ?>"><?= $cod_cardapio; ?> - <?= $titulo_cardapio; ?></option>
                            <?php
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
                        include './conexao.php';

                        $selectTipoItem = "select * from tb_tipo_item";

                        $queryTipoItem = $pdo->query($selectTipoItem);

                        while ($dados = $queryTipoItem->fetch()) {
                            $descricao_tipo_item = $dados['descricao_tipo_item'];
                            $cod_tipo_item = $dados['cod_tipo_item'];
                            ?>
                            <option value="<?= $cod_tipo_item; ?>"><?= $cod_tipo_item; ?> - <?= $descricao_tipo_item; ?></option>
                            <?php
                        }
                        ?>
                    </select>           
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Nome do Item:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" required name="nome_item" placeholder="Digite um Nome para o Item...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Valor do Item:</label>
                <div class="col-sm-12">
                    <input type="text" id="valor" class="form-control" name="valor_item" placeholder="R$ 0,00">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label for="desc" class="col-sm-4 control-label">Descrição do Item:</label>
                <div class="col-sm-12">
                    <textarea class="form-control" rows="5" id="desc" name="descricao_item" placeholder="Digite uma Descrição..."></textarea>
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Imagem:</label>
                <div class="col-sm-12">
                    <input type="file" class="form-control" name="img_item">
                </div>
            </div>
            <hr class="b-s-dashed">
            <input class="btn btn-dark btn-block" type="submit" onclick="return salvar();" value="ADICIONAR" name="ADICIONAR">
        </form>
    </div>
<?php } ?>