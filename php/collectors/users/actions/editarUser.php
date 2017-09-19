
<?php
session_start();


include_once('../../../classes/People.php');
include_once('../../../classes/Users.php');
  include_once('../UserCollector.php');

$userCollectorObj = new UserCollector();

$idU = $_GET["id"];
$idP=$_GET["pid"];

$objUser = $userCollectorObj->showUser($idU);
$objPeople = $userCollectorObj->showPeople($idP);


if (isset($_SESSION['MiSession'])) {
			echo '<script language="javascript">';
			echo 'alert("No tiene autorización para esta página.");document.location.href="../../../../index.php"';
			echo '</script>';
		}


if (isset($_SESSION['MiAdmin'])){




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

  #echo "<p> Hola Usuario: " . $_SESSION['MiSesion']. "    <a href='salir.php' class='btn btn-info' role='button'>Salir</a>";
 

  echo "<li><p class='navbar-brand'> Bienvenido Usuario: " . $_SESSION['MiAdmin'] . "</p></li>";
  echo "<li><a href='../../users/actions/salir.php'><span class='glyphicon glyphicon-log-out'></span> Salir </a></li>";
  echo "</ul>";
  echo "</div>";
  echo "</nav>";



  ?>

<div class="container">
	<div class="row">

  <?php

    echo '<form class="form-horizontal" action="editUser.php?id=' .$idU .'&pid='.$idP.'" method="post">';
   
  ?>
		
    <div class="form-group">

    <p>Seccion Persona</p>
      <label class="control-label col-sm-2" for="fname">Nombre:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $objPeople->getPeopleName();?>"/>
      </div>
      <label class="control-label col-sm-2" for="lname">Apellidos:</label>
      <div class="col-sm-10">          
        <input type="text" value="<?php echo $objPeople->getPeopleSurname();?>" class="form-control" id="lname" name="lname"/>
      </div>
       <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">          
        <input type="text"  value="<?php echo $objPeople->getPeopleEmail();?>" class="form-control" id="email" name="email"/>
      </div>

    <p>Seccion Usuario</p>

      <label class="control-label col-sm-2" for="user">Nombre de usuario:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" value="<?php echo $objUser->getUserUsername();?>" id="user" name="user"/>
      </div>
      <label class="control-label col-sm-2" for="pass">Contraseña:</label>
      <div class="col-sm-10">          
        <input type="text" value="<?php echo $objUser->getUserPassword();?>" class="form-control" id="pass" name="pass"/>
     
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" value="Guardar">Guardar</button>
        <a href="usersCrud.php">Cancelar</a>
      </div>
    </div>
  </form>
	</div>
	
</div>





    

</div>
</body>
</html>
<?php } ?>
