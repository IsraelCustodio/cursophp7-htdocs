<?php

$cep = "13183250";

$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

// echo $response;

$data = json_decode($response, true);

print_r($data["logradouro"]);

echo "<br/>";

print_r($data["bairro"]);

echo "<br/>";

print_r($data["localidade"]);

echo "<br/>";

print_r($data["uf"]);

 ?>

