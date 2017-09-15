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
      


<?php
if (isset($_SESSION['MiSesion'])){
  #echo "<p> Hola Usuario: " . $_SESSION['MiSesion']. "    <a href='salir.php' class='btn btn-info' role='button'>Salir</a>";
  echo "<li><p class='text-info'> Bienvenido Usuario: " . $_SESSION['MiSesion'] . "</p></li>";
  echo "<li><a href='salir.php'><span class='glyphicon glyphicon-log-out'></span> Salir </a></li>";
  echo "</ul>";
  echo "</div>";
  echo "</nav>";

include_once("DemoCollector.php");

$id =1;

$DemoCollectorObj = new DemoCollector();
  echo "<div class='container'>";
  echo "<table class='table'>";
  echo "  <thead>";
  echo "   <tr>";
  echo "   <th>Id</th>";
  echo "   <th>Nombre</th>"; 
  echo "   <th>Acciones</th>"; 
  echo "   </tr>";
  echo " </thead>";
  echo "<tbody>";

foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<tr>";
  echo "<td>" . $c->getIdDemo() . "</td><td>" . $c->getNombre() . "</td>";
  echo "<td>      <a href='formdemoedit.php?id=".$c->getIdDemo()."' class='btn btn-info' role='button'>Editar</a>      ";
  echo "<a href='formdemodelete.php?id=".$c->getIdDemo()."' class='btn btn-info' role='button'>Eliminar</a> </td>";      
  echo "</tr>"; 
}

echo "</tbody>";
echo "</table>";
echo "</div>";
echo "<div><a href='formdemoinsert.php' class='btn btn-info' role='button'>New Demo</a></div></div>";

}else{
  echo "</ul>";
  echo "</div>";
  echo "</nav>";
  ?>



    
<div class="container">
  <h2>Form</h2>
  <form class="form-horizontal" action="index.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="Usuario">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="usuario" placeholder="Ingrese su usuario" name="username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Ingrese su password" name="password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
    
  </form>
</div>
</body>
</html>

<?php } ?>



