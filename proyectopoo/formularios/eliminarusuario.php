<?php
include('conexion.php');
	$codigo = $_GET['cod'];
	
	$sql = "DELETE FROM registro WHERE id_Usuario=".$codigo;
         mysqli_query($conexion,$sql);
	header('Location: mostrarUsuarios.php');


?>