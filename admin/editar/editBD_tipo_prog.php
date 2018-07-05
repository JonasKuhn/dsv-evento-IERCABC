<?php

//CONECTAR AO BANCO

include '../conexao.php';

$xx = $_GET['v'];
$titulo_tipo = $_POST['titulo_tipo'];

$sql = "CALL atualiza_tipo_programacao('$titulo_tipo', '$xx');";
echo $sql;

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