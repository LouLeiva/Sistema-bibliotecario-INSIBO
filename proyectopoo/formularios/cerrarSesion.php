<?php
session_start();

if (isset($_SESSION['usuario'])){

	unset($_SESSION['usuario']);

	header("Location:../index.php");
}
if (isset($_SESSION['adminMaster'])){

	unset($_SESSION['adminMaster']);

	header("Location:../index.php");
}


?>