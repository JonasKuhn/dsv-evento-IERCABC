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

        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <link href="css/agency.min.css" rel="stylesheet">

    </head>

    <body id="inicio">
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
        <header class="masthead" style="text-align:center;color:#fff;margin-top: 6%; background-image:url(admin/upload/img/evento/<?= $banner; ?>);background-repeat:no-repeat;background-attachment:scroll;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover">
            <div class="container">
                <div class="intro-text">
                    <div style="height: 150px;"></div>   
                </div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#sobreEvento">Sobre Nosso Evento</a>
            </div>
        </header>

        <!-- SOBRE O EVENTO -->
        <div class="container" style="padding-top: 50px;" id="sobreEvento">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading text-uppercase">SOBRE O EVENTO</h1>
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
                        $dir = 'admin/upload/img/sobre/';
                        $img = $dir . $dados['img_sobre'];
                        ?>
                        <img src="<?= $img; ?>" alt="" style="height: 300px;">
                        <hr>
                        <div class="col-sm-7 text-center" style="margin: 0 auto;">
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
                    <h2 class="section-heading text_black text-uppercase" >Programação</h2>
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
                            <h4 class="section-heading text-uppercase" style="font-family: 'Kaushan Script';" ><?= $titulo; ?></h4>
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
                <div class="container text-center">
                    <h4 class="section-heading text-uppercase" style="font-family: 'Kaushan Script';" >SHOWS</h4>
                </div>
                <div class="container" style="padding-top: 50px;">
                    <div class="row">
                        <?php
                        include 'conexao.php';
                        $sql4 = "select * from admin_evento_programacao_tipo_prog as x, tb_tipo_programacao as tp 
                                where x.cod_tipo_prog = tp.cod_tipo_prog 
                                and tp.descricao_tipo = 'shows'
                                order by x.hora_inicio_prog ASC; ";

                        $query4 = $mysqli->query($sql4);
                        $dir = 'admin/upload/img/programacao/';
                        while ($dados = $query4->fetch_array()) {
                            $cod_prog = $dados['cod_prog'];
                            $titulo = $dados['descricao_prog'];
                            $img = $dir . $dados['img_prog'];
                            $hi = $dados['hora_inicio_prog'];
                            $hf = $dados['hora_fim_prog'];
                            $pavilhao = $dados['pavilhao_prog'];
                            ?>

                            <!-- Inicio Modal -->

                            <div class = "col-md-3 portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<?= $cod_prog; ?>">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content">
                                            <i class="fa fa-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img class = "img-fluid" src = "<?= $img; ?>" alt = "<?= $dados['img_prog']; ?>">
                                </a>
                                <div class = "portfolio-caption">
                                    <h3 style = "font-family: 'Kaushan Script';"><?= $titulo;?></h3>
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
            </div>
        </section>

        <?php
        include 'conexao.php';
        $sql5 = "select * from admin_evento_programacao_tipo_prog as x, tb_tipo_programacao as tp 
                                where x.cod_tipo_prog = tp.cod_tipo_prog 
                                and tp.descricao_tipo = 'shows'
                                order by x.hora_inicio_prog ASC; ";

        $query5 = $mysqli->query($sql5);
        $dir = 'admin/upload/img/programacao/';
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
                                        <iframe style="margin: 0 auto; "width="480" height="300" src="<?= $video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
        <section id="cardapio">
            <div class="container">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">CARDÁPIO</h2>
                </div>                
            </div>
        </section>

        <!-- PONTOS DE VENDA -->
        <section id="pontosVenda" class="fundo-branco" 
                 style="text-align:center;margin-top: 7.5%; 
                 background-image:url(img/pontos_venda.jpeg);
                 background-repeat:no-repeat;
                 background-attachment:scroll;
                 -webkit-background-size:cover;
                 -moz-background-size:cover;
                 -o-background-size:cover;
                 background-size:cover">
            <div class="container-fluid">
                <div class="row" style="margin-left: 2%;">
                    <div class="col-lg-5 text-center fundo_branco">
                        <h2 class="section-heading text-black">PONTOS DE VENDA</h2>
                        <?php
                        include 'conexao.php';
                        $sql6 = "select * from busca_ponto_vendas;";

                        $query6 = $mysqli->query($sql6);
                        $dir = 'admin/upload/img/programacao/';
                        while ($dados = $query6->fetch_array()) {
                            $nome = $dados['nome_contato'];
                            $telefone = $dados['telefone_contato'];
                            $rua = $dados['rua_contato'];
                            $nr = $dados['nr_contato'];
                            $cit = $dados['nome_cidade'];
                            $uf = $dados['uf'];
                            ?>
                            <br>
                            <h2 class="text-black " style="font-family: 'Kaushan Script';"><?= $nome; ?></h2>
                            <h5 class="section-subheading text-black"><?= $telefone; ?></h5>
                            <h5 class="section-subheading text-black"><?= $rua; ?> - <?= $nr; ?> - <?= $cit; ?> - <?= $uf; ?></h5>

                        <?php } ?>
                    </div>
                    <div class="col-lg-5 text-center fundo_branco">
                        <h2 class="section-heading text-black" >LOCALIZAÇÃO</h2>
                        <br>
                        <h3 class="text-black " style="font-family: 'Kaushan Script';"> <?= $rua_evento; ?> - <?= $cit; ?> -<?= $est; ?></h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1097.8963231206403!2d-53.638260780708094!3d-27.141260197880563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fbb180ebea1f3f%3A0x73bed0c7c8bc99a5!2sComunidade+de+Jaboticaba!5e1!3m2!1spt-BR!2sbr!4v1530061874653" 
                                width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>
                </div>
            </div>
        </section>

        <!-- CONTATO -->
        <section id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contatos</h2>
                    <?php
                    include 'conexao.php';
                    $sql7 = "select * from admin_evento_contato_tipo_contato as x, tb_tipo_contato as tc"
                            . " where x.cod_tipo_contato = tc.cod_tipo_contato"
                            . " and tc.cod_tipo_contato = 2;";

                    $query7 = $mysqli->query($sql7);

                    while ($dados = $query7->fetch_array()) {
                        $nome = $dados['nome_contato'];
                        $telefone = $dados['telefone_contato'];
                        ?>
                        <h2 style="font-family: 'Kaushan Script';color: white;"><?= $nome; ?></h2>
                        <h5 class="section-subheading" style="color: white;"><?= $telefone; ?></h5>
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
                                <div class="col-md-6">
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
                                <div class="col-md-6">
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
                        <span style="font-size: 1.1em;" class="copyright">Copyright &copy; 
                            <span style="font-size: 1.1em;font-family: 'Kaushan Script';">
                                <a class="js-scroll-trigger" href="#inicio"><?= $nome_evento; ?> </a>
                            </span> 2018
                        </span>
                    </div>
                </div>
            </div>
        </footer>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>
        <script src="js/agency.min.js"></script>
    </body>
</html>