<?php

    include 'conexion.php';
	$libro = $_POST['libro'];
	$nombre = $_POST['estudiante'];
	$carnet = $_POST['carnet'];
	$seccion = $_POST['seccion'];
	$tecnico = $_POST['especialidad'];
	$id_libro = $_POST['id_libro'];
	

	$sql = "INSERT INTO prestamos (libro,estudiante,carnet,seccion,especialidad,id_libro) VALUES ('".$libro."','".$nombre."','".$carnet."','".$seccion."','".$tecnico."','".$id_libro."');";
	mysqli_query($conexion,$sql);
	
	header("Location: RecursosImpresos.php");



?>