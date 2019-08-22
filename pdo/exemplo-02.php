<?php

// Parâmetro ConnectionPooling para manter o estado de conexão 0 ou 1
$conn = new PDO("sqlsrv:database=dbphp7;server=.;ConnectionPooling=1", "sa", "biancateamo");

$stmt = $conn->prepare("select * from tb_usuarios order by idusuario");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($results);

// foreach ($results as $row) {
//     foreach ($row as $key => $value) {
//         echo "<strong>" . $key . ":</strong>" . $value . "<br/>";
//     }

//     echo "================================================<br/>";
// }

$data = array();

foreach ($results as $row) {
    array_push($data, $row);    
}

echo json_encode($data);
// var_dump($data)

 ?>