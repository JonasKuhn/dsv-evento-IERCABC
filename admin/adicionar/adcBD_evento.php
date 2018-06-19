<?php

include '../../conexao.php';

$x1 = $_POST['nome_evento'];
$x2 = $_POST['nome_sociedade'];
$x3 = $_POST['data'];
$x4 = $_POST['rua_evento'];
$x5 = $_POST['nome_comunidade'];
$x6 = '1';
$x7 = $_POST['cardapio'];
$x8 = $_POST['cidade'];

$sql = "CALL insere_evento('$x1', '$x2', '$x3', '$x4', '$x5', '$x6', '$x7', '$x8'); ";

if ($pdo->query($sql)) {
    header('location: ../index.php?url=evento.php');
    exit();
} else {
    echo("Erro: %s\n" . $mysqli - error);
}