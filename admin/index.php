<?php
$login_cookie = $_COOKIE['usuario'];
if (isset($login_cookie)) {
    ?>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">
            <title><?= $login_cookie; ?> - Intranet</title>
            <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
            <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
            <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css"/>
            <link href="../css/sb-admin.css" rel="stylesheet" type="text/css"/>
            <script>
                function excluir(valor) {
                    return confirm('Deseja realmente excluir o registro ' + valor + '?');
                }
            </script>
            <script>
                function editar(valor) {
                    return confirm('Deseja realmente salvar as alterações em ' + valor + '?');
                }
            </script>
            <script>
                function salvar() {
                    return confirm('Deseja realmente salvar as alterações?');
                }
            </script>
        </head>
        <body class="fixed-nav sticky-footer bg-dark" id="page-top">
            <!-- Menu -->
            <?php include './menu.php'; ?>

            <div class="content-wrapper">
                <?php
                $url = $_GET['url'];

                switch ($url) {
                    // CASE PARA OS MENUS
                    case 'home.php':
                        $menu = 'Home';
                        include './navegacao.php';
                        include ('./home.php');
                        break;
                    case 'tipo_programacao.php':
                        $menu = 'Tipo de Programação';
                        include './navegacao.php';
                        include ('./tipo_prog.php');
                        break;
                    case 'programacao.php':
                        $menu = 'Programação';
                        include './navegacao.php';
                        include ('./programacao.php');
                        break;
                    case 'sobre.php':
                        $menu = 'Sobre';
                        include './navegacao.php';
                        include ('./sobre.php');
                        break;
                    case 'itens_cardapio.php':
                        $menu = 'Itens Cardápio';
                        include './navegacao.php';
                        include ('./itens_cardapio.php');
                        break;
                    case 'lista_cardapio.php':
                        $menu = 'Lista de Cardápio';
                        include './navegacao.php';
                        include ('./lista_cardapio.php');
                        break;
                    case 'contato.php':
                        $menu = 'Contatos';
                        include './navegacao.php';
                        include ('./contato.php');
                        break;
                    case 'admin.php':
                        $menu = 'Admin';
                        include './navegacao.php';
                        include ('./admin.php');
                        break;
                    case 'evento.php':
                        $menu = 'Evento';
                        include './navegacao.php';
                        include ('./evento.php');
                        break;

                    //EVENTO
                    case 'adc_evento.php':
                        $menu = '<a href="?url=evento.php">Evento</a> / Adicionar Evento';
                        include './navegacao.php';
                        include ('./adicionar/adc_evento.php');
                        break;
                    case 'excBD_evento.php':
                        include ('./excluir/excBD_evento.php');
                        break;
                    case 'edit_evento.php':
                        $menu = '<a href="?url=evento.php">Evento</a> / Editar Evento';
                        include './navegacao.php';
                        include ('./editar/edit_evento.php');
                        break;

                    //TIPO PROGRMAÇÃO
                    case 'adc_tipo_prog.php':
                        $menu = '<a href="?url=tipo_programacao.php">Tipo de Programação</a> / Adicionar Tipo de Programação';
                        include './navegacao.php';
                        include ('./adicionar/adc_tipo_prog.php');
                        break;
                    case 'excBD_tipo_prog.php':
                        include ('./excluir/excBD_tipo_prog.php');
                        break;
                    case 'edit_tipo_prog.php':
                        $menu = '<a href="?url=tipo_programacao.php">Tipo de Programação</a> / Editar Tipo de Programação';
                        include './navegacao.php';
                        include ('./editar/edit_tipo_prog.php');
                        break;

                    // PROGRAMAÇÃO
                    case 'adc_prog.php':
                        $menu = '<a href="?url=programacao.php">Programação</a> / Adicionar Programação';
                        include './navegacao.php';
                        include ('./adicionar/adc_prog.php');
                        break;
                    case 'excBD_prog.php':
                        include ('./excluir/excBD_prog.php');
                        break;
                    case 'edit_prog.php':
                        $menu = '<a href="?url=programacao.php">Programação</a> / Editar Programação';
                        include './navegacao.php';
                        include ('./editar/edit_prog.php');
                        break;

                    // SOBRE
                    case 'adc_sobre.php':
                        $menu = '<a href="?url=sobre.php">Sobre</a> / Adicionar Sobre';
                        include './navegacao.php';
                        include ('./adicionar/adc_sobre.php');
                        break;
                    case 'excBD_sobre.php':
                        include ('./excluir/excBD_sobre.php');
                        break;
                    case 'edit_sobre.php':
                        $menu = '<a href="?url=sobre.php">Sobre</a> / Editar Sobre';
                        include './navegacao.php';
                        include ('./editar/edit_sobre.php');
                        break;

                    // CARDÁPIO ITEM
                    case 'adc_itens_cardapio.php':
                        $menu = '<a href="?url=itens_cardapio.php">Itens Cardápio</a> / Adicionar Itens Cardápio';
                        include './navegacao.php';
                        include ('./adicionar/adc_itens_cardapio.php');
                        break;
                    case 'excBD_itens_cardapio.php':
                        include ('./excluir/excBD_itens_cardapio.php');
                        break;
                    case 'edit_itens_cardapio.php':
                        $menu = '<a href="?url=itens_cardapio.php">Itens Cardápio</a> / Editar Item Cardápio';
                        include './navegacao.php';
                        include ('./editar/edit_itens_cardapio.php');
                        break;

                    // CARDÁPIO 
                    case 'adc_lista_cardapio.php':
                        $menu = '<a href="?url=lista_cardapio.php">Lista de Cardápio</a> / Adicionar Cardápio';
                        include './navegacao.php';
                        include ('./adicionar/adc_lista_cardapio.php');
                        break;
                    case 'excBD_lista_cardapio.php':
                        include ('./excluir/excBD_lista_cardapio.php');
                        break;
                    case 'edit_lista_cardapio.php':
                        $menu = '<a href="?url=lista_cardapio.php">Lista de Cardápio</a> / Editar Lista de Cardápio';
                        include './navegacao.php';
                        include ('./editar/edit_lista_cardapio.php');
                        break;

                    // CONTATO 
                    case 'adc_contato.php':
                        $menu = '<a href="?url=contato.php">Contato</a> / Adicionar Contato';
                        include './navegacao.php';
                        include ('./adicionar/adc_contato.php');
                        break;
                    case 'excBD_contato.php':
                        include ('./excluir/excBD_contato.php');
                        break;
                    case 'edit_contato.php':
                        $menu = '<a href="?url=contato.php">Contato</a> / Editar Contato';
                        include './navegacao.php';
                        include ('./editar/edit_contato.php');
                        break;

                    default :
                        $menu = 'Home';
                        include './navegacao.php';
                        include ('./home.php');
                }
                ?>

                <!-- Rodapé -->
                <footer class="sticky-footer">
                    <div class="container">
                        <div class="text-center">
                            <small>Copyright © Your Website 2018</small>
                        </div>
                    </div>
                </footer>

                <!-- Botão para subir ao topo -->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fa fa-angle-up"></i>
                </a>

                <!-- Sair Modal-->
                <?php include './home_modal.php'; ?>

                <!-- Bootstrap core JavaScript-->
                <script src="../vendor/jquery/jquery.min.js" type="text/javascript"></script>
                <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
                <script src="../vendor/jquery-easing/jquery.easing.min.js" type="text/javascript"></script>
                <script src="../vendor/chart.js/Chart.min.js" type="text/javascript"></script>
                <script src="../vendor/datatables/dataTables.bootstrap4.js" type="text/javascript"></script>
                <script src="../vendor/datatables/jquery.dataTables.js" type="text/javascript"></script>
                <script src="../js/sb-admin.min.js" type="text/javascript"></script>
                <script src="../js/sb-admin-datatables.min.js" type="text/javascript"></script>
                <script src="../js/sb-admin-charts.min.js" type="text/javascript"></script>
                <script src="../vendor/jquery/jquery.maskMoney.js" type="text/javascript"></script>
                <script src="../vendor/jquery/jquery.mask.min.js" type="text/javascript"></script>
                <script type="text/javascript">
                $(function () {
                    $("#valor").maskMoney({symbol: '',
                        showSymbol: true, thousands: '.', decimal: '.', symbolStay: true});
                });
                </script>
                <script type="text/javascript">$("#txttelefone").mask("(99) 99999-9999");</script>
            </div>
        </body>
    </html>
    <?php
} else {
    echo"<script language='javascript' type='text/javascript'>alert('Faça o Login!');window.location.href='login.html'</script>";
}
?>