<?php
	include 'conexion.php';
	$usuario = $_POST['nombre_usuario'];
	$nombres = $_POST['nombres'];
	$apellido = $_POST['apellidos'];
	$tecnico = $_POST['especialidad'];
	$nivel = $_POST['nivel'];
	$seccion = $_POST['seccion'];
	$carnet = $_POST['carnet'];
	
	
	

	$sql = "INSERT INTO registro(nombre_usuario,nombres,apellidos,especialidad,nivel,seccion,carnet) VALUES('".$usuario."','".$nombres."','".$apellido."','".$tecnico."','".$nivel."','".$seccion."','".$carnet."');";
	mysqli_query($conexion,$sql);
	
	header("location: Sesion.php");
 ?>