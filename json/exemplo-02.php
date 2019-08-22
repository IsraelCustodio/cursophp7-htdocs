<?php 

$json = '[{"nome":"Israel","idade":25},{"nome":"Bianca","idade":25}]';

$data = json_decode($json, true);

var_dump($data);

 ?>