<?php
$dsn = "mysql:dbname=evento_suino;host=localhost";
$dbuser = "root";
$dbpasswd = "1234";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpasswd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {
    echo "Falhou: " . $e->getMessage();
}
//Modifica a zona de horario para sp
date_default_timezone_set('America/Sao_Paulo');