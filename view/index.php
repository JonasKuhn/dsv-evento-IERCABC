<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Evento</title>

        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' 
              rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' 
              rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="../css/clean-blog.min.css" rel="stylesheet">
        <link rel="stylesheet" style="text\css" href="../css/list.css">
    </head>

    <body>
        <!--
            Separação das partes principais.
            Dentro delas que iremos trabalhar.
            A principio vamos desenvolver com os
            dados mocados(inseridos manualmente),
            vamos deixar ele ajustado visualmente 
            e depois partimos para a busca dos dados no banco.
        -->

        <?php
        $url = $_GET['url'];

        switch ($url) {
            case 'inicio': include ('./inicio.php');
                break;
            case 'sobre': include ('./sobre.php');
                break;
            case 'programacao': include ('./programacao.php');
                break;
            case 'valores': include ('./valores.php');
                break;
            case 'contato': include ('./contato.php');
                break;
            case 'postagem': include ('./postagem.php');
                break;
            default : include ('./inicio.php');
        }   
        ?>

        <!-- Bootstrap core JavaScript -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Custom scripts for this template -->
        <script src="../js/clean-blog.min.js"></script>
        
        <div class="rodape">
            <footer>
        <div class="container">
            <div>
                <h3>Pontos de venda</h3>
                <ul class="list-style-type"><h5>São João do Oeste</h5>
                    <li><a href='https://www.facebook.com/Agropecuaria.05'>Agropecuária Bressler</a></li>
                    <li>Fone:</li>
                </ul>
                <ul class="list-style-type"><h5>Itapiranga</h5>
                    <li><a href="https://www.facebook.com/sorveteriatropicalfw/">Sorveteria Tropical</a></li>
                    <li>Fone:</li>
                </ul>
                <ul class="list-style-type"><h5>Sede Capela</h5>
                    <li><a href="https://www.facebook.com/pages/Bar-e-Lanchonete-Capelense/193612621463936">Bar e Lanchonete Capelense</a></li>
                    <li>Fone:</li>
                </ul>
                <ul class="list-style-type"><h5>Tunapúlis</h5>
                    <li><a href='https://www.facebook.com/Restaurante-Pauli-Ltda-660073460750774/'>Restaurante Pauli Ltda</a></li>
                    <li>Fone:</li>
                </ul>
                <ul class="list-style-type"><h5>Iporã do Oeste</h5>
                    <li><a href="https://www.facebook.com/hcerta/">Hora Certa Conveniência e Cervejaria<a></li>
                                <li>Fone:</li>
                                </ul> 
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 col-md-10 mx-auto">
                                        <ul class="list-inline text-center">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <span class="fa-stack fa-lg">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <span class="fa-stack fa-lg">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <span class="fa-stack fa-lg">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
                                    </div>
                                </div>
                                </div>
                                </footer>
            
        </div>
    </body>
</html>
