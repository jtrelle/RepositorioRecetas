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
//Obtener el valor del ID que viene del metodo GET a traves de http
$name="";
$id="";
include_once("IllnessCollector.php");
include_once("Illness.php");
$IllnessCollectorObj = new IllnessCollector();
$ObjIllness = new Illness($id,$name);
?>
<div class="container">
  <h2>New Illness</h2>
  <form class="form-horizontal" action="illnesscreateindatabase.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" name="nombre" value="<?php echo $ObjIllness->setName($name); ?>" />
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" value="Guardar">Submit</button>
        <a href="illnesslist.php">Cancelar</a>
      </div>
    </div>
  </form>
</div>
</body>
</html>