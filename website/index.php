<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

// Isso são rotas em Slim Framework
$app->get('/', function(){
    echo json_encode(array(
        'date' => date("Y-m-d H:i:s")
    ));
});

// Isso são rotas em Slim Framework
$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->run();

 ?>