<?php

//CONECTAR AO BANCO

include '../../conexao.php';

$xx = $_GET['v'];
$x1 = $_POST['nome_evento'];
$x2 = $_POST['nome_sociedade'];
$x3 = $_POST['data'];
$x4 = $_POST['rua_evento'];
$x5 = $_POST['nome_comunidade'];
$x6 = $_POST['cardapio'];
$x7 = $_POST['cidade'];

$sql = "CALL atualiza_evento('$xx','$x1','$x2','$x3','$x4','$x5','$x6','$x7');";

if ($pdo->query($sql)) {
    header('location: ../index.php?url=evento.php');
    echo "'<SCRIPT Language='javascript'>
            window.alert('Atualizado com Sucesso!');
            location.href='index.php?url=evento.php';
            </SCRIPT>'";
    exit();
} else {
    echo "<SCRIPT Language='javascript'>
            var confirma = confirm('Erro inesperado não tratado pelo servido!');
            if (confirma) {
            location.href='index.php?url=evento.php';
            } else {
            location.href='index.php?url=evento.php';
            }
            </SCRIPT>";
}