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

//Obtener el valor del ID que viene del metodo GET a traves de http

$id="";
$recipes_id="";
$users_id="";

include_once("../RecipesUsersCollector.php");
include_once("../../../classes/Recipes_users.php");

$RecipesUsersCollectorObj = new RecipesUsersCollector();
$ObjRecipesUsers= new RecipesUsers($id,$recipes_id,$users_id);

?>

<div class="container">
  <h2>New Recipes Users</h2>
  <form class="form-horizontal" action="formdemocreate.php" method="post">
    
   <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Recipes Id:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" name="recipes_id" value="<?php echo $ObjRecipesUsers->setRecipesId($recipes_id); ?>" autofocus required/>
    </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="Usuario">Users id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="users_id" value="<?php echo $ObjRecipesUsers->setUserId($users_id); ?>" autofocus required/>
    </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" value="Guardar">Enviar</button>
        <a href="ListRecipesUsers.php">Cancelar</a>
      </div>
    </div>
  </form>
</div>
      }
</body>
</html>
