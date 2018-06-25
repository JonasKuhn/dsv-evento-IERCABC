<?php
if (isset($login_cookie)) {
    ?>
    <div class="container col-sm-6">
        <form class="form-horizontal" method="POST" action="adicionar/adcBD_tipo_prog.php" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-8 control-label">Nome do Tipo de Programação:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="titulo_tipo" required autofocus placeholder="Digite o nome do Tipo de Programação...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <input class="btn btn-dark btn-block" type="submit"  onclick="return salvar();" value="ADICIONAR" name="ADICIONAR">
        </form>
    </div>
<?php } ?>