<?php
    include 'conexion.php';
    $codigo=$_GET['cod'];



    $sql="SELECT * FROM registro WHERE id_Usuario='$codigo'";
    $resultado = mysqli_query($conexion,$sql);
    while ($fila = mysqli_fetch_array($resultado)) {
          $codigo=$fila['id_Usuario'];
          $nombre=$fila['nombres'];
          $apellidos=$fila['apellidos'];
          $especialidad=$fila['especialidad'];
          $nivel=$fila['nivel'];
          $seccion=$fila['seccion'];
          $carnet=$fila['carnet'];
        }

        
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualización Usuarios</title>
  <link rel="stylesheet" href="../css/style.css">
  <!---Bootstrap 4.5-->
  <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body> 

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container">
          <a class="navbar-brand" href="#">
    <img src="../imagenes/Insibo.png" width="50" height="50" class="d-inline-block align-top" alt="">
  </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Inicio</a>
          </li>
          <li class="nav-item"> 
            <a class="btn btn-danger" href="Sesion.php">Salir</a>
          </li>

        </ul>
      </div>
      </div>
    </nav>
  <br>
  <br>
  <br>

<div class="container">
    <h2 class="text-center">Actualización Usuario</h2>
<form class="form-horizontal" role="form" method="post" action="CodigoActualizar_usua.php">


  <div class="form-group " style="display: flex; justify-content: center">
    <label for="id_Usuario" class="col-lg-2 control-label ">Código</label>
    <div class="col-lg-5 center">
      <input type="text" class="form-control" value="<?php echo $codigo; ?>" name="id_Usuario" readonly>
    </div>
  </div>


  <!--campo nombre del libro-->
  <div class="form-group " style="display: flex; justify-content: center">
    <label for="nombres" class="col-lg-2 control-label ">Nombres</label>
    <div class="col-lg-5 center">
      <input type="text" class="form-control" value="<?php echo $nombre; ?>" name="nombres"
             placeholder="Ingrese nombres">
    </div>
  </div>
  
  
  <!--campo apellidos-->
  <div class="form-group " style="display: flex; justify-content: center">
    <label for="apellidos" class="col-lg-2 control-label ">Apellidos</label>
    <div class="col-lg-5 center">
      <input type="text" class="form-control" value="<?php echo $apellidos; ?>"  name="apellidos"
             placeholder="Ingrese apellidos">
    </div>
  </div>


  <!--campo especialidad del ussuario-->
  <div class="form-group " style="display: flex; justify-content: center">
    <label for="especialidad" class="col-lg-2 control-label ">Técnico</label>
    <div class="col-lg-5 center">
      <input type="text" class="form-control" value="<?php echo $especialidad; ?>" name="especialidad"
             placeholder="Ingrese su especialidad">
    </div>
  </div>


  <!--campo del nivel academico--> 
  <div class="form-group" style="display: flex; justify-content: center">
    <label for="nivel" class="col-lg-2 control-label">Nivel Academico</label>
    <div class="col-lg-5">
      <input type="text" class="form-control" value="<?php echo $nivel; ?>" name="nivel" 
             placeholder="Ingrese si nivel academico">
    </div>
  </div>


  <!--campo seccion--> 
  <div class="form-group" style="display: flex; justify-content: center">
    <label for="seccion" class="col-lg-2 control-label">Sección</label>
    <div class="col-lg-5">
      <input type="text" class="form-control" value="<?php echo $seccion; ?>" name="seccion" 
             placeholder="Ingrese sección">
    </div>
  </div>


  <!--campo carnet--> 
  <div class="form-group" style="display: flex; justify-content: center">
    <label for="carnet" class="col-lg-2 control-label">Carnet</label>
    <div class="col-lg-5">
      <input type="text" class="form-control" value="<?php echo $carnet; ?>" name="carnet" 
             placeholder="Ingrese carnet">
    </div>
  </div>

  <div class="form-group" style="display: flex; justify-content: center">
    <div class=" col-lg-2">
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
  </div>
</form>
</div>




</body>
</html>