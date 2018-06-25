<?php
include './cabecalho.php';
include './menu.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" style="text\css" href="../css/list.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <div id="portfolio" class="container-fluid text-center bg-grey">
            <h2>Programação</h2><br>
            <div class="row text-center slideanim">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="img/asus zenfone go.jpg" alt="ASUS" width="400" height="300">
                        <p>Ireno e Dari Banda Festão</div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="img/iphone7.jpg" alt="APPLE" width="400" height="300">
                        <p>Apple iPhone 7, Chip A10, iOS 10, Tela 4,7´, 32GB, Câmera 12MP, 4G, Desbloqueado MN8X2/A Dourado</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="img/lgk10.jpg" alt="LG" width="400" height="300">
                        <p>Smartphone LG K10 K430TV, Octa Core, Android 6.0, Tela 5.3´, 16GB, 13MP, 4G, Dual Chip, Desbloqueado - Indigo </p>
                    </div>
                </div>
            </div>
            <footer class="container-fluid text-center">
                <a href="#myPage" title="To Top">
                    <span class="glyphicon glyphicon-chevron-up"></span>
                </a>
                <p>Voltar ao Início.</p>
            </footer>
            <script>
                $(document).ready(function () {
                    // Add smooth scrolling to all links in navbar + footer link
                    $(".navbar a, footer a[href='#myPage']").on('click', function (event) {
                        // Make sure this.hash has a value before overriding default behavior
                        if (this.hash !== "") {
                            // Prevent default anchor click behavior
                            event.preventDefault();

                            // Store hash
                            var hash = this.hash;

                            // Usando o método animate () do jQuery para adicionar uma página suave
                            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                            $('html, body').animate({
                                scrollTop: $(hash).offset().top
                            }, 900, function () {

                                // Add hash (#) to URL when done scrolling (default click behavior)
                                window.location.hash = hash;
                            });
                        } // End if
                    });

                    $(window).scroll(function () {
                        $(".slideanim").each(function () {
                            var pos = $(this).offset().top;

                            var winTop = $(window).scrollTop();
                            if (pos < winTop + 600) {
                                $(this).addClass("slide");
                            }
                        });
                    });
                })
            </script>
    </body>
</html>
