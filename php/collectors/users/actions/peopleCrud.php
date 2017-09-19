<?php
session_start();

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
      <a class="navbar-brand" href="../../../admin/adminhome.php">Administracion</a>

      <a class="navbar-brand" href="../../../../index.php">Choice Home</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      


<?php




	



  #echo "<p> Hola Usuario: " . $_SESSION['MiSesion']. "    <a href='salir.php' class='btn btn-info' role='button'>Salir</a>";
 

  echo "<li><p class='navbar-brand'> Bienvenido Usuario: " . $_SESSION['MiAdmin'] . "</p></li>";
  echo "<li><a href='salir.php'><span class='glyphicon glyphicon-log-out'></span> Salir </a></li>";
  echo "</ul>";
  echo "</div>";
  echo "</nav>";





include_once("../UserCollector.php");

$id =1;

$PeopleCollectorObj = new UserCollector();
  echo "<div class='container'>";

  echo "<table class='table'>";
  echo "  <thead>";
  echo "   <tr>";
  echo "   <th>Id</th>";
  echo "   <th>Nombre</th>"; 
  echo "   <th>Apellido</th>";  
  echo "   <th>Email</th>";
  echo "   </tr>";
  echo " </thead>";
  echo "<tbody>";

foreach ($PeopleCollectorObj->showPersonas() as $c){
  echo "<tr>";

 echo "<td>" . $c->getIdPeople() . "</td><td>" . $c->getPeopleName() . "</td><td>" . $c->getPeopleSurname() . "</td><td>".$c->getPeopleEmail()."</td><td>";

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

	  <?php 
}
else 
{
  echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../../index.php'>";     
}
?> 


