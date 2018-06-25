<?php
if (isset($login_cookie)) {
    include './../conexao.php';
    $xx = $_GET['id'];
    $sql = "CALL sel_tipo_prog('$xx')";
    $query = $pdo->query($sql);
    $dados = $query->fetch();
    $titulo_tipo = $dados['descricao_tipo'];
    ?>   
    <div class="container col-sm-6">
        <form class="form-horizontal" method="POST" action="editar/editBD_tipo_prog.php?v=<?= $xx; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-4 control-label">Nome do Evento:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="titulo_tipo" value="<?= $titulo_tipo; ?>" required placeholder="Digite o nome...">
                </div>
            </div>
            <hr class="b-s-dashed">
            <input class="btn btn-dark btn-block" type="submit"  onclick="return editar('<?= $titulo_tipo; ?>');" value="ATUALIZAR" name="ATUALIZAR">
        </form>
    </div>
<?php } ?>