<?php
//Conexion
include "conexion.php";
//Guardando datos de formulario

$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$clave = isset($_POST['clave']) ? $_POST['clave'] : '';
//Usuario
$selectSQL = "SELECT * FROM registro WHERE nombre_usuario='$usuario' AND carnet='$clave'";
//Admnistrador
$selectAdmin = "SELECT * FROM administrador WHERE usuario_admin='$usuario' AND contraseña='$clave'";

$result = mysqli_query($conexion,$selectSQL);
//Trae los datos de manera de array
$data = mysqli_fetch_assoc($result);
print_r($data);
//ADMIN
$result1 = mysqli_query($conexion,$selectAdmin);
//Trae los datos de manera de array
$data1 = mysqli_fetch_assoc($result1);
print_r($data1);



if (mysqli_num_rows($result) > 0){
  session_start();
  $_SESSION['usuario'] = $data;
  header("Location:recursos.php");

}elseif(mysqli_num_rows($result1) > 0){
  //Iniciamos la session de administrador
  session_start();
  $_SESSION['adminMaster'] = $data1;
  header("Location:perfiladmin.php");
   

}else{

  session_start();
  
  $_SESSION['error'] = "error";

  header("Location: Sesion.php");
}


?>