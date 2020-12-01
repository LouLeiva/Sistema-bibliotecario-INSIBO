<?php

include 'conexion.php';
	$libro = $_POST['nombre_libro'];
	$autor = $_POST['autor'];
	$cat = $_POST['clasificacion'];
	$tipo = $_POST['tipo'];
	$archivo = $_FILES['archivo']['name'];

    $tmp_name = $_FILES['archivo']['tmp_name'];

    move_uploaded_file($tmp_name,"../documentos/".$archivo);



	$sql = "INSERT INTO libros(nombre_libro,autor,clasificacion,tipo,archivo) VALUES('".$libro."','".$autor."','".$cat."','".$tipo."','".$archivo."');";
	mysqli_query($conexion,$sql);
	
	header("Location: mostrarLibros.php");

	

?>