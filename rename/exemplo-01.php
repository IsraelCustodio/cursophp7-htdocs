<?php

$dir1 = "folder_01";
$dir2 = "folder_02";

if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {
    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

    fwrite($file, date("d-m-Y H:i:s"));

    fclose($file);
}

$diretorio = scandir($dir2);
$qtd = count($diretorio) - 2;

rename(
    $dir1 . DIRECTORY_SEPARATOR . $filename, //Origem
    $dir2 . DIRECTORY_SEPARATOR . basename($filename, ".txt") . ($qtd === 0 ? ".txt" : "_$qtd.txt")  //Destino
);

echo "Arquivo " . basename($filename, ".txt") . " movido com sucesso!";

 ?>