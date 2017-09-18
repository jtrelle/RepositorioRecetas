<!-- <?php
/*session_start();

$id=$_GET["id"];
include_once('../UserCollector.php');
$UserCollectorObj = new UserCollector();
$UserCollectorObj->cambiarRol($id);

echo '<script language="javascript">';
			echo 'alert("Rol cambiado");document.location.href="usersCrud.php"';
			echo '</script>';
*/
?> -->










<?php
session_start();
if (!isset($_SESSION['MiAdmin'])) {
			echo '<script language="javascript">';
			echo 'alert("No tiene autorización para esta página.");document.location.href="../../../../index.php"';
			echo '</script>';
		}



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




$id=$_GET["id"];
$username=$_GET["u"];
$rol=$_GET["r"];

include_once("../UserCollector.php");


$UserCollectorObj = new UserCollector();



  ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
            <?php
               echo '<form class="form-foto" method="POST" action="cambioRol.php?id='. $id. '" enctype="multipart/form-data">'

               ?>


                    <label for="">Usuario</label>
                  <?php 
                  	echo '<input type="text" value="'. $username.'" class="field left" readonly>';
                  	echo "<label for=''>Rol actual</label>";
                  	echo '<input type="text" value="'. $rol.'" class="field left" readonly>';
                  	echo "<label for=''>Roles</label>";
                  	echo " <select name='comboRoles'>";



                  	foreach ($UserCollectorObj->showRoles() as $c){
                  		echo "<option value=". $c->getIdRole() .">".$c->getRole()."</option>";
				
				
                  	}
                  	echo "</select> ";


                  ?>
                 
                   
                    <input type="submit" value="Cambiar rol">
                </form>
            </div>
        </div>
    
    </div>
</section>




    

</div>
</body>
</html>






























