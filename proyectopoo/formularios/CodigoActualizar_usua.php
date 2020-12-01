<?php 
	include 'conexion.php';
	
	$codigo = $_POST['id_Usuario'];
	$nombre = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$especialidad = $_POST['especialidad'];
	$nivel = $_POST['nivel'];
	$seccion = $_POST['seccion'];
	$carnet =  $_POST['carnet'];
	
   
	$sql = "UPDATE registro SET nombres='$nombre',apellidos='$apellidos',especialidad='$especialidad',nivel='$nivel',seccion='$seccion',carnet='carnet' WHERE id_Usuario=$codigo";

	mysqli_query($conexion,$sql);
	//echo '<script type="text/javascript">alert("Regisro actualizado");</script>';

	header("location: mostrarUsuarios.php");

?>