<?php

include './conexao.php';

$xx = $_GET['id'];
$yy = $_GET['c'];
$sql = "CALL del_cardapio_item($xx, $yy)";

if ($pdo->query($sql)) {
    echo "'<SCRIPT Language='javascript'>
            window.alert('Excluído com Sucesso!');
            location.href='index.php?url=itens_cardapio.php';
            </SCRIPT>'";
} else {
    echo "<SCRIPT Language='javascript'>
            var confirma = confirm('Falha ao excluir o Registro!');
            if (confirma) {
            location.href='index.php?url=itens_cardapio.php';
            } else {
            location.href='index.php?url=itens_cardapio.php';
            }
            </SCRIPT>";
}