<?php

include './../conexao.php';
$cod = $_GET['id'];
$sql = "delete from tb_evento where cod_evento = $cod;";

if ($pdo->query($sql)) {
    echo "'<SCRIPT Language='javascript'>
            window.alert('Excluído com Sucesso!');
            location.href='index.php?url=evento.php';
            </SCRIPT>'";
} else {
    echo "<SCRIPT Language='javascript'>
            var confirma = confirm('Falha ao excluir o Registro!');
            if (confirma) {
            location.href='index.php?url=evento.php';
            } else {
            location.href='index.php?url=evento.php';
            }
            </SCRIPT>";
}