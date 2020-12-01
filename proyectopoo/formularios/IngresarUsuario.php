<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Usuarios</title>
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
    <h2 class="text-center">Registro usuario</h2>
<form class="form-horizontal" role="form" method="post" action="CodigoIngresar.php">


  <!--campo nombre de usuario-->
  <div class="form-group " style="display: flex; justify-content: center">
    <label for="nombre_usuario" class="col-lg-2 control-label ">Nombre Usuario</label>
    <div class="col-lg-5 center">
      <input type="text" class="form-control" name="nombre_usuario"
             placeholder="Ingrese un nombre de usuario">
    </div>
  </div>
  
  <!--campo de nombres-->
  <div class="form-group " style="display: flex; justify-content: center">
    <label for="nombres" class="col-lg-2 control-label ">Nombres</label>
    <div class="col-lg-5 center">
      <input type="text" class="form-control" name="nombres"
             placeholder="Ingrese nombres">
    </div>
  </div>


  <!--campo de apellidos-->
  <div class="form-group " style="display: flex; justify-content: center">
    <label for="apellidos" class="col-lg-2 control-label ">Apellidos</label>
    <div class="col-lg-5 center">
      <input type="text" class="form-control" name="apellidos"
             placeholder="Ingrese apellidos">
    </div>
  </div>


  <!--campo de la especialidad del estudiante--> 
  <div class="form-group" style="display: flex; justify-content: center">
    <label for="especialidad" class="col-lg-2 control-label">Técnico</label>
    <div class="col-lg-5">
      <input type="text" class="form-control" name="especialidad" 
             placeholder="Ingrese su especialidad">
    </div>
  </div>


  <!--campo del nivel academico del usuario-->
  <div class="form-group" style="display: flex; justify-content: center">
    <label for="nivel" class="col-lg-2 control-label">Nivel Academico</label>
    <div class="col-lg-5">
      <input type="text" class="form-control" name="nivel" 
             placeholder="Ingrese su nivel academico">
    </div>
  </div>


  <!--campo de la seccion del usuario-->
  <div class="form-group" style="display: flex; justify-content: center">
    <label for="seccion" class="col-lg-2 control-label">Sección</label>
    <div class="col-lg-5">
      <input type="text" class="form-control" name="seccion" 
             placeholder="Ingrese su sección">
    </div>
  </div>

  
  <!--campo de carnet-->
  <div class="form-group" style="display: flex; justify-content: center">
    <label for="carnet" class="col-lg-2 control-label">Carnet</label>
    <div class="col-lg-5" >
      <input type="text" class="form-control" name="carnet"
             placeholder="Ingrese número de carnet">
    </div>
  </div>





  <div class="form-group" style="display: flex; justify-content: center">
    <div class=" col-lg-2">
      <button type="submit" class="btn btn-primary">Registrarse</button>
    </div>
  </div>
</form>
</div>


<br>
<br>
<br>
<br>
 <footer class="text-center">
  Instituto Nacional "Simón Bolivar" &copy
 </footer>S

</body>
</html>