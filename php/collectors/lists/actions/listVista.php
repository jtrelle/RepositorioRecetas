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

if (isset($_SESSION['MiAdmin'])){

  echo "<li><p class='navbar-brand'> Bienvenido Usuario: " . $_SESSION['MiAdmin'] . "</p></li>";
  echo "<li><a href='../../users/actions/salir.php'><span class='glyphicon glyphicon-log-out'></span> Salir </a></li>";
  echo "</ul>";
  echo "</div>";
  echo "</nav>";
  }
$id =1;

include_once("../ListCollector.php");

$ListCollectorObj = new ListCollector();
  echo "<div class='container'>";
  echo "<table class='table'>";
  echo "  <thead>";
  echo "   <tr>";
  echo "   <th>Id</th>";  
  echo "   <th>Categoria</th>";
  echo "   <th>Acciones</th>"; 
  echo "   </tr>";
  echo " </thead>";
  echo "<tbody>";

foreach ($ListCollectorObj->showLists() as $c){
  echo "<tr>";
  echo "<td>" . $c->getIdList() . "</td><td>" . $c->getListName() . "</td>";  
  echo "<td>      <a href='listEdit.php?id=".$c->getIdList()."' class='btn btn-info' role='button'>Editar</a>      ";
  echo "<a href='listDelete.php?id=".$c->getIdList()."' class='btn btn-info' role='button'>Eliminar</a> </td>";      
  echo "</tr>"; 
}
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "<div><a href='listInsert.php' class='btn btn-info' role='button'>New List</a></div></div>";

  echo "</ul>";
  echo "</div>";
  echo "</nav>";


?>

</body>
</html>
