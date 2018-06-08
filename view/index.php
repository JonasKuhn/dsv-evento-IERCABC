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
        //Rodapé
        include './rodape.php';
        ?>

        <!-- Bootstrap core JavaScript -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Custom scripts for this template -->
        <script src="../js/clean-blog.min.js"></script>
    </body>
</html>
