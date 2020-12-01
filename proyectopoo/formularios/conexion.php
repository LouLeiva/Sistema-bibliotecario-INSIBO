<?php

    $host = "localhost";
	$usuario = "root";
	$contrasenia = "";
	$basededatos = "biblioteca";
	$conexion = new mysqli($host,$usuario,$contrasenia,$basededatos);


//probando la conecion a mysql
	if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}

?>