<?php 

date_default_timezone_set("America/Sao_Paulo");

//$ts = strtotime("2001-09-11");
$ts = strtotime("+1 month");

echo date("l, d/m/Y", $ts);

 ?>