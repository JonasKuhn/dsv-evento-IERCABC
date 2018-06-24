<?php
//Menu 
include './menu.php';
//Cabecalho
include '../conexao.php';
?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('../img/contato-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Contato</h1>
                    <span class="subheading">Esclareça suas dúvidas</span>
                </div>
            </div>
        </div>
    </div>
</header>
        <?php
        $sql = "Select nome_contato, telefone_contato, email_contato, img_contato, rua_contato, nr_contato "
                . "from tb_contato";
        $query = $pdo->query($sql);
        while ($dados = $query->fetch()) {
            $nome_contato = $dados['nome_contato'];
            $telefone_contato = $dados['telefone_contato'];
            $email_contato = $dados['email_contato'];
            $img_contato = $dados['img_contato'];
            $rua_contato = $dados['rua_contato'];
            $nr_contato = $dados['nr_contato'];
            ?>
            <?php
        }
        ?>
<!-- Main Content -->
    <div class="mapas">
        <h2>Nossa Localizaçao</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1497.5973737223667!2d-53.63836532479368!3d-27.141147294873765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fbb13ab8dfaee7%3A0x86fb4a55813d5cbe!2sUnnamed+Road%2C+S%C3%A3o+Jo%C3%A3o+do+Oeste+-+SC%2C+89897-000!5e1!3m2!1spt-BR!2sbr!4v1529433693442" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form name="sentMessage" id="contactForm" novalidate>
                <h2>Quaisquer duvidas envienos um email</h2>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Nome</label>
                        <input type="text" class="form-control" placeholder="Nome" id="Nome" required data-validation-required-message="Por favor, insira seu nome.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Endereço de email</label>
                        <input type="email" class="form-control" placeholder="Endereço de email" id="email" required data-validation-required-message="Por favor, insira seu email.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Telefone</label>
                        <input type="tel" class="form-control" placeholder="Telefone" id="phone" required data-validation-required-message="Por favor, insira seu telefone.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Descrição</label>
                        <textarea rows="5" class="form-control" placeholder="Mensagem" id="message" required data-validation-required-message="Por favor, insira seu mensagem."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="trava"></div>
<div>
    <p><span class="organizadores"><strong>Organizadores:</strong><br></span>
                            <span class="org"><?=$nome_contato?>,<br></span>
                        <span class="org"><?=$telefone_contato?>,<br></span> 
                        <span class="org"><?=$email_contato?>,<br></span> 
                        <span class="org"><?=$rua_contato?>,<br></span> 
                        <span class="org"><?=$nr_contato?><br></span></p>
                    <p><span class="orgn">Locais disponíveis para compra de ingressos e almoços:</span><?=$descricao_tipo_contato?></p>
                </div>
                <div class="i2Style">
                    <a href="#openModal">Ingressos disponíveis</a>
                </div>
                <div id="openModal" class="modalWindow">
    <div>
        
        <div class="modalHeader">
            <h2>Ingressos disponíveis em:</h2>
            <a href="#close" title="Close" class="close">X</a>
        </div>
        
        <div class="modalContent">
            <p>São João do Oeste:</p>
            <p>Agropecuária Bressler</p>
            <p>Itapiranga:</p>
            <p>Sorveteria Tropical</p>
            <p>Itapiranga (Sede Capela):</p>
            <p>Bar Capelense</p>
            <p>Tunápolis:</p>
            <p>Restaurante Pauli</p>
            <p>Iporã do Oeste:</p>
            <p>Hora Certa</p>
        </div>
        
        <div class="modalFooter">
            <a href="#cancel" title="Cancel" class="cancel">Cancel</a>
            <a href="#ok" title="Ok" class="ok">Apply</a>
            <p>Keep in mind that this is a demo</p>
            <div class="clear"></div>
        </div>
    </div>
</div>