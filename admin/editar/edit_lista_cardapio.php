<?php
if (isset($login_cookie)) {
    include '../conexao.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_cardapio where cod_cardapio = '$id'";

    $query = $pdo->query($sql);

    $dados = $query->fetch();
    $titulo_cardapio = $dados['titulo_cardapio'];
    $obs_cardapio = $dados['obs_cardapio'];
    
    ?>   
    <div class="container col-sm-6">
        <form class="form-horizontal" method="POST" action="editar/editBD_lista_cardapio.php?v=<?= $id; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-4 control-label">Nome do Cardápio:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" required value="<?= $titulo_cardapio; ?>" name="nome_cardapio" placeholder="Digite um Nome para o Cardápio...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <div class="form-group">
                <label class="col-sm-4 control-label">Obs do Cardápio:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control"  value="<?= $obs_cardapio; ?>" name="obs_cardapio" placeholder="Digite a Observação do Cardápio:">
                </div>
            </div>
            <hr class="b-s-dashed">
            <input class="btn btn-dark btn-block" type="submit" onclick="return editar('<?=$titulo_cardapio?>');" value="ATUALIZAR" name="ATUALIZAR">
        </form>
    </div>
<?php } ?>