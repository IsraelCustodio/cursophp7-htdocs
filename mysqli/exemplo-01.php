<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
    exit;
}

$stmt = $conn->prepare("insert into tb_usuarios (deslogin, dessenha) values (?, ?)");
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root2";
$pass = "!@#$";

$stmt->execute();

 ?>