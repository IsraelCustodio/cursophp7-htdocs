<?php 

date_default_timezone_set("America/Sao_Paulo");

$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d H:i:s") . "\r\n");

fclose($file);

echo "Arquivo criado com sucesso!";

 ?>