<?php

//Criptografia para código até o PHP 7.1.0

$data = [
    "nome" => "Hcode"
];

define("SECRET", pack("a16", "senha"));

$mcrypt = mcrypt_encrypt(
    MCRYPT_RIJNDAEL_128,
    SECRET,
    json_encode($data),
    MCRYPT_MODE_ECB
);

$final = base64_encode($mcrypt);

var_dump($final);

$string = mcrypt_decrypt(
    MCRYPT_RIJNDAEL_128,
    SECRET,
    json_decode($final),
    MCRYPT_MODE_ECB
);

var_dump($string);

 ?>