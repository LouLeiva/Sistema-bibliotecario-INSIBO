<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
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
            <a class="nav-link" href="../index.php">Inicio</a>
          </li>
          
        </ul>
      </div>
      </div>
    </nav>

    <div class="fondo mt-5">
      <h1 class="text-center">Iniciar session</h1>
      <div class="col-md-4 offset-md-4">
        <?php
          session_start();
          if(isset($_SESSION['error'])) :?>
            <div class="alert alert-primary" role="alert">
              Usuario o contraseña incorrecto!
            </div>
      
        <?php unset($_SESSION['error']); endif  ?>
        <form action="comprobacionSesion.php" method="POST">
          <div class="form-group">
            <input name="usuario" type="text" class="form-control" placeholder="Usuario o carnet">
          </div>
          <div class="form-group">
            <input name="clave" type="password" class="form-control" placeholder="Clave o carnet">
          </div>
          <input type="submit" class="btn btn-primary btn-block">
        </form>
      </div>
    </div>



</body>
</html>