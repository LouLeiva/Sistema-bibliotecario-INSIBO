<?php
include_once "conexion.php";

if(isset($_POST['enviar'])){

  $buscar = $_POST['buscar'];

  $SQL = "SELECT * FROM libros WHERE nombre_libro LIKE('%$buscar%') AND tipo='digital'";

  $result = mysqli_query($conexion,$SQL);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Búsqueda</title>
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
            <a class="nav-link" href="RecursosImpresos.php">Recursos Impresos</a>
          </li>
          <li class="nav-item"> 
            <a class="btn btn-danger" href="Sesion.php">Salir</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>

    <br><br><br>


  <form action="" method="POST">
    <div class="form-group" style="display: flex; justify-content: center;">
      <input name="buscar" type="text" placeholder="Buscar">
      <input name="enviar" type="submit"> 
    </div>
     
  </form>
 
 <br><br><br> 
  <div class="container">
<div class="row">
<table class="table table-hover">
  <thead style="background: dodgerblue; opacity: 0.5; color: white">
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Libros</th>
        <th scope="col">Nombre Archivo</th>
        <th scope="col">Acción</th>

      </tr>
    </thead>

    <tbody>
      <?php foreach($result as $val) :?>
      <tr>
        <td><?php echo $val['id_libro']; ?></td>
        <td><?php echo $val['nombre_libro']; ?></td>
        <td><?php echo $val['archivo']; ?></td>
        <td class="text-center">
        <a href="descargar.php?nombre=<?php echo $val['archivo']; ?>" class="btn btn-primary">Descargar</a>

      </td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>

</body>
</html>