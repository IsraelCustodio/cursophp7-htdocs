<?php 

$a = null;

$b = 8;

$c = 10;

// para testar se uma variável for NULL ele ignora e vai para a próxima, parando na que não for NULL
echo $a ?? $b ?? $c;

 ?>