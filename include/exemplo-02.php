<?php 

//include "inc/exemplo-01.php";
require_once "inc/exemplo-01.php";
require_once "inc/exemplo-01.php";

$resultado = soma(10, 25);

echo $resultado;

/*

Diferenças entre o Require e o Include

require = obriga que o arquivo exista e que ele esteja funcionando corretamente. Se ele não estiver funcionando ou não existir ele gera um erro fatal e para a execução do código.

include = ele tenta funcionar mesmo que o arquivo não exista ou esteja com algum tipo de erro, além do include ter mais recursos ex.: existe um diretório IncludePath.

*/

 ?>