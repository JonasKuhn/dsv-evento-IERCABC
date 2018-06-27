


<?php
//Menu 
include './menu.php';
include '../conexao.php';
?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('../img/sobre-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Sobre</h1>
                    <span class="subheading">Alguma coisa.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php
    
                $sql = "Select titulo_sobre, descricao_sobre "
                      . "from tb_sobre_evento";

                $query = $pdo->query($sql); 
                while($dados = $query->fetch()) {


                $titulo_sobre = $dados ['titulo_sobre'];
                $descricao_sobre = $dados ['descricao_sobre'];
        
        
            ?>;

            <p>titulo<?= $titulo_sobre;?><br><br> <br>

            descrição<?= $descricao_sobre;?><br><br><br> </p>
    
            <?php
                  }
            ?>
        </div>
        
        
        <h3>Galeria de Imagens</h3>
        <img src="../img/1.jpg" alt="">
    </div>
    
</div>
<hr>
