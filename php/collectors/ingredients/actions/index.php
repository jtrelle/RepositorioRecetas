



<!DOCTYPE html>
<html lang="en">
<head>
  <title>FORM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Clases PHP</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
    </ul>
  </div>
</nav>
<?php
session_start();
#METDO GET
#$nombre = $_GET['nombre'];
#$apellido = $_GET['apellido'];
#echo "Usuario: " . $nombre . ", Apellido: " . $apellido;
$_SESSION['MiSesion']=$_POST['username'];


#METODO POST
$username = $_POST['username'];
$password = $_POST['password'];
echo "<div class='panel panel-default'><div class='panel-body'>Bienvenido: " . $username . ", Clave: " . $password . "<br/><a href='login.php' class='btn btn-info' role='button'>Volver</a></div></div>";
?>

</body>
</html>
