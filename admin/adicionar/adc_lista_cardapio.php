<?php
if (isset($login_cookie)) {
    ?>
    <div class="container col-sm-6">
        <form class="form-horizontal" method="POST" action="adicionar/adcBD_lista_cardapio.php" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-4 control-label">Nome do Cardápio:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" required name="nome_cardapio" placeholder="Digite um Nome para o Cardápio...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Obs do Cardápio:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="obs_cardapio" placeholder="Digite a Observação do Cardápio:">
                </div>
            </div>
            <hr class="b-s-dashed">
            <input class="btn btn-dark btn-block" type="submit" onclick="return salvar();" value="ADICIONAR" name="ADICIONAR">
        </form>
    </div>
<?php } ?>