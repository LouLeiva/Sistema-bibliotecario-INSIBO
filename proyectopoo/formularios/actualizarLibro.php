<?php
    include 'conexion.php';
    $codigo=$_GET['codigo'];



    $sql="SELECT * FROM libros WHERE id_libro='$codigo'";
    $resultado = mysqli_query($conexion,$sql);
    while ($fila = mysqli_fetch_array($resultado)) {
          $codigo=$fila['id_libro'];
          $nombre=$fila['nombre_libro'];
          $autor=$fila['autor'];
          $cate=$fila['clasificacion'];
          $ejemplares=$fila['n_copias'];
          $tipo =$fila['tipo'];
        }
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualización Libros</title>
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
    <h2 class="text-center">Actualización Libro</h2>
<form class="form-horizontal" role="form" method="post" action="CodigoActualizarli.php">


  <div class="form-group " style="display: flex; justify-content: center">
    <label for="id_libro" class="col-lg-2 control-label ">Código</label>
    <div class="col-lg-5 center">
      <input type="text" class="form-control" value="<?php echo $codigo; ?>" name="id_libro" readonly>
    </div>
  </div>
  

  <!--campo nombre del libro-->
  <div class="form-group " style="display: flex; justify-content: center">
    <label for="nombre_libro" class="col-lg-2 control-label ">Nombre Libro</label>
    <div class="col-lg-5 center">
      <input type="text" class="form-control" value="<?php echo $nombre; ?>" name="nombre_libro"
             placeholder="Ingrese el nombre del Libro">
    </div>
  </div>
  
  <!--campo del autor del libro-->
  <div class="form-group " style="display: flex; justify-content: center">
    <label for="autor" class="col-lg-2 control-label ">Autor</label>
    <div class="col-lg-5 center">
      <input type="text" class="form-control" value="<?php echo $autor; ?>"  name="autor"
             placeholder="Ingrese el autor del libro">
    </div>
  </div>


  <!--campo de la categoría de libro-->
  <div class="form-group " style="display: flex; justify-content: center">
    <label for="clasificacion" class="col-lg-2 control-label ">Clasificación</label>
    <div class="col-lg-5 center">
      <input type="text" class="form-control" value="<?php echo $cate; ?>" name="clasificacion"
             placeholder="Ingrese la clasificación a la que pertenece el libro">
    </div>
  </div>


  <!--campo del numero de ejemplares disponibles--> 
  <div class="form-group" style="display: flex; justify-content: center">
    <label for="n_copias" class="col-lg-2 control-label">Ejemplares</label>
    <div class="col-lg-5">
      <input type="text" class="form-control" value="<?php echo $ejemplares; ?>" name="n_copias" 
             placeholder="Ingrese la cantidad de ejemplares disponibles">
    </div>
  </div>


   <!--campo del tipo de libro-->
  <div class="form-group " style="display: flex; justify-content: center">
    <label for="tipo" class="col-lg-2 control-label ">Tipo Archivo</label>
    <div class="col-lg-5 center"> 
      <input type="text" class="form-control" value="<?php echo $tipo; ?>" name="tipo"
             placeholder="Ingrese la clasificacion a la que pertenece el libro">
    </div>
  </div>


  <div class="form-group" style="display: flex; justify-content: center">
    <div class=" col-lg-2">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </div>
</form>
</div>




</body>
</html>