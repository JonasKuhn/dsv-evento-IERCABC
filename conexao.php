<?php
$dsn = "mysql:dbname=evento_suino;host=localhost";
$dbuser = "root";
$dbpasswd = "1234";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpasswd);
} catch (PDOException $e) {
    echo "Falhou: " . $e->getMessage();
}