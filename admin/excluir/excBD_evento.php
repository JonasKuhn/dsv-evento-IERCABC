<?php

include './conexao.php';
$xx = $_GET['id'];
$sql = "CALL del_evento($xx)";

if ($pdo->query($sql)) {
    echo "'<SCRIPT Language='javascript'>
            window.alert('Excluído com Sucesso!');
            location.href='index.php?url=evento.php';
            </SCRIPT>'";
} else {
    echo "<SCRIPT Language='javascript'>
            var confirma = confirm('Não foi possível excluír: Este Evento esta sendo utilizado!');
            if (confirma) {
            location.href='index.php?url=evento.php';
            } else {
            location.href='index.php?url=evento.php';
            }
            </SCRIPT>";
}