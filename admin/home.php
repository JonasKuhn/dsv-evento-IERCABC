<?php
if (isset($login_cookie)) {
    ?>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-area-chart"></i> Exemplo de Gráfico
        </div>
        <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Atualizado ontem as 23:59</div>
    </div>
<?php } ?>