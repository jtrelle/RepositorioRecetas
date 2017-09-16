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
$name = $_POST["name"];
$description = $_POST["description"];
$listid =$_POST["listid"];
$preparation = $_POST["preparation"];
$image=$_POST["image"];
$id=$_POST["id"];

include_once("../RecipesCollector.php");

$RecipesCollectorObj = new RecipesCollector();
$RecipesCollectorObj->updateRecipes($id, $image, $preparation, $listid, $description, $name);

echo '<script language="javascript">';
echo 'alert("Actualizacion del id ' . $id . ' con el nombre '. $name .' en la base de datos");document.location.href="recipeslist.php"';
echo '</script>';
?>

</body>
</html>
