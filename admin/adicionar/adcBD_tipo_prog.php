<?php

include '../../conexao.php';

$x = $_POST['titulo_tipo'];

$sql = "CALL insere_tipo_programacao('$x')";

if ($pdo->query($sql)) {
    header('location: ../index.php?url=tipo_programacao.php');
    exit();
} else {
    echo "<SCRIPT Language='javascript'>
            var confirma = confirm('Erro inesperado não tratado pelo servido!');
            if (confirma) {
            location.href='index.php?url=tipo_programacao.php';
            } else {
            location.href='index.php?url=tipo_programacao.php';
            }
            </SCRIPT>";
}