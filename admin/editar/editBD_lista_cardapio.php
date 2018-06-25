<?php

include '../../conexao.php';

$xx = $_GET['v'];
$yy = $_POST['nome_cardapio'];
$x1 = $_POST['obs_cardapio'];

$sql = "CALL atualiza_cardapio('$xx','$yy', '$x1');";

if ($pdo->query($sql)) {
    header('location: ../index.php?url=lista_cardapio.php');
    exit();
} else {
    echo "<SCRIPT Language='javascript'>
            var confirma = confirm('Erro inesperado não tratado pelo servido!');
            if (confirma) {
            location.href='index.php?url=lista_cardapio.php';
            } else {
            location.href='index.php?url=lista_cardapio.php';
            }
            </SCRIPT>";
}