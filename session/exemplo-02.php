<?php 

require_once("config.php");

//session_unset($_SESSION['nome']);

if (isset($_SESSION))
	echo $_SESSION['nome'];

//session_destroy();

 ?>