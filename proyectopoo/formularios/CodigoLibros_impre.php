<?php
	include 'conexion.php';
	$libro = $_POST['nombre_libro'];
	$autor = $_POST['autor'];
	$clasi = $_POST['clasificacion'];
	$copias = $_POST['n_copias'];
	$archivo = $_POST[''];
	$tipo = $_POST['tipo'];
	
	

	$sql = "INSERT INTO libros(nombre_libro,autor,clasificacion,n_copias,archivo,tipo) VALUES('".$libro."','".$autor."','".$clasi."','".$copias."','".$archivo."','".$tipo."');";
	mysqli_query($conexion,$sql);
	
	header("Location: mostrarLibros.php");
 ?>