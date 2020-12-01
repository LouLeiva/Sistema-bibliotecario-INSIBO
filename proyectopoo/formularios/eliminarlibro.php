<?php
include('conexion.php');
	$codigo = $_GET['codigo'];
	
	$sql = "DELETE FROM libros WHERE id_libro=".$codigo;
         mysqli_query($conexion,$sql);
	header('Location: mostrarLibros.php');


?>