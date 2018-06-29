<?php
//PARÂMETROS DE CONFIGURAÇÃO
$host = 'localhost'; //IP do Servidor MySQL
$base = 'evento_suino';
$usuario = 'root';
$senha = '1234';

//CONEXÃO AO BD
$mysqli = new mysqli($host,$usuario,$senha,$base);
// Caso algo tenha dado errado, exibe uma mensagem do erro
if (mysqli_connect_errno()) 
	trigger_error(mysqli_connect_error());
// Alterar caracteres para utf8 (termos acentuados) 
$mysqli->set_charset("utf8");
//Modifica a zona de horário para o horário de SP.
date_default_timezone_set('America/Sao_Paulo');

