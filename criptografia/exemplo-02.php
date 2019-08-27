<?php

//Criptografia para código a partir do PHP 5.3.0

define("SECRET_IV", pack("a16", "senha"));
define("SECRET", pack("a16", "senha"));

$data = [
    "nome" => "Hcode"
];

$openssl = openssl_encrypt(
    json_encode($data),
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
);

echo base64_encode($openssl);

$string = openssl_encrypt(
    $openssl,
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
);

var_dump($string);

 ?>