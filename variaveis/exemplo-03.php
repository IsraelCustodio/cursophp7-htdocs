<?php 

////////////////tipos primitivos/////////////////////////

$nome = "Hcode";

$site = 'www.hcode.com.br';

$ano = 1990;

$salario = 5500.99;

$bloqueado = false;

////////////////tipos compostos/////////////////////////

$frutas = array("abacaxi", "laranja", "manga", "banana");

//echo $frutas[2];

$nascimento = new datetime();

//var_dump($nascimento);

////////////////tipos especiais/////////////////////////

$arquivo = fopen("exemplo-03.php", "r");

//var_dump($arquivo);

$nulo = null;

$vazio = "";

var_dump($nulo);

echo "</br></br>";

var_dump($vazio);

 ?>