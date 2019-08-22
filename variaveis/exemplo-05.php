<?php 

////////////////Escopo de variável/////////////////////////

$nome = "Israel";

function teste() {
	global $nome;
	echo $nome;
}

function teste2() {
	global $nome;
	$nome = "Bianca";
	echo $nome . " agora no teste2";
}

teste();

echo "</br></br>";

teste2();

 ?>