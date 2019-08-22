<?php 

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'Israel',
	'idade' => 25
));

array_push($pessoas, array(
	'nome' => 'Bianca',
	'idade' => 25
));

echo json_encode($pessoas);

 ?>