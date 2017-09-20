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



  echo "<li><p class='navbar-brand'> Bienvenido Usuario: " . $_SESSION['MiAdmin'] . "</p></li>";
  echo "<li><a href='../../users/actions/salir.php'><span class='glyphicon glyphicon-log-out'></span> Salir </a></li>";
  echo "</ul>";
  echo "</div>";
  echo "</nav>";




//Obtener el valor del ID que viene del metodo GET a traves de http
$id=$_GET["id"];

include_once("../IllnessRecipesCollector.php");
include_once("../../../classes/IllnessRecipes.php");

$IllnessRecipesCollectorObj = new IllnessRecipesCollector();
$ObjIllnessRecipes = $IllnessRecipesCollectorObj->showIllnessRecipes($id);

include_once("../../recipes/RecipesCollector.php");
include_once("../../illness/IllnessCollector.php");

$illness= new IllnessCollector();
$illnessList=$illness->showsIllness();

$recipes=new RecipesCollector();
$recipesList=$recipes->showsRecipes();

?>

<div class="container">
  <h2>Edit Illness Recipes</h2>
  <form class="form-horizontal" action="illnessrecipesupdateindatabase.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2">Id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" for="Usuario" name="id" value="<?php echo $ObjIllnessRecipes->getId(); ?>" readonly/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Illness:</label>
      <div class="col-sm-10">          
        <select name="illnessid">
        <?php
          $cont=0;
          $id=0;
          $combobit="";
         foreach ($illnessList as $datos){ //Hace foreach de cada row del fetch de la base
          $cont=0;
          $id=0;
            foreach ($datos as $datosx){ //Hace foreach de cada row del fetch de la base
              if($cont==1)
              {
                if($ObjIllnessRecipes->getIllnessId()==$id)
                  $combobit .="<option value='".$id."' selected>".$datosx."</option>";
                else
                  $combobit .="<option value='".$id."'>".$datosx."</option>";
              }
              else
              {
                $cont=$cont+1;
                if($cont==1)
                $id=$datosx;
              }
            }
          }
          echo $combobit;
            
        ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Recipes:</label>
      <div class="col-sm-10">          
        <select name="recipesid">
        <?php
          $cont=0;
          $id=0;
          $combobit="";
         foreach ($recipesList as $datos){ //Hace foreach de cada row del fetch de la base
          $cont=0;
          $id=0;
            foreach ($datos as $datosx){ //Hace foreach de cada row del fetch de la base
              
              if($cont==5)
              {
                if($ObjIllnessRecipes->getRecipesId()==$id)
                  $combobit .="<option value='".$id."' selected>".$datosx."</option>";
                else
                  $combobit .="<option value='".$id."'>".$datosx."</option>";
              }
              else
              {
                $cont=$cont+1;
                if($cont==1)
                $id=$datosx;
              }
            }
          }
          echo $combobit;
            
        ?>
        </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" value="Guardar">Submit</button>
        <a href="illnessrecipeslist.php" >Cancelar</a>
      </div>
    </div>
  </form>
</div>
</body>
</html>
<?php } else 
{
  echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../../index.php'>";     
} ?> 
