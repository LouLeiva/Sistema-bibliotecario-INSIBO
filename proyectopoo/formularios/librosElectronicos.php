<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Recursos Digitales</title>
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
            <a class="nav-link" href="mostrarUsuarios.php">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mostrarLibros.php">Libros</a>
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
    <h2 class="text-center">Registro de Libros</h2>
<form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="CodigoLibros_ele.php">


  <!--campo nombre del libro-->
  <div class="form-group " style="display: flex; justify-content: center">
    <label for="nombre_libro" class="col-lg-2 control-label ">Nombre Libro</label>
    <div class="col-lg-5 center">
      <input type="text" class="form-control" name="nombre_libro"
             placeholder="Ingrese el nombre del Libro">
    </div>
  </div>
  
  <!--campo del autor del libro-->
  <div class="form-group " style="display: flex; justify-content: center">
    <label for="autor" class="col-lg-2 control-label ">Autor</label>
    <div class="col-lg-5 center">
      <input type="text" class="form-control" name="autor"
             placeholder="Ingrese el autor del libro">
    </div>
  </div>


  <!--campo de la categoría de libro-->
  <div class="form-group " style="display: flex; justify-content: center">
    <label for="clasificacion" class="col-lg-2 control-label ">Clasificación</label>
    <div class="col-lg-5 center">
      <input type="text" class="form-control" name="clasificacion"
             placeholder="Ingrese la clasificacion a la que pertenece el libro">
    </div>
  </div>


  <!--campo del tipo de libro-->
  <div class="form-group " style="display: flex; justify-content: center">
    <label for="tipo" class="col-lg-2 control-label ">Tipo Archivo</label>
    <div class="col-lg-5 center">
      <input type="text" class="form-control" name="tipo"
             placeholder="Ingrese la clasificacion a la que pertenece el libro">
    </div>
  </div>



   <div class="form-group" style="display: flex; justify-content: center;">
   	<label for="archivo" class="col-lg-2 control-label">Archivo</label>
   	<div class="col-lg-3.5 center">
   		<input type="file" accept=".pdf" class="form-control" name="archivo">
   	</div>

   	<div class="form-group" style="display: flex; justify-content: center">
    <div class=" col-lg-2">
       <input type="submit" class="btn btn-primary" value="Registrar">
    </div>
  </div>
</div>
</form>
</div>

<br><br><br><br><br>

<footer class="text-center">
  Instituto Nacional "Simón Bolivar" &copy
</footer>
</body>
</html>
