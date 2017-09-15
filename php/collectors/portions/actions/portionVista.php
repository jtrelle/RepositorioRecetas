<?php
include_once("../PortionCollector.php");

session_start();
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
      <a class="navbar-brand" href="#">Clases PHP</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><p class='text-info'> Bienvenido Usuario: xxxx</p></li>
      <li><a href='../../users/actions/salir.php'><span class='glyphicon glyphicon-log-out'></span> Salir </a></li> 
    </ul> 
  </div>

</nav>


<?php


$id =1;

$PortionCollectorObj = new PortionCollector();
  echo "<div class='container'>";
  echo "<table class='table'>";
  echo "  <thead>";
  echo "   <tr>";
  echo "   <th>Id</th>";
  echo "   <th>Porcion</th>";   
  echo "   <th>Acciones</th>"; 
  echo "   </tr>";
  echo " </thead>";
  echo "<tbody>";

foreach ($PortionCollectorObj->showPortions() as $c){
  echo "<tr>";
  echo "<td>" . $c->getIdPortions() . "</td><td>" . $c->getPortion() . "</td>";  
  echo "<td>      <a href='portionEdit.php?id=".$c->getIdPortions()."' class='btn btn-info' role='button'>Editar</a>      ";
  echo "<a href='portionDelete.php?id=".$c->getIdPortions()."' class='btn btn-info' role='button'>Eliminar</a> </td>";      
  echo "</tr>"; 
}
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "<div><a href='portionInsert.php' class='btn btn-info' role='button'>New Portion</a></div></div>";

  echo "</ul>";
  echo "</div>";
  echo "</nav>";


  ?>




</body>
</html>

 



