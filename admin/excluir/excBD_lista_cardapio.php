<?php

include './../conexao.php';

$xx = $_GET['id'];
$sql = "CALL del_cardapio($xx)";

if ($pdo->query($sql)) {
    echo "'<SCRIPT Language='javascript'>
            window.alert('Excluído com Sucesso!');
            location.href='index.php?url=lista_cardapio.php';
            </SCRIPT>'";
} else {
    echo "<SCRIPT Language='javascript'>
            var confirma = confirm('Falha ao excluir o Registro!');
            if (confirma) {
            location.href='index.php?url=lista_cardapio.php';
            } else {
            location.href='index.php?url=lista_cardapio.php';
            }
            </SCRIPT>";
}