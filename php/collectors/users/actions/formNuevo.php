
<?php
session_start();




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Choice Administration</title>
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
      <a class="navbar-brand" href="../../../admin/adminhome.php">Administracion</a>

      <a class="navbar-brand" href="../../../../index.php">Choice Home</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      


<?php

if (isset($_SESSION['MiSession'])) {
			echo '<script language="javascript">';
			echo 'alert("No tiene autorización para esta página.");document.location.href="../../../../index.php"';
			echo '</script>';
		}


  #echo "<p> Hola Usuario: " . $_SESSION['MiSesion']. "    <a href='salir.php' class='btn btn-info' role='button'>Salir</a>";
 

  echo "<li><p class='navbar-brand'> Bienvenido Usuario: " . $_SESSION['MiAdmin'] . "</p></li>";
  echo "<li><a href='salir.php'><span class='glyphicon glyphicon-log-out'></span> Salir </a></li>";
  echo "</ul>";
  echo "</div>";
  echo "</nav>";



  ?>

<div class="container">
	<div class="row">
		<form class="form-horizontal" action="newUser.php" method="post">
    <div class="form-group">

    <p>Seccion Persona</p>
      <label class="control-label col-sm-2" for="fname">Nombre:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="fname" name="fname"/>
      </div>
      <label class="control-label col-sm-2" for="lname">Apellidos:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="lname" name="lname"/>
      </div>
       <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="email" name="email"/>
      </div>

    <p>Seccion Usuario</p>

      <label class="control-label col-sm-2" for="user">Nombre de usuario:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="user" name="user"/>
      </div>
      <label class="control-label col-sm-2" for="pass">Contraseña:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pass" name="pass"/>
     
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" value="Guardar">Crear</button>
        <a href="usersCrud.php">Cancelar</a>
      </div>
    </div>
  </form>
	</div>
	
</div>
  

</div>
</body>
</html>
