<?php
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
      <li><a href='salir.php'><span class='glyphicon glyphicon-log-out'></span> Salir </a></li> 
    </ul> 
  </div>

</nav>

<?php 

$recipes_id=$_POST["recipes"];
$portions_id=$_POST["portion"];
$ingredient=$_POST["ing"];
$id=$_POST["id"];

echo "Insercion de datos en proceso... </br>";
include_once("../IngredientCollector.php");
$IngredientCollectorObj = new IngredientCollector();
$IngredientCollectorObj->createIngredient($ingredient, $recipes_id, $portions_id);
echo"Insercion de: " . $ingredient . $recipes_id . $portions_id . " en la base</br>";
?>
<div><a href="ingredientesVista.php">Volver al Inicio</a></div>
</body>
</html>