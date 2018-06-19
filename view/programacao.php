<?php
//Menu 
include './menu.php';
//Cabecalho
include './cabecalho.php';
include '../conexao.php';
?>
<h1>Programação</h1>
<?php
$sql = "Select hora_inicio_prog, hora_fim_prog, obs_prog, img_prog, pavilhao_prog, video_prog "
        . "from tb_programacao";
$query = $mysqli->query($sql);
while ($dados = $query->fetch_array()) {
    $hora_inicio_prog = $dados['hora_inicio_prog'];
    $hora_fim_prog = $dados['hora_fim_prog'];
    $obs_prog = $dados['obs_prog'];
    $img_prog = $dados['img_prog'];
    $pavilhao_prog = $dados['pavilhao_prog'];
    $video_prog = $dados['video_prog'];
    ?>
    <?php
}
?>
    
<div class="container">
    <div class="col-lg-8 col-md-10 mx-auto">
        <ul>
            <li>Alvorada Festiva  06:00 Horas.</li>
            <li>Recepção 10:00 Horas </li>
            <li>Pronunciamentos e Abertura do Evento 11:00Horas</li>
            <li>Início do Almoço 11:30</li>              
        </ul>
        <H2>Atrações:</H2> 
        <ul>
            
            <li>Banda KN início 10:30 às 12:30</li>
            <li>Banda Festão 13:00 às 18:00</li>
            <li>Banda Chopão </li>
        </ul>
    </div>
</div>
<?php
include './rodape.php';
?>