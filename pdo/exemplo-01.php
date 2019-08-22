<?php

$conn = new PDO("mysql:dbname=dbphp7;hots=localhost", "root", "");

$stmt = $conn->prepare("select * from tb_usuarios order by deslogin");
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