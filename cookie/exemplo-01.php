<?php

$data = array(
    "empresa" => "Hcode Treinamentos",
    "curso" => "PHP 7 completo"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "Ok";

 ?>