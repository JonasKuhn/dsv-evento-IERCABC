<?php

include '../conexao.php';

$diretorio_img = "../../upload/img/item/";
$uploadfile = $diretorio_img . basename($_FILES['img_item']['name']);
$nome = $_FILES['img_item']['name'];
move_uploaded_file($_FILES['img_item']['tmp_name'], $uploadfile);

$x6 = $_POST['cardapio'];
$x5 = $_POST['tipo_item'];
$x1 = $_POST['nome_item'];
$x2 = $_POST['valor_item'];
$x3 = $_POST['descricao_item'];
$x4 = $nome;

$sql = "CALL insere_item_cardapio('$x1', '$x2', '$x3', '$x4', '$x5', '$x6');";

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