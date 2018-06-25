<?php

include '../../conexao.php';

if ($_FILES['img_contato'] != '') {
    $diretorio_img = "../upload/img/contato/";
    $uploadfile = $diretorio_img . basename($_FILES['img_contato']['name']);
    $nome = $_FILES['img_contato']['name'];
    move_uploaded_file($_FILES['img_contato']['tmp_name'], $uploadfile);
}
if ($nome == '') {
    $nome = $_GET['i'];
}

$xx = $_GET['v'];
$yy = $_POST['cod_evento'];
$x1 = $_POST['nome_contato'];
$x2 = $_POST['tel_contato'];
$x3 = $_POST['email_contato'];
$x4 = $nome;
$x5 = $_POST['rua_contato'];
$x6 = $_POST['nr_contato'];
$x7 = $_POST['cidade'];
$x8 = $_POST['tipo_contato'];

$sql = "CALL atualiza_contato('$xx','$yy', '$x1','$x2','$x3','$x4','$x5','$x6','$x7','$x8');";

if ($pdo->query($sql)) {
    header('location: ../index.php?url=itens_cardapio.php');
    exit();
} else {
    echo "<SCRIPT Language='javascript'>
            var confirma = confirm('Erro inesperado não tratado pelo servido!');
            if (confirma) {
            location.href='index.php?url=itens_cardapio.php';
            } else {
            location.href='index.php?url=itens_cardapio.php';
            }
            </SCRIPT>";
}