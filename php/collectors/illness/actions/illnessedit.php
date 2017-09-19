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


  



  #echo "<p> Hola Usuario: " . $_SESSION['MiSesion']. "    <a href='salir.php' class='btn btn-info' role='button'>Salir</a>";
 

  echo "<li><p class='navbar-brand'> Bienvenido Usuario: " . $_SESSION['MiAdmin'] . "</p></li>";
  echo "<li><a href='../../users/actions/salir.php'><span class='glyphicon glyphicon-log-out'></span> Salir </a></li>";
  echo "</ul>";
  echo "</div>";
  echo "</nav>";




//Obtener el valor del ID que viene del metodo GET a traves de http
$id=$_GET["id"];
#echo "valor de id es". $id;
include_once("../IllnessCollector.php");
include_once("../../../classes/Illness.php");
$IllnessCollectorObj = new IllnessCollector();
$ObjIllness = $IllnessCollectorObj->showIllness($id);
#print_r($ObjIllness);

echo "<div class='container'>";
echo  "<h2>Edit Illness</h2>";
echo  "<form class='form-horizontal' action='illnessupdateindatabase.php' method='post'>";
echo    "<div class='form-group'>";
echo      "<label class='control-label col-sm-2' for='Usuario'>Id:</label>";
echo      "<div class='col-sm-10'>";
echo        "<input type='text' class='form-control' name='id' value='<?php echo $ObjIllness->getId(); ?>' readonly/>";
echo"      </div>
    </div>";
echo    "<div class='form-group'>
      <label class='control-label col-sm-2' for='pwd'>Name:</label>
      <div class='col-sm-10'>          
        <input type='text' class='form-control'ch name='name' value='<?php echo $ObjIllness->getName(); ?>' autofocus required/>
      </div>
    </div>
    <div class='form-group'>        
      <div class='col-sm-offset-2 col-sm-10'>
        <button type='submit' class='btn btn-default' value='Guardar'>Submit</button>
        <a href='illnesslist.php' >Cancelar</a>
      </div>
    </div>
  </form>

</div>";
<?php } ?>
</body>
</html>
