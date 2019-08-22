<?php 

function ola() {
	$argumentos = func_get_args();

	return $argumentos;
}

print_r(ola("Bom dia", 10));

echo "<br>";

var_dump(ola("Bom dia", 10));

 ?>