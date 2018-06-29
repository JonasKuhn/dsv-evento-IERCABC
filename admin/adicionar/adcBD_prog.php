<?php

include '../conexao.php';

$diretorio_img = "../upload/img/programacao/";
$uploadfile = $diretorio_img . basename($_FILES['img_prog']['name']);
$nome = $_FILES['img_prog']['name'];
move_uploaded_file($_FILES['img_prog']['tmp_name'], $uploadfile);

$x1 = $_POST['titulo_prog'];
$x2 = $_POST['pavilhao_prog'];
$x3 = $_POST['descricao_prog'];
$x4 = $_POST['hora_inicio'];
$x5 = $_POST['hora_fim'];
$x6 = $nome;
$x7 = $_POST['video_prog'];
$x8 = $_POST['tipo_prog'];
$x9 = $_POST['nome_evento'];

$sql = "CALL insere_programacao('$x1', '$x2', '$x3', '$x4', '$x5', '$x6', '$x7', '$x8', '$x9');";

if ($pdo->query($sql)) {
    header('location: ../index.php?url=programacao.php');
    exit();
} else {
    echo "<SCRIPT Language='javascript'>
            var confirma = confirm('Erro inesperado não tratado pelo servido!');
            if (confirma) {
            location.href='index.php?url=programacao.php';
            } else {
            location.href='index.php?url=programacao.php';
            }
            </SCRIPT>";
}