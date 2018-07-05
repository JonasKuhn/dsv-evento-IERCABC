<?php

include '../conexao.php';
$x1 = $_POST['nome_cardapio'];
$x2 = $_POST['obs_cardapio'];

$sql = "CALL insere_cardapio('$x1', '$x2');";

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