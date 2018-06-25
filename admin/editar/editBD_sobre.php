<?php

include '../../conexao.php';

if ($_FILES['img_sobre'] != '') {
    $diretorio_img = "../upload/img/sobre/";
    $uploadfile = $diretorio_img . basename($_FILES['img_sobre']['name']);
    $nome = $_FILES['img_sobre']['name'];
    move_uploaded_file($_FILES['img_sobre']['tmp_name'], $uploadfile);
}
if ($nome == '') {
    $nome = $_GET['i'];
}

$xx = $_GET['v'];
$x1 = $_POST['titulo_sobre'];
$x2 = $_POST['descricao_sobre'];
$x3 = $nome;
$x4 = $_POST['cod_evento'];


$sql = "CALL atualiza_sobre('$xx','$x1','$x2','$x3','$x4');";

if ($pdo->query($sql)) {
    header('location: ../index.php?url=sobre.php');
    exit();
} else {
    echo "<SCRIPT Language='javascript'>
            var confirma = confirm('Erro inesperado não tratado pelo servido!');
            if (confirma) {
            location.href='index.php?url=sobre.php';
            } else {
            location.href='index.php?url=sobre.php';
            }
            </SCRIPT>";
}