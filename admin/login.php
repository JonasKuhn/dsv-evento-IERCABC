<?php

$entrar = $_POST['login'];

if (isset($entrar)) {
    $usuario = addslashes($_POST['login_admin']);
    $senha = md5(addslashes($_POST['senha_admin']));

    require '../conexao.php';

    $sql = $pdo->query("SELECT * FROM tb_admin WHERE login_admin = '$usuario' AND senha_admin = '$senha'");

    if ($sql->rowCount() > 0) {
        $dado = $sql->fetch();
        $_SESSION['id'] = $dado['id'];
        $_SESSION['nome'] = $dado['login_admin'];
        setcookie("usuario", $dado['nome_admin']);
        header("Location: ./index.php");
    } else {
        header("Location: ./login.php");
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
        die();
    }
}