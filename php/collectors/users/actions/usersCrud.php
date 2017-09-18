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
			echo 'alert("No tiene autorización para esta página.");document.location.href="../../index.php"';
			echo '</script>';
		}


if (isset($_SESSION['MiAdmin'])){


	



  #echo "<p> Hola Usuario: " . $_SESSION['MiSesion']. "    <a href='salir.php' class='btn btn-info' role='button'>Salir</a>";
 

  echo "<li><p class='navbar-brand'> Bienvenido Usuario: " . $_SESSION['MiAdmin'] . "</p></li>";
  echo "<li><a href='salir.php'><span class='glyphicon glyphicon-log-out'></span> Salir </a></li>";
  echo "</ul>";
  echo "</div>";
  echo "</nav>";





include_once("../UserCollector.php");

$id =1;

$UserCollectorObj = new UserCollector();


  echo "<div class='container'>";
  echo "<div><a href='formNuevo.php' class='btn btn-info pull-right' role='button'>Crear nuevo Usuario</a></div>";
  echo "<table class='table'>";
  echo "  <thead>";
  echo "   <tr>";
  echo "   <th>Id</th>";
  echo "   <th>Username</th>"; 
  echo "   <th>Password</th>";  
  echo "   <th>Image</th>";
  echo "   <th>Persona id</th>";
  echo "   <th>Rol</th>";
  echo "   <th></th>";
  echo "   <th></th>";
    echo "   <th></th>";
  echo "   </tr>";
  echo " </thead>";
  echo "<tbody>";

  $list = new UserCollector();
 


	
	
	
	
	
	
	
	
	
	
	
	
	



foreach ($UserCollectorObj->showUsers() as $c){
  echo "<tr>";

 echo "<td>" . $c->getIdUsers() . "</td><td>" . $c->getUserUsername() . "</td><td>" . $c->getUserPassword() . "</td><td><img class='img-responsive' style='width: 100px;' src='../../../" . $c->getUserImage() . "'/></td><td>".$c->getUserPeopleId()."(". $c->getUserNombre().")</td><td>". $c->getUserRol() . "</td><td><a href='cambiarRol.php?id=" .$c->getIdUsers() ."&u=". $c->getUserUsername() ."&r=". $c->getUserRol() ."' class='btn btn-info' role='button'>Cambiar Rol</a></td>
 <td>
 <a href='cambiarFoto.php?id=" .$c->getIdUsers() ."' class='btn btn-info' role='button'>
 Editar Foto</a></td>
 <td><a href='editarUser.php?id=" .$c->getIdUsers() ."&pid=" .$c->getUserPeopleId() ."' class='btn btn-info' role='button'>Editar</a></td><td><a href='eliminar.php?id=" .$c->getIdUsers() ."' class='btn btn-info' role='button'>Eliminar</a></td>";






/*
  echo "<td>" . $c->getIdUsers() . "</td><td>" . $c->getUserUsername() . "</td><td>" . $c->getUserPassword() . "</td><td><img class='img-responsive' style='width: 100px;' src='../../../" . $c->getUserImage() . "'/></td><td>".$c->getUserPeopleId()."(". $c->getUserNombre().")</td><td>". $c->getUserRol() . "</td><td><a href='cambiarRol.php?id=" .$c->getIdUsers() ."' class='btn btn-info' role='button'>Cambiar Rol</a></td>
 <td>
 <a href='cambiarFoto.php?id=" .$c->getIdUsers() ."' class='btn btn-info' role='button'>
 Editar Foto</a></td>
 <td><a href='editarUser.php?id=" .$c->getIdUsers() ."&pid=" .$c->getUserPeopleId() ."' class='btn btn-info' role='button'>Editar</a></td><td><a href='eliminar.php?id=" .$c->getIdUsers() ."' class='btn btn-info' role='button'>Eliminar</a></td>";*/









 /* echo "<td>" . $c->getIdUsers() . "</td><td>" . $c->getUserUsername() . "</td>" . "</td><td>" . $c->getUserPassword() . "</td>" . "</td><td>" . $c->getUser() . "</td>";*/
  /*echo "<td>      <a href='formdemoedit.php?id=".$c->getIdDemo()."' class='btn btn-info' role='button'>Editar</a>      ";
  echo "<a href='formdemodelete.php?id=".$c->getIdDemo()."' class='btn btn-info' role='button'>Eliminar</a> </td>";      
  echo "</tr>"; */
}

echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</div>";


?>








<?php








}



else{
  echo "</ul>";
  echo "</div>";
  echo "</nav>";
  ?>



    

</div>
</body>
</html>

<?php } ?>


