<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Israel Custodio");
$cad->setEmail("israelbianca@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

// echo $cad;

 ?>