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


      
$id=$_POST["id"];
$recipes_id=$_POST["recipes_id"];
$users_id=$_POST["users_id"];

include_once("../RecipesUsersCollector.php");

$RecipesUsersCollectorObj = new RecipesUsersCollector();
$RecipesUsersCollectorObj->updateRecipesUsers($id,$recipes_id,$users_id);
echo '<script language="javascript">';
echo 'alert("Actualizacion del id ' . $id . ' en la base de datos");document.location.href="ListRecipesUsers.php"';
echo '</script>';
?>

</body>
</html>
  
  <?php } ?>
