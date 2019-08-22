<?php

$conn = new PDO("mysql:dbname=dbphp7;hots=localhost", "root", "");

if (isset($_GET["id"])) {
    $stmt = $conn->prepare("delete from tb_usuarios where idusuario = :id");

    $id = $_GET["id"];

    $stmt->bindParam(":id", $id);

    $stmt->execute();
}

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