<?php

include '../../conexao.php';

$diretorio_img = "../upload/img/item/";
$uploadfile = $diretorio_img . basename($_FILES['img_contato']['name']);
$nome = $_FILES['img_contato']['name'];
move_uploaded_file($_FILES['img_contato']['tmp_name'], $uploadfile);


$x1 = $_POST['nome_contato'];
$x2 = $_POST['tel_contato'];
$x3 = $_POST['email_contato'];
$x4 = $nome;
$x5 = $_POST['rua_contato'];
$x6 = $_POST['nr_contato'];
$x7 = $_POST['cidade'];
$x8 = $_POST['tipo_contato'];
$x9 = $_POST['cod_evento'];

$sql = "CALL insere_contato('$x1', '$x2', '$x3', '$x4', '$x5', '$x6', '$x7', '$x8', '$x9');";
try {
    $pdo->query($sql);
    header('location: ../index.php?url=contato.php');
    exit();
} catch (PDOException $e) {

    echo "<SCRIPT Language='javascript'>
            var confirma = confirm('$e->getMessage()');
            if (confirma) {
            location.href='index.php?url=contato.php';
            } else {
            location.href='index.php?url=contato.php';
            }
            </SCRIPT>";
}