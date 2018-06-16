<?php
if (isset($login_cookie)) {
    ?>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Programação do Evento</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Hora Início</th>
                            <th>Hora Fim</th>
                            <th>Local da <br>Programação</th>
                            <th>Observação da <br>Programação</th>
                            <th>Valor <br>Programação</th>
                            <th>Imagem</th>
                            <th>Vídeo</th>
                            <th>Editar | Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="#" title="EDITAR"><i class="fa fa-2x fa-edit pr-3 pl-3"></i></a>
                                <a href="#" title="EXCLUIR"><i class="fa fa-2x fa-trash-o"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php } ?>