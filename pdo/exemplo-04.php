<?php

$conn = new PDO("mysql:dbname=dbphp7;hots=localhost", "root", "");

$stmt = $conn->prepare("update tb_usuarios set deslogin = :login, dessenha = :senha where idusuario = :id");

$login = "bianca";
$senha = "Bsrc@551093";
$id = 2;

$stmt->bindParam(":login", $login);
$stmt->bindParam(":senha", $senha);
$stmt->bindParam(":id", $id);

$stmt->execute();

// echo "Inserido OK!";

$stmt = $conn->prepare("select * from tb_usuarios order by deslogin");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$data = array();

foreach ($results as $row) {
    array_push($data, $row);    
}

echo json_encode($data);
// var_dump($data)

 ?>