<?php

include './../conexao.php';
$cod = $_GET['id'];
$sql = "CALL del_tipo_prog($cod)";

if ($pdo->query($sql)) {
    echo "'<SCRIPT Language='javascript'>
            window.alert('Excluído com Sucesso!');
            location.href='index.php?url=tipo_programacao.php';
            </SCRIPT>'";
} else {
    echo "<SCRIPT Language='javascript'>
            var confirma = confirm('Tipo de programação esta sendo utilizado!');
            if (confirma) {
            location.href='index.php?url=tipo_programacao.php';
            } else {
            location.href='index.php?url=tipo_programacao.php';
            }
            </SCRIPT>";
}