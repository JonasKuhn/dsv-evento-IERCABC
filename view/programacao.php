<?php
include './cabecalho.php';
include './menu.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" style="text\css" href="../css/.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <div id="portfolio" class="container-fluid text-center bg-grey">
            <h2>Programação</h2><br><br><br>
            <div class="row text-center slideanim">
                <?php
                include './conexao.php';
                $sql = "Select p.* 
                        from tb_admin as a, tb_evento as e, tb_programacao as p, tb_tipo_programacao as tp
                        where a.cod_evento = e.cod_evento
                        and e.cod_evento = p.cod_evento
                        and p.cod_tipo_prog = tp.cod_tipo_prog
                        and tp.cod_tipo_prog = 6";
                $query = $mysqli->query($sql);
                while ($dados = $query->fetch_array()) {
                    $descricao_prog = $dados['descricao_prog'];
                    $diretorio = '../admin/upload/img/programacao/';
                    $img_ok = $diretorio . $dados['img_prog'];
                    ?>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="<?= $img_ok ?>" alt="<?= $descricao_prog; ?> " width="300" height="300">
                            <p><?= $descricao_prog; ?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="">
                <?php
                include './conexao.php';
                $sql = "Select p.* 
                        from tb_admin as a, tb_evento as e, tb_programacao as p, tb_tipo_programacao as tp
                        where a.cod_evento = e.cod_evento
                        and e.cod_evento = p.cod_evento
                        and p.cod_tipo_prog = tp.cod_tipo_prog
                        and tp.cod_tipo_prog = 6";
                $query = $mysqli->query($sql);
                while ($dados = $query->fetch_array()) {
                    $descricao_prog = $dados['descricao_prog'];
                    
                    ?>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="<?= $img_ok ?>" alt="<?= $descricao_prog; ?> " width="300" height="300">
                            <p><?= $descricao_prog; ?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <ul class="">
                    <li></li>
                </ul>
            </div>
    </body>
</html>