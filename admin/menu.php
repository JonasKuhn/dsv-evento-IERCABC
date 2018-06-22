<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="?url=home.php">Admin</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Painel de Controle">
                <a class="nav-link" href="?url=home.php">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Painel de Controle</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Evento">
                <a class="nav-link" href="?url=evento.php">
                    <i class="fa fa-fw fa-puzzle-piece"></i>
                    <span class="nav-link-text">Evento</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Programação">
                <a class="nav-link nav-link-collapse collapsed"  data-toggle="collapse" 
                   href="#menuProg" data-parent="#menuProg">
                    <i class="fa fa-fw fa-cutlery"></i>
                    <span class="nav-link-text">Programação</span>
                </a>
                <ul class="sidenav-second-level collapse" id="menuProg">
                    <li>
                        <a href="?url=programacao.php">Item da Programação</a>
                    </li>
                    <li>
                        <a href="?url=tipo_programacao.php">Tipos de Programação</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Sobre">
                <a class="nav-link" href="?url=sobre.php">
                    <i class="fa fa-fw fa-info"></i>
                    <span class="nav-link-text">Sobre</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cardápio">
                <a class="nav-link nav-link-collapse collapsed"  data-toggle="collapse" 
                   href="#menuCardapio" data-parent="#menuCardapio">
                    <i class="fa fa-fw fa-cutlery"></i>
                    <span class="nav-link-text">Cardápio</span>
                </a>
                <ul class="sidenav-second-level collapse" id="menuCardapio">
                    <li>
                        <a href="?url=lista_cardapio.php">Lista de Cardápios</a>
                    </li>
                    <li>
                        <a href="?url=itens_cardapio.php">Itens Cardápio</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Contatos">
                <a class="nav-link" href="?url=contato.php">
                    <i class="fa fa-fw fa-address-book"></i>
                    <span class="nav-link-text">Contatos</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Admin">
                <a class="nav-link" href="?url=admin.php">
                    <i class="fa fa-fw fa-user-circle"></i>
                    <span class="nav-link-text">Admin</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#sairModal">
                    <i class="fa fa-fw fa-sign-out"></i>Sair</a>
            </li>
        </ul>
    </div>
</nav>