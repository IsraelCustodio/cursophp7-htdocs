<?php 

////////////////variáveis super globais/////////////////////////

$nome = (int)$_GET["a"];

var_dump($nome);

echo "</br></br>";

$ip = $_SERVER["REMOTE_ADDR"]; // pega o ip da url

echo $ip;

echo "</br></br>";

$url = $_SERVER["SCRIPT_NAME"]; // pega o caminho da página acessada

echo $url;

 ?>