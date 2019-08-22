<?php

$filename = "usuarios.csv";

if (file_exists($filename)) {
    $file = fopen($filename, "r");

    $headers = explode(",", fgets($file));
    $data = array();

    while ($row = fgets($file)) {
        $rowData = explode(",", $row);
        $linha = array();

        for ($c = 0; $c < count($headers); $c++) {
            $linha[$headers[$c]] = $rowData[$c];
        }

        array_push($data, $linha);
    }

    fclose($file);

    echo json_encode($data);
}

 ?>