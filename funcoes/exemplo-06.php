<?php 

$pessoa = array(
	'nome' => 'Israel',
	'idade' => 42
);

foreach ($pessoa as $value) {
	if (gettype($value) === 'integer') $value += 10;

	echo $value . "<br>";
}

print_r($pessoa);

 ?>