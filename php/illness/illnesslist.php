<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Illness List</title>
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
<div class="container">

<?php

include_once("IllnessCollector.php");

$id =2;

$IllnessCollectorObj = new IllnessCollector();
  echo "<div class='container'>";
  echo "<table class='table'>";
  echo "  <thead>";
  echo "   <tr>";
  echo "   <th>Id</th>";
  echo "   <th>Illness</th>";
  echo "   <th>Accions</th>";
  echo "   </tr>";
  echo " </thead>";
  echo "<tbody>";

foreach ($IllnessCollectorObj->showsIllness() as $c){
  echo "<tr>";
  echo "<td>" . $c->getId() . "</td><td>" . $c->getName() . "</td>";
  echo "<td>      <a href='illnessedit.php?id=".$c->getId()."' class='btn btn-info' role='button'>Editar</a>      ";
  echo "<a href='illnessdelete.php?id=".$c->getId()."' class='btn btn-info' role='button'>Eliminar</a> </td>";
  echo "</tr>"; 
  echo "</tr>"; 
}

echo "</tbody>";
echo "</table>";
echo "</div>";
echo "<div><a href='illnessinsert.php' class='btn btn-info' role='button'>New Illness</a></div></div>";
  ?>
</div>
</body>
</html>