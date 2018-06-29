<?php

//CONECTAR AO BANCO

include '../conexao.php';

$xx = $_GET['v'];
$x1 = $_POST['nome_admin'];
$x2 = $_POST['cod_evento'];

$sql = "CALL atualiza_admin('$xx','$x1','$x2');";

if ($pdo->query($sql)) {
    header('location: ../index.php?url=admin.php');
    exit();
} else {
    echo "<SCRIPT Language='javascript'>
            var confirma = confirm('Erro inesperado não tratado pelo servido!');
            if (confirma) {
            location.href='index.php?url=admin.php';
            } else {
            location.href='index.php?url=admin.php';
            }
            </SCRIPT>";
}