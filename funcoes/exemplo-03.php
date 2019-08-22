<?php 

function ola($texto = "Mundo", $periodo = "Bom dia") {
	return "Olá $texto! $periodo!<br>";
}

echo ola();
echo ola("", "Boa noite");
echo ola("Israel", "Boa tarde");
echo ola("Bianca", "");

 ?>