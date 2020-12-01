<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de Libros</title>
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
            <a class="nav-link" href="IngresarLibro.php">Nuevo Libro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mostrarUsuarios.php">Usuarios</a>
          </li>
          <li class="nav-item"> 
            <a class="btn btn-danger" href="Sesion.php">Salir</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>

<br><br><br><br>
<div style="display: flex;justify-content: flex-end; margin-right: 100px ">
  <a  class="btn btn-primary" style="font-size:  20px" href="IngresarLibro.php">Nuevo Libro</a>  
</div>

<br><br>
<!--tabla-->
<div class="container">
<div class="row">
<table class="table table-hover">
  <thead style="background: dodgerblue; opacity: 0.5; color: white">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Autor</th>
      <th scope="col">Clasificación</th>
      <th scope="col">Ejemplares</th>
      <th scope="col" class="text-center">Acciones</th>

    </tr>
  </thead>
  <tbody>
    <?php 
       include 'conexion.php';

       $sql="SELECT * FROM libros";
       $resultado = mysqli_query($conexion,$sql);

        while ( $fila = mysqli_fetch_array($resultado) ) {
    ?>
    <tr>
      <th scope="row"><?php echo $fila['id_libro']; ?></th>
      <td><?php echo $fila['nombre_libro']; ?></td>
      <td><?php echo $fila['autor']; ?></td>
      <td><?php echo $fila['clasificacion']; ?></td>
      <td><?php echo $fila['n_copias']; ?></td>
      <td class="text-center">
      	<a href="eliminarlibro.php?codigo=<?php echo $fila['id_libro']; ?>" class="btn btn-danger">Eliminar</a>
      	<a href="actualizarLibro.php?codigo=<?php echo $fila['id_libro']; ?>" class="btn btn-success">Actualizar</a>

      </td>
    </tr>
    <?php
       }
     ?>
    
  </tbody>
</table>
</div>
</div>

 <br><br><br>
 <footer class="text-center">
  Instituto Nacional "Simón Bólivar" &copy
 </footer>
</body>
</html>




