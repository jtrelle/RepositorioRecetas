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
      <li><a href='../../users/actions/salir.php'><span class='glyphicon glyphicon-log-out'></span> Salir </a></li> 
    </ul> 
  </div>

</nav>
<?php
//Obtener el valor del ID que viene del metodo GET a traves de http
$id=$_GET["id"];
echo "valor de id es". $id;

include_once("../RolesCollector.php");
include_once('../../../dataBase/Collector.php');

$RolesCollectorObj = new RolesCollector();
$ObjRoles = $RolesCollectorObj->showRole($id);
print_r($ObjRoles);
?>


<div class="container">
  <h2>EDITAR</h2>
  <form class="form-horizontal" action="UpdateRoles.php" method="post">

    <div class="form-group">
      <label class="control-label col-sm-2" for="Usuario">Id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="id" value="<?php echo $ObjRoles->getIdRole(); ?>" readonly/>
    </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Role:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" name="role" value="<?php echo $ObjRoles->getRole(); ?>" autofocus required/>
    </div>
    </div>


    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" value="Guardar">Submit</button>
        <a href="ListRoles.php">Cancelar</a>
      </div>
    </div>
  </form>
</div>
</body>
</html>
