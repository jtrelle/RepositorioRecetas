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
<?php 
$name=$_POST["name"];
$id=$_POST["id"];
echo "Edicion en proceso... </br>";
include_once("IllnessCollector.php");
$IllnessCollectorObj = new IllnessCollector();
$IllnessCollectorObj->updateIllness($id,$name);
echo "Id: ". $id . " Actualizado a: " . $name . "</br>";
?>
<div><a href="illnesslist.php" class="btn btn-info" role="button">Volver al Inicio</a></div>
</body>
</html>