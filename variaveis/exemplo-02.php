<?php 

/*
$anoNascimento = 1990;

//$nomeCompleto = "";*/

//Na linha de baixo temos uma variável com número no nome

$nome1 = "Israel";

$sobrenome = "Custódio";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit();

echo $nome1;

echo "</br></br>";

// comando unset destroi uma variável
unset($nome1);

// comando isset verifica se uma variável existe
if (isset($nome1)) {
	echo $nome1;
}

 ?>