<?php 
	include 'conexion.php';
	
	$codigo = $_POST['id_libro'];
	$nombre = $_POST['nombre_libro'];
	$autor = $_POST['autor'];
	$cate = $_POST['clasificacion'];
	$ejemplares = $_POST['n_copias'];
	$tipo = $_POST['tipo'];
	
   
	$sql = "UPDATE libros SET nombre_libro='$nombre',autor='$autor',clasificacion='$cate',n_copias='$ejemplares',tipo='$tipo' WHERE id_libro=$codigo";

	mysqli_query($conexion,$sql);
	//echo '<script type="text/javascript">alert("Regisro actualizado");</script>';

	header("location: mostrarLibros.php");

?>