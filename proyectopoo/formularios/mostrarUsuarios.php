<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Usuarios</title>
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
            <a class="nav-link" href="mostrarLibros.php">Libros</a>
          </li>
          <li class="nav-item"> 
            <a class="btn btn-danger" href="Sesion.php">Salir</a>
          </li>
          
        </ul>
      </div>
      </div>
    </nav>


<br><br><br><br><br>
<div style="display: flex;justify-content: flex-end; margin-right: 100px ">
</div>
<!--tabla-->
<div class="container">
<div class="row">
<table class="table table-hover">
  <thead style="background: dodgerblue; opacity: 0.5; color: white">
    <tr>

      <th scope="col">#</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Especialidad</th>
      <th scope="col">Nivel</th>
      <th scope="col">Sección</th>
      <th scope="col">Carnet</th>
      <th scope="col" class="text-center">Acciones</th>

    </tr>
  </thead>
  <tbody>
    <?php 
       include 'conexion.php';

       $sql="SELECT * FROM registro";
       $resultado = mysqli_query($conexion,$sql);

        while ( $fila = mysqli_fetch_array($resultado) ) {
    ?>
    <tr>
      <th scope="row"><?php echo $fila['id_Usuario']; ?></th>
      <td><?php echo $fila['nombres']; ?></td>
      <td><?php echo $fila['apellidos']; ?></td>
      <td><?php echo $fila['especialidad']; ?></td>
      <td><?php echo $fila['nivel']; ?></td>
      <td><?php echo $fila['seccion']; ?></td>
      <td><?php echo $fila['carnet']; ?></td>
      <td class="text-center">
        <a href="eliminarusuario.php?cod=<?php echo $fila['id_Usuario']; ?>" class="btn btn-danger">Eliminar</a>
        <a href="actualizarusuario.php?cod=<?php echo $fila['id_Usuario']; ?>" class="btn btn-success">Actualizar</a>

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