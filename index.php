<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <?php
        include 'conexao.php';

        $sql1 = "select e.*, c.nome_cidade, es.uf from tb_admin as a, tb_evento as e, tb_cidade as c, tb_estado as es"
                . " where a.cod_evento = e.cod_evento"
                . " and e.cod_cidade = c.cod_cidade"
                . " and c.cod_estado = es.cod_estado";

        $query1 = $mysqli->query($sql1);
        $dados = $query1->fetch_array();

        $nome_evento = $dados['nome_evento'];
        $dt = explode("-", $dados['data_evento']);
        $data_evento = $dt[2] . "/" . $dt[1] . "/" . $dt[0];
        $rua_evento = $dados['rua_evento'];
        $cit = $dados['nome_cidade'];
        $est = $dados['uf'];
        $banner = $dados['banner_evento'];
        ?>

        <title><?= $nome_evento; ?></title>
        <link rel="shortcut icon" href="img/icon.png" type="image/x-icon"/>

        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <!-- NOVAS -->
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">

        <link href="css/agency.min.css" rel="stylesheet">

        <script type="text/javascript" src="vendor/jquery/jquery-1.4.4.min.js"></script>
        <script src="vendor/jquery-easing/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="vendor/booklet/jquery.booklet.1.1.0.min.js" type="text/javascript"></script>
        <link href="vendor/booklet/jquery.booklet.1.1.0.css" type="text/css" rel="stylesheet" media="screen" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>

        <script src="vendor/cufon/cufon-yui.js" type="text/javascript"></script>
        <script type="text/javascript">
            Cufon.replace('h1,p,.b-counter');
            Cufon.replace('.book_wrapper a', {hover: true});
            Cufon.replace('.title', {textShadow: '1px 1px #C59471', fontFamily: 'ChunkFive'});
            Cufon.replace('.reference a', {textShadow: '1px 1px #C59471', fontFamily: 'ChunkFive'});
            Cufon.replace('.loading', {textShadow: '1px 1px #000', fontFamily: 'ChunkFive'});
        </script>

    </head>

    <body>
        <!-- MENU -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top " style="background-color:  black;" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#inicio"><?= $nome_evento; ?></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#sobreEvento">Sobre o Evento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#portfolio">Programação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#cardapio">Cardápio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#pontosVenda">Pontos de Venda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- CABECALHO -->
        <header id="inicio" class="masthead banner" 
                style="background-image:url(upload/img/evento/<?= $banner; ?>);">
            <div class="container">
                <div class="intro-text">   
                </div>
            </div>
        </header>

        <!-- SOBRE O EVENTO -->
        <div class="container" style="padding-top: 50px;" id="sobreEvento">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-subheading text-uppercase">SOBRE O EVENTO</h2>
                    <h6 class="section-subheading text_black">Um pouco da história do nosso Evento.</h6>
                    <hr>
                    <?php
                    $sql2 = "select s.* from tb_admin as a, tb_evento as e, tb_sobre_evento as s
                            where a.cod_evento = e.cod_evento
                            and e.cod_evento = s.cod_evento";

                    $query2 = $mysqli->query($sql2);

                    while ($dados = $query2->fetch_array()) {
                        $titulo_sobre = $dados['titulo_sobre'];
                        $descricao_sobre = $dados['descricao_sobre'];
                        $dir = 'upload/img/sobre/';
                        $img = $dir . $dados['img_sobre'];
                        ?>
                        <img src="<?= $img; ?>" alt="<?= $dados['img_sobre'] ?>">
                        <hr>
                        <div class="col-sm-10 text-center" style="margin: 0 auto;">
                            <h3 style="font-family: 'Kaushan Script';"><?= $titulo_sobre; ?></h3>
                            <p class="text_black">
                                <?= $descricao_sobre; ?>
                            </p>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>

        <!-- PROGRAMAÇÃO -->
        <section class="bg-light" id="portfolio">
            <div class="container">
                <div class="col-lg-12 text-center">
                    <h2 class="section-subheading text_black text-uppercase" >Programação</h2>
                    <h6 class="section-subheading text_black">Nossa programação para a <?= $nome_evento; ?>.</h6>
                    <h4 class="section-subheading text_black"><?= $data_evento; ?></h4>
                </div>
                <hr>

                <?php
                include 'conexao.php';
                $sql3 = "select * from admin_evento_programacao_tipo_prog as x, tb_tipo_programacao as tp 
                    where x.cod_tipo_prog = tp.cod_tipo_prog 
                    and tp.descricao_tipo != 'shows'; ";

                $query3 = $mysqli->query($sql3);

                while ($dados = $query3->fetch_array()) {
                    $titulo = $dados['descricao_tipo'];
                    $descricao = $dados['descricao_prog'];
                    $hi = $dados['hora_inicio_prog'];
                    ?>

                    <div class="container text-center">
                        <div class="container">
                            <h4 class="section-subheading text-uppercase" style="font-family: 'Kaushan Script';" ><?= $titulo; ?></h4>
                            <h6 class="section-subheading text_black"><?= $descricao; ?></h6>
                            <ul class="list-inline">
                                <li><?= $hi; ?></li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <?php
                }
                ?>
            </div>

            <div class="container" style="padding-top: 15px;">
                <div class="container text-center">
                    <h2 class="section-heading text-uppercase" style="font-family: 'Kaushan Script';" >SHOWS</h2>
                </div>
                <div class="row">
                    <?php
                    include 'conexao.php';
                    $sql4 = "select * from admin_evento_programacao_tipo_prog as x, tb_tipo_programacao as tp 
                                where x.cod_tipo_prog = tp.cod_tipo_prog 
                                and tp.descricao_tipo = 'shows'
                                order by x.hora_inicio_prog ASC; ";

                    $query4 = $mysqli->query($sql4);
                    $dir = 'upload/img/programacao/';
                    while ($dados = $query4->fetch_array()) {
                        $cod_prog = $dados['cod_prog'];
                        $titulo = $dados['descricao_prog'];
                        $img = $dir . $dados['img_prog'];
                        $hi = $dados['hora_inicio_prog'];
                        $hf = $dados['hora_fim_prog'];
                        $pavilhao = $dados['pavilhao_prog'];
                        ?>

                        <!-- Inicio Modal -->

                        <div class = "col-md-6 portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<?= $cod_prog; ?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img class = "img-fluid" src = "<?= $img; ?>" alt = "<?= $dados['img_prog']; ?>">
                            </a>
                            <div class = "portfolio-caption">
                                <h3 style = "font-family: 'Kaushan Script';"><?= $titulo; ?></h3>
                                <br>
                                <ul class="list-inline text-center">
                                    <li>Hora Início: <?= $hi; ?></li>
                                    <li>Hora Fim: <?= $hf; ?></li>
                                    <li>Local: <?= $pavilhao; ?></li>
                                </ul>
                            </div>                                
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>  
        </section>

        <?php
        include 'conexao.php';
        $sql5 = "select * from admin_evento_programacao_tipo_prog as x, tb_tipo_programacao as tp 
                                where x.cod_tipo_prog = tp.cod_tipo_prog 
                                and tp.descricao_tipo = 'shows'
                                order by x.hora_inicio_prog ASC; ";

        $query5 = $mysqli->query($sql5);
        $dir = 'upload/img/programacao/';
        while ($dados = $query5->fetch_array()) {
            $cod_prog = $dados['cod_prog'];
            $titulo = $dados['descricao_prog'];
            $img = $dir . $dados['img_prog'];
            $hi = $dados['hora_inicio_prog'];
            $hf = $dados['hora_fim_prog'];
            $pavilhao = $dados['pavilhao_prog'];
            $video = $dados['video_prog'];
            ?>
            <div class="portfolio-modal modal fade" id="portfolioModal<?= $cod_prog; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="modal-body">
                                        <h2 class="text-uppercase"><?= $titulo; ?></h2>
                                        <iframe class="video" src="<?= $video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        <hr>
                                        <ul class="list-inline">
                                            <li>Hora Início: <?= $hi; ?></li>
                                            <li>Hora Fim: <?= $hf; ?></li>
                                            <li>Pavilhão: <?= $pavilhao; ?></li>
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fa fa-times"></i>
                                            Fechar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>

        <!-- CARDÁPIO -->
        <section id="cardapio" style="background-image:url(img/wood.jpg);">
            <div class="container-fluid">
                <div class="col-sm-12" >
                    <h1 class="section-subheading text-uppercase text-center tittulo-cardapio">CARDÁPIO</h1>
                    <div class="container">
                        <div class="row comidas">
                            <div class="col-sm-6">
                                <div class="cardapio col-12">
                                    <h3 style="font-family: 'Kaushan Script'; color: white;">COMIDAS</h3>
                                    <div class="row">
                                        <div class="col-sm-6 inner-cardapio">
                                            <?php
                                            include './conexao.php';
                                            $sql = "select * from admin_evento_cardapio_item"
                                                    . " where cod_tipo_item = 1;";
                                            $query = $mysqli->query($sql);

                                            while ($dados = $query->fetch_array()) {
                                                $nome_item = $dados['nome_item'];
                                                $img_item = $dados['img_item'];
                                                $valor_item = $dados['valor_item'];
                                                $descricao_item = $dados['descricao_item'];
                                                $valor = $dados['valor_item'];
                                                ?>
                                                <h4><?= $nome_item; ?></h4>
                                                <p> <?= $descricao_item; ?></p>

                                                <?php
                                            }
                                            ?>
                                        </div>

                                        <div class="col-sm-6 inner-cardapio-ac">
                                            <h3 style="font-family: 'Kaushan Script'; color: white; text-align: center;">ACOMPANHAMENTOS</h3>
                                            <?php
                                            include './conexao.php';
                                            $sql = "select * from admin_evento_cardapio_item"
                                                    . " where cod_tipo_item = 3;";
                                            $query = $mysqli->query($sql);

                                            while ($dados = $query->fetch_array()) {
                                                $nome_item = $dados['nome_item'];
                                                $img_item = $dados['img_item'];
                                                $valor_item = $dados['valor_item'];
                                                $descricao_item = $dados['descricao_item'];
                                                $valor = $dados['valor_item'];
                                                ?>
                                                <h4 style="font-family: 'Kaushan Script'; color: white;"><?= $nome_item; ?></h4>
                                                <p style="margin-left: 15px;padding-right: 14px;color: white;"> <?= $descricao_item; ?></p>

                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-7 float-right carosel">
                                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <?php
                                                include './conexao.php';
                                                $sql = "select * from admin_evento_cardapio_item"
                                                        . " where cod_tipo_item = 1;";
                                                $query = $mysqli->query($sql);
                                                $cont = 0;

                                                while ($dados = $query->fetch_array()) {
                                                    $img_item = $dados['img_item'];
                                                    if ($cont == 0) {
                                                        ?>
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="upload/img/item/<?= $img_item; ?>" alt="<?= $img_item; ?>">
                                                        </div>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="upload/img/item/<?= $img_item; ?>" alt="<?= $img_item; ?>">
                                                        </div>
                                                        <?php
                                                    }
                                                    $cont++;
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="cardapio col-sm-12">
                                    <h3 style="font-family: 'Kaushan Script'; color: white;">BEBIDAS</h3>
                                    <div class="row">
                                        <div class="col-sm-6 inner-cardapio">
                                            <?php
                                            include './conexao.php';
                                            $sql = "select * from admin_evento_cardapio_item"
                                                    . " where cod_tipo_item = 2;";
                                            $query = $mysqli->query($sql);

                                            while ($dados = $query->fetch_array()) {
                                                $nome_item = $dados['nome_item'];
                                                $img_item = $dados['img_item'];
                                                $valor_item = $dados['valor_item'];
                                                $descricao_item = $dados['descricao_item'];
                                                $valor = $dados['valor_item'];
                                                ?>
                                                <h4 style="color: white;"><?= $nome_item; ?></h4>
                                                <p style="color: white;"> <?= $descricao_item; ?></p>

                                                <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="col-sm-4 inner-cardapio-obs">
                                            <h3 style="font-family: 'Kaushan Script'; color: white; text-align: center;">OBSERVAÇÕES</h3>
                                            <?php
                                            include './conexao.php';
                                            $sql = "select obs_cardapio from tb_cardapio";
                                            $query = $mysqli->query($sql);

                                            while ($dados = $query->fetch_array()) {
                                                $nome_item = $dados['obs_cardapio'];
                                                ?>
                                                <h4> <?= $nome_item; ?></h4>

                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </section>

        <!-- PONTOS DE VENDA -->
        <section id="pontosVenda" class="fundo-branco" 
                 style="text-align:center;margin-top: 0%; 
                 background-image:url(img/pontos_venda.jpeg);
                 background-repeat:no-repeat;
                 background-attachment:scroll;
                 -webkit-background-size:cover;
                 -moz-background-size:cover;
                 -o-background-size:cover;
                 background-size:cover">
            <div class="container-fluid">
                <div class="row" style="margin-left: 2%;">
                    <div class="col-lg-11 text-center fundo_branco">
                        <h2 class="section-subheading text-black">PONTOS DE VENDA</h2>
                        <div class="row">
                            <?php
                            include 'conexao.php';
                            /*VIEW DE BUSCA POR PONTOS DE VENDAS*/
                            $sql6 = "select * from busca_ponto_vendas;";

                            $query6 = $mysqli->query($sql6);
                            $dir = 'upload/img/programacao/';
                            while ($dados = $query6->fetch_array()) {
                                $nome = $dados['nome_contato'];
                                $telefone = $dados['telefone_contato'];
                                $rua = $dados['rua_contato'];
                                $nr = $dados['nr_contato'];
                                $cit_l = $dados['nome_cidade'];
                                $uf = $dados['uf'];
                                ?>

                                <div class="col-sm-4">
                                    <hr>
                                    <h2 class="text-black " style="font-family: 'Kaushan Script';"><?= $nome; ?></h2>
                                    <h5 class="section-subheading text-black"><?= $telefone; ?></h5>
                                    <h5 class="section-subheading text-black"><?= $rua; ?> - <?= $cit_l; ?> - <?= $uf; ?></h5>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-11 text-center map fundo_branco">
                        <h2 class="section-subheading text-black" >LOCALIZAÇÃO</h2>
                        <br>
                        <h4 class="text-black " style="font-family: 'Kaushan Script';"> <?= $rua_evento; ?> - <?= $cit; ?> -<?= $est; ?></h4>
                        <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1097.8963231206403!2d-53.638260780708094!3d-27.141260197880563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fbb180ebea1f3f%3A0x73bed0c7c8bc99a5!2sComunidade+de+Jaboticaba!5e1!3m2!1spt-BR!2sbr!4v1530061874653" 
                                frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>
                </div>
            </div>
        </section>

        <!-- CONTATO -->
        <section id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-subheading text-uppercase" style="color:white; ">Contatos</h2>
                    <br>
                    <?php
                    include 'conexao.php';
                    
                    /*
                     * UTILIZADO VIEW PARA A BUSCA DE CONTATOS 
                     * NESSE CASO A BUSCA PELOS PONTOS DE VENDAS 
                     * E ORGANIZADORES
                    */
                    $sql7 = "select * from admin_evento_contato_tipo_contato as x, tb_tipo_contato as tc"
                            . " where x.cod_tipo_contato = tc.cod_tipo_contato"
                            . " and tc.cod_tipo_contato = 2;";

                    $query7 = $mysqli->query($sql7);

                    while ($dados = $query7->fetch_array()) {
                        $nome = $dados['nome_contato'];
                        $telefone = $dados['telefone_contato'];
                        ?>
                        <h3 style="font-family: 'Kaushan Script';color: white;"><?= $nome; ?></h3>
                        <i class="fa fa-fw fa-whatsapp" style="color: white;"></i>
                        <span class="section-subheading" style="color: white;"><?= $telefone; ?></span>
                        <br>
                        <br>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h5 class="section-subheading text-white">Para mais informações entre em contato com nossos organizadores</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contactForm" action="mail/contact_me.php" method="post" name="sentMessage" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" type="text" placeholder="Insira seu nome..." 
                                               required="required" data-validation-required-message="Por favor digite seu nome completo.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="email" type="email" placeholder="Insira seu endereço de e-mail..." 
                                               required="required" data-validation-required-message="Por favor digite seu e-mail de contato.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="phone" type="text" placeholder="Insira seu telefone..." required="required" data-validation-required-message="Por favor digite seu e-mail de contato.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Insira sua mensagem..." 
                                                  required="required" data-validation-required-message="Por favor digite sua mensagem."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar Mensagem</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="copyright">Copyright &copy; 
                            <span style="font-size: 1.1em;font-family: 'Kaushan Script';">
                                <a class="js-scroll-trigger" href="#inicio"><?= $nome_evento; ?> </a>
                            </span> 2018
                        </span>
                    </div>
                </div>
            </div>
        </footer>

        <script src="vendor/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>
        <script src="js/agency.min.js"></script>
    </body>
</html>