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
//Obtener el valor del ID que viene del metodo GET a traves de http
$id=$_GET["id"];
echo "valor de id es". $id;
include_once("../PortionCollector.php");
include_once("../../../classes/Portions.php");
$PortionCollectorObj = new PortionCollector();
$ObjPortion = $PortionCollectorObj->showPortion($id);
print_r($ObjPortion);
?>
<div class="container">
  <h2>Editar el Ingrediente</h2>
  <form class="form-horizontal" action="portionUpdate.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="Usuario">Id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="ingrediente" name="id" value="<?php echo $ObjPortion->getIdPortions(); ?>" readonly/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Ingredients:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="ingrediente1" name="portion" value="<?php echo $ObjPortion->getPortion(); ?>" autofocus required/>
      </div>
    </div>    


    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" value="Guardar">Submit</button>
        <a href="portionVista.php">Cancelar</a>
      </div>
    </div>
  </form>
</div>
</body>
</html>