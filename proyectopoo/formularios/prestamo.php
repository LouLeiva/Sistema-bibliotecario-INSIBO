<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prestamo</title>
  <link rel="stylesheet" href="../css/style.css">
  <!---Bootstrap 4.5-->
  <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container">
          <a class="navbar-brand" href="#">
    <img src="../imagenes/Insibo.png" width="50" height="50" class="d-inline-block align-top" alt="">Insibo Open Book
  </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="RecursosDigitales.php">Recursos Electrónicos</a>
          </li>
          <li class="nav-item"> 
            <a class="btn btn-danger" href="Sesion.php">Salir</a>
          </li>
          
        </ul>
      </div>
      </div>
    </nav>
<div class="container">
    <h1 class="text-center">Registrar préstamo de libro</h1>
    <div class="alert alert-success" role="alert">Por favor, ingresa toda la información solicitada para registrar tu información exitosamente</div>
<form role="form" method="post" action="CodigoPrestamo.php">



  <!---->
   <div class="form-group" style="display: flex; justify-content: center">
    <label for="id_libro" class="col-lg-2 control-label">Libro</label>
    <div class="col-lg-5">
      <select name="id_libro">
        <option value="0">Seleccione:</option>
        <?php 
          include 'conexion.php';
          $sql = "SELECT * FROM libros";
          $resultado=mysqli_query($conexion,$sql);
          while ($fila = mysqli_fetch_array($resultado)) {
            
         ?>
        <option value="<?php echo $fila['id_libro']; ?>"><?php echo $fila['nombre_libro']; ?></option>
        
        <?php
          }
        ?>
      </select>
    </div>
  </div>
   <!---->

  
  
  <!--Registro del nombre del libro seleccionado-->
  <div class="form-group " style="display: flex; justify-content: center">
    <label for="libro" class="col-lg-2 control-label ">Título del libro</label>
    <div class="col-lg-5 center">
      <input type="text" class="form-control" name="libro"
             placeholder="Ingrese el título del libro">
    </div>
  </div>
  <!--Guardar registro del estudiante-->
  <div class="form-group " style="display: flex; justify-content: center">
    <label for="estudiante" class="col-lg-2 control-label ">Nombre del estudiante</label>
    <div class="col-lg-5 center">
      <input type="text" class="form-control" name="estudiante"
             placeholder="Ingrese su nombre completo">
    </div>
  </div>

  <!--Registro para el carnet del estudiante-->
  <div class="form-group" style="display: flex; justify-content: center">
    <label for="carnet" class="col-lg-2 control-label">Carnet</label>
    <div class="col-lg-5" >
      <input type="text" class="form-control" name="carnet"
             placeholder="Ingrese su número de carnet">
    </div>
  </div>

 <!--Registro para la sección del estudiante-->
 <div class="form-group" style="display: flex; justify-content: center">
    <label for="seccion" class="col-lg-2 control-label">Sección</label>
    <div class="col-lg-5" >
      <input type="text" class="form-control" name="seccion"
             placeholder="Ingrese la sección a la que pertenece">
    </div>
  </div>

<!--Registro para la especialidad o bachillerato del estudiante-->
  <div class="form-group" style="display: flex; justify-content: center">
    <label for="especialidad" class="col-lg-2 control-label">Bachillerato</label>
    <div class="col-lg-5">
      <input type="text" class="form-control" name="especialidad" 
             placeholder="Ingrese la especialidad a la que pertenece">
    </div>
  </div>


  <div class="form-group" style="display: flex; justify-content: center">
  <div class="btn-group btn-group-lg" role="group">
    <button type="submit" class="btn btn-success">Ingresar petición</button>
  </div>
  </div>
</form>
</div>


<br></br>

 <footer class="text-center">
  Instituto Nacional "Simón Bolivar" &copy
 </footer>

</body>
</html>