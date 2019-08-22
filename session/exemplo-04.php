<?php 

session_id('i51ug0093fst8f7alksddfu41i');

require_once("config.php");

session_regenerate_id();

echo session_id() . "<br>";
echo session_name(). "<br>";

var_dump($_SESSION);

 ?>